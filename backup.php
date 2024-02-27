<?php
include "./connection.php";
include "./connecti.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="assets/css/questions.css">
    <link rel="stylesheet" href="assets/css/footer.css">

</head>

<body>

    <?php
    $questions = $db->query("SELECT * FROM questions q INNER JOIN users s on u.id = q.user_id");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ?>
    <?php
    if ($_POST) {
        $user_id = $db->query("SELECT * FROM  questions WHERE user_id = 1 ");
    }
    ?>
    <?php
    $users = $db->query("SELECT * FROM `users`");
    ?>


    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="anasayfa.php">Anasayfa</a></span> <span>Sorular</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Sorular</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">

                    <div class="comment-form-wrap pt-5 col-md-12" style="margin-left: 177px;">
                        <h3 class="mb-5">Sorular</h3>
                        <!-- Bir düğme veya başka bir tetikleyici -->
                        <!-- Bir düğme veya başka bir tetikleyici -->
                        <button id="openFormBtn">Formu Göster</button>

                        <!-- Modal -->
                        <div id="myModal">
                            <div class="modal-content">
                                <!-- Form içeriği -->
                                <form action="post.php" class="p-5 bg-light" method="POST" enctype="multipart/form-data" name="question">
                                    <div class="form-group">
                                        <label for="soru">Soru</label>
                                        <textarea name="question" id="question" cols="30" rows="35" class="form-control" style="width:100%;" type="text" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Gönder" class="btn py-3 px-4 btn-primary">
                                    </div>
                                </form>
                                <!-- Form içeriği sonu -->
                                <span onclick="closeModal()" style="cursor: pointer;">Kapat</span>
                            </div>
                        </div>

                    </div>

                    <script type="text/javascript">
                        function asagiKaydir() {
                            window.scrollBy(0, 4285.7)
                        }
                    </script>
                    <div class="btn-group" onclick="asagiKaydir()" value="Kaydır" style="margin-top: 20px; margin-bottom: 25px;">
                        <a class="btn btn-danger active" aria-current="page">Soru Sor</a>
                    </div>
                    <?php
                    foreach ($questions as $q) {
                    ?>
                        <div class="blog_author">
                            <div class="media">
                                <div class="media-body">
                                    <!-- <h3 style="margin-top: 45px;"> Sorular</h3> -->
                                    <h4><?php echo $q["username"]; ?></h4>
                                    <p><?php echo $q["question"]; ?></p>
                                </div>
                                <a class="btn btn-primary cevapCollapse" role="button" style="margin-right: 432px; margin-top: 83px;" href="#cevapCollapse<?= $q["id"] ?>" data-target="#cevapCollapse<?= $q["id"] ?>">Cevapları göster</a>
                            </div>
                        </div>
                        <div class="blog_comment" style="margin-left: 39px; margin-bottom: 33px; margin-top: 24px;">
                            <h3></h3>
                            <?php
                            $questionId = $q["id"];
                            $answers = $db->query("SELECT * FROM answers where id=" . $questionId . "");
                            ?>
                            <div class="d-open" id="cevapCollapse<?= $q["id"] ?>">
                                <?php

                                foreach ($answers as $a) {

                                ?>
                                    <div class="media">
                                        <div class="d-flex">
                                            <h5 style="margin-left: 28px;"><?php echo date("d.m.Y H:i", strtotime($q["time"])); ?>
                                                <?php
                                                $userId = $a["user_id"];
                                                $users = $db->query("SELECT * FROM users where id=" . $user_id . "")->fetch();

                                                ?>
                                                <?php echo $users["username"]; ?></h5>
                                        </div>
                                        <div class="media-body">
                                            <p style="margin-left: 28px;"><?php echo $a["answers"] ?></p>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- <footer class="footer__floating">

        <div class="footer__content">

            <a href="#home" class="footer__logo">

                <img src="assets/img/hackadia.png" alt="Hackadia Logo" class="footer__logo-img">

            </a>

            <p class="footer__copy">&#169; Hackadia. All rights reserved.</p>

        </div>

    </footer> -->

    <script>
        $(document).ready(function() {

            $(".cevapCollapse").on("click", function() {
                var tiklanan = $(this).attr("href");
                var a = $(tiklanan).attr("class");
                if (a == "") {
                    $(tiklanan).addClass("d-none");
                    $(this).text("Cevapları Göster");
                } else {
                    $(tiklanan).removeClass("d-none");
                    $(this).text("Cevapları Kapat");
                }
            })


        })
    </script>

    <!-- Bootstrap JS ve jQuery kullanarak modal işlevselliğini ekleyebilirsiniz -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Modal'ı açan ve kapatan JavaScript kodu
        var modal = document.getElementById('myModal');
        var openFormBtn = document.getElementById('openFormBtn');

        openFormBtn.addEventListener('click', function() {
            modal.style.display = 'block';

        });

        function closeModal() {
            modal.style.display = 'none';
        }

        // Sayfa dışına tıklandığında modal'ı kapat
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>

</body>

</html>