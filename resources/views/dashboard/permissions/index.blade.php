@extends('layouts.dashboard')

@section('content')
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link"
                                href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link"
                                href="{{ route('dashboard.permissions.index') }}">Permissions</a></li>
                        {{-- <li class="breadcrumb-item active" aria-current="page">Overview</li> --}}
                    </ol>
                </nav>

                <h1 class="page-header-title">Permissions</h1>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
                <a class="btn btn-primary" href="{{ route('dashboard.permissions.create') }}">
                    <i class="bi-person-plus-fill me-1"></i> Add Permissions
                </a>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <div class="card">
        <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
                <div class="col-md">
                    <h4 class="card-header-title">Permissions</h4>
                </div>

                <div class="col-auto">
                    <!-- Dropdown -->
                    <div class="dropdown me-2">
                        <button type="button" class="btn btn-white btn-sm dropdown-toggle" id="usersExportDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-download me-2"></i> Export
                        </button>

                        <div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
                            <span class="dropdown-header">Options</span>
                            <a id="export-copy" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="{{ asset('super/svg/illustrations/copy-icon.svg') }}" alt="Image Description">
                                Copy
                            </a>
                            <a id="export-print" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="{{ asset('super/svg/illustrations/print-icon.svg') }}" alt="Image Description">
                                Print
                            </a>
                            <div class="dropdown-divider"></div>
                            <span class="dropdown-header">Download options</span>
                            <a id="export-excel" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="{{ asset('super/svg/brands/excel-icon.svg') }}" alt="Image Description">
                                Excel
                            </a>
                            <a id="export-csv" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="{{ asset('super/svg/components/placeholder-csv-format.svg') }}"
                                    alt="Image Description">
                                .CSV
                            </a>
                            <a id="export-pdf" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="{{ asset('super/svg/brands/pdf-icon.svg') }}" alt="Image Description">
                                PDF
                            </a>
                        </div>
                    </div>


                    <!-- End Dropdown -->
                </div>

                <div class="col">
                    <form>
                        <!-- Search -->
                        <div class="input-group input-group-merge input-group-flush">
                            <div class="input-group-prepend input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input id="datatableWithFilterSearch" type="search" class="form-control"
                                placeholder="Search" aria-label="Search">
                        </div>
                        <!-- End Search -->
                    </form>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="table-responsive datatable-custom">
            <table id="exportDatatable"
                class="js-datatable-checkboxes table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                data-hs-datatables-options='{
                            "dom": "Bfrtip",
                            "info": {
                              "totalQty": "#datatableEntriesInfoTotalQty"
                            },
                            "buttons": [
                              {
                                "extend": "copy",
                                "className": "d-none"
                              },
                              {
                                "extend": "excel",
                                "className": "d-none"
                              },
                              {
                                "extend": "csv",
                                "className": "d-none"
                              },
                              {
                                "extend": "pdf",
                                "className": "d-none"
                              },
                              {
                                "extend": "print",
                                "className": "d-none"
                              }
                           ],
                           "columnDefs": [{
                              "targets": [0],
                              "orderable": false
                           }],
                           "order": [],
                           "search": "#datatableWithFilterSearch",
                           "entries": "#datatableEntries",
                           "isResponsive": true,
                           "isShowPaging": true,
                          "pagination": "datatableWithFilterPagination"
                         }'>
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Guard</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>
                            <a class="d-flex align-items-center" href="{{ route('dashboard.permissions.show', $permission->id) }}">
                                <div class="ms-3">
                                    <span class="d-block h5 text-inherit mb-0">{{ $permission->name }}</span>
                                </div>
                            </a>

                        </td>

                        <td>{{ $permission->guard_name }}</td>

                        <td>
                            <div class="hs-unfold">
                                {{-- <a class="btn btn-white btn-sm" href="ecommerce-product-details.html">
                                    <i class="bi-pencil-fill me-1"></i> Edit
                                </a> --}}

                                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle"
                                    id="settingsDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-three-dots-vertical"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="settingsDropdown1">
                                    <span class="dropdown-header">Settings</span>

                                    <a class="dropdown-item" href="{{ route('dashboard.permissions.show', $permission->id) }}">
                                        Show
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.permissions.edit', $permission->id) }}">
                                        Edit
                                    </a>

                                    {!! Form::open(['method' => 'DELETE','route' => ['dashboard.permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'dropdown-item']) !!}
                                    {!! Form::close() !!}


                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End Table -->

        <div class="card-footer">
            <!-- Pagination -->
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                        <span class="me-2">Showing:</span>

                        <!-- Select -->
                        <div class="tom-select-custom">
                            <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto"
                                autocomplete="off" data-hs-tom-select-options='{
                                      "searchInDropdown": false,
                                      "hideSearch": true
                                  }'>
                                <option value="10" selected>10</option>
                                <option value="15">15</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <!-- End Select -->

                        <span class="text-secondary me-2">of</span>

                        <!-- Pagination Quantity -->
                        <span id="datatableEntriesInfoTotalQty"></span>
                    </div>
                </div>

                <div class="col-sm-auto">
                    <div class="d-flex justify-content-center justify-content-sm-end">
                        <!-- Pagination -->
                        <nav id="datatableWithFilterPagination" aria-label="Activity pagination"></nav>
                    </div>
                </div>
            </div>
            <!-- End Pagination -->
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    (function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init('.js-datatable-checkboxes', {
        select: {
          style: 'multi',
          selector: 'td:first-child input[type="checkbox"]',
          classMap: {
            checkAll: '#datatableWithCheckboxSelectAll',
            counter: '#datatableWithCheckboxSelectCounter',
            counterInfo: '#datatableWithCheckboxSelectCounterInfo'
          }
        }
      })
    })()
</script>

{{-- <script>
    (function () {
        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')
    
        document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
            item.addEventListener('change', function(e) {
              const elVal = e.target.value,
                      targetColumnIndex = e.target.getAttribute('data-target-column-index'),
                      targetTable = e.target.getAttribute('data-target-table');
    
              HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
            })
          })
      })()
</script> --}}

<script>
    (function () {
        // INITIALIZATION OF DATATABLES
        // =======================================================
        HSCore.components.HSDatatables.init('.js-datatable')
        const exportDatatable = HSCore.components.HSDatatables.getItem('exportDatatable')
    
        document.getElementById('export-copy').addEventListener('click', function () {
          exportDatatable.button('.buttons-copy').trigger()
        })
    
        document.getElementById('export-excel').addEventListener('click', function () {
          exportDatatable.button('.buttons-excel').trigger()
        })
    
        document.getElementById('export-csv').addEventListener('click', function () {
          exportDatatable.button('.buttons-csv').trigger()
        })
    
        document.getElementById('export-pdf').addEventListener('click', function () {
          exportDatatable.button('.buttons-pdf').trigger()
        })
    
        document.getElementById('export-print').addEventListener('click', function () {
          exportDatatable.button('.buttons-print').trigger()
        })
      })()
</script>

<script>
    (function() {
        window.onload = function () {
          
  
          // INITIALIZATION OF NAVBAR VERTICAL ASIDE
          // =======================================================
          new HSSideNav('.js-navbar-vertical-aside').init()
  
  
          // INITIALIZATION OF FORM SEARCH
          // =======================================================
          new HSFormSearch('.js-form-search')
  
  
          // INITIALIZATION OF BOOTSTRAP DROPDOWN
          // =======================================================
          HSBsDropdown.init()
  
  
          // INITIALIZATION OF SELECT
          // =======================================================
          HSCore.components.HSTomSelect.init('.js-select')
        }
      })()
</script>
@endsection