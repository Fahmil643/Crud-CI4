<?php


namespace App\Controllers;

use App\Models\ModelKelas;

// defined('BASEPATH') or exit('No direct script access alowed');
class Mahasiswa extends BaseController
{

    // pembuatan read data
    public function baca()
    {

        $model = new ModelKelas();
        $data['data'] = $model->findAll();
        return view('data/lihat_data', $data);
    }


    public function lihat()
    {
        return view('data/lihat_data');
    }

    public function kumpul()
    {
        return view('data/lihat_data');
        return view('data/upload_file');
    }


    // sintax upload file
    public function upload()
    {
        $validationRule = [
            'file' => [
                'label' => 'File',
                'rules' => 'uploaded[file]|max_size[file,1024]|ext_in[file,jpg,jpeg,png,pdf]',
            ],
        ];

        if (!$this->validate($validationRule)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $file = $this->request->getFile('file');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);

            // Optionally, save the file information to the database

            return redirect()->back()->with('message', 'File has been uploaded successfully');
        }

        return redirect()->back()->with('error', 'The file could not be uploaded');
    }






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
