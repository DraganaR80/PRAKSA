<?php 

class Admins{

private $id;
private $email;
private $password;





	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}
	
	/**
	 * @param mixed $password 
	 * @return self
	 */
	public function setPassword($password): self {
		$this->password = $password;
		return $this;
	}

    public function __construct($id,$email, $password,)
    {
    $this->id=$id;
    $this->email=$email;
    $this->password=$password;
     
    }

    public static function login($email, $password, mysqli $conn)
    {
        $q = "SELECT * FROM  admins WHERE email='$email' AND password='$password' limit 1;";
        return $conn->query($q);
    }
}







?>