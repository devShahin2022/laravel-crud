<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container">
      <a class="navbar-brand font-bold text-light" href="#">Afford</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link font-bold text-light" href="/add-service">Add service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-bold text-light" href="/register" tabindex="-1" aria-disabled="true">Register</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link font-bold text-light" href="{{ route('profile', ['id'=>1]) }}" tabindex="-1" aria-disabled="true">Profile</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link font-bold text-light" tabindex="-1" href="/" aria-disabled="true">Products</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link font-bold text-light" tabindex="-1" href="/create" aria-disabled="true">add product</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>