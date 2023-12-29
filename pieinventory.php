<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header-->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Top 5 Jumlah Produk Pada Setiap Lokasi</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body py-4">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="myPieChart"></canvas>
            </div>
            <div class="mt-4 text-center small">

                <?php

                $lokasi = mysqli_query($conn, "SELECT DISTINCT LocationID, ROUND(SUM(Quantity)) AS qty FROM factproductinventory GROUP BY LocationID  ORDER BY qty DESC LIMIT 5;");
                while ($data = mysqli_fetch_array($lokasi)) {
                    $sql = mysqli_query($conn, "SELECT l.name AS loc, ROUND(Sum(f.Quantity)) AS qty FROM factproductinventory f JOIN location l ON f.LocationID = l.LocationID where l.LocationID='" . $data['LocationID'] . "'");
                    $data = $sql->fetch_array();
                    $loc[] = $data['loc'];
                }
                ?>

                <span class="mr-2">

                    <i class="fas fa-circle" style="color: #d94f00;"></i> <?php echo $loc[0]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d9c300;"></i> <?php echo $loc[1]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #94d900;"></i> <?php echo $loc[2]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #00d953;"></i> <?php echo $loc[3]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #00d9c7;"></i> <?php echo $loc[4]; ?>

                </span>

            </div>
        </div>
    </div>
</div>
<?php
include 'koneksi.php';
// Pemanggilan Data untuk Donut Chart

$lokasi = mysqli_query($conn, "SELECT DISTINCT LocationID, ROUND(SUM(Quantity)) AS qty FROM factproductinventory GROUP BY LocationID  ORDER BY qty DESC LIMIT 5;");
while ($data = mysqli_fetch_array($lokasi)) {
    $sql = mysqli_query($conn, "SELECT l.name AS loc, ROUND(Sum(f.Quantity)) AS qty FROM factproductinventory f JOIN location l ON f.LocationID = l.LocationID where l.LocationID='" . $data['LocationID'] . "'");
    $data = $sql->fetch_array();
    $loc[] = $data['loc'];
    $qty[] = $data['qty'];
}

?>