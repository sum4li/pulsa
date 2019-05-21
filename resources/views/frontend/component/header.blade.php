<section class="menu cid-rr01JM2SBf" once="menu" id="menu2-0">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="{{asset('frontend/assets/images/logo.png')}}" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>

            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">

                <li class="nav-item {{url()->current() == route('index.index') ? 'active':''}}">
                    <a class="nav-link link text-black display-4" href="{{route('index.index')}}">HOME</a>
                </li>
                @foreach (App\Menu::orderBy('order','asc')->get() as $row)
                <li class="nav-item {{ route('index.menu',[$row->slug,'']) == url()->current() ? 'active':''}}">
                    <a class="nav-link link text-black display-4" href="{{route('index.menu',[$row->slug])}}">{{strtoupper($row->name)}}</a>
                </li>
                @endforeach
            </ul>

        </div>
    </nav>
</section>
