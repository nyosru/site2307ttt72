
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="/">атрактор.рф</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Переключатель навигации">
          <span class="navbar-toggler-icon"></span>
      </button>
      @if (1 == 2)
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Главная</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Ссылка</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Выпадающий список
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Действие</a></li>
                          <li><a class="dropdown-item" href="#">Другое действие</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1"
                          aria-disabled="true">Отключенная</a>
                  </li>
              </ul>
              <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                  <button class="btn btn-outline-success" type="submit">Поиск</button>
              </form>
          </div>
      @endif
  </div>
</nav>