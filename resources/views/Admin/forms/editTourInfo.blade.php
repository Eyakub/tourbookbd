@extends('Admin.adminlayout')

@section('admin_panel_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Update </strong>Tour Information

            </div>
            <div class="card-body card-block">
                {!! Form::open(['url' => '/update-tour-information', 'method'=>'post', 'enctype' => 'multipart/form-data', 'name'=>'editTourInfo']) !!}

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="tour_title"
                               value="{{$datapass->tour_title}}"
                               placeholder="Enter the name of the place"
                               class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        <input type="hidden" value="{{$datapass->id}}" name="tour_id">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address </label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="tour_address"
                                                        value="{{$datapass->tour_address}}"
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
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price's </label>
                    </div>
                    <div class="col-12 col-md-4">
                        <input type="text" id="text-input" name="tour_adult_price"
                               value="{{$datapass->tour_adult_price}}"
                               placeholder="Price for Adult"
                               class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}

                    </div>
                    <div class="col-12 col-md-4">
                        <input type="text" id="text-input" name="tour_children_price"
                               value="{{$datapass->tour_children_price}}"
                               placeholder="Price for Kids"
                               class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}

                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input"
                                                     class=" form-control-label">Description</label></div>
                    <div class="col-12 col-md-9"><textarea name="tour_description" id="textarea-input" rows="9"
                                                           placeholder="Content..."
                                                           class="form-control">{{$datapass->tour_description}}</textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Select
                            Category</label></div>
                    <div class="col-12 col-md-9">
                        <select name="tour_category" id="select" class="form-control">
                            <option value="{{$datapass->tour_category}}">{{$datapass->tour_category}}</option>
                            @foreach($categorys as $category)
                                <option value="{{$category->tour_category_name}}">{{$category->tour_category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Small
                            Cover</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="tour_small_cover"
                               class="form-control-file">
                        <input class="form-control-file" value="{{$datapass->tour_small_cover}}"
                               name="tour_small_old_photo" type="hidden">
                        <img src="{{asset('storage/small_cover/'.$datapass->tour_small_cover)}}" width="97" height="50">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Large
                            Cover</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="tour_large_cover"
                               class="form-control-file">
                        <input class="form-control-file" value="{{$datapass->tour_large_cover}}"
                               name="tour_large_old_photo" type="hidden">
                        <img src="{{asset('storage/large_cover/'.$datapass->tour_large_cover)}}" width="97" height="50">
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