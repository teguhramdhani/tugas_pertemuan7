<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/siswa.css">
</head>

<body>
    <div class="header">
        <h1><span>Form</span> Data Siswa</h1>

    </div>

    <div class="main">
        <form action="<?= base_url('Siswa/simpan'); ?>" method="post">
            <label for="nama">Nama Siswa :</label>
            <input type="text" name="nama" id="nama" placeholder="Nama siswa.." required autocomplete="true">
            <label for="nis">NIS :</label>
            <input type="text" name="nis" id="nis" placeholder="Nomor Induk Siswa.." required autocomplete="true">
            <label for="kelas">Kelas :</label>
            <input type="text" name="kelas" id="kelas" placeholder="Kelas.." required autocomplete="true">
            <label for="tanggallahir">Tanggal lahir :</label>
            <input type="text" name="tanggallahir" id="tanggallahir" required autocomplete="true">
            <label for="tempatlahir">Tempat Lahir :</label>
            <input type="text" name="tempatlahir" id="tempatlahir" placeholder="Tempat lahir.." required autocomplete="true">
            <label for="alamat">Alamat :</label>
            <input type="text" name="alamat" id="alamat" placeholder="Alamat.." required autocomplete="true">
            <label for="jeniskelamin">Jenis Kelamin :</label>
            <div class="radio">
                <input type="radio" name="jeniskelamin" id="jeniskelamin" value="laki-laki"> <span>Laki-laki</span>
                <input type="radio" name="jeniskelamin" id="jeniskelamin" value="perempuan"><span>Perempuan</span>
            </div>

            <label for="agama">Agama :</label>
            <select name="agama" id="agama">
                <option value="---">---</option>
                <option value="Islam">Islam</option>
                <option value="Katolik">Katolik</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
                <option value="Protestan">Protestan</option>
                <option value="Khonghucu">Khonghucu</option>
            </select>
            <div class="btn">
                <input type="submit" name="simpan" value="SIMPAN">
                <input type="reset" name="delete" value="DELETE">
            </div>

        </form>
    </div>

    <div class="footer">
        <p>By : Teguh Ramdhani</p>
        <p>17190987</p>

    </div>
</body>

</html>