<?php

namespace App\Controllers;

use App\Models\ModelKelas;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $model_kelas = new ModelKelas();
        $all_data_kantor = $model_kelas->findAll();
        return view('data/kelas', ['all_data_kantor' => $all_data_kantor]);
    }

    public function logout()
    {
        $model_kelas = new ModelKelas();
        $all_data_kantor = $model_kelas->findAll();
        return view('data/kelas', ['all_data_kantor' => $all_data_kantor]);
        return view('data/kelas');
    }

    public function add_data_kantor()
    {
        return view('data/add_data_kantor');
    }

    public function proses_add_kantor()
    {
        $model_kelas = new ModelKelas();
        $model_kelas->insert($this->request->getPost());
        return redirect()->to(base_url('data/kelas'));
    }

    public function edit_data_kantor($id = false)
    {
        $model_kelas = new ModelKelas();
        $data_kelas = $model_kelas->find($id);
        return view('data/edit_data_kantor', ['data_kelas' => $data_kelas]);
    }


    public function proses_edit_kantor()
    {
        $model_kelas = new ModelKelas();
        $model_kelas->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('data/kelas'));
    }

    public function delete_data_kantor($id = false)
    {
        $model_kelas = new ModelKelas();
        $model_kelas->delete($id);
        return redirect()->to('data/kelas');
    }
}
