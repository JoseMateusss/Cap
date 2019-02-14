<?php
   $dados = $this->session->userdata('usuario');
?>
<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>usuario">Página Inicial</a>
        </li>
        <li class="breadcrumb-item active">Perfil</li>
        <li class="breadcrumb-item active">Confirmar Senha</li>
      </ol>
    <div class="row bg-light rounded">
    	<form action="<?= base_url();?>usuario/remover/<?= $dados->$id?>" method="post">
    		<div style="margin-bottom: 15px;">
    			<label for="senha">Mostre-nos que é você mesmo! Insira sua senha: 
    			<br/>
    			<input name="senha">
    			<br/>
    		</div>
    		<label for="contribuicao">Por fim, informe-nos por que você está deixando o CAP: </label>
    		<br/>
    		<input type="radio" value="Não gosto do CAP">Não gosto do CAP<br/>
    		<input type="radio" value="Não gosto do CAP">Não gosto do CAP<br/>
    		<input type="radio" value="Não gosto do CAP">Não gosto do CAP<br/>
    		<label>Outro: </label>
    		<br/>
    		<textarea></textarea>
    		<br/>
    		<button class="btn btn-info">
    			<b>Finalizar</b>
    		</button>
    	</form>
    </div>