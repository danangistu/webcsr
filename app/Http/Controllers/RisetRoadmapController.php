<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Models\Riset;
use App\Models\RisetRoadmap;

class RisetRoadmapController extends AdminController
{
    public function __construct(Riset $riset, RisetRoadmap $roadmap)
    {
        // $this->middleware('auth');
        $this->model = $roadmap;
        $this->riset = $riset;
        $this->view = 'riset-roadmap.';
    }
    public function index($id){
        return view($this->view.'index',[
            'models'=>$this->model->where('riset_id','=',$id)->orderBy('id','desc')->get(),
            'riset_id'=>$id
        ]);
    }
    public function create($id)
    {
        return view($this->view.'create',[
            'riset_id'=>$id
        ]);
    }
    public function store(Request $request){
        $inputs = $request->all();
        try{
            $inputs['foto'] = $this->upload_file($inputs,$this->model,$request,'foto','riset/foto');
            $this->model->create($inputs);
            return redirect('riset/roadmap/'.$inputs['riset_id'])->with('success', 'Data berhasil ditambahkan.');
        }catch(\Exception $e){
            return redirect('riset/roadmap/'.$inputs['riset_id'])->with('error', $e->getMessage());
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
                $inputs['foto'] = $this->upload_file($inputs,$this->model,$request,'foto','riset/foto');
            $this->model->findOrFail($id)->update($inputs);
            return redirect('riset/roadmap/'.$inputs['riset_id'])->with('success', 'Data berhasil diedit.');
        }catch(\Exception $e){
            return redirect('riset/roadmap/'.$inputs['riset_id'])->with('error', $e->getMessage());
        }
    }
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        try{
            $model->delete();
            return redirect('riset/roadmap/'.$model['riset_id'])->with('success', 'Data berhasil dihapus.');

        }catch(\Exception $e){
            return redirect('riset/roadmap/'.$model['riset_id'])->with('error', $e->getMessage());
        }
    }
    public function show($id)
    {
        return view($this->view.'view',[
            'model' => $this->model->findOrFail($id),
        ]);
    }
}
