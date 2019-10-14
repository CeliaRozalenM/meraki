<?php
$allUsersProfilePic = $userClass->allUsersProfilePic();
?>
<div class="col--lg--3 sidebar">
    <div class="tab">
        <p>   Constructores</p>
        <?php
        if(is_array($allUsersProfilePic)){
                        foreach ($allUsersProfilePic as $row) {?>
        <div class="profile" style="background-image:url('../img/<?php echo $row['profile_pic']?>'); border-color:#<?php echo $row['color_user'];?>"></div>
        <?php
            }
        }
            ?>
    </div>
    <div class="tab">
        Pisos: <span class=floor>X/X</span>
    </div>
    <div class="tab">
        Mensajes
        <ul class=msg>
    <?php if($finishSprint == []){?>
            <li >¡Acabado Sprint 1!</li>
    <?php
    }?>
        </ul>
    </div>
    <a href="<?php echo BASE_URL; ?>/../log/logout.php">
        <div class="tab logout">
            <span></span>
            Cerrar sesión
        </div>
    </a>
</div>
