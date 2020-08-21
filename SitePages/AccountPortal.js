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

function HideAllElements()
{
  document.getElementById('CreateNotes').style.display = "none";
  document.getElementById('CreateMessages').style.display = "none";
}

window.onload = HideAllElements();

function ToggleDiv(Div) {
  HideAllElements();
  var x = document.getElementById(Div)
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
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

function sendMessage(){
  if(document.getElementById('MessageContent').value == 'What is this?')
   alert('This is your admin portal.'); 
  if (document.getElementById('MessageContent').value == 'Is this live?'){
    alert('No'); 
  } else {
     alert('Invalid'); }}
