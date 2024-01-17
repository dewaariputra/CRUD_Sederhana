<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;

class SiswaController extends Controller

      {
       public function index()
       {
           $siswa = Siswa::all();
           return view ('siswa.index')->with('siswa', $siswa);
       }
    
       
       public function create()
       {
           return view('siswa.create');
       }
    
      
       public function store(Request $request)
       {
           $input = $request->all();
           Siswa::create($input);
           return redirect('siswa')->with('pesan_peringatan', 'Siswa Terdaftar!');  
       }
    
       
       public function show($id)
       {
           $siswa = Siswa::find($id);
           return view('siswa.show')->with('siswa', $siswa);
       }
    
       
       public function edit($id)
       {
           $siswa = Siswa::find($id);
           return view('siswa.edit')->with('siswa', $siswa);
       }
    
     
       public function update(Request $request, $id)
       {
           $siswa = Siswa::find($id);
           $input = $request->all();
           $siswa->update($input);
           return redirect('siswa')->with('pesan_peringatan', 'siswa Updated!');  
       }
    
      
       public function destroy($id)
       {
           Siswa::destroy($id);
           return redirect('siswa')->with('pesan_peringatan', 'Siswa terhapus!');  
       }
   }