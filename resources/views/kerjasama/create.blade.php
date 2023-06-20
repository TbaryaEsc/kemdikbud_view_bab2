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

        <form action="{{ route('kerjasama.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <hr class="solid">
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">RINGKASAN MOU*</label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="menu-bar">
                            <div class="menu-item">File</div>
                            <div class="menu-item" role="button" href="#">Edit</div>
                            <div class="menu-item">View</div>
                            <div class="menu-item">Format</div>
                          </div>
                          <textarea name="ringkasanmou" id="inputRingkasMou" class="form-control" rows="4">{{ old('ringkasanmou') }}</textarea>
                      </div>
                      @error('ringkasanmou')
                         <span class="text-danger">{{ $message }}</span>
                      @endif
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
                              <textarea name="nomormoa" class="form-control"  placeholder="No MOA" id="nomor" style="height: 100px">{{ old('nomormoa') }}</textarea>
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="deskripsimoa" id="inputDeskripsiMou" class="form-control" rows="4">{{ old('deskripsimoa') }}</textarea>
                            </div>
                            @error('deskripsimoa')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
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
                              <input type="date" name="tglmulaimoa" class="form-control" id="inputEmail4" placeholder="Tanggal dimulai MOA" value="{{ old('tglmulaimoa') }}">
                              @error('tglmulaimoa')
                                 <span class="text-danger">{{ $message }}</span>
                              @endif
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">Tanggal Berakhir MOA</label>
                              <input type="date" name="tglberakhirmoa" class="form-control" id="inputPassword4" placeholder="Tanggal Berakhir MOA" value="{{ old('tglberakhirmoa') }}">
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="misiprogram" id="misiprogram" class="form-control" rows="4">{{ old('misiprogram') }}</textarea>
                              @error('misiprogram')
                                <span class="text-danger">{{ $message }}</span>
                              @endif
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="targetprogram" id="targetprogram" class="form-control" rows="4">{{ old('targetprogram') }}</textarea>
                              @error('targetprogram')
                                <span class="text-danger">{{ $message }}</span>
                              @endif
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="alasanmitra" id="alasanmitra" class="form-control" rows="4">{{ old('alasanmitra') }}</textarea>
                              @error('alasanmitra')
                                <span class="text-danger">{{ $message }}</span>
                              @endif
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="prinsipkerjasama" id="prinsipkerjasama" class="form-control" rows="4">{{ old('prinsipkerjasama') }}</textarea>
                              @error('prinsipkerjasama')
                                <span class="text-danger">{{ $message }}</span>
                              @endif
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="manfaatkerjasama" id="manfaatkerjasama" class="form-control" rows="4">{{ old('manfaatkerjasama') }}</textarea>
                              @error('manfaatkerjasama')
                                <span class="text-danger">{{ $message }}</span>
                              @endif
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="tantanganpelaksanaan" id="tantanganpelaksanaan" class="form-control" rows="4">{{ old('tantanganpelaksanaan') }}</textarea>
                              @error('tantanganpelaksanaan')
                                <span class="text-danger">{{ $message }}</span>
                              @endif
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="kepemilikanhakcipta" id="kepemilikanhakcipta" class="form-control" rows="4">{{ old('kepemilikanhakcipta') }}</textarea>
                              @error('kepemilikanhakcipta')
                                <span class="text-danger">{{ $message }}</span>
                              @endif
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="mekanismeresipokal" id="mekanismeresipokal" class="form-control" rows="4">{{ old('mekanismeresipokal') }}</textarea>
                              @error('mekanismeresipokal')
                                <span class="text-danger">{{ $message }}</span>
                              @endif
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="keberlanjutankerjasama" id="keberlanjutankerjasama" class="form-control" rows="4">{{ old('keberlanjutankerjasama') }}</textarea>
                              @error('keberlanjutankerjasama')
                                <span class="text-danger">{{ $message }}</span>
                              @endif
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
                                <div class="menu-item" role="button" href="#">Edit</div>
                                <div class="menu-item">View</div>
                                <div class="menu-item">Format</div>
                              </div>
                              <textarea name="hakdankewajiban" id="hakdankewajiban" class="form-control" rows="4">{{ old('hakdankewajiban') }}</textarea>
                              @error('hakdankewajiban')
                                <span class="text-danger">{{ $message }}</span>
                              @endif
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
                              <input class="form-check-input" type="radio" name="haktercantum" id="haktercantum" value="ya">
                              <label class="form-check-label" for="haktercantum">
                                Ya
                              </label>                            
                            </div>
                            <!-- checked -->
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="haktercantum" id="haktercantum1" value="tidak">
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
  
              <div class="d-flex flex-row-reverse bd-highlight">
                  <button type="submit" class="btn btn-success">SIMPAN & LANJUTKAN </button>
              </div>

        </form>

    </div>
</div>            
    
@endsection