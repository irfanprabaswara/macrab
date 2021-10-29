<div class="app-container">
    <div class="search">
        <form>
            <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
        </form>
        <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
    </div>
    <div class="app-header">
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-nav" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                    class="material-icons">first_page</i></a>
                        </li>
                        <li class="nav-item dropdown hidden-on-mobile">
                            <a class="nav-link dropdown-toggle" href="" id="addDropdownLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons">add</i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                <li><a class="dropdown-item" href="{{ url('/') }}/mancore/insert_mancore">Tambah Data</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item dropdown hidden-on-mobile">
                            <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons-outlined">upload</i>
                            </a>
                        </li> -->

                        <li style="display: flex; align-items:center;" class="nav-item dropdown hidden-on-mobile">
                                    <form action="{{url('/regional/import_excel')}}" method="post" id="form-import-excel" enctype="multipart/form-data">
                                        <label for="importExcel" style="line-height: 0px;">
                                            <i class="nav-link material-icons">upload</i>
                                        </label>
                                        {{ csrf_field() }}
                                        <input type="file" name="file" id="importExcel" accept=".xls, .xlsx" onchange="form.submit()" style="display:none">
                                    </form>
                                </li>

                        <li class="nav-item dropdown hidden-on-mobile">
                            <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons-outlined">download</i>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item hidden-on-mobile">
                            <a class="nav-link" href="#">Hello, Welcome
                                <b>{{ ucwords(Auth::user()->name) }}</b></a>
                        </li>
                        <li class="nav-item hidden-on-mobile">
                            <div class="avatar avatar-xs avatar-rounded">
                                <div class="avatar-title">MB</div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="material-icons">manage_accounts</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout"><i class="material-icons">logout</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
