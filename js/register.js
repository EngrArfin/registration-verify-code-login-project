const form = document.querySelectorJ('.form form');
submitbtn = form.querySelector('.submit input');
errortxt = form.querySelector('error-text');

form.onsubmit = (e) =>{
    e.preventDefault();
}
submitbtn.onclick = () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","./Php/signup.php", true);
/*     xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status ==200){
                let data = xhr.response;
                if(data = "Success"){
                    location.href = "./verify.php"
                }
                else{
                    errortxt.textContent = data;
                    error.style.display = "block";
                }
            }
        }
    }
    let formData = new formData(form);
    xhr.send(FormData); */
}

