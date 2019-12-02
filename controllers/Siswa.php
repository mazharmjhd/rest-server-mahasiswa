<?php

use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends REST_Controller {

public function __construct() {
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Siswa_model');
}

// GET

public function index_get() {
  $data['siswa'] = $this->Siswa_model->retrieve();
  $this->load->view('Siswa_view', $data);

    //$data_siswa = array(
      //"nama" => "Muhammad Azhar Mujahid",
    //  "umur" => "5",
      //"kelas" => "4"
  //  );

    $this->response($data, 200);
}

// POST
public function index_post() {

$data_siswa = array(
  "nama" => "Muhammad Al Fatih",
  "umur" => "4"
);

$this->response($data_siswa, 200);
}

// DELETE
public function index_delete(){

 $data_siswa = array(
   $this->Siswa_model->delete($this->uri->rsegment(3))
   $this->index();
 );

 $this->response($data_siswa, 200);
}

public function form_tambah(){
    $this->load->view('Tambah_view');
}

public function submit(){
    $this->Siswa_model->add($this->input->post('var'));
    $data['submitted'] = TRUE ;
    $this->load->view('Tambah_view', $data);
}

function form_update(){
    $data['siswa'] = $this->Siswa_model->getMahasiswa($this->uri->rsegment(3));
    $this->load->view('Update_view', $data);
}

function update(){
    $this->Siswa_model->update($this->input->post('old_nis'), $this->input->post('var'));
    $this->index();
 }

}
?>
