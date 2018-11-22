
function medicosPorEspecialidad(idEsp, token){
  var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://consultoriosagradafamilia.azurewebsites.net/api/Medico?idEspecialidad="+=idEsp,
  "method": "GET",
  "headers": {
    "Authorization": "Bearer "+=token,
    "Content-Type": "application/x-www-form-urlencoded",
    "cache-control": "no-cache",
    "Postman-Token": "2c8b2dde-ebb1-4dd6-8093-58ceb5d2fc5d"
  },
  "data": {}
}
$.ajax(settings).done(function (response) {
  console.log(response);
});
}
function cargarEspecialidades(token){
  var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://consultoriosagradafamilia.azurewebsites.net/api/Especialidad",
  "method": "GET",
  "headers": {
    "Authorization": "Bearer "+=token,
    "Content-Type": "application/x-www-form-urlencoded",
    "cache-control": "no-cache",
    "Postman-Token": "5dd45c50-35cd-4e05-a7c4-68a0625f7647"
  },
  "data": {}
}
var parsedJson;

$.ajax(settings).done(function (response) {
  console.log(response);
  parsedJson = parseJSON(response);

});
return parsedJson;
}

function cargarMedicos(token){

  var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://consultoriosagradafamilia.azurewebsites.net/api/Especialidad",
  "method": "GET",
  "headers": {
    "Authorization": "Bearer "+=token,
    "Content-Type": "application/x-www-form-urlencoded",
    "cache-control": "no-cache",
    "Postman-Token": "b99b4036-4a61-434a-99f9-909fc4184773"
  },
  "data": {}
}
$.ajax(settings).done(function (response) {
  console.log(response);
});
}
function diasPorMedico(idMed, token){
  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://consultoriosagradafamilia.azurewebsites.net/api/DisponibilidadDia?idMedico="+=idMed,
    "method": "GET",
    "headers": {
      "Authorization": "Bearer "+=token,
      "cache-control": "no-cache",
      "Postman-Token": "464550a8-1cab-42a7-b267-aea8c7e0cbc7"
    },
    "data": {}
  }

  $.ajax(settings).done(function (response) {
    console.log(response);
  });


}
function horasPorDia(fecha, idMedico, token){
  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://consultoriosagradafamilia.azurewebsites.net/api/DisponibilidadHorario?fechaDesde="+=fecha+="&idMedico="+=idMedico,
    "method": "GET",
    "headers": {
      "Authorization": "Bearer "+=token,
      "cache-control": "no-cache",
      "Postman-Token": "00e8f416-d58f-44b8-b9f1-6ea64d87df16"
    },
    "data": {}
  }

  $.ajax(settings).done(function (response) {
    console.log(response);
  });


}
function turnosPorPaciente(idPaciente, token){

  var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://consultoriosagradafamilia.azurewebsites.net/api/Turno?idPaciente="+=idPaciente,
  "method": "GET",
  "headers": {
    "Authorization": "Bearer "+=token,
    "cache-control": "no-cache",
    "Postman-Token": "a8f3ba6e-f0ea-421e-83e5-a88928af22ef"
  },
  "data": {}
}

$.ajax(settings).done(function (response) {
  console.log(response);
});

}
