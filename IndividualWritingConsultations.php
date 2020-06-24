<?php include ('main-header.php'); ?>
<style type="text/css">

	form input: hover
	{
		background: gray;
	}
	form input[value]
	{
		color: white;
		font-variant: small-caps;

	}
	input[type=submit] {
	  width: 20%;
	  font-size: 17px;
	  background-color: #3fada8;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
}

</style>
<div class="page">

<h1>Individual Writing Consultations</h1>
<p align="justify" style="font-size:14px;">If you are writing a paper and you need some help to improve it, structure it properly, and
have objective and constructive analysis of your work, you can definitely request for a
formal appointment for a Individual Writing Consultation. </p>
<h2> Slots:</h2>
<p style="font-size:16px;" align="justify">
Every Wednesday, 3 - 4 p.m<br>
Each slot duration: 20 minutes<br><br>
3:00 - 3:20 p.m<br>
3:20 - 3:40 p.m<br>
3:40 - 4:00 p.m<br>
</p>
<p style="font-size:14px;" align="justify">
Please check the FAQs carefully before you put in a request.</p>
<br>
<h2> Click here to book a slot </h2>
<form action="form.php">
        <input type="submit" name="submit" value="Book a slot">

      </form>

<h2> To view the FAQs, please click here</h2>
<form action="faq.php"> 

          
        <input type="submit" name="button2"
                 value="FAQs" />

    </form> 




<?php include ('main-footer.php'); ?>
	
</div><!--page content End-->

</div>
</body>
</html>
