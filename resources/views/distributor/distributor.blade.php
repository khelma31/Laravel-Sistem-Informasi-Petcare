@include('layout/header')
@include('layout/sidebar')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Data Distributor</h4>

                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    {{-- <form class="d-flex" onsubmit="return false">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search" />
                                        <button class="btn btn-outline-primary" type="submit">Search</button>
                                    </form> --}}
                                    <div class="card-body">
                                        <div class="demo-inline-spacing">
                                            <a href="/distributor-tambah">
                                                <button type="button" class="btn btn-primary">+ Add New</button>
                                            </a>
                                            @if (count($data) > 0)
                                                <a href="/distributor-export/{{ $data[0]->id }}">
                                                    <button type="button" class="btn btn-danger">Download PDF</button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $d)
                                                <tr>
                                                    <td>{{ $d->id }}</td>
                                                    <td>{{ $d->nama }}</td>
                                                    <td>{{ $d->email }}</td>
                                                    <td>{{ $d->alamat }}</td>
                                                    <td>
                                                        <a href="/distributor-edit/{{ $d->id }}">Edit</a> | <a
                                                            href="/distributor-delete/{{ $d->id }}">Hapus</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a href="https://themeselection.com" target="_blank"
                                class="footer-link fw-bolder">ThemeSelection</a>
                        </div>
                        <div>
                            <a href="https://themeselection.com/license/" class="footer-link me-4"
                                target="_blank">License</a>
                            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                Themes</a>

                            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                target="_blank" class="footer-link me-4">Documentation</a>

                            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                target="_blank" class="footer-link me-4">Support</a>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('layout/footer')
