<?php

namespace App\Http\Controllers\Backend;

use App\Models\Comment;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{

   public function AllBlogCategory(){

    $category = BlogCategory::latest()->get();
    return view('backend.category.blog_category', compact('category'));
   }






   public function StoreBlogCategory(Request $request){

    //store daata in BlogCategory table
             BlogCategory::insert([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace
                (' ', '-',$request->category_name)),


             ]);
             $notification = array(
                'message' => 'Blog Category created successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.blog.category')->with($notification);

            }


            //EDITING
            public function EditBlogCategory($id){
                $categories = BlogCategory::findOrFail($id);
                return response()->json($categories);
                }

                public function UpdateBlogCategory(Request $request){
                $cat_id = $request->cat_id;
        BlogCategory::findOrFail($cat_id)->update([
        'category_name' => $request->category_name,
        'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),

                     ]);
                     $notification = array(
                        'message' => 'BlogCategory updated successfully',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('all.blog.category')->with($notification);
                    }
                public function DeleteBlogCategory($id){
                BlogCategory::findOrFail    ($id)->delete();

                $notification = array(
                    'message' => 'BlogCategory Deleted successfully',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
                }
    public function  AllPost(){
       $post = BlogPost::latest()->get();
       return view('backend.post.all_post', compact('post'));

    }
    public function  AddPost(){
        $blogcat = BlogCategory::latest()->get();
        return view('backend.post.add_post', compact('blogcat'));

     }

     public function StorePost(Request $request){

        $image = $request->file('post_image');
        $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(370,250)->save('uploads/post/'.$name_gen);
        $save_url = 'uploads/post/'.$name_gen;

BlogPost::insert([
'blogcat_id' => $request->blogcat_id,
'user_id' => Auth::user()->id,
'post_title' => $request->post_title,
'post_slug' => strtolower(str_replace('','-', $request->post_title)),
'short_descp' => $request->short_descp,
'long_descp' => $request->long_descp,
'post_tags' => $request->post_tags,
'created_at' => Carbon::now(),

// 'state_image' => $request->post_title,
'post_image' => $save_url,
]);

$notification = array(
'message' => 'BlogPost Inserted Succesffully',
'alert-type' => 'success'
);
return redirect()->route('all.post')->with($notification);
//}


        }

public function EditPost($id)
{
    $blogcat = BlogCategory::latest()->get();
    $post = BlogPost::findOrFail($id);
    return view('backend.post.edit_post', compact('post','blogcat'));

}


        public function UpdatePost(Request $request)
        {
            $post_id = $request->id;
            if($request->file('post_image')){



                $image = $request->file('post_image');
                $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(370,250)->save('uploads/post/'.$name_gen);
                $save_url = 'uploads/post/'.$name_gen;

        BlogPost::findOrFail($post_id)->update([
            'blogcat_id' => $request->blogcat_id,
            'user_id' => Auth::user()->id,
            'post_title' => $request->post_title,
            'post_slug' => strtolower(str_replace('','-', $request->post_title)),
            'short_descp' => $request->short_descp,
            'long_descp' => $request->long_descp,
            'post_tags' => $request->post_tags,
            // 'created_at' => Carbon::now(),
        ]);

        $notification = array(
        'message' => ' Blog post Updated  Succesffully',
        'alert-type' => 'success'
        );
        return redirect()->route('all.post')->with($notification);


            }
            else{

                BlogPost::findOrFail($post_id)->update([
                    'post_name' => $request->post_name,
                    // 'state_image' => $save_url,
                    ]);

                    $notification = array(
                    'message' => ' Post Updated  Succesffully',
                    'alert-type' => 'success'
                    );
                    return redirect()->route('all.post')->with($notification);
                        }
                    }
        public function DeletePost($id){
            $post = BlogPost::findOrFail($id);
            $img = $post->post_image;
             unlink($img);

             BlogPost::findOrFail($id)->delete();
             $notification = array(
                'message' => ' Deleted Succesffully',
                'alert-type' => 'success',
                );
                return redirect()->back()->with($notification);
                    }

public function BlogDetails($slug){
       $blog = BlogPost::where('post_slug',$slug)->first();
       $tags = $blog->post_tags;
       $tags_all = explode(',',$tags);//explode the coma because the tags are many
       $bcategory = BlogCategory::latest()->get();
       $dpost = BlogPost::latest()->limit(3)->get();
       return view('frontend.blog.blog_details', compact('blog',
    'tags_all', 'bcategory','dpost'));


                    }

public function BlogCatList($id)

{
$blog = BlogPost::where('blogcat_id',$id)->get();
$breadcat =BlogCategory::where('id', $id)->first();
$bcategory = BlogCategory::latest()->get();
$dpost = BlogPost::latest()->limit(3)->get();
return view('frontend.blog.blog_cat_list', compact('blog',
'breadcat', 'bcategory','dpost'));
}
public function  BlogList(){
    $blog = BlogPost::latest()->get();
    // $breadcat =BlogCategory::where('id', $id)->first();
    $bcategory = BlogCategory::latest()->get();
    $dpost = BlogPost::latest()->limit(3)->get();
    return view('frontend.blog.blog_list', compact('blog',
     'bcategory','dpost'));
    }
//}
//Inserting data into a table
public function StoreComment(Request $request){
    $pid = $request->post_id;
    Comment::insert([
'user_id'=>Auth::user()->id,//get authenticated userlogin
'post_id'=> $pid,
'parent_id'=>null,
//the name of the fiels in the controller eg is subject and therequestedd field us subject
'subject'=>$request->subject,
'message'=>$request->message,
'created_at'=>Carbon::now(),

    ]);

    $notification = array(
        'message' => ' Message Sent Succesffully',
        'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
            }



          public function AdminBlogComment(){
            //getting al data where paremt id is null
$comment= Comment::where('parent_id', null)->latest()->get();
return view('backend.comment.comment_all', compact('comment'));


          }
public function AdminCommentReply($id){
    //commenting id is matching with requested id
    $comment = Comment::where('id',$id)->first();
    return view('backend.comment.reply_comment', compact('comment'));

}
public function ReplyMessage(Request $request){
    //we are takinmg the ids
  $id = $request->id;
  $user_id = $request->user_id;
  $post_id = $request->post_id;
Comment::insert([
'user_id'=>Auth::user()->id,//get authenticated userlogin
'post_id'=> $post_id,
'parent_id'=>$id,
//the name of the fiels in the controller eg is subject and therequestedd field us subject
'subject'=>$request->subject,
'message'=>$request->message,
'created_at'=>Carbon::now(),

    ]);

    $notification = array(
        'message' => 'Reply Sent Succesffully',
        'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
            }


}










//}



//}





    //A
//}
