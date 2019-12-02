<?php

echo"<h1>Form Tambah Data Siswa</h1>";
echo form_open('siswa/submit');
echo"<pre>";

$data = array(
    'name'          => 'var[0]',
    'id'            => 'var[0]',
    'value'         => '12345678',
    'maxlength'     => '10',
    'size'          => '10',
    'style'         => 'color : blue',
);
echo "NIS   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[1]',
    'id'            => 'var[1]',
    'value'         => 'Muhammad Azhar Mujahid',
    'maxlength'     => '50',
    'size'          => '30',
    'style'         => 'color : blue',
);

echo "Nama Siswa   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[2]',
    'id'            => 'var[2]',
    'value'         => 'Tangerang',
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);

echo "Tempat Lahir   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[3]',
    'id'            => 'var[3]',
    'value'         => '16 Juni 1996',
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);

echo "Tangal Lahir   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[4]',
    'id'            => 'var[4]',
    'value'         => 'Laki-Laki',
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);

echo "Jenis Kelamin   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[5]',
    'id'            => 'var[5]',
    'value'         => 'Islam',
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);

echo "Agama   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[6]',
    'id'            => 'var[6]',
    'value'         => 'Wijaya',
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);

echo "Nama Orang Tua   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[7]',
    'id'            => 'var[7]',
    'value'         => 'Pensiun',
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);

echo "Pekerjaan Orang Tua   : ".form_input($data)."<br />";

$data = array(
    'name'          => 'var[8]',
    'id'            => 'var[8]',
    'value'         => 'Tangerang Selatan',
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);

echo "Alamat   : ".form_textarea($data)."<br />";

$data = array(
    'name'          => 'var[9]',
    'id'            => 'var[9]',
    'value'         => '5',
    'maxlength'     => '5',
    'size'          => '30',
    'style'         => 'color : blue',
);

echo "Kelas   : ".form_input($data)."<br />";

echo form_submit('submit', 'Simpan');
echo "</pre>";
echo form_close();

if(isset($submitted)) {
    echo "Data Berhasil Di Input <br>";
    echo "<a href='".base_url()."index.php/Siswa'>Kembali</a>";
}
?>
