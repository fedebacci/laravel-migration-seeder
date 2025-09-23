<section id="site-header" class="position-sticky top-0 z-3 bg-light shadow-sm">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center">
            <a 
                href="#" 
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
            >
                <img
                    src="{{ Vite::asset('resources/img/site-logo.png') }}"
                    alt="Site Logo"
    
                    id="site-logo"
                    class="img-fluid my-3"
                />
            </a>
            <ul class="nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link h-100 d-flex align-items-center p-2">
                        Home
                    </a>
                </li>
            </ul>
        </header>
    </div>
</section>