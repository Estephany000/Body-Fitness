<?php
    session_start();
    session_destroy();

    echo "<script>window.location = '../principal.php'</script>";
?>