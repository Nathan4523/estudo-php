<?php 
    include('../layout/header.php');
    require_once('jobs.php');
 ?>
<section style="background:#ededed;width: 200px;height: 500px;">
    <div class="container">
        <div class="row">
            <?php 
            
                $listamento = new jobs();

                $result = $listamento->listar();

                foreach($result as $valor){
                    echo $valor['title_job']."<br>";
                }            
            ?>
        </div>
    </div>
</section>
<?php include('../layout/footer.php'); ?>