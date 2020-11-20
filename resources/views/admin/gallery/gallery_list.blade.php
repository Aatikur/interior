@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="row">
    <div class="x_panel">
      <div class="x_title">
        <h3 style="display:inline">Gallery Images</h3>
        <a href="{{ route('admin.add_image_form') }}" class="btn btn-success" style="float: right">Add Images</a>
        <div class="clearfix"></div>
          <div>
             @if (Session::has('message'))
                <div class="alert alert-success" >{{ Session::get('message') }}</div>
             @endif
             @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
             @endif
          </div>
          <div style="text-align:right;">
          </div>
      </div>
      <div class="x_content">
       @foreach($gallery as $item)
        <div class="col-md-4">
          <div class="thumbnail" style="height: 200px; width: 300px;overflow:hidden" >
            <div class="image view view-first" style="margin-bottom: 10px;">
              <img style="width: auto; display: block;height: 200px;" src="{{asset('images/gallery/thumb/'.$item->image.'')}}" />
            </div>
           
          </div>
          <div style="margin-bottom: 20px;text-align:center">
            <h4 style="text-align:center;color:red">{{  ucfirst($item->caption)}}</h4>
            <a href="{{ route('admin.image_edit_form',['id'=>$item->id]) }}"  class="btn btn-success">Edit</a>
            <a href="{{ route('admin.delete_image',['id'=>$item->id]) }}"  class="btn btn-danger">Delete</a>
          </div>
        </div>
        @endforeach
        
        
      </div>
    </div>
  </div>


  
</div>


 @endsection

@section('script')
     


    
 @endsection