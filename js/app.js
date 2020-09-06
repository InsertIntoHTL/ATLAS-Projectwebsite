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

    if(team[member].team == "CORE"){
        $(".outer-circle").addClass("active");
        $(".inner-circle").removeClass("active");
    }else{
        $(".inner-circle").addClass("active");
        $(".outer-circle").removeClass("active");
    }
}

function nextMember() {
    if (currentMember === 5) {
        changeMember(0)
    } else {
        changeMember(currentMember + 1);
    }
}

function prevMember() {
    if (currentMember === 0) {
        changeMember(5)
    } else {
        changeMember(currentMember - 1);
    }
}

// Swipe function

$(function() {
    $('#membercard').swipe( {
    //Generic swipe handler for all directions
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
      if(direction == "right") {
        prevMember();
      } 
      if(direction == "left"){
        nextMember();
      }
    }
  });
});


//Spheres 
var outerSpheres = 20
    outerDist = 360/outerSpheres;
var innerSpheres = 12
    innerDist = 360/innerSpheres;

$(document).ready(function () {
    for(let i = 1; i <= innerSpheres; i++){
        $('.inner-circle').append(`<div id="innerSphere${i}"><span></span></div>`);
        $(`#innerSphere${i}`).css({ WebkitTransform: 'rotate(' + innerDist*i + 'deg)'});
    }
    for(let i = 1; i <= outerSpheres; i++){
        $('.outer-circle').append(`<div id="outerSphere${i}"><span></span></div>`);
        $(`#outerSphere${i}`).css({ WebkitTransform: 'rotate(' + outerDist*i + 'deg)'});
    }
});





/* Menu */
$(document).ready(function () {
    $("#menu").hide();
    $("#menu").removeClass("hidden");
});

function menu() {
    $("#menu").fadeToggle("fast");
    burgerToggle = !burgerToggle;
    toggleBurgerWrapper();
}


/* Menu toggle */

var mobile = window.matchMedia("(max-width: 768px)");
let burgerToggle = false;

function toggleBurgerWrapper() {
    let firstBurgerSpan = $("#burger-wrapper span:nth-of-type(1)").get(0);
    let secondBurgerSpan = $("#burger-wrapper span:nth-of-type(2)").get(0);
    let thirdBurgerSpan = $("#burger-wrapper span:nth-of-type(3)").get(0);
    if(mobile.matches) {
        if(burgerToggle) {
            firstBurgerSpan.style.transform = "rotate(45deg) translateY(14px)";
            secondBurgerSpan.style.opacity = "0";
            thirdBurgerSpan.style.transform = "rotate(-45deg) translateY(-14px)";
        } else {
            firstBurgerSpan.style.transform = "rotate(0) translateY(0)";
            secondBurgerSpan.style.opacity = "1";
            thirdBurgerSpan.style.transform = "rotate(0) translateY(0)";
        }
    } else {
        if(burgerToggle) {
            firstBurgerSpan.style.transform = "rotate(45deg) translateY(21px)";
            secondBurgerSpan.style.opacity = "0";
            thirdBurgerSpan.style.transform = "rotate(-45deg) translateY(-21px)";
        } else {
            firstBurgerSpan.style.transform = "rotate(0) translateY(0)";
            secondBurgerSpan.style.opacity = "1";
            thirdBurgerSpan.style.transform = "rotate(0) translateY(0)";
        }
    }
}


let magneticToggle = false;

let firstLink = $("#links a").get(0);
let secondLink = $("#links a").get(1);
let thirdLink = $("#links a").get(2);
let fourthLink = $("#links a").get(3);
let fifthLink = $("#links a").get(4);
let sixthLink = $("#links a").get(5);

function toggleMagneticButtons() {
    if(mobile.matches) {
        console.log("mobile matched")
        magneticToggle = true;
        console.log($("#links a"))
        $("#links a").get(0).toggleClass("btn");
        $("#links a").get(1).removeClass("btn");
        $("#links a").get(2).removeClass("btn");
        $("#links a").get(3).removeClass("btn");
        $("#links a").get(4).removeClass("btn");
        $("#links a").get(5).removeClass("btn");
    } else {
        if(magneticToggle) {
            $("#links a").addClass("btn");
            magneticToggle = false;
        }
    }
}

window.addEventListener('resize', toggleBurgerWrapper);
window.addEventListener('resize', toggleMagneticButtons);





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




