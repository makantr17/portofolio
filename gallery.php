<?php
  include 'header.php';

$db = mysqli_connect("localhost", "root", "", "portofolio");
if (mysqli_connect_errno()){
    echo 'Failed to connect to MYSQLI'. mysqli_connect_errno();
}
$sql = "SELECT distinct (`category`) FROM `gallerycollection` "; 
$result= mysqli_query($db, $sql); 
$catFetch= mysqli_fetch_all($result, MYSQLI_ASSOC); 

$sql1 = "SELECT * FROM `gallerycollection` "; 
$result1= mysqli_query($db, $sql1); 
$catFetch1= mysqli_fetch_all($result1, MYSQLI_ASSOC); 
?>

     <section id="gallerySection">
         
         <div id="categories"> 
              <button onclick="fetchAll()">Fetch all</button>
           
              <ul> 
                <!-- loop and fetch all the categories -->
                <?php  foreach ($catFetch as $categories) {?>
                  <li>
                      <button onclick="<?php echo $categories['category']."()"; ?>"> 
                        <img src="/website/icons/product.jpg" style="width:20px; height:20px; float:left; margin-right:10px;box-shadow:2px 1px 1px 1px rgba(187, 187, 187, 0.699); border-radius:20px">                 
                         <?php echo $categories['category']; ?> 
                      </button>
                      <div id="<?php echo $categories['category']; ?>" class="takle"  >
                            <!-- Start by putting them below -->
                            <?php foreach ($catFetch1 as $galProduct1) {
                                 $ex = explode(',', $galProduct1['more']);
                                 $exFace = explode(',', $galProduct1['face']);
                              
                                if ($galProduct1['category'] == $categories['category']) { 

                                    include "galProduct.php";
                                 } } ?>
                      </div>
                  </li>
                  <?php } ?>
              </ul>
         </div>

        
         <div id="grabit"> </div>
         <div id="allhere">
            <?php foreach ($catFetch1 as $galProduct1) {
                   $ex = explode(',', $galProduct1['more']);
                   $exFace = explode(',', $galProduct1['face']);

                   include "galProduct.php";  
                  }
              ?>
         </div>

         <!-- Cover when pop up -->
          <div id="cover">
             <div id="takeit"></div>
          </div>
          
    </section>



    <script>
      document.getElementById('grabit').innerHTML = document.getElementById('allhere').innerHTML;

      function fetchAll(){
          document.getElementById('allhere').innerHTML = document.getElementById('grabit').innerHTML;
      }


      <?php
      foreach ($catFetch1 as $conf) {
        ?>
       function <?php echo "function".$conf['id']."()" ?> {
          document.getElementById('takeit').innerHTML = document.getElementById('<?php echo "cat".$conf['id']; ?>').innerHTML;
          document.getElementById("cover").style.display="block";
       }


      function <?php echo "groupform".$conf['id']."()" ?> {
          document.getElementById("takeit").style.display="block";
          document.getElementById("cover").style.display="none";
       }

      <?php } ?>



    //   fetch all the sepecific product
      <?php 
              foreach($catFetch as $specific){ 
        ?>
          function <?php echo $specific['category']."()" ?>{
      // alert("<?php echo $specific['category']; ?>");
                document.getElementById('allhere').innerHTML = "<div></div>";
                document.getElementById('allhere').innerHTML =   document.getElementById("<?php echo $specific['category']; ?>").innerHTML;   
          } 
            
      <?php } ?>
 
    </script>
 
</body>
</html>