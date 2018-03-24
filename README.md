# laravel-AdminLTE
AdminLTE Theme with laravel Master pages. 

Clone and use AdminLTE theme for your project 

1. Configure .env file
2. Generate Key

	`    php artisan key:generate`

3. Setup Database Credencial 



## How to Create New Page. 

  @extends('layouts.master')
  
  @section('title','<page title>')
  
  @section('module','<Module breadcrumb>')
  
  @section('module_details','Parent breadcrumb')
  
  @section('current_nav','Child breadcrumb')
  
  @section('body_section')
`  <!-- HTML Part  -->
`
  @endsection
