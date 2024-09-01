<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Script PHP</title>
</head>
<body>
    <session class="certificate_container">
        <div class="certificate_center">
            <div class="lista_certificate"></div>
            <div class="certificate_display">
                <div id="certificate_info">
                    <div style="--i:1s;" class="dados_certificate">
                        <input class="info" placeholder="Name"/>
                        <input class="color" type="color"/>
                        <button class="check" id="aparece">V</button>
                    </div>
                    <div style="--i:2s;" class="dados_certificate">
                        <input class="info" placeholder="Director"/>
                        <input class="color" type="color"/>
                        <button class="check" id="aparece">V</button>
                    </div>
                    <div style="--i:3s;" class="dados_certificate">
                        <input class="info" placeholder="Descrepction"/>
                        <input class="color" type="color"/>
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
    </script>
</body>

<style>
    *{
        border:0;
        padding:0;
        box-sizing:border-box;
        transition:all 0.2s;
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
        width:100%;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .dados_certificate .color{
        border:none;
        width: 30px;
        height:30px;
        border-radius:50%;
    }
    .dados_certificate .info{
        border:none;
        border-bottom:2px solid green;
        background:none;
    } 
    .dados_certificate .check{
        border-radius:50%;
        height:30px;
        width:30px;
        color:white;
    }
    .dados_certificate #aparece{
        background:green;
    }
    .dados_certificate #esconde{
        background:red;
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