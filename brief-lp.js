$("#brief-lp").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Wystąpił błąd! Sprawdź czy wypełniono poprawnie formularz.");                            
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
	var inputName = $("#inputName") .val();
	var inputDomena = $("#inputDomena") .val();
	var inputTematyka = $("#inputTematyka") .val();
	var rodzajStrony = $("#rodzajStrony") .val();
	var skladProjektu = $("#skladProjektu") .val();
	var TytulyZakladek = $("#TytulyZakladek") .val();
	var adresurl = $("#adresurl") .val();	
	var teksty= $("#teksty") .val();	
	var szablon = $("#szablon") .val();	
	var srodowisko = $("#srodowisko") .val();	
	var Inspiracje = $("#Inspiracje") .val();	
	var Budzet = $("#Budzet") .val();	
	var DodatkowyOpis = $("#DodatkowyOpis") .val();	
	var zalacznik = $("#zalacznik") .val();	
	var zgoda = $("#zgoda") .val();	
 
	$.ajax({
      type: "POST",
      url: "brief-lp2.php",
      data: $('form#brief-lp').serialize(),
      success : function(text){
          if (text == "success"){
              formSuccess();
          } else {
              formError();
              submitMSG(false,text);
          }
      }
  });
}

function formSuccess(){
    $("#brief-lp")[0].reset();
    submitMSG(true, "Zapytanie zostało pomyślnie wysłane! Skontaktujemy się z Tobą.")
}

function formError(){
    $("#brief-lp").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
