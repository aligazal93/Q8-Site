$('.main-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    rtl: true,
    autoplay: true,
    pagination: true,
    autoplayTimeout: 3500,
    smartSpeed: 2000,
    dragEndSpeed: 2000,
    animateOut: 'fadeOut',
    animateIn: 'slideIn',
    animate: true,
    navText: [
        "<i class='fa fa-arrow-circle-right'></i> ",
        "<i class='fa fa-arrow-circle-left'></i>"
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('.best-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    rtl: true,
    autoplay: true,
    pagination: true,
    autoplayTimeout: 3500,
    smartSpeed: 2000,
    dragEndSpeed: 2000,
    animateOut: 'fadeOut',
    animateIn: 'slideIn',
    animate: true,
    navText: [
        "<i class='fas fa-chevron-right'></i> ",
        "<i class='fas fa-chevron-left'></i>"
    ],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 5
        }
    }
});


$('.common-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    rtl: true,
    autoplay: true,
    pagination: true,
    autoplayTimeout: 3500,
    smartSpeed: 2000,
    dragEndSpeed: 2000,
    animateOut: 'fadeOut',
    animateIn: 'slideIn',
    animate: true,
    navText: [
        "<i class='fas fa-chevron-right'></i> ",
        "<i class='fas fa-chevron-left'></i>"
    ],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 5
        }
    }
});



$(document).ready(function(){
    $('.account').click(function(){
        $('.dropdown-menu').slideToggle(500),
            $('.drop-2').hide(500);
    })
});

$(document).ready(function(){
    $('.shopping').click(function(){
        $('.drop-2').slideToggle(500),
            $('.dropdown-menu').hide(500);
    })
});

$(document).ready(function(){
    $('.open-part-shoes').click(function(){
            $('.part-child-shoes').fadeToggle(500),
                $('.the-after').fadeToggle(500);
    })
});


$(document).ready(function(){
    $('.the-after').click(function(){
        $('.part-child-shoes').hide(500),
            $('.the-after').fadeOut(500);
    })
});


$(document).ready(function(){
    $('.open-part-bag').click(function(){
        $('.part-child-bag').fadeToggle(500),
            $('.the-after').fadeToggle(500);
    })
});


$(document).ready(function(){
    $('.the-after').click(function(){
        $('.part-child-bag').hide(500),
            $('.the-after').fadeOut(100);
    })
});


$(document).ready(function(){
    $('.open-part-accessoires').click(function(){
        $('.part-child-accessoires').fadeToggle(500),
            $('.the-after').fadeToggle(500);
    })
});


$(document).ready(function(){
    $('.the-after').click(function(){
        $('.part-child-accessoires').hide(500),
            $('.the-after').fadeOut(100);
    })
});

$(document).ready(function(){
    $('.closeing').click(function(){
        $('.part-child-accessoires').hide(500),
            $('.part-child-bag').fadeOut(100),
            $('.part-child-shoes').fadeOut(100),
            $('.the-after').fadeOut(100);
    })
});



function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}


setTimeout(function(){
    $('.contain').fadeOut(700);
}, 800);





$(document).ready(function() {

    $(".p-qty-btn-p").click(function(){

        var p_qty = parseInt($("#input-quantity").val());
        p_qty += 1 ;
        $("#input-quantity").val(p_qty);
    });

    $(".p-qty-btn-m").click(function(){
        var p_qty = parseInt($("#input-quantity").val());
        p_qty -= 1 ;
        if( p_qty < 1){
            p_qty = 1 ;
        }
        $("#input-quantity").val(p_qty);

    });

});