    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb border">
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>">Página Inicial</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="<?= base_url();?>forum">Fórum</a>
        </li>
        <li class="breadcrumb-item active">Minhas Perguntas</li>
      </ol>
      <div class="table-responsive">
        <table width="100%" class="table table-striped table-bordered table-hover  text-dark" id="dataTables-example">
            <thead>

              <tr>
                <th>Disciplina</th>
              	<th>Titulo</th>
                <th>Data</th>   
                <th>Acessar</th>
                <th>Excluir</th>   
              </tr>
            </thead>

            <?php foreach ($topicos as $p) {?>
              <?php if ($p->status == 1){ ?>
                <tbody class="bg-white text-dark">

                  <tr class="odd gradeX">
                      <td><?= $p->nome_disciplina?></td>
                        <td class="center"><?= $p->titulo?></td>
                        <td class="center"><?=date('d/m/Y',strtotime($p->data));?></td>
                        <td class="center" >
                          <a href="<?= base_url()?>forum/acessar_pergunta/<?= $p->id?>">
                            <button class="btn btn-info col-sm-12">
                              <i class="fa fa-fw fa-search"></i>
                            </button>
                          </a>
                        </td>
                        <td class="center">
                          <a href="<?= base_url()?>forum/excluir_minha/<?= $p->id?>">
                            <button class="btn btn-danger col-sm-12">
                              <i class="fa fa-fw fa-times"></i>
                            </button>
                          </a>
                        </td>
                    </tr>
              <?php } ?> 

                  </tbody>
        <?php } ?>
          </table>
          
      </div>
    </div>