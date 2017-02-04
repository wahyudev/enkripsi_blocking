<?php
if($_GET[menu]=='home') include 'home.php';
else if($_GET[menu]=='enkripsi') include 'enkripsi.php';
else if($_GET[menu]=='dekripsi') include 'dekripsi.php';
else include'home.php';