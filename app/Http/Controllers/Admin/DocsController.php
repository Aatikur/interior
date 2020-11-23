<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use File;
class DocsController extends Controller
{
    public function docsList(){
        $docs = Document::get();
        return view('admin.docs.docs_list',compact('docs'));
    }

    public function addDocForm(){
        return view('admin.docs.add_doc_form');
    }

    public function addDoc(Request $request){
        $this->validate($request, [
            'name'   => 'required',
            'file'=>'required|mimes:doc,pdf,docx',
        ]);
        if ($request->hasFile('file')) 
        {
          $file = $request->file('file');
          $fileName = time().'.'.$request->file->extension();  
          $request->file->move(public_path('uploads'), $fileName);
   
          $docs = new Document();
          $docs->name = $request->input('name');
          $docs->file = $fileName;
          $docs->save();
          return redirect()->back()->with('message','Docs Uploaded Successfully');
        }       
       
        else{
            return redirect()->back()->with('error','Something went wrong');
          }   
        

    }

    public function deleteDoc($id){

        $doc_details =Document::where('id',$id)->first();
        File::delete(public_path('uploads/'.$doc_details->file));
    
        Document::where('id',$id)->delete();
        return redirect()->back();
    }

    public function status($id,$status){
        $docs = Document::where('id',$id)->first();
        $docs->status = $status;
        $docs->save();

        return redirect()->back();
    }
    
}
