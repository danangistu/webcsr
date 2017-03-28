<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Models\Modal;
use App\Models\ModalRoadmap;

class RoadmapController extends AdminController
{
    public function __construct(Modal $modal, ModalRoadmap $roadmap)
    {
        // $this->middleware('auth');
        $this->model = $roadmap;
        $this->modal = $modal;
        $this->view = 'roadmap.';
    }
    public function index($id){
        return view($this->view.'index',[
            'models'=>$this->model->where('modal_id','=',$id)->orderBy('id','desc')->get(),
            'modal_id'=>$id
        ]);
    }
    public function create($id)
    {
        return view($this->view.'create',[
            'modal_id'=>$id
        ]);
    }
    public function store(Request $request){
        $inputs = $request->all();
        try{
            $inputs['foto'] = $this->upload_file($inputs,$this->model,$request,'foto','modal/foto');
            $this->model->create($inputs);
            return redirect('modal/roadmap/'.$inputs['modal_id'])->with('success', 'Data berhasil ditambahkan.');
        }catch(\Exception $e){
            return redirect('modal/roadmap/'.$inputs['modal_id'])->with('error', $e->getMessage());
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
                $inputs['foto'] = $this->upload_file($inputs,$this->model,$request,'foto','modal/foto');
            $this->model->findOrFail($id)->update($inputs);
            return redirect('modal/roadmap/'.$inputs['modal_id'])->with('success', 'Data berhasil diedit.');
        }catch(\Exception $e){
            return redirect('modal/roadmap/'.$inputs['modal_id'])->with('error', $e->getMessage());
        }
    }
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        try{
            $model->delete();
            return redirect('modal/roadmap/'.$model['modal_id'])->with('success', 'Data berhasil dihapus.');

        }catch(\Exception $e){
            return redirect('modal/roadmap/'.$model['modal_id'])->with('error', $e->getMessage());
        }
    }
    public function show($id)
    {
        return view($this->view.'view',[
            'model' => $this->model->findOrFail($id),
        ]);
    }
}
