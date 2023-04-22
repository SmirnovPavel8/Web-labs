<?php
session_start();
if (!empty($_SESSION)) 
{
}
?>


<ul>
    <?php foreach ($_SESSION['info'] as $info_elem): ?>
        <li><?php echo $info_elem; ?></li>
    <?php endforeach; ?>
</ul>