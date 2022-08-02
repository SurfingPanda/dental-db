<?php
if(isset($_SESSION['message'])){
    ?>
        <h3><?= $_SESSION['message']; ?></h3>
    <?php
}
?>