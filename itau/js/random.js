var orig = $("#section-restaurants div.selecterContent ul.nolist").children("li");

reorder();

function reorder() {
    var grp = $("#section-restaurants div.selecterContent ul.nolist").children("li");
    var cnt = grp.length;

    var temp, x;
    for (var i = 0; i < cnt; i++) {
        temp = grp[i];
        x = Math.floor(Math.random() * cnt);
        grp[i] = grp[x];
        grp[x] = temp;
    }
    $(grp).remove();
    $("#section-restaurants div.selecterContent ul.nolist").append($(grp));
}