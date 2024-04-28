<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>