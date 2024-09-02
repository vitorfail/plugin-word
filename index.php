<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Script PHP</title>
</head>
<body>
    <session class="certificate_container">
        <div class="certificate_center">
            <div class="lista_certificate">
            <div class="carousel">
                <div class="carousel-inner">
                <div class="carousel-item"><img src="atados.png" alt="Image 1"></div>
                <div class="carousel-item"><img src="citro.png" alt="Image 2"></div>
                <div class="carousel-item"><img src="roberta.png" alt="Image 3"></div>
                <!-- Adicione mais imagens conforme necessário -->
                </div>
            </div>
            </div>
            <div class="certificate_display">
                <div id="certificate_info">
                    <div style="--i:1s;" class="dados_certificate">
                        <div class="input">
                            <input id="cor_name" class="info" placeholder="Name"/>
                            <p>Name</p>
                        </div>
                        <input onchange="cores('cor_name',this)" class="color" type="color"/>
                        <button class="check" id="aparece">V</button>
                    </div>
                    <div style="--i:2s;" class="dados_certificate">
                        <div class="input">
                            <input id="cor_director" class="info" placeholder="Director"/>
                            <p>Director</p>
                        </div>
                        <input onchange="cores('cor_director', this)" class="color" type="color"/>
                        <button class="check" id="aparece">V</button>
                    </div>
                    <div style="--i:3s;" class="dados_certificate">
                        <div class="input">
                            <input id="cor_descrepction" class="info" placeholder="Descrepction"/>
                            <p>Description</p>
                        </div>
                        <input onchange="cores('cor_descrepction', this)" class="color" type="color"/>
                        <button class="check" id="aparece">V</button>
                    </div>
                </div>
                <div class="certificate_result">

                </div>
            </div>
        <div>
    </session>
    <script>
        var aparicao_incial = true

        var dados ={
            cor_name: document.getElementById("cor_name"),
            cor_director: document.getElementById("cor_director"),
            cor_descrepction: document.getElementById("cor_descrepction")
        }
            // Configura o Intersection Observer
        const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    const div = document.getElementById('certificate_info');
                    if (entry.isIntersecting) {
                        div.classList.add('certificate_info');
                    } else {
                        div.classList.remove('certificate_info');
                    }
                });
        }, {
            threshold: 0.5 // Ajuste conforme a necessidade
        });

        const target = document.getElementById('certificate_info');
        observer.observe(target);
        function cores(cor_target, cor){
            console.log(dados)
            dados[cor_target].style.color =cor.value 
        }
        const carouselInner = document.querySelector('.carousel-inner');
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length;
        let index = 0;

        function showNextImage() {
        index = (index + 1) % totalItems;
        const offset = -index * 100;
        carouselInner.style.transform = `translateX(${offset}%)`;
        }

        function startCarousel() {
        setInterval(showNextImage, 3000); // Altere o intervalo conforme necessário
        }

startCarousel();
    </script>
</body>

<style>
    *{
        font-family: "Montserrat", sans-serif;
        border:0;
        padding:0;
        box-sizing:border-box;
        transition:all 0.2s easy-in-out;
    }
    .certificate_container{
        display:flex;
        justify-content:center;
        align-items:center;
        width: 100%;
        height:auto;
    }
    .certificate_center{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        width: 80%;
        height:80%;
    }
    .lista_certificate{
        display:flex;
        justify-content:center;
        align-items:center;
        height:300px;
        width:100%;
    }
    .certificate_display{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    #certificate_info{
        width:100%;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;

    }
    .certificate_info .dados_certificate{
        animation: dados 0.5s linear calc(calc(var(--i)*2)/17) forwards;
    }
    .dados_certificate{
        margin-top:20px;
        opacity:0;
        height:40px;
        width:100%;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    input[type="color"]::-webkit-color-swatch {
        outline:none;
        border:none;
        border-radius: 50%;
        color:transparent;
        padding: 0;
        }
    .dados_certificate .color{
        box-shadow:0px 0px 12px rgb(0,0,0,0.4);
        -webkit-appearance: none; /* Remove the default styling in WebKit browsers */
        appearance: none;
        border:none;
        outline:none;
        height: 30px; /* Ocupa 100% da altura da viewport */
        width: 35px;         
        border-radius:50%;
        background:none;
    }
    .dados_certificate .info{
        border:none;
        border-bottom:2px solid green;
        background:none;
    } 
    .dados_certificate .check{
        border-radius:50%;
        height: 30px; /* Ocupa 100% da altura da viewport */
        width: 35px;         
        color:white;
    }
    .dados_certificate #aparece{
        background:green;
    }
    .dados_certificate #esconde{
        background:red;
    }
    .input{
        align-items: flex-start;
        transition: all ease-in-out 0.2s;
        animation: input alternate 0.7s;
        display: flex;
        width: 100%;
        flex-direction: column;
    }
    .input p{
        transition: all ease-in-out 0.2s;
        font-weight: 500;
        color: rgba(150, 150, 150, 0.753);
        transition: all ease 0.2s;
        pointer-events: none;
        margin-left: 12px;
        margin-top: -25px;
    }
    .input input{

        height: 35px;
        transition: all ease-in-out 0.2s;
        border: 1px solid #cccccc;
        border-radius: 4px;
        font-size: 20px;
    }
    .input input::placeholder{
        color: transparent;
    }
    .input input:focus{
        border: none;
        outline:2px solid green; 
    }
    .input input:focus + p, .input input:not(:placeholder-shown)+p{
        background: white;
        color: black;
        margin-top: -49px;
        margin-left: -1px;
        font-size: 15px;
        color:green;
    }
    .input input:not(:placeholder-shown){
        background: rgba(71, 71, 71, 0.24);
    }
    .carousel {
        box-shadow: 0 6px 19px rgba(0, 0, 0, 0.7); 
        width: 200px;
        overflow: hidden;
        position: relative;
    }
    .carousel-inner {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }
    .carousel-item {
        min-width: 100%;
        box-sizing: border-box;
    }
    .carousel-item img {
        width: 100%;
        height: auto;
    }
    @keyframes dados {
        from{
            opacity:0;
            transform: translateX(-40px);
        }
        to{
            opacity:1;
            transform: translateX(0px);
        }
    }
</style>
</html>