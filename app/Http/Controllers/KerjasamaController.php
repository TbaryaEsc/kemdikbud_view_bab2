<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use Illuminate\Http\Request;

class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kerjasama::get()->sum('id');
       
        if($data){
            $getdata = Kerjasama::firstOrFail();           

            return view('kerjasama.edit')->with([
                'id' => $getdata->id,
                'ringkasanmou' => $getdata->ringkasanmou,
                'nomormoa' => $getdata->nomormoa,
                'deskripsimoa' => $getdata->deskripsimoa,
                'tglmulaimoa' => $getdata->tglmulaimoa,
                'tglberakhirmoa' => $getdata->tglberakhirmoa,
                'misiprogram' => $getdata->misiprogram,
                'targetprogram' => $getdata->targetprogram,
                'alasanmitra' => $getdata->alasanmitra,
                'prinsipkerjasama' => $getdata->prinsipkerjasama,
                'manfaatkerjasama' => $getdata->manfaatkerjasama,
                'tantanganpelaksanaan' => $getdata->tantanganpelaksanaan,
                'kepemilikanhakcipta' => $getdata->kepemilikanhakcipta,
                'mekanismeresipokal' => $getdata->mekanismeresipokal,
                'keberlanjutankerjasama' => $getdata->keberlanjutankerjasama,
                'hakdankewajiban' => $getdata->hakdankewajiban,
                'haktercantum' => $getdata->haktercantum,   
            ]);

        }else{
            return view('kerjasama.create');
        }

        //return view('kerjasama.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ringkasanmou'=> 'required|max:10000',   
            'nomormoa'=> 'required',
            'deskripsimoa'=> 'required|max:10000', 
            'tglmulaimoa'=> 'required',
            'tglberakhirmoa'=> 'required',
            'misiprogram'=> 'required|max:10000', 
            'targetprogram'=> 'required|max:10000', 
            'alasanmitra'=> 'required|max:10000', 
            'prinsipkerjasama'=> 'required|max:10000', 
            'manfaatkerjasama'=> 'required|max:10000', 
            'tantanganpelaksanaan'=> 'required|max:10000', 
            'kepemilikanhakcipta'=> 'required|max:10000', 
            'mekanismeresipokal'=> 'required|max:10000', 
            'keberlanjutankerjasama'=> 'required|max:10000', 
            'hakdankewajiban'=> 'required|max:10000', 
            'haktercantum'=> 'required',           
        ]);

        if($validatedData){           
            //Move Uploaded File
            

            $data = [
                'ringkasanmou' => $request->ringkasanmou,
                'nomormoa' => $request->nomormoa,
                'deskripsimoa' => $request->deskripsimoa,
                'tglmulaimoa' => $request->tglmulaimoa,
                'tglberakhirmoa' => $request->tglberakhirmoa,
                'misiprogram' => $request->misiprogram,
                'targetprogram' => $request->targetprogram,
                'alasanmitra' => $request->alasanmitra,
                'prinsipkerjasama' => $request->prinsipkerjasama,
                'manfaatkerjasama' => $request->manfaatkerjasama,
                'tantanganpelaksanaan' => $request->tantanganpelaksanaan,
                'kepemilikanhakcipta' => $request->kepemilikanhakcipta,
                'mekanismeresipokal' => $request->mekanismeresipokal,
                'keberlanjutankerjasama' => $request->keberlanjutankerjasama,
                'hakdankewajiban' => $request->hakdankewajiban,
                'haktercantum' => $request->haktercantum,          
            ];

            Kerjasama::create($data);

            return redirect('kerjasama')->with('success', "Berhasil di simpan !..");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kerjasama $kerjasama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kerjasama $kerjasama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'ringkasanmou'=> 'required|max:10000',        
            'nomormoa'=> 'required',
            'deskripsimoa'=> 'required|max:10000', 
            'tglmulaimoa'=> 'required',
            'tglberakhirmoa'=> 'required',
            'misiprogram'=> 'required|max:10000', 
            'targetprogram'=> 'required|max:10000', 
            'alasanmitra'=> 'required|max:10000', 
            'prinsipkerjasama'=> 'required|max:10000', 
            'manfaatkerjasama'=> 'required|max:10000', 
            'tantanganpelaksanaan'=> 'required|max:10000', 
            'kepemilikanhakcipta'=> 'required|max:10000', 
            'mekanismeresipokal'=> 'required|max:10000', 
            'keberlanjutankerjasama'=> 'required|max:10000', 
            'hakdankewajiban'=> 'required|max:10000', 
            'haktercantum'=> 'required',           
        ]);      

        if($validatedData){       
                   
            $data = [
                'ringkasanmou' => $request->ringkasanmou,                
                'nomormoa' => $request->nomormoa,
                'deskripsimoa' => $request->deskripsimoa,
                'tglmulaimoa' => $request->tglmulaimoa,
                'tglberakhirmoa' => $request->tglberakhirmoa,               
                'misiprogram' => $request->misiprogram,
                'targetprogram' => $request->targetprogram,
                'alasanmitra' => $request->alasanmitra,
                'prinsipkerjasama' => $request->prinsipkerjasama,
                'manfaatkerjasama' => $request->manfaatkerjasama,
                'tantanganpelaksanaan' => $request->tantanganpelaksanaan,
                'kepemilikanhakcipta' => $request->kepemilikanhakcipta,
                'mekanismeresipokal' => $request->mekanismeresipokal,
                'keberlanjutankerjasama' => $request->keberlanjutankerjasama,
                'hakdankewajiban' => $request->hakdankewajiban,
                'haktercantum' => $request->haktercantum,          
            ];


            $kerjasama = Kerjasama::FindOrFail($id);
            $kerjasama->update($data);
            
            return redirect('kerjasama')->with('success', "Berhasil di Update !..");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kerjasama $kerjasama)
    {
        //
    }
}
