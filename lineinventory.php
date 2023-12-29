<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->

        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

            <h6 class="m-0 font-weight-bold text-primary">Jumlah Total Inventory Produk Berdasarkan Lokasi</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body py-5">
            <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
            </div>
        </div>
    </div>
</div>

<?php
include 'koneksi.php';

// Pemanggilan Data untuk Line Chart
$i = 1;
$query_lokasi = mysqli_query($conn, "SELECT DISTINCT l.LocationID, l.name location FROM factproductinventory f JOIN location l ON f.LocationID = l.LocationID ORDER BY l.LocationID ASC;");
$jumlah_lokasi = mysqli_num_rows($query_lokasi);
$chart_lokasi = "";
while ($row = mysqli_fetch_array($query_lokasi)) {
    if ($i < $jumlah_lokasi) {
        $chart_lokasi .= '"' . $row['location'] . '",';
        $i++;
    } else {
        $chart_lokasi .= '"' . $row['location'] . '"';
    }
}

$a = 1;
$query_produk = mysqli_query($conn, "SELECT productid, SUM(Quantity) FROM factproductinventory GROUP BY productid;");
$jumlah_produk = mysqli_num_rows($query_produk);
$chart_produk = "";
while ($row1 = mysqli_fetch_array($query_produk)) {
    if ($a < $jumlah_produk) {
        $chart_produk .= $row1['SUM(Quantity)'] . ",";
        $a++;
    } else {
        $chart_produk .= $row1['SUM(Quantity)'];
    }
}
?>