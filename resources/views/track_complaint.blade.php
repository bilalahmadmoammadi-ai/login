<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>د کابل ښار د عامه شکایاتو او وړاندیزونو د مدیریت سیستم</title>
    <link rel="stylesheet" href="track.css">
    @vite('resources/css/track.css')
</head>
<body>
    <main>
        <nav class="navbar">
        <div class="list">
            <a href="index.html"><img class="logo" src="{{('/logo.png.jpg')}}" alt="logo photo" id="photo"></a>
          <ul class="manubar" >
            <li><a href="/">اصلی صفحه🏠</a> </li>          
            <li><a href="/submit_complaint">شکایت ثبتول 📝</a> </li>
            <li><a href="/submit_suggestion">وړاندیز ثبتول 💡</a> </li>
            <li><a href="/track_complaint"> شکایت تعقیب 🔍</a> </li>
            <li><a href="/feedback"> رضایت برخه⭐ </a> </li>
            <li><a href="/about"> زموږ به اړه</a> </li>
            <li><a href="/contact">د اړیکو پانه📞</a> </li>
            
        </ul>
        <a href=""><button class="login">ننوتل</button></a>
        <a href=""><button class="register">ثبت نام</button></a>
        
        </div>
    </nav>

    <section>
        <div class="hero">
            <h1>د کابل ښار د عامه شکایاتو او وړاندیزونو د مدیریت سیستم</h1>
            <p>د خپل ښار به آبادولو کی مرسته وکړی</p>
        </div>
    </section>

     <section class="form">
        <div class="formarea">
           
        <form action="" id="track-form">
               <h2>خپل شکایت یا وړاندیز تعقیب کړی</h2><br>
            <!-- <div id="name"> -->
                <label for="ticket">د تکت نمبر داخل کړی</label><br>
                <input type="text" id="ticket"><br><br>
            <!-- </div> -->
            <!-- <div id="submit"> -->
                <button type="submit" id="submit-click">ولټوه</button>
            <!-- </div> -->

         </form>
        </div>
      </section>

       <footer class="footer">
        <div class="socail-icons">
            <h4>Socail Madia Links</h4>
            <a href="https://www.facebook.com/bilal.ahmad.mohammadi.2025"><img src="{{('/facebook.png')}}" alt=""></a>
            <a href="https://youtube.com/@teabros_vlog?si=zDuAyF6fnGDchHKC"><img src="{{('/youtube.png')}}" alt=""></a>
            <a href="#"><img src="{{('/message.png')}}" alt=""></a>

        </div>
           <div class="footer-center"> <p>2026 Kabull Municipality all copyrights @reserved</p></div>
            <div class="footer-right">
            <p>phone: 0786901251</p>
            <p>Address: Kabull Afghanistan</p>
            <p>Email: bilalahmadmoammadi@gmail.com</p>
            
            </div>
            
    
    </footer>

    </main>
    <script src="track.js"></script>
</body>
</html>