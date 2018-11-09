@extends('Admin.adminlayout')

@section('admin_panel_content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Guide</strong> Information

            </div>
            <div class="card-body card-block">
                <form action="{{route('upload.guide')}}" method="post" enctype="multipart/form-data" ,
                      class="form-horizontal">
                    {{csrf_field()}}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name </label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="guide_name"
                                                            placeholder="Enter the name"
                                                            class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username </label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="guide_username"
                                                            placeholder="Enter the username"
                                                            class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address </label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="guide_address"
                                                            placeholder="Enter the address of the place"
                                                            class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone Number </label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="guide_number"
                                                            placeholder="Enter the address of the place"
                                                            class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">NID </label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="guide_nid"
                                                            placeholder="Enter NID number"
                                                            class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Languages </label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="guide_languages"
                                                            placeholder="Enter the languages, you've known"
                                                            class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input"
                                                         class=" form-control-label">About</label></div>
                        <div class="col-12 col-md-9"><textarea name="guide_about" id="textarea-input" rows="8"
                                                               placeholder="Content..." class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input"
                                                         class=" form-control-label">Quote</label></div>
                        <div class="col-12 col-md-9"><textarea name="guide_quote" id="textarea-input" rows="4"
                                                               placeholder="Content..." class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input"
                                                         class=" form-control-label">Education</label></div>
                        <div class="col-12 col-md-9"><textarea name="guide_education" id="textarea-input" rows="4"
                                                               placeholder="Content..." class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input"
                                                         class=" form-control-label">Past Experience</label></div>
                        <div class="col-12 col-md-9"><textarea name="guide_experience" id="textarea-input" rows="4"
                                                               placeholder="Content..." class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input"
                                                         class=" form-control-label">Certificates</label></div>
                        <div class="col-12 col-md-9"><textarea name="guide_certificates" id="textarea-input" rows="4"
                                                               placeholder="Content..." class="form-control"></textarea>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Profile
                                Picture</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="guide_picture"
                                                            class="form-control-file"></div>
                    </div>

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