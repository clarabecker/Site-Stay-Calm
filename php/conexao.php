<?php
$conn = mysqli_connect('localhost', 'staycalm', 'staycalm','site_staycalm') or die ("Não possível conectar ao banco de dados");
$banco = mysqli_select_db($conn, 'site_staycalm');
?>
