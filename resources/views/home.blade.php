@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">En que estas pensando ahora?</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="">
                        <div class="form-group">
                            <label for="">Ahora estoy pensando en</label>
                            <input type="text" class="form-control" name="throught">
                        </div>

                        <button class="btn btn-primary">Enviar Pensamiento</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Publicado el 27/05/2018</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, voluptas tempora eos odit labore repellendus exercitationem, quaerat qui maiores maxime, velit distinctio obcaecati alias nam. Itaque expedita adipisci, sed labore!</p>
                </div>

                <div class="card-footer">
                    <button class="btn btn-light">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
