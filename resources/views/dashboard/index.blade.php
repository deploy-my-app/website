@extends('app')
@section('stylesheets')
	<link href="{{asset('/css/dashboard.css.old')}}" rel="stylesheet">
    <style type="text/css">
        .side-nav {
            background-color: #222;
            border: medium none;
            border-radius: 0;
            bottom: 0;
            left: 225px;
            margin-left: -225px;
            overflow-x: hidden;
            overflow-y: auto;
            padding-bottom: 40px;
            position: fixed;
            top: 51px;
            width: 225px;
        }
        @media (min-width: 768px) {
            .side-nav {
                background-color: #222;
                border: medium none;
                border-radius: 0;
                bottom: 0;
                left: 225px;
                margin-left: -225px;
                overflow-x: hidden;
                overflow-y: auto;
                padding-bottom: 40px;
                position: fixed;
                top: 51px;
                width: 225px;
            }
            .side-nav > li > a {
                width: 225px;
            }
            .side-nav li a:hover, .side-nav li a:focus {
                background-color: #000 !important;
                outline: medium none;
            }
        }
        .side-nav>li{
            display:block;
            padding: 10px 5px;
        }
        body {
            margin-top: 0;
        }
    </style>
@stop

@section('sidebar-left')
<ul class="nav navbar-nav side-nav">
    <li class="active">
        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
    </li>
    <li>
        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
    </li>
    <li>
        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables s,.dfbm,snbdgmndbfgmnbdfkgbdfgbjdfbgv</a>
    </li>
    <li>
        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
    </li>
    <li>
        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
    </li>
    <li>
        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
    </li>
    <li>
        <a data-target="#demo" data-toggle="collapse" href="javascript:;"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
        <ul class="collapse" id="demo">
            <li>
                <a href="#">Dropdown Item</a>
            </li>
            <li>
                <a href="#">Dropdown Item</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
    </li>
    <li>
        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
    </li>
</ul>
@stop
@section('content')

@stop

@section('scripts')
    <script type="text/javascript">
    $(function(){
        $(".sidebar-left").removeClass("hidden");
    })
    </script>
	<script src="{{asset('/js/dashboard.js')}}"></script>
@show