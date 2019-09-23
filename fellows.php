<?php
  include 'header.php';

  $db = mysqli_connect("localhost", "root", "", "portofolio");
if (mysqli_connect_errno()){
    echo 'Failed to connect to MYSQLI'. mysqli_connect_errno();
}


$sql = "SELECT * FROM `fellow` "; 
$result= mysqli_query($db, $sql); 
$catFetch= mysqli_fetch_all($result, MYSQLI_ASSOC); 

$sql2 = "SELECT `fellow`.`image`, `fellow`.`fellow_id`, `comment`.`fellow_id`, `comment`.`message`, `comment`.`time` 
FROM `fellow`, `comment` where fellow.fellow_id = comment.fellow_id "; 

$result2= mysqli_query($db, $sql2); 
$catFetch2= mysqli_fetch_all($result2, MYSQLI_ASSOC); 



?>

<section id="fellowship">
 <!-- Slide image  -->
      <div id="slide">
          <img style="width:98%; height:450px; margin:1%;" src="/website/icons/inte.jpg" >
                                               
         <h1>Fellowship being Followed</h1>
         <p>Boost my profile and connect me to others</p>
      </div>

<!-- mini menu -->
      <div id="Menu">
            <ul>
                <li>followers</li>
                <li>liked</li>
                <li>comments</li>
            </ul>

      </div>
      <div id="dataRecords">
            <h1>All the records</h1>
            <!-- Comment box -->
            <div id="commentBox">
                <img id='myUse' scr="">
                <!-- this form hold user message -->
                <form action="message.php" method="post" >
                    <input style="display:none"  id="myId" style="display:block" type="text" value="" name="fellowId">
                    <input  id="comt" type="text" placeholder="comment" name="comment">
                    <input id="saveS" type="submit" name="save" value="S">
                </form>
           </div>

          <!-- After comment, user will see comment here -->
          <div id="seeAllHere">
              <?php foreach ($catFetch2 as $commentDiff) { ?>
              <!-- fetch all the div -->
                    <div id="multipleComment">
                        <img  src=<?php echo "/website/icons/".$commentDiff['image']; ?> >
                        <p><?php echo $commentDiff['message']; ?></p>
                        <h4><?php echo $commentDiff['time']; ?></h4>
                    </div>

              <?php } ?>

          </div>

      </div>

      <div id="allCommunity">
          <!-- fetch all the users here -->
          <?php foreach ($catFetch as $allfellow) { ?>

          <div id="folowers">
              <div id="biography">
                  <img class='mypict' id="<?php echo "pro".$allfellow['fellow_id']; ?>" src= <?php echo "/website/icons/".$allfellow['image']; ?> >
                  <h3><?php echo $allfellow['fullName']; ?></h3>
                  <h3><?php echo $allfellow['email']; ?></h3>
                  <h3><?php echo $allfellow['contact']; ?></h3>
              </div>

              <div id="profile">
                  <h3><?php echo $allfellow['profession']; ?></h3>
                  <p><?php echo $allfellow['career']; ?></p>
                  <p><?php echo $allfellow['address']; ?></p>
                  <p style="font-size:16px; color:green"><?php echo $allfellow['Status']; ?></p>
              </div>

              <div id="views">
                  <ul>
                        <li><button><img class='icons' id=<?php echo "like".$allfellow['fellow_id']; ?> onclick=<?php echo "like".$allfellow['fellow_id'].'()' ?> src=  "/website/icons/like.jpg"><?php echo $allfellow['liked']; ?></button></li>
                        <li><img class='icons' id=<?php echo "love".$allfellow['fellow_id']; ?> onclick=<?php echo "love".$allfellow['fellow_id'].'()' ?> src=  "/website/icons/love.jpg"><?php echo $allfellow['love']; ?></li>
                        <li><img class='icons' id= <?php echo "follow".$allfellow['fellow_id']; ?>  onclick=<?php echo "follow".$allfellow['fellow_id'].'()' ?>  src=  "/website/icons/follow.jpg"><?php echo $allfellow['folowers']; ?></li>
                        <li><img class='icons' id="comment" onclick=<?php echo "comment".$allfellow['fellow_id'].'()' ?>  src=  "/website/icons/follow.jpg"></li>
                  </ul>
                 
              </div>
              
           </div>

           


          <?php  } ?>
          
      </div>


</section>
  
<script>

          <?php foreach ($catFetch as $allcore) { ?>
                function  <?php echo "comment".$allcore['fellow_id'].'()' ?>{
                    document.getElementById('comt').style.display='block';
                    document.getElementById('myUse').src = "<?php echo '/website/icons/'.$allcore['image']; ?>";
                    document.getElementById('myId').value = "<?php echo $allcore['fellow_id']; ?>";
                }


                function  <?php echo "follow".$allcore['fellow_id'].'()' ?>{
                    document.getElementById('<?php echo "follow".$allcore["fellow_id"]; ?>').src="/website/icons/love.jpg";

                }





                function  <?php echo "like".$allcore['fellow_id'].'()' ?>{
               
                 '<?php
                    $count = $allcore["liked"] + 1;
                    $id= $allcore["fellow_id"];
                    $myInser = "UPDATE `fellow` SET `fellow`.`liked` = $count  where fellow.`fellow_id` = '$id' "; 
                    $theRw= mysqli_query($db, $myInser); 
                    // $catFetch0= mysqli_fetch_all($theRw, MYSQLI_ASSOC);
                  ?>'
                  alert("<?php echo $count; ?>");
                    document.getElementById('<?php echo "like".$allcore["fellow_id"]; ?>').src="/website/icons/love.jpg";
                    return;
                }
   



                function  <?php echo "love".$allcore['fellow_id'].'()' ?>{
                    document.getElementById('<?php echo "love".$allcore["fellow_id"]; ?>').src="/website/icons/like.jpg";
                }












            <?php } ?>
</script>


</body>
</html>