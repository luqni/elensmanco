<?php
$db = mysqli_connect("localhost", "root", "", "db_elearning");
mysqli_query($db, "UPDATE tb_file_materi SET hits = hits+1 WHERE id_materi = '$_POST[id]'") or die($db->error);
?>