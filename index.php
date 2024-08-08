<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>إيدن إسكايبس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                    <img src="./photo/logo.jpg" alt="Logo" width="150" height="120">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#home" data-en="Home" data-ar="الرئيسية">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about" data-en="About Us" data-ar="من نحن">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#destinations" data-en="Destinations" data-ar="الوجهات">الوجهات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tours" data-en="Tours & Packages" data-ar="الجولات والباقات">الجولات والباقات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials" data-en="Testimonials" data-ar="آراء العملاء">آراء العملاء</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" data-en="Contact Us" data-ar="اتصل بنا">اتصل بنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#register" data-en="Register" data-ar="تسجيل">تسجيل</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <button class="btn btn-outline-light me-2" onclick="switchLanguage('en')">English</button>
                        <button class="btn btn-outline-light" onclick="switchLanguage('ar')">عربي</button>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section id="home">
        <div class="container">
            <h2 data-en="Welcome to Eden Escapes" data-ar="مرحبا بكم في إيدن إسكايبس">مرحبا بكم في إيدن إسكايبس</h2>
            <p data-en="Your gateway to paradise. Enjoy a 20% discount on all tours for September!" data-ar="بوابتك إلى الجنة. استمتع بخصم 20% على جميع الجولات لشهر سبتمبر!">بوابتك إلى الجنة. استمتع بخصم 20% على جميع الجولات لشهر سبتمبر!</p>
            <img src="./photo/welcome_image.webp" alt="Scenic view">
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2 data-en="About Us" data-ar="من نحن">من نحن</h2>
            <p data-en="Eden Escapes is a premier travel agency offering unforgettable journeys to the most beautiful destinations. Our mission is to provide exceptional travel experiences tailored to your preferences." data-ar="إيدن إسكايبس هي وكالة سفر رائدة تقدم رحلات لا تُنسى إلى أجمل الوجهات. مهمتنا هي توفير تجارب سفر استثنائية مخصصة لتلبية تفضيلاتك.">إيدن إسكايبس هي وكالة سفر رائدة تقدم رحلات لا تُنسى إلى أجمل الوجهات. مهمتنا هي توفير تجارب سفر استثنائية مخصصة لتلبية تفضيلاتك.</p>
            <img src="./photo/about_us.webp" alt="About us image">
        </div>
    </section>

    <section id="destinations">
        <div class="container">
            <h2 data-en="Destinations" data-ar="الوجهات">الوجهات</h2>
            <p data-en="Explore our handpicked destinations and discover the beauty of the world." data-ar="استكشف وجهاتنا المختارة بعناية واكتشف جمال العالم.">استكشف وجهاتنا المختارة بعناية واكتشف جمال العالم.</p>
            <div class="grid">
                <div class="grid-item">
                    <img src="./photo/Prizren_City.jpeg" alt="Destination 1">
                    <h3 data-en="Prizren City" data-ar="مدينة بريزرين">مدينة بريزرين</h3>
                    <p data-en="Discover the historic and cultural beauty of Prizren." data-ar="اكتشف الجمال التاريخي والثقافي لبريزرين.">اكتشف الجمال التاريخي والثقافي لبريزرين.</p>
                </div>
                <div class="grid-item">
                    <img src="./photo/saranda.jpg" alt="Destination 2">
                    <h3 data-en="Albanian Beaches" data-ar="شواطئ ألبانيا">شواطئ ألبانيا</h3>
                    <p data-en="Relax on the pristine beaches of Albania." data-ar="استرخِ على الشواطئ النقية في ألبانيا.">استرخِ على الشواطئ النقية في ألبانيا.</p>
                </div>
                <!-- Add more grid items as needed -->
            </div>
        </div>
    </section>

    <section id="tours">
        <div class="container">
            <h2 data-en="Tours & Packages" data-ar="الجولات والباقات">الجولات والباقات</h2>
            <p data-en="Choose from our exclusive tours and packages designed to give you the best travel experience." data-ar="اختر من بين جولاتنا وباقاتنا الحصرية المصممة لتقديم أفضل تجربة سفر لك.">اختر من بين جولاتنا وباقاتنا الحصرية المصممة لتقديم أفضل تجربة سفر لك.</p>
            <div class="grid">
                <div class="grid-item">
                    <img src="./photo/kosovo_albania.jpeg" alt="Tour 1">
                    <h3 data-en="All-Inclusive Kosovo and Albania Tour" data-ar="جولة شاملة في كوسوفو وألبانيا">جولة شاملة في كوسوفو وألبانيا</h3>
                    <p data-en="Includes: Airport pick-up and drop-off, 3 nights in Kosovo, 3 nights in Albania, daily breakfast, guided tours, and visits to mosques and cultural sites. Price: Starting from $999 per person." data-ar="تشمل: النقل من وإلى المطار، 3 ليالٍ في كوسوفو، 3 ليالٍ في ألبانيا، إفطار يومي، جولات مرشدة، وزيارات للمساجد والمواقع الثقافية. السعر: ابتداءً من 999 دولار للشخص الواحد.">تشمل: النقل من وإلى المطار، 3 ليالٍ في كوسوفو، 3 ليالٍ في ألبانيا، إفطار يومي، جولات مرشدة، وزيارات للمساجد والمواقع الثقافية. السعر: ابتداءً من 999 دولار للشخص الواحد.</p>
                </div>
                <div class="grid-item">
                    <img src="./photo/kosovo_culture.jpeg" alt="Tour 2">
                    <h3 data-en="Kosovo Culture and Cuisine Experience" data-ar="تجربة ثقافة وطعام كوسوفو">تجربة ثقافة وطعام كوسوفو</h3>
                    <p data-en="Includes: 4 nights in Kosovo, all meals included, guided city tours, cooking classes, and visits to local markets. Price: Starting from $799 per person." data-ar="تشمل: 4 ليالٍ في كوسوفو، جميع الوجبات مشمولة، جولات مدينة مرشدة، دروس طبخ، وزيارات للأسواق المحلية. السعر: ابتداءً من 799 دولار للشخص الواحد.">تشمل: 4 ليالٍ في كوسوفو، جميع الوجبات مشمولة، جولات مدينة مرشدة، دروس طبخ، وزيارات للأسواق المحلية. السعر: ابتداءً من 799 دولار للشخص الواحد.</p>
                </div>
                <div class="grid-item">
                    <img src="./photo/beach_gateway.jpg" alt="Tour 3">
                    <h3 data-en="Beach Getaway in Albania" data-ar="إجازة على الشاطئ في ألبانيا">إجازة على الشاطئ في ألبانيا</h3>
                    <p data-en="Includes: 5 nights in a beachside hotel in Albania, daily breakfast and dinner, beach activities, and a day trip to nearby attractions. Price: Starting from $899 per person." data-ar="تشمل: 5 ليالٍ في فندق على الشاطئ في ألبانيا، إفطار وعشاء يومي، أنشطة شاطئية، ورحلة نهارية إلى المعالم القريبة. السعر: ابتداءً من 899 دولار للشخص الواحد.">تشمل: 5 ليالٍ في فندق على الشاطئ في ألبانيا، إفطار وعشاء يومي، أنشطة شاطئية، ورحلة نهارية إلى المعالم القريبة. السعر: ابتداءً من 899 دولار للشخص الواحد.</p>
                </div>
                <!-- Add more grid items as needed -->
            </div>
        </div>
    </section>

    <section id="flyer">
        <div class="flyer">
            <h1 data-en="Exclusive Offer: One Week in Kosovo & Albania" data-ar="عرض حصري: أسبوع واحد في كوسوفو وألبانيا">عرض حصري: أسبوع واحد في كوسوفو وألبانيا</h1>
            <img src="./photo/flyer.webp" alt="Flyer image">
            <h2 data-en="Starting from 1200 Euro per person" data-ar="ابتداءً من 1200 يورو للشخص الواحد">ابتداءً من 1200 يورو للشخص الواحد</h2>
            <p data-en="Enjoy a 7-day trip that starts with a pickup at Prishtina Airport, Kosovo. Spend 3 days exploring the beautiful locations of Kosovo, including Prizren, Malet e Sharrit, Prevalle, Prizren city, and other cities in Kosovo. <br><br>
                The next 4 days will be in Albania, where you will visit the capital city Tirana, enjoy a city tour, and stay 1 night in Tirana. After that, you will travel to Vlora and Himara, followed by a stay at a hotel in Saranda. From the hotel, visit the historical sites of Butrindi and Gjirokastra, then return to the hotel in Saranda. <br><br>
                The trip concludes with a return flight from Tirana Airport."
                data-ar="استمتع برحلة لمدة 7 أيام تبدأ من الاستقبال في مطار بريشتينا، كوسوفو. اقضِ 3 أيام في استكشاف المواقع الجميلة في كوسوفو، بما في ذلك بريزرين، مالي شاريت، بريفالي، مدينة بريزرين، ومدن أخرى في كوسوفو. <br><br>
                ستكون الأيام الأربعة التالية في ألبانيا، حيث ستزور العاصمة تيرانا، تستمتع بجولة في المدينة، وتقضي ليلة واحدة في تيرانا. بعد ذلك، ستسافر إلى فلورا وهيمارا، يتبعها إقامة في فندق في ساراندا. من الفندق، قم بزيارة المواقع التاريخية في بوترينت وجيروكاسترا، ثم العودة إلى الفندق في ساراندا. <br><br>
                تنتهي الرحلة برحلة عودة من مطار تيرانا.">استمتع برحلة لمدة 7 أيام تبدأ من الاستقبال في مطار بريشتينا، كوسوفو. اقضِ 3 أيام في استكشاف المواقع الجميلة في كوسوفو، بما في ذلك بريزرين، مالي شاريت، بريفالي، مدينة بريزرين، ومدن أخرى في كوسوفو. <br><br>
                ستكون الأيام الأربعة التالية في ألبانيا، حيث ستزور العاصمة تيرانا، تستمتع بجولة في المدينة، وتقضي ليلة واحدة في تيرانا. بعد ذلك، ستسافر إلى فلورا وهيمارا، يتبعها إقامة في فندق في ساراندا. من الفندق، قم بزيارة المواقع التاريخية في بوترينت وجيروكاسترا، ثم العودة إلى الفندق في ساراندا. <br><br>
                تنتهي الرحلة برحلة عودة من مطار تيرانا.
            </p>
            <div class="price-box" data-en="Price per person starts from 1200 Euro" data-ar="السعر للشخص الواحد يبدأ من 1200 يورو">السعر للشخص الواحد يبدأ من 1200 يورو</div>
        </div>
    </section>
    <section id="testimonials">
        <div class="container">
            <h2 data-en="Testimonials" data-ar="آراء العملاء">آراء العملاء</h2>
            <p data-en="Hear from our happy travelers." data-ar="استمع إلى آراء مسافرينا السعداء.">استمع إلى آراء مسافرينا السعداء.</p>
            <div class="testimonials-slider">
                <div class="testimonials">
                    <div class="testimonial">
                        <p data-en="&quot;Eden Escapes provided us with an unforgettable experience. The destinations were beautiful and the service was exceptional!&quot; - Aisha R." data-ar="&quot;قدمت لنا إيدن إسكايبس تجربة لا تُنسى. كانت الوجهات جميلة والخدمة كانت استثنائية!&quot; - عائشة ر.">&quot;قدمت لنا إيدن إسكايبس تجربة لا تُنسى. كانت الوجهات جميلة والخدمة كانت استثنائية!&quot; - عائشة ر.</p>
                    </div>
                    <div class="testimonial">
                        <p data-en="&quot;Highly recommend Eden Escapes! Their tours are well-organized and the guides are very knowledgeable.&quot; - Omar S." data-ar="&quot;أنصح بشدة بإيدن إسكايبس! جولاتهم منظمة بشكل جيد والمرشدون لديهم معرفة واسعة.&quot; - عمر س.">&quot;أنصح بشدة بإيدن إسكايبس! جولاتهم منظمة بشكل جيد والمرشدون لديهم معرفة واسعة.&quot; - عمر س.</p>
                    </div>
                    <!-- Add more testimonials as needed -->
                </div>
            </div>
            <div class="slider-controls">
                <span class="dot" data-index="0"></span>
                <span class="dot" data-index="1"></span>
                <!-- Add more dots as needed for each testimonial -->
            </div>
        </div>
    </section>

    <section id="forms" class="py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card shadow p-4 bg-dark text-light">
                        <h2 class="mb-4" data-en="Contact Us" data-ar="اتصل بنا">اتصل بنا</h2>
                        <form id="contact-form" action="send_email.php" method="post">
                            <input type="hidden" name="form_type" value="contact">
                            <div class="form-floating mb-3">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                <label for="name" data-en="Name:" data-ar="الاسم:">الاسم:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                <label for="email" data-en="Email:" data-ar="البريد الإلكتروني:">البريد الإلكتروني:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea id="message" name="message" class="form-control" placeholder="Message" style="height: 150px;" required></textarea>
                                <label for="message" data-en="Message:" data-ar="الرسالة:">الرسالة:</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" data-en="Send" data-ar="إرسال">إرسال</button>
                            <div id="contact-response"></div>
                        </form>
                    </div>
                </div>
                <script>
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    fetch('send_email.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('contact-response').textContent = data.message;
        if (data.status === 'success') {
            document.getElementById('contact-response').style.color = 'green';
        } else {
            document.getElementById('contact-response').style.color = 'red';
        }
    })
    .catch(error => console.error('Error:', error));
});
</script>
                <div class="col-md-6">
                    <div class="card shadow p-3 bg-dark text-light pb-5">
                        <h2 class="mb-4" data-en="Make a Trip" data-ar="قم برحلة">قم برحلة</h2>
                        <form id="trip-form" action="send_email.php" method="post">
                            <input type="hidden" name="form_type" value="trip">
                            <div class="form-floating mb-3">
                                <input type="text" id="trip-name" name="trip-name" class="form-control" placeholder="Full Name" required>
                                <label for="trip-name" data-en="Full Name:" data-ar="الاسم:">الاسم:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone" required>
                                <label for="phone" data-en="Phone:" data-ar="الهاتف:">الهاتف:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" id="trip-email" name="trip-email" class="form-control" placeholder="Email" required>
                                <label for="trip-email" data-en="Email:" data-ar="البريد الإلكتروني:">البريد الإلكتروني:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" id="planned-date" name="planned-date" class="form-control" placeholder="Planned Date" required>
                                <label for="planned-date" data-en="Planned Date:" data-ar="التاريخ المخطط:">التاريخ المخطط:</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" data-en="Send" data-ar="تسجيل">تسجيل</button>
                            <div id="trip-response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
