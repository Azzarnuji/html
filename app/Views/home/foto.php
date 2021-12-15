<?= $this->extend('template/default');?>
<?= $this->section('content');?>
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Pontren Darul Muttaqin</div>
            <div class="masthead-heading text-uppercase">Ahlan Wa Sahlan</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Lihat Foto</a>
        </div>
    </header>
<<<<<<< HEAD
    <!-- <video width="320" height="240" controls>
        <source src="/video/video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video> -->
=======
>>>>>>> c91949887a89b2453561f136c6804ecc6e062bd0
    <section class="page-section bg-light" id="services"> 
        <div class="container">
            <h2 class="text-center">Gallery Mushofahah</h4>
            <a href="index.php" class="btn btn-primary mb-2">Kembali</a>
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                        <tr>
                        <th>No</th>
                        <th>Nama File</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Folder</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <?php
                    // $dirname = 'pondok/';
                    if($folder){
                        $images = glob("$folder/$file/*.mp4");
                        $NO = 1;
                    }else{
                        $images = glob("images/pondok/*.jpg");
                        $NO = 1;
                    }

                    $images = glob("images/pondok/*.jpg");
                    $NO = 1;

                ?>
                    <?php foreach ($images as $image):?>
                    <tbody>
                        <tr>

                            <?php if($file):?>
                                <td><?=$NO++;?></td>
                                <td>
                                    <video width="320" height="240" controls>
                                        <source src="/<?=$image;?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </td>
                                <td><a href="/<?=$image;?>" class="btn btn-primary" type="submit" name="dowmload" value="/<?=$image;?>" download=""/<?=$image;?>"">Download</a></td>
                            <?php else:?>
                                <td><?=$NO++;?></td>
                                <td><a href="/<?=$image;?>"><img class="img-thumbnail rounded lazy" data-src="/<?=$image;?>" height="300px" width="300px" /></a></td>
                                <td><a href="/<?=$image;?>" class="btn btn-primary" type="submit" name="dowmload" value="/<?=$image;?>" download=""/<?=$image;?>"">Download</a></td>
                            <?php endif;?>
                            <td><?=$NO++;?></td>
                            <td><a href="/<?=$image;?>"><img class="img-thumbnail rounded lazy" data-src="/<?=$image;?>" height="300px" width="300px" /></a></td>
                            <td><a href="/<?=$image;?>" class="btn btn-primary" type="submit" name="dowmload" value="/<?=$image;?>" download=""/<?=$image;?>"">Download</a></td>
                        </tr>
                    </tbody>
                    <?php endforeach;?>
            </table>
        </div>   
    </section>
<?= $this->endSection();?>