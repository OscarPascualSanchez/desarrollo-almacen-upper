<!-- ================================================== VIEW ================================================== -->
<?php if ($action == 'view' || empty($action)) { ?>
    <div class="page">
        <div class="page-title orange">
            <h3>
                <?php echo $breadcrumb; ?>
            </h3>
            <p>Información sobre la
                <?php echo $breadcrumb; ?>
            </p>
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel rounded-0">
                        <div class="panel-heading">
                            <h5 class="panel-title">Ver datos de la
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
                       
                        <div class="panel-body container-fluid table-detail">
                            <div class="table-full table-view">
                                <div class="navigation-btn">
                                    <form action="<?php echo site_url('website/all_arrivals/view'); ?>" method="post" id="form">
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
                                                <a class="btn btn-success" href="<?php echo site_url(); ?>website/all_arrivals"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Número de Identificación</th>
                                                <?php if ($admin->admin_level_kode == 1) { ?>
                                                    <th class="text-center">Acción</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = $page + 1;

                                            if (count($unique_identifications) > 0) {
                                                foreach ($unique_identifications as $identification) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td>
                                                            <a href="<?php echo site_url('website/details/' . urlencode($identification->identification_number)); ?>">
                                                                <?php echo $identification->identification_number; ?>
                                                            </a>
                                                        </td>
                                                        <?php if ($admin->admin_level_kode == 1) { ?>
                                                            <td class="text-center action">
                                                                <a class="btn-update" href="<?php echo site_url('website/arrivalnew/edit/' . $identification->id_arrivalnew); ?>">
                                                                    <i class="icon wb-pencil"></i>
                                                                </a>
                                                                <!--<a class="text-danger" href="javascript:;" data-id="<?php echo $identification->id_arrivalnew; ?>" data-toggle="modal" data-target="#modal-konfirmasi" title="<?php echo $identification->identification_number; ?>">
                                                                    <i class="icon wb-trash"></i>
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
                                                    <td colspan="<?php echo ($admin->admin_level_kode == 1) ? '4' : '2'; ?>" class="style-center">¡No hay datos aún!</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="wrapper">
                                    <div class="paging">
                                        <div id='pagination'>
                                            <div class='pagination-right'>
                                                <ul class="pagination">
                                                    <?php if ($jml_halaman > 1) {
                                                        echo pages($halaman, $jml_halaman, 'website/all_arrivals/view', $id = "");
                                                    } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total">Total: <?php echo $jml_data; ?></div>
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
    

<?php } ?>