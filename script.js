// Welcome Message
window.onload = function() {
    console.log("Welcome to BDT Game World");
};


// Button Click Animation
document.addEventListener("DOMContentLoaded", function(){

    let buttons = document.querySelectorAll(".btn");

    buttons.forEach(function(btn){

        btn.addEventListener("click", function(){

            btn.style.transform = "scale(0.95)";

            setTimeout(function(){
                btn.style.transform = "scale(1)";
            },100);

        });

    });

});


// Withdraw Confirmation
function confirmWithdraw(){

    return confirm("Are you sure you want to withdraw this amount?");

}


// Delete User Confirmation (Admin)
function confirmDelete(){

    return confirm("Do you really want to delete this user?");

}


// Simple Live Chat Popup
function openChat(){

    alert("Live chat coming soon. Contact Admin.");

}