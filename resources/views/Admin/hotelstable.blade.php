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
                                    <th>Address</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                @foreach($showHotelData as $data)
                                    <tbody>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->hotels_title}}</td>
                                    <td>{{$data->hotels_address}}</td>
                                    <td>{{$data->hotels_category}}</td>
                                    <td>{{$data->hotels_description}}</td>

                                    <td>
                                        <a class="btn btn-info"
                                           href="{{URL::to('/edit-hotel-information/'.$data->id)}}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger"
                                           href="{{URL::to('/delete-user/'.$data->id)}}"
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