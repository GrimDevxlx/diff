
//  usage
<?php
require_once 'models/User.php';
require_once 'controllers/UserController.php';

$pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');
$userModel = new User($pdo);
$userController = new UserController($userModel);

// Route requests based on query parameters or URL routing
$action = $_GET['action'] ?? '';

switch ($action) {
    case 'user-details':
        $userId = $_GET['id'] ?? 0;
        $userController->userDetails($userId);
        break;
    case 'update-user':
        $userId = $_POST['id'] ?? 0;
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $userController->updateUser($userId, $name, $email);
        break;
    default:
        echo "Invalid action.";
}
?>