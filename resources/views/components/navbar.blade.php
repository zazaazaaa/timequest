<nav style="background-color: rgba(20, 15, 10, 0.9); backdrop-filter: blur(5px); box-shadow: 0 2px 4px rgba(0,0,0,0.1); position: fixed; top: 0; left: 0; right: 0; z-index: 50;">
    <div style="max-width: 80rem; margin-left: auto; margin-right: auto; padding: 0.75rem 1rem;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <a href="/" style="font-family: 'Cinzel', serif; color: #FFD700; font-size: 1.55rem; font-weight: bold; letter-spacing: 0.05em;">TimeQuest</a>
            </div>
            <div style="display: flex; gap: 2rem;">
                @if(Auth::check() && auth()->user()->isAdmin())
                    <a href="{{ route('admin.dashboard') }}"
                        style="color: #FFF8DC; font-family: 'Playfair Display', serif; font-size: 1.2rem; font-weight: 500; transition: all 0.3s ease-in-out; position: relative; padding-bottom: 0.25rem;"
                        onmouseover="this.style.color='#FFD700'"
                        onmouseout="this.style.color='#FFF8DC'">
                        Dashboard
                    </a>
                    <a href="{{ route('admin.products.create') }}"
                        style="color: #FFF8DC; font-family: 'Playfair Display', serif; font-size: 1.2rem; font-weight: 500; transition: all 0.3s ease-in-out; position: relative; padding-bottom: 0.25rem;"
                        onmouseover="this.style.color='#FFD700'"
                        onmouseout="this.style.color='#FFF8DC'">
                        Add Product
                    </a>
                    <a href="{{ route('logout') }}"
                        style="color: #FFF8DC; font-family: 'Playfair Display', serif; font-size: 1.2rem; font-weight: 500; transition: all 0.3s ease-in-out; position: relative; padding-bottom: 0.25rem;"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        onmouseover="this.style.color='#FFD700'"
                        onmouseout="this.style.color='#FFF8DC'">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @else
                @foreach(['Home', 'Catalog', 'About', 'Profile'] as $item)
                    <a href="{{ strtolower($item) === 'home' ? '/' : '/' . strtolower($item) }}"
                    style="color: {{ Request::is('/') && strtolower($item) === 'home' ? '#FFD700' : (Request::is(strtolower($item)) ? '#FFD700' : '#FFF8DC') }};
                            font-family: 'Playfair Display', serif; font-size: 1.2rem; font-weight: 500; transition: all 0.3s ease-in-out; position: relative; padding-bottom: 0.25rem;"
                    onmouseover="this.style.color='#FFD700'"
                    onmouseout="this.style.color='{{ Request::is('/') && strtolower($item) === 'home' ? '#FFD700' : (Request::is(strtolower($item)) ? '#FFD700' : '#FFF8DC') }}'">
                    {{ $item }}
                    </a>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>

<div style="height: 72px;"></div>