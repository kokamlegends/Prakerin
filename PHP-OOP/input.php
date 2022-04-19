<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <form action="proses.php?aksi=tambah" method="post">
        <input type="hidden" name="id" value="">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" id="nama" placeholder="Masukan Nama Disini">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat Disini">
                </td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>
                    <input type="text" name="usia" id="usia" placeholder="Masukan Usia Disini">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>