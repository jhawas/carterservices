@extends('layouts.master')

@section('content')

<section class="seciton-signup">
    <div class="container signup-container">
        <div class="row">
            <div class="col-md-12 signup-title">
                <h2>Let's get Started!</h2>
                <p>Tell us what you're looking for.</p>
            </div>
            <div class="col-md-12 signup-selection">
                <div class="row">
                    <div class="col-md-6 selection">
                        <span class="fa fa-user"></span>
                        <h2>Company/Private Techncian</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <a href="{{ route('register_type', ['type' => 'technician']) }}" title="" class="btn btn-primary">Work</a>
                    </div>
                    <div class="col-md-6 selection">
                        <span class="fa fa-user"></span>
                        <h2>Client</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <a href="{{ route('register_type', ['type' => 'client']) }}" title="" class="btn btn-primary">Find</a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>

@endsection
