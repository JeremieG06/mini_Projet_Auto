<?php



if (isset($_POST['email']) &&  isset($_POST['password'])) {
    foreach ($users as $users) {
        if (
            $users['email'] === $_POST['email'] &&
            $users['password'] === $_POST['password']
        ) {
            $loggedUser = [
                'email' => $users['email'],
            ];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['email'],
                $_POST['password']
            );
        }
    }
}
?>