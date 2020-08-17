@extends('other.admin_template1')
@section('content')

<style>
    .cus-num ::-webkit-outer-spin-button, .cus-num::-webkit-inner-spin-button {
  -webkit-appearance: none; 
    }

    .cus-num {
  -moz-appearance: textfield;

    }
</style>

<div class="col-12 stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-primary">Pengaturan Utama</h2>
        <div class="forms-sample">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tentang</label>
                <textarea class="form-control" id="tentang" rows="5">{{ $main_info->tentang }}</textarea>
            </div>
            <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Luas Wilayah</label>
                <div class="col-4">
                    <input type="number" class="form-control cus-num" id="luas" placeholder="Luas harus berisi angka" min="0" value="{{ $main_info->luas }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Jumlah Penduduk</label>
                <div class="col-4">
                    <input type="number" class="form-control cus-num" id="jumlah" placeholder="Jumlah harus berisi angka" min="0" value="{{ $main_info->jumlah_penduduk }}">
                </div>
            </div>

            <hr>
            
            <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                <div class="col-9">
                    <input type="text" class="form-control cus-num" id="alamat" placeholder="Alamat di isi selengkap - lengkapnya" value="{{ $main_info->alamat }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Nomor Telepon</label>
                <div class="col-9">
                    <input type="text" class="form-control cus-num" id="nomor_telepon" placeholder="Nomor Telepon" value="{{ $main_info->nomor_telepon }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Email</label>
                <div class="col-9">
                    <input type="text" class="form-control cus-num" id="email" placeholder="Alamat email" value="{{ $main_info->email }}">
                </div>
            </div>
            <button id="update" class="btn btn-success mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#update').click(function(){
            
            var tentang = $('#tentang').val();
            var luas = $('#luas').val();
            var jumlah = $('#jumlah').val();

            var alamat = $('#alamat').val();
            var nomor_telepon = $('#nomor_telepon').val();
            var email = $('#email').val();
            // alert(tentang);

            $.ajax({
		        url : "/ajax/updata/home",
		        type : 'POST',
		        data : {"_token": "{{ csrf_token() }}", "tentang": tentang , "luas": luas , "jumlah": jumlah , "alamat": alamat , "nomor_telepon": nomor_telepon , "email": email },
		        success:function(data){

		        }
            });
            // location.reload();
        });
    });
</script>
@endsection