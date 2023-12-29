<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header-->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Sales Berdasarkan Country(Seluruh Tahun)</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body py-4">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="myPieChart"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <?php
                $produk = mysqli_query($conn, "SELECT DISTINCT(TerritoryID), Sum(OrderQty) AS jumlah FROM factsales WHERE TimeID>2071 && TimeID < 2290 GROUP BY TerritoryID ORDER BY jumlah DESC");
                while ($data = mysqli_fetch_array($produk)) {
                    $sql = mysqli_query($conn, "SELECT d.country AS country , Sum(fs.OrderQty) AS jumlah FROM factsales fs JOIN dimaddress d ON fs.TerritoryID=d.TerritoryID WHERE fs.TerritoryID='" . $data['TerritoryID'] . "'");
                    $data = $sql->fetch_array();
                    $country[] = $data['country'];
                }
                ?>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d94f00;"></i> <?php echo $country[0]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d9c300;"></i> <?php echo $country[1]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #94d900;"></i> <?php echo $country[2]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #00d953;"></i> <?php echo $country[3]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #00d9c7;"></i> <?php echo $country[4]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #0028d9;"></i> <?php echo $country[5]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #8900d9;"></i> <?php echo $country[6]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d90033;"></i> <?php echo $country[7]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #969696;"></i> <?php echo $country[8]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #ff26ac;"></i> <?php echo $country[9]; ?>
                </span>
            </div>
        </div>
    </div>
</div>
<?php
include 'koneksi.php';
// Pemanggilan Data untuk Donut Chart
$produk = mysqli_query($conn, "SELECT DISTINCT(TerritoryID), Sum(OrderQty) AS jumlah FROM factsales WHERE TimeID>2071 && TimeID < 2290 GROUP BY TerritoryID ORDER BY jumlah DESC");
while ($data = mysqli_fetch_array($produk)) {
    $sql = mysqli_query($conn, "SELECT d.country AS country , Sum(fs.OrderQty) AS jumlah FROM factsales fs JOIN dimaddress d ON fs.TerritoryID=d.TerritoryID WHERE fs.TerritoryID='" . $data['TerritoryID'] . "'");
    $data = $sql->fetch_array();
    $country[] = $data['country'];
    $jumlah[] = $data['jumlah'];
}

?>