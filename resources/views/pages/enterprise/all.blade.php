@extends('home')

@section('header')
<div class="pull-left">
     <h4>Enterprises</h4>

     <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Home</a></li>
          <li class="active">Enterprises</li>
     </ul>
</div>

<div class="pull-right action-buttons">
     <a onclick="addEnterprise()" class="btn btn-link btn-float has-text">
          <i class="fa fa-plus fa-fw fa-lg" aria-hidden="true"></i><br />
          <span>New Enterprise</span>
     </a>

     <a href="{{ url('/staffs') }}" class="btn btn-link btn-float has-text">
          <i class="fa fa-building fa-fw fa-lg" aria-hidden="true"></i><br />
          <span>Enterprises</span>
     </a>

     <a href="{{ url('/staffs/inactive') }}" class="btn btn-float has-text text-danger">
          <i class="fa fa-building fa-fw fa-lg" aria-hidden="true"></i><br />
          <span>Inactive Enterprises</span>
     </a>
</div>
@endsection

@section('main-content')

@if(session('operation'))
<div class="alert alert-dismissible alert-success">
     <button type="button" class="close" data-dismiss="alert">&times;</button>
     {{ session('operation') }}
</div>
@endif

<div class="panel panel-default panel-body">
     <legend>
          Enterprises
     </legend>

     <table class="table table-hover" id="staffs">
          <thead>
               <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Actions</th>
               </tr>
          </thead>
          <tbody>
               @php
               $count = 1;
               @endphp
               @foreach($enterprises as $enterprise)
               <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $enterprise->name }}</td>
                    <td>{{ $enterprise->location }}</td>
                    <td>{{ $enterprise->phone }}</td>
                    <td>{{ $enterprise->email }}</td>
                    <td>
                         <a class="text-highlight label label-info">View</a> |
                         <a class="text-highlight label label-primary">Edit</a> |
                         <a class="text-highlight label label-danger">Deactivate</a>
                    </td>
               </tr>
               @endforeach
          </tbody>
     </table>
</div>

@include('pages.enterprise.add')
@endsection
