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
            <a href="#" class="nav-link active">
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
                <a href="funcionarios.php" class="nav-link active">
                  <i class="nav-icon"></i>
                  <p>Funcionários</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">CONTROLE DE CAIXA</li>
          <li class="nav-item">
            <a href="caixa.php" class="nav-link">
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
          <a href="#" class="btn btn-success" data-toggle="modal"
          data-target=".bd-example-modal-funcionario"><i class="material-icons">&#xE147;</i> <span>Add Novo Funcionário</span></a>
          <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Exporta dados para o Excel</span></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Funcionários</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cadastros de funcionários da empresa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <!--LISTAR TODOS OS CLIENTES -->

      <?php


      if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar'] != ''){
          $nome = $_GET['txtpesquisar'] . '%';
          $query = "select * from usuarios where id_funcionario = $_SESSION[id_user] order by nome asc"; 
      }else if(isset($_GET['buttonPesquisarCPF']) and $_GET['txtpesquisarcpf'] != ''){
          $nome = $_GET['txtpesquisarcpf'];
          $query = "select * from usuarios where cpf = '$nome'  order by nome asc"; 
      }

      else{ 
      $query = "select * from usuarios where id_funcionario = $_SESSION[id_user];"; 
      }

          $result = mysqli_query($conn, $query);
          //$dado = mysqli_fetch_array($result);
          $row = mysqli_num_rows($result);

      if($row == ''){

          echo "<h3> Não existem dados cadastrados no banco </h3>";

      }else{

      ?>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Username</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Empresa</th>
                    <th>Cidade</th>
                    <th>Cep</th>
                    <th>NÍvel de acesso</th>
                    <th>Data</th>
                    <th>Ação</th>
                  </tr>
                  </thead>
                  <tbody>

      <?php 

      while($res_1 = mysqli_fetch_array($result)){
          $id_user = $res_1["id_user"];
          $foto = $res_1["foto"];
          $nome = $res_1["nome"];
          $username = $res_1["username"];
          $password = $res_1["password"];
          $cpf = $res_1["cpf"];
          $email = $res_1["email"];
          $telefone = $res_1["telefone"];
          $endereco = $res_1["endereco"];
          $empresa = $res_1["empresa"];
          $cidade = $res_1["cidade"];
          $cep = $res_1["cep"];
          $access_level = $res_1["access_level"];
          $dt_registro = $res_1["dt_registro"];

          $dt_registro = implode('/', array_reverse(explode('-', $dt_registro)));

      ?>

                  <tr>
                    <td><?php echo $id_user; ?></td>
                    <td><?php echo "<img src='../assets/images/avatars/".$foto."' class='avatar' alt='Foto'"; ?></td>
                    <td><?php echo $nome; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo $cpf; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $telefone; ?></td>
                    <td><?php echo $endereco; ?></td>
                    <td><?php echo $empresa; ?></td>
                    <td><?php echo $cidade; ?></td>
                    <td><?php echo $cep; ?></td>
                    <td><?php echo $access_level; ?></td>
                    <td><?php echo $dt_registro; ?></td>
                    <td><div class="widget-content-right">
                    <a href="funcionarios.php?func=edita&id_user=<?php echo $id_user; ?>"><button class="border-0 btn-transition btn btn-outline-success" data-toggle="modal"
                    data-target=".bd-example-modal-lg-editar"><i class="fa fa-edit"></i>
                    </button></a>
                    <a href="funcionarios.php?func=deleta&id_user=<?php echo $id_user; ?>"><button class="border-0 btn-transition btn btn-outline-danger">
                    <i class="fa fa-trash-alt"></i>
                    </button></a>
                    </div></td>
                  </tr>
                  <?php 
                    }                        
                  ?>
                  </tbody>
                </table>
                <?php 
                }                        
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
</script>
<!--MASCARAS -->
<script type="text/javascript">
    $(document).ready(function(){
      $('#telefone-cliente').mask('(00) 00000-0000');
      $('#cpf-cliente').mask('000.000.000-00');
      $('#cep-cliente').mask('00000-000');
      });
