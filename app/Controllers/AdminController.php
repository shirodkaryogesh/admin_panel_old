<?php

namespace App\Controllers;
use App\Models\AdminModel;
class AdminController extends BaseController
{
    public function index()
    {
        $admin = new AdminModel();
        $data['adminData'] = $admin->findAll();
        return view('admin/index.php',$data);
    }

    public function add()
    {
        return view('admin/add.php');
    }

    public function create()
    {
        $admin = new AdminModel();
        $file = $this->request->getFile('image');

        if($file->isValid() && !$file->hasMoved())
        {
            $imageName = $file->getClientName();
            $file->move('uploads/',$imageName);
            $baseUrl = base_Url();
            $imageUrl = $baseUrl."uploads/".$imageName;
        }
        else
        {
            $imageUrl = null;
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'origin' => $this->request->getPost('origin'),
            'brand' => $this->request->getPost('brand'),
            'variety' => $this->request->getPost('variety'),
            'packing_type' => $this->request->getPost('packing_type'),
            'packaging_size' => $this->request->getPost('packaging_size'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            // 'category' => $this->request->getPost('category'),
            'image' => $imageUrl,
        ];

        $admin->save($data);
        return redirect('/');
    }

    public function edit($id)
    {
        $admin = new AdminModel();
        $data['adminData'] = $admin-> find($id);
        return view('admin/edit.php',$data);
    }

    public function update($id)
    {
        $admin = new AdminModel();
        $row = $admin->find($id);
        $imageName = $row['image'];

        $file = $this->request->getFile('image');
        if($file->isValid() && !$file->hasMoved())
        {
            $imageName = $file->getClientName();
            $file->move('uploads/',$imageName);
            $baseUrl = base_url();
            $imageUrl = $baseUrl."uploads/".$imageName;
        }
        else{
            $imageUrl = $row['image']; 
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'origin' => $this->request->getPost('origin'),
            'brand' => $this->request->getPost('brand'),
            'variety' => $this->request->getPost('variety'),
            'packing_type' => $this->request->getPost('packing_type'),
            'packaging_size' => $this->request->getPost('packaging_size'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            // 'category' => $this->request->getPost('category'),
            'image' => $imageUrl,
        ];

        $admin->update($id,$data);
        return redirect('/');
    } 

    public function delete($id)
    {
        $admin = new AdminModel();
        $admin->delete($id);
        return redirect('/');
    }
}
