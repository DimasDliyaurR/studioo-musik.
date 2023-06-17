<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOption\None;

class tableController extends Controller
{

    // Tabel Transaksi

    public function index_transaksi()
    {
        $transaksi = DB::table('transaksi')
        ->select('transaksi.id_transaksi','studio.no_studio', 'transaksi.nama_band','transaksi.jam_mulai', 'users.name', 'transaksi.tanggal_transaksi')
        ->join('studio','studio.id_studio','=','transaksi.id_studio')
        ->join('users','transaksi.id','=','users.id')
        ->get();
        
        $studio = DB::table('studio')->get();

        return view('table.transaksi',[
            'data'=> $transaksi,
            'studio' => $studio,
            'tittle' => "transaksi"
        ]);
    }

    public function main_transaksi_tambah(Request $req)
    {   
        $transaksi = DB::table('transaksi')
        ->select('transaksi.id_transaksi','studio.no_studio', 'transaksi.nama_band','transaksi.jam_mulai', 'users.name', 'transaksi.tanggal_transaksi')
        ->join('studio','studio.id_studio','=','transaksi.id_studio')
        ->join('users','transaksi.id','=','users.id')
        ->get();
        
        $studio = DB::table('studio')->get();

        $err = DB::select("CALL transaksi_collison(?,?,?,?)",[$req->studio,$req->nama_band,$req->petugas,$req->jam]);
        
        if($err)
        {
            return view('table.transaksi',[
                'error' => $err,
                'data'=> $transaksi,
                'studio' => $studio,
                'tittle' => "transaksi"
            ]);
        } else {
            DB::statement("CALL transaksi_collison(?,?,?,?)",[$req->studio,$req->nama_band,$req->petugas,$req->jam]);
            return redirect('/transaksi');
        }
    }

    public function index_booking()
    {
        $booking = DB::table('booking')
        ->select('booking.*','studio.no_studio','users.name')
        ->join('studio','booking.id_studio','=','studio.id_studio')
        ->join('users','booking.id_petugas','=','users.id')
        ->get();

        $studio = DB::table('studio')->get();

        return view('table.booking',[
            'data' => $booking,
            'studio' => $studio,
            'tittle' => 'booking'
        ]);
    }
    
    public function index_studio()
    {
        $studio = DB::table('studio')->get();

        return view('table.studio',[
            'data' => $studio,
            'tittle' => 'studio'
        ]);
    }

    public function index_inventaris()
    {
        $inventaris = DB::table('inventaris')->get();

        return view('table.inventaris',[
            'data' => $inventaris,
            'tittle' => 'inventaris'
        ]);
    }
}
