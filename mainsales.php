<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sales</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Jumlah Produk Terjual</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require 'koneksi.php';
                                $query = "SELECT SUM(OrderQty) AS totalOrderQty FROM `factsales`";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $totalOrderQty = number_format($row['totalOrderQty']);
                                    echo  $totalOrderQty;
                                } else {
                                    echo "Tidak ada data yang ditemukan.";
                                }
                                ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-solid fa-box fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Sales -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Sales </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require 'koneksi.php';
                                $query = "SELECT COUNT(SalesID) AS totalOrder FROM `factsales`";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $totalOrder = number_format($row['totalOrder']);
                                    echo  $totalOrder;
                                } else {
                                    echo "Tidak ada data yang ditemukan.";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-solid fa-tag fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Customer-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Customer</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require 'koneksi.php';
                                $query = "SELECT COUNT(DISTINCT customerID) AS totalCustomer FROM factsales";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $totalCust = number_format($row['totalCustomer']);
                                    echo  $totalCust;
                                } else {
                                    echo "Tidak ada data yang ditemukan.";
                                }
                                ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-solid fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Pendapatan-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Pendapatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require 'koneksi.php';
                                $query = "SELECT SUM(LIneTotal) AS total FROM factsales";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $totalP = number_format($row['total']);
                                    echo '' . $totalP;
                                } else {
                                    echo "Tidak ada data yang ditemukan.";
                                }
                                ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <?php include 'linesales.php' ?>
        <!-- Pie Chart -->
        <?php include 'piesales.php' ?>
    </div>
    <!-- /.container-fluid -->

</div>