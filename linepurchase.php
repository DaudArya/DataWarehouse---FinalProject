<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Total Purchase</h6>
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
$query_price = mysqli_query($conn, "SELECT SUM(f.LineTotal) as total_price FROM factproductvendor f JOIN time t ON f.TimeID=t.TimeID WHERE t.Year >= 1998 GROUP BY t.Year ;");
$jumlah_price = mysqli_num_rows($query_price);
$chart_price = "";
while ($row1 = mysqli_fetch_array($query_price)) {
    if ($a < $jumlah_price) {
        $chart_price .= $row1['total_price'];
        $chart_price .= ',';
        $a++;
    } else {
        $chart_price .= $row1['total_price'];
    }
}
?>