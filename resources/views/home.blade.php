@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Bienvenido A LaravelVue</div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="recordatorio">Ingrese su recordatorio:</label>
                            <input type="text" class="form-control" name="recordatorio">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Subir recordatorio
                        </button>
                    </form>
                </div>
            </div>


            <div class="card">
                <div class="card-header">Publicado el dia: </div>
                <div class="card-body">
                   <p>Como cuesta aprender esta porqueria</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-default">
                        Editar
                    </button>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection