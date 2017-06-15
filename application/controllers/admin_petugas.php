<?php

class Admin_petugas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('madmin');
        $this->load->model('UserModel');
        $this->load->helper('url');
        $this->load->library('lib_new');
    }

    function index(){
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $this->load->view('head_user');
        $data['prof'] = $this->madmin->tampil($a)->result();
        $this->load->view('admin/beranda_sekolah', $data);
        $this->load->view('foot_user');
    }

    function edit($id){
        $this->load->view('head_user');
        $where = array('id' => $id);
        $data['user'] = $this->madmin->edit_data($where,'user')->result();
        $this->load->view('edit',$data);
    }

    function edit_aset_bangunan($npsn){
        $this->load->view('head_user');
        $where = array('npsn' => $npsn);
        $data['asetbang'] = $this->madmin->edit_data($where,'aset_bangunan')->result();
        $this->load->view('form/faset_bangun',$data);
    }

    function edit_aset_tanah($luas_tanah){
        $this->load->view('head_user');
        $where = array('npsn' => $luas_tanah);
        $data['asettan'] = $this->madmin->edit_data($where,'aset_tanah')->result();
        $this->load->view('form/faset_tanah',$data);
    }

    function edit_sekolah1($id){
        $this->load->view('head_user');
        $where = array('nama_bangunan' => $nama_bangunan);
        $data['user'] = $this->madmin->edit_data($where,'user')->result();
        $this->load->view('edit_sekolah1',$data);
    }

    function edit_sekolah2($id){
        $this->load->view('head_user');
        $where = array('no_sertifikat' => $no_sertifikat);
        $data['user'] = $this->madmin->edit_data($where,'user')->result();
        $this->load->view('edit_sekolah2',$data);
    }

    function edit_siswa($id){
        $this->load->view('head_user');
        $where = array('tahun_ajaran' => $tahun_ajaran);
        $data['user'] = $this->madmin->edit_data($where,'user')->result();
        $this->load->view('edit_siswa',$data);
    }

    function edit_guru($id){
        $this->load->view('head_user');
        $where = array('nuptk' => $nuptk);
        $data['user'] = $this->madmin->edit_data($where,'user')->result();
        $this->load->view('edit_guru',$data);
    }

    function edit_tenkependik($id){
        $this->load->view('head_user');
        $where = array('email' => $email);
        $data['user'] = $this->madmin->edit_data($where,'user')->result();
        $this->load->view('edit_tenkependik',$data);
    }

    //function edit_asetba($id){
        //$this->load->view('head_user');
        //$where = array('npsn' => $npsn);
        //$data['asetb']= $this->madmin->edit_data($where, '')->result();
        //$this->load->view('admin/useredit', $data);
        //$this->load->view('foot_user');
    //}

    function user(){
        $a = array(
            'id' => $this->session->userdata('id')
            );        
        $this->load->view('head_user');
        $data['user']= $this->madmin->tampil_user($a)->result();
        $this->load->view('admin/user_sekolah', $data);
        $this->load->view('foot_user');
    }

     function update_aset_b(){
        $this->load->view('head_user');
        $npsn = $this->input->post('npsn');
        $nama_bangunan = $this->input->post('nama_bangunan');
        $kondisi_bangunan = $this->input->post('kondisi_bangunan');
        $luas_lantai = $this->input->post('luas_lantai');
        $lokasi = $this->input->post('lokasi');
        $tahun_pembangunan = $this->input->post('tahun_pembangunan');
        $luas_bangunan = $this->input->post('luas_bangunan');
        $biaya_pembangunan = $this->input->post('biaya_pembangunan');
       


        $data = array(
            'npsn' => $npsn,
            'nama_bangunan' => $nama_bangunan,
            'kondisi_bangunan' => $kondisi_bangunan,
            'luas_lantai' => $luas_lantai,
            'lokasi' => $lokasi,
            'tahun_pembangunan' => $tahun_pembangunan,
            'luas_bangunan' => $luas_bangunan,
            'biaya_pembangunan' => $biaya_pembangunan
            );

        $where = array('npsn'=> $npsn);
        $this->madmin->update_data($where,$data,'aset_bangunan');
        redirect('admin_petugas/sekolah');
        $this->load->view('head_user');
    }


    function update_aset_t(){
        $this->load->view('head_user');
        $npsn = $this->input->post('npsn');
        $no_persil = $this->input->post('no_persil');
        $kepemilikan = $this->input->post('kepemilikan');
        $atasnama_sertifikat = $this->input->post('atasnama_sertifikat');
        $status_tanah = $this->input->post('status_tanah');
        $luas_tanah = $this->input->post('luas_tanah');
        $no_sertifikat = $this->input->post('no_sertifikat');
        $tgl_sertifikat = $this->input->post('tgl_sertifikat');
        $thn_perolehan = $this->input->post('thn_perolehan');
        $harga_perolehan = $this->input->post('harga_perolehan');
       $asal_usul = $this->input->post('asal_usul');
       $letak = $this->input->post('letak');
       $peruntukan = $this->input->post('peruntukan');

        $data = array(
            'npsn' => $npsn,
            'no_persil' => $no_persil,
            'kepemilikan' => $kepemilikan,
            'atasnama_sertifikat' => $atasnama_sertifikat,
            'status_tanah' => $status_tanah,
            'luas_tanah' => $luas_tanah,
            'no_sertifikat' => $no_sertifikat,
            'tgl_sertifikat' => $tgl_sertifikat,
            'thn_perolehan' => $thn_perolehan,
            'harga_perolehan' => $harga_perolehan,
            'asal_usul' => $asal_usul,
            'letak' => $letak,
            'peruntukan' => $peruntukan
            );

        $where = array('luas_tanah'=> $luas_tanah);
        $this->madmin->update_data($where,$data,'aset_tanah');
        redirect('admin_petugas/sekolah');
        $this->load->view('head_user');
    }

    function update_siswa(){
        $this->load->view('head_user');
        $id = $this->input->post('npsn');
        $username = $this->input->post('tahun_ajaran');
        $email = $this->input->post('kelas');
        $password = $this->input->post('jurusan');
        $nama = $this->input->post('rombel');
        $level = $this->input->post('jumlah_putra');
        $foto = $this->input->post('jumlah_putri');
        $level = $this->input->post('kms');
        $level = $this->input->post('non_kms');
        $level = $this->input->post('jumlah_siswa');


        $data = array(
            'npsn' => $npsn,
            'tahun_ajaran' => $tahun_ajaran,
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'rombel' => $rombel,
            'jumlah_putra' => $jumlah_putra,
            'jumlah_putri' => $jumlah_putri,
            'kms' => $kms,
            'non_kms' => $non_kms,
            'jumlah_siswa' => $jumlah_siswa

            );

        $where = array('id'=> $id);
        $this->madmin->update_data($where,$data,'user');
        redirect('admin_petugas/siswa');
        $this->load->view('head_user');
    }

    function update_guru(){
        $this->load->view('head_user');
        $id = $this->input->post('npsn');
        $username = $this->input->post('tahun_ajaran');
        $email = $this->input->post('nbm');
        $password = $this->input->post('nama_guru');
        $nama = $this->input->post('bidang');
        $level = $this->input->post('nuptk');
        $foto = $this->input->post('nip');
        $level = $this->input->post('tempat_lahir');
        $level = $this->input->post('tgl_lahir');
        $level = $this->input->post('telepon');
        $level = $this->input->post('email');
        $level = $this->input->post('pangkat_golruang');
        $level = $this->input->post('tgl_pengangkatan');
        $level = $this->input->post('sertifikasi_guru');
        $level = $this->input->post('tmt_sertifikasi');
        $level = $this->input->post('jk');
        $level = $this->input->post('sts_pegawai');
        $level = $this->input->post('organisasi');
        $level = $this->input->post('alamat');
        $level = $this->input->post('rt_rw');
        $level = $this->input->post('kelurahan');
        $level = $this->input->post('kec');
        $level = $this->input->post('kab');
        $level = $this->input->post('pendidikan');
        $level = $this->input->post('jurusan');
        $level = $this->input->post('univ');
        $level = $this->input->post('thn_lulus');



        $data = array(
            'npsn' => $npsn,
            'tahun_ajaran' => $tahun_ajaran,
            'nbm' => $nbm,
            'nama_guru' => $nama_guru,
            'bidang' => $bidang,
            'nuptk' => $nuptk,
            'nip' => $nip,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'telepon' => $telepon,
            'email' => $email,
            'pangkat_golruang' => $pangkat_golruang,
            'tgl_pengangkatan' => $tgl_pengangkatan,
            'sertifikasi_guru' => $sertifikasi_guru,
            'tmt_sertifikasi' => $tmt_sertifikasi,
            'jk' => $jk,
            'sts_pegawai' => $sts_pegawai,
            'organisasi' => $organisasi,
            'alamat' => $alamat,
            'rt_rw' => $rt_rw,
            'kelurahan' => $kelurahan,
            'kec' => $kec,
            'kab' => $kab,
            'pendidikan' => $pendidikan,
            'jurusan' => $jurusan,
            'univ' => $univ,
            'thn_lulus' => $thn_lulus

            );

        $where = array('id'=> $id);
        $this->madmin->update_data($where,$data,'user');
        redirect('admin_petugas/data_guru');
        $this->load->view('head_user');
    }


    function update_tenkependik(){
        $this->load->view('head_user');
        $id = $this->input->post('npsn');
        $username = $this->input->post('tahun_ajaran');
        $email = $this->input->post('nbm');
        $password = $this->input->post('jabatan');
        $nama = $this->input->post('nama');
        $level = $this->input->post('nip');
        $level = $this->input->post('tempat_lahir');
        $level = $this->input->post('tgl_lahir');
        $level = $this->input->post('telepon');
        $level = $this->input->post('email');
        $level = $this->input->post('pangkat');
        $level = $this->input->post('tgl_pengangkatan');
        $level = $this->input->post('jk');
        $level = $this->input->post('sts_pegawai');
        $level = $this->input->post('organisasi');
        $level = $this->input->post('alamat');
        $level = $this->input->post('rt_rw');
        $level = $this->input->post('kel');
        $level = $this->input->post('kec');
        $level = $this->input->post('kab');
        $level = $this->input->post('prov');
        $level = $this->input->post('pend_thr');


        $data = array(
            'npsn' => $npsn,
            'tahun_ajaran' => $tahun_ajaran,
            'nbm' => $nbm,
            'nama_guru' => $jabatan,
            'bidang' => $nama,
            'nip' => $nip,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'telepon' => $telepon,
            'email' => $email,
            'pangkat' => $pangkat,
            'tgl_pengangkatan' => $tgl_pengangkatan,
            'jk' => $jk,
            'sts_pegawai' => $sts_pegawai,
            'organisasi' => $organisasi,
            'alamat' => $alamat,
            'rt_rw' => $rt_rw,
            'kelurahan' => $kel,
            'kec' => $kec,
            'kab' => $kab,
            'prov' => $prov,
            'pend_thr' => $pend_thr,
    
            );

        $where = array('id'=> $id);
        $this->madmin->update_data($where,$data,'user');
        redirect('admin_petugas/tenkependik');
        $this->load->view('head_user');
    }

