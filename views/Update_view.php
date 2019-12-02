<?php

    echo"<h1>Form Update Data Siswa</h1>";

    $hidden = array('old_nis' => $siswa[0]);
    echo form_open('siswa/update', '', $hidden);
    echo"<pre>";

$data = array(
    'name'          => 'var[0]',
    'id'            => 'var[0]',
    'value'         => $siswa[0],
    'maxlength'     => '10',
    'size'          => '10',
    'style'         => 'color : blue',
);
echo "NIS   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[1]',
    'id'            => 'var[1]',
    'value'         => $siswa[1],
    'maxlength'     => '50',
    'size'          => '30',
    'style'         => 'color : blue',
);
echo "Nama Siswa   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[2]',
    'id'            => 'var[2]',
    'value'         => $siswa[2],
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);
echo "Tempat Lahir   : ".form_textarea($data)."<br />";

$data = array(
    'name'          => 'var[3]',
    'id'            => 'var[3]',
    'value'         => $siswa[3],
    'maxlength'     => '10',
    'size'          => '10',
    'style'         => 'color : blue',
);
echo "Tanggal Lahir   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[4]',
    'id'            => 'var[4]',
    'value'         => $siswa[4],
    'maxlength'     => '50',
    'size'          => '30',
    'style'         => 'color : blue',
);
echo "Jenis Kelamin   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[5]',
    'id'            => 'var[5]',
    'value'         => $siswa[5],
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);
echo "Agama   : ".form_textarea($data)."<br />";

$data = array(
    'name'          => 'var[6]',
    'id'            => 'var[6]',
    'value'         => $siswa[6],
    'maxlength'     => '10',
    'size'          => '10',
    'style'         => 'color : blue',
);
echo "Nama Orang Tua   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[7]',
    'id'            => 'var[7]',
    'value'         => $siswa[7],
    'maxlength'     => '50',
    'size'          => '30',
    'style'         => 'color : blue',
);
echo "Pekerjaan Orang Tua  : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[8]',
    'id'            => 'var[8]',
    'value'         => $siswa[8],
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);
echo "Alamat   : ".form_textarea($data)."<br />";

$data = array(
    'name'          => 'var[9]',
    'id'            => 'var[9]',
    'value'         => $siswa[9],
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);
echo "Kelas   : ".form_textarea($data)."<br />";


echo form_submit('submit', 'Simpan');
echo "</pre>";
echo form_close();

if(isset($submitted)) {
    echo "Data Berhasil Di Simpan <br>";
}
?>
