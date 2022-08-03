<div class="container-fluid pt-5">
    <div class="text-right">
        <a href="#" class="btn btn-primary" id="tambah" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</a>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importModal">Import Data</a>

    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Data Vaksinasi Karyawan</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="tabel" class="table card-table table-vcenter text-nowrap datatable stripe hover">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama Karyawan</th>
                            <th class="text-center">Usia</th>
                            <th class="text-center">Status Vaksin 1</th>
                            <th class="text-center">Status Vaksin 2</th>
                            <th class="text-center">Desa</th>
                            <th class="text-center">Kecamatan</th>
                            <th class="text-center">Kota</th>
                            <th class="text-center">Provinsi</th>
                            <th class="text-center">Aksi</th>
                            <th class="text-center">Desa</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Karyawan</th>
                            <th>Usia</th>
                            <th>Status Vaksin 1</th>
                            <th>Status Vaksin 2</th>
                            <th>Desa</th>
                            <th>Kecamatan</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <!-- <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama Karyawan</th>
                            <th>Usia</th>
                            <th>Status Vaksin 1</th>
                            <th>Status Vaksin 2</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot> -->
                </table>
            </div>
        </div>
    </div>
</div>

<!--   Modal Import CSV-->
<div class="modal modal-blur fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('/employee') ?>">
                    <h5 class="modal-title" id="exampleModalLabel">Import CSV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <?php
            if (session()->get("success")) {
            ?>
                <div class="alert alert-success">
                    <?= session()->get("success") ?>
                </div>
            <?php
            }
            ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="file" class="form-control" required id="file" placeholder="Enter file" name="file" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--   Modal Tambah Data-->
<div class="modal modal-blur fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="<?= route_to('add.employee'); ?>" method="post" id="add-employee-form" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-6 mb-2">
                      <div class="form-group">
                          <label for="nama_karyawan" class="col-form-label">Nama Karyawan</label>
                          <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan">
                          <span class="text-danger error-text nama_karyawan_error"></span>
                      </div>
                      <div class="form-group">
                          <label for="usia" class="col-form-label">Usia</label>
                          <input type="number" class="form-control" id="usia" name="usia">
                          <span class="text-danger error-text usia_error"></span>
                      </div>
                      <div class="form-group">
                          <label for="status_vaksin_1" class="col-form-label">Status Vaksin 1</label>
                          <select class="form-control form-select" name="status_vaksin_1">
                              <option value="">---Pilih Status Vaksin---</option>
                              <option value="Belum">Belum Vaksin</option>
                              <option value="Sudah">Sudah Vaksin</option>
                          </select>
                          <span class="text-danger error-text status_vaksin_1_error"></span>
                      </div>
                      <div class="form-group">
                          <label for="status_vaksin_2" class="col-form-label">Status Vaksin 2</label>
                          <select class="form-control form-select" name="status_vaksin_2">
                              <option value="">---Pilih Status Vaksin---</option>
                              <option value="Belum">Belum Vaksin</option>
                              <option value="Sudah">Sudah Vaksin</option>
                          </select>
                          <span class="text-danger error-text status_vaksin_2_error"></span>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group">
                          <label for="provinsi" class="col-form-label">Provinsi</label>
                          <select class="form-control form-select" id="sel_prov" name="prov">
                              <option value="">---Pilih provinsi---</option>
                                  <?php foreach($prov as $provinsi){?>
                              <option value="<?php echo $provinsi->id_prov;?>"><?php echo $provinsi->prov;?></option>"
                                  <?php }?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="kota" class="col-form-label">Kabupaten/Kota</label>
                          <select class="form-control form-select" id="sel_kota" name="kota">
                            <option value="">---Pilih Kabupaten/Kota---</option>
                          </select>
                      </div>                        
                      <div class="form-group">
                          <label for="kecamatan" class="col-form-label">Kecamatan</label>
                          <select class="form-control form-select" id="sel_kec" name="kec">
                            <option value="">---Pilih Kecamatan---</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="desa" class="col-form-label">Desa/Kelurahan</label>
                          <select class="form-control form-select" id="sel_desa" name="desa">
                            <option value="">---Pilih Desa/Kelurahan---</option>
                          </select>
                      </div>
                    </div>
                  </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btn-save">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <= $this->include('/edit_view'); ?> -->
