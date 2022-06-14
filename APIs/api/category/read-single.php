<?php

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../database/database.php';
  include_once '../../models/category.php';

  $database = new Database();
  $db = $database->connect();

  $category = new Category($db);


  $category->id = isset($_GET['id']) ? $_GET['id'] : die();


  $category->read_single();


  $category_arr = array(
    'id' => $category->id,
    'name' => $category->name
  );

  
  print_r(json_encode($category_arr));
