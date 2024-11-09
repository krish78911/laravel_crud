<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="{{ route('products.index') }}">Demo Laravel App</a>

      <!-- Toggle button for mobile view -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links (Collapsable on mobile) -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.create') }}">Create New Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('api') }}">API</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>