<div class="fly-cart-wrap scroll-y" wire:poll.5s>
    <div class="fly-cart-content">
        <div class="fly-cart-header">

            <h3 class="fly-cart-title">Shopping Cart</h3>
            <div class="cart-data-js">
                <div data-value="{&quot;count&quot;:10,&quot;free_shipping_class_only&quot;:0}" class="cart-data-info"></div>
            </div>

         
            <div
                id="cart-table-wrap"
                class="woocommerce-cart-form-wrapper ">
                <div class="cart-content">
                    <table
                        class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th class="col-product-inf">Product</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($items as $item)
                            <tr
                                class="woocommerce-cart-item cart_item">
                                <td class="inf" style="border: 0px;">
                                    <div class="product-wra">
                                        <div class="product-thumbnail">
                                            @php
                                            $product = App\Models\Product::find($item['id']);
                                            $product_image = $product->image;
                                            @endphp
                                            <a
                                                href="../product/upplyst-led-wall-lamp/index.html"><m-image
                                                    class="minimog-lazy-image"
                                                    style="
                                        --lazy-image-width: 450px;
                                        --lazy-image-height: 100%;
                                      "
                                                    data-image-loading><img
                                                        loading="lazy"
                                                        decoding="async"
                                                        src="{{ url('public/storage/' . $product->image) }}"
                                                        width="450"
                                                        height="450"
                                                        alt="Upplyst LED wall lamp"
                                                        loading="lazy"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail product-main-image-img" /></m-image></a>
                                        </div>
                                        <div class="product-inf">
                                            <h6 class="product-title" style="font: 16px; margin: 0px;">
                                                <a
                                                    href="../product/upplyst-led-wall-lamp/index.html">{{$product->name}}</a>
                                            </h6>
                                            <p style="font: 16px; margin: 0px;"><span class="product-quantity" style="font: 16px; margin: 0px;"> x {{$item['qty']}}</span></p>
                                            <p style="font: 16px; margin: 0px;"><span class="product-quantity" style="font: 16px; margin: 0px;"> price:{{$item['price']}}</span></p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            

        </div>
        <div class="fly-cart-body scroll-y">
            <div class="fly-cart-body-content">
                <div class="fly-cart-messages"></div>
                <div class="widget_shopping_cart_content"></div>
            </div>
        </div>
        <div class="fly-cart-footer">
            <table class="cart-totals-table">
                <tfoot>
                    <tr class="cart-totals-row order-total">
                        <th class="cart-totals-label">Total</th>
                        <td class="cart-totals-value"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>{{$total}}</bdi></span></strong> </td>
                    </tr>

                </tfoot>
            </table>
            <div class="woocommerce-mini-cart__buttons buttons">
                <a href="{{ route('checkout') }}" class="button checkout wc-forward">Checkout</a> <a class="tm-button style-bottom-line tm-button-nm view-cart" href="{{ route('cart') }}">
                    <div class="button-content-wrapper">
                        <span class="button-text">View cart</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>