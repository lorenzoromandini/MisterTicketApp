 <nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a href="{{ route('index') }}" class="navbar-brand brand"> MisterTicket</a>
                    </div>
                    <div id="navbar-collapse-02" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                                <li class="propClone"><a href="{{ route('catalog') }}">Eventi</a></li>
                                <li class="propClone" style="display: none"><a href="creation.html">Crea Evento</a></li>
                                <li class="propClone" style="display: none"><a href="creation.html">Gestione Utenti</a></li>
                                <li class="propClone"><a href="{{ route('faq') }}">FAQ</a></li>
                                <li class="propClone"><a href="{{ route('login') }}">Login</a></li>
                                <li class="propClone"><a href="{{ route('register') }}">Registrati</a></li>
                                <li class="propClone" style="display: none"><a href="{{ route('logout') }}">Logout</a></li>
                                <li class="propClone" style="display: none"><a href="account.html">Account</a></li>
                        </ul>
                    </div>
                </div>
            </nav>