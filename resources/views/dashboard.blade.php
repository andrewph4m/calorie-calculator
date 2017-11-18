@extends('app')

@section('content')
<div class="page-inner page-dashboard">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{route('dashboard')}}">
                    Campaign
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <!-- @if (!Auth::guest()) -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('auth.logout')}}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                    <!-- @endif -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="page-breadcrumb">
        <ol class="container breadcrumb">
            <li><a href="{{route('dashboard')}}">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <h3>Dashboard</h3>
        </div>
    </div>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Welcome</h4>
                        </div>
                        <div class="panel-body">
                            <p>Total number of emails in database : <strong>{{ $respondents->count() }}</strong></p>
                            <form action="{{route('exportcsv')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <button class="btn btn-primary">Export in CSV</button>
                                </div>
                            </form>
                            <form action="{{route('exportxls')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <button class="btn btn-primary">Export in Excel</button>
                                </div>
                            </form>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






