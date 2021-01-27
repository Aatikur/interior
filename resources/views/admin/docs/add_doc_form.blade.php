
@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin-top:50px;">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Add New Document</h2>
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
                        {{ Form::open(['method' => 'post','route'=>'admin.add_doc','enctype'=>'multipart/form-data']) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Category Name')}}
                            {{ Form::text('name',null,array('class' => 'form-control','placeholder'=>'Enter  name')) }}
                            @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Image">Image <small>(370*221)</small></label>
                            <input type="file" name="image" class="form-control">
                            @if($errors->has('image'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="File">File <small>(less than 10MB)</small></label>
                            <input type="file" name="file" class="form-control">
                            @if($errors->has('file'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('file') }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" id="chkc" onclick="check()">Submit</button>
                            <a href="{{route('admin.docs_list')}}" class="btn btn-warning">Back</a>

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
 function check(){
     $('#chkc').html('<i class="fa fa-spinner fa-spin"></i>');
 }
</script> 
 @endsection
