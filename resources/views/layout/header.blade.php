




<header id="page-header" class="page-header header-06 nav-links-hover-style-line header-dark  header-sticky-dark-logo  header-icon-set-01  header-icon-badge-large">
    <div class="page-header-place-holder"></div>
    <div id="page-header-inner" class="page-header-inner" data-sticky="1">
     
        <div class="container-broad">
            <div class="header-wrap">

                <div class="header-left header-col-start">
                    <div class="header-content-inner">
                        <div id="page-open-mobile-menu" class="header-icon page-open-mobile-menu style-01"
                            data-menu-settings="{&quot;direction&quot;:&quot;right&quot;,&quot;animation&quot;:&quot;slide&quot;}">
                            <div class="icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.2812 5.84375H2.71875C2.58854 5.84375 2.47135 5.80469 2.36719 5.72656C2.28906 5.6224 2.25 5.50521 2.25 5.375V4.125C2.25 3.99479 2.28906 3.89062 2.36719 3.8125C2.47135 3.70833 2.58854 3.65625 2.71875 3.65625H19.2812C19.4115 3.65625 19.5156 3.70833 19.5938 3.8125C19.6979 3.89062 19.75 3.99479 19.75 4.125V5.375C19.75 5.50521 19.6979 5.6224 19.5938 5.72656C19.5156 5.80469 19.4115 5.84375 19.2812 5.84375ZM19.2812 12.0938H2.71875C2.58854 12.0938 2.47135 12.0547 2.36719 11.9766C2.28906 11.8724 2.25 11.7552 2.25 11.625V10.375C2.25 10.2448 2.28906 10.1406 2.36719 10.0625C2.47135 9.95833 2.58854 9.90625 2.71875 9.90625H19.2812C19.4115 9.90625 19.5156 9.95833 19.5938 10.0625C19.6979 10.1406 19.75 10.2448 19.75 10.375V11.625C19.75 11.7552 19.6979 11.8724 19.5938 11.9766C19.5156 12.0547 19.4115 12.0938 19.2812 12.0938ZM19.2812 18.3438H2.71875C2.58854 18.3438 2.47135 18.3047 2.36719 18.2266C2.28906 18.1224 2.25 18.0052 2.25 17.875V16.625C2.25 16.4948 2.28906 16.3906 2.36719 16.3125C2.47135 16.2083 2.58854 16.1562 2.71875 16.1562H19.2812C19.4115 16.1562 19.5156 16.2083 19.5938 16.3125C19.6979 16.3906 19.75 16.4948 19.75 16.625V17.875C19.75 18.0052 19.6979 18.1224 19.5938 18.2266C19.5156 18.3047 19.4115 18.3438 19.2812 18.3438Z" fill="black" />
                                </svg>
                            </div>
                        </div>

                        <div class="branding">
                            <div class="branding_logo">
                                <a href="{{ url('/') }}" 
                                 rel="home"><m-image class="minimog-lazy-image"
                                 style="--lazy-image-width: 322px;--lazy-image-height: 38.509316770186%;" 
                                 data-image-loading><img fetchpriority="high" src="{{ asset('assets/elmohnds.png')}}"
                                 class="logo dark-logo" alt="Megamog" width="100" fetchpriority="high" height="100" /></m-image></a>
                            </div>
                        </div>
                    </div>
                </div>

             

                <div class="header-right header-col-end">
                    <div class="header-content-inner">
                        @php
                            if(session()->has('wishlist')) {
                                $wishlist = session()->get('wishlist');
                                $count = count($wishlist);
                            }
                        @endphp
                        <a href="{{ route('wishlist') }}"
                            class="wishlist-link header-icon has-badge header-wishlist-link hint--bounce hint--bottom icon-set-01 icon-display--icon" aria-label="Wishlist">
                            <div class="icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.425 7.71875C20.9458 7.77083 21.2844 8.04427 21.4406 8.53906C21.5969 9.03385 21.4927 9.46354 21.1281 9.82812L16.9875 13.8516L17.9641 19.5547C18.0422 20.0495 17.8729 20.4401 17.4562 20.7266C17.0396 21.0391 16.6099 21.0781 16.1672 20.8438L11.05 18.1875L5.93281 20.8438C5.4901 21.1042 5.06042 21.0781 4.64375 20.7656C4.22708 20.4531 4.05781 20.0495 4.13594 19.5547L5.1125 13.8516L0.971875 9.82812C0.607292 9.46354 0.503125 9.03385 0.659375 8.53906C0.815625 8.04427 1.15417 7.77083 1.675 7.71875L7.37812 6.85938L9.91719 1.70312C10.1516 1.23438 10.5292 1 11.05 1C11.5708 1 11.9484 1.23438 12.1828 1.70312L14.7219 6.85938L20.425 7.71875ZM14.9953 13.1875L18.9016 9.35938L13.4719 8.57812L11.05 3.65625L8.62812 8.57812L3.19844 9.35938L7.10469 13.1875L6.20625 18.6172L11.05 16.0391L15.8937 18.6172L14.9953 13.1875Z" fill="#000000" />
                                </svg> 
                                @if (session()->has('wishlist'))
                                <span class="icon-badge" data-count="0">{{ $count}}</span>
                                @else
                                <span class="icon-badge" data-count="0">0</span>
                                @endif
                            </div>
                        </a>

                        @php
                            if(session()->has('cart')) {
                                $cart = session()->get('cart');
                                $count = count($cart);
                            }
                        @endphp
                        <a href="{{ route('cart') }}" class="mini-cart__button has-badge hint--bounce hint--bottom style-icon-set-01 icon-display--icon header-icon"
                            aria-label="Cart"
                            data-e-disable-page-transition="1">
                            <div class="icon"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.95 6H19.7V17.875C19.7 18.7344 19.3875 19.4635 18.7625 20.0625C18.1635 20.6875 17.4344 21 16.575 21H5.325C4.46563 21 3.72344 20.6875 3.09844 20.0625C2.49948 19.4635 2.2 18.7344 2.2 17.875V6H5.95C5.95 4.61979 6.43177 3.44792 7.39531 2.48438C8.3849 1.49479 9.56979 1 10.95 1C12.3302 1 13.5021 1.49479 14.4656 2.48438C15.4552 3.44792 15.95 4.61979 15.95 6ZM13.1375 3.8125C12.5385 3.1875 11.8094 2.875 10.95 2.875C10.0906 2.875 9.34844 3.1875 8.72344 3.8125C8.12448 4.41146 7.825 5.14062 7.825 6H14.075C14.075 5.14062 13.7625 4.41146 13.1375 3.8125ZM17.825 17.875V7.875H15.95V9.4375C15.95 9.69792 15.8589 9.91927 15.6766 10.1016C15.4943 10.2839 15.2729 10.375 15.0125 10.375C14.7521 10.375 14.5307 10.2839 14.3484 10.1016C14.1661 9.91927 14.075 9.69792 14.075 9.4375V7.875H7.825V9.4375C7.825 9.69792 7.73385 9.91927 7.55156 10.1016C7.36927 10.2839 7.14792 10.375 6.8875 10.375C6.62708 10.375 6.40573 10.2839 6.22344 10.1016C6.04115 9.91927 5.95 9.69792 5.95 9.4375V7.875H4.075V17.875C4.075 18.2135 4.19219 18.5 4.42656 18.7344C4.68698 18.9948 4.98646 19.125 5.325 19.125H16.575C16.9135 19.125 17.2 18.9948 17.4344 18.7344C17.6948 18.5 17.825 18.2135 17.825 17.875Z" fill="#000000" />
                                </svg>
                                @if (session()->has('cart'))
                                <div class="icon-badge mini-cart-badge" data-count="0">{{ $count}}</div>
                                @else
                                <div class="icon-badge mini-cart-badge" data-count="0">0</div>
                                @endif
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="header-below">
            <div class="container-broad">
                <div class="header-below-wrap">
                    <div class="header-below-center header-col-center">
                        <div class="header-content-inner">
                            <div id="page-navigation" class="navigation page-navigation">
                                <nav id="menu" class="menu menu--primary">
                                    <ul id="menu-primary" class="menu__container sm sm-simple" data-sm-options="{&quot;subMenusSubOffsetX&quot;:-18,&quot;subMenusSubOffsetY&quot;:-17}">
                                        <li class="menu-item-open-modal-demo-preview menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-327 current_page_item menu-item-330 level-1"><a href=" {{ route('home') }}">
                                                <div class="menu-item-wrap"><span class="menu-item-title">Home</span></div>
                                            </a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40 level-1"><a href="{{ route('theproducts') }}">
                                                <div class="menu-item-wrap"><span class="menu-item-title">Shop</span></div>
                                            </a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1112 level-1"><a href="#">
                                                <div class="menu-item-wrap"><span class="menu-item-title">Products</span></div>
                                            </a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-324 level-1"><a href="{{ route('wishlist') }}">
                                                <div class="menu-item-wrap"><span class="menu-item-title">wishlist</span></div>
                                            </a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1111 level-1"><a href="{{ route('cart') }}">
                                                <div class="menu-item-wrap"><span class="menu-item-title">cart</span></div>
                                            </a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2083 level-1"><a href="{{ route('contact') }}">
                                                <div class="menu-item-wrap"><span class="menu-item-title">contact</span></div>
                                            </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-below-right header-col-end">
                        <div class="header-content-inner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>