<html>
    <head>
        <title>Pra UST</title>
    </head>
    <center>
        <h1>PRA UTS</h1>
        <h3>Form Input Data Baru</h3>
    </center>
    <form action="<?php echo base_url() . 'crud/tambah_aksi' ; ?>" method="post">
        <center>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td><input type="text" name="nim" id=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" id=""></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Tambah"></td>
                </tr>
            </table>
        </center>
    </form>
</html>