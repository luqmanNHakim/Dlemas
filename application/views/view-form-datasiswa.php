<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="8">
                    Form Input Data Siswa 
                </th>
            </tr>
            <tr>
                <td colspan="8">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="NIS" id="NIS">
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas">
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="date" name="tgl_lahir" id="tanggal lahir">
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tmpt_lahir" id="tempat lahir">
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td class="radio">
                    <td>
                        <input type="radio" name="kelamin" value="Laki-laki">Laki-Laki
                        <input type="radio" name="kelamin" value="Perempuan">Perempuan
                    </td>
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">-- Pilih Agama --</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="8" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>

</html>