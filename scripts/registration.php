<?php

if (emailAlreadyExists($db, $_POST['email']))
{
    echo "<h3>Sorry, but your e-mail
          address is already registered.</h3>";
}
else
{
    $query = "INSERT INTO customers(
        email,
        first_name,
        last_name,
        phone_number,
        home_address
    )
    VALUES (
        '$_POST[email]',
        '$_POST[first]',
        '$_POST[last]',
        '$_POST[phone]',
        '$_POST[address]'
    );";

    $success = mysqli_query($db, $query);
    echo "<h3>Thank you for registering.</h3>";
    echo "<h3>To register another go to
     <a href='../form.php'>click here</a>.</h3>";
}

mysqli_close($db);

function emailAlreadyExists($db, $email)
{
    $query = 
        "SELECT * 
        FROM customers
        WHERE email = '$email'";
    $user_information = mysqli_query($db, $query);
    $numRecords = mysqli_num_rows($user_information);
    return ($numRecords > 0) ? true : false;
}
?>
