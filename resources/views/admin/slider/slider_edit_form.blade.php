
@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin-top:20px;">
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
                            <div class="form-row mb-30">
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-3" style="margin: 0 0 20px;padding:0">
                                    <label for="size">Images <span><b style="color: red"> * </b></span> <small>(1349*500)</small></label>
                                    <input type="file" name="images" class="form-control">
                                    @if($errors->has('images'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('images') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-3">                                
                                <label for="content">Slider Content<span><b style="color: red"> * </b></span></label>
                                <textarea class="form-control" name="content" id="content">{{ $slider->content }}</textarea>
                                @if($errors->has('content'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('content') }}</strong>
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
 <script src="{{ asset('admin/ckeditor4/ckeditor.js')}}"></script>  
 <script>
 CKEDITOR.replace( 'content', {
    height: 200,
});
</script>
 @endsection