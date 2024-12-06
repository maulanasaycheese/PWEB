<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Faculty+Glyphic&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Faculty Glyphic', Arial, sans-serif;
            background-image: url("bgimage.avif");
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: justify;
        }
        header h3 {
            font-size: 1.8em;
            color: lightskyblue;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        fieldset {
            background-color: whitesmoke;
            border: none;
            padding: 0;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        .radio-group {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        input[type="submit"] {
            background-color: #2E8B57;
            color: #fff;
            font-size: 1.1em;
            font-weight: bold;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #246644;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>

        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>
                <p>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" placeholder="Nama lengkap" required />
                </p>
                <p>
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" rows="4" placeholder="Alamat lengkap" required></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                    </div>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Kong Hu Cu</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal:</label>
                    <input type="text" name="sekolah_asal" placeholder="Nama sekolah" required />
                </p>
                <p style="text-align: center;">
                    <input type="submit" value="Daftar" name="daftar" />
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>