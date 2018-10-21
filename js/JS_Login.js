function valid(){
    var userName;
    var password;
    // Get value
    userName = document.getElementsByName("username")[0].value;
    password = document.getElementsByName("password")[0].value;

    var rep=document.getElementById("inside");
    var errors = [];
    var nameSplit = userName.split('');
    var check =0;
    var flag=0; //flag to detect ' ' in username
    for(var i=0;i<nameSplit.length;i++)
    {
        if(nameSplit[i].localeCompare(' ')==0)
        {
            flag = 1;
        }
    }
    if(userName == "" || password == "")
    {      
       errors.push(" You must fill in all text boxes. \n");
        check++;
    }
    if(flag == 1)
    {
        errors.push(" There can't be space between characters in username. \n");
        check++;
    }
    if(check==0)
    {
        window.location.replace("index.html");
        alert("Welcome " + userName);
    }

    // PRINT ARRAY
        rep.innerHTML = errors;
   
}