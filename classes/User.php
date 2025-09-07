<?php

require_once "Database.php";

class User extends Database{
    //this class will use Database class's constructor and $conn

    //register new user
    public function store($request){ //$request = $_POST = data from form
        $first_name = $request['first_name'];
        $last_name  = $request['last_name'];
        $username   = $request['username'];
        $password   = password_hash($request['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";

        if($this->conn->query($sql)){
            header("location: ../views"); //go to login/index
            exit;
        }else{
            die("Unable to register user: ".$this->conn->error);
        }
    }

    public function login($request){
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $results = $this->conn->query($sql);

        //check if user is found

        if($results->num_rows == 1){
            $user = $results->fetch_assoc();

            //check if password is correct
            if(password_verify($password, $user['password'])){
                //create session variables
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['first_name'].' '.$user['last_name'];

                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Password is incorrect.");
            }
        }else{
            die("User not found.");
        }
    }

    //get a list of all users
    public function all(){
        $sql = "SELECT * FROM users";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving users: ".$this->conn->error);
        }
    }

    //get the data of 1 user with ID = $id
    public function find($id){
        $sql = "SELECT * FROM users WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc(); //return array
        }else{
            die("Error retrieving user: ".$this->conn->error);
        }
    }

    public function update($request, $files){
        session_start();
        $id = $_SESSION['user_id'];
        $first_name = $request['first_name'];
        $last_name  = $request['last_name'];
        $username   = $request['username'];
        $file_name  = $files['photo']['name'];
        $tmp_name   = $files['photo']['tmp_name'];

        $sql = "UPDATE users SET first_name = '$first_name',
                                 last_name = '$last_name',
                                 username = '$username'
                                 WHERE id = $id";

        if($this->conn->query($sql)){
            $_SESSION['username'] = $username;
            $_SESSION['full_name'] = "$first_name $last_name";

            //if there is uploaded photo, save it to database and images folder
            if($file_name){
                $sql = "UPDATE users SET photo = '$file_name' WHERE id = $id";
                $destination = "../assets/images/$file_name";

                if($this->conn->query($sql)){
                    if(move_uploaded_file($tmp_name, $destination)){
                            header("location: ../views/dashboard.php");
                            exit;
                        }else{
                            die("Cannot move photo.");
                        }
                }else{
                    die("Error updating photo: ".$this->conn->error);
                }
            }
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error updating user: ".$this->conn->error);
        }
    
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();

        header("location: ../views/index.php");
        exit;
    }

    public function delete(){
        session_start();
        $id = $_SESSION['user_id'];

        $sql = "DELETE FROM users WHERE id = $id";

        if($this->conn->query($sql)){
            $this->logout();
        }else{
            die("Error deleting your account: ".$this->conn->error);
        }
    }
}

?>