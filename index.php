<?php
include('rssclass.php');
$feedlist = new rss('http://blambangannews.com/?feed=rss2'); /* Ubah link feed disini dengan link feed Anda */
echo $feedlist->display(7,"Blambangan News"); /* Angka 7 digunakan untuk menampilkan jumlah artikel */
?>
