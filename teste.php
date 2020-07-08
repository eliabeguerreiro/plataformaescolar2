<?php
?>
<a href="../controller/controller.deslogar.php" onclick="return confirm(Quer deslogar?');" title="Deslogar"><img
        src="img/logout.png" class="icon2"></a>


<script>
var logout = confirm("Quer fazer logout?");
if (logout) {
    location.href = "../controller/controller.deslogar.php";
}
</script>