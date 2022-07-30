<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Codeigniter 4 Ajax Dependent Dropdown List - Tutsmake.COM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <form action="<?= route_to('add.employee'); ?>" method="post" id="add-employee-form" autocomplete="off">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success">Pilih wilayah</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="country">Provinsi</label>
                                <select class="form-control" id="sel_prov">
                                    <option value="">Pilih provinsi</option>
                                        <?php foreach($prov as $provinsi){?>
                                    <option data="<?php echo $provinsi->id;?>" value="<?php echo $provinsi->id;?>"><?php echo $provinsi->name;?></option>"
                                        <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="state">Kabupaten/Kota</label>
                                <select class="form-control" id="sel_kota">
                                    <option value="">Pilih Kabupaten/Kota</option>
                                </select>
                            </div>                        
                            <div class="form-group">
                                <label for="provinsi">Kecamatan</label>
                                <select class="form-control" id="sel_kec">
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Desa/Kelurahan</label>
                                <select class="form-control" id="sel_desa">
                                    <option value="">Pilih Desa/Kelurahan</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="btn-save">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script type='text/javascript'>
        $(document).ready(function(){
            // setelah pilih provinsi
            $('#sel_prov').change(function(){
                var prov = $(this).attr('data');
            // AJAX request
                $.ajax({
                    url:'wilayah/getKota',
                    method: 'post',
                    data: {'prov': prov},
                    dataType: 'json',
                    success: function(response){
                    // Remove options 
                        $('#sel_kec').find('option').not(':first').remove();
                        $('#sel_kota').find('option').not(':first').remove();
                        $('#sel_desa').find('option').not(':first').remove();
                    // Add options
                        $.each(response,function(index,data){
                            
                            $('#sel_kota').append('<option value="'+data['id']+'">'+data['name']+'</option>');
                        });
                    }
                });
            });
            // Setelah pilih kota
            $('#sel_kota').change(function(){
                var kota = $(this).val();
                // AJAX request
                $.ajax({
                    url:'wilayah/getKecamatan',
                    method: 'post',
                    data: {kota: kota},
                    dataType: 'json',
                    success: function(response){
                    // Remove options
                        $('#sel_kec').find('option').not(':first').remove();
                        $('#sel_desa').find('option').not(':first').remove();
                        // Add options
                        $.each(response,function(index,data){
                            $('#sel_kec').append('<option value="'+data['id']+'">'+data['name']+'</option>');
                        });
                    }
                });
            });

            //Setelah pilih kecamatan
            $('#sel_kec').change(function(){
                var kec = $(this).val();
                // AJAX request
                $.ajax({
                    url:'wilayah/getDesa',
                    method: 'post',
                    data: {kec: kec},
                    dataType: 'json',
                    success: function(response){
                    // 
                    $('#sel_desa').find('option').not(':first').remove();
                        // Add options
                        $.each(response,function(index,data){
                            $('#sel_desa').append('<option value="'+data['id']+'">'+data['name']+'</option>');
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>