
// Paralax Header
$(window).scroll(function() {
    var wScroll = $(this).scrollTop();

    $('.title').css({
        // scroll speed for title
        'transform' : 'translate(0px, '+wScroll /4+'%)'
    });

    $('.leaf').css({
        // scroll speed for leaf img
        'transform' : 'translate(0px, '+wScroll /5+'%)'
    });

    $('.plant').css({
        // scroll speed for plant img
        'transform' : 'translate(0px, -'+wScroll /38+'%)'
    });

    // Animate button away
    $(".dropdown").css({
        'transform' : 'translate('+wScroll * 2+'%, 0px)'
    });


});


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropDown() {
   document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i]
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

// $('.chalkboardbody').scroll(function() {
//    $('.arrow').css({
//        'display' : 'none'
//    })
// });

// Hover effect for buttons
$(function() {
    $('.strainsButton').hover(function() {
      $('.strainsSquare').css('background-color', '#CFE96C');

    }, function() {
      // on mouseout, reset the background colour
      $('.strainsSquare').css('background-color', '#899D41');
    });

    $('.hashButton').hover(function() {
        $('.hashSquare').css('background-color', '#934A41');
    }, function() {
        // on mouseout, reset the background colour
        $('.hashSquare').css('background-color', '#532924');
    });

    $('.extractsButton').hover(function() {
        $('.extractsSquare').css('background-color', '#FFC823');
    }, function() {
        // on mouseout, reset the background colour
        $('.extractsSquare').css('background-color', '#947826');
    });

    $('.specialsButton').hover(function() {
        $('.specialsSquare').css('background-color', '#68A586');
    }, function() {
        // on mouseout, reset the background colour
        $('.specialsSquare').css('background-color', '#294135');
    });

    $('.paraphernaliaButton').hover(function() {
        $('.paraphernaliaSquare').css('background-color', '#C92799');
    }, function() {
        // on mouseout, reset the background colour
        $('.paraphernaliaSquare').css('background-color', '#79175C');
    });
});

console.log(window.location.pathname + " " + window.location.href);


// keep menu item highlighted when on that page
if(window.location.pathname == '/content/strains.php' || window.location.pathname == '/haligrovev2/content/strains.php') {
    $("#myDropdown a:nth-child(1)").css({
        "background-color" : "#C9DF78",
        "color" : "#DE28A9",
        "pointer-events" : "none",
        "cursor" : "default"
    });
} else if(window.location.pathname == '/content/hash.php' || window.location.pathname == '/haligrovev2/content/hash.php') {
    $("#myDropdown a:nth-child(2)").css({
        "background-color" : "#C9DF78",
        "color" : "#DE28A9",
        "pointer-events" : "none",
        "cursor" : "default"
    });
} else if(window.location.pathname == '/content/extracts.php' || window.location.pathname == '/haligroveV2/content/extracts.php') {
    $("#myDropdown a:nth-child(3)").css({
        "background-color" : "#C9DF78",
        "color" : "#DE28A9",
        "pointer-events" : "none",
        "cursor" : "default"
    });
}else if(window.location.pathname == '/content/specials.php' || window.location.pathname == '/haligrovev2/content/specials.php') {
    $("#myDropdown a:nth-child(4)").css({
        "background-color" : "#C9DF78",
        "color" : "#DE28A9",
        "pointer-events" : "none",
        "cursor" : "default"
    });
} else if(window.location.pathname == '/content/paraphernalia.php' || window.location.pathname == '/haligroveV2/content/paraphernalia.php') {
    $("#myDropdown a:nth-child(5)").css({
        "background-color" : "#C9DF78",
        "color" : "#DE28A9",
        "pointer-events" : "none",
        "cursor" : "default"
    });
};


// Dynamacally load images(strains) from json
var jsonURL = "../imageData.json"
$.getJSON(jsonURL, function (json) {
    var imgList= "";
    $.each(json.images, function () {
      imgList += '<div class="col-lg-6 col-md-6 strainBox"><div class="thumbnail"><div class="strainImageDiv"><img src= "' + this.src + '"" alt="' + this.description + '" style="width:100%" id="' + this.id + '" onclick="modalWindow(' + this.id + ')"><div class="' + this.isNew + '">new</div><div class="' + this.sale + '"><a href ="specials.php">sale</a></div><div class="' + this.type + '">' + this.type + '</div></div>' +
      '<div class="row"><div class="caption col-lg-8 col-md-8 col-sm-8 col-xs-8"><h3 class="strainItemTitle" id="img' + this.id + '">' + this.name + '</h3><div class="strainPrice">' + this.pricePerGram +
      '<span> Gram</span> ' + this.pricePerOunce + '<span> Ounce</span></div><p></p></div><div class="inventoryJar col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="../images/' + this.inventory + '.png"  alt="Jar"><p>inventory</p></div></div></div></div>';
    });

    $('.strip').append(imgList);
});

// Model Window
function modalWindow(imgId) {
    document.getElementById("myBtn").style.display = "none";
    window.onclick = function() {dismissTop()};
    
    function dismissTop() {
        document.getElementById("myBtn").style.display = "none";
    }

    var image = document.getElementById(imgId);
   
    $.getJSON(jsonURL, function (json) {
        
        
        var modal = document.getElementById('myModal');
        var modalImg = document.getElementById("img01");
        var title = document.getElementById("modalTitle");
        var captionText = document.getElementById("caption");
        modal.style.display = "block";
        modalImg.src = json.images[imgId - 1].src;
        title.innerHTML = json.images[imgId - 1].name;
        captionText.innerHTML = json.images[imgId - 1].description;
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            $('body').css({
                "overflow" : "auto"
            });
            modal.style.display = "none";
        }

        var body = document.getElementById("myModal");
        body.onclick = function() {
            modal.style.display = "none";
            $('body').css({
                "overflow" : "auto"
            });
            
        }

        
        // iserting info into infobars from json file
        progressTHC(json.images[imgId - 1].THC, $('#THC'));
        progress(json.images[imgId - 1].taste, $('#taste'));
        progress(json.images[imgId - 1].aroma, $('#aroma'));
        progress(json.images[imgId - 1].pain, $('#pain'));
        progress(json.images[imgId - 1].insomnia, $('#insomnia'));
        progress(json.images[imgId - 1].appetite, $('#appetite'));
        progress(json.images[imgId - 1].overall, $('#overall'));

       $('body').css({
           "overflow" : "hidden"
       });

    
         
});
    
};

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.getElementById('myModal').style.display == "block")  {
        document.getElementById("myBtn").style.display = "none"
        return;
    }
    else if (document.body.scrollTop > 640 || document.documentElement.scrollTop > 640) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }

    
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

function progress(percent, $element) {
    var progressBarWidth = percent * $element.width() / 100;
    $element.find('div').animate({ width: progressBarWidth }, 500).html(percent + "/100 ");
}

function progressTHC(percent, $element) {
    var progressBarWidth = percent * $element.width() / 100;
    $element.find('div').animate({ width: progressBarWidth }, 500).html(percent + "% ");
}


// link dbl click problem on touch-screen fix
$(document).ready(function() {
    $(".touch").on("click touchend", function(e) {
      var el = $(this);
      var link = el.attr("href");
      window.location = link;
    });
  });


    



