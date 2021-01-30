<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div style="text-align: center;" class="side-menu-container">
            <!-- navbar-header -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('voyager.dashboard') }}">
                    <div class="title">Админпанель</div>
                </a>
            </div>

        </div>
        <div id="adminmenu">
            <admin-menu :items="{{ menu('admin', '_json') }}"></admin-menu>
        </div>
    </nav>
</div>
