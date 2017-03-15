@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
          <div class="col-md-4 col-md-offset-4">
               <div class="login-panel panel-body">
                    <center>
                         <img src="{{ url('img/icon.png') }}" class="img-responsive logo" width="80px">
                         <h6 class="app-name">Wonma</h6>
                         <hr>
                         <p>Please login to your account</p>
                    </center>

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                         {{ csrf_field() }}

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback has-feedback-left">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                              <div class="form-control-feedback">
                                   <i class="fa fa-envelope" aria-hidden="true"></i>
                              </div>

                              @if ($errors->has('email'))
                              <span class="help-block">
                                   <strong>{{ $errors->first('email') }}</strong>
                              </span>
                              @endif
                         </div>

                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback has-feedback-left">
                              <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required autofocus>
                              <div class="form-control-feedback">
                                   <i class="fa fa-key" aria-hidden="true"></i>
                              </div>

                              @if ($errors->has('password'))
                              <span class="help-block">
                                   <strong>{{ $errors->first('password') }}</strong>
                              </span>
                              @endif
                         </div>

                         <div class="form-group">
                              <div class="checkbox">
                                   <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                   </label>
                              </div>
                         </div>

                         <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-block">
                                   Login
                              </button>
                         </div>

                         <center>
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                   Forgot Your Password?
                              </a>
                         </center>

                    </div>
               </div>
          </form>
     </div>
</div>
</div>
</div>
@endsection
