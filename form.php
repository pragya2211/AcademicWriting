<?php include ('main-header.php'); ?>
<div class="page">
<style type="text/css">
.body
{
  margin-left: 100px;
}

input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 200px;
}

input[type=issue], select {
  width: 50%;
  height: 100px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 200px;
}
input[type=submit] {
  width: 20%;
  background-color: #3fada8;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 200px;
}

input[type=submit]:hover {
  background-color: #95a5a6;
}


</style>

    <body>
      <div id = "cards-container" style="">
         <div class="card rteleft facultycard" style="height:100px; width:100%;">
      <h1>Disclaimer:</h1>
     <p style="font-size: 16px"> Please make sure that you go through the <a href="faq.php">FAQs</a> before booking a slot.</p>     
   </div>
   </div>
      <h2 style="margin-left: 200px;">For booking a slot, please enter the following details:</h2>
      <br>
      <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSf75yfnTO5Sj3CUKtenc-qLJ7GLpk4RI3K8qx98Qgq__H7PUg/formResponse" target="_self" method="POST">
         <p style="font-size: 18px; margin-left: 200px;"><b>Name:</b></p> <input type="text" name="entry.1748389392">
         <br>
         <p style="font-size: 18px;margin-left: 200px;"><b>Class:</b></p> <input type="text" name="entry.1701670711">
         <br>
         <p style="font-size: 18px;margin-left: 200px;"><b>Email:</b></p> <input type="text" name="entry.283262177">
         <br>
         <p style="font-size: 18px;margin-left: 200px;"><b>Issue:</b></p> <textarea type="issue" name="entry.231685495" style="margin-left: 200px; height: 100px;width: 500px;"></textarea>
         <br>
         <input type="submit" name="submit" value="Submit">

      </form>
   </body>


<?php include ('main-footer.php'); ?>
   
</div><!--page content End-->

</div>
</html>
<div class="page">



