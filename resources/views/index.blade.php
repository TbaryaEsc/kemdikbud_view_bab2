<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrate Summernote in PHP/HTML</title>

    <!-- Bootstrap 5 CDN Link -->
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Summernote CSS - CDN Link -->
    <link href="{{ asset('/') }}assets/dist/summernote-0.8.18-dist/summernote.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/dist/summernote-0.8.18-dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->

</head>
<body>

    <div class="mt-5">
        <div class="container">
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
                    <div class="alert alert-primary text-center" role="alert">
                       <b>MOU & MOA</b>
                    </div>

                    <form>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label">RINGKASAN MOU</label>
                          <div class="col-sm-8">
                                <div class="mb-3">
                                    <textarea name="ringkasanmou" id="inputRingkasMou" class="form-control" rows="4"></textarea>
                                </div>
                          </div>
                        </div>
                        <hr/>                     

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">UNGGAH FILE MOU</label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                     <input name="filemou" class="form-control" type="file" id="formFile">
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">NO MOA</label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="nomormoa" class="form-control"  placeholder="Leave a comment here" id="nomor" style="height: 100px"></textarea>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">DESKRIPSI SINGKAT MOA</label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="deskripsimoa" id="inputDeskripsiMou" class="form-control" rows="4"></textarea>
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
                                        <input type="text" name="tglmulaimoa" class="form-control" id="inputEmail4" placeholder="Tanggal dimulai MOA">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Tanggal Berakhir MOA</label>
                                        <input type="text" name="tglberakhirmoa" class="form-control" id="inputPassword4" placeholder="Tanggal Berakhir MOA">
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">UNGGAH FILE MOA</label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                     <input name="filemoa" class="form-control" type="file" id="formFile">
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">MISI PROGRAM KERJA SAMA </label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="misiprogram" id="misiprogram" class="form-control" rows="4"></textarea>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">TARGET PROGRAM KERJA SAMA </label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="targetprogram" id="targetprogram" class="form-control" rows="4"></textarea>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">ALASAN PEMILIHAN MITRA </label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="alasanmitra" id="alasanmitra" class="form-control" rows="4"></textarea>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">PRINSIP KERJA SAMA </label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="prinsipkerjasama" id="prinsipkerjasama" class="form-control" rows="4"></textarea>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">MANFAAT KERJA SAMA </label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="manfaatkerjasama" id="manfaatkerjasama" class="form-control" rows="4"></textarea>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">TANTANGAN PLELAKSANAAN KERJA SAMA </label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="tantanganpelaksanaan" id="tantanganpelaksanaan" class="form-control" rows="4"></textarea>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">KEPEMILIKAN HAK CIPTA DAN ATAU PATEN </label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="kepemilikanhakcipta" id="kepemilikanhakcipta" class="form-control" rows="4"></textarea>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">MEKANISME RESIPOKAL </label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="mekanismeresipokal" id="mekanismeresipokal" class="form-control" rows="4"></textarea>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">KEBERLANJUTAN KERJA SAMA  </label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="keberlanjutankerjasama" id="keberlanjutankerjasama" class="form-control" rows="4"></textarea>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">HAK DAN KEWAJIBAN </label>
                            <div class="col-sm-8">
                                  <div class="mb-3">
                                      <div class="form-floating">
                                        <textarea name="hakdankewajiban" id="hakdankewajiban" class="form-control" rows="4"></textarea>
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
                                        <input class="form-check-input" type="radio" name="haktercantum" id="haktercantum">
                                        <label class="form-check-label" for="haktercantum">
                                          Ya
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="haktercantum" id="haktercantum1" checked>
                                        <label class="form-check-label" for="haktercantum1">
                                          Tidak
                                        </label>
                                      </div>
                            
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
        </div>
    </div>
    
    
    
 

    <script src="{{ asset('/') }}assets/jquery-3.6.0.min.js""></script>
    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="{{ asset('/') }}assets/dist/summernote-0.8.18-dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#inputRingkasMou").summernote();
            $("#inputDeskripsiMou").summernote();
            $("#misiprogram").summernote();
            $("#targetprogram").summernote();
            $("#alasanmitra").summernote();
            $("#prinsipkerjasama").summernote();
            $("#manfaatkerjasama").summernote();
            $("#tantanganpelaksanaan").summernote();
            $("#kepemilikanhakcipta").summernote();
            $("#mekanismeresipokal").summernote();
            $("#keberlanjutankerjasama").summernote();
            $("#hakdankewajiban").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->

</body>
</html>