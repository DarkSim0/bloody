@extends('layouts.app')

@section('content')
    <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Over view</span>
                <h3 class="page-title">Pre-register</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form class="add-new-post" role="form" method="POST" action="{{ url('/register') }}" >
                               {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name" class="col-md-4 control-label{{ $errors->has('fname') ? ' has-error' : '' }}">First Name</label>
                                <input class="form-control form-control-lg mb-3" name="fname" value="{{ old('fname') }}" type="text" placeholder="Enter first name">
                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="name" class="col-md-4 control-label{{ $errors->has('mname') ? ' has-error' : '' }}">Middle Name</label>
                                <input id="name" type="text" class="form-control form-control-lg mb-3" name="mname" placeholder="Enter middle name" value="{{ old('mname') }}">

                                @if ($errors->has('mname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mname') }}</strong>
                                    </span>
                                @endif
                            </div>
                             <div class="col-md-4">
                                <label for="name" class="col-md-4 control-label{{ $errors->has('lname') ? ' has-error' : '' }}">Last Name</label>
                                <input id="name" type="text" class="form-control form-control-lg mb-3" name="lname" placeholder="Enter last name" value="{{ old('lname') }}">

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name" class="col-md-4 control-label{{ $errors->has('email') ? ' has-error' : '' }}">E-mail Address</label>
                                <input id="name" type="email" class="form-control form-control-lg mb-3" name="email" placeholder="Enter last name" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label for="name" class="col-md-4 control-label{{ $errors->has('maritalstat') ? ' has-error' : '' }}">Marital Status</label>  
                                <select name="" class="form-control form-control-lg mb-3">
                                  <option selected>Choose...</option>
                                  <option value="">Single</option>
                                  <option value="">Married</option>
                                  <option value="">Widowed</option>
                                  <option value="">Divorced</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="name" class="col-md-4 control-label{{ $errors->has('maritalstat') ? ' has-error' : '' }}">Birth Date</label>  
                                <input type="date" class="form-control form-control-lg mb-3" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                     <label for="password" class="col-md-4 control-label">Password</label>
                                    <input id="password" type="password" class="form-control form-control-lg mb-3" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                     <label for="password-confirm" class="col-md-4 col-md-4 control-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control form-control-lg mb-3" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i> Register
                            </button>
                        </div>
                </div>
                    </form>
                </div>
            </div>
                <!-- / Add New Post Form -->
        </div>
          

@endsection
