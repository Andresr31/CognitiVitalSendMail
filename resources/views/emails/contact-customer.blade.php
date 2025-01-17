<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por contactarte con nosotros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        .email-container {
            
            max-width: 800px;
            margin: auto;
            background:  url(https://cognitivital.com/assets/img/hero-bg.png) top center no-repeat;
            /* width: 100%; */
            /* height: 60vh; */
            background-size: cover;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            /* padding: 10px 0; */
            /* border-radius: 10px 10px 0 0; */
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        .content h2 {
            color: #333333;
            font-size: 22px;
        }
        .content p {
            color: #666666;
            font-size: 16px;
        }
        .content .gift {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px dashed #167a63;
            border-radius: 5px;
            color: #167a63;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            background-color: #167a63;
            color: #ffffff;
            border-radius: 0 0 10px 10px;
        }
        .footer p {
            
            margin: 0;
            font-size: 14px;
        }
        .books-images{
            margin-top: 20px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <a href="https://cognitivital.com/" target="_blank"><img src="https://cognitivital.com/assets/img/hero-img.png"  alt="" width="428px" height="231px"></a>
            
        </div>
        <div class="content">
            <h1 style="color: #167a63;">¡Hola {{$customer->name}}!</h1>
            <h2>¡Gracias por contactarte con nosotros!</h2>
            <h2>Un integrante de nuestro equipo dará respuesta a tu mensaje</h2>
            <p>Nos complace saber de ti, te informaremos sobre futuras novedades. Para agradecer tu interés, te ofrecemos nuestras cartillas de estimulación sobre deterioro cognitivo, selecciona su portada para descargarla.</p>
            <div class="gift">
                🎁 ¡Recibiste un obsequio especial de CognitiVital!
            </div>
            <div class="books-images">
                <a href="https://editorial.autonoma.edu.co/index.php/libros/catalog/download/50/51/144?inline=1" target="_blank"><img src="https://cognitivital.com/assets/img/book-one.png"  alt="" width="208px" height="250px"></a>
                <a href="https://editorial.autonoma.edu.co/index.php/libros/catalog/download/63/66/390?inline=1" target="_blank"><img src="https://cognitivital.com/assets/img/book-two.png"  alt="" width="208px" height="250px"></a>
            </div>
        </div>
        <div class="footer">
            <p>&copy; 2024 <a href="https://cognitivital.com/" target="_blank" style="color: white;">CognitiVital.</a> Todos los derechos reservados.</p>
        </div>
    </div>
    
</body>
</html>
