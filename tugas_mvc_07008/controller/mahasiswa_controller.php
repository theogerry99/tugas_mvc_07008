<?php
require_once 'models/StudentModel.php';

class StudentController {
    public function showAll() {
        $student = new StudentModel();
        $list = $student->fetchAll();
        require 'views/student_list.php';
    }

    public function createForm() {
        require 'views/student_create.php';
    }

    public function saveNew() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student = new StudentModel();
            $student->insert($_POST['fullname'], $_POST['student_id']);
            header('Location: index.php');
            exit();
        }
    }

    public function remove($id) {
        if ($id) {
            $student = new StudentModel();
            $student->remove($id);
        }
        header('Location: index.php');
        exit();
    }

    public function editForm($id) {
        $student = new StudentModel();
        $record = $student->findById($id);
        require 'views/student_edit.php';
    }

    public function applyUpdate($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student = new StudentModel();
            $student->modify($id, $_POST['fullname'], $_POST['student_id']);
            header('Location: index.php');
            exit();
        }
    }
}
?>
