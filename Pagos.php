<?php
    require_once "clases/conexion.php";
    $obj= new conectar();
    $conexion=$obj->conexion();
    $sql="create temporary table tmpPagos select idcliente from clientes";
    mysqli_query($conexion,$sql);
    $sql="select * from tmpPagos";
    $cliemtes=mysqli_query($conexion,$sql);
?>

<div class="row">
    <label for="InputPago">Busqueda por cliente</label>
    <input class="form-control" type="text" id="InputPago" onchange="MostrarPagoInd()">
    <button class="btn btn-primary" onclick="MostrarPagoInd()">Buscar</button>
</div>
<div class="row">
    <div class="col-md-12 col-bg-12">
        <table class="table table-condensed table-bordered" id="iddatatable">
            <thead style="background-color: #dc3545;color: white; font-weight: bold;">
                <tr>
                   <td>Usuario</td>
                    <?php
            $i=0;
			while ($i<18) {
                $i++;
				?>
                    <td>Mes <?php echo $i ?></td>
                    <?php } ?>
                </tr>
            </thead>
            <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
                <tr>
                   <td>Uduario</td>
                    <?php
            $i=0;
			while ($i<18) {
                $i++;
				?>
                    <td>Mes <?php echo $i ?></td>
                    <?php
			}
			?>
                </tr>
            </tfoot>
            <tbody>
                <?php while ($mostrar=mysqli_fetch_row($cliemtes)) { ?>
                <tr>
                   <td><?php 
                        $sql="select nombre from clientes where idcliente=$mostrar[0]";
                        $result=mysqli_query($conexion,$sql);
                        $resultado=mysqli_fetch_row($result);
                        echo $resultado[0];
                       ?></td>
                    <?php
            $sql="select p.monto,p.idpago,c.nombre from pagos p 
inner join pagosregistropagos prp on prp.idpago=p.idpago
inner join registropagos rp on rp.idregistropago=prp.idregistropago
inner join clientes c on c.idcliente=rp.idcliente where c.idcliente=$mostrar[0] order by p.idpago";
            $pagos=mysqli_query($conexion,$sql);
			 while ($pago=mysqli_fetch_row($pagos)) { ?>
                 
                <?php if($pago[0]>0): ?>
                        <td data-toggle="tooltip" data-placement="top" title="<?php echo $pago[2] ?>"><span class="badge badge-success">pagado</span></td>
                <?php endif ?>        
                <?php if($pago[0]==0): ?> 
                        <td data-toggle="tooltip" data-placement="top" title="<?php echo $pago[2] ?>"><a onclick="Pagos(<?php echo $mostrar[0]; echo ","; echo $pago[1] ?>)"  data-toggle="modal" data-target="#modalInfoPagos"><span class="badge badge-warning">pendiente</span></a></td>
                <?php endif ?>
                    <?php } ?>
                </tr>
                <?php } $sql="drop table tmpPagos"; mysqli_query($conexion,$sql) ?>
            </tbody>
        </table>
    </div>
</div>
