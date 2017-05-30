$( function() {
    var availableTags = [
      "Acapulco",
      "Aguascalientes",
      "Campeche",
      "Cancún",
      "Celaya",
      "Chetumal",
      "Chihuahua",
      "Chilpancingo",
      "Ciudad del Carmen",
      "Ciudad Obregón",
      "Ciudad Victoria",
      "Coatzacoalcos",
      "Colima-Villa de Álavarez",
      "Cuautla",
      "Cuernavaca",
      "Culiacán",
      "Cárdenas",
      "Córdoba",
      "Durango",
      "Ensenada",
      "Guadalajara",
      "Guanajuato"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );

