
function showDiv() {
  const myDiv = document.getElementById("message");
  myDiv.style.display = "block";
  setTimeout(function () {
    myDiv.style.display = "none";
  }, 2000);
}


const urlParams = new URLSearchParams(window.location.search);
const msg = urlParams.get('msg');

const messageDiv = document.getElementById('message');
if (msg === "ok") {
  messageDiv.innerHTML = "Inserimento completato con successo!";
  showDiv();
} else if (msg === "ko") {
  messageDiv.innerHTML = "Errore durante l'inserimento. Controlla di aver compilato tutti i campi.";
  showDiv();
}