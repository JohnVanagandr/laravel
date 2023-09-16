@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (Session::has('info'))
                <div class="col-md-7">
                    <div class="alert alert-{!! Session::get('info')['color'] !!} alert-dismissible fade show" role="alert">
                        {{-- {{dd(Session::get('info')['texto'])}} --}}
                        {!! Session::get('info')['texto'] !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">

                        {!! Form::model($profile, ['route' => ['profile.update', $profile], 'method' => 'PUT' , 'files' => true]) !!}

                        @include('profile.partials.formulario')

                        <div class="col-md-12 d-grid">
                            <button type="submit" class="btn btn-primary mt-3">
                                Editar
                            </button>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
