<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Unit Product</title>
    <meta content="UPT - Yuk transaksi di Unit Product RPL" property="og:description"/>
    <meta content="https://thumbs.dreamstime.com/b/handshake-business-people-partners-hand-shaking-meeting-agreement-symbol-successful-transaction-flat-design-vector-85843722.jpg" property="og:image"/>
    <link href="upe.png" rel="shortcut icon">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="index.html"><i class="fa fa-fw fa-handshake"></i> UPT</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="dashboard.php">
              <i class="fa fa-fw fa-eye"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="add_transaction.php">
              <i class="fa fa-fw fa-plus"></i>
              <span class="nav-link-text">Add Transaction</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="php/logout.php">
              <i class="fa fa-fw fa-sign-out-alt"></i>Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper py-5">
      <div class="container-fluid py-3">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-handshake"></i> Unit Product Transaction</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <?php
                    include 'php/config.php';

                    $sql = mysqli_query($con, "SELECT * FROM transaction");

                  ?>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Transaction Type</th>
                    <th>Colour</th>
                    <th>Black White</th>
                    <th>Date</th>
                    <th>Income</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Transaction Type</th>
                    <th>Colour</th>
                    <th>Black White</th>
                    <th>Date</th>
                    <th>Income</th>
                    <th></th>
                  </tr>
                </tfoot>
                <tbody>
                  <form class="" action="php/delete.php" >

                <?php
                    $total = 0;
                    foreach($sql as $key => $x){
                    $alltotal = $total += $x['total'];
                ?>
                  <tr>
                    <td><?php echo $x['id']; ?></td>
                    <td><?php echo $x['transaction_type']; ?></td>
                    <td><?php echo $x['colour']; ?></td>
                    <td><?php echo $x['blackwhite']; ?></td>
                    <td><?php echo date('Y/m/d  h.i', strtotime($x['date'])); ?></td>
                    <td><?php echo "Rp ".$x['total'].",-"; ?></td>
                    <td>
                      <a href="php/delete.php?id=<?php echo $x['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                <?php
                      $alltotal + $total;
                    }
                ?>
                  </form>
                </tbody>
              </table>
            </div>
          </div>
          <?php
            if($total == 0) {
          ?>
          <div class="card-footer small text-muted">Total : <?php echo "Rp 0,-"; ?></div>
          <?php
            }else {
          ?>
          <div class="card-footer small text-muted">Total : <?php echo "Rp ".$alltotal.",-"; ?></div>
          <?php
            }
          ?>
        </div>
      </div>
    </div>

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Unit Product 2018</small>
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
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin.min.js"></script>
  <script src="js/sb-admin-datatables.min.js"></script>
  <script src="js/sb-admin-charts.min.js"></script>

</html>
