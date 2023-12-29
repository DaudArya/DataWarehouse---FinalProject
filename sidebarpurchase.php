<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-solid fa-bicycle"></i>
        </div>
        <div class="sidebar-brand-text mx-1">Adventureworks</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-solid fa-house-user"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">

        Chart
    </div>

    <!-- chart dwo-->
    <li class="nav-item">
        <a class="nav-link" href="inventory.php">
            <i class="fas fa-solid fa-box"></i>
            <span>Inventory</span></a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link" href="sales.php">
            <i class="fas fa-solid fa-chart-pie"></i>
            <span>Sales</span></a>
    </li> -->

    </li>
    <li class="nav-item active">

        <a class="nav-link" href="purchase.php">
            <i class="fas fa-solid fa-comment-dollar"></i>
            <span>Purchase</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Table
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <span>Information Table</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="factinventory.php">Fact Inventory</a>
                <!-- <a class="collapse-item" href="factsales.php">Fact Sales</a> -->
                <a class="collapse-item" href="factpurchase.php">Fact Purchase</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>