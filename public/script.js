function registered(){
    let width = screen.width;
    if (width < 700 ){
        console.log(width);

        document.body.style.backgroundImage = "url(public/images/mobile_meow2.png)";
        document.getElementById('msg').innerHTML = "Thank you for registering!";
    }
    else{
        document.body.style.backgroundImage = "url(public/images/meow2.png)";
        document.getElementById('msg').innerHTML = "Thank you for registering!";

    }
    
}
function welcome(){
    let width = screen.width;
    if (width < 700 ){
        //console.log(width);

        document.body.style.backgroundImage = "url(public/images/mobile_meow2.png)";
        document.getElementById('msg').innerHTML = "Welcome Back!";
    }
    else{
        document.body.style.backgroundImage = "url(public/images/meow2.png)";
        document.getElementById('msg').innerHTML = "Welcome Back!";

    }
}
window.addEventListener('load', function () {
    if (this.screen.width < 700 ){
        var element  = this.document.getElementById("body");
        element.style.fontSize("x-large");
    }
  })
  