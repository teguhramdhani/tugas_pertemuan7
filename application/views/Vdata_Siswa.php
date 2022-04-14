<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/siswa.css">
</head>

<body>
    <div class="header">
        <h1>Data <span>Siswa</span></h1>

    </div>

    <div class="main">
        <table cellpadding="1" cellspacing="3">
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    :
                </td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <td>
                    NIS
                </td>
                <td>
                    :
                </td>
                <td><?= $nis; ?></td>
            </tr>
            <tr>
                <td>
                    Kelas
                </td>
                <td>
                    :
                </td>
                <td><?= $kelas; ?></td>
            </tr>
            <tr>
                <td>
                    Tanggal Lahir
                </td>
                <td>
                    :
                </td>
                <td><?= $tanggallahir; ?></td>
            </tr>
            <tr>
                <td>
                    Tempat Lahir
                </td>
                <td>
                    :
                </td>
                <td><?= $tempatlahir; ?></td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    :
                </td>
                <td><?= $alamat; ?></td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    :
                </td>
                <td><?= $jeniskelamin; ?></td>
            </tr>
            <tr>
                <td>
                    Agama
                </td>
                <td>
                    :
                </td>
                <td><?= $agama; ?></td>
            </tr>
        </table>
        <div class="back">
            <a href="<?= base_url('siswa'); ?>">Kembali</a>
        </div>
    </div>
    <div class="footer">
        <p>By : Teguh Ramdhani</p>
        <p>17190987</p>
    </div>
</body>

</html>