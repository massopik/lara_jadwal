<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
    public function index(){
        $dosen = dosen::All();
        $data = array(
            'title'     => 'akademik',
            'dosen'  => $dosen,
            'no'        => 1
        );
        return view('dosen.index',$data);
    }
    public function create(){
        $data = array('title'   => 'akademik');
        return view('dosen.create',$data);
    }
    public function store(){
        dosen::create([
            'nama'      => request('nama'),
            'email'    => request('email'),
            'phone'    => request('phone')
        ]);
        return redirect('/dosen');
    }
    public function edit(dosen $dosen){
        $data = array(
            'title'   => 'akademik',
            'dosen' => $dosen
        );
        return view('dosen.edit',$data);
    }
    public function update(dosen $dosen)
    {   
        $dosen->update([
            'nama'      => request('nama'),
            'email'    => request('email'),
            'phone'    => request('phone')
        ]);
        return redirect('/dosen');
    }
    public function destroy(dosen $dosen){
        $dosen->delete();
        return redirect()->route('dosen.index');
    }
}
