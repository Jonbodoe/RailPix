<nav class="navbar navbar-expand-lg navbar-light white-bg shadow-sm fixed-top">
  <a class="navbar-brand serif" href="./index.php">RailPix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php require './data/navLinks.php'?>
    </ul>
    <div class="nav-seperate"></div>
    <form class="d-none d-sm-inline-block form-inline ml-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
              <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>