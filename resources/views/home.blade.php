@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Pets</div>

                <div class="card-body">
                        <a href="{{asset('registar_pets') }}" class="btn btn-danger">Novos pets</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