</script> 
<!-- modal Cadastrar novo Funcionário-->
<div class="modal fade bd-example-modal-funcionario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Novo Funcionário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" enctype="multipart/form-data" action="" class="">
    <div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-cliente" class="">Nome do usuário</label>
            <input name="txtnome" id="txtnome" placeholder="Nome completo do cliente" type="text" spellcheck="false" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="cpf_cliente" class="">CPF</label>
            <input name="txtcpf" id="txtcpf" placeholder="Digite o CPF do cliente..." type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="email_cliente" class="">E-mail</label>
            <input name="txtemail" id="txtemail" placeholder="E-mail para contato" type="email" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="telefone_cliente" class="">Telefone</label>
            <input name="txttelefone" id="txttelefone" placeholder="Número para contato" type="text" class="form-control" required>
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="txtendereco" class="">Endereço</label>
    <input name="txtendereco" id="txtendereco" placeholder="Rua Bairro Nº" type="text" spellcheck="false" class="form-control">
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="txtempresa" class="">Nome da Empresa:</label>
            <input name="txtempresa" placeholder="Digite o nome da empresa..." id="txtempresa" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="txtcidade" class="">Cidade/Estado</label>
            <input name="txtcidade" placeholder="Informe cidade & estado" id="txtcidade" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="exampleZip" class="">CEP</label>
            <input name="txtcep" id="txtcep" type="text" class="form-control">
        </div>
    </div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="txtusername" class="">Username</label>
            <input name="txtusername" id="txtusername" placeholder="Nome completo do cliente" spellcheck="false" type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="txtpassword" class="">Password</label>
            <input name="txtpassword" id="txtpassword" placeholder="Digite o CPF do cliente..." type="password" class="form-control" required>
        </div>
    </div>
<div class="position-relative form-group">
    <label for="fotoperfil" class="">Foto de perfil:</label>
    <input name="fotoperfil" id="fotoperfil" type="file" class="form-control" required>
</div>
<div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group" required>
                        <label>Nível de acesso:</label>
                        <select name="access_level" class="form-control" required>
                          <option value="Funcionário" selected>Funcionário</option>
                        </select>
                      </div>
                    </div>
            </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="cadastrar-funcionario">Cadastrar</button>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- MASK -->
<script type="text/javascript" src="../assets/js/jquery.mask.min.js"></script>
  <!--MASCARAS -->
<script type="text/javascript">
    $(document).ready(function(){
      $('#txttelefone').mask('(00) 00000-0000');
      $('#txtcpf').mask('000.000.000-00');
      $('#txtcep').mask('00000-000');
      });
</script> 
</body>
</html>

<!--EXCLUIR -->
<?php
if(@$_GET['func'] == 'deleta'){
  $id_user = $_GET['id_user'];
  $query = "DELETE FROM usuarios where id_user = '$id_user'";
  mysqli_query($conn, $query);
  $url= '../assets/images/avatars/'.$foto;
  unlink($url);
  echo "<script language='javascript'> window.location='funcionarios.php'; </script>";
}
?>

  <!--MASCARAS -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#editartelefone').mask('(00) 00000-0000');
      $('#editarcpf').mask('000.000.000-00');
      $('#editarcep').mask('00000-000');
      });
</script> 

