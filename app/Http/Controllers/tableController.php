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
        ->select('transaksi.id_transaksi','studio.no_studio', 'transaksi.nama_band', 'users.name', 'transaksi.tanggal_transaksi', 'transaksi.total_harga')
        ->join('studio','studio.id_studio','=','transaksi.id_studio')
        ->join('users','transaksi.id','=','users.id')
        ->get();
        
        $booking = DB::table('booking')->get();

        return view('table.transaksi',[
            'data'=> $transaksi,
            'booking' => $booking,
            'tittle' => "transaksi"
        ]);
    }

    public function index_booking()
    {
        $booking = DB::table('booking')
        ->select('booking.*','studio.no_studio','users.name')
        ->join('studio','booking.id_studio','=','studio.id_studio')
        ->join('users','booking.id_petugas','=','users.id')
        ->get();

        return view('table.booking',[
            'data' => $booking,
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
