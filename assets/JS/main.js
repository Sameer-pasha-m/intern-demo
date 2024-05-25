console.log("added js");

function verify() {
    const inputpassword=document.querySelector('#inputpassword')
    const confirmpassword=document.querySelector('#confirmpassword')
    const passwordAlert=document.querySelector('#password')

    if(inputpassword.value === confirmpassword.value){
        console.log("password match")
        passwordAlert.style.display="none"
    }else {
        console.log("password not match")
        passwordAlert.innerHTML="password doesn't match";
        passwordAlert.style.display="block"

    }
}

let fruits=["mango","apple"]
console.log(fruits);

const details=[
    {
        name:"girish",
        role:"dev"
    },
    {
        name:"abrar",
        role:"main dev"
    }
]
console.log(details);