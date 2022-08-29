<nav class="navbar navbar-expand-lg navbar-dark bgMenu pt-0 pb-0">
    <div class="container-fluid">
        <a class="navbar-brand pt-0 pb-0 menuicons" href="#">
            <img src="../../Images/Icono+.png" alt="" style=" width: 40px">
             <h2 class=""><span class="span">H</span class="span">elp<span class="span">M</span>ail</h2> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
            <ul class="navbar-nav ul">
                <?php if($Rol == 'Administrador' || $Rol == 'Administrador BD'){
                        
                ?>
                <li class="nav-item Navegar i">
                    <a class="nav-link text-white" aria-current="page"
                        href="VerSolicitudes.php">Creados</a>
                </li>

                <li class="nav-item Navegar i">
                    <a class="nav-link text-white" aria-current="page"
                        href="usuarios.php">Usuarios</a>
                </li>

                <?php
                    }
                ?>
            
                <li class="nav-item Navegar i">
                    <a class="nav-link text-white" aria-current="page"
                        href="GenerateFilters.php">Filtros</a>
                </li>
                <li class="nav-item Navegar">
                    <a class="nav-link text-white" href="Solicitudes.php">Solicitudes</a>
                </li>

                
                    
                <div class="btn-group dropstart">
                    <button type="button" class="inputRe inputReCol  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu">
                        <li class="Desplegable"><a class="dropdown-item">
                        <center>    
                            <?php echo $Nombre ." ". $Apellido; ?>
                            </center>
                            </a>
                        </li>

                        <li><a class="dropdown-item">
                                <center>
                                    <button aria-current="page" class="btnCerrar" onclick="Exit('segunda alerta');">
                                        <span>Cerrar Sesion</span>
                                    </button>
                                </center>
                            </a>
                        </li>


                    </ul>

                </div>
                
            </ul>
        </div>
    </div>
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation) {
        menuItem[i].className = 'active'
    }
}
</script>