@extends('layout')

@section('titulo', 'Personas')


@section('content')
    <h2>Personas</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <!-- <tr> -->
                @if($servicios)
                    <thead>
                        <tr>
                            <th scope="col">Apellido</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">F. Nacimiento</th>
                            <th scope="col">Edad</th>
                        </tr>
                    </thead>

                    @foreach ($servicios as $item)
                        <tr>
                            <td>{{ $item->cPerApellido }}</td>
                            <td>{{ $item->cPerNombre }}</td>
                            <td>{{ $item->cPerDireccion }}</td>
                            <td>{{ $item->cPerFecNac }}</td>
                            <td>{{ $item->cPerEdad }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">nada</td>
                    </tr>
                    
                @endif
        </table>
    </div>
    
@endsection
