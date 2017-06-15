<?php
class Madmin extends CI_Model{
    function tampil_data(){
        return $this->db->get('user');
    }
    function tampil($a)
    {
        return $this->db->get_where('profil',$a);
    }

    function tambah_data($data, $table){
    	$this->db->insert($table, $data);
    }

    function edit_data($where, $table){
    	return $this->db->get_where($table, $where);
    }

    function hapus_data($where, $table){
    	$this->db->where($where);
    	$this->db->delete($table);
    }

    function update_data($where, $data, $table){
    	$this->db->where($where);
    	$this->db->update($table, $data);
    }


    function tampil_bangunan($a)
    {
        return $this->db->get_where('aset_bangunan',$a);
    }

        function tampil_tanah($a)
    {
        return $this->db->get_where('aset_tanah',$a);
    }

       function tampil_user($a)
    {
        return $this->db->get_where('user',$a);
    }

    function tampil_guru($a)
    {
        return $this->db->get_where('data_guru',$a);
    }

    function tampil_siswa($a)
    {
        return $this->db->get_where('siswa',$a);
    }

        function tampil_tenpen($a)
    {
        return $this->db->get_where('tenkependik',$a);
    }

     function tampil_kepsek($a)
    {
        return $this->db->get_where('kepsek',$a);
    }


}
?>