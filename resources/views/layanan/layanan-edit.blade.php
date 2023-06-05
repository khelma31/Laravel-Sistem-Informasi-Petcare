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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Edit Data Layanan</h4>
                <div class="card mb-4">
                  <div class="card-body">
                    <form action="/layanan-update/{{ $data->id }}" method="post">
                      @csrf
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Jenis Layanan</label>
                        <input type="text" name="jenis_layanan" maxlength="50" required="required" class="form-control" id="basic-default-company" value="{{ $data->jenis_layanan }}"/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Harga Layanan</label>
                        <input type="number" name="harga" maxlength="50" required="required" class="form-control" id="basic-default-company" placeholder="cth. 50000" value="{{ $data->harga }}"/>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
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
