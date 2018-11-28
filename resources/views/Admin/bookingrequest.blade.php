@extends('Admin.adminlayout')

@section('admin_panel_content')
    <script type="text/javascript">
        {{--this function getting confirmation from user to delete category or not--}}
        function check_delete() {
            chk = confirm("Confirm Delete ?");
            if (chk) {
                return true;
            } else {
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
                            <strong class="card-title">Booking Request</strong>
                        </div>
                        <div class="card-body">

                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tour ID</th>
                                    <th>User ID</th>
                                    <th>Booking Date</th>
                                    <th>Booking Time</th>
                                    <th>Adult</th>
                                    <th>Kids</th>
                                    <th>Booking Cost</th>
                                    <th>Booking Status</th>
                                    <th>BKash TID</th>
                                    <th>Request Time (M-D)</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                @foreach($pending as $pen)
                                    <tbody>
                                    <td>{{$pen->id}}</td>
                                    <td>{{$pen->tour_id}}</td>
                                    <td>{{$pen->user_id}}</td>
                                    <td>{{$pen->booking_travel_date}}</td>
                                    <td>{{$pen->booking_travel_time}}</td>
                                    <td>{{$pen->booking_adult_no}}</td>
                                    <td>{{$pen->booking_children_no}}</td>
                                    <td>{{$pen->booking_total_price}}</td>
                                    <td>{{$pen->booking_status}}</td>
                                    <td>{{$pen->bkash_transaction_id}}</td>
                                    <td>{{$pen->created_at->format('m d')}}</td>
                                    <td>
                                        <a class="btn btn-info"
                                           href="{{URL::to('/admin-panel/tour/booking-request-approve/'.$pen->id)}}">
                                            <i class="halflings-icon white ok"></i>
                                        </a>

                                        <a class="btn btn-danger"
                                           href="{{URL::to('/admin-panel/tour/booking-request-reject/'.$pen->id)}}"
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