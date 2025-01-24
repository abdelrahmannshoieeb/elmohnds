<div class="container-broad">


    <div class="row">

        <div class="page-sidebar page-sidebar-left style-01 sidebar-widgets-collapsible sidebar-primary sidebar-off-mobile">
            <div class="page-sidebar-inner tm-sticky-column" data-sticky-group="content-sidebar"
                itemscope="itemscope">
                <a href="#" class="btn-close-off-sidebar">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.6465 8.975L16.7012 15.0297C16.8639 15.1924 16.8639 15.3715 16.7012 15.5668L15.5781 16.6898C15.3828 16.8526 15.2038 16.8526 15.041 16.6898L14.0156 15.6156L8.98633 10.6352L2.93164 16.6898C2.76888 16.8526 2.58984 16.8526 2.39453 16.6898L1.27148 15.5668C1.10872 15.3715 1.10872 15.1924 1.27148 15.0297L7.32617 8.975L1.27148 2.92031C1.10872 2.75755 1.10872 2.57852 1.27148 2.3832L2.39453 1.26016C2.58984 1.0974 2.76888 1.0974 2.93164 1.26016L8.98633 7.31484L15.041 1.26016C15.2038 1.0974 15.3828 1.0974 15.5781 1.26016L16.7012 2.3832C16.8639 2.57852 16.8639 2.75755 16.7012 2.92031L15.627 3.9457L10.6465 8.975Z"
                            fill="#000000" />
                    </svg>
                </a>
                <div class="page-sidebar-content-wrap">
                    <div class="page-sidebar-content">

                        <div id="custom_html-2" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <h6 class="sidebar-top-heading">Filters</h6>
                            </div>
                        </div>
                        <div id="minimog-wp-widget-product-categories-layered-nav-2" class="widget minimog-wp-widget-product-categories-layered-nav minimog-wp-widget-filter"><input type="hidden" class="widget-instance" data-name="Minimog_WP_Widget_Product_Categories_Layered_Nav" data-instance="{&quot;title&quot;:&quot;Categories&quot;,&quot;display_type&quot;:&quot;list&quot;,&quot;list_style&quot;:&quot;normal&quot;,&quot;items_count&quot;:&quot;off&quot;,&quot;show_hierarchy&quot;:0}" />
                            <p class="widget-title heading">Categories</p>
                            <div class="widget-content">
                                <div class="widget-content-inner">
                                    <ul class="show-display-list show-items-count-off list-style-normal">
                                        @foreach ($categories as $category )
                                        <li class="wc-layered-nav-term"><a href="" class="filter-link" wire:click="filterByCategory({{$category->id}})">{{ $category->name }} </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div id="minimog-wp-widget-product-price-filter-2" class="widget minimog-wp-widget-product-price-filter minimog-wp-widget-filter"><input type="hidden" class="widget-instance" data-name="Minimog_WP_Widget_Product_Price_Filter" data-instance="{&quot;title&quot;:&quot;Price&quot;,&quot;display_type&quot;:&quot;list&quot;,&quot;list_style&quot;:&quot;normal&quot;}" />
                            <p class="widget-title heading">Price</p>
                            <div class="widget-content">
                                <div class="widget-content-inner">
                                    <ul class="minimog-product-price-filter show-display-list list-style-normal single-choice">
                                        <li class="chosen">
                                            <a href="index.html"
                                                class="filter-link">All </a>
                                        </li>
                                        <li class="">
                                            <a href="" wire:click="filterByPrice(20000, 2000)"
                                                class="filter-link"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>20.000</bdi></span> <span class="wc-price-separator">&ndash;</span> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>22.000</bdi></span> </a>
                                        </li>
                                        <li class="">
                                            <a href="" wire:click="filterByPrice(22000, 25000)"
                                                class="filter-link"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>22.000</bdi></span> <span class="wc-price-separator">&ndash;</span> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>25.000</bdi></span> </a>
                                        </li>
                                        <li class="">
                                            <a href="" wire:click="filterByPrice(25000, 28000)"
                                                class="filter-link"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>25.000</bdi></span> <span class="wc-price-separator">&ndash;</span> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>28.000</bdi></span> </a>
                                        </li>
                                        <li class="">
                                            <a href="" wire:click="filterByPrice(28000, 33000)"
                                                class="filter-link"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>28.000</bdi></span> <span class="wc-price-separator">&ndash;</span> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>30.000</bdi></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="" wire:click="filterByPrice(33000, 38000)"
                                                class="filter-link"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>33.000</bdi></span> <span class="wc-price-separator">&ndash;</span> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>38.000</bdi></span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn-js-open-off-sidebar btn-open-off-sidebar-mobile btn-open-sidebar1 position-left"
            data-sidebar-target="primary">
            <span class="button-text">Filters</span>
        </a>

        <div class="page-main-content">
            <div class="shop-archive-block">




                <div class="woocommerce-notices-wrapper"></div>
                <div id="archive-shop-actions" class="archive-shop-actions">
                    <div class="row-flex items-center justify-space-between">
                        <div class="shop-actions-toolbar shop-actions-toolbar-left col">
                            <div class="inner">

                          

                            </div>
                        </div>
                        <div class="shop-actions-toolbar shop-actions-toolbar-right col">
                            <div class="inner">
                                <form class="js-product-ordering" method="get">
                                    <select name="orderby" class="orderby minimog-nice-select"
                                        aria-label="Shop order">
                                        <option
                                            value="menu_order" selected='selected'>Default sorting</option>
                                        <option
                                            value="popularity">Popularity</option>
                                        <option
                                            value="rating">Average rating</option>
                                        <option
                                            value="date">Latest</option>
                                        <option
                                            value="price">Price: low to high</option>
                                        <option
                                            value="price-desc">Price: high to low</option>
                                    </select>
                                    <input type="hidden" name="paged" value="1" />
                                    <input type="hidden" name="site_settings_preset" value="megamog" />
                                </form>
                                <div id="archive-layout-switcher" class="archive-layout-switcher">
                                    <div class="inner">
                                        <a href="#"
                                            class="grid-one switcher-item hint--bounce hint--top"
                                            aria-label="List"
                                            data-layout="grid-one"
                                            data-columns="1">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="15.25" y="4.25" width="1.5" height="12.5" rx="0.75" transform="rotate(90 15.25 4.25)" fill="#000000" />
                                                <rect x="15.25" y="8.25" width="1.5" height="12.5" rx="0.75" transform="rotate(90 15.25 8.25)" fill="#000000" />
                                                <rect x="15.25" y="12.25" width="1.5" height="12.5" rx="0.75" transform="rotate(90 15.25 12.25)" fill="#000000" />
                                            </svg> </a>
                                        <a href="#"
                                            class="grid-two switcher-item hint--bounce hint--top"
                                            aria-label="2 columns"
                                            data-layout="grid-two"
                                            data-columns="2">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="6.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                                <rect x="10.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                            </svg> </a>
                                        <a href="#"
                                            class="grid-three switcher-item hint--bounce hint--top"
                                            aria-label="3 columns"
                                            data-layout="grid-three"
                                            data-columns="3">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="4.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                                <rect x="8.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                                <rect x="12.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                            </svg> </a>
                                        <a href="#"
                                            class="grid-four switcher-item hint--bounce hint--top"
                                            aria-label="4 columns"
                                            data-layout="grid-four"
                                            data-columns="4">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                                <rect x="6.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                                <rect x="10.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                                <rect x="14.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                            </svg> </a>
                                        <a href="#"
                                            class="grid-five switcher-item hint--bounce hint--top"
                                            aria-label="5 columns"
                                            data-layout="grid-five"
                                            data-columns="5">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                                <rect x="4.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                                <rect x="8.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                                <rect x="12.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                                <rect x="16.25" y="2.75" width="1.5" height="12.5" rx="0.75" fill="#000000" />
                                            </svg> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="active-filters-bar" class="active-filters-bar">
                    <div class="active-filters-list"></div>
                </div>

                <div id="minimog-main-post" class="minimog-main-post minimog-grid-wrapper minimog-product group-style-06 style-grid-06 caption-style-06"
                    data-grid="{&quot;type&quot;:&quot;grid&quot;,&quot;columns&quot;:&quot;4&quot;,&quot;columnsTabletExtra&quot;:&quot;3&quot;,&quot;columnsMobileExtra&quot;:&quot;2&quot;,&quot;gutter&quot;:&quot;30&quot;,&quot;gutterTabletExtra&quot;:&quot;20&quot;,&quot;gutterMobileExtra&quot;:&quot;16&quot;}" style="--grid-columns-desktop: 4;--grid-columns-tablet-extra: 3;--grid-columns-mobile-extra: 2;--grid-gutter-desktop: 30;--grid-gutter-tablet-extra: 20;--grid-gutter-mobile-extra: 16;">
                    <div class="minimog-grid lazy-grid">
                        @foreach ($products as $product )
                        <div class="grid-item has-hover-thumbnail product type-product post-1484 status-publish first instock product_cat-cookware-tableware has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes vi-sctv-product">
                            <div class="product-wrapper">
                                <div class="product-thumbnail">
                                    <div class="thumbnail">
                                        <a href="{{ route('product', $product->id) }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <div class="product-main-image">
                                                <m-image class="minimog-lazy-image" style="--lazy-image-width: 450px; --lazy-image-height: 100%; max-width: 450px; max-height: 450px;" data-image-loading>
                                                    <m-image class="minimog-lazy-image" style="--lazy-image-width: 300px; --lazy-image-height: 450px; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;" data-image-loading>
                                                        <img
                                                            loading="lazy"
                                                            src="{{ url('public/storage/' . $product->image) }}"
                                                            alt="365+ Food container with lid"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail product-main-image-img" />
                                                    </m-image>
                                            </div>

                                            <div class="product-hover-image">
                                                <m-image class="minimog-lazy-image" style="--lazy-image-width: 450px; --lazy-image-height: 100%; max-width: 450px; max-height: 450px;" data-image-loading>
                                                    <img
                                                        loading="lazy"
                                                        src="{{ url('public/storage/' . $product->image) }}"
                                                        width="450"
                                                        height="450"
                                                        alt="365+ Food container with lid"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail product-main-image-img" />
                                                </m-image>
                                            </div>

                                        </a>
                                    </div>
                                    
                                    <div class="product-actions" wire:click="addToWhislist({{ $product->id }})">
                                        <div class="product-action wishlist-btn style-01 icon-star hint--bounce hint--left"
                                            data-hint="Add to wishlist">
                                            <a href="" class="woosw-btn woosw-btn-1484" data-id="1484" data-product_name="365+ Food container with lid" data-product_image="https://minimog-4437.kxcdn.com/megamog/wp-content/uploads/sites/3/2022/03/product_cook_01_1-150x150.jpg" rel="nofollow" aria-label="Add to wishlist">Add to wishlist</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-info">


                                    <div class="loop-product-category">
                                        <a href="../product-category/cookware-tableware/index.html">
                                            {{ $product->category->name }}</a>
                                    </div>



                                    <h3 class="woocommerce-loop-product__title post-title-2-rows">
                                        <a href="../product/365-food-container-with-lid/index.html">{{ $product->name }}</a>
                                    </h3>

                                    <div class="reviews-wrap">
                                        <div class="tm-star-rating style-01"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" class="tm-star-empty">
                                                <path fill="#000000 " d="M512,197.819l-185.933-12.228L256,9.571l-70.067,176.021L0,197.82l142.658,120.93L95.856,502.429L256,401.214 l160.144,101.215l-46.8-183.671L512,197.819z M256,365.724l-112.464,71.08l32.827-128.831L75.829,222.888l130.971-8.603 L256,90.687l49.2,123.599l131.124,8.602l-100.689,85.077l32.829,128.839L256,365.724z"></path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" class="tm-star-empty">
                                                <path fill="#000000 " d="M512,197.819l-185.933-12.228L256,9.571l-70.067,176.021L0,197.82l142.658,120.93L95.856,502.429L256,401.214 l160.144,101.215l-46.8-183.671L512,197.819z M256,365.724l-112.464,71.08l32.827-128.831L75.829,222.888l130.971-8.603 L256,90.687l49.2,123.599l131.124,8.602l-100.689,85.077l32.829,128.839L256,365.724z"></path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" class="tm-star-empty">
                                                <path fill="#000000 " d="M512,197.819l-185.933-12.228L256,9.571l-70.067,176.021L0,197.82l142.658,120.93L95.856,502.429L256,401.214 l160.144,101.215l-46.8-183.671L512,197.819z M256,365.724l-112.464,71.08l32.827-128.831L75.829,222.888l130.971-8.603 L256,90.687l49.2,123.599l131.124,8.602l-100.689,85.077l32.829,128.839L256,365.724z"></path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" class="tm-star-empty">
                                                <path fill="#000000 " d="M512,197.819l-185.933-12.228L256,9.571l-70.067,176.021L0,197.82l142.658,120.93L95.856,502.429L256,401.214 l160.144,101.215l-46.8-183.671L512,197.819z M256,365.724l-112.464,71.08l32.827-128.831L75.829,222.888l130.971-8.603 L256,90.687l49.2,123.599l131.124,8.602l-100.689,85.077l32.829,128.839L256,365.724z"></path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" class="tm-star-empty">
                                                <path fill="#000000 " d="M512,197.819l-185.933-12.228L256,9.571l-70.067,176.021L0,197.82l142.658,120.93L95.856,502.429L256,401.214 l160.144,101.215l-46.8-183.671L512,197.819z M256,365.724l-112.464,71.08l32.827-128.831L75.829,222.888l130.971-8.603 L256,90.687l49.2,123.599l131.124,8.602l-100.689,85.077l32.829,128.839L256,365.724z"></path>
                                            </svg></div>
                                    </div>


                                    <div class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>4.93</bdi></span></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>