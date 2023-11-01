@extends('agent.agent_dashboard')
@section('agent')
<!-- partial -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

	<div class="page-content">

        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
                <div class="card">
            {{-- <div class="card rounded"> --}}
              <div class="card-body">
     <h5 class="card-title">Agent Live  </h5>
                  {{-- </div> --}}

                  <div id="app">
                    <chat-message></chat-message>
                    </div>

                </div>
                
        

                  </div>
                </div>
                        </div>


                </div>



          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->

          <!-- right wrapper end -->
        </div>

			</div>

			<!-- partial:../../partials/_footer.html -->

			<!-- partial -->

		</div>
	</div>



@endsection
