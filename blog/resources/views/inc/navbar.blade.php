<nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand " href="#">{{config('app.name', 'Alumnis')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link white" href="/">Home</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="/services">Services</a>
            </li>
        </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> --}}
        </div>
    </nav>

    {{-- <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">        
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="/">{{config('app.name', 'Alumnis')}}</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</li>
                        <li><a href="#about">Home</li>
                        <li><a href="#services">Services</li>
                    </ul>
                </div>
            </div>
            </nav> --}}