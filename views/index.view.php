<?php
include "./connection.php";

if (isset($_POST['but_submit'])) {
    $uname = mysqli_real_escape_string($con, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($uname != "" && $password != "") {
        $sql_query = "select count(*) as cntUser from tbl_bhnftuser where name='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);

        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['loggedin'] = true;
            $_SESSION['uname'] = $uname;
            $_SESSION['password'] = $password;
            header('Location: home');
        } else {
            echo "Invalid username and password";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Using the base tag here lets sub folders correctly find css/imgs etc -->
    <!--<base href="http://localhost/oncall">-->

    <meta charset="utf-8">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>On Call Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="/public/css/styles.css">

</head>

<body>


    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="bhnft-login m-5">
            <div class="card p-4">
                <div class="container bg-light">
                    <form method="post" action="">
                        <div class="form-group">
                            <h1 class="d-flex justify-content-center">Login</h1>
                            <div class="form-group">
                                <label for="txt_uname">Username</label>
                                <input type="text" class="form-control" id="txt_uname" name="txt_uname" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label for="txt_pwd">Password</label>
                                <input type="password" class="form-control" id="txt_pwd" name="txt_pwd" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-outline-primary mb-3 float-right" value="Submit" name="but_submit" id="but_submit">Submit</button>
                            </div>
                           

                    </form>
                </div>

            </div>
        </div>
        <div>

        </div>
    </div>