<div class="navbar-vertical-footer-offset">
    <!-- Logo -->

    <a class="navbar-brand" href="index-2.html" aria-label="Front">
        <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos/logo.svg') }}" alt="Logo"
            data-hs-theme-appearance="default">
        <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos-light/logo.svg') }}" alt="Logo"
            data-hs-theme-appearance="dark">
        <img class="navbar-brand-logo-mini" src="{{ asset('assets/svg/logos/logo-short.svg') }}" alt="Logo"
            data-hs-theme-appearance="default">
        <img class="navbar-brand-logo-mini" src="{{ asset('assets/svg/logos-light/logo-short.svg') }}" alt="Logo"
            data-hs-theme-appearance="dark">
    </a>

    <!-- End Logo -->

    <!-- Navbar Vertical Toggle -->
    <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
        <i class="bi-arrow-bar-left navbar-toggler-short-align"
            data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
            data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
        <i class="bi-arrow-bar-right navbar-toggler-full-align"
            data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
            data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
    </button>

    <!-- End Navbar Vertical Toggle -->

    <!-- Content -->
    <div class="navbar-vertical-content">
        <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <div class="nav-item">
                <a class="nav-link active" href="{{ route('dashboard.index') }}" data-placement="left">
                    <i class="bi-house-door nav-icon"></i>
                    <span class="nav-link-title active">Dashboard</span>
                </a>
            </div>
            
            <span class="dropdown-header mt-4">Users & Roles</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div class="nav-item">
                <a class="nav-link " href="{{ route('dashboard.users.index') }}" data-placement="left">
                    <i class="bi-person nav-icon"></i>
                    <span class="nav-link-title">Users</span>
                </a>
            </div>

            <div class="nav-item">
                <a class="nav-link " href="{{ route('dashboard.roles.index') }}" data-placement="left">
                    <i class="bi-layers nav-icon"></i>
                    <span class="nav-link-title">Roles</span>
                </a>
            </div>

            <div class="nav-item">
                <a class="nav-link " href="{{ route('dashboard.permissions.index') }}" data-placement="left">
                    <i class="bi-shuffle nav-icon"></i>
                    <span class="nav-link-title">Permissions</span>
                </a>
            </div>
        </div>

    </div>
    <!-- End Content -->

    <!-- Footer -->
    <div class="navbar-vertical-footer">
        <ul class="navbar-vertical-footer-list">
            <li class="navbar-vertical-footer-list-item">
                <!-- Style Switcher -->
                <div class="dropdown dropup">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                        id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                        data-bs-dropdown-animation>

                    </button>

                    <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless"
                        aria-labelledby="selectThemeDropdown">
                        <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                            <i class="bi-moon-stars me-2"></i>
                            <span class="text-truncate" title="Auto (system default)">Auto (system
                                default)</span>
                        </a>
                        <a class="dropdown-item" href="#" data-icon="bi-brightness-high"
                            data-value="default">
                            <i class="bi-brightness-high me-2"></i>
                            <span class="text-truncate" title="Default (light mode)">Default (light
                                mode)</span>
                        </a>
                        <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                            <i class="bi-moon me-2"></i>
                            <span class="text-truncate" title="Dark">Dark</span>
                        </a>
                    </div>
                </div>

                <!-- End Style Switcher -->
            </li>

            <li class="navbar-vertical-footer-list-item">
                <!-- Other Links -->
                <div class="dropdown dropup">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                        id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                        data-bs-dropdown-animation>
                        <i class="bi-info-circle"></i>
                    </button>

                    <div class="dropdown-menu navbar-dropdown-menu-borderless"
                        aria-labelledby="otherLinksDropdown">
                        <span class="dropdown-header">Help</span>
                        <a class="dropdown-item" href="#">
                            <i class="bi-journals dropdown-item-icon"></i>
                            <span class="text-truncate" title="Resources &amp; tutorials">Resources &amp;
                                tutorials</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="bi-command dropdown-item-icon"></i>
                            <span class="text-truncate" title="Keyboard shortcuts">Keyboard shortcuts</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="bi-alt dropdown-item-icon"></i>
                            <span class="text-truncate" title="Connect other apps">Connect other apps</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="bi-gift dropdown-item-icon"></i>
                            <span class="text-truncate" title="What's new?">What's new?</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Contacts</span>
                        <a class="dropdown-item" href="#">
                            <i class="bi-chat-left-dots dropdown-item-icon"></i>
                            <span class="text-truncate" title="Contact support">Contact support</span>
                        </a>
                    </div>
                </div>
                <!-- End Other Links -->
            </li>

            <li class="navbar-vertical-footer-list-item">
                <!-- Language -->
                <div class="dropdown dropup">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                        id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                        data-bs-dropdown-animation>
                        <img class="avatar avatar-xss avatar-circle"
                            src="{{ asset('assets/vendor/flag-icon-css/flags/1x1/us.svg') }}" alt="United States Flag">
                    </button>

                    <div class="dropdown-menu navbar-dropdown-menu-borderless"
                        aria-labelledby="selectLanguageDropdown">
                        <span class="dropdown-header">Select language</span>
                        <a class="dropdown-item" href="#">
                            <img class="avatar avatar-xss avatar-circle me-2"
                                src="{{ asset('assets/vendor/flag-icon-css/flags/1x1/us.svg') }}" alt="Flag">
                            <span class="text-truncate" title="English">English (US)</span>
                        </a>
                        
                    </div>
                </div>

                <!-- End Language -->
            </li>
        </ul>
    </div>
    <!-- End Footer -->
</div>