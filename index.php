<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets\scss\styles.scss">

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    <title>sk</title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header bg-gray-200">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">SATHISHKUMAR K</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">SATHISHKUMAR</span><br> FULL STACK
                    DEVELOPER</h1>

                <a href="assets/SATHISHKUMAR K.docx" download class="button">RESUME DOWNLOAD  <i class="fa-solid fa-cloud-arrow-down px-2 text-green-400"></i></a>

            </div>

            <div class="home__social">
                <a href="https://www.linkedin.com/in/sathish-kumar-76999129a/" class="home__social-icon text-blue-600">
                    <i class='bx bxl-linkedin'></i>
                </a>
                <a href="https://www.instagram.com/sathish_r15_zara?igsh=ejJ2ZXdqYmRrdW44" class="home__social-icon text-pink-500">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="https://github.com/sathish0205" class="home__social-icon text-gray-800">
                    <i class='bx bxl-github'></i>
                </a>
                <a href="mailto:kksathishkumar007@gmail.com" class="home__social-icon text-red-500">
                    <i class="fa-regular fa-envelope"></i>
                </a>
            </div>

            <div class="home__img mr-20 md:mr-0  top-96 md:top-44  ">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path
                            d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                    </mask>
                    <g mask="url(#mask0)">
                        <path
                            d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                        <image class="home__blob-img " x="50" y="60" href="assets\img\sathishbg.png">
                    </g>
                </svg>
            </div>
        </section>

        <!--===== ABOUT =====-->
        <h2 class="section-title">About</h2>
        <section class="about section grid grid-cols-1 md:grid-cols-2 gap-6 px-6 md:px-20" id="about">
    <!-- Experience section -->
    <div class="education-box">
        <div class="education-content">
            <div class="content">
                <h3 class="about__text text-2xl text-red-500">Experience-1</h3>
                <ul class="">
                    <li class="about__text">LEAD INTEGRATED BUSINESS SOLUTION PVT. (7-MONTHS)</li>
                    <li class="about__text">Front-end & Back-end Technologies: HTML, CSS, JavaScript, PHP</li>
                    <li class="about__text">Frameworks: Angular, Bootstrap, Tailwind CSS</li>
                    <li class="about__text">Database Management: MySQL, MongoDB</li>
                    <li class="about__text">UI/UX Design: Responsive and scalable web applications using Tailwind CSS</li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- About section -->
    <div class="about__container bd-grid">
        <div>
            <h2 class="about__subtitle">I am Sathishkumar</h2>
            <p class="about__text">A passionate full-stack developer experienced in building web applications using PHP, Angular, React Native, and more.</p>
            <p class="about__text">Sathishkumar K is a Full Stack Developer with a comprehensive skill set in both frontend and backend technologies. He has a strong foundation in web development, including responsive design, server-side integration, and collaboration with teams. He holds a B.Sc. and an M.Sc. in Physics and has completed certifications in Java Full Stack Development, Computer Office Automation, and more.</p>
        </div>
    </div>
