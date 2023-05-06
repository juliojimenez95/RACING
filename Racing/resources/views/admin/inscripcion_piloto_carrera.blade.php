@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscribirse') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('piloto.incribirse') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('piloto') }}</label>

                            <div class="col-md-6">
                                <input id="piloto" type="number" class="form-control @error('piloto') is-invalid @enderror" name="piloto" value="{{ Auth::user()->id }}" required autocomplete="piloto" autofocus>

                                @error('piloto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codY" class="col-md-4 col-form-label text-md-end">{{ __('carrera') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="carrera">
                                    <option value="">Porfavor seleccione una carrera...</option>
                                    @foreach ($carreras as $carrera)
                                        <option value="{{ $carrera->id }}">{{ $carrera->id }}</option>
                                    @endforeach

                                </select>
                                @error('carrera')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Moto') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="moto">
                                    <option value="">Porfavor seleccione una moto...</option>
                                    @foreach ($motos as $moto)
                                        <option value="{{ $moto->id }}">{{ $moto->marca }}</option>
                                    @endforeach

                                </select>
                                @error('moto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Inscribirse') }}
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
