!function(C,d,i,n){function t(t){var a=this;a.$form=t,a.$attributeFields=t.find(".variations select"),a.$singleVariation=t.find(".single_variation"),a.$singleVariationWrap=t.find(".single_variation_wrap"),a.$resetVariations=t.find(".reset_variations"),a.$product=t.closest(".product"),a.variationData=t.data("product_variations"),a.useAjax=!1===a.variationData,a.xhr=!1,a.loading=!0,a.$singleVariationWrap.show(),a.$form.off(".wc-variation-form"),a.getChosenAttributes=a.getChosenAttributes.bind(a),a.findMatchingVariations=a.findMatchingVariations.bind(a),a.isMatch=a.isMatch.bind(a),a.toggleResetLink=a.toggleResetLink.bind(a),t.on("click.wc-variation-form",".reset_variations",{variationForm:a},a.onReset),t.on("reload_product_variations",{variationForm:a},a.onReload),t.on("hide_variation",{variationForm:a},a.onHide),t.on("show_variation",{variationForm:a},a.onShow),t.on("click",".ss",{variationForm:a},a.onAddToCart),t.on("reset_data",{variationForm:a},a.onResetDisplayedVariation),t.on("reset_image",{variationForm:a},a.onResetImage),t.on("change.wc-variation-form",".variations select",{variationForm:a},a.onChange),t.on("found_variation.wc-variation-form",{variationForm:a},a.onFoundVariation),t.on("check_variations.wc-variation-form",{variationForm:a},a.onFindVariation),t.on("update_variation_values.wc-variation-form",{variationForm:a},a.onUpdateAttributes),setTimeout(function(){t.trigger("check_variations"),t.trigger("wc_variation_form",a),a.loading=!1},100)}t.prototype.onReset=function(t){t.preventDefault(),t.data.variationForm.$attributeFields.val("").trigger("change"),t.data.variationForm.$form.trigger("reset_data")},t.prototype.onReload=function(t){t=t.data.variationForm;t.variationData=t.$form.data("product_variations"),t.useAjax=!1===t.variationData,t.$form.trigger("check_variations")},t.prototype.onHide=function(t){t.preventDefault(),t.data.variationForm.$form.find(".ss").removeClass("wc-variation-is-unavailable").addClass("disabled wc-variation-selection-needed"),t.data.variationForm.$form.find(".woocommerce-variation-add-to-cart").removeClass("woocommerce-variation-add-to-cart-enabled").addClass("woocommerce-variation-add-to-cart-disabled")},t.prototype.onShow=function(t,a,i){t.preventDefault(),i?(t.data.variationForm.$form.find(".single_add_to_cart_button").removeClass("disabled wc-variation-selection-needed wc-variation-is-unavailable"),t.data.variationForm.$form.find(".woocommerce-variation-add-to-cart").removeClass("woocommerce-variation-add-to-cart-disabled").addClass("woocommerce-variation-add-to-cart-enabled"),t.data.variationForm.$form.find(".quantity button").removeClass("disabled")):(t.data.variationForm.$form.find(".single_add_to_cart_button").removeClass("wc-variation-selection-needed").addClass("disabled wc-variation-is-unavailable"),t.data.variationForm.$form.find(".woocommerce-variation-add-to-cart").removeClass("woocommerce-variation-add-to-cart-enabled").addClass("woocommerce-variation-add-to-cart-disabled"),t.data.variationForm.$form.find(".quantity button").addClass("disabled")),wp.mediaelement&&t.data.variationForm.$form.find(".wp-audio-shortcode, .wp-video-shortcode").not(".mejs-container").filter(function(){return!C(this).parent().hasClass("mejs-mediaelement")}).mediaelementplayer(wp.mediaelement.settings)},t.prototype.onAddToCart=function(t){C(this).is(".disabled")&&(t.preventDefault(),C(this).is(".wc-variation-is-unavailable")?d.alert(wc_add_to_cart_variation_params.i18n_unavailable_text):C(this).is(".wc-variation-selection-needed")&&d.alert(wc_add_to_cart_variation_params.i18n_make_a_selection_text))},t.prototype.onResetDisplayedVariation=function(t){t=t.data.variationForm;t.$product.find(".product_meta").find(".sku").wc_reset_content(),t.$product.find(".product_weight, .woocommerce-product-attributes-item--weight .woocommerce-product-attributes-item__value").wc_reset_content(),t.$product.find(".product_dimensions, .woocommerce-product-attributes-item--dimensions .woocommerce-product-attributes-item__value").wc_reset_content(),t.$form.trigger("reset_image"),t.$singleVariation.slideUp(200).trigger("hide_variation")},t.prototype.onResetImage=function(t){t.data.variationForm.$form.wc_variations_image_update(!1)},t.prototype.onFindVariation=function(t,a){var i=t.data.variationForm,e=void 0!==a?a:i.getChosenAttributes(),t=e.data;e.count&&e.count===e.chosenCount?i.useAjax?(i.xhr&&i.xhr.abort(),i.$form.block({message:null,overlayCSS:{background:"#fff",opacity:.6}}),t.product_id=parseInt(i.$form.data("product_id"),10),t.custom_data=i.$form.data("custom_data"),i.xhr=C.ajax({url:wc_add_to_cart_variation_params.wc_ajax_url.toString().replace("%%endpoint%%","get_variation"),type:"POST",data:t,success:function(t){t?i.$form.trigger("found_variation",[t]):(i.$form.trigger("reset_data"),e.chosenCount=0,i.loading||(i.$form.find(".single_variation").after('<p class="wc-no-matching-variations woocommerce-info">'+wc_add_to_cart_variation_params.i18n_no_matching_variations_text+"</p>"),i.$form.find(".wc-no-matching-variations").slideDown(200)))},complete:function(){i.$form.unblock()}})):(i.$form.trigger("update_variation_values"),(a=i.findMatchingVariations(i.variationData,t).shift())?i.$form.trigger("found_variation",[a]):(i.$form.trigger("reset_data"),e.chosenCount=0,i.loading||(i.$form.find(".single_variation").after('<p class="wc-no-matching-variations woocommerce-info">'+wc_add_to_cart_variation_params.i18n_no_matching_variations_text+"</p>"),i.$form.find(".wc-no-matching-variations").slideDown(200)))):(i.$form.trigger("update_variation_values"),i.$form.trigger("reset_data")),i.toggleResetLink(0<e.chosenCount)},t.prototype.onFoundVariation=function(t,a){var t=t.data.variationForm,i=t.$product.find(".product_meta").find(".sku"),e=t.$product.find(".product_weight, .woocommerce-product-attributes-item--weight .woocommerce-product-attributes-item__value"),r=t.$product.find(".product_dimensions, .woocommerce-product-attributes-item--dimensions .woocommerce-product-attributes-item__value"),o=t.$singleVariationWrap.find(".quantity"),n=!0,s=!1,d="";a.sku?i.wc_set_content(a.sku):i.wc_reset_content(),a.weight?e.wc_set_content(a.weight_html):e.wc_reset_content(),a.dimensions?r.wc_set_content(C.parseHTML(a.dimensions_html)[0].data):r.wc_reset_content(),t.$form.wc_variations_image_update(a),a.variation_is_visible?(s=c("variation-template"),a.variation_id):s=c("unavailable-variation-template"),d=(d=(d=s({variation:a})).replace("/*<![CDATA[*/","")).replace("/*]]>*/",""),t.$singleVariation.html(d),t.$form.find('input[name="variation_id"], input.variation_id').val(a.variation_id).trigger("change"),"yes"===a.is_sold_individually?(o.find("input.qty").val("1").attr("min","1").attr("max","").trigger("change"),o.hide()):(i=o.find("input.qty"),e=parseFloat(i.val()),e=isNaN(e)||(e=e>parseFloat(a.max_qty)?a.max_qty:e)<parseFloat(a.min_qty)?a.min_qty:e,i.attr("min",a.min_qty).attr("max",a.max_qty).val(e).trigger("change"),o.show()),a.is_purchasable&&a.is_in_stock&&a.variation_is_visible||(n=!1),(t.$singleVariation.text().trim()?t.$singleVariation.slideDown(200):t.$singleVariation.show()).trigger("show_variation",[a,n])},t.prototype.onChange=function(t){t=t.data.variationForm;t.$form.find('input[name="variation_id"], input.variation_id').val("").trigger("change"),t.$form.find(".wc-no-matching-variations").remove(),t.useAjax||t.$form.trigger("woocommerce_variation_select_change"),t.$form.trigger("check_variations"),t.$form.trigger("woocommerce_variation_has_changed")},t.prototype.addSlashes=function(t){return t=(t=t.replace(/'/g,"\\'")).replace(/"/g,'\\"')},t.prototype.onUpdateAttributes=function(t){var b=t.data.variationForm,y=b.getChosenAttributes(),$=y.data;b.useAjax||(b.$attributeFields.each(function(t,a){var i,e=C(a),r=e.data("attribute_name")||e.attr("name"),a=C(a).data("show_option_none"),o=":gt(0)",n=C("<select/>"),s=e.val()||"",d=!0,c=(e.data("attribute_html")||((c=e.clone()).find("option").removeAttr("attached").prop("disabled",!1).prop("selected",!1),e.data("attribute_options",c.find("option"+o).get()),e.data("attribute_html",c.html())),n.html(e.data("attribute_html")),C.extend(!0,{},$)),_=(c[r]="",b.findMatchingVariations(b.variationData,c));for(i in _)if(void 0!==_[i]){var l,m=_[i].attributes;for(l in m)if(m.hasOwnProperty(l)){var g=m[l],v="",u=!1;if(l===r)if(_[i].variation_is_active&&(v="enabled"),_[i].is_in_stock||(u=!0),g){var g=C("<div/>").html(g).text(),f=n.find("option");if(f.length)for(var p=0,h=f.length;p<h;p++){var w=C(f[p]);if(g===w.val()){w.addClass("attached "+v),1<y.count&&0<y.chosenCount&&!s&&u&&w.addClass("out-of-stock"),1<y.count&&y.chosenCount===y.count&&u&&w.addClass("out-of-stock"),1===y.count&&u&&w.addClass("out-of-stock");break}}}else n.find("option:gt(0)").addClass("attached "+v)}}c=n.find("option.attached").length,s&&(d=!1,0!==c)&&n.find("option.attached.enabled").each(function(){var t=C(this).val();if(s===t)return!(d=!0)}),0<c&&s&&d&&"no"===a&&(n.find("option:first").remove(),o=""),n.find("option"+o+":not(.attached)").remove(),e.html(n.html()),e.find("option"+o+":not(.enabled)").prop("disabled",!0),s?d?e.val(s):e.val("").trigger("change"):e.val("")}),b.$form.trigger("woocommerce_update_variation_values"))},t.prototype.getChosenAttributes=function(){var i={},e=0,r=0;return this.$attributeFields.each(function(){var t=C(this).data("attribute_name")||C(this).attr("name"),a=C(this).val()||"";0<a.length&&r++,e++,i[t]=a}),{count:e,chosenCount:r,data:i}},t.prototype.findMatchingVariations=function(t,a){for(var i=[],e=0;e<t.length;e++){var r=t[e];this.isMatch(r.attributes,a)&&i.push(r)}return i},t.prototype.isMatch=function(t,a){var i,e,r,o=!0;for(i in t)t.hasOwnProperty(i)&&(e=t[i],r=a[i],e!==n)&&r!==n&&0!==e.length&&0!==r.length&&e!==r&&(o=!1);return o},t.prototype.toggleResetLink=function(t){t?"hidden"===this.$resetVariations.css("visibility")&&this.$resetVariations.css("visibility","visible").hide().fadeIn():this.$resetVariations.css("visibility","hidden")},C.fn.wc_variation_form=function(){return new t(this),this},C.fn.wc_set_content=function(t){n===this.attr("data-o_content")&&this.attr("data-o_content",this.text()),this.text(t)},C.fn.wc_reset_content=function(){n!==this.attr("data-o_content")&&this.text(this.attr("data-o_content"))},C.fn.wc_set_variation_attr=function(t,a,i=0){n===this.attr("data-o_"+t)&&this.attr("data-o_"+t,this.attr(t)?this.attr(t):""),!1===a?this.removeAttr(t):this.attr(t,a)},C.fn.wc_reset_variation_attr=function(t){n!==this.attr("data-o_"+t)&&this.attr(t,this.attr("data-o_"+t))},C.fn.wc_maybe_trigger_slide_position_reset=function(t){var a=C(this),i=a.closest(".product").find(".minimog-main-swiper"),e=!1,t=t&&t.image_id?t.image_id:"";a.attr("current-image")!==t&&(e=!0),a.attr("current-image",t),e&&0<i.length&&(a=i.find(".swiper-container")[0].swiper,(t=0)<(e=i.find(".swiper-slide.product-main-image")).length&&(t=void 0!==e.data("swiper-slide-index")?e.data("swiper-slide-index"):e.index()),a.params.loop?a.slideToLoop(t):a.slideTo(t))},C.fn.wc_variations_image_update=function(t){var a=this,i=a.closest(".product"),e=i.find(".woo-single-gallery"),r=e.find(".minimog-main-swiper .swiper-container"),o=i.find(".minimog-thumbs-swiper"),i=e.find(".wp-post-image"),n=i.closest(".product-main-image").find("a").eq(0);if(t&&t.variation_gallery_main_slides_html&&0<r.length&&0<e.siblings(".gallery-main-slides-o-html").length)(s=r[0].swiper).removeAllSlides(),s.appendSlide(t.variation_gallery_main_slides_html),s.update(),0<o.length&&((s=o.children(".swiper-inner").children(".swiper-container")[0].swiper).removeAllSlides(),s.appendSlide(t.variation_gallery_thumb_slides_html),s.update(),s.$wrapperEl.find(".swiper-slide").eq(0).addClass("swiper-slide-thumb-active")),e.addClass("variation-gallery-changed"),e.trigger("minimog_wc_gallery_init_light_gallery");else{if(a.wc_variations_slider_reset(),t&&t.image&&t.image.src&&1<t.image.src.length){0<r.find('.swiper-slide[data-image-id="'+t.image_id+'"]').length&&a.wc_variations_image_reset();var s=e.find('.swiper-slide[data-image-id="'+t.image_id+'"]');if(0<s.length)return 0<r.length&&(r[0].swiper.params.loop?r[0].swiper.slideToLoop(s.data("swiper-slide-index")):r[0].swiper.slideToLoop(s.index())),a.attr("current-image",t.image_id),void d.setTimeout(function(){C(d).trigger("resize"),e.trigger("woocommerce_gallery_init_zoom")},20);i.wc_set_variation_attr("src",t.image.src),i.wc_set_variation_attr("height",t.image.src_h),i.wc_set_variation_attr("width",t.image.src_w),i.wc_set_variation_attr("srcset",t.image.srcset),i.wc_set_variation_attr("sizes",t.image.sizes),i.wc_set_variation_attr("title",t.image.title),i.wc_set_variation_attr("data-caption",t.image.caption),i.wc_set_variation_attr("alt",t.image.alt),i.wc_set_variation_attr("data-src",t.image.full_src),i.wc_set_variation_attr("data-large_image",t.image.full_src),i.wc_set_variation_attr("data-large_image_width",t.image.full_src_w),i.wc_set_variation_attr("data-large_image_height",t.image.full_src_h),n.wc_set_variation_attr("href",t.image.full_src),setTimeout(function(){o.find(".swiper-slide:eq(0) img").wc_set_variation_attr("src",t.image.gallery_thumbnail_src)},200)}else a.wc_variations_image_reset();d.setTimeout(function(){C(d).trigger("resize"),a.wc_maybe_trigger_slide_position_reset(t),e.trigger("woocommerce_gallery_init_zoom")},20)}},C.fn.wc_variations_slider_reset=function(){var t,a,i=this.closest(".product"),e=i.find(".woo-single-gallery"),r=i.find(".minimog-main-swiper"),i=i.find(".minimog-thumbs-swiper");e.hasClass("variation-gallery-changed")&&(a=e.siblings(".gallery-main-slides-o-html").html(),t=e.siblings(".gallery-thumb-slides-o-html").html(),(r=r.children(".swiper-inner").children(".swiper-container")[0].swiper).removeAllSlides(),r.appendSlide(a),r.update(),(a=i.children(".swiper-inner").children(".swiper-container")[0].swiper).removeAllSlides(),a.appendSlide(t),a.update(),e.removeClass("variation-gallery-changed"),e.trigger("minimog_wc_gallery_init_light_gallery"))},C.fn.wc_variations_image_reset=function(){var t=this.closest(".product"),a=t.find(".woo-single-gallery"),t=t.find(".minimog-thumbs-swiper").find(".swiper-slide:eq(0) img"),a=a.find(".wp-post-image"),i=a.closest(".product-main-image").find("a").eq(0);this.wc_variations_slider_reset(),a.wc_reset_variation_attr("src"),a.wc_reset_variation_attr("width"),a.wc_reset_variation_attr("height"),a.wc_reset_variation_attr("srcset"),a.wc_reset_variation_attr("sizes"),a.wc_reset_variation_attr("title"),a.wc_reset_variation_attr("data-caption"),a.wc_reset_variation_attr("alt"),a.wc_reset_variation_attr("data-src"),a.wc_reset_variation_attr("data-large_image"),a.wc_reset_variation_attr("data-large_image_width"),a.wc_reset_variation_attr("data-large_image_height"),t.wc_reset_variation_attr("src"),i.wc_reset_variation_attr("href")},C(function(){"undefined"!=typeof wc_add_to_cart_variation_params&&C(".variations_form").each(function(){C(this).wc_variation_form()})});var o={find_matching_variations:function(t,a){for(var i=[],e=0;e<t.length;e++){var r=t[e];o.variations_match(r.attributes,a)&&i.push(r)}return i},variations_match:function(t,a){var i,e,r,o=!0;for(i in t)t.hasOwnProperty(i)&&(e=t[i],r=a[i],e!==n)&&r!==n&&0!==e.length&&0!==r.length&&e!==r&&(o=!1);return o}},c=function(t){var a=i.getElementById("tmpl-"+t).textContent;return/<#\s?data\./.test(a)||/{{{?\s?data\.(?!variation\.).+}}}?/.test(a)||/{{{?\s?data\.variation\.[\w-]*[^\s}]/.test(a)?wp.template(t):function(t){var r=t.variation||{};return a.replace(/({{{?)\s?data\.variation\.([\w-]*)\s?(}}}?)/g,function(t,a,i,e){return a.length!==e.length?"":(e=r[i]||"",2===a.length?d.escape(e):e)})}}}(jQuery,window,document);