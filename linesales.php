<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Jumlah Customer (Last Years)</h6>
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
$query_bulan = mysqli_query($conn, "SELECT CONCAT(MONTHNAME(t.fullDate), ' ', YEAR(t.fullDate)) month FROM factsales f JOIN dimtime t ON f.TimeID=t.timeID WHERE t.timeID>2071 && t.timeID < 2290  GROUP BY t.month ORDER BY t.fullDate");
// output query January 2004, February 2024,... 
$jumlah_bulan = mysqli_num_rows($query_bulan);
$chart_bulan = "";
while ($row = mysqli_fetch_array($query_bulan)) {
    if ($i < $jumlah_bulan) {
        $chart_bulan .= '"';
        $chart_bulan .= $row['month'];
        $chart_bulan .= '",';
        $i++;
    } else {
        $chart_bulan .= '"';
        $chart_bulan .= $row['month'];
        $chart_bulan .= '"';
    }
}
$a = 1;
$query_customer = mysqli_query($conn, "SELECT COUNT(f.customerid)  as customer FROM factsales f JOIN dimtime t ON f.TimeID=t.timeID WHERE t.timeID>2071 && t.timeID < 2290 GROUP BY t.month ORDER BY t.fullDate;");
$jumlah_customer = mysqli_num_rows($query_customer);
$chart_customer = "";
while ($row1 = mysqli_fetch_array($query_customer)) {
    if ($a < $jumlah_customer) {
        $chart_customer .= $row1['customer'];
        $chart_customer .= ',';
        $a++;
    } else {
        $chart_customer .= $row1['customer'];
    }
}
?>