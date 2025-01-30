<!-- ================================================== VIEW ================================================== -->
<?php if ($action == 'view' || empty($action)){ ?>
<div class="page">
    <div class="page-title orange">
        <h3>
            <?php echo $breadcrumb; ?>
        </h3>
        <p><!--Information About--> Información sobre el
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
                                        <div class='btn-search'>Buscar por:</div> <!--Search By-->
                                        <div class='col-md-3 col-sm-12'>
                                            <div class='button-search'>
                                                <?php array_pilihan('cari', $berdasarkan, $cari);?>
                                            </div>
                                        </div>
                                        <div class='col-md-3 col-sm-12 select-search'>
                                            <div class="input-group">
                                                <input type="text" name="q" class="form-control" value="<?php echo $q;?>" />
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
                                            <a class="btn btn-success" href="<?php echo site_url();?>website/inventory"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID Producto</th>
                                    <th>Nombre Producto</th>
                                    <th>Stock Total</th>
                                    <th>Stock Dañado</th>
                                    <th>Stock Bueno</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($stocks_by_product)) { 
                                    foreach ($stocks_by_product as $stock) { ?>
                                    <tr>
                                        <td><?php echo $stock->id_product; ?></td>
                                        <td><?php echo $stock->product_name; ?></td>
                                        <td><?php echo $stock->total_stock_arrival; ?></td>
                                        <td><?php echo $stock->total_damaged_stock_arrival; ?></td>
                                        <td><?php echo $stock->total_ok_stock_arrival; ?></td>
                                    </tr>
                                <?php } } else { ?>
                                    <tr>
                                        <td colspan="5" class="text-center">No hay datos disponibles</td>
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
                                                <?php if ($jml_halaman > 1) { echo pages($halaman, $jml_halaman, 'website/inventory/view', $id=""); }?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="total">Total :
                                    <?php echo $jml_data;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            <?php if ($admin->admin_level_kode == 1) { ?>
    <a href="<?php echo site_url();?>website/inventory/tambah">
		<button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
			<i class="icon wb-plus" aria-hidden="true"></i> 
		</button>
    </a>
                            <?php }?>
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
            ¿Estás seguro de que quieres eliminar estos datos?
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-danger" id="hapus-inventory">Sí</a>
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
        <p>Información de la 
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
                        <form action="<?php echo site_url();?>website/inventory/tambah" method="post" id="exampleStandardForm" autocomplete="off">
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Nombre</label>
                                <input type="text" class="form-control input-sm" id="nama_barang" name="nama_barang" placeholder="Nombre del producto" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Marca</label>
                                <input type="text" class="form-control input-sm" id="merek" name="merek" placeholder="Marca" required/>
                            </div>
                            <div class='button center'>
                                <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Agregar datos" id="validateButton2"> <!--Add Data-->
                                <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/barang'" 
                                /> <!--Cancel-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo site_url();?>website/barang">
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
        <p>Información de la
            <?php echo $breadcrumb; ?>
        </p>
    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel rounded-0">
                    <div class="panel-heading">
                        <h5 class="panel-title">Editar <?php echo $breadcrumb; ?></h5>
                    </div>
                    <div class="panel-body container-fluid">
                        <form action="<?php echo site_url();?>website/barang/edit/<?php echo $id_barang;?>" method="post" id="exampleStandardForm" autocomplete="off">
                            <input type="hidden" name="id_barang" value="<?php echo $id_barang;?>" />
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Nombre del producto</label>
                                <input type="text" value="<?php echo $nama_barang; ?>" class="form-control input-sm" id="nama_barang" name="nama_barang" placeholder="Nombre del prodducto"
                                    required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Marca</label>
                                <input type="text" value="<?php echo $merek; ?>" class="form-control input-sm" id="merek" name="merek"
                                    placeholder="Marca" required/>
                            </div>
                            <div class='button center'>
                                <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Actualizar datos" id="validateButton2">
                                <input class="btn btn-danger btn-sm" type="reset" name="batal" value="Cancelar" onclick="location.href='<?php echo site_url(); ?>website/barang'"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo site_url();?>website/barang">
		<button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
			<i class="icon wb-eye" aria-hidden="true"></i>
		</button>
	</a>
</div>
<!-- ================================================== END EDIT ================================================== -->
<?php } ?>