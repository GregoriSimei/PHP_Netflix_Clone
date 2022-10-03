<?php
    include(__DIR__."/../model/user.php");

    function create_user(User $user) {
        include("./server/database/index.php");
        $sql = $pdo->prepare("INSERT INTO users (user, email, pass) VALUES (?,?,?)");
        $sql -> execute([$user->name, $user->email, $user->pass]);
        $userFound = find_user_by_email($user->email);
        return $userFound;
    }

    function find_user_by_email_and_password(string $email, string $passUser) {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM users WHERE email = "'.$email.'" AND pass = "'.$passUser.'" LIMIT 1');
        $userFound = $sql->fetch();
        return $userFound;
    }

    function find_user_by_email(string $email) {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM users WHERE email = "'.$email.'" LIMIT 1');
        $userFound = $sql->fetch();
        return $userFound;
    }

    function list_all_users(){
        try {
            include("./server/database/index.php");
            $query = $pdo->query("SELECT  * FROM users");
            $users_array = array();
            while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
                $userToCreate = new User($linha['id'],$linha['user'],$linha['email'],$linha['pass']);
                array_push($users_array, $userToCreate);
            }
            return $users_array;
            // echo $sql->rowCount();
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    
    }
    
    function select_user($id){
        echo "chamou";
        try {
            include("./server/database/index.php");
            $stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
            $stmt->execute([$id]); 
            $user = $stmt->fetch();
            echo "aqui";
            // $userObj = new User($user['id'],$user['user'],$user['email'],$user['pass']);
            return $userObj;
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    function update_user(){
        include("./server/database/index.php");

        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $update = true;
            $stmt = $pdo->prepare('UPDATE users SET user = :user, email = :email, pass = :pass WHERE id = :id');
            $stmt->execute(array(
                ':id'   => $id,
                ':user' => $nome
            ));
    
            if (count($record) == 1 ) {
                $n = mysqli_fetch_array($record);
                $name = $n['name'];
                $address = $n['address'];
            }
        }
    }
?>