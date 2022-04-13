<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/style.css">
</head>

<body>
    <div class="header">
        <h1>Data <span>Siswa</span></h1>

    </div>

    <div class="main">
        <table>
            <tr class="thead">
                <td>Nama</td>
                <td>NIS</td>
                <td>Kelas</td>
                <td>Tanggal lahir</td>
                <td>Tempat Lahir</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>Agama</td>
            </tr>
            <tr class="tbody">
                <td>
                    <?= $nama; ?>
                </td>
                <td>
                    <?= $nis; ?>
                </td>
                <td>
                    <?= $kelas; ?>
                </td>
                <td>
                    <?= $tanggallahir; ?>
                </td>
                <td>
                    <?= $tempatlahir; ?>
                </td>
                <td>
                    <?= $alamat; ?>
                </td>
                <td>
                    <?= $jeniskelamin; ?>
                </td>
                <td>
                    <?= $agama; ?>
                </td>

            </tr>
        </table>
    </div>
    <div class="footer">

    </div>
</body>

</html>