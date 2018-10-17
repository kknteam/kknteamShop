function valid(){
    var userName;
    var password;
    
    userName = document.getElementById("username").value;
    password = document.getElementById("password").value;

    if(userName == "" || password == "")
    {
        alert("You must fill all text boxes.");
    }
    else
    {
        window.location.replace("index.html");
        alert("Welcome " + userName);
    }
}