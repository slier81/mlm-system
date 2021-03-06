@extends('layouts.superadmin')

@section('content.header')

    <div id="content-header">
        <h1>Profile</h1>
        <div class="btn-group">
            <a class="btn btn-large" title="Manage Files"><i class="fa fa-file"></i></a>
            <a class="btn btn-large" title="Manage Users"><i class="fa fa-user"></i></a>
            <a class="btn btn-large" title="Manage Comments"><i class="fa fa-comment"></i><span class="label label-danger">5</span></a>
            <a class="btn btn-large" title="Manage Orders"><i class="fa fa-shopping-cart"></i></a>
        </div>
    </div>

@stop

@section('breadcrumb')

    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> SuperAdmin Home</a>
    </div>

@stop

@section('content')

    <div class="row">

        <div class="col-xs-12">

            <div class="widget-box">

                <div class="widget-title">
                    <span class="icon"><i class="fa fa-th-list"></i></span>
                    <h5>Profile</h5>
                </div>

                <div class="widget-content nopadding">

                    {{Form::open(['url'=>'/admin/super/profile', 'files' => true, 'class'=>'form-horizontal'])}}


                        <div class="form-group">

                            <div class="col-sm-3 col-md-3 col-lg-2 visible-xs" style="text-align: center">

                                @if(is_null($user[0]->picture))

                                    <img src="{{ asset('/img/' . Config::get('mlm.default_picture')) }}" class="img-thumbnail img-responsive" width="145" height="145"/>
                                @else

                                    <img src="{{ asset('/img/user/' . $user[0]->picture) }}" class="img-thumbnail img-responsive" width="145" height="145"/>

                                @endif

                            </div>

                        </div>

                        <div class="form-group{{$errors->has('picture') ? ' has-error' : ''}}">
                            {{Form::label('picture','Picture',['class'=>'col-sm-3 col-md-3 col-lg-2 control-label hidden-xs'])}}
                            <div class="col-sm-6 col-md-6 col-lg-8 nopadding-right">
                                {{Form::file('picture',['class'=>'form-control input-sm'])}}
                                {{ $errors->first('picture', '<span class="help-inline">:message</span>') }}
                            </div>

                            <div class="avatar col-sm-3 col-md-3 col-lg-2 hidden-xs">

                                @if(is_null($user[0]->picture))

                                    <img src="{{ asset('/img/' . Config::get('mlm.default_picture')) }}" class="img-thumbnail img-responsive" width="145" height="145"/>
                                @else

                                    <img src="{{ asset('/img/user/' . $user[0]->picture) }}" class="img-thumbnail img-responsive" width="145" height="145"/>

                                @endif

                            </div>

                        </div>

                        <div class="form-group{{$errors->has('username') ? ' has-error' : ''}}">
                            {{Form::label('username','Username',['class'=>'col-sm-3 col-md-3 col-lg-2 control-label'])}}
                            <div class="col-sm-6 col-md-6 col-lg-8 nopadding-right">
                                {{Form::text('username', $user[0]->username,['class'=>'form-control input-sm'])}}
                                {{ $errors->first('username', '<span class="help-inline">:message</span>') }}
                            </div>
                        </div>

                        <div class="form-group{{$errors->has('password') ? ' has-error' : ''}}">
                            {{Form::label('password','Password',['class'=>'col-sm-3 col-md-3 col-lg-2 control-label'])}}
                            <div class="col-sm-6 col-md-6 col-lg-8 nopadding-right">
                                {{Form::password('password',['class'=>'form-control input-sm'])}}
                                {{ $errors->first('password', '<span class="help-inline">:message</span>') }}
                            </div>
                        </div>

                        <div class="form-group{{$errors->has('password_confirm') ? ' has-error' : ''}}">
                            {{Form::label('password_confirm','Password Confirm',['class'=>'col-sm-3 col-md-3 col-lg-2 control-label'])}}
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                {{Form::password('password_confirm',['class'=>'form-control input-sm'])}}
                                {{ $errors->first('password_confirm', '<span class="help-inline">:message</span>') }}
                            </div>
                        </div>

                        <div class="form-group{{$errors->has('full_name') ? ' has-error' : ''}}">
                            {{Form::label('full_name','Full Name',['class'=>'col-sm-3 col-md-3 col-lg-2 control-label'])}}
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                {{Form::text('full_name', $user[0]->full_name,['class'=>'form-control input-sm'])}}
                                {{ $errors->first('full_name', '<span class="help-inline">:message</span>') }}
                            </div>
                        </div>

                        <div class="form-group{{$errors->has('ic_num') ? ' has-error' : ''}}">
                            {{Form::label('ic_num','Ic Number',['class'=>'col-sm-3 col-md-3 col-lg-2 control-label'])}}
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                {{Form::text('ic_num', $user[0]->ic_num,['class'=>'form-control input-sm'])}}
                                {{ $errors->first('ic_num', '<span class="help-inline">:message</span>') }}
                            </div>
                        </div>

                        <div class="form-group{{$errors->has('gender') ? ' has-error' : ''}}">
                            {{Form::label('gender','Gender',['class'=>'col-sm-3 col-md-3 col-lg-2 control-label'])}}
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                {{Form::select('gender', [''=>'Please Select', 'male'=>'Male', 'female'=>'Female'], $user[0]->gender,['class'=>'form-control input-sm'])}}
                                {{ $errors->first('gender', '<span class="help-inline">:message</span>') }}
                            </div>
                        </div>

                        <div class="form-group{{$errors->has('contact_num') ? ' has-error' : ''}}">
                            {{Form::label('contact_num','Contact Number',['class'=>'col-sm-3 col-md-3 col-lg-2 control-label'])}}
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                {{Form::text('contact_num', $user[0]->contact_num,['class'=>'form-control input-sm'])}}
                                {{ $errors->first('contact_num', '<span class="help-inline">:message</span>') }}
                            </div>
                        </div>

                        {{Form::hidden('id', $id)}}

                        {{Form::hidden('old_picture', $user[0]->picture)}}

                        <div class="form-group form-actions">
                            <span class="col-sm-3 col-md-3 col-lg-2 control-label"></span>
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                {{Form::submit('Submit',['class'=>'btn btn-primary btn-sm'])}}
                            </div>
                        </div>

                    {{Form::close()}}

                </div>

            </div>

        </div>

    </div>

@stop