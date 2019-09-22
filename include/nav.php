<nav class="navbar" role="navigation" aria-label="main navigation" id="scroll">

        <div class="navbar-brand">
          <a class="navbar-item" href="index.php">
            <img src="imagenes/icon.png">
          </a>
  
          <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
      </div>
  
      <div class="navbar-menu" id="navMenu">
  
        <div class="navbar-start">
          <a class="navbar-item" href="productos.php">Productos</a>  
          <a class="navbar-item" href="herramienta.php">Herramienta de selección</a> 
          <a class="navbar-item" href="#contact">Contacto</a>
          <span class="navbar-item"><input type="text" class="input" placeholder="Buscar producto"></span>
        </div>
  
        <div class="navbar-end">
            <div class="navbar-item">


              <a href="" class="button"><i class="fas fa-shopping-cart"></i>&nbsp;Mi carrito</a>
              &nbsp;
              <a class="button is-primary login-btn"><i class="fas fa-user"></i>&nbsp;Mi cuenta</a>

              <div class="modal modal-login">
                <div class="modal-background login-bg"></div>
                  <div class="modal-card">
                    <header class="modal-card-head">
                      <div class="tabs is-toggle" id="tabs">
                        <ul>
                          <li class="login-tab is-active" data-tab="1"><a>Iniciar Sesion</a></li>
                          <li class="signup-tab" data-tab="2"><a>Registrarse</a></li>
                        </ul>
                      </div>
                    </header>
                    <section class="modal-card-body" id="body">
                      <div class="container is-active" data-content="1">
                        <?php
                          include("php_include/getLogin.php");
                        ?>
                      </div>

                      <div class="container" data-content="2">
                        <?php
                          include("php_include/getSignup.php");
                        ?>
                      </div>

                      
                    </section>
                </div>
              </div>
              </div>
            </div>
        </div>
  
      </div>  
  </nav>
  