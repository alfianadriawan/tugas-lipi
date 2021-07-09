<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dashboard" class="{{ request()->is('/') ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

                @if (auth()->user()->role == 'admin')
                    <li><a href="/keltian" class="{{ request()->is('/keltian') ? 'active' : '' }}"><i class="lnr lnr-user"></i> <span>Keltian</span></a></li>
                @endif

                <li><a href="/penelitiancrud" class="{{ request()->is('/artikel') ? 'active' : '' }}"><i class="lnr lnr-book"></i> <span>CRUD Penelitian</span></a></li>

                <li><a href="/artikelcrud" class="{{ request()->is('/artikel') ? 'active' : '' }}"><i class="lnr lnr-book"></i> <span>CRUD Artikel</span></a></li>
            </ul>
        </nav>
    </div>
</div>