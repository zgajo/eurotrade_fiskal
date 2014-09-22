<?php
mysql_connect('localhost','root','dpranjic') or die('nemoguće povezati na bazu');
mysql_select_db('fiskalizacija') or die('nemoguće povezati na tabele');
mysql_query('SET CHARACTER SET utf8');
?>
