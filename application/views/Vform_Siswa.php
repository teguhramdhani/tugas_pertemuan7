<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #c12;
            text-align: center;
        }

        .header {
            height: 55px;
            padding-top: 15px;
            background-color: #fff;
        }

        .header h1 span {
            color: #c12;
        }

        .main {
            border: 5px solid #fff;
            height: 475px;
            color: #fff;
            padding: 5px 5px;
        }

        .main form {
            width: 360px;
            display: inline-block;
        }

        .main form label {
            display: block;
            width: 150px;
            height: 25px;
            float: left;
            font-size: 20px;
            margin: 5px 0px;
            text-align: right;
        }

        .main form input {
            width: 200px;
            height: 25px;
            margin: 5px 0px;
        }

        .main form .radio {
            width: 350px;
            height: 25px;
            display: flex;
        }

        .main form .radio input {
            margin-top: 3px;
            margin-left: 10px;
        }

        .main form .radio span {
            width: 300px;
            padding-right: 10px;
            margin-top: 5px;
            font-size: 18px;
        }

        .footer {
            background-color: #fff;
            height: 55px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1><span>Form</span> Data Siswa</h1>

    </div>

    <div class="main">
        <form action="" method="post">
            <label for="nama">Nama Siswa :</label>
            <input type="text" name="nama" id="nama" placeholder="Nama siswa.." required autocomplete="true">
            <label for="nis">NIS :</label>
            <input type="text" name="nis" id="nis" placeholder="Nomor Induk Siswa.." required autocomplete="true">
            <label for="kelas">Kelas :</label>
            <input type="text" name="kelas" id="kelas" placeholder="Kelas.." required autocomplete="true">
            <label for="tanggallahir">Tanggal lahir :</label>
            <input type="text" name="tanggallahir" id="tanggallahir" placeholder="Tanggal lahir.." required autocomplete="true">
            <label for="tempatlahir">Tempat Lahir :</label>
            <input type="text" name="tempatlahir" id="tempatlahir" placeholder="Tempat lahir.." required autocomplete="true">
            <label for="alamat">Alamat :</label>
            <input type="text" name="alamat" id="alamat" placeholder="Alamat.." required autocomplete="true">
            <label for="jeniskelamin">Jenis Kelamin :</label>
            <div class="radio">
                <input type="radio" name="jeniskelamin" id="jeniskelamin" value="laki-laki"> <span>Laki-laki</span>
                <input type="radio" name="jeniskelamin" id="jeniskelamin" value="perempuan"><span>Perempuan</span>
            </div>
        </form>
    </div>

    <div class="footer">

    </div>
</body>

</html>