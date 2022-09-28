<?php
// Inicia o array da sessão
session_start();

// Verifica se existe uma mensagem
if (isset($_SESSION['msg'])) { ?>
	<script>
        //Mensagem de alerta javascript do materialize
		window.onload = function(){
			M.toast({html: "<?php echo $_SESSION['msg']; ?>"});			
		};
	</script>
	<?php
    // Limpar a mensagem da sessão 
	unset($_SESSION['msg']); 	
};
?>