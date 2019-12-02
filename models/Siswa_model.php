<?php

class Siswa_model extends CI_Model {

    function retrieve()
    {
        $query = $this->db->get('siswa');

        if($query->result()){
            foreach ($query->result() as $content) {
                $data[] = array(
                    $content->nis,
                    $content->nama_siswa,
                    $content->tempat_lahir,
                    $content->tanggal_lahir,
                    $content->jenis_kel,
                    $content->agama,
                    $content->nm_ortu,
                    $content->pekerjaan_ortu,
                    $content->alamat,
                    $content->kelas
                );
            }
            return $data;
        } else {
            return FALSE;
        }
    }

    function add($arg) {
        $data = array (
            'nis'            =>$arg[0],
            'nama_siswa'     =>$arg[1],
            'tempat_lahir'   =>$arg[2],
            'tanggal_lahir'  =>$arg[3],
            'jenis_kel'      =>$arg[4],
            'agama'          =>$arg[5],
            'nm_ortu'        =>$arg[6],
            'pekerjaan_ortu' =>$arg[7],
            'alamat'         =>$arg[8],
            'kelas'          =>$arg[9]
        );
        $this->db->insert('siswa', $data);
    }

    function delete($id){
        $this->db->where('nis', $id);
        $this->db->delete('siswa');
    }

    function update(){
        $data = array(
          'nis'            =>$form[0],
          'nama_siswa'     =>$form[1],
          'tempat_lahir'   =>$form[2],
          'tanggal_lahir'  =>$form[3],
          'jenis_kel'      =>$form[4],
          'agama'          =>$form[5],
          'nm_ortu'        =>$form[6],
          'pekerjaan_ortu' =>$form[7],
          'alamat'         =>$form[8],
          'kelas'          =>$form[9]
        );

        $this->db->where('nis', $id);
        $this->db->delete('siswa');
    }

    function getSiswa($id){
        $this->db->where('nis', $id);
        $query = $this->db->get('siswa');

        if($query->result()){
            foreach ($query->result() as $content){
                $data = array(
                  $content->nis,
                  $content->nama_siswa,
                  $content->tempat_lahir,
                  $content->tanggal_lahir,
                  $content->jenis_kel,
                  $content->agama,
                  $content->nm_ortu,
                  $content->pekerjaan_ortu,
                  $content->alamat,
                  $content->kelas
                );
            }
            return $data;
        }else{
            return FALSE;
        }
    }
  }

?>
