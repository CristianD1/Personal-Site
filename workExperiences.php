<?php
  $title = "Cristian David - CS major";
  $description = "My Work Experiences";
  $keywords = "";
  $tabLocation = "work";
  include("HeaderFooter/header.php");
?>

<div class="separator"></div>

		<div class="row">
			<div class="large-12 columns">
				<ul class="accordion" data-accordion>
					<li class="accordion-navigation">
						<a href="#panel2a">
							<div style="text-align:center;">
								<!--h4>Scotiabank</h4-->
								<img src="pics/scotiabankBanner.png" style="height:70px; width:auto;">
							</div>
						</a>
						<div id="panel2a" class="content active">
							<p>&nbsp;&nbsp;I am currently working with Scotiabank under the GBM branch as a Website Application Developer. This is my first co-op placement from Waterloo University (although the position was aimed at upper years) and am beyond excited to be working with a large scale company where my tools earn thousands in user traffic daily.</br></br>

							<h3>My Completed Projects:</h3></br>
								 <ul>
								 	<li><b><u>User Batch Search Engine</u></b> (asp-classic, ms-access, j-query)
									 	<ul>
									 		<li>Search by adding a large mix of names, emails, ID's or usernames.</li>
									 		<li>Search by uploading an excel file with the aforementioned list and having the search engine resolve it to a new (more complete) list of information.</li>
									 		<li>Allows for returning results as an excel file or directly in the browser.</li>
									 		<li><b>Resolves a list of 20,000 names in under a minute by intelligently querying and displaying database results.</b></li>
									 	</ul>
								 	</li>
								 	</br>
								 	<li><b><u>Tree-View Hierarchy Search Filtering Engine</u></b> (asp-classic, ajax, ms-access, j-query, jsTree plugin)
									 	<ul>
									 		<li>Queries and displays a dynamically generated tree structure in an unordered list format. (custom recursive approach that is flexible enough to apply to any tree)</li>
									 		<li>Searches on any number of selected items at any depth within the tree.</li>
									 		<li>Processes and displays large amounts of data rapidly.</li>
									 		<li>Uses a custom-made fuzzy string search for parsing and determining what to do with addresses.</li>
									 	</ul>
								 	</li>
								 	</br>
								 	<li>And many more to come!</li>
								</ul>
							</p>
							</br>
						</div>
					</li>
					<li class="accordion-navigation">
						<a href="#panel1a">
							<div style="text-align:center;">
								<!--h4>TakingItGlobal</h4-->
								<img src="pics/tigBanner.png" style="height:70px; width:auto;">
							</div>
						</a>
						<div id="panel1a" class="content">
							<p>&nbsp;&nbsp;I spent most of my time at <a href="https://www.tigweb.org/" target="_blank">TakingItGlobal</a> closely working with sql queries such as search functions alongside php for displaying the results. This is where I first learned about query performance optimization, large data analysis and manipulation.</br>
								<h3>Some Completed Projects:</h3></br>
								 <ul><li>Search function (<a href="https://www.tigweb.org/community/members/index.html" target="_blank">TakingItGlobal Members Page</a>)</li>
										 <li>Various serverside admin tools</li>
										 <li>Xml feed crawler and analyzer</li>
										 <li>Data collection and transfer systems</li>
										 <li>Simple string parsers and manipulators (for understanding content dynamically)</li>
										 <li>Data Collection and Transfer Systems</li>
										 <li>And numerous others</li></ul></p>
						</div>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>

<div class="separator"></div>

<?php include("HeaderFooter/footer.php"); ?>
