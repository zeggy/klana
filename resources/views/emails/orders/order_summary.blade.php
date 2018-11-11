@component('mail::message')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <style>
        .container {
            text-align: center;
        }
        .grey-background {
            background-color: #c0c0c0;
            margin: 0 35%;
            padding: 5px 30px;
        }
        .gold-text {
            color: #b38600;
            font-size: 5vh;
        }
        .information {
            display: flex;
            justify-content: flex-start;
            text-align: left;
            margin: 0 18%;
        }
        .image {
            display: flex;
            justify-content: flex-start;
        }
        .image-detail {
            margin: 5% 0 0 2%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <i>Your trip has been confirm to DESA and KLANA has make it transparency</i>
            <p class="gold-text">NAMA PESANAN</p>
            <i>Your trip has been confirmed</i>
            <p class="gold-text">ID NUMBER</p>
            <i>Thank you for your trusted and contributed together to develop and caring DESA in (based on the destination)</i>
        </div>
        <br/>
        <div class="grey-background">
            <i>See who is gonna be your partner in this trip</i>
        </div>

        <br>
        <div class="information">
            <div class="image">
                <img src="{{ asset('storage/trip/1/nusapenida.jpg') }}" alt="" width="25%" height="100%">
                <div class="image-detail">
                    <p>Rating</p>
                    <p>Location</p>
                </div>
            </div>

            <div class="package-name">
                <p>(NAME OF THE PACKAGE)</p>
                <p>BY (name of the vendor)</p>
            </div>
        </div>
    </div>
</body>
</html>