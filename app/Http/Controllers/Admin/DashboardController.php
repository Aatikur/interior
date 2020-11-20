<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Gallery;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        $cat_count = Category::count();
        $sub_cat_count = SubCategory::count();
        $image_count = Gallery::count();
        $total_cnt = Contact::count();
        return view('admin.dashboard',compact('cat_count','sub_cat_count','image_count','total_cnt'));
    }

    public function changePasswordForm()
    {
        return view('admin.change_password');
    }

    public function changePassword(Request $request)
    {
        
        $this->validate($request, [
          
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'same:confirm_password'],
        ]);

        $user = Admin::where('id',1)->first();
        
        if(Hash::check($request->input('current_password'), $user->password)){
            Admin::where('id',1)->update([
               
                'password'=>Hash::make($request->input('new_password')),
            ]);
            return redirect()->back()->with('message','Password Changed Successfully');
        }else{
            return redirect()->back()->with('error','Sorry Current Password Does Not Correct');
        }
    }
 }
