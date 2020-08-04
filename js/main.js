(function() {
    'use strict'


    document.addEventListener('DOMContentLoaded', function() {



        var totalPagar = 0;
        //Campos datos usuarios
        var nombre = document.querySelector('#nombre');
        var apellido = document.querySelector('#apellido');
        var email = document.querySelector('#email');
        var reg = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/;
        //Campos pases

        var pase_dia = document.querySelector('#pase_dia');
        var pase_completo = document.querySelector('#pase_completo');
        var pase_dosdias = document.querySelector('#pase_dosdias');

        //Botones y divs

        var botonRegistro = document.querySelector('#btnRegistro');
        var lista_productos = document.querySelector('#lista-productos');
        var suma = document.querySelector('#sumatotal');

        //Extras

        var stickers = document.getElementById('stickers');
        var remeras = document.getElementById('remeras');




        if (document.querySelector('#btnRegistro')) {


            //Cuando cambia un input actualiza el total
            pase_dia.addEventListener('input', calcularMontos);
            pase_completo.addEventListener('input', calcularMontos);
            pase_dosdias.addEventListener('input', calcularMontos);
            stickers.addEventListener('input', calcularMontos);
            remeras.addEventListener('input', calcularMontos);


            pase_dia.addEventListener('input', mostrarDias);
            pase_dosdias.addEventListener('input', mostrarDias);
            pase_completo.addEventListener('input', mostrarDias);

            botonRegistro.addEventListener('click', validar);

            function validar(evObject) {
                if (totalPagar < 1) {
                    alert("Debes agregar al carrito al menos un boleto");

                    evObject.preventDefault();
                    return false;
                }
            }


            function calcularMontos(event) {
                event.preventDefault();
                if (document.querySelector('#regalo').value === '') {
                    alert("Debes elegir un regalo");
                    regalo.focus();
                } else {
                    var boletosDia = parseInt(pase_dia.value, 10) || 0,
                        boleto2Dias = parseInt(pase_dosdias.value, 10) || 0,
                        boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                        cantRemeras = parseInt(remeras.value, 10) || 0,
                        cantstickers = parseInt(stickers.value, 10) || 0;
                    totalPagar = (boletosDia * 30) + (boleto2Dias * 45) + (boletoCompleto * 50) + ((cantRemeras * 10) * .93) + (cantstickers * 2);
                    console.log(totalPagar);


                    var listaProductos = [];
                    if (boletosDia >= 1) {
                        listaProductos.push(boletosDia + ' Boletos por día');
                    }
                    if (boleto2Dias >= 1) {
                        listaProductos.push(boleto2Dias + ' Boletos por 2 días');
                    }
                    if (boletoCompleto >= 1) {
                        listaProductos.push(boletoCompleto + ' Boletos Completos');
                    }
                    if (cantRemeras >= 1) {
                        listaProductos.push(cantRemeras + ' Remeras');
                    }
                    if (cantstickers >= 1) {
                        listaProductos.push(cantstickers + ' Stickers');
                    }
                    lista_productos.style.display = "block";
                    lista_productos.innerHTML = '';
                    for (var i = 0; i < listaProductos.length; i++) {
                        lista_productos.innerHTML += listaProductos[i] + '<br/>';
                    }
                    suma.style.display = "block";
                    suma.innerHTML = "$ " + totalPagar.toFixed(2);

                    document.querySelector('#total_pedido').value = totalPagar;

                }
            }

            function mostrarDias() {
                var boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boleto2Dias = parseInt(pase_dosdias.value, 10) || 0,
                    boletoCompleto = parseInt(pase_completo.value, 10) || 0;
                var diasElegidos = [];

                if (boletosDia > 0) {
                    diasElegidos.push('viernes');
                } else {
                    document.querySelector('#viernes').style.display = 'none';
                }
                if (boleto2Dias > 0) {
                    diasElegidos.push('viernes', 'sabado');
                } else {
                    document.querySelector('#viernes').style.display = 'none';
                    document.querySelector('#sabado').style.display = 'none';
                }
                if (boletoCompleto > 0) {
                    diasElegidos.push('viernes', 'sabado', 'domingo');
                } else {
                    document.querySelector('#viernes').style.display = 'none';
                    document.querySelector('#sabado').style.display = 'none';
                    document.querySelector('#domingo').style.display = 'none';

                }

                for (var i = 0; i < diasElegidos.length; i++) {
                    document.getElementById(diasElegidos[i]).style.display = 'grid';
                }
                if (diasElegidos.length > 0) {
                    document.querySelector('#cajaDias').style.display = 'block';
                } else {
                    document.querySelector('#cajaDias').style.display = 'none';
                }


            }

        }


    });




})();