<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Collapsible Sidebar with Dropdown</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
    }

    #sidebar {
      min-width: 250px;
      max-width: 250px;
      background-color: #3498db; /* Light blue color for the sidebar */
      color: #ffffff;
      transition: all 0.3s;
    }

    #sidebar:hover {
      min-width: 280px;
    }

    #sidebar .nav-link {
      padding: 8px 10px;
      color: #ffffff;
    }

    #sidebar .nav-link:hover {
      background-color: #2980b9; /* Slightly darker blue on hover */
    }

    #sidebar .collapse.show {
      background-color: #2980b9; /* Darker blue for active dropdown */
    }

    #sidebar .collapse.show a {
      color: #ffffff;
    }

    #sidebar-heading {
      padding: 10px;
      font-size: 1.2em;
      font-weight: bold;
    }

    main {
      transition: margin-left 0.3s;
      position: absolute;
      left: 250px;

      padding: 20px;
      background-color: #ecf0f1; /* Light gray for the main content */
    }

    @media (max-width: 768px) {
      #sidebar {
        min-width: 0;
        max-width: none;
        display: none;
      }

      #sidebar.show {
        display: block;
      }

      main {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="sidebar-sticky">
          <div id="sidebar-heading">Your Company</div>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                Home
              </a>
            </li>
            <!-- CUSTOMER Dropdown -->
            <li class="nav-item">
              <a class="nav-link" href="#customerCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="customerCollapse">
                CUSTOMER
              </a>
              <div class="collapse" id="customerCollapse">
                <ul class="nav flex-column pl-3">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('data-entry')}}">ADD CUSTOMER</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('show-data')}}">MANAGE CUSTOMER</a>
                  </li>
                </ul>
              </div>
            </li>

            <!-- SUPPLIER Dropdown -->
            <li class="nav-item">
              <a class="nav-link" href="#supplierCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="supplierCollapse">
                SUPPLIER
              </a>
              <div class="collapse" id="supplierCollapse">
                <ul class="nav flex-column pl-3">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/supplier-entry')}}">ADD SUPPLIER</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('supplier-data')}}">MANAGE SUPPLIER</a>
                  </li>
                </ul>
              </div>
            </li>
 <!-- Medicine Dropdown -->
            <li class="nav-item">
              <a class="nav-link" href="#MedicineCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="MedicineCollapse">
                MEDICINE
              </a>
              <div class="collapse" id="MedicineCollapse">
                <ul class="nav flex-column pl-3">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/medicines/create')}}">ADD MEDICINE</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/medicines-show')}}">MANAGE MEDICINE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/stock')}}">MANAGE MEDICINE STOCK</a>
                  </li>
                </ul>
              </div>
            </li>
             <!-- supplier Dropdown -->
             <li class="nav-item">
              <a class="nav-link" href="#PurchaseCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="PurchaseCollapse">
                PURCHASE
              </a>
              <div class="collapse" id="PurchaseCollapse">
                <ul class="nav flex-column pl-3">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/purchase') }}">ADD PURCHASE</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/purchase/show') }}">MANAGE PURCHASE</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#ReportCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="ReportCollapse">
                Report
              </a>
              <div class="collapse" id="ReportCollapse">
                <ul class="nav flex-column pl-3">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/report') }}">PURCHASE REPORT</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/purchase/show') }}">MANAGE PURCHASE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/invoice') }}">invoice</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Page content -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        @yield('work')
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle sidebar on small screens
    document.addEventListener('DOMContentLoaded', function() {
      var sidebarToggle = document.getElementById('sidebarToggle');
      var sidebar = document.getElementById('sidebar');

      sidebarToggle.addEventListener('click', function() {
        sidebar.classList.toggle('show');
      });
    });
  </script>
</body>
</html>
