<li
    class="sidebar-item {{ Route::currentRouteName() === 'admin.index' ? 'active' : '' }}">
    <a href="{{route('admin.index')}}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
    </a>
</li>

<li
    class="sidebar-item {{ Route::currentRouteName() === 'admin.semua.pengaduan' ? 'active' : '' }}">
    <a href="{{route('admin.semua.pengaduan')}}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Lihat Pengaduan</span>
    </a>
</li>