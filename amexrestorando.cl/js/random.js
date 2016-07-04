var orig = $("div.container ul.restaurant-boxes").children("li");

reorder();

function reorder() {
    var grp = $("div.container ul.restaurant-boxes").children("li");
    var cnt = grp.length;

    var temp, x;
    for (var i = 0; i < cnt; i++) {
        temp = grp[i];
        x = Math.floor(Math.random() * cnt);
        grp[i] = grp[x];
        grp[x] = temp;
    }
    $(grp).remove();
    $("div.container ul.restaurant-boxes").append($(grp));
}