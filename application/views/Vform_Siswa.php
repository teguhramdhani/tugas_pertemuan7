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
            height: 430px;
            color: #fff;
            padding-top: 50px;
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
            margin-bottom: 10px;
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


        select {
            margin-top: 5px;
            width: 200px;
            font-size: 18px;
            text-align: center;
            font-family: 'Times New Roman';
        }

        option {
            background-color: #c12;
            color: #fff;
        }

        .main form .btn {
            width: 360px;
            display: flex;
            margin-top: 10px;
        }

        .main form .btn input {
            margin: 10px 5px;
            height: 50px;
            font-size: 20px;
            background-color: #c12;
            color: #fff;
            border: 2px solid #fff;
            border-radius: 10px;
            font-family: 'Times New Roman';
        }

        .main form .btn input:hover {
            background-color: #fff;
            color: #c12;
            border: 2px solid #c12;
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

    </div>
</body>

</html>