<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="{{route('home')}}">Diamant-Tech</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            <li>
                <p class="btn navbar">
                <a href="{{route('events.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Créer un événement</a>
            </p>
            </li>
            </ul>
        </div><!--/.nav-collapse -->
        </div>
    </nav>
