<nav class="navbar navbar-inverse" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Logotipo</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/university">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         Menu <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="/university/Students">Students</a></li>
          <li><a href="/university/Teachers">Teachers</a></li>
          <li><a href="/university/Courses">Courses</a></li>
          <li class="divider"></li>
          <li><a href="#">Inscriptions</a></li>
        </ul>
      </li>
    </ul>
 
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Send</button>
    </form>
 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>