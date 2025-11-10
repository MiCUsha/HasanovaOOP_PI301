<?php
class User {
    public function solve($n) 
}
class Student extends User {}
class Teacher extends User {
    public function check_solution($user, $n)
}
class Admin extends User {
    public function edit($n) 
}
class SuperAdmin extends Admin {
    public function grant($user)
}
?>