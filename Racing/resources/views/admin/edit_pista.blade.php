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
                <div class="card-header">{{ __('Editar pista') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.updatepista',$pista->id) }}">
                        @csrf
                        @method('put')


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Lugar') }}</label>

                            <div class="col-md-6">
                                <input id="lugar" type="text" class="form-control @error('lugar') is-invalid @enderror" name="lugar" value="{{ $pista->lugar }}" required autocomplete="lugar" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codY" class="col-md-4 col-form-label text-md-end">{{ __('Ruta') }}</label>

                            <div class="col-md-6">
                                <input id="ruta" type="ruta" class="form-control @error('ruta') is-invalid @enderror" name="ruta" value="{{ $pista->ruta }}" required autocomplete="ruta">

                                @error('ruta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Longitud') }}</label>

                            <div class="col-md-6">
                                <input id="codX" type="text" class="form-control @error('codX') is-invalid @enderror" name="codX" value="{{ old('codX') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codY" class="col-md-4 col-form-label text-md-end">{{ __('Latitud') }}</label>

                            <div class="col-md-6">
                                <input id="codY" type="codY" class="form-control @error('codY') is-invalid @enderror" name="codY" value="{{ old('codY') }}" required autocomplete="codY">

                                @error('codY')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
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
