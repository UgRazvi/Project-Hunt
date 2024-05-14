<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/bootstrapstyle.css">
  <link rel="bootstrap" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="bootjs" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

  <title>Project Hunt</title>

  <!-- CARD STYLE STARTS -->
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 40%;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
      padding: 2px 16px;
    }
  </style>
  <!-- CARD STYLE ENDS -->
</head>

<body>
  <nav class="navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <ul class="navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="std-profle.php">Student Profile</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="navlogo">
          <img src="../images/PH (1).png" alt="PH1" id="mlogo">
          <!-- Projecthunt Logo Image -->
        </div>
        <div class="signupbuton">
          <a href="signup.php"> Sign Up</a>
        </div>
        <div class="loginbuton">
          <a href="login.php">Log In</a>
        </div>
        <!-- <div class="appointment">
          <a href="appointment.php">Appointment</a>
        </div> -->
        <!--add appointment button here-->
      </div>
  </nav>
  <div class="intro">
    <img src="../images/intro bg image.jpg" alt="bgimg" id="intbg">
    <h1>Welcome To The World Of Project Hunt</h1>
    <p>A project that provide students a platform<br>To feature their skill set and their personal<br> learnings
      And all to make them professional look</p>
  </div>
  <div class="creators">

    <h1>About Creators</h1>
    <p>We are a team of four passionate students of Arravali Institute Of Technical Studies Named,Usman Gani Qureshi,Jigyasa Paliwal,Rajni Rudrapriya and Satyam Kumar
      made this platform for students to show their technical creations an enhance their knowledge,
      they completed this by a complete focus of them and sleepless nights of coding.
    </p>
    <!--add card carousel here (status - Pending) -->
    <!-- Usman : Make 4 Cards Here in a single row -->

    <div>
      <h2>USMAN QURESHi</h2>

      <div class="card">
        <img src="../images/Usman-Avatar.png" alt="UsmanAvatar" style="width:50%; border-radius:50%;">
        <div class="container">
          <h4><b>Founder & CEO</b></h4>
          <p>Full Stack Developer</p>
        </div>
      </div>
    </div>

    <!-- Complete using CSS -->
  </div>
  <!--service start-->
  <div class="services">
    <img src="../images/servicelogo.png" alt="servicelogo" id="servicelogo">
    <p>Welcome to Project Hunt, where we take pride in empowering students to turn their creative ideas
      into impactful projects. Our comprehensive range of services is designed to support and guide
      students throughout every stage of their project journey.
      Whether you're an individual student or part of an educational institution,
      we are here to help you bring your vision to life.We also show students technical
      talent and provide a platform to students to show their talent and skills.</p>

    <div class="projecten">
      <h1>1.Project Enhancement</h1>
      <p>Embark on your project journey with confidence by leveraging our expert project consultation
        services. Our team of experienced professionals will work closely with you to understand
        your goals, identify potential challenges, and provide valuable insights to ensure the success
        of your project.
      </p>
    </div>

    <div class="pdev">
      <h1>2.Project Development</h1>
      <p>Turn your ideas into reality with our project development services.
        Our skilled team is proficient in a variety of technologies and methodologies,
        ensuring that your project is not only innovative but also technically robust.
        From software development to hardware implementation, we've got you covered.
      </p>
    </div>

    <div class="desproto">
      <h1>3.Design And Prototyping</h1>
      <p>Create visually stunning and functional projects with our design and prototyping services.
        Our talented designers will collaborate with you to create user-friendly interfaces and prototypes
        that bring your ideas to life. Witness your vision taking shape with our iterative design process.
      </p>
    </div>

    <div class="techs">
      <h1>4.Technical Support</h1>
      <p>Encounter technical challenges? Our dedicated technical support team is here to assist you.
        Whether it's debugging code, troubleshooting hardware issues, or addressing any technical
        roadblocks, we're committed to ensuring your project runs smoothly.
      </p>
    </div>

    <div class="pshowcase">
      <h1>5.Project Showcase</h1>
      <p>
        Celebrate your achievements by showcasing your project on our platform.
        Gain exposure, share your success, and inspire others with your innovative work.
        Our platform is a hub for students to connect, collaborate, and showcase the incredible projects
        they've developed.
      </p>
      <a href="#" class="btnreadmore">Read More</a>
      <!--set image here-->
    </div>
  </div>
  <!--service ends-->

  <!--experience section start-->
  <div class="experience">
    <h1>Our Experiences</h1>
    <img src="../images/experiencelogo.png" alt="experiencelogo" id="explogo">
    <p>Empowering Your Success by tapping into our enterprises and experience transformative growth.
      Our platform services provide tailored solutions for your success.Connect with us to enhance
      your projects and take it to next level.</p>
    <ul>
      <li>1.Project Enhancement</li>
      <li>2.Project designs</li>
      <li>3.Technical Support</li>
      <li>4.Networking Support</li>
      <li>5.Financial Consulting for IOT based project</li>
      <li>6.Project Hosting</li>
    </ul>
    <a href="#" class="btnrdmore">Read More</a>
    <!--set image here-->
  </div>
  <!--experience ends-->

  <!--project we made start-->
  <div class="pwm">
    <h1>Projects We Made</h1>
    <video src="../images/projectwemade.mp4" alt="pwmlogo" id="pwmadelogo"></video>
    <!--add 2-3 projects in : carousel (status - Pending)  -->

    <!-- Copy the Same code for cards ........... Here  -->
  </div>

  <!--how we work start-->
  <div class="hww">
    <h1>How Do We Work?</h1>
    <img src="../images/how weworklogo.png" alt="hwwlogo" id="hwworklogo">
    <p>At Project Hunt, we believe in empowering students to showcase their creativity, innovation,
      and passion through meaningful projects. Our platform is designed with a student-centric approach,
      providing a seamless and inspiring environment for you to bring your ideas to life. Here's a glimpse
      into how we work:<br><br>
      1. Create Your Profile:
      -<br> Begin your journey by creating a personalized profile. Highlight your skills, interests, and
      achievements to let the world know what makes you unique.<br><br>
      2. Project Creation:
      -<br> Easily start a new project with our intuitive project creation tools. Define your project goals,
      share your vision, and set milestones to guide your progress.<br><br>
      3. Collaboration Made Easy:
      -<br> Collaboration is key to creativity. Connect with fellow students, mentors,
      and collaborators seamlessly. Share ideas, gather feedback, and build a network that enhances
      your project.<br><br>
      4. Showcasing Your Work:
      -<br> Your projects deserve the spotlight. Showcase your work through rich multimedia content,
      including images, videos, and documentation. Let your projects speak for themselves.<br><br>
      5. Feedback and Iteration:
      -<br> Receive constructive feedback from our community of peers, mentors, and industry professionals.
      Use this input to iterate and refine your projects, fostering continuous improvement.<br><br>
      6. Recognition and Awards:
      - <br>We celebrate your achievements! Earn badges, recognition, and awards for your outstanding
      contributions. Showcase your growing portfolio and stand out to potential collaborators and employers.<br><br>
      7. Privacy and Control:
      -<br> We prioritize your privacy. You have control over who sees your projects and how they're
      shared. Safeguard your intellectual property while still enjoying the benefits of a collaborative
      platform.<br><br>
      8. Community Support:
      -<br> Join a vibrant community of like-minded students. Engage in discussions, seek advice,
      and offer support to others. The strength of our community lies in its diversity and collective
      knowledge.<br><br>
      9. Continuous Learning:
      -<br> Education is a journey, and we're here to support yours. Access resources, workshops, and
      exclusive events to enhance your skills and stay updated on the latest trends in your field.<br><br>
      10. Future Opportunities:
      - <br>Project Hunt is not just a showcase—it's a launchpad. Unlock opportunities, connect with industry
      leaders, and explore potential collaborations that could shape your academic and professional future.
    <div class="getchancebtn">
      <a href="#">Get a chance to work with us</a>
    </div>
    </p>
  </div>
  <!--how we work end-->
  <!--footer start-->
  <div class="footer">
    <div class="list1">
      <h1>Online Services</h1>
      <ul>
        <li>Project Portfolio Creation</li><br>
        <li>Collaborative Workspace</li><br>
        <li>Privacy and Control</li><br>
        <li> Feedback and Improvement</li><br>
        <li> Resource Hub</li><br>
        <li>Networking Opportunities</li><br>
        <li>User-Friendly Interface</li><br>
      </ul>
    </div>

    <div class="list2">
      <ul>
        <h2>Privacy Policy</h2>
        <li>User Account Information</li>
        <li>Security</li>
        <li>Encryption</li>
        <li>Access Controls</li>
        <li>Data Portability</li>
      </ul>
    </div>

    <div class="list3">
      <h3>Contact Us</h3>
      <ul>
        <li>Mobile no:9876543210</li>
        <li>Instagram:ProjectHunt345</li>
        <li>Whats App:9876543210</li>
        <li>Email:abc@gmail.com</li>
      </ul>
    </div>

  </div>
</body>

</html>