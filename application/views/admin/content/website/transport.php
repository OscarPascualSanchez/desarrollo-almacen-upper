<!-- ================================================== VIEW ================================================== -->

<?php if ($action == 'view' || empty($action)) { ?>
    <div class="page">
        <div class="page-title orange">
            <h3>
                <?php echo $breadcrumb; ?>
            </h3>
            <p>
                <?php echo $breadcrumb; ?>
            </p>
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel rounded-0">
                        <di class="panel-heading">
                            <h5 class="panel-title"> Ver datos del
                                <?php echo $breadcrumb; ?>
                            </h5>
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
                            <!-- ================================== End Flashdata ======================================= -->
                            <div class="panel-body container-fluid table-detail">
                                <div class="table-full table-view">
                                    <div class="navigation-btn">
                                        <form action="" method="post" id="form">
                                            <div class='row margin-bottom'>
                                                <div class='btn-search'>Buscar por: </div>
                                                <div class='col-md-3 col-sm-12'>
                                                    <div class='buttton-search'>
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
                                            <div class="btn-navigation">
                                                <div class='pull-right'>
                                                    <a class="btn btn-success" href="<?php echo site_url(); ?>website/transport"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <th width="80">Id</th>
                                                <th width="120">Número de placa</th>
                                                <th width="170">Tipo de vehículo</th>
                                                <th width="120">Capacidad de carga</th>
                                                <th width="120">Modelo del vehículo</th>
                                                <th width="120">Estado del vehículo</th>
                                                <th width="120">Creado por</th>
                                                <th width="200">Fecha y hora de creación</th>
                                                <th width="200">Modificado por</th>
                                                <th width="120">Fecha y hora de ult modif</th>
                                                <th width="120">Notas</th>
                                                <?php if ($admin->admin_level_kode == 1) { ?>
                                                    <th class="text-center">Acción</th>
                                                <?php } ?>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i =   $page + 1;
                                                $like_transport[$cari]     = $q;
                                                if ($jml_data > 0) {
                                                    foreach ($this->ADM->grid_all_transport('', 'platenumber', 'ASC', $batas, $page, '', $like_transport) as $row) {
                                                ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $i; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row->platenumber; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row->vehicletype; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row->loadcapacity; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row->vehiclemodel; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row->vehiclestatus; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row->created_by; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row->created_date; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row->updated_by; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row->updated_date; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row->notes; ?>
                                                            </td>
                                                            <?php if ($admin->admin_level_kode == 1) { ?>
                                                                <td class="text-center action">
                                                                    <a class="btn-update" href="<?php echo site_url(); ?>website/transport/edit/<?php echo $row->id_transport; ?>">
                                                                        <i class="icon wb-pencil"></i>
                                                                    </a>
                                                                    <a class="text-danger" href="javascript:;" data-id="<?php echo $row->id_transport; ?>" data-toggle="modal" data-target="#modal-konfirmasi" title="<?php echo $row->platenumber; ?>">
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
                                                        <td colspan="7">!No hay datos aún¡</td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="wrapper">
                                        <div class="paging">
                                            <div class="pagination">
                                                <div id="pagination-right">
                                                    <ul class="pagination">
                                                        <?php if ($jml_halaman > 1) {
                                                            echo pages($halaman, $jml_halaman, 'website/transport/view', $id = "");
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
            <a href="<?php echo site_url(); ?>website/transport/tambah">
                <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
                    <i class="icon wb-plus" aria-hidden="true"></i>
                </button>
            </a>
        <?php } ?>
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
                    <a href="javascript:;" class="btn btn-danger" id="hapus-transport">Sí</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Modal Konfirmasi ========== -->
    <!-- ================================================== END VIEW ================================================== -->


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
                            <form action="<?php echo site_url(); ?>website/transport/tambah" method="post" id="exampleStandardForm">
                                <h4>Información del transporte</h4>
                                <div class="form-group form-material">
                                    <label class="control-label" for="inputText">Número de placa: </label>
                                    <input type="text" class="form-control input-sm" id="platenumber" name="platenumber" placeholder="Número de placa" required>
                                </div>
                                <div class="form-group form-material">
                                    <label class="control-label" for="inputText"> Tipo de Vehículo: </label>
                                    <input type="text" class="form-control input-sm" id="vehicletype" name="vehicletype" required>
                                </div>
                                <div class="form-group form-material">
                                    <label class="control-label" for="inputNumber"> Capacidad de Carga (toneladas): </label>
                                    <input type="number" class="form-control input-sm" id="loadcapacity" name="loadcapacity" required>
                                </div>
                                <div class="form-group form-material">
                                    <label class="control-label" for="inputText"> Modelo y Marca: </label>
                                    <input type="text" class="form-control input-sm" id="vehiclemodel" name="vehiclemodel" required>
                                </div>


                                <!-- <h4>Información del viaje</h4>
                                 <div class="form-group form-material">
                                    <label class="control-label" for="inputText">Número de viaje: </label>
                                    <input type="text" class="form-control input-sm" id="tripnumber" name="tripnumber" required>
                                </div>
                                <div class="form-group form-material">
                                    <label class="control-label" for="inputDate"> Fecha y hora de salida: </label>
                                    <input type="datetime-local" class="form-control input-sm" id="departuredate" name="departuredate" required>
                                </div>
                                <div class="form-group form-material">
                                    <label class="control-label" for="inputDate">Fecha y hora estimada de llegada</label>
                                    <input type="datetime-local" class="form-control input-sm" id="arrivaldate" name="arrivaldate" required>
                                </div>
                                <div class="form-group form-material">
                                    <label class="control-label" for="inputText">Punto de origen: </label>
                                    <input type="text" class="form-control input-sm" id="origin" name="origin" required>
                                </div>
                                <div class="form-group form-material">
                                    <label class="control-label" for="inputText">Destino</label>
                                    <input type="text" class="form-control input-sm" id="destination" name="destination" required>
                                </div>
                                <div class="form-group form-material">
                                    <label class="control-label" for="textTarea">Ruta planificada: </label>
                                    <textarea class="form-control textarea-sm" id="route" name="route" required></textarea>
                                </div>
                                <div class="form-group form-material">
                                    <label class="control-label" for="select">Estado del viaje: </label>
                                    <select class="form-control" id="tripstatus" name="tripstatus" required>
                                        <option value="en_curso">En curso</option>
                                        <option value="completado">Completado</option>
                                        <option value="cancelado">Cancelado</option>
                                    </select>
                                </div>-->

                                <div class="form-group form-material">
                                    <label class="control-label" for="select">Estado del vehículo</label>
                                    <select name="vehiclestatus" class="form-control input-sm" onchange="checkStatus(this)">
                                        <?php
                                        $vehiclestatuss = array("Activo", "Mantenimiento", "Fuera de servicio");
                                        foreach ($vehiclestatuss as $vehiclestatus) {
                                            echo "<option value='$vehiclestatus'>$vehiclestatus</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <h4>Información adicional</h4>
                                <div class="form-group form-material">
                                    <label class="control-label" for="inputText">Creado por</label>
                                    <input type="text" class="form-control input-sm" id="created_by" name="created_by" value="<?php echo $this->session->userdata('admin_nama') ?>" readonly>
                                </div>
                                <div class="form-group form-material">
                                    <label class="control-label" for="textTarea">Notas o comentarios:</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="4" placeholder="Escribe tus notas o comentarios aquí"></textarea>
                                </div>
                                <div class='button center'>
                                    <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Añadir datos" id="validateButton2">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo site_url(); ?>website/transport">
            <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
                <i class="icon wb-eye" aria-hidden="true"></i>
            </button>
        </a>
    </div>






    <!-- =================================================== end view =============================================== -->
    <!-- ==================================================== EDIT ================================================== -->

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
                            <form action="<?php echo site_url(); ?>website/transport/edit/<?php echo $id_transport; ?>" method="post" id="exampleStandardForm" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="id_transport" value="<?php echo $id_transport; ?>" />
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Número de placa</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $platenumber ?>" id="platenumber" name="platenumber" placeholder="Escribe el nuevo número de placa" required />
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Tipo de vehículo</label>
                                            <input type="text" value="<?php echo $vehicletype; ?>" class="form-control input-sm" id="vehicletype" name="vehicletype" placeholder="Escribe el nuevo tipo de vehículo" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputNumber">Capacidad de carga (toneladas)</label>
                                            <input type="Number" value="<?php echo $loadcapacity; ?>" class="form-control input-sm" id="loadcapacity" name="loadcapacity" placeholder="Escribe la capacidad en toneladas">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Modelo y marca</label>
                                            <input type="text" value="<?php echo $vehiclemodel; ?>" class="form-control input-sm" id="vehiclemodel" name="vehiclemodel" placeholder="Escribe el modelo del vehículo">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Estado del vehículo</label>
                                            <input type="text" value="<?php echo $vehiclestatus; ?>" class="form-control input-sm" id="vehiclestatus" name="vehiclestatus" onclick="convertToSelect(this)">
                                        </div>
                                        <!--<h4>Información del viaje</h4>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Número de viaje</label>
                                            <input type="text" value="<?php echo $tripnumber; ?>" class="form-control input-sm" id="tripnumber" name="tripnumber" placeholder="Escribe el número de viaje">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputDate">Fecha y hora de salida</label>
                                            <input type="datetime-local" value="<?php echo $departureDate; ?>" class="form-control input-sm" id="departureDDate" name="departureDate" placeholder="Introduce la hora y fecha de salida">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Fecha y hora estimada de llegada</label>
                                            <input type="text" value="<?php echo $arrivaldate; ?>" class="form-control input-sm" id="arrivaldate" name="arrivaldate" placeholder="Introduce la hora y fecha estimada">
                                        </div>
                                    </div>-->
                                        <div class="col-md-6">
                                            <!-- <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Punto de origen</label>
                                            <input type="text" value="<?php echo $origin; ?>" class="form-control input-sm" id="origin" name="origin" placeholder="Escribe el punto de origen">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Destino</label>
                                            <input type="text" value="<?php echo $destination; ?>" class="form-control input-sm" id="destination" name="destination" placeholder="Escribe el punto de destino">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Ruta planificada</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $route; ?>" id="route" name="route" placeholder="Escribe la ruta">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="select">Estado del viaje: </label>
                                            <select class="form-control" value="<?php echo $tripstatus; ?>" id="tripstatus" name="tripstatus" required>
                                                <option value="en_curso">En curso</option>
                                                <option value="completado">Completado</option>
                                                <option value="cancelado">Cancelado</option>
                                            </select>
                                        </div>-->
                                            <div class="form-group form-material">
                                                <label class="control-label" for="inputText">Notas o comentarios</label>
                                                <input type="text" value="<?php echo $notes; ?>" class="form-control input-sm" id="notes" name="notes">
                                            </div>
                                            <h4>Información adicional</h4>
                                            <div class="form-group form-material">
                                                <label class="control-label" for="inputText">Creado por</label>
                                                <input type="text" value="<?php echo $created_by; ?>" class="form-control input-sm" id="created_by" name="created_by" readonly>
                                            </div>
                                            <div class="form-group form-material">
                                                <label class="control-label" for="inputText">Fecha de creación</label>
                                                <input type="text" value="<?php echo $created_date; ?>" class="form-control input-sm" id="created_date" name="created_date" readonly>
                                            </div>
                                            <div class="form-group form-material">
                                                <label class="control-label" for="inputText">Modificado por</label>
                                                <input type="text" value="<?php echo $this->session->userdata('admin_nama') ?>" class="form-control input-sm" id="updated_by" name="updated_by" readonly>
                                            </div>

                                            <div class="form-group form-material">
                                                <label class="control-label" for="inputText"> Fecha de última modificación</label>
                                                <input type="text" value="<?php echo $updated_date; ?>" class="form-control input-sm" id="updated_date" name="updated_date" readonly>
                                            </div>
                                            <div class='button center'>
                                                <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Actualizar datos" id="validateButton2">
                                                <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/transport'" />
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
    </div>
    <a href="<?php echo site_url(); ?>website/transport">
        <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
            <i class="icon wb-eye" aria-hidden="true"></i>
        </button>
    </a>
    </div>

    <script>
        function convertToSelect(input) {
            const select = document.createElement('select');
            select.name = input.name;
            select.className = input.className;

            const vehiclestatusOptions = ["Activo", "En mantenimiento", "Fuera de servicio"];
            vehiclestatusOptions.forEach(status => {
                const option = document.createElement('option');
                option.value = status;
                option.text = status;
                if (status === input.value) {
                    option.selected = true;
                }
                select.appendChild(option);
            });

            input.parentNode.replaceChild(select, input);
        }
    </script>

    <!-- ================================================== END EDIT ================================================== -->

<?php } ?>