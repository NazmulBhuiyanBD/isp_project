<!DOCTYPE html>
<html lang="en">
<?php
require_once "conn.php";
if (isset($_POST["Name"]) && isset($_POST["password"]) && isset($_POST["ip"]) && isset($_POST["package"]) && isset($_POST["phone"]) && isset($_POST["address"])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $ip = $_POST['ip'];
    $package = $_POST['package'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql = "UPDATE results SET `name`= '$name', `password`= '$password', `ip`= '$ip', 'package'='$package' ,'phone'='$phone' ,'address'='$address' WHERE id= " . $_GET["id"];
    if (mysqli_query($conn, $sql)) {
        header("location: admindesh1.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Update Data</h1>
        <div class="container">
            <?php
            require_once "conn.php";
            $sql_query = "SELECT * FROM user WHERE id = " . $_GET["id"];
            if ($result = $conn->query($sql_query)) {
                while ($row = $result->fetch_assoc()) {
                    $Id = $row['id'];
                    $Username = $row['Name'];
                    $password = $row['password'];
                    $ip = $row['ip'];
                    $package= $row['package'];
                    $phone = $row['phone'];
                    $address = $row['address'];
            ?>
                    <form action="update.php?id=<?php echo $Id; ?>" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="">Username</label>
                                <input type="text" name="Name" id="Name" class="form-control" value="<?php echo $Name ?>" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="">Password</label>
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $password ?>" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="">IP Address</label>
                                <input type="text" name="ip" id="ip" class="form-control" value="<?php echo $ip ?>" required>
                            </div>
                            <div class="form-group  col-lg-3">
                                <label for="">Package</label>
                                <select name="package" id="package" class="form-control" required>
                                <option selected>600</option>
                        <option value="800">800</option>
                        <option value="1000">1000</option>
                        <option value="1200">1200</option>
                        <option value="1500">1500</option>
                        <option value="2000">2000</option>
                      
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="">Marks</label>
                                <input type="text" name="marks" id="marks" class="form-control" value="<?php echo $Marks ?>" required>
                            </div>
                            <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </section>
</body>

</html>