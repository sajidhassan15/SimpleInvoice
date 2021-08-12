<?php


$router->get('', 'UsersController@index');
//Customer
$router->get('customers', 'CustomersController@getCustomers');
$router->get('addcust','CustomersController@addCustomer');
$router->post('addcustom','CustomersController@addCustom');
$router->post('deletecustomer','CustomersController@deleteCustomer');
$router->post('updatecustomer','CustomersController@updateCustomer');
$router->post('updateCustomer','CustomersController@setCustomer');

 //Product
$router->get('products', 'ProductsController@getProducts');
$router->get('addproduct','ProductsController@addProduct');
$router->post('addproducts','ProductsController@addProducts');
$router->post('deleteproduct','ProductsController@deleteProduct');
$router->post('updateproduct','ProductsController@updateProduct');
$router->post('updateProduct','ProductsController@setProduct');

//Invoices
$router->get('invoices', 'InvoicesController@getInvoices');
$router->get('addinvoice','InvoicesController@addInvoice');
$router->post('addinvoices','InvoicesController@addInvoices');
$router->post('deleteinvoice','InvoicesController@deleteInvoice');
$router->post('printinvoice','InvoicesController@printInvoice');
// $router->post('updateinvoice','InvoicesController@updateInvoice');
// $router->post('updateInvoice','InvoicesController@setInvoice');