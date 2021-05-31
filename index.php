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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>

    <h1>Users</h1>

    <ul>
        <li>
            <h3>user 0</h3>
            Name: <?php echo $user0->name; ?> <br>
            Lastname: <?php echo $user0->lastname; ?> <br>
            Age: <?php echo $user0->age; ?> <br>
            Email: <?php echo $user0->email; ?> <br>
        </li>

        <li>
            <h3>user 1</h3>
            Name: <?php echo $user1->name; ?> <br>
            Lastname: <?php echo $user1->lastname; ?> <br>
            Age: <?php echo $user1->age; ?> <br>
            Email: <?php echo $user1->email; ?> <br>
        </li>

        <li>
            <h3>user 2</h3>
            Name: <?php echo $user2->name ?> <br>
            Lastname: <?php echo $user2->lastname ?> <br>
            Age: <?php echo $user2->age ?> <br>
            Email: <?php echo $user2->email ?> <br>
        </li>
    </ul>
</body>
</html>
