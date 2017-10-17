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
    		<h1>Cadastrar usuário</h1>
    		<hr />
    		<form role="form" action="<?php echo base_url('listar/cadastrar'); ?>" method="post" id="form" autocomplete="off">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do usuário">
                        </div>
                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <input type="text" name="idade" id="idade" class="form-control" placeholder="Idade do usuário">
                        </div>
                        <input type="hidden" name="confirma" value="ok">
                        <input type="submit" id="cadastrar" class="btn btn-success btn-lg btn-block" value="Cadastrar">
                    </form>
    	</div>
	</div>
	<script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.js'); ?> "></script>
</body>
</html>