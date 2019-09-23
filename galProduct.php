  <div id="galProduct">

                                        <div class="pop" id='<?php echo "cat".$galProduct1['id']; ?>' >
                                    <!-- Div containing further information -->
                                        <div id="further">
                                            <span  onclick='<?php echo "groupform".$galProduct1['id']."()" ?>' class='close' title='Close PopUp'>&times;</span>
                                            <img  src=<?php echo "/website/icons/makant.jpg"; ?> >
                                            <h1>Mamady Kante</h1>
                                            <p style="font-weight:bold; color:green">
                                               <img style="width:15px; height:15px; margin:3px;" src='<?php echo "/website/icons/product.jpg"; ?>' >
                                               <?php echo $galProduct1['category']."<br>".$galProduct1['categoryName'] ?>
                                            </p>
                                            <p> 
                                                <?php echo $galProduct1['details'] ?>
                                            </p>
                                        </div>
                                        <!-- Div containing images -->
                                        <div id="moreOfImage" >
                                            <?php 
                                            $counter=0;
                                            foreach ($ex as $moreP) {
                                              ?>
                                              <img style="width:20px; box-shadow:none; height:20px; margin:5px; margin-top:2px;" src='<?php echo "/website/icons/product1.jpg"; ?>' >
                                              <p><?php echo $galProduct1['categoryName']." ".$exFace[$counter]; ?> </p>
                                              <img src='<?php echo "/website/icons/".$moreP; ?>' >
                                            <?php  $counter= $counter + 1; } ?>

                                        </div>

                                    </div>
                                                              <!-- ------------------------------------------ -->
                                      <h3><?php echo $galProduct1['categoryName']; ?><img src="/website/icons/galery.png" style="width:30px; height:30px; float:left; margin-right:10px; border-radius:30px">
                                           <img onclick="iconLike()" src="/website/icons/like.jpg" style="width:20px; height:20px; float:right; margin-right:10px; box-shadow:2px 1px 1px 1px rgba(187, 187, 187, 0.699); border-radius:20px">
                                            <img src="/website/icons/love.jpg" style="width:20px; height:20px; float:right; margin-right:10px;box-shadow:2px 1px 1px 1px rgba(187, 187, 187, 0.699); border-radius:20px">
                                            <img onclick="comment()" src="/website/icons/comment.png" style="width:20px; height:20px; float:right; margin-right:10px; box-shadow:2px 1px 1px 1px rgba(187, 187, 187, 0.699); border-radius:20px">
                                    </h3>
                                      <img   src=<?php echo "/website/icons/".$galProduct1['images']; ?>  >
                                      <button onclick= <?php echo "function".$galProduct1['id']."()"; ?> >More Pict</button>
                                      <p><?php echo $galProduct1['description']; ?> </p>
                                        <p>
                                          <img src="/website/icons/archicad.jpeg" style="width:15px; height:15px; float:left; margin-right:5px; border-radius:15px">
                                          <img src="/website/icons/artlantis.jpg" style="width:15px; height:15px; float:left; margin-right:5px; border-radius:15px">
                                          <img src="/website/icons/photoshop.jpg" style="width:15px; height:15px; float:left; margin-right:5px; border-radius:15px">
                                            <form id="comment" style="display:none">
                                                <input  type="text" style="width:150px;  height:15px; border-radius:10px; border:1px solid gray; float:right; background-color: white; ">
                                            </form>
                                        </p>

                                    </div>
                                    <script>
                                          function iconLike(){
                                              alert("cliked");     
                                          }
                                          function comment(){
                                            document.querySelectorAll("form#comment").style.display="Block";
                                          }
                                    </script>