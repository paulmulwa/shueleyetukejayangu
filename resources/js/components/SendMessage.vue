<template>
<div> 
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Lets Chat
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-5" id="exampleModalLabel">Chat With {{receiverid}},{{receivername}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form @submit.prevent= "sendMsg()" > 
        <div class="modal-body">
          <div class="form-group">
            <textarea class="form-control" v-model="form.msg" id="" rows="5"
            placeholder="Enter Message">
        </textarea>
    <span class="text-success" v-if="succMessage.message">
        {{succMessage.message }}</span>
<!-- </span> -->
    <span class="text-danger" v-if="errors.msg">{{ errors.msg[0] }}</span>
<!-- </span -->


          </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Send Message</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
    </form>

      </div>
    </div>
  </div>
</div>
</template>
<script>
export default {
    props: ['receiverid','receivername'],

    // method:{
        data(){
            return{
                form:{
                msg:"",
                receiver_id: this.receiverid,
    },
    errors:{},
    succMessage:{},
}
},
methods: {
    sendMsg(){
        axios.post('/send-message',this.form)
        .then((res) => { 
            this.msg = "";
            this.succMessage = res.data;
            console.log(res.data);
            // }
        }).catch((err) => {
     this.errors = err.response.data.errors;
    })
}
}
}
</script>