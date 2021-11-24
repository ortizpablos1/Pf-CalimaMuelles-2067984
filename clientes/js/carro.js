const carrito = document.getElementById("carrito");
const productos = document.getElementById("lista-productos");
const listaProductos= document.querySelector("#lista-carrito tbody");
const vaciarCarritoBtn = document.getElementById("vaciar-carrito");

cargarEventListeners();

function cargarEventListeners() {
  productos.addEventListener("click", comprarProducto);
  carrito.addEventListener("click", eliminarProducto);
  vaciarCarritoBtn.addEventListener("click", vaciarCarrito);
  document.addEventListener("DOMContentLoaded", leerLocalStorage);
}

function comprarProducto(e) {
    e.preventDefault();
    if(e.target.classList.contains('agregar-carrito')){
        const productos = e.target.parentElement.parentElement;
        leerDatosProducto(productos);
    }
}
function leerDatosProducto(productos){
    const infoProductos = {
        imagen: productos.querySelector('img').src,
        titulo: productos.querySelector('h4').textContent,
        precio: productos.querySelector('.precio span').textContent,
        id: productos.querySelector('a').getAttribute('data-id')
    }

    insertarCarrito(infoProductos);
}

function insertarCarrito(productos) {
    const row = document.createElement('tr');
    row.innerHTML = `
       <td>
           <img src="${productos.imagen}" width=100> 
       </td> 
       <td>${productos.titulo}</td>
       <td>${productos.precio}</td>
       <td>
        <a href="#" class="borrar-producto" data-id="${productos.id}">X</a>
       </td>
    `;
    listaProductos.appendChild(row);
    guardarProductoLocalStorage(productos);
}

function eliminarProducto(e) {
    e.preventDefault();

    let productos,
    productosId;
    
    if(e.target.classList.contains('borrar-productos')) {
        e.target.parentElement.parentElement.remove();
        productos = e.target.parentElement.parentElement;
        productosId = productos.querySelector('a').getAttribute('data-id');
    }
    eliminarProductosLocalStorage(productosId)
}

function vaciarCarrito(){
    while(listaProductos.firstChild){
        listaProductos.removeChild(listaProductos.firstChild);
    }
    vaciarLocalStorage();

    return false;
}

function guardarProductosStorage(productos) {
    let productos;

    productos = obtenerProductosLocalStorage();
    productos.push(productos);

    localStorage.setItem('productos', JSON.stringify(productos));
}

function obtenerProductosLocalStorage() {
    let productosLS;

    if(localStorage.getItem('productos') === null) {
        productosLS = [];
    }else {
        productosLS = JSON.parse(localStorage.getItem('productos'));
    }
    return productosLS;
}

function leerLocalStorage() {
    let productosLS;

    productosLS = obtenerProductosLocalStorage();

    productosLS.forEach(function(productos){
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${productos.imagen}" width=100>
            </td>
            <td>${productos.titulo}</td>
            <td>${productos.precio}</td>
            <td>
                <a href="#" class="borrar-productos" data-id="${productos.id}">X</a>
            </td>
        `;
        listaProductos.appendChild(row);
    });
}

function eliminarProductosLocalStorage(productos) {
    let productosLS;
    productosLS = obtenerProductosLocalStorage();

    productosLS.forEach(function(productosLS, index){
        if(productosLS.id === productos) {
            productosLS.splice(index, 1);
        }
    });

    localStorage.setItem('productos', JSON.stringify(productosLS));
}

function vaciarLocalStorage() {
    localStorage.clear();
}
