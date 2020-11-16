
@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin-top:50px;">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Update Slider</h2>
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
                        {{Form::model($slider, ['method' => 'put','route'=>['admin.update_slider',$slider->id],'enctype'=>'multipart/form-data'])}}
                        <div class="well" style="overflow:auto">
                            <div class="form-row mb-3">                                
                                <label for="content">Slider Content<span><b style="color: red"> * </b></span></label>
                                <input class="form-control" value="{{ $slider->content }}" name="content" >
                                @if($errors->has('content'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="form-row mb-3">
                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="size">Images <span><b style="color: red"> * </b></span></label>
                                    <input type="file" name="images" class="form-control">
                                    @if($errors->has('images'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('images') }}</strong>
                                        </span>
                                    @enderror
                                </div>
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

 