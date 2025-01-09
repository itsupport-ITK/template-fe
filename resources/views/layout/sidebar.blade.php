
<li class="{{ Route::is('dashboard') ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><i class="fa-solid fa-chart-line fa-fw"></i> &nbsp; Dashboard</a>
</li>

{{-- <li class="{{ Str::contains(url()->current(), 'admin/manajemen-user') ? 'active' : '' }}">
    <a href="{{ route('admin.manajemen-user.index') }}"><i class="fa-solid fa-users-cog fa-fw"></i> &nbsp; Manajemen User</a>
</li> --}}