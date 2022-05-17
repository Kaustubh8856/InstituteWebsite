<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
	<title>Fees | IIITDMJ</title>
		<meta http-equiv="refresh" content="3000">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
       <link rel="stylesheet" type="text/css" href="./mobile.css">
</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    		<?php include './Header.php';?>

				<?php include "./navbar.php";?>

				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Fees Structures</h2>
				</div>



				<div class="AcMain">

					<p>
						The Institute offers academic programmes, at undergraduate and postgraduate levels, which encourage students to not only excel in course work but also carry out research in a chosen specialization.
					</p>
					<div class="AcademicsNav">
						<button class="acdpB">Fee Structure 2020-21</button>
						<div class="btechAcademic">

							

						</div>
						<br>
						<button class="acdpB">Fee Structure 2020-21</button>
						<div class="bdesAcademic">
							
						</div>

						<br>

						<button class="acdpB">Fee Structure 2019-20</button>
						<div class="mtechAcademic">
							<h4>
								Institute offers Four Year Undergraduate degree (M.Tech.) programme in:
							</h4>
							<ul>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Computer Science and Engineering
									<ul>
										<li>
											<i class="bi bi-arrow-return-right"></i>
											AI and ML
										</li>
										<li>
											<i class="bi bi-arrow-return-right"></i>
											Data Science
										</li>
									</ul>
								</li>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Electronics and Communication Engineering
									<ul>
										<li>
											<i class="bi bi-arrow-return-right"></i>
											Communication System Design
										</li>
										<li>
											<i class="bi bi-arrow-return-right"></i>
											Nanoelectronics and VLSI Design
										</li>
										<li>
											<i class="bi bi-arrow-return-right"></i>
											Power and Control
										</li>
									</ul>
								</li>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Mechanical Engineering
									<ul>
										<li>
											<i class="bi bi-arrow-return-right"></i>
											Design
										</li>
										<li>
											<i class="bi bi-arrow-return-right"></i>
											CAD/CAM
										</li>
									</ul>
								</li>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Smart Manufacturing
								</li>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Mechatronics(MT)
								</li>
								<li>
									<i class="bi bi-arrow-right-circle-fill"></i>
									Design(DS)
								</li>
							</ul>
						</div>
						<br>
						<button class="acdpB">M.Des Programmes</button>
						<div class="mdesAcademic">
							<h4>Master’s of design is an elite program as 2 years post-graduation offered at design discipline. Students from various streams such as technical, arts or design backgrounds join every year to excel in their skills and learn the design approach of problem-solving.

							We at the design discipline make sure that master’s students are build to match the contemporary organizational standards in both skills and knowledge. Our institute has already proven our student’s in some top industries and has the vision to deliver the same.
						</h4>
						</div>
						<br>
						<button class="acdpB">Ph.D Programmes</button>
						<div class="phdAcademic">
							
						</div>
						<br>
						<button class="acdpB">Integrated Master + Ph.D</button>
						<div class="btechAcademic">
							
						</div>
						<br>
						<button class="acdpB">Special Part Time M.Tech / M.Des</button>
						<div class="btechAcademic">
							
						</div>
						<br>
					</div>
				</div>
			</body>
		</div>

<?php include './footer.php'?>
<script>

	window.onscroll = function()
{
  stickyFunction()
};


var nbar = document.getElementById("adminHeader");
var sticky = nbar.offsetTop;
function stickyFunction() {
  if (window.pageYOffset >= sticky) {
    nbar.classList.add("sticky");
  } else {
    nbar.classList.remove("sticky");
 		}
	}

var coll = document.getElementsByClassName("acdpB");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("show");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
</html>