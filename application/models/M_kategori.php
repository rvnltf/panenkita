<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_kategori extends CI_Model
{
	private $_table = "kategori";

	public function insert($dataKategori)
	{
        $query = $this->db->insert($this->_table,$dataKategori);
        if($this->db->affected_rows() > 0)
		{
		    // Code here after successful insert
		    return true; // to the controller
		}
	}
	
	public function getListKategori()
	{
		$this->db->select('*');
		$this->db->from($this->_table);

		$query = $this->db->get();
		return $query->result();
	}
}

 ?>