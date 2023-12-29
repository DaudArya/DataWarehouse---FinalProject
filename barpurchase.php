<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Total Purchase Order Berdasarkan Tahun</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body py-5">
            <div class="chart-area">
                <canvas id="myAreaChart2"></canvas>
            </div>
        </div>
    </div>
</div>
<?php
include 'koneksi.php';
// Pemanggilan Data untuk Line Chart
$i = 1;
$query_year = mysqli_query($conn, "SELECT t.TimeID, t.Year time FROM factproductvendor f JOIN time t ON f.TimeID = t.TimeID where t.Year >= 1998 GROUP BY t.Year ;");
// output query January 2004, February 2024,... 
$jumlah_year = mysqli_num_rows($query_year);
$chart_year = "";
while ($row = mysqli_fetch_array($query_year)) {
    if ($i < $jumlah_year) {
        $chart_year .= '"';
        $chart_year .= $row['time'];
        $chart_year .= '",';
        $i++;
    } else {
        $chart_year .= '"';
        $chart_year .= $row['time'];
        $chart_year .= '"';
    }
}
$a = 1;
$query_order = mysqli_query($conn, "SELECT SUM(f.OrderQty) as total_order FROM factproductvendor f JOIN time t ON f.TimeID=t.TimeID WHERE t.Year >= 1998 GROUP BY t.Year ;");
$jumlah_order = mysqli_num_rows($query_order);
$chart_order = "";
while ($row1 = mysqli_fetch_array($query_order)) {
    if ($a < $jumlah_order) {
        $chart_order .= $row1['total_order'];
        $chart_order .= ',';
        $a++;
    } else {
        $chart_order .= $row1['total_order'];
    }
}
?>