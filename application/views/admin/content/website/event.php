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
                                                <a class="btn btn-success" href="<?php echo site_url(); ?>website/event"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <th width=80>Id</th>
                                            <th width=120>Tipo de evento</th>
                                            <th width=150>Nota</th>
                                            <th width=120>Estatus</th>
                                            <th width=120>Creado por</th>
                                            <th width=120>Fecha de creación</th>
                                            <th width=120>Modificado por</th>
                                            <th width=120>última vez modificado</th>
                                            <?php if ($admin->admin_level_kode == 1) { ?>
                                                <th class="text-center">Acción</th>
                                            <?php } ?>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i    = $page + 1;
                                            $like_event[$cari]            = $q;
                                            if ($jml_data > 0) {
                                                foreach ($this->ADM->grid_all_event('', 'type_event', 'ASC', $batas, $page, '', $like_event) as $row) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $i; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->type_event; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->note; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->status; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row->created_by ?>
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
                                                                <a class="btn-update" href="<?php echo site_url(); ?>website/event/edit/<?php echo $row->id_event; ?>">
                                                                    <i class="icon wb-pencil"></i>
                                                                </a>
                                                                <a class="text-danger" href="javascript:;" data-id="<?php echo $row->id_event; ?>" data-toggle="modal" data-target="#modal-konfirmasi" title="<?php echo $row->type_event; ?>">
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
                                                        echo pages($halaman, $jml_halaman, 'website/event/view', $id = "");
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
            <a href="<?php echo site_url(); ?>website/event/tambah">
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
                    <a href="javascript:;" class="btn btn-danger" id="hapus-event">Sí</a>
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
                            <form action="<?php echo site_url(); ?>website/event/tambah" method="post" id="exampleStandardForm" autocomplete="off">
                                <!-- Campos del formulario Moral -->
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Tipo de evento</label>
                                            <input type="text" class="form-control input-sm" id="type_event" name="type_event" placeholder="Escribe el tipo de evento" required />
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nota</label>
                                            <input type="text" class="form-control input-sm" id="note" name="note" placeholder="Escribe una nota">
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
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Creado por</label>
                                            <input type="text" class="form-control input-sm" id="created_by" name="created_by" value="<?php echo $this->session->userdata('admin_nama') ?>" readonly>
                                        </div>
                                        <div class='button center'>
                                            <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Añadir datos" id="validateButton2">
                                            <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/event'" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="<?php echo site_url(); ?>website/event">
            <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
                <i class="icon wb-eye" aria-hidden="true"></i>
            </button>
        </a>
    </div>

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
                            <form action="<?php echo site_url(); ?>website/event/edit/<?php echo $id_event; ?>" method="post" id="exampleStandardForm" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="id_event" value="<?php echo $id_event; ?>" />
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Tipo de evento</label>
                                            <input type="text" value="<?php echo $type_event; ?>" class="form-control input-sm" id="type_event" name="type_event" placeholder="Escribe el tipo de evento" required />
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Nota</label>
                                            <input type="text" value="<?php echo $note; ?>" class="form-control input-sm" id="note" name="note" placeholder="Escribe una nota">
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Estatus</label>
                                            <input type="text" value="<?php echo $status; ?>" class="form-control input-sm" id="status" name="status" onclick="convertToSelect(this)" readonly>
                                        </div>
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputText">Creado por</label>
                                            <input type="text" value="<?php echo $created_by; ?>" class="form-control input-sm" id="created_by" name="created_by" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">     
                                        <div class="form-group form-material">
                                            <label class="control-label" for="inputDate">Fecha de creación</label>
                                            <input type="datetime" value="<?php echo $created_date; ?>" class="form-control input-sm" id="created_date" name="created_date" readonly>
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
                                            <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/event'" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <a href="<?php echo site_url(); ?>website/event">
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

    <!-- ================================================== END EDIT ================================================== -->
<?php } ?>