<?php
class User {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function send_message($user, $message) {
    }
    public function post($message) {
    }
    public function info() {
        return "";
    }
    public function describe() {
        echo $this->name . $this->info() . "\n";
    }
}

class Person extends User {
    private $birth_date;
    public function __construct($name, $birth_date) {
        parent::__construct($name);
        $this->birth_date = $birth_date;
    }
    public function info() {
        return " Дата рождения: " . $this->birth_date;
    }
    public function subscribe($user) {
    }
}

class Community extends User {
    private $description;
    
    public function __construct($name, $description) {
        parent::__construct($name);
        $this->description = $description;
    }
    
    public function info() {
        return " Описание: " . $this->description;
    }
}

?>