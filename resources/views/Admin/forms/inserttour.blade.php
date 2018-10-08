@extends('Admin.adminlayout')

@section('admin_panel_content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Tour</strong> Information
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name </label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="place_name"
                                                            placeholder="Enter the name of the place"
                                                            class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address </label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="place_address"
                                                            placeholder="Enter the address of the place"
                                                            class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input"
                                                         class=" form-control-label">Textarea</label></div>
                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9"
                                                               placeholder="Content..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select Category</label></div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="1">Close to sea</option>
                                <option value="2">Hill Tracking</option>
                                <option value="3">Waterfalls</option>
                            </select>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Small
                                Cover</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="small-cover-input"
                                                            class="form-control-file"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Large
                                Cover</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="large-cover-input"
                                                            class="form-control-file"></div>
                    </div>
                    {{--<div class="row form-group">
                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple
                                File input</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input"
                                                            name="file-multiple-input" multiple=""
                                                            class="form-control-file"></div>
                    </div>--}}
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </div>

    </div>
@endsection