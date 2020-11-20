<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Slider;
use App\Models\Contact;
class WebController extends Controller
{
    public function gallery(){
        $gallery = Gallery::get();
       
        return view('web.portfolio.portfolio',compact('gallery'));
    }

    public function index(){
        $category = Category::where('status',1)->where('status',1)->get();
        $slider = Slider::get();
        return view('web.index',compact('category','slider'));
    }

    public function fetchSubCat($category_id){
        $sub_category = SubCategory::where('cat_id',$category_id)->where('status',1)->get();
        return $sub_category;

    }

    public function getImage($sub_cat_id){
        $image = SubCategory::where('id',$sub_cat_id)->where('status',1)->first();
        $html='<div class="au-input-group text-center">
            <img src="'.asset('images/sub_category/'.$image->image).'" id="material-preview" class="preview text-center">
        </div>';
        return $html;
    }

    public function calculate(Request $request,$sub_cat_id,$length,$breadth){
        
        $sub_cat = SubCategory::where('id',$sub_cat_id)->where('status',1)->first();
        $price = $sub_cat->price;
        $total_amount = $length*$breadth*$price;
        return $total_amount;
    }

    public function addContact(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email' =>'required',
            
        ]);
        $message = $request->input('message');
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        if(isset($message) && !empty($$message) )
        {
            $contact->message = $request->input('message');
        }
        $contact->save();
        if($contact->save()){
            return redirect()->route('web.response',['status'=>1]);
        }else{
            return redirect()->route('web.response',['status'=>2]);
        }

    }

    public function response($status){
        return view('web.contact.response',compact('status'));
        

    }
}
