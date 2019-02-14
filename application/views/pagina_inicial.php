<?php if($this->session->flashdata("sucsses")): ?>
    <p><?= $this->session->flashdata("sucsses") ?></p>
 <?php endif ?>
<?php if($this->session->flashdata("danger")): ?>
   <p><?= $this->session->flashdata("danger") ?></p>
<?php endif ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb border">
        <li class="breadcrumb-item active">Página Inicial</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
        </div>
      </div>
    </div>


  