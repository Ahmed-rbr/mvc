<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="<?=urli('/mvc/register')? 'nav-link  active': 'nav-link'  ?>" href="/mvc/register">Register</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="<?=urli('/mvc/public/')? 'nav-link  active': 'nav-link'  ?> " aria-current="page" href="/mvc/public/">Home</a>
        </li>
        <li class="nav-item">
          <a class="<?=urli('/mvc/about')? 'nav-link  active': 'nav-link'  ?>" href="/mvc/about">about</a>
        </li>
        <li class="nav-item">
          <a class="<?=urli('/mvc/price')? 'nav-link  active': 'nav-link'  ?>" href="/mvc/price">Pricing</a>
        </li>
        <li class="nav-item">
          <a href="/mvc/profail" class="<?=urli('/mvc/profail')? 'nav-link  active': 'nav-link'  ?> " >profail</a>
        </li>
      </ul>
    </div>
  </div>
</nav>