//======================================= UPDATE COBA =====================

    function update_asetbangunan($npsn){
              if($this->input->post('submit') !== NULL)
            {     
                   // $where = array('npsn' => $this->session->userdata('npsn'));
                    $b = $this->input->post('nama_bangunan');
                    $c = $this->input->post('register_bangunan');
                    $d = $this->input->post('kondisi_bangunan');
                    $e = $this->input->post('kostruksi_bangunan');
                    $f = $this->input->post('luas_lantai');
                    $g = $this->input->post('lokasi');
                    $h = $this->input->post('tahun_pembangunan');
                    $i = $this->input->post('luas_bangunan');
                    $j = $this->input->post('biaya_pembangunan');
                    $object = array(    
                        'npsn' => $this->session->userdata('npsn'),
                        'nama_bangunan'         => $b,
                        'register_bangunan'     => $c,
                        'kondisi_bangunan'      => $d,
                        'kostruksi_bangunan'    => $e,
                        'luas_lantai'           => $f,
                        'lokasi'                => $g,
                        'tahun_pembangunan'     => $h,
                        'luas_bangunan'         => $i,
                        'biaya_pembangunan'     => $j
                         );
            $this->db->where('npsn', $npsn);
            $this->db->update('aset_bangunan', $object);
            if ($this->db->affected_rows() !== NULL) {
                $this->session->set_flashdata('info', 'Sudah di update');
                redirect('admin_petugas/sekolah');
            }
            else
            {
               $this->session->set_flashdata('info', 'Belum di update');
               redirect('admin_petugas/sekolah');
            }
        }
        else 
        {
           // $data['content'] = '/admin/form_update';
            $data['editdata'] = $this->db->get_where('aset_bangunan',array('id_aset_bangunan'=> $id))->row();
            $this->load->view('/petugas/form/form_asetbangunan',$data);
        }
    }


    function update(){
        $this->load->view('head_user');
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $foto = $this->input->post('foto');

        $data = array(
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'nama' => $nama,
            'level' => $level,
            'foto' => $foto
            );

        $where = array('id'=> $id);
        $this->madmin->update_data($where,$data,'user');
        redirect('admin_petugas/user');
        $this->load->view('head_user');
    }

    function statistik(){
        $this->load->view('head_user');
        $this->load->view('admin/statistik_sekolah');
        $this->load->view('foot_user');
    }

    function guru(){
        $this->load->view('head_user');
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $data['aset']= $this->madmin->tampil_guru($a)->result();            
        $this->load->view('admin/dguru_sekolah',$data);
        $this->load->view('foot_user');
    }

    function sekolah(){
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $this->load->view('head_user');
        $data['aset'] = $this->madmin->tampil_bangunan($a)->result();
        $data['aset2'] = $this->madmin->tampil_tanah($a)->result();
        $this->load->view('admin/dsekolah_sekolah', $data);
        $this->load->view('foot_user');
    }

    function siswa(){
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $data['aset2']= $this->madmin->tampil_siswa($a)->result();
        $this->load->view('head_user');
        $this->load->view('admin/dsiswa_sekolah',$data);
        $this->load->view('foot_user');
    }

    function kepsek(){
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $data['aset']= $this->madmin->tampil_kepsek($a)->result();
        $this->load->view('head_user');
        $this->load->view('admin/dkepsek_sekolah',$data);
        $this->load->view('foot_user');
    }

    function tenpendik(){
        $this->load->view('head_user');
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $data['aset']= $this->madmin->tampil_tenpen($a)->result();
        $this->load->view('admin/dten_sekolah',$data);
        $this->load->view('foot_user');
    }

    function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login_sekolah');
    }
}
?>