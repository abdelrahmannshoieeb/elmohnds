!function(o){"use strict";var n=window.minimog.Helpers,e=$minimogLogin.validatorMessages;o.extend(o.validator.messages,e.simple,{maxlength:o.validator.format(e.format.maxlength),minlength:o.validator.format(e.format.minlength),rangelength:o.validator.format(e.format.rangelength),range:o.validator.format(e.format.range),max:o.validator.format(e.format.max),min:o.validator.format(e.format.min)}),o(document).ready(function(){var e=o("body"),a=o("#modal-user-login"),s=o("#modal-user-register"),t=o("#modal-user-lost-password");a.find(".mo-openid-app-icons .mo_btn-social").prop("style",!1),a.find(".mo-openid-app-icons .mo_btn-social .mofa").prop("style",!1),a.find(".mo-openid-app-icons .mo_btn-social svg").prop("style",!1),a.find("#minimog-login-form").validate({rules:{user_login:{required:!0},password:{required:!0}},submitHandler:function(e){var a=o(e),s=a.find('button[type="submit"]');o.ajax({url:$minimog.ajaxurl,type:"POST",cache:!1,dataType:"json",data:a.serialize(),success:function(e){e.success?(a.find(".form-response-messages").html(e.data.messages).addClass("success").show(),""!==e.data.redirect_url?window.location.href=e.data.redirect_url:location.reload()):(a.find(".form-response-messages").html(e.data.messages).addClass("error").show(),"undefined"!=typeof hcaptcha&&(e=a.find(".h-captcha").find("iframe").data("hcaptcha-widget-id"),hcaptcha.reset(e)))},beforeSend:function(){a.find(".form-response-messages").html("").removeClass("error success").hide(),n.setElementHandling(s)},complete:function(){n.unsetElementHandling(s)}})}}),e.hasClass("required-login")&&!e.hasClass("logged-in")&&a.MinimogModal("open"),e.on("click",".open-modal-login",function(e){e.preventDefault(),e.stopPropagation(),a.MinimogModal("open")}),e.on("click",".open-modal-register",function(e){e.preventDefault(),e.stopPropagation(),s.MinimogModal("open")}),e.on("click",".open-modal-lost-password",function(e){e.preventDefault(),e.stopPropagation(),t.MinimogModal("open")}),e.on("click",".btn-pw-toggle",function(e){e.preventDefault(),e.stopPropagation();var e=o(this).parent(".form-input-password"),a=e.children("input");"password"===a.attr("type")?(a.attr("type","text"),e.addClass("show-pw")):(a.attr("type","password"),e.removeClass("show-pw"))}),s.find("#minimog-register-form").validate({rules:{username:{minlength:4},password:{minlength:8,maxlength:30}},submitHandler:function(e){var s=o(e),a=s.find('button[type="submit"]');o.ajax({url:$minimog.ajaxurl,type:"POST",cache:!1,dataType:"json",data:s.serialize(),success:function(e){var a;e.success?(s.find(".form-response-messages").html(e.data.messages).addClass("success").show(),e.data.redirect&&setTimeout(function(){window.location.href=e.data.redirect},5e3)):(s.find(".form-response-messages").html(e.data.messages).addClass("error").show(),"undefined"!=typeof hcaptcha&&(a=s.find(".h-captcha").find("iframe").data("hcaptcha-widget-id"),hcaptcha.reset(a)))},beforeSend:function(){s.find(".form-response-messages").html("").removeClass("error success").hide(),n.setElementHandling(a)},complete:function(){n.unsetElementHandling(a)}})}}),t.find("#minimog-lost-password-form").on("submit",function(e){e.preventDefault();var a=o(this),s=a.find('button[type="submit"]');o.ajax({type:"post",url:$minimog.ajaxurl,dataType:"json",data:a.serialize(),success:function(e){e.success?a.find(".form-response-messages").html(e.data.messages).addClass("success").show():(a.find(".form-response-messages").html(e.data.messages).addClass("error").show(),"undefined"!=typeof hcaptcha&&(e=a.find(".h-captcha").find("iframe").data("hcaptcha-widget-id"),hcaptcha.reset(e)))},beforeSend:function(){a.find(".form-response-messages").html("").removeClass("error success").hide(),n.setElementHandling(s)},complete:function(){n.unsetElementHandling(s)}})})})}(jQuery);