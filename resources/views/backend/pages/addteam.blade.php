@extends('backend.layouts.app')

@section('title')
    Admin Dashboard add team
@endsection

@push('style')
@endpush

@section('contents')

    {{--    add banner--}}
    <div class="col-lg-12">
        <h3 class="text-center"> Add Team Member </h3>
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

            <form action="{{route('create.Team')}}" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-md-3 control-label"> Name</label>
                    <div class="col-md-4">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"> Designation </label>
                    <div class="col-md-4">
                        <input type="text" name="post" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Upload Image</label>
                    <div class="controls col-md-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select file</span>
                      <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                      <input type="file" class="file" name="file">
                      </span>
                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                            <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="description"> Detail Bio </label>
                    <div class="col-md-6 ">
                        <textarea class="form-control" name="description" id="description" placeholder="Detail about the member" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <span>&nbsp;</span>
                    </div>
                    <div class="col-md-3 ">
                        <button class="btn btn-success" type="submit">upload banner data</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /form-panel -->
    </div>

@endsection
