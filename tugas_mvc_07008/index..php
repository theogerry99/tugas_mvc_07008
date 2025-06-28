<?php
require_once 'controllers/StudentController.php';

$app = new StudentController();

$action = $_GET['action'] ?? 'show';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        $app->createForm();
        break;
    case 'save':
        $app->saveNew();
        break;
    case 'edit':
        $app->editForm($id);
        break;
    case 'update':
        $app->applyUpdate($id);
        break;
    case 'remove':
        $app->remove($id);
        break;
    default:
        $app->showAll();
        break;
}
?>
