<div class="woocommerce">
    <div class="woocommerce-notices-wrapper"></div>
    <div class="checkout-content-wrap">
        <form name="checkout" class="checkout woocommerce-checkout"
            action="https://minimog.thememove.com/megamog/checkout/" enctype="multipart/form-data">
            <div class="row row-checkout-wrap">
                <div class="col-md-7 col-checkout-forms-wrap" dir="rtl">
                    <div id="customer_details">
                        <div class="woocommerce-billing-fields">
                            <h3>معلومات الدفع</h3>
                            <div class="woocommerce-billing-fields__field-wrapper">
                                <p class="form-row form-row-first col-sm-6 validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="">الاسم&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                                        <input wire:model="name" type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name" />
                                        @error('name')
                                        ادخل اسم من فضلك
                                        @enderror
                                    </span><span class="form-error form-error__invalid-required" style="display: none;">This field is required.</span></p>
                                <p class="form-row form-row-wide address-field col-sm-12 validate-required" id="billing_address_1_field" data-priority="50"><label for="billing_address_1" class="">علامة ميزة&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                                        <input wire:model="address" type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="House number and street name" value="" autocomplete="address-line1" />
                                        @error('address')
                                        ادخل اسم من فضلك
                                        @enderror
                                    </span><span class="form-error form-error__invalid-required" style="display: none;">This field is required.</span></p>
                                <p class="form-row form-row-wide address-field col-sm-12 validate-required" id="billing_city_field" data-priority="70"><label for="billing_city" class="">المدينة&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                                        <input type="text" wire:model="city" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" autocomplete="address-level2" />
                                        @error('city')
                                        ادخل اسم من فضلك
                                        @enderror
                                    </span><span class="form-error form-error__invalid-required" style="display: none;">This field is required.</span></p>
                                <p class="form-row form-row-wide address-field col-sm-12 validate-required validate-state">
                                    <label for="billing_state" class="">المحافظة&nbsp;<abbr class="required" title="required">*</abbr></label>
                                    <span class="woocommerce-input-wrapper">
                                        <select id="city-select" class="state_select" wire:change="updateShippingCost($event.target.value)">
                                            <option value="">Select City</option>
                                            @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </span>

                                    <span class="form-error form-error__invalid-required" style="display: none;">This field is required.</span>
                                </p>
                                <p class="form-row form-row-wide col-sm-6 validate-required validate-phone" id="billing_phone_field" data-priority="100"><label for="billing_phone" class="">Phone&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                                        <input wire:model="phone" type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel" />
                                        @error('phone')
                                        ادخل اسم من فضلك
                                        @enderror
                                    </span><span class="form-error form-error__invalid-required" style="display: none;">This field is required.</span><span class="form-error form-error__invalid-phone" style="display: none;">Please enter valid phone number.</span></p>
                                <p class="form-row form-row-wide col-sm-6 validate-required validate-email" id="billing_email_field" data-priority="110"><label for="billing_email" class="">Email address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input wire:model="email" type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="" autocomplete="email username" /></span><span class="form-error form-error__invalid-required" style="display: none;">This field is required.</span><span class="form-error form-error__invalid-email" style="display: none;">Please enter valid email address.</span></p>
                            </div>
                        </div>
                        <div class="woocommerce-shipping-fields">
                            <div class="shipping_address">
                            </div>
                        </div>
                        <div class="woocommerce-additional-fields">
                            <div class="woocommerce-additional-fields__field-wrapper">
                                <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Order notes&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></span></p>
                            </div>
                            <input type="hidden" name="wc_order_attribution_type" value="" /><input type="hidden" name="wc_order_attribution_url" value="" /><input type="hidden" name="wc_order_attribution_utm_campaign" value="" /><input type="hidden" name="wc_order_attribution_utm_source" value="" /><input type="hidden" name="wc_order_attribution_utm_medium" value="" /><input type="hidden" name="wc_order_attribution_utm_content" value="" /><input type="hidden" name="wc_order_attribution_utm_id" value="" /><input type="hidden" name="wc_order_attribution_utm_term" value="" /><input type="hidden" name="wc_order_attribution_session_entry" value="" /><input type="hidden" name="wc_order_attribution_session_start_time" value="" /><input type="hidden" name="wc_order_attribution_session_pages" value="" /><input type="hidden" name="wc_order_attribution_session_count" value="" /><input type="hidden" name="wc_order_attribution_user_agent" value="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-review-order">
                    <div class="inner">

                        <div class="">
                            <div id="woocommerce-checkout-review-order-table" class="woocommerce-order-details woocommerce-checkout-review-order-table" dir="ltr">
                                <h3 id="order_review_heading"
                                    class="checkout-order-review-heading">تفاصيل الطلب</h3>
                                <table class="wc-checkout-review-order-table">
                                    <tbody>
                                        @foreach ($items as $item )
                                        <tr class="cart_item">
                                            <td class="product-info">
                                                <div class="product-wrapper">
                                                    @php
                                                    $product = App\Models\Product::find($item['id']);
                                                    $product_image = $product->image;
                                                    @endphp
                                                    <div class="product-thumbnail">
                                                        <m-image class="minimog-lazy-image" style="--lazy-image-width: 450px;--lazy-image-height: 100%;" data-image-loading><img loading="lazy" decoding="async" src="{{ url('public/storage/' . $product->image) }}" width="450" height="450" alt="Upplyst LED wall lamp" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail product-main-image-img" /></m-image>
                                                    </div>

                                                    <div class="product-caption">
                                                        <h3 class="product-name">
                                                            {{ $item['name'] }}&nbsp; <span class="product-quantity">x{{ $item['qty'] }}</span>
                                                        </h3>
                                                        <dl class="variation">
                                                            <dt class="variation-Vendor">Vendor:</dt>
                                                            <dd class="variation-Vendor">
                                                                <p>Genuine Shop</p>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>{{ $item['price'] * $item['qty'] }}</bdi></span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                    <tfoot>

                                        <tr class="cart-footer-actions-row">
                                            <td colspan="2">
                                                <div class="cart-footer-actions">

                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="cart-totals-row cart-subtotal">
                                            <th class="cart-totals-label">الاجمالي قبل الشحن</th>
                                            <td class="cart-totals-value"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>{{ $subtotal }}</bdi></span></td>
                                        </tr>



                                        <tr class="cart-totals-row cart-shipping woocommerce-shipping-totals shipping">
                                            <th class="cart-totals-label">الشحن</th>
                                            <td class="cart-totals-value">
                                                <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                    <li>
                                                        <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate1" value="flat_rate:1" class="shipping_method" /> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>{{ $shipping }}</bdi></span></label>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>





                                        <tr class="cart-totals-row order-total">
                                            <th class="cart-totals-label">الاجمالي</th>
                                            <td class="cart-totals-value"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>{{ $subtotal + $shipping }}</bdi></span></strong> </td>
                                        </tr>


                                    </tfoot>
                                </table>
                            </div>
                            <h3 class="checkout-payment-info-heading">Payment information</h3>
                            <div class="woocommerce-checkout-payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_cheque">
                                        <div class="payment-title-wrap">
                                            <input id="payment_method_cheque" type="radio" class="input-radio"
                                                name="payment_method"
                                                value="cheque" data-order_button_text="" />
                                            <label class="payment_title" for="payment_method_cheque">
                                                <span class="payment-title-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512">
                                                        <path d="M313.583,134.372H87.111c-4.808,0-8.711,3.896-8.711,8.711c0,4.808,3.896,8.711,8.711,8.711h226.472c4.808,0,8.711-3.902,8.711-8.711C322.294,138.268,318.391,134.372,313.583,134.372z" />
                                                        <path d="M272.935,192.442H87.111c-4.808,0-8.711,3.896-8.711,8.711c0,4.808,3.896,8.711,8.711,8.711h185.824c4.808,0,8.711-3.903,8.711-8.711C281.645,196.338,277.743,192.442,272.935,192.442z" />
                                                        <path d="M180.022,250.511H87.111c-4.808,0-8.711,3.896-8.711,8.711c0,4.808,3.902,8.711,8.711,8.711h92.911c4.808,0,8.711-3.903,8.711-8.711C188.733,254.409,184.83,250.511,180.022,250.511z" />
                                                        <path d="M508.611,163.831l-35.771-35.765c-0.749-0.749-1.591-1.324-2.474-1.823V79.206c0-12.775-10.452-23.228-23.228-23.228H23.228C10.452,55.978,0,66.43,0,79.206v278.735c0,12.775,10.452,23.228,23.228,23.228h182.078c-2.282,3.624-4.251,7.497-5.308,10.662l-18.751,56.252c-1.62,4.854,0.174,7.939,4.07,7.939c0.964,0,2.062-0.192,3.269-0.593l56.252-18.751c6.057-2.021,14.715-7.369,19.233-11.881l43.634-43.627h139.437c12.775,0,23.228-10.452,23.228-23.228V218.498l38.244-38.245C513.129,175.741,513.129,168.349,508.611,163.831z M23.233,363.748c-3.147,0-5.807-2.66-5.807-5.807V79.206c0-3.147,2.66-5.807,5.807-5.807h423.91c3.147,0,5.807,2.66,5.807,5.807v52.333l-13.472,13.472l-7.445-7.45c-3.96-3.96-9.209-5.947-14.372-5.935c-5.168-0.006-10.418,1.98-14.378,5.947l-70.073,70.067c-3.403,3.403-3.403,8.919,0,12.317c3.403,3.403,8.914,3.403,12.317,0l70.079-70.079c0.557-0.557,1.26-0.831,2.056-0.836c0.79,0.006,1.492,0.279,2.056,0.836l7.445,7.445L220.735,363.748H23.233z M239.335,420.146l-34.209,11.405l11.4-34.221c0.715-2.137,2.416-5.273,4.233-7.996l26.572,26.572C244.59,417.73,241.437,419.449,239.335,420.146z M260.142,404.09l-27.554-27.56L413.377,195.74l27.56,27.554L260.142,404.09z M452.952,357.941L452.952,357.941c0,3.147-2.66,5.807-5.807,5.807H325.128l127.824-127.829V357.941z M453.253,210.977l-27.56-27.554l38.936-38.936l27.56,27.554L453.253,210.977z" />
                                                    </svg></span>
                                                <span class="payment-title-name">Check payments</span>
                                            </label>
                                        </div>
                                        <div class="payment_box payment_method_cheque"
                                            style="display:none;">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_cod">
                                        <div class="payment-title-wrap">
                                            <input id="payment_method_cod" type="radio" class="input-radio"
                                                name="payment_method"
                                                value="cod" data-order_button_text="" />
                                            <label class="payment_title" for="payment_method_cod">
                                                <span class="payment-title-icon"><svg viewBox="0 0 511 511.99978" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m235.792969 347.265625c3.902343-3.910156 3.902343-10.238281 0-14.148437-3.90625-3.898438-10.234375-3.898438-14.144531 0-3.898438 3.910156-3.898438 10.238281 0 14.148437 3.910156 3.898437 10.238281 3.898437 14.144531 0zm0 0" />
                                                        <path d="m188.449219 109.96875c0 60.636719 49.332031 109.972656 109.96875 109.972656s109.96875-49.335937 109.96875-109.972656-49.332031-109.96875-109.96875-109.96875-109.96875 49.332031-109.96875 109.96875zm199.945312 0c0 49.613281-40.363281 89.976562-89.976562 89.976562s-89.976563-40.363281-89.976563-89.976562c0-49.609375 40.363282-89.972656 89.976563-89.972656s89.976562 40.363281 89.976562 89.972656zm0 0" />
                                                        <path d="m115.652344 509.042969c3.875 3.90625 10.183594 3.949219 14.109375.082031l48.46875-47.75c8.234375-8.234375 10.738281-20.425781 7.117187-31.023438l10.425782-10.054687c5.613281-5.421875 13.003906-8.410156 20.816406-8.410156h132.902344c23.578124 0 45.863281-9.054688 62.757812-25.496094.695312-.675781-5.277344 6.359375 90.667969-108.3125 14.230469-16.835937 12.101562-42.117187-4.75-56.363281-16.746094-14.113282-41.832031-12.085938-56.101563 4.460937l-58.992187 60.632813c-7.449219-9.167969-18.808594-14.882813-31.082031-14.882813h-111.480469c-15.863281-6.636719-32.695313-9.996093-50.0625-9.996093-48.140625 0-90.175781 22.234374-112.734375 63.921874-9.503906-1.800781-19.527344 1.074219-26.738282 8.285157l-47.558593 47.699219c-3.882813 3.894531-3.890625 10.195312-.015625 14.101562zm74.792968-227.121094c15.3125 0 30.117188 3.082031 44.011719 9.160156 1.265625.554688 2.628907.839844 4.007813.839844h113.527344c10.839843 0 19.996093 8.839844 19.996093 19.992187 0 11.027344-8.96875 19.996094-19.996093 19.996094h-81.566407c-5.519531 0-9.996093 4.476563-9.996093 9.996094 0 5.523438 4.476562 9.996094 9.996093 9.996094h81.566407c22.050781 0 39.988281-17.9375 39.988281-39.988282 0-1.757812-.125-3.5-.351563-5.226562 57.066406-58.660156 65.113282-66.902344 65.457032-67.3125 7.125-8.410156 19.773437-9.476562 28.1875-2.382812 8.421874 7.121093 9.488281 19.761718 2.34375 28.21875l-89.667969 107.195312c-13.09375 12.570312-30.285157 19.488281-48.457031 19.488281h-132.902344c-13.023438 0-25.351563 4.980469-34.703125 14.015625l-8.496094 8.199219-78.320313-78.316406c18.304688-34.339844 52.652344-53.871094 95.375-53.871094zm-125.320312 66.34375c3.296875-3.296875 8.359375-3.890625 12.378906-1.40625 1.730469 1.054687-3.238281-3.46875 86.589844 86.234375 3.996094 3.996094 3.78125 10.363281.054688 14.089844l-41.320313 40.707031-98.230469-98.980469zm0 0" />
                                                        <path d="m286.421875 49.988281v11.714844c-11.636719 4.125-19.996094 15.238281-19.996094 28.273437 0 16.535157 13.453125 29.992188 29.992188 29.992188 5.511719 0 9.996093 4.484375 9.996093 9.996094 0 5.511718-4.484374 9.996094-9.996093 9.996094-4.269531 0-8.882813-2.683594-12.980469-7.5625-3.554688-4.226563-9.859375-4.769532-14.085938-1.21875-4.226562 3.554687-4.773437 9.859374-1.21875 14.085937 5.34375 6.355469 11.628907 10.785156 18.289063 13.019531v11.667969c0 5.523437 4.476563 9.996094 9.996094 9.996094s9.996093-4.472657 9.996093-9.996094v-11.714844c11.636719-4.128906 19.996094-15.242187 19.996094-28.273437 0-16.539063-13.453125-29.992188-29.992187-29.992188-5.511719 0-9.996094-4.484375-9.996094-9.996094 0-5.511718 4.484375-10 9.996094-10 3.542969 0 7.28125 1.808594 10.8125 5.226563 3.96875 3.839844 10.296875 3.734375 14.136719-.230469 3.839843-3.96875 3.734374-10.296875-.230469-14.136718-5.074219-4.910157-10.152344-7.6875-14.722657-9.203126v-11.644531c0-5.523437-4.476562-10-9.996093-10s-9.996094 4.476563-9.996094 10zm0 0" />
                                                    </svg></span>
                                                <span class="payment-title-name">Cash on delivery</span>
                                            </label>
                                        </div>
                                        <div class="payment_box payment_method_cod"
                                            style="display:none;">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-row place-order">
                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                        <div class="woocommerce-privacy-policy-text"></div>
                                    </div>
                                    <a style="width: 100%; background: black; font-size: 20px" class="button alt" wire:click="placeOrder">اكد الطلب </a>
                                </div>
                                @if (session()->has('success'))
                                <div class="alert alert-success text-center text-success" style="margin-top: 10px; font-size: 20px ; color: #008dda">
                                    {{ session('success') }}
                                    <a style="width: 100%; background: #008dda; font-size: 20px" href="{{ route('theproducts') }}" class="button alt">اذهب للمتجر </a>
                                </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>