<?php

include 'Database.php';



class Usert{
    public function login() {
        $database = new Database();

        $connection = $database->connect();


        if(isset($_POST['email']) && isset( $_POST['password'])) {

            $queryStatement = $connection->prepare("SELECT * FROM users WHERE email = :email ");
            $queryStatement->execute([':email' => $_POST['email']]);

            $result = $queryStatement->fetchAll();

            if (!empty($result[0])) {

                $result = $result[0];

                if ($_POST['password'] === $result['password']) {
                    header('Location: index.php');
                    $_SESSION['loggedin'] = 1;
                } else {
                    echo '<br>Uw e-mailadres of wachtwoord is verkeerd!';
                }
            } else {
                echo '<br>Uw e-mailadres of wachtwoord is verkeerd!';
            }
        }
    }
    public function loggedIn() {
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === 1) {
            return true;
        } else {
            return false;
        }
    }
    public function register() {

    }
}