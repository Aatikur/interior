
@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin-top:50px;">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Update Image For Gallery</h2>
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
                        {{Form::model($gallery_data, ['method' => 'put','route'=>['admin.update_image',$gallery_data->id],'enctype'=>'multipart/form-data'])}}
                       <div class="form-group">
                            {{ Form::label('Caption', 'Caption')}} <span style="color:red;">*</span>
                            <input type="text" class="form-control" name="caption" value="{{  $gallery_data->caption}}">
                           
                            @if($errors->has('caption'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('caption') }}</strong>
                                </span>
                            @enderror
                        </div>

                       <div class="form-group">
                            {{ Form::label('image', 'Image')}} 
                            <input type="file" class="form-control" name="image">
                            @if($errors->has('image'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @enderror
                        </div>
                       

                        <div class="form-group">
                         
                            {{ Form::submit('Submit', array('class'=>'btn btn-success')) }}
                            <a href="{{route('admin.gallery_list')}}" class="btn btn-warning">Back</a>

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
