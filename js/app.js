/* Full Page Scroll*/
$(document).ready(function () {
    new fullScroll({
        mainElement: "main",
        displayDots: true,
        dotsPosition: "left",
        animateTime: 0.7,
        animateFunction: "ease"
    });
});

/* Team */

var currentMember = 0;

$(document).ready(function () {
    changeMember(currentMember);

});

function changeMember(member) {
    $('#member-pic').attr("src", team[member].img);
    $('#member-name').html(team[member].name);
    $('#member-role').html(team[member].role);
    $('#member-team').html(team[member].team);
    $('#member-link1').attr("src", team[member].link1);
    $('#member-link2').attr("src", team[member].link2);
    currentMember = member;
}

function nextMember() {
    if (currentMember = 5) {
        changeMember(0)
    } else {
        changeMember(currentMember + 1);
    }
}

function prevMember() {
    if (currentMember = 0) {
        changeMember(5)
    } else {
        changeMember(currentMember - 1);
    }
}

/* Menu */
$(document).ready(function () {
    $("#menu").hide();
    $("#menu").removeClass("hidden");
});

function menu() {
    $("#menu").toggle();
}



/* Current Page*/
var currentPosition = 0;
var sections = ["", "INFO", "TEAM", "SPONSOREN", "KONTAKT", "DATEIEN"]

window.onhashchange = function () {
    let number = window.location.hash.substr(1, 2);
    if (number < 6 && number != currentPosition) {
        $('#links').children('p').eq(currentPosition).children('a').removeClass('active');
        $('#links').children('p').eq(number).children('a').addClass('active');
        $('#nav-info').animate(
            { left: '0', opacity: '0' },
            200,
            function () {
                $('#nav-info').children('h4').html(sections[number]);
                $('#nav-info').animate(
                    { left: '5vw', opacity: '1' }, 200);
            });

        currentPosition = number;
    }

};