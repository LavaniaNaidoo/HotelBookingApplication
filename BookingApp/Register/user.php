<?php 

// Includes database configuration files
include __DIR__ . "/config.php";

class User{
    private $id;
    private $name;
    private $email;

    public function __construct($id, $name, $email){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    } 
}


function customer (){ // Processes register form inputs to database

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    // Inserts query into database table users
    global $connect;
    $sql = "INSERT INTO customer (name, email ) VALUES ('$name','$email','customer')";

    if ($connect->query($sql) === TRUE) {
        echo "User registered successfully!";

        // Closes connection
        mysqli_close($connect);

        header("Location: ../index.php");
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;

        // Closes connection
        mysqli_close($connect);

        header("Location: ../index.php");
        exit();
    }
}

function userLogout(){
    if(session_destroy()) {
        header("Location: ./index.php");
     }
}

// Getters & Setters

     function getId()
    {
        return $this->id;
    }


     function setId($id)
    {
        $this->id = $id;

        return $this;
    }


     function name()
    {
        return $this->name;
    }


     function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    
     function getEmail()
    {
        return $this->email;
    }


     function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

?>