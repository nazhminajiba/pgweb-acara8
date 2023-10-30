<!DOCTYPE html>
<html>
<head>
    <title>Tabel PHP dengan Data Lokasi</title>
</head>
<body>

<?php
// Data untuk tabel
$data = array(
    array("No" => 1, "Nama" => "A", "Longitude" => "110,1", "Latitude" => "-7,1"),
    array("No" => 2, "Nama" => "B", "Longitude" => "110,2", "Latitude" => "-7,2")
);
?>

<h2>Data Lokasi</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Longitude</th>
        <th>Latitude</th>
    </tr>
    <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['No']; ?></td>
            <td><?php echo $row['Nama']; ?></td>
            <td><?php echo $row['Longitude']; ?></td>
            <td><?php echo $row['Latitude']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php //Array
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

foreach ($array as $nilai) {
    if ($nilai == 4 || $nilai == 5) {
        continue; // Melanjutkan iterasi jika nilai adalah 4 atau 5
    }
    echo $nilai . "<br>";
}
?>

<?php //passing variabel
echo "<a href=vars.php?nama=Merapi&alamat=Sleman>Gunung</a>";
?>



<form action="php2.php" method="post">
Nama: <input type="text" name="nama" />
Umur: <input type="text" name="umur" />
<input type="submit" value="Kirim"/>
</form>


</body>
</html>


