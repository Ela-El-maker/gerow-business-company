(()=>{"use strict";$(document).ready((function(){var e=$(".shortcode-admin-config");function t(t){e.find(".shortcode-field-style-item").each((function(e,n){String($(n).data("styles")).includes(t)?$(n).removeClass("d-none"):$(n).addClass("d-none")}))}document.addEventListener("core-shortcode-config-loaded",(function(){e.find(".shortcode-field-select-style").length>0&&t(e.find(".shortcode-field-select-style").val().slice(-1))})),$(e).on("change",".shortcode-field-select-style",(function(e){t($(e.currentTarget).val().slice(-1))}))}))})();