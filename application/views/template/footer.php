<footer class="sticky-footer bg-secondary text-white">
      <div class="container">
        <div class="text-center">
          <small>"Sua luta não termina quando sentir cansaço, mas sim quando atingir o sucesso tão merecido."</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para terminar sua sessão atual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-info" href="<?=base_url('Usuario/Logout');?>">Sair</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?= base_url();?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url();?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url();?>assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?= base_url();?>assets/js/sb-admin-datatables.min.js"></script>
    <script src="<?= base_url();?>assets/js/sb-admin-charts.min.js"></script>


    <script type="text/javascript">

      function pesquisar(){
        var pesquisa = $("#input_pesquisar").val();
        pesquisa = pesquisa.trim();
        if(pesquisa!=''){
          $("#formPesquisa").attr("action","<?= base_url() ?>conteudos/pesquisa");
        }
      }

      function alterarApostila(x){
        var src = "<?php echo base_url('uploads/'); ?>";
        src += x.value;
        $('#apostilaAtual').attr("src",src);
        var altura = $(window).height();
        altura -= 25 * altura/100
        $('#apostilaAtual').css("height",altura);
      }
      function alterarVideoAula(x){
        src = x.value;
        $('#videoAulaAtual').attr("src",src);
        $('#apostilaAtual').css("height",altura);
      }
      function alterarArquivo(x){
        var src = "<?php echo base_url('uploads/'); ?>";
        src += x.value;
        $('#arquivoAtual').attr("src",src);
        var altura = $(window).height();
        altura -= 25 * altura/100
        $('#arquivoAtual').css("height",altura);
      }

      function mudarFormMateriais(x){
        $("#divFormMateriais .zerar").val(null);
        var div = $(x).val();
        arquivo = ['1','2'];
        semArquivo = ['3'];
        if(div!="none"){
          $("#divFormMateriais").css("display","block");
          $("#divFormMateriais_cAr").css("display","none");
          $("#divFormMateriais_nCaR").css("display","none");
          if( arquivo.indexOf(div)>-1 ){
            $("#divFormMateriais_cAr").css("display","block");
          }else{
            $("#divFormMateriais_nCaR").css("display","block");
          }
          $("#tipoMaterial").val(div);
        }else{
          $("#divFormMateriais").css("display","none")
        }
      }

      $(document).ready(function(){

        $("#labelIcones").click(function(){
          $("#listaIcones").slideToggle();
        });

        $(".icone").click(function(){
          $("#icone").val($(this).attr('id'));
          $("#iconeAtual").attr("src", $("#img_"+$(this).attr('id')).attr('src'));
        });

        
      });

      

    </script>

  </div>
</body>

</html>
