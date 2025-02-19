<?php
class M_admin extends CI_Model
{

	public function __contsruct()
	{
		parent::Model();
	}

	//CONFIGURATION TABEL IDENTITAS
	public function insert_identitas($data)
	{
		$this->db->insert("identitas", $data);
	}

	public function update_identitas($where, $data)
	{
		$this->db->update("identitas", $data, $where);
	}

	public function delete_identitas($where)
	{
		$this->db->delete("identitas", $where);
	}

	public function get_identitas($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("identitas");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_identitas($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("identitas");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_identitas($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("identitas");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}


	public function identitaswebsite()
	{
		$data = "";
		$where['identitas_id'] = 1;
		$this->db->select("*");
		$this->db->from("identitas");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	//CONFIGURATION TABEL BARANG
	public function insert_barang($data)
	{
		$this->db->insert("master_barang", $data);
	}

	public function update_barang($where, $data)
	{
		$this->db->update("master_barang", $data, $where);
	}

	public function delete_barang($where)
	{
		$this->db->delete("master_barang", $where);
	}

	public function get_barang($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("master_barang");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_barang($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("master_barang");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_barang($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("master_barang");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}
	//CONFIGURATION TABEL LIMIT STOCK
	public function insert_limitstock($data)
	{
		$this->db->insert("limitstock", $data);
	}

	public function update_limitstock($where, $data)
	{
		$this->db->update("limitstock", $data, $where);
	}

	public function delete_limitstock($where)
	{
		$this->db->delete("limitstock", $where);
	}

	public function get_limitstock($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("limitstock");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_limitstock($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("limitstock");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_limitstock($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("limitstock");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	//CONFIGURATION TABEL SUPPLIER
	public function insert_supplier($data)
	{
		$this->db->insert("supplier", $data);
	}


	public function update_supplier($where, $data)
	{
		$this->db->update("supplier", $data, $where);
	}

	public function delete_supplier($where)
	{
		$this->db->delete("supplier", $where);
	}

	public function get_supplier($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("supplier");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_supplier($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("supplier");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_supplier($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("supplier");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}
	public function get_all_supplier($select = 'id_supplier, nama_supplier', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("supplier");

		// Aplicar condición para clientes activos si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}

	public function get_nama_supplier1($id_supplier)
	{
		$this->db->select('nama_supplier');
		$this->db->from('supplier');
		$this->db->where('id_supplier', $id_supplier);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->nama_supplier;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}
	
	public function get_nama_supplier($id_supplier)
    {
        $this->db->select('nama_supplier');
        $this->db->where('id_supplier', $id_supplier);
        $query = $this->db->get('supplier');
        return $query->row();
    }
	



	//CONFIGURATION TABEL CUSTOMER
	public function insert_customer($data)
	{
		$this->db->insert("customer", $data);
	}

	public function update_customer($where, $data)
	{
		$this->db->update("customer", $data, $where);
	}

	public function delete_customer($where)
	{
		$this->db->delete("customer", $where);
	}

	public function get_customer($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("customer");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_customer($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("customer");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_customer($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("customer");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}
	public function get_all_customer($select = 'id_customer, nama_customer', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("customer");

		// Aplicar condición para clientes activos si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}

	public function get_nama_customer($id_customer)
	{
		$this->db->select('nama_customer');
		$this->db->from('customer');
		$this->db->where('id_customer', $id_customer);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->nama_customer;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}


	//CONFIGURATION TABEL CONSIGNEES
	public function insert_consignees($data)
	{
		$this->db->insert("consignees", $data);
	}

	public function update_consignees($where, $data)
	{
		$this->db->update("consignees", $data, $where);
	}

	public function delete_consignees($where)
	{
		$this->db->delete("consignees", $where);
	}

	public function get_consignees($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("consignees");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_consignees($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("consignees");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_consignees($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("consignees");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}


	//CONFIGURATION TABEL CATEGORY
	public function insert_category($data)
	{
		$this->db->insert("category", $data);
	}

	public function update_category($where, $data)
	{
		$this->db->update("category", $data, $where);
	}

	public function delete_category($where)
	{
		$this->db->delete("category", $where);
	}

	public function get_category($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("category");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_category($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("category");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_category($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("category");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}
	public function get_all_category($select = 'id_category, cat_product', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("category");

		// Aplicar condición para categoría activo si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}

	public function get_cat_product($id_category)
	{
		$this->db->select('cat_product');
		$this->db->from('category');
		$this->db->where('id_category', $id_category);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->cat_product;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}


	//CONFIGURATION TABEL PRESENTATION
	public function insert_presentation($data)
	{
		$this->db->insert("presentation", $data);
	}

	public function update_presentation($where, $data)
	{
		$this->db->update("presentation", $data, $where);
	}

	public function delete_presentation($where)
	{
		$this->db->delete("presentation", $where);
	}

	public function get_presentation($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("presentation");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_presentation($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("presentation");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_presentation($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("presentation");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}
	public function get_all_presentation($select = 'id_presentation, type_presentation', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("presentation");

		// Aplicar condición para presentación activo si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}

	public function get_type_presentation($id_presentation)
	{
		$this->db->select('type_presentation');
		$this->db->from('presentation');
		$this->db->where('id_presentation', $id_presentation);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->type_presentation;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}


	//CONFIGURATION TABEL MANEUVER
	public function insert_maneuver($data)
	{
		$this->db->insert("maneuver", $data);
	}

	public function update_maneuver($where, $data)
	{
		$this->db->update("maneuver", $data, $where);
	}

	public function delete_maneuver($where)
	{
		$this->db->delete("maneuver", $where);
	}

	public function get_maneuver($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("maneuver");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_maneuver($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("maneuver");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_maneuver($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("maneuver");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	public function get_all_maneuver($select = 'id_maneuver, type_maneuver', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("maneuver");

		// Aplicar condición para clientes activos si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}

	public function get_type_maneuver($id_maneuver)
	{
		$this->db->select('type_maneuver');
		$this->db->from('maneuver');
		$this->db->where('id_maneuver', $id_maneuver);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->type_maneuver;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}


	//CONFIGURATION TABEL OPERATION
	public function insert_operation($data)
	{
		$this->db->insert("operation", $data);
	}

	public function update_operation($where, $data)
	{
		$this->db->update("operation", $data, $where);
	}

	public function delete_operation($where)
	{
		$this->db->delete("operation", $where);
	}

	public function get_operation($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("operation");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_operation($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("operation");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_operation($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("operation");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}


	//CONFIGURATION TABEL EVENT
	public function insert_event($data)
	{
		$this->db->insert("event", $data);
	}

	public function update_event($where, $data)
	{
		$this->db->update("event", $data, $where);
	}

	public function delete_event($where)
	{
		$this->db->delete("event", $where);
	}

	public function get_event($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("event");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_event($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("event");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_event($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("event");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	//CONFIGURATION TABEL PLATFORM
	public function insert_platform($data)
	{
		$this->db->insert("platform", $data);
	}

	public function update_platform($where, $data)
	{
		$this->db->update("platform", $data, $where);
	}

	public function delete_platform($where)
	{
		$this->db->delete("platform", $where);
	}

	public function get_platform($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("platform");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_platform($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("platform");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_platform($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("platform");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}
	public function get_all_platform($select = 'id_platform, type_platform', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("platform");

		// Aplicar condición para presentación activo si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}
	public function get_type_platform($id_platform)
	{
		$this->db->select('type_platform');
		$this->db->from('platform');
		$this->db->where('id_platform', $id_platform);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->type_platform;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}




//CONFIGURATION TABEL POSITION
public function insert_position($data)
{
	$this->db->insert("position", $data);
}

public function update_position($where, $data)
{
	$this->db->update("position", $data, $where);
}

public function delete_position($where)
{
	$this->db->delete("position", $where);
}

public function get_position($select, $where)
{
	$data = "";
	$this->db->select($select);
	$this->db->from("position");
	$this->db->where($where);
	$this->db->limit(1);
	$Q = $this->db->get();
	if ($Q->num_rows() > 0) {
		$data = $Q->row();
	}
	$Q->free_result();
	return $data;
}

public function grid_all_position($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
{
	$data = "";
	$this->db->select($select);
	$this->db->from("position");
	if ($where) {
		$this->db->where($where);
	}
	if ($like) {
		foreach ($like as $key => $value) {
			$this->db->like($key, $value);
		}
	}
	$this->db->order_by($sidx, $sord);
	$this->db->limit($limit, $start);
	$Q = $this->db->get();
	if ($Q->num_rows() > 0) {
		$data = $Q->result();
	}
	$Q->free_result();
	return $data;
}

public function count_all_position($where = "", $like = "")
{
	$this->db->select("*");
	$this->db->from("position");
	if ($where) {
		$this->db->where($where);
	}
	if ($like) {
		foreach ($like as $key => $value) {
			$this->db->like($key, $value);
		}
	}
	$Q = $this->db->get();
	$data = $Q->num_rows();
	return $data;
}
public function get_all_position($select = 'id_position, row_location, column_location, rack_number, level', $where = array())
{
    $data = array();
    $this->db->select($select);
    $this->db->from("position");

    // Aplicar condiciones adicionales si $where no está vacío
    if (!empty($where)) {
        $this->db->where($where);
    }

    // Aplicar condición para status activo
    $this->db->where('status', 'activo');

    // Aplicar condición para is_available igual a 1
    $this->db->where('is_available', 1);

    $Q = $this->db->get();

    if ($Q->num_rows() > 0) {
        $data = $Q->result(); // Obtener todos los resultados como un array de objetos
    }

    $Q->free_result();
    return $data;
}

public function get_type_position($id_position)
{
	$this->db->select('type_position');
	$this->db->from('position');
	$this->db->where('id_position', $id_position);
	$query = $this->db->get();

	if ($query->num_rows() > 0) {
		$result = $query->row();
		return $result->type_position;
	} else {
		return null; // O un valor predeterminado, si es necesario
	}
}


public function get_position_by_id($id_position) {
    $this->db->select('id_position');
    $this->db->from('position');
    $this->db->where('id_position', $id_position);
    $query = $this->db->get();
  
	return $query->result();
}

//FUNCTION TYPE_MOVEMENT
public function insert_type_movement($data)
{
	$this->db->insert("type_movement", $data);
}

public function update_type_movement($where, $data)
{
	$this->db->update("type_movement", $data, $where);
}

public function delete_type_movement($where)
{
	$this->db->delete("type_movement", $where);
}

public function get_type_movement($select, $where)
{
	$data = "";
	$this->db->select($select);
	$this->db->from("type_movement");
	$this->db->where($where);
	$this->db->limit(1);
	$Q = $this->db->get();
	if ($Q->num_rows() > 0) {
		$data = $Q->row();
	}
	$Q->free_result();
	return $data;
}

public function grid_all_type_movement($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
{
	$data = "";
	$this->db->select($select);
	$this->db->from("type_movement");
	if ($where) {
		$this->db->where($where);
	}
	if ($like) {
		foreach ($like as $key => $value) {
			$this->db->like($key, $value);
		}
	}
	$this->db->order_by($sidx, $sord);
	$this->db->limit($limit, $start);
	$Q = $this->db->get();
	if ($Q->num_rows() > 0) {
		$data = $Q->result();
	}
	$Q->free_result();
	return $data;
}

public function count_all_type_movement($where = "", $like = "")
{
	$this->db->select("*");
	$this->db->from("type_movement");
	if ($where) {
		$this->db->where($where);
	}
	if ($like) {
		foreach ($like as $key => $value) {
			$this->db->like($key, $value);
		}
	}
	$Q = $this->db->get();
	$data = $Q->num_rows();
	return $data;
}
public function get_all_type_movement($select = 'id_type_movement, type_type_movement', $where = array())
{
	$data = array();
	$this->db->select($select);
	$this->db->from("type_movement");

	// Aplicar condición para presentación activo si está presente en $where
	if (!empty($where)) {
		$this->db->where($where);
	}

	// Aplicar condición para status activo
	$this->db->where('status', 'activo');

	$Q = $this->db->get();

	if ($Q->num_rows() > 0) {
		$data = $Q->result(); // Obtener todos los resultados como un array de objetos
	}

	$Q->free_result();
	return $data;
}
public function get_all_type_movement_boarding($select = 'id_type_movement, type_type_movement', $where = array())
{
	$data = array();
	$this->db->select($select);
	$this->db->from("type_movement");

	// Aplicar condición para presentación activo si está presente en $where
	if (!empty($where)) {
		$this->db->where($where);
	}

	// Aplicar condición para status activo
	$this->db->where('type_movements', 'Salida');

	$Q = $this->db->get();

	if ($Q->num_rows() > 0) {
		$data = $Q->result(); // Obtener todos los resultados como un array de objetos
	}

	$Q->free_result();
	return $data;
}
public function get_type_type_movement($id_type_movement)
{
	$this->db->select('type_movements');
	$this->db->from('type_movement');
	$this->db->where('id_type_movement', $id_type_movement);
	$query = $this->db->get();

	if ($query->num_rows() > 0) {
		$result = $query->row();
		return $result->type_movements;
	} else {
		return null; // O un valor predeterminado, si es necesario
	}
}


public function get_only_entrada_type_movement($select = 'id_type_movement, type_movements', $where = array())
{
	$data = array();
	$this->db->select($select);
	$this->db->from("type_movement");

	// Aplicar condición para presentación activo si está presente en $where
	if (!empty($where)) {
		$this->db->where($where);
	}

	// Aplicar condición para status activo
	$this->db->where('status', 'activo');
	$this->db->where('type_movements', 'Entrada');

	$Q = $this->db->get();

	if ($Q->num_rows() > 0) {
		$data = $Q->result(); // Obtener todos los resultados como un array de objetos
	}

	$Q->free_result();
	return $data;
}



	//CONFIGURATION TABEL MEASUREMENT
	public function insert_measurement($data)
	{
		$this->db->insert("measurement", $data);
	}

	public function update_measurement($where, $data)
	{
		$this->db->update("measurement", $data, $where);
	}

	public function delete_measurement($where)
	{
		$this->db->delete("measurement", $where);
	}

	public function get_measurement($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("measurement");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_measurement($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("measurement");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_measurement($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("measurement");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}


	public function get_all_measurement($select = 'id_measurement, unit_measurement', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("measurement");

		// Aplicar condición para presentación activo si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}
	public function get_unit_measurement($id_measurement)
	{
		$this->db->select('unit_measurement');
		$this->db->from('measurement');
		$this->db->where('id_measurement', $id_measurement);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->unit_measurement;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}


	//CONFIGURATION TABEL CONTAINER
	public function insert_container($data)
	{
		$this->db->insert("container", $data);
	}

	public function update_container($where, $data)
	{
		$this->db->update("container", $data, $where);
	}

	public function delete_container($where)
	{
		$this->db->delete("container", $where);
	}

	public function get_container($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("container");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_container($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("container");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_container($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("container");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	public function get_all_container($select = 'id_container, container_type, container_number', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("container");

		// Aplicar condición para clientes activos si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}
   

	public function get_container_number($id_container)
	{
		$this->db->select('container_number');
		$this->db->from('container');
		$this->db->where('id_container', $id_container);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->container_number;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}

	public function get_id_container_by_number($container_number)
{
    $this->db->select('id_container');
    $this->db->from('container');
    $this->db->where('container_number', $container_number);
    $query = $this->db->get();
    return $query->row()->id_container;
}


public function get_container_type($id_container)
	{
		$this->db->select('container_type');
		$this->db->from('container');
		$this->db->where('id_container', $id_container);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->container_type;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}
	

	public function get_container_by_number($container_number)
{
    $this->db->select('id_container, container_type');
    $this->db->from('container');
    $this->db->where('container_number', $container_number);
    $query = $this->db->get();
    return $query->row();
}

public function get_container_type_by_number($container_number) {
    $this->db->select('container_type');
    $this->db->from('container');
    $this->db->where('container_number', $container_number);
    $query = $this->db->get();
    return $query->row()->container_type;
}


	//CONFIGURATION TABEL PRODUCTS
	public function insert_products($data)
	{
		$this->db->insert("products", $data);
	}

	public function update_products($where, $data)
	{
		$this->db->where($where);
		$this->db->update('products', $data);
	}
	public function delete_products($where)
	{
		$this->db->delete("products", $where);
	}

	public function get_products($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("products");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_products($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("products");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_products($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("products");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	public function get_all_products($select = 'id_product, product_name', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("products");

		// Aplicar condición para clientes activos si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}

	public function get_product_name1($id_product)
	{
		$this->db->select('product_name');
		$this->db->from('products');
		$this->db->where('id_product', $id_product);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->product_name;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}
	public function get_product_name($id_product)
    {
        $this->db->select('product_name');
        $this->db->where('id_product', $id_product);
        $query = $this->db->get('products');
        return $query->row();
    }

	//CONFIGURATION TABEL DESTINATION
	public function insert_destination($data)
	{
		$this->db->insert("destination", $data);
	}

	public function update_destination($where, $data)
	{
		$this->db->update("destination", $data, $where);
	}

	public function delete_destination($where)
	{
		$this->db->delete("destination", $where);
	}

	public function get_destination($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("destination");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_destination($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("destination");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_destination($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("destination");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}


	//CONFIGURATION TABEL ORIGIN
	public function insert_origin($data)
	{
		$this->db->insert("origin", $data);
	}

	public function update_origin($where, $data)
	{
		$this->db->update("origin", $data, $where);
	}

	public function delete_origin($where)
	{
		$this->db->delete("origin", $where);
	}

	public function get_origin($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("origin");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_origin($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("origin");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_origin($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("origin");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	//Obtener todos los orígenes de la base de datos
	public function get_all_origin($select = 'id_origin, state', $where = array()){
		$data = array();
		$this->db->select($select);
		$this->db->from("origin");

		// Aplicar condición para clientes activos si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}
	public function get_all_destination($select = 'id_destination, state', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("destination");

		// Aplicar condición para clientes activos si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}

	public function get_state($id_origin)
	{
		$this->db->select('state');
		$this->db->from('origin');
		$this->db->where('id_origin', $id_origin);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->state;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}


	//CONFIGURATION TABEL DRIVER

	public function insert_driver($data)
	{
		$this->db->insert("driver", $data);
	}


	public function update_driver($where, $data)
	{
		$this->db->update("driver", $data, $where);
	}

	public function delete_driver($where)
	{
		$this->db->delete("driver", $where);
	}

	public function get_driver($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("driver");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_driver($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("driver");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_driver($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("driver");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	public function get_all_driver($select = 'id_driver, name_driver', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("driver");

		// Aplicar condición para clientes activos si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('status_driver', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}

	public function get_name_driver($id_driver)
	{
		$this->db->select('name_driver');
		$this->db->from('driver');
		$this->db->where('id_driver', $id_driver);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->name_driver;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}

	//CONFIGURATION TABEL TRANSAKSI

	public function insert_transaksi($data)
	{
		//$data['tanggal_transaksi'] = date('Y-m-d H:i:s.u'); // Agregar microsegundos al timestamp
		//$this->db->insert("transaksi_barang", $data);
		return $this->db->insert_transaksi('transaksi_barang', $data);
	}



	public function update_transaksi($where, $data)
	{
		$this->db->update("transaksi_barang", $data, $where);
	}

	public function delete_transaksi($where)
	{
		$this->db->delete("transaksi_barang", $where);
	}

	public function get_transaksi($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("transaksi_barang");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_transaksi($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("transaksi_barang");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_transaksi($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("transaksi_barang");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}


	//CONFIGURATION TABLE TRANSPORT
	public function insert_transport($data)
	{
		$this->db->insert("transport", $data);
	}

	public function update_transport($where, $data)
	{
		$this->db->update("transport", $data, $where);
	}

	public function delete_transport($where)
	{
		$this->db->delete("transport", $where);
	}

	public function get_transport($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("transport");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_transport($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("transport");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_transport($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("transport");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	public function get_all_transport($select = 'id_transport, platenumber, vehicletype', $where = array())
	{
		$data = array();
		$this->db->select($select);
		$this->db->from("transport");

		// Aplicar condición para clientes activos si está presente en $where
		if (!empty($where)) {
			$this->db->where($where);
		}

		// Aplicar condición para status activo
		$this->db->where('vehiclestatus', 'activo');

		$Q = $this->db->get();

		if ($Q->num_rows() > 0) {
			$data = $Q->result(); // Obtener todos los resultados como un array de objetos
		}

		$Q->free_result();
		return $data;
	}


	public function search_platenumbers($term)
    {
        $this->db->select('platenumber');
        $this->db->from('transport');
        $this->db->like('platenumber', $term); // Busca coincidencias parciales
        $query = $this->db->get();
        return $query->result_array(); // Devuelve los resultados como un array
    }

    public function get_vehicletype_by_platenumber($platenumber)
    {
        $this->db->select('id_transport, vehicletype');
        $this->db->from('transport');
        $this->db->where('platenumber', $platenumber);
        $query = $this->db->get();
        return $query->row();
    }
	public function get_id_transport_by_platenumber($platenumber)
	{
		$this->db->select('id_transport');
		$this->db->from('transport');
		$this->db->where('platenumber', $platenumber);
		$query = $this->db->get();
		return $query->row()->id_transport;
	}

	public function get_platenumber($id_transport)
	{
		$this->db->select('platenumber');
		$this->db->from('transport');
		$this->db->where('id_transport', $id_transport);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->platenumber;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}

	public function get_vehicletype($id_transport)
	{
		$this->db->select('vehicletype');
		$this->db->from('transport');
		$this->db->where('id_transport', $id_transport);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result->vehicletype;
		} else {
			return null; // O un valor predeterminado, si es necesario
		}
	}
	

	//CONFIGURATION TABLE ARRIVAL
	public function insert_arrival($data)
	{
		$this->db->insert("arrival", $data);
	}
	public function insert_multiple_arrivals($data) {
		// Usa insert_batch para insertar múltiples registros
		if ($this->db->insert_batch('arrival', $data)) {
			return true;
		} else {
			$error = $this->db->error();
			log_message('error', 'Error inserting data: ' . print_r($error, true));
			return false;
		}
	}
	
	// Función para verificar existencia en la tabla de productos
	public function exists1($table, $id_product, $product_name) {
		$this->db->where('id_product', $id_product);
		$this->db->where('product_name', $product_name);
		$query = $this->db->get($table);
		return $query->num_rows() > 0;
	}

	public function update_arrival($where, $data)
	{
		$this->db->where($where);
		$this->db->update('arrival', $data);
	}
	public function delete_arrival($where)
	{
		$this->db->delete("arrival", $where);
	}

	public function get_arrival($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("arrival");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	/*public function grid_all_arrivaltwo($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("arrivaltwo");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}*/
	

	public function count_all_arrival($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("arrival");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}


	public function get_existing_identifications()
	{
		$this->db->distinct();
		$this->db->select('identification_number');
		$this->db->from('arrival'); // Cambia 'arrival' por la tabla que contiene los identificadores
		$query = $this->db->get();
		return $query->result();
	}
	

public function get_unique_identifications($filters = array(), $start = 0, $limit = 10)
{
	$this->db->distinct();
    $this->db->select('identification_number');
    $this->db->from('arrival');

    // Aplicar filtros
    if (!empty($filters)) {
        foreach ($filters as $key => $value) {
            $this->db->like($key, $value);
        }
    }

    // Aplicar límites de paginación
    $this->db->limit($limit, $start);

    $query = $this->db->get();
    return $query->result();
}

public function get_unique_identificationsnew($filters = array(), $start = 0, $limit = 10)
{
	$this->db->distinct();
    $this->db->select('identification_number');
    $this->db->from('arrivalnew');

    // Aplicar filtros
    if (!empty($filters)) {
        foreach ($filters as $key => $value) {
            $this->db->like($key, $value);
        }
    }

    // Aplicar límites de paginación
    $this->db->limit($limit, $start);

    $query = $this->db->get();
    return $query->result();
}



public function count_all_arrival1($filters = array())
{
    $this->db->from('arrival');

    // Aplicar filtros
    if (!empty($filters)) {
        foreach ($filters as $key => $value) {
            $this->db->like($key, $value);
        }
    }

    return $this->db->count_all_results();
}


public function count_unique_identifications($filters = array())
{
    $this->db->distinct();
    $this->db->select('identification_number');
    $this->db->from('arrival');

    // Aplicar filtros
    if (!empty($filters)) {
        foreach ($filters as $key => $value) {
            $this->db->like($key, $value);
        }
    }

    $query = $this->db->get();
    return $query->num_rows();
}

public function count_unique_identificationsnew($filters = array())
{
    $this->db->distinct();
    $this->db->select('identification_number');
    $this->db->from('arrivalnew');

    // Aplicar filtros
    if (!empty($filters)) {
        foreach ($filters as $key => $value) {
            $this->db->like($key, $value);
        }
    }

    $query = $this->db->get();
    return $query->num_rows();
}


public function get_details_by_identification($identification_number)
{
    $this->db->where('identification_number', $identification_number);
    $query = $this->db->get('arrival');
    return $query->num_rows() > 0 ? $query->result() : [];
}

public function get_all_products_by_identification($identification_number) {
    // Aplica la condición WHERE para filtrar los registros por identification_number
    $this->db->where('identification_number', $identification_number);
	$this->db->where("id_movement IS NOT NULL");

    // Ejecuta la consulta en la tabla 'arrivaltwo'
    $query = $this->db->get('arrivaltwo'); // Asegúrate de que el nombre de la tabla sea correcto

    // Verifica si hay algún error en la consulta
    if (!$query) {
        echo $this->db->last_query(); // Muestra la última consulta SQL para depuración
        echo $this->db->error(); // Muestra el error de la base de datos
    }

    // Devuelve el resultado de la consulta
    return $query->result();
}

public function get_all_products_by_identificationtwo($identification_number) {
    // Aplica la condición WHERE para filtrar los registros por identification_number
    $this->db->where('identification_number', $identification_number);
	$this->db->where("id_movement IS NULL");
	//$this->db->where("updated_by IS NULL");

    // Ejecuta la consulta en la tabla 'arrivaltwo'
    $query = $this->db->get('arrivaltwo'); // Asegúrate de que el nombre de la tabla sea correcto

    // Verifica si hay algún error en la consulta
    if (!$query) {
        echo $this->db->last_query(); // Muestra la última consulta SQL para depuración
        echo $this->db->error(); // Muestra el error de la base de datos
    }

    // Devuelve el resultado de la consulta
    return $query->result();
}


public function get_all_products_by_identification_arrival($identification_number) {
    // Aplica la condición WHERE para filtrar los registros por identification_number
    $this->db->where('identification_number', $identification_number);

    // Ejecuta la consulta en la tabla 'arrival'
    $query = $this->db->get('arrival'); // Asegúrate de que el nombre de la tabla sea correcto

    // Verifica si hay algún error en la consulta
    if (!$query) {
        echo $this->db->last_query(); // Muestra la última consulta SQL para depuración
        echo $this->db->error(); // Muestra el error de la base de datos
    }

    // Devuelve el resultado de la consulta
    return $query->result();
}

public function get_all_products_by_identificationnew($identification_number) {
    // Escribe la consulta manualmente para manejar el CASE
    $sql = "
        SELECT * 
        FROM arrivalnew
        WHERE identification_number = ? AND  id_movement IS NOT NULL
        ORDER BY 
             COALESCE(id_arrival, id_movement) ASC, 
			  id_movement ASC;
    ";

    // Ejecuta la consulta usando $this->db->query() para pasar la identificación
    $query = $this->db->query($sql, array($identification_number));

    // Verifica si hay algún error en la consulta
    if (!$query) {
        echo $this->db->last_query(); // Muestra la última consulta SQL para depuración
        echo $this->db->error(); // Muestra el error de la base de datos
    }

    // Devuelve el resultado de la consulta
    return $query->result();
}

	public function get_products_by_supplier($id_supplier)
	{
		$this->db->where('id_supplier', $id_supplier);
		$this->db->where('status', 'activo'); // Filtra solo los productos con status 'activo'
		$query = $this->db->get('products');
		return $query->result();
	}

public function get_identifications_all_by_identification_number($identification_number) {
	$this->db->select('*'); // Selecciona todos los campos
	$this->db->from('arrival'); // Nombre de la tabla
	$this->db->where('identification_number', $identification_number); // Condición
	$query = $this->db->get();
	return $query->result(); // Retorna el resultado como un arreglo de objetos
}
public function get_details_by_filter1($identification_number, $filters = array())
{
    $this->db->select('*');
    $this->db->from('arrival');
    $this->db->where('identification_number', $identification_number);

    // Aplicar filtros
    if (!empty($filters)) {
        foreach ($filters as $key => $value) {
            $this->db->like($key, $value);
        }
    }

    $query = $this->db->get();
    return $query->result();
}
public function get_unique_identification_numbers($filters = array(), $page = 0, $batas = 10)
{
    $this->db->distinct();
    $this->db->select('identification_number');
    $this->db->from('arrival');

    // Aplicar filtros adicionales si existen
    if (!empty($filters)) {
        foreach ($filters as $key => $value) {
            $this->db->like($key, $value);
        }
    }

    $this->db->limit($batas, $page);
    $query = $this->db->get();

    return $query->result();
}


public function count_details_by_filter($identification_number, $search_query = '') {
    $this->db->where('identification_number', $identification_number);
    if (!empty($search_query)) {
        $this->db->like('product_name', $search_query);
    }
    return $this->db->count_all_results('arrivalnew');
}

public function get_details_by_filter($identification_number, $limit, $offset, $search_query = '') {
    $this->db->where('identification_number', $identification_number);
	$this->db->where('id_movement IS NOT NULL');
    if (!empty($search_query)) {
        $this->db->like('product_name', $search_query);
    }
    $this->db->limit($limit, $offset);
    $query = $this->db->get('arrivalnew');
    return $query->result();
}

	//CONFIGURATION TABEL ARRIVALTWO
	
	public function exists_arrivaltwo($id_movement) {
		$this->db->where('id_movement', $id_movement);
		$query = $this->db->get('arrivaltwo');
		return $query->num_rows() > 0; // Devuelve true si el registro ya existe
	}
	
	public function insert_arrivaltwo($data) {
		if (!$this->exists_arrivaltwo($data['id_movement'])) {
			$this->db->insert('arrivaltwo', $data);
			return true; // Registro insertado
		}
		return false; // Registro ya existía
	}
	
	

	public function update_arrivaltwo($where, $data)
	{
		$this->db->where($where);
		$this->db->update('arrivaltwo', $data);
	}
	public function delete_arrivaltwo($where)
	{
		$this->db->delete("arrivaltwo", $where);
	}

	public function get_arrivaltwo($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("arrivaltwo");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	
	public function grid_all_arrivaltwo($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
{
    $data = "";
    $this->db->select($select);
    $this->db->from("arrivaltwo");

    // Agregar condición para id_movement NULL
    $this->db->where("id_movement IS NULL");

    if ($where) {
        $this->db->where($where);
    }
    if ($like) {
        foreach ($like as $key => $value) {
            $this->db->like($key, $value);
        }
    }
    $this->db->order_by($sidx, $sord);
    $this->db->limit($limit, $start);
    $Q = $this->db->get();
    if ($Q->num_rows() > 0) {
        $data = $Q->result();
    }
    $Q->free_result();
    return $data;
}

public function grid_all_arrivaltwo2($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
{
    $data = "";
    $this->db->select($select);
    $this->db->from("arrivaltwo");

    // Agregar condición para id_movement NULL
    $this->db->where("id_movement IS NOT NULL");

    if ($where) {
        $this->db->where($where);
    }
    if ($like) {
        foreach ($like as $key => $value) {
            $this->db->like($key, $value);
        }
    }
    $this->db->order_by($sidx, $sord);
    $this->db->limit($limit, $start);
    $Q = $this->db->get();
    if ($Q->num_rows() > 0) {
        $data = $Q->result();
    }
    $Q->free_result();
    return $data;
}


	public function count_all_arrivaltwo($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("arrivaltwo");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	} //descomentar si no funciona

	public function has_sub_movements($id_main) {
    $this->db->select("COUNT(*) as total");
    $this->db->from("arrivaltwo");
    $this->db->where("id_main", $id_main);
    $this->db->where("id_movement IS NOT NULL"); // Solo cuenta si tiene sub-movements
    $query = $this->db->get();
    $result = $query->row();
    return ($result && $result->total > 0); // Retorna true si hay registros con sub-movements
}

public function get_arrivalstwo($where = "", $like = "", $limit = "", $offset = "")
{
    $this->db->select("*");
    $this->db->from("arrivaltwo"); // Ajusta el nombre de la tabla si es diferente

    if ($where) {
        $this->db->where($where);
    }
    if ($like) {
        foreach ($like as $key => $value) {
            $this->db->like($key, $value);
        }
    }
    if (!empty($limit) && !empty($offset)) {
        $this->db->limit($limit, $offset);
    } elseif (!empty($limit)) {
        $this->db->limit($limit);
    }

    $query = $this->db->get();
    return $query->result(); // Devuelve los registros encontrados
}


//************************************************************************************************************************ */
//CONFIGURATION TABEL BOARDING
public function insert_boarding($data)
{
	$this->db->insert("boarding", $data);
}
public function insert_multiple_boardings($data) {
	// Usa insert_batch para insertar múltiples registros
	if ($this->db->insert_batch('boarding', $data)) {
		return true;
	} else {
		$error = $this->db->error();
		log_message('error', 'Error inserting data: ' . print_r($error, true));
		return false;
	}
}
public function update_boarding($where, $data)
	{
		$this->db->where($where);
		$this->db->update('boarding', $data);
	}
	public function delete_boarding($where)
	{
		$this->db->delete("boarding", $where);
	}

	public function get_boarding($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("boarding");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_boarding($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("boarding");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_boarding($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("boarding");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}



//************************************************************************************************************************ */

	//CONFIGURATION TABLE ARRIVALNEW
	public function insert_arrivalnew($data)
{
    // Insertar en la tabla arrivalnew
    $this->db->insert("arrivalnew", $data);

    // Si incluye id_position, marcar como no disponible
    if (!empty($data['id_position'])) {
        $this->update_position_availability($data['id_position'], 0);
    }
}

public function update_arrivalnew($where, $data)
	{
		$this->db->update("arrivalnew", $data, $where);
	}


	public function update_arrivalnewpo($where, $data)
{
    // Validar que el arreglo $where no esté vacío y tenga claves válidas
    if (empty($where) || !is_array($where)) {
        log_message('error', 'El parámetro $where está vacío o no es válido.');
        return false;
    }

    // Obtener la posición previa antes de actualizar
    $this->db->select('id_position');
    $this->db->from('arrivalnew');
    $this->db->where($where);
    $previous = $this->db->get()->row();

    // Si existe una posición previa
    if (!empty($previous) && !empty($previous->id_position)) {
        // Si la posición previa es diferente de la nueva posición
        if ($previous->id_position != $data['id_position']) {
            // Liberar la posición previa
            $this->update_position_availability($previous->id_position, 1);
        }
    }

    // Marcar como no disponible la nueva posición (si existe en los datos)
    if (!empty($data['id_position'])) {
        $this->update_position_availability($data['id_position'], 0);
    }

    // Actualizar registro en arrivalnew
    return $this->db->update("arrivalnew", $data, $where);
}




public function delete_arrivalnew($where)
{
    // Obtener la posición antes de eliminar
    $this->db->select('id_position');
    $this->db->from('arrivalnew');
    $this->db->where($where);
    $previous = $this->db->get()->row();

    // Eliminar el registro
    $this->db->delete("arrivalnew", $where);

    // Liberar posición previa (si aplica)
    if (!empty($previous->id_position)) {
        $this->update_position_availability($previous->id_position, 1);
    }
}

// Método para actualizar la disponibilidad de una posición
public function update_position_availability($id_position, $is_available)
{
    $this->db->where('id_position', $id_position);
    $this->db->update('position', ['is_available' => $is_available]);
}

	
// ********************************************************************************************************************************************************************


	public function get_arrivalnew($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("arrivalnew");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}
	

	public function grid_all_arrival($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("arrivalnew");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}
	public function grid_all_arrival_table_arrival($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("arrival");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}
	public function count_all_arrivalnew($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("arrivalnew");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}


	//CONFIGURATION TABLE MOVEMENTS
	public function insert_movements($data)
	{
		$this->db->insert("movements", $data);
	}

	public function update_movements($where, $data)
	{
		$this->db->update("movements", $data, $where);
	}

	public function delete_movements($where)
	{
		$this->db->delete("movements", $where);
	}

	public function get_movements($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("movements");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_movements($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("movements");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_movements($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("movements");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}


	public function get_arrival_by_id($id_arrival) {
        return $this->db->get_where('arrival', ['id_arrival' => $id_arrival])->row();
    }

    public function get_pallet_by_arrival_id($id_arrival) {
        return $this->db->get_where('pallets', ['id_arrival' => $id_arrival])->row();
    }

    public function get_product_by_id($id_product) {
        return $this->db->get_where('products', ['id_product' => $id_product])->row();
    }
	
	//CONFIGURATION TABLE INVENTORY
	public function insert_inventory($data)
	{
		$this->db->insert("inventory", $data);
	}

	public function update_inventory($where, $data)
	{
		$this->db->update("inventory", $data, $where);
	}

	public function delete_inventory($where)
	{
		$this->db->delete("inventory", $where);
	}

	public function get_inventory($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("inventory");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_inventory($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("inventory");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_inventory($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("inventory");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	public function get_total_stock_per_product()
	{
		$this->db->select('id_product, product_name, 
							SUM(stock) AS total_stock_arrival, 
							SUM(damaged_stock) AS total_damaged_stock_arrival, 
							SUM(good_stock) AS total_ok_stock_arrival');
		$this->db->from('arrivaltwo');
		$this->db->where('id_movement IS NOT NULL');
		$this->db->group_by('id_product');
		$query = $this->db->get();
		return $query->result(); // Devuelve un array de objetos
	}
	



	//CONFIGURATION TABLE ADMIN
	public function insert_admin($data)
	{
		$this->db->insert("admin", $data);
	}

	public function update_admin($where, $data)
	{
		$this->db->update("admin", $data, $where);
	}

	public function delete_admin($where)
	{
		$this->db->delete("admin", $where);
	}

	public function get_admin($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("admin a");
		$this->db->join('admin_level al', 'a.admin_level_kode = al.admin_level_kode', 'left');
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_admin($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("admin a");
		$this->db->join('admin_level al', 'a.admin_level_kode = al.admin_level_kode', 'left');
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_admin2($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("admin");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_admin($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("admin");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	//CONFIGURATION TABLE ADMIN LEVEL
	public function insert_admin_level($data)
	{
		$this->db->insert("admin_level", $data);
	}

	public function update_admin_level($where, $data)
	{
		$this->db->update("admin_level", $data, $where);
	}

	public function delete_admin_level($where)
	{
		$this->db->delete("admin_level", $where);
	}

	public function get_admin_level($select, $where)
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("admin_level");
		$this->db->where($where);
		$this->db->limit(1);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->row();
		}
		$Q->free_result();
		return $data;
	}

	public function grid_all_admin_level($select, $sidx, $sord, $limit, $start, $where = "", $like = "")
	{
		$data = "";
		$this->db->select($select);
		$this->db->from("admin_level");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$this->db->order_by($sidx, $sord);
		$this->db->limit($limit, $start);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0) {
			$data = $Q->result();
		}
		$Q->free_result();
		return $data;
	}

	public function count_all_admin_level($where = "", $like = "")
	{
		$this->db->select("*");
		$this->db->from("admin_level");
		if ($where) {
			$this->db->where($where);
		}
		if ($like) {
			foreach ($like as $key => $value) {
				$this->db->like($key, $value);
			}
		}
		$Q = $this->db->get();
		$data = $Q->num_rows();
		return $data;
	}

	// CONFIGURATION COMBO BOX WITH DATABASE
	public function combo_box($table, $name, $value, $name_value, $pilihan, $js = '', $label = '', $width = '')
	{
		echo "<select name='$name' id='$name' onchange='$js' class='form-control input-sm' style='width:$width'>";
		echo "<option value=''>" . $label . "</option>";
		$query = $this->db->query($table);
		foreach ($query->result() as $row) {
			if ($pilihan == $row->$value) {
				echo "<option value='" . $row->$value . "' selected>" . $row->$name_value . "</option>";
			} else {
				echo "<option value='" . $row->$value . "'>" . $row->$name_value . "</option>";
			}
		}
		echo "</select>";
	}

	//CONFIGURATION CHECKBOX ARRAY WITH DATABASE
	public function checkbox($table, $name, $value, $name_value, $pilihan = '')
	{
		$query = $this->db->query($table);
		$array_tag = explode(',', $pilihan);
		$ceked = "";
		foreach ($query->result() as $row) {
			$ceked = (array_search($row->tag_id, $array_tag) === false) ? '' : 'checked';
			echo "<input type='checkbox' name='$name' id='" . $row->$value . "' value='" . $row->$value . "' " . $ceked . "/><label for='" . $row->$value . "' style='display: inline-block'>" . $row->$name_value . "</label><br />";
		}
	}

	//CONFIGURATION CHECKBOX ARRAY WITH DATABASE
	public function checkbox_status($table, $name, $value, $name_value, $pilihan = '')
	{
		$query = $this->db->query($table);
		$array_tag = explode(',', $pilihan);
		$ceked = "";
		foreach ($query->result() as $row) {
			$ceked = (array_search($row->status_perkawinan_kode, $array_tag) === false) ? '' : 'checked';
			echo "<input type='checkbox' name='$name' id='" . $row->$value . "' style='display: inline-block;' value='" . $row->$value . "' " . $ceked . "/><label for='" . $row->$value . "' style='display: inline-block; margin-right: 10px;'>" . $row->$name_value . "</label>";
		}
	}

	//CONFIGURATION LIST ARRAY WITH DATABASE AND EXPLODE
	public function listarray($table, $name, $value, $name_value, $pilihan = '')
	{
		$query = $this->db->query($table);
		$array_tag = explode(',', $pilihan);
		$ceked = "";
		foreach ($query->result() as $row) {
			if (array_search($row->tag_id, $array_tag) === false) {
			} else {
				echo $row->$name_value . ", ";
			}
		}
	}

	//CONFIGURATION LIST ARRAY WITH DATABASE AND EXPLODE
	public function tagsberita($table, $name, $value, $name_value, $pilihan = '')
	{
		$query = $this->db->query($table);
		$array_tag = explode(',', $pilihan);
		$ceked = "";
		foreach ($query->result() as $row) {
			if (array_search($row->tag_id, $array_tag) === false) {
			} else {
				echo "<a href='" . site_url() . "news/tags/" . $row->tag_id . "' class='tag'>" . $row->$name_value . "</a> ";
			}
		}
	}
	// Get Low Stock
	public function get_low_stock()
	{
		$limit_stock  = $this->db->query("SELECT `stock` from limitstock where limitstock_id = 1")->row()->stock;
		$sql = "SELECT *,(COALESCE((SELECT SUM(jumlah) FROM transaksi_barang where id_barang = master_barang.id_barang and status_pergerakan = 1), 0) - COALESCE((SELECT SUM(jumlah) FROM transaksi_barang where id_barang = master_barang.id_barang and status_pergerakan = 2), 0)) as `qty` FROM master_barang where (COALESCE((SELECT SUM(jumlah) FROM transaksi_barang where id_barang = master_barang.id_barang and status_pergerakan = 1), 0) - COALESCE((SELECT SUM(jumlah) FROM transaksi_barang where id_barang = master_barang.id_barang and status_pergerakan = 2), 0)) <= $limit_stock order by nama_barang asc";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
	}
}
