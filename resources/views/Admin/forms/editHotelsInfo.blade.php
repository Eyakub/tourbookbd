@extends('Admin.adminlayout')

@section('admin_panel_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Update </strong>Hotel Information

            </div>
            <div class="card-body card-block">
                {!! Form::open(['url' => '/admin-panel/update-hotel-information', 'method'=>'post',
                'enctype' => 'multipart/form-data', 'name'=>'editHotelInfo']) !!}

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="hotels_title"
                               value="{{$datapass->hotels_title}}"
                               placeholder="Enter the name of the place"
                               class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        <input type="hidden" value="{{$datapass->id}}" name="hotel_id">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address </label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="hotels_address"
                                                        value="{{$datapass->hotels_address}}"
                                                        placeholder="Enter the address of the place"
                                                        class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Select
                            District</label></div>
                    <div class="col-12 col-md-9">
                        <select name="district_id" id="select" class="form-control">
                            <option value="{{$datapass->district_id}}">{{$oneDiss->district_name}}</option>
                            @foreach($districts as $dis)
                                <option value="{{$dis->id}}">{{$dis->district_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cost </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="hotels_per_cost"
                               value="{{$datapass->hotels_per_cost}}"
                               placeholder="Enter the amount"
                               class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input"
                                                     class=" form-control-label">Description</label></div>
                    <div class="col-12 col-md-9"><textarea name="hotels_description" id="textarea-input" rows="9"
                                                           placeholder="Content..."
                                                           class="form-control">{{$datapass->hotels_description}}</textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Select
                            Category</label></div>
                    <div class="col-12 col-md-9">
                        <select name="hotel_category" id="select" class="form-control">
                            <option value="{{$datapass->category_id}}">{{$datapass->category->hotel_category_name}}</option>
                            @foreach($categorys as $category)
                                <option value="{{$category->id}}">{{$category->hotel_category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Small
                            Cover</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="hotels_small_cover"
                               class="form-control-file">
                        <input class="form-control-file" value="{{$datapass->hotels_small_cover}}"
                               name="hotels_small_cover_old" type="hidden">
                        <img src="{{asset('storage/small_cover/'.$datapass->hotels_small_cover)}}" width="97" height="50">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Large
                            Cover</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="hotels_large_cover"
                               class="form-control-file">
                        <input class="form-control-file" value="{{$datapass->hotels_large_cover}}"
                               name="hotels_large_cover_old" type="hidden">
                        <img src="{{asset('storage/large_cover/'.$datapass->hotels_large_cover)}}" width="97" height="50">
                    </div>
                </div>
                {{--<div class="row form-group">
                    <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple
                            File input</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-multiple-input"
                                                        name="file-multiple-input" multiple=""
                                                        class="form-control-file"></div>
                </div>--}}
                <input type="submit" value="Submit" class="btn btn-primary">
                {!! Form::close() !!}
            </div>
            <div class="card-footer">
                @if(Session::has('success'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection