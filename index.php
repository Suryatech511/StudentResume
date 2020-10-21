<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MY RESUME</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
     <div class="borderbox">
       <div class="border">
         <div class="header">
           <h3>my resume</h3>
         </div>
         <div class="form_container">
           <div class="formbox">
             <form id="form" action="myresume.php" method="post" enctype="multipart/form-data">
               <div class="container">
                    <label for="name">full name :</label>
                    <input type="text" class="textbox" name="name" value="" id="name" placeholder="Enter your fullname name....">
               </div>
               <div class="container">
                    <label for="email">email id :</label>
                    <input type="email" class="textbox" name="email" value="" id="email" placeholder="Enter your email id....">
               </div>
               <div class="container">
                    <label for="mobile_number">mobile no :</label>
                    <input type="number" class="textbox" name="phn" value="" id="mobile_number" placeholder="Enter your mobile number....">
               </div>
               <div class="container">
                    <label for="address">address :</label>
                    <input type="text" class="textbox" name="address" value="" id="address" placeholder="Enter your address....">
               </div>
               <div class="textcontainer">
                    <label for="skills">skills :</label>
                    <!-- <input type="text" class="textbox" name="address" value="" id="skills" placeholder="Enter your skills...."> -->
                    <textarea class="textboxmsg" id="skills" name="skill" ></textarea>
               </div>
               <div class="container">
                    <label for="languages">languages :</label>
                    <input type="text" class="textbox" name="languages" value="" id="languages" placeholder="Enter languages you know....">
               </div>
               <div class="textcontainer">
                    <label for="intrests">intrests :</label>
                    <!-- <input type="text" class="textbox" name="address" value="" id="skills" placeholder="Enter your skills...."> -->
                    <textarea class="textboxmsg" id="intrests" name="intrests" ></textarea>
               </div>
               <h3 id="title">10th class details :</h3>
               <div class="container">
                    <label for="Institution">Institution/palce of education :</label>
                    <input type="text" class="textbox" name="institution" value="" id="Institution" placeholder="Enter your institution name & place....">
               </div>
               <div class="container" style="margin-top:15px;">
                    <label for="yearofpass">year of passed out :</label>
                    <input type="text" class="textbox" name="yearofpass" value="" id="yearofpass" placeholder="Enter your year of passed out....">
               </div>
               <div class="container">
                    <label for="gpa">your marks :</label>
                    <input type="text" class="textbox" name="tenthgpa" value="" id="gpa" placeholder="Enter your 10th GPA....">
               </div>
               <h3 id="title">Intermediate details :</h3>
               <div class="container">
                    <label for="Institutionint">Institution/palce of education :</label>
                    <input type="text" class="textbox" name="institutioninter" value="" id="Institutionint" placeholder="Enter your institution name & place....">
               </div>
               <div class="container" style="margin-top:15px;">
                    <label for="yearofpassint">year of passed out :</label>
                    <input type="text" class="textbox" name="yearofpassinter" value="" id="yearofpassint" placeholder="Enter your year of passed out....">
               </div>
               <div class="container">
                    <label for="gpaint">your marks :</label>
                    <input type="text" class="textbox" name="intermarks" value="" id="gpaint" placeholder="Enter your inter marks....">
               </div>
               <h3 id="title">bachelor's degree(B.tech) :</h3>
               <div class="container">
                    <label for="Institutionbtech">Institution/palce of education :</label>
                    <input type="text" class="textbox" name="institutionbtech" value="" id="Institutionbtech" placeholder="Enter your institution name & place....">
               </div>
               <div class="container" style="margin-top:15px;">
                    <label for="yearofpassbtech">year of passed out :</label>
                    <input type="text" class="textbox" name="yearofpassbtech" value="" id="yearofpassbtech" placeholder="Enter your year of passed out....">
               </div>
               <div class="container">
                    <label for="gpabtech">your marks :</label>
                    <input type="text" class="textbox" name="btechmarks" value="" id="gpabtech" placeholder="Enter your Btech GPA....">
               </div>
               <!-- work experience -->
               <h3 id="title">work experience :</h3>
               <div class="container">
                    <label for="position">tilte/position :</label>
                    <input type="text" class="textbox" name="position" value="" id="position" placeholder="Enter your position in Organisation....">
               </div>
               <div class="container">
                    <label for="workpalace">workplace/company :</label>
                    <input type="text" class="textbox" name="workpalace" value="" id="workpalace" placeholder="Enter the company name & place....">
               </div>
               <div class="container">
                    <label for="tymdur">time duration :</label>
                    <input type="text" class="textbox" name="tymdur" value="" id="tymdur" placeholder="Enter the time duration you worked....">
               </div>
               <div class="container" style="height:30px;">
                    <label for="cmpnydisc">company discription :</label>
                    <input type="text" class="textbox" name="cmpnydisc" value="" id="cmpnydisc" placeholder="Company Description(Optional if not well known)....">
               </div>
               <div class="container">
                    <label for="achievements">achievements/tasks :</label>
                    <input type="text" class="textbox" name="achievements" value="" id="achievements" placeholder="Accomplishment/Responsibility/Task....">
               </div>

             <!-- certificates -->
             <h3 id="title">certificates :</h3>
             <div class="container">
                  <label for="certificates">certificates :</label>
                  <input type="text" class="textbox" name="certificates" value="" id="certificates" placeholder="Name the certifications you have done....">
             </div>
             <!-- <div class="textcontainer">
                  <label for="description">description :</label>

                  <textarea class="textboxmsg" id="description" name="description" ></textarea>
             </div> -->
             <!-- personal projects -->
             <h3 id="title">personal projects :</h3>
             <div class="container">
                  <label for="projects">Projects :</label>
                  <input type="text" class="textbox" name="projects" value="" id="projects" placeholder="Personal projects you have done....">
             </div>
             <div class="textcontainer">
                  <label for="descriptionper">description :</label>
                  <!-- <input type="text" class="textbox" name="address" value="" id="skills" placeholder="Enter your skills...."> -->
                  <textarea class="textboxmsg" id="descriptionper" name="descriptionabtprject" ></textarea>
             </div>
             <!-- achievements -->
             <h3 id="title">achievements :</h3>
             <div class="container">
                  <label for="achievement">achievements :</label>
                  <input type="text" class="textbox" name="achievement" value="" id="achievement" placeholder="Achievements you got....">
             </div>
             <div class="textcontainer">
                  <label for="descriptionaci">description :</label>
                  <textarea class="textboxmsg" id="descriptionaci" name="descriptionachieve" ></textarea>
             </div>
              <!-- image upload -->
               <h3 id="title">upload your image :</h3>
               <div class="container">
                    <label for="file">image :</label>
                    <input type="file" class="textbox" name="imagefile" value="" id="file">
               </div>
               <input class="uploadbtn" type="submit" name="submit" id="submit" value="upload">
             </form>
           </div>
         </div>
       </div>
     </div>
  </body>
</html>
