<hr class="sidebar-divider my-0">
 <!-- Nav Item - Dashboard -->
<li class="nav-item {{ request()->segment(1) == 'dasboard' ? 'active' : '' }}">
    <a class="nav-link" aria-current="page" href="{{ route('dasboard') }}">
        <i class="fas fa-desktop"></i>
        <small>Dasboard</small></a>
</li>
 <!-- Nav Item - Dashboard -->
 <li class="nav-item {{ request()->segment(1) == 'pjawab' ? 'active' : '' }}">
    <a class="nav-link" aria-current="page" href="{{ route('pjawab') }}">
        <i class='fas fa-user'></i>
        <small>Penanggung Jawab PT</small></a>
</li>

 <!-- Nav Item - Dashboard -->
 <li class="nav-item {{ request()->segment(1) == ' ' || request()->segment(1) == 'kerjasama' ? 'active' : '' }}">
    <a class="nav-link" aria-current="page" href="{{ route('bab1') }}">
        <i class="fas fa-solid fa-list"></i>
        <small>Pengajuan Ijin Kerjasama</small></a>
</li>

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ request()->segment(1) == 'pelaporan' ? 'active' : '' }}">
    <a class="nav-link" aria-current="page" href="{{ route('pelaporan') }}">
        <i class="fas fa-solid fa-book"></i>
        <small>Pelaporan Pelaksanaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerjasama</small></a>
</li>

 <!-- Nav Item - Dashboard -->
<li class="nav-item {{ request()->segment(1) == 'pengaturan' ? 'active' : '' }}">
    <a class="nav-link" aria-current="page" href="{{ route('pengaturan') }}">
        <i class="fas fa-solid fa-wrench"></i>
        <small>Pengaturan</small></a>
</li>

 <!-- Nav Item - Dashboard -->
 <li class="nav-item active">
    <a class="nav-link" href="#">
        <i class="fas fa-solid fa-key"></i>
        <small>Logout</small></a>
</li>

<hr/>

