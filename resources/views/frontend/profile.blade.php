@extends('layouts.master')

@section('content')

<section class="section-profile">
    <div class="container container-profile">
        <div class="row">
            <div class="col-md-3 sidebar">
                <div class="image-container">
                    <div class="image">
                        <img src="{{ asset('images/default.png') }}" alt="">
                        <div class="name">
                            <span>{{ ucfirst(Auth::user()->first_name) . ' ' . ucfirst(Auth::user()->last_name)}}</span>
                        </div>
                    </div>
                </div>
                <div class="information">
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading">Panel heading</div>
                      <!-- List group -->
                      <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                    </div>
                </div>
                <div class="information">
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading">Panel heading</div>
                      <!-- List group -->
                      <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 profile-content">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Personal Information</h3>
                  </div>
                  <div class="panel-body">
                    Panel content
                  </div>
                </div>
            </div>
        </div>    
   </div>
</section>

@endsection
