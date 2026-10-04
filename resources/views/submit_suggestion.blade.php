<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>د کابل ښار د عامه شکایاتو او وړاندیزونو د مدیریت سیستم</title>
    <link rel="stylesheet" href="./suggestion.css">
    @vite('resources/css/suggestion.css')
</head>
<body>
    <main>
        <nav class="navbar">
        <div class="list">
            <a href=""><img class="logo" src="{{('/logo.png.jpg')}}" alt="logo photo" id="photo"></a>
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

    <!-- <section class="form">
        <div class="formarea">
           
        <form action="#success" >  
            <h2>د ړاندیزونو ثبتول</h2><br>

            <div id="name">
            <label for="name">نوم</label><br>
            <input type="text" id="name"><br><br>
            </div>


            <div id="phone">
                <label for="phone">تلیفون شمیره</label><br>
                <input type="text"><br><br>
            </div>

            <div id="address">
                <label for="address">آدرس</label><br>
                <input type="text" id="address"  placeholder="آدرس دننه کری"><br><br>
            </div>

          
            <div id="selection">
                <label for="text"> د ړاندیز ډول</label><br>
               <input list="subjects" placeholder="انتخاب کری"><br><br>
                <datalist id="subjects">
                    <option value="کثافات">کثافات</option>
                    <option value="سرک">سرک</option>
                    <option value="رنا">رڼا</option>
                </datalist>
            </div>

               <div id="textarea">
                <legend>خپل نظر له موږ سره شریک کړی</legend>
                <textarea name="" id="" rows="10" cols="20"></textarea>
               </div>
            
           <div id="submit">
                <button type="submit" id="submit-click">ثبت کړی</button>
            </div>
            
            <div id="success" class="success-box">
                <h3>ستاسو وړاندیز ثبت شو✔</h3>
                <p>ستاسو تکت نمبر دی</p>
                <h2>#5034</h2>
                <p>مهربانی وکړی دا نمبر خوندی کړی</p>
            </div>

        </form>
    </div>
    <div class="card5">
        <img src="./images/complaint (1).png" alt="">
        <h2> ثبت شوی ړاندیزونه</h2>
        <p>1,120</p>
    </div>
    </section> -->

    <section class="form">
        <div class="formarea">
      
          <form id="complaintForm">
            <h2>د ړاندیزونو ثبتول</h2><br>
      
            <!-- Name -->
            <div>
              <label>نوم</label><br>
              <input type="text" id="name" >
            </div><br>
      
            <!-- Phone -->
            <div>
              <label>تلیفون شمیره</label><br>
              <input type="text" id="phone" >
            </div><br>
      
            <!-- Address -->
            <div>
              <label>آدرس</label><br>
              <input type="text" id="address" placeholder="آدرس دننه کری" >
            </div>
            <br>
      
            <!-- Selection -->
            <div>
              <label>د ړاندیز ډول</label><br>
              <input list="subjects" id="subjectInput" placeholder="انتخاب کړی" >
              <datalist id="subjects">
                <option value="کثافات"></option>
                <option value="سرک"></option>
                <option value="رڼا"></option>
              </datalist>
            </div><br>
      
            <!-- Message -->
            <div>
              <label>خپل نظر</label><br>
              <textarea id="message" rows="5" ></textarea>
            </div><br>
      
            <button type="submit">ثبت کړی</button>
      
          </form>
      
          <!-- Success Box -->
          <div id="successBox" style="display:none; color: black; background:rgb(10, 183, 222); padding:10px; margin-top:1em; border-radius: 8px;">
            <h3>✔ ستاسو وړاندیز په بریالیتوب ثبت شو</h3>
            <p>ستاسو ټکټ نمبر: <span id="ticketNo"></span></p>
          </div>
      
        </div>
        <div class="card5">
            <img src="{{('/complaint (1).png')}}" alt="">
            <h2> ثبت شوی ړاندیزونه</h2>
            <p>1,120</p>
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
    <script src="./subment.js"></script>
</body>
</html>