

@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin-top:50px;">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Add New Slider</h2>
                    <div class="clearfix"></div>
                </div>

                 <div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                </div>

                
                <div>
                    <div class="x_content">
                        
                            {{ Form::open(['method' => 'post','route'=>'admin.add_slider','enctype'=>'multipart/form-data']) }}
                            <div class="well" style="overflow: auto" >
                                <div class="form-row mb-3">                                
                                    <label for="content">Slider Content<span><b style="color: red"> * </b></span></label>
                                    <input class="form-control" name="content" >
                                    @if($errors->has('content'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    {{ Form::label('image', 'Image')}} <span style="color:red;">
                                    <input type="file" class="form-control" name="images" >
                                    @if($errors->has('image'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                           {{ Form::submit('Submit', array('class'=>'btn btn-success')) }}
                            <a href="{{route('admin.slider_list')}}" class="btn btn-warning">Back</a>
                         </div>
                        {{ Form::close() }}
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="clearfix"></div>
</div>
 @endsection
 @section('script')
    
     
@endsection
