<div class="row">
    <div class="col-md-12">
        <h3 class="page-title">ECONOSOLAR <small>Panel de control</small></h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-8" id="tablaDatatable">

    </div>
    <div class="col-lg-4" id="sugPedido">

    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $("#idbtnCargarPagina").click(function() {
            $('#idCargarPagina').load('inicio.php');
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tablaDatatable').load('php/Pedidos/Pedidos.php');
    });

</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#sugPedido").load('php/Pedidos/SugPedido.php');
    });

</script>
