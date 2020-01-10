<!-- Modales Productos -->
<div class="modal fade" id="addprod" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar nuevo producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="formulario">
                    <div class="form-group row">
                        <label for="producto" class="col-sm-3 col-form-label">Producto: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" id="producto" required placeholder="nombre del producto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descrip" class="col-sm-3 col-form-label">Descripcion: </label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="descripcion" required="" id="descrip"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stock" class="col-sm-4 col-form-label">Stock: </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="stock" required="" id="stock" min="1" max="10" placeholder="Cantidad del producto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stockDwseado" class="col-sm-4 col-form-label">Stock-Deseado: </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="stockDeseado" required="" id="stockDeseado" min="1" max="10" placeholder="Cantidad deseada del producto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="unidad" class="col-sm-4 col-form-label">Unidad: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="unidad" required="" id="unidad" placeholder="Unidad de producto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="provedor" class="col-sm-4 col-form-label">Provedor: </label>
                        <div class="col-sm-8">
                          <div id="IDProvedores">

                          </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="precio" class="col-sm-4 col-form-label">Precio: </label>
                        <div class="col-sm-8">
                            <input type="number" min="1" class="form-control" name="precioP" required id="precio" placeholder="Precio del producto">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="idbtnAproducto" class="btn btn-success" data-dismiss="modal">Agregar producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modales productos ....................................... -->
<!-- Modales Pedidos -->
<div class="modal fade" id="ModalCompletaPedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Llegada de pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" hidden="" id="inputidp">
                <div class="tablainfop" id="tablainfop">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="CompletarPed">Completar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="ModalAgregarPedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Llegada de pedido</h5>
                <button type="button" class="close" data-dismiss="modal" onclick="EliminarTablatmp()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col" id="seccion-provedor">
                        
                    </div>
                    <div class="col" id="seccion-productos">
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="GenerarPedido()">Completar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalsugped" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Sugerencia de pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" hidden="" id="inputid">
                <div id="contsugped">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="idsugped">Completar</button>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="ModalCancelaPedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Cancelación de pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" hidden="" id="inputidcp">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" id="idCancelarP">Cancelar pedido</button>
            </div>
        </div>
    </div>
</div>



<!-- Modales Pedidos .......................................... -->

<!-- Modales Usuario ........................................... -->
    <!-- eliminar usuario ------------------------>
    <div class="modal fade" id="modaleliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Eliminar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="">Ingrese el nombre del usuario</label>
                <input type="text" id="nombreEU" name="nombre" placeholder="Nombre usuario">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="EliminarUsuario">Completar</button>
            </div>
        </div>
    </div>
</div>

<!-- editar usuario ------------------------>


<!--  Agregar Usuario ------------------------------------------------------>

<div class="modal fade" id="modalregistrarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="datosUsuario">
                <div class="form-group row">
                    <label for="nombre" class="col-sm-4 col-form-label">Nombre del usurio</label>
                    <div class="col-sm-8">
                        <input type="text"  class="form-control" required name="nombre" id="nombreRU" placeholder="nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pass" class="col-sm-4 col-form-label">contraseña</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" required name="pass" id="passRU" placeholder="contraseña">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tipoRU" class="col-sm-4 col-form-label">Tipo de usuario</label>
                    <div class="col-sm-8">
                    <SELECT NAME="tipo" class="from-control" SIZE=1 onChange="">
                        <OPTION VALUE="">Seleccione una tipo de usuario</OPTION>
                        <OPTION VALUE="Almacenista">Almacenista</OPTION>
                        <OPTION VALUE="Agente de ventas">Agente de ventas</OPTION>
                        <OPTION VALUE="Administrador">Administrador</OPTION>
                    </SELECT>
                    </div>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="AgregarUsuario">Completar</button>
            </div>
        </div>
    </div>
</div>


<!-- Mostrar Usuarios< -->
<div class="modal fade" id="modalbuscarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Mostrar Usuarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="ocultarED">
                  <label for="nombreBU">Ingrese el nombre del usuario</label>
                  <input type="text" id="nombreBU" name="nombreBU" placeholder="Nombre usuario">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="BuscarUsuario">Completar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalconsularUsuarioI" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Consultar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="">Ingrese el nombre del usuario</label>
                <input type="text" id="nombreUI" name="nombre" placeholder="Nombre usuario">
            </div>
            <div class="modal-body">
                <label for="">Ingrese el tipo de usuario</label>
                <SELECT NAME="tipo" id="tipoUI" class="from-control" SIZE=1 onChange="">
                    <OPTION VALUE="">Seleccione una tipo de usuario</OPTION>
                    <OPTION VALUE="Almacenista">Almacenista</OPTION>
                    <OPTION VALUE="Agente de ventas">Agente de ventas</OPTION>
                    <OPTION VALUE="Administrador">Administrador</OPTION>
                </SELECT>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="consultarUsuarioI">Completar</button>
            </div>
        </div>
    </div>
