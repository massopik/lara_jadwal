<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matkul;

class matkulController extends Controller
{
    public function index(){
        $matkul = matkul::All();
        $data = array(
            'title'     => 'akademik',
            'matkul'  => $matkul,
            'no'        => 1
        );
        return view('matkul.index',$data);
    }
    public function create(){
        $data = array('title'   => 'akademik');
        return view('matkul.create',$data);
    }
    public function store(){
        matkul::create([
            'nama_matkul'      => request('nama_matkul')
        ]);
        return redirect('/matkul');
    }
    public function edit(matkul $matkul){
        $data = array(
            'title'   => 'akademik',
            'matkul' => $matkul
        );
        return view('matkul.edit',$data);
    }
    public function update(matkul $matkul)
    {   
        $matkul->update([
            'nama_matkul'      => request('nama_matkul')
        ]);
        return redirect('/matkul');
    }
    public function destroy(matkul $matkul){
        $matkul->delete();
        return redirect()->route('matkul.index');
    }
}
