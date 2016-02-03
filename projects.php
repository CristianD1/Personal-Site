<?
  $title = "Cristian David - CS major";
  $description = "My Projects";
  $keywords = "";
  $tabLocation = "projects";
  include("HeaderFooter/header.php");
?>

<?

session_start();

$db_host ="localhost";
$db_user ="skillzon";
$db_pass ="Cristian1";
$db_database ="SkillzOnBase";

// Create Connection
$conn = new mysqli($db_host, $db_user,  $db_pass, $db_database);
// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlSelect = "SELECT ProjectName, Link, Language, SmallName, Description, DateCreated FROM Projects ORDER BY DateCreated DESC;";

$projs = $conn->query($sqlSelect);

$projsArr = array();

?>

<div class="separator"></div>

	<div class="row">
		<div class="large-12 columns">

<?
$prevYear = -1;
$rowFlip = false;
$inRow = 0;
while($row = $projs->fetch_assoc()) {
	//array_push($projsArr, array($row["ProjectName"], $row["Link"], $row["Language"], $row["SmallName"]));

		$currYear = $row["DateCreated"];
		if($currYear != $prevYear){
			$prevYear = $currYear;
			$rowFlip = true;
			?>

			<div class="row">
				<div class="large-12 columns">
					<div class="projectTextBoxTitle projectDateCreated">
					<? echo $currYear ?>
					</div>
				</div>
			</div>

			<!-- <div class="row"> -->
			<?
			 $inRow = 2;
		}

			if($inRow == 0){
				?>
				<div class="row">
				<?
			}
			?>
					<div class="large-6 columns">

						<div class="projectListing">
							<div class="projectImg">
								<a href="<? echo $row["Link"] ?>">
									<img src="pics/projectPictures/<?echo $row["SmallName"]?>.png">
								</a>
							</div>
							<div class="projectTextBox">
								<div class="projectTextBoxTitle">
									<a href="<? echo $row["Link"] ?>" style="color:white">
										<?echo $row["ProjectName"]?>
									</a>
								</div>
								<div class="projectTextBoxLanguage">
									Made with <?echo $row["Language"]?>
								</div>
								<div class="projectTextBoxDescription">
								<?echo $row["Description"]?>
								</div>
							</div>
						</div>

					</div>
			<?

			$inRow ++;

			if($inRow == 2){
				?>
				</div>
				<?
				$inRow = 0;
				$rowFlip = false;
			}

			?>

<?
	}
?>
			</div>
	</div>
<?
	$conn->close();
?>

<div class="separator"></div>

<? include("HeaderFooter/footer.php"); ?>