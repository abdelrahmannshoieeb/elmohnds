<table class="woosw-items">
    @foreach ($products as $product)
    <tr class="woosw-item woosw-item-{{ $product->id }}" data-id="{{ $product->id }}">
        <td class="woosw-item--image">
            <a href="../product/{{ $product->slug }}/index.html">
                <img loading="lazy" decoding="async" width="450" height="450"
                    src="{{ url('public/storage/' . $product->image) }}"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
            </a>
        </td>
        <td class="woosw-item--info">
            <div class="woosw-item--name">
                <a href="../product/{{ $product->slug }}/index.html">{{ $product->name }}</a>
            </div>
            <div class="woosw-item--price">
                <div class="price">
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">&#036;</span>{{ $product->price }}
                    </span>
                </div>
            </div>
        </td>
        <td class="woosw-item--actions">
            <div class="woosw-item--add">
                <p class="product woocommerce add_to_cart_inline">
                
                @if (isset($messageByProduct[$product->id]))
                <div id="product-message-{{ $product->id }}"
                    class="product-message"
                    style="position: relative; left: 105px; color: #0A5EB0; margin-top: 10px;
                    @media screen and (max-width: 600px) { left: 0px; }">
                    {{ $messageByProduct[$product->id] }}
                </div>
                @endif
                <div class="product-action hint--bounce hint--top woocommerce_loop_add_to_cart_wrap"
                    data-hint="Select options">
                    <a href="#" data-quantity="1" wire:click="addToCart({{ $product->id }})"
                        class="button product_type_variable add_to_cart_button"
                        data-product_id="{{ $product->id }}" data-product_sku=""
                        aria-label="Select options for &ldquo;{{ $product->name }}&rdquo;"
                        rel="nofollow">
                        <span>اضف الى السلة</span>
                    </a>
                </div>
                </p>
            </div>

        </td>
    </tr>
    @endforeach
</table>

