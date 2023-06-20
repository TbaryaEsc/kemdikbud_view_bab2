@extends('layout.index')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success alert-solid" role="alert"><b>Data Kerjasama</b> {{ Session::get('success') }}</div>  
@endif 

@include('kerjasama.daftar')
<style>
    .menu-bar {
        display: flex;
        padding: 10px;
        border: 1px solid lightgray;
        background-color: white;
        border-bottom: 1px solid lightgray;
    }
    .menu-item {
        margin-right: 10px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        background-color: #00BFFF;
      
    }
    th, td {
        padding: 8px;
        color: black;
    }
    .image-container {
        display: inline-block;
        justify-content: center;
        align-items: center;
        height: 110px;
        flex-direction: column;
    }

    .fp-thumbnail {
        width: 90px;
        height: 90px;
        text-align: center;
    }

    .fp-thumbnail img {
        max-width: 100%;
        max-height: 100%;
    }

    .fp-filename-field {
        text-align: center;
    }

    .fp-filename {
        width: 300px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .box {
        display: flex;
        align-items: center;
        border: 1px solid lightgrey;
        height: 200px;
        background-color: white;
    }

</style>

<!-- Content Row -->
<div class="card">   
    <div class="card-header">
        <b>BAB 2. DOKUMEN KERJASAMA</b>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">No Berkas</div>
            <div class="col-sm-8">: 2305140001.1</div>
            <div class="col-sm-4">Judul Kerma</div>
            <div class="col-sm-8">: Gelar Ganda ( Double Degree ) Universitas Halu Oleo S2 Perternakan Dengan PT. ABC Perternakan Unpad</div>
        </div>   
        <br/>
        <body>
            <table>
                <tr>
                <th style="text-align: center; ">MOU & MOA</th>
                </tr>
            </table>
        </body>
        <form action="{{ url('kerjasama',$id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <hr class="solid">
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label">RINGKASAN MOU*</label>
              <div class="col-sm-8">
                    <div class="mb-3">
                        <div class="menu-bar">
                            <div class="menu-item">File</div>
                            <div class="menu-item">Edit</div>
                            <div class="menu-item">View</div>
                            <div class="menu-item">Format</div>
                        </div>
                        <div class="box">
                            <div class="image-container">
                                <div class="fp-thumbnail">
                                    <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                </div>
                                <div class="fp-filename-field">
                                    <div class="fp-filename" link=>
                                        <a href="{{ $ringkasanmou }}" target="_blank">{{ $ringkasanmou }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <hr/>                     

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">UNGGAH FILE MOU</label>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">NO MOA*</label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="nomormoa" class="form-control"  placeholder="No MOA" id="nomor" style="height: 100px" readonly>{{ $nomormoa }}</textarea>
                          </div>
                          @error('nomormoa')
                                <span class="text-danger">{{ $message }}</span>
                          @endif
                      </div>
                </div>
            </div>            
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">DESKRIPSI SINGKAT MOA*</label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $deskripsimoa }}" target="_blank">{{ $deskripsimoa }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Tanggal</label>
                <div class="col-sm-8">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-6">
                            <label class="form-label">Tanggal Dimulai MOA</label>
                            <input type="date" name="tglmulaimoa" class="form-control" id="inputEmail4" placeholder="Tanggal dimulai MOA" value="{{ $tglmulaimoa }}" readonly>
                            @error('tglmulaimoa')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tanggal Berakhir MOA</label>
                            <input type="date" name="tglberakhirmoa" class="form-control" id="inputPassword4" placeholder="Tanggal Berakhir MOA" value="{{ $tglberakhirmoa }}" readonly>
                            @error('tglberakhirmoa')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                        </div>
                     </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">UNGGAH FILE MOA</label>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">MISI PROGRAM KERJA SAMA* </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $misiprogram }}" target="_blank">{{ $misiprogram }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">TARGET PROGRAM KERJA SAMA* </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $targetprogram }}" target="_blank">{{ $targetprogram }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">ALASAN PEMILIHAN MITRA* </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $alasanmitra }}" target="_blank">{{ $alasanmitra }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">PRINSIP KERJA SAMA* </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $prinsipkerjasama }}" target="_blank">{{ $prinsipkerjasama }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">MANFAAT KERJA SAMA* </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $manfaatkerjasama }}" target="_blank">{{ $manfaatkerjasama }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">TANTANGAN PLELAKSANAAN KERJA SAMA* </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $tantanganpelaksanaan }}" target="_blank">{{ $tantanganpelaksanaan }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">KEPEMILIKAN HAK CIPTA DAN ATAU PATEN* </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $kepemilikanhakcipta }}" target="_blank">{{ $kepemilikanhakcipta }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">MEKANISME RESIPOKAL* </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $mekanismeresipokal }}" target="_blank">{{ $mekanismeresipokal }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">KEBERLANJUTAN KERJA SAMA*  </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $keberlanjutankerjasama }}" target="_blank">{{ $keberlanjutankerjasama }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">HAK DAN KEWAJIBAN* </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <div class="menu-bar">
                                <div class="menu-item">File</div>
                                <div class="menu-item">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                            </div>
                            <div class="box">
                                <div class="image-container">
                                    <div class="fp-thumbnail">
                                        <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                    </div>
                                    <div class="fp-filename-field">
                                        <div class="fp-filename" link=>
                                            <a href="{{ $hakdankewajiban }}" target="_blank">{{ $hakdankewajiban }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">HAK TERCANTUM </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                           <label class="col-sm-8 col-form-label">Apakah hal tersebut tercantum dalam MOA? </label>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="haktercantum" id="haktercantum"  value="ya"  {{ ($haktercantum == "ya") ? 'checked' : ' '; }} readonly>
                            <label class="form-check-label" for="haktercantum">
                              Ya
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="haktercantum" id="haktercantum1"  value="tidak" {{ ($haktercantum == "tidak") ? 'checked' : ' '; }} readonly>
                            <label class="form-check-label" for="haktercantum1">
                              Tidak
                            </label>
                          </div>  
                          @error('haktercantum')
                                <span class="text-danger">{{ $message }}</span>
                          @endif              
                      </div>
                </div>
            </div>
            <hr/>
            <div class="col-xl-12" style="padding-right: 43px;">
                <a class="btn btn-success btn-icon-split" role="button" style="margin-left: 1340px;background: #172b4c;" href="{{ route('bab1') }}">
                    <span class="text-white text" style="padding-right: 14px;">Kembali</span>
                </a>
                <a class="btn btn-success btn-icon-split" role="button" style="margin-left: 1435px;margin-top: -38px;margin-bottom: 38px;" href="{{ route('bab3') }}">
                    <span class="text-white text" style="padding-right: 14px;">Lanjutkan</span>
                </a>
            </div>

        </form>

    </div>
</div>            
    
@endsection