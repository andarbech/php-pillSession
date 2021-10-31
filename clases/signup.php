<?php
class Signup
{
    private $error = "";

    public function evaluate($data)
    {
        foreach ($data as $key => $value) {
            echo "<pre>";
            // print_r($data);
            echo "</pre>";
            if (empty($value)) {
                $this->error = $this->error . $key . " " . "está vacío no vayas de listo 😉" . "<br>";
                echo $value;
            }
        }
        if ($this->error === "") {
            // echo "inside error vacio";
            $this->createUser($data);
        } else {
            return $this->error;
        }
    }



    public function createUser($data)
    {
        // $id = $data["id"];
        $email = $data["email"];
        $password = $data["password"];
        // $date = $data["date"];

        //create funtions
        $url_address = $this->createUrl();
        $userId = $this->createUserId();

        $query = "INSERT INTO
        users(userId,email,password,url_address) 
        VALUES (

        '$userId','$email','$password','$url_address')";
        $DataBase = new DataBaseUsers();
        $DataBase->save_db($query);
        // echo $query;
    }
    /* query:id, ,date*/
    /* '$id, ,'$date'*/
    //create a random number 
    private function createUserId()
    {
        $lenght = random_int(4, 19);
        $number = "";
        for ($i = 0; $i < $lenght; $i++) {
            $new_rand = rand(0, 9);
            $number = $number . $new_rand;
        }
        return $number;
    }
    //create e random str
    private function createUrl()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring = $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }
}
