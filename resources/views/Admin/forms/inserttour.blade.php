@extends('Admin.adminlayout')

@section('admin_panel_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Tour</strong> Information

            </div>
            <div class="card-body card-block">
                <form action="{{route('upload.tour')}}" method="post" enctype="multipart/form-data" ,
                      class="form-horizontal">
                    {{csrf_field()}}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name </label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="tour_title"
                                                            placeholder="Enter the name of the place"
                                                            class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address </label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="tour_address"
                                                            placeholder="Enter the address of the place"
                                                            class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input"
                                                         class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="tour_description" id="textarea-input" rows="9"
                                                               placeholder="Content..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select
                                Category</label></div>
                        <div class="col-12 col-md-9">
                            <select name="tour_category" id="select" class="form-control">
                                <option>Please Select</option>
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
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="tour_small_cover"
                                                            class="form-control-file"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Large
                                Cover</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="tour_large_cover"
                                                            class="form-control-file"></div>
                    </div>
                    {{--<div class="row form-group">
                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple
                                File input</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input"
                                                            name="file-multiple-input" multiple=""
                                                            class="form-control-file"></div>
                    </div>--}}
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
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