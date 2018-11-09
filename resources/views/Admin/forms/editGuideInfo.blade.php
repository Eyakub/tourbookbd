@extends('Admin.adminlayout')

@section('admin_panel_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Update </strong>Guide Information

            </div>
            <div class="card-body card-block">
                {!! Form::open(['url' => '/admin-panel/update-guide-information', 'method'=>'post', 'enctype' => 'multipart/form-data', 'name'=>'editGuideInfo']) !!}

                {{csrf_field()}}
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" value="{{$datapass->guide_name}}" name="guide_name"
                               class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                        <input type="hidden" value="{{$datapass->id}}" name="guide_id">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" value="{{$datapass->guide_username}}" name="guide_username"
                               class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address </label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input"
                                                        value="{{$datapass->guide_address}}"
                                                        name="guide_address"
                                                        class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone Number </label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input"
                                                        value="{{$datapass->guide_number}}"
                                                        name="guide_number"
                                                        class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">NID </label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input"
                                                        value="{{$datapass->guide_nid}}"
                                                        name="guide_nid"
                                                        class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Languages </label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="guide_languages"
                                                        value="{{$datapass->guide_languages}}"
                                                        class="form-control">{{--<small class="form-text text-muted">This is a help text</small>--}}
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">About</label>
                    </div>
                    <div class="col-12 col-md-9"><textarea name="guide_about" id="textarea-input" rows="8"
                                                           class="form-control">{{$datapass->guide_about}}</textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input"
                                                     class=" form-control-label">Quote</label></div>
                    <div class="col-12 col-md-9"><textarea name="guide_quote" id="textarea-input" rows="4"
                                                           class="form-control">{{$datapass->guide_quote}}</textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input"
                                                     class=" form-control-label">Education</label></div>
                    <div class="col-12 col-md-9"><textarea name="guide_education" id="textarea-input" rows="4"
                                                           class="form-control">{{$datapass->guide_education}}</textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input"
                                                     class=" form-control-label">Past Experience</label></div>
                    <div class="col-12 col-md-9"><textarea name="guide_experience" id="textarea-input" rows="4"
                                                           class="form-control">{{$datapass->guide_experience}}</textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input"
                                                     class=" form-control-label">Certificates</label></div>
                    <div class="col-12 col-md-9"><textarea name="guide_certificates" id="textarea-input" rows="4"
                                                           class="form-control">{{$datapass->guide_certificates}}</textarea>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Profile
                            Picture</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="guide_picture"
                               class="form-control-file">
                        <input class="form-control-file" value="{{$datapass->guide_picture}}"
                               name="guide_old_picture" type="hidden">
                        <img src="{{asset('storage/guide_pic/'.$datapass->guide_picture)}}" width="97" height="50">
                    </div>
                </div>

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