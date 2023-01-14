<div class="dropdown">
    <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown"
        data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
        data-bs-dropdown-animation>
        <div class="avatar avatar-sm avatar-circle">
            <img class="avatar-img" src="{{ asset('assets/img/user.jpg') }}" alt="Image Description">
            <span class="avatar-status avatar-sm-status avatar-status-success"></span>
        </div>
    </a>

    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
        aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
        <div class="dropdown-item-text">
            <div class="d-flex align-items-center">
                <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="{{ asset('assets/img/user.jpg') }}"
                        alt="Image Description">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                    <p class="card-text text-body">{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="#">Sign out</a>
    </div>
</div>