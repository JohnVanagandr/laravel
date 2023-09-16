@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['route' => ['profile.store']]) !!}

                        <div class="row">

                            @include('profile.partials.formulario')

                            <div class="col-md-12 d-grid">
                                <button type="submit" class="btn btn-primary mt-3">
                                    Crear
                                </button>
                            </div>

                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
