<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Models\Pendidikan;
use App\Models\PendidikanPenerima;

class PenerimaController extends AdminController
{
    public function __construct(Pendidikan $pendidikan, PendidikanPenerima $penerima)
    {
        // $this->middleware('auth');
        $this->model = $penerima;
        $this->pendidikan = $pendidikan;
        $this->view = 'penerima.';
    }
    public function index($id){
        return view($this->view.'index',[
            'models'=>$this->model->where('pendidikan_id','=',$id)->orderBy('id','desc')->get(),
            'pendidikan_id'=>$id
        ]);
    }
    public function create($id)
    {
        return view($this->view.'create',[
            'pendidikan_id'=>$id
        ]);
    }
    public function store(Request $request){
        $inputs = $request->all();
        try{
            $inputs['birthdate'] = $this->format_date($inputs['birthdate']);
            $inputs['foto'] = $this->upload_file($inputs,$this->model,$request,'foto','pendidikan/foto');
            $this->model->create($inputs);
            return redirect('pendidikan/penerima/'.$inputs['pendidikan_id'])->with('success', 'Data berhasil ditambahkan.');
        }catch(\Exception $e){
            return redirect('pendidikan/penerima/'.$inputs['pendidikan_id'])->with('error', $e->getMessage());
        }
    }
    public function edit($id)
    {
        return view($this->view.'edit',[
            'model' => $this->model->findOrFail($id),
            'id' => $id,
        ]);
    }
    public function update(Request $request,$id){
        $inputs = $request->all();
        try{
            $inputs['birthdate'] = $this->format_date($inputs['birthdate']);
            if(isset($inputs['foto']))
                $inputs['foto'] = $this->upload_file($inputs,$this->model,$request,'foto','pendidikan/foto');
            $this->model->findOrFail($id)->update($inputs);
            return redirect('pendidikan/penerima/'.$inputs['pendidikan_id'])->with('success', 'Data berhasil diedit.');
        }catch(\Exception $e){
            return redirect('pendidikan/penerima/'.$inputs['pendidikan_id'])->with('error', $e->getMessage());
        }
    }
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        try{
            $model->delete();
            return redirect('pendidikan/penerima/'.$model['pendidikan_id'])->with('success', 'Data berhasil dihapus.');

        }catch(\Exception $e){
            return redirect('pendidikan/penerima/'.$model['pendidikan_id'])->with('error', $e->getMessage());
        }
    }
    public function show($id)
    {
        return view($this->view.'view',[
            'model' => $this->model->findOrFail($id),
        ]);
    }
}
