<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Image;
use File;
class GalleryController extends Controller
{
    public function galleryList(){
        $gallery = Gallery::get();
        return view('admin.gallery.gallery_list',compact('gallery'));
    }

    public function addImageForm(){
        return view('admin.gallery.add_image_form');

    }

    public function addImage(Request $request){
        $this->validate($request, [
            'caption'   => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            for ($i = 0; $i < count($request->file('image')); $i++) {
                $gallery = new Gallery();
                $image = $request->file('image')[$i];
                $image_name = $i . time() . date('Y-M-d') . '.' . $image->getClientOriginalExtension();
                $destinationPath = base_path() . '/public/images/gallery/';
                $img = Image::make($image->getRealPath());
                $img->save($destinationPath . '/' . $image_name);
                
                $destination = base_path() . '/public/images/gallery/thumb/';
                $img = Image::make($image->getRealPath());
                $img->resize(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destination . '/' . $image_name);
                $gallery->caption = $request->input('caption')[$i];
                $gallery->image = $image_name;
                $gallery->save();
            }
            return redirect()->back()->with('message',' Image Added Successfull');
        } else {
            return redirect()->back()->with('error','Something Wrong Please Try again');
        }

    }

    public function deleteImage($id){
       
        $prev_image = Gallery::where('id',$id)->first();
        $prev_img_delete_path = base_path().'/public/images/gallery/'.$prev_image->image;
        $prev_img_delete_path_thumb = base_path().'/public/images/gallery/thumb/'.$prev_image->image;
        if ( File::exists($prev_img_delete_path)) {
            File::delete($prev_img_delete_path);
        }

        if ( File::exists($prev_img_delete_path_thumb)) {
            File::delete($prev_img_delete_path_thumb);
        }
        Gallery::where('id',$id)->delete();
        return redirect()->back();
    }

    public function imageEditForm($id){
        $gallery_data = Gallery::where('id',$id)->first();
        return view('admin.gallery.image_edit_form',compact('gallery_data'));

    }

    public function updateImage(Request $request,$id){
        $this->validate($request, [
            'caption'   => 'required',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $caption = $request->input('caption');
        $image_name = null;
        if($request->hasfile('images'))
        {
            $cat_prev_image = Gallery::where('id',$id)->first();

            $path = base_path().'/public/images/gallery/thumb';
            File::exists($path) or File::makeDirectory($path, 0777, true, true);
            $path_thumb = base_path().'/public/images/gallery/thumb';
            File::exists($path_thumb) or File::makeDirectory($path_thumb, 0777, true, true);

        	$image = $request->file('images');
            $destination = base_path().'/public/images/gallery/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time())."-".uniqid()."."."$image_extension";
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);


            $thumb_path = base_path().'/public/images/gallery/thumb/'.$image_name;
            $img = Image::make($image->getRealPath());
            $img->resize(null,400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumb_path);

            $prev_img_delete_path = base_path().'/public/images/gallery/'.$cat_prev_image->image;
            $prev_img_delete_path_thumb = base_path().'/public/images/gallery/thumb/'.$cat_prev_image->image;
            if ( File::exists($prev_img_delete_path)) {
                File::delete($prev_img_delete_path);
            }

            if ( File::exists($prev_img_delete_path_thumb)) {
                File::delete($prev_img_delete_path_thumb);
            }

            Gallery::where('id',$id)
            ->update([
               
                'caption' =>$caption,
                'image'=>$image_name,
               
            ]);

            return redirect()->back()->with('message','Gallery Updated Successfully');
        }else{
            Gallery::where('id',$id)
            ->update([
                'caption' =>$caption,
            ]);
            return redirect()->back()->with('message','Gallery Updated Successfully');
        }
    }
}
