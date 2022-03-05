@include('admin.include.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img style="height: 40px;" src="/images/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="btn btn-warning ml-4" href="/admin/gallery">Gallery </a>
      </li>
      <li class="nav-item active">
        <a class="btn btn-warning ml-3" href="#">Menu Type</a>
      </li>
      <li class="nav-item active">
        <a class="btn btn-warning ml-3" href="#">Menu </a>
      </li>
      <li class="nav-item active">
        <a class="btn btn-warning ml-3" href="#">Contacts </a>
      </li>
      <li class="nav-item active">
        <a class="btn btn-warning ml-3" href="#">Others </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="btn btn-outline-danger ml-3" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>