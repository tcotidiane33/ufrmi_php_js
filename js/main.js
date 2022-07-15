$(document).ready(function () {

  $(".ts-sidebar-menu li a").each(function () {
    if ($(this).next().length > 0) {
      $(this).addClass("parent");
    };
  })
  var menux = $('.ts-sidebar-menu li a.parent');
  $('<div class="more"><i class="fa fa-angle-down"></i></div>').insertBefore(menux);
  $('.more').click(function () {
    $(this).parent('li').toggleClass('open');
  });
  $('.parent').click(function (e) {
    e.preventDefault();
    $(this).parent('li').toggleClass('open');
  });
  $('.menu-btn').click(function () {
    $('nav.ts-sidebar').toggleClass('menu-open');
  });


  $('#zctb').DataTable();


  $("#input-43").fileinput({
    allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
    elErrorContainer: "#errorBlock43"
    // you can configure `msgErrorClass` and `msgInvalidFileExtension` as well
  });

});


const btnCli = document.querySelector(".myBtnCli");
const btnCom = document.querySelector(".myBtnCom");
const btnCon = document.querySelector(".myBtnCon");
const btnFac = document.querySelector(".myBtnFac");
const btnPan = document.querySelector(".myBtnPan");
const btnReg = document.querySelector(".myBtnReg");
const btnTreg = document.querySelector(".myBtnTreg");


btnCli.onclick = () => {
  console.log("echo client ..");
  location.href = "client.php";

}
btnCli.onclick = () => {
  console.log("echo client ..");
  location.href = "client.php";

}
btnCom.onclick = () => {
  console.log("echo commune ..");
  location.href = "commune.php";

}
btnCon.onclick = () => {
  console.log("echo contrat ..");
  location.href = "contrat.php";

}
btnFac.onclick = () => {
  console.log("echo facture ..");
  location.href = "facture.php";

}

btnPan.onclick = () => {
  console.log("echo panneau ..");
  location.href = "panneau.php";

}

btnReg.onclick = () => {
  console.log("echo reglement ..");
  location.href = "reglement.php";

}
btnTreg.onclick = () => {
  console.log("echo Type reglement ..");
  location.href = "typereglement.php";

}




//  //  /login page admin without control
const btnLog = document.querySelector(".form-login .myBtnLog");

// log
btnLog.onclick = () => {
  console.log("echo page admin is open");
  location.href = "/admin/admin-profile.php";
  // alert('echo reply...');
}



// nez 

$(function () {
  var $refreshButton = $('#refresh');
  var $results = $('#css_result');

  function refresh() {
    var css = $('style.cp-pen-styles').text();
    $results.html(css);
  }

  refresh();
  $refreshButton.click(refresh);

  // Select all the contents when clicked
  $results.click(function () {
    $(this).select();
  });
});

//navbar 
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
function myFunction_parc() {
  document.getElementById("myDropdown_parc").classList.toggle("show");

}
function myFunction_lab() {
  document.getElementById("myDropdown_lab").classList.toggle("show");
}
function myFunction_space() {
  document.getElementById("myDropdown_space").classList.toggle("show");

}


// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
// PROMOTION HEADER
const target = document.getElementById("target");
let array = [
  "LMD",
  "LICENCE ",
  "MASTER",
  "DOCTORAT",
  "ACTUARIAT",
  "MIAGE",
  "MATHEMATIQUES",
  "MECANIQUE",
  "INFORMATIQUE",
  "BDGL",
  "PROBABILITÉ",
];
let wordIndex = 0;
let letterIndex = 0;

const createLetter = () => {
  const letter = document.createElement("span");
  target.appendChild(letter);

  letter.classList.add("letter");
  letter.style.opacity = "0";
  letter.style.animation = "anim 5s ease forwards";
  letter.textContent = array[wordIndex][letterIndex];

  setTimeout(() => {
    letter.remove();
  }, 2000);
};

const loop = () => {
  setTimeout(() => {
    if (wordIndex >= array.length) {
      wordIndex = 0;
      letterIndex = 0;
      loop();
    } else if (letterIndex < array[wordIndex].length) {
      createLetter();
      letterIndex++;
      loop();
    } else {
      letterIndex = 0;
      wordIndex++;
      setTimeout(() => {
        loop();
      }, 2000);
    }
  }, 80);
};
loop();
// END PROMOTION
// good coding



// nav-right


"use strict";

const body = document.body;
const bgColorsBody = ["#ffb457", "#ff96bd", "#9999fb", "#ffe797", "#cffff1"];
const menu = body.querySelector(".menu");
const menuItems = menu.querySelectorAll(".menu__item");
const menuBorder = menu.querySelector(".menu__border");
let activeItem = menu.querySelector(".active");

function clickItem(item, index) {

  menu.style.removeProperty("--timeOut");

  if (activeItem == item) return;

  if (activeItem) {
    activeItem.classList.remove("active");
  }


  item.classList.add("active");
  body.style.backgroundColor = bgColorsBody[index];
  activeItem = item;
  offsetMenuBorder(activeItem, menuBorder);


}

function offsetMenuBorder(element, menuBorder) {

  const offsetActiveItem = element.getBoundingClientRect();
  const left = Math.floor(offsetActiveItem.left - menu.offsetLeft - (menuBorder.offsetWidth - offsetActiveItem.width) / 2) + "px";
  menuBorder.style.transform = `translate3d(${left}, 0 , 0)`;

}

offsetMenuBorder(activeItem, menuBorder);

menuItems.forEach((item, index) => {

  item.addEventListener("click", () => clickItem(item, index));

})

window.addEventListener("resize", () => {
  offsetMenuBorder(activeItem, menuBorder);
  menu.style.setProperty("--timeOut", "none");
});



// GALERIE
/


