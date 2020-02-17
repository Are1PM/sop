<?php
unset($_SESSION);
session_destroy();

?>
<script>
    document.location.href = '?go=sign-out'
</script>