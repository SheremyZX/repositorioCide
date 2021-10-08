class persona{
    constructor(cedula,nombre,apellido){
        this._cedula=cedula;
        this._nombre=nombre;
        this._apellido=apellido;
    }
    get cedula(){
        return this._cedula;
    }
    get nombre(){
        return this._nombre;
    }
    get apellido(){
        return this._nombre;
    }

    set cedula(cedula){
        this._cedula=cedula;
    }

    set nombre(nombre){
        this._nombre=nombre;
    }
    
    set apellido(apellido){
        return this._apellido=apellido;
    }
    nombreCompleto(){
        return this._nombre+' '+ this._apellido+' '+ this._cedula;
    }

}



class cliente extends persona{
    constructor(cedula, nombre, apellido, idcliente){
        super(cedula, nombre, apellido);
    this._idCliente=idcliente;
    }
    get idcliente(){
        return this._idCliente;
    }

    set idcliente(idcliente){
       this._idCliente=idcliente;
    }
    infocliente(){
        return this._nombre+' '+ this._apellido+' '+ this._cedula+ ' '+ this._idCliente;
    }
}


class empleado extends persona{
    constructor(cedula, nombre, apellido, idempleado, legajo){
        super(cedula, nombre, apellido);
    this._idempleado=idempleado;
    this._legajo=legajo;
    }
    get idempleado(){
        return this._idempleado;
    }
    get legajo(){
        return this._legajo;
    }

    set idempleado(idempleado){
        this._idempleado=idempleado;
    }
    set legajo(legajo){
        this._legajo=legajo;
    }
    infocliente(){
        return this._nombre+' '+ this._apellido+' '+ this._cedula+ ' '+ this._idempleado+ ' ' + this._legajo;
    }
}

class ventas{
    constructor(venta){
        this._venta=venta;
        venta=Array();
    }
    agregar(persona){
        venta.push(this.venta,persona);        
    }
    verventa(){
        for (let i = 0; i < CountQueuingStrategy(this.persona); i++) {
            console.log(this.venta[i]->ob.nombre)
            
        }
    }
}