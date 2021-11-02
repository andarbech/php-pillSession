<?php
class Login
{
    private $error = "aaaaaaaa";

    public function evaluate($data, $row)
    {
        // print_r($data);
        $email = $data['email'];
        $password = $data['password'];

        $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        // echo $query;
        $DataBase = new DataBaseUsers();
        $DataBase->read_db($query);
        print_r($row);
        foreach ($row as $key => $value) {
            echo "<pre>";
            echo $row;
            echo "</pre>";
        }
        if (empty($value)) {
            // $this->error = $this->error . $key . " " . "está vacío no vayas de listo 😉" . "<br>";
            echo $value;
        }
        // $result=empty($row);
        // print_r($result);
        // if ($result===true) {
        //     echo " No estas registrado :/ venga resgistrate! que no te vamos a cobrar nada" . "<br>";
        // } else {
        //     print_r($row);
        //     if ($password == $row['password']) {
        //         echo " contraseñas coinciden";
        //     } else {
        //         echo "Contraseña errónea intentalo con 123abc";
        //     }
        // }
        // return $this->error;
        //     if ($result) {
        //         $row = $result[0];
        //         print_r($row['password']);
        //         // if ($password == $row['password']) {
        //         //     $_SESSION['myfirstbd_userId'] = $row['userId'];
        //         // } else {
        //         //     $this->error .= "Contraseña errónea intentalo con 123abc";
        //         // }
        //     } else {
        //         $this->error .= " No estas registrado :/ venga resgistrate! que no te vamos a cobrar nada" . "<br>";
        //     }
        //     return $this->error;
        // }

        // public function checkLogin($userId)
        // {

        //     $query = "SELECT userId FROM users WHERE userId='$userId' LIMIT 1";
        //     // echo $query;
        //     $DataBase = new DataBaseUsers();
        //     $result = $DataBase->read_db($query);
        //     if ($result) {
        //         return true;
        //     }
        //     return false;
    }
}
