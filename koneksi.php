<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_spp_ukk');

if (!$koneksi) {
	echo "Koneksi Anda Gagal";
}
