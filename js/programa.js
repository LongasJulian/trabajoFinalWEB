function agregar() {

    var des;
    var dia; 
    des = prompt("Descripción del evento: ");
    dia = document.getElementById("fecha");

    console.log(dia.value);
    

    var tbodyRef = document.getElementById('mitabla').getElementsByTagName('tbody')[0];
    var newRow = tbodyRef.insertRow();
    var newCell1 = newRow.insertCell();
    var newCell2 = newRow.insertCell();

    var newText1 = document.createTextNode(des);
    newCell1.appendChild(newText1);

    var newText2 = document.createTextNode(dia.value);
    newCell2.appendChild(newText2);
}

function agregarNota() {

    nombre = prompt("Ingrese el Nombre de la evalución: ");
    porcentaje = prompt("Ingrese el porcentaje de la evalución : ");
    nota = prompt("Ingrese su nota: ");


    var node = document.createElement("p");                 // Create a <li> node
    var textnode = document.createTextNode(nombre);         // Create a text node
    node.appendChild(textnode);                              // Append the text to <li>
    document.getElementById("Titulo").appendChild(node);     // Append <li> to <ul> with id="myList"

    var node1 = document.createElement("p");                 // Create a <li> node
    var textnode1 = document.createTextNode(porcentaje);         // Create a text node
    node1.appendChild(textnode1);                              // Append the text to <li>
    document.getElementById("Porcentaje").appendChild(node1);     // Append <li> to <ul> with id="myList"

    var node2 = document.createElement("p");                 // Create a <li> node
    var textnode2 = document.createTextNode(nota);         // Create a text node
    node2.appendChild(textnode2);                              // Append the text to <li>
    document.getElementById("Nota").appendChild(node2);     // Append <li> to <ul> with id="myList"
}

function agregaropcion(){

    nodo = document.getElementById("misnotas");
    nodo1 =  document.getElementById("misporcentajes");

    nodo.innerHTML = nodo.innerHTML + '<input type="number" class="form-control" placeholder="Nota"><br>';
    nodo1.innerHTML = nodo1.innerHTML + '<input type="number" class="form-control" placeholder="Porcentaje"><br>';
    console.log(nodo.innerHTML);
}

function necesito(){

    notas = document.getElementById("misnotas").getElementsByTagName("input");
    porcentajes = document.getElementById("misporcentajes").getElementsByTagName("input");

    var notatotal = 0;
    var portotal = 0;

    for (var i = 0; i < notas.length; i++) {
        notatotal = notatotal +  parseFloat(notas[i].value)*parseFloat(porcentajes[i].value);
        portotal = portotal + parseFloat(porcentajes[i].value);
    }
    notatotal = notatotal/100;

    porres = 100-portotal;
    notres = 3 - notatotal;
    notfinal = notres*100/porres;  

    if (portotal>100) {
        alert("Error, el porcentaje suma mas de 100%");
    }else{
        alert("Debes sacar un "+notfinal+" en el "+porres+" restante para ganar la materia!");
    }
    console.log(notatotal);
    console.log(portotal);
}


