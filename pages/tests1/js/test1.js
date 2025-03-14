
function button(){
    const btn = document.getElementById("button_start");

    btn.addEventListener("click", function() {

        document.getElementById("button_mobile").style.visibility = 'visible';
        document.getElementById("button_mobile").style.display = 'block';
        document.getElementById("book").style.visibility = 'hidden';
        document.getElementById("book").style.display = 'none';

    })
}

function mobile(){
    const btn = document.getElementById("second_btn_mobile");

    btn.addEventListener("click", function() {

        document.getElementById("button_mobile").style.display = 'none';
        document.getElementById("button_mobile").style.visibility = 'hidden';
        document.getElementById("book").style.visibility = 'visible';
        document.getElementById("book").style.display = 'block';
         
    })
}