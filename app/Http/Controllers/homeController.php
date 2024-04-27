<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rb;
use App\Models\mtb;
use App\Models\user;
use Session;
use Alert;


class homeController extends Controller
{
    
    public function index()
    {
        return view('home/home');
    }

    public function register_close()
    {
        return view('home/register/close');
    }

    public function register_rb()
    {
        return view('home/register/rb');
    }

    public function register_save_rb(Request $request)
    {
        $ceknik = rb::where('no_ktp',$request->no_ktp)->count();
        if($ceknik == 0){
            if ($request->file('gbr')->getSize() <= 4000000) {
                $gbr =$request->file('gbr');
                $asuransi =$request->file('asuransi');
                $tujuan_upload = 'upload';
                if($asuransi == ''){ $nama_asuransi='';} else
                { $nama_asuransi = time()."_".$asuransi->getClientOriginalName(); $asuransi->move($tujuan_upload,$nama_asuransi);}
                $nama_gbr = time()."_".$gbr->getClientOriginalName(); $gbr->move($tujuan_upload,$nama_gbr);
                
                 rb::create([
                    'no_ktp' => $request->no_ktp,
                    'uci_id' => $request->uci_id,
                    'nama' => $request->nama,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'alamat' => $request->alamat,
                    'telpon' => $request->telpon,
                    'kategori' => $request->kategori,
                    'no_peserta' => '',
                    'klub' => $request->klub,
                    'foto_ktp' => $nama_gbr,
                    'asuransi' => $nama_asuransi
                ]);
                Alert::success('Hore!', 'Data berhasil disimpan');
                return redirect('register_success');
            } else {
                echo "<script>
                    alert('Ukuran file gambar/foto ktp maksimal 4 MB');
                    self.history.back();
                    </script>";
            }
        } else {
            echo "<script>
            alert('No KTP sudah terdaftar');
            self.history.back();
            </script>";
        }
        // dd($ceknik);

         
        //  $nama_gbr = time()."_".$gbr->getClientOriginalName();
        //  $nama_asuransi = time()."_".$asuransi->getClientOriginalName();

        //  $gbr->move($tujuan_upload,$nama_gbr);
        //  $asuransi->move($tujuan_upload,$nama_asuransi);

    }

    public function register_mtb()
    {        
        return view('home/register/mtb');
    }

    public function register_save_mtb(Request $request)
    {
         mtb::create([
            'no_ktp' => $request->no_ktp,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
            'kategori' => $request->kategori,
            'klub' => $request->klub
        ]);
        Alert::success('Hore!', 'Data berhasil disimpan');
        return redirect('register_success');
    }

    public function register_success()
    {
        return view('home/register/success');
    }

    public function rute_rb()
    {
        $data = 'rb';
        return view('home/rute/index',compact('data'));
    }

    public function rute_mtb()
    {
        $data = 'mtb';
        return view('home/rute/index',compact('data'));
    }

    public function peserta_index()
    {
        $total_mtb = mtb::latest()->count();
        $total_rb = rb::latest()->count();
        $total = $total_mtb+$total_rb;
        return view('home/peserta/index',compact('total'));
    }

    public function peserta_rb()
    {
        $total_rb = rb::latest();
        return view('home/peserta/rb',compact('total_rb'));
    }

    public function peserta_mtb()
    {
        $total_mtb = mtb::latest();
        return view('home/peserta/mtb',compact('total_mtb'));
    }

    public function info()
    {
        return view('home/info');
    }
    
    public function handbook($file)
    {
        $file_path = public_path('berkas/'.$file.'.pdf');
        // dd($file_path);
        return response()->download($file_path);
    }

    public function login()
    {
        return view('login');
    }

    public function login_aksi(Request $request)
    {
        $cek = array('username'=>$request->input('username'),'password'=>sha1($request->input('password')));
        $cek_hasil = user::where($cek)->count();
        if($cek_hasil == null){
            Session::flush();
            Alert::error('ops!',"Username Atau Password Anda Salah");
            return redirect()->to('login');
        }
        else{
            Session::push('cek', 'admin');
            toast('Anda berhasil login','success');
            // Alert::success('Hore!',"Anda berhasil login");
            return redirect()->to('admin');
        }
    }

    public function logout()
    {
        Session::flush();
        Alert::success('Hore!',"Anda berhasil logout");
        return redirect()->to('login');
    }
}
