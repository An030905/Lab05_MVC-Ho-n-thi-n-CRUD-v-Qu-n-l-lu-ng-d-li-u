<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {
    public function index() {
    $model = new Product();
    $keyword = $_GET['search'] ?? ''; 

    if (!empty($keyword)) {
        $products = $model->search($keyword);
    } else {
        $products = $model->all();
    }
    
    include __DIR__ . '/../../views/product_list.php';
}

    public function detail() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $model = new Product();
            $product = $model->find($id);
            include __DIR__ . '/../../views/product_detail.php';
        }
    }

    public function destroy() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $model = new Product();
            $model->delete($id);
           
            header("Location: index.php?page=product-list");
            exit();
        }
    }

public function create() {
    include __DIR__ . '/../../views/product_add.php';
}


public function store() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname     = $_POST['fullname'] ?? '';
        $student_code = $_POST['student_code'] ?? '';
        $email        = $_POST['email'] ?? '';

        
        if (empty($fullname) || empty($student_code) || empty($email)) {
            die("Vui lòng nhập đầy đủ thông tin!");
        }

        $model = new Product();
        $model->insert([
            'fullname'     => $fullname,
            'student_code' => $student_code,
            'email'        => $email
        ]);

        
        header("Location: index.php?page=product-list");
        exit();
    }
}

public function edit() {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $model = new Product();
        $product = $model->find($id); 
        include __DIR__ . '/../../views/product_edit.php';
    }
}


public function update() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $data = [
            'fullname'     => $_POST['fullname'],
            'student_code' => $_POST['student_code'],
            'email'        => $_POST['email']
        ];

        $model = new Product();
        $model->update($id, $data);

        header("Location: index.php?page=product-list");
        exit();
    }
}
}