<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="bilal ahmad">
    <meta name="description" content="The oficial website for kabul manicipal">
    <title>د کابل ښار د عامه شکایاتو او وړاندیزونو د مدیریت سیستم</title>
    <link rel="stylesheet" href="feedback.css">
    @vite('resources/css/feedback.css')
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
           
        <form action="#success" >
            <h2>زموږ د کار په اړه ستاسو نظر</h2><br>
            <div class="rating">
                 <!-- <input type="radio" name="star" id="star5"> -->
                <label for="star5"><ul>⭐</ul></label>
                 <input type="radio" name="star" id="star4"> 
                <label for="star4"><ul>⭐⭐</ul></label>
                 <input type="radio" name="star" id="star3">
                <label for="star3"><ul>⭐⭐⭐</ul></label>
                  <input type="radio" name="star" id="star2">
                <label for="star2"><ul>⭐⭐⭐⭐</ul></label>
                 <input type="radio" name="star" id="star1">
                <label for="star1"><ul>⭐⭐⭐⭐⭐</ul></label>
                <input type="radio" name="star" id="star1">

            </div>

  
               <div id="textarea">
                <legend>اضافی نظر ولیکی ...</legend>
                <textarea name="" id="" rows="10" cols="20"></textarea>
               </div>
               <div id="submit">
                <button type="submit" id="submit-click">ثبت کړی</button>
            </div>
<!-- 
            <div id="success" class="success-box">
                <h3>ستاسو رضایت ثبت شو</h3>
                <p>مننه ستاسو د نظر لپاره</p>
            
            </div> -->

        </form>
        </div>
        </section>

        <section class="footer-back">
    <footer class="footer">
        <div class="socail-icons">
            <h5>Socail Madia Links</h5>
            <a href="https://www.facebook.com/bilal.ahmad.mohammadi.2025"><img src="{{('/facebook.png')}}" alt=""></a>
            <a href="#"><img src="{{('/youtube.png')}}" alt=""></a>
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
</body>
</html>