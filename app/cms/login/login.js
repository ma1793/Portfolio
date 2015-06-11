
function verifAdmin(){
  var password = document.getElementById("passwordLogin").value;
  if(password === "123"){
      location.href = "../projects/listProjects.php";
  } 
  else{
      alert("Wrong Password");
      document.getElementById("passwordLogin").value="";
  }
};

function showPass(){
    alert("Password: 123");
}