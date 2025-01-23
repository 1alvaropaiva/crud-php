<?php 
    if (isset($_SESSION['mensagem'])):
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?php 
        echo $_SESSION['mensagem'];
    ?>
    <button type="button" aria-label="Close" data-bs-dismiss="alert" class="btn-close">
    </button>
</div>

<?php 
    unset($_SESSION['mensagem']);
    endif;
?>