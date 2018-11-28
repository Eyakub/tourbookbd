<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<html lang="en">
<head>
    @include('layouts.metadata')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice Details - TourBookBD</title>

    <!-- Favicons-->
@include('layouts.baricon')

<!-- CSS -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet">

    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i"
          rel="stylesheet">

    <style>
        .invoice-title h2, .invoice-title h3 {
            display: inline-block;
        }

        .table > tbody > tr > .no-line {
            border-top: none;
        }

        .table > thead > tr > .no-line {
            border-bottom: none;
        }

        .table > tbody > tr > .thick-line {
            border-top: 2px solid;
        }
    </style>

    <!--[if lt IE 9]-->
    <script src="{{URL::asset('js/html5shiv.min.js')}}"></script>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">
                <h2>Invoice</h2>
                <h3 class="pull-right">Order # {{$invoice->id}}</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Billed To:</strong><br>
                        {{$user->first_name}} {{$user->last_name}}<br>
                        {{$user->street_address}}<br>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Order Date:</strong><br>
                        {{Carbon\Carbon::parse($invoice->created_at)->format('m d y')}}<br>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Payment Method:</strong><br>
                        BKash<br>
                        {{$user->email}}
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <td><strong>Tour Name</strong></td>
                                <td class="text-center"><strong>Adult</strong></td>
                                <td class="text-center"><strong>Kids</strong></td>
                                <td class="text-right"><strong>Totals</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                            <tr>
                                <td>{{$tourtitle->tour_title}}</td>
                                <td class="text-center">{{$invoice->booking_adult_no}}</td>
                                <td class="text-center">{{$invoice->booking_children_no}}</td>
                                <td class="text-right">BDT {{$invoice->booking_total_price}}</td>
                            </tr>

                            <tr>
                                <td class="thick-line"></td>
                                <td class="thick-line"></td>
                                <td class="thick-line text-center"><strong>Total</strong></td>
                                <td class="thick-line text-right">BDT {{$invoice->booking_total_price}}</td>
                            </tr>

                            </tbody>
                        </table>

                    </div>

                    <form method="post" action="{{route('download.invoice')}}">
                        {{csrf_field()}}
                        <input type="submit" class="btn-primary" value="Download">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>