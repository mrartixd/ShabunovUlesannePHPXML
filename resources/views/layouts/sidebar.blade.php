<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Категории
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        @foreach ($welcome as $category)
        <a class="dropdown-item" href="#"> {{$category->namecategory}} </a>
        @endforeach
        </div>
      </li>