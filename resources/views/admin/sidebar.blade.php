<nav id="sidebarMenu" class="bg-dark navbar-dark">
    <h2 class="p-2"><i class="fa-solid fa-square-rss"></i> Boolfolio</h2>
    <ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}" href="{{ route('admin.dashboard') }}">
            <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
        </a>
    </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-secondary' : '' }}" href="{{ route('admin.projects.index') }}">
                <i class="fa-solid fa-newspaper fa-lg fa-fw"></i> Projects
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.types.index' ? 'bg-secondary' : '' }}" href="{{ route('admin.types.index') }}">
                <i class="fa-solid fa-folder-open fa-lg fa-fw"></i> Types
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.languages.index' ? 'bg-secondary' : '' }}" href="{{ route('admin.languages.index') }}">
                <i class="fa-solid fa-bookmark fa-lg fa-fw"></i> Languages
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#">
                <i class="fa-solid fa-users fa-lg fa-fw"></i> Users
            </a>
        </li>
    </ul>
</nav>
