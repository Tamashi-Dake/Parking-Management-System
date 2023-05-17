<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ADEPRO - Quản lý Tài Khoản</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../../plugins/fontawesome-free/css/all.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

    <!-- Navbar + Main Sidebar Container -->
    <?php
      include "../../adminTools.html";
      include "../../../connection.php";
    ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Quản lý tài khoản</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Quản lý tài khoản</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách tài khoản</h3>
             
            </div>
            <div class="card-body p-0">
              <table class="table table-striped projects">
                <thead>
                  <tr>
                    <th style="width: 1%">#</th>
                    <th style="width: 10%">Tên khu</th>
                    <th style="width: 10%">Mật khẩu</th>
                    <th style="width: 10%" class="text-center">Họ Tên</th>
                    <th style="width: 10%" class="text-center">Chức vụ</th>
                    <th style="width: 10%" class="text-center">CCCD</th>
                    <th style="width: 10%" class="text-center">Ngày sinh</th>
                    <th style="width: 10%" class="text-center">Giới tính</th>
                    <th style="width: 20%" class="text-center">
                    <?php
                    include "Account-add.php";
                    ?>
                  </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                // Create connection
			// $connection = new mysqli($servername, $username, $password, $database);
            // read all row from database table
			$sql = "SELECT * FROM webbaiguixe.account";
			$result = $conn->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td></td>
                    <td>" . $row["userName"] . "</td>
                    <td>" . $row["password"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["position"] . "</td>
                    <td>" . $row["identityCard"] . "</td>
                    <td>" . $row["birth"] . "</td>
                    <td>" . $row["sex"] . "</td>
                    <td class='project-actions text-center'>";
                    include "Account-edit.php";
                    echo"
                      <a class='btn btn-danger btn-sm' href='#'>
                        <i class='fas fa-trash'> </i>
                        Xóa
                      </a>
                    </td>
                </tr>";
            }

            $conn->close();
            ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong
          >Copyright
          <script>
            document.write(new Date().getFullYear());
          </script>
          .</strong
        >
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.2.0
        </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE theme -->
    <script src="../../dist/js/adminlte.min.js"></script>
  </body>
</html>