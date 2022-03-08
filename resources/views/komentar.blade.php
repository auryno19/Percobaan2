@extends('layouts.main')

@section('isi')
<div class="container">
    <div class="row justify-content-center mt-6">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header mb-0"><h5 class="text-center">Silahkan Berkomentar</h5></div>
          <div class="card-body">
            <form action="/komentar" class="row g-3">
                <div class="col-md-6">
                    <label for="inputNama1" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" id="inputNama1">
                  </div>
                  <div class="col-md-6">
                    <label for="inputNama2" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="inputNama1">
                  </div>
                  <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="example.eg.com">
                  </div>
                  <div class="mb-3">
                    <label for="komentar" class="form-label">Komentar</label>
                    <textarea class="form-control" id="komentar" rows="4"></textarea>
                  </div>
                <div class="d-grid gap-2">
                    <input type="submit" name="" value="Kirim" class="btn btn-success btn-block">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection