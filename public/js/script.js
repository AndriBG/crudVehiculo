let mensaje = document.querySelectorAll(".eliminar");

// console.log(mensaje);

mensaje.addEventListener("click",()=>{
    let id = mensaje.dataset.id;
    console.log(id);
});

// if(mensaje == '1'){
//     console.log("entró");
//     swal(':D','Agregado con éxito','success');
// }else if(mensaje=='2'){
//     console.log("no entró");
//     swal(':D','Fallo al agregar','error');
// }