<!--EDITAR -->
<?php
if(@$_GET['func'] == 'edita'){ 
  $id_user = $_GET['id_user'];
  $query = "select * from usuarios where id_user = '$id_user'";
  $result = mysqli_query($conn, $query);

  while($res_1 = mysqli_fetch_array($result)){

?>

  <!-- modal Editar usuário-->
  <div id="modalEditar" class="modal fade bd-example-modal-lg-editar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Funcionário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" enctype="multipart/form-data" action="" class="">
            <div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-cliente" class="">Nome do usuário</label>
            <input name="txtnome" id="editarnome" value="<?php echo $res_1['nome']; ?>" placeholder="Nome completo do cliente" type="text" spellcheck="false" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="cpf_cliente" class="">CPF</label>
            <input name="txtcpf" id="editarcpf" value="<?php echo $res_1['cpf']; ?>" placeholder="Digite o CPF do cliente..." type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="email_cliente" class="">E-mail</label>
            <input name="txtemail" id="editaremail" value="<?php echo $res_1['email']; ?>" placeholder="E-mail para contato" type="email" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="telefone_cliente" class="">Telefone</label>
            <input name="txttelefone" id="editartelefone" value="<?php echo $res_1['telefone']; ?>" placeholder="Número para contato" type="text" spellcheck="false" class="form-control" required>
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="txtendereco" class="">Endereço</label>
    <input name="txtendereco" id="editarendereco" value="<?php echo $res_1['endereco']; ?>" placeholder="Rua Bairro Nº" type="text" spellcheck="false" class="form-control">
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="txtempresa" class="">Nome da Empresa:</label>
            <input name="txtempresa" value="<?php echo $res_1['empresa']; ?>" placeholder="Nome da empresa..." id="editarempresa" spellcheck="false" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="txtcidade" class="">Cidade/Estado</label>
            <input name="txtcidade" value="<?php echo $res_1['cidade']; ?>" placeholder="Informe cidade & estado" id="editarcidade" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="exampleZip" class="">CEP</label>
            <input name="txtcep" value="<?php echo $res_1['cep']; ?>" id="editarcep" type="text" class="form-control">
        </div>
    </div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="txtusername" class="">Username</label>
            <input name="txtusername" value="<?php echo $res_1['username']; ?>" id="editarusername" placeholder="Nome completo do cliente" type="text" spellcheck="false" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="txtpassword" class="">Password</label>
            <input name="txtpassword" value="<?php echo $res_1['password']; ?>" id="editarpassword" placeholder="Digite o CPF do cliente..." type="password" class="form-control" required>
        </div>
    </div>
<div class="position-relative form-group">
    <label for="fotoperfil" class="">Foto de perfil:</label>
    <input name="fotoperfil" value="<?php echo $res_1['foto']; ?>" id="editarfotoperfil" type="file" class="form-control">
</div>
<div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group" required>
                        <label>Nível de acesso:</label>
                        <select name="access_level" class="form-control" required>
                          <option value="Funcionário" selected>Funcionário</option>
                        </select>
                      </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editar-usuario">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script> $("#modalEditar").modal("show"); </script> 

<!--Comando para editar os dados UPDATE -->
<?php
if(isset($_POST['editar-usuario'])){
  $foto = $_FILES["fotoperfil"];
  $nome = $_POST['txtnome'];
  $username = $_POST['txtusername'];
  $password = $_POST['txtpassword'];
  $cpf = $_POST['txtcpf'];
  $email = $_POST['txtemail'];
  $telefone = $_POST['txttelefone'];
  $endereco = $_POST['txtendereco'];
  $cidade = $_POST['txtcidade'];
  $cep = $_POST['txtcep'];
  $access_level = $_POST['access_level'];

  if ($res_1['cpf'] != $cpf){

    //VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
 $query_verificar= "SELECT * FROM usuarios WHERE cpf = '$cpf' ";

 $result_verificar = mysqli_query($conn, $query_verificar);
 $row_verificar = mysqli_num_rows($result_verificar);

 if($row_verificar > 0){
     //Mensagem CPF já Cadastrado!
     echo "<script language='javascript'> window.alert('CPF já Cadastrado!'); </script>";
     echo "<script language='javascript'> window.location='funcionarios.php'; </script>";
 exit();
 }

}

//Define a constante
define('ROOT_PATH', dirname(__FILE__) . '/');

if(isset($_FILES['fotoperfil'])){
  $extensao = strtolower(substr($_FILES['fotoperfil']['name'], -4));
  $url= '../assets/images/avatars/'.$res_1['foto'];
  unlink($url);
  $novo_nome = rand().$_FILES['fotoperfil']['name'];
  
  $diretorio = ROOT_PATH . "../assets/images/avatars/";

  if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
    echo "<script language='javascript'> window.alert('Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.gif;*.png''); </script>";

  if ( @move_uploaded_file($_FILES['fotoperfil']['tmp_name'], $diretorio.$novo_nome) ){
    echo "<script language='javascript'> window.alert('Arquivo salvo com sucesso em: . $diretorio .'); </script>";
  }
  else
    echo "<script language='javascript'> window.alert('Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.'); </script>";
    }
    else{
        echo "<script language='javascript'> window.alert('Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.gif;*.png''); </script>";
}

}

//CADASTRO DE CLIENTES
$query_editar = "UPDATE usuarios SET foto = '$novo_nome', nome = '$nome', cpf = '$cpf', endereco = '$endereco', cidade = '$cidade', cep = '$cep', telefone = '$telefone', email = '$email', email = '$email', username = '$username', password = '$password', access_level = '$access_level' WHERE id_user = '$id_user' ";

$result_editar = mysqli_query($conn, $query_editar);

if($result_editar == ''){
  //Mensagem Ocorreu um erro ao cadastrar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Editar!'); </script>";
  echo "<script language='javascript'> window.location='funcionarios.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'> window.alert('Editado com Sucesso!'); </script>";
  echo "<script language='javascript'> window.location='funcionarios.php'; </script>";
}
}
?>

<?php } } ?>