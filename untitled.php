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

<div class="container" style="width: 800px; height: 50px;margin-left: 70px;">
    
    <input type="radio" id="i1" name="images" checked />
    <input type="radio" id="i2" name="images" />
    <input type="radio" id="i3" name="images" />
    <input type="radio" id="i4" name="images" />
    <input type="radio" id="i5" name="images" />    
    
    <div class="slide_img" id="one">            
            
             <iframe src="./gallery/EconomicsPoster.pdf" style="width: 800px; height: 420px;"></iframe> 
            
                <label class="prev" for="i5"><span>&#x2039;</span></label>
                <label class="next" for="i2"><span>&#x203a;</span></label>  
        
    </div>
    
    <div class="slide_img" id="two">
        
            <img src="./gallery/3.jpg" >
            
                <label class="prev" for="i1"><span>&#x2039;</span></label>
                <label class="next" for="i3"><span>&#x203a;</span></label>
        
    </div>
            
    <div class="slide_img" id="three">
            <img src="./gallery/3.jpeg">  
            
                <label class="prev" for="i2"><span>&#x2039;</span></label>
                <label class="next" for="i4"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="four">
            <img src="./gallery/4.jpeg"> 
            
                <label class="prev" for="i3"><span>&#x2039;</span></label>
                <label class="next" for="i5"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="five">
            <img src="./gallery/5.jpeg">  
            
                <label class="prev" for="i4"><span>&#x2039;</span></label>
                <label class="next" for="i1"><span>&#x203a;</span></label>

    </div>

    <div id="nav_slide">
        <label for="i1" class="dots" id="dot1"></label>
        <label for="i2" class="dots" id="dot2"></label>
        <label for="i3" class="dots" id="dot3"></label>
        <label for="i4" class="dots" id="dot4"></label>
        <label for="i5" class="dots" id="dot5"></label>
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
<body onLoad="scrollDiv_init()">
	<h2 style="position: absolute;margin-left: 700px;">Latest news</h2>
	<br><br><br>
<div id="MyDivName" style="overflow:auto;width:300px;height:350px; position: absolute;margin-left: 700px;" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">

An abstract of Sumedha Shukla has been selected "The Role of Formal and Informal Rural Credit on Crop Yield Distributions and Downside Risk" in INSEE-CESS International Conference.<br><br>

A paper by Dr Manohar Kumar titled 'Understanding emerging forms of dissent. Civil Disobedience or Uncivil Action?' has been accepted for presentation at the 11th International Conference on Applied Ethics to be held on December 15 and 16, 2018, University of Kyoto, Japan.<br><br>

Paper titled, "Understanding Health Literacy through the lens of Phronesis: The Case of Coronary Artery Disease Patients" authored by Dr. Venkata Ratnadeep Suri (Faculty, IIIT-D) co-authored by the faculty of Wee Kim Wee School of Communication and Information, Nanyang Technological University; (Shaheen Majid, Schubert Foo, Dumaual Sibal, Trinity Hannah, Yun Ke Chang) was presented at European Conference on Information Literacy (ECIL 2018) held in Oulu, Finland, from 24th - 27th September, 2018<br><br>

Our Faculty member, Manohar Kumar's book titled, 'Speaking Truth to Power. A Theory of Whistleblowing' co-authored with Daniele Santoro, has been published by Springer (2018).<br><br>

Seminar on Repeated Coordination with Private Learning<br><br>

Seminar on Hinduism for a Secular State

</div>
</body>

<!--Concatenate with the particular page HTML followed by the FOOTER HTML-->
<!--<div><img src="./images/ssh-banner.jpg" title="SSH Department IIITD"/></div> -->
<!--<div><a href="https://iiitd.ac.in/events/gisworkshop" target="_blank"><img src="./images/Training Course on Remote Sensing.jpg" title="SSH Department IIITD"/></a></div> -->
    <!--<div><a href="https://iiitd.ac.in/webstory/wpct" target="_blank"><img src="https://iiitd.ac.in/sites/default/files/images/events/wpctbanner.jpg" title="Workshop on Philosophy and Cyber-Technology, SSH Department IIITD"/></a></div> -->
    <div class="welcome">
       <!-- <h1>Welcome !</h1> -->
	
<div style="width: 600px;">
<p align="justify">The Department of Social Science and Humanities (SSH) at the Indraprastha Institute of Information
Technology (IIIT Delhi) is home to a multi-disciplinary faculty offering courses and conducting
research in Economics, Sociology, Cognitive Science, Philosophy, Political Science and
Communication Theory.</p>
<p align="justify">Catering to undergraduate studies, the department delivers core courses and elective modules for an
innovative new degree programme, the B.Tech in computer science and Social Sciences (CSSS)
launched in 2017 in collaboration with the Department of Computer Science and Engineering at the
Institute. This unique B.Tech in CSSS, aims to develop cross-disciplinary IT knowledge and expertise
in students, very much in demand in the academia and industry. The courses offered within CSSS
program also provides to students specializing in other programs offered in the Institute and therefore
constitutes an integral part of academic planning and structure. For post-graduate studies SSH offers
PhD in Economics and Sociology/Social Anthropology. The department houses a wide range of
laboratories like Econometrics, Game theory and cognitive science, enriched in facilities providing a
platform for research in these areas. </p>

<p align="justify">Located in the heart of India&#39;s capital, the department serves as a hub for IT and social sciences and
regularly hosts seminars, public talks and research related events at IIIT Delhi. It addresses the
educational needs we are likely to see in the future with even more convergence of IT with social
systems. It is concievable that an increasing role that IT will play in addressing society&#39;s problems, as
well as answering the human questions posed by social scientists, will lead to an increase in demand
for IT experts who are well versed in the social sciences and also of social scientists who understand
computing and IT and apply them innovatively to solve problems in their own domain. The SSH
department at IIIT Delhi would seek to bridge the disciplinary boundaries that exist between various IT
and social science streams and develop a cross -disciplinary research and teaching agenda that is
forward looking and cutting edge in technology education. </p>

<h2>Vision</h2>
<br>
<p align="justify">Modern university systems all over the world evolved by separating out the study of science and
technology from that of the liberal arts - philosophy, literature and history. Even the social sciences -
economics, sociology, anthropology and psychology - which emerged later under the strong influence
of the methods and goals of science, could not shake off this divide. But today, the influence of science
and technology over actual human lives and societies has increased so dramatically, that this division in
knowledge can no longer be supported. The development of Information Technology in particular, has
raised an urgent need over the last few decades, to be studied and researched in its social context, given
its huge potential for public good and the speed and intensity with which it has overtaken our everyday
lives.</p>
<p align="justify">The need to examine the societal and human implications of the vast successes and risks of IT can no
longer be denied. As a result, the Human and Social Sciences and Computer education have come
closer together in the best universities of the world. The Department of Social Sciences and Humanities
at IIIT Delhi addresses this changed environment in technology education through its teaching and
research program and offers a range of courses in Economics, Sociology and Cognitive Sciences as
well as from the broader grouping of Liberal Arts, Communications and Humanities to the students of
the Institute. The Department is home to the B.Tech. in IT and Social Sciences programme and
provides the core teaching and research support for this innovative educational offering.</p>

<br>
<br>
</p>
</div>


   

	<?php include ('main-footer.php'); ?>
	
</div><!--content End-->

</div>
</body>
</html>