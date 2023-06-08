$("#brisi").click(function(event){
    event.preventDefault();
  console.log("Pokrenuto brisanje zaposlenog");

    const oznaceno= $("input[type=radio]:checked");
    request=$.ajax({
        url:"../contorller/listController.php",
        type:"post",
        //citamo vrednost oznacenog polja
        data:{id:oznaceno.val()},
    });
    request.done(function (response, textStatus, jqXHR) {
        if (response == "Success") {
          alert("Zaposleni  je obrisan");
          location.reload(true);
        } else {
          console.log("zaposleni nije obrisan" + response);
        }
      });
    
      request.fail(function (jqXHR, textStatus, error) {
        console.error("Desila se greska: " + textStatus, error);
      }); 
    })