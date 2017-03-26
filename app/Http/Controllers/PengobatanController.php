<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Models\Kesehatan;
use App\Models\KesehatanPengobatan;

class PengobatanController extends AdminController
{
    public function __construct(Kesehatan $kesehatan, KesehatanPengobatan $obat)
    {
        // $this->middleware('auth');
        $this->model = $obat;
        $this->kesehatan = $kesehatan;
        $this->view = 'pengobatan.';
    }
    public function index($id){
        return view($this->view.'index',[
            'models'=>$this->model->where('kesehatan_id','=',$id)->orderBy('id','desc')->get(),
            'kesehatan_id'=>$id
        ]);
    }
    public function create($id)
    {
        return view($this->view.'create',[
            'kesehatan_id'=>$id
        ]);
    }
    public function store(Request $request){
        $inputs = $request->all();
        try{
            $this->model->create($inputs);
            return redirect('kesehatan/pengobatan/'.$inputs['kesehatan_id'])->with('success', 'Data berhasil ditambahkan.');
        }catch(\Exception $e){
            return redirect('kesehatan/pengobatan/'.$inputs['kesehatan_id'])->with('error', $e->getMessage());
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
            $this->model->findOrFail($id)->update($inputs);
            return redirect('kesehatan/pengobatan/'.$inputs['kesehatan_id'])->with('success', 'Data berhasil diedit.');
        }catch(\Exception $e){
            return redirect('kesehatan/pengobatan/'.$inputs['kesehatan_id'])->with('error', $e->getMessage());
        }
    }
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        try{
            $model->delete();
            return redirect('kesehatan/pengobatan/'.$model['kesehatan_id'])->with('success', 'Data berhasil dihapus.');

        }catch(\Exception $e){
            return redirect('kesehatan/pengobatan/'.$model['kesehatan_id'])->with('error', $e->getMessage());
        }
    }
}
