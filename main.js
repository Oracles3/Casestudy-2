var i = 0;
var images = [];
var time = 3000;

images[0] = 'Images/Pictures/Dogs 2.jpg';
images[1] = 'Images/Pictures/Cats 2.jpg';
images[2] = 'Images/Pictures/Rabbits 2.jpg';

function changeImg(){
    document.slide.src = images[i];
    if (i < images.length - 1){
        i++;
    }
    else{
        i = 0;
    }
    setTimeout("changeImg()", time);
}

window.onload = changeImg;

function openCart() {
    document.getElementById("cartnav").style.width = "250px";
}

function closeCart() {
    document.getElementById("cartnav").style.width = "0";
}


total = 0;
p1 = 0;
p2 = 0;
p3 = 0;
p4 = 0;
p5 = 0;
p6 = 0;
p7 = 0;
p8 = 0;
p9 = 0;
