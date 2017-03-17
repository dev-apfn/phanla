@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body no-border">
                @yield('header')
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-default sidebar">
                <div class="panel-heading">Main Sidebar</div>

                <div class="panel-body">
                    <ul class="navigation navigation-main navigation-accordion">
                        <li>
                            <a href="{{ url('/home') }}"><i class="icon-home4"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/enterprises') }}">
                                <i class="fa fa-building fa-fw" aria-hidden="true"></i> <span>Enterprises</span>
                            </a>
                        </li>
                        <li class="navigation-divider"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            @yield('main-content')
        </div>
    </div>
</div>
@endsection
