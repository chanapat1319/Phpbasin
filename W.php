<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>โปรแกรมป้อนข้อมูลตัวเลข</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5"> <br> <br>
           <h3>โปรแกรมป้อนข้อมูลตัวเลข</h3>
          <form method="post">
            
            <div class="form-group">
              <?php 
                if(isset($_POST['number1'])){
                  $number1 = $_POST['number1'];
                }
            ?>
              <input type="number" name="number1" required min="0" placeholder="Number1" class="form-control" value="<?php echo $number1;?>">
            </div>
            <div class="form-group">
              <?php 
                if(isset($_POST['operator'])){
                      $operator = $_POST['operator'];
                      if($operator == 1){
                        $ovalue = 1;
                        $olebel = 'บวก';
                      }else if ($operator == 2) {
                        $ovalue = 2;
                        $olebel = 'ลบ';
                      }else if ($operator == 3) {
                        $ovalue = 3;
                        $olebel = 'คูณ';
                      }else if ($operator == 4) {
                        $ovalue = 4;
                        $olebel = 'หาร';
                      }
                } 
            ?>
              <select name="operator" required class="form-control">
                  <?php  if(isset($_POST['operator'])){ ?>
                    <option value="<?php echo $ovalue;?>"><?php echo $olebel;?></option>
                <?php } ?>

                  <option value="">-เลือก-</option>
                  <option value="1">+</option>
                  <option value="2">-</option>
                  <option value="3">*</option>
                  <option value="4">/</option>
                </select>  
            </div>

            <div class="form-group">
              <?php 
                if(isset($_POST['number2'])){
                  $number2 = $_POST['number2'];
                }
            ?>
               <input type="number" name="number2" required min="0" placeholder="Number2" class="form-control" value="<?php echo $number2;?>">
            </div>
             <div class="form-group">
              <?php 
                if(isset($_POST['number1']) && isset($_POST['number2'])){

                   $operator = $_POST['operator'];
                      if($operator == 1){
                        $total = ($_POST['number1'] + $_POST['number2']);
                      }else if ($operator == 2) {
                         $total = ($_POST['number1'] - $_POST['number2']);
                      }else if ($operator == 3) {
                         $total = ($_POST['number1'] * $_POST['number2']);
                      }else if ($operator == 4) {
                         $total = ($_POST['number1'] / $_POST['number2']);
                      }
                }else{
                  $total = 0;
                }
            ?>
               <input type="number" name="output"  placeholder="ผลลัพธ์" class="form-control" readonly value="<?php echo $total ;?>">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">คำนวณ</button>
               <a href="calculator.php" class="btn btn-danger"> Reset </a>
            </div>

          </form>
        </div>
      </div>
    </div>
    </body>
</html>