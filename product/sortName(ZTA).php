<?php
session_start();
include('dbconfig.php');
error_reporting(0);
$pageSize = 12;
$page = $_GET['page'] || 1;  ///这个哦 
$offset = ($page - 1) * $pageSize;
$category_ID = $_GET['category_ID'];
$product_ID = $_GET['product_ID'];
$price_MIN = $_GET['price_MIN'];
$price_MAX = $_GET['price_MAX'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lip Mask - UBEAUTY</title>
    <link rel="shortcut icon" type="image/jpeg" href="image/logo1.jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="site-wrap">
        <?php include 'header.php'; ?>

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-md-9 order-2">

                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="float-md-left mb-4">
                                    <h2 class="text-black h5">Shop All</h2>
                                </div>
                                <div class="d-flex">
                                    <div class="dropdown mr-1 ml-md-auto">
                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Latest
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                            <a class="dropdown-item" href="productList.php?category_ID=3&page=1">Eye Mask</a>
                                            <a class="dropdown-item" href="productList.php?category_ID=1&page=1">Lip Mask</a>
                                            <a class="dropdown-item" href="productList.php?category_ID=2&page=1">Face Mask</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                            <a class="dropdown-item" href="#">Relevance</a>
                                            <a class="dropdown-item" href="sortName(ATZ).php">Name, A to Z</a>
                                            <a class="dropdown-item" href="sortName(ZTA).php">Name, Z to A</a>
                                            <div class="dropdown-divider" name="divider"></div>
                                            <a class="dropdown-item" href="sortPrice(LTH).php" value="ASC">Price, low to high</a>
                                            <a class="dropdown-item" href="sortPrice(HTL).php" value="DESC">Price, high to low</a>

                                            <?php

                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">

                            <?php
                            $sql = "SELECT * FROM `product` where product_isDeleted = 0 ORDER BY product_Brand DESC ";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                  <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                      <figure class="block-4-image">
                        <a href="product.php?product_ID=' . $row['product_ID'] . '"><img style="width:238px; height:151px;" src="' . $row['product_Image'] . '" alt="Image placeholder" class="img-fluid"></a>
                      </figure>
                      <div class="block-4-text p-4" style="width:238px; height:150px;">
                        <h3><a href="">' . $row['product_Brand'] . '</a></h3>
                        <p class="mb-0" >' . $row['product_Name'] . '</p>
                        <p class="text-primary font-weight-bold">RM' . $row['product_Price'] . '</p>
                      </div>
                    </div>
                  </div>';
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>

                        </div>
                        <div class="row" data-aos="fade-up">
                            <div class="col-md-12 text-center">
                                <div class="site-block-27">
                                    <ul>
                                        <li><a href="productList.php?category_ID=3&page=1">&lt;</a></li>
                                        <?php
                                        $sql = "SELECT * FROM `product` where category_ID = $category_ID";
                                        $count = $conn->query($sql);
                                        $currentNo = 0;
                                        $totalpage = $count->num_rows / $pageSize;
                                        while ($currentNo++ < $totalpage) {
                                            if ($page == $currentNo) {
                                                echo '<li class="active"><a href="productList.php?page=' . $currentNo . '&category_ID=' . $category_ID . '">' . $currentNo . '</a></li>';
                                            } else {
                                                echo '<li ><a href="productList.php?page=' . $currentNo . '&category_ID=' . $category_ID . '">' . $currentNo . '</a></li>';
                                            }
                                        }
                                        ?>

                                        <!-- <li><a href="productList.php?category_ID=3&page=1">1</a></li>
                    <li class="active"><a href="">2</a></li> -->
                                        <li><a href="">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 order-1 mb-5 mb-md-0">
                        <div class="border p-4 rounded mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><a href="productList.php?category_ID=3&page=1" class="d-flex"><span>Eye</span> <span class="text-black ml-auto">(24)</span></a></li>
                                <li class="mb-1"><a href="productList.php?category_ID=1&page=1" class="d-flex"><span>Lip</span> <span class="text-black ml-auto">(12)</span></a></li>
                                <li class="mb-1"><a href="productList.php?category_ID=2&page=1" class="d-flex"><span>Face</span> <span class="text-black ml-auto">(36)</span></a></li>
                            </ul>
                        </div>

                        <div class="border p-4 rounded mb-4">
                            <div class="mb-4">
                                <form method="post">
                                    <div class="multiselect">
                                        <div class="selectBox" onclick="showCheckboxes()">
                                            <select>
                                                <option>
                                                    <h3 class="mb-3 h6 text-uppercase text-black d-block" style="border:1px solid #8c92a0;">Filter by Price</h3>
                                                </option>
                                            </select>
                                            <div class="overSelect"></div>
                                        </div>
                                        <div id="checkboxes">
                                            <label for="one">
                                                <input type="checkbox" id="one" /> RM 0 - RM 10</label>
                                            <label for="two">
                                                <input type="checkbox" id="two" /> RM 10 - RM 20</label>
                                            <label for="three">
                                                <input type="checkbox" id="three" /> RM 20 - RM 30</label>
                                            <label for="four">
                                                <input type="checkbox" id="four" /> RM 30 - RM 40</label>
                                            <label for="five">
                                                <input type="checkbox" id="five" /> RM 40 - RM 50</label>
                                            <label for="six">
                                                <input type="checkbox" id="six" /> RM 50 - RM 60</label>
                                            <label for="seven">
                                                <input type="checkbox" id="seven" /> RM 60 - RM 70</label>
                                            <label for="eight">
                                                <input type="checkbox" id="eight" /> RM 70 - RM 80</label>
                                            <label for="nine">
                                                <input type="checkbox" id="nine" /> RM 80 - RM 90</label>
                                            <label for="ten">
                                                <input type="checkbox" id="ten" /> RM 90 - RM 100</label>
                                        </div>
                                    </div>
                                </form>

                                <style>
                                    label {
                                        margin: 0.5rem;
                                    }

                                    .multiselect {
                                        width: 200px;
                                    }

                                    .selectBox {
                                        position: relative;
                                    }

                                    .selectBox select {
                                        width: 100%;
                                        font-weight: bold;
                                    }

                                    input #one #two #htree #four #five #six #seven #eight #nine #ten {
                                        border: 1px solid #d3d3de;
                                    }

                                    .overSelect {
                                        position: absolute;
                                        left: 0;
                                        right: 0;
                                        top: 0;
                                        bottom: 0;
                                        border: 1px solid #d3d3de;
                                    }

                                    #checkboxes {
                                        display: none;
                                        border: 1px #dadada solid;
                                    }

                                    #checkboxes label {
                                        display: block;
                                    }

                                    #checkboxes label:hover {
                                        background-color: #1e90ff;
                                    }
                                </style>
                                <script>
                                    var expanded = false;

                                    function showCheckboxes() {
                                        var checkboxes = document.getElementById("checkboxes");
                                        if (!expanded) {
                                            checkboxes.style.display = "block";
                                            expanded = true;
                                        } else {
                                            checkboxes.style.display = "none";
                                            expanded = false;
                                        }
                                    }
                                </script>
                            </div>


                            <p>

                                <a href="#" class="buy-now btn btn-sm btn-outline-primary" onclick="test">Search</a>
                            </p>




                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="site-section site-blocks-2">
                            <div class="row justify-content-center text-center mb-5">
                                <div class="site-section-heading pt-4 text-center">
                                    <h2>Categories</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                                    <a class="block-2-item" href="productList.php?category_ID=3&page=1">
                                        <figure class="image">
                                            <img src="image/eye mask.jpg" alt="" class="img-fluid">
                                        </figure>
                                        <div class="text">
                                            <span class="text-uppercase">mask</span>
                                            <h3>Eye</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                                    <a class="block-2-item" href="productList.php?category_ID=1&page=1">
                                        <figure class="image">
                                            <img src="image/lip mask2.jpg" alt="" class="img-fluid">
                                        </figure>
                                        <div class="text">
                                            <span class="text-uppercase">mask</span>
                                            <h3>Lip</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                                    <a class="block-2-item" href="productList.php?category_ID=2&page=1">
                                        <figure class="image">
                                            <img src="image/face mask.jpg" alt="" class="img-fluid">
                                        </figure>
                                        <div class="text">
                                            <span class="text-uppercase">mask</span>
                                            <h3>Face</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>