function gotoCheck(){
    window.location.replace("subPage/checkout.php");
}
function goHome(){
    var fullname = document.getElementById("txtFullname").value;
    var email = document.getElementById("txtEmail").value;
    var Phone = document.getElementById("txtPhone").value;
    var error = [];
    if(fullname == "" || email == "" || Phone == "")
    {
        error.push("You must fill out all text boxes");
    }
    if(error.length == 0)
    {
        window.location.replace("../index01.php");
        alert("Your order(s) have been placed successfully");
    }


}