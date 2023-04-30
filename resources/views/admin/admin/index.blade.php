@extends('admin.adminlayouts.adminlayout')
@section('head')
    <!-- BEGIN PAGE LEVEL STYLES -->
    {!! HTML::style("assets/global/plugins/select2/select2.css") !!}
    {!! HTML::style("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css") !!}
    <!-- END PAGE LEVEL STYLES -->
@stop
@section('mainarea')
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
        {{$pageTitle}}
        <small>Admin List</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{route('admin.dashboard.index')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{route('admin.admin.index')}}">Admin</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Admin List</a>
            </li>
        </ul>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div id="load">
                @if(Session::get('success'))
                    <div class="alert alert-success">{!! Session::get('success') !!}</div>
                @endif
            </div>
            <a href="{{route('admin.admin.create')}}" class="btn green">
                Add New Admin <i class="fa fa-plus"></i>
            </a>
            <hr>
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-users"></i>Admin List
                    </div>
                    <div class="tools">
                        <div class="btn-group pull-right">
                            <a href="javascript:exportEmployees()" class="btn yellow">
                                <i class="fa fa-file-excel-o"></i> Export
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_employees">
                        <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <!-- END PAGE CONTENT-->
    {{--DELETE MODAL CALLING--}}
    @include('admin.include.delete-modal')
    {{--DELETE MODAL CALLING END--}}
@stop
@section('footerjs')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {!! HTML::script("assets/global/plugins/select2/select2.min.js") !!}
    {!! HTML::script("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js") !!}
    {!! HTML::script("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js") !!}
    <!-- END PAGE LEVEL PLUGINS -->
    <script>
        var table = $('#sample_employees').dataTable({
            "cache": true,
            "bProcessing": true,
            "bServerSide": true,
            "bDestroy": true,
            "order": [[0, "desc"]],
            "ajax": "{{ route("admin.admin.ajaxlist") }}",
            "aoColumns": [
                {'sClass': 'center', 'bSortable': true},
                {'sClass': 'center', 'bSortable': false},
                {'sClass': 'center', 'bSortable': false},
                {'sClass': 'center', 'bSortable': false},
            ],
            "fnDrawCallback": function () {
                Metronic.init();
            },
            "sPaginationType": "full_numbers",
            "language": {
                "emptyTable": "No data available"
            },
            "fnInitComplete": function (oSettings, json) {
                Metronic.init();
            }
        });

        // export employees
        function exportEmployees() {
            var searchValue = $('.dataTables_filter input').val();
            window.location.href = 'admin/export?s=' + searchValue;
        }

        // Show Delete Modal
        function del(id) {
            $('#deleteModal').modal('show');
            $("#deleteModal").find('#info').html('Are you sure you want to delete');
            $('#deleteModal').find("#delete").off().on("click", function () {
                var url = "{{ route('admin.admin.destroy',':id') }}";
                url = url.replace(':id', id);
                var token = "{{ csrf_token() }}";
                $.easyAjax({
                    type: 'DELETE',
                    url: url,
                    data: {'_token': token},
                    container: "#deleteModal",
                    success: function (response) {
                        if (response.status == "success") {
                            $('#deleteModal').modal('hide');
                            table.fnDraw();
                        }
                    }
                });

            });
        }
    </script>
@stop
