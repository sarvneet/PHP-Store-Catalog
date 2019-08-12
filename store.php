       <?php include('includes/header.php');?>
        <!-- Trending -->
        <div class="container trending">
            <div class="row h-100 text-center">
                <div class="trend">
                    <h2 class="heading">Store</h2>
                </div>
                <div class="col-sm-12">
                    <div class="row h-100">
                      <?php
                        //include the connection
                        include_once "./db-connection/connect.php";

                        //include the code that gets data
                        include_once "./web-service/get-data.php";

                        //include the code that creates markup
                        include_once "./includes/collect-and-print-data.php";

                        ?>
                        <?php 
    
                            if(isset($markUp)){
                                echo $markUp;
                            }
                           
                            //print the eventual error connection
                            if(isset($connectionError)){
                            echo "<mark>{$connectionError}</mark>";
                        }
                        ?>
                        
                    </div>
                </div>
            </div>  
        </div>
        <!-- Trending End-->
        <?php include('includes/footer.php'); ?>