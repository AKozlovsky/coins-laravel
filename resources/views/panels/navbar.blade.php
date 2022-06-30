<div class="navbar @if ($configData['isNavbarFixed']===true) {{ 'navbar-fixed' }} @endif">
    <nav class="{{ $configData['navbarMainClass'] }} @if (!empty($configData['navbarBgColor'])) {{ $configData['navbarBgColor'] }} @else {{ $configData['navbarMainColor'] }} @endif">
        <div class="nav-wrapper">
            <div class="header-search-wrapper hide-on-med-and-down">
                <i class="material-icons">search</i>
                <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize"
                    data-search="starter-kit-list">
                <ul class="search-list collection display-none"></ul>
            </div>
            <ul class="navbar-list right">
                <li class="dropdown-language">
                    <a class="waves-effect waves-block waves-light translation-button" href="#"
                        data-target="translation-dropdown">
                        <span class="flag-icon flag-icon-cz"></span>
                    </a>
                </li>
                <li class="hide-on-med-and-down">
                    <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                        <i class="material-icons">settings_overscan</i>
                    </a>
                </li>
                <li class="hide-on-large-only search-input-wrapper">
                    <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                        <i class="material-icons">search</i>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                        data-target="profile-dropdown">
                        <span class="avatar-status avatar-online">
                            <img src="{{ asset('images/avatar/avatar-7.png') }}" alt="avatar"><i></i>
                        </span>
                    </a>
                </li>
            </ul>
            <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown">
                <li class="dropdown-item">
                    <a class="grey-text text-darken-1" href="{{ url('lang/cz') }}" data-language="cz">
                        <i class="flag-icon flag-icon-cz"></i>
                        Czech
                    </a>
                </li>
                <li class="dropdown-item">
                    <a class="grey-text text-darken-1" href="{{ url('lang/ru') }}" data-language="ru">
                        <i class="flag-icon flag-icon-ru"></i>
                        Russian
                    </a>
                </li>
                <li class="dropdown-item">
                    <a class="grey-text text-darken-1" href="{{ url('lang/en') }}" data-language="en">
                        <i class="flag-icon flag-icon-gb"></i>
                        English
                    </a>
                </li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
                <li>
                    <a class="grey-text text-darken-1" href="#">
                        <i class="material-icons">person_outline</i>
                        Profile
                    </a>
                </li>
                <li>
                    <a class="grey-text text-darken-1" href="#">
                        <i class="material-icons">help_outline</i>
                        Help
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="grey-text text-darken-1" href="#">
                        <i class="material-icons">keyboard_tab</i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- search ul  -->
<ul class="display-none" id="default-search-main">
    <li class="auto-suggestion-title">
        <a class="collection-item" href="#">
            <h6 class="search-title">FILES</h6>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar">
                        <img src="{{ asset('images/icon/pdf-image.png') }}" width="24" height="30" alt="sample image">
                    </div>
                    <div class="member-info display-flex flex-column">
                        <span class="black-text">
                            Two new item submitted</span>
                        <small class="grey-text">Marketing Manager</small>
                    </div>
                </div>
                <div class="status"><small class="grey-text">17kb</small></div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar">
                        <img src="{{ asset('images/icon/doc-image.png') }}" width="24" height="30" alt="sample image">
                    </div>
                    <div class="member-info display-flex flex-column">
                        <span class="black-text">52 Doc file Generator</span>
                        <small class="grey-text">FontEnd Developer</small>
                    </div>
                </div>
                <div class="status"><small class="grey-text">550kb</small></div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar">
                        <img src="{{ asset('images/icon/xls-image.png') }}" width="24" height="30"
                            alt="sample image">
                    </div>
                    <div class="member-info display-flex flex-column">
                        <span class="black-text">25 Xls File Uploaded</span>
                        <small class="grey-text">Digital Marketing Manager</small>
                    </div>
                </div>
                <div class="status"><small class="grey-text">20kb</small></div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar">
                        <img src="{{ asset('images/icon/jpg-image.png') }}" width="24" height="30"
                            alt="sample image">
                    </div>
                    <div class="member-info display-flex flex-column">
                        <span class="black-text">Anna Strong</span>
                        <small class="grey-text">Web Designer</small>
                    </div>
                </div>
                <div class="status"><small class="grey-text">37kb</small></div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion-title">
        <a class="collection-item" href="#">
            <h6 class="search-title">MEMBERS</h6>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar">
                        <img class="circle" src="{{ asset('images/avatar/avatar-7.png') }}" width="30"
                            alt="sample image">
                    </div>
                    <div class="member-info display-flex flex-column">
                        <span class="black-text">John Doe</span>
                        <small class="grey-text">UI designer</small>
                    </div>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar">
                        <img class="circle" src="{{ asset('images/avatar/avatar-8.png') }}" width="30"
                            alt="sample image">
                    </div>
                    <div class="member-info display-flex flex-column">
                        <span class="black-text">Michal Clark</span>
                        <small class="grey-text">FontEnd Developer</small>
                    </div>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar">
                        <img class="circle" src="{{ asset('images/avatar/avatar-10.png') }}" width="30"
                            alt="sample image">
                    </div>
                    <div class="member-info display-flex flex-column">
                        <span class="black-text">Milena Gibson</span>
                        <small class="grey-text">Digital Marketing</small>
                    </div>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar">
                        <img class="circle" src="{{ asset('images/avatar/avatar-12.png') }}" width="30"
                            alt="sample image">
                    </div>
                    <div class="member-info display-flex flex-column">
                        <span class="black-text">Anna Strong</span>
                        <small class="grey-text">Web Designer</small>
                    </div>
                </div>
            </div>
        </a>
    </li>
</ul>
<ul class="display-none" id="page-search-title">
    <li class="auto-suggestion-title">
        <a class="collection-item" href="#">
            <h6 class="search-title">PAGES</h6>
        </a>
    </li>
</ul>
<ul class="display-none" id="search-not-found">
    <li class="auto-suggestion">
        <a class="collection-item display-flex align-items-center" href="#">
            <span class="material-icons">error_outline</span>
            <span class="member-info">No results found.</span>
        </a>
    </li>
</ul>
