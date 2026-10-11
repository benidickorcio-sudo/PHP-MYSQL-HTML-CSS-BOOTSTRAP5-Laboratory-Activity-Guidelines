<?php 

include ("dbcon.php");

$message = '';

if (isset ($_POST['add_user'])) {
    $name = 
trim ($_POST['name']);  
    $email = trim ($_POST['email']);

    if (!empty ($name) && !empty ($email)) {
        $stmt = 
    $conn->prepare("INSERT INTO users) VALUES (?, ?");
    $stmt->bind_param('ss', $name, $email);

    if ($stmt->execute()) {
        $message = "<p
style = 'color:green',>>User, added successfully! </p>";
    }else {
        $message = "<p
style = 'color:red',> Error Adding The User!. </p>";
    }
        $stmt->close();
    }else { 
        $message = "<p
style = 'color:red,>Please Fill The Blank!. </p>";
    }
}

$result = $conn->query("SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_lab_activity_2026    </title>
    <style>
        body (font-family: Arial, sans-serif; margin: 30px;)
            form {
                margin-bottom:25px;
                padding: 15px;
                border: 1px solid;
                width: 300px;
            }

            input ["type = text"],
            input ["type = email"] {
                width;100%;
                padding: 8px; 
                margin: 5px 0 12px; 
                box-sizing: border-box; 
            }

                input ["type = submit"]

                {
                    color: white;
                    background: blue;
                    border: none;
                    padding: 10px 15px;
                    curson: pointer;
                }

                table {border-collapse:collapse;width: 100%;
                max-width: 700px;
                }
    </style>
            


</head>
<body>

    <h2> Add Users </h2>
    <?php echo $message; ?>
    <form method = "POST" action = "index.php">
        <label>Name: </label>
        <input type = "text"
        name = "name" required>

        <label> Email: </label>
        <input type = "email"
        name = "email" required>

        <input type = "submit"
        name = "add_user" value = "Add users">

    </form>


    <h2>Registred Users</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            

        </tbody>
    </table>
    







    
    
</body>
</html>