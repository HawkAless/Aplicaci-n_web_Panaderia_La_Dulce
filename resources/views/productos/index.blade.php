<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    
</head>

<body>

    <header class="header"> 
        <div class="menu container">
            <a href="#" class="logo">
                <img src="images/pm3.png" alt="Logo de La Dulce">La Dulce
            </a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/menu.png" alt="" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Producto</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>

            <div>
                <ul>
                    <li class="submenu">
                        <img src=images/car.svg id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito" >
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th></th>
                                        <th>Nombre</th>
                                        <th></th>
                                        <th>Precio</th>
                                        <th></th>
                                        <th>Cantidad</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <div class="button-container">
                                <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                                <button id="comprar-carrito" class="btn-2">Comprar</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-content container">
            <div class="header-text">
                <span>Ofertas</span>
                <h1>Gustos y Sabores</h1>
                <p>
                    Productos artesanales. Línea de panes precocidos, panes 
                    horneados del día, y línea de pastelería dulce y salada 
                    *NO CONTIENEN PRESERVANTES* por lo que su duración es menor al de un producto industrial.
                </p>
                <a href="#" class="btn-1">Información</a>
            </div>
            <div class="header-img">
                <img src="images/pan1C.png" alt="">
            </div>
        </div>
    </header>

    <section class="information container">
        <div class="information-content">
            <div class="information-1">
                <img src="images/i1.svg" alt="">
                <h3>Tiendas</h3>
                <p>
                    Tiendas cercanas a tu casa: Siempre a tu lado con el mejor sabor
                </p>
            </div>

            <div class="information-1">
                <img src="images/i2.svg" alt="">
                <h3>Pagos</h3>
                <p>
                    Panadería La Dulce: Panes caseros, deliciosos y a buen precio, siempre a la mano.
                </p>
            </div>

            <div class="information-1">
                <img src="images/i3.svg" alt="">
                <h3>Delivery</h3>
                <p>
                    La dificultad no está en el lugar, sino en la solución. Por eso, siempre cuenta con nosotros: Los Carritos a tu Casa.
                </p>
            </div>
        </div>
    </section>

    <section class="oferts container">
        <div class="ofert-1">
            <img src="images/pan8.png" alt="">
            <h3>Oferta</h3>
            <p>Premiun</p>
        </div>

        <div class="ofert-1">
            <img src="images/pan7.png" alt="">
            <h3>Oferta</h3>
            <p>Premiun</p>
        </div>

        <div class="ofert-1">
            <img src="images/pan4.png" alt="">
            <h3>Oferta</h3>
            <p>Premiun</p>
        </div>

        <div class="ofert-1">
            <img src="images/pan5.png" alt="">
            <h3>Oferta</h3>
            <p>Premiun</p>
        </div>
    </section>

    <main class="products container" id="lista-1">
        <h2>Productos destacados</h2>
        <div class="product-content">
            @foreach($productos as $producto)
                <div class="product">
                    <img src="images/pan6.png" alt="">
                    <div class="product-txt">
                        <h3>{{ $producto->nombre_producto }}</h3>
                        <p class="precio">{{ $producto->precio}}</p>
                        <div class="product-actions">
                            <div class="quantity-controls">
                                <button class="decrement">-</button>
                                <input type="number" value="1" min="1" class="quantity-input">
                                <button class="increment">+</button>
                            </div>
                            <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <section class="service">
        <div class="carousel">
            <button class="carousel-button prev">❮</button>
            <div class="carousel-wrapper">
                <div class="carousel-item">
                    <div class="service-1">
                        <img class="store" src="images/4pan.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="service-2">
                        <img class="store" src="images/3pan.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="service-3">
                        <img class="store" src="images/5pan.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="service-1">
                        <img class="store" src="images/6pan.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="service-2">
                        <img class="store" src="images/7pan.png" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="service-3">
                        <img class="store" src="images/8pan.png" alt="">
                    </div>
                </div>
            </div>
            <button class="carousel-button next">❯</button>
        </div>
    </section>

    <section class="contact container">
        <form>
            <input type="email" placeholder="Correo">
            <input type="submit" class="btn-3">
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <h3>Marca</h3>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Zonas de reparto</a></li>
                    <li><a href="#">Trabaja con nosotros</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Atención al cliente</h3>
                <ul>
                    <li><a href="#">Franquicias</a></li>
                    <li><a href="#">Horeca</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Politica y terminos</h3>
                <ul>
                    <li><a href="#">Terminos y condiciones</a></li>
                    <li><a href="#">Políticas de privacidad</a></li>
                    <li><a href="#">Política de promosiones</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Mi cuenta</h3>
                <ul>
                    <li><a href="#">Tu cuenta</a></li>
                    <li><a href="#">Tus pedidos</a></li>
                    <li><a href="#">Mis direcciones</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/scripts.js') }}"></script>
    

</body>

</html>