@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido Administrador!') }}
                    <hr>
                    Nombre: {{ Auth::user()->name }}<br>
                    Apellido: {{ Auth::user()->last_name }}<br>
                    Número Identificación: {{ Auth::user()->identification_number }}<br>
                    Teléfono: {{ Auth::user()->phone }}<br>
                    Correo: {{ Auth::user()->email }}<br>
                    
                    
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
