<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal;
use App\ruangan;
use App\matkul;
use App\dosen;
use DB;

class jadwalController extends Controller
{
    public function index()
    {
        $jadwals = jadwal::All();
        $jadwals = DB::table('jadwals')
            ->join('dosens', 'dosens.id', '=', 'jadwals.dosen_id')
            ->join('ruangans', 'ruangans.id', '=', 'jadwals.ruangan_id')
            ->join('matkuls', 'matkuls.id', '=', 'jadwals.matkul_id')
            //->join('couriers', 'couriers.id', '=', 'jadwals.courier_id')
            // ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
        $data = array(
            'title' => 'index',
            'no'    => 1,
            'jadwals'  => $jadwals
        );
        return view('jadwal.index',$data);
    }
    public function create()
    {
        // $orders = Order::All();
        $dosens      = dosen::All();
        $ruangans   = ruangan::All();
        $matkuls  = matkul::All();

        $data = array(
            'dosens'     => $dosens,
            'ruangans'  => $ruangans,
            'matkuls' => $matkuls
        );
        return view('jadwal.create',$data);
    }
    public function store()
    {
     jadwal::create([
         'dosen_id'      => request('dosen_id'),
         'matkul_id'   => request('matkul_id'),
         'ruangan_id'  => request('ruangan_id'),
         'hari' => request('hari')
     ]);
     return redirect('/jadwal');
    }
}
