@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
    	<div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:50px;">
    	    <div class="x_panel">

    	        <div class="x_title">
                    <h2>Documents List</h2>
                    <a class="btn btn-sm btn-info" style="float: right" href="{{ route('admin.docs_add_form') }}">Add New Document</a>
    	            <div class="clearfix"></div>
    	        </div>
    	        <div>
    	            <div class="x_content">
                        <table id="category" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>Sl</th>
                              <th>Name</th>
                              <th class="text-center">Image</th>
                              <th>File</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>  
                            @if (isset($docs) && !empty($docs))
                            @php
                              $count=1;
                            @endphp
                                @foreach ($docs as $item)
                                    <tr>
                                      <td>{{$count++}}</td>
                                      <td>{{$item->name}}</td>
                                      <td class="text-center"><img src="{{asset('images/docs/'.$item->image)}}" alt="image" style="max-width: 150px"></td>
                                      <td><a href="{{asset('uploads/'.$item->file).''}}" target="_blank">{{ $item->file }}</a></td> 
                                      <td>
                                        @if ($item->status == '1')
                                          <a style="background: #219e21;color: #fff;padding: 2px 10px;border-radius: 10px;" aria-disabled="true">Enabled</a>
                                        @else
                                          <a style="background: #da2722;color: #fff;padding: 2px 10px;border-radius: 10px;" aria-disabled="true">Disabled</a>
                                        @endif
                                      </td>
                                      <td>
                                        <a href="{{route('admin.delete_doc',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Delete</a>
                                        @if ($item->status == '1')
                                          <a href="{{route('admin.status',['id'=>$item->id,'status'=>2])}}" class="btn btn-sm btn-danger">Disable</a>
                                        @else
                                          <a href="{{route('admin.status',['id'=>$item->id,'status'=>1])}}" class="btn btn-sm btn-primary">Enable</a>
                                        @endif
                                       
                                      </td>
                                    </tr>
                                @endforeach
                            @else
                              <tr>
                                <td colspan="4" style="text-align: center">No Docs Found</td>
                              </tr>  
                            @endif                   
                          </tbody>
                        </table>
    	            </div>
    	        </div>
    	    </div>
    	</div>
    </div>
	</div>


 @endsection

@section('script')
     
     <script type="text/javascript">
         $(function () {
            var table = $('#category').DataTable();
        });
     </script>
    
 @endsection