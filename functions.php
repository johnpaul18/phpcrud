<?php
    function showAllData(){
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        return $result;
    }

    function actions(){
            if($_POST['action'] == "update"){
                updateTable($_POST);
            }
            if($_POST['action'] == "delete"){
                deleteUser($_POST);
            }
            if($_POST['action'] == "add"){
                addUser($_POST);
            }
    }

    function updateTable($users){
        global $connection;
        $query = "UPDATE users SET username='".$users['username']."',password='".$users['password']."' WHERE id=".$users['userId'];
        $result = mysqli_query($connection, $query);
        return $result;
    }

    function deleteUser($users){
        global $connection;
        $query = "DELETE FROM users WHERE id=".$users['userId'];
        $result = mysqli_query($connection, $query);
    }

    function addUser($users){
        global $connection;
        $query = "INSERT INTO users (username, password) VALUES ('".$users['username']."','".$users['password']."')";
        $result = mysqli_query($connection, $query);
    }
?>