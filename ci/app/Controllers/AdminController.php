<?php

// app/Controllers/AdminController.php
namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\FormPenitipanModel;
use App\Models\FormDokterModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();
        return view('admin/index', $data);
    }

    public function showAddProductForm()
    {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();
        return view('admin/add_product', $data);
    }

    public function tablesProduct()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('admin/tables', $data);
    }

    public function addProduct()
    {
        $productModel = new ProductModel();

        $rules = [
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'uploaded[image]|mime_in[image,image/jpeg,image/png,image/jpg]|max_size[image,1024]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads', $imageName);

            $data = [
                'name' => $this->request->getPost('name'),
                'price' => $this->request->getPost('price'),
                'description' => $this->request->getPost('description'),
                'image' => $imageName,
                'category_id' => $this->request->getPost('category_id'),
            ];

            if ($productModel->save($data)) {
                return redirect()->to('/admin/showAddProductForm')->with('success', 'Product added successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to add product');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'No file uploaded');
        }
    }

    public function editProduct($id)
    {
        $productModel = new ProductModel();
        $categoryModel = new CategoryModel();

        $data['product'] = $productModel->find($id);
        $data['categories'] = $categoryModel->findAll();

        return view('admin/edit_product', $data);
    }

    public function updateProduct($id)
    {
        $model = new ProductModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'category_id' => $this->request->getPost('category_id'),
        ];

        if ($this->request->getFile('image')->isValid()) {
            $file = $this->request->getFile('image');
            $imageName = $file->getRandomName();
            $file->move('uploads', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('admin/tablesProduct'))->with('success', 'Product updated successfully');
    }

    public function deleteProduct($id)
    {
        $productModel = new \App\Models\ProductModel();
        $productModel->delete($id);

        return redirect()->to('/admin/tablesProduct')->with('success', 'Product deleted successfully');
    }

    public function FormPenitipanHewan()
    {
        $formPenitipanModel = new \App\Models\FormPenitipanModel();
        $data['formpenitipan'] = $formPenitipanModel->findAll();
        return view('admin/FormPHCard', $data);
    }

    public function deletePenitipanHewan($id)
    {
        $formPenitipanModel = new \App\Models\FormPenitipanModel();
        $formPenitipanModel->delete($id);

        return redirect()->to('/admin')->with('success', 'Data deleted successfully');
    }

    public function FormDokterHewan()
    {
        $formDokterModel = new \App\Models\FormDokterModel();
        $data['formdokter'] = $formDokterModel->findAll();
        return view('admin/FormDrhCard', $data);
    }

    public function deleteDokterHewan($id)
    {
        $formDokterModel = new \App\Models\FormDokterModel();
        $formDokterModel->delete($id);

        return redirect()->to('/admin')->with('success', 'Data deleted successfully');
    }

    public function FormGroomingHewan()
    {
        $formGroomingModel = new \App\Models\FormGroomingModel();
        $data['formgrooming'] = $formGroomingModel->findAll();
        return view('admin/FormGrooming', $data);
    }

    public function deleteGroomingHewan($id)
    {
        $formGroomingModel = new \App\Models\FormGroomingModel();
        $formGroomingModel->delete($id);

        return redirect()->to('/admin')->with('success', 'Data deleted successfully');
    }

    public function User()
    {
        $user = new \App\Models\UserModel();
        $data['users'] = $user->findAll();
        return view('/admin/loginn', $data);
    }

    public function deleteUser($id)
    {
        $user = new \App\Models\UserModel();
        $user->delete($id);

        return redirect()->to('/admin')->with('success', 'Data deleted successfully');
    }
}
