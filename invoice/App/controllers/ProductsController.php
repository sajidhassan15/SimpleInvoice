<?php

namespace App\Controllers;
use App\Core\App;

class ProductsController
{
    public  function getProducts()
    {
        $result = App::get('database')->getData('product');
        return view('product/products', compact('result'));
    }
    public function addProduct()
    {
        return view('product/manage_products');
    }

    public function addProducts()
    {
        App::get('database')->insertData('product',[
            'pro_name' => $_POST['name'],
            'pro_code' => $_POST['code'],
            'pro_rate' => $_POST['rate']
            ]);
        return redirect ('products');
    }
    public function deleteProduct()
    {
        App::get('database')->deleteData('product',['id' => $_POST['id']]);
        return redirect ('products');
    }
    public function updateProduct()
    {
        $result = App::get('database')->selectId('product',$_POST['id']);
        return view('product/manage_products', compact('result'));
    }
    public function setProduct()
    {
        App::get('database')->updateData('product',[
            'pro_name' => $_POST['name'],
            'pro_code' => $_POST['code'],
            'pro_rate' => $_POST['rate']
            ],'id',$_POST['id']);
        return redirect ('products');
    }
}
