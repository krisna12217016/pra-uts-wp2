<html>
    <head>
        <title>Pra UTS</title>
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    </head>
    <body>
    <div id="wrapper">
    <center>
        <h1>PRA UTS</h1>
        <h3>Form Edit Data</h3>
    </center>
    <div class="clear"></div>
    <?php foreach ($user as $u) { ?>
    <form action="<?php echo base_url() . 'crud/update' ; ?>" method="post">
        <center>
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim" id="" value="<?php echo $u->nim?>"></td>
                </tr>
                <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""value="<?php echo $u->nama?>"></td>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" id=""value="<?php echo $u->kelas?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id=""value="<?php echo $u->alamat?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </center>
    </form>
<?php } ?>
</body>
</html>