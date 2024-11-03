<li
    class="sidebar-item {{ Route::currentRouteName() === 'admin.index' ? 'active' : '' }}">
    <a href="{{route('admin.index')}}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
    </a>
</li>

{{-- <li
    class="sidebar-item {{ Route::currentRouteName() === 'admin.semua.pengaduan' ? 'active' : '' }}">
    <a href="{{route('admin.semua.pengaduan')}}" class='sidebar-link'>
        <i class="bi bi-info-circle-fill"></i>
        <span>Lihat Pengaduan</span>
    </a>
</li> --}}

<li class="sidebar-item  has-sub {{ (Route::currentRouteName() === 'admin.semua.pengaduan' || Route::currentRouteName() === 'admin.semua.pending.pengaduan') ? 'active' : '' }}">
    <a href="#" class="sidebar-link">
        <i class="bi bi-info-circle-fill"></i>
        <span>Lihat Pengaduan</span>
    </a>
    
    <ul class="submenu submenu-closed" style="--submenu-height: 215px;">
        
        <li class="submenu-item  {{ Route::currentRouteName() === 'admin.semua.pengaduan' ? 'active' : '' }}">
            <a href="{{route('admin.semua.pengaduan')}}" class="submenu-link">Semua Pengaduan</a>
            
        </li>
        
        {{-- <li class="submenu-item {{ Route::currentRouteName() === 'admin.semua.pending.pengaduan' ? 'active' : '' }} ">
            <a href="{{route('admin.semua.pending.pengaduan')}}" class="submenu-link">Pending</a>
            
        </li> --}}
        
        <li class="submenu-item  ">
            <a href="layout-vertical-1-column.html" class="submenu-link">Proses</a>
            
        </li>
        
        <li class="submenu-item  ">
            <a href="layout-vertical-1-column.html" class="submenu-link">Selesai</a>
            
        </li>
        
    </ul>
    

</li>