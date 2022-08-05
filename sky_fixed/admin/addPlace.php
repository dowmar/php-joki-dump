<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href="../css/everything.css">

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="css/styles.css" rel="stylesheet" />
</head>


<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Admin Dashboard - Add Place</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">User Settings</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="allUser.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Edit User</span></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Location Settings</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="addPlace.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Add Location</span></a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="" alt="" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../form_menu/logout.php">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="free vh-100">
            <div class="free-main bg-light text-dark rounded-3 my-5">
                <div class="row g-0" style="width: 800px;">
                    <div class="col">
                        <form method="post" action="addPlace_setting.php" enctype="multipart/form-data">
                            <div class="d-flex
                             justify-content-center
                             align-items-center
                             flex-column">
                                <h3 class="display-4 fs-1 
                            text-center">
                                    Add Product</h3>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    ID Kota 1-3</label>
                                <input type="number" max="3" class="form-control" name="id_kota" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Alamat</label>
                                <input type="text" class="form-control" name="alamat" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Harga Tempat</label>
                                <input type="number" class="form-control" name="harga" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Gambar Tempat</label>
                                <input type="file" class="form-control" name="gambar" required>
                            </div>

                            <button type="submit" name="add" id="addBtn" class="btn btn-primary">
                                Add Location</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>