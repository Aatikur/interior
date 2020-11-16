
@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin-top:50px;">
            <div class="x_panel">

                <div class="x_title">
                 
                        <h2>Add Image For Gallery</h2>
                    
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
                        <div class="well" style="overflow: auto" >
                        {{ Form::open(['method' => 'post','route'=>'admin.add_image','enctype'=>'multipart/form-data']) }}
                        <div id="img_div">
                            <div class="col-md-5 col-sm-12 col-xs-12 mb-3">
                                {{ Form::label('Caption', 'caption')}}
                                <input type="text" class="form-control" name="caption[]">
                                @if($errors->has('caption'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('caption') }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-5 col-sm-12 col-xs-12 mb-3">
                                {{ Form::label('image', 'Image')}} <span style="color:red;">
                                <input type="file" class="form-control" name="image[]">
                                @if($errors->has('image'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-primary" id="add_more_img_btn">Add More</button>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-5 col-sm-12 col-xs-12 mb-3">
                         
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
 @section('script')
 <script>
     var img_cnt = 0;
      $(document).on('click',"#add_more_img_btn", function(){
            var img_html = `<div id="img_div${img_cnt}"><div class="col-md-5 col-sm-12 col-xs-12 mb-3">
                                {{ Form::label('Caption', 'caption')}}
                                <input type="text" class="form-control" name="caption[]">
                                @if($errors->has('caption'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('caption') }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-5 col-sm-12 col-xs-12 mb-3">
                                {{ Form::label('image', 'Image')}} <span style="color:red;">
                                <input type="file" class="form-control" name="image[]">
                                @if($errors->has('image'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12 mb-3">
                                <button type="button" class="btn btn-sm btn-danger" onclick = "removeImage(${img_cnt})">Remove</button>
                            </div></div>`;
            $("#img_div").append(img_html);
            img_cnt++;
        });
        function removeImage(id) {
            $("#img_div"+id).remove();
            img_cnt--;
        }
</script>
     
 @endsection
