<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  </head>
  <body>
    <nav>
      <div class="logoo">
        <i class="bx bx-menu menu-icon"></i>
      </div>
  
      <div class="sidebar">
        <div class="logoo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logoo-name">Nombre Proyecto</span>
        </div>

        <div class="sidebar-content">
          <ul class="listas">
          
            <li class="lista">
              <a href="/proyecto" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">tableros</span>
              </a>
            </li>
            <li class="lista">
              <a href="#" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Miembros</span>
              </a>
            </li>
            
            <li class="lista">
              <a href="/calendario" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">Calendario</span>
              </a>
            </li>
            <!--<li class="lista">
              <a href="#" class="nav-link">
                <i class="bx bx-pie-chart-alt-2 icon"></i>
                <span class="link">Analytics</span>
              </a>
            </li>
            <li class="lista">
              <a href="#" class="nav-link">
                <i class="bx bx-heart icon"></i>
                <span class="link">Likes</span>
              </a>
            </li>
            <li class="lista">
              <a href="#" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">Files</span>
              </a>
            </li>-->
          </ul>

          <div class="bottom-cotent">
            <li class="lista">
              <a href="#" class="nav-link">
                <i class="bx bx-cog icon"></i>
                <span class="link">Opciones</span>
              </a>
            </li>
            <li class="lista">
              <a href="#" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Salir</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>

    <section class="overlay"></section>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>

  </body>
</html>
