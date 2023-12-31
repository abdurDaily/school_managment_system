<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
// use Intervention\Image\Image;
    
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('image_upload');
    }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
      
        if($request->hasFile('image')) {
            $image = Image::make($request->file('image'));
            $imageName = time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('images/');
            $image->save($destinationPath.$imageName);
            $destinationPathThumbnail = public_path('images/thumbnail/');
            $image->resize(100,100);
            $image->save($destinationPathThumbnail.$imageName);
  
            /**
             * Write Code for Image Upload Here,
             *
             * $upload = new Images();
             * $upload->file = $imageName;
             * $upload->save();            
            */
  
            return back()
                ->with('success','Image Upload successful')
                ->with('imageName',$imageName);
        }
       
        return back();
    }
}