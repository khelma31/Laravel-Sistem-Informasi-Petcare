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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Edit Data Transaksi
                            Konsumen</h4>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="/tkonsumen-update/{{ $data->id }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">ID Konsumen</label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_konsumen">
                                                <option selected disabled>--Pilih ID Konsumen--</option>
                                                @foreach ($konsumens as $p)
                                                    <option value="{{ $p->id }}"
                                                        {{ $data->id_konsumen == $p->id ? 'selected' : '' }}>ID
                                                        {{ $p->id }} -
                                                        {{ $p->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">ID Pegawai</label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_pegawai">
                                                <option selected disabled>--Pilih ID Pegawai--</option>
                                                @foreach ($pegawais as $p)
                                                    <option value="{{ $p->id }}"
                                                        {{ $data->id_pegawai == $p->id ? 'selected' : '' }}>ID
                                                        {{ $p->id }} -
                                                        {{ $p->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">ID Layanan</label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_layanan" id="id_layanan">
                                                <option selected disabled>--Pilih ID Layanan--</option>
                                                @foreach ($layanans as $l)
                                                    <option value="{{ $l->id }}" data-harga="{{ $l->harga }}"
                                                        @if ($data->id_layanan == $l->id) selected @endif>
                                                        ID {{ $l->id }} - {{ $l->jenis_layanan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">ID Barang</label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_barang">
                                                <option selected disabled>--Pilih ID Barang--</option>
                                                @foreach ($barangs as $b)
                                                    <option value="{{ $b->id }}"
                                                        {{ $data->id_barang == $b->id ? 'selected' : '' }}>ID
                                                        {{ $b->id }} -
                                                        {{ $b->jenis }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">ID Poin</label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_penukaran" id="id_poin">
                                                <option selected disabled>--Pilih ID Poin--</option>
                                                @foreach ($penukarans as $p)
                                                    <option value="{{ $p->id }}"
                                                        data-poin="{{ $p->poins->poin }}"
                                                        @if ($data->id_penukaran == $p->id) selected @endif>
                                                        ID {{ $p->id }} - {{ $p->poins->poin }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">Jenis Transaksi</label>
                                        <div class="form-group">
                                            <select class="form-control" name="jenis_transaksi">
                                                <option selected disabled>--Pilih Jenis Transaksi--</option>
                                                <option {{ $data->jenis_transaksi == 'Tunai' ? 'selected' : '' }}>Tunai</option>
                                                <option {{ $data->jenis_transaksi == 'Non-Tunai' ? 'selected' : '' }}>Non-Tunai</option>
                                                <option {{ $data->jenis_transaksi == 'Kredit' ? 'selected' : '' }}>Kredit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">Total Transaksi</label>
                                        <input type="number" name="total" maxlength="50" required="required"
                                            class="form-control" id="total_pembayaran" value="{{ $data->total }}" readonly />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">Tanggal Pembayaran</label>
                                        <input type="date" name="tanggal" required class="form-control"
                                            id="tanggal_pembayaran" value="{{ $data->tanggal }}"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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
    <!-- / Layout wrapper -->

    @include('layout/footer')
