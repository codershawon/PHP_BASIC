<?php include "inc/header.php" ?>
    <?php 
      // $feedback=[
      //   [
      //     "id"=>"1",
      //     "name"=>"Shawon Barua",
      //     "email"=>"shawon@gmail.com",
      //     "body"=>"Shawon is a very kind hearted person"
      //   ],
      //   [
      //     "id"=>"2",
      //     "name"=>"Justin Biebar",
      //     "email"=>"justin@gmail.com",
      //     "body"=>"Justin is a very good pop Singer."
      //   ]
      // ]
     $sql='SELECT * FROM feedback';
     $result=mysqli_query($conn, $sql);
     $feedback=mysqli_fetch_all($result, MYSQLI_ASSOC);
   ?>
   <h2>Past Feedback</h2>
   <?php if(empty($feedback)):?>
    <div class="lead mt-3">There is no feedback</div>
    <?php endif;?>
  <?php foreach($feedback as $item):?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item["body"];?>
       <div class="text-secondary mt-2">
         By <?php echo $item["name"];?> on <?php echo $item["date"];?>
       </div>
     </div>
   </div>
   <?php endforeach;?>
   <?php include "inc/footer.php" ?>