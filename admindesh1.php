<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admindesh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="modal fade" id="adduser" tabindex="-1"  aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content text-bg-secondary p-3">
          <div class="modal-header">
            <h5 class="modal-title" >Add New User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <p class="lead">Only for admin</p>
              <form action="adduser.php" method="POST">
                  <div class="mb-3">
                      <label for="name" class="col-form-label">
                          Username:
                      </label>
                      <input type="text" class="form-control" id="Name" name="Name">
                  </div>
                  <div class="mb-3">
                      <label for="password" class="col-form-label">
                          Password:
                      </label>
                      <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="mb-3">
                      <label for="ip" class="col-form-label">
                          IP Address:
                      </label>
                      <input type="text" class="form-control" id="ip" name="ip">
                  </div>
                  <div class="mb-3">
                      <label for="phone" class="col-form-label">
                          Phone:
                      </label>
                      <input type="number" class="form-control" id="phone" name="phone">
                  </div>
                  <div class="mb-3">
                      <label for="address" class="col-form-label">
                          Address:
                      </label>
                      <input type="text" class="form-control" id="address" name="address">
                  </div>
                  <div class="mb-3">
                      <label for="package" class="col-form-label">
                          package:
                      </label>
                      <select class="form-select" id="package" name="package">
                        <option selected>600</option>
                        <option value="800">800</option>
                        <option value="1000">1000</option>
                        <option value="1200">1200</option>
                        <option value="1500">1500</option>
                        <option value="2000">2000</option>
                      </select>
                  </div>
                  
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary bg-danger">Submit</button>
                    </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    <section style="padding: 50px;"><div class="container" >
      <button class="btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#adduser">Add User</button>
    </div></section>
    <section style="margin: 50px 0;">
        <div class="container">
          <h2>User Details</h2>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">User name</th>
                    <th scope="col">Password</th>
                    <th scope="col">Ip</th>
                    <th scope="col">Package</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM user";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $Id = $row['id'];
                                $Username = $row['Name'];
                                $password = $row['password'];
                                $ip = $row['ip'];
                                $package= $row['package'];
                                $phone = $row['phone'];
                                $address = $row['address'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $Username; ?></td>
                        <td><?php echo $password; ?></td>
                        <td><?php echo $ip; ?></td>
                        <td><?php echo $package; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $address; ?></td>
                        <!-- <td> <button class="btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#updateuser">Edit</button></td> -->
                        <td><a href="update.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $Id; ?>" class="btn btn-danger" >Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>

    <section style="margin: 50px 0;">
        <div class="container">
          <h2>New User Connection Request</h2>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Package</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM client_req";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $Id = $row['id'];
                                $name = $row['Name'];
                                $mobile = $row['mobile'];
                                $package= $row['package'];
                                $address = $row['Address'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $mobile; ?></td>
                        <td><?php echo $package; ?></td>
                        <td><?php echo $address; ?></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>

    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>