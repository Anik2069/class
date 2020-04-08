<?php
error_reporting(0)
?>

<html>
<head>
    <title>
        CRUD
    </title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="row container-fluid">

    <div class="col-md-6">
        <form class="form-group" method="post">

            Name:<input type="text" form="form-control" name="username"><br>
            Password:<input type="password" form="form-control" name="pass"><br>
            Confirm Password:<input type="password" form="form-control" name="cpass"><br>
            <input type="submit" name="submit">


        </form>

    </div>
</div>

<?php
if (isset($_POST['submit'])) {

    if ($_POST['pass'] == $_POST['cpass']) {
        echo 'Passwords are equal';
    } else {
        echo 'Passwords are not equal';
    }
}
?>


</body>
</html>