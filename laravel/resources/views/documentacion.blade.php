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
                        <div class="col-lg-4 col-md-4 col-xs-8">
                            <div class="row">
                              <div class="col-xs-4">Matricula.-</div>
                              <div class="col-xs-4">{{ Auth::user()->cn }}</div>
                            </div>
                            <div class="row">
                              <div class="col-xs-4">Nombre.-</div>
                              <div class="col-xs-4">{{ Auth::user()->cn }}</div>
                            </div>
                            <div class="row">
                              <div class="col-xs-4">Carrera.-</div>
                              <div class="col-xs-4">{{ Auth::user()->cn }}</div>
                            </div>
                            <div class="row">
                              <div class="col-xs-4">Plan.-</div>
                              <div class="col-xs-4">{{ Auth::user()->cn }}</div>
                            </div>
                            <div class="row">
                              <div class="col-xs-4">Creditos.-</div>
                              <div class="col-xs-4">{{ Auth::user()->cn }}</div>
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
                                    <th>Archivo</th>
                                    <th>Comentarios</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">FILE 1 <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Subir</a></li>
                                                <li><a href="#">Reemplazar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>Ninguno</td>
                                    <td><button type="button" class="btn btn-info btn-sm btn-block">No enviado</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" disabled="disabled" data-toggle="dropdown" aria-expanded="false">FILE 2 <span class="caret"></span></button>
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
                                    <th scope="row">3</th>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">FILE 3 <span class="caret"></span></button>
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
                                    <th scope="row">4</th>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">FILE 4 <span class="caret"></span></button>
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