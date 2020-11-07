<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}" style="color:#777"><span style="font-size:15pt"></span> Hotel la Rivera</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown {{ Request::is('hotel') && ! Request::is('hotel')? 'active' : ''}}">
                        <a class="nav-link dropdown-toggle" href="{{url('hotel')}}"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Hotel
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('hotel/historia')}}">Historia</a>
                    <a class="dropdown-item" href="{{url('hotel/mision-vision')}}">Mision y Vision</a>
                    <a class="dropdown-item" href="{{url('hotel/ubicacion')}}">Ubicacion</a>
                    </div>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown {{ Request::is('servicios') && ! Request::is('servicios')? 'active' : ''}}">
                        <a class="nav-link dropdown-toggle" href="{{url('servicios')}}"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('servicios/habitaciones')}}">Habitaciones</a>
                <a class="dropdown-item" href="{{url('servicios/eventos/{id}')}}">Eventos</a>
                    
                    </div>
                    </li>
          
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('reservas') && ! Request::is('reservas')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/reservas')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Reservas
                        </a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('contactos') && ! Request::is('contactos')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('contactos')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            contactos
                        </a>
                    </li>
             
                

                
            </div>
        @endif
    </div>
</nav>
