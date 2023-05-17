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
                <div class="card-header">{{ __('Nueva recarga') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.store',$id) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="valor" class="col-md-4 col-form-label text-md-end">{{ __('Valor de la recarga') }}</label>

                            <div class="col-md-6">
                                <input id="saldo" type="number" class="form-control @error('saldo') is-invalid @enderror" name="saldo" value="{{ old('saldo') }}" required autocomplete="saldo">

                                @error('valor de la recarga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Recargar') }}
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
