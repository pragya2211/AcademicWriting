<?php include ('main-header.php'); ?>
<!--Concatenate with the particular page HTML followed by the FOOTER HTML-->
<!--Append to the common top HTML-->

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
	  width: 100%;
	  font-size: 15px;
	  background-color: #3fada8;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  border-radius: 50%;
	}
	input[type=image] {
		height: 10%;
	  width: 10%;
	  font-size: 15px;
	  color: white;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  border-radius: 50%;
	}
	a:hover 
	{
  		text-decoration: underline;
	}
</style>

<div class="page">

<div class="container" style="width: 1000px; height: 70px;">
    
    <input type="radio" id="i1" name="images" checked />   
    
    <div class="slide_img" id="one">            
            
            <img src="./gallery/1.jpg">
        
        
    </div>
    
        
</div>
<script language="javascript">
ScrollRate = 100;

function scrollDiv_init() {
	DivElmnt = document.getElementById('MyDivName');
	ReachedMaxScroll = false;
	
	DivElmnt.scrollTop = 0;
	PreviousScrollTop  = 0;
	
	ScrollInterval = setInterval('scrollDiv()', ScrollRate);
}

function scrollDiv() {
	
	if (!ReachedMaxScroll) {
		DivElmnt.scrollTop = PreviousScrollTop;
		PreviousScrollTop++;
		
		ReachedMaxScroll = DivElmnt.scrollTop >= (DivElmnt.scrollHeight - DivElmnt.offsetHeight);
	}
	else {
		ReachedMaxScroll = (DivElmnt.scrollTop == 0)?false:true;
		
		DivElmnt.scrollTop = PreviousScrollTop;
		PreviousScrollTop--;
	}
}

function pauseDiv() {
	clearInterval(ScrollInterval);
}

function resumeDiv() {
	PreviousScrollTop = DivElmnt.scrollTop;
	ScrollInterval    = setInterval('scrollDiv()', ScrollRate);
}
</script>
<br><br>
<p style="position: absolute; font-size: 19px">To book a consultation session with Writing Lab, please click here: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
<form action="form.php" style="margin-left: 570px;position: absolute;">
	<input type="image" id="submit" alt="Slot"
       src="./images/button.png">
       

      </form>
<body onLoad="scrollDiv_init()">
	<h2 style="position: absolute;margin-left: 700px;">Latest news</h2>
	<br><br><br>
<div id="MyDivName" style="overflow:auto;width:300px;height:250px; position: absolute;margin-left: 700px;" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">
Second Panel discussion towards setting up a cross-disciplinary academic publication, tentative on 25 March 2020 (Postponed until further intimation due to COVID- 19)<br><br>

Workshop on Writing a journal manuscript by Springer Nature, 1st April 2020 (Postponed until further intimation due to COVID-19)
Art of Abstract Writing - proposed in house session (Library session on 18 March 2020 cancelled due to COVID-19)<br><br>

Designing a Research Poster - proposed in-house session ( Planned tentatively for April end, but now not taking place because of COVID-19)<br><br>

Public Speaking Skills; 27 September 2019
Effective Skills for Engineers and Scientists (with Central Library IIIT Delhi); 30 October 2019<br><br>

Communicating your science for public outreach; 13 November 2019<br><br>

3-Day module on Advanced Writing; 28 - 31December 2019
Ethics in Research and Publications (with Central Library IIIT Delhi) ; 22 January 2020<br><br>

</div>
</body>
<div id="box" style="position: absolute;margin-left: 700px; margin-top: 300px; color: white;height: 370px;width: 250px;border: 1px solid #2f3542;">
	<table>
		<tr>
			<td>
			<p style="font-size: 16px;color: #3fada8">
				<a href="IndividualWritingConsultations.php" style="color: #3fada8">
				Individual Writing Consultations
			</a>
			</p>
		</td>
		</tr>
		<tr>
			<td>
			<p style="font-size: 16px;color: #3fada8">
				<a href="./PeerReviewGroups.php" style="color: #3fada8">
				Peer Review Groups
			</a>
			</p>
		</td>
		</tr>
		<tr>
			<td>
			<p style="font-size: 16px;color: #3fada8">
				<a href="./Workshop.php" style="color: #3fada8">
				Workshops and Sessions
			</a>
			</p>
		</td>
		</tr>
			<tr>
				<td>

				<p style="font-size: 16px;color: #3fada8">
					<a href="./Outreach.php" style="color: #3fada8">
					Outreach
				</a>
				</p>
			</td>
			</tr>
			<tr>
				<td>
			<p style="font-size: 16px;color: #3fada8">
				<a href="./WritingCourses.php" style="color: #3fada8">
				Courses
			</a>
			</p>
		</td>
		</tr>
		<tr>
			<td>
			<p style="font-size: 16px;color: #3fada8">
				<a href="Researchblog.php" style="color: #3fada8">
				Research blogs
			</a>
			</p>
		</td>
		</tr>
	</table>
			
			
