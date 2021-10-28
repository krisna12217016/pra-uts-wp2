<html>
<head>
        <title>Pra UTS</title>
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>
<div id="wrapper">
    <center><h1>PRA UTS</h1>
            <h3>Membuat CRUD dengan CodeIgniter</h3>
    </center>
    <div class="clear"></div>
    <center> <?php echo anchor('crud/tambah' , 'Tambah Data'); ?> </center>
    <table style="margin: 20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no=1;
        foreach($user as $u) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nim ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->kelas ?></td>
            <td><?php echo $u->alamat ?></td>
            <td><?php echo anchor('crud/edit/'  . $u-> id , 'Edit '); ?>
                <?php echo anchor('crud/hapus/'  . $u-> id , 'Hapus'); ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>