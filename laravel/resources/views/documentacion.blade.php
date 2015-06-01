@extends('master')


@section('content')
    <!-- Header -->
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-centered text-left">
                    <br><br>
                    <h1>DOCUMENTACIÓN</h1>
                    @if (Auth::guest())

                    @else
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-xs-12">
                            <div class="row">
                              <div class="col-xs-3">Matricula.-</div>
                              <div>{{ Auth::user()->cn }}</div>
                            </div>
                            <div class="row">
                              <div class="col-xs-3">Nombre.-</div>
                              <div>{{ $first_name }} {{ $last_name}}</div>
                            </div>
                            <div class="row">
                              <div class="col-xs-3">Carrera.-</div>
                              <div>{{ $career }}</div>
                            </div>
                            <div class="row">
                              <div class="col-xs-3">Plan.-</div>
                              <div>{{ $plan }}</div>
                            </div>
                            <div class="row">
                              <div class="col-xs-3">Creditos.-</div>
                              <div>{{ $credits }}</div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.intro-header -->

    <!-- Page Content -->

    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-centered">
                    @if (Auth::guest())
                        <h1> Necesitas estar logeado.
                    @else
                    <div id="formatos">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Formato</th>
                                    <th>Comentarios</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Numero 1 <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Subir</a></li>
                                                <li><a href="#">Reemplazar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>Archivo no enviado</td>
                                    <td><button type="button" class="btn btn-info btn-sm btn-block">No enviado</button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" disabled="disabled" data-toggle="dropdown" aria-expanded="false">Numero 2 <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Subir</a></li>
                                                <li><a href="#">Reemplazar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>Archivo enviado</td>
                                    <td><button type="button" class="btn btn-primary btn-sm btn-block">Enviado</button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Numero 3 <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Subir</a></li>
                                                <li><a href="#">Reemplazar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>El único detalle es en el periodo: Enero-Junio 2015</td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-block">Rechazado</button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Numero 4 <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Subir</a></li>
                                                <li><a href="#">Reemplazar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>Formato aceptado</td>
                                    <td><button type="button" class="btn btn-success btn-sm btn-block">Aceptado</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.content-section-b -->
@endsection