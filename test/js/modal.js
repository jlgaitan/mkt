function openModal(content, fn) {
    var $modal = $(".modal-data")
        , $body = $("body");
    $modal.find(".content").html(content);
    $modal.addClass("modal-open");
    $body.addClass("has-modal");

    $modal.find(".close").one("click", closeModal);

    $modal.one("click", function closeRec(e) {
        if ($(e.target).is(".modal-data")) {
            closeModal();
        } else {
            $modal.one("click", closeRec);
        }
    });
    fn && fn();
}

function closeModal() {
    var $modal = $(".modal-data")
        , $body = $("body");
    $modal.find(".content").html("");
    $modal.removeClass("modal-open");
    $body.removeClass("has-modal");
}

function openImage(src) {
    var img = document.createElement("img");
    img.src = src;
    openModal(img);
}

function openReservation(restaurant_id, partner) {
    var widget = document.createElement("restorando-widget");
    openModal(widget, function () {
        wido("runWidget", widget, {
            restaurant_id: restaurant_id,
            partner_id: partner,
        });
    });
}