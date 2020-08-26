  function LoginPage() {
    location.href="LoginScreen.html";
  }

  function TogglePassword() {
    var x = document.getElementById("password") && document.getElementById("regpassword");
    if (x.type === "password") {
      x.type = "pin";
    } else {
      x.type = "password";
    }
  }

function download(filename, text) {
  var pom = document.createElement('a');
  pom.setAttribute('href', 'data:text/plain;charset=utf-8,' + 

encodeURIComponent(text));
  pom.setAttribute('download', filename);

  pom.style.display = 'none';
  document.body.appendChild(pom);

  pom.click();

  document.body.removeChild(pom);
}

function addTextHTML()
{
    document.addtext.name.value = document.addtext.name.value + ".html"
}

function addTextTXT()
{
    document.addtext.name.value = document.addtext.name.value + ".txt"
}
