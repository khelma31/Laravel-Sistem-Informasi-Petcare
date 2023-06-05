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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Edit Data Pegawai</h4>
                
                <div class="card mb-4">
                  <div class="card-body">
                    <form action="/pegawai-update/{{ $data->id }}" method="post">
                      @csrf
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Nama</label>
                        <input type="text" name="nama" maxlength="50" required="required" class="form-control" id="basic-default-company" value="{{ $data->nama }}"/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-email">Email</label>
                        <div class="input-group input-group-merge">
                          <input
                            type="text"
                            name="email"
                            maxlength="50"
                            required="required"
                            id="basic-default-email"
                            class="form-control"
                            aria-describedby="basic-default-email2"
                            value="{{ $data->email }}"
                          />
                          <span class="input-group-text" id="basic-default-email2">@example.com</span>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Alamat</label>
                        <textarea
                          name="alamat"
                          maxlength="100"
                          required="required"
                          id="basic-default-message"
                          class="form-control"
                        >{{ $data->alamat }}</textarea>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">No. Telepon</label>
                        <input
                          name="no_telpon"
                          pattern="[0-9]{1,15}"
                          required="required"
                          id="basic-default-phone"
                          class="form-control phone-mask"
                          maxlength="15"
                          value="{{ $data->no_telpon }}"
                        />
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
