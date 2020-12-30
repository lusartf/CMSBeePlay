/**
 * Funcion encrypt: Esta funcion permite generar el auth(token)
 */


function encrypt() {
    
    /*Para poder iniciar sesion se requiere extraer los valores 
    *del formulario en este caso: nombre de usuario  y contraseña
    */
    
    var username = document.getElementsByName("username")[0].value; //extrae username
    var password = document.getElementsByName("password")[0].value; //extrae password

    /*PARAMETROS QUE OCUPA API MAGO
    username,password,appid,boxid,timestamp
    * */

    //Paso2:concatenar variables para generar el auth
    a = "username=" + username +
      ";password=" + password +
      ";appid=1" + 
      ";boxid=123456789" +
      ";timestamp=" + Date.now(),
    //Llave de Encriptacion
    b = "1234567890123456";


    //Paso3: Encriptacion de auth 
    //Metodo: AES-256-CBC
    var c = CryptoJS;  //Inicializar objeto con clase Crypto

    //codificar variables
    (a = c.enc.Utf8.parse(a)), (b = c.enc.Utf8.parse(b));

    /*Genaeracion de clave encriptada, se definen  los parametros necesarios 
    para poder generar una llave AES valida*/

    /*Parametros necesarios para metodo AES CBC ****
    * texto a encriptar, 
    *vector de inicializacion(iv)
    *llave de desencriptacion
    ************************************************/
    var d = c.algo.AES.createEncryptor(b, {
        mode: c.mode.CBC,
        padding: c.pad.Pkcs7, //genera relleno de clave
        iv: b,   
    }),

    e = d.finalize(a);

    //valor que retorna es una llave encriptada (AUTH) en base 64
    return(
    console.log(c.enc.Base64.stringify(e)), c.enc.Base64.stringify(e)
    );

    
    
  

}//fin de funcion encrypt


/**
 * Funcion guardar_localStorage
 */

function guardar_localStorage(){
    

    //asignamos el valor del auth,llamando la funcion  encrypt()
    let auth_key = encrypt(); 

    localStorage.setItem("auth_key",auth_key);

    /*Se necesita pasar el valor del auth al controlador, por lo cual se genera
    * un nuevo campo del formulario para poder asignarle su respectivo token*/
    document.getElementById("Token").innerHTML = "<input type='hidden' value="+auth_key+" name='Token'>";
    
}