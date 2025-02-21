    <!-- ================================================== VIEW ================================================== -->
    <?php if ($action == 'view' || empty($action)) { ?>
        <div class="page">
            <div class="page-title orange">
                <h3>
                    <?php echo $breadcrumb; ?>
                </h3>
                <p>Información sobre el
                    <?php echo $breadcrumb; ?>
                </p>
            </div>
            <div class="page-content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel rounded-0">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="panel-title">Ver datos del
                                            <?php echo $breadcrumb; ?>
                                        </h5>
                                    </div>
                                </div>

                                <!-- ========== Flashdata ========== -->
                                <?php if ($this->session->flashdata('success') || $this->session->flashdata('warning') || $this->session->flashdata('error')) { ?>
                                    <?php if ($this->session->flashdata('success')) { ?>
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="fa fa-check sign"></i>
                                            <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                    <?php } else if ($this->session->flashdata('warning')) { ?>
                                        <div class="alert alert-warning">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="fa fa-check sign"></i>
                                            <?php echo $this->session->flashdata('warning'); ?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="fa fa-warning sign"></i>
                                            <?php echo $this->session->flashdata('error'); ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                                <!-- ========== End Flashdata ========== -->
                                <div class="panel-body container-fluid table-detail">
                                    <div class="table-full table-view">
                                        <div class="navigation-btn">
                                            <form action="" method="post" id="form">
                                                <div class='row margin-bottom'>
                                                    <div class='btn-search'>Buscar por: </div>
                                                    <div class='col-md-3 col-sm-12'>
                                                        <div class='button-search'>
                                                            <?php array_pilihan('cari', $berdasarkan, $cari); ?>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-3 col-sm-12 select-search'>
                                                        <div class="input-group">
                                                            <input type="text" name="q" class="form-control" value="<?php echo $q; ?>" />
                                                            <span class="input-group-btn">
                                                                <button type="submit" name="kirim" class="btn btn-success" type="button">
                                                                    <i class="fa fa-search"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='btn-navigation'>
                                                    <div class='pull-right'>
                                                        <a class="btn btn-success" href="<?php echo site_url(); ?>website/arrival"><i class="fa fa-refresh"></i></a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped table-bordered">
                                                <thead>
                                                    <th width=80>Id</th>
                                                    <th width=120>Identificador</th>
                                                    <th width=150>Pedido</th>
                                                    <th width=150>Cliente</th>
                                                    <th width=150>Producto</th>
                                                    <th width=150>Tipo de evento</th>
                                                    <th width=150>Número de placa de la unidad</th>
                                                    <th width=150>Tipo de transporte</th>
                                                    <th width=150>Tipo de caja / contenedor</th>
                                                    <th width=150>N.de Identificación del contenedor</th>
                                                    <th width=150>Nombre del conductor</th>
                                                    <th width=150>Origen</th>
                                                    <th width=150>Tipo de maniobra</th>
                                                    <th width=150>Fecha de evento</th>
                                                    <th width=150>Tipo de pallet</th>
                                                    <th width=150>Stock</th>
                                                    <th width=150>Cantidad de producto por pallet</th>
                                                    <th width=150>Cantidad de pallets</th>
                                                    <th width=150>Pallets dañados</th>
                                                    <th width=150>Stock dañado</th>
                                                    <th width=150>Pallets Ok</th>
                                                    <th width=150>Stock Ok</th>
                                                    <th width=150>Pallets disponible</th>
                                                    <th width=150>Caducidad</th>
                                                    <th width=150>Hora de llegada</th>
                                                    <th width=150>Inicio de maniobra</th>
                                                    <th width=150>Fin de maniobra</th>
                                                    <th width=120>Hora de salida</th>
                                                    <th width=120>Nota</th>
                                                    <th width=120>Estatus</th>
                                                    <th width=120>Creado por</th>
                                                    <th width=120>Fecha de creación</th>
                                                    <th width=120>Modificado por</th>
                                                    <th width=120>Última vez modificado</th>
                                                    <?php if ($admin->admin_level_kode == 1) { ?>
                                                        <th class="text-center">Acción</th>
                                                    <?php } ?>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i    = $page + 1;
                                                    $like_arrivalnew[$cari]            = $q;
                                                    if ($jml_data > 0) {
                                                        foreach ($this->ADM->grid_all_arrivalnew('', 'id_arrival', 'ASC', $batas, $page, '', $like_arrivalnew) as $row) {
                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $i; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->identification_number; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->sale_order; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->nama_supplier; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->product_name; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->event_type; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->platenumber; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->vehicletype; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->container_type; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->container_number; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->name_driver; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->state; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->type_maneuver; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->event_date; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->type_platform ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->stock; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->quantity_product_pallet; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->quantity_pallet; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->damaged_pallets; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->damaged_stock; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->good_pallets; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->good_stock; ?>
                                                                </td>
                                                               
                                                                <td>
                                                                    <?php echo $row->expiration_date; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->arrival_time; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->maneuver_start; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->maneuver_end; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->departure_time; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->note; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->status; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->created_by; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo dateIndo($row->created_date); ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row->updated_by; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo dateIndo($row->updated_date); ?>
                                                                </td>
                                                                <?php if ($admin->admin_level_kode == 1) { ?>
                                                                    <td class="text-center action">
                                                                        <a class="btn-update" href="<?php echo site_url(); ?>website/movements/edit/<?php echo $row->id_arrivalnew; ?>">
                                                                            <i class="icon wb-pencil"></i>
                                                                        </a>
                                                                        <a class="text-danger" href="javascript:;" data-id="<?php echo $row->id_arrivalnew; ?>" data-toggle="modal" data-target="#modal-konfirmasi" title="<?php echo $row->identification_number; ?>">
                                                                            <i class="icon wb-trash"></i>
                                                                        </a>
                                                                    </td>
                                                                <?php } ?>

                                                            </tr>
                                                        <?php
                                                            $i++;
                                                        }
                                                    } else {
                                                        ?>
                                                        <tr>
                                                            <td colspan="7" class="style-center">¡No hay datos aún!</td> <!--No data yet!-->
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="wrapper">
                                            <div class="paging">
                                                <div id='pagination'>
                                                    <div class='pagination-right'>
                                                        <ul class="pagination">
                                                            <?php if ($jml_halaman > 1) {
                                                                echo pages($halaman, $jml_halaman, 'website/movements/view', $id = "");
                                                            } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="total">Total :
                                                <?php echo $jml_data; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($admin->admin_level_kode == 1) { ?>
                    <a href="<?php echo site_url(); ?>website/arrival/tambah">
                        <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
                            <i class="icon wb-plus" aria-hidden="true"></i>
                        </button>
                    </a>
                <?php } ?>

            </div>
        </div>
        <!-- ========== Modal Konfirmasi ========== -->
        <div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Confirmación</h4>
                    </div>

                    <div class="modal-body" style="background:#d9534f;color:#fff">

                        ¿Estás seguro de que quieres borrar estos datos?
                        <!--ARE YOU SURE YOU WANT TO DELETE THIS DATA?-->
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-danger" id="hapus-movements">Sí</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========== End Modal Konfirmasi ========== -->
        <!-- ================================================== END VIEW ================================================== -->


        <!-- ================================================== EDIT ================================================== -->
    <?php } elseif ($action == 'edit') { ?>
        <div class="page">
            <div class="page-title orange">
                <h3>
                    <?php echo $breadcrumb; ?>
                </h3>
                <p>Información sobre el
                    <?php echo $breadcrumb; ?>
                </p>
            </div>
            <script>
                function updateDateTime() {
                    const now = new Date();
                    const formattedDateTime = now.getFullYear() + '-' +
                        ('0' + (now.getMonth() + 1)).slice(-2) + '-' +
                        ('0' + now.getDate()).slice(-2) + ' ' +
                        ('0' + now.getHours()).slice(-2) + ':' +
                        ('0' + now.getMinutes()).slice(-2) + ':' +
                        ('0' + now.getSeconds()).slice(-2);
                    document.getElementById('updated_date').value = formattedDateTime;
                }

                // Actualiza la fecha y hora automáticamente cuando la página se carga
                window.onload = updateDateTime;
            </script>



            <div class="page-content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel rounded-0">
                            <div class="panel-heading">
                                <h5 class="panel-title">Registro de <?php echo $breadcrumb; ?></h5>
                            </div>
                            <div class="panel-body container-fluid">
                                <form action="<?php echo site_url(); ?>website/movements/edit/<?php echo $id_arrivalnew; ?>" method="post" id="exampleStandardForm" autocomplete="off">
                                    <div class="row">
                                        <div class="col-md-12 mt-2">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <h5>Datos generales de arribo</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-4 mt-2">
                                                            <input type="hidden" name="id_arrivalnew" value="<?php echo $id_arrivalnew; ?>" />
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputText">N.Identificación de evento</label>
                                                                <input type="text" class="form-control input-sm" value="<?php echo $identification_number; ?>" id="identification_number" name="identification_number" required readonly />
                                                            </div>
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputText">Pedido</label>
                                                                <input type="text" class="form-control input-sm" value="<?php echo $sale_order; ?>" id="sale_order" name="sale_order" placeholder="Escribe el pedido" required readonly />
                                                            </div>
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputText">Cliente</label>
                                                                <input type="text" class="form-control input-sm" value="<?php echo $nama_supplier; ?>" id="nama_supplier" readonly />
                                                                <input type="hidden" name="id_supplier" value="<?php echo $id_supplier; ?>" id="id_supplier" />
                                                            </div>
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputText">Tipo de evento</label>
                                                                <input type="text" class="form-control input-sm" value="<?php echo $event_type; ?>" id="event_type" name="event_type" placeholder="Introdu el tipo de evento" required readonly />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="container_number">N.Identificación del contenedor</label>
                                                                <select name="container_number" id="container_number" class="form-control" readonly>
                                                                    <option value="">Seleccione el N.Identificador del contenedor</option>
                                                                    <?php foreach ($containers as $container) : ?>
                                                                        <option value="<?= $container->container_number ?>" <?php echo ($container->container_number == $container_number) ? 'selected' : ''; ?>><?= $container->container_number ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="container_type">Tipo de Contenedor</label>
                                                                <select name="container_type" id="container_type" class="form-control" readonly>
                                                                    <option value="<?= $container_type ?>" selected><?= $container_type ?></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mt-2">
                                                            <div class="form-group">
                                                                <label for="id_origin">Origen</label>
                                                                <select name="id_origin" id="id_origin" class="form-control" readonly>
                                                                    <option value="">Seleccione el Origen</option>
                                                                    <?php foreach ($origins as $origin) : ?>
                                                                        <option value="<?= $origin->id_origin ?>" <?php echo ($origin->id_origin == $id_origin) ? 'selected' : ''; ?>><?= $origin->state ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="id_maneuver">Tipo de maniobra</label>
                                                                <select name="id_maneuver" id="id_maneuver" class="form-control" readonly>
                                                                    <option value="">Seleccione el Origen</option>
                                                                    <?php foreach ($maneuvers as $maneuver) : ?>
                                                                        <option value="<?= $maneuver->id_maneuver ?>" <?php echo ($maneuver->id_maneuver == $id_maneuver) ? 'selected' : ''; ?>><?= $maneuver->type_maneuver ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputDate">Fecha de evento</label>
                                                                <input type="date" class="form-control input-sm" value="<?php echo $event_date; ?>" id="event_date" name="event_date" required readonly />
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="platenumber">Número de placa</label>
                                                                <select name="platenumber" id="platenumber" class="form-control" readonly>
                                                                    <option value="">Seleccione el número de placa</option>
                                                                    <?php foreach ($transports as $transport) : ?>
                                                                        <option value="<?= $transport->platenumber ?>" <?php echo ($transport->platenumber == $platenumber) ? 'selected' : ''; ?>><?= $transport->platenumber ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="vehicletype">Tipo de Unidad / Transporte</label>
                                                                <select name="vehicletype" id="vehicletype" class="form-control" readonly>
                                                                    <option value="<?= isset($vehicletype->vehicletype) ? htmlspecialchars( $vehicletype->vehicletype) : '' ?>" selected>
                                                                    <?= isset($vehicletype->vehicletype) ? htmlspecialchars($vehicletype->vehicletype) : 'Seleccione un tipo de unidad' ?>   
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mt2">
                                                            <div class="form-group">
                                                                <label for="id_driver">Conductor</label>
                                                                <select name="id_driver" id="id_driver" class="form-control" readonly>
                                                                    <option value="">Seleccione un tipo de pallet</option>
                                                                    <?php foreach ($drivers as $driver) : ?>
                                                                        <option value="<?= $driver->id_driver ?>" <?php echo ($driver->id_driver == $id_driver) ? 'selected' : ''; ?>><?= $driver->name_driver ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputTime">Hora de llegada</label>
                                                                <input type="time" value="<?php echo $arrival_time; ?>" class="form-control input-sm" id="arrival_time" name="arrival_time" required readonly>
                                                            </div>
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputTime">Inicio de maniobra</label>
                                                                <input type="time" class="form-control input-sm" value="<?php echo $maneuver_start; ?>" id="maneuver_start" name="maneuver_start" required readonly />
                                                            </div>
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputTime">Fin de maniobra</label>
                                                                <input type="time" class="form-control input-sm" value="<?php echo $maneuver_end; ?>" id="maneuver_end" name="maneuver_end" required readonly />
                                                            </div>
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputTime">Hora de salida</label>
                                                                <input type="time" class="form-control input-sm" value="<?php echo $departure_time; ?>" id="departure_time" name="departure_time" required readonly />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <h5>Datos del producto</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered" id="editProductsTable">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                    <!--<th>N.</th>-->
                                                                    <th>N_sub</th>
                                                                    <th>Nombre del producto</th>
                                                                    <th>Tipo de pallet</th>
                                                                    <th>Stock</th>
                                                                    <th>Cantidad de producto por pallet</th>
                                                                    <th>Cantidad de pallet</th>
                                                                    <th>Pallets dañados</th>
                                                                    <th>Stock dañado</th>
                                                                    <th>Pallet Ok</th>
                                                                    <th>Stock Ok</th>
                                                                    <th>Tipo de movimiento</th>
                                                                    <th>Fecha de movimiento</th>
                                                                    <th>Ubicación/Mov.</th>
                                                                    <th>Ubicación (fila)</th>
                                                                    <th>Ubicación (columna)</th>
                                                                    <th>N. de rack</th>
                                                                    <th>N. de nivel</th>
                                                                    <th>Mov. creado por</th>
                                                                    <th>Caducidad</th>
                                                                    <th>Nota</th>
                                                                    <th>Estatus</th>
                                                                    <th>Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $index = 1; ?>
                                                                <!--var_dump($productss)-->
                                                                <?php if (isset($productss) && is_array($productss)) : ?>
                                                                    <?php foreach ($productss as $product) : ?>
                                                                        <tr>
                                                                            <div class="form-group form-material">
                                                                                <input type="hidden" name="products_update[<?php echo $index; ?>][id_arrivalnew]" value="<?= $product->id_arrivalnew ?>" style="padding: 5px; font-size: 12px; text-align: center; width: 80px;" readonly />
                                                                            </div>
                                                                            <!-- <td>
                                                                                <div class="form-group form-material">
                                                                                    <?php if (!is_null($product->id_arrival)) : ?>
                                                                                        <input class="form-control input-sm" type="text" name="products_update[<?php echo $index; ?>][id_arrival]" id="id_arrival_<?php echo $index; ?>" value="<?= $product->id_arrival ?>" style="padding: 5px; font-size: 12px; text-align: center; width: 80px;" readonly />
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            
                                                                                </td>-->
                                                                            <!--<td><?= $index; ?></td>-->
                                                                            <!-- <td><?= $product->id_movement; ?></td>-->


                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <?php if (!is_null($product->id_movement)) : ?>
                                                                                        <input class="form-control input-sm" type="text" name="products_update[<?php echo $index; ?>][id_movement]" id="id_movement_<?php echo $index; ?>" value="<?= $product->id_movement ?>" style="padding: 5px; font-size: 12px; text-align: center; width: 80px;" readonly />
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <!-- Campo oculto para id_product -->
                                                                                <input type="hidden" name="products_update[<?php echo $index; ?>][id_product]" value="<?= $product->id_product ?>" />
                                                                                <div class="form-group form-material">
                                                                                    <!-- Select para seleccionar el producto -->
                                                                                    <select name="products_update[<?php echo $index; ?>][id_product]"
                                                                                        class="form-control"
                                                                                        style="padding: 5px; font-size: 12px; text-align: center; width: 200px;"
                                                                                        onchange="document.getElementById('product_name_<?php echo $index; ?>').value = this.options[this.selectedIndex].text">
                                                                                        <option value="">Seleccione un producto</option>
                                                                                        <?php foreach ($products as $product_na) : ?>
                                                                                            <option value="<?= $product_na->id_product ?>"
                                                                                                <?php echo ($product->id_product == $product_na->id_product) ? 'selected' : ''; ?>>
                                                                                                <?= $product_na->product_name ?>
                                                                                            </option>
                                                                                        <?php endforeach; ?>
                                                                                    </select>
                                                                                </div>
                                                                                <!-- Campo oculto para enviar el nombre del producto -->
                                                                                <input type="hidden"
                                                                                    id="product_name_<?php echo $index; ?>"
                                                                                    name="products_update[<?php echo $index; ?>][product_name]"
                                                                                    value="<?= $product->product_name ?>" />
                                                                            </td>
                                                                            <td>
                                                                                <input type="hidden" name="products_update[<?php echo $index; ?>][id_platform]" value="<?= $product->id_platform ?>" />
                                                                                <div class="form-group form-material">
                                                                                    <select name="products_update[<?php echo $index; ?>][id_platform]"
                                                                                        class="form-control"
                                                                                        style="padding: 5px; font-size: 12px; text-align: center; width: 200px;"
                                                                                        onchange="document.getElementById('type_platform_<?php echo $index; ?>').value = this.options[this.selectedIndex].text">
                                                                                        <option value="">Seleccione un tipo de pallet</option>
                                                                                        <?php foreach ($platforms as $platform) : ?>
                                                                                            <option value="<?= $platform->id_platform ?>"
                                                                                                <?php echo ($product->id_platform == $platform->id_platform) ? 'selected' : ''; ?>>
                                                                                                <?= $platform->type_platform ?>
                                                                                            </option>
                                                                                        <?php endforeach; ?>
                                                                                    </select>
                                                                                </div>
                                                                                <!-- Campo oculto para enviar el nombre del pallet -->
                                                                                <input type="hidden"
                                                                                    id="type_platform_<?php echo $index; ?>"
                                                                                    name="products_update[<?php echo $index; ?>][type_platform]"
                                                                                    value="<?= $product->type_platform ?>" />
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products_update[<?php echo $index; ?>][stock]" id="stock_<?php echo $index; ?>" value="<?php echo $product->stock; ?>" data-id-arrival="<?php echo $product->id_arrival; ?>" data-original-stock="<?php echo $product->stock ?>" data-id-movement="<?php echo $idMovement; ?>" data-product-id-movement="<?php echo $product->id_movement; ?>" placeholder="Introduce el stock" oninput="actualizarStockOk(<?php echo $index; ?>, false); actualizarStockPrincipal(<?php echo $index; ?>, true); actualizarQuantityPalletPrincipal(<?php echo $index; ?>, true) " readonly required />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][quantity_product_pallet]" value="<?php echo $product->quantity_product_pallet; ?>" placeholder="Escribe la cantidad de producto por pallets" id="quantity_product_pallet_<?php echo $index; ?>" data-id-arrival="<?php echo $product->id_arrival; ?>" data-original-quantity-product-pallet="<?php echo $product->quantity_product_pallet; ?>" data-id-movement="<?php echo $idMovement; ?>" data-product-id-movement="<?php echo $product->id_movement; ?>" oninput="actualizarStockPrincipal(<?php echo $index; ?>, true); actualizarStockSubregistro(<?php echo $index; ?>, true); actualizarQuantityPalletPrincipal(<?php echo $index; ?>, true) " onkeydown="if (event.key === 'Enter') { actualizarStock(<?php echo $index; ?>, true, true); }" required />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][quantity_pallet]" value="<?php echo $product->quantity_pallet; ?>" placeholder="Escribe la cantidad de pallets" id="quantity_pallet_<?php echo $index; ?>" data-id-arrival="<?php echo $product->id_arrival; ?>" data-original-quantity-pallet="<?php echo $product->quantity_pallet; ?>" data-id-movement="<?php echo $idMovement; ?>" data-product-id-movement="<?php echo $product->id_movement; ?>" oninput="actualizarPalletsOk(<?php echo $index; ?>, false); actualizarStockPrincipal(<?php echo $index; ?>, true); actualizarStockSubregistro(<?php echo $index; ?>, true); actualizarPalletOkPrincipal(<?php echo $index; ?>, true) " onkeydown="if (event.key === 'Enter') { actualizarStock(<?php echo $index; ?>, true, true); }" required />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][damaged_pallets]" value="<?php echo $product->damaged_pallets; ?>" placeholder="Escribe la cantidad de pallets dañados" id="damaged_pallets_<?php echo $index; ?>" data-id-arrival="<?php echo $product->id_arrival; ?>" data-original-damaged-pallets="<?php echo $product->damaged_pallets; ?>" data-id-movement="<?php echo $idMovement; ?>" data-product-id-movement="<?php echo $product->id_movement; ?>" oninput="actualizarPalletsOk(<?php echo $index; ?>, false); actualizarPalletOkPrincipal(<?php echo $index; ?>, true) " required />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][damaged_stock]" value="<?php echo $product->damaged_stock; ?>" placeholder="Escribe el stock dañado" id="damaged_stock_<?php echo $index; ?>" data-id-arrival="<?php echo $product->id_arrival; ?>" data-original-damaged-stock="<?php echo $product->damaged_stock; ?>" data-id-movement="<?php echo $idMovement; ?>" data-product-id-movement="<?php echo $product->id_movement; ?>" oninput="actualizarStockOk(<?php echo $index; ?>, false) " required />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 180px;" name="products_update[<?php echo $index; ?>][good_pallets]" id="good_pallets_<?php echo $index; ?>" value="<?php echo $product->good_pallets; ?>" data-id-arrival="<?php echo $product->id_arrival; ?>" data-original-good_pallets="<?php echo $product->good_pallets; ?>" data-id-movement="<?php echo $idMovement; ?>" data-product-id-movement="<?php echo $product->id_movement; ?>" oninput="actualizarPalletOkPrincipal(<?php echo $index; ?>, true) " placeholder="Escribe la cantidad de pallets OK" readonly required />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products_update[<?php echo $index; ?>][good_stock]" value="<?php echo $product->good_stock; ?>" placeholder="Escribe el stock OK" id="good_stock_<?php echo $index; ?> " data-id-arrival="<?php echo $product->id_arrival; ?>" data-original-good-stock="<?php echo $product->good_stock; ?>" data-id-movement="<?php echo $idMovement; ?>" data-product-id-movement="<?php echo $product->id_movement; ?>" required readonly />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="hidden" name="products_update[<?php echo $index; ?>][id_type_movement]" value="<?php $product->id_type_movement ?>" />
                                                                                <div class="form-group">
                                                                                    <select name="products_update[<?php echo $index; ?>][id_type_movement]" class="form-control" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" onchange="document.getElementById('type_movements_<?php echo $index; ?>').value = this.options[this.selectedIndex].text">>
                                                                                        <option value="">Seleccione el tipo de movimiento</option>
                                                                                        <?php foreach ($type_movementsss as $type_movementss) : ?>
                                                                                            <option value="<?= $type_movementss->id_type_movement ?>" <?php echo ($product->id_type_movement == $type_movementss->id_type_movement) ? 'selected' : ''; ?>><?= $type_movementss->type_movements ?>
                                                                                            </option>
                                                                                        <?php endforeach; ?>
                                                                                    </select>
                                                                                </div>
                                                                                <!-- Campo oculto para enviar el nombre del pallet -->
                                                                                <input type="hidden"
                                                                                    id="type_movements_<?php echo $index; ?>"
                                                                                    name="products_update[<?php echo $index; ?>][type_movements]"
                                                                                    value="<?= $product->type_movements ?>" />
                                                                            </td>

                                                                            <td>
                                                                                <div class="col-md-3 mt-2">
                                                                                    <div class="form-group form-material">
                                                                                        <input type="datetime-local" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" id="movement_date_<?php echo $index; ?>" name="products_update[<?php echo $index; ?>][movement_date]" value="<?php echo $product->movement_date; ?>" >
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group">
                                                                                    <select name="products_update[<?php echo $index; ?>][id_position]"
                                                                                        class="form-control position-select"
                                                                                        style="padding: 5px; font-size: 12px; text-align: center; width: 200px;"
                                                                                        onchange="
                                                                                        var selectedOption = this.options[this.selectedIndex];
                                                                                        document.getElementById('row_location_<?php echo $index; ?>').value = selectedOption.getAttribute('data-row');
                                                                                        document.getElementById('column_location_<?php echo $index; ?>').value = selectedOption.getAttribute('data-column');
                                                                                        document.getElementById('rack_number_<?php echo $index; ?>').value = selectedOption.getAttribute('data-rack');
                                                                                        document.getElementById('level_<?php echo $index; ?>').value = selectedOption.getAttribute('data-level');
                                                                                        updateSelectOptions(this);
                                                                                        updateDateTimeField(this, 'movement_date_<?php echo $index; ?>');
                                                                                        ">
                                                                                        <option value="">Seleccione la ubicación</option>
                                                                                        <?php foreach ($positions as $position) : ?>
                                                                                            <option value="<?= $position->id_position ?>"
                                                                                                data-row="<?= $position->row_location ?>"
                                                                                                data-column="<?= $position->column_location ?>"
                                                                                                data-rack="<?= $position->rack_number ?>"
                                                                                                data-level="<?= $position->level ?>"
                                                                                                <?php echo ($product->id_position == $position->id_position) ? 'selected' : ''; ?>>
                                                                                                <?= $position->row_location ?> - <?= $position->column_location ?> - <?= $position->rack_number ?> - <?= $position->level ?>
                                                                                            </option>
                                                                                        <?php endforeach; ?>
                                                                                    </select>
                                                                                </div>
                                                                            </td>

                                                                            <!-- Hidden inputs for storing selected data -->
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="number" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products_update[<?php echo $index; ?>][row_location]" id="row_location_<?php echo $index; ?>" value="<?php echo $product->row_location; ?>" />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="text" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products_update[<?php echo $index; ?>][column_location]" id="column_location_<?php echo $index; ?>" value="<?php echo $product->column_location; ?>" />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="number" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products_update[<?php echo $index; ?>][rack_number]" id="rack_number_<?php echo $index; ?>" value="<?php echo $product->rack_number; ?>" />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="number" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products_update[<?php echo $index; ?>][level]" id="level_<?php echo $index; ?>" value="<?php echo $product->level; ?>" />
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="text" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 120px;" id="movement_created_by" name="movement_created_by" value="<?php echo $this->session->userdata('admin_nama') ?>" readonly>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="date" class="form-control input-sm" name="products_update[<?php echo $index; ?>][expiration_date]" value="<?php echo $product->expiration_date; ?>" placeholder="Caducidad" required />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <input type="text" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products_update[<?php echo $index; ?>][note]" value="<?php echo $product->note; ?>" placeholder="Nota" />
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group form-material">
                                                                                    <select name="products_update[<?php echo $index; ?>][status]" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" onchange="checkStatus(this)">
                                                                                        <?php
                                                                                        $statuss = array("Activo", "Suspendido", "Deshabilitado");
                                                                                        foreach ($statuss as $status) {
                                                                                            echo "<option value='$status' " . ($product->status == $status ? 'selected' : '') . ">$status</option>";
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                            </td>
                                                                            <td style="display: flex; gap: 5px;">
                                                                                <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px;" onclick="addProductRow(this)">Mover producto</button>
                                                                                <button type="button" class="btn btn-danger" style="padding: 5px 10px; font-size: 12px;" onclick="removeProductRow(this)">Eliminar</button>
                                                                            </td>
                                                                        </tr>

                                                                        <?php $index++; ?>
                                                                    <?php endforeach; ?>
                                                                <?php else : ?>
                                                                    <tr>
                                                                        <td colspan="14">No se encontraron productos.</td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                <!-- Select -->
                                                                <script>
                                                                  function updateDateTimeField

                                                                    // Función para actualizar las opciones de selección
                                                                    function updateSelectOptions(selectElement) {
                                                                        const selectedValue = selectElement.value;
                                                                        const allSelects = document.querySelectorAll('.position-select');
                                                                        const selectedValues = new Set();

                                                                        // Recopilar todos los valores seleccionados
                                                                        allSelects.forEach(function(select) {
                                                                            if (select.value !== "") {
                                                                                selectedValues.add(select.value);
                                                                            }
                                                                        });

                                                                        // Actualizar opciones disponibles
                                                                        allSelects.forEach(function(select) {
                                                                            const options = select.options;
                                                                            for (let i = 0; i < options.length; i++) {
                                                                                if (selectedValues.has(options[i].value) && options[i].value !== select.value) {
                                                                                    options[i].hidden = true;
                                                                                } else {
                                                                                    options[i].hidden = false;
                                                                                }
                                                                            }
                                                                        });

                                                                        // Guardar el valor previo
                                                                        selectElement.setAttribute("data-previous-value", selectedValue);
                                                                    }

                                                                    // Función para asignar posición vía AJAX
                                                                    function assignPosition(id_position) {
                                                                        if (id_position) {
                                                                            $.ajax({
                                                                                url: '/Website/assign_position',
                                                                                type: 'POST',
                                                                                dataType: 'json',
                                                                                data: {
                                                                                    id_position
                                                                                },
                                                                                success: function(response) {
                                                                                    console.log(response.message);
                                                                                },
                                                                                error: function(xhr, status, error) {
                                                                                    console.error("Error al asignar posición:", error);
                                                                                }
                                                                            });
                                                                        }
                                                                    }

                                                                    // Función para liberar posición vía AJAX
                                                                    function releasePosition(id_position) {
                                                                        if (id_position) {
                                                                            $.ajax({
                                                                                url: '/Website/release_position',
                                                                                type: 'POST',
                                                                                dataType: 'json',
                                                                                data: {
                                                                                    id_position
                                                                                },
                                                                                success: function(response) {
                                                                                    console.log(response.message);
                                                                                },
                                                                                error: function(xhr, status, error) {
                                                                                    console.error("Error al liberar posición:", error);
                                                                                }
                                                                            });
                                                                        }
                                                                    }

                                                                    // Inicializar las opciones al cargar la página
                                                                    document.addEventListener("DOMContentLoaded", function() {
                                                                        initializeSelectOptions();
                                                                    });

                                                                    // Inicializar selects
                                                                    function initializeSelectOptions() {
                                                                        const allSelects = document.querySelectorAll('.position-select');
                                                                        allSelects.forEach(function(select) {
                                                                            updateSelectOptions(select);
                                                                        });

                                                                        allSelects.forEach(function(select) {
                                                                            select.addEventListener('change', function() {
                                                                                updateSelectOptions(select);
                                                                            });
                                                                        });
                                                                    }
                                                                </script>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <h5>Datos adicionales</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3 mt-2">
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputText">Creado por</label>
                                                                <input type="text" value="<?php echo $created_by; ?>" class="form-control input-sm" id="created_by" name="created_by" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-2">
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputDate">Fecha de creación</label>
                                                                <input type="datetime" value="<?php echo $created_date; ?>" class="form-control input-sm" id="created_date" name="created_date" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-2">
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputText">Modificado por</label>
                                                                <input type="text" value="<?php echo $this->session->userdata('admin_nama') ?>" class="form-control input-sm" id="updated_by" name="updated_by" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-2">
                                                            <div class="form-group form-material">
                                                                <label class="control-label" for="inputText">Fecha de última modificación</label>
                                                                <input type="text" value="<?php echo $updated_date; ?>" class="form-control input-sm" id="updated_date" name="updated_date" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-12 mt-5">
                                                <div class='button center mt-2'>
                                                    <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Guardar datos" id="validateButton2">
                                                    <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/all_arrivals'" />
                                                </div>
                                            </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <a href="<?php echo site_url(); ?>website/all_arrivals">
                <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
                    <i class="icon wb-eye" aria-hidden="true"></i>
                </button>
            </a>
        </div>
        <style>
            .card {
                border: 1px solid #ddd;
                border-radius: 4px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .card-header {
                background-color: #f7f7f7;
                border-bottom: 1px solid #ddd;
                padding: 10px;
            }

            .card-body {
                padding: 15px;
            }

            .table {
                table-layout: auto;
                width: 100%;
            }

            .table th,
            .table td {
                padding: 10px;
                text-align: center;
                /* Centra el texto en las celdas */
            }

            .table th:nth-child(1) {
                width: 30%;
            }

            .table th:nth-child(2) {
                width: 25%;
            }

            /* Ajusta los anchos según sea necesario */
            .table-responsive {
                overflow-x: auto;
            }

            .form-control {
                width: 100%;
            }

            .select.form-control.id_product {
                overflow-x: auto;
            }
        </style>

        <script>
            let index = <?php echo $index; ?>;

            function actualizarStockPrincipal(index, esSubregistro = false) {
                // Seleccionar el input correspondiente según sea update o insert
                let input = document.querySelector(
                    `input[name="products_update[${index}][stock]"], 
                     input[name="products_insert[${index}][stock]"]`
                );

                if (!input) {
                    console.error(`No se encontro el campo stock con el índice ${index}`);
                    return;
                }

                // Obtener valores del stock actual y original
                let stockSubregistro = parseFloat(input.value) || 0;
                let originalStock = parseFloat(input.dataset.originalStock) || 0;

                // Determinar si es subregistro o principal (chequeando id_arrival o id_movement)
                let idParent = input.dataset.idArrival || input.dataset.idMovement;
                // Ajuste en la identificación del registro principal o subregistro
                // let idParent = input.dataset.idArrival ? input.dataset.idArrival : input.dataset.idMovement;


                // Calcular la diferencia de stock (positivo o negativo)
                let stockDifference = stockSubregistro - originalStock;

                // Encontrar el registro principal utilizando id_arrival o id_movement

                let stockPrincipal = document.querySelector(
                    `input[name^="products_update"][data-id-arrival="${idParent}"], 
                    input[name^="products_update"][data-id-movement="${idParent}"],
                    input[name^="products_insert"][data-id-arrival="${idParent}"], 
                    input[name^="products_insert"][data-id-movement="${idParent}"],
                    input[name^="products_update"][data-product-id-movement="${idParent}"],
                    input[name^="products_insert"][data-product-id-movement="${idParent}"]`
                );


                if (stockPrincipal) {
                    // Actualizar el stock del registro principal
                    let currentStock = parseFloat(stockPrincipal.value) || 0;
                    stockPrincipal.value = Math.max(0, currentStock - stockDifference);
                }

                // Actualizar el stock original para futuras comparaciones
                input.dataset.originalStock = stockSubregistro;
            }

            function actualizarStockSubregistro(index, subIndex) {
                // Obtener el stock del registro principal (subregistro superior)
                let stockSubregistroPrincipal = parseFloat(
                    document.querySelector(
                        `input[name="products_update[${index}][stock]"], 
                         input[name="products_insert[${index}][stock]"]`
                    )?.value || 0
                );

                if (!stockSubregistroPrincipal) {
                    console.error(`No se encontró el stock del subregistro principal con índice ${index}`);
                    return;
                }

                // Actualizar el stock del subregistro actual
                actualizarStockPrincipal(subIndex, true);
            }


            // `input[name^="products_update"][name$="[id_movement]"][value^="${idArrival}."]`

            function generateIdMovement(idArrival) {
                // Seleccionamos todos los registros que comiencen con el mismo id_parent, tanto en products_insert como en products_update
                const existingRows = document.querySelectorAll(`
                input[name^="products_insert"][name$="[id_movement]"][value^="${idArrival}."]
                , input[name^="products_update"][name$="[id_movement]"][value^="${idArrival}."]
            `);

                if (existingRows.length === 0) {
                    // Si no existen subregistros, este es el primer subregistro  
                    return `${idArrival}.1`;
                } else {
                    // Si ya existen subregistros, obtenemos el último id_movement
                    const lastRow = existingRows[existingRows.length - 1];
                    const lastIdMovement = lastRow.value;

                    // Extraer la última parte del id_movement
                    const lastSubIndex = lastIdMovement.split('.').pop();

                    // Incrementar el subíndice para el siguiente subregistro
                    const nextSubIndex = parseInt(lastSubIndex) + 1;

                    // Retornar el nuevo id_movement con el subíndice actualizado
                    return `${idArrival}.${nextSubIndex}`;
                }
            }


            function addProductRow(button) {
                console.log('addProductRow function called'); // Verifica si la función se está llamando

                const currentRow = button.closest('tr');

                if (!currentRow) {
                    console.error('No se encontró la fila actual.');
                    return;
                }

                // Obtener el id_arrival o id_movement de la fila actual
                const idArrivalElement = currentRow.querySelector(`
                    input[name^="products_update"][name$="[id_arrival]"], 
                    input[name^="products_update"][name$="[id_movement]"],
                    input[name^="products_insert"][name$="[id_movement]"]
                `);
                const idMovementElement = currentRow.querySelector(`
                    input[name^="products_insert"][name$="[id_movement]"],
                    input[name^="products_update"][name$="[id_movement]"]
                `);

                let idArrival;

                if (idArrivalElement) {
                    // Si existe id_arrival, estamos agregando un subregistro a un registro principal
                    idArrival = idArrivalElement.value;
                } else if (idMovementElement) {
                    // Si existe id_movement, estamos agregando un subregistro a un subregistro
                    idMovement = idMovementElement.value;
                } else {
                    console.error('No se encontró el campo id_arrival o id_movement en la fila actual.');
                    return;
                }

                // Aquí se hace más robusta la búsqueda del campo product_name
                let productNameElement = currentRow.querySelector('input[name^="products_update"][name$="[product_name]"]');
                let productIdElement = currentRow.querySelector('input[name^="products_update"][name$="[id_product]"]');
                if (!productNameElement) {
                    // Si no se encuentra en "products_update", intentamos en "products_insert"
                    productNameElement = currentRow.querySelector('input[name^="products_insert"][name$="[product_name]"]');
                    productIdElement = currentRow.querySelector('input[name^="products_insert"][name$="[id_product]"]');
                }

                if (!productNameElement || !productIdElement) {
                    console.error('No se encontraron los campos product_name o id_product en la fila actual.');
                    return;
                }

                const productName = productNameElement.value;
                const productId = productIdElement.value;

                // Generar id_movement basado en idArrival
                const idMovement = generateIdMovement(idArrival);

                // Crear la nueva fila
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                
              
            
                <input class="form-control input-sm" type="hidden" name="products_insert[${index}][id_main]" id="id_main_${index}" value="${idArrival}" style="padding: 5px; font-size: 12px; text-align: center; width: 80px;" readonly />
                    
                   
                <input class="form-control input-sm" type="hidden" name="products_insert[${index}][id_arrival]" id="id_arrival_${index}" value="${idArrival}" style="padding: 5px; font-size: 12px; text-align: center; width: 80px;" readonly />
                   
                <td>
                    <div class="form-group form-material">
                        <input class="form-control input-sm" type="text" name="products_insert[${index}][id_movement]" id="id_movement_${index}" value="${idMovement}" style="padding: 5px; font-size: 12px; text-align: center; width: 80px;" readonly />
                    </div>                                                         
                </td>   
                                                                
                 <td>
                    <input type="hidden" name="products_insert[${index}][id_product]" id="id_product_${index}" value="${productId}" />
            
                    <div class="form-group form-material">
                        <input class="form-control input-sm" type="text" name="products_insert[${index}][product_name]" id="product_name_${index}" value="${productName}" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" readonly />
                    </div>
            
                    <!-- Campo oculto para enviar el nombre del producto -->
                    <input type="hidden"
                        id="product_name_hidden_${index}"
                        name="products_insert[${index}][product_name]"
                        value="${productName}" />   
                </td>
                <td>
                    <input type="hidden" name="products_insert[${index}][id_platform]" id="id_platform_${index}" value="" />
                    
                        <div class="form-group">
                            <select name="products_insert[${index}][id_platform]" id="id_platform_${index}" class="form-control" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;"  onchange="document.getElementById('type_platform_${index}').value = this.options[this.selectedIndex].text">>
                                <option value="">Seleccione un tipo de pallet</option>
                                    <?php foreach ($platforms as $platform) : ?>
                                        <option value="<?= $platform->id_platform ?>"><?= $platform->type_platform ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    <!-- Campo oculto para enviar el nombre del pallet -->
                    <input type="hidden"
                        id="type_platform_${index}"
                        name="products_insert[${index}][type_platform]"
                        value="<?= $product->type_platform ?>" />
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="number" class="form-control input-sm" name="products_insert[${index}][stock]" id="stock_${index}" data-id-arrival="${idArrival}" data-original-stock="stock_${index}" data-id-movement="${idMovement}" data-product-id-movement="<?php echo $product->id_movement; ?>" oninput="actualizarStockOk(<?php echo $index; ?>, true); actualizarStockPrincipal(${index}, true)" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" placeholder="Introduce el stock" readonly required />
                    </div>    
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="number" class="form-control input-sm" name="products_insert[${index}][quantity_product_pallet]" id="quantity_product_pallet_${index}" data-id-arrival="${idArrival}" data-original-quantity-product-pallet="quantity_product_pallet_${index}" data-id-movement="${idMovement}" data-product-id-movement="<?php echo $product->id_movement; ?>" onkeydown="if (event.key === 'Enter') { actualizarStock(${index}, true, true); }"  style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de producto por pallets" required />
                    </div>
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="number" class="form-control input-sm" name="products_insert[${index}][quantity_pallet]" id="quantity_pallet_${index}" data-id-arrival="${idArrival}" data-original-quantity-pallet="quantity_pallet_${index}" data-id-movement="${idMovement}" data-product-id-movement="<?php echo $product->id_movement; ?>" oninput="actualizarPalletsOk(<?php echo $index; ?>, true) " actualizarStockSubregistro(<?php echo $index; ?>, true) " onkeydown="if (event.key === 'Enter') { actualizarStock(${index}, true, true); }" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de pallets" required />
                    </div>
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="number" class="form-control input-sm" name="products_insert[${index}][damaged_pallets]" id="damaged_pallets_${index}" data-id-arrival="${idArrival}" data-original-damaged-pallets="damaged_pallets_${index}" data-id-movement="${idMovement}" data-product-id-movement="<?php echo $product->id_movement; ?>" oninput="actualizarPalletsOk(${index},true)" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de pallets dañados" required />
                    </div>
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="number" class="form-control input-sm" name="products_insert[${index}][damaged_stock]" id="damaged_stock_${index}" data-id-arrival="${idArrival}" data-original-damaged-stock="damaged_stock_${index}" data-id-movement="${idMovement}" data-product-id-movement="<?php echo $product->id_movement; ?>" oninput="actualizarStockOk(${index},true) " style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe el stock dañado" required />
                    </div>
                </td>
                
                <td>
                    <div class="form-group form-material">
                        <input type="number" class="form-control input-sm" name="products_insert[${index}][good_pallets]" id="good_pallets_${index}" data-id-arrival="${idArrival}" data-original-good_pallets="good_pallets_${index}" data-id-movement="${idMovement}" data-product-id-movement="<?php echo $product->id_movement; ?>" style="padding: 5px; font-size: 12px; text-align: center; width: 180px;" placeholder="Escribe la cantidad de pallets OK" readonly required />
                    </div>
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="number" class="form-control input-sm" name="products_insert[${index}][good_stock]" id="good_stock_${index}" data-id-arrival="${idArrival}" data-original-good-stock="good_stock_${index}" data-id-movement="${idMovement}" data-product-id-movement="<?php echo $product->id_movement; ?>" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" placeholder="Escribe el stock OK"  required readonly />
                    </div>
                </td>
               
                <td>
                    <input type="hidden" name="products_insert[${index}][id_type_movement]" />
                        <div class="form-group">
                            <select name="products_insert[${index}][id_type_movement]" class="form-control" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" onchange="document.getElementById('type_movements_${index}').value = this.options[this.selectedIndex].text">>
                                <option value="">Seleccione el tipo de movimiento</option>
                                    <?php foreach ($type_movementsss as $type_movementss) : ?>
                                        <option value="<?= $type_movementss->id_type_movement ?>"><?= $type_movementss->type_movements ?>
                                        </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    <!-- Campo oculto para enviar el nombre del pallet -->
                <input type="hidden"
                        id="type_movements_${index}"
                        name="products_insert[${index}][type_movements]" />
                </td>
                <td>
                    <div class="col-md-3 mt-2">
                        <div class="form-group form-material">
                            <input type="datetime-local" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" id="movement_date_${index}" name="products_insert[${index}][movement_date]">
                        </div>
                    </div>
                </td>

              <td>
                    <div class="form-group">
                        <select name="products_insert[${index}][id_position]" class="form-control position-select"
                            style="padding: 5px; font-size: 12px; text-align: center; width: 200px;"
                            onchange="
                                var selectedOption = this.options[this.selectedIndex];
                                document.getElementById('row_location_${index}').value = selectedOption.getAttribute('data-row');
                                document.getElementById('column_location_${index}').value = selectedOption.getAttribute('data-column');
                                document.getElementById('rack_number_${index}').value = selectedOption.getAttribute('data-rack');
                                document.getElementById('level_${index}').value = selectedOption.getAttribute('data-level');

                            updateSelectOptions(this);
                            updateDateTimeField(this, 'movement_date_${index}');
                        ">
                            <option value="">Seleccione la ubicación</option>
                            <?php foreach ($positions as $position) : ?>
                                <option value="<?= $position->id_position ?>"
                                    data-row="<?= $position->row_location ?>"
                                    data-column="<?= $position->column_location ?>"
                                    data-rack="<?= $position->rack_number ?>"
                                    data-level="<?= $position->level ?>">
                                    <?= $position->row_location ?> - <?= $position->column_location ?> - <?= $position->rack_number ?> - <?= $position->level ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </td>

                <!-- Hidden inputs for storing selected data -->
                <td>
                    <div class="form-group form-material">
                        <input type="text" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products_insert[${index}][row_location]" id="row_location_${index}" />
                    </div>
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="text" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products_insert[${index}][column_location]" id="column_location_${index}" />
                    </div>
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="number" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products_insert[${index}][rack_number]" id="rack_number_${index}" />
                    </div>
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="number" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products_insert[${index}][level]" id="level_${index}" />
                    </div>
                </td>

                <td>
                    <div class="form-group form-material">
                        <input type="text" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 120px;" id="movement_created_by" name="movement_created_by" value="<?php echo $this->session->userdata('admin_nama') ?>" readonly>
                    </div>
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="date" class="form-control input-sm" name="products_insert[${index}][expiration_date]" required />
                    </div>
                </td>
                <td>
                    <div class="form-group form-material">
                        <input type="text" class="form-control input-sm" name="products_insert[${index}][note]" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" placeholder="Nota" />
                    </div>
                </td>
                <td>
                    <div class="form-group form-material">
                        <select name="products_insert[${index}][status]" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;">
                            <option value="Activo">Activo</option>
                            <option value="Suspendido">Suspendido</option>
                            <option value="Deshabilitado">Deshabilitado</option>
                        </select>
                    </div>
                </td>
            
                <td style="display: flex; gap: 5px;">    
                <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px;" onclick="addProductRow(this)">Agregar subregistro</button>
                <button type="button" class="btn btn-danger" style="padding: 5px 10px; font-size: 12px;" onclick="removeProductRow(this)">Eliminar</button>
            </td>
            `;

                // Obtener cuántos subregistros existen actualmente para este idArrival
                const existingRows = document.querySelectorAll(`
                input[name^="products_insert"][name$="[id_movement]"][value^="${idArrival}"]
                , input[name^="products_update"][name$="[id_movement]"][value^="${idArrival}."]
                `);

                if (existingRows.length === 0) {
                    // Si no hay subregistros, insertamos la nueva fila justo después de la fila principal
                    currentRow.after(newRow);
                } else {
                    // Si ya existen subregistros, insertamos la nueva fila después del último subregistro
                    const lastRow = existingRows[existingRows.length - 1].closest('tr');
                    lastRow.parentNode.insertBefore(newRow, lastRow.nextSibling);
                }

                index++; // Incrementar el índice para las siguientes filas
                //updateSelectOptions();
                initializeSelectOptions();

            }

                            function updateDateTimeField(selectElement, dateFieldId) {
                    const dateField = document.getElementById(dateFieldId);

                    // Asignar la fecha y hora actual solo si el campo está vacío
                    if (selectElement.value !== "" && dateField.value === "") {
                        const now = new Date();
                        const formattedDateTime = now.getFullYear() + '-' +
                            ('0' + (now.getMonth() + 1)).slice(-2) + '-' +
                            ('0' + now.getDate()).slice(-2) + 'T' +
                            ('0' + now.getHours()).slice(-2) + ':' +
                            ('0' + now.getMinutes()).slice(-2);
                        dateField.value = formattedDateTime;

                        // Asignar posición
                        assignPosition(selectElement.value);
                    } else if (selectElement.value === "") {
                        dateField.value = ""; // Limpiar el campo de fecha si no se selecciona nada

                        // Liberar posición
                        releasePosition(selectElement.getAttribute("data-previous-value"));
                    }
                }

            // Función para actualizar las opciones disponibles en los selects
            function updateSelectOptions(selectElement) {
                var selectedValue = selectElement.value;
                var allSelects = document.querySelectorAll('.position-select');
                var selectedValues = new Set();

                allSelects.forEach(function(select) {
                    if (select.value !== "") {
                        selectedValues.add(select.value);
                    }
                });

                allSelects.forEach(function(select) {
                    var options = select.options;

                    for (var i = 0; i < options.length; i++) {
                        if (selectedValues.has(options[i].value) && options[i].value !== select.value) {
                            options[i].hidden = true;
                        } else {
                            options[i].hidden = false;
                        }
                    }
                });

                // Guardar el valor previamente seleccionado en un atributo
                selectElement.setAttribute("data-previous-value", selectedValue);
            }

            // Función para inicializar las opciones
            function initializeSelectOptions() {
                var allSelects = document.querySelectorAll('.position-select');
                allSelects.forEach(function(select) {
                    updateSelectOptions(select);
                });

                allSelects.forEach(function(select) {
                    select.addEventListener('change', function() {
                        updateSelectOptions(select);
                    });
                });
            }

            // Función para asignar una posición a través de AJAX
            function assignPosition(id_position) {
                if (id_position) {
                    $.ajax({
                        url: '/Website/assign_position_controller',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id_position: id_position
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                console.log(response.message);
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Error al asignar la posición:", error);
                        }
                    });
                }
            }

            // Función para liberar una posición a través de AJAX
            function releasePosition(id_position) {
                if (id_position) {
                    $.ajax({
                        url: '/Website/release_position_controller',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id_position: id_position
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                console.log(response.message);
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Error al liberar la posición:", error);
                        }
                    });
                }
            }

            // Llamada inicial en DOMContentLoaded
            document.addEventListener("DOMContentLoaded", function() {
                initializeSelectOptions();
                //actualizarStockOk();
            });
        </script>

        <script>
            $(document).ready(function() {
                // Filtrar productos al cargar la página para las filas existentes
                var supplierId = $('#id_supplier').val();

                if (supplierId) {
                    $('select[name^="products_update"]').each(function(index, element) {
                        loadProductsForRow(index, supplierId);
                    });
                }

                // Evento para añadir una nueva fila con el botón
                $(document).on('click', '.add-row-button', function() {
                    addProductRow(); // Llamar a la función para agregar una nueva fila
                });
            });

            function loadProductsForRow(index, supplierId) {
                $.ajax({
                    url: '<?= base_url("Website/get_products_by_supplier") ?>',
                    type: 'POST',
                    data: {
                        id_supplier: supplierId
                    },
                    dataType: 'json',
                    success: function(data) {
                        var select = $('select[name="products_update[' + index + '][id_product]"]');
                        select.empty(); // Limpia las opciones actuales

                        // Agrega la opción por defecto
                        select.append('<option value="">Seleccione un producto</option>');

                        if (data && data.length > 0) {
                            $.each(data, function(key, value) {
                                // Añade las opciones filtradas
                                select.append('<option value="' + value.id_product + '">' + value.product_name + '</option>');
                            });
                        } else {
                            select.append('<option value="">No hay productos disponibles</option>');
                        }

                        // Mantén seleccionado el producto que ya estaba guardado
                        var selectedProductId = $('input[name="products_update[' + index + '][id_product]"]').val();
                        select.val(selectedProductId);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error al cargar los productos:', error);
                    }
                });
            }
        </script>
        <script>
            $(document).ready(function() {
                // Filtrar productos al cargar la página para las filas existentes
                var supplierId = $('#id_supplier').val();

                if (supplierId) {
                    $('select[name^="products_insert"]').each(function(index, element) {
                        loadProductsForRow(index, supplierId);
                    });
                }

                // Evento para añadir una nueva fila con el botón
                $(document).on('click', '.add-row-button', function() {
                    addProductRow(); // Llamar a la función para agregar una nueva fila
                });
            });

            function loadProductsForRows(index, supplierId) {
                $.ajax({
                    url: '<?= base_url("Website/get_products_by_supplier") ?>',
                    type: 'POST',
                    data: {
                        id_supplier: supplierId
                    },
                    dataType: 'json',
                    success: function(data) {
                        var select = $('select[name="products_insert[' + index + '][id_product]"]');
                        select.empty(); // Limpia las opciones actuales

                        // Agrega la opción por defecto
                        select.append('<option value="">Seleccione un producto</option>');

                        if (data && data.length > 0) {
                            $.each(data, function(key, value) {
                                // Añade las opciones filtradas
                                select.append('<option value="' + value.id_product + '">' + value.product_name + '</option>');
                            });
                        } else {
                            select.append('<option value="">No hay productos disponibles</option>');
                        }

                        // Mantén seleccionado el producto que ya estaba guardado
                        var selectedProductId = $('input[name="products_insert[' + index + '][id_product]"]').val();
                        select.val(selectedProductId);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error al cargar los productos:', error);
                    }
                });
            }
        </script>


        <script>
            function convertToSelect(input) {
                const select = document.createElement('select');
                select.name = input.name;
                select.className = input.className;
                select.onchange = function() {
                    checkStatus(this);
                };

                const statusOptions = ["Activo", "Suspendido", "Deshabilitado"];
                statusOptions.forEach(status => {
                    const option = document.createElement('option');
                    option.value = status;
                    option.text = status;
                    if (status === input.value) {
                        option.selected = true;
                    }
                    select.appendChild(option);
                });

                input.parentNode.replaceChild(select, input);
                checkStatus(select);
            }
        </script>
        <script>
            document.getElementById('container_number').addEventListener('change', function() {
                var containerNumber = this.value;
                if (containerNumber) {
                    fetch('<?= site_url('Website/get_container_type_by_number/') ?>' + containerNumber)
                        .then(response => response.json())
                        .then(data => {
                            var containerTypeSelect = document.getElementById('container_type');
                            containerTypeSelect.innerHTML = ''; // Limpiar opciones anteriores
                            if (data.container_type) {
                                var option = document.createElement('option');
                                option.value = data.container_type;
                                option.text = data.container_type;
                                containerTypeSelect.add(option);
                            }
                        });
                } else {
                    // Limpiar el tipo de contenedor si no hay número de contenedor seleccionado
                    document.getElementById('container_type').innerHTML = '<option value="">Seleccione un tipo de contenedor</option>';
                }
            });
        </script>
        <script>
            document.getElementById('platenumber').addEventListener('change', function() {
                var platenumber = this.value;
                if (platenumber) {
                    fetch('<?= site_url('Website/get_vehicletype_by_platenumber1/') ?>' + platenumber)
                        .then(response => response.json())
                        .then(data => {
                            var vehicletypeSelect = document.getElementById('vehicletype');
                            vehicletypeSelect.innerHTML = ''; // Limpiar opciones anteriores
                            if (data.vehicletype) {
                                var option = document.createElement('option');
                                option.value = data.vehicletype;
                                option.text = data.vehicletype;
                                vehicletypeSelect.add(option);
                            }
                        });
                } else {
                    // Limpiar el tipo de contenedor si no hay número de contenedor seleccionado
                    document.getElementById('vehicletype').innerHTML = '<option value="">Seleccione un tipo de unidad</option>';
                }
            });
        </script>
        <script>
            $(document).ready(function() {
                // Delegación de eventos para manejar cálculos automáticos en filas dinámicas
                $(document).on('input', '[id^=stock_], [id^=quantity_product_pallet_], [id^=quantity_pallet_], [id^=damaged_pallets_], [id^=damaged_stock_], [id^=good_pallets_] [id^=good_stock_]', function() {
                    var index = $(this).attr('id').match(/\d+/); // Extrae el índice del ID del campo
                    actualizarStock(index);
                });

                $('#addRowButton').on('click', function() {
                    var newRowIndex = $('input[id^=stock_]').length; // Calcula el índice de la nueva fila
                    // Añade los eventos de actualización a la nueva fila
                    actualizarStock(newRowIndex);
                });
            });

            /*function updateQuantityProductByPallet(index) {
                const stockInicial = parseFloat(document.getElementById(`stock_${index}`).value) || 0;
                const quantityProductPallet = parseFloat(document.getElementById(`quantity_product_pallet_${index}`).value) || 0;

                // Verificar si quantityProductPallet es mayor que el stockInicial
                if (quantityProductPallet > stockInicial) {
                    // Si es mayor, puedes decidir si:
                    // 1. Mostrar un mensaje de error o advertencia
                    alert(`La cantidad por pallet no puede ser mayor que el stock disponible (${stockInicial}).`);

                    // 2. O asignar automáticamente el stock como cantidad máxima permitida
                    document.getElementById(`quantity_product_pallet_${index}`).value = stockInicial;
                }
            }

            function updateQuantityPallet(index) {
                const damagedPallets = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
                const quantityPallet = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;

                if (damagedPallets > quantityPallet) {
                    alert(`La cantidad de pallets dañados no puede ser mayor que el número de palllets (${quantityPallet}).`);
                    document.getElementById(`damaged_pallets_${index}`).value = quantityPallet;
                }
            }*/

            /*function updateDamagedStock(index, isInsert = false) {
                let prefix1 = isInsert ? 'products_insert' : 'products_update';
                let damagedStockField = document.querySelector(`[name="${prefix1}[${index}][damaged_stock]"]`)
                if (!DamagedStockField) {
                    console.error(`N se encontró el campo damaged_stock para el índice ${index}`);
                    return;
                }
                let damagedStockValue = parseFloat(damagedStockField.value) || 0;
                let damagedPalletsField = document.querySelector(`[name="${prefix1}[${index}][damaged_pallets]"]`);
                let damagedPalletsValue = parseFloat(damagedPalletsField.value) || 0;

                let quantityProductPalletField = document.querySelector(`[name="${prefix1}[${index}][quantity_product_pallet]"]`);
                let quantityProductPalletValue = parseFloat(quantityProductPalletField.value) || 0;

                if (damagedStockField) {
                    damagedStockField.value = damagedPalletsValue * quantityProductPalletValue;
                    if (damagedStockValue > damagedStockValue) {
                        alert(`La cantidad de stock dañado no puede ser mayor a (${damagedStockField.value}).`);
                        document.getElementById(`damaged_stock_${index}`).value = damagedStockField.value;
                    }

                }*/

            // Calcular resultado permitido
            //const resul = damagedPallets * quantityProductPallet;
            // const resulFormatted = parseFloat(resul.toFixed(2));

            // Si el valor introducido es mayor, se muestra alerta y se corrige
            /* if (damagedStock > resulFormatted) {
                alert(`La cantidad de stock dañado no puede ser mayor a (${resulFormatted}).`);
                document.getElementById(`damaged_stock_${index}`).value = resulFormatted;
            }*/
            //  }

            // ******************************************************************************************

            // Captura el evento de "Enter" para activar el cálculo de stock
            document.addEventListener("keydown", function(event) {
                if (event.key === "Enter") {
                    // Solo ejecuta si el foco está en un campo de `quantity_pallet` o `quantity_product_pallet`
                    const focusedElement = document.activeElement;
                    if (focusedElement && (focusedElement.name.includes("quantity_pallet") || focusedElement.name.includes("quantity_product_pallet"))) {
                        // Obtener el índice del registro actual
                        const index = focusedElement.name.match(/\[(\d+)\]/)[1];
                        actualizarStock(index, focusedElement.name.includes("products_update", "products_insert"));
                        event.preventDefault(); // Previene el comportamiento predeterminado del "Enter"
                    }
                }
            });

            // Función para actualizar el stock y manejar las validaciones
            function actualizarStock(index, esSubregistro = false, ejecutarMultiplicacion = false) {
                const quantityPallet = parseFloat(
                    document.querySelector(
                        `input[name="products_update[${index}][quantity_pallet]"], 
                        input[name="products_insert[${index}][quantity_pallet]"]`
                    )?.value || 0
                );

                const quantityProductPallet = parseFloat(
                    document.querySelector(
                        `input[name="products_update[${index}][quantity_product_pallet]"], 
                        input[name="products_insert[${index}][quantity_product_pallet]"]`
                    )?.value || 0
                );

                let inputStockInicial = document.querySelector(
                    `input[name="products_update[${index}][stock]"], 
                    input[name="products_insert[${index}][stock]"]`
                );

                if (!inputStockInicial) {
                    console.error(`No se encontró el campo stock con el índice ${index}`);
                    return;
                }

                // Solo ejecutar la multiplicación si `ejecutarMultiplicacion` es `true`
                if (ejecutarMultiplicacion) {
                    const stockInicial = quantityProductPallet * quantityPallet;
                    const stockPrincipal = obtenerStockPrincipal(index);

                    if (stockInicial > stockPrincipal) {
                        alert("El stock calculado excede el stock del registro principal.");
                        // Revertir los valores
                        document.querySelector(`input[name="products_update[${index}][quantity_pallet]"]`).value = inputStockInicial.dataset.originalQuantityPallet || quantityPallet;
                        document.querySelector(`input[name="products_update[${index}][quantity_product_pallet]"]`).value = inputStockInicial.dataset.originalQuantityProductPallet || quantityProductPallet;
                        document.querySelector(`input[name="products_insert[${index}][quantity_pallet]"]`).value = 0;
                        document.querySelector(`input[name="products_insert[${index}][quantity_product_pallet]"]`).value = 0;
                        return;

                    }

                    inputStockInicial.value = stockInicial.toFixed(2);
                    // Después de la multiplicación, actualizamos el quantity_pallet del registro principal

                }

                // Mantener otras actualizaciones y cálculos
                // actualizarPalletsOk(index, esSubregistro);
                actualizarStockOk(index, esSubregistro);
                actualizarStockPrincipal(index, esSubregistro);
                actualizarQuantityPalletPrincipal(index);
                actualizarStockOkPrincipal(index);
                actualizarPalletOkPrincipal(index);
            }

            // Función auxiliar para obtener el stock del registro principal
            function obtenerStockPrincipal(index) {
                const currentElement = document.querySelector(
                    `input[name="products_update[${index}][id_movement]"], 
                    input[name="products_insert[${index}][id_movement]"]`
                );
                const currentIdMovement = currentElement ? currentElement.value : null;

                // Si no hay ID de movimiento, se trata de un registro principal (con id_arrival)
                if (!currentIdMovement) {
                    const idArrivalElement = document.querySelector(
                        `input[name="products_update[${index}][id_arrival]"], 
                        input[name="products_insert[${index}][id_arrival]"]`
                    );
                    return idArrivalElement ? parseFloat(idArrivalElement.value) || 0 : 0;
                }

                // Si es un subregistro, buscar el registro padre en base al ID del padre inmediato
                const idParent = obtenerIdParent(currentIdMovement);
                let stockPrincipal = 0;

                if (idParent) {
                    // Busca en ambos tipos: products_update y products_insert
                    const parentStockElement = document.querySelector(
                        `input[data-id-arrival="${idParent}"][name*="[stock]"],
                        input[data-product-id-movement="${idParent}"][name*="[stock]"],
                        input[data-product-id-arrival="${idParent}"][name*="[stock]"], 
                        input[data-id-movement="${idParent}"][name*="[stock]"]`
                    );
                    const parentQuantityProductPalletElement = document.querySelector(
                        `input[data-id-arrival="${idParent}"][name*="[quantity_product_pallet]"],
                        input[data-product-id-arrival="${idParent}"][name*="[quantity_product_pallet]"],
                         input[data-product-id-movement="${idParent}"][name*="[quantity_product_pallet]"], 
                        input[data-id-movement="${idParent}"][name*="[quantity_product_pallet]"]`
                    );
                    const parentQuantityPalletElement = document.querySelector(
                        `input[data-id-arrival="${idParent}"][name*="[quantity_pallet]"],
                        input[data-product-id-arrival="${idParent}"][name*="[quantity_pallet]"],
                         input[data-product-id-movement="${idParent}"][name*="[quantity_pallet]"], 
                        input[data-id-movement="${idParent}"][name*="[quantity_pallet]"]`
                    );

                    if (parentStockElement && parentQuantityProductPalletElement && parentQuantityPalletElement) {
                        stockPrincipal = parseFloat(parentStockElement.value) || 0;
                    }
                }
                return stockPrincipal;
            }

            // Función para obtener el ID del registro padre inmediato
            function obtenerIdParent(idMovement) {
                return idMovement.includes(".") ? idMovement.slice(0, idMovement.lastIndexOf(".")) : null;
            }

            // Función para actualizar el quantity_pallet del registro principal
            function actualizarQuantityPalletPrincipal(index) {
                // Obtener el ID del registro principal o padre inmediato
                const currentElement = document.querySelector(
                    `input[name="products_update[${index}][id_movement]"], 
                    input[name="products_update[${index}][id_arrival]"], 
                    input[name="products_insert[${index}][id_movement]"]`
                );
                const currentIdMovement = currentElement ? currentElement.value : null;

                // Si es un subregistro, obtiene el ID del registro padre
                const idParent = obtenerIdParent(currentIdMovement);
                console.log("ID del registro padre encontrado:", idParent);

                if (!idParent) {
                    console.warn("No se encontró un ID de registro principal o padre inmediato.");
                    return;
                }

                // Busca los elementos del registro principal o padre basado en el ID obtenido
                const parentStockElement = document.querySelector(
                    `input[data-id-arrival="${idParent}"][name*="[stock]"], 
                    input[data-id-movement="${idParent}"][name*="[stock]"],
                    input[data-product-id-movement="${idParent}"][name*="[stock]"]`
                );
                const parentQuantityProductPalletElement = document.querySelector(
                    `input[data-id-arrival="${idParent}"][name*="[quantity_product_pallet]"], 
                    input[data-id-movement="${idParent}"][name*="[quantity_product_pallet]"],
                    input[data-product-id-movement="${idParent}"][name*="[quantity_product_pallet]"]`
                );
                const parentQuantityPalletElement = document.querySelector(
                    `input[data-id-arrival="${idParent}"][name*="[quantity_pallet]"], 
                    input[data-id-movement="${idParent}"][name*="[quantity_pallet]"],
                    input[data-product-id-movement="${idParent}"][name*="[quantity_pallet]"]`
                );

                // Revisar cada elemento y mostrar en la consola si falta alguno
                console.log("parentStockElement encontrado:", parentStockElement);
                console.log("parentQuantityProductPalletElement encontrado:", parentQuantityProductPalletElement);
                console.log("parentQuantityPalletElement encontrado:", parentQuantityPalletElement);

                if (!parentStockElement || !parentQuantityProductPalletElement || !parentQuantityPalletElement) {
                    if (!parentStockElement) {
                        console.log("No se encontró el campo 'stock' del registro principal.");
                    }
                    if (!parentQuantityProductPalletElement) {
                        console.log("No se encontró el campo 'quantity_product_pallet' del registro principal.");
                    }
                    if (!parentQuantityPalletElement) {
                        console.log("No se encontró el campo 'quantity_pallet' del registro principal.");
                    }

                    console.warn("No se encontraron todos los datos necesarios del registro principal para la actualización.");
                    return;
                }

                // Si todos los elementos están presentes, realiza la operación de división
                const stockPrincipal = parseFloat(parentStockElement.value) || 0;
                const quantityProductPalletPrincipal = parseFloat(parentQuantityProductPalletElement.value) || 0;

                if (quantityProductPalletPrincipal > 0) {
                    const nuevoQuantityPallet = stockPrincipal / quantityProductPalletPrincipal;
                    parentQuantityPalletElement.value = nuevoQuantityPallet.toFixed(2);
                    console.log(`Nuevo quantity_pallet actualizado en el registro principal: ${nuevoQuantityPallet.toFixed(2)}`);
                } else {
                    console.warn("No se puede actualizar el quantity_pallet porque quantity_product_pallet en el registro principal es inválido.");
                }
            }
            //****************************************************************************************************************************************** */

            // Función para actualizar el stockOk del registro principal
            function actualizarStockOkPrincipal(index) {
                // Obtener el ID del registro principal o padre inmediato
                const currentElement = document.querySelector(
                    `input[name="products_update[${index}][id_movement]"], 
                    input[name="products_update[${index}][id_arrival]"], 
                    input[name="products_insert[${index}][id_movement]"]`
                );
                const currentIdMovement = currentElement ? currentElement.value : null;

                // Si es un subregistro, obtiene el ID del registro padre
                const idParent = obtenerIdParent(currentIdMovement);
                console.log("ID del registro padre encontrado:", idParent);

                if (!idParent) {
                    console.warn("No se encontró un ID de registro principal o padre inmediato.");
                    return;
                }

                // Busca los elementos del registro principal o padre basado en el ID obtenido
                const parentStockElement = document.querySelector(
                    `input[data-id-arrival="${idParent}"][name*="[stock]"], 
                    input[data-id-movement="${idParent}"][name*="[stock]"],
                    input[data-product-id-movement="${idParent}"][name*="[stock]"]`
                );
                const parentDamagedStockElement = document.querySelector(
                    `input[data-id-arrival="${idParent}"][name*="[damaged_stock]"], 
                    input[data-id-movement="${idParent}"][name*="[damaged_stock]"],
                    input[data-product-id-movement="${idParent}"][name*="[damaged_stock]"]`
                );
                const parentGoodStockElement = document.querySelector(
                    `input[data-id-arrival="${idParent}"][name*="[good_stock]"], 
                    input[data-id-movement="${idParent}"][name*="[good_stock]"],
                    input[data-product-id-movement="${idParent}"][name*="[good_stock]"]`
                );

                // Revisar cada elemento y mostrar en la consola si falta alguno
                console.log("parentStockElement encontrado:", parentStockElement);
                console.log("parentDamagedStockElement encontrado:", parentDamagedStockElement);
                console.log("parentGoodStockElement encontrado:", parentGoodStockElement);

                if (!parentStockElement || !parentDamagedStockElement || !parentGoodStockElement) {
                    if (!parentStockElement) {
                        console.log("No se encontró el campo 'stock' del registro principal.");
                    }
                    if (!parentDamagedStockElement) {
                        console.log("No se encontró el campo 'damaged_stock' del registro principal.");
                    }
                    if (!parentGoodStockElement) {
                        console.log("No se encontró el campo 'good_stock' del registro principal.");
                    }

                    console.warn("No se encontraron todos los datos necesarios del registro principal para la actualización.");
                    return;
                }

                // Si todos los elementos están presentes, realiza la operación de división
                const stockPrincipal = parseFloat(parentStockElement.value) || 0;
                const damagedStockPrincipal = parseFloat(parentDamagedStockElement.value) || 0;

                if (damagedStockPrincipal >= 0) {
                    const nuevoGoodStock = stockPrincipal - damagedStockPrincipal;
                    parentGoodStockElement.value = nuevoGoodStock.toFixed(2);
                    console.log(`Nuevo good_stock actualizado en el registro principal: ${nuevoGoodStock.toFixed(2)}`);
                } else {
                    console.warn("No se puede actualizar el good_stock porque damaged_stock en el registro principal es inválido.");
                }
            }

            // ******************************************************************************************************************************

            // Función para actualizar el stockOk del registro principal
            function actualizarPalletOkPrincipal(index) {
                // Obtener el ID del registro principal o padre inmediato
                const currentElement = document.querySelector(
                    `input[name="products_update[${index}][id_movement]"], 
                    input[name="products_update[${index}][id_arrival]"], 
                    input[name="products_insert[${index}][id_movement]"]`
                );
                const currentIdMovement = currentElement ? currentElement.value : null;

                // Si es un subregistro, obtiene el ID del registro padre
                const idParent = obtenerIdParent(currentIdMovement);
                console.log("ID del registro padre encontrado:", idParent);

                if (!idParent) {
                    console.warn("No se encontró un ID de registro principal o padre inmediato.");
                    return;
                }

                // Busca los elementos del registro principal o padre basado en el ID obtenido
                const parentQuantityPalletsElement = document.querySelector(
                    `input[data-id-arrival="${idParent}"][name*="[quantity_pallet]"], 
                    input[data-id-movement="${idParent}"][name*="[quantity_pallet]"],
                    input[data-product-id-movement="${idParent}"][name*="[quantity_pallet]"]`
                );
                const parentDamagedPalletsElement = document.querySelector(
                    `input[data-id-arrival="${idParent}"][name*="[damaged_pallets]"], 
                    input[data-id-movement="${idParent}"][name*="[damaged_pallets]"],
                    input[data-product-id-movement="${idParent}"][name*="[damaged_pallets]"]`
                );
                const parentGoodPalletsElement = document.querySelector(
                    `input[data-id-arrival="${idParent}"][name*="[good_pallets]"], 
                    input[data-id-movement="${idParent}"][name*="[good_pallets]"],
                    input[data-product-id-movement="${idParent}"][name*="[good_pallets]"]`
                );

                // Revisar cada elemento y mostrar en la consola si falta alguno
                console.log("parentQuantityPalletsElement encontrado:", parentQuantityPalletsElement);
                console.log("parentDamagedPalletsElement encontrado:", parentDamagedPalletsElement);
                console.log("parentGoodPalletsElement encontrado:", parentGoodPalletsElement);

                if (!parentQuantityPalletsElement || !parentDamagedPalletsElement || !parentGoodPalletsElement) {
                    if (!parentQuantityPalletsElement) {
                        console.log("No se encontró el campo 'quantity_pallet' del registro principal.");
                    }
                    if (!parentDamagedPalletsElement) {
                        console.log("No se encontró el campo 'damaged_pallets' del registro principal.");
                    }
                    if (!parentGoodPalletsElement) {
                        console.log("No se encontró el campo 'good_pallets' del registro principal.");
                    }

                    console.warn("No se encontraron todos los datos necesarios del registro principal para la actualización.");
                    return;
                }

                // Si todos los elementos están presentes, realiza la operación de la resta
                const quantityPalletsPrincipal = parseFloat(parentQuantityPalletsElement.value) || 0;
                const damagedPalletsPrincipal = parseFloat(parentDamagedPalletsElement.value) || 0;

                if (damagedPalletsPrincipal >= 0) {
                    const nuevoGoodPallets = quantityPalletsPrincipal - damagedPalletsPrincipal;
                    parentGoodPalletsElement.value = nuevoGoodPallets.toFixed(2);
                    console.log(`Nuevo good_pallet actualizado en el registro principal: ${nuevoGoodPallets.toFixed(2)}`);
                } else {
                    console.warn("No se puede actualizar el good_pallet porque damaged_pallet en el registro principal es inválido.");
                }
            }


            //  *****************************************************************************************************************************
            function actualizarPalletsOk(index, esSubregistro = false) {
                const cantidadInicial = parseFloat(
                    document.querySelector(
                        `input[name="products_update[${index}][quantity_pallet]"], 
                        input[name="products_insert[${index}][quantity_pallet]"]`
                    )?.value || 0
                );

                const palletsDanados = parseFloat(
                    document.querySelector(
                        `input[name="products_update[${index}][damaged_pallets]"], 
                        input[name="products_insert[${index}][damaged_pallets]"]`
                    )?.value || 0
                );

                const palletsOk = cantidadInicial - palletsDanados;

                let inputGoodPallets = document.querySelector(
                    `input[name="products_update[${index}][good_pallets]"], 
                    input[name="products_insert[${index}][good_pallets]"]`
                );

                if (!inputGoodPallets) {
                    console.error(`No se encontró el campo good_pallets con el índice ${index}`);
                    return;
                }

                inputGoodPallets.value = palletsOk;
            }

            // ***********************************************************************************************************************************
            function actualizarStockOk(index, esSubregistro = false) {
                const stockInicial = parseFloat(
                    document.querySelector(
                        `input[name="products_update[${index}][stock]"], 
                        input[name="products_insert[${index}][stock]"]`
                    )?.value || 0
                );

                const damagedStock = parseFloat(
                    document.querySelector(
                        `input[name="products_update[${index}][damaged_stock]"], 
                        input[name="products_insert[${index}][damaged_stock]"]`
                    )?.value || 0
                );

                const stockOk = stockInicial - damagedStock;

                let inputGoodStock = document.querySelector(
                    `input[name="products_update[${index}][good_stock]"], 
                    input[name="products_insert[${index}][good_stock]"]`
                );

                if (!inputGoodStock) {
                    console.error(`No se encontró el campo good_stock con el índice ${index}`);
                    return;
                }

                inputGoodStock.value = stockOk;
            }
        </script>


        <!-- ================================================== END EDIT ================================================== -->
    <?php } ?>