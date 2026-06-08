@extends('template')
@section('title', 'Edit Data Buku')
@section('konten')
    <a href="/buku" class="btn btn-secondary mb-3"> Kembali</a>

    <div class="card">
        <div class="card-body">
            @foreach($buku as $b)
            <form action="/buku/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $b->kodebuku }}">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Merk Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkbuku" class="form-control" required="required" value="{{ $b->merkbuku }}">
                    </div>
                </div>
                <br />
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Stock Buku</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockbuku" class="form-control" required="required" value="{{ $b->stockbuku }}">
                    </div>
                </div>
                <br />
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ketersediaan</label>
                    <div class="col-sm-10 d-flex align-items-center">
                        <div class="form-check form-switch p-0 position-relative" style="width: 75px; height: 30px;">
                            <input class="form-check-input m-0" type="checkbox" name="tersedia" id="bukuSwitch" value="Y" {{ $b->tersedia == 'Y' ? 'checked' : '' }}
                                   style="width: 100%; height: 100%; cursor: pointer;
                                          background-color: {{ $b->tersedia == 'Y' ? '#28a745' : '#dc3545' }};
                                          border-color: {{ $b->tersedia == 'Y' ? '#28a745' : '#dc3545' }}; border-radius: 30px;"
                                   onchange="
                                       let txt = document.getElementById('switchText');
                                       if(this.checked){
                                           this.style.backgroundColor='#28a745'; this.style.borderColor='#28a745';
                                           txt.innerText='Ada'; txt.style.left='12px'; txt.style.right='auto';
                                       }else{
                                           this.style.backgroundColor='#dc3545'; this.style.borderColor='#dc3545';
                                           txt.innerText='Kosong'; txt.style.right='10px'; txt.style.left='auto';
                                       }
                                   ">
                            @if($b->tersedia == 'Y')
                                <span id="switchText" class="position-absolute text-white font-weight-bold small"
                                      style="left: 12px; top: 50%; transform: translateY(-50%); pointer-events: none; font-size: 11px;">Ada</span>
                            @else
                                <span id="switchText" class="position-absolute text-white font-weight-bold small"
                                      style="right: 10px; top: 50%; transform: translateY(-50%); pointer-events: none; font-size: 11px;">Kosong</span>
                            @endif
                        </div>
                    </div>
                </div>
                <br />
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <input type="submit" class="btn btn-warning" value="Simpan Perubahan">
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
@endsection
