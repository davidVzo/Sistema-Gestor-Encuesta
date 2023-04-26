
const checkBox = document.getElementById('checkBox');
var inpUsuario = document.getElementById('usuario');
var inpContrasena = document.getElementById('contrasena');
var inpConfiContrasena = document.getElementById('confiContrasena');
var inpImagen = document.getElementById('imagen');
// console.log(inpUsuario);    
inpUsuario.disabled = true;
inpContrasena.disabled = true;
inpConfiContrasena.disabled = true; 
inpImagen.disabled = true;
checkBox.addEventListener('change', (event) => {
  if (event.currentTarget.checked) {
    

    inpUsuario.disabled = false;
    inpContrasena.disabled = false;
    inpConfiContrasena.disabled = false; 
    inpImagen.disabled = false;
  } else {
    inpUsuario.disabled = true;
    inpContrasena.disabled = true;
    inpConfiContrasena.disabled = true; 
    inpImagen.disabled = true;
  }
})
