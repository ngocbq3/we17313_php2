<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        return $this->view('admin/products/list', ['products' => $products]);
    }
    public function create()
    {
        $categories = CategoryModel::all();
        return $this->view('admin/products/add', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        $product = $request->getBody();
        $image = $_FILES['image']['name'];
        $product['image'] = $image;
        //Upload file
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);

        //insert
        $p = new ProductModel();
        $p->insert($product);
        header("location:/product");
    }

    public function show(Request $request)
    {
        $p = $request->getBody();
        $product = ProductModel::findOne($p['id']);

        $categories = CategoryModel::all();

        return $this->view(
            'admin/products/edit',
            [
                'product' => $product,
                'categories' => $categories
            ]
        );
    }

    public function update(Request $request)
    {
        $data = $request->getBody();
        if ($_FILES['image']['size'] > 0) {
            $data['image'] = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $data['image']);
        }

        //update
        ProductModel::findOne($data['id'])->update($data);
        header("location:/product");
        exit;
    }
}
