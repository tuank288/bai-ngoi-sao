<?php
    require_once './Database/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container" style="max-width: 1140px;">
    <header>
        <div class="flex">
            <div class="store">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-badge-ad-fill" viewBox="0 0 16 16">
                        <path d="M11.35 8.337c0-.699-.42-1.138-1.001-1.138-.584 0-.954.444-.954 1.239v.453c0 .8.374 1.248.972 1.248.588 0 .984-.44.984-1.2v-.602zm-5.413.237-.734-2.426H5.15l-.734 2.426h1.52z"/>
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm6.209 6.32c0-1.28.694-2.044 1.753-2.044.655 0 1.156.294 1.336.769h.053v-2.36h1.16V11h-1.138v-.747h-.057c-.145.474-.69.804-1.367.804-1.055 0-1.74-.764-1.74-2.043v-.695zm-4.04 1.138L3.7 11H2.5l2.013-5.999H5.9L7.905 11H6.644l-.47-1.542H4.17z"/>
                    </svg>
                    Liên hệ quảng cáo
                </a>
            </div>
            <div class="logo">
                <img src="./logo/logo_ns.svg" alt="">
            </div>
            <div class="right-head">
                <div class="search-contain">
                    <div class="box">
                      <form class="sbox" action="/search" method="get">
                          <input class="stext" type="text" name="q" placeholder="Search">
                          <a class="sbutton" type="submit" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                          </a>
                      </form>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light pad">
          <div class="container-fluid">
              <div class="brand-logo">
                  <a href="#">
                      <img src="./image/1200px-logo_nike.svg_.png"  alt="">
                  </a>
              </div>
              <div class="button-navbar">
                  <div class="btn-group">
                      <a href="#"><i class="bi bi-search"></i></a>
                      <a href="#"><i class="bi bi-bag"></i></a>
                  </div>
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
              </div>

            <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php
                            $query = "SELECT Name FROM Navigation Where Parent = 1";
                        ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> ShowBiz </a>
                            <div class = "dropdown-menu">
                            <?php
                                $result = mysqli_query($conn,$query);
                                if(!$result){
                                    die('Error ' . mysqli_error($conn));
                                }
                                if(mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <a class="dropdown-item" href="#"><?php echo $row['Name']; ?> </a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <?php
                            $query = "SELECT Name FROM Navigation Where Parent = 2";
                        ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Thời trang </a>
                            <div class = "dropdown-menu">
                            <?php
                                $result = mysqli_query($conn,$query);
                                if(!$result){
                                    die('Error ' . mysqli_error($conn));
                                }
                                if(mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <a class="dropdown-item" href="#"><?php echo $row['Name']; ?> </a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <?php
                            $query = "SELECT Name FROM Navigation Where Parent = 3";
                        ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Làm đẹp </a>
                            <div class = "dropdown-menu">
                            <?php
                                $result = mysqli_query($conn,$query);
                                if(!$result){
                                    die('Error ' . mysqli_error($conn));
                                }
                                if(mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <a class="dropdown-item" href="#"><?php echo $row['Name']; ?> </a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <?php
                            $query = "SELECT Name FROM Navigation Where Parent = 4";
                        ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Ăn chơi </a>
                            <div class = "dropdown-menu">
                            <?php
                                $result = mysqli_query($conn,$query);
                                if(!$result){
                                    die('Error ' . mysqli_error($conn));
                                }
                                if(mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <a class="dropdown-item" href="#"><?php echo $row['Name']; ?> </a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <?php
                            $query = "SELECT Name FROM Navigation Where Parent = 5";
                        ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Lối sống </a>
                            <div class = "dropdown-menu">
                            <?php
                                $result = mysqli_query($conn,$query);
                                if(!$result){
                                    die('Error ' . mysqli_error($conn));
                                }
                                if(mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <a class="dropdown-item" href="#"><?php echo $row['Name']; ?> </a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown"> Thể thao </a>
                    </li>
                    <li class="nav-item">
                        <?php
                            $query = "SELECT Name FROM Navigation Where Parent = 6";
                        ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Thời cuộc </a>
                            <div class = "dropdown-menu">
                            <?php
                                $result = mysqli_query($conn,$query);
                                if(!$result){
                                    die('Error ' . mysqli_error($conn));
                                }
                                if(mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <a class="dropdown-item" href="#"><?php echo $row['Name']; ?> </a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <?php
                            $query = "SELECT Name FROM Navigation Where Parent = 7";
                        ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Thương trường </a>
                            <div class = "dropdown-menu">
                            <?php
                                $result = mysqli_query($conn,$query);
                                if(!$result){
                                    die('Error ' . mysqli_error($conn));
                                }
                                if(mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <a class="dropdown-item" href="#"><?php echo $row['Name']; ?> </a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown"> Trắc nhiệm </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown"> Video </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown"> Ảnh </a>
                    </li>
                </ul>
              </div>
            </div>
          </div>
      </nav>
    </div>
    </header>
    
    <div class="content">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="thumb_big">
                    <a href="#">
                        <?php
                            $query = "SELECT Pictures FROM article Where ID = 1";
                        ?>
                        <?php
                            $result = mysqli_query($conn,$query);

                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <img class="img-thumbnail" style="width: 800px; height: 402px" src="<?php echo $row['Pictures']; ?>" alt="">
                            <?php
                                }
                            }
                        ?>
                    </a>
                </div>
                <div class="title-new">
                    <a href="#">
                        <?php
                            $query = "SELECT * FROM article Where ID = 1";
                        ?>
                        <?php
                            $result = mysqli_query($conn,$query);

                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <?php echo $row['Title'];?>
                            <?php
                                }
                            }
                        ?>
                    </a>
                </div>
               <div class="description">
                    <a href="#">
                        <?php
                            $query = "SELECT * FROM article Where ID = 1";
                        ?>
                        <?php
                            $result = mysqli_query($conn,$query);

                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <?php echo $row['Short description'];?>
                            <?php
                                }
                            }
                        ?>
                    </a>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="thumb_art">
                    <a href="#">
                        <?php
                            $query = "SELECT * FROM article Where ID = 2";
                        ?>
                        <?php
                            $result = mysqli_query($conn,$query);

                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <img class="img-thumbnail" style="width: 404px" src="<?php echo $row['Pictures']; ?>" alt="">
                            <?php
                                }
                            }
                        ?>
                    </a>
                </div>
                <div class="thumb_art">
                    <a href="#">
                        <?php
                            $query = "SELECT * FROM article Where ID = 2";
                        ?>
                        <?php
                            $result = mysqli_query($conn,$query);

                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <?php echo $row['Title']; ?>
                            <?php
                                }
                            }
                        ?>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>