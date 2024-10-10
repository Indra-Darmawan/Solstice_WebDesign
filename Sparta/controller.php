<?php 

function select($query)
{
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows = $row;
    }
    return $row;
}

function register_user($post)
{
    global $db;

    // Sanitasi input untuk menghindari SQL Injection
    $nama_user = mysqli_real_escape_string($db, $post['nama_user']);
    $password = mysqli_real_escape_string($db, $post['password']);
    $email_user    = mysqli_real_escape_string($db, $post['email_user']);

    // Cek apakah email sudah ada
    $check_user = mysqli_query($db, "SELECT email_user FROM users WHERE email_user = '$email_user'");
    if (mysqli_fetch_assoc($check_user)) {
        return 0; // Email sudah terdaftar
    }

    // Hash password sebelum disimpan
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menambahkan user baru
    $query = "INSERT INTO users ( nama_user, email_user, password) VALUES ('$nama_user', '$email_user', '$password_hashed')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

?>