<?php

namespace App\Controllers;
use App\Core\App;

class InvoicesController
{
    public function getInvoices()
    {
        // echo "invoices controller";
        $result = App::get('database')->getData('invoice');
        return view('invoice/invoices', compact('result'));
    } 
    public function addInvoice()
    {
        $customer = App::get('database')->getData('user');
        $product = App::get('database')->getData('product');
        $invoice = App::get('database')->getData('invoice');
        return view('invoice/manage_invoices', compact('customer','product','invoice'));
    }
    public function addInvoices()
    {
        // echo implode(',',$_POST['quantity']) ;
        // echo "product  ".implode(',', $_POST['product']);
        // echo $_POST['code']."/".$_POST['customer']."/".$_POST['quantity'];
        App::get('database')->insertData('invoice',[
            'inv_code' => $_POST['code'],
            'cus_id' => $_POST['customer'],
            'prod_id' => implode(',', $_POST['product']),
            'prod_qut' =>  implode(',',$_POST['quantity'])
            ]);
        return redirect ('invoices');
    }
    public function deleteInvoice()
    {
        // echo "delete invoice... ";
        // echo  $_POST['id'];
        App::get('database')->deleteData('invoice',['id' => $_POST['id']]);
        return redirect ('invoices');
    }
    public function printInvoice()
    {
        echo "print invoice";
        $invoice = App::get('database')->selectId('invoice',$_POST['id']);
        $customer = App::get('database')->selectId('user',$invoice['0']->cus_id);
        // var_dump($customer);
        return view('invoice/invoice_p', compact('invoice','customer'));
    }

    // public function getInvoice()
    // {
    //     $product = App::get('database')->selectId('product',$_POST['id']);
    //     die(var_dump($invoice));
    //     // var_dump($result);
    //     return view('invoice/manage_invoices', compact('invoice'));
    // }
    // public function setInvoice()
    // {
    //     // echo "in set data..   ";
    //     // echo $_POST['id'];
    //     App::get('database')->updateData('invoice',[
    //         'pro_name' => $_POST['name'],
    //         'pro_code' => $_POST['code'],
    //         'pro_rate' => $_POST['rate']
    //         ],'id',$_POST['id']);
    //     return redirect ('invoices');
    // }
}
