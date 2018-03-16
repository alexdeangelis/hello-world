//https://www.youtube.com/watch?v=e57ReoUn6kM

var numOne = document.getElementById('num-one');

var numTwo = document.getElementById('num-two');

var addSum = document.getElementById('add-sum');

//numOne.addEventListener("click",function() {
//    alert('hi');
//})

//numOne.addEventListener("mouseenter",function() {
//    alert('hi');
//})

//numOne.addEventListener("mouseleave",function() {
//    alert('hi');
//})

//numOne.addEventListener("focus",function() {
//    alert('hi');
//})

//numOne.addEventListener("blur",function() {
//    alert('hi');
//})

////input event looks for anything changing in the value of an input
//numOne.addEventListener("input",add);
//numTwo.addEventListener("input",add);
//
//function add() {
//    var one = parseFloat(numOne.value) || 0;
//    var two = parseFloat(numTwo.value) || 0;
//    //console.log(one,two);
//    //var sum = one + two;
//    addSum.innerHTML = "your sum is: " + (one+two);
//}

var simon = document.getElementById('simon');
var bruce = document.getElementById('bruce');
var ben = document.getElementById('ben');

simon.addEventListener('click', picLink);
bruce.addEventListener('click', picLink);
ben.addEventListener('click', picLink);

function picLink() {
    var allImages = document.querySelectorAll("img");
    
    for(var i = 0; i< allImages.length; i++){
        allImages[i].className="hide";
    }
    
    //console.log(this);
    var picId = this.attributes["data-img"].value;
    //console.log(picId);
    var pic = document.getElementById(picId);
    
    if (pic.className === "hide") {
        pic.className = "";
    } else {
        pic.className = "hide";
    }
    
}