</section>


        <!--===== SKILLS =====-->
        <h2 class="section-title">Skills</h2>
        <section class="skills section grid grid-cols-1 sm:grid-cols-2 gap-6 px-20" id="skills">
        
            <!-- Left Column - Programming Languages & Frameworks -->
            <div>
                <h2 class="skills__subtitle">Programming Languages & Frameworks</h2>
        
                <div class="skills__data">
                    <div class="skills__names">
                        <i class='bx bxl-angular skills__icon'></i>
                        <span class="skills__name">Angular</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">60%</span></div>
                    <div class="skills__bar skills__angular bg-yellow-500"></div>
                </div>
        
                <div class="skills__data">
                    <div class="skills__names">
                    <img class="size-8"  src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" />
                     <span class="skills__name px-4 ">PHP</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">75%</span></div>
                    <div class="skills__bar skills__php bg-green-500"></div>
                </div>
        
                <div class="skills__data">
                    <div class="skills__names">
                        <i class='bx bxl-react skills__icon'></i>
                        <span class="skills__name">React Js</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">60%</span></div>
                    <div class="skills__bar skills__native bg-green-600"></div>
                </div>
        
                <div class="skills__data">
                    <div class="skills__names">
                    <img class="size-8" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg" />
                    <span class="skills__name px-4">Core Java</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">45%</span></div>
                    <div class="skills__bar skills__java bg-red-300"></div>
                </div>
        
                <div class="skills__data">
                    <div class="skills__names">
                        <i class='bx bxl-javascript skills__icon'></i>
                        <span class="skills__name">JavaScript</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">55%</span></div>
                    <div class="skills__bar skills__script bg-teal-300"></div>
                </div>
        
                <div class="skills__data"> 
                    <div class="skills__names">      
                   <img  class="size-8" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/photoshop/photoshop-original.svg" />
                        <span class="skills__name px-4">Photoshop</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">45%</span></div>
                    <div class="skills__bar skills__photoshop bg-blue-400"></div>
                </div>
            </div>
        
            <!-- Right Column - Databases, Web Technologies, Design & Other Tools -->
            <div>
                <h2 class="skills__subtitle">Databases, Web Technologies & Tools</h2>
        
                <div class="skills__data">
                    <div class="skills__names">
                    <img class="size-8" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" />
                        <span class="skills__name px-4">MySQL</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">80%</span></div>
                    <div class="skills__bar skills__mysql bg-green-300"></div>
                </div>
        
                <div class="skills__data">
                    <div class="skills__names">
            <img class="size-8" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mongodb/mongodb-original.svg" />
                        <span class="skills__name px-4">MongoDB</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">45%</span></div>
                    <div class="skills__bar skills__mongo bg-pink-400"></div>
                </div>
        
                <div class="skills__data">
                    <div class="skills__names">
                        <i class='bx bxl-html5 skills__icon'></i>
                        <span class="skills__name">HTML5</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">100%</span></div>
                    <div class="skills__bar skills__html5 bg-green-700"></div>
                </div>
        
                <div class="skills__data">
                    <div class="skills__names">
                        <i class='bx bxl-css3 skills__icon'></i>
                        <span class="skills__name">CSS3</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">98%</span></div>
                    <div class="skills__bar skills__css bg-green-600"></div>
                </div>
        
                <div class="skills__data">
                    <div class="skills__names">          
            <img class="size-8" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/canva/canva-original.svg" />
                        <span class="skills__name px-4">Canva</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">95%</span></div>
                    <div class="skills__bar skills__canva bg-green-500"></div>
                </div>
        
                <div class="skills__data">
                    <div class="skills__names">
                        <i class='bx bxl-figma skills__icon'></i>
                        <span class="skills__name">Figma</span>
                    </div>
                    <div class="skills__bar"></div>
                    <div><span class="skills__percentage">65%</span></div>
                    <div class="skills__bar skills__figma bg-pink-500"></div>
                </div>
            </div>
        </section>
        

        
        <!--===== EDUCATION  =====-->
        <h2 class="section-title">Education & Certification</h2>

