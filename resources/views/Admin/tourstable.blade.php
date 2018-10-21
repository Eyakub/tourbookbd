@extends('Admin.adminlayout')

@section('admin_panel_content')
    <script type="text/javascript">
        {{--this function getting confirmation from user to delete category or not--}}
        function check_delete() {
            chk = confirm("Confirm Delete ?");
            if (chk) {
                return true;
            }
            else {
                return false;
            }
        }
    </script>

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Table</a></li>
                        <li class="active">Data table</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">

                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                @foreach($showData as $data)
                                    <tbody>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->tour_title}}</td>
                                    <td>{{$data->tour_description}}</td>
                                    <td>
                                        <span class="label label-success">Published</span>
                                    </td>
                                    <td>
                                        <a class="btn btn-success"
                                           href="{{URL::to('/published-blog/')}}">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>

                                        <a class="btn btn-info"
                                           href="{{URL::to('/edit-tour-information/'.$data->id)}}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>

                                        <a class="btn btn-danger"
                                           href="{{URL::to('/delete-tour/')}}"
                                           onclick="return check_delete();">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection