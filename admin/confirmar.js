/*creo una funcion para confirmar la eliminacion de un registro
el parametro e es para que la funcion reciba un evento, se puede usar
otra palabra por ejemplo event o evento.
se usa la funcion confirm que es parecida al alert pero se usa para confirmar cosas*/

function confirmar(e) {

    if(confirm("¿Esta seguro que desea eliminar este registro?")){

        return true;

    } else {

        e.preventDefault();//frena la ejecucion del programa

    }

}

/*como los elemento de la tabla donde tengo que pulsar pueden ser muchos
los voy a seleccionar por medio de querySelectorALl para tomarlos a todos y los voy a recorrer
con un ciclo para asignarles a cada uno el evento click*/

let botonEliminar = document.querySelectorAll(".linkDeEliminar");

for(let i=0; i<botonEliminar.length; i++){

    botonEliminar[i].addEventListener('click',confirmar); //escuha el evento en este caso el click

}