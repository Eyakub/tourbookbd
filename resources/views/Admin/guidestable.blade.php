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

    {{--<div class="breadcrumbs">
        --}}{{--<div class="col-sm-4">
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
        </div>--}}{{--
    </div>--}}

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
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Picture</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>About</th>
                                    <th>Quote</th>
                                    <th>Languages</th>
                                    <th>Education</th>
                                    <th>Experience</th>
                                    <th>Certificates</th>
                                    <th>NID</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                @foreach($guides as $data)
                                    <tbody>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->guide_name}}</td>
                                    <td>{{$data->guide_username}}</td>
                                    <td>
                                        <img src="{{asset('storage/guide_pic/'.$data->guide_picture)}}" height="48" width="48">
                                    </td>
                                    <td>{{$data->guide_address}}</td>
                                    <td>{{$data->guide_number}}</td>
                                    <td>{{$data->guide_about}}</td>
                                    <td>{{$data->guide_quote}}</td>
                                    <td>{{$data->guide_languages}}</td>
                                    <td>{{$data->guide_education}}</td>
                                    <td>{{$data->guide_experience}}</td>
                                    <td>{{$data->guide_certificates}}</td>
                                    <td>{{$data->guide_nid}}</td>
                                    <td>
                                        <a class="btn btn-success"
                                           href="{{URL::to('/admin-panel/published-guide/')}}">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>

                                        <a class="btn btn-info"
                                           href="{{URL::to('/admin-panel/edit-guide-information/'.$data->id)}}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger"
                                           href="{{URL::to('/admin-panel/delete-guide/'.$data->id)}}"
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