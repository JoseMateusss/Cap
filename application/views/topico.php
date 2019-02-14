    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb border">
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>usuario">Página Inicial</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>forum">Fórum</a>
        </li>
        <li class="breadcrumb-item active">
          Nova Pergunta
        </li>

      </ol>
    <form action="<?=base_url()?>forum/do_upload" role="form" method="post" enctype="multipart/form-data">
      <div class="row bg-light border rounded">
            <div class="rounded col-sm-12 formPergunta ">

              <div class="form-group col-sm-4">
                  <label class="font-weight-bold" for="discipina">Selecione a disciplina correspondente a esta pergunta: </label>
              
                  <select class="form-control" name="disciplinna">
                  <?php foreach ($disciplinas as $d) {?>
                     <option value="<?= $d->id_disciplina?>"><?=$d->nome_disciplina?></option>
                  <?php } ?>
                  </select>
              </div>

              
                
                <div class="form-group col-sm-5">
                  <label class="font-weight-bold">Titulo:</label>
                  <input class="form-control" type="txt" name="titulo"><span>Ex. Estou em dúvida em função afim.</span>
                </div>
                                        
                <div class="form-group col-sm-9">
                  <label class="font-weight-bold">Pergunta: </label>
                  <textarea class="form-control" rows="10" name="topico"></textarea>
                </div>

                <?php if(! empty($error)){?>
                  <div class="container-fluid">
                      <div class="alert alert-danger">
                        <strong>ERROR:</strong><?php echo $error; ?>
                      </div>
                  </div>
                <?php } ?>
                
                <div class="form-group col-sm-4">
                  <input type="file" name="userfile">
                </div>
          
              
                <br/>
              
                <button type="submit" class="btn btn-info">Registrar Pergunta</button>
                <button type="reset" class="btn btn-dark">Resetar</button>
      </form>                      
            </div>
                                <!-- /.col-lg-6 (nested) -->
          </div>
    </div>