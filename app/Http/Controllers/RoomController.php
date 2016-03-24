<?php

namespace App\Http\Controllers;

use App\Kamar;
use Illuminate\Http\Request;

use App\Http\Requests;

class RoomController extends Controller
{
    public function getAll()
    {
        $pagedata = [
            'lists' => Kamar::all(),
        ];
        return View('mahasiswa',$pagedata);

    }

    public function getById($id)
    {
        $pagedate =
            [
                'lists' => Kamar::find($id),
            ];
//        return $pagedate;
        return View('kamar_update',$pagedate);
    }

    public function addForm()
    {
        return View('kamar_form');
    }

    public function savedata(Request $request)
    {
        $data =  $request->all();
        Kamar::create($data);

        return redirect()->route('get.all');

    }

    public function update($id)
    {

        $data =  $this->transformData(Input::all());

        Mahasiswa::whereKamarId($id)->update($data);

        return redirect()->route('get.all');
    }

    public function delete($id)
    {
        $data = Kamar::find($id);
        $data->delete();

        return redirect()->route('get.all');

    }

    public function transformData($data)
    {
        if($data['nama_kamar']!='')
        {
            $result['nama'] = $data['nama'];
        }


        return $result;
    }
}
