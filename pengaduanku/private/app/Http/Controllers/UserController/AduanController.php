<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Aduan;
use App\Log;
use App\Kategori;
use Storage;
use Auth;


class AduanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pageUser.pages.blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();

        return view('pageUser.pages.isi', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->file('image')->store('imagesAduan');

        Aduan::create([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id,
            'isi' => $request->isi,
            'image' => $image,
        ]);

        Log::create([
            'user_id' => Auth::id(),
            'aktivitas' => 'Menambahkan Pengaduan Baru'
        ]);

        return back()->with(['success' => 'Laporan Berhasil Dubuat!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = DB::table('aduans')
            ->join('users', 'aduans.user_id', '=', 'users.id')
            ->join('kategoris', 'aduans.kategori_id', '=', 'kategoris.id')
            ->select('aduans.*', 'users.name as pengadu', 'kategoris.name as category')->where('deleted', 0)->get();

        $detail = Aduan::findOrFail($id);

        $tanggapan = DB::table('tanggapans')
            ->join('users', 'tanggapans.id_user', '=', 'users.id')
            ->join('admins', 'tanggapans.id_admin', '=', 'admins.id')
            ->select('tanggapans.*', 'users.name as pengadu', 'admins.name as admin')->where('tanggapans.id_aduan', '=', $id)->get();

        Log::create([
            'user_id' => Auth::id(),
            'aktivitas' => 'Melihat detail aduan ' . $detail->judul,
        ]);

        return view('pageUser.pages.detailpengaduan', compact('detail', 'tanggapan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy( $id)
    {
        $aduan = DB::table('aduans')
                        ->where('id', $id)
                        ->update(['deleted' => 1]);

        Log::create([
            'user_id' => Auth::id(),
            'aktivitas' => 'menghapus pengaduannya yang berjudul  '
        ]);

        return back()->with(['danger' => 'Laporan Berhasil Dihapus!']);
    }

    public function riwayat()
    {
        $aduan = Aduan::where([
            ['user_id', Auth::user()->id],
            ['deleted', 0]])->get();
        return view('pageUser.pages.riwayat', compact('aduan'));
    }

    public function detailRiwayat($id)
    {
        $detail = DB::table('aduans')
            ->join('users', 'aduans.user_id', '=', 'users.id')
            ->join('kategoris', 'aduans.kategori_id', '=', 'kategoris.id')
            ->select('aduans.*', 'users.name as pengadu', 'kategoris.name as category')->get();

        $detail = Aduan::findOrFail($id);

        $tanggapan = DB::table('tanggapans')
            ->join('users', 'tanggapans.id_user', '=', 'users.id')
            ->join('admins', 'tanggapans.id_admin', '=', 'admins.id')
            ->select('tanggapans.*', 'users.name as pengadu', 'admins.name as admin')->where('tanggapans.id_aduan', '=', $id)->get();

        return view('pageUser.pages.detailriwayat', compact('detail', 'tanggapan'));
    }
}
