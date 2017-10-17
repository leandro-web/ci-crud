<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de usuários</title>
	<?php echo link_tag('assets/lib/bootstrap/css/bootstrap.css');?>
</head>
<body>
	<div class="container">
    	<div class="col-md-8 col-md-offset-2">
    		<table class="table table-striped">
    			<thead>
    				<a href="<?php echo base_url('listar/cadastrar'); ?>" class="btn btn-primary btn-xs pull-right"> Novo usuário </a>
        			<tr>
			            <th>ID</th>
			            <th>Nome</th>
			            <th>Idade</th>
			            <th class="text-center">Ação</th>
        			</tr>
    			</thead>
    			<tbody>
    				<?php foreach($usuarios as $linha): ?>
			            <tr>
			                <td><?= $linha->id; ?></td>
			                <td><?= $linha->nome; ?></td>
			                <td><?= $linha->idade; ?></td>
			                <td class="text-center">
			                	<a href="<?php echo base_url("listar/editar/$linha->id") ?>" class="btn btn-info btn-xs"> Editar </a> 
			                	<a href="<?php echo base_url("listar/deletar/$linha->id") ?>" class="btn btn-danger btn-xs" onClick="return confirm('Tem certeza que deseja deletar o usuário?');"> Deletar </a>
			                </td>
			            </tr>	
		            <?php endforeach; ?>            
            	</tbody>
    		</table>
    	</div>
	</div>	
</body>
</html>