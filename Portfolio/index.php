<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <title>Challenge</title>
  </head>

  <body style="background-color: aliceblue">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../blog/blogpage.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">My Inventory</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div
        class="container mt-5"
        style="background-color: white; border-radius: 2%"
      >
        <div class="row">
          <div class="col-sm-2 ms-5 mt-3">
            <img src="img1.png" alt="" />
          </div>
          <div class="col-sm-4 ms-2 mt-4">
            <h4 id="name">Zhafranuarry Bawafi</h4>
            <p id="roleid">Front End Designer</p>
            <button type="button" class="btn btn-primary mt-4" onclick="editData()">
              Edit
            </button>
            <button type="button" class="btn btn-outline-success mt-4 ms-2">
              Resume
            </button>
          </div>
          <div class="col-4">
            <table class="table table-borderless mt-3">
              <tbody>
                <tr>
                  <th scope="row">Availability</th>
                  <td id="availid">Fulltime</td>
                </tr>
                <tr>
                  <th scope="row">Usia</th>
                  <td id="usiaid">24</td>
                </tr>
                <tr>
                  <th scope="row">Lokasi</th>
                  <td colspan="2" id="lokasiid">Tangerang Selatan</td>
                </tr>
                <tr>
                  <th scope="row">Pengalaman</th>
                  <td colspan="2" id="expid">2</td>
                </tr>
                <tr>
                  <th scope="row">Email</th>
                  <td colspan="2" id="emailid">zhafranuarrybawafi@gmail.com</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div
      class="container mt-5 p-4 mb-5" id="form"
      style="background-color: white; border-radius: 1%; visibility: hidden;"
    >
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" required />
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Role</label>
          <input type="text" class="form-control" id="role" required />
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label"
            >Availability</label
          >
          <input type="text" class="form-control" id="availability" required />
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Age</label>
          <input type="text" class="form-control" id="age" required />
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Lokasi</label>
          <input type="text" class="form-control" id="lokasi" required />
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label"
            >Year Experience</label
          >
          <input type="text" class="form-control" id="experience" required />
        </div>
        <div class="mb-5">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" id="email" required />
        </div>
        <button
          type="button"
          onclick="updateData()"
          class="w-100 btn btn-success mb-3"
        >
          Success
        </button>
    </div>
  </body>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
