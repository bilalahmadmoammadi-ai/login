<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="bilal ahmad">
    <meta name="description" content="The oficial website for kabul manicipal">
    <title>د کابل ښار د عامه شکایاتو او وړاندیزونو د مدیریت سیستم</title>
    <link rel="stylesheet" href="contact.css">
    @vite('resources/css/contact.css')
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


        <section class="contact">
            <div class="contact-container">
                <div class="contact-info">
                    <h2>زموږ معلومات</h2>
                    <p>کابل ښاروالی</p>
                    <p>کابل، افغانستان</p>
                    <p>0744400780 📞</p>
                    <p>info@kabul.gov.af 📧</p>
                    <p>شنبه - بنجشنبه ⏱</p>
                    <p>8AM - 4PM</p>
                    <div class="map">
                        <iframe src="https://maps.app.goo.gl/jLdevbQy38E5xqJA" frameborder="0" width="100%" height="250" style="border: 0;"></iframe>
                        
                    </div>
                </div>

                <div class="contact-form">
                    <h2>موږ ته پیغام واستوی 📩</h2>
                    <form action="" id="contact-form">
                        <input type="text" id="name" placeholder="نوم">
                        <input type="email" id="email" placeholder="ایمیل">
                        <input type="text" id="issue" placeholder="موضوع">
                        <textarea id="message" placeholder="پیغام"></textarea>
                        <button type="submit">پیغام واستوی</button>
                    </form>
                </div>
            </div>
        </section>

         <section class="footer-back">
    <footer class="footer">
        <div class="socail-icons">
            <h5>Socail Madia Links</h5>
            <a href="https://www.facebook.com/bilal.ahmad.mohammadi.2025"><img src="{{('/facebook.png')}}" alt=""></a>
            <a href="https://youtube.com/@teabros_vlog?si=zDuAyF6fnGDchHKC"><img src="{{('/youtube.png')}}" alt=""></a>
            <a href="#"><img src="{{('/message.png')}}" alt=""></a>

        </div>
           <div class="footer-center"> <p>2026 Kabull Municipality all copyrights @reserved</p></div>
            <div class="footer-right">
            <p>phone:0786901251</p>
            <p>Address: Kabull Afghanistan</p>
            <p>Email: bilalahmadmoammadi@gmail.com</p>
            
            </div>
            
    </footer>
    </section>


    </main>
    <script src="contact.js"></script>
</body>
</html>