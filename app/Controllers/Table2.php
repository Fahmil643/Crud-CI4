<?php

namespace App\Controllers;

use App\Models\ModelTable;


class Table2 extends BaseController
{

    public function data_table()
    {
        return view('table/data_table');
    }
    public function add_data_table()
    {
        return view('table/add_data_table');
    }

    public function proses_data_table()
    {
        $model_table = new ModelTable();
        $model_table->insert($this->request->getPost());
        return redirect()->to(base_url('data/data_table'));
    }
}