</div>





<!-- Modales Clientes ......................................... -->
<div class="modal fade" id="ModalEditarClientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: #16865D; color: white; font-weight: bold;">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="forActCliente" method="POST">
                    <div class="form-group row">
                        <label for="idCliente" class="col-sm-3 col-form-label">idCliente: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="idCliente" required="" id="idCliente" value="" placeholder="idCliente" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nombre" required="" id="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-3 col-form-label">Telefono: </label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="telefono" required="" id="telefono" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccion" class="col-sm-3 col-form-label">Dirección: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="direccion" required="" id="direccion" placeholder="Dirección">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" id="actClient">Guardar Cambios</button>
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalOpcionesClientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: #16865D; color: white; font-weight: bold;">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Opciones Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#ModalEditarClientes" onClick="consultarCliente()">Editar</button>
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" id="delClient">Eliminar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalAgregarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: #16865D; color: white; font-weight: bold;">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Añadir Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="forAddCliente" method="POST">
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nombre" required="" id="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-3 col-form-label">Telefono: </label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="telefono" required="" id="telefono" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccion" class="col-sm-3 col-form-label">Dirección: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="direccion" required="" id="direccion" placeholder="Dirección">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" id="addClient">Agregar Cliente</button>
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modales Clientes ......................................... -->




<div class="modal fade" id="modalInfoPagos" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Completar pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="inputidPagos" hidden="">
                <div id="idPagos">
                      
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="CompletarPago()">Completar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modales Servicios ........................................ -->
<div class="modal fade" id="modalAgregarServicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: #16865D; color: white; font-weight: bold;">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar Servicio</h5>
            </div>
            <div class="modal-body">
                <form id="forAddServicio" method="POST">
                    <h6>Seleciona el nombre del Cliente</h6>
                    <div class="form-group row">
                        <label for="idClient" class="col-sm-3 col-form-label">Cliente: </label>
                        <div class="col-sm-8" id="conClientes">
                            <select class="selectpicker" name="idClient" id="idClient">

                            </select>
                        </div>
                    </div>
                    <hr>
                    <h6>Ingresa el numero de las Mesualidades para pagar el servicio</h6>
                    <div class="form-group row">
                        <label for="mensualidades" class="col-sm-3 col-form-label">Mensualidades </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="mensualidades" required="" id="mensualidades" placeholder="Mensualidades">
                        </div>
                    </div>
                    <hr>
                    <h6>Ingresa el precio total sobre el servicio</h6>
                    <div class="form-group row">
                        <label for="precio" class="col-sm-3 col-form-label">Precio total: </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="precioTotal" required="" id="precioTotal" placeholder="Precio Total">
                        </div>
                    </div>
                    <hr>
                    <h6>Seleciona el servicio deseado </h6>
                    <div class="form-group row">
                        <label for="concepto" class="col-sm-3 col-form-label">Concepto:</label>
                        <div class="col-sm-8">
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" class="form-control" name="concepto" id="concepto" value="I">
                                    Instalacion
                                </label>
                                <label class="radio">
                                    <input type="radio" class="form-control" name="concepto" id="concepto" value="M">
                                    Mantenimiento
                                </label>
                            </div>
                        </div>
                    </div>
                    <h6>Ingresa una brebe </h6>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-3 col-form-label">Descripcion: </label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" style="width: 300px;height:100px" name="descripcion" id="descripcion" required="" placeholder="Ingresa la descripcion"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" id="addServ">Registrar Servicio</button>
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalOpcionesServicios" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: #16865D; color: white; font-weight: bold;">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Opciones de Servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#modalEditarServicio" onClick="ConsultarServicio()">Editar</button>
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" onClick="EliminarServicio()">Eliminar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalEditarServicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: #16865D; color: white; font-weight: bold;">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar Servicio</h5>
            </div>
            <div class="modal-body">
                <form id="forActServicio" method="POST">
                    <h6>Servicio</h6>
                    <div class="form-group row">
                        <label for="noServ" class="col-sm-3 col-form-label">No Servicio: </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="noServ" required="" id="noServ" placeholder="Numero de Servicio" readonly>
                        </div>
                    </div>
                    <hr>
                    <h6>Nombre del Cliente</h6>
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label">Cliente: </label>
                        <div class="col-sm-8" id="conClientes">
                            <input type="text" class="form-control" name="nombre" required="" id="nombre" placeholder="Nombre del Cliente" readonly>
                        </div>
                    </div>
                    <hr>
                    <h6>Ingresa el numero de las Mesualidades para pagar el servicio</h6>
                    <div class="form-group row">
                        <label for="mensualidades" class="col-sm-3 col-form-label">Mensualidades </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="mensualidades" required="" id="mensualidades" placeholder="Mensualidades">
                        </div>
                    </div>
                    <hr>
                    <h6>Ingresa el precio total sobre el servicio</h6>
                    <div class="form-group row">
                        <label for="precio" class="col-sm-3 col-form-label">Precio total: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="precio" required="" id="precio" placeholder="Precio Total">
                        </div>
                    </div>
                    <hr>
                    <h6>Seleciona el servicio deseado </h6>
                    <div class="form-group row">
                        <label for="concepto" class="col-sm-3 col-form-label">Concepto:</label>
                        <div class="col-sm-8">
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" class="form-control" name="concepto" id="conceptoI" value="I">
                                    Instalacion
                                </label>
                                <label class="radio">
                                    <input type="radio" class="form-control" name="concepto" id="conceptoM" value="M">
                                    Mantenimiento
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-3 col-form-label">Descripcion: </label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" style="width: 300px;height:100px" name="descripcion" id="descripcion" required="" placeholder="Ingresa la descripcion"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" onClick="ActualizarServicio()">Guardar</button>
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modales Servicios ----------->


