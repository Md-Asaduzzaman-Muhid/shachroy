<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="{{route('admin.dashboard')}}"
                                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">@lang('Dashboard')</span></a></li>
                <li class="nav-small-cap"><span class="hide-menu">@lang('Controls')</span></li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow" href="javascript:void(0)"
                                            aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                            class="hide-menu">@lang('Control Panel')</span></a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item"><a href="{{route('admin.basic-controls')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Basic Controls')</span></a>
                        </li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu">@lang('UI Controls')</span></a>
                        </li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu">@lang('Social Login')</span></a></li>
                        <li class="sidebar-item"><a href="{{route('admin.email-controls')}} " class="sidebar-link"><span
                                    class="hide-menu">@lang('Email Controls') </span></a></li>
                        <li class="sidebar-item"><a href="{{route('admin.sms-controls')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('SMS Controls')</span></a></li>
                    </ul>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Services</span></li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow" href="javascript:void(0)"
                                            aria-expanded="false"><i data-feather="crosshair"
                                                                     class="feather-icon"></i><span
                            class="hide-menu">Services</span></a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item"><a href="{{route('admin.service.add')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Add Services')</span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('admin.service.show')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Show Services')</span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('admin.category.add')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Add Category')</span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('admin.category.show')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Show Category')</span></a>
                        </li>

                    </ul>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Api Providers</span></li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow" href="javascript:void(0)"
                                            aria-expanded="false"><i data-feather="crosshair"
                                                                     class="feather-icon"></i><span
                            class="hide-menu">@lang('Api Providers')</span></a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item"><a href="{{route('admin.provider.api-provider.create')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Add Api Provider')</span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('admin.provider.api-provider.index')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Show Api Provider')</span></a>
                        </li>
                    </ul>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Orders</span></li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="crosshair" class="feather-icon"></i><span class="hide-menu">@lang('Order')</span></a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item"><a href="{{route('admin.order.create')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Add Order')</span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('admin.order.index')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Show Order')</span></a>
                        </li>
                    </ul>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">@lang('Tickets')</span></li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="crosshair" class="feather-icon"></i><span class="hide-menu">@lang('Ticket')</span></a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item"><a href="{{route('admin.ticket.create')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Add Ticket')</span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('admin.ticket.index')}}" class="sidebar-link"><span
                                    class="hide-menu">@lang('Show Ticket')</span></a>
                        </li>
                    </ul>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="../../docs/docs.html"
                                            aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span
                            class="hide-menu">@lang('Documentation')</span></a></li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" aria-expanded="false">
                        <i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">@lang('Logout')</span></a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
