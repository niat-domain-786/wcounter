<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Storage;

class BlogController extends Controller
{

    public function index(){
        return view('layouts.templates.tools');
    }

    // list of blog posts for users
    public function blog(){
        $posts = Blog::where('type', 0)->paginate(7);
        
        if(!$posts){
        $posts = [];
        }
        return view('layouts.templates.blog', compact($posts, 'posts'));
    }

    public function show($slug){
        $post = Blog::where('slug', $slug)->first();
        if($post){
        return view('layouts.templates.single', compact($post, 'post'));
        }else{
        return redirect('/blog');
        }

    }

    public function store(Request $request){

        if( $request->type = 1){

        // page validation
        $v = $request->validate([
            'postType' => 'required|boolean',
            'title' => 'required|unique:blogs|max:200',
            'excerpt' => 'required',
            'slug' => 'required|unique:blogs',
            'keyword' => 'required',
            'editordata' => 'required',
        ]);

        } else{

        // blog validation
        $v = $request->validate([
            'postType' => 'required|boolean',
            'title' => 'required|unique:blogs|max:200',
            'excerpt' => 'required',
            'slug' => 'required|unique:blogs',
            'keyword' => 'required',
            'tags' => 'required',
            'image' => 'required',
            'editordata' => 'required',
        ]);

        }

        // insert data into blogs table
        $blog = new Blog();

        if($request->hasFile('image')){
            
        // image upload
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/files', $name);
        $blog->featured_image_url = $path ?? '';
                
        }

        $blog->type = $request->postType;
        $blog->title = $request->title;
        $blog->excerpt = $request->excerpt;
        $blog->slug = $request->slug;
        $blog->focus_keyword = $request->keyword ?? '';
        $blog->tags = $request->tags ?? '';
        $blog->body = $request->editordata;
        $blog->save();

        return redirect()->back()->with('success', 'New Post or Page Added!');
    }

    // list of pages and posts for admin
    public function adminPostsList(Request $request){
        if (!$request->type){ $request->type = 0; }
        $allPosts = Blog::where('type', $request->type)->paginate(10);
        return view('posts.list', compact($allPosts, 'allPosts'));
    }

    public function adminEdit($slug){

        $post = Blog::where('slug', $slug)->first();
        if($post){
        return view('posts.edit', compact($post, 'post'));
        }
        return redirect()->back()->with('error', 'Post or page Not found');

    }

    public function adminDelete(Request $request){
        $slug = $request->slug;
        $post = Blog::where('slug', $slug)->first();  
      
        if ($post) {
        Storage::delete($post->featured_image_url);
        $deleted = $post->delete();
        return redirect()->back()->with('success', 'removed successfully');
        }

        return redirect()->back()->with('error', 'Not removed');
    }

    public function adminUpdate(Request $request){

        // validation
        $v = $request->validate([
            'postType' => 'required|boolean',
            'title' => 'required|max:200',
            'excerpt' => 'required',
            'newslug' => 'required|unique:blogs',
            'keyword' => 'required',
           
            'editordata' => 'required',
        ]);
        
        // find post or page
        $blog = Blog::where('slug', $request->oldslug)->first();
        if($blog){

            if($request->hasFile('image')){

                //delete old image
                Storage::delete($blog->featured_image_url);

                // image upload
                $name = $request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('public/files', $name);
                $blog->featured_image_url = $path ?? '';
                
            }
                $blog->featured_image_url = $path ?? '';


        // insert data into blogs table
        // $blog = new Blog();
        $blog->type = $request->postType;
        $blog->title = $request->title;
        $blog->excerpt = $request->excerpt;
        $blog->slug = $request->newslug;
        $blog->focus_keyword = $request->keyword ?? '';
        $blog->tags = $request->tags ?? '';
        $blog->body = $request->editordata;
        $blog->save();

        return redirect($request->newslug)->with('success', 'Post updated !');

        }
        return redirect()->back()->with('error', 'Post or page Not found');



    }
    public function forceDelete(Request $request){
        // $flight->restore();
        // $flight->forceDelete();
        // Flight::withTrashed()
        // ->where('airline_id', 1)
        // ->restore();
        // $flight->history()->withTrashed()->get();
        // $flights = Flight::onlyTrashed()
        //         ->where('airline_id', 1)
        //         ->get();
// 
    }
}
