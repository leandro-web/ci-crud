<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuários</title>
	<?php echo link_tag('assets/lib/bootstrap/css/bootstrap.css');?>
</head>
<body>
	<div class="container">
    	<div class="col-md-8 col-md-offset-2">
    		<h1><?php  echo ( $acao == '1' ? "Cadastrar usuário" : "Editar usuário" ); ?></h1>
    		<hr />
    		<?php if($acao == '1'){ ?>
	    		<form role="form" action="<?php echo base_url('listar/cadastrar'); ?>" method="post" id="form" autocomplete="off">
	        <?php }else{ ?>
	        	<form role="form" action="<?php echo base_url('listar/editar').'/'.$usuario['id']; ?>" method="post" id="form" autocomplete="off">
	        <?php } ?>
	                <div class="form-group">
	                    <label for="nome">Nome</label>
	                    <input type="text" name="nome" class="form-control" placeholder="Nome do usuário" <?php if($acao == '2'){ ?> value="<?php echo $usuario['nome']; ?>" <?php } ?> >
	                </div>
	                <div class="form-group">
	                    <label for="idade">Idade</label>
	                    <input type="text" name="idade" class="form-control" placeholder="Idade do usuário" <?php if($acao == '2'){ ?> value="<?php echo $usuario['idade']; ?>" <?php } ?>>
	                </div>
	                <input type="hidden" name="confirma" value="ok">
	                <?php if($acao == '1'){ ?>
	                 	<input type="submit" class="btn btn-success btn-lg btn-block" value="Cadastrar">
	             	<?php }else{ ?>
	              		<input type="submit" class="btn btn-primary btn-lg btn-block" value="Editar">
	             	<?php } ?>
	            </form>
    	</div>
	</div>
</body>
</html>