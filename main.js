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
function addProductToCart(buttonID) {
    cart = document.getElementById("rightDiv");
    switch (buttonID) {
        case "dog1":
            total = total+30;
            p1 = p1+1;
            tr = document.getElementById("cart1");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'Images/Pictures/dog food1.png' class='cartImage'></td><td class = 'cartPrice' id = 'c1'></td></tr>";
            priceupdate = document.getElementById("total");
            pan = document.getElementById("c1");
            pan.innerHTML = "$"+p1*30+" Pedigree x"+p1;
            priceupdate.innerHTML = "$" + total;
            console.log(tr);
            break;

        case "dog2":
            total = total+30;
            p2 = p2+1;
            tr = document.getElementById("cart2");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'Images/Pictures/dog food2.png' class='cartImage'></td><td class = 'cartPrice' id = 'c2'></td></tr>";
            priceupdate = document.getElementById("total");
            pan = document.getElementById("c2");
            pan.innerHTML = "$"+p2*30+" Family Dog x"+p2;
            priceupdate.innerHTML = "$" + total;
            console.log(tr);
            break;

        case "cat1":
            total = total+30;
            p3 = p3+1;
            tr = document.getElementById("cart3");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'Images/Pictures/cat food1.png' class='cartImage'></td><td class = 'cartPrice' id = 'c3'></td></tr>";
            priceupdate = document.getElementById("total");
            pan = document.getElementById("c3");
            pan.innerHTML = "$"+p3*30+" Hills x"+p3;
            priceupdate.innerHTML = "$" + total;
            console.log(tr);
            break;

        case "cat2":
            total = total+30;
            p4 = p4+1;
            tr = document.getElementById("cart4");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'Images/Pictures/cat food2.png' class='cartImage'></td><td class = 'cartPrice' id = 'c4'></td></tr>";
            priceupdate = document.getElementById("total");
            pan = document.getElementById("c4");
            pan.innerHTML = "$"+p4*30+" Purina x"+p4;
            priceupdate.innerHTML = "$" + total;
            console.log(tr);
            break;

        case "bird1":
            total = total+30;
            p5 = p5+1;
            tr = document.getElementById("cart5");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'Images/Pictures/bird food1.png' class='cartImage'></td><td class = 'cartPrice' id = 'c5'></td></tr>";
            priceupdate = document.getElementById("total");
            pan = document.getElementById("c5");
            pan.innerHTML = "$"+p5*30+" Vita Pet x"+p5;
            priceupdate.innerHTML = "$" + total;
            console.log(tr);
            break;

        case "bird2":
            total = total+30;
            p6 = p6+1;
            tr = document.getElementById("cart6");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'Images/Pictures/bird food2.png' class='cartImage'></td><td class = 'cartPrice' id = 'c6'></td></tr>";
            priceupdate = document.getElementById("total");
            pan = document.getElementById("c6");
            pan.innerHTML = "$"+p6*30+" Energy Pellets x"+p6;
            priceupdate.innerHTML = "$" + total;
            console.log(tr);
            break;

        case "rabbit1":
            total = total+30;
            p7 = p7+1;
            tr = document.getElementById("cart7");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'Images/Pictures/rabbit food1.png' class='cartImage'></td><td class = 'cartPrice' id = 'c7'></td></tr>";
            priceupdate = document.getElementById("total");
            pan = document.getElementById("c7");
            pan.innerHTML = "$"+p7*30+" Value x"+p7;
            priceupdate.innerHTML = "$" + total;
            console.log(tr);
            break;

        case "rabbit2":
            total = total+30;
            p8 = p8+1;
            tr = document.getElementById("cart8");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'Images/Pictures/rabbit food2.png' class='cartImage'></td><td class = 'cartPrice' id = 'c8'></td></tr>";
            priceupdate = document.getElementById("total");
            pan = document.getElementById("c8");
            pan.innerHTML = "$"+p8*30+" KayTee x"+p8;
            priceupdate.innerHTML = "$" + total;
            console.log(tr);
            break;
    }
}