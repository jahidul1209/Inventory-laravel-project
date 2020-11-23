<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class PostController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }

    public function InsertPost(request $request){
        $validatedData = $request->validate([
        'title' => 'required|unique:posts',
        'author' => 'required|max:15',
        'tag' => 'required',
        'description' => 'required',
    ]);
        $post = new Post;
        $post->title = $request->title;
        $post->author = $request->author;
        $post->tag = $request->tag;
        $post->description = $request->description;
        $savepost = $post->save();

        if ($savepost){
        	$notification = array(
        		'massege' => 'Post Adder Successfully',
        		'alert-type'=>'success'
        	);
        	return redirect()->back()->with($notification);
        }else{
        	return redirect()->back();
        }
    }
        public function AllPost(){
    	$pos = Post::all();
        return view('all-post')->with('post',$pos);
    }

       public function DeletePost($id){
           $post = Post::find($id);
           $post->delete();
            return redirect()->back();
   }
        public function EditPost($id){
           $editpost = Post::findorfail($id);
           return view('edit-post')->with('edtpost' , $editpost);
   }
        public function UpdatePost(request $request ,$id){
            $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required|max:15',
            'tag' => 'required',
            'description' => 'required',
    ]);
        $post = Post::findorfail($id);
        $post->title = $request->title;
        $post->author = $request->author;
        $post->tag = $request->tag;
        $post->description = $request->description;
        $update = $post->save();

         if ($update){
            $notification = array(
                'massege' => 'Post Update Successfully',
                'alert-type'=>'success'
            );
            return redirect()->Route('all-posts')->with($notification);
        }else{
            return redirect()->back();
        }
   }
           public function ViewPost($id){
           $viwpost = Post::find($id);
           return view('view-post')->with('viwpost' , $viwpost);
   }
   public function News(){
    return view('news-add');
   }

    public function InsertNews(request $request){
        $validatedData = $request->validate([
        'title' => 'required|unique:posts',
        'author' => 'required|max:15',
        'image' => 'required',
        'details' => 'required',
    ]);
        $data = array();
        $data['title'] = $request->title;
         $data['author'] = $request->author;
          $data['details'] = $request->details;
          $image=$request->image;

          if ($image){
            $image_name= str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name =$image_name.'.'.$ext;
            $upload_path= 'public/post/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            if($success){
                $data['image']=$image_url;
                $news = DB::table('newss')->insert($data);
                if($news){
                    $notification=array(
                        'messege' => 'Post Inserted Successfully',
                        'alert-type' =>'success'
                    );
                    return redirect()->route('news-add')->with($notification);
                }else{
                    return redirect()->back();
                }
            }
            
            }else{
                return redirect()->back();
                }
}
    public function AllNews(){
        $news = DB::table('newss')->get();
        return view('all-news',compact('news'));
    }

    public function DeleteNews($id){
        $dltimg =DB::table('newss')->where('id' ,$id)->first();
        $image_path = $dltimg->image;
        unlink( $image_path);

        $detetenews = DB::table('newss')->where('id',$id)->delete();
    }
        public function SingleNews($id){
        $singlenews = DB::table('newss')->where('id' ,$id)->first();
        return view('single-news',compact('singlenews'));
    }

}