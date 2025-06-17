import "./modules/bootstrap";
import "./modules/swiper";
import "./modules/fancybox";
import $ from "jquery";

$(function () {
    $(".question-form").on("submit", function (e) {
        e.preventDefault();

        const form = $(this);
        const url = form.attr("action");

        $.ajax({
            url: url,
            method: "POST",
            data: form.serialize(),
            success: function (response) {
                location.reload();
            },
            error: function (xhr) {
                console.log(xhr);

                const errors = xhr.responseJSON.errors;

                $(".is-invalid").removeClass("is-invalid");
                $(".invalid-feedback").remove();

                $.each(errors, function (key, messages) {
                    const input = $('[name="' + key + '"]');
                    input.addClass("is-invalid");

                    if (input.attr("type") === "checkbox") {
                        input
                            .closest(".form-check")
                            .append(
                                '<div class="invalid-feedback d-block">' +
                                    messages[0] +
                                    "</div>"
                            );
                    } else {
                        input.after(
                            '<div class="invalid-feedback">' +
                                messages[0] +
                                "</div>"
                        );
                    }
                });
            },
        });
    });
});

import IMask from "imask";

document.querySelectorAll('input[type="tel"]').forEach((input) => {
    input.placeholder = "+7 (912) 345 67-89";
    IMask(input, { mask: "+7 (000) 000 00-00" });
});
