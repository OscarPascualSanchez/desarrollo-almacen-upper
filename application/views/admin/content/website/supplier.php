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
                                            <div class='btn-search'>Buscar por :</div>
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
                                                <a class="btn btn-success" href="<?php echo site_url(); ?>website/supplier"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <th width=80>ID</th>
                                            <th width=120>Nombre</th>
                                            <th width=150>Nombre comercial</th>
                                            <th width=120>Tipo persona</th>
                                            <th width=270>RFC</th>
                                            <th width=120>CURP</th>
                                            <th width=120>Calle</th>
                                            <th width=120>Num Exterior</th>
                                            <th width=120>Num Interior</th>
                                            <th width=120>Colonia</th>
                                            <th width=120>Localidad</th>
                                            <th width=120>Ciudad</th>
                                            <th width=120>Estado</th>
                                            <th width=120>CP</th>
                                            <th width=120>Municipio</th>
                                            <th widt=120>Correo</th>
                                            <th width=120>Creado por</th>
                                            <th width=120>Status</th>
                                            <th width=120>Modificado por</th>
                                            <th width=120>Fecha deshabilitado</th>
                                            <th width=120>Motivo de deshabilitado</th>
                                            <th width=120>Fecha suspendido</th>
                                            <th width=120>Motivo de suspendido</th>
                                            <th width=120>Teléfono</th>
                                            <th width=120>Fecha (proveedor creado)</th>
                                            <th width="120">Fecha modificado</th>
                                            <?php if ($admin->admin_level_kode == 1) { ?>
                                                <th class="text-center">Acción</th>
                                            <?php } ?>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i    = $page + 1;
                                            $like_supplier[$cari]            = $q;
                                            if ($jml_data > 0) {
                                                foreach ($this->ADM->grid_all_supplier('', 'nama_supplier', 'ASC', $batas, $page, '', $like_supplier) as $row) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $i; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->nama_supplier; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->commercial_name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->person_type; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->rfc; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->curp; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->street ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->num_ext ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->num_in ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->neighborhood ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->locality ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->city ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->federal_entity ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->cp ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->municipality ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->email ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->created_by ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->status ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->modified_by ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->disablement_date ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->disablement_reason ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->suspension_date ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->suspension_reason ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->notelp_supplier ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->supplier_created ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->supplier_updated ?>
                                                        </td>

                                                        <?php if ($admin->admin_level_kode == 1) { ?>
                                                            <td class="text-center action">
                                                                <?php
                                                                // Supongamos que $row->type_person contiene el tipo de persona (Moral o Fisica)
                                                                $person_type = $row->person_type;

                                                                // Define las URLs para los formularios según el tipo de persona
                                                                $url_fisica = site_url() . 'website/supplier/edit_fisica/' . $row->id_supplier;
                                                                $url_moral = site_url() . 'website/supplier/edit/' . $row->id_supplier;

                                                                // Determina la URL según el tipo de persona
                                                                $url = ($person_type == 'Fisica') ? $url_fisica : $url_moral;

                                                                // Imprime los valores para verificar
                                                              /*  echo "Person type: $person_type<br>";
                                                                echo "URL: $url<br>";*/
                                                                ?>
                                                                <a class="btn-update" href="<?php echo $url; ?>">
                                                                    <i class="icon wb-pencil"></i>
                                                                </a>
                                                                <a class="text-danger" href="javascript:;" data-id="<?php echo $row->id_supplier; ?>" data-toggle="modal" data-target="#modal-konfirmasi" title="<?php echo $row->nama_supplier; ?>">
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
                                                        echo pages($halaman, $jml_halaman, 'website/supplier/view', $id = "");
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
            <a href="<?php echo site_url(); ?>website/supplier/tambah">
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
                    
                    <!--Are you sure want to delete this data?-->
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-danger" id="hapus-supplier">Sí</a>
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
                            <form>
                                <div class="form-group form-material mt-2">
                                    <label class="control-label" for="person_type">Tipo de persona</label>
                                    <select id="person_type" name="person_type" class="form-control input-sm" onchange="toggleForm()">
                                        <option value="Moral">Moral</option>
                                        <option value="Fisica">Fisica</option>
                                    </select>
                                </div>
                            </form>
                            <form action="<?php echo site_url(); ?>website/supplier/tambah" method="post" id="formMoral" autocomplete="off" style="display: none;">
                                <!-- Campos del formulario Moral -->
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <div class="form-group form-material">
                                            <input type="hidden" name="person_type" value="Moral">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nombre de la empresa</label>
                                            <input type="text" class="form-control input-sm" id="nama_supplier" name="nama_supplier" placeholder="Nombre de la empresa" required />
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nombre comercial</label>
                                            <input type="text" class="form-control input-sm" id="commercial_name" name="commercial_name" placeholder="Nombre comercial" required>
                                        </div>
                                        <p>Datos fiscales</p>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">RFC</label>
                                            <input type="text" class="form-control input-sm" id="rfcM" name="rfc" placeholder="Introduce el RFC" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Calle</label>
                                            <input type="text" class="form-control input-sm" id="street" name="street" placeholder="Introduce el nombre de la calle" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Número exterior</label>
                                            <input type="text" class="form-control input-sm" id="num_ext" name="num_ext" placeholder="Introduce el número exterior">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Número interior</label>
                                            <input type="text" class="form-control input-sm" id="num_in" name="num_in" placeholder="Introduce el número interior">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Colonia</label>
                                            <input type="text" class="form-control input-sm" id="neighborhood" name="neighborhood" placeholder="Introduce el nombre de la colonia">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Localidad</label>
                                            <input type="text" class="form-control input-sm" id="locality" name="locality" placeholder="Introduce el nombre de la localidad">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Estado</label>
                                            <input type="text" class="form-control input-sm" id="federal_entity" name="federal_entity" placeholder="Escribe el nombre del Estado" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Ciudad</label>
                                            <input type="text" class="form-control input-sm" id="city" name="city" placeholder="Escribe el nombre de la ciudad">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Municipio</label>
                                            <input type="text" class="form-control input-sm" id="minicipality" name="municipality" placeholder="Escribe el nombre del municipio" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">CP</label>
                                            <input type="text" class="form-control input-sm" id="cp" name="cp" placeholder="Escribe aquí el código postal" required>
                                        </div>
                                        <p>Datos adicionales</p>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Correo electrónico</label>
                                            <input type="text" class="form-control input-sm" id="emailM" name="email" placeholder="Escribe el correo electrónico" oninput="validateEmail()">
                                            <span id="email-error" style="color: red; display: none;">Correo electrónico inválido</span>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Número de teléfono</label>
                                            <input type="text" class="form-control input-sm" id="notelp_supplier" name="notelp_supplier" placeholder="Número de teléfono" required />
                                        </div>
                                        <p>Auditoría</p>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Creado por</label>
                                            <input type="text" class="form-control input-sm" id="created_by" name="created_by" value="<?php echo $this->session->userdata('admin_nama') ?>" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="select">Estatus</label>
                                            <select name="status" class="form-control input-sm" onchange="checkStatus(this)">
                                                <?php
                                                $statuss = array("Activo", "Suspendido", "Deshabilitado");
                                                foreach ($statuss as $status) {
                                                    echo "<option value='$status'>$status</option>";
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
                                        <div id="suspension-fields" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputDate">Fecha suspendido</label>
                                            <input type="date" class="form-control input-sm" id="suspension_date" name="suspension_date">
                                        </div>
                                        <div id="suspension-fields1" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputText">Motivo de suspensión</label>
                                            <input type="text" class="form-control input-sm" id="suspension_reason" name="suspension_reason" placeholder="Escribe aquí el motivo de suspensión">
                                        </div>
                                        <div class='button center'>
                                            <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Añadir datos" id="validateButton2">
                                            <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/supplier'" />
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form action="<?php echo site_url(); ?>website/supplier/tambah" method="post" id="formFisica" autocomplete="off" style="display: none;">
                                <!-- Campos del formulario Fisica -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-material">
                                            <input type="hidden" name="person_type" value="Fisica">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nombre</label>
                                            <input type="text" class="form-control input-sm" id="nama_supplier" name="nama_supplier" placeholder="Nombre" required />
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Apellido paterno</label>
                                            <input type="text" class="form-control input-sm" id="paternal_last_name" name="paternal_last_name" placeholder="Apellido paterno" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Apellido materno</label>
                                            <input type="text" class="form-control input-sm" id="maternal_last_name" name="maternal_last_name" placeholder="Apellido materno">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nombre comercial</label>
                                            <input type="text" class="form-control input-sm" id="commercial_name" name="commercial_name" placeholder="Escribe aquí el nombre comercial" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">RFC</label>
                                            <input type="text" class="form-control input-sm" id="rfcF" name="rfc" placeholder="Introduce el RFC" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">CURP</label>
                                            <input type="text" class="form-control input-sm" id="curp" name="curp" placeholder="Curp" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Calle</label>
                                            <input type="text" class="form-control input-sm" id="street" name="street" placeholder="Introduce el nombre de la calle" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Número exterior</label>
                                            <input type="text" class="form-control input-sm" id="num_ext" name="num_ext" placeholder="Introduce el número exterior">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Número interior</label>
                                            <input type="text" class="form-control input-sm" id="num_in" name="num_in" placeholder="Introduce el número interior">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Colonia</label>
                                            <input type="text" class="form-control input-sm" id="neighborhood" name="neighborhood" placeholder="Introduce el nombre de la colonia">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Localidad</label>
                                            <input type="text" class="form-control input-sm" id="locality" name="locality" placeholder="Introduce el nombre de la localidad">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Estado</label>
                                            <input type="text" class="form-control input-sm" id="federal_entity" name="federal_entity" placeholder="Escribe el nombre del estado" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Ciudad</label>
                                            <input type="text" class="form-control input-sm" id="city" name="city" placeholder="Escribe el nombre de la ciudad">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Municipio</label>
                                            <input type="text" class="form-control input-sm" id="municipality" name="municipality" placeholder="Escribe el nombre del municipio" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">CP</label>
                                            <input type="text" class="form-control input-sm" id="cp" name="cp" placeholder="Escribe aquí el código postal" required>
                                        </div>
                                        <p>Datos adicionales</p>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Correo electrónico</label>
                                            <input type="text" class="form-control input-sm" id="emailF" name="email" placeholder="Escribe el correo electrónico" oninput="validateEmail2()">
                                            <span id="email-errorF" style="color: red; display: none;">Correo electrónico inválido</span>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Número de teléfono</label>
                                            <input type="text" class="form-control input-sm" id="notelp_supplier" name="notelp_supplier" placeholder="Número de teléfono" required />
                                        </div>
                                        <p>Auditoría</p>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Creado por</label>
                                            <input type="text" class="form-control input-sm" id="created_by" name="created_by" value="<?php echo $this->session->userdata('admin_nama') ?>" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="select">Estatus</label>
                                            <select name="status" class="form-control input-sm" onchange="checkStatus(this)">
                                                <?php
                                                $statuss = array("Activo", "Suspendido", "Deshabilitado");
                                                foreach ($statuss as $status) {
                                                    echo "<option value='$status'>$status</option>";
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
                                        <div id="suspension-fields" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputDate">Fecha suspendido</label>
                                            <input type="date" class="form-control input-sm" id="suspension_date" name="suspension_date">
                                        </div>
                                        <div id="suspension-fields1" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputText">Motivo de suspensión</label>
                                            <input type="text" class="form-control input-sm" id="suspension_reason" name="suspension_reason" placeholder="Escribe aquí el motivo de suspensión">
                                        </div>
                                        <div class='button center'>
                                            <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Añadir datos" id="validateButton2">
                                            <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/supplier'" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="<?php echo site_url(); ?>website/supplier">
            <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
                <i class="icon wb-eye" aria-hidden="true"></i>
            </button>
        </a>
    </div>
    <script>
        // Función para inicializar el estado de la forma al cargar la página
        window.onload = function() {
            toggleForm(); // Llamar a toggleForm al cargar la página
        };

        // Función para manejar el formato y longitud del RFC
        function setupRFCInput() {
            var rfcInput = document.getElementById('rfcM');
            rfcInput.addEventListener('input', function() {
                this.value = this.value.replace(/[\s-]/g, '').toUpperCase();
                var personType = document.getElementById('person_type').value;
                if (personType === 'Moral' && this.value.length > 12) {
                    this.value = this.value.substring(0, 12);

                } else if (personType === 'Fisica' && this.value.length > 13) {
                    this.value = this.value.substring(0, 13);
                }
            });
        }

        function setupRFCInput1() {
            var rfcInput = document.getElementById('rfcF');
            rfcInput.addEventListener('input', function() {
                this.value = this.value.replace(/[\s-]/g, '').toUpperCase();
                var personType = document.getElementById('person_type').value;
                if (personType === 'Fisica' && this.value.length > 13) {
                    this.value = this.value.substring(0, 13);

                } else if (personType === 'Moral' && this.value.length > 12) {
                    this.value = this.value.substring(0, 12);
                }
            });
        }



        // Función para cambiar entre formularios según el tipo de persona seleccionado
        function toggleForm() {
            var personType = document.getElementById('person_type').value;
            if (personType === 'Moral') {
                document.getElementById('formMoral').style.display = 'block';
                document.getElementById('formFisica').style.display = 'none';
            } else if (personType === 'Fisica') {
                document.getElementById('formMoral').style.display = 'none';
                document.getElementById('formFisica').style.display = 'block';
            }

            // Llamar a setupRFCInput después de cambiar el formulario
            setupRFCInput();
            setupRFCInput1();
        }

        // Función para verificar y mostrar campos dependiendo del estado seleccionado
        function checkStatus(selectElement) {
            var form = selectElement.closest("form");
            var disablementFields = form.querySelectorAll("[id^='disablement-fields']");
            var suspensionFields = form.querySelectorAll("[id^='suspension-fields']");

            if (selectElement.value === "Deshabilitado") {
                for (var i = 0; i < disablementFields.length; i++) {
                    disablementFields[i].style.display = "block";
                }
                for (var j = 0; j < suspensionFields.length; j++) {
                    suspensionFields[j].style.display = "none";
                }
            } else if (selectElement.value === "Suspendido") {
                for (var k = 0; k < suspensionFields.length; k++) {
                    suspensionFields[k].style.display = "block";
                }
                for (var l = 0; l < disablementFields.length; l++) {
                    disablementFields[l].style.display = "none";
                }
            } else {
                for (var m = 0; m < disablementFields.length; m++) {
                    disablementFields[m].style.display = "none";
                }
                for (var n = 0; n < suspensionFields.length; n++) {
                    suspensionFields[n].style.display = "none";
                }
            }
        }
    </script>

    <script>
        function validateEmail() {
            var emailInput = document.getElementById('emailM');
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

        function validateEmail2() {
            var emailInput = document.getElementById('emailF');
            var emailError = document.getElementById('email-errorF');
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
                document.getElementById('supplier_updated').value = formattedDateTime;
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
                            <form action="<?php echo site_url(); ?>website/supplier/edit/<?php echo $id_supplier; ?>" method="post" id="exampleStandardForm" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="id_supplier" value="<?php echo $id_supplier; ?>" />
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nombre del proveedor</label>
                                            <input type="text" value="<?php echo $nama_supplier; ?>" class="form-control input-sm" id="nama_supplier" name="nama_supplier" placeholder="Escribe el nuevo nombre" required />
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nombre comercial</label>
                                            <input type="text" value="<?php echo $commercial_name; ?>" class="form-control input-sm" id="commercial_name" name="commercial_name" placeholder="Escribe el nuevo nombre comercial">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Tipo persona</label>
                                            <input type="text" value="<?php echo $person_type; ?>" class="form-control input-sm" id="person_type" name="person_type" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">RFC</label>
                                            <input type="text" value="<?php echo $rfc; ?>" class="form-control input-sm" id="rfc" name="rfc" placeholder="Escribe el nuevo rfc">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Calle</label>
                                            <input type="text" value="<?php echo $street; ?>" class="form-control input-sm" id="street" name="street" placeholder="Escribe la nueva calle">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Num Exterior</label>
                                            <input type="text" value="<?php echo $num_ext; ?>" class="form-control input-sm" id="num_ext" name="num_ext" placeholder="Escribe el nuevo número exterior">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Num Interior</label>
                                            <input type="text" value="<?php echo $num_in; ?>" class="form-control input-sm" id="num_in" name="num_in" placeholder="Escribe el nuevo número interior">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Colonia</label>
                                            <input type="text" value="<?php echo $neighborhood; ?>" class="form-control input-sm" id="neighborhood" name="neighborhood" placeholder="Escribe el nuevo nombre de la colinia">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Localidad</label>
                                            <input type="text" value="<?php echo $locality; ?>" class="form-control input-sm" id="locality" name="locality" placeholder="Escribe el nuevo nombre de la localidad">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Ciudad</label>
                                            <input type="text" value="<?php echo $city; ?>" class="form-control input-sm" id="city" name="city" placeholder="Escribe el nombre de la nueva ciudad">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Estado</label>
                                            <input type="text" value="<?php echo $federal_entity; ?>" class="form-control input-sm" id="federal_entity" name="federal_entity" placeholder="Escribe el nombre del nuevo Estado">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">CP</label>
                                            <input type="text" value="<?php echo $cp; ?>" class="form-control input-sm" id="cp" name="cp" placeholder="Escribe el nuevo código postal">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Municipio</label>
                                            <input type="text" value="<?php echo $municipality; ?>" class="form-control input-sm" id="municipality" name="municipality" placeholder="Escribe el nombre del nuevo municipio">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Correo electrónico</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $email; ?>" id="email" name="email" placeholder="Escribe el nuevo correo electrónico" oninput="validateEmail()">
                                            <span id="email-error" style="color: red; display: none;">Correo electrónico inválido</span>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Creado por</label>
                                            <input type="text" value="<?php echo $created_by; ?>" class="form-control input-sm" id="created_by" name="created_by" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Estatus</label>
                                            <input type="text" value="<?php echo $status; ?>" class="form-control input-sm" id="status" name="status" onclick="convertToSelect(this)" readonly>
                                        </div>
                                        <div id="disablement-fields" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputDate">Fecha deshabilitado</label>
                                            <input type="date" class="form-control input-sm" value="<?php echo $disablement_date ?>" id="disablement_date" name="disablement_date">
                                        </div>
                                        <div id="disablement-fields1" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputText">Motivo de deshabilitado</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $disablement_reason; ?>" id="disablement_reason" name="disablement_reason" placeholder="Escribe aquí el motivo de deshabilitado">
                                        </div>
                                        <div id="suspension-fields" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputDate">Fecha suspendido</label>
                                            <input type="date" class="form-control input-sm" value="<?php echo $suspension_date; ?>" id="suspension_date" name="suspension_date">
                                        </div>
                                        <div id="suspension-fields1" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputText">Motivo de suspensión</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $suspension_reason; ?>" id="suspension_reason" name="suspension_reason" placeholder="Escribe aquí el motivo de suspensión">
                                        </div>
                                       
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Modificado por</label>
                                            <input type="text" value="<?php echo $this->session->userdata('admin_nama') ?>" class="form-control input-sm" id="modified_by" name="modified_by" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Teléfono</label>
                                            <input type="text" value="<?php echo $notelp_supplier; ?>" class="form-control input-sm" id="notel_supplier" name="notelp_supplier" placeholder="Escribe el nuevo número de teléfono">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Fecha de creación del proveedor</label>
                                            <input type="text" value="<?php echo $supplier_created; ?>" class="form-control input-sm" id="supplier_created" name="supplier_created" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText"> Fecha de última modificación</label>
                                            <input type="text" value="<?php echo $supplier_updated; ?>" class="form-control input-sm" id="supplier_updated" name="supplier_updated" readonly>
                                        </div>
                                        <div class='button center'>
                                            <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Actualizar datos" id="validateButton2">
                                            <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/supplier'" />
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
    <a href="<?php echo site_url(); ?>website/supplier">
        <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
            <i class="icon wb-eye" aria-hidden="true"></i>
        </button>
    </a>
    </div>

    <script>
        function setupRFCInput() {
            var rfcInput = document.getElementById('rfc');
            rfcInput.addEventListener('input', function() {
                this.value = this.value.replace(/[\s-]/g, '').toUpperCase();
                var personType = document.getElementById('person_type').value;
                if (personType === 'Moral' && this.value.length > 12) {
                    this.value = this.value.substring(0, 12);

                } else if (personType === 'Fisica' && this.value.length > 13) {
                    this.value = this.value.substring(0, 13);
                }
            });
        }
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

        function checkStatus(select) {
            const value = select.value;
            document.getElementById('disablement-fields').style.display = (value === 'Deshabilitado') ? 'block' : 'none';
            document.getElementById('disablement-fields1').style.display = (value === 'Deshabilitado') ? 'block' : 'none';
            document.getElementById('suspension-fields').style.display = (value === 'Suspendido') ? 'block' : 'none';
            document.getElementById('suspension-fields1').style.display = (value === 'Suspendido') ? 'block' : 'none';
        }
    </script>
    <!-- ================================================== END EDIT ================================================== -->

<?php } elseif ($action == 'edit_fisica') { ?>
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
                document.getElementById('supplier_updated').value = formattedDateTime;
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
                            <form action="<?php echo site_url(); ?>website/supplier/edit_fisica/<?php echo $id_supplier; ?>" method="post" id="exampleStandardForm" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="id_supplier" value="<?php echo $id_supplier; ?>" />
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nombre</label>
                                            <input type="text" value="<?php echo $nama_supplier; ?>" class="form-control input-sm" id="nama_supplier" name="nama_supplier" placeholder="Escribe el nuevo nombre" required />
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Apellido paterno</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $paternal_last_name; ?>" id="paternal_last_name" name="paternal_last_name" placeholder="Escribe el nuevo Apellido paterno" required>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Apellido materno</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $maternal_last_name; ?>" id="maternal_last_name" name="maternal_last_name" placeholder="Escribe el nuevo Apellido materno">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nombre comercial</label>
                                            <input type="text" value="<?php echo $commercial_name; ?>" class="form-control input-sm" id="commercial_name" name="commercial_name" placeholder="Escribe el nuevo nombre comercial">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Tipo persona</label>
                                            <input type="text" value="<?php echo $person_type; ?>" class="form-control input-sm" id="person_type" name="person_type" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">CURP</label>
                                            <input type="text" value="<?php echo $curp; ?>" class="form-control input-sm" id="curp" name="curp" placeholder="Escribe la curp">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">RFC</label>
                                            <input type="text" value="<?php echo $rfc; ?>" class="form-control input-sm" id="rfc" name="rfc" placeholder="Escribe el nuevo rfc">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Calle</label>
                                            <input type="text" value="<?php echo $street; ?>" class="form-control input-sm" id="street" name="street" placeholder="Escribe la nueva calle">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Num Exterior</label>
                                            <input type="text" value="<?php echo $num_ext; ?>" class="form-control input-sm" id="num_ext" name="num_ext" placeholder="Escribe el nuevo número exterior">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Num Interior</label>
                                            <input type="text" value="<?php echo $num_in; ?>" class="form-control input-sm" id="num_in" name="num_in" placeholder="Escribe el nuevo número interior">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Colonia</label>
                                            <input type="text" value="<?php echo $neighborhood; ?>" class="form-control input-sm" id="neighborhood" name="neighborhood" placeholder="Escribe el nuevo nombre de la colinia">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Localidad</label>
                                            <input type="text" value="<?php echo $locality; ?>" class="form-control input-sm" id="locality" name="locality" placeholder="Escribe el nuevo nombre de la localidad">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Ciudad</label>
                                            <input type="text" value="<?php echo $city; ?>" class="form-control input-sm" id="city" name="city" placeholder="Escribe el nombre de la nueva ciudad">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Estado</label>
                                            <input type="text" value="<?php echo $federal_entity; ?>" class="form-control input-sm" id="federal_entity" name="federal_entity" placeholder="Escribe el nombre del nuevo Estado">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">CP</label>
                                            <input type="text" value="<?php echo $cp; ?>" class="form-control input-sm" id="cp" name="cp" placeholder="Escribe el nuevo código postal">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Municipio</label>
                                            <input type="text" value="<?php echo $municipality; ?>" class="form-control input-sm" id="municipality" name="municipality" placeholder="Escribe el nombre del nuevo municipio">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Correo electrónico</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $email; ?>" id="email" name="email" placeholder="Escribe el nuevo correo electrónico" oninput="validateEmail()">
                                            <span id="email-error" style="color: red; display: none;">Correo electrónico inválido</span>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Creado por</label>
                                            <input type="text" value="<?php echo $created_by; ?>" class="form-control input-sm" id="created_by" name="created_by" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Estatus</label>
                                            <input type="text" value="<?php echo $status; ?>" class="form-control input-sm" id="status" name="status" onclick="convertToSelect(this)" readonly>
                                        </div>
                                        <div id="disablement-fields" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputDate">Fecha deshabilitado</label>
                                            <input type="date" class="form-control input-sm" value="<?php echo $disablement_date; ?>" id="disablement_date" name="disablement_date">
                                        </div>
                                        <div id="disablement-fields1" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputText">Motivo de deshabilitado</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $disablement_reason; ?>" id="disablement_reason" name="disablement_reason" placeholder="Escribe aquí el motivo de deshabilitado">
                                        </div>
                                        <div id="suspension-fields" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputDate">Fecha suspendido</label>
                                            <input type="date" class="form-control input-sm" value="<?php echo $suspension_date; ?>" id="suspension_date" name="suspension_date">
                                        </div>
                                        <div id="suspension-fields1" class="form-group form-material" style="display: none;">
                                            <label class="control-label" for="inputText">Motivo de suspensión</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $suspension_reason; ?>" id="suspension_reason" name="suspension_reason" placeholder="Escribe aquí el motivo de suspensión">
                                        </div>
                                        
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Modificado por</label>
                                            <input type="text" value="<?php echo $this->session->userdata('admin_nama') ?>" class="form-control input-sm" id="modified_by" name="modified_by" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Teléfono</label>
                                            <input type="text" value="<?php echo $notelp_supplier; ?>" class="form-control input-sm" id="notel_supplier" name="notelp_supplier" placeholder="Escribe el nuevo número de teléfono">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Fecha de creación del proveedor</label>
                                            <input type="text" value="<?php echo $supplier_created; ?>" class="form-control input-sm" id="supplier_created" name="supplier_created" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText"> Fecha de última modificación</label>
                                            <input type="text" value="<?php echo $supplier_updated; ?>" class="form-control input-sm" id="supplier_updated" name="supplier_updated" readonly>
                                        </div>
                                        <div class='button center'>
                                            <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Actualizar datos" id="validateButton2">
                                            <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/supplier'" />
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
    <a href="<?php echo site_url(); ?>website/supplier">
        <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
            <i class="icon wb-eye" aria-hidden="true"></i>
        </button>
    </a>
    </div>

    <script>
        function setupRFCInput() {
            var rfcInput = document.getElementById('rfc');
            rfcInput.addEventListener('input', function() {
                this.value = this.value.replace(/[\s-]/g, '').toUpperCase();
                var personType = document.getElementById('person_type').value;
                if (personType === 'Moral' && this.value.length > 12) {
                    this.value = this.value.substring(0, 12);

                } else if (personType === 'Fisica' && this.value.length > 13) {
                    this.value = this.value.substring(0, 13);
                }
            });
        }

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

        function checkStatus(select) {
            const value = select.value;
            document.getElementById('disablement-fields').style.display = (value === 'Deshabilitado') ? 'block' : 'none';
            document.getElementById('disablement-fields1').style.display = (value === 'Deshabilitado') ? 'block' : 'none';
            document.getElementById('suspension-fields').style.display = (value === 'Suspendido') ? 'block' : 'none';
            document.getElementById('suspension-fields1').style.display = (value === 'Suspendido') ? 'block' : 'none';
        }
    </script>
    <!-- ================================================== END EDIT ================================================== -->
<?php } ?>