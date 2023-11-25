<?php

namespace App\Http\Controllers\FrontEnd\Blogs;

use App\Models\Teacher;
use App\Models\Attendance;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\BlogSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

   /*********************** FRONTEND ***************/

    /**
     * BLOG INDEX
     */
    public function index(){
       $blogDetails = BlogSubCategory::with('CategoryBlog')->latest()->paginate(6);
       $blogResent = BlogSubCategory::with('CategoryBlog')->latest()->paginate(3);
       return view('FrontEnd.Blogs.index',compact('blogDetails','blogResent'));
    }
    /**
     * BLOG DETAILS 
    */
    public function postDetails($slug){
      $blogDetail = BlogSubCategory::where('slug', $slug)->with('CategoryBlog')->first();
      return view('FrontEnd.Blogs.blogDetail',compact('blogDetail'));
    }

    /*
      * BLOG DETAILS FROM HOME PAGE 
    */
    public function singleBlogDetails($slug){
      $subCategoryDetails = BlogSubCategory::with('CategoryBlog')->where('slug',$slug)->get();
      //SUB CATTEGORY SUMMEION
      $totalPost = BlogSubCategory::select('slug')->get();
      $subBlogs = count($totalPost);
      //CATEGORY SUMMATION
      $totalCategory = BlogCategory::select('title')->get();
      $totalCategory = count($totalCategory);
      //SITE BLOG POST LINK 
      $sideLink = BlogSubCategory::latest()->paginate(10);
      //BLOG CATEGORY FIND FOR SIDE LINK
      // $parentCategory = BlogSubCategory::select('blog_categorie_id')->with('CategoryBlog')->get();
      $parentCategory = BlogCategory::select('title','id')->with('SubBlog')->get();
      // dd($parentCategory);
      return view('FrontEnd.Blogs.singleBlogDetails',compact('subCategoryDetails','subBlogs','totalCategory','sideLink','parentCategory'));
    }
        
    /*
     * BLOG SEARCHING 
    */
    public function blogSearch(Request $request){
      $searchBlog = BlogSubCategory::where('title','LIKE','%'.$request->search.'%')->get();
      return view('FrontEnd.Blogs.searchBlog',compact('searchBlog'));
    }
     /*
       * ALL BLOGS LIST
     */
    public function allBlog(){
      $allBlog = BlogSubCategory::latest()->paginate(12);
      return view('FrontEnd.Blogs.allBlog',compact('allBlog')); 
    }  
    /*
      * ALL POST WITH PARENT CATEGORY
    */   
    public function blogForCategory($id){
      $blogFindByCategory = BlogSubCategory::where('blog_categorie_id',$id)->latest()->paginate(12);
      return view('FrontEnd.Blogs.allPostForCategory',compact('blogFindByCategory'));
    }




















   /*
        ********************** BACKEND **************
   */
   //** CATEGORY */
   public function category(){
    return view('Admin.Blogs.category');
   }
   
   /** CATEGORY INSERT DATA */
  public function categoryInsert(Request $request){
    
    $request->validate([
        'category' => 'required',
    ]);
    if(BlogCategory::where('title',Str::slug($request->category))->exists()){
      return redirect()->route('category.insert')->withErrors(['category' => 'this category has already tacken']);
    }
    $blogCategory = new BlogCategory();
    $blogCategory->title = Str::slug($request->category);
    $blogCategory->save();
    return back();
  }
  
  /** SUB CATEGORY */
  public function subCategory(){
    $blogCategory = BlogCategory::all();
    return view('Admin.Blogs.subCategory',compact('blogCategory'));
  }
  /**INSER SUB CATEGORY DATA */
  public function subCategoryInsert(Request $request){
    $request->validate([
        'title' => 'required',
        'image' => 'required',
        'category' => 'required',
        'blog_details' => 'required',
    ]);

    
    
    $subCategory = new BlogSubCategory();
    $subCategory->title = $request->title;
    $subCategory->slug = uniqid(Str::slug($request->title));
    
    if ($request->hasFile('image')) {
      $filePath = env('APP_URL') .'storage/'. $request->image->storeAs('blogs', $request->image->getClientOriginalName(),'public');
      $subCategory->image = $filePath;
    }
   
      
    $subCategory->author = Auth::user()->name;
    $subCategory->blog_categorie_id = $request->category;
    $subCategory->title = $request->title;
    $subCategory->blog_details = $request->blog_details;
    if($request->video){
      $subCategory->video = $request->video;
    }
    $subCategory->save();
    return back();
  }
}