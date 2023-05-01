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
                    <form method="POST" action="{{ route('admin.updateapuesta',$apuesta->id) }}">
                        @csrf
                        @method('put')


                        <div class="row mb-3">
                            <label for="apuesta" class="col-md-4 col-form-label text-md-end">{{ __('apuesta') }}</label>

                            <div class="col-md-6">
                                <input id="apuesta" type="date" class="form-control @error('apuesta') is-invalid @enderror" name="apuesta" value="{{ $carrera->apuesta }}" required autocomplete="apuesta">

                                @error('apuesta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="usuario" class="col-md-4 col-form-label text-md-end">{{ __('usuario') }}</label>

                            <div class="col-md-6">
                                <input id="usuario" type="date" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ $carrera->usuario }}" required autocomplete="usuario">

                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="valor_apuesta" class="col-md-4 col-form-label text-md-end">{{ __('valor_apuesta') }}</label>

                            <div class="col-md-6">
                                <input id="valor_apuesta" type="date" class="form-control @error('valor_apuesta') is-invalid @enderror" name="valor_apuesta" value="{{ $carrera->valor_apuesta }}" required autocomplete="valor_apuesta">

                                @error('valor_apuesta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="valor_ganancia" class="col-md-4 col-form-label text-md-end">{{ __('valor_ganancia') }}</label>

                            <div class="col-md-6">
                                <input id="valor_ganancia" type="date" class="form-control @error('valor_ganancia') is-invalid @enderror" name="valor_ganancia" value="{{ $carrera->valor_ganancia }}" required autocomplete="valor_ganancia">

                                @error('valor_ganancia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="piloto" class="col-md-4 col-form-label text-md-end">{{ __('piloto') }}</label>

                            <div class="col-md-6">
                                <input id="piloto" type="date" class="form-control @error('piloto') is-invalid @enderror" name="piloto" value="{{ $carrera->piloto }}" required autocomplete="piloto">

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