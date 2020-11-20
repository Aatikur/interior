<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use File;
use Image;
class SliderController extends Controller
{
    public function sliderList(){
        $slider = Slider::orderBy('id','desc')->get();
        return view('admin.slider.slider_list',compact('slider'));
    }

    public function sliderAddForm(){
       return view('admin.slider.new_slider_form');
    }

    public function addSlider(Request $request){
       
        $this->validate($request, [
            'content'=>'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
     
        $image_name = null;
        
        if($request->hasfile('images')){
            
            $path = base_path().'/public/images/slider/thumb/';
            File::exists($path) or File::makeDirectory($path, 0777, true, true);
            $path_thumb = base_path().'/public/images/slider/thumb/';
            File::exists($path_thumb) or File::makeDirectory($path_thumb, 0777, true, true);
            $image = $request->file('images');
            $image_name = time().date('Y-M-d').'.'.$image->getClientOriginalExtension();

            //Product Original Image
            $destination = base_path().'/public/images/slider/';
            $img = Image::make($image->getRealPath());
            $img->save($destination.'/'.$image_name);

            //Product Thumbnail
            $destination = base_path().'/public/images/slider/thumb';
            $img = Image::make($image->getRealPath());
            $img->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destination.'/'.$image_name);

            $sliders = new Slider;
            $sliders->content = $request->input('content');
            $sliders->image=$image_name;
            $sliders->save();
        }
        return redirect()->back()->with('message','Slider Added Successfull');
    }

    public function deleteSlider(Request $request,$id)
    {
        $prev_image = Slider::where('id',$id)->first();
       
        $prev_img_delete_path = base_path().'/public/images/slider/'.$prev_image->image;
        $prev_img_delete_path_thumb = base_path().'/public/images/slider/thumb/'.$prev_image->image;
        if ( File::exists($prev_img_delete_path)) {
            File::delete($prev_img_delete_path);
        }

        if ( File::exists($prev_img_delete_path_thumb)) {
            File::delete($prev_img_delete_path_thumb);
        }
        
        else{
            $prev_img_delete_path = base_path().'/public/images/slider/'.$prev_image->image;
            $prev_img_delete_path_thumb = base_path().'/public/images/slider/thumb/'.$prev_image->image;
            if ( File::exists($prev_img_delete_path)) {
                File::delete($prev_img_delete_path);
            }

            if ( File::exists($prev_img_delete_path_thumb)) {
                File::delete($prev_img_delete_path_thumb);
            }

        }
            Slider::where('id',$id)
            ->delete();
            return redirect()->back();

    }

    public function sliderEditForm($id){
       
        $slider = Slider::where('id',$id)->first();

        return view('admin.slider.slider_edit_form',compact('slider'));
    }

    public function updateSlider(Request $request,$id)
    {
        $this->validate($request, [
            'content'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $content = $request->input('content');
        $image_name = null;
        if($request->hasfile('images')){
            $prev_image = Slider::where('id',$id)->first();

            $path = base_path().'/public/images/slider/';
            File::exists($path) or File::makeDirectory($path, 0777, true, true);
            $path_thumb = base_path().'/public/images/slider/thumb/';
            File::exists($path_thumb) or File::makeDirectory($path_thumb, 0777, true, true);

        	$image = $request->file('images');
            $destination = base_path().'/public/images/slider/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time())."-".uniqid()."."."$image_extension";
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);


            $thumb_path = base_path().'/public/images/slider/thumb/'.$image_name;
            $img = Image::make($image->getRealPath());
            $img->resize(null,400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumb_path);

            $prev_img_delete_path = base_path().'/public/images/slider/'.$prev_image->image;
            $prev_img_delete_path_thumb = base_path().'/public/images/slider/thumb/'.$prev_image->image;
            if ( File::exists($prev_img_delete_path)) {
                File::delete($prev_img_delete_path);
            }

            if ( File::exists($prev_img_delete_path_thumb)) {
                File::delete($prev_img_delete_path_thumb);
            }
            Slider::where('id',$id)
            ->update([
                'image'=>$image_name,
                'content'=>$content
            ]);
            return redirect()->back()->with('message','Slider Updated Successfully');
        }else{
            Slider::where('id',$id)
            ->update([
               
                'content'=>$content
            ]);
            return redirect()->back()->with('message','Slider Updated Successfully');
        }
    }
}
