<?php
include '../layout/header.php';
include '../class/taskClass.php';
$taskClass = new taskClass();
$allTasks = $taskClass->allTasks();
$finishSprint = $taskClass->finishSprint();
include '../layout/sidebar.php';
?>
    <div class="container fullwidth">
        <div class="col--lg--9 building">
            <div class="row">
                <nav>
                    <a href="profile.php"><div class="profile" style="background-image:url('../img/<?php echo $userDetails->profile_pic; ?>')"></div></a>
                    <div class="name">NOMBRE EDIFICIO</div>
                </nav>
            </div>
            <div class="row">
                <div class="tasks">
                    <?php if ($finishSprint == []) {?>
                    <div class="col--lg--12 sprint">
                        <span class="col--lg--12"></span>
                        <p>SPRINT 1</p>
                    </div>
                    <?php
                    }?>
                    <div class="col--lg--12 task-block ">
                    <?php
                    
                    if (is_array($allTasks)) {
                       
                        foreach ($allTasks as $row) {
                            ?>
                            <a href="#ex3" rel="modal:open">
                                <div class="col--lg--4 task">
                                    <div style="border-color:#<?php echo $row['color_user'];?>">
                                        <p><?php echo $row['task_name'] ?></p>
                                    </div>
                                </div>
                            </a>
                            <!-- <div id="ex3" class="modal">
                                <h1><?php echo $row['task_name'] ?></h1>
                                <div>
                                    <span>Fecha inicio: <?php echo $row['task_start_date'] ?></span>
                                    <span>Fecha fin: <?php echo $row['task_final_date'] ?></span>
                                </div>
                                <div class="description">
                                    <h2>Descripción</h2>
                                    <?php echo $row['task_description'] ?>
                                    </div>
                            </div> -->
                    <?php
                 
                    }
                    }
                    ?>
                        <div class="date">
                            <p>21/03/2019 - 04/05/2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
<?php
include '../layout/footer.php';
