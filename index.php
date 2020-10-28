<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form action="print.php" method="get">
    <div class="row">
      <div class="col-25">
        <label for="fname">Date of Issue</label>
      </div>
      <div class="col-75">
        <input type="text" name="Date_In" value="<?php echo date("Y/m/d"); ?>" id="Date_In">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Due Date</label>
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo date("Y/m/d"); ?>" id="Date_Out" name="Date_Out">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Bill To</label>
      </div>
      <div class="col-75">
        <input type="text" id="Name" name="Name" placeholder="Input Name Here....">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Description</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="Description" placeholder="Write description...." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Qty</label>
      </div>
      <div class="col-75">
        <input type="text" id="qty" name="qty" placeholder="Input Quantity...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Rate</label>
      </div>
      <div class="col-75">
        <input type="text" id="rate" name="rate" placeholder="Input Price....">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Tax %</label>
      </div>
      <div class="col-75">
        <input type="text" id="Tax" name="Tax" placeholder="Tax (%)" value="0">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
</html>