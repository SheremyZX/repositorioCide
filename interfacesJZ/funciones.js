function llenarVector(vector, tam){
    for (let i = 0; i < tam; i++) {
        vector.push(Math.round(Math.random()*100));
    }
    return vector;
}

let vec=new Array();
let x=5;
console.log(llenarVector(vec, x));

//console.log('la suma de los pares es:'+sumaPares(vec));
//hoisting 

/*function sumaPares(vector){
    let suma=0;
    for (let i = 0; i < vector.length; i++) {
        if (vector[i]%2==0){
            suma+=vec[i];
        }
    }
    return suma;
}*/


var np=(vector)=>{
    let suma=0;
    for (let i = 0; i < vector.length; i++) {
        if (vector[i]%2==0){
            suma+=vec[i];
        }
    }
    return suma;
}

console.log('Suma de pares FLECHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA '+np(vec));