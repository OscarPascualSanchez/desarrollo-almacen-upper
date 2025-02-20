<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;


class Website extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin', 'ADM', TRUE);
		$this->load->model('M_config', 'CONF', TRUE);
		$this->load->library('upload');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('ADM');
	}
	
	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user']		= $this->session->userdata('admin_user');
			$data['admin']					= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			$data['dashboard_info']			= TRUE;
			$data['breadcrumb']				= 'Dashboard';
			$data['dashboard']				= 'admin/dashboard/statistik';
			$data['boxmenu']				= 'admin/boxmenu/setting';
			$data['menu_terpilih']			= '1';
			$data['submenu_terpilih']		= '';
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("login");
		}
	}

	//IDENTITAS
	public function identitas($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user']		= $this->session->userdata('admin_user');
			$data['admin']					= $this->ADM->get_admin('', $where_admin);
			if ($data['admin']->admin_level_kode == 1) {
				$data['web']					= $this->ADM->identitaswebsite();
				@date_default_timezone_set('Asia/Jakarta');
				$data['dashboard_info']			= FALSE;
				$data['breadcrumb']				= 'System Identity';
				$data['content']				= 'admin/content/website/identitas';
				$data['menu_terpilih']			= '1';
				$data['submenu_terpilih']		= '105';
				$data['action']					= (empty($filter1)) ? 'view' : $filter1;
				$data['validate']				= array(
					'identitas_website' => 'Website Name',
					'identitas_deskripsi' => 'Description',
					'identitas_keyword' => 'Keyword',
					'identitas_notelp' => 'Telephone No',
					'identitas_email' => 'Email',
					'identitas_fb' => 'Facebook',
					'identitas_tw' => 'Twitter',
					'identitas_yb' => 'Youtube',
					'identitas_favicon' => 'Favicon'
				);
				if ($data['action'] == 'view') {
					$data['berdasarkan']		= array('identitas_website' => 'System Identity');
					$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'identitas_website';
					$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
					$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
					$data['batas']				= 10;
					$data['page']				= ($data['halaman'] - 1) * $data['batas'];
					$like_identitas[$data['cari']]	= $data['q'];
					$data['jml_data']			= $this->ADM->count_all_identitas('', $like_identitas);
					$data['jml_halaman']		= ceil($data['jml_data'] / $data['batas']);
				} elseif ($data['action'] == 'tambah') {
					$data['onload']						= 'identitas_website';
					$data['identitas_website']			= ($this->input->post('identitas_website')) ? $this->input->post('identitas_website') : '';
					$data['identitas_deskripsi']		= ($this->input->post('identitas_deskripsi')) ? $this->input->post('identitas_deskripsi') : '';
					$data['identitas_keyword']			= ($this->input->post('identitas_keyword')) ? $this->input->post('identitas_keyword') : '';
					$data['identitas_email']				= ($this->input->post('identitas_email')) ? $this->input->post('identitas_email') : '';
					$data['identitas_fb']				= ($this->input->post('identitas_fb')) ? $this->input->post('identitas_fb') : '';
					$data['identitas_tw']				= ($this->input->post('identitas_tw')) ? $this->input->post('identitas_tw') : '';
					$data['identitas_gp']				= ($this->input->post('identitas_gb')) ? $this->input->post('identitas_gp') : '';
					$data['identitas_yb']				= ($this->input->post('identitas_yb')) ? $this->input->post('identitas_yb') : '';
					$data['identitas_favicon']			= ($this->input->post('identitas_favicon')) ? $this->input->post('identitas_favicon') : '';
					$data['identitas_created']				= ($this->input->post('identitas_created')) ? $this->input->post('identitas_created') : '';
					$data['identitas_updated']			= ($this->input->post('identitas_updated')) ? $this->input->post('identitas_updated') : '';
					$simpan								=  $this->input->post('simpan');
					if ($simpan) {
						$insert['identitas_website']	= validasi_sql($data['identitas_website']);
						$insert['identitas_deskripsi']	= validasi_sql($data['identitas_deskripsi']);
						$insert['identitas_keyword']	= validasi_sql($data['identitas_keyword']);
						$insert['identitas_notelp']		= validasi_sql($data['identitas_notelp']);
						$insert['identitas_email']		= validasi_sql($data['identitas_email']);
						$insert['identitas_fb']			= validasi_sql($data['identitas_fb']);
						$insert['identitas_tw']			= validasi_sql($data['identitas_tw']);
						$insert['identitas_gp']			= validasi_sql($data['identitas_gp']);
						$insert['identitas_yb']			= validasi_sql($data['identitas_yb']);
						$insert['identitas_favicon']	= validasi_sql($data['identitas_favicon']);
						$this->ADM->insert_identitas($insert);
						$this->session->set_flashdata('success', 'Identity data has been successfully added!,');
						redirect("website/identitas/edit/1");
					}
				} elseif ($data['action'] == 'edit') {
					$data['ckeditor']			= $this->ckeditor('identitas_deskripsi');
					$data['onload']					= 'identitas_website';
					$where_identitas['identitas_id']	= $filter2;
					$identitas						= $this->ADM->get_identitas('', $where_identitas);
					$data['identitas_id']			= ($this->input->post('identitas_id')) ? $this->input->post('identitas_id') : $identitas->identitas_id;
					$data['identitas_website']		= ($this->input->post('identitas_website')) ? $this->input->post('identitas_website') : $identitas->identitas_website;
					$data['identitas_deskripsi']	= ($this->input->post('identitas_deskripsi')) ? $this->input->post('identitas_deskripsi') : $identitas->identitas_deskripsi;
					$data['identitas_keyword']		= ($this->input->post('identitas_keyword')) ? $this->input->post('identitas_keyword') : $identitas->identitas_keyword;
					$data['identitas_alamat']		= ($this->input->post('identitas_alamat')) ? $this->input->post('identitas_alamat') : $identitas->identitas_alamat;
					$data['identitas_notelp']		= ($this->input->post('identitas_notelp')) ? $this->input->post('identitas_notelp') : $identitas->identitas_notelp;
					$data['identitas_email']		= ($this->input->post('identitas_email')) ? $this->input->post('identitas_email') : $identitas->identitas_email;
					$data['identitas_fb']			= ($this->input->post('identitas_fb')) ? $this->input->post('identitas_fb') : $identitas->identitas_fb;
					$data['identitas_tw']			= ($this->input->post('identitas_tw')) ? $this->input->post('identitas_tw') : $identitas->identitas_tw;
					$data['identitas_gp']			= ($this->input->post('identitas_gp')) ? $this->input->post('identitas_gp') : $identitas->identitas_gp;
					$data['identitas_yb']			= ($this->input->post('identitas_yb')) ? $this->input->post('identitas_yb') : $identitas->identitas_yb;
					$data['identitas_favicon']		= ($this->input->post('identitas_favicon')) ? $this->input->post('identitas_favicon') : $identitas->identitas_favicon;
					$data['identitas_created']				= ($this->input->post('identitas_created')) ? $this->input->post('identitas_created') : $identitas->identitas_created;
					$data['identitas_updated']			= ($this->input->post('identitas_updated')) ? $this->input->post('identitas_updated') : $identitas->identitas_updated;
					$simpan							= $this->input->post('simpan');
					if ($simpan) {
						$config['upload_path']          = './assets/';
						$config['allowed_types']        = 'png|jpg|jpeg';
						$config['encrypt_name'] 		= TRUE;
						$config['max_size']             = 11000;
						$config['max_width']            = 4096;
						$config['max_height']           = 2048;

						$this->upload->initialize($config);

						$data['identitas_favicon']	= $gambar;
						$where_edit['identitas_id']				= validasi_sql($data['identitas_id']);
						$edit['identitas_website']				= validasi_sql($data['identitas_website']);
						$edit['identitas_deskripsi']			= validasi_sql($data['identitas_deskripsi']);
						$edit['identitas_keyword']				= validasi_sql($data['identitas_keyword']);
						$edit['identitas_alamat']				= validasi_sql($data['identitas_alamat']);
						$edit['identitas_notelp']				= validasi_sql($data['identitas_notelp']);
						$edit['identitas_email']				= validasi_sql($data['identitas_email']);
						$edit['identitas_fb']					= validasi_sql($data['identitas_fb']);
						$edit['identitas_tw']					= validasi_sql($data['identitas_tw']);
						$edit['identitas_gp']					= validasi_sql($data['identitas_gp']);
						$edit['identitas_yb']					= validasi_sql($data['identitas_yb']);
						if ($this->upload->do_upload('identitas_favicon')) {
							@unlink('./assets/' . $row->identitas_favicon);

							$data = array('upload_data' => $this->upload->data());
							$edit['identitas_favicon'] 	= $this->upload->data('file_name');
						}

						$this->ADM->update_identitas($where_edit, $edit);
						$this->session->set_flashdata('success', 'Identity data has been successfully edited!,');
						redirect("website/identitas/edit/1");
					}
				} elseif ($data['action'] == 'hapus') {
					$where_delete['identitas_id']		= validasi_sql($filter2);
					$this->ADM->delete_identitas($where_delete);
					$this->session->set_flashdata('success', 'Identity data has been successfully deleted!,');
					redirect("website/identitas/edit/1");
				}

				$this->load->vars($data);
				$this->load->view('admin/home');
			} else {
				redirect("admin");
			}
		} else {
			redirect("login");
		}
	}



	//IDENTITAS
	public function stock($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user']		= $this->session->userdata('admin_user');
			$data['admin']					= $this->ADM->get_admin('', $where_admin);
			if ($data['admin']->admin_level_kode == 1) {
				$data['web']					= $this->ADM->identitaswebsite();
				@date_default_timezone_set('Asia/Jakarta');
				$data['dashboard_info']			= FALSE;
				$data['breadcrumb']				= 'Notificación de Existencias'; // Stock Notification
				$data['content']				= 'admin/content/website/stock';
				$data['menu_terpilih']			= '1';
				$data['submenu_terpilih']		= '105';
				$data['action']					= (empty($filter1)) ? 'view' : $filter1;
				if ($data['action'] == 'view') {
				} elseif ($data['action'] == 'tambah') {
				} elseif ($data['action'] == 'edit') {
					$data['onload']					= 'limitstock_id';
					$where_limitstock['limitstock_id']	= $filter2;
					$limitstock						= $this->ADM->get_limitstock('', $where_limitstock);
					$data['limitstock_id']			= ($this->input->post('limitstock_id')) ? $this->input->post('limitstock_id') : $limitstock->limitstock_id;
					$data['stock']		= ($this->input->post('stock')) ? $this->input->post('stock') : $limitstock->stock;
					$data['limitstock_created']				= ($this->input->post('limitstock_created')) ? $this->input->post('limitstock_created') : $limitstock->limitstock_created;
					$data['limitstock_updated']			= ($this->input->post('limitstock_updated')) ? $this->input->post('limitstock_updated') : $limitstock->limitstock_updated;
					$simpan							= $this->input->post('simpan');
					if ($simpan) {
						$where_edit['limitstock_id']				= validasi_sql($data['limitstock_id']);
						$edit['stock']				= validasi_sql($data['stock']);
						$this->ADM->update_limitstock($where_edit, $edit);
						$this->session->set_flashdata('success', 'Stock Notification Data has been successfully edited!,');
						redirect("website/stock/edit/1");
					}
				} elseif ($data['action'] == 'hapus') {
				}

				$this->load->vars($data);
				$this->load->view('admin/home');
			} else {
				redirect("admin");
			}
		} else {
			redirect("login");
		}
	}

	//FUNCTION MASTER BARANG
	public function barang($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Mercancía';
			$data['content'] 			= 'admin/content/website/barang';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'nama_barang' => 'Name',
				'merek' => 'Brand'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('nama_barang' => 'Nombre', 'merek' => 'Marca');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'nama_barang';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_barang[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_barang('', $like_barang);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1 || $data['admin']->admin_level_kode == 2) {
					$data['onload']				= 'barang';
					$data['nama_barang']	= ($this->input->post('nama_barang')) ? $this->input->post('nama_barang') : '';
					$data['merek']	= ($this->input->post('merek')) ? $this->input->post('merek') : '';
					$simpan						= $this->input->post('simpan');
					if ($simpan) {
						$insert['nama_barang']			= validasi_sql($data['nama_barang']);
						$insert['merek']			= validasi_sql($data['merek']);
						$insert['stock']			= 0;
						$this->ADM->insert_barang($insert);
						$this->session->set_flashdata('success', 'New item has been successfully added!,');
						redirect("website/barang");
					}
				} else {
					redirect("website/barang");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1 || $data['admin']->admin_level_kode == 2) {
					$data['onload']				= 'nama_barang';
					$where_barang['id_barang']	= $filter2;
					$barang				= $this->ADM->get_barang('*', $where_barang);
					$data['id_barang']	= ($this->input->post('id_barang')) ? $this->input->post('id_barang') : $barang->id_barang;
					$data['nama_barang']	= ($this->input->post('nama_barang')) ? $this->input->post('nama_barang') : $barang->nama_barang;
					$data['merek']	= ($this->input->post('merek')) ? $this->input->post('merek') : $barang->merek;
					$simpan						= $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_barang']	= $data['id_barang'];
						$edit['nama_barang']	= $data['nama_barang'];
						$edit['merek']	= $data['merek'];
						$this->ADM->update_barang($where_edit, $edit);
						$this->session->set_flashdata('success', 'Item has been edited successfully!,');
						redirect("website/barang");
					}
				} else {
					redirect("website/barang");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1 || $data['admin']->admin_level_kode == 2) {
					$where_delete['id_barang']		= validasi_sql($filter2);
					$this->ADM->delete_barang($where_delete);
					$this->session->set_flashdata('success', 'Item has been successfully removed!,');
					redirect("website/barang");
				} else {
					redirect("website/barang");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION MASTER SUPPLIER
	public function supplier($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Proveedor'; // Supplier
			$data['content'] 			= 'admin/content/website/supplier';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'nama_supplier' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('nama_supplier' => 'Nombre	', 'status' => 'Status', 'person_type' => 'Tipo de persona');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'nama_supplier';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_supplier[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_supplier('', $like_supplier);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				  = 'supplier';
					$data['nama_supplier']	      = ($this->input->post('nama_supplier')) ? $this->input->post('nama_supplier') : '';
					$data['paternal_last_name']   = ($this->input->post('paternal_last_name')) ? $this->input->post('paternal_last_name') : '';
					$data['maternal_last_name']   = ($this->input->post('maternal_last_name')) ? $this->input->post('paternal_last_name') : '';
					$data['curp']                 = ($this->input->post('curp')) ? $this->input->post('curp') : '';
					$data['commercial_name']      = ($this->input->post('commercial_name')) ? $this->input->post('commercial_name') : '';
					$data['person_type']          = ($this->input->post('person_type')) ? $this->input->post('person_type') : '';
					$data['rfc']                  = ($this->input->post('rfc')) ? $this->input->post('rfc') : '';
					$data['street']               = ($this->input->post('street')) ? $this->input->post('street') : '';
					$data['num_ext']              = ($this->input->post('num_ext')) ? $this->input->post('num_ext') : '';
					$data['num_in']               = ($this->input->post('num_in')) ? $this->input->post('num_in') : '';
					$data['neighborhood']         = ($this->input->post('neighborhood')) ? $this->input->post('neighborhood') : '';
					$data['locality']             = ($this->input->post('locality')) ? $this->input->post('locality') : '';
					$data['city']                 = ($this->input->post('city')) ? $this->input->post('city') : '';
					$data['federal_entity']       = ($this->input->post('federal_entity')) ? $this->input->post('federal_entity') : '';
					$data['cp']                   = ($this->input->post('cp')) ? $this->input->post('cp') : '';
					$data['municipality']         = ($this->input->post('municipality')) ? $this->input->post('municipality') : '';
					$data['email']                = ($this->input->post('email')) ? $this->input->post('email') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['modified_by']          = ($this->input->post('modified_by')) ? $this->input->post('modified_by') : '';
					$data['disablement_date']     = ($this->input->post('disablement_date')) ? $this->input->post('disablement_date') : '';
					$data['disablement_reason']   = ($this->input->post('disablement_reason')) ? $this->input->post('disablement_reason') : '';
					$data['suspension_date']      = ($this->input->post('suspension_date')) ? $this->input->post('suspension_date') : '';
					$data['suspension_reason']    = ($this->input->post('suspension_reason')) ? $this->input->post('suspension_reason') : '';
					$data['notelp_supplier']	  = ($this->input->post('notelp_supplier')) ? $this->input->post('notelp_supplier') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['nama_supplier']			= validasi_sql($data['nama_supplier']);
						$insert['paternal_last_name']       = validasi_sql($data['paternal_last_name']);
						$insert['maternal_last_name']       = validasi_sql($data['maternal_last_name']);
						$insert['curp']                     = validasi_sql($data['curp']);
						$insert['commercial_name']          = validasi_sql($data['commercial_name']);
						$insert['person_type']              = validasi_sql($data['person_type']);
						$insert['rfc']                      = validasi_sql($data['rfc']);
						$insert['street']                   = validasi_sql($data['street']);
						$insert['num_ext']                  = validasi_sql($data['num_ext']);
						$insert['num_in']                   = validasi_sql($data['num_in']);
						$insert['neighborhood']             = validasi_sql($data['neighborhood']);
						$insert['locality']                 = validasi_sql($data['locality']);
						$insert['city']                     = validasi_sql($data['city']);
						$insert['federal_entity']           = validasi_sql($data['federal_entity']);
						$insert['cp']                       = validasi_sql($data['cp']);
						$insert['municipality']             = validasi_sql($data['municipality']);
						$insert['email']                    = validasi_sql($data['email']);
						$insert['created_by']               = validasi_sql($data['created_by']);
						$insert['status']                   = validasi_sql($data['status']);
						$insert['modified_by']              = validasi_sql($data['modified_by']);
						$insert['disablement_date']         = validasi_sql($data['disablement_date']);
						$insert['disablement_reason']       = validasi_sql($data['disablement_reason']);
						$insert['suspension_date']          = validasi_sql($data['suspension_date']);
						$insert['suspension_reason']        = validasi_sql($data['suspension_reason']);
						$insert['notelp_supplier']		 	= validasi_sql($data['notelp_supplier']);
						$this->ADM->insert_supplier($insert);
						$this->session->set_flashdata('success', 'New supplier has been added successfully,');
						redirect("website/supplier");
					}
				} else {
					redirect("website/supplier");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				= 'nama_supplier';
					$where_supplier['id_supplier']	= $filter2;
					$supplier  =  $this->ADM->get_supplier('*', $where_supplier);
					$data['id_supplier']	     = ($this->input->post('id_supplier')) ? $this->input->post('id_supplier') : $supplier->id_supplier;
					$data['nama_supplier']	     = ($this->input->post('nama_supplier')) ? $this->input->post('nama_supplier') : $supplier->nama_supplier;
					$data['paternal_last_name']	 = ($this->input->post('paternal_last_name')) ? $this->input->post('paternal_last_name') : $supplier->paternal_last_name;
					$data['maternal_last_name']	 = ($this->input->post('maternal_last_name')) ? $this->input->post('maternal_last_name') : $supplier->maternal_last_name;
					$data['curp']                = ($this->input->post('curp')) ? $this->input->post('curp') : $supplier->curp;
					$data['commercial_name']     = ($this->input->post('commercial_name')) ? $this->input->post('commercial_name') : $supplier->commercial_name;
					$data['person_type']         = ($this->input->post('person_type')) ? $this->input->post('person_type') : $supplier->person_type;
					$data['rfc']                 = ($this->input->post('rfc')) ? $this->input->post('rfc') : $supplier->rfc;
					$data['street']              = ($this->input->post('street')) ? $this->input->post('street') : $supplier->street;
					$data['num_ext']             = ($this->input->post('num_ext')) ? $this->input->post('num_ext') : $supplier->num_ext;
					$data['num_in']	             = ($this->input->post('num_in')) ? $this->input->post('num_in') : $supplier->num_in;
					$data['neighborhood']        = ($this->input->post('neighborhood')) ? $this->input->post('neighborhood') : $supplier->neighborhood;
					$data['locality']            = ($this->input->post('locality')) ? $this->input->post('locality') : $supplier->locality;
					$data['city']                = ($this->input->post('city')) ? $this->input->post('city') : $supplier->city;
					$data['federal_entity']      = ($this->input->post('federal_entity')) ? $this->input->post('federal_entity') : $supplier->federal_entity;
					$data['cp']                  = ($this->input->post('cp')) ? $this->input->post('cp') : $supplier->cp;
					$data['municipality']        = ($this->input->post('municipality')) ? $this->input->post('municipality') : $supplier->municipality;
					$data['email']               = ($this->input->post('email')) ? $this->input->post('email') : $supplier->email;
					$data['created_by']          = ($this->input->post('created_by')) ? $this->input->post('created_by') : $supplier->created_by;
					$data['status']              = ($this->input->post('status')) ? $this->input->post('status') : $supplier->status;
					$data['modified_by']         = ($this->input->post('modified_by')) ? $this->input->post('modified_by') : $supplier->modified_by;
					$data['disablement_date']    = ($this->input->post('disablement_date')) ? $this->input->post('disablement_date') : $supplier->disablement_date;
					$data['disablement_reason']  = ($this->input->post('disablement_reason')) ? $this->input->post('disablement_reason') : $supplier->disablement_reason;
					$data['suspension_date']     = ($this->input->post('suspension_date')) ? $this->input->post('suspension_date') : $supplier->suspension_date;
					$data['suspension_reason']   = ($this->input->post('suspension_reason')) ? $this->input->post('suspension_reason') : $supplier->suspension_reason;
					$data['notelp_supplier']	 = ($this->input->post('notelp_supplier')) ? $this->input->post('notelp_supplier') : $supplier->notelp_supplier;
					$data['supplier_created']    = ($this->input->post('supplier_created')) ? $this->input->post('supplier_created') : $supplier->supplier_created;
					$data['supplier_updated']    = ($this->input->post('supplier_updated')) ? $this->input->post('supplier_updated') : $supplier->supplier_updated;
					$simpan						 = $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_supplier']	  = $data['id_supplier'];
						$edit['nama_supplier']	      = $data['nama_supplier'];
						$edit['paternal_last_name']   = $data['paternal_last_name'];
						$edit['maternal_last_name']   = $data['maternal_last_name'];
						$edit['curp']                 = $data['curp'];
						$edit['commercial_name']      = $data['commercial_name'];
						$edit['person_type']          = $data['person_type'];
						$edit['rfc']                  = $data['rfc'];
						$edit['street']               = $data['street'];
						$edit['num_ext']              = $data['num_ext'];
						$edit['num_in']               = $data['num_in'];
						$edit['neighborhood']         = $data['neighborhood'];
						$edit['locality']             = $data['locality'];
						$edit['city']                 = $data['city'];
						$edit['federal_entity']       = $data['federal_entity'];
						$edit['cp']                   = $data['cp'];
						$edit['municipality']         = $data['municipality'];
						$edit['email']                = $data['email'];
						$edit['created_by']           = $data['created_by'];
						$edit['status']               = $data['status'];
						$edit['modified_by']          = $data['modified_by'];
						$edit['disablement_date']     = $data['disablement_date'];
						$edit['disablement_reason']   = $data['disablement_reason'];
						$edit['suspension_date']      = $data['suspension_date'];
						$edit['suspension_reason']    = $data['suspension_reason'];
						$edit['notelp_supplier']	  = $data['notelp_supplier'];
						$edit['supplier_created']     = $data['supplier_created'];
						$edit['supplier_updated']     = $data['supplier_updated'];
						$this->ADM->update_supplier($where_edit, $edit);
						$this->session->set_flashdata('success', 'Supplier has been successfully edited!,');
						redirect("website/supplier");
					}
				} else {
					redirect("website/supplier");
				}
			} elseif ($data['action'] == 'edit_fisica') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				= 'nama_supplier';
					$where_supplier['id_supplier']	= $filter2;
					$supplier  =  $this->ADM->get_supplier('*', $where_supplier);
					$data['id_supplier']	     = ($this->input->post('id_supplier')) ? $this->input->post('id_supplier') : $supplier->id_supplier;
					$data['nama_supplier']	     = ($this->input->post('nama_supplier')) ? $this->input->post('nama_supplier') : $supplier->nama_supplier;
					$data['paternal_last_name']	 = ($this->input->post('paternal_last_name')) ? $this->input->post('paternal_last_name') : $supplier->paternal_last_name;
					$data['maternal_last_name']	 = ($this->input->post('maternal_last_name')) ? $this->input->post('maternal_last_name') : $supplier->maternal_last_name;
					$data['curp']                = ($this->input->post('curp')) ? $this->input->post('curp') : $supplier->curp;
					$data['commercial_name']     = ($this->input->post('commercial_name')) ? $this->input->post('commercial_name') : $supplier->commercial_name;
					$data['person_type']         = ($this->input->post('person_type')) ? $this->input->post('person_type') : $supplier->person_type;
					$data['rfc']                 = ($this->input->post('rfc')) ? $this->input->post('rfc') : $supplier->rfc;
					$data['street']              = ($this->input->post('street')) ? $this->input->post('street') : $supplier->street;
					$data['num_ext']             = ($this->input->post('num_ext')) ? $this->input->post('num_ext') : $supplier->num_ext;
					$data['num_in']	             = ($this->input->post('num_in')) ? $this->input->post('num_in') : $supplier->num_in;
					$data['neighborhood']        = ($this->input->post('neighborhood')) ? $this->input->post('neighborhood') : $supplier->neighborhood;
					$data['locality']            = ($this->input->post('locality')) ? $this->input->post('locality') : $supplier->locality;
					$data['city']                = ($this->input->post('city')) ? $this->input->post('city') : $supplier->city;
					$data['federal_entity']      = ($this->input->post('federal_entity')) ? $this->input->post('federal_entity') : $supplier->federal_entity;
					$data['cp']                  = ($this->input->post('cp')) ? $this->input->post('cp') : $supplier->cp;
					$data['municipality']        = ($this->input->post('municipality')) ? $this->input->post('municipality') : $supplier->municipality;
					$data['email']               = ($this->input->post('email')) ? $this->input->post('email') : $supplier->email;
					$data['created_by']          = ($this->input->post('created_by')) ? $this->input->post('created_by') : $supplier->created_by;
					$data['status']              = ($this->input->post('status')) ? $this->input->post('status') : $supplier->status;
					$data['modified_by']         = ($this->input->post('modified_by')) ? $this->input->post('modified_by') : $supplier->modified_by;
					$data['disablement_date']    = ($this->input->post('disablement_date')) ? $this->input->post('disablement_date') : $supplier->disablement_date;
					$data['disablement_reason']  = ($this->input->post('disablement_reason')) ? $this->input->post('disablement_reason') : $supplier->disablement_reason;
					$data['suspension_date']     = ($this->input->post('suspension_date')) ? $this->input->post('suspension_date') : $supplier->suspension_date;
					$data['suspension_reason']   = ($this->input->post('suspension_reason')) ? $this->input->post('suspension_reason') : $supplier->suspension_reason;
					$data['notelp_supplier']	 = ($this->input->post('notelp_supplier')) ? $this->input->post('notelp_supplier') : $supplier->notelp_supplier;
					$data['supplier_created']    = ($this->input->post('supplier_created')) ? $this->input->post('supplier_created') : $supplier->supplier_created;
					$data['supplier_updated']    = ($this->input->post('supplier_updated')) ? $this->input->post('supplier_updated') : $supplier->supplier_updated;
					$simpan						 = $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_supplier']	  = $data['id_supplier'];
						$edit['nama_supplier']	      = $data['nama_supplier'];
						$edit['paternal_last_name']   = $data['paternal_last_name'];
						$edit['maternal_last_name']   = $data['maternal_last_name'];
						$edit['curp']                 = $data['curp'];
						$edit['commercial_name']      = $data['commercial_name'];
						$edit['person_type']          = $data['person_type'];
						$edit['rfc']                  = $data['rfc'];
						$edit['street']               = $data['street'];
						$edit['num_ext']              = $data['num_ext'];
						$edit['num_in']               = $data['num_in'];
						$edit['neighborhood']         = $data['neighborhood'];
						$edit['locality']             = $data['locality'];
						$edit['city']                 = $data['city'];
						$edit['federal_entity']       = $data['federal_entity'];
						$edit['cp']                   = $data['cp'];
						$edit['municipality']         = $data['municipality'];
						$edit['email']                = $data['email'];
						$edit['created_by']           = $data['created_by'];
						$edit['status']               = $data['status'];
						$edit['modified_by']          = $data['modified_by'];
						$edit['disablement_date']     = $data['disablement_date'];
						$edit['disablement_reason']   = $data['disablement_reason'];
						$edit['suspension_date']      = $data['suspension_date'];
						$edit['suspension_reason']    = $data['suspension_reason'];
						$edit['notelp_supplier']	  = $data['notelp_supplier'];
						$edit['supplier_created']     = $data['supplier_created'];
						$edit['supplier_updated']     = $data['supplier_updated'];
						$this->ADM->update_supplier($where_edit, $edit);
						$this->session->set_flashdata('success', 'Supplier has been successfully edited!,');
						redirect("website/supplier");
					}
				} else {
					redirect("website/supplier");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_supplier']		= validasi_sql($filter2);
					$this->ADM->delete_supplier($where_delete);
					$this->session->set_flashdata('success', 'The supplier has been successfully removed!,');
					redirect("website/supplier");
				} else {
					redirect("website/supplier");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION MASTER CUSTOMER
	public function customer($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Cliente';
			$data['content'] 			= 'admin/content/website/customer';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'nama_customer' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('nama_customer' => 'Nombre', 'status' => 'Status', 'person_type' => 'Tipo de persona');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'nama_customer';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_customer[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_customer('', $like_customer);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				= 'customer';
					$data['nama_customer']	      = ($this->input->post('nama_customer')) ? $this->input->post('nama_customer') : '';
					$data['paternal_last_name']   = ($this->input->post('paternal_last_name')) ? $this->input->post('paternal_last_name') : '';
					$data['maternal_last_name']   = ($this->input->post('maternal_last_name')) ? $this->input->post('paternal_last_name') : '';
					$data['curp']                 = ($this->input->post('curp')) ? $this->input->post('curp') : '';
					$data['commercial_name']      = ($this->input->post('commercial_name')) ? $this->input->post('commercial_name') : '';
					$data['person_type']          = ($this->input->post('person_type')) ? $this->input->post('person_type') : '';
					$data['rfc']                  = ($this->input->post('rfc')) ? $this->input->post('rfc') : '';
					$data['street']               = ($this->input->post('street')) ? $this->input->post('street') : '';
					$data['num_ext']              = ($this->input->post('num_ext')) ? $this->input->post('num_ext') : '';
					$data['num_in']               = ($this->input->post('num_in')) ? $this->input->post('num_in') : '';
					$data['neighborhood']         = ($this->input->post('neighborhood')) ? $this->input->post('neighborhood') : '';
					$data['locality']             = ($this->input->post('locality')) ? $this->input->post('locality') : '';
					$data['city']                 = ($this->input->post('city')) ? $this->input->post('city') : '';
					$data['federal_entity']       = ($this->input->post('federal_entity')) ? $this->input->post('federal_entity') : '';
					$data['cp']                   = ($this->input->post('cp')) ? $this->input->post('cp') : '';
					$data['municipality']         = ($this->input->post('municipality')) ? $this->input->post('municipality') : '';
					$data['email']                = ($this->input->post('email')) ? $this->input->post('email') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['modified_by']          = ($this->input->post('modified_by')) ? $this->input->post('modified_by') : '';
					$data['disablement_date']     = ($this->input->post('disablement_date')) ? $this->input->post('disablement_date') : '';
					$data['disablement_reason']   = ($this->input->post('disablement_reason')) ? $this->input->post('disablement_reason') : '';
					$data['suspension_date']      = ($this->input->post('suspension_date')) ? $this->input->post('suspension_date') : '';
					$data['suspension_reason']    = ($this->input->post('suspension_reason')) ? $this->input->post('suspension_reason') : '';
					$data['notelp_customer']	  = ($this->input->post('notelp_customer')) ? $this->input->post('notelp_customer') : '';
					$simpan						= $this->input->post('simpan');
					if ($simpan) {
						$insert['nama_customer']			= validasi_sql($data['nama_customer']);
						$insert['paternal_last_name']       = validasi_sql($data['paternal_last_name']);
						$insert['maternal_last_name']       = validasi_sql($data['maternal_last_name']);
						$insert['curp']                     = validasi_sql($data['curp']);
						$insert['commercial_name']          = validasi_sql($data['commercial_name']);
						$insert['person_type']              = validasi_sql($data['person_type']);
						$insert['rfc']                      = validasi_sql($data['rfc']);
						$insert['street']                   = validasi_sql($data['street']);
						$insert['num_ext']                  = validasi_sql($data['num_ext']);
						$insert['num_in']                   = validasi_sql($data['num_in']);
						$insert['neighborhood']             = validasi_sql($data['neighborhood']);
						$insert['locality']                 = validasi_sql($data['locality']);
						$insert['city']                     = validasi_sql($data['city']);
						$insert['federal_entity']           = validasi_sql($data['federal_entity']);
						$insert['cp']                       = validasi_sql($data['cp']);
						$insert['municipality']             = validasi_sql($data['municipality']);
						$insert['email']                    = validasi_sql($data['email']);
						$insert['created_by']               = validasi_sql($data['created_by']);
						$insert['status']                   = validasi_sql($data['status']);
						$insert['modified_by']              = validasi_sql($data['modified_by']);
						$insert['disablement_date']         = validasi_sql($data['disablement_date']);
						$insert['disablement_reason']       = validasi_sql($data['disablement_reason']);
						$insert['suspension_date']          = validasi_sql($data['suspension_date']);
						$insert['suspension_reason']        = validasi_sql($data['suspension_reason']);
						$insert['notelp_customer']			= validasi_sql($data['notelp_customer']);
						$this->ADM->insert_customer($insert);
						$this->session->set_flashdata('success', 'New customer has been added successfully!,');
						redirect("website/customer");
					}
				} else {
					redirect("website/customer");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				= 'nama_customer';
					$where_customer['id_customer']	= $filter2;
					$customer				     =  $this->ADM->get_customer('*', $where_customer);
					$data['id_customer']	     = ($this->input->post('id_customer')) ? $this->input->post('id_customer') : $customer->id_customer;
					$data['nama_customer']	     = ($this->input->post('nama_customer')) ? $this->input->post('nama_customer') : $customer->nama_customer;
					$data['paternal_last_name']	 = ($this->input->post('paternal_last_name')) ? $this->input->post('paternal_last_name') : $customer->paternal_last_name;
					$data['maternal_last_name']	 = ($this->input->post('maternal_last_name')) ? $this->input->post('maternal_last_name') : $customer->maternal_last_name;
					$data['curp']                = ($this->input->post('curp')) ? $this->input->post('curp') : $customer->curp;
					$data['commercial_name']     = ($this->input->post('commercial_name')) ? $this->input->post('commercial_name') : $customer->commercial_name;
					$data['person_type']         = ($this->input->post('person_type')) ? $this->input->post('person_type') : $customer->person_type;
					$data['rfc']                 = ($this->input->post('rfc')) ? $this->input->post('rfc') : $customer->rfc;
					$data['street']              = ($this->input->post('street')) ? $this->input->post('street') : $customer->street;
					$data['num_ext']             = ($this->input->post('num_ext')) ? $this->input->post('num_ext') : $customer->num_ext;
					$data['num_in']	             = ($this->input->post('num_in')) ? $this->input->post('num_in') : $customer->num_in;
					$data['neighborhood']        = ($this->input->post('neighborhood')) ? $this->input->post('neighborhood') : $customer->neighborhood;
					$data['locality']            = ($this->input->post('locality')) ? $this->input->post('locality') : $customer->locality;
					$data['city']                = ($this->input->post('city')) ? $this->input->post('city') : $customer->city;
					$data['federal_entity']      = ($this->input->post('federal_entity')) ? $this->input->post('federal_entity') : $customer->federal_entity;
					$data['cp']                  = ($this->input->post('cp')) ? $this->input->post('cp') : $customer->cp;
					$data['municipality']        = ($this->input->post('municipality')) ? $this->input->post('municipality') : $customer->municipality;
					$data['email']               = ($this->input->post('email')) ? $this->input->post('email') : $customer->email;
					$data['created_by']          = ($this->input->post('created_by')) ? $this->input->post('created_by') : $customer->created_by;
					$data['status']              = ($this->input->post('status')) ? $this->input->post('status') : $customer->status;
					$data['modified_by']         = ($this->input->post('modified_by')) ? $this->input->post('modified_by') : $customer->modified_by;
					$data['disablement_date']    = ($this->input->post('disablement_date')) ? $this->input->post('disablement_date') : $customer->disablement_date;
					$data['disablement_reason']  = ($this->input->post('disablement_reason')) ? $this->input->post('disablement_reason') : $customer->disablement_reason;
					$data['suspension_date']     = ($this->input->post('suspension_date')) ? $this->input->post('suspension_date') : $customer->suspension_date;
					$data['suspension_reason']   = ($this->input->post('suspension_reason')) ? $this->input->post('suspension_reason') : $customer->suspension_reason;
					$data['customer_created']    = ($this->input->post('customer_created')) ? $this->input->post('customer_created') : $customer->customer_created;
					$data['customer_updated']    = ($this->input->post('customer_updated')) ? $this->input->post('customer_updated') : $customer->customer_updated;
					$data['notelp_customer']	 = ($this->input->post('notelp_customer')) ? $this->input->post('notelp_customer') : $customer->notelp_customer;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_customer']	= $data['id_customer'];
						$edit['nama_customer']	= $data['nama_customer'];
						$edit['paternal_last_name']   = $data['paternal_last_name'];
						$edit['maternal_last_name']   = $data['maternal_last_name'];
						$edit['curp']                 = $data['curp'];
						$edit['commercial_name']      = $data['commercial_name'];
						$edit['person_type']          = $data['person_type'];
						$edit['rfc']                  = $data['rfc'];
						$edit['street']               = $data['street'];
						$edit['num_ext']              = $data['num_ext'];
						$edit['num_in']               = $data['num_in'];
						$edit['neighborhood']         = $data['neighborhood'];
						$edit['locality']             = $data['locality'];
						$edit['city']                 = $data['city'];
						$edit['federal_entity']       = $data['federal_entity'];
						$edit['cp']                   = $data['cp'];
						$edit['municipality']         = $data['municipality'];
						$edit['email']                = $data['email'];
						$edit['created_by']           = $data['created_by'];
						$edit['status']               = $data['status'];
						$edit['modified_by']          = $data['modified_by'];
						$edit['disablement_date']     = $data['disablement_date'];
						$edit['disablement_reason']   = $data['disablement_reason'];
						$edit['suspension_date']      = $data['suspension_date'];
						$edit['suspension_reason']    = $data['suspension_reason'];
						$edit['customer_created']     = $data['customer_created'];
						$edit['customer_updated']     = $data['customer_updated'];
						$edit['notelp_customer']	= $data['notelp_customer'];
						$this->ADM->update_customer($where_edit, $edit);
						$this->session->set_flashdata('success', 'Customer has been successfully edited!,');
						redirect("website/customer");
					}
				} else {
					redirect("website/customer");
				}
			} elseif ($data['action'] == 'edit_fisica') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				= 'nama_customer';
					$where_customer['id_customer']	= $filter2;
					$customer				     = $this->ADM->get_customer('*', $where_customer);
					$data['id_customer']	     = ($this->input->post('id_customer')) ? $this->input->post('id_customer') : $customer->id_customer;
					$data['nama_customer']	     = ($this->input->post('nama_customer')) ? $this->input->post('nama_customer') : $customer->nama_customer;
					$data['paternal_last_name']	 = ($this->input->post('paternal_last_name')) ? $this->input->post('paternal_last_name') : $customer->paternal_last_name;
					$data['maternal_last_name']	 = ($this->input->post('maternal_last_name')) ? $this->input->post('maternal_last_name') : $customer->maternal_last_name;
					$data['curp']                = ($this->input->post('curp')) ? $this->input->post('curp') : $customer->curp;
					$data['commercial_name']     = ($this->input->post('commercial_name')) ? $this->input->post('commercial_name') : $customer->commercial_name;
					$data['person_type']         = ($this->input->post('person_type')) ? $this->input->post('person_type') : $customer->person_type;
					$data['rfc']                 = ($this->input->post('rfc')) ? $this->input->post('rfc') : $customer->rfc;
					$data['street']              = ($this->input->post('street')) ? $this->input->post('street') : $customer->street;
					$data['num_ext']             = ($this->input->post('num_ext')) ? $this->input->post('num_ext') : $customer->num_ext;
					$data['num_in']	             = ($this->input->post('num_in')) ? $this->input->post('num_in') : $customer->num_in;
					$data['neighborhood']        = ($this->input->post('neighborhood')) ? $this->input->post('neighborhood') : $customer->neighborhood;
					$data['locality']            = ($this->input->post('locality')) ? $this->input->post('locality') : $customer->locality;
					$data['city']                = ($this->input->post('city')) ? $this->input->post('city') : $customer->city;
					$data['federal_entity']      = ($this->input->post('federal_entity')) ? $this->input->post('federal_entity') : $customer->federal_entity;
					$data['cp']                  = ($this->input->post('cp')) ? $this->input->post('cp') : $customer->cp;
					$data['municipality']        = ($this->input->post('municipality')) ? $this->input->post('municipality') : $customer->municipality;
					$data['email']               = ($this->input->post('email')) ? $this->input->post('email') : $customer->email;
					$data['created_by']          = ($this->input->post('created_by')) ? $this->input->post('created_by') : $customer->created_by;
					$data['status']              = ($this->input->post('status')) ? $this->input->post('status') : $customer->status;
					$data['modified_by']         = ($this->input->post('modified_by')) ? $this->input->post('modified_by') : $customer->modified_by;
					$data['disablement_date']    = ($this->input->post('disablement_date')) ? $this->input->post('disablement_date') : $customer->disablement_date;
					$data['disablement_reason']  = ($this->input->post('disablement_reason')) ? $this->input->post('disablement_reason') : $customer->disablement_reason;
					$data['suspension_date']     = ($this->input->post('suspension_date')) ? $this->input->post('suspension_date') : $customer->suspension_date;
					$data['suspension_reason']   = ($this->input->post('suspension_reason')) ? $this->input->post('suspension_reason') : $customer->suspension_reason;
					$data['customer_created']    = ($this->input->post('customer_created')) ? $this->input->post('customer_created') : $customer->customer_created;
					$data['customer_updated']    = ($this->input->post('customer_updated')) ? $this->input->post('customer_updated') : $customer->customer_updated;
					$data['notelp_customer']	 = ($this->input->post('notelp_customer')) ? $this->input->post('notelp_customer') : $customer->notelp_customer;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_customer']	= $data['id_customer'];
						$edit['nama_customer']	= $data['nama_customer'];
						$edit['paternal_last_name']   = $data['paternal_last_name'];
						$edit['maternal_last_name']   = $data['maternal_last_name'];
						$edit['curp']                 = $data['curp'];
						$edit['commercial_name']      = $data['commercial_name'];
						$edit['person_type']          = $data['person_type'];
						$edit['rfc']                  = $data['rfc'];
						$edit['street']               = $data['street'];
						$edit['num_ext']              = $data['num_ext'];
						$edit['num_in']               = $data['num_in'];
						$edit['neighborhood']         = $data['neighborhood'];
						$edit['locality']             = $data['locality'];
						$edit['city']                 = $data['city'];
						$edit['federal_entity']       = $data['federal_entity'];
						$edit['cp']                   = $data['cp'];
						$edit['municipality']         = $data['municipality'];
						$edit['email']                = $data['email'];
						$edit['created_by']           = $data['created_by'];
						$edit['status']               = $data['status'];
						$edit['modified_by']          = $data['modified_by'];
						$edit['disablement_date']     = $data['disablement_date'];
						$edit['disablement_reason']   = $data['disablement_reason'];
						$edit['suspension_date']      = $data['suspension_date'];
						$edit['suspension_reason']    = $data['suspension_reason'];
						$edit['customer_created']     = $data['customer_created'];
						$edit['customer_updated']     = $data['customer_updated'];
						$edit['notelp_customer']	= $data['notelp_customer'];
						$this->ADM->update_customer($where_edit, $edit);
						$this->session->set_flashdata('success', 'Customer has been successfully edited!,');
						redirect("website/customer");
					}
				} else {
					redirect("website/customer");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_customer']		= validasi_sql($filter2);
					$this->ADM->delete_customer($where_delete);
					$this->session->set_flashdata('success', 'The customer has been successfully deleted!,');
					redirect("website/customer");
				} else {
					redirect("website/customer");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION TRANSACTION Incoming Goods

	/*public function masuk($filter1='', $filter2='', $filter3='') {
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] = $this->session->userdata('admin_user');
			$data['admin'] = $this->ADM->get_admin('', $where_admin);
			$data['web'] = $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info'] = FALSE;
			$data['breadcrumb'] = 'Mercancías entrantes';
			$data['content'] = 'admin/content/website/masuk';
			$data['menu_terpilih'] = '1';
			$data['submenu_terpilih'] = '13';
			$data['action'] = (empty($filter1)) ? 'view' : $filter1;
			$data['validate'] = array('id_barang' => 'Item name');
			if ($data['action'] == 'view') {
				$data['berdasarkan'] = array('id_barang' => 'Nombre de producto');
				$data['cari'] = ($this->input->post('cari')) ? $this->input->post('cari') : 'id_barang';
				$data['q'] = ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman'] = (empty($filter2)) ? 1 : $filter2;
				$data['batas'] = 10;
				$data['page'] = ($data['halaman'] - 1) * $data['batas'];
				$like_transaksi[$data['cari']] = $data['q'];
				$where_transaksi['status_pergerakan'] = 1;
				$data['jml_data'] = $this->ADM->count_all_transaksi($where_transaksi, $like_transaksi);
				$data['jml_halaman'] = ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1 || $data['admin']->admin_level_kode == 2) {
					$data['onload'] = 'supplier';
					if ($this->input->post('newRow')) {
						$newRows = $this->input->post('newRow');
						foreach ($newRows as $row) {
							$insert['id_barang'] = validasi_sql($row['id_barang']);
							$insert['id_supplier'] = validasi_sql($row['id_supplier']);
							$insert['quantity'] = validasi_sql($row['quantity']);
							$insert['pallet'] = validasi_sql($row['pallet']);
							$insert['measurement_unit'] = validasi_sql($row['measurement_unit']);
							$insert['admin_user'] = $this->session->userdata('admin_user');
							$insert['status_pergerakan'] = 1;
							$this->ADM->insert_transaksi($insert);
	
							$where_barang['id_barang'] = $row['id_barang'];
							$barang = $this->ADM->get_barang('*', $where_barang);
	
							$where_edit['id_barang'] = $row['id_barang'];
							$edit['stock'] = $barang->stock + $row['quantity'];
	
							$this->ADM->update_barang($where_edit, $edit);
						}
						$this->session->set_flashdata('success', 'New Incoming Item has been added successfully!');
						redirect("website/masuk/tambah");
					}
				} else {
					redirect("website/masuk");
				}
			} elseif ($data['action'] == 'hapus') {
				$where_delete['id_transaksi'] = validasi_sql($filter2);
				$this->ADM->delete_transaksi($where_delete);
				$this->session->set_flashdata('success', 'Incoming Item has been successfully removed!');
				redirect("website/masuk");
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}*/




	//FUNCTION GOODS TRANSACTION OUT
	public function masuk($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] = $this->session->userdata('admin_user');
			$data['admin'] = $this->ADM->get_admin('', $where_admin);
			$data['web'] = $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info'] = FALSE;
			$data['breadcrumb'] = 'Mercancías entrantes';
			$data['content'] = 'admin/content/website/masuk';
			$data['menu_terpilih'] = '1';
			$data['submenu_terpilih'] = '13';
			$data['action'] = (empty($filter1)) ? 'view' : $filter1;
			$data['validate'] = array('id_barang' => 'Item name');
			if ($data['action'] == 'view') {
				$data['berdasarkan'] = array('id_barang' => 'Nombre de producto');
				$data['cari'] = ($this->input->post('cari')) ? $this->input->post('cari') : 'id_barang';
				$data['q'] = ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman'] = (empty($filter2)) ? 1 : $filter2;
				$data['batas'] = 10;
				$data['page'] = ($data['halaman'] - 1) * $data['batas'];
				$like_transaksi[$data['cari']] = $data['q'];
				$where_transaksi['status_pergerakan'] = 1;
				$data['jml_data'] = $this->ADM->count_all_transaksi($where_transaksi, $like_transaksi);
				$data['jml_halaman'] = ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1 || $data['admin']->admin_level_kode == 2) {
					$data['onload'] = 'supplier';
					if ($this->input->post('newRow')) {
						$newRows = $this->input->post('newRow');
						foreach ($newRows as $row) {
							$insert['id_barang'] = validasi_sql($row['id_barang']);
							$insert['id_supplier'] = validasi_sql($row['id_supplier']);
							$insert['quantity'] = validasi_sql($row['quantity']);
							$insert['pallet'] = validasi_sql($row['pallet']);
							$insert['measurement_unit'] = validasi_sql($row['measurement_unit']);
							$insert['admin_user'] = $this->session->userdata('admin_user');
							$insert['status_pergerakan'] = 1;

							// Cálculo del total
							$insert['jumlah'] = $row['quantity'] * $row['pallet'];

							$this->ADM->insert_transaksi($insert);

							$where_barang['id_barang'] = $row['id_barang'];
							$barang = $this->ADM->get_barang('*', $where_barang);

							$where_edit['id_barang'] = $row['id_barang'];
							$edit['stock'] = $barang->stock + $row['quantity'];

							$this->ADM->update_barang($where_edit, $edit);
						}
						$this->session->set_flashdata('success', 'New Incoming Item has been added successfully!');
						redirect("website/masuk/tambah");
					}
				} else {
					redirect("website/masuk");
				}
			} elseif ($data['action'] == 'hapus') {
				$where_delete['id_transaksi'] = validasi_sql($filter2);
				$this->ADM->delete_transaksi($where_delete);
				$this->session->set_flashdata('success', 'Incoming Item has been successfully removed!');
				redirect("website/masuk");
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	public function keluar($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Mercancías salientes';
			$data['content'] 			= 'admin/content/website/keluar';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'id_barang' => 'Item name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('id_barang' => 'Nombre de producto');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'id_barang';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_transaksi[$data['cari']]	= $data['q'];
				$where_transaksi['status_pergerakan'] 	= 2;
				$data['jml_data']			= $this->ADM->count_all_transaksi($where_transaksi, $like_transaksi);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1 || $data['admin']->admin_level_kode == 2) {
					$data['onload']				= 'supplier';
					$data['id_barang']	= ($this->input->post('id_barang')) ? $this->input->post('id_barang') : '';
					$data['id_customer']	= ($this->input->post('id_customer')) ? $this->input->post('id_customer') : '';
					$data['jumlah']	= ($this->input->post('jumlah')) ? $this->input->post('jumlah') : '';
					$simpan						= $this->input->post('simpan');
					if ($simpan) {
						$where_barang['id_barang']	= $data['id_barang'];
						$barang	= $this->ADM->get_barang('*', $where_barang);

						$where_limitstock['limitstock_id']	= 1;
						$limitstock	= $this->ADM->get_limitstock('*', $where_limitstock);

						if ($barang->stock >= $data['jumlah']) {
							$insert['id_barang']			= validasi_sql($data['id_barang']);
							$insert['id_customer']			= validasi_sql($data['id_customer']);
							$insert['jumlah']				= validasi_sql($data['jumlah']);
							$insert['admin_user']			= $this->session->userdata('admin_user');
							$insert['status_pergerakan']	= 2;
							$this->ADM->insert_transaksi($insert);


							$where_edit['id_barang']	= $data['id_barang'];
							$edit['stock']	= $barang->stock - $data['jumlah'];
							$this->ADM->update_barang($where_edit, $edit);

							if ($barang->stock <= $limitstock->stock) {
								$message = "Stock with products " . $barang->nama_barang . " less than the minimum stock limit";
								$user_id = 4444;
								$url = "https://www.wms.ngodings.com";
								$headings = "WMS - Stock Warning";
								$img = "https://www.wms.ngodings.com/assets/3691adaa4a69024b73dc5c1ddb3c43ea.png";


								$content = array(
									"en" => "$message"
								);
								$headings = array(
									"en" => "$headings"
								);
								$fields = array(
									'app_id' => "13219ce1-3c03-40bb-9043-13325e84a94c",
									'filters' => array(array("field" => "tag", "key" => "user_id", "relation" => "=", "value" => "$user_id")),
									'url' => $url,
									'contents' => $content,
									'chrome_web_icon' => $img,
									'headings' => $headings
								);
								$fields = json_encode($fields);
								print("\nJSON sent:\n");
								print($fields);
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
								curl_setopt($ch, CURLOPT_HTTPHEADER, array(
									'Content-Type: application/json; charset=utf-8',
									'Authorization: Basic ZTE1NzBjY2MtMTE1YS00NjA0LTllNzctNTJjNTZmZGU0YmFm'
								));
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								curl_setopt($ch, CURLOPT_HEADER, FALSE);
								curl_setopt($ch, CURLOPT_POST, TRUE);
								curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
								curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
								$response = curl_exec($ch);
								curl_close($ch);
							}

							$this->session->set_flashdata('success', '¡El nuevo producto de salida se ha añadido correctamente!'); // New Exit Item has been successfully added!
							redirect("website/keluar");
						} else {
							$this->session->set_flashdata('error', '¡Stock de productos insuficiente!'); // Insufficient stock of goods!
							redirect("website/keluar");
						}
					}
				} else {
					redirect("website/keluar");
				}
			} elseif ($data['action'] == 'hapus') {
				$where_delete['id_transaksi']		= validasi_sql($filter2);
				$this->ADM->delete_transaksi($where_delete);
				$this->session->set_flashdata('success', 'Outgoing Item has been successfully removed!');
				redirect("website/keluar");
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION TRANSACTION ADJUSTMENT
	public function penyesuaian($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Ajustamiento';
			$data['content'] 			= 'admin/content/website/penyesuaian';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'id_barang' => 'Item name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('id_barang' => 'Nombre de producto');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'id_barang';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_transaksi[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_transaksi('', $like_transaksi);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'hapus') {
				$where_delete['id_transaksi']		= validasi_sql($filter2);
				$this->ADM->delete_transaksi($where_delete);
				$this->session->set_flashdata('success', 'Item has been successfully deleted!');
				redirect("website/penyesuaian");
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION INCOMING GOODS REPORT
	public function laporanmasuk($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Reporte de Mercancía Entrante'; //Incoming Goods Report
			$data['content'] 			= 'admin/content/website/laporanmasuk';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'id_barang' => 'Item name' // Item name
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('id_barang' => 'ITEM NAME');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'id_barang';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_transaksi[$data['cari']]	= $data['q'];
				$where_transaksi['status_pergerakan'] 	= 1;
				$data['jml_data']			= $this->ADM->count_all_transaksi($where_transaksi, $like_transaksi);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	public function laporanmasukpdf()
	{
		$web					= $this->ADM->identitaswebsite();
		$where_admin['admin_user']		= $this->session->userdata('admin_user');
		$data['admin']					= $this->ADM->get_admin('', $where_admin);
		$data['title'] = 'Print PDF of Incoming Items';
		$where_transaksi['status_pergerakan'] 	= 1;
		$data['jml_data']			= $this->ADM->count_all_transaksi($where_transaksi, '');
		// echo PDF_HEADER_LOGO;exit;
		$this->load->view('admin/content/website/pdf/laporanmasuk', $data);
		$html = $this->output->get_output();
		// set document information
		$this->tcpdf->SetCreator(PDF_CREATOR);
		$this->tcpdf->SetAuthor('-----');
		$this->tcpdf->SetTitle('Incoming Items');
		$this->tcpdf->SetSubject('Incoming Item');

		$this->tcpdf->SetHeaderData('', 33.33, $web->identitas_deskripsi, "");
		$this->tcpdf->AddPage();
		$this->tcpdf->writeHTML($html, true, false, true, false, '');
		$this->tcpdf->LastPage();
		$this->tcpdf->Output('Incoming_Goods_Report.pdf', 'I');
	}

	//FUNCTION EXIT GOODS REPORT
	public function laporankeluar($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Reporte de Mercancía saliente';
			$data['content'] 			= 'admin/content/website/laporankeluar';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'id_barang' => 'Item name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('id_barang' => 'ITEM NAME');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'id_barang';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_transaksi[$data['cari']]	= $data['q'];
				$where_transaksi['status_pergerakan'] 	= 2;
				$data['jml_data']			= $this->ADM->count_all_transaksi($where_transaksi, $like_transaksi);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	public function laporankeluarpdf()
	{
		$where_admin['admin_user']		= $this->session->userdata('admin_user');
		$data['admin']					= $this->ADM->get_admin('', $where_admin);
		$this->load->library('dompdf_gen');
		$data['title'] = 'Cetak PDF Barang Keluar';
		$where_transaksi['status_pergerakan'] 	= 2;
		$data['jml_data']			= $this->ADM->count_all_transaksi($where_transaksi, '');

		$this->load->view('admin/content/website/pdf/laporankeluar', $data);
		$paper_size  = 'A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
		$html = $this->output->get_output();
		$web = $this->ADM->identitaswebsite();

		$this->tcpdf->SetCreator(PDF_CREATOR);
		$this->tcpdf->SetAuthor('-----');
		$this->tcpdf->SetTitle('Outgoing Items');
		$this->tcpdf->SetSubject('Outgoing Item');

		$this->tcpdf->SetHeaderData('', 33.33, $web->identitas_deskripsi, "");
		$this->tcpdf->AddPage();
		$this->tcpdf->writeHTML($html, true, false, true, false, '');
		$this->tcpdf->LastPage();
		$this->tcpdf->Output('Outgoing_Goods_Report.pdf', 'I');
	}

	//FUNCTION LAPORAN PENYESUAIAN
	public function laporanpenyesuaian($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Reporte de ajustamiento';
			$data['content'] 			= 'admin/content/website/laporanpenyesuaian';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'id_barang' => 'Item name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('id_barang' => 'ITEM NAME');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'id_barang';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_transaksi[$data['cari']]	= $data['q'];
				$where_transaksi['status_pergerakan'] 	= 2;
				$data['jml_data']			= $this->ADM->count_all_transaksi($where_transaksi, $like_transaksi);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}
	//************************************************/
	//***********************************************/
	// FUNCTION TRANSPORT
	public function transport($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Registro de transporte';
			$data['content'] 			= 'admin/content/website/transport';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'platenumber' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']      = array('platenumber' => 'NÚMERO DE PLACA', 'vehiclestatus' => 'ESTADO DEL VEHÍCULO');
				$data['cari']             = ($this->input->post('cari')) ? $this->input->post('cari') : 'platenumber';
				$data['q']                = ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']          = (empty($filter2)) ? 1 : $filter2;
				$data['batas']            = 10;
				$data['page']             = ($data['halaman'] - 1) * $data['batas'];
				$like_transport[$data['cari']]      =      $data['q'];
				$data['jml_data']                   =      $this->ADM->count_all_transport('', $like_transport);
				$data['jml_halaman']                =      ceil($data['jml_data'] / $data['batas']);
				//$data['berdasarkan'] = array('id_transport'=>)
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload'] = 'transport';
					$data['platenumber'] = ($this->input->post('platenumber')) ? $this->input->post('platenumber') : '';
					$data['vehicletype'] = ($this->input->post('vehicletype')) ? $this->input->post('vehicletype') : '';
					$data['loadcapacity'] = ($this->input->post('loadcapacity')) ? $this->input->post('loadcapacity') : '';
					$data['vehiclemodel'] = ($this->input->post('vehiclemodel')) ? $this->input->post('vehiclemodel') : '';
					$data['vehiclestatus'] = ($this->input->post('vehiclestatus')) ? $this->input->post('vehiclestatus') : '';
					$data['created_by']    = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$data['notes'] = ($this->input->post('notes')) ? $this->input->post('notes') : '';
					$simpan              = $this->input->post('simpan');
					if ($simpan) {
						$insert['platenumber']          = validasi_sql($data['platenumber']);
						$insert['vehicletype']          = validasi_sql($data['vehicletype']);
						$insert['loadcapacity']         = validasi_sql($data['loadcapacity']);
						$insert['vehiclemodel']         = validasi_sql($data['vehiclemodel']);
						$insert['vehiclestatus']        = validasi_sql($data['vehiclestatus']);
						$insert['created_by']           = validasi_sql($data['created_by']);
						$insert['notes']                = validasi_sql($data['notes']);
						$this->ADM->insert_transport($insert);
						$this->session->set_flashdata('success', 'New transport has been added successfully!,');
						redirect("website/transport");
					}
				} else {
					redirect("website/transport");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {

					$data['onload']				= 'platenumber';
					$where_transport['id_transport'] = $filter2;
					//echo 'Valor de $filter2: ' . $filter2 . '<br>';

					$transport = $this->ADM->get_transport('*', $where_transport);
					// Verificar los resultados de la consulta
					/* if ($transport) {
					var_dump($transport);
				} else {
					echo 'No se encontraron datos.<br>';
				} */
					/*	$data['id_transport'] = $transport->id_transport;                
					$data['platenumber'] = $transport->platenumber;                
					$data['vehicletype'] = $transport->vehicletype;
					$data['loadcapacity'] = $transport->loadcapacity;
					$data['vehiclemodel'] = $transport->vehiclemodel;
					$data['vehiclestatus'] = $transport->vehiclestatus;
					$data['drivername'] = $transport->drivername;    
					$data['licensenumber'] = $transport->licensenumber;
					$data['licenseexpiry'] = $transport->licenseexpiry;
					$data['tripnumber'] = $transport->tripnumber;
					$data['departureDate'] = $transport->departureDate;
					$data['arrivaldate'] = $transport->arrivaldate;
					$data['origin'] = $transport->origin;    
					$data['destination'] = $transport->destination;
					$data['route'] = $transport->route;
					$data['tripstatus'] = $transport->tripstatus;
					$data['notes'] = $transport->notes;
					$data['attachments'] = $transport->attachments;
		
					// Mostrar los datos para depuración
					echo '<pre>';
					var_dump($data);
					echo '</pre>';*/
					$data['id_transport']	     = ($this->input->post('id_transport')) ? $this->input->post('id_transport') : $transport->id_transport;
					$data['platenumber']	     = ($this->input->post('platenumber')) ? $this->input->post('platenumber') : $transport->platenumber;
					$data['vehicletype']	     = ($this->input->post('vehicletype')) ? $this->input->post('vehicletype') : $transport->vehicletype;
					$data['loadcapacity']	     = ($this->input->post('loadcapacity')) ? $this->input->post('loadcapacity') : $transport->loadcapacity;
					$data['vehiclemodel']        = ($this->input->post('vehiclemodel')) ? $this->input->post('vehiclemodel') : $transport->vehiclemodel;
					$data['vehiclestatus']       = ($this->input->post('vehiclestatus')) ? $this->input->post('vehiclestatus') : $transport->vehiclestatus;
					$data['created_by']          = ($this->input->post('created_by')) ? $this->input->post('created_by') : $transport->created_by;
					$data['created_date']	     = ($this->input->post('created_date')) ? $this->input->post('created_date') : $transport->created_date;
					$data['updated_by']          = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $transport->updated_by;
					$data['updated_date']              = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $transport->updated_date;
					$data['notes']               = ($this->input->post('notes')) ? $this->input->post('notes') : $transport->notes;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						//var_dump($data);
						$where_edit['id_transport']	  = $data['id_transport'];
						$edit['platenumber']	      = $data['platenumber'];
						$edit['vehicletype']          = $data['vehicletype'];
						$edit['loadcapacity']         = $data['loadcapacity'];
						$edit['vehiclemodel']         = $data['vehiclemodel'];
						$edit['vehiclestatus']        = $data['vehiclestatus'];
						$edit['created_by']           = $data['created_by'];
						$edit['created_date']         = $data['created_date'];
						$edit['updated_by']           = $data['updated_by'];
						$edit['updated_date']         = $data['updated_date'];
						$edit['notes']                = $data['notes'];
						$this->ADM->update_transport($where_edit, $edit);
						$this->session->set_flashdata('success', 'transport has been successfully edited!,');
						redirect("website/transport");
					}
				} else {
					redirect("website/transport");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_transport']		= validasi_sql($filter2);
					$this->ADM->delete_transport($where_delete);
					$this->session->set_flashdata('success', 'The transport has been successfully deleted!,');
					redirect("website/transport");
				} else {
					redirect("website/transport");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}
	//************************************************//


	//FUNCTION DRIVER

	public function driver($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Conductor';
			$data['content'] 			= 'admin/content/website/driver';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'name_driver' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('name_driver' => 'Nombre', 'status' => 'Status', 'license_number' => 'Número de licencia');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'name_driver';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_driver[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_driver('', $like_driver);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				= 'driver';
					$data['name_driver']	      = ($this->input->post('name_driver')) ? $this->input->post('name_driver') : '';
					$data['paternal_last_name']   = ($this->input->post('paternal_last_name')) ? $this->input->post('paternal_last_name') : '';
					$data['maternal_last_name']   = ($this->input->post('maternal_last_name')) ? $this->input->post('maternal_last_name') : '';
					$data['email']                = ($this->input->post('email')) ? $this->input->post('email') : '';
					$data['phone_number']         = ($this->input->post('phone_number')) ? $this->input->post('phone_number') : '';
					$data['license_number']       = ($this->input->post('license_number')) ? $this->input->post('license_number') : '';
					$data['date_of_issue']        = ($this->input->post('date_of_issue')) ? $this->input->post('date_of_issue') : '';
					$data['expiration_date']      = ($this->input->post('expiration_date')) ? $this->input->post('expiration_date') : '';
					$data['restrictions']         = ($this->input->post('restrictions')) ? $this->input->post('restrictions') : '';
					$data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$data['status_driver']        = ($this->input->post('status_driver')) ? $this->input->post('status_driver') : '';
					$data['modified_by']          = ($this->input->post('modified_by')) ? $this->input->post('modified_by') : '';
					$data['disablement_date']     = ($this->input->post('disablement_date')) ? $this->input->post('disablement_date') : '';
					$data['disablement_reason']   = ($this->input->post('disablement_reason')) ? $this->input->post('disablement_reason') : '';
					//$data['driver_created']       = ($this->input->post('driver_created'))?$this->input->post('driver_created'):'';
					//$data['driver_updated']       = ($this->input->post('driver_updated'))?$this->input->post('driver_updated'):'';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['name_driver']			    = validasi_sql($data['name_driver']);
						$insert['paternal_last_name']       = validasi_sql($data['paternal_last_name']);
						$insert['maternal_last_name']       = validasi_sql($data['maternal_last_name']);
						$insert['email']                    = validasi_sql($data['email']);
						$insert['phone_number']             = validasi_sql($data['phone_number']);
						$insert['license_number']           = validasi_sql($data['license_number']);
						$insert['date_of_issue']            = validasi_sql($data['date_of_issue']);
						$insert['expiration_date']          = validasi_sql($data['expiration_date']);
						$insert['restrictions']             = validasi_sql($data['restrictions']);
						$insert['note']                     = validasi_sql($data['note']);
						$insert['created_by']               = validasi_sql($data['created_by']);
						$insert['status_driver']            = validasi_sql($data['status_driver']);
						$insert['modified_by']              = validasi_sql($data['modified_by']);
						$insert['disablement_date']         = validasi_sql($data['disablement_date']);
						$insert['disablement_reason']       = validasi_sql($data['disablement_reason']);
						//$insert['driver_created']           = validasi_sql($data['driver_created']);
						//$insert['driver_updated']           = validasi_sql($data['driver_updated']);
						$this->ADM->insert_driver($insert);
						$this->session->set_flashdata('success', 'New customer has been added successfully!,');
						redirect("website/driver");
					}
				} else {
					redirect("website/driver");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'name_driver';
					$where_driver['id_driver']	 = $filter2;
					$driver				         =  $this->ADM->get_driver('*', $where_driver);
					$data['id_driver']	         = ($this->input->post('id_driver')) ? $this->input->post('id_driver') : $driver->id_driver;
					$data['name_driver']	     = ($this->input->post('name_driver')) ? $this->input->post('name_driver') : $driver->name_driver;
					$data['paternal_last_name']	 = ($this->input->post('paternal_last_name')) ? $this->input->post('paternal_last_name') : $driver->paternal_last_name;
					$data['maternal_last_name']	 = ($this->input->post('maternal_last_name')) ? $this->input->post('maternal_last_name') : $driver->maternal_last_name;
					$data['email']               = ($this->input->post('email')) ? $this->input->post('email') : $driver->email;
					$data['phone_number']        = ($this->input->post('phone_number')) ? $this->input->post('phone_number') : $driver->phone_number;
					$data['license_number']      = ($this->input->post('license_number')) ? $this->input->post('license_number') : $driver->license_number;
					$data['date_of_issue']       = ($this->input->post('date_of_issue')) ? $this->input->post('date_of_issue') : $driver->date_of_issue;
					$data['expiration_date']     = ($this->input->post('expiration_date')) ? $this->input->post('expiration_date') : $driver->expiration_date;
					$data['restrictions']        = ($this->input->post('restrictions')) ? $this->input->post('restrictions') : $driver->restrictions;
					$data['note']	             = ($this->input->post('note')) ? $this->input->post('note') : $driver->note;
					$data['created_by']          = ($this->input->post('created_by')) ? $this->input->post('created_by') : $driver->created_by;
					$data['status_driver']       = ($this->input->post('status_driver')) ? $this->input->post('status_driver') : $driver->status_driver;
					$data['modified_by']         = ($this->input->post('modified_by')) ? $this->input->post('modified_by') : $driver->modified_by;
					$data['disablement_date']    = ($this->input->post('disablement_date')) ? $this->input->post('disablement_date') : $driver->disablement_date;
					$data['disablement_reason']  = ($this->input->post('disablement_reason')) ? $this->input->post('disablement_reason') : $driver->disablement_reason;
					$data['driver_created']      = ($this->input->post('driver_created')) ? $this->input->post('driver_created') : $driver->driver_created;
					$data['driver_updated']      = ($this->input->post('driver_updated')) ? $this->input->post('driver_updated') : $driver->driver_updated;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_driver']	  = $data['id_driver'];
						$edit['name_driver']	      = $data['name_driver'];
						$edit['paternal_last_name']   = $data['paternal_last_name'];
						$edit['maternal_last_name']   = $data['maternal_last_name'];
						$edit['email']                = $data['email'];
						$edit['phone_number']         = $data['phone_number'];
						$edit['license_number']       = $data['license_number'];
						$edit['date_of_issue']        = $data['date_of_issue'];
						$edit['expiration_date']      = $data['expiration_date'];
						$edit['restrictions']         = $data['restrictions'];
						$edit['note']                 = $data['note'];
						$edit['created_by']           = $data['created_by'];
						$edit['status_driver']        = $data['status_driver'];
						$edit['modified_by']          = $data['modified_by'];
						$edit['disablement_date']       = $data['disablement_date'];
						$edit['disablement_reason']   = $data['disablement_reason'];
						$edit['driver_created']       = $data['driver_created'];
						$edit['driver_updated']       = $data['driver_updated'];
						$this->ADM->update_driver($where_edit, $edit);
						$this->session->set_flashdata('success', 'Driver has been successfully edited!,');
						redirect("website/driver");
					}
				} else {
					redirect("website/driver");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_driver']		= validasi_sql($filter2);
					$this->ADM->delete_driver($where_delete);
					$this->session->set_flashdata('success', 'The driver has been successfully deleted!,');
					redirect("website/driver");
				} else {
					redirect("website/driver");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	//FUNCTION DESTINATION
	public function destination($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Destino';
			$data['content'] 			= 'admin/content/website/destination';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'destination_name' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('destination_name' => 'Nombre de destino', 'cp' => 'Código postal', 'state' => 'Estado');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'destination_name';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_destination[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_destination('', $like_destination);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				= 'destination';
					$data['destination_name']	  = ($this->input->post('destination_name')) ? $this->input->post('destination_name') : '';
					$data['street']               = ($this->input->post('street')) ? $this->input->post('street') : '';
					$data['num_ext']              = ($this->input->post('num_ext')) ? $this->input->post('num_ext') : '';
					$data['num_int']              = ($this->input->post('num_int')) ? $this->input->post('num_int') : '';
					$data['city']                 = ($this->input->post('city')) ? $this->input->post('city') : '';
					$data['state']                = ($this->input->post('state')) ? $this->input->post('state') : '';
					$data['cp']                   = ($this->input->post('cp')) ? $this->input->post('cp') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['destination_name']		    = validasi_sql($data['destination_name']);
						$insert['street']                   = validasi_sql($data['street']);
						$insert['num_ext']                  = validasi_sql($data['num_ext']);
						$insert['num_int']                  = validasi_sql($data['num_int']);
						$insert['city']                     = validasi_sql($data['city']);
						$insert['state']                    = validasi_sql($data['state']);
						$insert['cp']                       = validasi_sql($data['cp']);
						$insert['created_by']               = validasi_sql($data['created_by']);
						$this->ADM->insert_destination($insert);
						$this->session->set_flashdata('success', 'New destination has been added successfully!,');
						redirect("website/destination");
					}
				} else {
					redirect("website/destination");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'destination_name';
					$where_destination['id_destination']	 = $filter2;
					$destination				 =  $this->ADM->get_destination('*', $where_destination);
					$data['id_destination']	     = ($this->input->post('id_destination')) ? $this->input->post('id_destination') : $destination->id_destination;
					$data['destination_name']    = ($this->input->post('destination_name')) ? $this->input->post('destination_name') : $destination->destination_name;
					$data['street']	             = ($this->input->post('street')) ? $this->input->post('street') : $destination->street;
					$data['num_ext']	         = ($this->input->post('num_ext')) ? $this->input->post('num_ext') : $destination->num_ext;
					$data['num_int']	         = ($this->input->post('num_int')) ? $this->input->post('num_int') : $destination->num_int;
					$data['city']                = ($this->input->post('city')) ? $this->input->post('city') : $destination->city;
					$data['state']               = ($this->input->post('state')) ? $this->input->post('state') : $destination->state;
					$data['cp']      			 = ($this->input->post('cp')) ? $this->input->post('cp') : $destination->cp;
					$data['created_by']     	 = ($this->input->post('created_by')) ? $this->input->post('created_by') : $destination->created_by;
					$data['modified_by']         = ($this->input->post('modified_by')) ? $this->input->post('modified_by') : $destination->modified_by;
					$data['destination_created'] = ($this->input->post('destination_created')) ? $this->input->post('destination_created') : $destination->destination_created;
					$data['destination_updated'] = ($this->input->post('destination_updated')) ? $this->input->post('destination_updated') : $destination->destination_updated;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_destination']	  = $data['id_destination'];
						$edit['destination_name']	      = $data['destination_name'];
						$edit['street']   				  = $data['street'];
						$edit['num_ext']			      = $data['num_ext'];
						$edit['num_int']                  = $data['num_int'];
						$edit['city']                     = $data['city'];
						$edit['state']                    = $data['state'];
						$edit['cp']        				  = $data['cp'];
						$edit['created_by']     		  = $data['created_by'];
						$edit['modified_by']              = $data['modified_by'];
						$edit['destination_created']      = $data['destination_created'];
						$edit['destination_updated']      = $data['destination_updated'];
						$this->ADM->update_destination($where_edit, $edit);
						$this->session->set_flashdata('success', 'Destination has been successfully edited!,');
						redirect("website/destination");
					}
				} else {
					redirect("website/destination");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_destination']		= validasi_sql($filter2);
					$this->ADM->delete_destination($where_delete);
					$this->session->set_flashdata('success', 'The destination has been successfully deleted!,');
					redirect("website/destination");
				} else {
					redirect("website/destination");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	//FUNCTION ORIGIN
	public function origin($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Origen';
			$data['content'] 			= 'admin/content/website/origin';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'name_origin' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('name_origin' => 'Nombre de origen', 'cp' => 'Código postal', 'state' => 'Estado');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'name_origin';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_origin[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_origin('', $like_origin);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				= 'origin';
					$data['name_origin']	      = ($this->input->post('name_origin')) ? $this->input->post('name_origin') : '';
					$data['street']               = ($this->input->post('street')) ? $this->input->post('street') : '';
					$data['num_ext']              = ($this->input->post('num_ext')) ? $this->input->post('num_ext') : '';
					$data['num_int']              = ($this->input->post('num_int')) ? $this->input->post('num_int') : '';
					$data['city']                 = ($this->input->post('city')) ? $this->input->post('city') : '';
					$data['state']                = ($this->input->post('state')) ? $this->input->post('state') : '';
					$data['cp']                   = ($this->input->post('cp')) ? $this->input->post('cp') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['name_origin']		        = validasi_sql($data['name_origin']);
						$insert['street']                   = validasi_sql($data['street']);
						$insert['num_ext']                  = validasi_sql($data['num_ext']);
						$insert['num_int']                  = validasi_sql($data['num_int']);
						$insert['city']                     = validasi_sql($data['city']);
						$insert['state']                    = validasi_sql($data['state']);
						$insert['cp']                       = validasi_sql($data['cp']);
						$insert['status']                       = validasi_sql($data['status']);
						$insert['created_by']               = validasi_sql($data['created_by']);
						$this->ADM->insert_origin($insert);
						$this->session->set_flashdata('success', 'New origin has been added successfully!,');
						redirect("website/origin");
					}
				} else {
					redirect("website/origin");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'name_origin';
					$where_origin['id_origin']	 = $filter2;
					$origin				 =  $this->ADM->get_origin('*', $where_origin);
					$data['id_origin']	         = ($this->input->post('id_origin')) ? $this->input->post('id_origin') : $origin->id_origin;
					$data['name_origin']         = ($this->input->post('name_origin')) ? $this->input->post('name_origin') : $origin->name_origin;
					$data['street']	             = ($this->input->post('street')) ? $this->input->post('street') : $origin->street;
					$data['num_ext']	         = ($this->input->post('num_ext')) ? $this->input->post('num_ext') : $origin->num_ext;
					$data['num_int']	         = ($this->input->post('num_int')) ? $this->input->post('num_int') : $origin->num_int;
					$data['city']                = ($this->input->post('city')) ? $this->input->post('city') : $origin->city;
					$data['state']               = ($this->input->post('state')) ? $this->input->post('state') : $origin->state;
					$data['cp']      			 = ($this->input->post('cp')) ? $this->input->post('cp') : $origin->cp;
					$data['status']      	     = ($this->input->post('status')) ? $this->input->post('status') : $origin->status;
					$data['created_by']     	 = ($this->input->post('created_by')) ? $this->input->post('created_by') : $origin->created_by;
					$data['modified_by']         = ($this->input->post('modified_by')) ? $this->input->post('modified_by') : $origin->modified_by;
					$data['origin_created']      = ($this->input->post('origin_created')) ? $this->input->post('origin_created') : $origin->origin_created;
					$data['origin_updated']      = ($this->input->post('origin_updated')) ? $this->input->post('origin_updated') : $origin->origin_updated;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_origin']	      = $data['id_origin'];
						$edit['name_origin']	          = $data['name_origin'];
						$edit['street']   				  = $data['street'];
						$edit['num_ext']			      = $data['num_ext'];
						$edit['num_int']                  = $data['num_int'];
						$edit['city']                     = $data['city'];
						$edit['state']                    = $data['state'];
						$edit['cp']        				  = $data['cp'];
						$edit['status']        				  = $data['status'];
						$edit['created_by']     		  = $data['created_by'];
						$edit['modified_by']              = $data['modified_by'];
						$edit['origin_created']           = $data['origin_created'];
						$edit['origin_updated']           = $data['origin_updated'];
						$this->ADM->update_origin($where_edit, $edit);
						$this->session->set_flashdata('success', 'origin has been successfully edited!,');
						redirect("website/origin");
					}
				} else {
					redirect("website/origin");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_origin']		= validasi_sql($filter2);
					$this->ADM->delete_origin($where_delete);
					$this->session->set_flashdata('success', 'The origin has been successfully deleted!,');
					redirect("website/origin");
				} else {
					redirect("website/origin");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	//FUNCTION CONSIGNEES
	public function consignees($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Consignatario';
			$data['content'] 			= 'admin/content/website/consignees';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'consignees_name' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('consignees_name' => 'Nombre de consignatario', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'consignees_name';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_consignees[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_consignees('', $like_consignees);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				= 'consignees';
					$data['consignees_name']	  = ($this->input->post('consignees_name')) ? $this->input->post('consignees_name') : '';
					$data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['updated_by']           = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['consignees_name']		    = validasi_sql($data['consignees_name']);
						$insert['note']                     = validasi_sql($data['note']);
						$insert['created_by']               = validasi_sql($data['created_by']);
						$insert['status']                   = validasi_sql($data['status']);
						$insert['updated_by']               = validasi_sql($data['updated_by']);
						$this->ADM->insert_consignees($insert);
						$this->session->set_flashdata('success', 'New consignees has been added successfully!,');
						redirect("website/consignees");
					}
				} else {
					redirect("website/consignees");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'consignees_name';
					$where_consignees['id_consignees']	 = $filter2;
					$consignees				 =  $this->ADM->get_consignees('*', $where_consignees);
					$data['id_consignees']	         = ($this->input->post('id_consignees')) ? $this->input->post('id_consignees') : $consignees->id_consignees;
					$data['consignees_name']         = ($this->input->post('consignees_name')) ? $this->input->post('consignees_name') : $consignees->consignees_name;
					$data['note']	                 = ($this->input->post('note')) ? $this->input->post('note') : $consignees->note;
					$data['created_by']	             = ($this->input->post('created_by')) ? $this->input->post('created_by') : $consignees->created_by;
					$data['created_date']	         = ($this->input->post('created_date')) ? $this->input->post('created_date') : $consignees->created_date;
					$data['status']                  = ($this->input->post('status')) ? $this->input->post('status') : $consignees->status;
					$data['updated_by']              = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $consignees->updated_by;
					$data['updated_date']            = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $consignees->updated_date;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_consignees']	  = $data['id_consignees'];
						$edit['consignees_name']	      = $data['consignees_name'];
						$edit['note']   				  = $data['note'];
						$edit['created_by']			      = $data['created_by'];
						$edit['created_date']             = $data['created_date'];
						$edit['status']                   = $data['status'];
						$edit['updated_by']               = $data['updated_by'];
						$edit['updated_date']        	  = $data['updated_date'];
						$this->ADM->update_consignees($where_edit, $edit);
						$this->session->set_flashdata('success', 'consignees has been successfully edited!,');
						redirect("website/consignees");
					}
				} else {
					redirect("website/consignees");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_consignees']		= validasi_sql($filter2);
					$this->ADM->delete_consignees($where_delete);
					$this->session->set_flashdata('success', 'The consignees has been successfully deleted!,');
					redirect("website/consignees");
				} else {
					redirect("website/consignees");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	//FUNCTION CATEGORY
	public function category($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Categoría de producto';
			$data['content'] 			= 'admin/content/website/category';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'cat_product' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('cat_product' => 'Categoría de producto', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'cat_product';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_category[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_category('', $like_category);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				  = 'category';
					$data['cat_product']	      = ($this->input->post('cat_product')) ? $this->input->post('cat_product') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['cat_product']		        = validasi_sql($data['cat_product']);
						$insert['status']                   = validasi_sql($data['status']);
						$insert['note']                     = validasi_sql($data['note']);
						$insert['created_by']               = validasi_sql($data['created_by']);
						$this->ADM->insert_category($insert);
						$this->session->set_flashdata('success', 'New category has been added successfully!,');
						redirect("website/category");
					}
				} else {
					redirect("website/category");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'cat_product';
					$where_category['id_category']	 = $filter2;
					$category				 =  $this->ADM->get_category('*', $where_category);
					$data['id_category']	         = ($this->input->post('id_category')) ? $this->input->post('id_category') : $category->id_category;
					$data['cat_product']             = ($this->input->post('cat_product')) ? $this->input->post('cat_product') : $category->cat_product;
					$data['status']	                 = ($this->input->post('status')) ? $this->input->post('status') : $category->status;
					$data['note']	                 = ($this->input->post('note')) ? $this->input->post('note') : $category->note;
					$data['created_by']	             = ($this->input->post('created_by')) ? $this->input->post('created_by') : $category->created_by;
					$data['created_date']            = ($this->input->post('created_date')) ? $this->input->post('created_date') : $category->created_date;
					$data['updated_by']              = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $category->updated_by;
					$data['updated_date']            = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $category->updated_date;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_category']	      = $data['id_category'];
						$edit['cat_product']	          = $data['cat_product'];
						$edit['status']   				  = $data['status'];
						$edit['note']			          = $data['note'];
						$edit['created_by']               = $data['created_by'];
						$edit['created_date']                   = $data['created_date'];
						$edit['updated_by']               = $data['updated_by'];
						$edit['updated_date']        	  = $data['updated_date'];
						$this->ADM->update_category($where_edit, $edit);
						$this->session->set_flashdata('success', 'category has been successfully edited!,');
						redirect("website/category");
					}
				} else {
					redirect("website/category");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_category']		= validasi_sql($filter2);
					$this->ADM->delete_category($where_delete);
					$this->session->set_flashdata('success', 'The category has been successfully deleted!,');
					redirect("website/category");
				} else {
					redirect("website/category");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	//FUNCTION PRESENTATION
	public function presentation($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Presentación de producto';
			$data['content'] 			= 'admin/content/website/presentation';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'type_presentation' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('type_presentation' => 'Tipo de presentación', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'type_presentation';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_presentation[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_presentation('', $like_presentation);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				  = 'presentation';
					$data['type_presentation']	  = ($this->input->post('type_presentation')) ? $this->input->post('type_presentation') : '';
					$data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['height']               = ($this->input->post('height')) ? $this->input->post('height') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['type_presentation']		  = validasi_sql($data['type_presentation']);
						$insert['note']                       = validasi_sql($data['note']);
						$insert['status']                     = validasi_sql($data['status']);
						$insert['height']                     = validasi_sql($data['height']);
						$insert['created_by']                 = validasi_sql($data['created_by']);
						$this->ADM->insert_presentation($insert);
						$this->session->set_flashdata('success', 'New presentation has been added successfully!,');
						redirect("website/presentation");
					}
				} else {
					redirect("website/presentation");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'type_presentation';
					$where_presentation['id_presentation']	 = $filter2;
					$presentation				 =  $this->ADM->get_presentation('*', $where_presentation);
					$data['id_presentation']	     = ($this->input->post('id_presentation')) ? $this->input->post('id_presentation') : $presentation->id_presentation;
					$data['type_presentation']       = ($this->input->post('type_presentation')) ? $this->input->post('type_presentation') : $presentation->type_presentation;
					$data['note']	                 = ($this->input->post('note')) ? $this->input->post('note') : $presentation->note;
					$data['status']	                 = ($this->input->post('status')) ? $this->input->post('status') : $presentation->status;
					$data['height']	                 = ($this->input->post('height')) ? $this->input->post('height') : $presentation->height;
					$data['created_by']	             = ($this->input->post('created_by')) ? $this->input->post('created_by') : $presentation->created_by;
					$data['created_date']            = ($this->input->post('created_date')) ? $this->input->post('created_date') : $presentation->created_date;
					$data['updated_by']              = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $presentation->updated_by;
					$data['updated_date']            = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $presentation->updated_date;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_presentation']	      = $data['id_presentation'];
						$edit['type_presentation']	          = $data['type_presentation'];
						$edit['note']   				  = $data['note'];
						$edit['status']			          = $data['status'];
						$edit['height']			          = $data['height'];
						$edit['created_by']               = $data['created_by'];
						$edit['created_date']                   = $data['created_date'];
						$edit['updated_by']               = $data['updated_by'];
						$edit['updated_date']        	  = $data['updated_date'];
						$this->ADM->update_presentation($where_edit, $edit);
						$this->session->set_flashdata('success', 'presentation has been successfully edited!,');
						redirect("website/presentation");
					}
				} else {
					redirect("website/presentation");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_presentation']		= validasi_sql($filter2);
					$this->ADM->delete_presentation($where_delete);
					$this->session->set_flashdata('success', 'The presentation has been successfully deleted!,');
					redirect("website/presentation");
				} else {
					redirect("website/presentation");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION MANEUVER
	public function maneuver($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Tipo de maniobra';
			$data['content'] 			= 'admin/content/website/maneuver';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'type_maneuver' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('type_maneuver' => 'Tipo de maniobra', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'type_maneuver';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_maneuver[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_maneuver('', $like_maneuver);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				  = 'maneuver';
					$data['type_maneuver']	      = ($this->input->post('type_maneuver')) ? $this->input->post('type_maneuver') : '';
					$data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['type_maneuver']		  = validasi_sql($data['type_maneuver']);
						$insert['note']                       = validasi_sql($data['note']);
						$insert['status']                     = validasi_sql($data['status']);
						$insert['created_by']                 = validasi_sql($data['created_by']);
						$this->ADM->insert_maneuver($insert);
						$this->session->set_flashdata('success', 'New maneuver has been added successfully!,');
						redirect("website/maneuver");
					}
				} else {
					redirect("website/maneuver");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'type_maneuver';
					$where_maneuver['id_maneuver']	 = $filter2;
					$maneuver				 =  $this->ADM->get_maneuver('*', $where_maneuver);
					$data['id_maneuver']	         = ($this->input->post('id_maneuver')) ? $this->input->post('id_maneuver') : $maneuver->id_maneuver;
					$data['type_maneuver']           = ($this->input->post('type_maneuver')) ? $this->input->post('type_maneuver') : $maneuver->type_maneuver;
					$data['note']	                 = ($this->input->post('note')) ? $this->input->post('note') : $maneuver->note;
					$data['status']	                 = ($this->input->post('status')) ? $this->input->post('status') : $maneuver->status;
					$data['created_by']	             = ($this->input->post('created_by')) ? $this->input->post('created_by') : $maneuver->created_by;
					$data['created_date']            = ($this->input->post('created_date')) ? $this->input->post('created_date') : $maneuver->created_date;
					$data['updated_by']              = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $maneuver->updated_by;
					$data['updated_date']            = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $maneuver->updated_date;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_maneuver']	      = $data['id_maneuver'];
						$edit['type_maneuver']	          = $data['type_maneuver'];
						$edit['note']   				  = $data['note'];
						$edit['status']			          = $data['status'];
						$edit['created_by']               = $data['created_by'];
						$edit['created_date']             = $data['created_date'];
						$edit['updated_by']               = $data['updated_by'];
						$edit['updated_date']        	  = $data['updated_date'];
						$this->ADM->update_maneuver($where_edit, $edit);
						$this->session->set_flashdata('success', 'maneuver has been successfully edited!,');
						redirect("website/maneuver");
					}
				} else {
					redirect("website/maneuver");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_maneuver']		= validasi_sql($filter2);
					$this->ADM->delete_maneuver($where_delete);
					$this->session->set_flashdata('success', 'The maneuver has been successfully deleted!,');
					redirect("website/maneuver");
				} else {
					redirect("website/maneuver");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	//FUNCTION OPERATION
	public function operation($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Tipo de operación';
			$data['content'] 			= 'admin/content/website/operation';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'type_operation' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('type_operation' => 'Tipo de operación', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'type_operation';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_operation[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_operation('', $like_operation);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				  = 'operation';
					$data['type_operation']	      = ($this->input->post('type_operation')) ? $this->input->post('type_operation') : '';
					$data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['type_operation']		  = validasi_sql($data['type_operation']);
						$insert['note']                       = validasi_sql($data['note']);
						$insert['status']                     = validasi_sql($data['status']);
						$insert['created_by']                 = validasi_sql($data['created_by']);
						$this->ADM->insert_operation($insert);
						$this->session->set_flashdata('success', 'New operation has been added successfully!,');
						redirect("website/operation");
					}
				} else {
					redirect("website/operation");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'type_operation';
					$where_operation['id_operation']	 = $filter2;
					$operation				 =  $this->ADM->get_operation('*', $where_operation);
					$data['id_operation']	         = ($this->input->post('id_operation')) ? $this->input->post('id_operation') : $operation->id_operation;
					$data['type_operation']           = ($this->input->post('type_operation')) ? $this->input->post('type_operation') : $operation->type_operation;
					$data['note']	                 = ($this->input->post('note')) ? $this->input->post('note') : $operation->note;
					$data['status']	                 = ($this->input->post('status')) ? $this->input->post('status') : $operation->status;
					$data['created_by']	             = ($this->input->post('created_by')) ? $this->input->post('created_by') : $operation->created_by;
					$data['created_date']            = ($this->input->post('created_date')) ? $this->input->post('created_date') : $operation->created_date;
					$data['updated_by']              = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $operation->updated_by;
					$data['updated_date']            = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $operation->updated_date;
					$simpan						 =  $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_operation']	      = $data['id_operation'];
						$edit['type_operation']	          = $data['type_operation'];
						$edit['note']   				  = $data['note'];
						$edit['status']			          = $data['status'];
						$edit['created_by']               = $data['created_by'];
						$edit['created_date']             = $data['created_date'];
						$edit['updated_by']               = $data['updated_by'];
						$edit['updated_date']        	  = $data['updated_date'];
						$this->ADM->update_operation($where_edit, $edit);
						$this->session->set_flashdata('success', 'operation has been successfully edited!,');
						redirect("website/operation");
					}
				} else {
					redirect("website/operation");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_operation']		= validasi_sql($filter2);
					$this->ADM->delete_operation($where_delete);
					$this->session->set_flashdata('success', 'The operation has been successfully deleted!,');
					redirect("website/operation");
				} else {
					redirect("website/operation");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	//FUNCTION EVENT
	public function event($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Tipo de evento';
			$data['content'] 			= 'admin/content/website/event';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'type_event' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('type_event' => 'Tipo de evento', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'type_event';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_event[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_event('', $like_event);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				  = 'event';
					$data['type_event']	          = ($this->input->post('type_event')) ? $this->input->post('type_event') : '';
					$data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['type_event']		  = validasi_sql($data['type_event']);
						$insert['note']                       = validasi_sql($data['note']);
						$insert['status']                     = validasi_sql($data['status']);
						$insert['created_by']                 = validasi_sql($data['created_by']);
						$this->ADM->insert_event($insert);
						$this->session->set_flashdata('success', 'New event has been added successfully!,');
						redirect("website/event");
					}
				} else {
					redirect("website/event");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'type_event';
					$where_event['id_event']	 = $filter2;
					$event				 =  $this->ADM->get_event('*', $where_event);
					$data['id_event']	             = ($this->input->post('id_event')) ? $this->input->post('id_event') : $event->id_event;
					$data['type_event']              = ($this->input->post('type_event')) ? $this->input->post('type_event') : $event->type_event;
					$data['note']	                 = ($this->input->post('note')) ? $this->input->post('note') : $event->note;
					$data['status']	                 = ($this->input->post('status')) ? $this->input->post('status') : $event->status;
					$data['created_by']	             = ($this->input->post('created_by')) ? $this->input->post('created_by') : $event->created_by;
					$data['created_date']            = ($this->input->post('created_date')) ? $this->input->post('created_date') : $event->created_date;
					$data['updated_by']              = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $event->updated_by;
					$data['updated_date']            = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $event->updated_date;
					$simpan 	=   $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_event']	          = $data['id_event'];
						$edit['type_event']	              = $data['type_event'];
						$edit['note']   				  = $data['note'];
						$edit['status']			          = $data['status'];
						$edit['created_by']               = $data['created_by'];
						$edit['created_date']             = $data['created_date'];
						$edit['updated_by']               = $data['updated_by'];
						$edit['updated_date']        	  = $data['updated_date'];
						$this->ADM->update_event($where_edit, $edit);
						$this->session->set_flashdata('success', 'event has been successfully edited!,');
						redirect("website/event");
					}
				} else {
					redirect("website/event");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_event']		= validasi_sql($filter2);
					$this->ADM->delete_event($where_delete);
					$this->session->set_flashdata('success', 'The event has been successfully deleted!,');
					redirect("website/event");
				} else {
					redirect("website/event");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	//FUNCTION PLATFORM
	public function platform($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Tipo de Tarima';
			$data['content'] 			= 'admin/content/website/platform';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'type_platform' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('type_platform' => 'Tipo de Tarima', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'type_platform';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_platform[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_platform('', $like_platform);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				  = 'platform';
					$data['type_platform']	      = ($this->input->post('type_platform')) ? $this->input->post('type_platform') : '';
					$data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['type_platform']		  = validasi_sql($data['type_platform']);
						$insert['note']                       = validasi_sql($data['note']);
						$insert['status']                     = validasi_sql($data['status']);
						$insert['created_by']                 = validasi_sql($data['created_by']);
						$this->ADM->insert_platform($insert);
						$this->session->set_flashdata('success', 'New platform has been added successfully!,');
						redirect("website/platform");
					}
				} else {
					redirect("website/platform");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'type_platform';
					$where_platform['id_platform']	 = $filter2;
					$platform				 =  $this->ADM->get_platform('*', $where_platform);
					$data['id_platform']	         = ($this->input->post('id_platform')) ? $this->input->post('id_platform') : $platform->id_platform;
					$data['type_platform']           = ($this->input->post('type_platform')) ? $this->input->post('type_platform') : $platform->type_platform;
					$data['note']	                 = ($this->input->post('note')) ? $this->input->post('note') : $platform->note;
					$data['status']	                 = ($this->input->post('status')) ? $this->input->post('status') : $platform->status;
					$data['created_by']	             = ($this->input->post('created_by')) ? $this->input->post('created_by') : $platform->created_by;
					$data['created_date']            = ($this->input->post('created_date')) ? $this->input->post('created_date') : $platform->created_date;
					$data['updated_by']              = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $platform->updated_by;
					$data['updated_date']            = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $platform->updated_date;
					$simpan 	=   $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_platform']	      = $data['id_platform'];
						$edit['type_platform']	          = $data['type_platform'];
						$edit['note']   				  = $data['note'];
						$edit['status']			          = $data['status'];
						$edit['created_by']               = $data['created_by'];
						$edit['created_date']             = $data['created_date'];
						$edit['updated_by']               = $data['updated_by'];
						$edit['updated_date']        	  = $data['updated_date'];
						$this->ADM->update_platform($where_edit, $edit);
						$this->session->set_flashdata('success', 'platform has been successfully edited!,');
						redirect("website/platform");
					}
				} else {
					redirect("website/platform");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_platform']		= validasi_sql($filter2);
					$this->ADM->delete_platform($where_delete);
					$this->session->set_flashdata('success', 'The platform has been successfully deleted!,');
					redirect("website/platform");
				} else {
					redirect("website/platform");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION MEASUREMENT
	public function measurement($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Unidad de medida';
			$data['content'] 			= 'admin/content/website/measurement';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'type_measurement' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('unit_measurement' => 'Unidad de medida', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'unit_measurement';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_measurement[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_measurement('', $like_measurement);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']		= 'measurement';
					$data['unit_measurement']	          = ($this->input->post('unit_measurement')) ? $this->input->post('unit_measurement') : '';
					$data['unit_measurement_short']	      = ($this->input->post('unit_measurement_short')) ? $this->input->post('unit_measurement_short') : '';
					$data['note']                         = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['status']                       = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['created_by']                   = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan			    = $this->input->post('simpan');
					if ($simpan) {
						$insert['unit_measurement']		     = validasi_sql($data['unit_measurement']);
						$insert['unit_measurement_short']     = validasi_sql($data['unit_measurement_short']);
						$insert['note']                       = validasi_sql($data['note']);
						$insert['status']                     = validasi_sql($data['status']);
						$insert['created_by']                 = validasi_sql($data['created_by']);
						$this->ADM->insert_measurement($insert);
						$this->session->set_flashdata('success', 'New measurement has been added successfully!,');
						redirect("website/measurement");
					}
				} else {
					redirect("website/measurement");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'type_measurement';
					$where_measurement['id_measurement']	 = $filter2;
					$measurement				     =  $this->ADM->get_measurement('*', $where_measurement);
					$data['id_measurement']	         = ($this->input->post('id_measurement')) ? $this->input->post('id_measurement') : $measurement->id_measurement;
					$data['unit_measurement']        = ($this->input->post('unit_measurement')) ? $this->input->post('unit_measurement') : $measurement->unit_measurement;
					$data['unit_measurement_short']  = ($this->input->post('unit_measurement_short')) ? $this->input->post('unit_measurement_short') : $measurement->unit_measurement_short;
					$data['note']	                 = ($this->input->post('note')) ? $this->input->post('note') : $measurement->note;
					$data['status']	                 = ($this->input->post('status')) ? $this->input->post('status') : $measurement->status;
					$data['created_by']	             = ($this->input->post('created_by')) ? $this->input->post('created_by') : $measurement->created_by;
					$data['created_date']            = ($this->input->post('created_date')) ? $this->input->post('created_date') : $measurement->created_date;
					$data['updated_by']              = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $measurement->updated_by;
					$data['updated_date']            = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $measurement->updated_date;
					$simpan 	=   $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_measurement']	  = $data['id_measurement'];
						$edit['unit_measurement']	      = $data['unit_measurement'];
						$edit['unit_measurement_short']	  = $data['unit_measurement_short'];
						$edit['note']   				  = $data['note'];
						$edit['status']			          = $data['status'];
						$edit['created_by']               = $data['created_by'];
						$edit['created_date']             = $data['created_date'];
						$edit['updated_by']               = $data['updated_by'];
						$edit['updated_date']        	  = $data['updated_date'];
						$this->ADM->update_measurement($where_edit, $edit);
						$this->session->set_flashdata('success', 'measurement has been successfully edited!,');
						redirect("website/measurement");
					}
				} else {
					redirect("website/measurement");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_measurement']		= validasi_sql($filter2);
					$this->ADM->delete_measurement($where_delete);
					$this->session->set_flashdata('success', 'The measurement has been successfully deleted!,');
					redirect("website/measurement");
				} else {
					redirect("website/measurement");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION CONTAINER
	public function container($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Contenedor';
			$data['content'] 			= 'admin/content/website/container';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'container_type' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('container_type' => 'Tipo de contendor', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'container_type';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_container[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_container('', $like_container);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']		= 'container';
					$data['container_number']	      = ($this->input->post('container_number')) ? $this->input->post('container_number') : '';
					$data['container_type']	          = ($this->input->post('container_type')) ? $this->input->post('container_type') : '';
					$data['status']                   = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['note']                     = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['security_seal']            = ($this->input->post('security_seal')) ? $this->input->post('security_seal') : '';
					$data['created_by']               = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan	 = $this->input->post('simpan');
					if ($simpan) {
						$insert['container_number']	  = validasi_sql($data['container_number']);
						$insert['container_type']     = validasi_sql($data['container_type']);
						$insert['status']             = validasi_sql($data['status']);
						$insert['note']               = validasi_sql($data['note']);
						$insert['security_seal']      = validasi_sql($data['security_seal']);
						$insert['created_by']         = validasi_sql($data['created_by']);
						$this->ADM->insert_container($insert);
						$this->session->set_flashdata('success', 'New container has been added successfully!,');
						redirect("website/container");
					}
				} else {
					redirect("website/container");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'container_type';
					$where_container['id_container'] = $filter2;
					$container				       =  $this->ADM->get_container('*', $where_container);
					$data['id_container']	       = ($this->input->post('id_container')) ? $this->input->post('id_container') : $container->id_container;
					$data['container_number']      = ($this->input->post('container_number')) ? $this->input->post('container_number') : $container->container_number;
					$data['container_type' ]       = ($this->input->post('container_type')) ? $this->input->post('container_type') : $container->container_type;
					$data['status']	               = ($this->input->post('status')) ? $this->input->post('status') : $container->status;
					$data['note']	               = ($this->input->post('note')) ? $this->input->post('note') : $container->note;
					$data['security_seal' ]       = ($this->input->post('security_seal')) ? $this->input->post('security_seal') : $container->security_seal;
					$data['created_by']	           = ($this->input->post('created_by')) ? $this->input->post('created_by') : $container->created_by;
					$data['created_date']          = ($this->input->post('created_date')) ? $this->input->post('created_date') : $container->created_date;
					$data['updated_by']            = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $container->updated_by;
					$data['updated_date']          = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $container->updated_date;
					$simpan 	=   $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_container']	 = $data['id_container'];
						$edit['container_number']	 = $data['container_number'];
						$edit['container_type']	     = $data['container_type'];
						$edit['status']			     = $data['status'];
						$edit['note']   		 	 = $data['note'];
						$edit['security_seal']   	 = $data['security_seal'];
						$edit['created_by']          = $data['created_by'];
						$edit['created_date']        = $data['created_date'];
						$edit['updated_by']          = $data['updated_by'];
						$edit['updated_date']        = $data['updated_date'];
						$this->ADM->update_container($where_edit, $edit);
						$this->session->set_flashdata('success', 'container has been successfully edited!,');
						redirect("website/container");
					}
				} else {
					redirect("website/container");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_container']		= validasi_sql($filter2);
					$this->ADM->delete_container($where_delete);
					$this->session->set_flashdata('success', 'The container has been successfully deleted!,');
					redirect("website/container");
				} else {
					redirect("website/container");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION PRODUCTS
	public function products($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']			= 'Producto';
			$data['content'] 			= 'admin/content/website/products';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'product_name' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('product_name' => 'Producto', 'status' => 'Estatus', 'name_supplier' => 'Cliente');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'product_name';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_products[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_products('', $like_products);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
				
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']		= 'products';
					$data['product_name']	   = ($this->input->post('product_name'))?$this->input->post('product_name'):'';
					$data['description']	   = ($this->input->post('description'))?$this->input->post('description'):'';
					//$data['id_platform']       = ($this->input->post('id_platform'))?$this->input->post('id_platform'):'';
					//$data['type_pallet']       = $this->ADM->get_type_platform($data['id_platform']);
					
					$data['id_measurement']    = ($this->input->post('id_measurement'))?$this->input->post('id_measurement'):'';
					$data['unit_measurement']  = $this->ADM->get_unit_measurement($data['id_measurement']);
					$data['sku']               = ($this->input->post('sku'))?$this->input->post('sku'):'';
					$data['id_supplier']       = ($this->input->post('id_supplier'))?$this->input->post('id_supplier'):'';
					$data['name_supplier']     = $this->ADM->get_nama_supplier1($data['id_supplier']);
					//$data['name_customer'] = ($this->input->post('name_customer')) ? $this->input->post('name_customer') : '';
                    $data['id_category']       = ($this->input->post('id_category')) ? $this->input->post('id_category') : '';
					$data['cat_product']       = $this->ADM->get_cat_product($data['id_category']);
                    $data['id_presentation']   = ($this->input->post('id_presentation')) ? $this->input->post('id_presentation') : '';
					$data['type_presentation'] = $this->ADM->get_type_presentation($data['id_presentation']);
					$data['state']             = ($this->input->post('state'))?$this->input->post('state'):'';
					$data['status']            = ($this->input->post('status'))?$this->input->post('status'):'';
					$data['note']              = ($this->input->post('note'))?$this->input->post('note'):'';
					$data['created_by']        = ($this->input->post('created_by'))?$this->input->post('created_by'):'';
					$simpan			    = $this->input->post('simpan');
					if ($simpan) {
						$insert['product_name']		  = validasi_sql($data['product_name']);
						$insert['description']        = validasi_sql($data['description']);
						
						//$insert['type_pallet']        = validasi_sql($data['type_pallet']);
						
						$insert['unit_measurement']        = validasi_sql($data['unit_measurement']);
						//$insert['expiration_date']    = validasi_sql($data['expiration_date']);
						$insert['sku']                = validasi_sql($data['sku']);
						$insert['id_supplier']        = validasi_sql($data['id_supplier']);
						$insert['id_measurement']        = validasi_sql($data['id_measurement']);
						$insert['name_supplier']      = validasi_sql($data['name_supplier']);
						$insert['id_category']        = validasi_sql($data['id_category']);
						$insert['cat_product']        = validasi_sql($data['cat_product']);
                        $insert['id_presentation']    = validasi_sql($data['id_presentation']);
						$insert['type_presentation']        = validasi_sql($data['type_presentation']);
						$insert['state']              = validasi_sql($data['state']);
						$insert['status']             = validasi_sql($data['status']);
						$insert['note']               = validasi_sql($data['note']);
						$insert['created_by']         = validasi_sql($data['created_by']);
						 // Imprimir el valor de id_supplier para depuración
						 echo 'Valor de id_supplier: ' . $insert['id_supplier'];
						 
						$this->ADM->insert_products($insert);
						$this->session->set_flashdata('success', 'New products has been added successfully!,');
						redirect("website/products");
					}
				} else {
					redirect("website/products");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'product_name';
					$where_products['id_product'] = $filter2;
					$products				      =  $this->ADM->get_products('*', $where_products);
					$data['id_product']	          = ($this->input->post('id_product'))?$this->input->post('id_product'):$products->id_product;
					$data['product_name']         = ($this->input->post('product_name'))?$this->input->post('product_name'):$products->product_name;
					$data['description']          = ($this->input->post('description')) ? $this->input->post('description') : $products->description;
					/*$data['id_platform']	      = ($this->input->post('id_platform'))?$this->input->post('id_platform'):$products->id_platform;
					if ($this->input->post('id_platform')) {
						$data['type_pallet'] = $this->ADM->get_type_platform($data['id_platform']);
					} else {
						$data['type_pallet'] = $products->type_pallet;
					}*/
					$data['id_measurement']	      = ($this->input->post('id_measurement'))?$this->input->post('id_measurement'):$products->id_measurement;
					if ($this->input->post('id_measurement')) {
						$data['unit_measurement'] = $this->ADM->get_unit_measurement($data['id_measurement']);
					} else {
						$data['unit_measurement'] = $products->unit_measurement;
					}
					
					$data['sku']	              = ($this->input->post('sku'))?$this->input->post('sku'):$products->sku;
					$data['id_supplier']	      = ($this->input->post('id_supplier'))?$this->input->post('id_supplier'):$products->id_supplier;
					 // Obtener el nama_supplier basado en el id_supplier actual o seleccionado
					 if ($this->input->post('id_supplier')) {
						$data['name_supplier'] = $this->ADM->get_nama_supplier1($data['id_supplier']);
					} else {
						$data['name_supplier'] = $products->name_supplier;
					}
					$data['id_category']  = ($this->input->post('id_category'))?$this->input->post('id_category'):$products->id_category;
					if ($this->input->post('id_category')) {
						$data['cat_product'] = $this->ADM->get_cat_product($data['id_category']);
					} else {
						$data['cat_product'] = $products->cat_product;
					}
					$data['id_presentation']	  = ($this->input->post('id_presentation'))?$this->input->post('id_presentation'):$products->id_presentation;
					if ($this->input->post('id_presentation')) {
						$data['type_presentation'] = $this->ADM->get_type_presentation($data['id_presentation']);
					} else {
						$data['type_presentation'] = $products->type_presentation;
					}
					
					$data['state']	              = ($this->input->post('state'))?$this->input->post('state'):$products->state;
					$data['status']	              = ($this->input->post('status'))?$this->input->post('status'):$products->status;
					$data['note']	              = ($this->input->post('note'))?$this->input->post('note'):$products->note;
					$data['status']	              = ($this->input->post('status')) ? $this->input->post('status'):$products->status;
					$data['created_by']	          = ($this->input->post('created_by')) ? $this->input->post('created_by'):$products->created_by;
					$data['created_date']         = ($this->input->post('created_date')) ? $this->input->post('created_date'):$products->created_date;
					$data['updated_by']           = ($this->input->post('updated_by')) ? $this->input->post('updated_by'):$products->updated_by;
					$data['updated_date']         = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $products->updated_date;
					$simpan 	=   $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_product']    = $data['id_product'];
						$edit['product_name']	     = $data['product_name'];
						$edit['description']	     = $data['description'];
						//$edit['type_pallet']	     = $data['type_pallet'];
						
						$edit['unit_measurement']	 = $data['unit_measurement'];
						$edit['sku']			     = $data['sku'];
						$edit['name_supplier']	     = $data['name_supplier'];
						$edit['cat_product']	     = $data['cat_product'];
						$edit['type_presentation']	 = $data['type_presentation'];
						$edit['state']			     = $data['state'];
						$edit['status']			     = $data['status'];
						$edit['note']			     = $data['note'];
						$edit['created_by']			 = $data['created_by'];
						$edit['created_date']        = $data['created_date'];
						$edit['updated_by']          = $data['updated_by'];
						$edit['updated_date']        = $data['updated_date'];
						$edit['id_supplier']	     = $data['id_supplier'];
						$edit['id_measurement']	     = $data['id_measurement'];
						$edit['id_category']	     = $data['id_category'];
						$edit['id_presentation']	 = $data['id_presentation'];
						//$edit['id_platform']	     = $data['id_platform'];

						echo 'Valor de id_supplier: ' . $edit['id_supplier'];

						$this->ADM->update_products($where_edit, $edit);
						$this->session->set_flashdata('success', 'products has been successfully edited!,');
						redirect("website/products");
					}
				} else {
					redirect("website/products");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_product']		= validasi_sql($filter2);
					$this->ADM->delete_products($where_delete);
					$this->session->set_flashdata('success', 'The products has been successfully deleted!,');
					redirect("website/products");
				} else {
					redirect("website/products");
				}
			}
			// Obtener clientes activos y pasarlos a la vista
			    $where_supplier = array('status' => 'activo');
				$data['suppliers'] = $this->ADM->get_all_supplier('id_supplier, nama_supplier', $where_supplier);	
				$where_measurement = array('status' => 'activo');
				$data['measurements'] = $this->ADM->get_all_measurement('id_measurement, unit_measurement', $where_measurement);
			    $where_category = array('status' => 'activo');
				$data['categorys'] = $this->ADM->get_all_category('id_category, cat_product', $where_category);
			    $where_presentation = array('status' => 'activo');
				$data['presentations'] = $this->ADM->get_all_presentation('id_presentation, type_presentation', $where_presentation);
			    /*where_platform = array('status' => 'activo');
				$data['platforms'] = $this->ADM->get_all_platform('id_platform, type_platform', $where_platform);*/
			
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	//FUNCTION ARRIVAL	
	public function arrival($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']				= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']			= 'Arribo';
			$data['content'] 			= 'admin/content/website/arrival';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['action']				= (empty($filter1)) ? 'view2' : $filter1;
			$data['action']				= (empty($filter1)) ? 'view3' : $filter1;
			$data['validate']			= array(
				'identification_number' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('identification_number' => 'N.Identificación de evento', 'status' => 'Estatus', 'nama_supplier' => 'Proveedor', 'container_number' => 'N.identificador del contenedor', 'name_driver' => 'Conductor');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'identification_number';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_arrival[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_arrivaltwo('', $like_arrival);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);

				 // Obtener si cada registro debe tener el botón deshabilitado
				 $data['disable_edit'] = array();
				 $arrivals = $this->ADM->get_arrivalstwo(); // Ajusta esto a tu función que obtiene los registros
				 foreach ($arrivals as $arrival) {
					 $data['disable_edit'][$arrival->id_main] = $this->ADM->has_sub_movements($arrival->id_main);
				 }
				
			}elseif ($data['action'] == 'view2') {
				$data['berdasarkan']		= array('identification_number' => 'N.Identificación de evento', 'status' => 'Estatus', 'nama_supplier' => 'Proveedor', 'container_number' => 'N.identificador del contenedor', 'name_driver' => 'Conductor');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'identification_number';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_arrivaltwo[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_arrivaltwo('', $like_arrival);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
				
			
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']		= 'arrival';

					 // Aquí se cargan los datos del formulario
					
					 $data['identification_number'] = $this->input->post('identification_number') ?? '';
					 $data['sale_order']            = $this->input->post('sale_order') ?? '';
					 $data['id_supplier']           = $this->input->post('id_supplier') ?? '';
					 //$data['id_product']            = $this->input->post('id_product')?? '';
					 //$data['product_name']          = $this->ADM->get_product_name($data['id_product']);
					 $data['event_type']            = $this->input->post('event_type') ?? '';
					 $data['id_container']          = $this->ADM->get_id_container_by_number($this->input->post('container_number'));
					 $data['container_number']      = $this->ADM->get_container_number($data['id_container']);
					 $data['container_type']        = $this->ADM->get_container_type($data['id_container']);
					 $data['id_origin']             = $this->input->post('id_origin') ?? '';
					 $data['state']                 = $this->ADM->get_state($data['id_origin']);
					 $data['id_maneuver']           = $this->input->post('id_maneuver') ?? '';
					 $data['type_maneuver']         = $this->ADM->get_type_maneuver($data['id_maneuver']);
					 $data['event_date']            = $this->input->post('event_date') ?? '';
					 //$product['id_platform']           = $this->input->post('id_platform') ?? '';
					 //$product['type_platform']         = $this->ADM->get_type_platform($product['id_platform']);
					 $data['id_driver']             = $this->input->post('id_driver') ?? '';
					 $data['name_driver']           = $this->ADM->get_name_driver($data['id_driver']);
					 $data['id_transport']          = $this->ADM->get_id_transport_by_platenumber($this->input->post('platenumber'));
					 $data['platenumber']           = $this->ADM->get_platenumber($data['id_transport']);
					 $data['vehicletype']           = $this->ADM->get_vehicletype($data['id_transport']);
					 $data['arrival_time']          = $this->input->post('arrival_time') ?? '';
					 $data['maneuver_start']        = $this->input->post('maneuver_start') ?? '';
					 $data['maneuver_end']          = $this->input->post('maneuver_end') ?? '';
					 $data['departure_time']        = $this->input->post('departure_time') ?? '';
					// $data['note']                  = $this->input->post('note') ?? '';
					// $data['status']                = $this->input->post('status') ?? '';
					 $data['created_by']            = $this->input->post('created_by') ?? '';
					  $data['id_main']              = $this->input->post('id_main') ?? '';
					//$data['id_arrival']            = $this->input->post('id_main') ?? '';
					 // Generar identificador único para el arribo
					 $unique_id = 'AS' . $data['id_supplier'] . $data['id_container'] . $data['id_transport'] . date('Ymd', strtotime($data['event_date'])) . $data['id_driver'] . $data['id_origin'];
					 $data['identification_number'] = $unique_id;
					  // Obtener datos de productos del formulario (suponiendo que vienen en arrays)
					  $products = $this->input->post('products'); // Array de productos
                  

					  if ($this->input->post('simpan')) {
						  foreach ($products as $product) {
							  // Ajustar los datos del producto específico
							  $insert = array(
								  'id_arrival' => validasi_sql($data['id_arrival']),
								  'identification_number' => validasi_sql($data['identification_number']),
								  'sale_order' => validasi_sql($data['sale_order']),
								  'id_supplier' => validasi_sql($data['id_supplier']),
								 // 'id_product' => validasi_sql($data['id_product']),
								  //'product_name' => $this->ADM->get_product_name($data['id_product'])->product_name,
								  'nama_supplier' => $this->ADM->get_nama_supplier($data['id_supplier'])->nama_supplier,
								  'id_product' => validasi_sql($product['id_product']),
								  'product_name' => $this->ADM->get_product_name($product['id_product'])->product_name,
								  'event_type' => validasi_sql($data['event_type']),
								  'id_container' => validasi_sql($data['id_container']),
								  'container_number' => validasi_sql($data['container_number']),
								  'container_type' => validasi_sql($data['container_type']),
								  'state' => validasi_sql($data['state']),
								  'id_origin' => validasi_sql($data['id_origin']),
								  'type_maneuver' => validasi_sql($data['type_maneuver']),
								  'id_maneuver' => validasi_sql($data['id_maneuver']),
								  'event_date' => validasi_sql($data['event_date']),
								  'id_platform' => validasi_sql($product['id_platform']),
								  'type_platform' => $this->ADM->get_type_platform($product['id_platform']),
								 // print_r($type_platform_data), // Verifica qué se está devolviendo aquí.
								  //'type_platform' => $this->ADM->get_type_platform($product['id_platform'])->type_platform,
								  'id_transport' => validasi_sql($data['id_transport']),
								  'platenumber' => validasi_sql($data['platenumber']),
								  'vehicletype' => validasi_sql($data['vehicletype']),
								  'name_driver' => validasi_sql($data['name_driver']),
								  'id_driver' => validasi_sql($data['id_driver']),
								  'stock' => validasi_sql($product['stock']),
								  'quantity_product_pallet' => validasi_sql($product['quantity_product_pallet']),
								  'quantity_pallet' => validasi_sql($product['quantity_pallet']),
								  'damaged_pallets' => validasi_sql($product['damaged_pallets']),
								  'damaged_stock' => validasi_sql($product['damaged_stock']),
								  'good_pallets' => validasi_sql($product['good_pallets']),
								  'good_stock' => validasi_sql($product['good_stock']),
								  'id_type_movement' => validasi_sql($product['id_type_movement']),
								  'type_movements' => validasi_sql($product['type_movements']),
								 // 'available_pallets' => validasi_sql($product['available_pallets']),
								  'arrival_time' => validasi_sql($data['arrival_time']),
								  'maneuver_start' => validasi_sql($data['maneuver_start']),
								  'expiration_date' => validasi_sql($product['expiration_date']),
								  'maneuver_end' => validasi_sql($data['maneuver_end']),
								  'departure_time' => validasi_sql($data['departure_time']),
								  'note' => validasi_sql($product['note']),
								  'status' => validasi_sql($product['status']),
								  'created_by' => validasi_sql($data['created_by']),								  
							  );
							  // Imprimir el valor de id_supplier para depuración
						echo 'Valor de id_supplier: ' . $insert['id_supplier'] . "\n";
                        echo 'Valor de nama_supplier: ' . $insert['nama_supplier'] . "\n";
                        echo 'Valor de id_product: ' . $insert['id_product'] . "\n";
                        echo 'Valor de product_name: ' . $insert['product_name'] . "\n";
						echo 'Valor de container_number ' . $insert['container_number'] . "\n";
						echo 'Valor de container_type: ' . $insert['container_type'] . "\n";
						echo 'Valor de id_container: ' . $insert['id_container'] . "\n";
						echo 'Valor de id_transport: ' . $insert['id_transport'] . "\n";
						echo 'Valor de platenumber: ' . $insert['platenumber'] . "\n";
						echo 'Valor de vehicletype: ' . $insert['vehicletype'] . "\n";
						/*foreach ($products as $product) {
							echo '<pre>';
							print_r($product);
							echo '</pre>';
							
							// Continuar con la inserción...
						}*/
							  // Insertar cada producto
							  $this->ADM->insert_arrival($insert);
						  }
	  
						  $this->session->set_flashdata('success', 'New arrival has been added successfully!');
						  redirect("website/arrival/view");	
					}
				} else {
					redirect("website/arrival/view");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					// Recupera los datos del arribo existente
					$where_arrivaltwo['id_arrivaltwo'] = $filter2;
					$arrivaltwo = $this->ADM->get_arrivaltwo('*', $where_arrivaltwo);

					// Verificar si se encontró el arribo
					/* if (!$arrivaltwo) {
						$this->session->set_flashdata('error', 'Arribo no encontrado.');
						redirect('website/arrival');
					}*/

					// Procesar los productos asociados al arribo
					$data['productss'] = $this->ADM->get_all_products_by_identification($arrivaltwo->identification_number);

					

					// Actualizar datos generales del arribo
					$products = $this->input->post('products_update');
					$products['id_arrivaltwo']     = $this->input->post('id_arrivaltwo') ?: $arrivaltwo->id_arrivaltwo;
					$products['id_main']           = $this->input->post('id_main') ?: $arrivaltwo->id_main;
					$products['id_arrival']        = $this->input->post('id_arrival') ?: $arrivaltwo->id_arrrival;
					$data['identification_number'] = $this->input->post('identification_number') ?: $arrivaltwo->identification_number;
					$data['sale_order']            = $this->input->post('sale_order') ?: $arrivaltwo->sale_order;
					$data['event_type']            = $this->input->post('event_type') ?: $arrivaltwo->event_type;
					//$data['id_supplier'] = $arrivaltwo->id_supplier;
					
					//$data['nama_supplier'] = $arrivaltwo->nama_supplier;
					//$data['nama_supplier']       = $this->input->post('id_supplier') ? $this->ADM->get_nama_supplier($data['id_supplier']) : $arrivaltwo->nama_supplier;
					$data['id_supplier']       = $this->input->post('id_supplier') ?: $arrivaltwo->id_supplier;
					$data['nama_supplier']     = $this->input->post('nama_supplier') ?: $arrivaltwo->nama_supplier;
					
					$data['id_container']      = $this->ADM->get_id_container_by_number($this->input->post('container_number'));
					$data['container_number']  = $this->input->post('container_number') ?: $arrivaltwo->container_number;
					$data['container_type']    = $this->ADM->get_container_type_by_number($data['container_number']);
					$data['id_origin']         = $this->input->post('id_origin') ?: $arrivaltwo->id_origin;
					$data['state']             = $this->input->post('id_origin') ? $this->ADM->get_state($data['id_origin']) : $arrivaltwo->state;
					$data['id_maneuver']       = $this->input->post('id_maneuver') ?: $arrivaltwo->id_maneuver;
					$data['type_maneuver']     = $this->input->post('id_maneuver') ? $this->ADM->get_type_maneuver($data['id_maneuver']) : $arrivaltwo->type_maneuver;
					$data['event_date']        = $this->input->post('event_date') ?: $arrivaltwo->event_date;
					$data['id_transport']      = $this->ADM->get_id_transport_by_platenumber($this->input->post('platenumber'));
					$data['platenumber']       = $this->input->post('platenumber') ?: $arrivaltwo->platenumber;
					$data['vehicletype']       = $this->ADM->get_vehicletype_by_platenumber($data['platenumber']);
					$data['id_driver']         = $this->input->post('id_driver') ?: $arrivaltwo->id_driver;
					$data['name_driver']       = $this->input->post('id_driver') ? $this->ADM->get_name_driver($data['id_driver']) : $arrivaltwo->name_driver;

					
					$products['id_product']    = ($this->input->post('id_product')) ? $this->input->post('id_product') : $arrivaltwo->id_product;
					$products['product_name']  = ($this->input->post('id_product')) ? $this->ADM->get_product_name1($this->input->post('id_product')) : $arrivaltwo->product_name;
					$producs['id_platform']	   = ($this->input->post('id_platform')) ? $this->input->post('id_platform') : $arrivaltwo->id_platform;
					if ($this->input->post('id_platform')) {
						$products['type_platform'] = $this->ADM->get_type_platform($products['id_platform']);
					} else {
						$products['type_platform'] = $arrivaltwo->type_platform;
					}
					$products['stock']	                  = ($this->input->post('stock')) ? $this->input->post('stock') : $arrivaltwo->stock;
					$products['quantity_product_pallet']  = ($this->input->post('quantity_product_pallet')) ? $this->input->post('quantity_product_pallet') : $arrivaltwo->quantity_product_pallet;
					$products['quantity_pallet']	      = ($this->input->post('quantity_pallet')) ? $this->input->post('quantity_pallet') : $arrivaltwo->quantity_pallet;
					$products['damaged_pallets']	      = ($this->input->post('damaged_pallets')) ? $this->input->post('damaged_pallets') : $arrivaltwo->damaged_pallets;
					$products['damaged_stock']	          = ($this->input->post('damaged_stock')) ? $this->input->post('damaged_stock') : $arrivaltwo->damaged_stock;
					$products['good_pallets']	          = ($this->input->post('good_pallets')) ? $this->input->post('good_pallets') : $arrivaltwo->good_pallets;
					$products['good_stock']	              = ($this->input->post('good_stock')) ? $this->input->post('good_stock') : $arrivaltwo->good_stock;
					$prroducts['id_type_movement']        = ($this->input->post('id_type_movement')) ? $this->input->post('id_type_movement') : $arrivaltwo->id_type_movement; 
					$products['type_movements']           = ($this->input->post('type_movements')) ? $this->input->post('type_movements') : $arrivaltwo->type_movements;
					$products['expiration_date']	      = ($this->input->post('expiration_date')) ? $this->input->post('expiration_date') : $arrivaltwo->expiration_date;
					// Datos adicionales del producto
					$data['arrival_time']        = $this->input->post('arrival_time') ?: $arrivaltwo->arrival_time;
					$data['maneuver_start']      = $this->input->post('maneuver_start') ?: $arrivaltwo->maneuver_start;
					$data['maneuver_end']        = $this->input->post('maneuver_end') ?: $arrivaltwo->maneuver_end;
					$data['departure_time']      = $this->input->post('departure_time') ?: $arrivaltwo->departure_time;
					$products['note']            = $this->input->post('note') ?: $arrivaltwo->note;
					$products['status']          = $this->input->post('status') ?: $arrivaltwo->status;
					$data['created_by']          = $this->input->post('created_by') ?: $arrivaltwo->created_by;
					$data['created_date']        = $this->input->post('created_date') ?: $arrivaltwo->created_date;
					$data['updated_by']          = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $arrivaltwo->updated_by;
					$data['updated_date']        = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $arrivaltwo->updated_date;

					if ($this->input->post('simpan')) {


						/*
                        echo '<pre>';
						print_r($_POST);
						echo '</pre>';
						echo '<pre>';
						print_r($data);
						echo '</pre>';
					
						*/

						// Actualizar los datos generales en todos los registros con el mismo identification_number
						
						
						$general_update = array(
							'sale_order' => validasi_sql($data['sale_order']),
							'event_type' => validasi_sql($data['event_type']),
							'id_supplier' => validasi_sql($data['id_supplier']),
							'id_container' => validasi_sql($data['id_container']),
							'container_number' => validasi_sql($data['container_number']),
							'container_type' => validasi_sql(is_object($data['container_type']) ? $data['container_type']->container_type : $data['container_type']),
							'id_origin' => validasi_sql($data['id_origin']),
							'state' => validasi_sql($data['state']),
							'id_maneuver' => validasi_sql($data['id_maneuver']),
							'type_maneuver' => validasi_sql($data['type_maneuver']),
							'event_date' => validasi_sql($data['event_date']),
							'id_transport' => validasi_sql($data['id_transport']),
							'platenumber' => validasi_sql($data['platenumber']),
							'vehicletype' => validasi_sql(is_object($data['vehicletype']) ? $data['vehicletype']->vehicletype : $data['vehicletype']),
							'name_driver' => validasi_sql($data['name_driver']),
							'id_driver' => validasi_sql($data['id_driver']),
							'arrival_time' => validasi_sql($data['arrival_time']),
							'maneuver_start' => validasi_sql($data['maneuver_start']),
							'maneuver_end' => validasi_sql($data['maneuver_end']),
							'departure_time' => validasi_sql($data['departure_time']),
							//'updated_by' => validasi_sql($data['admin']->admin_user),
							//'updated_date' => date('Y-m-d H:i:s')
							'updated_by' => validasi_sql($data['updated_by']),
							'updated_date' => validasi_sql($data['updated_date'])
						);

						// Actualiza todos los registros que comparten el mismo identification_number
						$this->db->where('identification_number', $data['identification_number']);
						$this->db->update('arrivaltwo', $general_update); // Cambiar de update a insertar para prueba

						// Actualización de productos
						$products_update = $this->input->post('products_update');

						if ($products_update) {
							foreach ($products_update as $product) {
								// Verifica que el id_product y el identification_number estén presentes
								if (
									isset($product['id_product']) && !empty($product['id_product']) &&
									isset($product['product_name']) && !empty($product['product_name'])
								) {

									// Actualización de los productos
									$product_update = array(
										//'id_product' => validasi_sql($product['id_product']),
										//'id_arrivaltwo' => validasi_sql($product['id_arrivaltwo']),
										'id_movement' => validasi_sql($product['id_movement']),
										'product_name' => validasi_sql($product['product_name']),
										'id_platform' => validasi_sql($product['id_platform']),
										'type_platform' => validasi_sql($product['type_platform']),
										'stock' => validasi_sql($product['stock']),
										'quantity_product_pallet' => validasi_sql($product['quantity_product_pallet']),
										'quantity_pallet' => validasi_sql($product['quantity_pallet']),
										'damaged_pallets' => validasi_sql($product['damaged_pallets']),
										'damaged_stock' => validasi_sql($product['damaged_stock']),
										//'good_pallets' => validasi_sql($product['good_pallets']),
										'good_stock' => validasi_sql($product['good_stock']),
										'id_type_movement' => validasi_sql($product['id_type_movement']),
										'type_movements' => validasi_sql($product['type_movements']),
										'expiration_date' => validasi_sql($product['expiration_date']),
										'note' => validasi_sql($product['note']),
										'status' => validasi_sql($product['status']),
										//'updated_by' => validasi_sql($data['admin']->admin_user),
										//'updated_date' => date('Y-m-d H:i:s')
									);

									// Actualiza el registro en la base de datos
									$this->db->where('id_product', $product['id_product']);
									$this->db->where('identification_number', $data['identification_number']);
									$this->db->where('id_movement IS NOT NULL');
									$this->db->where('id_arrivaltwo', $product['id_arrivaltwo']);
									$this->db->update('arrivaltwo', $product_update);

									// Verifica si la actualización fue exitosa
									if ($this->db->affected_rows() > 0) {
										echo "Actualización exitosa para el producto con ID: " . $product['id_product'] . "<br>";
									} else {
										echo "Error al actualizar el producto con ID: " . $product['id_product'];
										echo "Error de SQL: " . $this->db->error()['message'] . "<br>";
									}
								} else {
									echo "id_product o product_name no válidos para el producto.";
								}
							}
						} else {
							echo "No se recibieron productos.";
						}
						
						// Después de que todas las actualizaciones hayan sido procesadas
						$this->session->set_flashdata('success', 'Arribo y productos actualizados correctamente.');

						// Redirige después de que se han actualizado todos los productos
						redirect('website/arrival/view2');
					}
				} else {
					$this->session->set_flashdata('success', 'Arribo y productos actualizados correctamente.');

					redirect('website/arrival/view2');
				}
			
	
			}elseif ($data['action'] == 'editar2') {
				if ($data['admin']->admin_level_kode == 1) {
					// Recupera los datos del arribo existente
					$where_arrivaltwo['id_main'] = $filter2;
					$arrivaltwo = $this->ADM->get_arrivaltwo('*', $where_arrivaltwo);

					
					// Procesar los productos asociados al arribo
					$data['productss'] = $this->ADM->get_all_products_by_identificationtwo($arrivaltwo->identification_number);

					//Generar subregistros basados en quantity_pallet
					$generatedProducts = [];
					foreach ($data['productss'] as $product) {
						// Calcula el stock por pallet
						// Verifica si el id_movement es NULL
						if (empty($product->id_movement)) {
							$stockPerPallet = $product->quantity_pallet > 0 ? $product->stock / $product->quantity_pallet : 0;
							for ($i  = 1; $i <= $product->quantity_pallet; $i++) {
								$generatedProducts[] = (object) [
									'id_main'                  =>  $product->id_main,
									'id_arrival'               =>  $product->id_arrival,
									'id_movement'              =>  "{$product->id_arrival}.$i", // Subregistro
									'id_product'               =>  $product->id_product,
									'product_name'             =>  $product->product_name,
									'id_platform'              =>  $product->id_platform,
									'type_platform'            =>  $product->type_platform,
									'stock'                    =>  $stockPerPallet,
									'quantity_product_pallet'  =>  $product->quantity_product_pallet,
									'quantity_pallet'          =>   1, // Cada subregistro tiene un pallet
									'damaged_pallets'          =>  $product->damaged_pallets,
									'damaged_stock'            =>  $product->damaged_stock,
									'good_pallet'              =>  $product->good_pallets,
									'good_stock'               =>  $stockPerPallet,
									'id_type_movement'         =>  $product->id_type_movement,
									'type_movements'           =>  $product->type_movements,
									'expiration_date'          =>  $product->expiration_date,
									'note'                     =>  $product->note,
									'status'                   =>  $product->status,
								];
							}
						}
					}
					$data['generated_products'] = $generatedProducts;

					// Actualizar datos generales del arribo
					$products = $this->input->post('products_update');
					$products['id_main']           = $this->input->post('id_main') ?: $arrivaltwo->id_main;
					$products['id_arrival']        = $this->input->post('id_arrival') ?: $arrivaltwo->id_arrrival;
					$data['identification_number'] = $this->input->post('identification_number') ?: $arrivaltwo->identification_number;
					$data['sale_order']            = $this->input->post('sale_order') ?: $arrivaltwo->sale_order;
					$data['event_type']            = $this->input->post('event_type') ?: $arrivaltwo->event_type;
					//$data['id_supplier'] = $arrivaltwo->id_supplier;
					
					//$data['nama_supplier'] = $arrivaltwo->nama_supplier;
					//$data['nama_supplier']       = $this->input->post('id_supplier') ? $this->ADM->get_nama_supplier($data['id_supplier']) : $arrivaltwo->nama_supplier;
					$data['id_supplier']       = $this->input->post('id_supplier') ?: $arrivaltwo->id_supplier;
					$data['nama_supplier']     = $this->input->post('nama_supplier') ?: $arrivaltwo->nama_supplier;
					
					$data['id_container']      = $this->ADM->get_id_container_by_number($this->input->post('container_number'));
					$data['container_number']  = $this->input->post('container_number') ?: $arrivaltwo->container_number;
					$data['container_type']    = $this->ADM->get_container_type_by_number($data['container_number']);
					$data['id_origin']         = $this->input->post('id_origin') ?: $arrivaltwo->id_origin;
					$data['state']             = $this->input->post('id_origin') ? $this->ADM->get_state($data['id_origin']) : $arrivaltwo->state;
					$data['id_maneuver']       = $this->input->post('id_maneuver') ?: $arrivaltwo->id_maneuver;
					$data['type_maneuver']     = $this->input->post('id_maneuver') ? $this->ADM->get_type_maneuver($data['id_maneuver']) : $arrivaltwo->type_maneuver;
					$data['event_date']        = $this->input->post('event_date') ?: $arrivaltwo->event_date;
					$data['id_transport']      = $this->ADM->get_id_transport_by_platenumber($this->input->post('platenumber'));
					$data['platenumber']       = $this->input->post('platenumber') ?: $arrivaltwo->platenumber;
					$data['vehicletype']       = $this->ADM->get_vehicletype_by_platenumber($data['platenumber']);
					$data['id_driver']         = $this->input->post('id_driver') ?: $arrivaltwo->id_driver;
					$data['name_driver']       = $this->input->post('id_driver') ? $this->ADM->get_name_driver($data['id_driver']) : $arrivaltwo->name_driver;

					
					$products['id_product']    = ($this->input->post('id_product')) ? $this->input->post('id_product') : $arrivaltwo->id_product;
					$products['product_name']  = ($this->input->post('id_product')) ? $this->ADM->get_product_name1($this->input->post('id_product')) : $arrivaltwo->product_name;
					$producs['id_platform']	   = ($this->input->post('id_platform')) ? $this->input->post('id_platform') : $arrivaltwo->id_platform;
					if ($this->input->post('id_platform')) {
						$products['type_platform'] = $this->ADM->get_type_platform($products['id_platform']);
					} else {
						$products['type_platform'] = $arrivaltwo->type_platform;
					}
					$products['stock']	                  = ($this->input->post('stock')) ? $this->input->post('stock') : $arrivaltwo->stock;
					$products['quantity_product_pallet']  = ($this->input->post('quantity_product_pallet')) ? $this->input->post('quantity_product_pallet') : $arrivaltwo->quantity_product_pallet;
					$products['quantity_pallet']	      = ($this->input->post('quantity_pallet')) ? $this->input->post('quantity_pallet') : $arrivaltwo->quantity_pallet;
					$products['damaged_pallets']	      = ($this->input->post('damaged_pallets')) ? $this->input->post('damaged_pallets') : $arrivaltwo->damaged_pallets;
					$products['damaged_stock']	          = ($this->input->post('damaged_stock')) ? $this->input->post('damaged_stock') : $arrivaltwo->damaged_stock;
					$products['good_pallets']	          = ($this->input->post('good_pallets')) ? $this->input->post('good_pallets') : $arrivaltwo->good_pallets;
					$products['good_stock']	              = ($this->input->post('good_stock')) ? $this->input->post('good_stock') : $arrivaltwo->good_stock;
					$products['id_type_movement']         = ($this->input->post('id_type_movement')) ? $this->input->post('id_type_movement') : $arrivaltwo->id_type_movement;
					$products['type_movements']           = ($this->input->post('type_movements')) ? $this->input->post('type_movements') : $arrivaltwo->type_movements;
					$products['expiration_date']	      = ($this->input->post('expiration_date')) ? $this->input->post('expiration_date') : $arrivaltwo->expiration_date;
					// Datos adicionales del producto
					$data['arrival_time']        = $this->input->post('arrival_time') ?: $arrivaltwo->arrival_time;
					$data['maneuver_start']      = $this->input->post('maneuver_start') ?: $arrivaltwo->maneuver_start;
					$data['maneuver_end']        = $this->input->post('maneuver_end') ?: $arrivaltwo->maneuver_end;
					$data['departure_time']      = $this->input->post('departure_time') ?: $arrivaltwo->departure_time;
					$products['note']            = $this->input->post('note') ?: $arrivaltwo->note;
					$products['status']          = $this->input->post('status') ?: $arrivaltwo->status;
					$data['created_by']          = $this->input->post('created_by') ?: $arrivaltwo->created_by;
					$data['created_date']        = $this->input->post('created_date') ?: $arrivaltwo->created_date;
					$data['updated_by']          = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $arrivaltwo->updated_by;
					$data['updated_date']        = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $arrivaltwo->updated_date;

					if ($this->input->post('simpan')) {


						/*
                        echo '<pre>';
						print_r($_POST);
						echo '</pre>';
						echo '<pre>';
						print_r($data);
						echo '</pre>';
					
						*/

						
					 /*	foreach ($products as $newgenerated) {
							echo '<pre>';
							print_r($newgenerated);
							echo '</pre>';

							// Continuar con la inserción...
						}*/

						if($products ){
							foreach ($products as $newgenerated){
								$insert = array(
									'id_main' => validasi_sql($newgenerated['id_main']),
									'id_movement' => validasi_sql($newgenerated['id_movement']),
									'id_arrival'  => validasi_sql($newgenerated['id_arrival']),
									'sale_order' => validasi_sql($data['sale_order']),
									'identification_number' => ($data['identification_number']),
									'nama_supplier' => validasi_sql($data['nama_supplier']),
									'id_supplier' => validasi_sql($data['id_supplier']),
									//'nama_supplier' => $this->ADM->get_nama_supplier1($products['id_supplier'])->nama_supplier,
									//'id_supplier' => validasi_sql($data['id_supplier']),
									//'nama_supplier' => validasi_sql($data['nama_supplier']),
									'id_product' => validasi_sql($newgenerated['id_product']),
									'product_name' => validasi_sql($newgenerated['product_name']),
									'event_type' => validasi_sql($data['event_type']),
									'id_container' => validasi_sql($data['id_container']),
									'container_number' => validasi_sql($data['container_number']),
									'container_type' => validasi_sql(is_object($data['container_type']) ? $data['container_type']->container_type : $data['container_type']),
									'state' => validasi_sql($data['state']),
									'id_origin' => validasi_sql($data['id_origin']),
									'type_maneuver' => validasi_sql($data['type_maneuver']),
									'id_maneuver' => validasi_sql($data['id_maneuver']),
									'event_date' => validasi_sql($data['event_date']),
									'id_platform' => validasi_sql($newgenerated['id_platform']),
									'type_platform' => validasi_sql($newgenerated['type_platform']),
									'id_transport' => validasi_sql($data['id_transport']),
									'platenumber' =>validasi_sql($data['platenumber']),
									'vehicletype' => validasi_sql(is_object($data['vehicletype']) ? $data['vehicletype']->vehicletype : $data['vehicletype']),
									'name_driver' => validasi_sql($data['name_driver']),
									'id_driver' => validasi_sql($data['id_driver']),
									'stock' => validasi_sql($newgenerated['stock']),
									'quantity_product_pallet'  => validasi_sql($newgenerated['quantity_product_pallet']),
									'quantity_pallet' => validasi_sql($newgenerated['quantity_pallet']),
									'damaged_pallets' => validasi_sql($newgenerated['damaged_pallets']),
									'damaged_stock'   => validasi_sql($newgenerated['damaged_stock']),
									'good_pallets' => validasi_sql($newgenerated['good_pallets']),
									'good_stock' => validasi_sql($newgenerated['good_stock']),
									'type_movements' => validasi_sql($newgenerated['type_movements']),
									'arrival_time' => validasi_sql($data['arrival_time']),
									'maneuver_start' => validasi_sql($data['maneuver_start']),
									'id_type_movement' => validasi_sql($newgenerated['id_type_movement']),
									'type_movements' => validasi_sql($newgenerated['type_movements']),
									'movement_date' => validasi_sql($newgenerated['movement_date']),
									'id_position' => validasi_sql($newgenerated['id_position']),
									'row_location' => validasi_sql($newgenerated['row_location']),
									'column_location' => validasi_sql($newgenerated['column_location']),
									'rack_number' => validasi_sql($newgenerated['rack_number']),
									'level' => validasi_sql($newgenerated['level']),
									'movement_created_by' => validasi_sql($newgenerated['movement_created_by']),
									'expiration_date' => validasi_sql($newgenerated['expiration_date']),
									'maneuver_end' => validasi_sql($data['maneuver_end']),
									'departure_time' =>validasi_sql($data['departure_time']),
									'note' => validasi_sql($newgenerated['note']),
									'status' => validasi_sql($newgenerated['status']),
									'created_by' => validasi_sql($data['created_by']),
									
								    //'identification_number' => $data['identification_number']	
				                );


								$this->ADM->insert_arrivaltwo($insert);
								// Actualizar el campo updated_by en arrival para el mismo id_main
							
							}
							$this->session->set_flashdata('success', 'Arribo y productos actualizados correctamente.');

					        redirect('website/arrival/view2');
						}
						 
						// Actualizar los datos generales en todos los registros con el mismo identification_number
						
						
						$general_update = array(
							'sale_order' => validasi_sql($data['sale_order']),
							'event_type' => validasi_sql($data['event_type']),
							'id_supplier' => validasi_sql($data['id_supplier']),
							'id_container' => validasi_sql($data['id_container']),
							'container_number' => validasi_sql($data['container_number']),
							'container_type' => validasi_sql(is_object($data['container_type']) ? $data['container_type']->container_type : $data['container_type']),
							'id_origin' => validasi_sql($data['id_origin']),
							'state' => validasi_sql($data['state']),
							'id_maneuver' => validasi_sql($data['id_maneuver']),
							'type_maneuver' => validasi_sql($data['type_maneuver']),
							'event_date' => validasi_sql($data['event_date']),
							'id_transport' => validasi_sql($data['id_transport']),
							'platenumber' => validasi_sql($data['platenumber']),
							'vehicletype' => validasi_sql(is_object($data['vehicletype']) ? $data['vehicletype']->vehicletype : $data['vehicletype']),
							'name_driver' => validasi_sql($data['name_driver']),
							'id_driver' => validasi_sql($data['id_driver']),
							'arrival_time' => validasi_sql($data['arrival_time']),
							'maneuver_start' => validasi_sql($data['maneuver_start']),
							'maneuver_end' => validasi_sql($data['maneuver_end']),
							'departure_time' => validasi_sql($data['departure_time']),
							//'updated_by' => validasi_sql($data['admin']->admin_user),
							//'updated_date' => date('Y-m-d H:i:s')
							'updated_by' => validasi_sql($data['updated_by']),
							'updated_date' => validasi_sql($data['updated_date'])
						);

						// Actualiza todos los registros que comparten el mismo identification_number
						$this->db->where('identification_number', $data['identification_number']);
						$this->db->update('arrivaltwo', $general_update); // Cambiar de update a insertar para prueba

						
						
						// Después de que todas las actualizaciones hayan sido procesadas
						$this->session->set_flashdata('success', 'Arribo y productos actualizados correctamente.');

						// Redirige después de que se han actualizado todos los productos
						redirect('website/arrival/view2');
					}
				} else {
					$this->session->set_flashdata('success', 'Arribo y productos actualizados correctamente.');

					redirect('website/arrival/view2');
				}
			
	
			}elseif ($data['action'] == 'editar') {
				if ($data['admin']->admin_level_kode == 1) {
					// Recupera los datos del arribo existente
					$where_arrival['id_main'] = $filter2;
					$arrival = $this->ADM->get_arrival('*', $where_arrival);

					// Verificar si se encontró el arribo
					/* if (!$arrival) {
						$this->session->set_flashdata('error', 'Arribo no encontrado.');
						redirect('website/arrival');
					}*/

					// Procesar los productos asociados al arribo
					$data['productss'] = $this->ADM->get_all_products_by_identification_arrival($arrival->identification_number);


					// Actualizar datos generales del arribo
					$products = $this->input->post('products_update');
					$products['id_main']           = $this->input->post('id_main') ?: $arrival->id_main;
					$products['id_movement']       = $this->input->post('id_movement') ?: $arrival->id_movement;
					$products['id_arrival']        = $this->input->post('id_arrival') ?: $arrival->id_arrrival;
					$data['identification_number'] = $this->input->post('identification_number') ?: $arrival->identification_number;
					$data['sale_order']            = $this->input->post('sale_order') ?: $arrival->sale_order;
					$data['event_type']            = $this->input->post('event_type') ?: $arrival->event_type;
					
					$data['id_supplier']       = $this->input->post('id_supplier') ?: $arrival->id_supplier;
					$data['nama_supplier']     = $this->input->post('nama_supplier') ?: $arrival->nama_supplier;
					
					$data['id_container']      = $this->ADM->get_id_container_by_number($this->input->post('container_number'));
					$data['container_number']  = $this->input->post('container_number') ?: $arrival->container_number;
					$data['container_type']    = $this->ADM->get_container_type_by_number($data['container_number']);
					$data['id_origin']         = $this->input->post('id_origin') ?: $arrival->id_origin;
					$data['state']             = $this->input->post('id_origin') ? $this->ADM->get_state($data['id_origin']) : $arrival->state;
					$data['id_maneuver']       = $this->input->post('id_maneuver') ?: $arrival->id_maneuver;
					$data['type_maneuver']     = $this->input->post('id_maneuver') ? $this->ADM->get_type_maneuver($data['id_maneuver']) : $arrival->type_maneuver;
					$data['event_date']        = $this->input->post('event_date') ?: $arrival->event_date;
					$data['id_transport']      = $this->ADM->get_id_transport_by_platenumber($this->input->post('platenumber'));
					$data['platenumber']       = $this->input->post('platenumber') ?: $arrival->platenumber;
					$data['vehicletype']       = $this->ADM->get_vehicletype_by_platenumber($data['platenumber']);
					$data['id_driver']         = $this->input->post('id_driver') ?: $arrival->id_driver;
					$data['name_driver']       = $this->input->post('id_driver') ? $this->ADM->get_name_driver($data['id_driver']) : $arrival->name_driver;

					
					$products['id_product']    = ($this->input->post('id_product')) ? $this->input->post('id_product') : $arrival->id_product;
					$products['product_name']  = ($this->input->post('id_product')) ? $this->ADM->get_product_name1($this->input->post('id_product')) : $arrival->product_name;
					$producs['id_platform']	   = ($this->input->post('id_platform')) ? $this->input->post('id_platform') : $arrival->id_platform;
					if ($this->input->post('id_platform')) {
						$products['type_platform'] = $this->ADM->get_type_platform($products['id_platform']);
					} else {
						$products['type_platform'] = $arrival->type_platform;
					}
					$products['stock']	                  = ($this->input->post('stock')) ? $this->input->post('stock') : $arrival->stock;
					$products['quantity_product_pallet']  = ($this->input->post('quantity_product_pallet')) ? $this->input->post('quantity_product_pallet') : $arrival->quantity_product_pallet;
					$products['quantity_pallet']	      = ($this->input->post('quantity_pallet')) ? $this->input->post('quantity_pallet') : $arrival->quantity_pallet;
					$products['damaged_pallets']	      = ($this->input->post('damaged_pallets')) ? $this->input->post('damaged_pallets') : $arrival->damaged_pallets;
					$products['damaged_stock']	          = ($this->input->post('damaged_stock')) ? $this->input->post('damaged_stock') : $arrival->damaged_stock;
					$products['good_pallets']	          = ($this->input->post('good_pallets')) ? $this->input->post('good_pallets') : $arrival->good_pallets;
					$products['good_stock']	              = ($this->input->post('good_stock')) ? $this->input->post('good_stock') : $arrival->good_stock;
					$products['id_type_movement']         = ($this->input->post('id_type_movement')) ? $this->input->post('id_type_movement') : $arrival->id_type_movement;
					$products['type_movements']           = ($this->input->post('type_movements')) ? $this->input->post('type_movements') : $arrival->type_movements;
					$products['expiration_date']	      = ($this->input->post('expiration_date')) ? $this->input->post('expiration_date') : $arrival->expiration_date;
					// Datos adicionales del producto
					$data['arrival_time']        = $this->input->post('arrival_time') ?: $arrival->arrival_time;
					$data['maneuver_start']      = $this->input->post('maneuver_start') ?: $arrival->maneuver_start;
					$data['maneuver_end']        = $this->input->post('maneuver_end') ?: $arrival->maneuver_end;
					$data['departure_time']      = $this->input->post('departure_time') ?: $arrival->departure_time;
					$products['note']            = $this->input->post('note') ?: $arrival->note;
					$products['status']          = $this->input->post('status') ?: $arrival->status;
					$data['created_by']          = $this->input->post('created_by') ?: $arrival->created_by;
					$data['created_date']        = $this->input->post('created_date') ?: $arrival->created_date;
					$data['updated_by']          = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $arrival->updated_by;
					$data['updated_date']        = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $arrival->updated_date;

					if ($this->input->post('simpan')) {
 
						// Actualizar los datos generales en todos los registros con el mismo identification_number
						
						
						$general_update = array(
							'sale_order' => validasi_sql($data['sale_order']),
							'event_type' => validasi_sql($data['event_type']),
							'id_supplier' => validasi_sql($data['id_supplier']),
							'id_container' => validasi_sql($data['id_container']),
							'container_number' => validasi_sql($data['container_number']),
							'container_type' => validasi_sql(is_object($data['container_type']) ? $data['container_type']->container_type : $data['container_type']),
							'id_origin' => validasi_sql($data['id_origin']),
							'state' => validasi_sql($data['state']),
							'id_maneuver' => validasi_sql($data['id_maneuver']),
							'type_maneuver' => validasi_sql($data['type_maneuver']),
							'event_date' => validasi_sql($data['event_date']),
							'id_transport' => validasi_sql($data['id_transport']),
							'platenumber' => validasi_sql($data['platenumber']),
							'vehicletype' => validasi_sql(is_object($data['vehicletype']) ? $data['vehicletype']->vehicletype : $data['vehicletype']),
							'name_driver' => validasi_sql($data['name_driver']),
							'id_driver' => validasi_sql($data['id_driver']),
							'arrival_time' => validasi_sql($data['arrival_time']),
							'maneuver_start' => validasi_sql($data['maneuver_start']),
							'maneuver_end' => validasi_sql($data['maneuver_end']),
							'departure_time' => validasi_sql($data['departure_time']),
							'updated_by' => validasi_sql($data['updated_by']),
							'updated_date' => validasi_sql($data['updated_date'])
						);

						

						// Actualiza todos los registros que comparten el mismo identification_number
						$this->db->where('identification_number', $data['identification_number']);
						$this->db->update('arrival', $general_update); // Cambiar de update a insertar para prueba

						// Actualización de productos
						$products_update = $this->input->post('products_update');

						if ($products_update) {
							foreach ($products_update as $product) {
								// Verifica que el id_product y el identification_number estén presentes
								if (
									isset($product['id_product']) && !empty($product['id_product']) &&
									isset($product['product_name']) && !empty($product['product_name'])
								) {

									// Actualización de los productos
									$product_update = array(
										//'id_product' => validasi_sql($product['id_product']),
										'product_name' => validasi_sql($product['product_name']),
										'id_platform' => validasi_sql($product['id_platform']),
										'type_platform' => validasi_sql($product['type_platform']),
										'stock' => validasi_sql($product['stock']),
										'quantity_product_pallet' => validasi_sql($product['quantity_product_pallet']),
										'quantity_pallet' => validasi_sql($product['quantity_pallet']),
										'damaged_pallets' => validasi_sql($product['damaged_pallets']),
										'damaged_stock' => validasi_sql($product['damaged_stock']),
										//'good_pallets' => validasi_sql($product['good_pallets']),
										//'good_stock' => validasi_sql($product['good_stock']),
										'id_type_movement' => validasi_sql($product['id_type_movement']),
										'type_movements' => validasi_sql($product['type_movements']),
										'expiration_date' => validasi_sql($product['expiration_date']),
										'note' => validasi_sql($product['note']),
										'status' => validasi_sql($product['status']),
										//'updated_by' => validasi_sql($data['admin']->admin_user),
										//'updated_date' => date('Y-m-d H:i:s')
									);

									// Actualiza el registro en la base de datos
									$this->db->where('id_product', $product['id_product']);
									$this->db->where('identification_number', $data['identification_number']);
									$this->db->update('arrival', $product_update);

									// Verifica si la actualización fue exitosa
									if ($this->db->affected_rows() > 0) {
										echo "Actualización exitosa para el producto con ID: " . $product['id_product'] . "<br>";
									} else {
										echo "Error al actualizar el producto con ID: " . $product['id_product'];
										echo "Error de SQL: " . $this->db->error()['message'] . "<br>";
									}
								} else {
									echo "id_product o product_name no válidos para el producto.";
								}
							}
						} else {
							echo "No se recibieron productos.";
						}
						// Inserción de nuevos productos
						$new_products = $this->input->post('products_insert');
						
						/*echo '<pre>';
						print_r($_POST);
						echo '</pre>';

						foreach ($new_products as $product) {
							echo '<pre>';
							print_r($product);
							echo '</pre>';

							// Continuar con la inserción...
						}*/

						if ($new_products) {
							foreach ($new_products as $new_product) {
								if (isset($new_product['product_name']) && !empty($new_product['product_name'])) {
									// Ajustar los datos del producto específico
									$insert = array(
										//'identification_number' => validasi_sql($data['identification_number']),
										'sale_order' => validasi_sql($data['sale_order']),
										'id_supplier' => validasi_sql($data['id_supplier']),
										// 'id_product' => validasi_sql($data['id_product']),
										//'product_name' => $this->ADM->get_product_name($data['id_product'])->product_name,
										'nama_supplier' => $this->ADM->get_nama_supplier($data['id_supplier'])->nama_supplier,
										'id_product' => validasi_sql($new_product['id_product']),
										'product_name' => $this->ADM->get_product_name($new_product['id_product'])->product_name,
										'event_type' => validasi_sql($data['event_type']),
										'id_container' => validasi_sql($data['id_container']),
										'container_number' => validasi_sql($data['container_number']),
										'container_type' => validasi_sql(is_object($data['container_type']) ? $data['container_type']->container_type : $data['container_type']),
										'state' => validasi_sql($data['state']),
										'id_origin' => validasi_sql($data['id_origin']),
										'type_maneuver' => validasi_sql($data['type_maneuver']),
										'id_maneuver' => validasi_sql($data['id_maneuver']),
										'event_date' => validasi_sql($data['event_date']),
										'id_platform' => validasi_sql($new_product['id_platform']),
										'type_platform' => $this->ADM->get_type_platform($new_product['id_platform']),
										// print_r($type_platform_data), // Verifica qué se está devolviendo aquí.
										//'type_platform' => $this->ADM->get_type_platform($product['id_platform'])->type_platform,
										'id_transport' => validasi_sql($data['id_transport']),
										'platenumber' => validasi_sql($data['platenumber']),
										'vehicletype' => validasi_sql(is_object($data['vehicletype']) ? $data['vehicletype']->vehicletype : $data['vehicletype']),
										'name_driver' => validasi_sql($data['name_driver']),
										'id_driver' => validasi_sql($data['id_driver']),
										'stock' => validasi_sql($new_product['stock']),
										'quantity_product_pallet' => validasi_sql($new_product['quantity_product_pallet']),
										'quantity_pallet' => validasi_sql($new_product['quantity_pallet']),
										'damaged_pallets' => validasi_sql($new_product['damaged_pallets']),
										'damaged_stock' => validasi_sql($new_product['damaged_stock']),
										'good_pallets' => validasi_sql($new_product['good_pallets']),
										'good_stock' => validasi_sql($new_product['good_stock']),
										'arrival_time' => validasi_sql($data['arrival_time']),
										'maneuver_start' => validasi_sql($data['maneuver_start']),
										'expiration_date' => validasi_sql($new_product['expiration_date']),
										'maneuver_end' => validasi_sql($data['maneuver_end']),
										'departure_time' => validasi_sql($data['departure_time']),
										'note' => validasi_sql($new_product['note']),
										'id_type_movement' => validasi_sql($new_product['id_type_movement']),
										'type_movements' => validasi_sql($new_product['type_movements']),
										'status' => validasi_sql($new_product['status']),
										'created_by' => validasi_sql($data['created_by']),
										'identification_number' => $data['identification_number']


									);
									// Imprimir el valor de id_supplier para depuración
									echo 'Valor de id_supplier: ' . $insert['id_supplier'] . "\n";
									echo 'Valor de nama_supplier: ' . $insert['nama_supplier'] . "\n";
									echo 'Valor de id_product: ' . $insert['id_product'] . "\n";
									echo 'Valor de product_name: ' . $insert['product_name'] . "\n";
									echo 'Valor de container_number ' . $insert['container_number'] . "\n";
									echo 'Valor de container_type: ' . $insert['container_type'] . "\n";
									echo 'Valor de id_container: ' . $insert['id_container'] . "\n";
									echo 'Valor de id_transport: ' . $insert['id_transport'] . "\n";
									echo 'Valor de platenumber: ' . $insert['platenumber'] . "\n";
									echo 'Valor de vehicletype: ' . $insert['vehicletype'] . "\n";
									/*foreach ($products as $product) {
										echo '<pre>';
										print_r($product);
										echo '</pre>';
										
										// Continuar con la inserción...
									}*/
									
									// Insertar cada producto
									$this->ADM->insert_arrival($insert);
								}
							}
						}

						// Después de que todas las actualizaciones hayan sido procesadas
						$this->session->set_flashdata('success', 'Arribo y productos actualizados correctamente.');

						// Redirige después de que se han actualizado todos los productos
						redirect('website/arrival/view');
					}
				} else {
					$this->session->set_flashdata('success', 'Arribo y productos actualizados correctamente.');

					redirect('website/arrival/view');
				}
			
	
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_main'] = validasi_sql($filter2);
					$this->ADM->delete_arrival($where_delete);
					$this->session->set_flashdata('success', 'The arrival has been successfully deleted!,');
					redirect("website/arrival/view");
				} else {
					redirect("website/arrival/view");
				}
			}
			// Obtener clientes activos y pasarlos a la vista
			    $where_supplier = array('status' => 'activo');
				$data['suppliers'] = $this->ADM->get_all_supplier('id_supplier, nama_supplier', $where_supplier);	
				$where_products = array('status' => 'activo');
				$data['products'] = $this->ADM->get_all_products('id_product, product_name', $where_products);
				$where_platform = array('status' => 'activo');
				$data['platforms'] = $this->ADM->get_all_platform('id_platform, type_platform', $where_platform);
			    $where_container = array('status' => 'activo');
				$data['containers'] = $this->ADM->get_all_container('id_container, container_type, container_number', $where_container);
			    $where_origin = array('status' => 'activo');
				$data['origins'] = $this->ADM->get_all_origin('id_origin, state', $where_origin);
			    $where_maneuver = array('status' => 'activo');
				$data['maneuvers'] = $this->ADM->get_all_maneuver('id_maneuver, type_maneuver', $where_maneuver);
				$where_transport = array('vehiclestatus' => 'activo');
				$data['transports'] = $this->ADM->get_all_transport('id_transport, platenumber, vehicletype', $where_transport);
				$where_driver = array('status_driver' => 'activo');
				$data['drivers'] = $this->ADM->get_all_driver('id_driver, name_driver', $where_driver);
				$where_type_movement = array('status' => 'activo');
				$data['movements'] = $this->ADM->get_only_entrada_type_movement('id_type_movement, type_movements', $where_type_movement);
				
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	public function get_products_by_supplier() {
		$id_supplier = $this->input->post('id_supplier');
		$products = $this->ADM->get_products_by_supplier($id_supplier);
		echo json_encode($products);
	}

	//Devuelve todos los números de contenedor

	public function get_all_container_numbers(){
		$this->load->model('M_admin');
		$results = $this->M_admin->get_all_container_numbers(); // Llama a la función del modelo
	
		if ($results) {
			// Formatea los resultados para jQuery UI Autocomplete
			$formatted_results = array();
			foreach ($results as $row) {
				$formatted_results[] = array(
					'label' => $row->container_number, // Texto que se muestra en la lista
					'value' => $row->container_number // Valor que se asigna al campo
				);
			}
	
			echo json_encode($formatted_results); // Devuelve los resultados en formato JSON
		} else {
			echo json_encode([]); // Devuelve un array vacío si no hay resultados
		}
	}

	public function get_container_type_by_number($container_number) {
		$container = $this->ADM->get_container_type_by_number($container_number);
		if ($container) {
			echo json_encode(['container_type' => $container]);
		} else {
			echo json_encode(['container_type' => '']);
		}
	}
	
	public function get_platenumbers(){
        $term = $this->input->get('term'); // Obtén el término de búsqueda
		$this->load->model('ADM');
        $results = $this->ADM->search_platenumbers($term);

        // Formatea los resultados para jQuery UI Autocomplete
        $formatted_results = array();
        foreach ($results as $row) {
            $formatted_results[] = array(
                'label' => $row['platenumber'], // Texto que se muestra en la lista
                'value' => $row['platenumber']  // Valor que se asigna al campo
            );
        }

        echo json_encode($formatted_results); // Devuelve los resultados en formato JSON
    }

	public function get_vehicletype_by_platenumber($platenumber) {
		$transport = $this->ADM->get_vehicletype_by_platenumber($platenumber);
		if ($transport && isset($transport->vehicletype)) {
			echo json_encode(['vehicletype' => $transport->vehicletype]);
		} else {
			echo json_encode(['vehicletype' => '']);
		}
	}
	


	//Devuelve todos los origenes (El lugar)
	public function get_all_origins(){
		$this->load->model('ADM');
		$results = $this->ADM->get_all_origin(); // Llama a la función del modelo
	
		if ($results) {
			// Formatea los resultados para jQuery UI Autocomplete
			$formatted_results = array();
			foreach ($results as $row) {
				$formatted_results[] = array(
					'label' => $row->state, // Texto que se muestra en la lista
					'value' => $row->id_origin // Valor que se asigna al campo
				);
			}
	
			echo json_encode($formatted_results); // Devuelve los resultados en formato JSON
		} else {
			echo json_encode([]); // Devuelve un array vacío si no hay resultados
		}
	}

	
// FUNCTION UPLOAD_EXCEL ya no se utilizá este código
public function upload_excel() {
    if (empty($_FILES['excel_file']['name'])) {
        $this->session->set_flashdata('error', 'No file selected.');
        redirect('website/arrival');
    }

    $this->load->library('upload');

    // Configuración de carga del archivo
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'xlsx|xls';
    $config['max_size'] = 2048; // Tamaño máximo en KB

    $this->upload->initialize($config);

    if (!$this->upload->do_upload('excel_file')) {
        $this->session->set_flashdata('error', 'Error uploading file: ' . $this->upload->display_errors());
        redirect('website/arrival');
    }

    $file = $this->upload->data('full_path');

    try {
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
    } catch (Exception $e) {
        $this->session->set_flashdata('error', 'Error loading file: ' . $e->getMessage());
        redirect('website/arrival');
    }

    $sheet = $spreadsheet->getActiveSheet();
    $data = $sheet->toArray(null, true, true, true);

    $this->load->model('ADM');

    $arrival_data = []; // Array para acumular datos

    foreach ($data as $row) {
        // Asume que la primera fila contiene encabezados, así que empieza con la segunda fila
        if ($row['A'] === 'id_arrival') {
            continue; // Omitir fila de encabezados
        }

        // Verificar si la fila está vacía
        if (empty($row['B']) && empty($row['C']) && empty($row['D']) && empty($row['E'])) {
            continue; // Omitir fila vacía
        }

        $arrival_data[] = array(
            'identification_number' => $row['B'],
            'sale_order' => $row['C'],
            'nama_supplier' => $row['D'],
            'id_supplier' => $row['E'],
            'product_name' => $row['F'],
            'id_product' => $row['G'],
            'event_type' => $row['H'],
            'container_type' => $row['I'],
            'container_number' => $row['J'],
            'id_container' => $row['K'],
            'state' => $row['L'],
            'id_origin' => $row['M'],
            'type_maneuver' => $row['N'],
            'id_maneuver' => $row['O'],
            'event_date' => $row['P'],
            'platenumber' => $row['Q'],
            'vehicletype' => $row['R'],
            'id_transport' => $row['S'],
            'name_driver' => $row['T'],
            'id_driver' => $row['U'],
            'stock' => $row['V'],
            'quantity_product_pallet' => $row['W'],
            'quantity_pallet' => $row['X'],
            'damaged_pallets' => $row['Y'],
            'damaged_stock' => $row['Z'],
            'good_pallets' => $row['AA'],
            'good_stock' => $row['AB'],
            'available_pallets' => $row['AC'],
            'expiration_date' => $row['AD'],
            'arrival_time' => $row['AE'],
            'maneuver_start' => $row['AF'],
            'maneuver_end' => $row['AG'],
            'departure_time' => $row['AH'],
            'note' => $row['AI'],
            'created_by' => $row['AJ'],
            'status' => $row['AK']
           
        );
    }

    // Validar datos antes de insertar
    foreach ($arrival_data as $data) {
        log_message('debug', 'Checking arrival data: ' . json_encode($data));
        
        if (!$this->ADM->exists1('products', $data['id_product'], $data['product_name'])) {
            log_message('error', 'Product not found: ' . json_encode($data));
            $this->session->set_flashdata('error', 'Some referenced data not found in database: Product');
            redirect('website/arrival');
        }
        if (!$this->ADM->exists2('supplier', $data['id_supplier'], $data['nama_supplier'])) {
            log_message('error', 'Supplier not found: ' . json_encode($data));
            $this->session->set_flashdata('error', 'Some referenced data not found in database: Supplier');
            redirect('website/arrival');
        }
        if (!$this->ADM->exists3('container', $data['id_container'], $data['container_type'], $data['container_number'])) {
            log_message('error', 'Container not found: ' . json_encode($data));
            $this->session->set_flashdata('error', 'Some referenced data not found in database: Container');
            redirect('website/arrival');
        }
        if (!$this->ADM->exists4('origin', $data['id_origin'], $data['state'])) {
            log_message('error', 'Origin not found: ' . json_encode($data));
            $this->session->set_flashdata('error', 'Some referenced data not found in database: Origin');
            redirect('website/arrival');
        }
        if (!$this->ADM->exists5('maneuver', $data['id_maneuver'], $data['type_maneuver'])) {
            log_message('error', 'Maneuver not found: ' . json_encode($data));
            $this->session->set_flashdata('error', 'Some referenced data not found in database: Maneuver');
            redirect('website/arrival');
        }
        if (!$this->ADM->exists6('transport', $data['id_transport'], $data['platenumber'], $data['vehicletype'])) {
            log_message('error', 'Transport not found: ' . json_encode($data));
            $this->session->set_flashdata('error', 'Some referenced data not found in database: Transport');
            redirect('website/arrival');
        }
        if (!$this->ADM->exists7('driver', $data['id_driver'], $data['name_driver'])) {
            log_message('error', 'Driver not found: ' . json_encode($data));
            $this->session->set_flashdata('error', 'Some referenced data not found in database: Driver');
            redirect('website/arrival');
        }
    }

    // Insertar datos en la tabla arrival
    if (!$this->ADM->insert_multiple_arrivals($arrival_data)) {
        $this->session->set_flashdata('error', 'Error inserting data into database');
        log_message('error', 'Error inserting data: ' . json_encode($arrival_data));
        redirect('website/arrival');
    }

    $this->session->set_flashdata('success', 'Data successfully uploaded');
    redirect('website/arrival');
}


// FUNCTION ALL_ARRIVALS
public function all_arrivals($filter1 = '', $filter2 = '', $filter3 = '')
{
    if ($this->session->userdata('logged_in') == TRUE) {
        $where_admin['admin_user'] = $this->session->userdata('admin_user');
        $data['admin'] = $this->ADM->get_admin('', $where_admin);
        $data['web'] = $this->ADM->identitaswebsite();
        @date_default_timezone_set('Asia/Jakarta');
        $data['dashboard_info'] = FALSE;
        $data['breadcrumb'] = 'Lista de todos los Arribos al Almacén';
        $data['content'] = 'admin/content/website/all_arrivals';
        $data['menu_terpilih'] = '1';
        $data['submenu_terpilih'] = '13';
        $data['action'] = (empty($filter1)) ? 'view' : $filter1;
        $data['validate'] = array(
            'identification_number' => 'Name'
        );

        if ($data['action'] == 'view') {
            $data['berdasarkan'] = array('identification_number' => 'N.Identificación de evento');
            $data['cari'] = ($this->input->post('cari')) ? $this->input->post('cari') : 'identification_number';
            $data['q'] = ($this->input->post('q')) ? $this->input->post('q') : '';
            $data['halaman'] = (empty($filter2)) ? 1 : $filter2;
            $data['batas'] = 10;
            $data['page'] = ($data['halaman'] - 1) * $data['batas'];
            $like_arrivalnew[$data['cari']] = $data['q'];
            $data['jml_data'] = $this->ADM->count_unique_identificationsnew('', $like_arrivalnew);
            $data['jml_halaman'] = ceil($data['jml_data'] / $data['batas']);

            $data['unique_identifications'] = $this->ADM->get_unique_identificationsnew($like_arrivalnew, $data['page'], $data['batas']);

            if ($data['admin']->admin_level_kode == 1) {
                $data['onload'] = 'arrivalnew';
                $data['identification_number'] = ($this->input->post('identification_number')) ? $this->input->post('identification_number') : '';

                // Generar identificador único
               // $unique_id = 'AS' . $data['id_supplier'] . $data['id_container'] . $data['id_transport'] . date('Ymd', strtotime($data['event_date'])) . $data['id_driver'] . $data['id_origin'];
                //$data['identification_number'] = $unique_id;

                /*$simpan = $this->input->post('simpan');
                if ($simpan) {
                    $insert['identification_number'] = validasi_sql($data['identification_number']);
                    $this->ADM->insert_arrival($insert);
                    $this->session->set_flashdata('success', 'New arrival has been added successfully!,');
                    redirect("website/arrival");
                }*/
            } else {
                redirect("website/arrival");
            }
        } elseif ($data['action'] == 'edit') {
            if ($data['admin']->admin_level_kode == 1) {
                $data['onload'] = 'identification_number';
                $where_arrivalnew['id_arrivalnew'] = $filter2;
                $arrivalnew = $this->ADM->get_arrivalnew('*', $where_arrivalnew);
                $data['id_arrival'] = ($this->input->post('id_arrival')) ? $this->input->post('id_arrival') : $arrivalnew->id_arrival;
                $data['identification_number'] = ($this->input->post('identification_number')) ? $this->input->post('identification_number') : $arrivalnew->identification_number;

                $simpan = $this->input->post('simpan');
                if ($simpan) {
                    $where_edit['id_arrivalnew'] = $data['id_arrivalnew'];
                    $edit['identification_number'] = $data['identification_number'];
                    $this->ADM->update_arrivalnew($where_edit, $edit);
                    $this->session->set_flashdata('success', 'Arrival has been successfully edited!,');
                    redirect("website/all_arrivals");
                }
            } else {
                redirect("website/all_arrivals");
            }
        } elseif ($data['action'] == 'hapus') {
            if ($data['admin']->admin_level_kode == 1) {
                $where_delete['id_arrival'] = validasi_sql($filter2);
                $this->ADM->delete_arrivalnew($where_delete);
                $this->session->set_flashdata('success', 'The arrival has been successfully deleted!,');
                redirect("website/arrival");
            } else {
                redirect("website/arrival");
            }
        }

        $this->load->vars($data);
        $this->load->view('admin/home');
    } else {
        redirect("wp_login");
    }
}


public function details($identification_number = '', $page = 1) {
    if ($this->session->userdata('logged_in') == TRUE) {
        $where_admin['admin_user'] = $this->session->userdata('admin_user');
        $data['admin'] = $this->ADM->get_admin('', $where_admin);
        $data['web'] = $this->ADM->identitaswebsite();
        @date_default_timezone_set('Asia/Jakarta');
        $data['dashboard_info'] = FALSE;
        $data['breadcrumb'] = 'Detalles del Arribo';
        $data['content'] = 'admin/content/website/details';
        $data['menu_terpilih'] = '1';
        $data['submenu_terpilih'] = '13';

        $data['batas'] = 10; // Número de registros por página
        $offset = ($page - 1) * $data['batas']; // Calcular el offset
        $data['page'] = $page;

        $search_query = $this->input->post('q');
        $data['search_query'] = $search_query;

        if (!empty($identification_number)) {
            // Contar el total de registros relacionados con el identification_number y la búsqueda
            $data['total_records'] = $this->ADM->count_details_by_filter($identification_number, $search_query);
            // Obtener los registros para la página actual con la búsqueda
            $data['details'] = $this->ADM->get_details_by_filter($identification_number, $data['batas'], $offset, $search_query);
            $data['unique_identifications'] = $this->ADM->get_unique_identificationsnew($like_arrivalnew);
        } else {
            $data['total_records'] = 0;
            $data['details'] = array();
        }

        $data['identification_number'] = $identification_number;
        $data['jml_halaman'] = ceil($data['total_records'] / $data['batas']);

        $this->load->view('admin/home', $data);
    } else {
        redirect("wp_login");
    }
}


	//FUNCTION MOVEMENTS	
	public function movements($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']			    = $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']			= 'Movimiento de producto';
			$data['content'] 			= 'admin/content/website/movements';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'identification_number' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('identification_number' => 'N.Identificación de evento', 'status' => 'Estatus', 'nama_supplier' => 'Proveedor', 'container_number' => 'N.identificador del contenedor', 'name_driver' => 'Conductor');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'identification_number';
				$data['q']					=- ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_arrivalnew[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_arrivalnew('', $like_arrivalnew);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
				
			
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					// Recupera los datos del arribo existente
					$where_arrivalnew['id_arrivalnew'] = $filter2;
					$arrivalnew = $this->ADM->get_arrivalnew('*', $where_arrivalnew);

					// Verificar si se encontró el arribo
					if (!$arrivalnew) {
						$this->session->set_flashdata('error', 'Arribo no encontrado.');
						redirect('website/all_arrivals');
					}

					// Procesar los productos asociados al arribo
					$data['productss'] = $this->ADM->get_all_products_by_identificationnew($arrivalnew->identification_number);
					//$productss = $this->ADM->getArrivalsAndMovements();
					 // Llamar al modelo para obtener los datos organizados
					 //$data['productss'] = $this->ADM->get_all_products_by_identificationnew($arrivalnew->$identification_number);

					 
					
					// Actualizar datos generales del arribo
					$data['id_arrivalnew'] = $this->input->post('id_arrivalnew') ?: $arrivalnew->id_arrivalnew;
					$data['id_movement'] = $this->input->post('id_movement') ?: $arrivalnew->id_movement;
					$data['id_arrival'] = $this->input->post('id_arrival') ?: $arrivalnew->id_arrival;
					$data['identification_number'] = $this->input->post('identification_number') ?: $arrivalnew->identification_number;
					$data['sale_order'] = $this->input->post('sale_order') ?: $arrivalnew->sale_order;
					$data['event_type'] = $this->input->post('event_type') ?: $arrivalnew->event_type;
					$data['id_supplier'] = $arrivalnew->id_supplier;
					$data['nama_supplier'] = $arrivalnew->nama_supplier;
					$data['id_container'] = $this->ADM->get_id_container_by_number($this->input->post('container_number'));
					$data['container_number'] = $this->input->post('container_number') ?: $arrivalnew->container_number;
					$data['container_type'] = $this->ADM->get_container_type_by_number($data['container_number']);
					$data['id_origin'] = $this->input->post('id_origin') ?: $arrivalnew->id_origin;
					$data['state'] = $this->input->post('id_origin') ? $this->ADM->get_state($data['id_origin']) : $arrivalnew->state;
					$data['id_maneuver'] = $this->input->post('id_maneuver') ?: $arrivalnew->id_maneuver;
					$data['type_maneuver'] = $this->input->post('id_maneuver') ? $this->ADM->get_type_maneuver($data['id_maneuver']) : $arrivalnew->type_maneuver;
					$data['event_date'] = $this->input->post('event_date') ?: $arrivalnew->event_date;
					$data['id_transport'] = $this->ADM->get_id_transport_by_platenumber($this->input->post('platenumber'));
					$data['platenumber'] = $this->input->post('platenumber') ?: $arrivalnew->platenumber;
					$data['vehicletype'] = $this->ADM->get_vehicletype_by_platenumber($data['platenumber']);
					$data['id_driver'] = $this->input->post('id_driver') ?: $arrivalnew->id_driver;
					$data['name_driver'] = $this->input->post('id_driver') ? $this->ADM->get_name_driver($data['id_driver']) : $arrivalnew->name_driver;

					$products = $this->input->post('products_update');
					$products['id_product']     = ($this->input->post('id_product')) ? $this->input->post('id_product') : $arrivalnew->id_product;
					$products ['id_movement']  =  ($this->input->post('id_movement')) ? $this->input->post('id_movement') : $arrivalnew->id_movement;
					$products['product_name'] = ($this->input->post('product_name')) ? $this->input->post('product_name') : $arrivalnew->product_name;
					//$products['product_name']   = ($this->input->post('id_product')) ? $this->ADM->get_product_name($this->input->post('id_product')) : $arrivalnew->product_name;
					$producs['id_platform']	    = ($this->input->post('id_platform')) ? $this->input->post('id_platform') : $arrivalnew->id_platform;
					if ($this->input->post('id_platform')) {
						$products['type_platform'] = $this->ADM->get_type_platform($products['id_platform']);
					} else {
						$products['type_platform'] = $arrivalnew->type_platform;
					}
					$products['stock']	                  = ($this->input->post('stock')) ? $this->input->post('stock') : $arrivalnew->stock;
					$products['quantity_product_pallet']  = ($this->input->post('quantity_product_pallet')) ? $this->input->post('quantity_product_pallet') : $arrivalnew->quantity_product_pallet;
					$products['quantity_pallet']	      = ($this->input->post('quantity_pallet')) ? $this->input->post('quantity_pallet') : $arrivalnew->quantity_pallet;
					$products['damaged_pallets']	      = ($this->input->post('damaged_pallets')) ? $this->input->post('damaged_pallets') : $arrivalnew->damaged_pallets;
					$products['damaged_stock']	          = ($this->input->post('damaged_stock')) ? $this->input->post('damaged_stock') : $arrivalnew->damaged_stock;
					$products['good_pallets']	          = ($this->input->post('good_pallets')) ? $this->input->post('good_pallets') : $arrivalnew->good_pallets;
					$products['good_stock']	              = ($this->input->post('good_stock')) ? $this->input->post('good_stock') : $arrivalnew->good_stock;
					//$products['available_pallets']	      = ($this->input->post('available_pallets')) ? $this->input->post('available_pallets') : $arrivalnew->available_pallets;
					$products['expiration_date']	      = ($this->input->post('expiration_date')) ? $this->input->post('expiration_date') : $arrivalnew->expiration_date;
					// Datos adicionales del producto
					$data['arrival_time']  = $this->input->post('arrival_time') ?: $arrivalnew->arrival_time;
					$data['maneuver_start'] = $this->input->post('maneuver_start') ?: $arrivalnew->maneuver_start;
					$data['maneuver_end'] = $this->input->post('maneuver_end') ?: $arrivalnew->maneuver_end;
					$data['departure_time'] = $this->input->post('departure_time') ?: $arrivalnew->departure_time;
					$products['note'] = $this->input->post('note') ?: $arrivalnew->note;
					$products['id_type_movement'] = ($this->input->post('id_type_movement')) ? $this->input->post('id_type_movement') : $arrivalnew->id_type_movement;
					$products['type_movements'] = ($this->input->post('id_type_movement')) ? $this->ADM->get_type_type_movement($this->input->post('id_type_movement')) : $arrivalnew->type_movements;
					$products['movement_date'] = $this->input->post('movement_date') ?: $arrivalnew->movement_date;
                    $id_position ['id_position'] = ($this->input->post('id_position')) ? $this->input->post('id_position') : $arrivalnew->id_position; 
					$products['row_location']  = ($this->input->post('id_position')) ? $this->ADN->get_all_position($this->input->post('id_position')) : $arrivalnew->row_location;
					$products['column_location']   = ($this->input->post('id_position')) ? $this->ADM->get_all_position($this->input->post('id_position')) : $arrivalnew->column_location;
					$products['rack_number']   = ($this->input->post('id_position')) ? $this->ADM->get_all_position($this->input->post('id_position')) : $arrivalnew->rack_number;
					$products['level']  = ($this->input->post('id_position'))   ? $this->ADM->get_all_position($this->input->post('id_position')) : $arrivalnew->level;
					$products['movement_created_by'] = $this->input->post('movement_created_by') ?: $arrivalnew->movement_crated_by;
					$products['status'] = $this->input->post('status') ?: $arrivalnew->status;
					$data['created_by'] = $this->input->post('created_by') ?: $arrivalnew->created_by;
					$data['created_date'] = $this->input->post('created_date') ?: $arrivalnew->created_date;
					$data['updated_by']   = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $arrivalnew->updated_by;
					$data['updated_date'] = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $arrivalnew->updated_date;

					if ($this->input->post('simpan')) {
						// Actualizar los datos generales en todos los registros con el mismo identification_number
						/*$general_update = array(
							'sale_order' => validasi_sql($data['sale_order']),
							'event_type' => validasi_sql($data['event_type']),
							'id_supplier' => validasi_sql($data['id_supplier']),
							'id_container' => validasi_sql($data['id_container']),
							'container_number' => validasi_sql($data['container_number']),
							'container_type' => validasi_sql($data['container_type']),
							'id_origin' => validasi_sql($data['id_origin']),
							'state' => validasi_sql($data['state']),
							'id_maneuver' => validasi_sql($data['id_maneuver']),
							'type_maneuver' => validasi_sql($data['type_maneuver']),
							'event_date' => validasi_sql($data['event_date']),
							'id_transport' => validasi_sql($data['id_transport']),
							'platenumber' => validasi_sql($data['platenumber']),
							'vehicletype' => validasi_sql($data['vehicletype']),
							'name_driver' => validasi_sql($data['name_driver']),
							'id_driver' => validasi_sql($data['id_driver']),
							'arrival_time' => validasi_sql($data['arrival_time']),
							'maneuver_start' => validasi_sql($data['maneuver_start']),
							'maneuver_end' => validasi_sql($data['maneuver_end']),
							'departure_time' => validasi_sql($data['departure_time']),
							//'updated_by' => validasi_sql($data['admin']->admin_user),
							//'updated_date' => date('Y-m-d H:i:s')
							'updated_by' => validasi_sql($data['updated_by']),
							'updated_date' => validasi_sql($data['updated_date'])
						);*/

						/* // Actualiza todos los registros que comparten el mismo identification_number
						$this->db->where('identification_number', $data['identification_number']);
						$this->db->update('arrival', $general_update);*/

						// Actualización de productos
						$products_update = $this->input->post('products_update');

						if ($products_update) {
							foreach ($products_update as $product) {
								// Verifica que el id_product y el identification_number estén presentes
								if (
									isset($product['id_product']) && !empty($product['id_product']) &&
									isset($product['product_name']) && !empty($product['product_name'])
								) {

									// Actualización de los productos
									$product_update = array(
										//'id_arrival' => validasi_sql($product['id_arrival']),
										//'identification_number' => validasi_sql($product['identification_number']),
										//'id_product' => validasi_sql($product['id_product']),
										//'product_name' => validasi_sql($product['product_name']),
										//'id_platform' => validasi_sql($product['id_platform']),
										//'type_platform' => validasi_sql($product['type_platform']),
										'stock' => validasi_sql($product['stock']),
										'quantity_product_pallet' => validasi_sql($product['quantity_product_pallet']),
										'quantity_pallet' => validasi_sql($product['quantity_pallet']),
										'damaged_pallets' => validasi_sql($product['damaged_pallets']),
										'damaged_stock' => validasi_sql($product['damaged_stock']),
										'good_pallets' => validasi_sql($product['good_pallets']),
										'good_stock' => validasi_sql($product['good_stock']),
										'available_pallets' => validasi_sql($product['available_pallets']),
										'id_type_movement' => validasi_sql($product['id_type_movement']),
										'type_movements' => $this->ADM->get_type_type_movement($product['id_type_movement']),
										'movement_date' => validasi_sql($product['movement_date']),
										'id_position' => validasi_sql($product['id_position']),
										'row_location' => validasi_sql($product['row_location']),
										'column_location' => validasi_sql($product['column_location']),
										'rack_number' => validasi_sql($product['rack_number']),
										'level' => validasi_sql($product['level']),
										//'expiration_date' => validasi_sql($product['expiration_date']),
										'note' => validasi_sql($product['note']),
										'status' => validasi_sql($product['status']),
										//'updated_by' => validasi_sql($data['admin']->admin_user),
										//'updated_date' => date('Y-m-d H:i:s')
									);

									// Actualiza el registro en la base de datos
									//$this->db->where('id_product', $product['id_product']);
									//$this->db->where('identification_number', $data['identification_number']);
									//$this->db->update('arrivalnew', $product_update);
									
           
			
										$where = [
											'id_product' => $product['id_product'],
											'identification_number' => $data['identification_number']
										];
								
										$this->db->select('id_position, type_movements');
										$this->db->from('arrivalnew');
										$this->db->where($where);
										$previous = $this->db->get()->row();
								
										// Verificar si el tipo de movimiento es "Salida"
										if (!empty($product['type_movements']) && $product['type_movements'] === 'Salida') {
											// Liberar la posición
											if (!empty($previous) && !empty($previous->id_position)) {
												$this->update_position_availability($previous->id_position, 1);
											}
								
											// Actualizar los campos relacionados con posición a NULL
											$this->db->where($where);
											$this->db->update('arrivalnew', [
												'id_position' => NULL,
												'row_location' => NULL,
												'column_location' => NULL,
												'rack_number' => NULL,
												'level' => NULL,
											]);
								
											echo "Posición liberada para ID: " . $product['id_product'] . "<br>";
											continue; // Pasar al siguiente producto, ya que no es necesario actualizar más
										}
								
										// Verificar si la posición ha cambiado
										if (!empty($previous) && $previous->id_position != $product['id_position']) {
											$this->update_position_availability($previous->id_position, 1);
										}
								
										if (!empty($product['id_position'])) {
											$this->update_position_availability($product['id_position'], 0);
										}
								
										// Comparar cambios antes de actualizar
										$should_update = false;
										foreach ($product_update as $key => $value) {
											if ($previous->{$key} ?? null != $value) {
												$should_update = true;
												break;
											}
										}
								
										if ($should_update) {
											$this->db->where($where);
											$this->db->update('arrivalnew', $product_update);

									// Verifica si la actualización fue exitosa
									if ($this->db->affected_rows() > 0) {
										echo "Inserción exitosa para el producto con ID: " . $product['id_product'] . "<br>";
									} else {
										echo "Error al insertar el producto con ID: " . $product['id_product'];
										echo "Error de SQL: " . $this->db->error()['message'] . "<br>";
									}
								}
								} else {
									echo "id_product o product_name no válidos para el producto.";
								}
							}
						} else {
							echo "No se recibieron productos.";
						}
						// Inserción de nuevos productos
						$new_insert = $this->input->post('products_insert');
						/*
						echo '<pre>';
						print_r($_POST);
						echo '</pre>';
                        */
					

						if ($new_insert) {
							foreach ($new_insert as $new_product) {
								if (isset($new_product['product_name']) && !empty($new_product['product_name'])) {
									// Ajustar los datos del producto específico
									$insert = array(
										//'identification_number' => validasi_sql($data['identification_number']),
										'sale_order' => validasi_sql($data['sale_order']),
										'id_supplier' => validasi_sql($data['id_supplier']),
										//'id_product' => validasi_sql($data['id_product']),
										//'product_name' => $this->ADM->get_product_name($data['id_product'])->product_name,
										'nama_supplier' => $this->ADM->get_nama_supplier($data['id_supplier'])->nama_supplier,
										'id_arrival' => validasi_sql($new_product['id_arrival']),
										'id_movement' => validasi_sql($new_product['id_movement']),
										'identification_number' => ($data['identification_number']),
										'id_product' => validasi_sql($new_product['id_product']),
										'product_name' => validasi_sql($new_product['product_name']),
										'event_type' => validasi_sql($data['event_type']),
										'id_container' => validasi_sql($data['id_container']),
										'container_number' => validasi_sql($data['container_number']),
										'container_type' => validasi_sql($data['container_type']),
										'state' => validasi_sql($data['state']),
										'id_origin' => validasi_sql($data['id_origin']),
										'type_maneuver' => validasi_sql($data['type_maneuver']),
										'id_maneuver' => validasi_sql($data['id_maneuver']),
										'event_date' => validasi_sql($data['event_date']),
										'id_platform' => validasi_sql($new_product['id_platform']),
										'type_platform' => $this->ADM->get_type_platform($new_product['id_platform']),
										// print_r($type_platform_data), // Verifica qué se está devolviendo aquí.
										//'type_platform' => $this->ADM->get_type_platform($product['id_platform'])->type_platform,
										'id_transport' => validasi_sql($data['id_transport']),
										'platenumber' => validasi_sql($data['platenumber']),
										'vehicletype' => validasi_sql($data['vehicletype']),
										'name_driver' => validasi_sql($data['name_driver']),
										'id_driver' => validasi_sql($data['id_driver']),
										'stock' => validasi_sql($new_product['stock']),
										//'id_arrival' => ($data['id_arrival']),
										'quantity_product_pallet' => validasi_sql($new_product['quantity_product_pallet']),
										'quantity_pallet' => validasi_sql($new_product['quantity_pallet']),
										'damaged_pallets' => validasi_sql($new_product['damaged_pallets']),
										'damaged_stock' => validasi_sql($new_product['damaged_stock']),
										'good_pallets' => validasi_sql($new_product['good_pallets']),
										'good_stock' => validasi_sql($new_product['good_stock']),
										'available_pallets' => validasi_sql($new_product['available_pallets']),
										'arrival_time' => validasi_sql($data['arrival_time']),
										'maneuver_start' => validasi_sql($data['maneuver_start']),
										'id_type_movement' => validasi_sql($new_product['id_type_movement']),
										'type_movements' => $this->ADM->get_type_type_movement($new_product['id_type_movement']),
										'movement_date' => validasi_sql($new_product['movement_date']),
										'id_position' => validasi_sql($new_product['id_position']),
										//'row_location' => validasi_sql($new_product['row_location']),
										'row_location' => validasi_sql($new_product['row_location']),
										'column_location' => validasi_sql($new_product['column_location']),
										'rack_number' => validasi_sql($new_product['rack_number']),
										'level' => validasi_sql($new_product['level']),
										'movement_created_by' => validasi_sql($new_product['movement_created_by']),
										'expiration_date' => validasi_sql($new_product['expiration_date']),
										'maneuver_end' => validasi_sql($data['maneuver_end']),
										'departure_time' => validasi_sql($data['departure_time']),
										'note' => validasi_sql($new_product['note']),
										'status' => validasi_sql($new_product['status']),
										'created_by' => validasi_sql($data['created_by']),
										'identification_number' => $data['identification_number']


									);
									// Imprimir el valor de id_supplier para depuración
									//echo 'Valor de id_supplier: ' . $insert['id_supplier'] . "\n";
									//echo 'Valor de nama_supplier: ' . $insert['nama_supplier'] . "\n";
									echo 'Valor de id_product: ' . $insert['id_product'] . "\n";
									echo 'Valor de product_name: ' . $insert['product_name'] . "\n";
									//echo 'Valor de container_number ' . $insert['container_number'] . "\n";
									//echo 'Valor de container_type: ' . $insert['container_type'] . "\n";
									//echo 'Valor de id_container: ' . $insert['id_container'] . "\n";
									//echo 'Valor de id_transport: ' . $insert['id_transport'] . "\n";
									//echo 'Valor de platenumber: ' . $insert['platenumber'] . "\n";
									//echo 'Valor de vehicletype: ' . $insert['vehicletype'] . "\n";
									/*foreach ($products as $product) {
										echo '<pre>';
										print_r($product);
										echo '</pre>';
										
										// Continuar con la inserción...
									}*/
									
									// Insertar cada producto
									$this->ADM->insert_arrivalnew($insert);
								}
							}
						}

						// Después de que todas las actualizaciones hayan sido procesadas
						$this->session->set_flashdata('success', 'Movements y productos insertados correctamente.');

						// Redirige después de que se han actualizado todos los productos
						redirect('website/all_arrivals');
						
					}
				} else {
					$this->session->set_flashdata('success', 'Movements y productos insertados correctamente.');

					redirect('website/all_arrivals');
				}
			
	
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_arrival']		= validasi_sql($filter2);
					$this->ADM->delete_arrival($where_delete);
					$this->session->set_flashdata('success', 'The arrival has been successfully deleted!,');
					redirect("website/all_arrivals");
				} else {
					redirect("website/all_arrivals");
				}
			}
			// Obtener clientes activos y pasarlos a la vista
			    $where_supplier = array('status' => 'activo');
				$data['suppliers'] = $this->ADM->get_all_supplier('id_supplier, nama_supplier', $where_supplier);	
				$where_products = array('status' => 'activo');
				$data['products'] = $this->ADM->get_all_products('id_product, product_name', $where_products);
				$where_platform = array('status' => 'activo');
				$data['platforms'] = $this->ADM->get_all_platform('id_platform, type_platform', $where_platform);
				$where_position = array('status' => 'activo');
				$data['positions'] = $this->ADM->get_all_position('id_position, row_location, column_location, rack_number, level', $where_position);
				$where_type_movement = array('status' => 'activo');
				$data['type_movementsss'] = $this->ADM->get_all_type_movement('id_type_movement, type_movements', $where_type_movement);
			    $where_container = array('status' => 'activo');
				$data['containers'] = $this->ADM->get_all_container('id_container, container_type, container_number', $where_container);
			    $where_origin = array('status' => 'activo');
				$data['origins'] = $this->ADM->get_all_origin('id_origin, state', $where_origin);
			    $where_maneuver = array('status' => 'activo');
				$data['maneuvers'] = $this->ADM->get_all_maneuver('id_maneuver, type_maneuver', $where_maneuver);
				$where_transport = array('vehiclestatus' => 'activo');
				$data['transports'] = $this->ADM->get_all_transport('id_transport, platenumber, vehicletype', $where_transport);
				$where_driver = array('status_driver' => 'activo');
				$data['drivers'] = $this->ADM->get_all_driver('id_driver, name_driver', $where_driver);
				
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	public function get_position_by_id() {
		$id_position = $this->input->post('id_position');
		$position = $this->ADM->get_position_by_id($id_position);
		echo json_encode($position);
	}
//*********************************************************************************************************************************************** */

public function update_position_availability($id_position, $is_available)
{
    $this->db->where('id_position', $id_position);
    $this->db->update('position', ['is_available' => $is_available]);
}



//*********************************************************************************************************************************************** */

//FUNCTION BOARDING	
public function boarding($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']			= 'Embarque';
			$data['content'] 			= 'admin/content/website/boarding';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'identification_number' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('identification_number' => 'N.Identificación de evento', 'status' => 'Estatus', 'nama_supplier' => 'Proveedor', 'container_number' => 'N.identificador del contenedor', 'name_driver' => 'Conductor');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'identification_number';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_boarding[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_boarding('', $like_boarding);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
				
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']		= 'boarding';

					 // Aquí se cargan los datos del formulario
					 $data['identification_number'] = $this->input->post('identification_number') ?? '';
					 $data['sale_order']            = $this->input->post('sale_order') ?? '';
					 $data['id_supplier']           = $this->input->post('id_supplier') ?? '';
					 //$data['id_product']            = $this->input->post('id_product')?? '';
					 //$data['product_name']          = $this->ADM->get_product_name($data['id_product']);
					 $data['event_type']            = $this->input->post('event_type') ?? '';
					 $data['id_container']          = $this->ADM->get_id_container_by_number($this->input->post('container_number'));
					 $data['container_number']      = $this->ADM->get_container_number($data['id_container']);
					 $data['container_type']        = $this->ADM->get_container_type($data['id_container']);
					 $data['id_destination']             = $this->input->post('id_destination') ?? '';
					 $data['state']                 = $this->ADM->get_state($data['id_origin']);
					 $data['id_maneuver']           = $this->input->post('id_maneuver') ?? '';
					 $data['type_maneuver']         = $this->ADM->get_type_maneuver($data['id_maneuver']);
					 $data['event_date']            = $this->input->post('event_date') ?? '';
					 //$product['id_platform']           = $this->input->post('id_platform') ?? '';
					 //$product['type_platform']         = $this->ADM->get_type_platform($product['id_platform']);
					 $data['id_driver']             = $this->input->post('id_driver') ?? '';
					 $data['name_driver']           = $this->ADM->get_name_driver($data['id_driver']);
					 $data['id_transport']          = $this->ADM->get_id_transport_by_platenumber($this->input->post('platenumber'));
					 $data['platenumber']           = $this->ADM->get_platenumber($data['id_transport']);
					 $data['vehicletype']           = $this->ADM->get_vehicletype($data['id_transport']);
					 $data['arrival_time']          = $this->input->post('arrival_time') ?? '';
					 $data['maneuver_start']        = $this->input->post('maneuver_start') ?? '';
					 $data['maneuver_end']          = $this->input->post('maneuver_end') ?? '';
					 $data['departure_time']        = $this->input->post('departure_time') ?? '';
					// $data['note']                  = $this->input->post('note') ?? '';
					// $data['status']                = $this->input->post('status') ?? '';
					 $data['created_by']            = $this->input->post('created_by') ?? '';
					 
					 // Generar identificador único para el arribo
					 $unique_id = 'AS' . $data['id_supplier'] . $data['id_container'] . $data['id_transport'] . date('Ymd', strtotime($data['event_date'])) . $data['id_driver'] . $data['id_origin'];
					 $data['identification_number'] = $unique_id;
					  // Obtener datos de productos del formulario (suponiendo que vienen en arrays)
					  $products = $this->input->post('products'); // Array de productos

					  if ($this->input->post('simpan')) {
						  foreach ($products as $product) {
							  // Ajustar los datos del producto específico
							  $insert = array(
								  'identification_number' => validasi_sql($data['identification_number']),
								  'sale_order' => validasi_sql($data['sale_order']),
								  'id_supplier' => validasi_sql($data['id_supplier']),
								 // 'id_product' => validasi_sql($data['id_product']),
								  //'product_name' => $this->ADM->get_product_name($data['id_product'])->product_name,
								  'nama_supplier' => $this->ADM->get_nama_supplier($data['id_supplier'])->nama_supplier,
								  'id_product' => validasi_sql($product['id_product']),
								  'product_name' => $this->ADM->get_product_name($product['id_product'])->product_name,
								  'event_type' => validasi_sql($data['event_type']),
								  'id_container' => validasi_sql($data['id_container']),
								  'container_number' => validasi_sql($data['container_number']),
								  'container_type' => validasi_sql($data['container_type']),
								  'state' => validasi_sql($data['state']),
								  'id_destination' => validasi_sql($data['id_destination']),
								  'type_maneuver' => validasi_sql($data['type_maneuver']),
								  'id_maneuver' => validasi_sql($data['id_maneuver']),
								  'event_date' => validasi_sql($data['event_date']),
								  'id_platform' => validasi_sql($product['id_platform']),
								  'type_platform' => $this->ADM->get_type_platform($product['id_platform']),
								 // print_r($type_platform_data), // Verifica qué se está devolviendo aquí.
								  //'type_platform' => $this->ADM->get_type_platform($product['id_platform'])->type_platform,
								  'id_transport' => validasi_sql($data['id_transport']),
								  'platenumber' => validasi_sql($data['platenumber']),
								  'vehicletype' => validasi_sql($data['vehicletype']),
								  'name_driver' => validasi_sql($data['name_driver']),
								  'id_driver' => validasi_sql($data['id_driver']),
								  'stock' => validasi_sql($product['stock']),
								  'quantity_product_pallet' => validasi_sql($product['quantity_product_pallet']),
								  'quantity_pallet' => validasi_sql($product['quantity_pallet']),
								  'damaged_pallets' => validasi_sql($product['damaged_pallets']),
								  'damaged_stock' => validasi_sql($product['damaged_stock']),
								  'good_pallets' => validasi_sql($product['good_pallets']),
								  'good_stock' => validasi_sql($product['good_stock']),
								  'available_pallets' => validasi_sql($product['available_pallets']),
								  'arrival_time' => validasi_sql($data['arrival_time']),
								  'maneuver_start' => validasi_sql($data['maneuver_start']),
								  'expiration_date' => validasi_sql($product['expiration_date']),
								  'maneuver_end' => validasi_sql($data['maneuver_end']),
								  'departure_time' => validasi_sql($data['departure_time']),
								  'note' => validasi_sql($product['note']),
								  'status' => validasi_sql($product['status']),
								  'created_by' => validasi_sql($data['created_by']),

								  
							  );
							  // Imprimir el valor de id_supplier para depuración
						echo 'Valor de id_supplier: ' . $insert['id_supplier'] . "\n";
                        echo 'Valor de nama_supplier: ' . $insert['nama_supplier'] . "\n";
                        echo 'Valor de id_product: ' . $insert['id_product'] . "\n";
                        echo 'Valor de product_name: ' . $insert['product_name'] . "\n";
						echo 'Valor de container_number ' . $insert['container_number'] . "\n";
						echo 'Valor de container_type: ' . $insert['container_type'] . "\n";
						echo 'Valor de id_container: ' . $insert['id_container'] . "\n";
						echo 'Valor de id_transport: ' . $insert['id_transport'] . "\n";
						echo 'Valor de platenumber: ' . $insert['platenumber'] . "\n";
						echo 'Valor de vehicletype: ' . $insert['vehicletype'] . "\n";
						/*foreach ($products as $product) {
							echo '<pre>';
							print_r($product);
							echo '</pre>';
							
							// Continuar con la inserción...
						}*/
							  // Insertar cada producto
							  $this->ADM->insert_boarding($insert);
						  }
	  
						  $this->session->set_flashdata('success', 'New boarding has been added successfully!');
						  redirect("website/boarding");	
					}
				} else {
					redirect("website/boarding");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					// Recupera los datos del arribo existente
					$where_boarding['id_boarding'] = $filter2;
					$boarding = $this->ADM->get_boarding('*', $where_boarding);

					// Verificar si se encontró el arribo
					if (!$boarding) {
						$this->session->set_flashdata('error', 'Embarque no encontrado.');
						redirect('website/boarding');
					}

					// Procesar los productos asociados al arribo
					$data['productss'] = $this->ADM->get_all_products_by_identification($boarding->identification_number);

					// Actualizar datos generales del arribo
					$data['id_boarding'] = $this->input->post('id_boarding') ?: $boarding->id_boarding;
					$data['identification_number'] = $this->input->post('identification_number') ?: $arrival->identification_number;
					$data['sale_order'] = $this->input->post('sale_order') ?: $arrival->sale_order;
					$data['event_type'] = $this->input->post('event_type') ?: $arrival->event_type;
					$data['id_supplier'] = $arrival->id_supplier;
					$data['nama_supplier'] = $arrival->nama_supplier;
					$data['id_container'] = $this->ADM->get_id_container_by_number($this->input->post('container_number'));
					$data['container_number'] = $this->input->post('container_number') ?: $arrival->container_number;
					$data['container_type'] = $this->ADM->get_container_type_by_number($data['container_number']);
					$data['id_origin'] = $this->input->post('id_origin') ?: $arrival->id_origin;
					$data['state'] = $this->input->post('id_origin') ? $this->ADM->get_state($data['id_origin']) : $arrival->state;
					$data['id_maneuver'] = $this->input->post('id_maneuver') ?: $arrival->id_maneuver;
					$data['type_maneuver'] = $this->input->post('id_maneuver') ? $this->ADM->get_type_maneuver($data['id_maneuver']) : $arrival->type_maneuver;
					$data['event_date'] = $this->input->post('event_date') ?: $arrival->event_date;
					$data['id_transport'] = $this->ADM->get_id_transport_by_platenumber($this->input->post('platenumber'));
					$data['platenumber'] = $this->input->post('platenumber') ?: $arrival->platenumber;
					$data['vehicletype'] = $this->ADM->get_vehicletype_by_platenumber($data['platenumber']);
					$data['id_driver'] = $this->input->post('id_driver') ?: $arrival->id_driver;
					$data['name_driver'] = $this->input->post('id_driver') ? $this->ADM->get_name_driver($data['id_driver']) : $arrival->name_driver;

					$products = $this->input->post('products_update');
					$products['id_product']     = ($this->input->post('id_product')) ? $this->input->post('id_product') : $arrival->id_product;
					$products['product_name']   = ($this->input->post('id_product')) ? $this->ADM->get_product_name1($this->input->post('id_product')) : $arrival->product_name;
					$producs['id_platform']	      = ($this->input->post('id_platform')) ? $this->input->post('id_platform') : $arrival->id_platform;
					if ($this->input->post('id_platform')) {
						$products['type_platform'] = $this->ADM->get_type_platform($products['id_platform']);
					} else {
						$products['type_platform'] = $arrival->type_platform;
					}
					$products['stock']	                  = ($this->input->post('stock')) ? $this->input->post('stock') : $arrival->stock;
					$products['quantity_product_pallet']  = ($this->input->post('quantity_product_pallet')) ? $this->input->post('quantity_product_pallet') : $arrival->quantity_product_pallet;
					$products['quantity_pallet']	      = ($this->input->post('quantity_pallet')) ? $this->input->post('quantity_pallet') : $arrival->quantity_pallet;
					$products['damaged_pallets']	      = ($this->input->post('damaged_pallets')) ? $this->input->post('damaged_pallets') : $arrival->damaged_pallets;
					$products['damaged_stock']	          = ($this->input->post('damaged_stock')) ? $this->input->post('damaged_stock') : $arrival->damaged_stock;
					$products['good_pallets']	          = ($this->input->post('good_pallets')) ? $this->input->post('good_pallets') : $arrival->good_pallets;
					$products['good_stock']	              = ($this->input->post('good_stock')) ? $this->input->post('good_stock') : $arrival->good_stock;
					$products['available_pallets']	      = ($this->input->post('available_pallets')) ? $this->input->post('available_pallets') : $arrival->available_pallets;
					$products['expiration_date']	      = ($this->input->post('expiration_date')) ? $this->input->post('expiration_date') : $arrival->expiration_date;
					// Datos adicionales del producto
					$data['arrival_time']  = $this->input->post('arrival_time') ?: $arrival->arrival_time;
					$data['maneuver_start'] = $this->input->post('maneuver_start') ?: $arrival->maneuver_start;
					$data['maneuver_end'] = $this->input->post('maneuver_end') ?: $arrival->maneuver_end;
					$data['departure_time'] = $this->input->post('departure_time') ?: $arrival->departure_time;
					$products['note'] = $this->input->post('note') ?: $arrival->note;
					$products['status'] = $this->input->post('status') ?: $arrival->status;
					$data['created_by'] = $this->input->post('created_by') ?: $arrival->created_by;
					$data['created_date'] = $this->input->post('created_date') ?: $arrival->created_date;
					$data['updated_by']   = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $arrival->updated_by;
					$data['updated_date'] = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $arrival->updated_date;

					if ($this->input->post('simpan')) {
						// Actualizar los datos generales en todos los registros con el mismo identification_number
						$general_update = array(
							'sale_order' => validasi_sql($data['sale_order']),
							'event_type' => validasi_sql($data['event_type']),
							'id_supplier' => validasi_sql($data['id_supplier']),
							'id_container' => validasi_sql($data['id_container']),
							'container_number' => validasi_sql($data['container_number']),
							'container_type' => validasi_sql($data['container_type']),
							'id_origin' => validasi_sql($data['id_origin']),
							'state' => validasi_sql($data['state']),
							'id_maneuver' => validasi_sql($data['id_maneuver']),
							'type_maneuver' => validasi_sql($data['type_maneuver']),
							'event_date' => validasi_sql($data['event_date']),
							'id_transport' => validasi_sql($data['id_transport']),
							'platenumber' => validasi_sql($data['platenumber']),
							'vehicletype' => validasi_sql($data['vehicletype']),
							'name_driver' => validasi_sql($data['name_driver']),
							'id_driver' => validasi_sql($data['id_driver']),
							'arrival_time' => validasi_sql($data['arrival_time']),
							'maneuver_start' => validasi_sql($data['maneuver_start']),
							'maneuver_end' => validasi_sql($data['maneuver_end']),
							'departure_time' => validasi_sql($data['departure_time']),
							//'updated_by' => validasi_sql($data['admin']->admin_user),
							//'updated_date' => date('Y-m-d H:i:s')
							'updated_by' => validasi_sql($data['updated_by']),
							'updated_date' => validasi_sql($data['updated_date'])
						);

						// Actualiza todos los registros que comparten el mismo identification_number
						$this->db->where('identification_number', $data['identification_number']);
						$this->db->update('boarding', $general_update);

						// Actualización de productos
						$products_update = $this->input->post('products_update');

						if ($products_update) {
							foreach ($products_update as $product) {
								// Verifica que el id_product y el identification_number estén presentes
								if (
									isset($product['id_product']) && !empty($product['id_product']) &&
									isset($product['product_name']) && !empty($product['product_name'])
								) {

									// Actualización de los productos
									$product_update = array(
										//'id_product' => validasi_sql($product['id_product']),
										'product_name' => validasi_sql($product['product_name']),
										'id_platform' => validasi_sql($product['id_platform']),
										'type_platform' => validasi_sql($product['type_platform']),
										'stock' => validasi_sql($product['stock']),
										'quantity_product_pallet' => validasi_sql($product['quantity_product_pallet']),
										'quantity_pallet' => validasi_sql($product['quantity_pallet']),
										'damaged_pallets' => validasi_sql($product['damaged_pallets']),
										'damaged_stock' => validasi_sql($product['damaged_stock']),
										'good_pallets' => validasi_sql($product['good_pallets']),
										'good_stock' => validasi_sql($product['good_stock']),
										'available_pallets' => validasi_sql($product['available_pallets']),
										'expiration_date' => validasi_sql($product['expiration_date']),
										'note' => validasi_sql($product['note']),
										'status' => validasi_sql($product['status']),
										//'updated_by' => validasi_sql($data['admin']->admin_user),
										//'updated_date' => date('Y-m-d H:i:s')
									);

									// Actualiza el registro en la base de datos
									$this->db->where('id_product', $product['id_product']);
									$this->db->where('identification_number', $data['identification_number']);
									$this->db->update('boarding', $product_update);

									// Verifica si la actualización fue exitosa
									if ($this->db->affected_rows() > 0) {
										echo "Actualización exitosa para el producto con ID: " . $product['id_product'] . "<br>";
									} else {
										echo "Error al actualizar el producto con ID: " . $product['id_product'];
										echo "Error de SQL: " . $this->db->error()['message'] . "<br>";
									}
								} else {
									echo "id_product o product_name no válidos para el producto.";
								}
							}
						} else {
							echo "No se recibieron productos.";
						}
						// Inserción de nuevos productos
						$new_products = $this->input->post('products_insert');
						
						/*echo '<pre>';
						print_r($_POST);
						echo '</pre>';

						foreach ($new_products as $product) {
							echo '<pre>';
							print_r($product);
							echo '</pre>';

							// Continuar con la inserción...
						}*/

						if ($new_products) {
							foreach ($new_products as $new_product) {
								if (isset($new_product['product_name']) && !empty($new_product['product_name'])) {
									// Ajustar los datos del producto específico
									$insert = array(
										//'identification_number' => validasi_sql($data['identification_number']),
										'sale_order' => validasi_sql($data['sale_order']),
										'id_supplier' => validasi_sql($data['id_supplier']),
										// 'id_product' => validasi_sql($data['id_product']),
										//'product_name' => $this->ADM->get_product_name($data['id_product'])->product_name,
										'nama_supplier' => $this->ADM->get_nama_supplier($data['id_supplier'])->nama_supplier,
										'id_product' => validasi_sql($new_product['id_product']),
										'product_name' => $this->ADM->get_product_name($new_product['id_product'])->product_name,
										'event_type' => validasi_sql($data['event_type']),
										'id_container' => validasi_sql($data['id_container']),
										'container_number' => validasi_sql($data['container_number']),
										'container_type' => validasi_sql($data['container_type']),
										'state' => validasi_sql($data['state']),
										'id_origin' => validasi_sql($data['id_origin']),
										'type_maneuver' => validasi_sql($data['type_maneuver']),
										'id_maneuver' => validasi_sql($data['id_maneuver']),
										'event_date' => validasi_sql($data['event_date']),
										'id_platform' => validasi_sql($new_product['id_platform']),
										'type_platform' => $this->ADM->get_type_platform($new_product['id_platform']),
										// print_r($type_platform_data), // Verifica qué se está devolviendo aquí.
										//'type_platform' => $this->ADM->get_type_platform($product['id_platform'])->type_platform,
										'id_transport' => validasi_sql($data['id_transport']),
										'platenumber' => validasi_sql($data['platenumber']),
										'vehicletype' => validasi_sql($data['vehicletype']),
										'name_driver' => validasi_sql($data['name_driver']),
										'id_driver' => validasi_sql($data['id_driver']),
										'stock' => validasi_sql($new_product['stock']),
										'quantity_product_pallet' => validasi_sql($new_product['quantity_product_pallet']),
										'quantity_pallet' => validasi_sql($new_product['quantity_pallet']),
										'damaged_pallets' => validasi_sql($new_product['damaged_pallets']),
										'damaged_stock' => validasi_sql($new_product['damaged_stock']),
										'good_pallets' => validasi_sql($new_product['good_pallets']),
										'good_stock' => validasi_sql($new_product['good_stock']),
										'available_pallets' => validasi_sql($new_product['available_pallets']),
										'arrival_time' => validasi_sql($data['arrival_time']),
										'maneuver_start' => validasi_sql($data['maneuver_start']),
										'expiration_date' => validasi_sql($new_product['expiration_date']),
										'maneuver_end' => validasi_sql($data['maneuver_end']),
										'departure_time' => validasi_sql($data['departure_time']),
										'note' => validasi_sql($new_product['note']),
										'status' => validasi_sql($new_product['status']),
										'created_by' => validasi_sql($data['created_by']),
										'identification_number' => $data['identification_number']


									);
									// Imprimir el valor de id_supplier para depuración
									echo 'Valor de id_supplier: ' . $insert['id_supplier'] . "\n";
									echo 'Valor de nama_supplier: ' . $insert['nama_supplier'] . "\n";
									echo 'Valor de id_product: ' . $insert['id_product'] . "\n";
									echo 'Valor de product_name: ' . $insert['product_name'] . "\n";
									echo 'Valor de container_number ' . $insert['container_number'] . "\n";
									echo 'Valor de container_type: ' . $insert['container_type'] . "\n";
									echo 'Valor de id_container: ' . $insert['id_container'] . "\n";
									echo 'Valor de id_transport: ' . $insert['id_transport'] . "\n";
									echo 'Valor de platenumber: ' . $insert['platenumber'] . "\n";
									echo 'Valor de vehicletype: ' . $insert['vehicletype'] . "\n";
									/*foreach ($products as $product) {
										echo '<pre>';
										print_r($product);
										echo '</pre>';
										
										// Continuar con la inserción...
									}*/
									
									// Insertar cada producto
									$this->ADM->insert_boarding($insert);
								}
							}
						}

						// Después de que todas las actualizaciones hayan sido procesadas
						$this->session->set_flashdata('success', 'Arribo y productos actualizados correctamente.');

						// Redirige después de que se han actualizado todos los productos
						redirect('website/boarding');
					}
				} else {
					$this->session->set_flashdata('success', 'Arribo y productos actualizados correctamente.');

					redirect('website/boarding');
				}
			
	
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_boarding']		= validasi_sql($filter2);
					$this->ADM->delete_boarding($where_delete);
					$this->session->set_flashdata('success', 'The boarding has been successfully deleted!,');
					redirect("website/boarding");
				} else {
					redirect("website/boarding");
				}
			}
			// Obtener clientes activos y pasarlos a la vista
			    $where_supplier = array('status' => 'activo');
				$data['suppliers'] = $this->ADM->get_all_supplier('id_supplier, nama_supplier', $where_supplier);	
				$where_products = array('status' => 'activo');
				$data['products'] = $this->ADM->get_all_products('id_product, product_name', $where_products);
				$where_platform = array('status' => 'activo');
				$data['platforms'] = $this->ADM->get_all_platform('id_platform, type_platform', $where_platform);
			    $where_container = array('status' => 'activo');
				$data['containers'] = $this->ADM->get_all_container('id_container, container_type, container_number', $where_container);
			    $where_destination = array('status' => 'activo');
				$data['destinations'] = $this->ADM->get_all_destination('id_destination, state', $where_destination);
			    $where_maneuver = array('status' => 'activo');
				$data['maneuvers'] = $this->ADM->get_all_maneuver('id_maneuver, type_maneuver', $where_maneuver);
				$where_transport = array('vehiclestatus' => 'activo');
				$data['transports'] = $this->ADM->get_all_transport('id_transport, platenumber, vehicletype', $where_transport);
				$where_driver = array('status_driver' => 'activo');
				$data['drivers'] = $this->ADM->get_all_driver('id_driver, name_driver', $where_driver);
				
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	// FUNCTION POSITION
	public function position($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Ubicación';
			$data['content'] 			= 'admin/content/website/position';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'column_location' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('column_location' => 'Ubicación por columna', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'column_location';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_position[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_position('', $like_position);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				  = 'position';
					$data['row_location']	      = ($this->input->post('row_location')) ? $this->input->post('row_location') : '';
					$data['column_location']	  = ($this->input->post('column_location')) ? $this->input->post('column_location') : '';
					$data['rack_number']	      = ($this->input->post('rack_number')) ? $this->input->post('rack_number') : '';
					$data['level']	              = ($this->input->post('level')) ? $this->input->post('level') : '';
					$data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['created_by']           = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan						  = $this->input->post('simpan');
					if ($simpan) {
						$insert['row_location']		= validasi_sql($data['row_location']);
						$insert['column_location']  = validasi_sql($data['column_location']);
						$insert['rack_number']	    = validasi_sql($data['rack_number']);
						$insert['level']		  = validasi_sql($data['level']);
						$insert['note']           = validasi_sql($data['note']);
						$insert['status']         = validasi_sql($data['status']);
						$insert['created_by']     = validasi_sql($data['created_by']);
						$this->ADM->insert_position($insert);
						$this->session->set_flashdata('success', 'New location has been added successfully!,');
						redirect("website/position");
					}
				} else {
					redirect("website/position");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				 = 'type_position';
					$where_position['id_position']	 = $filter2;
					$position				         =  $this->ADM->get_position('*', $where_position);
					$data['id_position']	         = ($this->input->post('id_position')) ? $this->input->post('id_position') : $position->id_position;
					$data['row_location']            = ($this->input->post('row_location')) ? $this->input->post('row_location') : $position->row_location;
					$data['column_location']         = ($this->input->post('column_location')) ? $this->input->post('column_location') : $position->column_location;
					$data['rack_number']             = ($this->input->post('rack_number')) ? $this->input->post('rack_number') : $position->rack_number;
					$data['level']                   = ($this->input->post('level')) ? $this->input->post('level') : $position->level;
					$data['note']	                 = ($this->input->post('note')) ? $this->input->post('note') : $position->note;
					$data['status']	                 = ($this->input->post('status')) ? $this->input->post('status') : $position->status;
					$data['created_by']	             = ($this->input->post('created_by')) ? $this->input->post('created_by') : $position->created_by;
					$data['created_date']            = ($this->input->post('created_date')) ? $this->input->post('created_date') : $position->created_date;
					$data['updated_by']              = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $position->updated_by;
					$data['updated_date']            = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $position->updated_date;
					$simpan 	=   $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_position']   = $data['id_position'];
						$edit['row_location']	     = $data['row_location'];
						$edit['column_location']	 = $data['column_location'];
						$edit['rack_number']	     = $data['rack_number'];
						$edit['level']	             = $data['level'];
						$edit['note']                = $data['note'];
						$edit['status']			     = $data['status'];
						$edit['created_by']          = $data['created_by'];
						$edit['created_date']        = $data['created_date'];
						$edit['updated_by']          = $data['updated_by'];
						$edit['updated_date']        = $data['updated_date'];
						$this->ADM->update_position($where_edit, $edit);
						$this->session->set_flashdata('success', 'location has been successfully edited!,');
						redirect("website/position");
					}
				} else {
					redirect("website/position");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_position']		= validasi_sql($filter2);
					$this->ADM->delete_position($where_delete);
					$this->session->set_flashdata('success', 'The location has been successfully deleted!,');
					redirect("website/position");
				} else {
					redirect("website/position");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION TYPE_MOVEMENT
	public function type_movement($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']			    = $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']				= 'Movimiento';
			$data['content'] 			= 'admin/content/website/type_movement';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'type_movements' => 'Name'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('type_movements' => 'Tipo de movimiento', 'status' => 'Estatus');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'type_movements';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_type_movement[$data['cari']]	= $data['q'];
				$data['jml_data']			= $this->ADM->count_all_type_movement('', $like_type_movement);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']		    = 'type_movement';
					$data['type_movements'] = ($this->input->post('type_movements')) ? $this->input->post('type_movements') : '';
					$data['status']         = ($this->input->post('status')) ? $this->input->post('status') : '';
					$data['note']           = ($this->input->post('note')) ? $this->input->post('note') : '';
					$data['created_by']     = ($this->input->post('created_by')) ? $this->input->post('created_by') : '';
					$simpan				    = $this->input->post('simpan');
					if ($simpan) {
						$insert['type_movements']  = validasi_sql($data['type_movements']);
						$insert['note']           = validasi_sql($data['note']);
						$insert['status']         = validasi_sql($data['status']);
						$insert['created_by']     = validasi_sql($data['created_by']);
						$this->ADM->insert_type_movement($insert);
						$this->session->set_flashdata('success', 'New movement has been added successfully!,');
						redirect("website/type_movement");
					}
				} else {
					redirect("website/type_movement");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1) {
					$data['onload']				     = 'type_movement';
					$where_type_movement['id_type_movement']	 = $filter2;
					$type_movement				     =  $this->ADM->get_type_movement('*', $where_type_movement);
					$data['id_type_movement']	     = ($this->input->post('id_type_movement')) ? $this->input->post('id_type_movement') : $type_movement->id_type_movement;
					$data['type_movements']          = ($this->input->post('type_movements')) ? $this->input->post('type_movements') : $type_movement->type_movements;
					$data['note']	                 = ($this->input->post('note')) ? $this->input->post('note') : $type_movement->note;
					$data['status']	                 = ($this->input->post('status')) ? $this->input->post('status') : $type_movement->status;
					$data['created_by']	             = ($this->input->post('created_by')) ? $this->input->post('created_by') : $type_movement->created_by;
					$data['created_date']            = ($this->input->post('created_date')) ? $this->input->post('created_date') : $type_movement->created_date;
					$data['updated_by']              = ($this->input->post('updated_by')) ? $this->input->post('updated_by') : $type_movement->updated_by;
					$data['updated_date']            = ($this->input->post('updated_date')) ? $this->input->post('updated_date') : $type_movement->updated_date;
					$simpan 	=   $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_type_movement'] = $data['id_type_movement'];
						$edit['type_movements']	     = $data['type_movements'];
						$edit['note']                = $data['note'];
						$edit['status']			     = $data['status'];
						$edit['created_by']          = $data['created_by'];
						$edit['created_date']        = $data['created_date'];
						$edit['updated_by']          = $data['updated_by'];
						$edit['updated_date']        = $data['updated_date'];
						$this->ADM->update_type_movement($where_edit, $edit);
						$this->session->set_flashdata('success', 'movement has been successfully edited!,');
						redirect("website/type_movement");
					}
				} else {
					redirect("website/type_movement");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1) {
					$where_delete['id_type_movement']		= validasi_sql($filter2);
					$this->ADM->delete_type_movement($where_delete);
					$this->session->set_flashdata('success', 'The movement has been successfully deleted!,');
					redirect("website/type_movement");
				} else {
					redirect("website/type_movement");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}

	//FUNCTION MASTER INVENTORY
	public function inventory($filter1 = '', $filter2 = '', $filter3 = '')
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$where_admin['admin_user'] 	= $this->session->userdata('admin_user');
			$data['admin'] 				= $this->ADM->get_admin('', $where_admin);
			$data['web']					= $this->ADM->identitaswebsite();
			@date_default_timezone_set('Asia/Jakarta');
			$data['dashboard_info']		= FALSE;
			$data['breadcrumb']		    = 'Producto';
			$data['content'] 			= 'admin/content/website/inventory';
			$data['menu_terpilih']		= '1';
			$data['submenu_terpilih']	= '13';
			$data['action']				= (empty($filter1)) ? 'view' : $filter1;
			$data['validate']			= array(
				'id_inventory' => 'id inventario',
				'product_name' => 'producto'
			);
			if ($data['action'] == 'view') {
				$data['berdasarkan']		= array('id_inventory' => 'id inventario', 'product_name' => 'Nombre de producto');
				$data['cari']				= ($this->input->post('cari')) ? $this->input->post('cari') : 'id_inventory';
				$data['q']					= ($this->input->post('q')) ? $this->input->post('q') : '';
				$data['halaman']			= (empty($filter2)) ? 1 : $filter2;
				$data['batas']				= 10;
				$data['page']				= ($data['halaman'] - 1) * $data['batas'];
				$like_inventory[$data['cari']]	= $data['q'];
				$data['stocks_by_product'] = $this->ADM->get_total_stock_per_product();
    //$data['general_stock'] = $this->ADM->get_general_stock();
				$data['jml_data']			= $this->ADM->count_all_inventory('', $like_inventory);
				$data['jml_halaman'] 		= ceil($data['jml_data'] / $data['batas']);
			} elseif ($data['action'] == 'tambah') {
				if ($data['admin']->admin_level_kode == 1 || $data['admin']->admin_level_kode == 2) {
					$data['onload']          = 'inventory';
					$data['id_product']	     = ($this->input->post('id_product')) ? $this->input->post('id_product') : '';
					$data['product_name']	 = ($this->input->post('product_name')) ? $this->input->post('product_name') : '';
					$data['identification_number'] = ($this->input->post('identification_number')) ? $this->input->post('product_name') : '';
					$data['main_stock']      = ($this->input->post('main_stock')) ? $this->input->post('main_stock') : '';
					$data['damaged_stock']   = ($this->input->post('damaged_stock')) ? $this->input->post('damaged_stock') : '';
					$data ['good_stock']     = ($this->input->post('good_stock')) ? $this->input->post('good_stock') : '';
					$data ['type_movements'] = ($this->input->post('type_movements')) ? $this->input->post('type_movements') :  '';
					$data ['date']           = ($this->input->post('date')) ? $this->input->post('date') : '';
					$simpan						= $this->input->post('simpan');
					if ($simpan) {
						$insert['id_product']			  = validasi_sql($data['id_product']);
						$insert['product_name']			  = validasi_sql($data['product_name']);
						$insert['identification_number']  = validasi_sql($data['identification_number']);
						$insert['main_stock']             = validasi_sql($data['main_stock']);
						$insert['damaged_stock']          = validasi_sql($data['damaged_stock']);
						$insert['good_stock']			  = validasi_sql($data['good_stock']);
						$insert['type_movements']         = validasi_sql($data['type_movements']);
						$insert['date']                   = validasi_sql($data['date']);
						$this->ADM->insert_inventory($insert);
						$this->session->set_flashdata('success', 'New register has been successfully added!,');
						redirect("website/inventory");
					}
				} else {
					redirect("website/inventory");
				}
			} elseif ($data['action'] == 'edit') {
				if ($data['admin']->admin_level_kode == 1 || $data['admin']->admin_level_kode == 2) {
					$data['onload']				        = 'id_inventory';
					$where_inventory['id_inventory']	= $filter2;
					$inventory	= $this->ADM->get_inventory('*', $where_inventory);
					$data['id_inventory']	 =   ($this->input->post('id_inventory')) ? $this->input->post('id_inventory') : $inventory->id_inventory;
					$data['id_product']	     =   ($this->input->post('id_product')) ? $this->input->post('id_product') : $inventory->id_product;
					$data['product_name']	 =   ($this->input->post('product_name')) ? $this->input->post('product_name') : $inventory->product_name;
					$data['identification_number'] = ($this->input->post('identification_number')) ? $this->input->post('identification_number') : $inventory->identification_number;
					$data['main_stock']      =   ($this->input->post('main_stock')) ? $this->input->post('main_stock') : $inventory->main_stock;
					$data['damaged_stock']   =   ($this->input->post('damaged_stock')) ? $this->input->post('damaged_stock') : $inventory->damaged_stock;
					$data['good_stock']      =   ($this->input->post('good_stock'))  ? $this->input->post('good_stock')   : $inventory->good_stock;
					$data['type_movements']  =   ($this->input->post('type_movements')) ? $this->input->post('type_movements') : $inventory->type_movements;
					$data['date']            =   ($this->input->post('date'))   ? $this->input->post('date')   : $inventory->date;
					$simpan				     =   $this->input->post('simpan');
					if ($simpan) {
						$where_edit['id_inventory']	= $data['id_inventory'];
						$edit['id_product']	= $data['id_product'];
						$edit['product_name']	= $data['product_name'];
						$edit['identification_number'] = $data['identification_number'];
						$edit['main_stock'] = $data['main_stock'];
						$edit['damaged_stock'] = $data['damaged_stock'];
						$edit['good_stock']  = $data['good_stock'];
						$edit['type_movements'] = $data['type_movements'];
						$edit['date'] = $data['date'];
						$this->ADM->update_inventory($where_edit, $edit);
						$this->session->set_flashdata('success', 'Register has been edited successfully!,');
						redirect("website/inventory");
					}
				} else {
					redirect("website/inventory");
				}
			} elseif ($data['action'] == 'hapus') {
				if ($data['admin']->admin_level_kode == 1 || $data['admin']->admin_level_kode == 2) {
					$where_delete['id_inventory']	=  validasi_sql($filter2);
					$this->ADM->delete_inventory($where_delete);
					$this->session->set_flashdata('success', 'Register has been successfully removed!,');
					redirect("website/inventory");
				} else {
					redirect("website/inventory");
				}
			}
			$this->load->vars($data);
			$this->load->view('admin/home');
		} else {
			redirect("wp_login");
		}
	}


	public function laporanpenyesuaianpdf()
	{
		$where_admin['admin_user']		= $this->session->userdata('admin_user');
		$data['admin']					= $this->ADM->get_admin('', $where_admin);
		$this->load->library('dompdf_gen');
		$data['title'] = 'Print PDF of Incoming & Outgoing Items';
		$data['jml_data']			= $this->ADM->count_all_transaksi('', '');
		$this->load->view('admin/content/website/pdf/laporanpenyesuaian', $data);
		$html = $this->output->get_output();
		// exit;

		$web = $this->ADM->identitaswebsite();

		$this->tcpdf->SetCreator(PDF_CREATOR);
		$this->tcpdf->SetAuthor('-----');
		$this->tcpdf->SetTitle('In an d Out Items');
		$this->tcpdf->SetSubject('In an d Out Item');

		$this->tcpdf->SetHeaderData('', 33.33, $web->identitas_deskripsi, "");
		$this->tcpdf->AddPage();
		$this->tcpdf->writeHTML($html, true, false, true, false, '');
		$this->tcpdf->LastPage();
		$this->tcpdf->Output('in&outgoods.pdf', 'I');
	}

	//CKEDITOR
	private function ckeditor($text)
	{
		return '
		<script type="text/javascript" src="' . base_url() . 'editor/ckeditor.js"></script>
		<script type="text/javascript">
		var editor = CKEDITOR.replace("' . $text . '",
		{
			filebrowserBrowseUrl 	  : "' . base_url() . 'finder/ckfinder.html",
			filebrowserImageBrowseUrl : "' . base_url() . 'finder/ckfinder.html?Type=Images",
			filebrowserFlashBrowseUrl : "' . base_url() . 'finder/ckfinder.html?Type=Flash",
			filebrowserUploadUrl 	  : "' . base_url() . 'finder/core/connector/php/connector.php?command=QuickUpload&type=Files",
			filebrowserImageUploadUrl : "' . base_url() . 'finder/core/connector/php/connector.php?command=QuickUpload&type=Images",
			filebrowserFlashUploadUrl : "' . base_url() . 'finder/core/connector/php/connector.php?command=QuickUpload&type=Flash",
			filebrowserWindowWidth    : 900,
			filebrowserWindowHeight   : 700,
			toolbarStartupExpanded 	  : false,
			height					  : 400	
		}
		);
	</script>';
	}
}
