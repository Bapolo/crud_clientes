<?php
    session_start();

    if (isset($_SESSION['mensagem'])):
   $message = $_SESSION['mensagem'];
?>  

<script>
    window.onload = function () {
        M.toast({html: '<?php echo $message; ?>'});
    }
</script>

<?php      
    endif;
    session_unset();
?>