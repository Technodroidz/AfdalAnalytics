$('#blog-slider').owlCarousel({
             loop: true,
             center: true,
             items: 3,
             margin: 20,
             autoplay: true,
             dots:true,
             autoplayTimeout: 8500,
             smartSpeed: 450,
             responsive: {
               0: {
                 items: 1
               },
               768: {
                 items: 2
               },
               1170: {
                 items: 3
               }
             }
         });

$(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").toggleClass("toggled");
  $("#close-sidebar").toggleClass("toggle-rotate");
  $(".sidebar-wrapper").toggleClass("width-set-sidebar");
  $(".sidebar-wrapper .show-menu-name").toggleClass("hide-menu-name");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").toggleClass("toggled");
});


// dashboard-chart start

//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["January", "February", "March", "April", "May", "June", "July"],
datasets: [{
label: "My First dataset",
data: [65, 59, 80, 81, 56, 55, 40],
backgroundColor: [
'rgb(251 215 178 / 72%)',
],
borderColor: [
'#f48a1d ',
],
borderWidth: 2
},
]
},
options: {
responsive: true
}
});

var ctxL = document.getElementById("lineChart2").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["January", "February", "March", "April", "May", "June", "July"],
datasets: [{
label: "My First dataset",
data: [65, 59, 80, 81, 56, 55, 40],
backgroundColor: [
'rgb(251 215 178 / 72%)',
],
borderColor: [
'#f48a1d ',
],
borderWidth: 2
},
]
},
options: {
responsive: true
}
});

// Dashboard chart End
