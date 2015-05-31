@extends('master')


@section('content')
    <!-- Header -->
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-centered text-left">
                    <br><br>
                    <h1>ADMINISTRACIÓN</h1>
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
                        <h1> Necesitas estar logeado.</h1>
                    @else
                    @if (Auth::user()->type==6)
                    <div id="formatos">
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
                                    <td><textarea class="form-control" rows="3"></textarea></td>
                                    <td>
                                        <select class="form-control">
                                            <option>Rechazado</option>
                                            <option>Aceptado</option>
                                        </select>
                                    </td>
                                    <td><button type="button" class="btn btn-info btn-sm btn-block">Enviar</button></td>
                                </tr>
                                <tr>
                                    <td><button type="button" class="btn btn-default btn-sm btn-block">Formato 2</button></td>
                                    <td><textarea class="form-control" rows="3"></textarea></td>
                                    <td>
                                        <select class="form-control">
                                            <option>Rechazado</option>
                                            <option>Aceptado</option>
                                        </select>
                                    </td>
                                    <td><button type="button" class="btn btn-info btn-sm btn-block">Enviar</button></td>
                                </tr>
                                <tr>
                                    <td><button type="button" class="btn btn-default btn-sm btn-block">Formato 3</button></td>
                                    <td><textarea class="form-control" rows="3"></textarea></td>
                                    <td>
                                        <select class="form-control">
                                            <option>Rechazado</option>
                                            <option>Aceptado</option>
                                        </select>
                                    </td>
                                    <td><button type="button" class="btn btn-info btn-sm btn-block">Enviar</button></td>
                                </tr>
                                <tr>
                                    <td><button type="button" class="btn btn-default btn-sm btn-block">Formato 4</button></td>
                                    <td><textarea class="form-control" rows="3"></textarea></td>
                                    <td>
                                        <select class="form-control">
                                            <option>Rechazado</option>
                                            <option>Aceptado</option>
                                        </select>
                                    </td>
                                    <td><button type="button" class="btn btn-info btn-sm btn-block">Enviar</button></td>
                                </tr>
                            </tbody>
                        </table>
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