<?php

namespace App\Http\Controllers;

use App\Kamar;
use App\Mahasiswa;
use App\Penempatan;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class MahasiswaController extends Controller
{
    public function getAll()
    {
        $pagedata = [
            'lists' => Mahasiswa::all(),
            'kamarlists' => Kamar::all(),
            'tempatlists' => Penempatan::all(),
        ];
        return View('mahasiswa',$pagedata);

    }

    public function getById($id)
    {
        $pagedate =
            [
                'lists' => Mahasiswa::find($id),
            ];
//        return $pagedate;
        return View('mahasiswa_update',$pagedate);
    }

    public function addForm()
    {
        return View('mahasiswa_form');
    }

    public function savedata(Request $request)
    {
        $data =  $request->all();
        Mahasiswa::create($data);

        return redirect()->route('get.all');

    }

    public function update($id)
    {

        $data =  $this->transformData(Input::all());

        Mahasiswa::whereMahasiswaId($id)->update($data);

        return redirect()->route('get.all');
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->route('get.all');

    }

    public function transformData($data)
    {
        if($data['nama']!='')
        {
            $result['nama'] = $data['nama'];
        }

        if($data['no_telp']!='')
        {
            $result['no_telp'] = $data['no_telp'];
        }

        if($data['alamat']!='')
        {
            $result['alamat'] = $data['alamat'];
        }

        return $result;
    }
}
