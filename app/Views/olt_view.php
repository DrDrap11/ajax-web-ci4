<div class="container-fluid pt-5">
    <div id="tombol" class="btn-group">
        <button id="tambah" class="btn btn-primary mb-2 me-2" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah OLT</button>
    </div>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Data OLT</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabel" class="table card-table table-vcenter text-nowrap datatable stripe hover">
                <thead>
                  <tr>
                    <th class="text-center">Aksi</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">OLT</th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th>Aksi</th>
                    <th>ID</th>
                    <th>OLT</th>
                  </tr>
                </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<!--   Modal Tambah OLT-->
<div class="modal modal-blur fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="<?= route_to('add.olt'); ?>" method="post" id="add-olt-form" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data OLT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <div class="form-group mb-3 row">
                    <label class="form-label col-3 col-form-label">Input OLT</label>
                    <div class="col">
                      <input type="text" class="form-control" id="olt_nama" name="olt_nama" placeholder="Input OLT baru">
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

<!--   Modal Edit OLT-->
<div class="modal modal-blur fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post" id="edit-olt-form" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data OLT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <input type="hidden" id="edit_id">
                  <div class="form-group mb-3 row">
                    <label class="form-label col-3 col-form-label">ID</label>
                    <div class="col">
                      <input type="text" id="olt_id" class="form-control" readonly>
                    </div>
                  </div>
                  <div class="form-group mb-3 row">
                    <label class="form-label col-3 col-form-label">OLT</label>
                    <div class="col">
                      <input type="text" id="olt_nama_edit" class="form-control">
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/4.6.3/papaparse.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
<!-- --- -->

<!-- KALENDER -->
<script type="text/javascript" src="Assets/js/litepicker.js"></script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.Litepicker && (new Litepicker({
    element: document.getElementById('datepicker-icon'),
    buttonText: {
      previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>`,
      nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>`,
    },
    }));
  });

  document.addEventListener("DOMContentLoaded", function () {
    window.Litepicker && (new Litepicker({
    element: document.getElementById('datepicker-icon-edit'),
    buttonText: {
      previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>`,
      nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>`,
    },
    }));
  });
  // @formatter:on
</script>

<script>
  $(document).ready(function() {

    $('#add-olt-form').submit(function(e) {
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
              $('#tambahModal').modal('hide');
              Swal.fire(
                'Berhasil!',
                'Data berhasil ditambahkan.',
                'success'
              )
              $('#tabel').DataTable().ajax.reload(null, false);
            } else {
              Swal.fire(
                'Gagal',
                'Ooopss',
                'error'
              );
            }
          } else {
            $.each(data.error, function(prefix, val) {
              $(form).find('span.' + prefix + '_error').text(val);
            });

          }
        }
      });
    });


    $('#tabel thead:nth-child(2) th').each(function(i) {
      var title = $('#tabel thead:nth-child(2) th').eq($(this).index()).text();
      $(this).html('<input type="text" class="form-control input-sm" placeholder="' + title + '" data-index="' + i + '" />');
    });

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
      "ajax": "AllOlt",
      "dom": "lfrtp",
      stateSave: true,
      info: true,
      "iDisplayLength": 10,
      "pageLength": 10,
      "aLengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      "columnDefs": [{
        "width": "10%",
        "targets": 0
      }]
    });

    // Filter event handler
    $(table.table().container()).on('keyup', 'thead:nth-child(2) input', function() {
      table
        .column($(this).data('index'))
        .search(this.value)
        .draw();
    });

    $(document).on('click', '.btn-edit', function(e) {
      e.preventDefault();
      var edit_id = $(this).attr('data-id');
      $.ajax({
        method: "post",
        url: "olt/editOlt",
        data: {
          'edit_id': edit_id
        },
        success: function(response) {
          $.each(response, function(key, value) {
            $('#edit_id').val(value['olt_id']);
            $('#olt_id').val(value['olt_id']);
            $('#olt_nama_edit').val(value['olt_nama']);
            $('#editModal').modal('show');
          });
        }
      });
      e.preventDefault();
    });

    $(document).on('click', '.btn-update', function(e) {
      e.preventDefault();
      
      $.ajax({
        method: "post",
        url: "olt/updateOlt",
        // data: (id_kota != "") ? data1 : data2,
        data: {
          'edit_id': $('#edit_id').val(),
          'olt_nama': $('#olt_nama_edit').val(),
        },
        success: function(response) {
          if (response.status == "Data berhasil diupdate") {
            $('#editModal').modal('hide');
            // $('#tableData').html("");
            // display();
            $('#tabel').DataTable().ajax.reload(null, false);
            // $('#editModal')[0].reset();

            swal.fire("Berhasil", response.status, "success");
          } else {
            swal.fire("Gagal", response.status, "error");
          }
        }
      });
      e.preventDefault();
    });

    $(document).on('click', '#deleteOltBtn', function() {
      var id = $(this).attr('data-id');
      var url = "olt/deleteOlt";

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
            id: id
          }, function(data) {
            if (data.code == 1) {
              Swal.fire(
                'Deleted!',
                'Data berhasil dihapus.',
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

