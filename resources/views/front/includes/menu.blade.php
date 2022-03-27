<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('/') }}front-assets/images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown active">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Blog Category
                    </a>
                    <div class="dropdown-menu" >
                        @foreach($blogCategories as $blogCategory)
                        <a class="dropdown-item" href="about-2.html">{{ $blogCategory->category_name }}</a>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('services') }}">
                        Service
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" >
                        Blog
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('view-contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
