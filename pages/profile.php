<?php
include "../layout/header.php";
include '../class/taskClass.php';
$taskClass = new taskClass();
$allTasksUser = $taskClass->allTasksUser($session_uid);
$finishSprint = $taskClass->finishSprint();
$getUserPhotos = $userClass->getUserPhotos($session_uid);
include '../layout/sidebar.php';
?>
    <div class="container fullwidth">
        <div class="col--lg--9 profile">
            <div class="row">
                <div class="col--lg--12 info">
                    <div class="row">
                        <div class="col--lg--12">
                        <div class="avatar" style="background-image:url('../img/<?php echo $userDetails->profile_pic; ?>')"></div>
                            <div class="data col--lg--4">
                                <h1><?php echo $userDetails->name; ?></h1>
                                <div class="progress-bar col--lg--12"></div>
                            </div>
                            <p class="blocks">X/X Bloques</p>
                            <a href="home.php"><div class="home"></div></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col--lg--12">
                            <div class="achievment">
                                <p>Último logro: <span>10/03/2019 - ¡Acabado Sprint 1!</span></p>
                            </div>
                        </div>
                    </div>
                    <?php if($finishSprint == []){?>
                    <div class="row">
                        <div class="col--lg--12">
                            <div class="msg">
                                <div class="row">
                                        <div class="col--lg--9">                    <p>
                                            <span>¡ENHORABUENA!</span>: Ayer acabamos el Sprint 1, ¡Enhorabuena! Te ha llegado una invitación a un refresco, sube una foto disfrutando de él, te lo has ganado.</p>
                                        </div>
                                        <form enctype="multipart/form-data" method="post" action="../functions/photo.php">

                                                <input class="select-photo" name="photo" type="file" />

                                            <input style="display:none" type="text" name="uid" value="<?php echo $session_uid; ?>">
                                            <input class="button" name="send" type="submit" value="SUBIR IMAGEN" />
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }?>
                </div>
            </div>
            <div class="row">
                <div class="col--lg--12 tabs">
                    <div class="row">
                        <div class="tab col--lg--6 tab--selected">
                            <p>Construcción</p>
                        </div>
                        <div class="tab col--lg--6">
                            <p>Grandes momentos</>
                        </div>
                    </div>
                    <div class="row content">
                        <div class="col--lg--12 task-block">
                        <?php
                        if(is_array($allTasksUser)){
                      
                        foreach ($allTasksUser as $row) {?>


                                <a href="#ex1" style="border-color:#<?php echo $row['color_user'];?>" rel="modal:open">
                                <div class="col--lg--4 task">
                                    <div style="border-color:#<?php echo $row['color_user'];?>">
                                        <p><?php echo $row['task_name'] ?></p>
                                    </div>
                                </div>
                            </a>
                            
                            <div id="ex1" class="modal">
        <h1><?php echo $row['task_name'] ?></h1>
        <div><span>Fecha inicio: <?php echo $row['task_start_date'] ?></span><span>Fecha fin: <?php echo $row['task_final_date'] ?></span></div>
        <div class="description">
            <h2>Descripción</h2>
            <?php echo $row['task_description'] ?>
        </div>
        <form enctype="multipart/form-data" method="post" action="../functions/task.php">


                                            <input style="display:none" type="text" name="task_id" value="<?php echo $row['task_id'] ?>">
                                            <input class="built" name="button" type="submit" value="CONSTRUÍDO" />
                                        </form>
                                        </div>
                        <?php
                        }
                    }
                        ?>

                        </div>
                    </div>
                    <div class="row content hide">
                        <div class="col--lg--12 photos">
                            <?php
                            if(is_array($getUserPhotos)){
                            foreach ($getUserPhotos as $row) {?>
                                <div class="photo col--lg--4" >
                                <a href="#ex2" rel="modal:open">
                                <div style="background-image:url('../img/<?php echo $row['img_name'] ?>')" >
                                </div>
                                </a>
                                </div>
                                <div id="ex2" class="modal" >
                                <img src="../img/<?php echo $row['img_name'] ?>" alt="">
                                </div>
                                <?php
                                }
                            }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal  -->





    </div>
<?php
include '../layout/footer.php';
?>