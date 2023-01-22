function saklar(params){
         
    let lampu1 = document.getElementById("lampu1")

    if(params == 'on'){
        lampu1.src = "assets/images/on.gif"
    }if(params == 'off'){
        lampu1.src = "assets/images/off.gif"
    }
     
    return lampu1
}