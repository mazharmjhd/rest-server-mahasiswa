<?php

if($siswa) {
    echo "<h1>Data Siswa</h1>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>
            <th>NIS</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>JENIS KELAMIN</th>
            <th>AGAMA</th>
            <th>NAMA ORANG TUA</th>
            <th>PEKERJAAN ORANG TUA</th>
            <th>ALAMAT</th>
            <th>KELAS</th>
            <th>ACTION</th>
           </tr>";

$no = 1;
foreach($siswa as $content) {
    echo "<tr>
            <td>$no.</td>
            <td>$content[0]</td>
            <td>$content[1]</td>
            <td>$content[2]</td>
            <td>$content[3]</td>
            <td>$content[4]</td>
            <td>$content[5]</td>
            <td>$content[6]</td>
            <td>$content[7]</td>
            <td>$content[8]</td>
            <td>$content[9]</td>
            <td>$content[10]</td>
    </td>".
    anchor('siswa/delete/'.$content[0], 'Delete', 'title="Delete Data"') . " | " .
    anchor('siswa/form_update/'.$content[0], 'Update', 'title="Update Data"') .
    "</td>
    </tr>";
    $no++;
}
echo "</table>";
echo anchor('siswa/form_tambah/', 'Tambah', 'title="Tambah Data"');
}
?>
