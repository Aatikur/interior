<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Image;
use File;
class CategoryController extends Controller
{
    public function categoryList(){
        $category = Category::get();
        return view('admin.category.category_list',compact('category'));
    }

    public function categoryAddForm(){
        return view('admin.category.add_new_category');
    }

    public function addCategory(Request $request){
        $this->validate($request, [
            'name'   => 'required',
            
        ]);
        $name = $request->input('name');
        $category = new Category();
        $category->name=$name;
        if ($category->save()) {
            return redirect()->back()->with('message','Category Added Successfull');
        }else{
            return redirect()->back()->with('error','Something Wrong Please Try again');
        }

    }

    public function categoryEditForm($id){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $category = Category::where('id',$id)->first();
        return view('admin.category.add_new_category',compact('category'));
    }

    public function categoryStatus($id,$status){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $category = Category::where('id',$id)
        ->update([
            'status'=>$status,
        ]);
        return redirect()->back();
    }

    public function categoryUpdate(Request $request,$id){
        $this->validate($request, [
            'name'   => 'required'

        ]);
        Category::where('id',$id)
            ->update([
                'name'=>$request->input('name'),
                
            ]);
            return redirect()->back()->with('message','Category Updated Successfully');

    }

    public function subCategoryList(){
        $sub_category = SubCategory::get();
        return view('admin.subcategory.sub_category_list',compact('sub_category'));
    }

    public function subCategoryAddForm(){
        $category = Category::where('status',1)->pluck('name', 'id');
       
        return view('admin.subcategory.add_new_sub_category',compact('category'));
    }

    public function addSubCategory(Request $request){
        $this->validate($request, [
            'name'   => 'required',
            'category'=>'required',
            'price'=>'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $name = $request->input('name');
        $sub_category = new SubCategory();
        $sub_category->cat_id = $request->input('category');
        $sub_category->name=$name;
        $price = $request->input('price');
        $sub_category->price = $price;
        if ($sub_category->save()) {
        if ($request->hasFile('images')) {
          
                $image = $request->file('images');
                $image_name =  time() . date('Y-M-d') . '.' . $image->getClientOriginalExtension();
                $destinationPath = base_path() . '/public/images/sub_category/';
                $img = Image::make($image->getRealPath());
                $img->save($destinationPath . '/' . $image_name);
                
                $destination = base_path() . '/public/images/sub_category/thumb/';
                $img = Image::make($image->getRealPath());
                $img->resize(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destination . '/' . $image_name);
                $sub_category->image = $image_name;
                $sub_category->save();

        }


            return redirect()->back()->with('message','Sub Category Added Successfull');
        } else {
            return redirect()->back()->with('error','Something Wrong Please Try again');
        }

    }

    public function subCategoryStatus($id,$status){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $category = SubCategory::where('id',$id)
        ->update([
            'status'=>$status,
        ]);
        return redirect()->back();
    }

    public function subCategoryEditForm($id){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $category = Category::where('status',1)->pluck('name', 'id');
        $sub_category = SubCategory::where('id',$id)->first();
        return view('admin.subcategory.add_new_sub_category',compact('sub_category','category'));
    }

    public function subCategoryUpdate(Request $request,$id){
        $this->validate($request, [
            'name'   => 'required',
            'price'=>'required',
            'category'   => 'required',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $price = $request->input('price');
        $image_name = null;
        if($request->hasfile('images'))
        {
            $cat_prev_image = SubCategory::where('id',$id)->first();

            $path = base_path().'/public/images/sub_category/thumb';
            File::exists($path) or File::makeDirectory($path, 0777, true, true);
            $path_thumb = base_path().'/public/images/sub_category/thumb';
            File::exists($path_thumb) or File::makeDirectory($path_thumb, 0777, true, true);

        	$image = $request->file('images');
            $destination = base_path().'/public/images/sub_category/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time())."-".uniqid()."."."$image_extension";
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);


            $thumb_path = base_path().'/public/images/sub_category/thumb/'.$image_name;
            $img = Image::make($image->getRealPath());
            $img->resize(null,400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumb_path);

            $prev_img_delete_path = base_path().'/public/images/sub_category/'.$cat_prev_image->image;
            $prev_img_delete_path_thumb = base_path().'/public/images/sub_category/thumb/'.$cat_prev_image->image;
            if ( File::exists($prev_img_delete_path)) {
                File::delete($prev_img_delete_path);
            }

            if ( File::exists($prev_img_delete_path_thumb)) {
                File::delete($prev_img_delete_path_thumb);
            }

            SubCategory::where('id',$id)
            ->update([
                'name'=>$request->input('name'),
                'price' =>$price,
                'image'=>$image_name,
                'cat_id' => $request->input('category'),
            ]);

            return redirect()->back()->with('message','Sub Category Updated Successfully');
        }else{
            SubCategory::where('id',$id)
            ->update([
                'name'=>$request->input('name'),
                'price' =>$price,
                'cat_id' => $request->input('category'),
            ]);
            return redirect()->back()->with('message','Sub Category Updated Successfully');
        }
    }
   

  



}
