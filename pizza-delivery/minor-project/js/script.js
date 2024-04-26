const header = document.querySelector('header');

window.addEventListener("scroll",function() {
    header.classList.toggle("sticky",this.window.scrollY > 80);
})

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');


menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
};
const sr = ScrollReveal({
    origin: 'top',
    distance: '85px',
    duration: 2500,
    reset: true
})

sr.reveal ('.home-text',{delay:300});
sr.reveal ('.home-img',{delay:400});
sr.reveal ('.container',{delay:400});

sr.reveal ('.about-img',{});
sr.reveal ('.about-text',{delay:300});

sr.reveal ('.middle-text',{});
sr.reveal ('.row-btn,.shop-content',{delay:300});

sr.reveal ('.review-content,.contact',{delay:300});



// var gt = 0;
// var iprice = document.getElementsByClassName('iprice');
// var iquantity = document.getElementsByClassName('iquantity');
// var itotal = document.getElementsByClassName('itotal');
// var gtotal = document.getElementById('gtotal');
// var cgst = document.getElementById('cgst');
// var sgst = document.getElementById('sgst');
// var gtotal_with_gst = document.getElementById('gtotal_with_gst');

// function subTotal() {
//     gt = 0;
//     for (i = 0; i < iprice.length; i++) {
//         itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
//         gt = gt + (iprice[i].value) * (iquantity[i].value);
//     }
//     gtotal.innerText = gt;
//     var gst = gt * 0.05;
//     cgst.innerText = (gst / 2).toFixed(3);
//     sgst.innerText = (gst / 2).toFixed(3);
//     gtotal_with_gst.innerText = (gt + gst).toFixed(3);
// }

// subTotal();