<!-- Modal Edit Data -->
<div class="modal modal-blur fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" method="post" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Karyawan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_id">
                    <input type="hidden" id="alamat">
                      <div class="form-group">
                          <label for="nama_karyawan" class="col-form-label">Nama Karyawan</label>
                          <input type="text" class="form-control nama_karyawan" id="nama_karyawan_edit" name="nama_karyawan" placeholder="Nama harus diisi">
                        <span id="error_nama" class="text-danger"></span>
                          <span class="text-danger error-text nama_karyawan_error"></span>
                      </div>
                      <div class="form-group">
                          <label for="usia" class="col-form-label">Usia</label>
                          <input type="number" class="form-control usia" id="usia_edit" name="usia" placeholder="Usia harus diisi">
                          <span id="error_usia" class="text-danger"></span>
                      </div>
                      <div class="form-group">
                          <label for="status_vaksin_1" class="col-form-label">Status Vaksin 1</label>
                          <select class="form-control form-select status_vaksin_1" id="status_vaksin_1_edit">
                              <option value="">---Pilih Status Vaksin---</option>
                              <option value="belum">Belum Vaksin</option>
                              <option value="sudah">Sudah Vaksin</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="status_vaksin_2" class="col-form-label">Status Vaksin 2</label>
                          <select class="form-control form-select status_vaksin_2" id="status_vaksin_2_edit">
                              <option value="">---Pilih Status Vaksin---</option>
                              <option value="belum">Belum Vaksin</option>
                              <option value="sudah">Sudah Vaksin</option>
                          </select>
                          <span class="text-danger error-text status_vaksin_2_error"></span>
                      </div>
                    <div class="row">
                      <div class="col-lg-6 mb-2">
                        <div class="form-group">
                            <label for="prov" class="col-form-label">Provinsi</label>
                            <input type="text" class="form-control prov" id="prov_edit" name="prov" readonly >
                          <span id="error_nama" class="text-danger"></span>
                            <span class="text-danger error-text prov_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="kota" class="col-form-label">Kabupaten/Kota</label>
                            <input type="text" class="form-control kota" id="kota_edit" name="kota" readonly >
                            <span id="error_kota" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="kec" class="col-form-label">Kecamatan</label>
                            <input type="text" class="form-control kec" id="kec_edit" name="kec" readonly >
                          <span id="error_nama" class="text-danger"></span>
                            <span class="text-danger error-text kec_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="desa" class="col-form-label">Desa/Kelurahan</label>
                            <input type="text" class="form-control desa" id="desa_edit" name="desa" readonly>
                            <span id="error_desa" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-lg-6 mb-2">
                        <div class="form-group">
                            <label for="provinsi" class="col-form-label">&nbsp</label>
                            <select class="form-control form-select" id="sel_prov_edit" name="prov">
                                <option value="">---Pilih provinsi---</option>
                                    <?php foreach($prov as $provinsi){?>
                                <option value="<?php echo $provinsi->id_prov;?>"><?php echo $provinsi->prov;?></option>"
                                    <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kota" class="col-form-label">&nbsp</label>
                            <select class="form-control form-select" id="sel_kota_edit" name="kota">
                              <option value="">---Pilih Kabupaten/Kota---</option>
                            </select>
                        </div>                        
                        <div class="form-group">
                            <label for="kecamatan" class="col-form-label">&nbsp</label>
                            <select class="form-control form-select" id="sel_kec_edit" name="kec">
                              <option value="">---Pilih Kecamatan---</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desa" class="col-form-label">&nbsp</label>
                            <select class="form-control form-select" id="sel_desa_edit" name="desa">
                              <option value="">---Pilih Desa/Kelurahan---</option>
                            </select>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>



<!-- DATATABLES SCRIPT -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/4.6.3/papaparse.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
<!-- --- -->


<script>
  $(document).ready(function() {

    //Tambah data
    $('#add-employee-form').submit(function(e) {
      e.preventDefault();
      var form = this;
      $.ajax({
        url: $(form).attr('action'),
        method: $(form).attr('method'),
        data: new FormData(form),
        processData: false,
        dataType: 'json',
        contentType: false,
        beforeSend: function() {
          $(form).find('span.error-text').text('');
        },
        success: function(data) {

          if ($.isEmptyObject(data.error)) {
            if (data.code == 1) {
              $(form)[0].reset();
              $('#exampleModal').modal('hide');
              Swal.fire(
                'Berhasil!',
                'Data karyawan berhasil ditambahkan.',
                'success'
              )
              $('#tabel').DataTable().ajax.reload(null, false);
            } else {
              alert(data.msg);
            }
          } else {
            $.each(data.error, function(prefix, val) {
              $(form).find('span.' + prefix + '_error').text(val);
            });

          }
        }
      });
    });

    //PILIH KOTA, KEC, DESA
    $("#tambah").click(function(){
        // setelah pilih provinsi
        $('#sel_prov').change(function(){
            var prov = $(this).val(); //id prov dari data
        // AJAX request
            $.ajax({
                url:'employee/getKota',
                method: 'post',
                data: {prov: prov},
                dataType: 'json',
                success: function(response){
                // Remove options 
                    $('#sel_kec').find('option').not(':first').remove();
                    $('#sel_kota').find('option').not(':first').remove();
                    $('#sel_desa').find('option').not(':first').remove();
                // Add options
                    $.each(response,function(index,data){
                        $('#sel_kota').append('<option value="'+data['id_kota']+'">'+data['kota']+'</option>');
                    });
                }
            });
        });
        // Setelah pilih kota
        $('#sel_kota').change(function(){
            var kota = $(this).val();
            // AJAX request
            $.ajax({
                url:'employee/getKecamatan',
                method: 'post',
                data: {kota: kota},
                dataType: 'json',
                success: function(response){
                // Remove options
                    $('#sel_kec').find('option').not(':first').remove();
                    $('#sel_desa').find('option').not(':first').remove();
                    // Add options
                    $.each(response,function(index,data){
                        $('#sel_kec').append('<option value="'+data['id_kec']+'">'+data['kec']+'</option>');
                    });
                }
            });
        });

        //Setelah pilih kecamatan
        $('#sel_kec').change(function(){
            var kec = $(this).val();
            // AJAX request
            $.ajax({
                url:'employee/getDesa',
                method: 'post',
                data: {kec: kec},
                dataType: 'json',
                success: function(response){
                // 
                $('#sel_desa').find('option').not(':first').remove();
                    // Add options
                    $.each(response,function(index,data){
                        $('#sel_desa').append('<option value="'+data['id_desa']+'">'+data['desa']+'</option>');
                    });
                }
            });
        });
    });
    //END!!!! PILIH KOTA, KEC, DESA

    $('#tabel thead:nth-child(2) th').each(function(i) {
      var title = $('#tabel thead:nth-child(2) th').eq($(this).index()).text();
      $(this).html('<input type="text" class="form-control input-sm" placeholder="' + title + '" data-index="' + i + '" />');
    });

    //Menampilkan data ke tabel
    var table = $('#tabel').DataTable({
         // orderCellsTop: true,
      fixedHeader: false,
      scrollY: "600px",
      'autoWidth': false,
      'scrollX': true,
      scrollCollapse: true,
      fixedColumns: true,
      "processing": true,
      "serverSide": true,
      "ajax": "<?= route_to('get.all.employee'); ?>",
      "dom": "lBfrtp",
      buttons: [
        // {
          // extend: "collection",
          // text: "Export",
          // buttons: [
            {
              extend: 'csv',
              text: "Export CSV",
              exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8,9]
              },
            },
            {
              extend: 'excel',
              text: "Export Excel",
              exportOptions: {
                columns: [0,1,2,3,4,6,7,8,9]
              },
            }
          // ]
        // }
      ],
      stateSave: true,
      info: true,
      "iDisplayLength": 5,
      "pageLength": 5,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "fnCreatedRow": function(row, data, index) {
        $('td', row).eq(0).html(index + 1);
      },
      "columnDefs": [{
        "width": "10%",
        "targets": 0
      }]
    });
    // table.column( 5 ).visible( false );


    // Filter event handler
    $(table.table().container()).on('keyup', 'thead:nth-child(2) input', function() {
      table
        .column($(this).data('index'))
        .search(this.value)
        .draw();
    });

    //Menampilkan data berdasarkan id di modal edit
    $(document).on('click', '.btn-edit', function(e) {
      e.preventDefault();
      // var edit_id = $(this).closest('tr').find('.krywn_id').text();
      var edit_id = $(this).attr('data-id');
      $.ajax({
        method: "post",
        url: "employee/edit",
        data: {
          'edit_id': edit_id
        },
        success: function(response) {
          $.each(response, function(key, value) {
            $('#sel_kec_edit').find('option').not(':first').remove();
            $('#sel_kota_edit').find('option').not(':first').remove();
            $('#sel_desa_edit').find('option').not(':first').remove();
            // $('#sel_prov_edit').find('option').not(':first').remove();

            $('#edit_id').val(value['id']);
            $('#alamat').val(value['alamat']);
            $('#nama_karyawan_edit').val(value['nama_karyawan']);
            $('#usia_edit').val(value['usia']);
            $('#status_vaksin_1_edit').val(value['status_vaksin_1']);
            $('#status_vaksin_2_edit').val(value['status_vaksin_2']);
            $('#prov_edit').val(value['prov']);
            $('#kota_edit').val(value['kota']);
            $('#kec_edit').val(value['kec']);
            $('#desa_edit').val(value['desa']);
            $('#editModal').modal('show');
          });
        }
      });

      // setelah pilih provinsi
      $('#sel_prov_edit').change(function(){
            var prov = $(this).val(); //id prov dari data
        // AJAX request
            $.ajax({
                url:'employee/getKota',
                method: 'post',
                data: {prov: prov},
                dataType: 'json',
                success: function(response){
                // Remove options 
                    $('#sel_kec_edit').find('option').not(':first').remove();
                    $('#sel_kota_edit').find('option').not(':first').remove();
                    $('#sel_desa_edit').find('option').not(':first').remove();
                // Add options
                    $.each(response,function(index,data){
                        $('#sel_kota_edit').append('<option value="'+data['id_kota']+'">'+data['kota']+'</option>');
                    });
                }
            });
        });
        // Setelah pilih kota
        $('#sel_kota_edit').change(function(){
            var kota = $(this).val();
            // AJAX request
            $.ajax({
                url:'employee/getKecamatan',
                method: 'post',
                data: {kota: kota},
                dataType: 'json',
                success: function(response){
                // Remove options
                    $('#sel_kec_edit').find('option').not(':first').remove();
                    $('#sel_desa_edit').find('option').not(':first').remove();
                    // Add options
                    $.each(response,function(index,data){
                        $('#sel_kec_edit').append('<option value="'+data['id_kec']+'">'+data['kec']+'</option>');
                    });
                }
            });
        });

        //Setelah pilih kecamatan
        $('#sel_kec_edit').change(function(){
            var kec = $(this).val();
            // AJAX request
            $.ajax({
                url:'employee/getDesa',
                method: 'post',
                data: {kec: kec},
                dataType: 'json',
                success: function(response){
                // 
                $('#sel_desa_edit').find('option').not(':first').remove();
                    // Add options
                    $.each(response,function(index,data){
                        $('#sel_desa_edit').append('<option value="'+data['id_desa']+'">'+data['desa']+'</option>');
                    });
                }
            });
        });
      e.preventDefault();
    });

    //Update data
    $(document).on('click', '.btn-update', function(e) {
      e.preventDefault();
      
      var data1 = {
        'edit_id': $('#edit_id').val(),
        'nama_karyawan': $('#nama_karyawan_edit').val(),
        'usia': $('#usia_edit').val(),
        'status_vaksin_1': $('#status_vaksin_1_edit').val(),
        'status_vaksin_2': $('#status_vaksin_2_edit').val(),
        'alamat' : $('#sel_desa_edit').val(),
      };

      var data2 = {
        'edit_id': $('#edit_id').val(),
        'nama_karyawan': $('#nama_karyawan_edit').val(),
        'usia': $('#usia_edit').val(),
        'status_vaksin_1': $('#status_vaksin_1_edit').val(),
        'status_vaksin_2': $('#status_vaksin_2_edit').val(),
        'alamat' : $('#alamat').val(),
      };
      var id_kota = $('#sel_desa_edit').val();
      $.ajax({
        method : "post",
        url : "employee/update",
        data: (id_kota != "") ? data1 : data2,
        success: function(response) {
          if (response.status == "Data berhasil diupdate") {
            $('#editModal').modal('hide');
            // $('#tableData').html("");
            // display();
            $('#tabel').DataTable().ajax.reload(null, false);

            swal.fire("Berhasil", response.status, "success");
          } else {
            swal.fire("Gagal", response.status, "error");
          }
        }
      });
      e.preventDefault();
    });

    //Hapus data
    $(document).on('click', '#deleteEmployeeBtn', function() {
      var employee_id = $(this).data('id');
      var url = "<?= route_to('delete.employee'); ?>";

      swal.fire({

        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'

      }).then(function(result) {
        if (result.value) {

          $.post(url, {
            employee_id: employee_id
          }, function(data) {
            if (data.code == 1) {
              Swal.fire(
                'Deleted!',
                'Data karyawan berhasil dihapus.',
                'success'
              )
              $('#tabel').DataTable().ajax.reload(null, false);
            } else {
              alert(data.msg);
            }
          }, 'json');
        }
      });
    });

  });
</script>


<!-- buat simpan aja -->
<!-- <div>
    <form action="base url bala bla bla ?>" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <div class="mb-3">
                <input type="file" name="file" class="form-control" id="file">
            </div>
        </div>
        <div class="d-grid">
            <input type="submit" name="submit" value="Upload" class="btn btn-dark" />
        </div>
    </form>
</div> -->