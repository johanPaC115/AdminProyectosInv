@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="small-box bg-info">
                <div class="inner">
                <h3>150</h3>
                <p>New Orders</p>
                </div>
                <div class="icon">
                <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
                </div>
                <div class="icon">
                <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>



@stop

