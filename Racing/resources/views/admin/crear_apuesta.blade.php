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
                <div class="card-header">{{ __('Nueva apuesta') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.storeapuesta',Auth::user()->id) }}">
                        @csrf

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
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Piloto') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="piloto">
                                    <option value="">seleccione una piloto...</option>
                                    @foreach ($pilotos as $piloto)
                                        <option value="{{ $piloto->id }}">{{ $piloto->id }}</option>
                                    @endforeach

                                </select>


                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Apostar') }}
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
