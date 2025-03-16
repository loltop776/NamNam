
function mobile(){

    const btn = document.getElementById("button_movile_wasp");

    btn.addEventListener("click", function () {

        document.getElementById("container_mobile_wasp").style.visibility = 'visible';
        document.getElementById("container_mobile_wasp").style.display = 'block';
        document.getElementById("button_mobile_start").style.visibility = 'hidden';
        document.getElementById("button_mobile_start").style.display = 'none';


    })

}

function mobile_out(){

    const btn = document.getElementById("mobile_out");

    btn.addEventListener("click", function () {

        document.getElementById("container_mobile_wasp").style.visibility = 'hidden';
        document.getElementById("container_mobile_wasp").style.display = 'none';
        document.getElementById("button_mobile_start").style.visibility = 'visible';
        document.getElementById("button_mobile_start").style.display = 'block';


    })

}



function button(){
    const btn = document.getElementById("button_start");

    btn.addEventListener("click", function() {

        document.getElementById("button_virus").style.visibility = 'visible';
        document.getElementById("button_virus").style.display = 'block';
        document.getElementById("container_mobile_wasp").style.visibility = 'hidden';
        document.getElementById("container_mobile_wasp").style.display = 'none';
        document.getElementById("book").style.visibility = 'hidden';
        document.getElementById("book").style.display = 'none';
        document.getElementById("button_mobile_start").style.visibility = 'visible';
        document.getElementById("button_mobile_start").style.display = 'block';

    })
}

function antivirus(){
    const btn = document.getElementById("second_btn_mobile");

    btn.addEventListener("click", function() {

        document.getElementById("button_virus").style.display = 'none';
        document.getElementById("button_virus").style.visibility = 'hidden';
        document.getElementById("container_mobile_wasp").style.visibility = 'hidden';
        document.getElementById("container_mobile_wasp").style.display = 'none';
        document.getElementById("book").style.visibility = 'visible';
        document.getElementById("book").style.display = 'block';
        document.getElementById("second_mobile_button").style.visibility= 'visible';
        document.getElementById("second_mobile_button").style.display = 'block';
        
         
    })
}


// Libro

function book() {

    const btn = document.getElementById("button_book");

    btn.addEventListener("click", function () {

        document.getElementById("book").style.visibility = 'hidden';
        document.getElementById("book").style.display = 'none';
        document.getElementById("container_book").style.visibility = 'visible';
        document.getElementById("container_book").style.display = 'block';
        document.getElementById("button_mobile_start").style.visibility = 'hidden';
        document.getElementById("button_mobile_start").style.display = 'none';
        document.getElementById("second_mobile_button").style.visibility= 'hidden';
        document.getElementById("second_mobile_button").style.display = 'none';
        document.getElementById("container_mobile_wasp").style.visibility = 'hidden';
        document.getElementById("container_mobile_wasp").style.display = 'none';

    })


}


function close_book() {

    const btn = document.getElementById("close_book");

    btn.addEventListener("click", function () {

        document.getElementById("book").style.visibility = 'visible';
        document.getElementById("book").style.display = 'block';
        document.getElementById("container_book").style.visibility = 'hidden';
        document.getElementById("container_book").style.display = 'none';
        document.getElementById("button_mobile_start").style.visibility = 'visible';
        document.getElementById("button_mobile_start").style.display = 'block';
        document.getElementById("second_mobile_button").style.visibility= 'visible';
        document.getElementById("second_mobile_button").style.display = 'block';
        document.getElementById("container_mobile_wasp").style.visibility = 'visible';
        document.getElementById("container_mobile_wasp").style.display = 'none';

    })


}
