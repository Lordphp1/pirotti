

        <!-- pre loader area start -->
        <div id="loading">
            <div class="preloader">
                <img
                    class="preloader_image"
                    width="150"
                    src="{{ asset('img/logo/preloader.gif') }}"
                    alt=""
                >
            </div>
        </div>
        <!-- pre loader area end -->
        <!-- back to top start -->
        <div class="back-to-top-wrapper">
            <button id="back_to_top" type="button" class="back-to-top-btn">
                <svg
                    width="12"
                    height="7"
                    viewBox="0 0 12 7"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M11 6L6 1L1 6"
                        stroke="currentcolor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </button>
        </div>
<nav class="navbar navbar-expand-lg navbar-light nav-header">
            <!-- Logo -->
            <div class="logo-container">
                <a class="navbar-brand" href="./">
                    <img src="{{ asset('img/logo/logo-one.png') }}" class="">
                </a>
            </div>
            <!-- Toggler/collapsible Button -->
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#collapsibleNavbar"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav-container">
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                About Us
                            </a>
                            <div class="hoverdowns two animates fadeUpp">
                                <a class="" href="team">Our People</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="project">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-classic">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="with-bar">
                <div class="bar"></div>
                <a class="nav-link" href="appointment">Become Our Agent</a>
            </div>
        </nav>