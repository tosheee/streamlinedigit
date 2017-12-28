<nav id="menu-top" class="navbar transparent navbar-inverse navbar-fixed-top" style="opacity: 1;">
    <div class="container">
        <div class="navbar-inner">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Streamlinedigit
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="active"></li>
                <li></li>
                <li class="dropdown">

                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contacts</a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
    </div>
</nav>
<script>


</script>

<!-- Collapsed Hamburger -->
<nav  id="menu-scroll" class="navbar navbar-main navbar-default navbar-fixed-top" >
    <div class="container">
        <div class="navbar-header">


            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Streamlinedigit
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="active"></li>
                <li></li>
                <li class="dropdown">

                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contacts</a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
    </div>
</nav>





<script>
    $(window).scroll(function()
    {
        if($(document).scrollTop() > 250)
        {
            $('#menu-scroll').css('visibility', 'visible');
        }
        else
        {
            $('#menu-scroll').css('visibility', 'hidden');
        }
    });

</script>