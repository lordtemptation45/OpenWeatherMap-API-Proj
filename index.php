<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        .stretch-card>.card {
            width: 100%;
            min-width: 100%
        }
        
        body {
            background-color: #f9f9fa
        }
        
        .flex {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }
        
        @media (max-width:991.98px) {
            .padding {
                padding: 1.5rem
            }
        }
        
        @media (max-width:767.98px) {
            .padding {
                padding: 1rem
            }
        }
        
        .padding {
            padding: 5rem
        }
        
        .grid-margin,
        .purchace-popup>div {
            margin-bottom: 25px
        }
        
        .card {
            border: 0;
            border-radius: 2px
        }
        
        .card-weather {
            background: #e1ecff;
            background-image: linear-gradient(to left bottom, #d6eef6, #dff0fa, #e7f3fc, #eff6fe, #f6f9ff)
        }
        
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem
        }
        
        .card-weather .card-body:first-child {
            background: url(https://images.pexels.com/photos/1144687/pexels-photo-1144687.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center;
            background-size: cover
        }
        
        .card .card-body {
            padding: 1.88rem 1.81rem
        }
        
        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem
        }
        
        .card-weather .weather-date-location {
            padding: 0 0 38px
        }
        
        .h3,
        h3 {
            font-size: 1.56rem
        }
        
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Poppins", sans-serif;
            font-weight: 500
        }
        
        .text-gray,
        .card-subtitle,
        .new-accounts ul.chats li.chat-persons a p.joined-date {
            color: #969696
        }
        
        p {
            font-size: 13px
        }
        
        .text-gray,
        .card-subtitle,
        .new-accounts ul.chats li.chat-persons a p.joined-date {
            color: #969696
        }
        
        .card-weather .weather-data {
            padding: 0 0 4.75rem
        }
        
        .mr-auto,
        .mx-auto {
            margin-right: auto !important
        }
        
        .display-3 {
            font-size: 2.5rem
        }
        
        .card-weather .card-body {
            background: #ffffff
        }
        
        .card-weather .weakly-weather {
            background: #ffffff;
            overflow-x: auto
        }
        
        .card-weather .weakly-weather .weakly-weather-item {
            flex: 0 18%;
            padding: 1rem;
            text-align: center
        }
        
        .mb-0,
        .my-0 {
            margin-bottom: 0 !important
        }
        
        .card-weather .weakly-weather .weakly-weather-item i {
            font-size: 1.2rem
        }
        
        .showCity1 h1 {
            float: right;
            color: whitesmoke;
            padding-right: 100px;
            font-size: 50px;
            font-weight: bolder;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style>
</head>

<body style="background-color:#edf2f6 ;">
    <div class="container">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-lg-8 grid-margin stretch-card">
                        <div class="card card-weather">
                            <div class="card-body">
                                <div class="weather-date-location">
                                    <div class="showCity" id="cityName">
                                        <h1 id="cityName"></h1>
                                    </div>
                                    <div class="showCity1" id="showCity1">
                                        <h1 id="cityName1"></h1>
                                    </div>
                                    <input type="text" id="lat" placeholder="Latitude" class="form-control" style="width: 150px; margin-left: 25px; margin-top: 10px;">
                                    <input type="text" id="lon" placeholder="Longtitude" class="form-control" style="width: 150px; margin-left: 25px; margin-top: 20px; ">
                                    <button id="load" class="btn btn-primary btn-sm" style=" width: 100px; margin-left: 52px; margin-top: 30px;"><b>Load</b></button>
                                </div>
                            </div>
                            <div class="testData">
                                <div class="d-flex weakly-weather">
                                    <div class="weakly-weather-item">
                                        <span id="mTemp" class="mb-0"></span>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <span class="mb-0" id="wSpeed"></span>
                                    </div>
                                    <div class="weakly-weather-item">

                                        <span class="mb-0" id="sRise"></span>
                                    </div>
                                    <div class="weakly-weather-item">

                                        <span class="mb-0" id="sSet"></span>
                                    </div>
                                    <div class="weakly-weather-item">

                                        <span class="mb-0" id="rClouds"></span>
                                    </div>
                                    <div class="weakly-weather-item">

                                        <span class="mb-0" id="humid"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="realData">
                                <div class="d-flex weakly-weather">
                                    <div class="weakly-weather-item">
                                        <i class="fas fa-temperature-high" style="color: grey; font-size: 20px;"></i>
                                        <span id="mTemp1" class="mb-0"></span>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <i class="	fas fa-wind" style="color: grey; font-size: 20px;"></i>
                                        <span class="mb-0" id="wSpeed1"></span>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <i class="fas fa-sun" style="color: grey; font-size: 20px;"></i>
                                        <span class="mb-0" id="sRise1"></span>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <i class="fas fa-moon	" style="color: grey; font-size: 20px;"></i>
                                        <span class="mb-0" id="sSet1"></span>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <i class="fas fa-cloud" style="color: grey; font-size: 20px;"></i>
                                        <span class="mb-0" id="rClouds1"></span>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <i class="fas fa-tint" style="color:grey;"></i>
                                        <span class="mb-0" id="humid1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // 
        function fakeLoad() {
            var url = "https://api.openweathermap.org/data/2.5/weather?lat=43.7696&lon=11.2558&appid=0eb396a5cdcd36c58c23d755cea2208e&units=metric&mode=xml";
            $.get(url)
                .done((data) => {
                    console.log(data)
                    $("#cityName").append(data.name);
                    $("#mTemp").append(data.main.temp);
                    $("#wSpeed").append(data.wind.speed);
                    $("#humid").append(data.main.humidity);
                    $("#sRise").append(data.sys.sunrise);
                    $("#sSet").append(data.sys.sunset);
                    $("#rClouds").append(data.clouds.all);
                })
                .fail((xhr, status, err) => {
                    console.log("error")
                });

        }

        function getWeather(lat, lon) {
            $(".cityShow").hide();
            $(".CityShow1").show();
            $(".testData").hide();
            $(".realData").show();
            var api = "http://api.openweathermap.org/data/2.5/weather?lat=";
            var lat = $("#lat").val();
            var lon = $("#lon").val();
            var units = "&units=metric";
            var keys = "0eb396a5cdcd36c58c23d755cea2208e"
            var url = api + lat + "&lon=" + lon + units + "&appid=" + keys
            $.getJSON(url, function(data) {

                //ตรวจสอบว่า API ดึงข้อมูลสำเร็จหรือไม่
                console.log(data)

                //Check หน่วยของอุณหภูมิ
                console.log(data.main.temp)

                // check หน่วยของลม
                console.log(data.wind.speed)

                // เนื่องจากระบข้อมลเป็น celcius แล้ว จึงไม่ต้องแปลงหน่วย
                var temperature = (data.main.temp) + '°C'

                // แปลงหน่วยเวลา แบบ Unix ให้เป็นปกติ
                const formatTime = function(unixTimestamp) {
                    const milliseconds = unixTimestamp * 1000;

                    //สร้างตัวแปร Date ทำการรับค่าเป็นมิลลิวินาที
                    const date = new Date(milliseconds);

                    // กำหนดชั่วโมง
                    let hours = date.getHours();

                    // ต้องการแสดงเวลาแบบ 12 ชั่วโมง

                    // ถ้าจำนวนชั่วโมงมากกว่า 12 เข้าเงื่อนไข 
                    if (hours > 12) {

                        // หาเวลาที่เเหลือในวันนั้นๆ 
                        let hoursRemaining = 24 - hours;

                        //ระบุ hour ใหม่
                        hours = 12 - hoursRemaining;
                    }

                    // กำหนด นาที 
                    let minutes = date.getMinutes();

                    // เปลี่ยน type ของ นาที ให้เป็น string
                    minutes = minutes.toString();

                    // ถ้านาที น้อยกว่า 1 หลัก จะเติมเลข "0" นำหน้า
                    if (minutes.length < 2) {


                        minutes = 0 + minutes;
                    }

                    // ได้รูปแบบเวลาเติมปกติ

                    let time = hours + ':' + minutes;
                    //


                    return time;
                }

                // แปลงหน่วยของความเร็วลมจาก m/h เป็น km/h
                var windSpeed = (data.wind.speed) * 1.60

                // แสดงความเร็วลมในรูปแบบ
                var calSpeed = Math.floor(windSpeed) + " " + "Km/h";

                // นำ const formatTime ให้เข้าถึงข้อมูลพระอาทิตย์ขึ้นเพื่อแปลงเวลา
                var sunRise = formatTime(data.sys.sunrise) + " " + "AM";

                // นำ const formatTime ให้เข้าถึงข้อมูลพระอาทิตย์ขึ้นเพื่อแปลงเวลา
                var sunSet = formatTime(data.sys.sunset) + " " + "PM";

                // นำ const formatTime ให้เข้าถึงข้อมูลพระอาทิตย์ขึ้นเพื่อแปลงเวลา
                var humidSet = (data.main.humidity) + " " + "%";

                // แสดงข้อมูลของเมฆในรูปแบบ
                var cloudCover = (data.clouds.all) + " " + "%";

                $("#cityName1").append(data.name);
                $("#mTemp1").append(temperature);
                $("#wSpeed1").append(calSpeed);
                $("#humid1").append(humidSet);
                $("#sRise1").append(sunRise);
                $("#sSet1").append(sunSet);
                $("#rClouds1").append(cloudCover);
            })


            .fail((xhr, status, err) => {
                console.log("error")
            });
        }

        function remove() {
            $("#cityName1").empty();
            $("#mTemp1").empty();
            $("#wSpeed1").empty();
            $("#humid1").empty();
            $("#sRise1").empty();
            $("#sSet1").empty();
            $("#rClouds1").empty();
        }
        $(() => {
            fakeLoad();
            $("#load").click(() => {
                getWeather();
            });
            $("#load").click(() => {
                remove();
            });

        });
    </script>

</body>

</html>