<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();
?>
<script>
    alert('berhasil Logout');
    document.location.href ='index.php';
</script>
<?php
exit;
?>