<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <?= anchor('/', 'Počasí Německo', ['class' => 'navbar-brand fw-bold']) ?>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Přepnout navigaci">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <?= anchor('/', 'Spolkové země', ['class' => 'nav-link']) ?>
        </li>
        <li class="nav-item">
          <?= anchor('mazani', 'Mazání dat', ['class' => 'nav-link']) ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
