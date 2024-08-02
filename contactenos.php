<?php
include'hederr.php';
?>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-8">
                <div class="contact-form">
                    <h2>Contáctenos</h2>
                    <p>Contáctenos sobre cualquier cosa relacionada con nuestra empresa o servicios. Haremos todo lo posible para llamarte lo antes posible.</p>
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Número de Teléfono: </label>
                            <input type="number" class="form-control" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo: </label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="company">Empresa: </label>
                            <input type="text" class="form-control" id="company">
                        </div>
                        <div class="form-group">
                            <label for="subject">Asunto: </label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="question">Pregunta: </label>
                            <textarea class="form-control" id="question" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <br>
            </div>
            <!-- Contact Info -->
            <div class="col-md-4">
                <div class="contact-info">
                    <h3>Datos de empresa</h3>
                    <p><strong>Dirección:</strong> Jr. Miguel Grau 321, Int. 301, Trujillo - Perú</p>
                    <p><strong>Teléfono:</strong> +51 (913) 343-525</p>
                    <p><strong>Email:</strong> techrescueteam@gmail.com</p>
                    <h4>Horario regular</h4>
                    <p>Lunes - Viernes: De 09 hrs a 13 hrs y de 15 hrs a 19 hrs.<br>
                       Sábados: 09 hrs a 13 hrs.<br>
                       Domingo: Sólo emergencias.</p>
                    <h4>Horario emergencias</h4>
                    <p>Lunes - Viernes: Fuera del horario regular.</p>
                </div>
            </div>
        </div>
    </div>
    <?php
include'footer.php';
?>