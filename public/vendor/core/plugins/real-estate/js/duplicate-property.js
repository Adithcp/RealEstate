(()=>{"use strict";$(document).ready((function(){$(document).on("click",".btn-duplicate-property",(function(o){var e=this;o.preventDefault();var t=$(this).data("action");$.ajax({url:t,method:"POST",beforeSend:function(){$(e).prop("disabled",!0).addClass("button-loading")},success:function(o){o.error?Botble.showError(o.message):(Botble.showSuccess(o.message),setTimeout((function(){window.location.href=o.data.url}),500))},error:function(o){Botble.handleError(o)},complete:function(){$(e).prop("disabled",!1),$(e).removeClass("button-loading")}})}))}))})();