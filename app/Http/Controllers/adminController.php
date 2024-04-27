<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\rb;
use File;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        return view('admin/home');
    }
    public function peserta_rb($kat)
    {
        switch ($kat) {
            case 1:
                $kategori = 'Men Youth';
                $judul = 'Men Youth (13 - 16 Thn)';
                break;
            case 2:
                $kategori = 'Men Junior';
                $judul = 'Men Junior (17 - 18 Thn)';
                break;
            case 3:
                $kategori = 'Men Elite';
                $judul = 'Men Elite (19 - 29 Thn)';
                break;
            case 4:
                $kategori = 'Women Open';
                $judul = 'Women Open (Semua Umur)';
                break;
            case 5:
                $kategori = 'Men Master A';
                $judul = 'Men Master A (30 - 40 Thn)';
                break;
            case 6:
                $kategori = 'Men Master B';
                $judul = 'Men Master B (41 Thn Keatas)';
                break;
            default:
                $kategori = '';
                $judul = '';
                break;
        }

        $rb = rb::where('kategori', $kategori)->orderByRaw('no_peserta DESC');
		$data = array('no'    => 1,	'judul' => $judul,'query' => $rb,   );        
        return view('admin/peserta_rb',$data);
    }

    public function tambah_rb($file)
    {
        return view('admin/tambah_peserta_rb');
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
                    'no_peserta' => $request->no_peserta,
                    'klub' => $request->klub,
                    'foto_ktp' => $nama_gbr,
                    'asuransi' => $nama_asuransi
                ]);
                Alert::success('Hore!', 'Data berhasil disimpan');
                return redirect()->route('admin/peserta_rb/', $request->segmen);
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
    }
    
    public function edit_rb($file)
    {
        $query = rb::where('id',$file);
        $data = array(
            'query'  => $query,
            'judul'  => 'Edit Peserta Road Bike',
        );
        return view('admin/edit_peserta_rb',$data);
    }

    public function edit_save_rb(Request $request)
    {
        // dd($request);
        $file =  $request->id;
        $query = rb::where('id',$file);
        $query->update([
            'no_ktp' => $request->no_ktp,
            'uci_id' => $request->uci_id,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
            'kategori' => $request->kategori,
            'no_peserta' => $request->no_peserta,
            'klub' => $request->klub,
        ]);
        toast('Data berhasil diperbaharui','success');
        return redirect('admin/peserta_rb/'. $request->segmen);
    }

    public function hapus_rb($file)
    {
        $query = rb::where('id',$file)->first();
        File::delete('upload/' . $query->foto_ktp);
        rb::where('id',$file)->delete();
        toast('Data berhasil dihapus','success');
        return redirect()->back();
    }

}
