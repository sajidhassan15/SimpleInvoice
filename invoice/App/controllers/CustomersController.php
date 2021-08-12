<?php

namespace App\Controllers;
use App\Core\App;

class CustomersController
{
    public function home()
    {
         echo "in customer controller";
    }

    public function getCustomers()
    {
        $result = App::get('database')->getData('user');
        return view('customer/customers', compact('result'));
    } 

    public function addCustomer()
    {
        return view('customer/manage_customers');
    }

    public function addCustom()
    {
        App::get('database')->insertData('user',[
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'phone_no' => $_POST['phone_no']
            ]);
        return redirect ('customers');
    }

    public function deleteCustomer()
    {
        App::get('database')->deleteData('user',['id' => $_POST['id']]);
        return redirect ('customers');
    }

    public function updateCustomer()
    {
        $result = App::get('database')->selectId('user',$_POST['id']);
        return view('customer/manage_customers', compact('result'));
    }

    public function setCustomer()
    {
        echo "in set data..   ";
        App::get('database')->updateData('user',[
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'phone_no' => $_POST['phone_no']
            ],'id',$_POST['id']);
        return redirect ('customers');
    }
}
