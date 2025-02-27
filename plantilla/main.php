<body class="p-3 text-center "> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Redondea los bordes, pone el texto en modo oscuro y indica el tamaño del contenido   -->
    <div  class="text-bg-dark container-md rounded-5">
    <section>
        <!-- Alinea el texto al centro dejando un padding de 2px y -->
        <h1 class="text-center p-2" >Imagen astronómica del día </h1>
        <div class="text-center">
            <!-- Redondea los bordes de la imagen y hace que esta sea responsiva-->
            <img src="<?= $data["url"]?>" class="rounded-4 img-fluid" width="500" alt="Esta es una imagen astronómica del dia la cual es  <?= $data["title"]?>">
        </div>
    </section>

    <hgroup >
        <!-- Alinea el texto al centro dejando un padding de 2px y -->
        <h2 class="text-center  p-2" ><?= $title;?></h1>
        <!-- Hace la letra más grande  -->
        <p  class="lead  "><?= $explanation;?></p>
        <!-- Alinea el texto al final dejando un padding de 2px y -->
        <div class=" text-end p-2 ">
            <!-- Pone en negrita el texto -->
        <p class="fw-bold"> Imagen de <?=  $autor_img?></p>
        </div>

    </hgroup>
    </div> 
    
</body>