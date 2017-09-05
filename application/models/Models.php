<?php
/**
* 
*/
class Models extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


    function Get_data($table)
    {
        return $this->db->get($table)->result();
    }
    function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data)->result();
    }

    function getAllData($table)
    {
        return $this->db->get($table);
    }
    function GetascData($table,$keyasc)
    {
        $this->db->order_by($keyasc,'asc');
        return $this->db->get($table);
    }
    function Get_data2($table)
    {
        $this->db->order_by('id_logo','desc');
        return $this->db->get($table);
    }
    function Get_datapromosi($table)
    {
        $this->db->order_by('id_banner','desc');
        return $this->db->get($table);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function getSelectedData2($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function getSelectedData3($table,$limit)
    {
        $this->db->order_by('tanggal','asc');
        $this->db->limit($limit);
        return $this->db->get($table);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function updatesuara($idsuara)
    {
        $this->db->set('suara', 'suara+1', FALSE);
        $this->db->where('id', $idsuara);
        $this->db->update('kandidat');
    }
    function kurangsuara($idsuara)
    {
        $this->db->set('suara', 'suara-1', FALSE);
        $this->db->where('id', $idsuara);
        $this->db->update('kandidat');
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function allq($q)
    {
        return $this->db->query($q);
    }
}
?>