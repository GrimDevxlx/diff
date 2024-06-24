

class UserController {
    private $model;

    public function __construct(User $userModel) {
        $this->model = $userModel;
    }

    public function userDetails($userId) {
        $user = $this->model->getUserById($userId);
        include 'views/user_details.php';
    }

    public function updateUser($userId, $name, $email) {
        $rowCount = $this->model->updateUser($userId, $name, $email);
        if ($rowCount > 0) {
            echo "User updated successfully!";
        } else {
            echo "Failed to update user.";
        }
    }
}
