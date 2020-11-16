@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="row">
    <div class="x_panel">
      <div class="x_title">
        <h3>Gallery Images</h3>
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
            <a href="{{ route('admin.add_image_form') }}" class="btn btn-success">Add Images</a>
          </div>
      </div>
      <div class="x_content">
       @foreach($gallery as $item)
        <div class="col-md-4">
          <div class="thumbnail" style="height: 300px; width: 300px;" >
            <div class="image view view-first" style="height: 300px; width: 300px;">
              <img style="width: 100%; display: block;" src="{{asset('images/gallery/thumb/'.$item->image.'')}}" />
            </div>
           
          </div>
          <div>
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