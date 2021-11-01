<?php
class Login
{
    private $error = "";

    public function evaluate($data)
    {
        // print_r($data);
        $email = $data['email'];
        $password = $data['password'];
        $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        // echo $query;
        $DataBase = new DataBaseUsers();
        $result = $DataBase->read_db($query);
        if ($result) {
            $row = $result[0];
            var_dump($row);

            if ($password == $row['password']) {

                $_SESSION['myfirstbd_userId'] = $row['userId'];
            } else {
                $this->error .= "Contraseña errónea intentalo con 123abc";
            }
        } else {
            $this->error .= " No estas registrado :/ venga resgistrate! que no te vamos a cobrar nada" . "<br>";
        }
        return $this->error;
    }

    public function checkLogin($userId)
    {

        $query = "SELECT userId FROM users WHERE userId='$userId' LIMIT 1";
        // echo $query;
        $DataBase = new DataBaseUsers();
        $result = $DataBase->read_db($query);
        if ($result) {
            return true;
        }
        return false;
    }
}
