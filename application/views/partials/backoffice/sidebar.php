<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <a href="<?= base_url('dashboard') ?>" class="brand-link">
            <img src="<?= base_url('adminlte') ?>/assets/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light"><?= env('APP_NAME') ?></span>
        </a>
    </div>
    <!--end::Sidebar Brand-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                aria-label="Main navigation" data-accordion="false" id="navigation">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Widgets
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./widgets/small-box.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Small Box</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./widgets/info-box.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>info Box</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./widgets/cards.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Cards</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-clipboard-fill"></i>
                        <p>
                            Layout Options
                            <span class="nav-badge badge text-bg-secondary me-3">6</span>
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./layout/unfixed-sidebar.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Default Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/fixed-sidebar.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/fixed-header.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fixed Header</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/fixed-footer.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/fixed-complete.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fixed Complete</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/layout-custom-area.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Layout <small>+ Custom Area </small></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/sidebar-mini.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Mini</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/collapsed-sidebar.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Mini <small>+ Collapsed</small></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/logo-switch.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Mini <small>+ Logo Switch</small></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/layout-rtl.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Layout RTL</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
</aside>