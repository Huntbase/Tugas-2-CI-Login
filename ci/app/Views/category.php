<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/style3.css">
    <script src="https://kit.fontawesome.com/0ba96f7342.js" crossorigin="anonymous"></script>
    <title>Category - <?= $category['name'] ?></title>
</head>

<body>
    <div class="main-content">
        <div class="sidebar">
            <h3>Kategori</h3>
            <ul class="sidebar-menu">
                <li class="dropdown">
                    <button class="dropbtn" onclick="toggleDropdown(event)">Kucing</button>
                    <div class="dropdown-content">
                        <?php
                        foreach ($categories as $cat) :
                            if (in_array($cat['id'], [1, 2])) : // ID untuk kategori Kucing
                        ?>
                                <a href="/category/<?= $cat['id'] ?>"><?= $cat['name'] ?></a>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn" onclick="toggleDropdown(event)">Ikan</button>
                    <div class="dropdown-content">
                        <?php
                        foreach ($categories as $cat) :
                            if (in_array($cat['id'], [3, 4])) : // ID untuk kategori Ikan
                        ?>
                                <a href="/category/<?= $cat['id'] ?>"><?= $cat['name'] ?></a>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn" onclick="toggleDropdown(event)">Anjing</button>
                    <div class="dropdown-content">
                        <?php
                        foreach ($categories as $cat) :
                            if (in_array($cat['id'], [5, 6])) : // ID untuk kategori Anjing
                        ?>
                                <a href="/category/<?= $cat['id'] ?>"><?= $cat['name'] ?></a>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="container-produk">
        <!-- Kucing -->
        <div class="category">
            <h2><?= $category['name'] ?></h2>
            <div class="image-container1">
                <!--5 Gambar Produk Pertama-->
                <?php foreach ($products as $product) : ?>
                    <?php if ($product['category_id'] == $category['id']) : ?>
                            <div class="image-box1">
                                <a class="detail" href="<?= base_url('produk/detail/' . $product['id']) ?>">
                                    <?php if ($product['image']) : ?>
                                        <img src="/uploads/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="max-width: 200px;">
                                    <?php endif; ?>
                                    <h3><?= $product['name'] ?></h3>
                                    <h4 class="price">Rp. <?= number_format($product['price'], 0, ',', '.') ?></h4>
                                    <!-- <p>Description: <?= $product['description'] ?></p> -->
                                    <!-- <p><a href="/category/<?= $product['category_id'] ?>">View more in this category</a></p> -->
                                </a>
                            </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <button id="scrollUpBtn" onclick="scrollToTop()"><img src="<?= base_url("image") ?>/Navbar/arrow.png" alt=""></button>


    <script>
        function toggleDropdown(event) {
            const dropdown = event.target.nextElementSibling;
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        }

        document.addEventListener("DOMContentLoaded", function() {
            const dropdowns = document.querySelectorAll(".dropdown");

            dropdowns.forEach(dropdown => {
                const dropbtn = dropdown.querySelector(".dropbtn");
                const dropdownContent = dropdown.querySelector(".dropdown-content");

                dropbtn.addEventListener("click", function() {
                    dropdown.classList.toggle("active");
                });
            });

            // Menutup dropdown saat pengguna mengklik di luar elemen dropdown
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    dropdowns.forEach(dropdown => {
                        dropdown.classList.remove("active");
                    });
                }
            }
        });

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            var scrollBtn = document.getElementById("scrollUpBtn");

            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        }

        function scrollToTop() {
            var scrollStep = -window.scrollY / (500 / 15); // Adjust the speed here
            var scrollInterval = setInterval(function() {
                if (window.scrollY != 0) {
                    window.scrollBy(0, scrollStep);
                } else {
                    clearInterval(scrollInterval);
                }
            }, 15); // Adjust the interval here
        }
    </script>
</body>

</html>