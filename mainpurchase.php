<div id="content" class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Purchase</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Purchase</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require 'koneksi.php';
                                $query = "SELECT SUM(lineTotal) AS totalPurchase FROM `factproductvendor`";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $totalPurchase = number_format($row['totalPurchase']);
                                    echo  $totalPurchase;
                                } else {
                                    echo "Tidak ada data yang ditemukan.";
                                }
                                ?>
                            </div>
                    </div>
                        <div class="col-auto">
                            <i class="fas fa-solid fa-file-invoice-dollar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Vendor</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    require 'koneksi.php';
                                    $query = "SELECT COUNT(DISTINCT VendorID) AS totalVendor FROM `factproductvendor`";
                                    $result = mysqli_query($conn, $query);
                                    if ($result) {
                                        $row = mysqli_fetch_assoc($result);
                                        $totalVendor = $row['totalVendor'];
                                        echo  $totalVendor;
                                    } else {
                                        echo "Tidak ada data yang ditemukan.";
                                    }
                                    ?>
                                </div>
                        </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-store fa-2x text-gray-300"></i>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Average Purchase</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    require 'koneksi.php';
                                    $query = "SELECT AVG(linetotal) AS average_expenses FROM factproductvendor;";
                                    $result = mysqli_query($conn, $query);
                                    if ($result) {
                                        $row = mysqli_fetch_assoc($result);
                                        $average_expenses = number_format($row['average_expenses']);
                                        echo  $average_expenses;
                                    } else {
                                        echo "Tidak ada data yang ditemukan.";
                                    }
                                    ?>
                                </div>
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
        <?php include 'linepurchase.php' ?>
        <!-- Pie Chart -->
        <?php include 'piepurchase1.php' ?>
        
    </div>
    <div class="row">
        <!-- Area Chart -->
        <?php include 'barpurchase.php' ?>
        <!-- Pie Chart -->
        <?php include 'piepurchase2.php' ?>
        
    </div>
    <!-- /.container-fluid -->

</div>