<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Models\Bencana;
use App\Models\BencanaPemberian;

class PemberianController extends AdminController
{
    public function __construct(Bencana $bencana, BencanaPemberian $pemberian)
    {
        // $this->middleware('auth');
        $this->model = $pemberian;
        $this->bencana = $bencana;
        $this->view = 'pemberian.';
    }
    public function index($id){
        return view($this->view.'index',[
            'models'=>$this->model->where('bencana_id','=',$id)->orderBy('id','desc')->get(),
            'bencana_id'=>$id
        ]);
    }
    public function create($id)
    {
        return view($this->view.'create',[
            'bencana_id'=>$id
        ]);
    }
    public function store(Request $request){
        $inputs = $request->all();
        try{
            $inputs['foto'] = $this->upload_file($inputs,$this->model,$request,'foto','bencana/foto');
            $this->model->create($inputs);
            return redirect('bencana/pemberian/'.$inputs['bencana_id'])->with('success', 'Data berhasil ditambahkan.');
        }catch(\Exception $e){
            return redirect('bencana/pemberian/'.$inputs['bencana_id'])->with('error', $e->getMessage());
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
            if(isset($inputs['foto']))
                $inputs['foto'] = $this->upload_file($inputs,$this->model,$request,'foto','bencana/foto');
            $this->model->findOrFail($id)->update($inputs);
            return redirect('bencana/pemberian/'.$inputs['bencana_id'])->with('success', 'Data berhasil diedit.');
        }catch(\Exception $e){
            return redirect('bencana/pemberian/'.$inputs['bencana_id'])->with('error', $e->getMessage());
        }
    }
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        try{
            $model->delete();
            return redirect('bencana/pemberian/'.$model['bencana_id'])->with('success', 'Data berhasil dihapus.');

        }catch(\Exception $e){
            return redirect('bencana/pemberian/'.$model['bencana_id'])->with('error', $e->getMessage());
        }
    }
    public function show($id)
    {
        return view($this->view.'view',[
            'model' => $this->model->findOrFail($id),
        ]);
    }
}
