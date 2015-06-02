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

    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-centered">
                    @if (Auth::guest())
                        <h1> Necesitas estar logeado.
                    @else
                    @if (Auth::user()->type==1)
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
                            @for ($i = 1; $i < 11; $i++)

                                <tr>
                                    <form enctype="multipart/form-data" role="form" method="POST" name="FormFormato{{ $i }}" action="{{ url('/documentacion/upload') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="numeroDeFormato" value="{{ $i }}">
                                    <td>
                                        @if (empty($documentos[$i-1])  && empty($documentos[$i-2]))
                                            <span class="btn btn-default btn-sm btn-block btn-file" disabled="disabled">Numero {{ $i }}<input type="file" name="file"></span>
                                        @elseif (empty($documentos[$i-1])) 
                                            <span class="btn btn-default btn-sm btn-block btn-file">Numero {{ $i }} <input type="file" name="file"></span>
                                        @else ($documentos[$i-1]->formato === $i)
                                            @if ($documentos[$i-1]->status === 2)
                                                <span class="btn btn-default btn-sm btn-block btn-file">Numero {{ $i }}<input type="file" name="file"></span>
                                            @else
                                                <span class="btn btn-default btn-sm btn-block btn-file" disabled="disabled">Numero {{ $i }} <input type="file" name="file"></span>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if (empty($documentos[$i-1]))
                                            Formato no enviato
                                        @else
                                            {{$documentos[$i-1]->comentario}}
                                        @endif
                                    </td>
                                    <td>
                                        @if (empty($documentos[$i-1]))
                                            <button type="button" class="btn btn-info btn-sm btn-block">No enviado</button>
                                        @elseif ($documentos[$i-1]->status ===1)
                                            <button type="button" class="btn btn-primary btn-sm btn-block">Enviado</button>
                                        @elseif ($documentos[$i-1]->status ===2)
                                            <button type="button" class="btn btn-danger btn-sm btn-block">Rechazado</button>
                                        @elseif ($documentos[$i-1]->status ===3)
                                            <button type="button" class="btn btn-success btn-sm btn-block">Aceptado</button>
                                        @endif
                                    </td>

                                    <td><button type="submit" class="btn btn-info btn-sm btn-block">Enviar</button></td>
                                    </form>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                    @else
                    <h1>Solo para usuarios.</h1>
                    @endif
                    @endif
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.content-section-b -->
@endsection