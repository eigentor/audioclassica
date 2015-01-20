// $Id$

function checkKeyDown(key) {
 	//Check different variables for different browsers (IE MUST DIE)
   if (window.event) {
     ctrlAltCombo = eval(visibilityCombo.replace(/\+/g, '&&').replace(/([a-z]+)/g, "window.event.$1Key").replace(/([0-9]+)/g, "window.event.keyCode == $1"));
     ctrlShiftAltCombo = eval(disableCombo.replace(/\+/g, '&&').replace(/([a-z]+)/g, "window.event.$1Key").replace(/([0-9]+)/g, "window.event.keyCode == $1"));
   }
   else if (key) {
     ctrlAltCombo = eval(visibilityCombo.replace(/\+/g, '&&').replace(/([a-z]+)/g, "key.$1Key").replace(/([0-9]+)/g, "key.which == $1"));
     ctrlShiftAltCombo = eval(disableCombo.replace(/\+/g, '&&').replace(/([a-z]+)/g, "key.$1Key").replace(/([0-9]+)/g, "key.which == $1"));
   }
   
  if (ctrlAltCombo && disable == 0) {
    if (hidden == 0) {
      $(document).ready(function(){$("div#admin-menu").hide()});
      $("body").css("margin-top","0px");
      hidden = 1;
    }
    else {
      $(document).ready(function(){$("div#admin-menu").show()});
      $("body").css("margin-top","20px");
      hidden = 0;
    }
  }
  if (ctrlShiftAltCombo) {
    if (disable == 0) {
      $("div#admin-menu").css({display:"block", position:"absolute"});
      $("body").css("margin-top","20px");
      disable = 1;
    }
    else {
      $("div#admin-menu").css({display:"none", position:"fixed"});
      $("body").css("margin-top","0px");
      disable = 0;
    }
  }
}
disable = 0;
document.onkeydown = checkKeyDown;