</div>
<!--Concatenate with the particular page HTML followed by the FOOTER HTML-->
<!--<div><img src="./images/ssh-banner.jpg" title="SSH Department IIITD"/></div> -->
<!--<div><a href="https://iiitd.ac.in/events/gisworkshop" target="_blank"><img src="./images/Training Course on Remote Sensing.jpg" title="SSH Department IIITD"/></a></div> -->
    <!--<div><a href="https://iiitd.ac.in/webstory/wpct" target="_blank"><img src="https://iiitd.ac.in/sites/default/files/images/events/wpctbanner.jpg" title="Workshop on Philosophy and Cyber-Technology, SSH Department IIITD"/></a></div> -->
    <div class="welcome">
       <!-- <h1>Welcome !</h1> -->
	
<div style="width: 600px;">
<p align="justify" style="font-size:15px;">The Academic Writing Lab is an important constituent of IIIT Delhi and is housed in the
writing lab within the SSH department. It will primarily provide writing assistance to all University
divisions, schools, and academic and administrative programs. The program designs credit and non-
credit, and studio courses, seminars, workshops, workshop series.  The lab will also provide training
in writing pedagogy, individual tutoring for undergraduates and graduate students, and consultations
with faculty and staff on the writing needs of specific individuals, departments, programs, and
media outreach. </p>

<p align="justify" style="font-size:15px;">Located in the heart of India's capital, the department serves as a hub for Social Sciences and Humanities (SSH) and regularly hosts seminars, public talks and research related events at IIIT Delhi. It addresses the educational needs we are likely to see in the future with even more convergence of Computer Science with social systems and an increasing role for the social sciences and the humanities in technology and business solutions. At the same time, the increasing role Computer Science will play in addressing society's problems, as well as answering the human questions posed by social scientists, will lead to an increase in demand for Computer Science experts who are well versed in the social sciences and also of social scientists who understand computing and Computer Science and apply them innovatively to solve problems in their own domain. The SSH department at IIIT Delhi would seek to bridge the disciplinary boundaries that exist between various Computer Science and social science streams and develop a cross -disciplinary research and teaching agenda that is forward looking and cutting edge in technology education. </p>

<h2>About the Coordinator:</h2>
<h3>Dr. Payel Chattopadhyay Mukherjee </h3>
<p align="justify" style="font-size: 15px;">Dr Payel Chattopadhyay Mukherjee’s work focuses on Cosmopolitanism, Home, Colonial and
Postcolonial Literature, Indian Nationalism, Women and Gender, History of Ideas, and South Asian
Studies. She has written for several scholarly publications including Routledge Research in
Postcolonial Literatures, South Asian Review, Journal of Human Values, Sahitya Akademi, Gandhi
Marg to name a few, and has presented her research at academic forums like The European
Association for Commonwealth Literature and Language Studies (EACLALS), The South Asian
Literary Association (SALA), Association for Asian Studies (AAS, USA) and Canadian
Association for Commonwealth Literature and Language Studies (CACLALS). Currently, she is a
faculty member at the SSH department of IIIT Delhi and an adjunct professor at the Dept of
English, University of Saskatchewan, Canada. She can be reached
at  <a style="color:#3fada8; href="mailto:payel@iiitd.ac.in">payel@iiitd.ac.in</a>
<br>
Link to the webpage: <a style="color:#3fada8; href="http://pcm.ind.in"> http://pcm.ind.in </a>
</p>
</div>


   

	<?php include ('main-footer.php'); ?>
	
</div><!--content End-->

</div>
</body>
</html>