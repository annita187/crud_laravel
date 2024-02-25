@extends('layout/template')

@section('title', 'Registrar Alumno | Escuela')
    
@section('contenido')
<main>
    <div class="container py-4">
        <h2>Registar Alumno</h2>

        @if ($errors -> any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ url('alumnos') }}" method="post"> 
        
            @csrf
            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matricula:</label>
                <div class="col-sm-5">
                    <input type="text" name="matricula" id="matricula" class="form-control" value="{{old('matricula')}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre Completo:</label>
                <div class="col-sm-5">
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha de Nacimiento:</label>
                <div class="col-sm-5">
                    <input type="date" name="fecha" id="fecha" class="form-control" value="{{old('fecha')}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono:</label>
                <div class="col-sm-5">
                    <input type="text" name="telefono" id="telefono" class="form-control" value="{{old('telefono')}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Correo:</label>
                <div class="col-sm-5">
                    <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nivel" class="col-sm-2 col-form-label">Nivel:</label>
                <div class="col-sm-5">
                    <select name="nivel" id="nivel" class="form-select" required>
                        <option value=""> Seleccionar Nivel</option>
                        @foreach ($nivel as $nivel)
                            <option value="{{$nivel->id}}">{{$nivel->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <a href="{{ url('alumnos')}}" class="btn btn-secondary">Regresar</a>

            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
</main>