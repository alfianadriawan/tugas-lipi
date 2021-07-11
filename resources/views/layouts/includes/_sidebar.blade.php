<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

                @if (auth()->user()->role == 'admin')
                    <li><a href="/keltian"><i class="lnr lnr-user"></i> <span>Keltian</span></a></li>
                @endif

                <li><a href="/penelitiancrud"><i class="lnr lnr-bookmark"></i> <span>Penelitian</span></a></li>

                <li><a href="/kunjungancrud"><i class="lnr lnr-book"></i> <span>Kunjungan</span></a></li>
            </ul>
        </nav>
    </div>
</div>