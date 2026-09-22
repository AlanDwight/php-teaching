<?php
$host = '127.0.0.1';
$db   = 'businessdb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // throw exceptions on errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,        // return associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                   // use real prepared statements
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "connected";
} catch (PDOException $e) {
    // Never expose $e->getMessage() directly to users in production
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}



$stmt = $pdo->prepare('SELECT * FROM users WHERE user_name = :user_name');
$stmt->execute([
    ':user_name'  => 'win',
]);
$user = $stmt->fetch(); // single row

foreach($user as $d){
    echo $d . "<br>"; 
}



// $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ? AND status = ?');
// $stmt->execute(['john@example.com', 'active']);


// // INSERT
// $stmt = $pdo->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
// $stmt->execute([':name' => 'Jane Doe', ':email' => 'jane@example.com']);
// $newId = $pdo->lastInsertId();

// // UPDATE
// $stmt = $pdo->prepare('UPDATE users SET status = :status WHERE id = :id');
// $stmt->execute([':status' => 'inactive', ':id' => $newId]);
// echo $stmt->rowCount(); // rows affected

// // DELETE
// $stmt = $pdo->prepare('DELETE FROM users WHERE id = :id');
// $stmt->execute([':id' => $newId]);



// $stmt = $pdo->query('SELECT * FROM users'); // for queries with no user input

// // Fetch one row
// $row = $stmt->fetch(PDO::FETCH_ASSOC);

// // Fetch all rows
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// // Fetch as objects
// $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

// // Fetch into a specific class
// class User {
//     public $id;
//     public $name;
//     public $email;
// }
// $stmt = $pdo->query('SELECT * FROM users');
// $users = $stmt->fetchAll(PDO::FETCH_CLASS, User::class);

// // Iterate row by row (memory-efficient for large result sets)
// $stmt = $pdo->query('SELECT * FROM users');
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['name'];
// }



// try {
//     $pdo->beginTransaction();

//     $stmt1 = $pdo->prepare('UPDATE accounts SET balance = balance - :amount WHERE id = :id');
//     $stmt1->execute([':amount' => 100, ':id' => 1]);

//     $stmt2 = $pdo->prepare('UPDATE accounts SET balance = balance + :amount WHERE id = :id');
//     $stmt2->execute([':amount' => 100, ':id' => 2]);

//     $pdo->commit();
// } catch (PDOException $e) {
//     $pdo->rollBack();
//     throw $e;
// }





// try {
//     $stmt = $pdo->prepare('SELECT * FROM non_existent_table');
//     $stmt->execute();
// } catch (PDOException $e) {
//     error_log($e->getMessage()); // log internally
//     // show a generic message to the user, not the raw error
// }





// class Database
// {
//     private static ?PDO $instance = null;

//     public static function getConnection(): PDO
//     {
//         if (self::$instance === null) {
//             $dsn = 'mysql:host=127.0.0.1;dbname=my_database;charset=utf8mb4';
//             $options = [
//                 PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//                 PDO::ATTR_EMULATE_PREPARES   => false,
//             ];
//             self::$instance = new PDO($dsn, 'db_user', 'db_password', $options);
//         }
//         return self::$instance;
//     }
// }

// // Usage anywhere in the app
// $pdo = Database::getConnection();
// $stmt = $pdo->prepare('SELECT * FROM users WHERE id = :id');
// $stmt->execute([':id' => 5]);
// $user = $stmt->fetch();



//This is the classic Singleton pattern:
//Static Factory Method
// public static function getConnection(): PDO
// {
//     if (self::$instance === null) {
//         // only runs the FIRST time this is called
//         self::$instance = new PDO(...);
//     }
//     return self::$instance; // every subsequent call just returns the existing one
// }