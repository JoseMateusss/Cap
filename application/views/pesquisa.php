<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>usuario">Página Inicial</a>
        </li>
        <li class="breadcrumb-item active">Pesquisa</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <div class="row">
            <h4 class="">Resultados da sua pesquisa: </h4>
          </div>
          <div class="row">
            <?php if($resultado==null){ ?>

            <h5>Nenhum conteúdo correspondente com "<?php echo $pesquisa; ?>" </h5>
          
          </div>
          <?php }else{ ?>

            <?php if($resultado=='false'){ ?>
              <div class="row">
                <h2>Faça alguma pesquisa</h2>
              </div>  
            <?php }else{ 
                    foreach($resultado as $r): ?>
                      <div class="bg-light row"> <?php echo $r->nome; ?> </div><br/>
                    <?php endforeach; ?>

                    <?php } ?>

          <?php } ?>
          </div>
        </div>
      </div>
    </div>