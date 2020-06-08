<?php include ('main-header.php'); ?>
<style>
	form
	{
		margin-left: 200px;

		width:  = 2000px;
		padding: 15px 32px;
		display: block;


	}
	form input[type="submit"]
	{
		font-size:17px;
		width:230px;
		height:50px;
		background:#3fada8;
		float: left;
		line-height: 35px;
		cursor: pointer;
		position: relative;
		border: 1px solid #fff;
	}
	form input: hover
	{
		background: gray;
	}
	form input[value]
	{
		color: white;
		font-variant: small-caps;

	}
</style>
<div class="page">

<h1>Courses</h1>


    <form method="post"> 

          
        <input type="submit" name="button2"
                class="button" value="Writing Courses" />

        <input type="submit" name="button3"
                class="button" value="Communication Courses" /> 
    </form> 

<?php
         
        if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        else if(array_key_exists('button3', $_POST)) { 
            button3(); 
        }
       
    function button2() 
     { 
    	echo "
    	<br><br><br>
    	<h3>Advanced Writing</h3>
<p align='justify' style='font-size:14px;'>
	This is an advanced writing course to train students in writing for academic and formal
contexts. The modules of the course are designed to result in predefined writing outcomes
with separate modules to develop each student&#39;s ability to communicate effectively in his
or her academic life. The major emphasis is on three specific types of writing:
encyclopaedic, opinion pieces, and journalistic writing. This course has activity-based
sessions with intensive mentoring and feedback from the faculty. The writing assignments
are cumulative, building on one acquired writing skill to develop into another. The tentative
order of instruction is as follows First in preparation of the encyclopaedic articles on a
specific topic, the students will learn to collate information, followed by learning to write an
opinion piece on the same topic where they will use information from different sources to
support/build their argument. This will lead to the third component of writing journalistic
articles again on the same/similar topic where subjective opinions need to be tactfully
handled while creating a specific angle while dealing with factual data. At the end of each
component, there will be a response session with longer memo.
</p>

<h3>Technical Writing</h3>
<p align='justify' style='font-size:14px;'>
	Technical Writing is a practice-oriented course that provides a complete process for
planning, writing, and editing technical documents, with a greater focus on critical thinking
and structuring. Students will explore the principles of effective written communication and
critical reading, examine a variety of professional writing samples to gain an understanding
of the skills needed to successfully communicate through professionally written e-mails,
scientific reports, proposals and reviews. They will also learn the techniques of objective
reporting on scientific and technical material; strategies of reading and writing research
papers; drafting research abstracts, creating research pitch, techniques of poster
designing, and making presentations. Additionally, this course will also teach students to
draft their resumes, academic cover letters, statement of purpose, make editorial changes,
usage of resources for literature survey, plagiarism, and the specific use of style sheets.
</p>

<h3>Research Methods</h3>
<p align='justify' style='font-size:14px;'>
	This course focuses on improving the skills of scientific reading, writing, presentation, and
carrying out literature review for research. In particular, students practice scientific writing

via short assignments. They are provided with exercises on research paper reading along
with writing short critiques on research papers read. Students will practice on presentation
skills and on conducting literature review.
</p>
"; 
        } 

    function button3()
    {
    	echo "<br><br><br>
    	<h3>Entrepreneural Communication</h3>
<p align='justify' style='font-size:14px;'>
	Communication for entrepreneurs implies improving their communication skills, sharing
their ideas, politely and persuasively. Strategies involve presenting them clearly and
precisely whether they are communicating with their staff, team members, clients and
colleagues. Having good communication skills is crucial to entrepreneurs at the time of
project explanation, elevator pitches, presentation, training as well as many other areas
where a person has to be convincingly interactive and engage in dialogues with people.
Effective communication is indispensable at all stages of entrepreneurial success, such as
to generate an innovative idea; to communicate it to rest of the world; to organise a team
and to materialise it in successful, profitable business ventures. Since communication as a
whole plays a decisive role in entrepreneurial success, the course substantiates how
effective communication plays a key role whereby entrepreneurs achieve the desired
levels of excellence in the development of their organisations. Entrepreneurs face unique
communication challenges when communicating with initial investors, business partners,
founding employees, first customers, and the media. Students will apply course concepts
to their own ideas while developing communication competencies in a variety of
entrepreneurial communication contexts.
</p>

<h3>Communication Skills</h3>
<p align='justify' style='font-size:14px;'>
	This one-semester basic course in communication is designed to develop each student&#39;s
ability to communicate effectively in his or her academic life. The major emphasis is on five
specific skill sets essential to communication: Comprehension, Listening, Reading,
evaluating/ analysing, and writing/applying. There is a focus particularly on academic
communication as this concerns the first-year undergraduate students, but significant other
areas of the communication process are also explored.
</p>

<h3>Humanities and Critical Skills Courses</h3>
<p align='justify' style='font-size:14px;'>
	This course introduces students to the literature of India. It surveys a selection of literary
works by authors in India and in the diaspora. The course will examine how key cultural
concepts have reappeared across Indian literary traditions over time and how they have
been reimagined within the context of specific historical junctures and socio-linguistic
networks. It shall focus on themes such as idea of home and territories, women and notion
of the body, borders and conflict, power and politics, problems of translation, and the
intersections between ideas of real and imagined geographies that constitute the dynamics
of the Indian literary scape. In studying some specific sections, there will be the
comparative study of constructions of themes in cinematic productions.
The idea is to include the discursive, alternate versions of the thematic narration and the
kinds of discordant identities they imagine and manoeuvre from the text or screen to the
layers of socio-cultural literary articulation.
</p>
";

    }
    
    ?>












<?php include ('main-footer.php'); ?>
	
</div><!--page content End-->

</div>
</body>
</html>
