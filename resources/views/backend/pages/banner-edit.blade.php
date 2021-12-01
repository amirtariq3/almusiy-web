@extends('backend.layouts.app')

@section('title')
    Admin Dashboard banner
@endsection

@push('style')
@endpush

@section('contents')

{{--    form --}}
    <div class="col-lg-12">
        <h3 class="text-center"> Update Banner Data </h3>
        <div class="form-panel">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <form action="{{route('update.banner',$banner->id)}}" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-md-3 control-label">Banner Name</label>
                    <div class="col-md-4">
                        <input type="text" name="name" class="form-control" value="{{$banner->name}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Upload Image</label>
                    <div class="controls col-md-3">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select file</span>
                      <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                      <input type="file" class="file" name="file" value="{{$banner->file}}">
                      </span>
                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                            <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-md-3 ">
                        &nbsp;
                    </div>
                    <div class="col-md-3 offset-md-3">
                        <img src="{{asset('backend/img/banner/'.$banner->file)}}" width="120px">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-3">
                        <span>&nbsp;</span>
                    </div>
                    <div class="col-md-3 ">
                        <button class="btn btn-success" type="submit">Update banner data</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /form-panel -->
    </div>

@endsection
