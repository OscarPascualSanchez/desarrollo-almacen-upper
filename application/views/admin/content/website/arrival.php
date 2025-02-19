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
                                                    <a class="btn btn-success" href="<?php echo site_url(); ?>website/arrival/view"><i class="fa fa-refresh"></i></a>
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
                                                <th width=150>Caducidad</th>
                                                <th width=150>Hora de llegada</th>
                                                <th width=150>Inicio de maniobra</th>
                                                <th width=150>Fin de maniobra</th>
                                                <th width=120>Hora de salidar</th>
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
                                                $like_arrival[$cari]            = $q;
                                                if ($jml_data > 0) {
                                                    foreach ($this->ADM->grid_all_arrival_table_arrival('', 'id_main', 'ASC', $batas, $page, '', $like_arrivaL) as $row) {
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
                                                                    <!-- <a class="btn-update" href="<?php echo site_url(); ?>website/arrival/editar2/<?php echo $row->id_main; ?>">
                                                                        <i class="icon wb-pencil"></i>
                                                                    </a>-->
                                                                    <a class="btn-update <?php echo ($disable_edit[$row->id_main] ?? false) ? 'disabled' : ''; ?>"
                                                                        href="<?php echo ($disable_edit[$row->id_main] ?? false) ? '#' : site_url('website/arrival/editar2/' . $row->id_main); ?>"
                                                                        <?php if ($disable_edit[$row->id_main] ?? false) : ?>
                                                                        onclick="alert('No es posible volver a generar registros por pallet porque ya existen.'); return false;"
                                                                        <?php endif; ?>>
                                                                        <i class="icon wb-pencil"></i>
                                                                    </a>


                                                                    <a class="text-danger" href="javascript:;" data-id="<?php echo $row->id_main; ?>" data-toggle="modal" data-target="#modal-konfirmasi" title="<?php echo $row->identification_number; ?>">
                                                                        <i class="icon wb-trash"></i>
                                                                    </a>
                                                                    <a class="btn-update <?php echo ($disable_edit[$row->id_main] ?? false) ? 'disabled' : ''; ?>"
                                                                        href="<?php echo ($disable_edit[$row->id_main] ?? false) ? '#' : site_url('website/arrival/editar/' . $row->id_main); ?>"
                                                                        <?php if ($disable_edit[$row->id_main] ?? false) : ?>
                                                                        onclick="alert('No es posible agregar más productos a este arribo porque ya se ha generado los registros por pallet.'); return false;"
                                                                        <?php endif; ?>>
                                                                        <i class="icon wb-plus"></i>
                                                                    </a>

                                                                    <!-- <a class="btn-update" href="<?php echo site_url(); ?>website/arrival/editar/<?php echo $row->id_main; ?>">
                                                                        <i class="icon wb-plus"></i>
                                                                    </a>-->
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
                                                            echo pages($halaman, $jml_halaman, 'website/arrival/view', $id = "");
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
                    <a href="javascript:;" class="btn btn-danger" id="hapus-arrival">Sí</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== End Modal Konfirmasi ========== -->
    <!-- ================================================== END VIEW ================================================== -->


    <!-- ================================================== VIEW2 ================================================== -->
<?php } else if ($action == 'view2' || empty($action)) { ?>
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
                                                    <a class="btn btn-success" href="<?php echo site_url(); ?>website/arrival/view2"><i class="fa fa-refresh"></i></a>
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
                                                <th width=150>Caducidad</th>
                                                <th width=150>Hora de llegada</th>
                                                <th width=150>Inicio de maniobra</th>
                                                <th width=150>Fin de maniobra</th>
                                                <th width=120>Hora de salidar</th>
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
                                                $like_arrivaltwo[$cari]            = $q;
                                                if ($jml_data > 0) {
                                                    foreach ($this->ADM->grid_all_arrivaltwo2('', 'id_arrivaltwo', 'ASC', $batas, $page, '', $like_arrivaltwo) as $row) {
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
                                                                    <a class="btn-update" href="<?php echo site_url(); ?>website/arrival/edit/<?php echo $row->id_arrivaltwo; ?>">
                                                                        <i class="icon wb-pencil"></i>
                                                                    </a>
                                                                    <a class="text-danger" href="javascript:;" data-id="<?php echo $row->id_arrivaltwo; ?>" data-toggle="modal" data-target="#modal-konfirmasi" title="<?php echo $row->identification_number; ?>">
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
                                                            echo pages($halaman, $jml_halaman, 'website/arrival/view2', $id = "");
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
                    <a href="javascript:;" class="btn btn-danger" id="hapus-arrivaltwo">Sí</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== End Modal Konfirmasi ========== -->
    <!-- ================================================== END VIEW2 ================================================== -->

    <!-- ================================================== TAMBAH ================================================== -->

<?php } elseif ($action == 'tambah') { ?>
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
                            <h5 class="panel-title">Agregar <?php echo $breadcrumb; ?></h5>
                        </div>

                        <div class="panel-body container-fluid">
                            <form action="<?php echo site_url(); ?>website/arrival/tambah/<?php echo $id_main; ?>" method="post" id="exampleStandardForm" autocomplete="off">
                                <!-- Campos del formulario Moral -->
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <h5>Datos generales del arribo</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <!-- Campo para el identificador -->
                                                        <input type="hidden" name="id_main" value="<?php echo $id_main; ?>">


                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">N.Identificación de evento</label>
                                                            <input type="text" class="form-control input-sm" id="identification_number" name="identification_number" value="<?php echo isset($identification_number) ? $identification_number : ''; ?>" required readonly />
                                                        </div>
                                                        <!-- Otros campos relacionados con el nuevo identificador -->
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Pedido</label>
                                                            <input type="text" class="form-control input-sm" id="sale_order" name="sale_order" placeholder="Escribe el pedido" required />
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="id_supplier">Cliente</label>
                                                            <select name="id_supplier" id="id_supplier" class="form-control">
                                                                <option value="">Seleccione un cliente</option>
                                                                <?php foreach ($suppliers as $supplier) : ?>
                                                                    <option value="<?= $supplier->id_supplier ?>"><?= $supplier->nama_supplier ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Tipo de evento</label>
                                                            <input type="text" class="form-control input-sm" id="event_type" name="event_type" value="Arribo" readonly />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="container_number">Número de Contenedor</label>
                                                            <input type="text" name="container_number" id="container_number" class="form-control" placeholder="Escriba el número de contenedor">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="container_type">Tipo de Contenedor</label>
                                                            <select name="container_type" id="container_type" class="form-control">
                                                                <option value="">Seleccione un tipo de contenedor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-group">
                                                            <label for="origin_name">Origen</label>
                                                            <input type="text" name="origin_name" id="origin_name" class="form-control" placeholder="Escriba el origen">
                                                            <input type="hidden" name="id_origin" id="id_origin">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="id_maneuver">Tipo de maniobra</label>
                                                            <select name="id_maneuver" id="id_maneuver" class="form-control">
                                                                <option value="">Seleccione el tipo de maniobra</option>
                                                                <?php foreach ($maneuvers as $maneuver) : ?>
                                                                    <option value="<?= $maneuver->id_maneuver ?>"><?= $maneuver->type_maneuver ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputDate">Fecha de evento</label>
                                                            <input type="date" class="form-control input-sm" id="event_date" name="event_date" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="platenumber">Número de Placa</label>
                                                            <input type="text" name="platenumber" id="platenumber" class="form-control" placeholder="Escriba el número de placa">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="vehicletype">Tipo de unidad / transporte</label>
                                                            <select name="vehicletype" id="vehicletype" class="form-control">
                                                                <option value="">Seleccione el tipo de unidad / transporte</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-group">
                                                            <label for="id_driver">Conductor</label>
                                                            <select name="id_driver" id="id_driver" class="form-control">
                                                                <option value="">Seleccione el conductor</option>
                                                                <?php foreach ($drivers as $driver) : ?>
                                                                    <option value="<?= $driver->id_driver ?>"><?= $driver->name_driver ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputTime">Hora de llegada</label>
                                                            <input type="time" class="form-control input-sm" id="arrival_time" name="arrival_time" placeholder="Escribe la hora de llegada" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputTime">Inicio de maniobra</label>
                                                            <input type="time" class="form-control input-sm" id="maneuver_start" name="maneuver_start" placeholder="Escribe el inicio de la maniobra" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputTime">Fin de maniobra</label>
                                                            <input type="time" class="form-control input-sm" id="maneuver_end" name="maneuver_end" placeholder="Escribe el fin de la maniobra" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputTime">Hora de salida</label>
                                                            <input type="time" class="form-control input-sm" id="departure_time" name="departure_time" placeholder="Escribe la hora de salida" required />
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
                                                    <table class="table table-striped table-bordered" id="productsTable">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th>Nombre del producto</th>
                                                                <th>Tipo de pallet</th>
                                                                <th>Stock</th>
                                                                <th>Cantidad de producto por pallet</th>
                                                                <th>Cantidad de pallet</th>
                                                                <th>Pallets dañados</th>
                                                                <th>Stock dañado</th>
                                                                <!--<th>Pallets OK</th>
                                                                <th>Stock OK</th>-->
                                                                <th>Tipo de movimiento</th>
                                                                <th>Caducidad</th>
                                                                <th>Nota</th>
                                                                <th>Estatus</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <select name="products[0][id_product]" class="form-control" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;">
                                                                            <option value="">Seleccione un producto</option>
                                                                            <!-- Aquí se cargarán los productos filtrados -->
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <select name="products[0][id_platform]" class="form-control" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;">
                                                                            <option value="">Seleccione un tipo de pallet</option>
                                                                            <?php foreach ($platforms as $platform) : ?>
                                                                                <option value="<?= $platform->id_platform ?>"><?= $platform->type_platform ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group form-material">
                                                                        <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products[0][stock]" placeholder="Introduce el stock" id="stock_0" required readonly />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group form-material">
                                                                        <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products[0][quantity_product_pallet]" placeholder="Escribe la cantidad de producto por pallets" id="quantity_product_pallet_0" oninput="calculateStock(0)" required />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group form-material">
                                                                        <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products[0][quantity_pallet]" placeholder="Escribe la cantidad de pallets" id="quantity_pallet_0" oninput=" calculateStock(0)" required />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group form-material">
                                                                        <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products[0][damaged_pallets]" placeholder="Escribe la cantidad de pallets dañados" id="damaged_pallets_0" value="0" oninput="updateQuantityPallet(0);" required readonly />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group form-material">
                                                                        <input type="number" step="any" class="form-control input-sm" name="products[0][damaged_stock]" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe el stock dañado" id="damaged_stock_0" value="0" oninput="actualizarStockOk(0); updateDamagedStock(0);" required readonly />
                                                                    </div>
                                                                </td>
                                                                <!-- <td>
                                                                    <div class="form-group form-material">
                                                                        <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 180px;" name="products[0][good_pallets]" placeholder="Escribe la cantidad de pallets OK" id="good_pallets_0" readonly required />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group form-material">
                                                                        <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products[0][good_stock]" placeholder="Escribe el stock OK" id="good_stock_0" readonly required />
                                                                    </div>
                                                                </td>-->
                                                                <td>
                                                                    <div class="form-group form-material">
                                                                        <?php if (!empty($movements)): ?>
                                                                            <?php foreach ($movements as $movementss): ?>
                                                                                <!-- Campo visible con el tipo de movimiento -->
                                                                                <input type="text" step="any" class="form-control input-sm"
                                                                                    style="padding: 5px; font-size: 12px; text-align: center; width: 150px;"
                                                                                    name="products[0][type_movements]" id="type_movements_0"
                                                                                    value="<?= htmlspecialchars($movementss->type_movements) ?>"
                                                                                    required readonly />

                                                                                <!-- Campo oculto con el ID del movimiento -->
                                                                                <input type="hidden" name="products[0][id_type_movement]"
                                                                                    value="<?= htmlspecialchars($movementss->id_type_movement) ?>" />
                                                                            <?php endforeach; ?>
                                                                        <?php else: ?>
                                                                            <input type="text" step="any" class="form-control input-sm"
                                                                                style="padding: 5px; font-size: 12px; text-align: center; width: 150px;"
                                                                                name="products[0][type_movements]" id="type_movements_0"
                                                                                value="Entrada" required readonly />

                                                                            <input type="hidden" name="products[0][id_type_movement]" value="1" />
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </td>




                                                                <td>
                                                                    <div class="form-group form-material">
                                                                        <input type="date" class="form-control input-sm" name="products[0][expiration_date]" placeholder="Caducidad" required />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group form-material">
                                                                        <input type="text" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products[0][note]" placeholder="Nota" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group form-material">
                                                                        <select name="products[0][status]" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" onchange="checkStatus(this)">
                                                                            <?php
                                                                            $statuss = array("Activo", "Suspendido", "Deshabilitado");
                                                                            foreach ($statuss as $status) {
                                                                                echo "<option value='$status'>$status</option>";
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td style="display: flex; gap: 5px;">
                                                                    <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px;" onclick="addProductRow()">Agregar Producto</button>
                                                                    <button type="button" class="btn btn-danger" style="padding: 5px 10px; font-size: 12px;" onclick="removeProductRow(this)">Eliminar</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="form-group form-material">
                                                    <label class="control-label" for="inputText">Creado por</label>
                                                    <input type="text" class="form-control input-sm" id="created_by" name="created_by" value="<?php echo $this->session->userdata('admin_nama') ?>" readonly>
                                                </div>
                                                <div class='button center'>
                                                    <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Añadir datos" id="validateButton2">
                                                    <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/arrival/view'" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <a href="<?php echo site_url(); ?>website/arrival/view">
        <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
            <i class="icon wb-eye" aria-hidden="true"></i>
        </button>
    </a>
    <script>
        let rowIndex = 1;

        function addProductRow() {
            const tableBody = document.querySelector('#productsTable tbody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
            <td>
            <div class="form-group">
                <select name="products[${rowIndex}][id_product]" class="form-control id_product" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;">
                    <option value="">Seleccione un producto</option>
                </select>
            </div>
        </td>
        <td>
            <div class="form-group">
                <select name="products[${rowIndex}][id_platform]" class="form-control" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;">
                    <option value="">Seleccione un tipo de pallet</option>
                    <?php foreach ($platforms as $platform) : ?>
                        <option value="<?= $platform->id_platform ?>"><?= $platform->type_platform ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            </td>
        <td>
            <div class="form-group form-material">
                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products[${rowIndex}][stock]" placeholder="Introduce el stock" id="stock_${rowIndex}" required readonly />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products[${rowIndex}][quantity_product_pallet]" placeholder="Escribe la cantidad de producto por pallets" id="quantity_product_pallet_${rowIndex}" oninput="calculateStock(${rowIndex})" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products[${rowIndex}][quantity_pallet]" placeholder="Escribe la cantidad de pallets" id="quantity_pallet_${rowIndex}" oninput="calculateStock(${rowIndex})" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products[${rowIndex}][damaged_pallets]" placeholder="Escribe la cantidad de pallets dañados" id="damaged_pallets_${rowIndex}" oninput="updateQuantityPallet(${rowIndex})" value="0" required readonly />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products[${rowIndex}][damaged_stock]" placeholder="Escribe el stock dañado" id="damaged_stock_${rowIndex}" oninput="actualizarStockOk(${rowIndex}); updateDamagedStock(${rowIndex})" value="0" required readonly />
            </div>
        </td>
         <td>
            <div class="form-group form-material">
                <input type="text" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products[${rowIndex}][type_movements]" id="type_movements_${rowIndex}" value="Entrada" required readonly />
            </div>
        </td>
   
        <td>
            <div class="form-group form-material">
                <input type="date" class="form-control input-sm" name="products[${rowIndex}][expiration_date]" placeholder="Caducidad" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="text" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 130px;" name="products[${rowIndex}][note]" placeholder="Nota" />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                        <select name="products[${rowIndex}][status]" class="form-control input-sm"  style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" onchange="checkStatus(this)">
                                <?php
                                $statuss = array("Activo", "Suspendido", "Deshabilitado");
                                foreach ($statuss as $status) {
                                    echo "<option value='$status'>$status</option>";
                                }
                                ?>
                        </select>
                </div>
            </td>
        <td>
            <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px;" onclick="addProductRow()">Agregar Producto</button>
             <button type="button" class="btn btn-danger" style="padding: 5px 10px; font-size: 12px;" onclick="removeProductRow(this)">Eliminar</button>
        </td>
        
    `;
            tableBody.appendChild(newRow);

            // Aplicar la funcionalidad de carga de productos para la nueva fila
            loadProductsForRow(rowIndex);

            rowIndex++;
        }

        function loadProductsForRow(index) {
            const supplierId = $('#id_supplier').val();
            if (supplierId) {
                $.ajax({
                    url: '<?= base_url("Website/get_products_by_supplier") ?>',
                    type: 'POST',
                    data: {
                        id_supplier: supplierId
                    },
                    dataType: 'json',
                    success: function(data) {
                        const select = $(`select[name="products[${index}][id_product]"]`);
                        select.empty();
                        select.append('<option value="">Seleccione un producto</option>');
                        $.each(data, function(key, value) {
                            select.append('<option value="' + value.id_product + '">' + value.product_name + '</option>');
                        });
                    }
                });
            } else {
                const select = $(`select[name="products[${index}][id_product]"]`);
                select.empty();
                select.append('<option value="">Seleccione un producto</option>');
            }
        }

        function removeProductRow(button) {
            const row = button.closest('tr');
            row.remove();
        }
    </script>
    <script>
        $(document).ready(function() {
            // Cargar productos cuando se cambia el proveedor
            $('#id_supplier').change(function() {
                var supplierId = $(this).val();
                if (supplierId) {
                    $.ajax({
                        url: '<?= base_url("Website/get_products_by_supplier") ?>',
                        type: 'POST',
                        data: {
                            id_supplier: supplierId
                        },
                        dataType: 'json',
                        success: function(data) {
                            // Actualizar todas las filas, incluyendo la primera
                            $('#productsTable tbody tr').each(function() {
                                var productSelect = $(this).find('select[name^="products["][name$="[id_product]"]');
                                productSelect.empty();
                                productSelect.append('<option value="">Seleccione un producto</option>');
                                $.each(data, function(key, value) {
                                    productSelect.append('<option value="' + value.id_product + '">' + value.product_name + '</option>');
                                });
                            });
                        }
                    });
                } else {
                    // Limpiar todas las listas si no hay proveedor seleccionado
                    $('#productsTable tbody tr').each(function() {
                        var productSelect = $(this).find('select[name^="products["][name$="[id_product]"]');
                        productSelect.empty();
                        productSelect.append('<option value="">Seleccione un producto</option>');
                    });
                }
            });

            // Inicializar la lista de productos cuando se carga la página si ya hay un proveedor seleccionado
            var initialSupplierId = $('#id_supplier').val();
            if (initialSupplierId) {
                $('#id_supplier').trigger('change');
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            var productIndex = 1;

            $('#add_product').click(function() {
                var newProduct = `
            <div class="producto">
                <label for="product_${productIndex}">Producto:</label>
                <select id="product_${productIndex}" name="products[${productIndex}][id_product]" class="producto-select">
                    <option value="">Selecciona un producto</option>
                    <!-- Aquí irían los productos relacionados al cliente seleccionado -->
                </select>

                <label for="cantidad_${productIndex}">Cantidad:</label>
                <input type="number" id="cantidad_${productIndex}" name="productos[${productIndex}][cantidad]">

                <label for="unidad_${productIndex}">Unidad:</label>
                <input type="text" id="unidad_${productIndex}" name="productos[${productIndex}][unidad]">
            </div>
        `;

                $('.datos-product').append(newProduct);
                productIndex++;
            });

        });
    </script>


    <script>
        function toggleIdentificationFields() {
            var option = document.getElementById('identification_option').value;
            if (option === 'new') {
                document.getElementById('new_identification').style.display = 'block';
                document.getElementById('existing_identification').style.display = 'none';
            } else if (option === 'existing') {
                document.getElementById('new_identification').style.display = 'none';
                document.getElementById('existing_identification').style.display = 'block';
            }
        }
    </script>

    <!--Autocompletado Numero de contenedor -->
    <script>
        $(document).ready(function() {
            // Variable para almacenar todos los números de contenedor
            var allContainers = [];

            // Función para cargar todos los números de contenedor desde el servidor
            function loadAllContainers() {
                $.ajax({
                    url: "<?= site_url('Website/get_all_container_numbers') ?>", // URL para obtener todos los números de contenedor
                    dataType: "json",
                    success: function(data) {
                        allContainers = data; // Almacena todos los números de contenedor
                    },
                    error: function(xhr, status, error) {
                        console.error("Error al cargar los números de contenedor:", error);
                    }
                });
            }

            // Cargar todos los números de contenedor al iniciar la página
            loadAllContainers();

            // Configurar el autocompletado
            $("#container_number").autocomplete({
                source: function(request, response) {
                    // Filtrar los números de contenedor basados en lo que el usuario ha escrito
                    var term = request.term.toLowerCase();
                    var filteredContainers = allContainers.filter(function(container) {
                        return container.label.toLowerCase().includes(term);
                    });
                    response(filteredContainers); // Enviar los números de contenedor filtrados al autocompletado
                },
                minLength: 0, // Mostrar opciones incluso si no se ha escrito nada
                focus: function(event, ui) {
                    // Evitar que el campo se complete automáticamente al navegar por las opciones
                    event.preventDefault();
                },
                select: function(event, ui) {
                    // Cuando se selecciona una opción, completar el campo con el valor seleccionado
                    $("#container_number").val(ui.item.label);

                    // Obtener el tipo de contenedor basado en el número de contenedor seleccionado
                    fetch('<?= site_url('Website/get_container_type_by_number/') ?>' + ui.item.label)
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
                        })
                        .catch(error => {
                            console.error("Error al obtener el tipo de contenedor:", error);
                        });

                    return false;
                }
            });

            // Mostrar todas las opciones al hacer clic en el campo
            $("#container_number").on("focus", function() {
                $(this).autocomplete("search", "");
            });
        });
    </script>

    <!--Autocompletado Placa -->
    <script>
        $(document).ready(function() {
            // Configura el autocompletado para el campo #platenumber
            $("#platenumber").autocomplete({
                source: function(request, response) {
                    // Realiza una solicitud AJAX al servidor para obtener los números de placa
                    $.ajax({
                        url: "<?= site_url('Website/get_platenumbers') ?>", // URL del controlador
                        dataType: "json",
                        data: {
                            term: request.term // Término de búsqueda
                        },
                        success: function(data) {
                            // Envía los datos de respuesta al autocompletado
                            response(data);
                        },
                        error: function(xhr, status, error) {
                            console.error("Error en la solicitud AJAX:", error);
                        }
                    });
                },
                minLength: 1, // Número mínimo de caracteres para iniciar la búsqueda
                select: function(event, ui) {
                    // Cuando se selecciona un elemento, obtén el tipo de vehículo
                    var platenumber = ui.item.value;
                    fetch('<?= site_url('Website/get_vehicletype_by_platenumber/') ?>' + platenumber)
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
                        })
                        .catch(error => {
                            console.error("Error al obtener el tipo de vehículo:", error);
                        });
                }
            });
            // Evento para detectar cuando el campo de placa esté vacío
            $("#platenumber").on("input", function() {
                if ($(this).val().trim() === "") {
                    // Si el campo de placa está vacío, limpia el campo de tipo de vehículo
                    $("#vehicletype").html('<option value="">Seleccione un tipo de unidad de transporte</option>');
                }
            });
        });
    </script>

    <!--Autocompletado Origen -->
    <script>
        $(document).ready(function() {
            // Variable para almacenar todos los orígenes
            var allOrigins = [];

            // Función para cargar todos los orígenes desde el servidor
            function loadAllOrigins() {
                $.ajax({
                    url: "<?= site_url('Website/get_all_origins') ?>", // URL para obtener todos los orígenes
                    dataType: "json",
                    success: function(data) {
                        allOrigins = data; // Almacena todos los orígenes
                    },
                    error: function(xhr, status, error) {
                        console.error("Error al cargar los orígenes:", error);
                    }
                });
            }

            // Cargar todos los orígenes al iniciar la página
            loadAllOrigins();

            // Configurar el autocompletado
            $("#origin_name").autocomplete({
                source: function(request, response) {
                    // Filtrar los orígenes basados en lo que el usuario ha escrito
                    var term = request.term.toLowerCase();
                    var filteredOrigins = allOrigins.filter(function(origin) {
                        return origin.label.toLowerCase().includes(term);
                    });
                    response(filteredOrigins); // Enviar los orígenes filtrados al autocompletado
                },
                minLength: 0, // Mostrar opciones incluso si no se ha escrito nada
                focus: function(event, ui) {
                    // Evitar que el campo se complete automáticamente al navegar por las opciones
                    event.preventDefault();
                    $("#origin_name").val(ui.item.label);
                },
                select: function(event, ui) {
                    // Cuando se selecciona una opción, completar el campo con el valor seleccionado
                    $("#origin_name").val(ui.item.label); // Mostrar el nombre del origen
                    $("#id_origin").val(ui.item.value); // Almacenar el ID del origen en el campo oculto
                    return false;
                }
            });

            // Mostrar todas las opciones al hacer clic en el campo
            $("#origin_name").on("focus", function() {
                $(this).autocomplete("search", "");
            });
        });
    </script>



    <script>
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
        }*/

        function updateQuantityPallet(index) {
            const damagedPallets = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
            const quantityPallet = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;

            if (damagedPallets > quantityPallet) {
                alert(`La cantidad de pallets dañados no puede ser mayor que el número de palllets (${quantityPallet}).`);
                document.getElementById(`damaged_pallets_${index}`).value = quantityPallet;
            }
        }

        function updateDamagedStock(index) {
            // Obtener valores
            const damagedStock = parseFloat(document.getElementById(`damaged_stock_${index}`).value) || 0;
            const damagedPallets = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
            const quantityProductPallet = parseFloat(document.getElementById(`quantity_product_pallet_${index}`).value) || 0;

            // Calcular resultado permitido
            const resul = damagedPallets * quantityProductPallet;
            const resulFormatted = parseFloat(resul.toFixed(2));

            // Si el valor introducido es mayor, se muestra alerta y se corrige
            if (damagedStock > resulFormatted) {
                alert(`La cantidad de stock dañado no puede ser mayor a la multiplicación de cantidad de pallets dañados * cantidad de producto por pallet (${resulFormatted}).`);
                document.getElementById(`damaged_stock_${index}`).value = resulFormatted;
            }
        }

        function calculateStock(index) {
            const quantityPallet = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;
            const quantityProductPallet = parseFloat(document.getElementById(`quantity_product_pallet_${index}`).value) || 0;

            const stockInicial = quantityPallet * quantityProductPallet;
            const stockInicialFormatted = stockInicial.toFixed(2);
            document.getElementById(`stock_${index}`).value = stockInicialFormatted;

            // actualizarPalletsOk(index);
            actualizarStockOk(index);
        }

        /* function actualizarPalletsOk(index) {
             const cantidadInicial = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;
             const palletsDañados = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
             const palletsOk = cantidadInicial - palletsDañados;
             document.getElementById(`good_pallets_${index}`).value = palletsOk;
         }*/

        function actualizarStockOk(index) {
            const stockInicial = parseFloat(document.getElementById(`stock_${index}`).value) || 0;
            const stockDañado = parseFloat(document.getElementById(`damaged_stock_${index}`).value) || 0;
            const stockOk = stockInicial - stockDañado;
            document.getElementById(`good_stock_${index}`).value = stockOk;
        }
    </script>

    <!-- <script>
        // Función que revisa periódicamente si ha cambiado el valor
        function monitorInputs(index) {
            setInterval(function() {
                // Recuperar los valores de los inputs
                var stockInsert = document.getElementById(`stock_${index}`).value;
                var quantityPalletInsert = document.getElementById(`quantity_pallet_${index}`).value;

                document.getElementById(`available_pallets_${index}`).value = `Stock: ${stockInsert}, Pallets: ${quantityPalletInsert}`;
            }, 1000); // Intervalo de 500ms para detectar cambios
        }


        // Iniciar la monitorización al cargar la página
        window.onload = monitorInputs;
    </script>-->

    <!-- ================================================== END TAMBAH ================================================== -->

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
                            <h5 class="panel-title">Editar <?php echo $breadcrumb; ?></h5>
                        </div>
                        <div class="panel-body container-fluid">
                            <form action="<?php echo site_url(); ?>website/arrival/edit/<?php echo $id_arrivaltwo; ?>" method="post" id="exampleStandardForm" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <h5>Datos generales de arribo</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <input type="hidden" name="id_arrivaltwo" value="<?php echo $id_arrivaltwo; ?>" />

                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">N.Identificación de evento</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $identification_number; ?>" id="identification_number" name="identification_number" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Pedido</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $sale_order; ?>" id="sale_order" name="sale_order" placeholder="Escribe el pedido" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Cliente</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $nama_supplier; ?>" id="nama_supplier" readonly />
                                                            <input type="hidden" name="id_supplier" value="<?php echo $id_supplier; ?>" id="id_supplier" />
                                                            <input type="hidden" name="nama_supplier" value="<?php echo $nama_supplier; ?>" id="nama_supplier" />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Tipo de evento</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $event_type; ?>" id="event_type" name="event_type" placeholder="Introdu el tipo de evento" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="container_number">N.Identificación del contenedor</label>
                                                            <select name="container_number" id="container_number" class="form-control">
                                                                <option value="">Seleccione el N.Identificador del contenedor</option>
                                                                <?php foreach ($containers as $container) : ?>
                                                                    <option value="<?= $container->container_number ?>" <?php echo ($container->container_number == $container_number) ? 'selected' : ''; ?>><?= $container->container_number ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="container_type">Tipo de Contenedor</label>
                                                            <select name="container_type" id="container_type" class="form-control">
                                                                <option value="<?= $container_type ?>" selected><?= $container_type ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-group">
                                                            <label for="id_origin">Origen</label>
                                                            <select name="id_origin" id="id_origin" class="form-control">
                                                                <option value="">Seleccione el Origen</option>
                                                                <?php foreach ($origins as $origin) : ?>
                                                                    <option value="<?= $origin->id_origin ?>" <?php echo ($origin->id_origin == $id_origin) ? 'selected' : ''; ?>><?= $origin->state ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="id_maneuver">Tipo de maniobra</label>
                                                            <select name="id_maneuver" id="id_maneuver" class="form-control">
                                                                <option value="">Seleccione el Origen</option>
                                                                <?php foreach ($maneuvers as $maneuver) : ?>
                                                                    <option value="<?= $maneuver->id_maneuver ?>" <?php echo ($maneuver->id_maneuver == $id_maneuver) ? 'selected' : ''; ?>><?= $maneuver->type_maneuver ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputDate">Fecha de evento</label>
                                                            <input type="date" class="form-control input-sm" value="<?php echo $event_date; ?>" id="event_date" name="event_date" required />
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="platenumber">Número de placa</label>
                                                            <select name="platenumber" id="platenumber" class="form-control">
                                                                <option value="">Seleccione el número de placa</option>
                                                                <?php foreach ($transports as $transport) : ?>
                                                                    <option value="<?= $transport->platenumber ?>" <?php echo ($transport->platenumber == $platenumber) ? 'selected' : ''; ?>><?= $transport->platenumber ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="vehicletype">Tipo de Unidad / Transporte</label>
                                                            <select name="vehicletype" id="vehicletype" class="form-control">
                                                                <option value="<?= isset($vehicletype->vehicletype) ? htmlspecialchars($vehicletype->vehicletype) : '' ?>" selected>
                                                                    <?= isset($vehicletype->vehicletype) ? htmlspecialchars($vehicletype->vehicletype) : 'Seleccione un tipo de unidad' ?>
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt2">
                                                        <div class="form-group">
                                                            <label for="id_driver">Conductor</label>
                                                            <select name="id_driver" id="id_driver" class="form-control">
                                                                <option value="">Seleccione un tipo de pallet</option>
                                                                <?php foreach ($drivers as $driver) : ?>
                                                                    <option value="<?= $driver->id_driver ?>" <?php echo ($driver->id_driver == $id_driver) ? 'selected' : ''; ?>><?= $driver->name_driver ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Hora de llegada</label>
                                                            <input type="time" value="<?php echo $arrival_time; ?>" class="form-control input-sm" id="arrival_time" name="arrival_time" required>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Inicio de maniobra</label>
                                                            <input type="time" class="form-control input-sm" value="<?php echo $maneuver_start; ?>" id="maneuver_start" name="maneuver_start" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Fin de maniobra</label>
                                                            <input type="time" class="form-control input-sm" value="<?php echo $maneuver_end; ?>" id="maneuver_end" name="maneuver_end" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Hora de salida</label>
                                                            <input type="time" class="form-control input-sm" value="<?php echo $departure_time; ?>" id="departure_time" name="departure_time" required />
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
                                                                <th>N_Sub</th>
                                                                <th>Nombre del producto</th>
                                                                <th>Tipo de pallet</th>
                                                                <th>Stock por pallet</th>
                                                                <th>Cantidad de producto por pallet</th>
                                                                <th>Cantidad de pallet</th>
                                                                <th>Pallet dañado</th>
                                                                <th>Stock dañado</th>
                                                                <!--<th>Pallet Ok</th>-->
                                                                <th>Stock Ok</th>
                                                                <th>Tipo de movimiento</th>
                                                                <th>Caducidad</th>
                                                                <th>Nota</th>
                                                                <th>Estatus</th>
                                                                <!-- <th>Acciones</th>-->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $index = 1; ?>
                                                            <!-- var_dump($generated_products) ?>-->

                                                            <?php if (isset($productss) && is_array($productss)) : ?>
                                                                <?php foreach ($productss as $product) : ?>
                                                                    <tr>

                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <?php if (!is_null($product->id_movement)) : ?>
                                                                                    <input class="form-control input-sm" type="text" name="products_update[<?php echo $index; ?>][id_movement]" id="id_movement_<?php echo $index; ?>" value="<?= $product->id_movement ?>" style="padding: 5px; font-size: 12px; text-align: center; width: 80px;" readonly />
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </td>
                                                                        <input type="hidden" name="products_update[<?php echo $index; ?>][id_arrivaltwo]" id="id_arrivaltwo_<?php echo $index; ?>" value="<?= $product->id_arrivaltwo; ?>">
                                                                        <input type="hidden" name="products_update[<?php echo $index; ?>][id_main]" id="id_main_<?php echo $index; ?>" value="<?= $product->id_main; ?>" />
                                                                        <input type="hidden" name="products_update[<?php echo $index; ?>][id_arrival]" id="id_arrival_<?php echo $index; ?>" value="<?= $product->id_arrival; ?>" />
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
                                                                            <div class="form-group">
                                                                                <select name="products_update[<?php echo $index; ?>][id_platform]" class="form-control" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" onchange="document.getElementById('type_platform_<?php echo $index; ?>').value = this.options[this.selectedIndex].text">>
                                                                                    <option value="">Seleccione un tipo de pallet</option>
                                                                                    <?php foreach ($platforms as $platform) : ?>
                                                                                        <option value="<?= $platform->id_platform ?>" <?php echo ($product->id_platform == $platform->id_platform) ? 'selected' : ''; ?>><?= $platform->type_platform ?>
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
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products_update[<?php echo $index; ?>][stock]" value="<?php echo $product->stock; ?>" placeholder="Introduce el stock" id="stock_<?php echo $index; ?>" required readonly />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][quantity_product_pallet]" value="<?php echo $product->quantity_product_pallet; ?>" placeholder="Escribe la cantidad de producto por pallets" id="quantity_product_pallet_<?php echo $index; ?>" oninput="calculateStock(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][quantity_pallet]" value="<?php echo $product->quantity_pallet; ?>" placeholder="Escribe la cantidad de pallets" id="quantity_pallet_<?php echo $index; ?>" oninput="calculateStock(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][damaged_pallets]" value="<?php echo $product->damaged_pallets; ?>" placeholder="Escribe la cantidad de pallets dañados" id="damaged_pallets_<?php echo $index; ?>" oninput="updateQuantityPallet(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][damaged_stock]" value="<?php echo $product->damaged_stock; ?>" placeholder="Escribe el stock dañado" id="damaged_stock_<?php echo $index; ?>" oninput="actualizarStockOk(<?php echo $index; ?>); updateDamagedStock(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <!-- <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 180px;" name="products_update[<?php echo $index; ?>][good_pallets]" value="<?php echo $product->good_pallets; ?>" placeholder="Escribe la cantidad de pallets OK" id="good_pallets_<?php echo $index; ?>" readonly required />
                                                                            </div>
                                                                        </td>-->
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products_update[<?php echo $index; ?>][good_stock]" value="<?php echo $product->good_stock; ?>" placeholder="Escribe el stock OK" id="good_stock_<?php echo $index; ?>" readonly required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="text" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products_update[<?php echo $index; ?>][type_movements]" value="<?php echo $product->type_movements; ?>" required readonly />
                                                                                <input type="hidden"
                                                                                    name="products_update[<?php echo $index; ?>][id_type_movement]"
                                                                                    value="<?= $product->id_type_movement ?>" />
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
                                                                        <!-- <td style="display: flex; gap: 5px;">
                                                                            <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px;" onclick="addProductRow()">Agregar Producto</button>
                                                                            <button type="button" class="btn btn-danger" style="padding: 5px 10px; font-size: 12px;" onclick="removeProductRow(this)">Eliminar</button>
                                                                        </td>-->
                                                                    </tr>
                                                                    <?php $index++; ?>
                                                                <?php endforeach; ?>
                                                            <?php else : ?>
                                                                <tr>
                                                                    <td colspan="14">No se encontraron productos.</td>
                                                                </tr>
                                                            <?php endif; ?>
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

                                </div>
                                <div class="col-md-12 mt-5 ">
                                    <div class='button center mt-2'>
                                        <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Actualizar datos" id="validateButton2">
                                        <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/arrival/view2'" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <a href="<?php echo site_url(); ?>website/arrival/view">
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
        let index = <?php echo $index; ?>; // Empieza con el valor del último índice utilizado

        // Función para agregar una nueva fila de producto
        function addProductRow() {
            console.log('addProductRow function called'); // Verifica si la función se está llamando
            const supplierId = document.getElementById('id_supplier').value; // Asegúrate de tener el supplier_id disponible
            const tableBody = document.querySelector('#editProductsTable tbody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
             <td>
                <div class="form-group form-material">
                    <input class="form-control input-sm" type="text" name="products_insert[${index}][id_movement]" id="id_movement_${index}" style="padding: 5px; font-size: 12px; text-align: center; width: 80px;" readonly />
                </div>                                                         
            </td>  
            <td>
            <input type="hidden" name="products_insert[${index}][id_product]" id="id_product_${index}" value="<?= $product->id_product ?>" />

            <div class="form-group form-material">
            <!-- Select para seleccionar el producto -->
                <select name="products_insert[${index}][id_product]" id="id_product_${index}"
                    class="form-control"
                    style="padding: 5px; font-size: 12px; text-align: center; width: 200px;"
                    onchange="document.getElementById('product_name_${index}').value = this.options[this.selectedIndex].text">
                       <option value="">Seleccione un producto</option>
                            <?php foreach ($products as $product_na) : ?>
                                <option value="<?= $product_na->id_product ?>"><?= $product_na->product_name ?></option>
                            <?php endforeach; ?>
                </select>
            </div>

            <!-- Campo oculto para enviar el nombre del producto -->
                <input type="hidden"
                    id="product_name_${index}"
                    name="products_insert[${index}][product_name]"
                    value="<?= $product->product_name ?>" />      
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
                <input type="number" class="form-control input-sm" name="products_insert[${index}][stock]" id="stock_${index}" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" placeholder="Introduce el stock" required />
            </div>    
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][quantity_product_pallet]" id="quantity_product_pallet_${index}" oninput="calculateStock(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de producto por pallets" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][quantity_pallet]" id="quantity_pallet_${index}" oninput="calculateStock(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de pallets" readonly required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][damaged_pallets]" id="damaged_pallets_${index}" oninput="updateQuantityPallet(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de pallets dañados" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][damaged_stock]" id="damaged_stock_${index}" oninput="actualizarStockOk(${index}); updateDamagedStock(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe el stock dañado" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][good_pallets]" id="good_pallets_${index}" style="padding: 5px; font-size: 12px; text-align: center; width: 180px;" placeholder="Escribe la cantidad de pallets OK" readonly required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][good_stock]" id="good_stock_${index}" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" placeholder="Escribe el stock OK" readonly required />
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
            <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px;" onclick="addProductRow()">Agregar Producto</button>
            <button type="button" class="btn btn-danger" style="padding: 5px 10px; font-size: 12px;" onclick="removeProductRow(this)">Eliminar</button>
        </td>
    `;
            tableBody.appendChild(newRow);

            loadProductsForRows(index, supplierId);
            index++; // Incrementa el índice para la siguiente fila
        }

        // Función para eliminar una fila de producto
        function removeProductRow(button) {
            const row = button.closest('tr');
            row.remove();
        }
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
                $('select[name^="products_update"]').each(function(index, element) {
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
                    // var selectedProductId = $('input[name="products_update[' + index + '][id_product]"]').val();
                    //select.val(selectedProductId);
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
                fetch('<?= site_url('Website/get_vehicletype_by_platenumber/') ?>' + platenumber)
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
            $(document).on('input', '[id^=stock_], [id^=quantity_product_pallet_], [id^=damaged_pallets_], [id^=damaged_stock_]', function() {
                var index = $(this).attr('id').match(/\d+/); // Extrae el índice del ID del campo
                calculateStock(index);
            });

            $('#addRowButton').on('click', function() {
                var newRowIndex = $('input[id^=stock_]').length; // Calcula el índice de la nueva fila
                // Añade los eventos de actualización a la nueva fila
                calculateStock(newRowIndex);
            });
        });

        /* function updateQuantityProductByPallet(index) {
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
         }*/

        function updateQuantityPallet(index) {
            const damagedPallets = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
            const quantityPallet = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;

            if (damagedPallets > quantityPallet) {
                alert(`La cantidad de pallets dañados no puede ser mayor que el número de palllets (${quantityPallet}).`);
                document.getElementById(`damaged_pallets_${index}`).value = quantityPallet;
            }
        }
        // ******************************************************************************************************************************
        function updateDamagedStock(index) {
            // Obtener valores
            const damagedStock = parseFloat(document.getElementById(`damaged_stock_${index}`).value) || 0;
            const damagedPallets = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
            const quantityProductPallet = parseFloat(document.getElementById(`quantity_product_pallet_${index}`).value) || 0;

            // Calcular resultado permitido
            const resul = damagedPallets * quantityProductPallet;
            const resulFormatted = parseFloat(resul.toFixed(2));

            // Si el valor introducido es mayor, se muestra alerta y se corrige
            if (damagedStock > resulFormatted) {
                alert(`La cantidad de stock dañado no puede ser mayor a la multiplicación de cantidad de pallets * cantidad de producto por pallet (${resulFormatted}).`);
                document.getElementById(`damaged_stock_${index}`).value = resulFormatted;
            }
        }
        // ********************************************************************************************************************************* 
        function calculateStock(index) {
            const quantityPallet = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;
            const quantityProductPallet = parseFloat(document.getElementById(`quantity_product_pallet_${index}`).value) || 0;

            const stockInicial = quantityPallet * quantityProductPallet;
            const stockInicialFormatted = stockInicial.toFixed(2);
            document.getElementById(`stock_${index}`).value = stockInicialFormatted;

            //actualizarPalletsOk(index);
            actualizarStockOk(index);
        }

        /* function actualizarPalletsOk(index) {
             const cantidadInicial = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;
             const palletsDañados = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
             const palletsOk = cantidadInicial - palletsDañados;
             document.getElementById(`good_pallets_${index}`).value = palletsOk;
         }*/

        function actualizarStockOk(index) {
            const stockInicial = parseFloat(document.getElementById(`stock_${index}`).value) || 0;
            const stockDañado = parseFloat(document.getElementById(`damaged_stock_${index}`).value) || 0;
            const stockOk = stockInicial - stockDañado;
            document.getElementById(`good_stock_${index}`).value = stockOk;
        }
    </script>
    <!--<script>
         function updateAvailablePallet(index) {
            // Obtenemos los valores de los inputs 1 y 2
            var stockInsert = document.getElementById(`stock_${index}`).value;
            //var quantityPalletInsert = document.getElementById(`quantity_pallet_${index}`).value;

            // Actualiza el valor del input available_pallets concatenando los valores
            document.getElementById(`available_pallets_${index}`).value = `Stock: ${stockInsert}`;
        }
    </script>-->
    <!-- < <script>
        // Función que revisa periódicamente si ha cambiado el valor
        function monitorInputs(index) {
        setInterval(function() {
        // Recuperar los valores de los inputs
        var stockInsert = document.getElementById(`stock_${index}`).value;
        var quantityPalletInsert = document.getElementById(`quantity_pallet_${index}`).value;

        document.getElementById(`available_pallets_${index}`).value = `Stock: ${stockInsert}, Pallets: ${quantityPalletInsert}`;
        }, 1000); // Intervalo de 500ms para detectar cambios
        }


        // Iniciar la monitorización al cargar la página
        window.onload = monitorInputs;
        </script>-->

    <!-- ================================================== END EDIT ================================================== -->



    <!-- ================================================== EDITAR2 ================================================== -->
<?php } elseif ($action == 'editar2') { ?>
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
                            <h5 class="panel-title">Editar <?php echo $breadcrumb; ?></h5>
                        </div>
                        <div class="panel-body container-fluid">
                            <form action="<?php echo site_url(); ?>website/arrival/editar2/<?php echo $id_arrivaltwo; ?>" method="post" id="exampleStandardForm" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <h5>Datos generales de arribo</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <input type="hidden" name="id_arrivaltwo" value="<?php echo $id_arrivaltwo; ?>" />

                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">N.Identificación de evento</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $identification_number; ?>" id="identification_number" name="identification_number" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Pedido</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $sale_order; ?>" id="sale_order" name="sale_order" placeholder="Escribe el pedido" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Cliente</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $nama_supplier; ?>" id="nama_supplier" readonly />
                                                            <input type="hidden" name="id_supplier" value="<?php echo $id_supplier; ?>" id="id_supplier" />
                                                            <input type="hidden" name="nama_supplier" value="<?php echo $nama_supplier; ?>" id="nama_supplier" />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Tipo de evento</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $event_type; ?>" id="event_type" name="event_type" placeholder="Introdu el tipo de evento" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="container_number">N.Identificación del contenedor</label>
                                                            <select name="container_number" id="container_number" class="form-control">
                                                                <option value="">Seleccione el N.Identificador del contenedor</option>
                                                                <?php foreach ($containers as $container) : ?>
                                                                    <option value="<?= $container->container_number ?>" <?php echo ($container->container_number == $container_number) ? 'selected' : ''; ?>><?= $container->container_number ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="container_type">Tipo de Contenedor</label>
                                                            <select name="container_type" id="container_type" class="form-control">
                                                                <option value="<?= $container_type ?>" selected><?= $container_type ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-group">
                                                            <label for="id_origin">Origen</label>
                                                            <select name="id_origin" id="id_origin" class="form-control">
                                                                <option value="">Seleccione el Origen</option>
                                                                <?php foreach ($origins as $origin) : ?>
                                                                    <option value="<?= $origin->id_origin ?>" <?php echo ($origin->id_origin == $id_origin) ? 'selected' : ''; ?>><?= $origin->state ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="id_maneuver">Tipo de maniobra</label>
                                                            <select name="id_maneuver" id="id_maneuver" class="form-control">
                                                                <option value="">Seleccione el Origen</option>
                                                                <?php foreach ($maneuvers as $maneuver) : ?>
                                                                    <option value="<?= $maneuver->id_maneuver ?>" <?php echo ($maneuver->id_maneuver == $id_maneuver) ? 'selected' : ''; ?>><?= $maneuver->type_maneuver ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputDate">Fecha de evento</label>
                                                            <input type="date" class="form-control input-sm" value="<?php echo $event_date; ?>" id="event_date" name="event_date" required />
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="platenumber">Número de placa</label>
                                                            <select name="platenumber" id="platenumber" class="form-control">
                                                                <option value="">Seleccione el número de placa</option>
                                                                <?php foreach ($transports as $transport) : ?>
                                                                    <option value="<?= $transport->platenumber ?>" <?php echo ($transport->platenumber == $platenumber) ? 'selected' : ''; ?>><?= $transport->platenumber ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="vehicletype">Tipo de Unidad / Transporte</label>
                                                            <select name="vehicletype" id="vehicletype" class="form-control">
                                                                <option value="<?= isset($vehicletype->vehicletype) ? htmlspecialchars($vehicletype->vehicletype) : '' ?>" selected>
                                                                    <?= isset($vehicletype->vehicletype) ? htmlspecialchars($vehicletype->vehicletype) : 'Seleccione un tipo de unidad' ?>
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt2">
                                                        <div class="form-group">
                                                            <label for="id_driver">Conductor</label>
                                                            <select name="id_driver" id="id_driver" class="form-control">
                                                                <option value="">Seleccione un tipo de pallet</option>
                                                                <?php foreach ($drivers as $driver) : ?>
                                                                    <option value="<?= $driver->id_driver ?>" <?php echo ($driver->id_driver == $id_driver) ? 'selected' : ''; ?>><?= $driver->name_driver ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Hora de llegada</label>
                                                            <input type="time" value="<?php echo $arrival_time; ?>" class="form-control input-sm" id="arrival_time" name="arrival_time" required>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Inicio de maniobra</label>
                                                            <input type="time" class="form-control input-sm" value="<?php echo $maneuver_start; ?>" id="maneuver_start" name="maneuver_start" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Fin de maniobra</label>
                                                            <input type="time" class="form-control input-sm" value="<?php echo $maneuver_end; ?>" id="maneuver_end" name="maneuver_end" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Hora de salida</label>
                                                            <input type="time" class="form-control input-sm" value="<?php echo $departure_time; ?>" id="departure_time" name="departure_time" required />
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
                                                                <th>N_Sub</th>
                                                                <th>Nombre del producto</th>
                                                                <th>Tipo de pallet</th>
                                                                <th>Stock por pallet</th>
                                                                <th>Cantidad de producto por pallet</th>
                                                                <th>Cantidad de pallet</th>
                                                                <th>Pallet dañado</th>
                                                                <th>Stock dañado</th>
                                                                <!--<th>Pallet Ok</th>-->
                                                                <th>Stock Ok</th>
                                                                <th>Tipo de movimiento</th>
                                                                <th>Caducidad</th>
                                                                <th>Nota</th>
                                                                <th>Estatus</th>
                                                                <!-- <th>Acciones</th>-->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $index = 1; ?>
                                                            <!-- var_dump($generated_products) ?>-->

                                                            <?php if (isset($generated_products) && is_array($generated_products)) : ?>
                                                                <?php foreach ($generated_products as $product) : ?>
                                                                    <tr>

                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <?php if (!is_null($product->id_movement)) : ?>
                                                                                    <input class="form-control input-sm" type="text" name="products_update[<?php echo $index; ?>][id_movement]" id="id_movement_<?php echo $index; ?>" value="<?= $product->id_movement ?>" style="padding: 5px; font-size: 12px; text-align: center; width: 80px;" readonly />
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </td>
                                                                        <input type="hidden" name="products_update[<?php echo $index; ?>][id_main]" id="id_main_<?php echo $index; ?>" value="<?= $product->id_main; ?>" />
                                                                        <input type="hidden" name="products_update[<?php echo $index; ?>][id_arrival]" id="id_arrival_<?php echo $index; ?>" value="<?= $product->id_arrival; ?>" />
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
                                                                            <div class="form-group">
                                                                                <select name="products_update[<?php echo $index; ?>][id_platform]" class="form-control" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" onchange="document.getElementById('type_platform_<?php echo $index; ?>').value = this.options[this.selectedIndex].text">>
                                                                                    <option value="">Seleccione un tipo de pallet</option>
                                                                                    <?php foreach ($platforms as $platform) : ?>
                                                                                        <option value="<?= $platform->id_platform ?>" <?php echo ($product->id_platform == $platform->id_platform) ? 'selected' : ''; ?>><?= $platform->type_platform ?>
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
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products_update[<?php echo $index; ?>][stock]" value="<?php echo $product->stock; ?>" placeholder="Introduce el stock" id="stock_<?php echo $index; ?>" required readonly />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][quantity_product_pallet]" value="<?php echo $product->quantity_product_pallet; ?>" placeholder="Escribe la cantidad de producto por pallets" id="quantity_product_pallet_<?php echo $index; ?>" oninput="calculateStock(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][quantity_pallet]" value="<?php echo $product->quantity_pallet; ?>" placeholder="Escribe la cantidad de pallets" id="quantity_pallet_<?php echo $index; ?>" oninput="calculateStock(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][damaged_pallets]" value="<?php echo $product->damaged_pallets; ?>" placeholder="Escribe la cantidad de pallets dañados" id="damaged_pallets_<?php echo $index; ?>" oninput="updateQuantityPallet(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][damaged_stock]" value="<?php echo $product->damaged_stock; ?>" placeholder="Escribe el stock dañado" id="damaged_stock_<?php echo $index; ?>" oninput="actualizarStockOk(<?php echo $index; ?>); updateDamagedStock(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <!-- <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 180px;" name="products_update[<?php echo $index; ?>][good_pallets]" value="<?php echo $product->good_pallets; ?>" placeholder="Escribe la cantidad de pallets OK" id="good_pallets_<?php echo $index; ?>" readonly required />
                                                                            </div>
                                                                        </td>-->
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products_update[<?php echo $index; ?>][good_stock]" value="<?php echo $product->good_stock; ?>" placeholder="Escribe el stock OK" id="good_stock_<?php echo $index; ?>" readonly required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="text" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products_update[<?php echo $index; ?>][type_movements]" value="<?php echo $product->type_movements; ?>" required readonly />
                                                                                <input type="hidden"
                                                                                    name="products_update[<?php echo $index; ?>][id_type_movement]"
                                                                                    value="<?= $product->id_type_movement ?>" />
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
                                                                        <!-- <td style="display: flex; gap: 5px;">
                                                                            <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px;" onclick="addProductRow()">Agregar Producto</button>
                                                                            <button type="button" class="btn btn-danger" style="padding: 5px 10px; font-size: 12px;" onclick="removeProductRow(this)">Eliminar</button>
                                                                        </td>-->
                                                                    </tr>
                                                                    <?php $index++; ?>
                                                                <?php endforeach; ?>
                                                            <?php else : ?>
                                                                <tr>
                                                                    <td colspan="14">No se encontraron productos.</td>
                                                                </tr>
                                                            <?php endif; ?>
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
                                    <!-- <div class="col-md-12 mt-5 ">
                                    <div class='button center mt-2 md-3'>
                                        <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Generar registros" id="validateButton2">
                                        <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/arrival/view'" />
                                    </div>
                                </div>-->
                                    <div class="col-md-12 mt-5">
                                        <div class='button center mt-2 md-3'>
                                            <input class="btn btn-success btn-sm"
                                                type="submit"
                                                name="simpan"
                                                value="Generar registros"
                                                id="validateButton2"
                                                onclick="return confirmarGeneracion();">

                                            <input class="btn btn-danger btn-sm"
                                                type="reset"
                                                name="batal"
                                                value="Cancelar"
                                                onclick="location.href='<?php echo site_url(); ?>website/arrival/view'">
                                        </div>
                                    </div>

                                    <script>
                                        function confirmarGeneracion() {
                                            return confirm("¿Seguro que quieres generar los registros por pallet? Una vez generado, ya no podrás agregar más productos al arribo.");
                                        }
                                    </script>


                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <a href="<?php echo site_url(); ?>website/arrival/view">
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
        let index = <?php echo $index; ?>; // Empieza con el valor del último índice utilizado

        // Función para agregar una nueva fila de producto
        function addProductRow() {
            console.log('addProductRow function called'); // Verifica si la función se está llamando
            const supplierId = document.getElementById('id_supplier').value; // Asegúrate de tener el supplier_id disponible
            const tableBody = document.querySelector('#editProductsTable tbody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
             <td>
                <div class="form-group form-material">
                    <input class="form-control input-sm" type="text" name="products_insert[${index}][id_movement]" id="id_movement_${index}" style="padding: 5px; font-size: 12px; text-align: center; width: 80px;" readonly />
                </div>                                                         
            </td>  
            <td>
            <input type="hidden" name="products_insert[${index}][id_product]" id="id_product_${index}" value="<?= $product->id_product ?>" />

            <div class="form-group form-material">
            <!-- Select para seleccionar el producto -->
                <select name="products_insert[${index}][id_product]" id="id_product_${index}"
                    class="form-control"
                    style="padding: 5px; font-size: 12px; text-align: center; width: 200px;"
                    onchange="document.getElementById('product_name_${index}').value = this.options[this.selectedIndex].text">
                       <option value="">Seleccione un producto</option>
                            <?php foreach ($products as $product_na) : ?>
                                <option value="<?= $product_na->id_product ?>"><?= $product_na->product_name ?></option>
                            <?php endforeach; ?>
                </select>
            </div>

            <!-- Campo oculto para enviar el nombre del producto -->
                <input type="hidden"
                    id="product_name_${index}"
                    name="products_insert[${index}][product_name]"
                    value="<?= $product->product_name ?>" />      
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
                <input type="number" class="form-control input-sm" name="products_insert[${index}][stock]" id="stock_${index}" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" placeholder="Introduce el stock" required />
            </div>    
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][quantity_product_pallet]" id="quantity_product_pallet_${index}" oninput="calculateStock(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de producto por pallets" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][quantity_pallet]" id="quantity_pallet_${index}" oninput="calculateStock(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de pallets" readonly required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][damaged_pallets]" id="damaged_pallets_${index}" oninput="updateQuantityPallet(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de pallets dañados" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][damaged_stock]" id="damaged_stock_${index}" oninput="actualizarStockOk(${index}); updateDamagedStock(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe el stock dañado" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][good_pallets]" id="good_pallets_${index}" style="padding: 5px; font-size: 12px; text-align: center; width: 180px;" placeholder="Escribe la cantidad de pallets OK" readonly required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][good_stock]" id="good_stock_${index}" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" placeholder="Escribe el stock OK" readonly required />
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
            <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px;" onclick="addProductRow()">Agregar Producto</button>
            <button type="button" class="btn btn-danger" style="padding: 5px 10px; font-size: 12px;" onclick="removeProductRow(this)">Eliminar</button>
        </td>
    `;
            tableBody.appendChild(newRow);

            loadProductsForRows(index, supplierId);
            index++; // Incrementa el índice para la siguiente fila
        }

        // Función para eliminar una fila de producto
        function removeProductRow(button) {
            const row = button.closest('tr');
            row.remove();
        }
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
                $('select[name^="products_update"]').each(function(index, element) {
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
                    // var selectedProductId = $('input[name="products_update[' + index + '][id_product]"]').val();
                    //select.val(selectedProductId);
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
                fetch('<?= site_url('Website/get_vehicletype_by_platenumber/') ?>' + platenumber)
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
            $(document).on('input', '[id^=stock_], [id^=quantity_product_pallet_], [id^=damaged_pallets_], [id^=damaged_stock_]', function() {
                var index = $(this).attr('id').match(/\d+/); // Extrae el índice del ID del campo
                calculateStock(index);
            });

            $('#addRowButton').on('click', function() {
                var newRowIndex = $('input[id^=stock_]').length; // Calcula el índice de la nueva fila
                // Añade los eventos de actualización a la nueva fila
                calculateStock(newRowIndex);
            });
        });


        function updateQuantityPallet(index) {
            const damagedPallets = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
            const quantityPallet = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;

            if (damagedPallets > quantityPallet) {
                alert(`La cantidad de pallets dañados no puede ser mayor que el número de palllets (${quantityPallet}).`);
                document.getElementById(`damaged_pallets_${index}`).value = quantityPallet;
            }
        }
        // ******************************************************************************************************************************
        function updateDamagedStock(index) {
            // Obtener valores
            const damagedStock = parseFloat(document.getElementById(`damaged_stock_${index}`).value) || 0;
            const damagedPallets = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
            const quantityProductPallet = parseFloat(document.getElementById(`quantity_product_pallet_${index}`).value) || 0;

            // Calcular resultado permitido
            const resul = damagedPallets * quantityProductPallet;
            const resulFormatted = parseFloat(resul.toFixed(2));

            // Si el valor introducido es mayor, se muestra alerta y se corrige
            if (damagedStock > resulFormatted) {
                alert(`La cantidad de stock dañado no puede ser mayor a la multiplicación de cantidad de pallets * cantidad de producto por pallet (${resulFormatted}).`);
                document.getElementById(`damaged_stock_${index}`).value = resulFormatted;
            }
        }
        // ********************************************************************************************************************************* 
        function calculateStock(index) {
            const quantityPallet = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;
            const quantityProductPallet = parseFloat(document.getElementById(`quantity_product_pallet_${index}`).value) || 0;

            const stockInicial = quantityPallet * quantityProductPallet;
            const stockInicialFormatted = stockInicial.toFixed(2);
            document.getElementById(`stock_${index}`).value = stockInicialFormatted;

            //actualizarPalletsOk(index);
            actualizarStockOk(index);
        }



        function actualizarStockOk(index) {
            const stockInicial = parseFloat(document.getElementById(`stock_${index}`).value) || 0;
            const stockDañado = parseFloat(document.getElementById(`damaged_stock_${index}`).value) || 0;
            const stockOk = stockInicial - stockDañado;
            document.getElementById(`good_stock_${index}`).value = stockOk;
        }
    </script>


    <!-- ================================================== END EDITAR2 ================================================== -->





    <!-- ================================================== EDITAR ================================================== -->
<?php } elseif ($action == 'editar') { ?>
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
                            <h5 class="panel-title">Editar agregar nuevo producto <?php echo $breadcrumb; ?></h5>
                        </div>
                        <div class="panel-body container-fluid">
                            <form action="<?php echo site_url(); ?>website/arrival/editar/<?php echo $id_main; ?>" method="post" id="exampleStandardForm" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <h5>Datos generales de arribo</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <input type="hidden" name="id_main" value="<?php echo $id_main; ?>" />

                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">N.Identificación de evento</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $identification_number; ?>" id="identification_number" name="identification_number" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Pedido</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $sale_order; ?>" id="sale_order" name="sale_order" placeholder="Escribe el pedido" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Cliente</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $nama_supplier; ?>" id="nama_supplier" readonly />
                                                            <input type="hidden" name="id_supplier" value="<?php echo $id_supplier; ?>" id="id_supplier" />
                                                            <input type="hidden" name="nama_supplier" value="<?php echo $nama_supplier; ?>" id="nama_supplier" />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputText">Tipo de evento</label>
                                                            <input type="text" class="form-control input-sm" value="<?php echo $event_type; ?>" id="event_type" name="event_type" placeholder="Introdu el tipo de evento" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="container_number">N.Identificación del contenedor</label>
                                                            <select name="container_number" id="container_number" class="form-control">
                                                                <option value="">Seleccione el N.Identificador del contenedor</option>
                                                                <?php foreach ($containers as $container) : ?>
                                                                    <option value="<?= $container->container_number ?>" <?php echo ($container->container_number == $container_number) ? 'selected' : ''; ?>><?= $container->container_number ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="container_type">Tipo de Contenedor</label>
                                                            <select name="container_type" id="container_type" class="form-control">
                                                                <option value="<?= $container_type ?>" selected><?= $container_type ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-group">
                                                            <label for="id_origin">Origen</label>
                                                            <select name="id_origin" id="id_origin" class="form-control">
                                                                <option value="">Seleccione el Origen</option>
                                                                <?php foreach ($origins as $origin) : ?>
                                                                    <option value="<?= $origin->id_origin ?>" <?php echo ($origin->id_origin == $id_origin) ? 'selected' : ''; ?>><?= $origin->state ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="id_maneuver">Tipo de maniobra</label>
                                                            <select name="id_maneuver" id="id_maneuver" class="form-control">
                                                                <option value="">Seleccione el Origen</option>
                                                                <?php foreach ($maneuvers as $maneuver) : ?>
                                                                    <option value="<?= $maneuver->id_maneuver ?>" <?php echo ($maneuver->id_maneuver == $id_maneuver) ? 'selected' : ''; ?>><?= $maneuver->type_maneuver ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputDate">Fecha de evento</label>
                                                            <input type="date" class="form-control input-sm" value="<?php echo $event_date; ?>" id="event_date" name="event_date" required />
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="platenumber">Número de placa</label>
                                                            <select name="platenumber" id="platenumber" class="form-control">
                                                                <option value="">Seleccione el número de placa</option>
                                                                <?php foreach ($transports as $transport) : ?>
                                                                    <option value="<?= $transport->platenumber ?>" <?php echo ($transport->platenumber == $platenumber) ? 'selected' : ''; ?>><?= $transport->platenumber ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="vehicletype">Tipo de Unidad / Transporte</label>
                                                            <select name="vehicletype" id="vehicletype" class="form-control">
                                                                <option value="<?= $vehicletype ?>" selected><?= $vehicletype ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt2">
                                                        <div class="form-group">
                                                            <label for="id_driver">Conductor</label>
                                                            <select name="id_driver" id="id_driver" class="form-control">
                                                                <option value="">Seleccione un tipo de pallet</option>
                                                                <?php foreach ($drivers as $driver) : ?>
                                                                    <option value="<?= $driver->id_driver ?>" <?php echo ($driver->id_driver == $id_driver) ? 'selected' : ''; ?>><?= $driver->name_driver ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Hora de llegada</label>
                                                            <input type="time" value="<?php echo $arrival_time; ?>" class="form-control input-sm" id="arrival_time" name="arrival_time" required>
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Inicio de maniobra</label>
                                                            <input type="time" class="form-control input-sm" value="<?php echo $maneuver_start; ?>" id="maneuver_start" name="maneuver_start" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Fin de maniobra</label>
                                                            <input type="time" class="form-control input-sm" value="<?php echo $maneuver_end; ?>" id="maneuver_end" name="maneuver_end" required />
                                                        </div>
                                                        <div class="form-group form-material">
                                                            <label class="control-label" for="inputTime">Hora de salida</label>
                                                            <input type="time" class="form-control input-sm" value="<?php echo $departure_time; ?>" id="departure_time" name="departure_time" required />
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
                                                                <!-- <th>N_Sub</th>-->
                                                                <th>Nombre del producto</th>
                                                                <th>Tipo de pallet</th>
                                                                <th>Stock por pallet</th>
                                                                <th>Cantidad de producto por pallet</th>
                                                                <th>Cantidad de pallet</th>
                                                                <th>Pallet dañado</th>
                                                                <th>Stock dañado</th>
                                                                <th>Tipo de movimiento</th>
                                                                <th>Caducidad</th>
                                                                <th>Nota</th>
                                                                <th>Estatus</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $index = 1; ?>
                                                            <!-- var_dump($generated_products) ?>-->

                                                            <?php if (isset($productss) && is_array($productss)) : ?>
                                                                <?php foreach ($productss as $product) : ?>
                                                                    <tr>

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
                                                                            <div class="form-group">
                                                                                <select name="products_update[<?php echo $index; ?>][id_platform]" class="form-control" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" onchange="document.getElementById('type_platform_<?php echo $index; ?>').value = this.options[this.selectedIndex].text">>
                                                                                    <option value="">Seleccione un tipo de pallet</option>
                                                                                    <?php foreach ($platforms as $platform) : ?>
                                                                                        <option value="<?= $platform->id_platform ?>" <?php echo ($product->id_platform == $platform->id_platform) ? 'selected' : ''; ?>><?= $platform->type_platform ?>
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
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products_update[<?php echo $index; ?>][stock]" value="<?php echo $product->stock; ?>" placeholder="Introduce el stock" id="stock_<?php echo $index; ?>" required readonly />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][quantity_product_pallet]" value="<?php echo $product->quantity_product_pallet; ?>" placeholder="Escribe la cantidad de producto por pallets" id="quantity_product_pallet_<?php echo $index; ?>" oninput="calculateStock(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][quantity_pallet]" value="<?php echo $product->quantity_pallet; ?>" placeholder="Escribe la cantidad de pallets" id="quantity_pallet_<?php echo $index; ?>" oninput="calculateStock(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][damaged_pallets]" value="<?php echo $product->damaged_pallets; ?>" placeholder="Escribe la cantidad de pallets dañados" id="damaged_pallets_<?php echo $index; ?>" oninput="updateQuantityPallet(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="number" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" name="products_update[<?php echo $index; ?>][damaged_stock]" value="<?php echo $product->damaged_stock; ?>" placeholder="Escribe el stock dañado" id="damaged_stock_<?php echo $index; ?>" oninput="actualizarStockOk(<?php echo $index; ?>); updateDamagedStock(<?php echo $index; ?>)" required />
                                                                            </div>
                                                                        </td>


                                                                        <td>
                                                                            <div class="form-group form-material">
                                                                                <input type="text" step="any" class="form-control input-sm" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" name="products_update[<?php echo $index; ?>][type_movements]" value="<?php echo $product->type_movements; ?>" required readonly />
                                                                                <input type="hidden"
                                                                                    id="id_type_movement_<?php echo $index; ?>"
                                                                                    name="products_update[<?php echo $index; ?>][id_type_movement]"
                                                                                    value="<?= $product->id_type_movement ?>" />
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
                                                                            <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px;" onclick="addProductRow()">Agregar Producto</button>
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
                                    <div class="col-md-12 mt-5 ">
                                        <div class='button center mt-2'>
                                            <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Actualizar datos" id="validateButton2">
                                            <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/arrival/view'" />
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <a href="<?php echo site_url(); ?>website/arrival/view">
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
        let index = <?php echo $index; ?>; // Empieza con el valor del último índice utilizado

        // Función para agregar una nueva fila de producto
        function addProductRow() {
            console.log('addProductRow function called'); // Verifica si la función se está llamando
            const supplierId = document.getElementById('id_supplier').value; // Asegúrate de tener el supplier_id disponible
            const tableBody = document.querySelector('#editProductsTable tbody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
            
            <td>
            <input type="hidden" name="products_insert[${index}][id_product]" id="id_product_${index}" value="<?= $product->id_product ?>" />

            <div class="form-group form-material">
            <!-- Select para seleccionar el producto -->
                <select name="products_insert[${index}][id_product]" id="id_product_${index}"
                    class="form-control"
                    style="padding: 5px; font-size: 12px; text-align: center; width: 200px;"
                    onchange="document.getElementById('product_name_${index}').value = this.options[this.selectedIndex].text">
                       <option value="">Seleccione un producto</option>
                            <?php foreach ($products as $product_na) : ?>
                                <option value="<?= $product_na->id_product ?>"><?= $product_na->product_name ?></option>
                            <?php endforeach; ?>
                </select>
            </div>

            <!-- Campo oculto para enviar el nombre del producto -->
                <input type="hidden"
                    id="product_name_${index}"
                    name="products_insert[${index}][product_name]"
                    value="<?= $product->product_name ?>" />      
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
                <input type="number" class="form-control input-sm" name="products_insert[${index}][stock]" id="stock_${index}" style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" placeholder="Introduce el stock" required />
            </div>    
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][quantity_product_pallet]" id="quantity_product_pallet_${index}" oninput="calculateStock(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de producto por pallets" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][quantity_pallet]" id="quantity_pallet_${index}" oninput="calculateStock(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de pallets" required />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][damaged_pallets]" id="damaged_pallets_${index}" value="0" oninput="updateQuantityPallet(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe la cantidad de pallets dañados" required readonly />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <input type="number" class="form-control input-sm" name="products_insert[${index}][damaged_stock]" id="damaged_stock_${index}" value="0" oninput="actualizarStockOk(${index}); updateDamagedStock(${index})" style="padding: 5px; font-size: 12px; text-align: center; width: 200px;" placeholder="Escribe el stock dañado" required readonly />
            </div>
        </td>
        <td>
            <div class="form-group form-material">
                <?php if (!empty($movements)): ?>
                    <?php foreach ($movements as $movementss): ?>
                        <input type="text" step="any" class="form-control input-sm" 
                            style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" 
                            name="products_insert[${index}][type_movements]" id="type_movements_${index}"
                            value="<?= htmlspecialchars($movementss->type_movements) ?>" 
                            required readonly />
                             <!-- Campo oculto con el ID del movimiento -->
                        <input type="hidden" name="products_insert[${index}][id_type_movement]" 
                            value="<?= htmlspecialchars($movementss->id_type_movement) ?>" />
                    <?php endforeach; ?>
                 <?php else: ?>
                        <input type="text" step="any" class="form-control input-sm" 
                            style="padding: 5px; font-size: 12px; text-align: center; width: 150px;" 
                            name="products_insert[${index}][type_movements]" id="type_movements_${index}"
                            value="Entrada" required readonly />

                        <input type="hidden" name="products_insert[${index}][id_type_movement]" value="1" />
                <?php endif; ?>
            </div>
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
            <button type="button" class="btn btn-primary" style="padding: 5px 10px; font-size: 12px;" onclick="addProductRow()">Agregar Producto</button>
            <button type="button" class="btn btn-danger" style="padding: 5px 10px; font-size: 12px;" onclick="removeProductRow(this)">Eliminar</button>
        </td>
    `;
            tableBody.appendChild(newRow);

            loadProductsForRows(index, supplierId);
            index++; // Incrementa el índice para la siguiente fila
        }

        // Función para eliminar una fila de producto
        function removeProductRow(button) {
            const row = button.closest('tr');
            row.remove();
        }
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
                $('select[name^="products_update"]').each(function(index, element) {
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
                    // var selectedProductId = $('input[name="products_update[' + index + '][id_product]"]').val();
                    //select.val(selectedProductId);
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
                fetch('<?= site_url('Website/get_vehicletype_by_platenumber/') ?>' + platenumber)
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
            $(document).on('input', '[id^=stock_], [id^=quantity_product_pallet_], [id^=damaged_pallets_], [id^=damaged_stock_]', function() {
                var index = $(this).attr('id').match(/\d+/); // Extrae el índice del ID del campo
                calculateStock(index);
            });

            $('#addRowButton').on('click', function() {
                var newRowIndex = $('input[id^=stock_]').length; // Calcula el índice de la nueva fila
                // Añade los eventos de actualización a la nueva fila
                calculateStock(newRowIndex);
            });
        });

        /* function updateQuantityProductByPallet(index) {
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
         }*/

        function updateQuantityPallet(index) {
            const damagedPallets = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
            const quantityPallet = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;

            if (damagedPallets > quantityPallet) {
                alert(`La cantidad de pallets dañados no puede ser mayor que el número de palllets (${quantityPallet}).`);
                document.getElementById(`damaged_pallets_${index}`).value = quantityPallet;
            }
        }
        // ******************************************************************************************************************************
        function updateDamagedStock(index) {
            // Obtener valores
            const damagedStock = parseFloat(document.getElementById(`damaged_stock_${index}`).value) || 0;
            const damagedPallets = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
            const quantityProductPallet = parseFloat(document.getElementById(`quantity_product_pallet_${index}`).value) || 0;

            // Calcular resultado permitido
            const resul = damagedPallets * quantityProductPallet;
            const resulFormatted = parseFloat(resul.toFixed(2));

            // Si el valor introducido es mayor, se muestra alerta y se corrige
            if (damagedStock > resulFormatted) {
                alert(`La cantidad de stock dañado no puede ser mayor a la multiplicación de cantidad de pallets * cantidad de producto por pallet (${resulFormatted}).`);
                document.getElementById(`damaged_stock_${index}`).value = resulFormatted;
            }
        }
        // ********************************************************************************************************************************* 
        function calculateStock(index) {
            const quantityPallet = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;
            const quantityProductPallet = parseFloat(document.getElementById(`quantity_product_pallet_${index}`).value) || 0;

            const stockInicial = quantityPallet * quantityProductPallet;
            const stockInicialFormatted = stockInicial.toFixed(2);
            document.getElementById(`stock_${index}`).value = stockInicialFormatted;

            //actualizarPalletsOk(index);
            actualizarStockOk(index);
        }

        /* function actualizarPalletsOk(index) {
             const cantidadInicial = parseFloat(document.getElementById(`quantity_pallet_${index}`).value) || 0;
             const palletsDañados = parseFloat(document.getElementById(`damaged_pallets_${index}`).value) || 0;
             const palletsOk = cantidadInicial - palletsDañados;
             document.getElementById(`good_pallets_${index}`).value = palletsOk;
         }*/

        function actualizarStockOk(index) {
            const stockInicial = parseFloat(document.getElementById(`stock_${index}`).value) || 0;
            const stockDañado = parseFloat(document.getElementById(`damaged_stock_${index}`).value) || 0;
            const stockOk = stockInicial - stockDañado;
            document.getElementById(`good_stock_${index}`).value = stockOk;
        }
    </script>
    <!--<script>
         function updateAvailablePallet(index) {
            // Obtenemos los valores de los inputs 1 y 2
            var stockInsert = document.getElementById(`stock_${index}`).value;
            //var quantityPalletInsert = document.getElementById(`quantity_pallet_${index}`).value;

            // Actualiza el valor del input available_pallets concatenando los valores
            document.getElementById(`available_pallets_${index}`).value = `Stock: ${stockInsert}`;
        }
    </script>-->
    <!-- < <script>
        // Función que revisa periódicamente si ha cambiado el valor
        function monitorInputs(index) {
        setInterval(function() {
        // Recuperar los valores de los inputs
        var stockInsert = document.getElementById(`stock_${index}`).value;
        var quantityPalletInsert = document.getElementById(`quantity_pallet_${index}`).value;

        document.getElementById(`available_pallets_${index}`).value = `Stock: ${stockInsert}, Pallets: ${quantityPalletInsert}`;
        }, 1000); // Intervalo de 500ms para detectar cambios
        }


        // Iniciar la monitorización al cargar la página
        window.onload = monitorInputs;
        </script>-->

    <!-- ================================================== END EDIT ================================================== -->
<?php } ?>