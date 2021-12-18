<?= $this->extend('template/default');?>
<?= $this->section('content');?>
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Pontren Darul Muttaqin</div>
            <div class="masthead-heading text-uppercase">Ahlan Wa Sahlan</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Lihat Foto</a>
        </div>
    </header>
    <section class="page-section bg-light" id="services"> 
        <div class="container">
            <h2 class="text-center">Gallery Santri</h4>
            <a href="/home/foto/<?=$tahun;?>" class="btn btn-primary mb-2">Kembali</a>
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
                    
                    $NO = 1;
                    if ($tahun == null){
                        $dirname = array_filter(glob('images/*'),'is_dir');
                        $images = str_replace('_',' ',$dirname);
                        
                        
                    }
                    if($tahun != null){
                        // $images = glob("images/$tahun/$folder/*.jpg");
                        $dirname = array_filter(glob("images/$tahun/*"),'is_dir');
                        $images = str_replace("images/",'',$dirname);
                    }
                    if($folder != null){
                        // $dirname = "images/$tahun/$folder/";
                        $images = glob("images/$tahun/$folder/*.jpg");
                        // dd($images);
                    }
                ?>
                    
                    <?php if($tahun != null && $folder != null):?>
                        <?php foreach ($images as $image):?>
                            
                            <tbody>
                                <tr>
                                    <td><?=$NO++;?></td>
                                    <td><a href="/<?=$image;?>"><img class="img-thumbnail rounded lazy" data-src="/<?=$image;?>" height="300px" width="300px" /></a></td>
                                    <td><a href="/<?=$image;?>" class="btn btn-primary" type="submit" name="dowmload" value="<?=$image;?>" download=""<?=$image;?>"">Download</a></td>
                                </tr>
                            </tbody>
                        <?php endforeach;?>
                    <?php endif;?>


                    <?php foreach ($images as $image):?>
                    <tbody>
                        <tr>
                            <td><?=$NO++;?></td>
                            <td><a href="<?=str_replace(' ','_', $image);?>" class="text-black"><?=str_replace("images/"," ",$image);?></a></td>                            
                            <td><a href="<?=$image;?>" class="btn btn-primary" type="submit" name="dowmload" value="/<?=$image;?>">Buka File</a></td>
                        </tr>
                    </tbody>
                    <?php endforeach;?>
            </table>
        </div>   
    </section>
<?= $this->endSection();?>