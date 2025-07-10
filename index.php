<?php
include 'common/header_start.php';
include 'common/header_end.php';
?>
<img src="assets/variant-0.png" alt="Front page" width="100%" height="250">
<!-- xvasd -->
<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="great-vibes-regular"></h1>
                </header>
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/nvu_3366.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/nvu_8111.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4"></p>
                    <p class="fs-5 mb-4"></p>
                    <p class="fs-5 mb-4"></p>
                    <figure class="mb-4"><img class="img-fluid rounded" src="assets/R.png" alt="СКСО" /></figure>
                    <h2 class="fw-bolder mb-4 mt-5"></h2>
                    <p class="fs-5 mb-4"></p>
                    <p class="fs-5 mb-4"></p>
                </section>
            </article>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Търсачка</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Въведете елемент за търсене..." aria-label="Въведете елемент за търсене..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Търси</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header"><strong>Категорий</strong></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a class="nav-link" href="#!">Прием</a></li>
                                <li><a class="nav-link" href="#!">Обучение</a></li>
                                <li><a class="nav-link" href="#!">Научна дейност</a></li>
                                <li><a class="nav-link" href="#!">Класиране</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a class="nav-link" href="#!">Межд. дейност</a></li>
                                <li><a class="nav-link" href="#!">Кариера</a></li>
                                <li><a class="nav-link" href="#!">Партньори</a></li>
                                <li><a class="nav-link" href="#!">Нормативна база</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <strong class="card-header">Важни съобщения</strong>
                <ul>
                    <li><a class="nav-link" href="#!"><strong>Класиране за прием на кандидатите за обучение за курсанти от редовен прием за 2025/2026 година</strong></a></li>
                    <li><a class="nav-link" href="#!"><strong>Класиране от редовен прием на студенти 2025 г.</strong></a></li>
                    <li><a class="nav-link" href="#!"><strong>Класиране от ранен прием на студенти 2025 г.</strong></a></li>
                    <li><a class="nav-link" href="#!"><strong>Теми за семинар относно обучението на българските граждани за защита на Отечеството</strong></a></li>
                </ul>
            </div>
            <div class="card mb-4">
                <strong class="card-header">Новини</strong>
                <div class="containernews">
                    <img src="assets/akreditacia-2023-small.png" alt="Акредитация" width="30%" height="30%" />
                </div>
                <a class="nav-link" href="#!"><strong>Институционална акредитация на НВУ „Васил Левски”</strong></a></li>
                <div class="containernews">
                    <img src="assets/_DSC4441.png" alt="Съзтезание" width="50%" height="50%" />
                </div>
                <a class="nav-link" href="#!"><strong>„Най-добър воин 2025“ в НВУ „Васил Левски“</strong></a></li>
            </div>
        </div>
    </div>
</div>
<?php
include 'common/footer_start.php';
?>
<script>
    const myCarouselElement = document.querySelector('#myCarousel')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2000,
        touch: false
    })
</script>
<?php
include 'common/footer_end.php';
?>