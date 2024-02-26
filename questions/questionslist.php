<?php
include "connecti.php";
?>
<?php
session_start();
?>
<?php
$sorular = $db->query("SELECT s.id,u.ad,u.soyad,s.soru,s.tarih FROM sorular s inner join uyeler u on s.uye_id=u.id")
?>
<?php
include "index.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Sorular</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Üye</th>
                                    <th scope="col">Soru</th>
                                    <th scope="col">Tarih</th>
                                    <th scope="col">Cevapla</th>
                                    <th scope="col">Cevapları Gör</th>

                                </tr>
                            </thead>
                            <?php
                            $i = 1;
                            foreach ($sorular as $s) {
                            ?>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?php echo $s["username"]; ?><?php echo $s["user_id"]; ?></td>
                                        <td><?php echo $s["query"]; ?></td>
                                        <td><?php echo date("d.m.Y H:i", strtotime($s["time"])); ?></td>
                                        <td>
                                            <a href="cevap.php?id=<?= $s["id"] ?>" class="btn btn-primary btn-icon-split">
                                                <span class="text">Cevapla</span>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="cevapListe.php?id=<?= $s["id"] ?>" class="btn btn-primary btn-icon-split">
                                                <span class="text">Cevapları Gör</span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php
                                $i++;
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<?php
include "alt.php";
?>