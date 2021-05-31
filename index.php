<?php
    class User {
        public $name;

        public $lastname;

        public $age;

        public $username;

        public $date_of_birth;

        public $email;

        public $password;

        public function __construct($name, $lastname, $age, $email) {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
            $this->email = $email;
        }
    }

    $user0 = new User('Simone', 'Andreatta', '17', 'smandreatta92@gmail.com');

    $user1 = new User('Luca', 'Doliana', '22', 'dolianaluca@gmail.com');

    $user2 = new User('Alessia', 'Ferrari', '31', 'aleferrari83@gmail.com');
?>

