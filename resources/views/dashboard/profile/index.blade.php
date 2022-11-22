@extends('dashboard.layout')

@section('konten')
   
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="col-5">
                <p class="card-title">Profil Pengguna</p>
                @if (get_meta_value('_foto'))
                    <img style="max-width:100px;max-height:100px" src="{{ asset('foto'). '/' .get_meta_value('_foto') }}"
                @endif
                <div class="mb-3">
                    <label for="_foto" class="form-label">Foto</label>
                    <input type="file" class="form-control form-control-sm" name="_foto" id="_foto" >
                </div>
                <div class="mb-3">
                    <label for="_kota" class="form-label">Kota</label>
                    <input type="text" class="form-control form-control-sm" name="_kota" id="_kota" placeholder="Nama Kota" value="{{ get_meta_value('_kota') }}">
                </div>
                <div class="mb-3">
                    <label for="_provisi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control form-control-sm" name="_provinsi" id="_provinsi" placeholder="Nama Provinsi" value="{{ get_meta_value('_provinsi') }}">
                </div>
                <div class="mb-3">
                    <label for="_nohp" class="form-label">No Handphone</label>
                    <input type="text" class="form-control form-control-sm" name="_nohp" id="_nohp" placeholder="Nomor Handphone" value="{{ get_meta_value('_nohp') }}">
                </div>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" name="_email" id="_email" placeholder="Alamat Email" value="{{ get_meta_value('_email') }}">
                </div>
            </div>
            <div class="col-5">
                <h3>Akun Sosial Media</h3>
                <div class="mb-3">
                    <label for="_facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control form-control-sm" name="_facebook" id="_facebook" placeholder="Akun Facebook" value="{{ get_meta_value('_facebook') }}">
                </div>
                <div class="mb-3">
                    <label for="_twitter" class="form-label">Twitter</label>
                    <input type="text" class="form-control form-control-sm" name="_twitter" id="_twitter" placeholder="Akun Twitter" value="{{ get_meta_value('_twitter') }}">
                </div>
                <div class="mb-3">
                    <label for="_linkedin" class="form-label">Linked In</label>
                    <input type="text" class="form-control form-control-sm" name="_linkedin" id="_linkedin" placeholder="Akun Linked In" value="{{ get_meta_value('_linkedin') }}">
                </div>
                <div class="mb-3">
                    <label for="_github" class="form-label">Github</label>
                    <input type="text" class="form-control form-control-sm" name="_github" id="_github" placeholder="Akun Github" value="{{ get_meta_value('_github') }}">
                </div>

            </div>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection 
