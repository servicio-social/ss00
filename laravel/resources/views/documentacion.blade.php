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
                                    <th class="col-lg-0">Formato</th>
                                    <th class="col-lg-10">Comentarios</th>
                                    <th class="col-lg-1">Status</th>
                                    <th class="col-lg-1">Enviar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <form enctype="multipart/form-data" role="form" method="POST" name="FormFormato1" action="{{ url('/documentacion/upload') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <td><span class="btn btn-default btn-sm btn-block btn-file">Numero 1<input type="file" name="file"></span></a></li></td>
                                    <td>Archivo no enviado</td>
                                    <td><button type="button" class="btn btn-info btn-sm btn-block">No enviado</button></td>
                                    <td><button type="submit" class="btn btn-info btn-sm btn-block">Enviar</button></td>
                                    </form>
                                </tr>
                                <tr>
                                    <td><span class="btn btn-default btn-sm btn-block btn-file" disabled="disabled">Numero 2<input type="file" name="file"></span></a></li></td>
                                    <td>Archivo enviado</td>
                                    <td><button type="button" class="btn btn-primary btn-sm btn-block">Enviado</button></td>
                                    <td><button type="submit" class="btn btn-info btn-sm btn-block">Enviar</button></td>
                                </tr>
                                <tr>
                                    <td><span class="btn btn-default btn-sm btn-block btn-file">Numero 3<input type="file" name="file"></span></a></li></td>
                                    <td>El único detalle es en el periodo: Enero-Junio 2015</td>
                                    <td><button type="button" class="btn btn-danger btn-sm btn-block">Rechazado</button></td>
                                    <td><button type="submit" class="btn btn-info btn-sm btn-block">Enviar</button></td>
                                </tr>
                                <tr>
                                    <td><span class="btn btn-default btn-sm btn-block btn-file">Numero 4<input type="file" name="file"></span></a></li></td>
                                    <td>Formato aceptado</td>
                                    <td><button type="button" class="btn btn-success btn-sm btn-block">Aceptado</button></td>
                                    <td><button type="submit" class="btn btn-info btn-sm btn-block">Enviar</button></td>
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