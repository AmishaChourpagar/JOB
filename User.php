<html>
<head>
<link href="CSS/style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .style1
            {
                color: #FFFFFF;
                text-align: justify;
                vertical-align: top;
                padding-top: 6px;
                padding-right: 15px;
                padding-bottom: 10px;
                padding-left: 15px;
				font-size:17;
				font-family:bold;
                width: 900px;
            }
            

.btn{
  
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #66FF66;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.btn:hover {background-color: #9900CC}

.btn:active {
  background-color: #9900CC;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.btn1
{
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #6633CC;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}







        </style>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    <table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#2b2b2b">
   <tr>
   <td>
        <table width="100%">
        <tr>
		<td><img src="img/jo.png" width="250" height="175" /></td>
		<td align="center" ><font size="7" color="white" face="Arial Rounded MT Bold"><b>JobAdvisor -Career Guidance Portal
</b></font></td> 
		<td> <img src="img/111.jpg" width="250" height="175" align="right"></td>
  </tr></table>
  </td>
  </tr>
 
  <tr>
    <td height="34" background="images/ash1.jpg">
	<table border="0" cellspacing="0" cellpadding="0" >
      <tr >
        <td class="menu" width="150"><a href="User.php"><font color="FFFFFF">User</font></a></td>
        <td width="1"><img src="images/ash1.jpg" alt="" /></td>
         <td class="menu" width="150"><a href="Enteruserdetail.php"><font color="FFFFFF">Enter Job Detail</font></a></td>
		 <td width="1"><img src="images/ash1.jpg" alt="" /></td>
        <td class="menu" width="150"><a href="ViewUserDetail.php"><font color="FFFFFF">View Job Detail</font></a></td>
        <td width="1"><img src="images/ash1.jpg" alt="" /></td>

		 <td width="1"><img src="images/ash1.jpg" alt="" /></td>
		<td class="menu" width="150"><a href="index.php"><font color="FFFFFF">Logout</font></a></td>
		
		
        
        
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="100%">
	
		<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="100%"  width="900" align="center">
			<br><br><br><br>
			<b><font size="6" face="Arial Rounded MT Bold" color="white"> JobAdvisor -Career Guidance Portal .... User Login
!<br></font></b><br><br>

<img src="img/click.png" width="750" height="400"/><br>
<b><font size="6" face="Arial Rounded MT Bold" color="white">Here You Can Search for best job that suites you
!<br></font></b><br><br>
			   <br>  
				   <br><br><br><br><br><br>
				   <br><br>
				   <br>
				   <br><br>
				 
				   <br>
                <br>”<br />
				   <br><br>
                    
                                      </td> 
									  <td align="center"> 
									
									 
									  <img src="img/17.jpg" width="500" height="350"><br>
									   
									
									  </td>
                   
                  
          </tr>
        </table>
		</td>
       
    
  </tr>
 
 
</table>
    </div>
    </form>
<h2> MOST POPULAR JOBS IN IT SECTOR</h2>

    <div
id="myChart" style="width:100%; max-width:8000px; height:900px;">
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Jobs', 'Mhl'],
  ['Data Scientist',54.8],
  ['Software Engineer',48.6],
  ['Full Stack Developer',44.4],
  ['Cyber Security Engineer',23.9],
  ['ML Engineer',14.5]
]);

var options = {
  title:'MOST POPULAR JOBS IN IT SECTORS',
  is3D:true
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>

	<ol>
<li size="5" align="right"><a href="#soft"> <button class="btn">Software Developer</button></a></li><br>
<li><a href="#data"><button class="btn">Data Scientist</button></a></li><br>
<li><a href="#full"><button class="btn">Full Stack Developer</button></a></li><br>
<li><a href="#soft"><button class="btn">Cybersecurity Engineer</button></a></li><br>
<li><a href="#ml"><button class="btn">Machine Learning Engineer</button></a></li><br>
<li><a href="#data"><button class="btn">Cloud Computing Professionals</button></a></li><br>
<li size="5"><a href="#soft"><button class="btn">DevOps Engineer</button></a></li><br>
<li><a href="#"><button class ="btn">Blockchain Engineer</button></a></li><br>
<li><a href="#"><button class="btn">IoT Solutions Architect</button></a></li><br><br><br><br><br>


</ol>









<h2 style="font-family: Times New Roman" id="soft"><button class="btn1">Software Developer Job Details</button></h2><br><br>

<h2 style="font-family:Times New Roman" size="6" face="Arial Rounded MT Bold" color="white">Software developers develop computer applications that allow users to perform specific tasks on computers or other devices. <br> They may also develop or customize existing systems that run devices or control networks. Most of the time, software developers work in an office.  A bachelor's degree in software engineering, computer science, information technology, or other relevant majors is often required.  They are required to have relevant job experience</h2>
<br>
<h2><button class="btn1">SALARY</button></h2>
<h2 style="font-family:Times New Roman" size="6" face="Arial Rounded MT Bold" color="white">1.An entry-level Software Engineer with less than 1 year experience can expect to earn an average total compensation (includes tips, bonus, and overtime pay) of ₹453,125 based on 2,297 salaries. <br><br> 2.An early career Software Engineer with 1-4 years of experience earns an average total compensation of ₹552,173 based on 13,731 salaries.<br><br> 3. A mid-career Software Engineer with 5-9 years of experience earns an average total compensation of ₹961,936 based on 3,745 salaries.<br><br> 4.An experienced Software Engineer with 10-19 years of experience earns an average total compensation of ₹1,567,905 based on 797 salaries.<br><br>  5.In their late career (20 years and higher), employees earn an average total compensation of ₹1,011,304 </p>
<div class="card">
<img src="img/soft.png" width="750" height="400"/><br>
</div>
<h2><button class="btn1">SKILLS</button></h2>

<img src="img/sosal.png" width="750" height="400"/>

<h2><button class="btn1">CAREER PATH</button></h2>
<img src="img/soca.png" width="750" height="400"/><br><br><br>


<h2 style="font-family: Times New Roman" id="data"  face="Arial Rounded MT Bold" color="white"><button class="btn1">Data Scientist Details</button></h2><br><br>

<h2 style="font-family:Times New Roman" >Data scientists are analytical experts who utilize their skills in both technology and social science to find trends and manage data. They use industry knowledge, contextual understanding, skepticism of existing assumptions – to uncover solutions to business challenges</h1>
<br>
<h2><button class="btn1">SALARY</button></h2>
<h2>
1.An entry-level Data Scientist with less than 1 year experience can expect to earn an average total compensation (includes tips, bonus, and overtime pay) of $85,265 based on 1,272 salaries.<br><br>2. An early career Data Scientist with 1-4 years of experience earns an average total compensation of $96,139 based on 6,552 salaries.<br><br>2. A mid-career Data Scientist with 5-9 years of experience earns an average total compensation of $110,744 based on 2,039 salaries.<br><br>3. An experienced Data Scientist with 10-19 years of experience earns an average total compensation of $123,303 based on 529 salaries. In their late career (20 years and higher), employees earn an average total compensation of $136,228
</h2>
<img src="img/datasal.png" width="750" height="400"/><br>

<h2><button class="btn1">SKILLS</button></h2>
<img src="img/dataskills.png" width="750" height="400"/>

<h2><button class="btn1">CAREER PATH</button></h2>
<img src="img/datacareer.png" width="750" height="400"/><br>


<h2 style="font-family: Times New Roman" id="full"  face="Arial Rounded MT Bold" color="white"><button class="btn1">Full Stack Developer Details</button></h2><br><br>

<h2 style="font-family:Times New Roman" size="6" face="Arial Rounded MT Bold" color="white">A Full Stack Developer is someone who works with the Back End — or server side — of the application as well as the Front End, or client side. Full Stack Developers have to have some skills in a wide variety of coding niches, from databases to graphic design and UI/UX management in order to do their job well.</h2>
<br>
<h2><button class="btn1">SALARY</button></h2>
<h2>1.An entry-level Full Stack Software Engineer with less than 1 year experience can expect to earn an average total compensation (includes tips, bonus, and overtime pay) of ₹343,922 based on 11 salaries.<br><br>2. An early career Full Stack Software Engineer with 1-4 years of experience earns an average total compensation of ₹593,375 based on 85 salaries.<br><br> A mid-career Full Stack Software Engineer with 5-9 years of experience earns an average total compensation of ₹1,145,460 based on 20 salaries.<br><br> An experienced Full Stack Software Engineer with 10-19 years of experience earns an average total compensation of ₹2,700,000 based on 9 salaries. </h2>
<img src="img/fullsal.png" width="750" height="400"/><br>

<h2><button class="btn1">SKILLS</button></h2>
<img src="img/fullskill.png" width="750" height="400"/>

<h2><button class="btn1">CAREER PATH</button></h2>
<img src="img/fullcareer.png" width="750" height="400"/><br>

<h2 style="font-family: Times New Roman" id="full"  face="Arial Rounded MT Bold" color="white"><button class="btn1">Cyber Security</button></h2><br><br>

<h2 style="font-family:Times New Roman" size="6" face="Arial Rounded MT Bold" color="white">Cybersecurity engineers, sometimes called information security engineers, identify threats and vulnerabilities in systems and software, then apply their skills to developing and implementing high-tech solutions to defend against hacking, malware and ransomware, insider threats and all types of cybercrime.</h2>
<br>
<h2><button class="btn1">SALARY</button></h2>
<h2>Cyber Security Analyst salary in India ranges between ₹ 3.0 Lakhs to ₹ 10.0 Lakhs with an average annual salary of ₹ 5.0 Lakhs. Salary estimates are based on 3.1k salaries received from Cyber Security Analysts</h2>
<img src="img/cbsal.png" width="750" height="400"/><br>

<h2><button class="btn1">SKILLS</button></h2>
<img src="img/cbskills.png" width="750" height="400"/>

<h2><button class="btn1">CAREER PATH</button></h2>
<img src="img/cbcareer.png" width="750" height="400"/><br>


<h2 style="font-family: Times New Roman" id="ml"  face="Arial Rounded MT Bold" color="white"><button class="btn1">Machine Learning Engineer</button></h2><br><br>

<h2 style="font-family:Times New Roman" size="6" face="Arial Rounded MT Bold" color="white">A machine learning engineer (ML engineer) is a person in IT who focuses on researching, building and designing self-running artificial intelligence (AI) systems to automate predictive models</h2>
<h2><button class="btn1">SALARY</button></h2>
<h2>Machine Learning Engineer salary in India ranges between ₹ 3.5 Lakhs to ₹ 21.8 Lakhs with an average annual salary of ₹ 7.5 Lakhs. Salary estimates are based on 1.4k salaries received from Machine Learning Engineers.</h2>
<img src="img/mlsal.png" width="750" height="400"/><br>
<h2><button class="btn1">SKILLS</button></h2>
<img src="img/mlskills.png" width="750" height="400"/>

<h2><button class="btn1">CAREER PATH</button></h2>
<img src="img/mlcareer.png" width="750" height="400"/><br>




</body>
</html>