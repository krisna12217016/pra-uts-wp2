<?php
class contoh1 extends CI_Controller
{
    public function index()
    {
        echo "<h1> MyBio </h1>";
        echo "Nama      : Krisna Heru Saputra <br>
        Tempat Lahir        : Bekasi <br>
        Tanggal Lahir       : 23 Agustus 1994";
    }
    public function halo()
    {
        echo "halo, ini controller halo()";
    }
}