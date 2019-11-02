<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="{{URL::route('home')}}" id="home">DOMOV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::route('insert')}}" id="insert">Pridať</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::route('show')}}" id="show">Prezerať</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" id="edit" >Upraviť</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" id="delete">Vymazať</a>
            </li>

        </ul>
    </div>
</nav>