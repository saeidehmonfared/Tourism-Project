<section class="banner-area" id="home">
    <!-- Start Header Area -->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg  navbar-light">
            <div class="container">
                <meta name="csrf-token" content="{{ csrf_token() }}"/>
                {{--<a class="navbar-brand" href="index.html">--}}
                    {{--<img src="img/logo.png" alt="">--}}
                {{--</a>--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-white lnr lnr-menu"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center"
                     id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        @guest
                            <li>
                                <a href="#" data-toggle="modal" data-target="#loginForm">ورود / عضویت

                                </a>
                            </li>
                        @else
                            <li class="dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li><a href="#home">خانه</a></li>
                        <li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                ایرانگردی
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">دیدنی های ایران بر اساس استان</a>
                                <a class="dropdown-item" href="#">دیدنی های ایران بر اساس مکان</a>
                            </div>
                        </li>
                        <li><a href="#secvice">جهانگردی</a></li>
                        <li><a href="#faq">بلاگ</a></li>
                        <li><a href="#gallery">درباره ما</a></li>
                        <li><a href="#contact">تماس با ما</a></li>
                        <!-- Dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                صفحات
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="generic.html">صفحه 1</a>
                                <a class="dropdown-item" href="elements.html">صفحه 2</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Area -->
</section>
