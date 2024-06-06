@extends('layouts.app')

@section('content')
    <div class="content-body">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h6>Selamat Datang!</h6>
                        <h4>{{ auth()->user()->name }}</h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection