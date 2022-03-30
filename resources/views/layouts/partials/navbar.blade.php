<header class="main-header">
<nav class="main-menu">
    <div class="container">
        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/logo-dark.png" width="153" alt=""></a>
            <span class="fa fa-bars mobile-nav__toggler"></span>
        </div>
        <ul class="main-menu__list">
            <li class="dropdown">
                <a href="/">Ana səhifə</a>
                <!-- <ul>
                <li>
                <a href="index.html">Home One</a>
                </li>
                <li><a href="index-2.html">Home Two</a></li>
                <li class="dropdown">
                <a href="#">Header Styles</a>
                <ul>
                <li><a href="index.html">Header One</a></li>
                <li><a href="index-2.html">Header Two</a></li>
                </ul>
                </li>
                </ul> -->
            </li>
            <li>
                <a href="{{route('about')}}">Haqqımızda</a>
            </li>
            <li class="dropdown"><a href="{{route('services')}}">Xidmətlər</a>
                <!-- <ul>
                <li><a href="services.html">Services</a></li>
                <li><a href="service-details.html">Service Details</a></li>
                <li><a href="contact.html">Contact</a></li>
                </ul> -->
            </li>
            <li class="dropdown">
                <a href="{{route('projects')}}">Portfolio</a>
                <!-- <ul>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="project-details.html">Projects Details</a></li>
                </ul> -->
            </li>
            <li class="dropdown"><a href="contact.html">Əlaqə</a>
                <!-- <ul>
                <li><a href="blog.html">News</a></li>
                <li><a href="blog-details.html">News Details</a></li>
                </ul> -->
            </li>
        </ul>

    </div>
</nav>
</header>
