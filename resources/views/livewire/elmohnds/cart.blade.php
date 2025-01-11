<div class="woocommerce-cart-form">
    <div
        id="cart-table-wrap"
        class="woocommerce-cart-form-wrapper">
        <div class="cart-content">
            <table
                class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-product-info">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Subtotal</th>
                    </tr>
                </thead>
                <tbody>

                @foreach ($items as $item) 
                <tr
                    class="woocommerce-cart-form__cart-item cart_item">
                    <td class="info">
                        <div class="product-wrap">
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
                                            src="{{ asset('storage/' . $product_image) }}"
                                            width="450"
                                            height="450"
                                            alt="Upplyst LED wall lamp"
                                            loading="lazy"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail product-main-image-img" /></m-image></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a
                                        href="../product/upplyst-led-wall-lamp/index.html">{{$product->name}}</a>
                                </h6>
                                <a
                                wire:click="removeFromCart({{$item['id']}})"
                                style="cursor : pointer;"
                                    class="remove btn-remove-from-cart"
                                    data-cart_item_key="e94f63f579e05cb49c05c2d050ead9c0">Remove</a>
                            </div>
                        </div>
                    </td>

                    <td class="product-price" data-title="Price">
                        <label class="cart-item-label-mobile">Price :</label>
                        <span class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">&pound;</span>{{ $product->price}}</bdi></span>
                    </td>

                    <td
                        class="product-quantity"
                        data-title="Quantity">
                        <div
                            class="quantity-button-wrapper quantity-input-number">
                            <label
                                class="screen-reader-text"
                                for="quantity_676b215d79c66"
                                aria-label="Upplyst LED wall lamp quantity">Quantity</label>
                            <div class="quantity">
                                <input
                                    type="number"
                                    id="quantity_676b215d79c66"
                                    class="input-text qty text"
                                    name="e94f63f579e05cb49c05c2d050ead9c0"
                                    value="{{ $item['qty'] }}"
                                    aria-label="Product quantity"
                                    size="4"
                                    min="0"
                                    max="443"
                                    step="1"
                                    placeholder=""
                                    inputmode="numeric"
                                    autocomplete="off" />
                                <button
                                 type="button" class="decrease"  wire:click="updateQuantity({{ $item['id'] }}, -1)">
                                    -
                                </button>
                                <button type="button" class="increase"  wire:click="updateQuantity({{ $item['id'] }}, 1)">
                                    +
                                </button>
                            </div>
                        </div>
                    </td>

                    <td
                        class="product-subtotal"
                        data-title="Subtotal">
                        <label class="cart-item-label-mobile">Subtotal :</label>
                        <span class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">&pound;</span>{{$item['price'] * $item ['qty']}}</bdi></span>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <div id="cart-collaterals" class="cart-collaterals">
        <div class="cart_totals">


            <table class="cart-totals-table">
                <tfoot>
                    <tr class="cart-totals-row cart-subtotal">
                        <th class="cart-totals-label">Subtotal</th>
                        <td class="cart-totals-value">
                            <span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">&pound;</span></bdi></span>
                        </td>
                    </tr>

                    <tr class="cart-totals-row order-total">
                        <th class="cart-totals-label">Total</th>
                        <td class="cart-totals-value">
                            <strong><span
                                    class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">&pound;</span>{{ $total }}</bdi></span></strong>
                        </td>
                    </tr>
                </tfoot>
            </table>

            <div class="wc-proceed-to-checkout">
                <a
                wire:click = "saveCart()"
                href="{{ route ('checkout')}}"
                    class="checkout-button button alt wc-forward">
                    Checkout</a>
            </div>
        </div>
    </div>
</div>