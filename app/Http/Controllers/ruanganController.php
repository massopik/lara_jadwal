<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{
    public function index(){
        $ruangan = ruangan::All();
        $data = array(
            'title'     => 'akademik',
            'ruangan'  => $ruangan,
            'no'        => 1
        );
        return view('ruangan.index',$data);
    }
    public function create(){
        $data = array('title'   => 'akademik');
        return view('ruangan.create',$data);
    }
    public function store(){
        ruangan::create([
            'nama_ruangan'      => request('nama_ruangan')
        ]);
        return redirect('/ruangan');
    }
    public function edit(ruangan $ruangan){
        $data = array(
            'title'   => 'akademik',
            'ruangan' => $ruangan
        );
        return view('ruangan.edit',$data);
    }
    public function update(ruangan $ruangan)
    {   
        $ruangan->update([
            'nama_ruangan'      => request('nama_ruangan')
        ]);
        return redirect('/ruangan');
    }
    public function destroy(ruangan $ruangan){
        $ruangan->delete();
        return redirect()->route('ruangan.index');
    }
}
