<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_tengkulak extends CI_Model
{
	private $_table = "tengkulak";

	public function insert($dataPetani)
	{
        $query = $this->db->insert($this->_table,$dataPetani);
        if($this->db->affected_rows() > 0)
		{
		    // Code here after successful insert
		    return true; // to the controller
		}
	}

	public function getListPetani()
	{
		$this->db->select('*');
		$this->db->from($this->_table);

		$query = $this->db->get();
		return $query->result();
	}

	public function getTengkulakBio($idUser)
	{
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('user', 'user.id_user = tengkulak.id_user','left');
        $this->db->where('user.id_user =',$idUser);

        $query = $this->db->get();
        return $query->result();
    }
    
    public function setTengkulak($id,$namaDepan,$namaBelakang,$tlpn,$alamat,$dateL){
		//Cabang
			// echo $key;
			$query=
			$this->db->set('nama_depan_tengkulak',$namaDepan);
			$this->db->set('nama_belakang_tengkulak',$namaBelakang);
			$this->db->set('tanggal_lahir_tengkulak',$dateL);
			$this->db->set('alamat_tengkulak',$alamat);
			$this->db->set('kontak_tengkulak',$tlpn);
			// $this->db->set('foto_tengkulak',$pic);
			$this->db->where('id_user',$id);

			$this->db->update('tengkulak');
        return $query;

		
    }
    
    public function setUser($id,$email,$password)
    {
        $query=
			$this->db->set('email',$email);
			$this->db->set('password',$password);
			
			// $this->db->set('foto_tengkulak',$pic);
			$this->db->where('id_user',$id);

			$this->db->update('user');
        return $query;
    }
	
}

 ?>