<div class="app-sidebar-menu flex-column-fluid px-7">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-y my-5" data-kt-scroll="true"
        data-kt-scroll-activate="true" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
        data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
        <!--begin::Primary menu-->
        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold" id="#kt_app_sidebar_menu"
            data-kt-menu="true" data-kt-menu-expand="false">
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-category fs-2"></i>
                    </span>
                    <span class="menu-title">Dashboards</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    {{--  <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link active" href="{{ route('index.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Control Panel</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link active" href="{{ route('categories.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Categories</span>
                        </a>
                        <!--end:Menu link-->
                    </div>  --}}
                      @foreach ($items as $item)
                    <div class="menu-item" >
                        <!--begin:Menu link-->
                        <a class="menu-link
                            {{ $item['route'] ==$active ? 'active' : ''}}

                        " href="{{ route($item['route']) }}" style="{{ $item['style'] }}">
                            <span class="menu-bullet">
                                <span class="{{ $item['icon'] }}"></span>
                            </span>
                            <span class="menu-title">{{ $item['title'] }}</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                      @endforeach



                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>

            <div class="separator separator-gray-300 separator-dashed my-3"></div>
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-setting-2 fs-2"></i>
                    </span>
                    <span class="menu-title">Settings</span>
                </span>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-user fs-2"></i>
                    </span>
                    <span class="menu-title">My Accounts</span>
                </span>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <div class="separator separator-gray-300 separator-dashed my-3"></div>
        </div>
        <!--end::Primary menu-->
        <!--begin::Messages-->
        <div class="menu menu-sub-indention menu-rounded menu-column">
            <div class="menu-item">
                <div class="menu-content">
                    <span class="menu-heading fw-bold fs-6 text-gray-800">Following</span>
                </div>
            </div>
            <!--begin::Menu Item-->
            <div class="menu-item">
                <!--begin::Menu link-->
                <a class="menu-link" href="apps/chat/private.html">
                    <!--begin::Bullet-->
                    <span class="menu-icon me-3">
                        <img alt="Logo" src="assets/media/svg/brand-logos/kickstarter.svg" class="rounded-1 mh-25px" />
                    </span>
                    <!--end::Bullet-->
                    <!--begin::Title-->
                    <span class="menu-title fw-bold">CNET</span>
                    <!--end::Title-->
                </a>
                <!--end::Menu link-->
            </div>
            <!--end::Menu Item-->
            <!--begin::Menu Item-->
            <div class="menu-item">
                <!--begin::Menu link-->
                <a class="menu-link" href="apps/chat/private.html">
                    <!--begin::Bullet-->
                    <span class="menu-icon me-3">
                        <img alt="Logo" src="assets/media/svg/brand-logos/vimeo.svg" class="rounded-1 mh-25px" />
                    </span>
                    <!--end::Bullet-->
                    <!--begin::Title-->
                    <span class="menu-title fw-bold">Vimeo</span>
                    <!--end::Title-->
                </a>
                <!--end::Menu link-->
            </div>
            <!--end::Menu Item-->
            <!--begin::Menu Item-->
            <div class="menu-item">
                <!--begin::Menu link-->
                <a class="menu-link" href="apps/chat/private.html">
                    <!--begin::Bullet-->
                    <span class="menu-icon me-3">
                        <img alt="Logo" src="assets/media/svg/brand-logos/slack-icon.svg" class="rounded-1 mh-25px" />
                    </span>
                    <!--end::Bullet-->
                    <!--begin::Title-->
                    <span class="menu-title fw-bold">Deviantart</span>
                    <!--end::Title-->
                </a>
                <!--end::Menu link-->
            </div>
            <!--end::Menu Item-->
            <!--begin::Collapsible items-->
            <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_following_collapse">
                <!--begin::Menu Item-->
                <div class="menu-item">
                    <!--begin::Menu link-->
                    <a class="menu-link" href="apps/chat/private.html">
                        <!--begin::Bullet-->
                        <span class="menu-icon me-3">
                            <img alt="Logo" src="assets/media/svg/brand-logos/disqus.svg" class="rounded-1 mh-25px" />
                        </span>
                        <!--end::Bullet-->
                        <!--begin::Title-->
                        <span class="menu-title fw-bold">Deviantart</span>
                        <!--end::Title-->
                    </a>
                    <!--end::Menu link-->
                </div>
                <!--end::Menu Item-->
                <!--begin::Menu Item-->
                <div class="menu-item">
                    <!--begin::Menu link-->
                    <a class="menu-link" href="apps/chat/private.html">
                        <!--begin::Bullet-->
                        <span class="menu-icon me-3">
                            <img alt="Logo" src="assets/media/svg/brand-logos/eolic-energy.svg"
                                class="rounded-1 mh-25px" />
                        </span>
                        <!--end::Bullet-->
                        <!--begin::Title-->
                        <span class="menu-title fw-bold">Ana Stone</span>
                        <!--end::Title-->
                    </a>
                    <!--end::Menu link-->
                </div>
                <!--end::Menu Item-->
                <!--begin::Menu Item-->
                <div class="menu-item">
                    <!--begin::Menu link-->
                    <a class="menu-link" href="apps/chat/private.html">
                        <!--begin::Bullet-->
                        <span class="menu-icon me-3">
                            <img alt="Logo" src="assets/media/svg/brand-logos/figma-1.svg" class="rounded-1 mh-25px" />
                        </span>
                        <!--end::Bullet-->
                        <!--begin::Title-->
                        <span class="menu-title fw-bold">Nick Bold</span>
                        <!--end::Title-->
                    </a>
                    <!--end::Menu link-->
                </div>
                <!--end::Menu Item-->
                <!--begin::Menu Item-->
                <div class="menu-item">
                    <!--begin::Menu link-->
                    <a class="menu-link" href="apps/chat/private.html">
                        <!--begin::Bullet-->
                        <span class="menu-icon me-3">
                            <img alt="Logo" src="assets/media/svg/brand-logos/fox-hub.svg" class="rounded-1 mh-25px" />
                        </span>
                        <!--end::Bullet-->
                        <!--begin::Title-->
                        <span class="menu-title fw-bold">Alex Larson</span>
                        <!--end::Title-->
                    </a>
                    <!--end::Menu link-->
                </div>
                <!--end::Menu Item-->
                <!--begin::Menu Item-->
                <div class="menu-item">
                    <!--begin::Menu link-->
                    <a class="menu-link" href="apps/chat/private.html">
                        <!--begin::Bullet-->
                        <span class="menu-icon me-3">
                            <img alt="Logo" src="assets/media/svg/brand-logos/infography.svg"
                                class="rounded-1 mh-25px" />
                        </span>
                        <!--end::Bullet-->
                        <!--begin::Title-->
                        <span class="menu-title fw-bold">Sara Holland</span>
                        <!--end::Title-->
                    </a>
                    <!--end::Menu link-->
                </div>
                <!--end::Menu Item-->
            </div>
            <!--end::Collapsible items-->
            <!--begin::Collapse toggle-->
            <div class="menu-item">
                <!--begin::Toggle-->
                <a class="menu-link bg-transparent toggle collapsible collapsed" data-bs-toggle="collapse"
                    href="#kt_app_sidebar_menu_following_collapse" data-kt-toggle-text="Show less">
                    <span class="menu-icon me-3">
                        <i class="ki-outline ki-down toggle-off fs-4 me-0"></i>
                        <i class="ki-outline ki-up toggle-on fs-4 me-0"></i>
                    </span>
                    <!--begin::Title-->
                    <span class="menu-title fs-base" data-kt-toggle-text-target="true">Show more</span>
                    <!--end::Title-->
                </a>
                <!--end::Toggle-->
            </div>
            <!--end::Collapse toggle-->
        </div>
        <!--end::Messages-->
    </div>
    <!--end::Menu wrapper-->
</div>
@push('styles')
<style>
    .hover-scroll-y {
        width: 15% !important;

    }
</style>
@endpush
