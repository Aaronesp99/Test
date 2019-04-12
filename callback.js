function main(callback){
    alert("Primero aqui y sigue");
    callback();
}

function intermedio(){
    alert("Yo soy un alert");
}

// main(intermedio);


//-------------------EJM 1--------------------
function main2(callback){
    alert("Primero aqui y sigue");
    callback();
}

// main2(function(){
//     alert("Otro callback");
// });


//--------------------EJM 2--------------

function userName(callback){
    var name=prompt("Ingresa tu nombre");
    callback(name);
}

function saludar(name){
    alert("Hola "+ name);
}

// userName(saludar);

//-------------------EJM 3-------------

function math(a, b, callback){
    var res= a + b;
    callback(res);
}

function sumar(res){
    if(res>10){
        alert ('El resultado de la suma es grande ' + res);
    }else{
        alert ('El resultado de la suma es menor ' + res);
    }
}

math(10,15, sumar)

