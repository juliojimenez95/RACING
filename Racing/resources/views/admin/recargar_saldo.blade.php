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
                    <form method="POST" action="{{ route('Registro.updaterecarga') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="Valor_recarga" class="col-md-4 col-form-label text-md-end">{{ __('Cantidad de recarga') }}</label>

                            <div class="col-md-6">
                                <input id="Valor_recarga" type="number" class="form-control @error('Valor_recarga') is-invalid @enderror" name="Valor_recarga" value="{{ old('Valor_recarga') }}" required autocomplete="Valor_recarga">

                                @error('Cantidad de recarga')
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