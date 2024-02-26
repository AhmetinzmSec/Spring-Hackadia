<?php
   include "connecti.php";
   include "../login.php";
?>
<?php
   $categori = $db->query("SELECT * FROM `categori`");
?>
<?php
   include "index.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Cevap</h6>
                                </div>
                                <div class="card-body">
                                    <form action="form.php" method="POST" >
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Cevap</label>
                                            <input type="ad" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="cevap">
                                            <input type="hidden" name="soru_id" value="<?=$_GET["id"]?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-left: 209px;" name="submit">Ekle</button>
                                    </form>
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