<section class="education-certification section grid grid-cols-1 sm:grid-cols-2 gap-6 " id="education-certification">
    
    <!-- Education Table -->
    <div class="education">
        <h2 class="education__subtitle text-xl font-semibold mb-4">Education:</h2>
        <div class="overflow-x-auto skills__data">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md text-nowrap text-sm">
                <thead class="bg-teal-950 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">Level</th>
                        <th class="px-6 py-3 text-left">Institution</th>
                        <th class="px-6 py-3 text-left">Year</th>
                        <th class="px-6 py-3 text-left">Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-200">
                        <td class="px-6 py-3">10th Grade</td>
                        <td class="px-6 py-3">Sacred Heart High School, Thurinjpoondi</td>
                        <td class="px-6 py-3">2016</td>
                        <td class="px-6 py-3">78.80%</td>
                    </tr>
                    <tr class="border-t border-gray-200">
                        <td class="px-6 py-3">12th Grade</td>
                        <td class="px-6 py-3">Government High Secondary School, Melmalaiyanur</td>
                        <td class="px-6 py-3">2018</td>
                        <td class="px-6 py-3">60.90%</td>
                    </tr>
                    <tr class="border-t border-gray-200">
                        <td class="px-6 py-3">B.Sc.</td>
                        <td class="px-6 py-3">Sanghamam Arts and Science College, Annamangalam</td>
                        <td class="px-6 py-3">2021</td>
                        <td class="px-6 py-3">79.90% (Distinction)</td>
                    </tr>
                    <tr class="border-t border-gray-200">
                        <td class="px-6 py-3">M.Sc.</td>
                        <td class="px-6 py-3">Thiru A. Gondhasamy Arts College, Thindivanam</td>
                        <td class="px-6 py-3">2023</td>
                        <td class="px-6 py-3">78%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Certification Table -->
    <div class="certification">
        <h2 class="education__subtitle text-xl font-semibold mb-4">Certification:</h2>
        <div class="overflow-x-auto skills__data">
            <table class="w-full bg-white border border-gray-200 rounded-lg shadow-md text-nowrap text-sm">
                <thead class="bg-teal-950 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">Certification</th>
                        <th class="px-6 py-3 text-left">Institution</th>
                        <th class="px-6 py-3 text-left">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-200">
                        <td class="px-6 py-3">COA - Computer Office Automation</td>
                        <td class="px-6 py-3">B.Sc. Computer Center</td>
                        <td class="px-6 py-3">Aug 2020</td>
                    </tr>
                    <tr class="border-t border-gray-200">
                        <td class="px-6 py-3">HDCA - Honour Diploma in Computer Application</td>
                        <td class="px-6 py-3">B.Sc. Computer Center</td>
                        <td class="px-6 py-3">Jul 2019</td>
                    </tr>
                    <tr class="border-t border-gray-200">
                        <td class="px-6 py-3">Typing English Junior Level</td>
                        <td class="px-6 py-3">B.Sc. Computer Center</td>
                        <td class="px-6 py-3">Aug 2020</td>
                    </tr>
                    <tr class="border-t border-gray-200">
                        <td class="px-6 py-3">Java Full Stack Developer</td>
                        <td class="px-6 py-3">Besant Technology</td>
                        <td class="px-6 py-3">Mar 2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>




        <!--===== WORK =====-->
        <section class="work section py-12" id="work">
    <h2 class="section-title text-3xl font-bold text-center mb-10">Live Project Work</h2>

    <div class="work__container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-5 md:px-20">
        <!-- Image Projects -->
        <a href="#" class="work__img group">
            <img src="assets/img/work1.png" alt="Project 1" class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
        </a>
        <a href="#" class="work__img group">
            <img src="assets/img/work2.png" alt="Project 2" class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
        </a>
        <a href="#" class="work__img group">
            <img src="assets/img/work3.png" alt="Project 3" class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
        </a>
        <a href="#" class="work__img group">
            <img src="assets/img/work4.png" alt="Project 4" class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
        </a>
        <a href="#" class="work__img group">
            <img src="assets/img/work5.png" alt="Project 5" class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
        </a>
        <a href="#" class="work__img group">
            <img src="assets/img/work6.png" alt="Project 6" class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
        </a>
        <a href="#" class="work__img group">
            <img src="assets/img/face1.png" alt="Project 7" class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
        </a>
        <a href="#" class="work__img group">
            <img src="assets/img/face2.png" alt="Project 8" class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
        </a>
        <a href="#" class="work__img group">
            <img src="assets/img/face3.png" alt="Project 9" class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
        </a>
        <a href="#" class="work__img group">
            <img src="assets/img/face4.png" alt="Project 10" class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
        </a>

        <!-- Video Project -->
        <a href="#" class="work__img group relative">
            <video class="rounded-lg shadow-lg transition-transform transform group-hover:scale-105" src="assets/img/AI.mp4" controls></video>
        </a>
    </div>
</section>

        

       <!--===== CONTACT =====-->
<section class="contact section" id="contact">
    <h2 class="section-title">Contact</h2>

    <div class="contact__container bd-grid">
    <form action="index.php" method="POST" class="contact__form">
    <div class="relative">
        <i class="fas fa-user absolute left-3 top-3 text-gray-500 z-10"></i>
        <input type="text" name="name" placeholder="Name" class="contact__input pl-10" required>
    </div>
    
    <div class="relative">
        <i class="fas fa-envelope absolute left-3 top-3 text-gray-500 z-10"></i>
        <input type="email" name="email" placeholder="Email" class="contact__input pl-10" required>
    </div>
    
    <div class="relative">
        <i class="fas fa-tag absolute left-3 top-3 text-gray-500 z-10"></i>
        <input type="text" name="subject" placeholder="Subject" class="contact__input pl-10" required>
    </div>
    
    <div class="relative">
        <i class="fas fa-comment-dots absolute left-3 top-3 text-gray-500 z-10"></i>
        <textarea name="message" cols="0" rows="10" placeholder="Message" class="contact__input pl-10" required></textarea>
    </div>
    
    <input type="submit" value="Send" class="contact__button button">
</form>


    </div>
</section>

    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">Sathishkumar K</p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter'></i></a>
        </div>
        <p class="footer__copy">&#169; 2024 Sathishkumar K. All rights reserved</p>
    </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
</body>

</html>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $fullName = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $emailSubject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main SMTP server
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'kksathishkumar007@gmail.com';      // SMTP username (corrected)
        $mail->Password = 'eyisbwtieoahwfge';                 // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // Enable TLS encryption
        $mail->Port = 587;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $fullName);                    // Sender's email and name
        $mail->addAddress('kksathishkumar007@gmail.com');     // Recipient's email (corrected)
        $mail->addReplyTo($email, $fullName);                 // Reply-to email and name

        // Email content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $emailSubject;                       // Email subject
        $mail->Body    = "<p><strong>Full Name:</strong> $fullName</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong></p>
                          <p>$message</p>";

        // Send the email
        $mail->send();
        echo "<script>alert('Message sent successfully!');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: " . addslashes($mail->ErrorInfo) . "');</script>";
    }
} else {
    echo "";
}
?>
