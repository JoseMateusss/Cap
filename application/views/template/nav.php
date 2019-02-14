
  <nav class="navbar navbar-expand-lg bg-info navbar-dark fixed-top " id="mainNav">
      <a class="navbar-brand" href="<?= base_url();?>disciplinas"><img style="width: 60px;" src="<?= base_url();?>assets/img/logo_menu.png"/></a>
    <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav navbar-top-links" id="exampleAccordion">
		    <li class="asideUserProfile">
			     <a href="#" title="#" class="profile">
			     </a>
		    </li>

		    <li class="nav-item" data-toggle='tooltip' data-placement='right' title='Perfil'>
          <a class="nav-link" href="<?= base_url();?>usuario/perfil">
            <i class="fa fa-fw fa-user"></i>
            
            <?php 
              $usuario = $this->session->userdata("usuario");
               $str = ucfirst($usuario->nome);
            ?>
            <span class="nav-link-text"><?= $str ?></span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Disciplinas">
          <a class="nav-link" href="<?= base_url();?>disciplinas">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Disciplinas</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de estudos">
          <a class="nav-link" href="<?= base_url();?>listaEstudos">
            <i class="fa fa-fw fa-th-list"></i>
            <span class="nav-link-text">Lista de Estudos</span>
          </a>
        </li>
        
		    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Fórum">
				  <a class="nav-link" href="<?= base_url();?>forum">
					   <i class="fa fa-fw fa-comment"></i>
					   <span class="nav-link-text">Fórum</span>
				  </a>
			  </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sobre">
          <a class="nav-link" href="#">
            <i class="fas fa-question-circle"></i>
            <span class="nav-link-text">Sobre</span>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto">
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alertas
              <span class="badge badge-pill">1</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Notificações</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Nova Resposta em Sua Pergunta</strong>
              </span>
              <span class="small float-right text-muted">11:30</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Mais alguem respondeu a uma pergunta</strong>
              </span>
              <span class="small float-right text-muted">11:30</span>
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li>-->

        <li class="nav-item">
          <form id="formPesquisa" onsubmit="pesquisar()" class="form-inline my-2 my-lg-0 mr-lg-2">

            <div class="input-group">
              <input class="form-control" type="text" id="input_pesquisar" name="pesquisa" placeholder="Pesquise os conteúdos..." required>
              <span class="input-group-append">
                <button id="btn_pesquisar" class="btn btn-dark" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <span class=""><i class="fas fa-sign-out-alt"></i>Sair</span></a>
        </li>

      </ul>
    </div>
  </nav>
  <!--Menu de Navegação-->

  <!--Linha do tempo-->
 
	<div class="content-wrapper">