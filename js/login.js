var nim = "1202160192";
var i = 3;
    
function login() {    
    var id = document.loginf.id.value;
    var password = document.loginf.password.value;

    if (id == nim && password == nim)
        {                  
            location.href = "index.php";           
        }
        else if (i > 1){
            i--;
            alert("Sisa Kesempatan anda "+i);
        }
        else{
            document.loginf.id.disabled = true;
            document.loginf.password.disabled = true;
            alert("Maaf Kesempatan Anda Sudah Habis!")
        }
}