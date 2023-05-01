@extends('layouts.app')

@section('content')

@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.storeapuesta') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Apuesta') }}</label>

                            <div class="col-md-6">
                            <input id="Apuesta" type="text" class="form-control @error('apuesta') is-invalid @enderror" name="apuesta" value="{{ old('apuesta') }}" required autocomplete="apuesta">


                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Usuario" class="col-md-4 col-form-label text-md-end">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="Usuario" type="text" class="form-control @error('Usuario') is-invalid @enderror" name="Usuario" value="{{ old('Usuario') }}" required autocomplete="Usuario">

                                @error('ruta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Valor_apuesta" class="col-md-4 col-form-label text-md-end">{{ __('Valor de la Apuesta') }}</label>

                            <div class="col-md-6">
                                <input id="Valor_apuesta" type="number" class="form-control @error('Valor_apuesta') is-invalid @enderror" name="Valor_apuesta" value="{{ old('Valor_apuesta') }}" required autocomplete="Valor_apuesta">

                                @error('valor de la apuesta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Valor_ganancia" class="col-md-4 col-form-label text-md-end">{{ __('valor de ganancia') }}</label>

                            <div class="col-md-6">
                                <input id="Valor_ganancia" type="number" class="form-control @error('Valor_ganancia') is-invalid @enderror" name="Valor_ganancia" value="{{ old('Valor_ganancia') }}" required autocomplete="Valor_ganancia">

                                @error('calor de ganancia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="piloto" class="col-md-4 col-form-label text-md-end">{{ __('Piloto') }}</label>

                            <div class="col-md-6">
                                <input id="piloto" type="text" class="form-control @error('piloto') is-invalid @enderror" name="piloto" value="{{ old('piloto') }}" required autocomplete="piloto">

                                @error('piloto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection