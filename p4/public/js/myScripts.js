function reveal() {
  var x = document.getElementById("revealNumber");
  if (x.style.display == "none") {
    x.style.display = "block";
    x.class = "fadeIn";
  } else {
    x.style.display = "none";
  }
}   

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

function toggleGuessButton(){

    if (document.getElementById("guessButton").disabled == true){
        document.getElementById("guessButton").disabled = false;
    }

    else
        document.getElementById("guessButton").disabled = true;

}

function resultColor(){
    if($result == 'Too High!'){
        document.getElementById("result").color = red;
    }

    else if ($result == 'Too Low!'){
        document.getElementById("result").color = red;

    }

    else document.getElementById("result").color = blue;

}

