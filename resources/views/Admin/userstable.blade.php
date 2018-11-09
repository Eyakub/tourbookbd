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
                                    <th>Username</th>
                                    <th>Picture</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Date Of Birth</th>
                                    <th>Street Address</th>
                                    <th>City</th>
                                    <th>Zip Code</th>
                                    <th>Country</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                @foreach($showUserData as $data)
                                    <tbody>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->username}}</td>
                                    <td>
                                        <img src="{{asset('storage/user_images/'.$data->src_user)}}" height="48" width="48">
                                    </td>
                                    <td>{{$data->first_name}}</td>
                                    <td>{{$data->last_name}}</td>
                                    <td>{{$data->phone_number}}</td>
                                    <td>{{$data->date_of_birth}}</td>
                                    <td>{{$data->street_address}}</td>
                                    <td>{{$data->city}}</td>
                                    <td>{{$data->zip_code}}</td>
                                    <td>{{$data->country}}</td>
                                    <td>
                                        <a class="btn btn-danger"
                                           href="{{URL::to('/admin-panel/delete-user/'.$data->id)}}"
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