const carrito = document.getElementById('carrito');
const elementos1 = document.getElementById('lista-1');
const lista = document.querySelector("#lista-carrito tbody");
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');
const comprarCarritoBtn = document.getElementById('comprar-carrito');

cargarEventListeners(); 

function cargarEventListeners() {
    elementos1.addEventListener('click', comprarElemento);
    carrito.addEventListener('click', eliminarElemento);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
    comprarCarritoBtn.addEventListener('click', comprarCarrito);
    elementos1.addEventListener('click', ajustarCantidad); 
}

function comprarElemento(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {
        const elemento = e.target.closest('.product'); 
        leerDatosElemento(elemento);
    }
}

function leerDatosElemento(elemento) {
    const cantidad = elemento.querySelector('.quantity-input').value;
    const infoElemento = {
        imagen: elemento.querySelector('img').src,
        titulo: elemento.querySelector('h3').textContent,
        precio: elemento.querySelector('.precio').textContent,
        id: elemento.querySelector('a').getAttribute('data-id'),
        cantidad: cantidad
    }
    insertarCarrito(infoElemento);
}

/*``= Backticks: alt + 96*/
function insertarCarrito(elemento) {
    const row = document.createElement('tr');
    row.innerHTML= ` 
        <td>
            <img src="${elemento.imagen}" width=100>
        </td>
        <td></td>
        <td>
            ${elemento.titulo}
        </td>
        <td></td>
        <td>
            ${elemento.precio}
        </td>
        <td></td>
        <td>
            ${elemento.cantidad} <!-- Mostrar la cantidad -->
        </td>
        <td></td>
        <td>
            <a href="#" class="borrar" data-id="${elemento.id}"> X </a>
        </td>
    `;
    lista.appendChild(row);
}

function eliminarElemento(e) {
    e.preventDefault();
    if (e.target.classList.contains('borrar')) {
        e.target.parentElement.parentElement.remove();
    }
}

function vaciarCarrito() {
    while (lista.firstChild) {
        lista.removeChild(lista.firstChild);
    }
    return false;
}
function comprarCarrito() {
    alert('Compra realizada con éxito!');
    vaciarCarrito(); // Vacía el carrito después de la compra
}

function ajustarCantidad(e) {
    if (e.target.classList.contains('increment')) {
        const input = e.target.previousElementSibling;
        input.value = parseInt(input.value) + 1;
    }
    if (e.target.classList.contains('decrement')) {
        const input = e.target.nextElementSibling;
        input.value = Math.max(1, parseInt(input.value) - 1);
    }
}




const prevButton = document.querySelector('.carousel-button.prev');
    const nextButton = document.querySelector('.carousel-button.next');
    const carouselWrapper = document.querySelector('.carousel-wrapper');
    const items = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;
    const totalItems = items.length;

    function showNext() {
        currentIndex = (currentIndex + 1) % totalItems;
        updateCarousel();
    }

    function showPrev() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        updateCarousel();
    }

    function updateCarousel() {
        const offset = -currentIndex * 100; // Cada item ocupa el 100% del contenedor
        carouselWrapper.style.transform = `translateX(${offset}%)`;
    }

    nextButton.addEventListener('click', showNext);
    prevButton.addEventListener('click', showPrev);

    // Cambio automático cada 3 segundos
    setInterval(showNext, 5000);

    // Inicializa el carrusel
    updateCarousel();