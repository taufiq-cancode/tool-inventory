    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
          <div class="sidebar-brand-text ">NIDACO</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ ($route == 'dashboard')?'active':'' }}">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
        <li class="nav-item {{ ($prefix == '/tools')?'active':'' }}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Tools</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('tool.view') }}">All Tools</a>
                <a class="collapse-item" href="{{ route('tool.add') }}">Add Tools</a>
            </div>
            </div>
        </li>

        <li class="nav-item {{ ($prefix == '/category')?'active':'' }}">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCat" aria-expanded="true" aria-controls="collapseCat">
          <i class="fas fa-fw fa-folder"></i>
          <span>Categories</span>
          </a>
          <div id="collapseCat" class="collapse" aria-labelledby="headingCat" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ route('category.view') }}">All Categories</a>
              <a class="collapse-item" href="{{ route('category.add') }}">Add Categories</a>
          </div>
          </div>
        </li>

        <li class="nav-item {{ ($prefix == '/transaction')?'active':'' }}">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTran" aria-expanded="true" aria-controls="collapseTran">
          <i class="fas fa-fw fa-folder"></i>
          <span>Transactions</span>
          </a>
          <div id="collapseTran" class="collapse" aria-labelledby="headingTran" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ route('transaction.view') }}">All Transactions</a>
              <a class="collapse-item" href="{{ route('transaction.add') }}">Add Transactions</a>
          </div>
          </div>
        </li>
  
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->
  