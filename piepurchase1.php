<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header-->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Top 5 Total Purchase Berdasarkan Vendor </h6>
        </div>
        <!-- Card Body -->
        <div class="card-body py-4">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="myPieChart"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <?php
                $purchase = mysqli_query($conn, "SELECT DISTINCT(VendorID), ROUND(Sum(LineTotal)) AS price FROM factproductvendor GROUP BY VendorID ORDER BY price DESC LIMIT 5");
                while ($data = mysqli_fetch_array($purchase)) {
                    $sql = mysqli_query($conn, "SELECT d.Name AS vendor , ROUND(Sum(fp.LineTotal)) AS price FROM factproductvendor fp JOIN vendor d ON fp.VendorID=d.VendorID WHERE fp.VendorID='" . $data['VendorID'] . "'");
                    $data = $sql->fetch_array();
                    $vendor[] = $data['vendor'];
                }
                ?>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d94f00;"></i> <?php echo $vendor[0]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #d9c300;"></i> <?php echo $vendor[1]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #94d900;"></i> <?php echo $vendor[2]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #00d953;"></i> <?php echo $vendor[3]; ?>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color: #00d9c7;"></i> <?php echo $vendor[4]; ?>
                </span>
            </div>
        </div>
    </div>
</div>
<?php
include 'koneksi.php';
// Pemanggilan Data untuk Donut Chart
$purchase = mysqli_query($conn, "SELECT DISTINCT(VendorID), ROUND(Sum(LineTotal)) AS price FROM factproductvendor GROUP BY VendorID ORDER BY price DESC LIMIT 5");
while ($data = mysqli_fetch_array($purchase)) {
    $sql = mysqli_query($conn, "SELECT d.Name AS vendor , ROUND(Sum(fp.LineTotal)) AS price FROM factproductvendor fp JOIN vendor d ON fp.VendorID=d.VendorID WHERE fp.VendorID='" . $data['VendorID'] . "'");
    $data = $sql->fetch_array();
    $vendor[] = $data['vendor'];
    $price[] = $data['price'];
}

?>