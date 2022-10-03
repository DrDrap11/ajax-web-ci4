<div class="container-fluid pt-5">
    <div id="tombol" class="btn-group">
        <button id="tambah" class="btn btn-primary mb-2 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
        <button id="import" class="btn btn-outline-primary mb-2 me-2" data-bs-toggle="modal" data-bs-target="#importModal">Import</button>
    </div>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Data Potensi</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabel" class="table card-table table-vcenter text-nowrap datatable stripe hover">
                <thead>
                  <tr>
                    <th class="text-center">Aksi</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Tipe Project</th>
                    <th class="text-center">Nama Cluster</th>
                    <th class="text-center">Tipe Cluster</th>
                    <th class="text-center">Area</th>
                    <th class="text-center">Kabupaten</th> 
                    <th class="text-center">Kecamatan</th> 
                    <th class="text-center">Kelurahan</th> 
                    <th class="text-center">OLT</th> 
                    <th class="text-center">Longitude & Latitude</th> 
                    <th class="text-center">Perizinan</th> 
                    <th class="text-center">Kompetitor</th> 
                    <th class="text-center">Lokal Operator</th> 
                    <th class="text-center">Tiang Listrik</th> 
                    <th class="text-center">Jumlah Rumah</th> 
                    <th class="text-center">Rumah Kosong</th> 
                    <th class="text-center">Fasil Umum</th> 
                    <th class="text-center">Rata-rata Daya</th> 
                    <th class="text-center">Anak Kecil</th> 
                    <th class="text-center">Kendaraan</th> 
                    <th class="text-center">Air Conditioner (AC)</th> 
                    <th class="text-center">Penggunaan Internet Untuk Bisnis</th> 
                    <th class="text-center">Jumlah Peminat Awal</th> 
                    <th class="text-center">Harga ICONNET Menurut Warga (1)</th> 
                    <th class="text-center">Penggunaan Internet (1)</th> 
                    <th class="text-center">Jumlah Perangkat / Rumah (1)</th> 
                    <th class="text-center">Alokasi Budget untuk Internet (1)</th> 
                    <th class="text-center">Sampling Minat (1)</th> 
                    <th class="text-center">Harga ICONNET Menurut Warga (2)</th> 
                    <th class="text-center">Penggunaan Internet (2)</th> 
                    <th class="text-center">Jumlah Perangkat / Rumah (2)</th> 
                    <th class="text-center">Alokasi Budget untuk Internet (2)</th> 
                    <th class="text-center">Sampling Minat (2)</th> 
                    <th class="text-center">Harga ICONNET Menurut Warga (3)</th>
                    <th class="text-center">Penggunaan Internet (3)</th>  
                    <th class="text-center">Jumlah Perangkat / Rumah (3)</th> 
                    <th class="text-center">Alokasi Budget untuk Internet (3)</th> 
                    <th class="text-center">Sampling Minat (3)</th> 
                    <th class="text-center">Jumlah FAT</th>
                    <th class="text-center">Daftar FAT</th> 
                    <th class="text-center">Keterangan</th> 
                    <th class="text-center">Nilai ROI</th> 
                    <th class="text-center">Score</th> 
                    <th class="text-center">Kelayakan</th> 
                    <th class="text-center">Status Drawing</th> 
                    <th class="text-center">Link Maps</th> 
                    <th class="text-center">Jumlah FAT Ploating</th> 
                    <th class="text-center">Home Pass</th> 
                    <th class="text-center">Aproval Pembangunan</th> 
                    <th class="text-center">No PA / Project</th> 
                    <th class="text-center">Status Pembangunan</th> 
                    <th class="text-center">Plan Pembangunan</th> 
                    <th class="text-center">Created Date</th> 
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th>Aksi</th>
                    <th>ID</th>
                    <th>Tipe Project</th>
                    <th>Nama Cluster</th>
                    <th>Tipe Cluster</th>
                    <th>Area</th>
                    <th>Kabupaten</th> 
                    <th>Kecamatan</th> 
                    <th>Kelurahan</th> 
                    <th>OLT</th> 
                    <th>Longitude & Latitude</th> 
                    <th>Perizinan</th> 
                    <th>Kompetitor</th> 
                    <th>Lokal Operator</th> 
                    <th>Tiang Listrik</th> 
                    <th>Jumlah Rumah</th> 
                    <th>Rumah Kosong</th> 
                    <th>Fasil Umum</th> 
                    <th>Rata-rata Daya</th> 
                    <th>Anak Kecil</th> 
                    <th>Kendaraan</th> 
                    <th>Air Conditioner (AC)</th> 
                    <th>Penggunaan Internet Untuk Bisnis</th> 
                    <th>Jumlah Peminat Awal</th> 
                    <th>Harga ICONNET Menurut Warga (1)</th> 
                    <th>Penggunaan Internet (1)</th> 
                    <th>Jumlah Perangkat / Rumah (1)</th> 
                    <th>Alokasi Budget untuk Internet (1)</th> 
                    <th>Sampling Minat (1)</th> 
                    <th>Harga ICONNET Menurut Warga (2)</th> 
                    <th>Penggunaan Internet (2)</th> 
                    <th>Jumlah Perangkat / Rumah (2)</th> 
                    <th>Alokasi Budget untuk Internet (2)</th> 
                    <th>Sampling Minat (2)</th> 
                    <th>Harga ICONNET Menurut Warga (3)</th>
                    <th>Penggunaan Internet (3)</th>  
                    <th>Jumlah Perangkat / Rumah (3)</th> 
                    <th>Alokasi Budget untuk Internet (3)</th> 
                    <th>Sampling Minat (3)</th> 
                    <th>Jumlah FAT</th>
                    <th>Daftar FAT</th> 
                    <th>Keterangan</th> 
                    <th>Nilai ROI</th> 
                    <th>Score</th> 
                    <th>Kelayakan</th> 
                    <th>Status Drawing</th> 
                    <th>Link Maps</th> 
                    <th>Jumlah FAT Ploating</th> 
                    <th>Home Pass</th> 
                    <th>Aproval Pembangunan</th> 
                    <th>No PA / Project</th> 
                    <th>Status Pembangunan</th> 
                    <th>Plan Pembangunan</th> 
                    <th>Created Date</th> 
                  </tr>
                </thead>

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
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('/import') ?>">
                    <h5 class="modal-title" id="exampleModalLabel">Import CSV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="file" class="form-control" accept=".csv" id="file" placeholder="Enter file" name="file" required>
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
<div class="modal modal-blur fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
         <form action="<?= route_to('add.data'); ?>" method="post" id="add-data-form" autocomplete="off">
          <div class="row">
            <div class="col-lg-12 mb-2">
              <h2>Informasi Cluster</h2>
              <div class="form-group">
                <label for="tp_project" class="col-form-label">Tipe Project</label>
                <select class="form-select" id="tp_project" placeholder="Pilih Tipe Project" name="tp_project">
                <option value="">---Pilih Tipe Project---</option>
                    <?php foreach($tipe_project as $tp){?>
                  <option value="<?php echo $tp->tp_id;?>"><?php echo $tp->tp_jenis;?></option>"
                    <?php }?>
                </select>
              </div>   
              <div class="form-group">
                  <label for="nama" class="col-form-label">Nama Cluster</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Cluster">
                  <span class="text-danger error-text nama"></span>
              </div>
              <div class="form-group">
                  <label for="tipe_cluster" class="col-form-label">Tipe Cluster</label>
                  <select class="form-control form-select" name="tipe_cluster">
                    <option value="">---Pilih Tipe Cluster---</option>
                      <?php foreach($tipe_cluster as $tc){?>
                    <option value="<?php echo $tc->tc_id;?>"><?php echo $tc->tc_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text tipe_cluster_error"></span>
              </div>
              <div class="form-group">
                  <label for="area" class="col-form-label">Area</label>
                  <select class="form-control form-select" id="sel_area" placeholder="Pilih Area" name="area">
                    <option value="">---Pilih Area---</option>
                      <?php foreach($area as $areas){?>
                    <option value="<?php echo $areas->id_area;?>"><?php echo $areas->area_nama;?></option>"
                      <?php }?>
                  </select>
              </div>
              <div class="form-group">
                  <label for="kota" class="col-form-label">Kabupaten/Kota</label>
                  <select class="form-control form-select sel-kota" id="sel_kota" placeholder="Pilih Kabupaten/Kota" name="kota">
                    <option value="">---Pilih Kota---</option>
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
              <div class="form-group">
                  <label for="olt" class="col-form-label">OLT</label>
                  <select type="text" class="form-select" name="olt" id="sel_olt" placeholder="Pilih OLT" value="">
                  <option value="">---Pilih OLT---</option>
                      <?php foreach($olt as $olts){?>
                    <option value="<?php echo $olts->olt_id;?>"><?php echo $olts->olt_nama;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text olt_error"></span>
              </div>
              <div class="form-group">
                  <label for="ll" class="col-form-label">Longitude & Latitude</label>
                  <input type="text" class="form-control" id="ll" name="ll" placeholder="Longitude & Latitude">
                  <span class="text-danger error-text ll_error"></span>
              </div>
              <h2 class="pt-4">Survey Secara Umum</h2>
              <div class="form-group">
                  <label for="izin" class="col-form-label">Perizinan</label>
                  <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="izin" id="izin1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Mudah</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="izin" id="izin2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Sulit</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="kompetitor" class="col-form-label">Kompetitor</label>
                  <input type="number" class="form-control" id="kompetitor" name="kompetitor" min="0" max="10">
                  <span class="text-danger error-text kompetitor_error"></span>
              </div>
              <div class="form-group">
                <label for="operator" class="col-form-label">Lokal Operator</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="operator" id="operator1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="operator" id="operator2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="operator" class="col-form-label">Tiang Listrik</label>
                <div class="row">
                  <div class="col-lg-6  ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="tiang" id="tiang1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6  ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="tiang" id="tiang2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="jml_rumah" class="col-form-label">Jumlah Rumah</label>
                  <input type="number" class="form-control" id="jml_rumah" name="jml_rumah" min="0" max="1000">
                  <span class="text-danger error-text jml_rumah_error"></span>
              </div>
              <div class="form-group">
                  <label for="rmh_kosong" class="col-form-label">Rumah Kosong</label>
                  <div class="row">
                  <div class="col-lg-6">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="rmh_kosong" id="rmh_kosong1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Sedikit <10</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="rmh_kosong" id="rmh_kosong2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Banyak >10</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <!-- Fasilitas umum -->
              <div class="form-group">
                <label for="fasil" class="col-form-label">Fasilitas Umum</label>
                <div class="row">
                  <div class="col-lg-6">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="fasil" id="fasil1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="fasil" id="fasil2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="daya" class="col-form-label">Rata-rata Daya</label>
                  <select class="form-control form-select" name="daya">
                    <option value="">---Pilih Rata-rata Daya---</option>
                      <?php foreach($daya as $rd){?>
                    <option value="<?php echo $rd->rd_id;?>"><?php echo $rd->rd_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text daya_error"></span>
              </div>
            <div class="form-group">
                <label for="anak" class="col-form-label">Anak Kecil</label>
                <div class="row">
                  <div class="col-lg-6">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="anak" id="anak1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span></span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="anak" id="anak2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="kendaraan" class="col-form-label">Kendaraan</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="kendaraan" id="kendaraan1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Mobil</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="kendaraan" id="kendaraan2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Motor</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="AC" class="col-form-label">Air Conditioner</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="ac" id="ac1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="ac" id="ac2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="bisnis" class="col-form-label">Penggunaan Internet Untuk Bisnis</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="bisnis" id="bisnis1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="bisnis" id="bisnis2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="peminat" class="col-form-label">Jumlah Peminat Awal</label>
                  <input type="number" class="form-control" id="peminat" name="peminat" min="0" max="1000">
                  <span class="text-danger error-text peminat_error"></span>
              </div>
              <h2 class="pt-4">Survey Sampling Warga 1</h2>
              <div class="form-group">
                  <label for="harga" class="col-form-label">Harga ICONNET Menurut Warga</label>
                  <select class="form-control form-select" name="harga">
                    <option value="">---Pilih Harga ICONNET Menurut Warga---</option>
                      <?php foreach($survey_harga as $sh){?>
                    <option value="<?php echo $sh->sh_id;?>"><?php echo $sh->sh_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text harga_error"></span>
              </div>
              <div class="form-group">
                  <label for="internet" class="col-form-label">Penggunaan Internet</label>
                  <select class="form-control form-select" name="internet">
                    <option value="">---Pilih Penggunaan Internet---</option>
                      <?php foreach($survey_net as $sn){?>
                    <option value="<?php echo $sn->sn_id;?>"><?php echo $sn->sn_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text internet_error"></span>
              </div>
              <div class="form-group">
                  <label for="perangkat" class="col-form-label">Jumlah Perangkat / Rumah</label>
                  <input type="number" class="form-control" id="perangkat" name="perangkat" min="0" max="1000">
                  <span class="text-danger error-text perangkat_error"></span>
              </div>
              <div class="form-group">
                  <label for="budget" class="col-form-label">Alokasi Budget untuk Internet</label>
                  <select class="form-control form-select" name="budget">
                    <option value="">---Pilih Alokasi Budget---</option>
                      <?php foreach($survey_budget as $sb){?>
                    <option value="<?php echo $sb->sb_id;?>"><?php echo $sb->sb_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text budget_error"></span>
              </div>
              <div class="form-group">
                  <label for="minat" class="col-form-label">Sampling Minat</label>
                  <select class="form-control form-select" name="minat">
                    <option value="">---Pilih Sampling Minat---</option>
                      <?php foreach($survey_minat as $sm){?>
                    <option value="<?php echo $sm->sm_id;?>"><?php echo $sm->sm_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text minat_error"></span>
              </div>
              <h2 class="pt-4">Survey Sampling Warga 2</h2>
              <div class="form-group">
                  <label for="harga" class="col-form-label">Harga ICONNET Menurut Warga</label>
                  <select class="form-control form-select" name="harga2">
                    <option value="">---Pilih Harga ICONNET Menurut Warga---</option>
                      <?php foreach($survey_harga as $sh){?>
                    <option value="<?php echo $sh->sh_id;?>"><?php echo $sh->sh_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text harga2_error"></span>
              </div>
              <div class="form-group">
                  <label for="internet" class="col-form-label">Penggunaan Internet</label>
                  <select class="form-control form-select" name="internet2">
                    <option value="">---Pilih Penggunaan Internet---</option>
                      <?php foreach($survey_net as $sn){?>
                    <option value="<?php echo $sn->sn_id;?>"><?php echo $sn->sn_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text internet2_error"></span>
              </div>
              <div class="form-group">
                  <label for="perangkat" class="col-form-label">Jumlah Perangkat / Rumah</label>
                  <input type="number" class="form-control" id="perangkat2" name="perangkat2" min="0" max="1000">
                  <span class="text-danger error-text perangkat2_error"></span>
              </div>
              <div class="form-group">
                  <label for="budget" class="col-form-label">Alokasi Budget untuk Internet</label>
                  <select class="form-control form-select" name="budget2">
                    <option value="">---Pilih Alokasi Budget---</option>
                      <?php foreach($survey_budget as $sb){?>
                    <option value="<?php echo $sb->sb_id;?>"><?php echo $sb->sb_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text budget2_error"></span>
              </div>
              <div class="form-group">
                  <label for="minat" class="col-form-label">Sampling Minat</label>
                  <select class="form-control form-select" name="minat2">
                    <option value="">---Pilih Sampling Minat---</option>
                      <?php foreach($survey_minat as $sm){?>
                    <option value="<?php echo $sm->sm_id;?>"><?php echo $sm->sm_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text minat2_error"></span>
              </div>
              <h2 class="pt-4">Survey Sampling Warga 3</h2>
              <div class="form-group">
                  <label for="harga" class="col-form-label">Harga ICONNET Menurut Warga</label>
                  <select class="form-control form-select" name="harga3">
                    <option value="">---Pilih Harga ICONNET Menurut Warga---</option>
                      <?php foreach($survey_harga as $sh){?>
                    <option value="<?php echo $sh->sh_id;?>"><?php echo $sh->sh_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text harga3_error"></span>
              </div>
              <div class="form-group">
                  <label for="internet" class="col-form-label">Penggunaan Internet</label>
                  <select class="form-control form-select" name="internet3">
                    <option value="">---Pilih Penggunaan Internet---</option>
                      <?php foreach($survey_net as $sn){?>
                    <option value="<?php echo $sn->sn_id;?>"><?php echo $sn->sn_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text internet3_error"></span>
              </div>
              <div class="form-group">
                  <label for="perangkat" class="col-form-label">Jumlah Perangkat / Rumah</label>
                  <input type="number" class="form-control" id="perangkat3" name="perangkat3" min="0" max="1000">
                  <span class="text-danger error-text perangkat3_error"></span>
              </div>
              <div class="form-group">
                  <label for="budget" class="col-form-label">Alokasi Budget untuk Internet</label>
                  <select class="form-control form-select" name="budget3">
                    <option value="">---Pilih Alokasi Budget---</option>
                      <?php foreach($survey_budget as $sb){?>
                    <option value="<?php echo $sb->sb_id;?>"><?php echo $sb->sb_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text budget3_error"></span>
              </div>
              <div class="form-group">
                  <label for="minat" class="col-form-label">Sampling Minat</label>
                  <select class="form-control form-select" name="minat3">
                    <option value="">---Pilih Sampling Minat---</option>
                      <?php foreach($survey_minat as $sm){?>
                    <option value="<?php echo $sm->sm_id;?>"><?php echo $sm->sm_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text minat3_error"></span>
              </div>
              <h2 class="pt-4">Informasi Tambahan</h2>
              <div class="form-group">
                  <label for="fat" class="col-form-label">Jumlah FAT</label>
                  <input type="number" class="form-control" id="fat" name="fat" min="0" max="1000">
                  <span class="text-danger error-text fat_error"></span>
              </div>
              <div class="form-group">
                  <label for="daftar_fat" class="col-form-label">Daftar FAT</label>
                  <textarea name="daftar_fat" id="daftar_fat" cols="57" rows="4"></textarea>
                  <span class="text-danger error-text daftar_fat_error"></span>
              </div>
              <div class="form-group">
                  <label for="ket" class="col-form-label">Keterangan</label>
                  <textarea name="ket" id="ket" cols="57" rows="4"></textarea>
                  <span class="text-danger error-text ket_error"></span>
              </div>
              <h2 class="pt-4">Penilaian</h2>
              <div class="form-group">
                  <label for="roi" class="col-form-label">Nilai ROI</label>
                  <input type="number" class="form-control" id="roi" name="roi" step="0.1" min="0" max="100">
                  <span class="text-danger error-text roi_error"></span>
              </div>
              <!-- <div class="form-group">
                  <label for="score" class="col-form-label">Score</label>
                  <input type="number" class="form-control" id="score" name="score" min="0" max="100">
                  <span class="text-danger error-text score_error"></span>
              </div> -->
              <!-- <div class="form-group">
                <label for="layak" class="col-form-label">Kelayakan</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="layak" id="layak1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Layak</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="layak" id="layak2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak Layak</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div> -->
              <h2 class="pt-4">Pembangunan</h2>
              <div class="form-group">
                  <label for="drawing" class="col-form-label">Status Drawing</label>
                  <select class="form-control form-select" name="drawing">
                    <option value="">---Pilih Status Drawing---</option>
                      <?php foreach($status_drawing as $sd){?>
                    <option value="<?php echo $sd->sd_id;?>"><?php echo $sd->sd_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text drawing_error"></span>
              </div>
              <div class="form-group">
                  <label for="maps" class="col-form-label">Link Maps</label>
                  <input type="text" class="form-control" id="maps" name="maps">
                  <span class="text-danger error-text maps_error"></span>
              </div>
              <div class="form-group">
                  <label for="ploating" class="col-form-label">Jumlah FAT Ploating</label>
                  <input type="number" class="form-control" id="ploating" name="ploating" min="0" max="60">
                  <span class="text-danger error-text ploating_error"></span>
              </div>
              <div class="form-group">
                  <label for="home_pass" class="col-form-label">Home Pass</label>
                  <input type="number" class="form-control" id="home_pass" name="home_pass" min="0" max="512">
                  <span class="text-danger error-text home_pass_error"></span>
              </div>
              <div class="form-group">
                <label for="approval" class="col-form-label">Approval Pembangunan</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="approval" id="approval1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Setuju</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="approval" id="approval2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak Setuju </span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
                <!-- <input type="hidden" name="approval" value="0"> -->
              </div>
              <div class="form-group">
                <label for="planbangun" class="col-form-label">Plan Pembangunan</label>
                <div class="input-icon mb-2">
                  <input type="date" class="form-control" id="planbangun" name="planbangun" min="1997-01-01" max="2030-12-31"/>
                </div>
              </div>
              <div class="form-group">
                  <label for="no_pa" class="form-label">No PA/Project</label>
                  <input type="text" class="form-control" id="no_pa" name="no_pa">
                  <span class="text-danger error-text no_pa_error"></span>
              </div>
              <div class="form-group">
                  <label for="stts_pembangunan" class="col-form-label">Status Pembangunan</label>
                  <select class="form-control form-select" name="stts_pembangunan">
                    <option value="">---Pilih Status Pembangunan---</option>
                      <?php foreach($status_pembangunan as $sp){?>
                    <option value="<?php echo $sp->sp_id;?>"><?php echo $sp->sp_jenis;?></option>"
                      <?php }?>
                  </select>
                  <span class="text-danger error-text stts_pembangunan_error"></span>
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

<!-- Modal Edit Data -->
<div class="modal modal-blur fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
         <form action="" method="post" id="edit-data-form" autocomplete="off">
          <div class="row">
            <div class="col-lg-12 mb-2">
              <h2>Informasi Cluster</h2>
              <input type="hidden" id="edit_id">
                <div class="form-group">
                  <label for="tp_project" class="col-form-label">Tipe Project <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="tp_id">
                        <input type="text" class="form-control tp_project" id="tp_edit" name="tp_project" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text tp_project_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_tp_edit" name="tp_project">
                          <option value="">---Pilih Tipe Project---</option>
                            <?php foreach($tipe_project as $tp){?>
                          <option value="<?php echo $tp->tp_id;?>"><?php echo $tp->tp_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>
                </div>   
                <div class="form-group">
                    <label for="nama" class="col-form-label">Nama Cluster</label>
                    <input type="text" class="form-control" id="nama_edit" name="nama" placeholder="Nama Cluster">
                    <span class="text-danger error-text nama"></span>
                </div>
                <div class="form-group">
                  <label for="tipe_cluster" class="col-form-label">Tipe Cluster <span style="color:red">*</span></label>
                  <div class="row">
                    <div class="col-lg-6 ">
                    <input type="hidden" id="tc_id">
                      <input type="text" class="form-control tipe_cluster" id="tc_edit" name="tipe_cluster" readonly>
                      <span id="error_nama" class="text-danger"></span>
                      <span class="text-danger error-text tipe_cluster_error"></span>
                    </div>
                    <div class="col-lg-6 ">
                      <select class="form-control form-select" id="sel_tc_edit" name="tipe_cluster">
                        <option value="">---Pilih Tipe Cluster---</option>
                          <?php foreach($tipe_cluster as $tc){?>
                        <option value="<?php echo $tc->tc_id;?>"><?php echo $tc->tc_jenis;?></option>"
                          <?php }?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="area" class="col-form-label">Area <span style="color:red">*</span></label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <input type="text" class="form-control area" id="area_edit" name="area" readonly>
                      <span id="error_nama" class="text-danger"></span>
                      <span class="text-danger error-text area_error"></span>
                    </div>
                    <div class="col-lg-6 ">
                      <select class="form-control form-select" id="sel_area_edit" placeholder="" name="area">
                        <option value="">---Pilih Area---</option>
                          <?php foreach($area as $areas){?>
                        <option value="<?php echo $areas->id_area;?>"><?php echo $areas->area_nama;?></option>"
                          <?php }?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kota" class="col-form-label">Kabupaten/Kota <span style="color:red">*</span></label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <input type="text" class="form-control kota" id="kota_edit" name="kota" readonly>
                      <span id="error_nama" class="text-danger"></span>
                      <span class="text-danger error-text kota_error"></span>
                    </div>
                    <div class="col-lg-6 ">
                      <select class="form-control form-select" id="sel_kota_edit" name="kota">
                        <option value="">---Pilih Kabupaten/Kota---</option>
                      </select>
                    </div>
                  </div>
                </div> 
                <div class="form-group">
                  <label for="kec" class="col-form-label">Kecamatan <span style="color:red">*</span></label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <input type="text" class="form-control kec" id="kec_edit" name="kec" readonly>
                      <span id="error_nama" class="text-danger"></span>
                      <span class="text-danger error-text kec_error"></span>
                    </div>
                    <div class="col-lg-6 ">
                      <select class="form-control form-select" id="sel_kec_edit" name="kec">
                        <option value="">---Pilih Kecamatan---</option>
                      </select>
                    </div>
                  </div>
               </div>
              <div class="form-group">
                  <label for="desa" class="col-form-label">Desa/Kelurahan <span style="color:red">*</span></label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <input type="hidden" id="desa_id">
                      <input type="text" class="form-control desa" id="desa_edit" name="desa" readonly>
                      <span id="error_nama" class="text-danger"></span>
                      <span class="text-danger error-text desa_error"></span>
                    </div>
                    <div class="col-lg-6 ">
                      <select class="form-control form-select" id="sel_desa_edit" name="desa">
                        <option value="">---Pilih Desa/Kelurahan---</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <label for="olt" class="col-form-label">OLT <span style="color:red">*</span></label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <input type="hidden" id="olt_id">
                      <input type="text" class="form-control olt" id="olt_edit" name="olt" readonly>
                      <span id="error_nama" class="text-danger"></span>
                      <span class="text-danger error-text olt_error"></span>
                    </div>
                    <div class="col-lg-6 ">
                      <select class="form-control form-select" id="sel_olt_edit" name="olt">
                        <option value="">---Pilih OLT---</option>
                          <?php foreach($olt as $olts){?>
                        <option value="<?php echo $olts->olt_id;?>"><?php echo $olts->olt_nama;?></option>"
                          <?php }?>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <label for="ll" class="col-form-label">Longitude & Latitude</label>
                  <input type="text" class="form-control" id="ll_edit" name="ll" placeholder="Longitude & Latitude">
                  <span class="text-danger error-text ll_error"></span>
              </div>
              <h2 class="pt-4">Survey Secara Umum</h2>
              <div class="form-group">
                  <label for="izin_edit" class="col-form-label">Perizinan</label>
                  <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="izin_edit" id="izin_edit1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Mudah</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="izin_edit" id="izin_edit2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Sulit</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="kompetitor" class="col-form-label">Kompetitor</label>
                  <input type="number" class="form-control" id="kompetitor_edit" name="kompetitor" min="0" max="10">
                  <span class="text-danger error-text kompetitor_error"></span>
              </div>
              <div class="form-group">
                <label for="operator_edit" class="col-form-label">Lokal Operator</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="operator_edit" id="operator_edit1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="operator_edit" id="operator_edit2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="tiang_edit" class="col-form-label">Tiang Listrik</label>
                <div class="row">
                  <div class="col-lg-6  ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="tiang_edit" id="tiang_edit1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6  ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="tiang_edit" id="tiang_edit2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="jml_rumah" class="col-form-label">Jumlah Rumah</label>
                  <input type="number" class="form-control" id="jml_rumah_edit" name="jml-rumah" min="0" max="1000">
                  <span class="text-danger error-text jml_rumah_error"></span>
              </div>
              <div class="form-group">
                  <label for="rmh_kosong_edit" class="col-form-label">Rumah Kosong</label>
                  <div class="row">
                  <div class="col-lg-6">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="rmh_kosong_edit" id="rmh_kosong_edit1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Sedikit <10</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="rmh_kosong_edit" id="rmh_kosong_edit2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Banyak >10</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <!-- Fasilitas umum -->
              <div class="form-group">
                <label for="fasil_edit" class="col-form-label">Fasilitas Umum</label>
                <div class="row">
                  <div class="col-lg-6">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="fasil_edit" id="fasil_edit1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="fasil_edit" id="fasil_edit2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="daya" class="col-form-label">Rata-rata Daya <span style="color:red">*</span></label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <input type="hidden" id="daya_id">
                      <input type="text" class="form-control daya" id="daya_edit" name="daya" readonly>
                      <span id="error_nama" class="text-danger"></span>
                      <span class="text-danger error-text daya_error"></span>
                    </div>
                    <div class="col-lg-6 ">
                      <select class="form-control form-select" id="sel_daya_edit" name="daya">
                        <option value="">---Pilih Rata-rata Daya---</option>
                          <?php foreach($daya as $rd){?>
                        <option value="<?php echo $rd->rd_id;?>"><?php echo $rd->rd_jenis;?></option>"
                          <?php }?>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <label for="anak_edit" class="col-form-label">Anak Kecil</label>
                  <div class="row">
                    <div class="col-lg-6">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="anak_edit" id="anak_edit1" value="1" class="form-selectgroup-input" >
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Ada</span></span>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="anak_edit" id="anak_edit2" value="0" class="form-selectgroup-input">
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Tidak ada</span>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kendaraan_edit" class="col-form-label">Kendaraan</label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="kendaraan_edit" id="kendaraan_edit1" value="1" class="form-selectgroup-input" >
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Mobil</span>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div class="col-lg-6 ">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="kendaraan_edit" id="kendaraan_edit2" value="0" class="form-selectgroup-input">
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Motor</span>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="AC_edit" class="col-form-label">Air Conditioner</label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="ac_edit" id="ac_edit1" value="1" class="form-selectgroup-input" >
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Ada</span>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div class="col-lg-6 ">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="ac_edit" id="ac_edit2" value="0" class="form-selectgroup-input">
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Tidak ada</span>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="bisnis_edit" class="col-form-label">Penggunaan Internet Untuk Bisnis</label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="bisnis_edit" id="bisnis_edit1" value="1" class="form-selectgroup-input" >
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Ada</span>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div class="col-lg-6 ">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="bisnis_edit" id="bisnis_edit2" value="0" class="form-selectgroup-input">
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Tidak ada</span>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="peminat" class="col-form-label">Jumlah Peminat Awal</label>
                    <input type="number" class="form-control" id="peminat_edit" name="peminat" min="0" max="1000">
                    <span class="text-danger error-text peminat_error"></span>
                </div>
                <h2 class="pt-4">Survey Sampling Warga 1</h2>
                <div class="form-group">
                    <label for="harga" class="col-form-label">Harga ICONNET Menurut Warga <span style="color:red">*</span></label>
                    <div class="row">
                    <div class="col-lg-6 ">
                      <input type="hidden" id="harga1_id">
                      <input type="text" class="form-control harga" id="harga_edit" name="harga" readonly>
                      <span id="error_nama" class="text-danger"></span>
                      <span class="text-danger error-text harga_error"></span>
                    </div>
                    <div class="col-lg-6 ">
                      <select class="form-control form-select" id="sel_harga_edit" name="harga">
                        <option value="">---Pilih Harga ICONNET Menurut Warga---</option>
                          <?php foreach($survey_harga as $sh){?>
                        <option value="<?php echo $sh->sh_id;?>"><?php echo $sh->sh_jenis;?></option>"
                          <?php }?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="internet" class="col-form-label">Penggunaan Internet <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="inet1_id">
                        <input type="text" class="form-control internet" id="inet_edit" name="internet" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text internet_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_inet_edit" name="internet">
                          <option value="">---Pilih Penggunaan Internet---</option>
                            <?php foreach($survey_net as $sn){?>
                          <option value="<?php echo $sn->sn_id;?>"><?php echo $sn->sn_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="perangkat" class="col-form-label">Jumlah Perangkat / Rumah</label>
                    <input type="number" class="form-control" id="perangkat_edit" name="perangkat" min="0" max="1000">
                    <span class="text-danger error-text perangkat_error"></span>
                </div>
                <div class="form-group">
                    <label for="budget" class="col-form-label">Alokasi Budget untuk Internet <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="budget1_id">
                        <input type="text" class="form-control budget" id="budget_edit" name="budget" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text budget_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_budget_edit" name="budget">
                          <option value="">---Pilih Alokasi Budget---</option>
                            <?php foreach($survey_budget as $sb){?>
                          <option value="<?php echo $sb->sb_id;?>"><?php echo $sb->sb_jenis;?></option>"
                            <?php }?>
                       </select>
                      </div>
                    </div>    
                </div>
                <div class="form-group">
                    <label for="minat" class="col-form-label">Sampling Minat <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="minat1_id">
                        <input type="text" class="form-control minat" id="minat_edit" name="minat" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text minat_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_minat_edit" name="minat">
                          <option value="">---Pilih Sampling Minat---</option>
                            <?php foreach($survey_minat as $sm){?>
                          <option value="<?php echo $sm->sm_id;?>"><?php echo $sm->sm_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>    
                </div>
                <h2 class="pt-4">Survey Sampling Warga 2</h2>
                <div class="form-group">
                    <label for="harga" class="col-form-label">Harga ICONNET Menurut Warga <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="harga2_id">
                        <input type="text" class="form-control harga" id="harga_edit2" name="harga" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text harga_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_harga_edit2" name="harga">
                          <option value="">---Pilih Harga ICONNET Menurut Warga---</option>
                            <?php foreach($survey_harga as $sh){?>
                          <option value="<?php echo $sh->sh_id;?>"><?php echo $sh->sh_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>    
                </div>
                <div class="form-group">
                    <label for="internet" class="col-form-label">Penggunaan Internet <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="inet2_id">
                        <input type="text" class="form-control internet" id="inet_edit2" name="internet" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text internet_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_inet_edit2" name="internet">
                          <option value="">---Pilih Penggunaan Internet---</option>
                            <?php foreach($survey_net as $sn){?>
                          <option value="<?php echo $sn->sn_id;?>"><?php echo $sn->sn_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>    
                </div>
                <div class="form-group">
                    <label for="perangkat" class="col-form-label">Jumlah Perangkat / Rumah</label>
                    <input type="number" class="form-control" id="perangkat_edit2" name="perangkat2" min="0" max="1000">
                    <span class="text-danger error-text perangkat_error"></span>
                </div>
                <div class="form-group">
                    <label for="budget" class="col-form-label">Alokasi Budget untuk Internet <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="budget2_id">
                        <input type="text" class="form-control budget" id="budget_edit2" name="budget" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text budget_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_budget_edit2" name="budget">
                          <option value="">---Pilih Alokasi Budget---</option>
                            <?php foreach($survey_budget as $sb){?>
                          <option value="<?php echo $sb->sb_id;?>"><?php echo $sb->sb_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>     
                </div>
                <div class="form-group">
                    <label for="minat" class="col-form-label">Sampling Minat <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="minat2_id">
                        <input type="text" class="form-control minat" id="minat_edit2" name="minat" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text minat_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_minat_edit2" name="minat">
                          <option value="">---Pilih Sampling Minat---</option>
                            <?php foreach($survey_minat as $sm){?>
                          <option value="<?php echo $sm->sm_id;?>"><?php echo $sm->sm_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>   
                </div>
                <h2 class="pt-4">Survey Sampling Warga 3</h2>
                <div class="form-group">
                    <label for="harga" class="col-form-label">Harga ICONNET Menurut Warga <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="harga3_id">
                        <input type="text" class="form-control harga" id="harga_edit3" name="harga" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text harga_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_harga_edit3" name="harga">
                          <option value="">---Pilih Harga ICONNET Menurut Warga---</option>
                            <?php foreach($survey_harga as $sh){?>
                          <option value="<?php echo $sh->sh_id;?>"><?php echo $sh->sh_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>  
                </div>
                <div class="form-group">
                    <label for="internet" class="col-form-label">Penggunaan Internet <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="inet3_id">
                        <input type="text" class="form-control internet" id="inet_edit3" name="internet" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text internet_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_inet_edit3" name="internet">
                          <option value="">---Pilih Penggunaan Internet---</option>
                            <?php foreach($survey_net as $sn){?>
                          <option value="<?php echo $sn->sn_id;?>"><?php echo $sn->sn_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>  
                </div>
                <div class="form-group">
                    <label for="perangkat" class="col-form-label">Jumlah Perangkat / Rumah</label>
                    <input type="number" class="form-control" id="perangkat_edit3" name="perangkat3" min="0" max="1000">
                    <span class="text-danger error-text perangkat_error"></span>
                </div>
                <div class="form-group">
                    <label for="budget" class="col-form-label">Alokasi Budget untuk Internet <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="budget3_id">
                        <input type="text" class="form-control budget" id="budget_edit3" name="budget" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text budget_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_budget_edit3" name="budget">
                          <option value="">---Pilih Alokasi Budget---</option>
                            <?php foreach($survey_budget as $sb){?>
                          <option value="<?php echo $sb->sb_id;?>"><?php echo $sb->sb_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>  
                </div>
                <div class="form-group">
                    <label for="minat" class="col-form-label">Sampling Minat <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="minat3_id">
                        <input type="text" class="form-control minat" id="minat_edit3" name="minat" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text minat_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_minat_edit3" name="minat">
                          <option value="">---Pilih Sampling Minat---</option>
                            <?php foreach($survey_minat as $sm){?>
                          <option value="<?php echo $sm->sm_id;?>"><?php echo $sm->sm_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>  
                </div>
                <h2 class="pt-4">Informasi Tambahan</h2>
                <div class="form-group">
                    <label for="fat" class="col-form-label">Jumlah FAT</label>
                    <input type="number" class="form-control" id="fat_edit" name="fat" min="0" max="1000">
                    <span class="text-danger error-text fat_error"></span>
                </div>
                <div class="form-group">
                    <label for="daftar_fat" class="col-form-label">Daftar FAT</label>
                    <textarea name="daftar_fat" id="daftar_fat_edit" cols="57" rows="4"></textarea>
                    <span class="text-danger error-text daftar_fat_error"></span>
                </div>
                <div class="form-group">
                    <label for="ket" class="col-form-label">Keterangan</label>
                    <textarea name="ket" id="ket_edit" cols="57" rows="4"></textarea>
                    <span class="text-danger error-text ket_error"></span>
                </div>
                <h2 class="pt-4">Penilaian</h2>
                <div class="form-group">
                    <label for="roi" class="col-form-label">Nilai ROI</label>
                    <input type="number" class="form-control" id="roi_edit" name="roi" step="0.1" min="0" max="100">
                    <span class="text-danger error-text roi_error"></span>
                </div>
                <!-- <div class="form-group">
                    <label for="score" class="col-form-label">Score</label>
                    <input type="number" class="form-control" id="score_edit" name="score" min="0" max="100">
                    <span class="text-danger error-text score_error"></span>
                </div> -->
                <!-- <div class="form-group">
                  <label for="layak_edit" class="col-form-label">Kelayakan</label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="layak_edit" id="layak_edit1" value="1" class="form-selectgroup-input" >
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Layak</span>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div class="col-lg-6 ">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="layak_edit" id="layak_edit2" value="0" class="form-selectgroup-input">
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Tidak Layak</span>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div> -->
                <h2 class="pt-4">Pembangunan</h2>
                <div class="form-group">
                    <label for="drawing" class="col-form-label">Status Drawing <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="draw_id">
                        <input type="text" class="form-control drawing" id="draw_edit" name="drawing" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text drawing_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_draw_edit" name="drawing">
                          <option value="">---Pilih Status Drawing---</option>
                            <?php foreach($status_drawing as $sd){?>
                          <option value="<?php echo $sd->sd_id;?>"><?php echo $sd->sd_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>  
                </div>
                <div class="form-group">
                    <label for="maps" class="col-form-label">Link Maps</label>
                    <input type="text" class="form-control" id="maps_edit" name="maps">
                    <span class="text-danger error-text maps_error"></span>
                </div>
                <div class="form-group">
                    <label for="ploating" class="col-form-label">Jumlah FAT Ploating</label>
                    <input type="number" class="form-control" id="ploating_edit" name="ploating" min="0" max="60">
                    <span class="text-danger error-text ploating_error"></span>
                </div>
                <div class="form-group">
                    <label for="home_pass" class="col-form-label">Home Pass</label>
                    <input type="number" class="form-control" id="home_pass_edit" name="home_pass" min="0" max="512">
                    <span class="text-danger error-text home_pass_error"></span>
                </div>
                <div class="form-group">
                  <label for="approval_edit" class="col-form-label">Approval Pembangunan</label>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="approval_edit" id="approval_edit1" value="1" class="form-selectgroup-input" >
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Setuju</span>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div class="col-lg-6 ">
                      <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="approval_edit" id="approval_edit2" value="0" class="form-selectgroup-input">
                        <div class="form-selectgroup-label d-flex align-items-center">
                          <div class="me-4">
                            <span class="form-selectgroup-check"></span>
                          </div>
                          <div>
                            <span>Tidak Setuju </span>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="planbangun_edit" class="col-form-label">Plan Pembangunan</label>
                  <div class="input-icon mb-2">
                    <input type="date" class="form-control" id="planbangun_edit" name="planbangun_edit" placeholder="Pilih Tanggal"/>
                    
                  </div>
                </div>
                <div class="form-group">
                    <label for="no_pa" class="form-label">No PA/Project</label>
                    <input type="text" class="form-control" id="no_pa_edit" name="no_pa">
                    <span class="text-danger error-text no_pa_error"></span>
                </div>
                <div class="form-group">
                    <label for="stts_pembangunan" class="col-form-label">Status Pembangunan <span style="color:red">*</span></label>
                    <div class="row">
                      <div class="col-lg-6 ">
                        <input type="hidden" id="stts_bangun_id">
                        <input type="text" class="form-control stts_pembangunan" id="stts_bangun_edit" name="stts_pembangunan" readonly>
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text stts_pembangunan_error"></span>
                      </div>
                      <div class="col-lg-6 ">
                        <select class="form-control form-select" id="sel_stts_bangun_edit" name="stts_pembangunan">
                          <option value="">---Pilih Status Pembangunan---</option>
                            <?php foreach($status_pembangunan as $sp){?>
                          <option value="<?php echo $sp->sp_id;?>"><?php echo $sp->sp_jenis;?></option>"
                            <?php }?>
                        </select>
                      </div>
                    </div>  
                </div>   
            </div> 
          </div> 
          <p><span style="color:red">*</span><i>kosongkan jika tidak ingin diubah</i></p>
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

<!-- SEARCH DROPDOWN -->
<script src="Assets/js/tom-select/tom-select.base.min.js" defer></script>
<script>
  // @formatter:off
  //select area form tambah
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('sel_area'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  
  //select area form tambah
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('sel_area_edit'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('sel_olt'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });

  document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('sel_olt_edit'), {
      copyClassesToDropdown: false,
      dropdownClass: 'dropdown-menu ts-dropdown',
      optionClass:'dropdown-item',
      controlInput: '<input>',
      render:{
        item: function(data,escape) {
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
        option: function(data,escape){
          if( data.customProperties ){
            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
          }
          return '<div>' + escape(data.text) + '</div>';
        },
      },
    }));
  });
  // @formatter:on
</script>

<script>
  $(document).ready(function() {

    $('#add-data-form').submit(function(e) {
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

    //PILIH KOTA, KEC, DESA
    $("#tambah").click(function(){
        // setelah pilih provinsi
        $('#sel_area').change(function(){
            var area = $(this).val(); //id prov dari data
        // AJAX request
            $.ajax({
                url:'data/getKota',
                method: 'post',
                data: {area: area},
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
                url:'data/getKecamatan',
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
                url:'data/getDesa',
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

    var table = $('#tabel').DataTable({
      fixedHeader: false,
      scrollY: "600px",
      'autoWidth': false,
      'scrollX': true,
      scrollCollapse: true,
      fixedColumns: true,
      "processing": true,
      "serverSide": true,
      "ajax": "getAllData",
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
        // "width": "10%",
        "targets": 46,
        render: function (data, type, row, meta) {
          if (type === 'display') {
            data = '<a href="' + data + '" target="_blank">Link Maps</a>';
          }
          return data;
        }
      }]
    });

    var buttonCSV = new $.fn.dataTable.Buttons(table, {
      buttons: [
        {
          extend: 'csv',
          text: "Export CSV",
          className: 'btn btn-outline-primary mb-2 me-2',
        }
      ]
    }).container().appendTo($('#tombol'));
    
    var buttonExcel = new $.fn.dataTable.Buttons(table, {
      buttons: [
        {
          extend: 'excel',
          text: "Export Excel",
          className: 'btn btn-outline-primary mb-2 me-2',
        }
      ]
    }).container().appendTo($('#tombol'));

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
        url: "data/edit",
        data: {
          'edit_id': edit_id
        },
        success: function(response) {
          $.each(response, function(key, value) {
            var izin      = value['perizinan'];
            var operator  = value['lokal_operator'];
            var tiang     = value['tiang_listrik'];
            var kosong    = value['rumah_kosong'];
            var fasil     = value['fasil_umum'];
            var anak      = value['anak_kecil'];
            var kendaraan = value['kendaraan'];
            var ac        = value['ac'];
            var bisnis    = value['internet_bisnis'];
            var layak     = value['kelayakan'];
            var approv    = value['approval'];

            $('select').find('option:selected').prop('selected', false);
            
            $('#edit_id').val(value['id']);
            $('#tp_id').val(value['tipe_project']);
            $('#tc_id').val(value['tipe_cluster']);
            $('#desa_id').val(value['kelurahan']);
            $('#olt_id').val(value['olt']);
            $('#daya_id').val(value['rata_daya']);
            $('#harga1_id').val(value['harga_iconnet']);
            $('#inet1_id').val(value['penggunaan_internet']);
            $('#budget1_id').val(value['alokasi_budget']);
            $('#minat1_id').val(value['sampling_minat']);
            $('#harga2_id').val(value['harga_iconnet_2']);
            $('#inet2_id').val(value['penggunaan_internet_2']);
            $('#budget2_id').val(value['alokasi_budget_2']);
            $('#minat2_id').val(value['sampling_minat_2']);
            $('#harga3_id').val(value['harga_iconnet_3']);
            $('#inet3_id').val(value['penggunaan_internet_3']);
            $('#budget3_id').val(value['alokasi_budget_3']);
            $('#minat3_id').val(value['sampling_minat_3']);
            $('#draw_id').val(value['status_drawing']);
            $('#stts_bangun_id').val(value['status_pembangunan']);
            $('#tp_edit').val(value['tp_jenis']);
            $('#nama_edit').val(value['nama_cluster']);
            $('#tc_edit').val(value['tc_jenis']);
            $('#area_edit').val(value['area_nama']);
            $('#kota_edit').val(value['kota']);
            $('#kec_edit').val(value['kec']);
            $('#desa_edit').val(value['desa']);
            $('#olt_edit').val(value['olt_nama']);
            $('#ll_edit').val(value['longi_lati']);
            if(izin == 1) {
              $('input[name=izin_edit][value=1]').prop('checked', 'checked');
            } else if(izin == 0){
              $('input[name=izin_edit][value=0]').prop('checked', 'checked'); 
            }
            $('#kompetitor_edit').val(value['kompetitor']);
            if(operator == 1) {
              $('input[name=operator_edit][value=1]').prop('checked', 'checked');
            } else if(operator == 0){
              $('input[name=operator_edit][value=0]').prop('checked', 'checked'); 
            }
            if(tiang == 1) {
              $('input[name=tiang_edit][value=1]').prop('checked', 'checked');
            } else if(tiang == 0){
              $('input[name=tiang_edit][value=0]').prop('checked', 'checked'); 
            }
            $('#jml_rumah_edit').val(value['jumlah_rumah']);
            if(kosong == 1) {
              $('input[name=rmh_kosong_edit][value=1]').prop('checked', 'checked');
            } else if(kosong == 0){
              $('input[name=rmh_kosong_edit][value=0]').prop('checked', 'checked'); 
            }
            if(fasil == 1) {
              $('input[name=fasil_edit][value=1]').prop('checked', 'checked');
            } else if(fasil == 0){
              $('input[name=fasil_edit][value=0]').prop('checked', 'checked'); 
            }
            $('#daya_edit').val(value['rd_jenis']);
            if(anak == 1) {
              $('input[name=anak_edit][value=1]').prop('checked', 'checked');
            } else if(anak == 0){
              $('input[name=anak_edit][value=0]').prop('checked', 'checked'); 
            }
            if(kendaraan == 1) {
              $('input[name=kendaraan_edit][value=1]').prop('checked', 'checked');
            } else if(kendaraan == 0){
              $('input[name=kendaraan_edit][value=0]').prop('checked', 'checked'); 
            }
            if(ac == 1) {
              $('input[name=ac_edit][value=1]').prop('checked', 'checked');
            } else if(ac == 0){
              $('input[name=ac_edit][value=0]').prop('checked', 'checked'); 
            }
            if(bisnis == 1) {
              $('input[name=bisnis_edit][value=1]').prop('checked', 'checked');
            } else if(bisnis == 0){
              $('input[name=bisnis_edit][value=0]').prop('checked', 'checked'); 
            }
            $('#peminat_edit').val(value['jumlah_peminat']);
            $('#harga_edit').val(value['sh_jenis1']);
            $('#inet_edit').val(value['sn_jenis1']);
            $('#perangkat_edit').val(value['jml_perangkat']);
            $('#budget_edit').val(value['sb_jenis1']);
            $('#minat_edit').val(value['sm_jenis1']);
            $('#harga_edit2').val(value['sh_jenis2']);
            $('#inet_edit2').val(value['sn_jenis2']);
            $('#perangkat_edit2').val(value['jml_perangkat_2']);
            $('#budget_edit2').val(value['sb_jenis2']);
            $('#minat_edit2').val(value['sm_jenis2']);
            $('#harga_edit3').val(value['sh_jenis3']);
            $('#inet_edit3').val(value['sn_jenis3']);
            $('#perangkat_edit3').val(value['jml_perangkat_3']);
            $('#budget_edit3').val(value['sb_jenis3']);
            $('#minat_edit3').val(value['sm_jenis3']);
            $('#fat_edit').val(value['jumlah_fat']);
            $('#daftar_fat_edit').val(value['daftar_fat']);
            $('#ket_id').val(value['ket']);
            $('#roi_edit').val(value['nilai_roi']);
            // $('#score_edit').val(value['score']);
            // if(layak == 1) {
            //   $('input[name=layak_edit][value=1]').prop('checked', 'checked');
            // } else if(layak == 0){
            //   $('input[name=layak_edit][value=0]').prop('checked', 'checked'); 
            // }
            $('#draw_edit').val(value['sd_jenis']);
            if(approv == 1) {
              $('input[name=approval_edit][value=1]').prop('checked', 'checked');
            } else if(approv == 0){
              $('input[name=approval_edit][value=0]').prop('checked', 'checked'); 
            }
            $('#maps_edit').val(value['maps']);
            $('#ploating_edit').val(value['jml_fat_ploating']);
            $('#home_pass_edit').val(value['home_pass']);
            $('#no_pa_edit').val(value['no_pa']);
            $('#stts_bangun_edit').val(value['sp_jenis']);
            $('#planbangun_edit').val(value['plan_pembangunan']);
            $('#editModal').modal('show');
          });
        }
      });
      
      // setelah pilih provinsi
      $('#sel_area_edit').change(function(){
            var area = $(this).val(); //id prov dari data
        // AJAX request
            $.ajax({
                url:'data/getKota',
                method: 'post',
                data: {area: area},
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
                url:'data/getKecamatan',
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
                url:'data/getDesa',
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

    $(document).on('click', '.btn-update', function(e) {
      e.preventDefault();
      
      $.ajax({
        method: "post",
        url: "data/update",
        data: {
          'edit_id': $('#edit_id').val(),
          'tipe_project': ($('#sel_tp_edit').val() != "") ? $('#sel_tp_edit').val() : $('#tp_id').val(),
          'nama_cluster': $('#nama_edit').val(),
          'tipe_cluster': ($('#sel_tc_edit').val() != "") ? $('#sel_tc_edit').val() : $('#tc_id').val(),
          'desa': ($('#sel_desa_edit').val() != "") ? $('#sel_desa_edit').val() : $('#desa_id').val(),
          'olt': ($('#sel_olt_edit').val() != "") ? $('#sel_olt_edit').val() : $('#olt_id').val(),
          'longi_lati': $('#ll_edit').val(),
          'izin': $("input[name='izin_edit']:checked").val(),
          'kompetitor': $('#kompetitor_edit').val(),
          'lokal_operator': $("input[name='operator_edit']:checked").val(),
          'tiang_listrik': $("input[name='tiang_edit']:checked").val(),
          'jumlah_rumah': $('#jml_rumah_edit').val(),
          'rumah_kosong': $("input[name='rmh_kosong_edit']:checked").val(),
          'fasil_umum': $("input[name='fasil_edit']:checked").val(),
          'rata_daya': ($('#sel_daya_edit').val() != "") ? $('#sel_daya_edit').val() : $('#daya_id').val(),
          'anak_kecil': $("input[name='anak_edit']:checked").val(),
          'kendaraan': $("input[name='kendaraan_edit']:checked").val(),
          'ac': $("input[name='ac_edit']:checked").val(),
          'internet_bisnis': $("input[name='bisnis_edit']:checked").val(),
          'jumlah_peminat': $('#peminat_edit').val(),
          'harga_iconnet': ($('#sel_harga_edit').val() != "") ? $('#sel_harga_edit').val() : $('#harga1_id').val(),
          'penggunaan_internet': ($('#sel_inet_edit').val() != "") ? $('#sel_inet_edit').val() : $('#inet1_id').val(),
          'jml_perangkat': $('#perangkat_edit').val(),
          'alokasi_budget': ($('#sel_budget_edit').val() != "") ? $('#sel_budget_edit').val() : $('#budget1_id').val(),
          'sampling_minat': ($('#sel_minat_edit').val() != "") ? $('#sel_minat_edit').val() : $('#minat1_id').val(),
          'harga_iconnet_2': ($('#sel_harga_edit2').val() != "") ? $('#sel_harga_edit2').val() : $('#harga2_id').val(),
          'penggunaan_internet_2': ($('#sel_inet_edit2').val() != "") ? $('#sel_inet_edit2').val() : $('#inet2_id').val(),
          'jml_perangkat_2': $('#perangkat_edit2').val(),
          'alokasi_budget_2': ($('#sel_budget_edit2').val() != "") ? $('#sel_budget_edit2').val() : $('#budget2_id').val(),
          'sampling_minat_2': ($('#sel_minat_edit2').val() != "") ? $('#sel_minat_edit2').val() : $('#minat2_id').val(),
          'harga_iconnet_3': ($('#sel_harga_edit3').val() != "") ? $('#sel_harga_edit3').val() : $('#harga3_id').val(),
          'penggunaan_internet_3': ($('#sel_inet_edit3').val() != "") ? $('#sel_inet_edit3').val() : $('#inet3_id').val(),
          'jml_perangkat_3': $('#perangkat_edit3').val(),
          'alokasi_budget_3': ($('#sel_budget_edit3').val() != "") ? $('#sel_budget_edit3').val() : $('#budget3_id').val(),
          'sampling_minat_3': ($('#sel_minat_edit3').val() != "") ? $('#sel_minat_edit3').val() : $('#minat3_id').val(),
          'jumlah_fat': $('#fat_edit').val(),
          'daftar_fat': $('#daftar_fat_edit').val(),
          'ket': $('#ket_edit').val(),
          'nilai_roi': $('#roi_edit').val(),
          // 'score': $('#score_edit').val(),
          // 'kelayakan': $("input[name='layak_edit']:checked").val(),
          'status_drawing': ($('#sel_draw_edit').val() != "") ? $('#sel_draw_edit').val() : $('#draw_id').val(),
          'maps': $('#maps_edit').val(),
          'jml_fat_ploating': $('#ploating_edit').val(),
          'home_pass': $('#home_pass_edit').val(),
          'approval': $("input[name='approval_edit']:checked").val(),
          'no_pa': $('#no_pa_edit').val(),
          'status_pembangunan': ($('#sel_stts_bangun_edit').val() != "") ? $('#sel_stts_bangun_edit').val() : $('#stts_bangun_id').val(),
          'plan_pembangunan': $('#planbangun_edit').val(),
        },
        success: function(response) {
          if (response.status == "Data berhasil diupdate") {
            $('#editModal').modal('hide');
            $('#tabel').DataTable().ajax.reload(null, false);

            swal.fire("Berhasil", response.status, "success");
          } else {
            swal.fire("Gagal", response.status, "error");
          }
        }
      });
      e.preventDefault();
    });

    $(document).on('click', '#deleteDataBtn', function() {
      var id = $(this).data('id');
      var url = "<?= route_to('delete.data'); ?>";

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


    $(document).on('click', '.btn-ubah', function(e) {
      e.preventDefault();
      var data = {
        'edit_user': $('#edit_prof').val(),
        'user_name': $('#name').val(),
        'user_password': $('#password1').val(),
        'user_password': $('#password2').val(),
      };
      $.ajax({
        method: "post",
        url: "profile/update",
        data: data,
        success: function(response) {
          if (response.status == "Data berhasil diupdate") {
           
            $('#tabel').DataTable().ajax.reload(null, false);

            swal.fire("Berhasil", "profil berhasil diubah", "success");
          } else {
            swal.fire("Gagal", "profil gagal diubah", "error");
          }
        }
      });
      e.preventDefault();
    });

  });
</script>
