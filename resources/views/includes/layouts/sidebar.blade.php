<div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <div class="navbar-minimize">
        <a href="#" {{-- id="minimizeSidebar" --}} class="simple-text logo-mini">
          ZN
        </a>
        </div>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          ZONEAMENTO
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo" style="border-radius: 21%;">
            {{-- <img src="../assets/img/faces/avatar.jpg" /> --}}
            <span class="sidebar-mini" style="color: white;"> LJ </span>
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                Luciano Junior
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> MI </span>
                    <span class="sidebar-normal"> Minhas Informações </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> AS </span>
                    <span class="sidebar-normal"> Alterar Senha </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> LO </span>
                    <span class="sidebar-normal"> Logout </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p> Zonas </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
              <i class="material-icons">content_paste</i>
              <p> Informações
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="formsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="./forms/regular.html">
                    <span class="sidebar-mini"> T1 </span>
                    <span class="sidebar-normal"> Teste 1 </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./forms/extended.html">
                    <span class="sidebar-mini"> T2 </span>
                    <span class="sidebar-normal"> Teste 2 </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./forms/validation.html">
                    <span class="sidebar-mini"> T3 </span>
                    <span class="sidebar-normal"> Teste3 </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="./widgets.html">
              <i class="material-icons">widgets</i>
              <p> Minhas Zonas </p>
            </a>
          </li>
        </ul>
      </div>
    </div>