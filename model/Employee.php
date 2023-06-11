<?php

class Employee {

private $id;
private $name;
private $surname;
private $birthday;
private $employmentDate;

private $netoSallary;
private $vacation;
private $department;
private $education;


public function __construct($id,$name, $surname,$birthday,$employmentDate,$netoSallary,$vacation,$department,$education)
{
$this->id=$id;
$this->name=$name;
$this->surname=$surname;
$this->birthday=$birthday;
$this->employmentDate=$employmentDate;
$this->netoSallary=$netoSallary;
$this->vacation=$vacation; 
$this->department=$department; 
$this->education=$education; 
}



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
	public function getName() {
		return $this->name;
	}
	
	/**
	 * @param mixed $name 
	 * @return self
	 */
	public function setName($name): self {
		$this->name = $name;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSurname() {
		return $this->surname;
	}
	
	/**
	 * @param mixed $surname 
	 * @return self
	 */
	public function setSurname($surname): self {
		$this->surname = $surname;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBirthday() {
		return $this->birthday;
	}
	
	/**
	 * @param mixed $birthday 
	 * @return self
	 */
	public function setBirthday($birthday): self {
		$this->birthday = $birthday;
		return $this;
	}

    public function getEmploymentDate() {
		return $this->employmentDate;
	}
	
	/**
	 * @param mixed $employmentDate
	 * @return self
	 */
	public function employmentDate($employmentDate): self {
		$this->employmentDate = $employmentDate;
		return $this;
	}
	/**
	 * @return mixed
	 */
	public function getNetoSallary() {
		return $this->netoSallary;
	}
	
	/**
	 * @param mixed $netoSallary 
	 * @return self
	 */
	public function setNetoSallary($netoSallary): self {
		$this->netoSallary = $netoSallary;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getVacation() {
		return $this->vacation;
	}
	
	/**
	 * @param mixed $vacation 
	 * @return self
	 */
	public function setVacation($vacation): self {
		$this->vacation = $vacation;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDepartment() {
		return $this->department;
	}
	
	/**
	 * @param mixed $department 
	 * @return self
	 */
	public function setDepartment($department): self {
		$this->department = $department;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEducation() {
		return $this->education;
	}
	
	/**
	 * @param mixed $education 
	 * @return self
	 */
	public function setEducation($education): self {
		$this->education = $education;
		return $this;
	}

	public static function getAll(mysqli $conn){

		$q= " SELECT * FROM employees";
		return $conn->query($q);

}

public static function add($name, $surname,$birthday, $employmentDate,$netoSallary,$vacation,$department,$education, mysqli $conn){
	$q= "INSERT INTO employees (name,surname,birthday,employmentDate,netoSallary,vacation,department,education)
	VALUES('$name', '$surname','$birthday','$employmentDate','$netoSallary','$vacation','$department','$education')";
	
	return $conn->query($q);
	
	}
	public static function deleteById ($id, mysqli $conn){

		$q= " DELETE FROM employees WHERE id=$id";
	
	return $conn->query($q);
	
	
	}

	public static function update($id,$netoSallary,$vacation, mysqli $conn){

		$q= "UPDATE employees SET netoSallary='$netoSallary', vacation='$vacation' WHERE id='$id' ";
		return $conn->query($q);
	}
}





?>