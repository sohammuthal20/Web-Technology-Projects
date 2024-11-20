function alertbox()
{
    alert("This is an alert");
}

function confirmbox()
{
    var r= confirm("Press a button");

    if(r == true)
    {
        alert("You have pressed OK");
    }
    else
    {
        alert("You have pressed CANCEL");
    }
}

function promptbox()
{
    var name = prompt("Please enter your name","Name");
    if(name!=null && name!="")
    {
        document.write("Hello"+" "+ name+ " "+"Thank you!");

    }
    else
    {
        alert("Please enter your name"); 

    }
    

            
}
