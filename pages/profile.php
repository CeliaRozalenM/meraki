<?php
include '../layout/header.php';
?>
    <div class="container fullwidth">
        <div class="col--lg--9 profile">
            <div class="row">
                <div class="col--lg--12 info">
                    <div class="row">
                        <div class="col--lg--12">
                            <div class="avatar">
                            </div>
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

                    <div class="row">
                        <div class="col--lg--12">
                            <div class="msg">
                                <div class="row">
                                        <div class="col--lg--9">                    <p>
                                            <span>¡ENHORABUENA!</span>: Ayer acabamos el Sprint 1, ¡Enhorabuena! Te ha llegado una invitación a un refresco, sube una foto disfrutando de él, te lo has ganado.</p>
                                        </div>
                                        <button>SUBIR IMAGEN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
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
                                <a href="#ex1" rel="modal:open">
                                    <div class="col--lg--4 task">
                                        <div>
                                            <p>Añadir iconos de redes sociales a footer adir iconos  adir iconos  </p>
                                            <div class="status" ></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#ex1" rel="modal:open">
                                    <div class="col--lg--4 task">
                                        <div>
                                            <p>Añadir iconos de redes sociales a footer adir iconos  adir iconos  </p>
                                            <div class="status" ></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#ex1" rel="modal:open">
                                    <div class="col--lg--4 task">
                                        <div>
                                            <p>Añadir iconos de redes sociales a footer adir iconos  adir iconos  </p>
                                            <div class="status" ></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#ex1" rel="modal:open">
                                    <div class="col--lg--4 task">
                                        <div>
                                            <p>Añadir iconos de redes sociales a footer adir iconos  adir iconos  </p>
                                            <div class="status" ></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#ex1" rel="modal:open">
                                    <div class="col--lg--4 task">
                                        <div>
                                            <p>Añadir iconos de redes sociales a footer adir iconos  adir iconos  </p>
                                            <div class="status" ></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#ex1" rel="modal:open">
                                    <div class="col--lg--4 task">
                                        <div>
                                            <p>Añadir iconos de redes sociales a footer adir iconos  adir iconos  </p>
                                            <div class="status" ></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#ex1" rel="modal:open">
                                    <div class="col--lg--4 task">
                                        <div>
                                            <p>Añadir iconos de redes sociales a footer adir iconos  adir iconos  </p>
                                            <div class="status" ></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row content hide">
                            <div class="col--lg--12 photos">
                                <div class="col--lg--4 photo">
                                    <div>
                                        PHOTO
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal  -->
        <div id="ex1" class="modal">
        <h1>Este es el nombre de la tarea</h1>
        <div><span>Fecha inicio: X</span><span>Fecha fin: X</span></div>
        <div class="description">
            <h2>Descripción</h2>
            <p>Es la descripción de la tarea. Esta es la descripción de la tarea donde se detallan varios de los puntos a seguir:</p>
            <ul><li>El primero</li><li>El segundo</li>
            <li>El tercero</li></ul>
        </div>
        </div>
<?php
include '../layout/sidebar.php';
?>
    </div>
<?php
include '../layout/footer.php';
?>