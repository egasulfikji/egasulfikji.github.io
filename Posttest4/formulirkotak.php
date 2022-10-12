<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/formulirkotak.css">
</head>
<body>
    <form action="index.html" >
    <h1>Data Kotak dan Saran</h1>
    <table border= "2" align="center" width="1000px" cellspacing="0">
        <tr class="atas">
            <td colspan="3">DATA DIRI</td>
        </tr>
        <tr class="tengah">
            <td>Jenis Pesan</td>
            <td class="titik">:</td>
            <td><?php echo $_POST['jenispesan']; ?></td>
        </tr>
        <tr class="tengah">
            <td>Nama</td>
            <td class="titik">:</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr class="tengah">
            <td>Alamat</td>
            <td class="titik">:</td>
            <td><?php echo $_POST['alamat']; ?></td>
        </tr>
        <tr class="tengah">
            <td>No Telepon</td>
            <td class="titik">:</td>
            <td><?php echo $_POST['telepon']; ?></td>
        </tr>
        <tr class="tengah">
            <td>Jenis Kelamin</td>
            <td class="titik">:</td>
            <td><?php echo $_POST['jeniskelamin']; ?></td>
        </tr>
        <tr class="bawah">
            <td colspan= "3">PESAN DAN KRITIK</td>
        </tr>
        <tr class="tengah">
            <td>Pesan</td>
            <td class="titik">:</td>
            <td><?php echo $_POST['pesan']; ?></td>
        </tr>
        <tr class="tengah">
           <td colspan="3"><button type="submit">Kembali</button></td>
        </tr>
    </table>
    </form>
</body>
</html>