
  
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal">
                  Edit
                </button>

                <div class="modal show" id="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Sửa thông tin tài khoản</h4>
              <a type="button" class="close" href="Account.php">
                <span aria-hidden="true">&times;</span>
               </a>
            </div>
            <div class="modal-body">
          <div class="row" style="display:block">
            <div class="col-md-6" style="    max-width: 100%;">
              <div class="card card-primary"style="box-shadow:none; margin:0;">
              <div class="card-body">
                  <div class="form-group">
                    <label for="inputUser">Tên tài khoản</label>
                    <input
                      type="text"
                      id="inputUser"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Mật khẩu</label>
                    <input
                      type="text"
                      id="inputPassword"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputName">Họ tên</label>
                    <input
                      type="text"
                      id="inputName"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="selectChucVu">Chức vụ</label>
                    <select>
                    <option value="employee">Nhân viên</option>
                    <option value="admin">Quản lý</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Căn cước công dân</label>
                    <input
                      type="text"
                      id="inputCCCD"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputName">Ngày sinh</label>
                    <input
                      type="date"
                      id="inputBday"
                      class="form-control"
                    />
                      <!--có thể set value/min max tùy theo yêu cầu:  value="2077-01-01" min="2018-01-01" max="2018-12-31" -->
                  </div>
                  <div class="form-group">
                    <label for="selectChucVu">Giới tính</label>
                    <select>
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Reset</button>
              <button type="button" class="btn btn-primary">Lưu</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

