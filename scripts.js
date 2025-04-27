document.getElementById("btnZwierzeta").addEventListener('click', function() {
  fetch("animals/read.php")
    .then(response => response.text())
    .then(data => {
      document.getElementById("tresc").innerHTML = data;
    })
    .catch(error => {
      console.error('Błąd podczas ładowania:', error);
    });
});

document.getElementById("btnPersonel").addEventListener('click', function() {
    fetch("staff/read.php")
      .then(response => response.text())
      .then(data => {
        document.getElementById("tresc").innerHTML = data;
      })
      .catch(error => {
        console.error('Błąd podczas ładowania:', error);
      });
  });

  document.getElementById("btnLeczenie").addEventListener('click', function() {
    fetch("treatments/read.php")
      .then(response => response.text())
      .then(data => {
        document.getElementById("tresc").innerHTML = data;
      })
      .catch(error => {
        console.error('Błąd podczas ładowania:', error);
      });
  });

  document.getElementById("btnAdopcje").addEventListener('click', function() {
    fetch("adoptions/read.php")
      .then(response => response.text())
      .then(data => {
        document.getElementById("tresc").innerHTML = data;
      })
      .catch(error => {
        console.error('Błąd podczas ładowania:', error);
      });
  });