document.getElementById('trip-form').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    fetch('send_email.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('trip-response').textContent = data.message;
        if (data.status === 'success') {
            document.getElementById('trip-response').style.color = 'green';
        } else {
            document.getElementById('trip-response').style.color = 'red';
        }
    })
    .catch(error => console.error('Error:', error));
});
</script>

    <footer>
        <div class="container">
            <p data-en="&copy; 2024 Eden Escapes. All rights reserved." data-ar="&copy; 2024 إيدن إسكايبس. جميع الحقوق محفوظة.">&copy; 2024 إيدن إسكايبس. جميع الحقوق محفوظة.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
        function switchLanguage(language) {
            const elements = document.querySelectorAll('[data-en], [data-ar]');
            elements.forEach(element => {
                if (language === 'en') {
                    element.innerHTML = element.getAttribute('data-en');
                } else {
                    element.innerHTML = element.getAttribute('data-ar');
                }
            });
        }
    document.addEventListener('DOMContentLoaded', () => {
        const testimonials = document.querySelector('.testimonials');
        const testimonialItems = document.querySelectorAll('.testimonial');
        const dots = document.querySelectorAll('.slider-controls .dot');
        let currentIndex = 0;

        function showTestimonial(index) {
            testimonials.style.transform = `translateX(${-index * 100}%)`;
            dots.forEach(dot => dot.classList.remove('active'));
            dots[index].classList.add('active');
        }

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = dot.getAttribute('data-index');
                currentIndex = parseInt(index);
                showTestimonial(currentIndex);
            });
        });

        // Initialize the first dot as active
        showTestimonial(currentIndex);

        // Optionally, you can set an interval to automatically move to the next testimonial
        setInterval(() => {
            currentIndex = (currentIndex + 1) % testimonialItems.length;
            showTestimonial(currentIndex);
        }, 5000); // Change the interval time as needed
    });
</script>
</body>
</html>
