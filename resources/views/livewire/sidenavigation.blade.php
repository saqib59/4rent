<div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="mini-sidebar"
        data-sidebar-position="fixed" data-header-position="absolute" data-boxed-layout="mini-sidebar">
        {{-- Nothing in the world is as soft and yielding as water. --}}
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2" data-toggle="tooltip" data-placement="right" title="Search">
                            <a class="sidebar-link waves-effect waves-dark" href="" aria-expanded="false">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <span class="hide-menu">Search</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2" data-toggle="tooltip" data-placement="right"
                            title="Go to Dashboard">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('dashboard') }}"
                                aria-expanded="false">
                                <i class="fas fa-home" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item" data-toggle="tooltip" data-placement="right" title="Go to Tenant List">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('tenant.list') }}"
                                aria-expanded="false">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span class="hide-menu">Tenant</span>
                            </a>
                        </li>
                        <li class="sidebar-item" data-toggle="tooltip" data-placement="right" title="Go to Object List">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('property.list') }}" aria-expanded="false">
                                <i class="fas fa-chart-area" aria-hidden="true"></i>
                                <span class="hide-menu">Property</span>
                            </a>
                        </li>
                        <li class="sidebar-item" data-toggle="tooltip" data-placement="right" title="Go to Formulas">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false">
                                <i class="fas fa-upload" aria-hidden="true"></i>
                                <span class="hide-menu">Formulas</span>
                            </a>
                        </li>
                        <li class="sidebar-item" data-toggle="tooltip" data-placement="right" title="Go to Checklists">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('bank.checklist')}}"
                                aria-expanded="false">
                                <i class="fas fa-check-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Checklists</span>
                            </a>
                        </li>
                        <li class="sidebar-item" data-toggle="tooltip" data-placement="right" title="Go to Calculators">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"  href="{{route('calculator')}}"
                                aria-expanded="false">
                                <i class="fas fa-calculator" aria-hidden="true"></i>
                                <span class="hide-menu">Calculators</span>
                            </a>
                        </li>
                        <li class="sidebar-item" data-toggle="tooltip" data-placement="right" title="Go to New User">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('tenant.create')}}"
                                aria-expanded="false">
                                <i class="fas fa-user-plus" aria-hidden="true"></i>
                                <span class="hide-menu">New User</span>
                            </a>
                        </li>
                        <li class="sidebar-item" data-toggle="tooltip" data-placement="right" title="Go to New Object">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('property.ui')}}"
                                aria-expanded="false">
                                <i class="fas fa-home" aria-hidden="true"></i>
                                <span class="hide-menu">New Object</span>
                            </a>
                        </li>
                        <li class="sidebar-item" data-toggle="tooltip" data-placement="right" title="Go to Location Score">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('locaton')}}"
                                aria-expanded="false">
                                <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Location Score</span>
                            </a>
                        </li>
                        <li class="sidebar-item" data-toggle="tooltip" data-placement="right" title="Go to Price Atlas">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('price')}}"
                                aria-expanded="false">
                                <i class="fas fa-chart-bar" aria-hidden="true"></i>
                                <span class="hide-menu">Price Atlas</span>
                            </a>
                        </li>
                        <li class="sidebar-item" data-toggle="tooltip" data-placement="right" title="Go to Settings">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/user/profile"
                                aria-expanded="false">
                                <i class="fas fa-cog" aria-hidden="true"></i>
                                <span class="hide-menu">Settings</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
    </div>
</div>
