/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function InsertUser(){ 
    var nombre = $("#nombre").value();
    var apellido = $("#apellido").value();
    var pais = $("#pais").value();
    var departamento = $("#departamento").value();
    var ciudad= $("#ciudad").value();
    var telefono= $("#telefono").value();
    var email = $("#email").value();
    if (nombre === "" || apellido === "" ){
        alert("Campo Vacio");
        return false; // falso no envia el formulario
    }
    alert (nombre);
    return false;
}


