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
                            <h5 class="panel-title">Ver datos del
                                <?php echo $breadcrumb; ?>
                            </h5>
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
                                                <a class="btn btn-success" href="<?php echo site_url(); ?>website/driver"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <th width=80>ID</th>
                                            <th width=120>Nombre</th>
                                            <th width=150>Apellido paterno</th>
                                            <th width=120>Apellido materno</th>
                                            <th width=270>Correo electrónico</th>
                                            <th width=120>Teléfono</th>
                                            <th width=120>Número de licencia</th>
                                            <th width=120>Fecha de emisión</th>
                                            <th width=120>Fecha de vencimiento </th>
                                            <th width=120>Restricciones</th>
                                            <th width=120>Comentarios</th>
                                            <th width="120">Creado por</th>
                                            <th width="120">Status</th>
                                            <th width="120">Modificado por</th>
                                            <th width="120">Fecha deshabilitado</th>
                                            <th width="120">Causa de deshabilitado</th>
                                            <th width="120">Fecha de creación</th>
                                            <th width="120">Última vez modificado</th>
                                            <?php if ($admin->admin_level_kode == 1) { ?>
                                                <th class="text-center">Acción</th>
                                            <?php } ?>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i    = $page + 1;
                                            $like_driver[$cari]            = $q;
                                            if ($jml_data > 0) {
                                                foreach ($this->ADM->grid_all_driver('', 'name_driver', 'ASC', $batas, $page, '', $like_driver) as $row) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $i; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->name_driver; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->paternal_last_name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->maternal_last_name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->email; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->phone_number; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->license_number; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->date_of_issue; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->expiration_date; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->restrictions; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->note; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->created_by; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->status_driver; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->modified_by; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->disablement_date; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->disablement_reason; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo dateIndo($row->driver_created); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo dateIndo($row->driver_updated); ?>
                                                        </td>

                                                        <?php if ($admin->admin_level_kode == 1) { ?>
                                                            <td class="text-center action">
                                                                <a class="btn-update" href="<?php echo site_url(); ?>website/driver/edit/<?php echo $row->id_driver; ?>">
                                                                    <i class="icon wb-pencil"></i>
                                                                </a>
                                                                <a class="text-danger" href="javascript:;" data-id="<?php echo $row->id_driver; ?>" data-toggle="modal" data-target="#modal-konfirmasi" title="<?php echo $row->name_driver; ?>">
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
                                                    <td colspan="7">¡No hay datos aún!</td> <!--No data yet!-->
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
                                                        echo pages($halaman, $jml_halaman, 'website/driver/view', $id = "");
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
            <a href="<?php echo site_url(); ?>website/driver/tambah">
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
                    <a href="javascript:;" class="btn btn-danger" id="hapus-driver">Sí</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Modal Konfirmasi ========== -->
    <!-- ================================================== END VIEW ================================================== -->

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
                            <form action="<?php echo site_url(); ?>website/driver/tambah" method="post" id="exampleStandardForm" autocomplete="off">
                                <!-- Campos del formulario Moral -->
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nombre del conductor</label>
                                            <input type="text" class="form-control input-sm" id="name_driver" name="name_driver" placeholder="Nombre del conductorr" required />
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Apellido paterno</label>
                                            <input type="text" class="form-control input-sm" id="paternal_last_name" name="paternal_last_name" placeholder="Escribe el apellido paterno" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Apellido materno</label>
                                            <input type="text" class="form-control input-sm" id="maternal_last_name" name="maternal_last_name" placeholder="Escribe el apellido materno" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Correo electrónico</label>
                                            <input type="text" class="form-control input-sm" id="email" name="email" placeholder="Escribe el correo electrónico" oninput="validateEmail()">
                                            <span id="email-error" style="color: red; display: none;">Correo electrónico inválido</span>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Teléfono</label>
                                            <input type="text" class="form-control input-sm" id="phone_number" name="phone_number" placeholder="Escribe el número de teléfono">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Número de licencia</label>
                                            <input type="text" class="form-control input-sm" id="license_number" name="license_number" placeholder="Escribe el número de licencia">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputDate">Fecha de emisión</label>
                                            <input type="date" class="form-control input-sm" id="date_of_issue" name="date_of_issue">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputDate">Fecha de vencimiento</label>
                                            <input type="date" class="form-control input-sm" id="expiration_date" name="expiration_date">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Restricciones</label>
                                            <input type="text" class="form-control input-sm" id="restrictions" name="restrictions" placeholder="Escribe las restricciones de la licencia" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Comentarios / nota</label>
                                            <input type="text" class="form-control input-sm" id="note" name="note" placeholder="Escribe aquÍ comentarios o notas">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Creado por</label>
                                            <input type="text" class="form-control input-sm" id="created_by" name="created_by" value="<?php echo $this->session->userdata('admin_nama') ?>" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="select">Estatus</label>
                                            <select name="status_driver" class="form-control input-sm" onchange="checkStatus(this)">
                                                <?php
                                                $statuss = array("Activo", "Deshabilitado");
                                                foreach ($statuss as $status_driver) {
                                                    echo "<option value='$status_driver'>$status_driver</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div id="disablement-fields" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputDate">Fecha deshabilitado</label>
                                            <input type="date" class="form-control input-sm" id="disablement_date" name="disablement_date">
                                        </div>
                                        <div id="disablement-fields1" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputText">Motivo de deshabilitado</label>
                                            <input type="text" class="form-control input-sm" id="disablement_reason" name="disablement_reason" placeholder="Escribe aquí el motivo de deshabilitado">
                                        </div>
                                        <div class='button center'>
                                            <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Añadir datos" id="validateButton2">
                                            <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/driver'" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="<?php echo site_url(); ?>website/driver">
            <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
                <i class="icon wb-eye" aria-hidden="true"></i>
            </button>
        </a>
    </div>
    <script>
        // Función para verificar y mostrar campos dependiendo del estado seleccionado
        function checkStatus(selectElement) {
            var form = selectElement.closest("form");
            var disablementFields = form.querySelectorAll("[id^='disablement-fields']");

            if (selectElement.value === "Deshabilitado") {
                for (var i = 0; i < disablementFields.length; i++) {
                    disablementFields[i].style.display = "block";
                }
            } else if (selectElement.value === "Suspendido") {
                for (var l = 0; l < disablementFields.length; l++) {
                    disablementFields[l].style.display = "none";
                }
            } else {
                for (var m = 0; m < disablementFields.length; m++) {
                    disablementFields[m].style.display = "none";
                }
            }
        }
    </script>

    <script>
        function validateEmail() {
            var emailInput = document.getElementById('email');
            var emailError = document.getElementById('email-error');
            var email = emailInput.value.toLowerCase().trim();
            emailInput.value = email.replace(/\s/g, '');

            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if (!emailPattern.test(email)) {
                emailError.style.display = 'block';
            } else {
                emailError.style.display = 'none';
            }
        }
    </script>


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
                document.getElementById('driver_updated').value = formattedDateTime;
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
                            <form action="<?php echo site_url(); ?>website/driver/edit/<?php echo $id_driver; ?>" method="post" id="exampleStandardForm" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="id_driver" value="<?php echo $id_driver; ?>" />
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nombre del conductor</label>
                                            <input type="text" value="<?php echo $name_driver; ?>" class="form-control input-sm" id="name_driver" name="name_driver" placeholder="Escribe el nombre del conductor" required />
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Apellido paterno</label>
                                            <input type="text" value="<?php echo $paternal_last_name; ?>" class="form-control input-sm" id="paternal_last_name" name="paternal_last_name" placeholder="Escribe el apellido paterno">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Apellido materno</label>
                                            <input type="text" value="<?php echo $maternal_last_name; ?>" class="form-control input-sm" id="maternal_last_name" name="maternal_last_name" placeholder="Escribe el apellido materno">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Correo electrónico</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $email; ?>" id="email" name="email" placeholder="Escribe el nuevo correo electrónico" oninput="validateEmail()">
                                            <span id="email-error" style="color: red; display: none;">Correo electrónico inválido</span>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Teléfono</label>
                                            <input type="text" value="<?php echo $phone_number; ?>" class="form-control input-sm" id="phone_number" name="phone_number" placeholder="Escribe el nuevo número de teléfono">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Número de licencia</label>
                                            <input type="text" value="<?php echo $license_number; ?>" class="form-control input-sm" id="license_number" name="license_number" placeholder="Escribe el número de licencia">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputDate">Fecha de expedición</label>
                                            <input type="date" value="<?php echo $date_of_issue; ?>" class="form-control input-sm" id="date_of_issue" name="date_of_issue">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputDate">Fecha de vencimiento</label>
                                            <input type="date" value="<?php echo $expiration_date; ?>" class="form-control input-sm" id="expiration_date" name="expiration_date">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Restricciones</label>
                                            <input type="text" value="<?php echo $restrictions; ?>" class="form-control input-sm" id="restrictions" name="restrictions" placeholder="Escribe las restricciones que tenga la licencia">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Comentarios / notas</label>
                                            <input type="text" value="<?php echo $note; ?>" class="form-control input-sm" id="note" name="note" placeholder="Escribe tu comentario o nota">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Creado por</label>
                                            <input type="text" value="<?php echo $created_by; ?>" class="form-control input-sm" id="created_by" name="created_by" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Modificado por</label>
                                            <input type="text" value="<?php echo $this->session->userdata('admin_nama') ?>" class="form-control input-sm" id="modified_by" name="modified_by" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Estatus</label>
                                            <input type="text" value="<?php echo $status_driver; ?>" class="form-control input-sm" id="status_driver" name="status_driver" onclick="convertToSelect(this)" readonly>
                                        </div>
                                        <div id="disablement-fields" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputDate">Fecha deshabilitado</label>
                                            <input type="date" class="form-control input-sm" value="<?php echo $disablement_date ?>" id="disablement_date" name="disablement_date">
                                        </div>
                                        <div id="disablement-fields1" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputText">Motivo de deshabilitado</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $disablement_reason; ?>" id="disablement_reason" name="disablement_reason" placeholder="Escribe aquí el motivo de deshabilitado">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Fecha de creación del conductor</label>
                                            <input type="text" value="<?php echo $driver_created; ?>" class="form-control input-sm" id="driver_created" name="driver_created" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText"> Fecha de última modificación</label>
                                            <input type="text" value="<?php echo $driver_updated; ?>" class="form-control input-sm" id="driver_updated" name="driver_updated" readonly>
                                        </div>
                                        <div class='button center'>
                                            <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Actualizar datos" id="validateButton2">
                                            <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/driver'" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <a href="<?php echo site_url(); ?>website/driver">
            <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
                <i class="icon wb-eye" aria-hidden="true"></i>
            </button>
        </a>
    </div>


    <script>
        setupRFCInput();

        function validateEmail() {
            var emailInput = document.getElementById('email');
            var emailError = document.getElementById('email-error');
            var email = emailInput.value.toLowerCase().trim();
            emailInput.value = email.replace(/\s/g, '');

            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if (!emailPattern.test(email)) {
                emailError.style.display = 'block';
            } else {
                emailError.style.display = 'none';
            }
        }

        function convertToSelect(input) {
            const select = document.createElement('select');
            select.name = input.name;
            select.className = input.className;
            select.onchange = function() {
                checkStatus(this);
            };

            const status_driverOptions = ["Activo", "Deshabilitado"];
            status_driverOptions.forEach(status_driver => {
                const option = document.createElement('option');
                option.value = status_driver;
                option.text = status_driver;
                if (status_driver === input.value) {
                    option.selected = true;
                }
                select.appendChild(option);
            });

            input.parentNode.replaceChild(select, input);
            checkStatus(select);
        }

        function checkStatus(select) {
            const value = select.value;
            document.getElementById('disablement-fields').style.display = (value === 'Deshabilitado') ? 'block' : 'none';
            document.getElementById('disablement-fields1').style.display = (value === 'Deshabilitado') ? 'block' : 'none';
        }
    </script>
    <!-- ================================================== END EDIT ================================================== -->

    <!-- ================================================== END EDIT ================================================== -->
<?php } ?>