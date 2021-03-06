@extends('templates.main')
@section('title')
    Página de inicio
@endsection
<div id="wrapper">
<?php
/*
    require_once 'assets/php/mendeley.php';

$query_data = array( 'profile_id' => 'e14b27b3-42ad-3416-ae74-2f3b9e07c3ec','title' => 'titulo de prueba', 'type' => 'generic');

$url = "documents?" . http_build_query( $query_data);
sendAuthorizedRequest($url);
*/
?>
    <!-- Navigation -->

    <div id="page-wrapper">

        <div class="container-fluid">
        {{-- @if (Auth::check()) --}}
        <!-- Page Heading -->
            <div id="divUtilidades" class="row">
                <div class="col-md-1 text-center">
                    <a href="#" id="limpiar" onclick="resetearPantalla();"> <span class="fa-stack fa-2x"> <i
                                    class="fa fa-eraser"
                                    aria-hidden="true"></i>
							<p class="textoInferiorIconosAwasome">Limpiar</p>
					</span>
                    </a>
                </div>
                <div class="col-md-3 text-center">
                </div>
                <div class="col-md-2 text-center">
                    <p class="parrafoResultadoDocumentosEncontrados">{{$publicaciones}}</p>
                </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- Muestra errores de sesión -->
                    @if (Session::has('errors'))
                        <div class="alert alert-warning" role="alert">
                            <ul>
                                <strong>Errores: </strong>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <div style="width: 100%; height: 40px;"></div>
            <div class="row">
                <div class="col-md-4">
                    <!-- Buscar publicaciones -->
                    <div class="form-group">
                        <input type="text" id="textoBusqueda" class="form-control" placeholder="Buscar" onkeypress="if(event.which === 13 || event.keyCode === 13){actualizarListado(null, null,0)}">

                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">

                        <button type="button" class="btn btn-primary mb-2" onclick="actualizarListado(null, null,0)">Buscar por publicación</button>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4">
                    <!-- Buscar autores -->
                    <div class="form-group">
                        <input type="text" id="textoBusquedaAutores" class="form-control" placeholder="Buscar" onkeypress="if(event.which === 13 || event.keyCode === 13){actualizarListado(null, null, 1)}">

                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">

                        <button type="button" class="btn btn-primary mb-2" onclick="actualizarListado(null, null,1)">Buscar por autor</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- Buscar Etiquetas -->
                    <div class="form-group">
                        <input type="text" id="textoBusquedaEtiquetas" class="form-control" placeholder="Buscar" onkeypress="if(event.which === 13 || event.keyCode === 13){actualizarListado(null, null,2)}">

                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">

                        <button type="button" class="btn btn-primary mb-2" onclick="actualizarListado(null, null,2)">Buscar por etiquetas</button>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4">
                    <!-- Buscar años -->
                    <div class="form-group">
                        <input type="text" id="textoBusquedaAnos" class="form-control" placeholder="Buscar" onkeypress="if(event.which === 13 || event.keyCode === 13){actualizarListado(null, null, 3)}">

                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">

                        <button type="button" class="btn btn-primary mb-2" onclick="actualizarListado(null, null,3)">Buscar por años</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="divPublicaciones" class="col-md-12 text-center">
                    <table id="tablaPublicaciones" class="table table-hover table-condensed">
                    </table>
                </div>
            </div>
            <!-- /.row -->
            {{-- @endif --}}
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- MODALES -->
<!-- FORMULARIO DE CONTACTO -->
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
     aria-labelledby="contacto" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Formulario de contacto</h4>
            </div>
            <div id="div-forms">
                <!-- Begin # Login Form -->
                <form role="form" name="guardarCategoria" method="POST" action="contacto_store"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-footer">
                        <div class="row">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-8">
                                    * Todos los campos son obligatorios
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                               <span class="col-md-1 col-md-offset-2 text-center"><i
                                            class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                   <input id="nombre" name="nombre" type="text" placeholder="Nombre"
                                           class="form-control">
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i
                                            class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="apellidos" name="apellidos" type="text" placeholder="Apellidos"
                                           class="form-control">
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i
                                            class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="Dirección email"
                                           class="form-control">
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i
                                            class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="telefono" name="telefono" type="text" placeholder="Teléfono"
                                           class="form-control">
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i
                                            class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="mensaje" name="mensaje"
                                              placeholder="Escriba aquí su mensaje" rows="7"></textarea>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <button id="login-button" type="submit"
                                        class="btn btn-primary btn-sm btn-block" onclick="">Enviar
                                </button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-sm btn-block"
                                        data-dismiss="modal">Cerrar
                                </button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                    </div>
                </form>
                <!-- End # Login Form -->
            </div>
            <!-- End # DIV Form -->
        </div>
    </div>
</div>
<!-- END # MODAL LOGIN -->

<!-- BEGIN # VER DETALLE -->
<div class="modal fade" id="verDetalle" tabindex="-1" role="dialog"
     aria-labelledby="verDetalle" aria-hidden="true"
     style="display: none;">
    <!-- <div id="verDetalle" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="labelVerDetalle" aria-hidden="true" style="display:none;"> -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Detalles de publicación</h4>
            </div>
            <div class="modal-body edit-content">
                <!-- Contenido llegado de base de datos -->

            </div>
        </div>
    </div>
</div>
<!-- END # VER DETALLE -->