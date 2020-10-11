<?php
require_once("header.php");
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Preloader -->
	<div id="iot-preloader">
		<div class="center-preloader d-flex align-items-center">
			<div class="spinners">
				<div class="spinner01"></div>
				<div class="spinner02"></div>
			</div>
		</div>
	</div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input name="txtpesquisar" class="form-control form-control-navbar" type="search" placeholder="Pesquisar..." aria-label="Search">
        <div class="input-group-append">
          <button name="buttonPesquisar" class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Add Produtos -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" title="Add Produtos" data-toggle="modal"
        data-target=".bd-example-modal-lg-produto">
          <i class="fas fa-cart-plus"></i>
        </a>
      </li>
      <!-- Add Funcionário -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" title="Add cliente" data-toggle="modal"
        data-target=".bd-example-modal-lg">
          <i class="fas fa-user-plus"></i>
        </a>
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!-- Logout -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="../logout.php" title="Sair">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../assets/dist/img/crm.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Fincorp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/images/avatars/<?=$_SESSION['foto_user'];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nome_user']; ?></a>
          <span class="access_level"><?php echo $_SESSION['access_level']; ?></span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent nav-flat nav-legacy flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Produtos-OS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="categorias.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Categoria de produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="produtos.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fornecedores.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Fornecedores</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Orçamentos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="orcamentos.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Orçamentos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rel_orcamentos.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Relatório Orçamentos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="orcancelados.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Orçamento Cancelado</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-signature"></i>
              <p>
                Ordem de serviço
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="orderservices.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Ordem de serviço</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="osfinalizadas.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>OS - Finalizadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="oscanceladas.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>OS - Canceladas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Cadastro-OS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="clientes.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="funcionarios.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Funcionários</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">CONTROLE DE CAIXA</li>
          <li class="nav-item">
            <a href="caixa.php" class="nav-link active">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>Caixa</p>
            </a>
          </li>
          <li class="nav-header">FINANCEIRO</li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Controle de venda</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Controle de produtos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Anotações</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>Relatório</p>
            </a>
          </li>
          <li class="nav-header">SUPORTE</li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>Central de Suporte</p>
            </a>
          </li>
          <li class="nav-header">CONFIGURAÇÕES & SAIR</li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Configurações</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Sair</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <i class="material-icons" disabled>&#xE24D;</i> <span>CAIXA DE VENDAS</span>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">caixa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Caixa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
              <form id="frmVendasProdutos">
			<label>Selecionar Cliente</label>
			<select name="txtcliente" class="form-control select2" style="width: 100%;">
                    <option selected="selected" disabled>Selecione o nome do cliente...</option>
                    <?php
            $query = "SELECT * FROM tb_clientes where id_user = $_SESSION[id_user] ORDER BY nome asc";
            $result = mysqli_query($conn, $query);
            if(count($result)){
              while($res_1 = mysqli_fetch_array($result)){
                   ?>                                       
            <option value="<?php echo $res_1['id_cliente']; ?>"><?php echo $res_1['nome']; ?></option> 
                         <?php      
                       }
                   }
                  ?>
                  </select>
			<label>Produto</label>
			<select name="txtcliente" id="tags" class="form-control select2" style="width: 100%;">
                    <option selected="selected" disabled>Selecione o produto...</option>
                    <?php
            $query = "SELECT * FROM tb_produtos where id_user = $_SESSION[id_user] and id_produto = id_produto ORDER BY produto asc";
            $result = mysqli_query($conn, $query);
            if(count($result)){
              while($res_1 = mysqli_fetch_array($result)){
                   ?>                                       
            <option value="<?php echo $res_1['id_produto']; ?>"><?php echo $res_1['produto']; ?></option> 
                         <?php      
                       }
                   }
                  ?>
                  </select>
			<label>Descrição</label>
			<textarea readonly="" disabled id="descricaoV" name="descricaoV" class="form-control input-sm"></textarea>
			<label>Quantidade Estoque</label>
			<input readonly="" disabled  type="text" class="form-control input-sm" id="quantidadeV" name="quantidadeV">
			<label>Preço</label>
			<input readonly="" disabled type="text" class="form-control input-sm" id="precoV" name="precoV">
			<label>Quantidade Vendida</label>
			<input type="number" class="form-control input-sm" id="quantV" name="quantV">
			<p></p>
			<span class="btn btn-primary" id="btnAddVenda">Adicionar</span>
			<span class="btn btn-danger" id="btnLimparVendas">Limpar Venda</span>
    </form>

              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
              <h4>Criar Venda</h4>
 <h4><strong><div id="nomeclienteVenda"></div></strong></h4>
 <table class="table table-bordered table-hover table-condensed" style="text-align: center;">
 	<tr>
 		<td>Nome</td>
 		<td>Descrição</td>
 		<td>Preço</td>
 		<td>Quantidade</td>
 		<td>Remover</td>
 	</tr>
 	<?php 
 	$total=0;//total da venda em dinheiro
 	$cliente=""; //nome cliente
 		if(isset($_SESSION['tabelaComprasTemp'])):
 			$i=0;
 			foreach (@$_SESSION['tabelaComprasTemp'] as $key) {

 				$d=explode("||", @$key);
 	 ?>

 	<tr>
 		<td><?php echo $d[1] ?></td>
 		<td><?php echo $d[2] ?></td>
 		<td><?php echo "R$ ".$d[3].",00" ?></td>
 		<td><?php echo $d[6]; ?></td>
 		<td>

 			

 			<span class="btn btn-danger btn-xs" onclick="fecharP('<?php echo $i; ?>'), editarP('<?php echo $d[0]; ?>, <?php echo $d[5]; ?>')">
 				<span class="glyphicon glyphicon-remove"></span>
 			</span>
 		</td>
 	</tr>

 <?php 
 		$calc = $d[3] * $d[6];
 		$total=$total + $calc;
 		$i++;
 		$cliente=$d[4];
 	}
 	endif; 
 ?>


 </table>


 <script type="text/javascript">
 	$(document).ready(function(){
 		nome="<?php echo @$cliente ?>";
 		$('#nomeclienteVenda').text("Nome de cliente: " + nome);
 	});
 </script>
              </div>
              <!-- /.card-body -->
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                <caption>
 		            <span class="btn btn-success" onclick="criarVenda()"> Criar Venda
 			          <span class="glyphicon glyphicon-usd"></span>
 		            </span>
 	              </caption>
                <tr>
 		            <td>Total da venda: <?php echo "R$ ".$total.",00"; ?></td>
 	              </tr>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Histórico de venda</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Cliente</th>
                      <th>Produto</th>
                      <th>Valor</th>
                      <th>Registro</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>Roteador</td>
                      <td>R$83,00</td>
                      <td><span class="tag tag-success">11-7-2014</span></td>
                      <td>Venda realizada com sucesso.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>Pendriver</td>
                      <td>R$34,00</td>
                      <td><span class="tag tag-warning">11-7-2014</span></td>
                      <td>Venda realizada com sucesso.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>Capa celular</td>
                      <td>R$20,00</td>
                      <td><span class="tag tag-primary">11-7-2014</span></td>
                      <td>Venda realizada com sucesso.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>Película</td>
                      <td>R$10,00</td>
                      <td><span class="tag tag-danger">11-7-2014</span></td>
                      <td>Venda realizada com sucesso.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
require_once("footer.php");
?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../assets/plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- SweetAlert2 -->
<script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../assets/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Preloader -->
<script src="../assets/js/preloadtime.js"></script>
<script src="../assets/js/iot-timer.min.js"></script>
<script src="../assets/js/svg4everybody.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
<!-- MASK -->
<script type="text/javascript" src="../assets/js/jquery.mask.min.js"></script>
  <!--MASCARAS -->
<script type="text/javascript">
    $(document).ready(function(){
      $('#telefone-cliente').mask('(00) 00000-0000');
      $('#cpf-cliente').mask('000.000.000-00');
      $('#cep-cliente').mask('00000-000');
      });
</script> 
</body>
</html>
<!--EXCLUIR -->
<?php
if(@$_GET['func'] == 'deleta'){
  $id_produto = $_GET['id_produto'];
  $query = "DELETE FROM tb_produtos where id_produto = '$id_produto'";
  mysqli_query($conn, $query);
  echo "<script language='javascript'> window.location='produtos.php'; </script>";
}
?>
  <!--MASCARAS -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#cadastar-telefone').mask('(00) 00000-0000');
      $('#cadastar-cpf').mask('000.000.000-00');
      $('#cadastar-cep').mask('00000-000');
      });
</script>