<div class="modal fade" id="addprovedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar nuevo provedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="formulario_provedor">
                    <div class="form-group row">
                        <label for="provedor" class="col-sm-3 col-form-label">Provedor: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" id="provedor" required placeholder="nombre del provedor">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="idbtnrprovedor" class="btn btn-success" data-dismiss="modal">Agregar proveedor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modaleMostrarProvedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Mostrar provedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="">Ingrese el nombre del provedor</label>
                <input type="text" id="nombrePC" name="nombre" placeholder="Nombre del provedor">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="mostrarProvedor">Completar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modales Provedor ----------->





<!-- Scripts productos -->

<script type="text/javascript">
    $(document).ready(function(){
    $('#idbtnAproducto').click(function(){
        var url = "php/Productos/agregarProducto.php";
        $.ajax({
           type: "POST",
           url: url,
           data: $("#formulario").serialize(),
           success: function(r)
           {
            if(r == 1){
               alertify.success("Pedido asignado al inventario");
               }else{
                alertify.error("Fallo el servidor"+r);
               }
           }
       });
    });
});
</script>


<script type="text/javascript">
    $(document).ready(function () {
        $("#AgregarProdSelect").click(function(){
            $("#IDProvedores").load("php/Provedores/ConsultarProvedores.php"); 
        });
    });
</script>




<!-- Scripts productos ............................................. -->

<!-- Scripts pedidos -->


<script type="text/javascript">
    $(document).ready(function() {
        $("#CompletarPed").click(function() {
            completapedido();
        });
    });
</script>



<script type="text/javascript">
    $(document).ready(function() {
        $("#idsugped").click(function() {
            Completasugped();
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#idCancelarP").click(function() {
            EliminarPedido();
        });
    });
</script>

<!-- Scripts pedidos ............................................... -->
<!-- Scripts Usuarios ................................................. -->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#AgregarUsuario").click(function() {
            AgregarUsuario();
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("#EliminarUsuario").click(function() {
          EliminarUsuario();
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("#EditarUsuario").click(function() {
          EditarUsuario();
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function () {
        $("#BuscarUsuario").click(function(){
          BuscarUsuario();
        });
      });
    </script>



<script type="text/javascript">
    $(document).ready(function(){
        $("#consultarUsuarioI").click(function(){
            ConsultarUsuarioI();
        });
    });
</script>



<!-- Scripts Usuarios ................................................. -->

<!-- Scripts Clientes ................................................. -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#addClient').click(function() {
            agregarCliente();
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#actClient').click(function() {
            ActualizarCliente();
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#delClient').click(function() {
            var id = $("input#idCliente").val();
            eliminarCliente(id);
        });
    });
</script>
<!-- Scripts Clientes ................................................. -->
<!-- Scripts Servicios ................................................. -->
<script>
    $(document).ready(function() {
        $('#addServ').click(function() {
            $.ajax({
                method: "POST",
                url: "php/Servicios/agregarServicio.php",
                data:{idClient:$('select#idClient').val(),mensualidades:$('input#mensualidades').val(),precio:$('#precioTotal').val(),concepto:$('#concepto').val(),descripcion:$('#descripcion').val()},
                success: function (r) {
                    if (r == 1) {
                        $('#idCargarPagina').load("php/Servicios/Servicios.php");
                    } else {
                    alertify.error("Fallo el servidor o algunos campos se encuentran vacios");
                    }
                }
            });
        });
    });
</script>


<!-- Scripts Servicios ................................................. -->


<!-- Scripts Provedores ............................................ -->
<script>
    $(document).ready(function() {
        $('#idbtnrprovedor').click(function() {
            AgregarProvedor();
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#mostrarProvedor").click(function() {
            MostrarProvedores(2);
        });
    });
</script>

