@extends('backend.layouts.app')

@section('title')
    Admin Dashboard Team
@endsection

@push('style')
@endpush

@section('contents')

    <div class="col-lg-12">
        <h3 class="text-center"> Team Member </h3>
        <div class="float-right">
            <a href="{{route('add.Team')}}" type="button" class="btn btn-primary">Add New Member</a>
        </div>
    </div>

    {{--    show data--}}
    <div class="col-md-12">
        <!-- page start-->
        <div class="content-panel" style="padding:10px">
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

            <div class="adv-table">
                <div id="hidden-table-info_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="hidden-table-info_length" class="dataTables_length"><label><select size="1" name="hidden-table-info_length" aria-controls="hidden-table-info"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="hidden-table-info_filter"><label>Search: <input type="text" aria-controls="hidden-table-info"></label></div></div></div><table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable" id="hidden-table-info" aria-describedby="hidden-table-info_info">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th colspan="2">
                                Action
                            </th>
                        </tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        @foreach($teams as $team)
                            <tr>
                                <td><img src="{{asset('backend/lib/advanced-datatable/images/details_open.png')}}"></td>
                                <td>{{$team->name}}</td>
                                <td>{{$team->post}}</td>
                                <td><img src="{{asset('backend/img/team/'.$team->file)}}" width="120px"></td>
                                <td>
                                    <button  type="button" class="btn btn-info"><a  style="color:#fff3cd" href="{{route('edit.Team',$team->id)}}">Edit</a></button>
                                    <button type="button" class="btn btn-theme04 "><a  style="color:#fff3cd" href="{{route('delete.Team',$team->id)}}">Delete</a></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <div class="row-fluid"><div class="span6"><div class="dataTables_info" id="hidden-table-info_info">Showing 1 to 10 of 57 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
            </div>
        </div>
        <!-- page end-->
    </div>
@endsection
