<?php if ($action == 'view' || empty($action)) { ?>
    <div class="page">
        <div class="page-title orange">
            <h3><?php echo $breadcrumb; ?></h3>
            <p>Información sobre los <?php echo $breadcrumb; ?></p>
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel rounded-0">
                        <div class="panel-heading">
                            <h5 class="panel-title">Ver datos de los <?php echo $breadcrumb; ?></h5>
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
                                    <form action="<?php echo site_url('website/details/' . urlencode($identification_number)); ?>" method="post" id="form">
                                        <div class='row margin-bottom'>
                                            <div class="col-md-2 col-sm-2">
                                                <div class='btn-search'>Buscar por Producto: </div>
                                            </div>
                                            <div class='col-md-4 col-sm-12 select-search'>
                                                <div class="input-group">
                                                    <input type="text" name="q" class="form-control" value="<?php echo $search_query; ?>" />
                                                    <span class="input-group-btn">
                                                        <button type="submit" name="kirim" class="btn btn-success">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='btn-navigation'>
                                            <div class='pull-right'>
                                                <a class="btn btn-success" href="<?php echo site_url('website/details/' . urlencode($identification_number)); ?>"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Número de Identificación</th>
                                                <th>Orden de Venta</th>
                                                <th>Proveedor</th>
                                                <th>Nombre del Producto</th>
                                                <th>Tipo de Evento</th>
                                                <th>Número de Placa</th>
                                                <th>Tipo de Vehículo</th>
                                                <th>Tipo de Contenedor</th>
                                                <th>Número de Contenedor</th>
                                                <th>Nombre del Conductor</th>
                                                <th>Estado</th>
                                                <th>Tipo de Maniobra</th>
                                                <th>Fecha del Evento</th>
                                                <th>Stock</th>
                                                <th>Cantidad por Pallet</th>
                                                <th>Cantidad de Pallets</th>
                                                <th>Pallets Dañados</th>
                                                <th>Stock Dañado</th>
                                                <th>Pallets en Buen Estado</th>
                                                <th>Stock en Buen Estado</th>
                                                <th>Pallets Disponibles</th>
                                                <th>Fecha de Caducidad</th>
                                                <th>Hora de Llegada</th>
                                                <th>Inicio de Maniobra</th>
                                                <th>Fin de Maniobra</th>
                                                <th>Hora de Salida</th>
                                                <th>Nota</th>
                                                <th>Estado</th>
                                                <th>Creado por</th>
                                                <th>Fecha de Creación</th>
                                                <th>Actualizado por</th>
                                                <th>Fecha de Actualización</th>
                                                <?php if ($admin->admin_level_kode == 1) { ?>
                                                    <th class="text-center">Acción</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (isset($details) && count($details) > 0) {
                                                foreach ($details as $row) { ?>
                                                    <tr>
                                                        <td><?php echo $row->identification_number; ?></td>
                                                        <td><?php echo $row->sale_order; ?></td>
                                                        <td><?php echo $row->nama_supplier; ?></td>
                                                        <td><?php echo $row->product_name; ?></td>
                                                        <td><?php echo $row->event_type; ?></td>
                                                        <td><?php echo $row->platenumber; ?></td>
                                                        <td><?php echo $row->vehicletype; ?></td>
                                                        <td><?php echo $row->container_type; ?></td>
                                                        <td><?php echo $row->container_number; ?></td>
                                                        <td><?php echo $row->name_driver; ?></td>
                                                        <td><?php echo $row->state; ?></td>
                                                        <td><?php echo $row->type_maneuver; ?></td>
                                                        <td><?php echo $row->event_date; ?></td>
                                                        <td><?php echo $row->stock; ?></td>
                                                        <td><?php echo $row->quantity_product_pallet; ?></td>
                                                        <td><?php echo $row->quantity_pallet; ?></td>
                                                        <td><?php echo $row->damaged_pallets; ?></td>
                                                        <td><?php echo $row->damaged_stock; ?></td>
                                                        <td><?php echo $row->good_pallets; ?></td>
                                                        <td><?php echo $row->good_stock; ?></td>
                                                        <td><?php echo $row->available_pallets; ?></td>
                                                        <td><?php echo $row->expiration_date; ?></td>
                                                        <td><?php echo $row->arrival_time; ?></td>
                                                        <td><?php echo $row->maneuver_start; ?></td>
                                                        <td><?php echo $row->maneuver_end; ?></td>
                                                        <td><?php echo $row->departure_time; ?></td>
                                                        <td><?php echo $row->note; ?></td>
                                                        <td><?php echo $row->status; ?></td>
                                                        <td><?php echo $row->created_by; ?></td>
                                                        <td><?php echo dateIndo($row->created_date); ?></td>
                                                        <td><?php echo $row->updated_by; ?></td>
                                                        <td><?php echo dateIndo($row->updated_date); ?></td>
                                                        <?php if ($admin->admin_level_kode == 1) { ?>
                                                            <td class="text-center action">
                                                                <a class="btn-update" href="<?php echo site_url(); ?>website/movements/edit/<?php echo $row->id_arrivalnew; ?>">
                                                                    <i class="icon wb-pencil"></i>
                                                                </a>

                                                            </td>
                                                        <?php } ?>
                                                    </tr>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <tr>
                                                    <td colspan="12" class="style-center">¡No hay datos aún!</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="wrapper">
                                        <div class="paging">
                                            <div id='pagination'>
                                                <div class='pagination-right'>
                                                    <ul class="pagination">
                                                        <?php if ($jml_halaman > 1) : ?>
                                                            <?php if ($page > 1) : ?>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="<?php echo site_url('website/details/' . urlencode($identification_number) . '/' . ($page - 1) . '?q=' . urlencode($search_query)); ?>">Anterior</a>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php for ($i = 1; $i <= $jml_halaman; $i++) : ?>
                                                                <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                                                                    <a class="page-link" href="<?php echo site_url('website/details/' . urlencode($identification_number) . '/' . $i . '?q=' . urlencode($search_query)); ?>"><?php echo $i; ?></a>
                                                                </li>
                                                            <?php endfor; ?>
                                                            <?php if ($page < $jml_halaman) : ?>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="<?php echo site_url('website/details/' . urlencode($identification_number) . '/' . ($page + 1) . '?q=' . urlencode($search_query)); ?>">Siguiente</a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="total">Total: <?php echo $total_records; ?></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($admin->admin_level_kode == 1) { ?>
        <a href="<?php echo site_url(); ?>website/all_arrivals">
            <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
                <i class="icon wb-eye" aria-hidden="true"></i>
            </button>
        </a>
    <?php } ?>
    </div>

   
<?php } ?>