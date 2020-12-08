<?php

namespace App\Http\Controllers;

use App\Keuntungan;
use App\Enterprise;
use App\Klien;
use App\Liputan;

use App\Pimpinan;
use App\Penghargaan;

use App\Dokumentasi;

use App\Faq;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PrivyController extends Controller
{
    //
    public function index()
    {
            //  $keuntungans = DB::select('select * from keuntungans ORDER BY updated_at DESC');
             $keuntungans = Keuntungan::all();
            //  $enterprises = DB::select('select * from enterprises');
            $enterprises = Enterprise::all();
            //  $kliens = DB::select('select * from kliens');
            $kliens = Klien::all();
            //  $liputans = DB::select('select * from liputans');
            $liputans = Liputan::all();
             
        return view('pages.home.home',compact('keuntungans','enterprises','kliens','liputans'));
    }

    public function tentangKami()
    {
        // $pimpinans = DB::select('select * from pimpinans ORDER BY updated_at DESC');
        $pimpinans = Pimpinan::all();
        // $penghargaans = DB::select('select * from penghargaans ORDER BY updated_at DESC');
        $penghargaans = Penghargaan::all();
        
        // if($pimpinans->foto != null){
        //     $pimpinans->foto = '../images/privy/'.$pimpinans->foto; 
        // }else{
        //     $pimpinans->foto = '../images/404.png';
        // }
        
        return view('pages.tentang.tentangKami',compact('pimpinans','penghargaans'));
    }

    public function dokumentasiAPI()
    {
        // $dokumentasis = DB::select('select * from dokumentasis');
        $dokumentasis = Dokumentasi::all();
        return view('pages.dokumentasi.dokumentasiAPI',compact('dokumentasis'));
    }

    public function verifikasiPDF()
    {
        return view('pages.verifikasi.verifikasiPDF');
    }

    public function kontakBisnis()
    {
        return view('pages.kontak.kontakBisnis');
    }

    public function faq()
    {
        // $faqstop = DB::select("select * from faqs where kategori = 'Top Asked Question' ");
        $faqstop = Faq::all()->where('kategori','Top Asked Question');
        // $faqsen = DB::select("select * from faqs where kategori = 'Enterprise' ");
        $faqsen = Faq::all()->where('kategori','Enterprise');
        // $faqsgen = DB::select("select * from faqs where kategori = 'General' ");
        $faqsgen = Faq::all()->where('kategori','General');
    
        return view('pages.faq.faq',compact('faqstop','faqsen','faqsgen'));
    }

    public function search(Request $request){
        $search = $request->search;
        $faqs = Faq::where('kategori','like','%'.$search.'%')->orWhere('question','like','%'.$search.'%')
        ->orWhere('answer','like','%'.$search.'%')
        ->get();
        // dd($faqs);

        return view('pages.faq.faq',compact('faqs'));
    }

    public function bantuan()
    {
        // $batuans = Pimpinan::all();
        return view('pages.bantuan.bantuan');
    }

}