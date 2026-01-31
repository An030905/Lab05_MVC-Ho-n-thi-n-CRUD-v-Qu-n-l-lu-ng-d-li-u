<?php
namespace App\Models;

use PDO;

class Product extends BaseModel {
  
    public function all() {
        $sql = "SELECT * FROM students"; 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

  
    public function find($id) {
        $sql = "SELECT * FROM students WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

   
    public function delete($id) {
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
    public function insert($data) {
    $sql = "INSERT INTO students (fullname, student_code, email) VALUES (:fullname, :student_code, :email)";
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute([
        'fullname'     => $data['fullname'],
        'student_code' => $data['student_code'],
        'email'        => $data['email']
    ]);
}
public function update($id, $data) {
    $sql = "UPDATE students SET fullname = :fullname, student_code = :student_code, email = :email WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute([
        'fullname'     => $data['fullname'],
        'student_code' => $data['student_code'],
        'email'        => $data['email'],
        'id'           => $id
    ]);
}
public function search($keyword) {
    $sql = "SELECT * FROM students WHERE fullname LIKE :keyword";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(['keyword' => '%' . $keyword . '%']);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}