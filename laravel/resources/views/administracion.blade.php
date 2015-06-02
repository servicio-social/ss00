@extends('master')
@section('title')
Administración
@stop

@section('content')
    <!-- Header -->
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-centered text-left">
                    <br><br>
                    <h1>ADMINISTRACIÓN</h1>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.intro-header -->

    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-centered">
                    @if (Auth::guest())
                        <h1> Necesitas estar logeado.</h1>
                    @else
                    @if (Auth::user()->type==6)
                    <div id="formatos">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Matricula</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Formatos</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ( !$documentos->count() )
                                    No hay usuarios que revisar.
                                @else
                                    <?php $i=0 ?>
                                    @foreach( App\Documento::select('cn','formato')->groupBy('cn')->get() as $usuario )
                                        <?php $i++ ?>
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td><a href="administracion/{{ $usuario->cn }}">{{ $usuario->cn }}</a></td>
                                            <td>{{ App\UserInfo::select('first_name')->where('cn', '=', $usuario->cn)->get() }}</td>
                                            <td>{{ $usuario->last_name }}</td>
                                            <td>{{ App\Documento::where('cn', '=', $usuario->cn)->count() }}</td>
                                        </tr>
                                    @endforeach
                                        <tr>
                                            <td>1</td>
                                            <td><a href="administracion/">10170926</a></td>
                                            <td>Mr</td>
                                            <td>Potato</td>
                                            <td>{{ App\Documento::where('cn', '=', $usuario->cn)->count() }}</td>
                                        </tr>
                                @endif
                            </tbody>
                        </table>
                        

<hr>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Formato</th>
            <th>Comentarios</th>
            <th>Status</th>
            <th>Submit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><button type="button" class="btn btn-default btn-sm btn-block">Formato 1</button></td>
            <td><textarea class="form-control" rows="1"></textarea></td>
            <td>
                <select class="form-control">
                    <option>Seleccionar</option>
                    <option>Aceptado</option>
                    <option>Rechazado</option>
                </select>
            </td>
            <td><button type="button" class="btn btn-info btn-sm btn-block">Enviar</button></td>
        </tr>
        <tr>
            <td><button type="button" class="btn btn-default btn-sm btn-block">Formato 2</button></td>
            <td><textarea class="form-control" rows="1"></textarea></td>
            <td>
                <select class="form-control">
                    <option>Seleccionar</option>
                    <option>Aceptado</option>
                    <option>Rechazado</option>
                </select>
            </td>
            <td><button type="button" class="btn btn-info btn-sm btn-block">Enviar</button></td>
        </tr>
    </tbody>
</table>

<hr>

@foreach( $documentos as $usuario )
    <?php $i++ ?>
{{--     <tr>
        <td>{{ $i }}</td>
        <td><a href="administracion/{{ $usuario->cn }}">{{ $usuario->cn }}</a></td>
        <td>{{ $usuario->first_name }}</td>
        <td>{{ $usuario->last_name }}</td>
        <td>{{ App\Documento::where('cn', '=', $usuario->cn)->count() }}</td>
    </tr> --}}
@endforeach


                    </div>
                    @else
                    <h1>Solo para administradores.</h1>
                    @endif
                    @endif
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.content-section-b -->
@endsection