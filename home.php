<?php
  include 'header.php';
?>

     <section class="homeToStyle">
         <!-- Include Identity and story -->
         <div id="generalInfo">
               <img id='myPicture' src="/website/icons/kan.jpg">
               <div id="information">
                   <h1>Student in Africa Leadership University</h1>
                   <p>I come from a very large sensitive country Guinea where I first discover
                        and start my first learning program. Nowadays, it becomes very thematics and suplex. 
                        I recorded the most interesting journey in my life that appears inspiring with the large
                         competitivity and showcase in the learning community whereby you get into groups project with
                          different people in different competition around the world. Being impacted by those systems,
                           I discovered new things that marked me since: "Never leave down your passion instead build around 
                           it to achieve your goal or dream!".
                        ALU is full of entrepreneurial talented ideology that is raised in a daily bases by the 
                        talented passionate student for the best of our society. Nothing matter than being an impactful entrepreneur in
                        the world like Fred Swanike. Growing among them with that culture and my perspective and expectation from this 
                        world and everything I learned from ALU leadership core or courses such as Entrepreneurship, Communication 
                        for Impact, project, Data, and Decision took me to another stand of connecting my passion to what I am learning. 
                        I used to design and exhibit my architectural designs during the art festival of ALU, that gives me a data scall
                          of the need and interest of people to such things. 
                        I never give up my passion but I learn how to connect them to the world of technology.</p></div>
         </div>

      <div id='furtherInfo'>
         <!-- Upload interest and impact in the society -->
         <div id="interest">
              <h1>Interest and Ethic Values</h1>
                   <p>
                   I would like to investigate my career in Computer science learning program to solve complex problems and improve human social life in society.<br>
                   I appreciate working in the team with that occasion share ideas with friends. I manage diversity tasks of my interest which lead me to work on the architectural design that
                    I was doing in my previous University KOFFI ANNAN DE GUINEE.<br>
                   I enjoyed working on the projects and in the fact being useful and impactful to the community.<br>
                   I value perseverance, resilience, ethics, empathy, passion, courage, teamwork, integrity, emotional intelligence, curiosity, initiative, persistence, grit, and adaptability, etc...
                    </p>
         </div>
         
         <div id="objectif">
              <h1>Where will I be expected </h1>
                <div id="goals">
                    <div id="commonGoal">
                       <img id="" src="/website/icons/vision.jpg">   
                        <h3>Vision</h3>   
                    </div>
                    <p>My vision is to contribute to the new model design improvement and bring
                         creativity to the better ecosystem friendly in the humanity society</p>
                </div>

                <div id="goals">
                    <div id="commonGoal">                
                        <img id="" src="/website/icons/revenue.png">  
                        <h3>Mission</h3> 
                    </div>
                    <p>To connect my learning programmes to the architectural design for high level reliability of technology in
                        modern design to conserve the nature.</p>
                </div>

                <div id="goals">
                    <div id="commonGoal">
                        <img id="" src="/website/icons/goal.png">   
                        <h3>Goals</h3>
                    </div>
                    <p>My vision is to contribute to the new model design improvement and bring
                         creativity to the better ecosystem friendly in the humanity</p>
                </div>

                <div id="goals">
                    <div id="commonGoal">
                        <img id="" src="/website/icons/service.png">   
                        <h3>Services</h3>
                    </div>
                    <p>My vision is to contribute to the new model design improvement and bring
                         creativity to the better ecosystem friendly in the humanity</p>
                </div>
         </div>


         <div id="boxPortofolio1" onclick ="expertise()"><h1 >Diversity experience your are Looking for <i style="margin:3px; margin-right:10px; float:right; color:black" class="fa fa-caret-down"></i></h1> </div>
         <div id='myCareer' >
             <!-- ALl the experience I knew before -->
             <div id="experience">
                  <img src="/website/icons/archicad.jpeg">
                  <h2>ARCHICAD</h2><br>
                  <button onclick="fetchMore1()">Read More <i style="margin:3px; float:left; color:black" class="fa fa-caret-down"></i></button>
                  <div id="more1" >
                      <p>I am a professional architectural design of plans who has is empowered using archicad during 4 years ago and assisted 
                          the class teacher to coach and make student understood better </p>
                  </div>
            </div>


             <div id="experience">
                  <img src="/website/icons/artlantis.jpg">
                  <h2>ARTLANTIS</h2><br>
                  <button onclick="fetchMore2()">Read More <i style="margin:3px; float:left; color:black" class="fa fa-caret-down"></i></button>
                  <div id="more2" >
                      <p>I use to make my design rendering with artlantis studio app, which I am familiar with. </p>
                  </div>
             </div>

             <div id="experience">
                  <img src="/website/icons/photoshop.jpg">
                  <h2>PHOTOSHOP</h2><br>
                  <button onclick="fetchMore3()">Read More <i style="margin:3px; float:left; color:black" class="fa fa-caret-down"></i></button>
                  <div id="more3" >
                      <p>I used Photoshop for the image editing of my plans that allow me to locate my design in the real area of customer land</p>
                  </div>
             </div>


             <div id="experience">
                  <img src="/website/icons/progra.png">
                  <h2>LANGUAGE java, Python, Html, css, php</h2><br>
                  <button onclick="fetchMore4()">Read More <i style="margin:3px; float:left; color:black" class="fa fa-caret-down"></i></button>
                  <div id="more4" >
                      <p>I used Photoshop for the image editing of my plans that allow me to locate my design in the real area of customer land</p>
                  </div>
             </div>

             <div id="experience">
                  <img src="/website/icons/leadership.jpg">
                  <h2>LEADERSHIP CORE</h2><br>
                  <button onclick="fetchMore5()">Read More <i style="margin:3px; float:left; color:black" class="fa fa-caret-down"></i></button>
                  <div id="more5" >
                      <p>The leadership core has some crucial skills such as data and decision, communication for impact, Entreprenership and project management that 
                          is common for most company interest.
                      </p>
                  </div>
             </div>




         </div>

         <!-- read more button -->
         <script>
          function fetchMore1(){
              if (document.getElementById('more1').style.display == "block") {
                document.getElementById('more1').style.display="none"   
              }else{
                document.getElementById('more1').style.display="block"
              }
          }

          function fetchMore2(){
              if (document.getElementById('more2').style.display == "block") {
                document.getElementById('more2').style.display="none"   
              }else{
                document.getElementById('more2').style.display="block"
              }
          }

          function fetchMore3(){
              if (document.getElementById('more3').style.display == "block") {
                document.getElementById('more3').style.display="none"   
              }else{
                document.getElementById('more3').style.display="block"
              }
          }

          function fetchMore4(){
              if (document.getElementById('more4').style.display == "block") {
                document.getElementById('more4').style.display="none"   
              }else{
                document.getElementById('more4').style.display="block"
              }
          }

          function fetchMore5(){
              if (document.getElementById('more5').style.display == "block") {
                document.getElementById('more5').style.display="none"   
              }else{
                document.getElementById('more5').style.display="block"
              }
          }

          
    </script>
    
          <div id="boxPortofolio" onclick ="portofolio()"><h1 >See More about my Career<i style="margin:3px; margin-right:10px; float:right; color:black" class="fa fa-caret-down"></i></h1> </div>

          <div id="portofolio" > 
         
              <div id="careerSkill"> 
                   <h1>African Leadership University</h1>
                       <p>September 2017 - Present  Relevant Coursework: Database; Communicating for Impact; Project  Management; Programming, Web development
                      </p>
                      <p style="color: green;">Communication  Python, Java, HTML,  CSS, Php, Javascript  Photoshop  Microsoft Word,  Excel, PowerPoint  Marketing Analysis  Web development  Data Analysis  Research  </p>
                    <h1>Tech Support Intern</h1>
                       <p>Rwanda,  November 2018 - Present</p>
                        <p>I had an opportunity to work in Africa Leadership University as an tech intern. That journey was very engaging and interesting.
                        Being working in a community of 400 students was excited and I really enjoyed that moment with one of the best team I have never had before. They likely 
                        showed me one of the best learning experience I practiced through all the year. Those core skills helped me to handle timely my job and my study time. 
                        I impactfully coordonat a multiple laptop issues with diversity problems. As my main job focus, I settle the sound systems during the event,
                        check and fix the computer lab desktops, make sure that all the electronic systems device are well made before class and also assist student 
                        with their networking issues.

                      </p>

                     <h1>Assistant in Design</h1>
                        <p>Guinea, January 2016 - March 2016</p>
                        <p>I assisted our class tutor during the class session. My job as a student coach was to support and facilitate the use of 
                          the architectural design application for the better core skill understanding among student.
                      </p>

                      <h1>Orange Sonatel Of Guinea, ​Guinea — ​Tech Intern</h1>
                        <p>Guinea, Jule 02 2017 - Aout 31 2017</p>
                        <p>My internship in the security system of Orange Sonatel empowered me and improve my ability to work in with the team. I was assign to manage and make a preventive maintenance on employer laptops.
                          During that journey, I Maintained preventive maintenance on eights agencies of sonatel  company with at least  35 CPU and 10 laptops for the security purpose.
                          

                      </p>
              </div>
         </div>


    </section>

    <script>
          function expertise(){
            if ( document.querySelector("div#myCareer").style.display == "Block") {
              document.querySelector("div#myCareer").style.display = "none";
            }
            else{
              document.querySelector("div#myCareer").style.display = "Block";
             }
          }


          function portofolio(){
            var element = document.querySelector("div#portofolio");
            // Myarray.forEach(element => {
              if ( element.style.display=="block") {
               element.style.display="none";
               }
            else{
                element.style.display="block"
             }

                   
              
            // });
           
          }
    </script> 


   

</body>

</html>
