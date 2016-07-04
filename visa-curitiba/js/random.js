var orig = $("#restaurant-grid div.grid").children("div.restaurant-box");

reorder();

function reorder() {
    var grp = $("#restaurant-grid div.grid").children("div.restaurant-box");
    var cnt = grp.length;

    var temp, x;
    for (var i = 0; i < cnt; i++) {
        temp = grp[i];
        x = Math.floor(Math.random() * cnt);
        grp[i] = grp[x];
        grp[x] = temp;
    }
    $(grp).remove();
    $("#restaurant-grid div.grid").append($(grp));
}
