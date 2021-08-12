<?php

namespace App\Controllers;
use App\Core\App;

class UsersController
{

    public function home()
    {
        return view('page/index');
    }

    public function customer()
    {
        $result = App::get('database')->getData('user');
        return view('customer/customers', compact('result'));
        // return view('customer/customers');
    }

    public function customerGet($table, $field = '*', $condition_arr = '', $order_by_field = '', $order_by_type = 'desc', $limit = '')
    {
        $users = App::get('database')->getData('users');
        return view('customers', compact('result'));
    }

    public function index()
    {
        return view('index');
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
    return redirect('users');
//        header('Location: /users');
    }
}
