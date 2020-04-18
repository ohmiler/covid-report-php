<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Kanit', sans-serif;
        }

        h1 {
            text-align: center;
            padding: 2rem;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            padding: 0 2rem;
            grid-gap: .5rem;
            margin-bottom: 2rem;
        }
        .box {
            text-align: center;
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.3);
            border-radius: 10px;            
            padding: 4rem;
            transition: .5s;
            cursor: pointer;
        }
        .box:hover {
            transform: scale(1.05);
        }
        .box:nth-child(1) {
            background-color: #E67E22;
        }
        .box:nth-child(2) {
            background-color: #2ECC71;
        }
        .box:nth-child(3) {
            background-color: #F1C40F;
        }
        .box:nth-child(4) {
            background-color: #C0392B;
        }
        .box:nth-child(5) {
            background-color: #9B59B6;
        }
        .box:nth-child(6) {
            background-color: #3498DB;
        }
        .box:nth-child(7) {
            background-color: #F5B041 ;
        }
        .box:nth-child(8) {
            background-color: #CD6155;
        }
        .box:nth-child(9) {
            grid-column: 1 / 3;
            background-color: #2E4053;
            color: #fff;
        }
        .box:nth-child(10) {
            grid-column: 3 / 5;
            background-color: #2E4053;
            color: #fff;
        }
        footer {
            grid-column: 1 / 5;
            background-color: #3498DB;
            color: #fff;
        }
        footer a {
            color: #F1C40F;
            text-decoration: none;
        }


        p {
            font-size: 2rem;
        }

        footer {
            margin-top: 1rem;
            text-align: center;
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.3);
            border-radius: 10px;            
            padding: 2rem;
        }
    </style>

</head>
<body>
    
    <h1>Covid Report</h1>

    <div class="container">
        <div class="box" id="Confirmed"></div>
        <div class="box" id="Recovered"></div>
        <div class="box" id="Hospitalized"></div>
        <div class="box" id="Deaths"></div>
        <div class="box" id="NewConfirmed"></div>
        <div class="box" id="NewRecovered"></div>
        <div class="box" id="NewHospitalized"></div>
        <div class="box" id="NewDeaths"></div>
        <div class="box" id="UpdateDate"></div>
        <div class="box" id="Source"></div>
        <footer>
            Made By <a href="https://www.youtube.com/channel/UCeKE6wQHTt5JpS9_RsH4hrg" target="_blank">PatiPhan</a>
        </footer>
    </div>

    

    <script>

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(data) {
            if (this.readyState == 4 && this.status == 200) {
                let data = JSON.parse(this.responseText);
                console.log(data);
                document.getElementById('Confirmed').innerHTML = `ติดเชื้อสะสม<p>${data[0]}</p>`;
                document.getElementById('Recovered').innerHTML = `รักษาหาย <p>${data[1]}</p>`;
                document.getElementById('Hospitalized').innerHTML = `กำลังรักษาอยู่ในโรงพยาบาล <p>${data[2]}</p>`;
                document.getElementById('Deaths').innerHTML = `เสียชีวิต <p>${data[3]}</p>`;
                document.getElementById('NewConfirmed').innerHTML = `ผู้ติดเชื้อใหม่ <p>${data[4]}</p>`;
                document.getElementById('NewRecovered').innerHTML = `ผู้ที่รักษาหายล่าสุด <p>${data[5]}</p>`;
                document.getElementById('NewHospitalized').innerHTML = `รักษาอยู่ในโรงพยาบาลใหม่ล่าสุด <p>${data[6]}</p>`;
                document.getElementById('NewDeaths').innerHTML = `เสียชีวิตล่าสุด <p>${data[7]}</p>`;
                document.getElementById('UpdateDate').innerHTML = `อัพเดตข้อมูลวันที่ : ${data[8]}`;
                document.getElementById('Source').innerHTML = `ที่มา : ${data[9]}`;
            }
        };
        xhttp.open("GET", "data.php", true);
        xhttp.send();
    
    
    </script>

</body>
</html>