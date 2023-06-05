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
                        <div class="row">
                            <div class="col-lg-8 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">Hello Paws!</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="../assets/img/illustrations/man-with-laptop-light.png"
                                                    height="140" alt="View Badge User"
                                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <box-icon name='user' type='outline' size='md'
                                                            color='#696CFF'>
                                                        </box-icon>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Total Konsumen</span>
                                                <h3 class="card-title mb-2">{{ $totalKonsumen }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <box-icon name='user' type='outline' size='md'
                                                            color='#696CFF'>
                                                        </box-icon>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Total Pelanggan</span>
                                                <h3 class="card-title text-nowrap mb-1">{{ $totalPelanggan }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabel Pegawai -->
                            <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        Pegawai
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-nowrap">
                                                        <th>ID</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>Alamat</th>
                                                        <th>No. Telepon</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $p)
                                                        <tr>
                                                            <td>{{ $p->id }}</td>
                                                            <td>{{ $p->nama }}</td>
                                                            <td>{{ $p->email }}</td>
                                                            <td>{{ $p->alamat }}</td>
                                                            <td>{{ $p->no_telpon }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Tabel Pegawai -->

                            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0"
                                                        style="display: flex; flex-direction: row;">
                                                        <span>
                                                            <box-icon type='solid' name='cat' size='md'
                                                                color='#696CFF'>
                                                            </box-icon>
                                                        </span>
                                                        <span>
                                                            <box-icon name='dog' type='solid' color='#696CFF'>
                                                            </box-icon>
                                                        </span>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Total Hewan</span>
                                                <h3 class="card-title text-nowrap mb-2">{{ $totalHewan }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <box-icon name='user' type='solid' size='md'
                                                            color='#696CFF'></box-icon>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Total Pegawai</span>
                                                <h3 class="card-title mb-2">{{ $totalPegawai }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
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

    <script>
        Alert::success('Welcome back!', 'Success Message');
    </script>

    <!-- / Layout wrapper -->
    @include('layout/footer')
