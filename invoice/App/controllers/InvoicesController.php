<?php

namespace App\Controllers;
use App\Core\App;

class InvoicesController
{
    public function getInvoices()
    {
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
        App::get('database')->deleteData('invoice',['id' => $_POST['id']]);
        return redirect ('invoices');
    }
    public function printInvoice()
    {
        echo "print invoice";
        $invoice = App::get('database')->selectId('invoice',$_POST['id']);
        $customer = App::get('database')->selectId('user',$invoice['0']->cus_id);
        return view('invoice/invoice_p', compact('invoice','customer'));
    }
}
