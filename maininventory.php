<div id="content" class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Inventory</h1>
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
                                Total Jumlah Inventaris Produk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require 'koneksi.php';
                                $query = "SELECT SUM(Quantity) AS totalInventoryQty FROM factproductinventory";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $totalInventoryQty = number_format($row['totalInventoryQty']);
                                    echo  $totalInventoryQty;
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

        <!-- Total Inventory -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Kategori Produk </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require 'koneksi.php';
                                $query = "SELECT COUNT(DISTINCT ProductID) AS totalProduct FROM factproductinventory";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $totalProduct = $row['totalProduct'];
                                    echo  $totalProduct;
                                } else {
                                    echo "Tidak ada data yang ditemukan.";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-solid fa-box fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Customer-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                Total Lokasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require 'koneksi.php';
                                $query = "SELECT COUNT(DISTINCT LocationID) AS totalLokasi FROM factproductinventory";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $totalLokasi = $row['totalLokasi'];
                                    echo  $totalLokasi;
                                } else {
                                    echo "Tidak ada data yang ditemukan.";
                                }
                                ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-solid fa-compass fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <?php include 'lineinventory.php' ?>
        <!-- Pie Chart -->
        <?php include 'pieinventory.php' ?>
        
    </div>
    <!-- /.container-fluid -->

</div>