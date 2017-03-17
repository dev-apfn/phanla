@extends('home')

@section('header')
<div class="pull-left">
     <h4>Enterprises</h4>

     <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Home</a></li>
          <li><a href="{{ url('/enterprises') }}">Enterprises</a></li>
          <li class="active">New</li>
     </ul>
</div>

<div class="pull-right action-buttons">
     <a href="{{ url('/enterprises') }}" class="btn btn-link btn-float has-text">
          <i class="fa fa-building fa-fw fa-lg" aria-hidden="true"></i><br />
          <span>Enterprises</span>
     </a>

     <a href="{{ url('/enterprises/inactive') }}" class="btn btn-float has-text text-danger">
          <i class="fa fa-building fa-fw fa-lg" aria-hidden="true"></i><br />
          <span>Inactive Enterprises</span>
     </a>
</div>
@endsection

@section('main-content')
<div class="panel panel-default">
     <form class="form-horizontal" role="form" method="POST" action="{{ url('/enterprises') }}">
         {{ csrf_field() }}

          <div class="panel-heading">
               <legend>
                    New Enterprise
               </legend>
          </div>

          <div class="panel-body">
               <div class="row">
                    <div class="col-md-7 {{ $errors->has('name') ? ' has-error' : '' }}">
                         <label class="control-label">Name</label>

                         <input type="text" class="form-control" name="name" placeholder="Cuulkids Inc" value="{{ old('name') }}" required autofocus>

                         @if ($errors->has('name'))
                         <span class="help-block text-danger">
                              <strong>{{ $errors->first('name') }}</strong>
                         </span>
                         @endif
                    </div>
               </div>


               <hr />
               <div class="row">
                    <div class="col-md-4 {{ $errors->has('location') ? ' has-error' : '' }}">
                         <label class="control-label">Location</label>
                         <input type="text" class="form-control" name="location" placeholder="Fajara Estate" value="{{ old('location') }}" required>

                         @if ($errors->has('location'))
                         <span class="help-block text-danger">
                              <strong>{{ $errors->first('location') }}</strong>
                         </span>
                         @endif
                    </div>

                    <div class="col-md-4 {{ $errors->has('latitude') ? ' has-error' : '' }}">
                         <label class="control-label">Latitude</label>

                         <input type="text" class="form-control" name="latitude" placeholder="14.2254123" value="{{ old('latitude') }}" required>

                         @if ($errors->has('latitude'))
                         <span class="help-block text-danger">
                              <strong>{{ $errors->first('latitude') }}</strong>
                         </span>
                         @endif
                    </div>

                    <div class="col-md-4{{ $errors->has('longitude') ? ' has-error' : '' }}">
                         <label class="control-label">Longitude</label>

                         <input type="text" class="form-control col-md-6" name="longitude" placeholder="-12.23587444" value="{{ old('longitude') }}" required>

                         @if ($errors->has('longitude'))
                         <span class="help-block text-danger">
                              <strong>{{ $errors->first('longitude') }}</strong>
                         </span>
                         @endif
                    </div>
               </div>

               <hr />

               <div class="row">
                    <div class="col-md-6{{ $errors->has('phone') ? ' has-error' : '' }}">
                         <label class="control-label">Phone</label>

                         <input type="text" class="form-control" name="phone" placeholder="+220 334 3008" value="{{ old('phone') }}" required autofocus>

                         @if ($errors->has('phone'))
                         <span class="help-block text-danger">
                             <strong>{{ $errors->first('phone') }}</strong>
                         </span>
                         @endif
                    </div>

                    <div class="col-md-6{{ $errors->has('email') ? ' has-error' : '' }}">
                         <label class="control-label">Email</label>

                         <input type="email" class="form-control" name="email" placeholder="info@cuulkids.com" value="{{ old('email') }}" required autofocus>

                         @if ($errors->has('email'))
                         <span class="help-block text-danger">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                         @endif
                    </div>
               </div>

               <hr />

               <div class="row">
                    <div class="col-md-12 {{ $errors->has('description') ? ' has-error' : '' }}">
                         <label class="control-label">Description</label>

                         <textarea class="form-control" name="description" placeholder="This is a brief description" required>{{ old('description') }}</textarea>

                        @if ($errors->has('description'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                    </div>
               </div>

          </div>

          <div class="panel-footer text-right">
               <button type="submit" class="btn btn-primary">Add Enterprise</button>
          </div>
     </form>
</div>

@endsection
