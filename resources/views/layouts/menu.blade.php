<div class="topbar-wrapper topbar-theme d-xl-block d-none">

    <nav id="topbar">
        <ul class="list-unstyled menu-categories mb-0 container-xxl p-0">

            @foreach($components as $component => $items)

                @php
                    $isOpen = $items->contains(function ($item) {
                        return request()->routeIs($item->route . '*');
                    });
                @endphp

                <li class="admin-menu-dropdown {{ $isOpen ? 'active' : '' }}" data-toggle="dropdown">

                    <a class="admin-menu-toggle" aria-expanded="{{ $isOpen ? 'true' : 'false' }}">

                        <div class="menu-name">
                            <i data-feather="{{ $items->first()->comp_icon }}"></i>
                            <span>{{ $component }}</span>
                        </div>

                        <div class="caret-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2">
                                <path d="M9 6l6 6l-6 6" />
                            </svg>
                        </div>

                    </a>

                    <ul class="admin-dropdown-menu">

                        @foreach($items as $item)

                            @php
                                $isActive = request()->routeIs($item->route . '*');
                            @endphp

                            <li class="{{ $isActive ? 'active' : '' }}">
                                <a class="admin-dropdown-item"
                                href="{{ $item->route ? route($item->route) : '#' }}">

                                    {{ $item->sub_components_name }}

                                </a>
                            </li>

                        @endforeach

                    </ul>

                </li>

            @endforeach

        </ul>
    </nav>

</div>