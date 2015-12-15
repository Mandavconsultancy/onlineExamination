<?php include_once("include/header.php"); ?>

	<div class="container">
		<header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
            <p>To Online Test Portal</p>             
		</header>
	
		<div class="col-sm-12">		 
				<?php				 
					include("contentdb.php");					
					$display = mysql_query("SELECT * FROM $table ORDER BY id",$db);	
					if (!isset($_POST['submit'])){ ?>				
					
					<form method='post' action=''> 						
						<div class="col-sm-8">
							<div id="content">  
								<div id="my-tab-content" class="tab-content">
								 <?php 
									$i=0;
									while ($row = mysql_fetch_array($display)) 
									{
										
									$i++;
									$id = $row["id"];
									$question = $row["question"];
									$opt1 = $row["opt1"];
									$opt2 = $row["opt2"];
									$opt3 = $row["opt3"];
									$answer = $row["answer"];		
									?>						
									<div class="tab-pane panel panel-info <?php if($i==1){echo "active"; } ?>" id="q<?php echo $i; ?>">										
									 <div class="alert alert-info">Q<?php echo $i; ?>:  <?php echo $question; ?>  </div>
										<div class="panel-body">
											<div class="form-inline">
												<div class="controls-row">														
													<label class="radio inline">
														<input type='radio' class="fon" name='ans[<?php echo $i; ?>]' value="<?php echo $opt1; ?>">
													</label>
													<label class="control-label"><?php echo $opt1 ?></label> 
												</div>
											</div>
											<div class="form-inline">
												<div class="controls-row">													
													<label class="radio inline">
														<input type='radio' class="fon" name='ans[<?php echo $i; ?>]' value="<?php echo $opt2; ?>">
													</label>
													<label class="control-label"><?php echo $opt2 ?></label> 
												</div>
											</div>										
											<div class="form-inline">
												<div class="controls-row">
														
														<label class="radio inline">
															<input type='radio' class="fon" name='ans[<?php echo $i; ?>]' value="<?php echo $opt3; ?>">
															 
														</label>
														<label class="control-label"><?php echo $opt3 ?></label>
												<input type='radio' class="fon hidden" checked="checked" name='ans[<?php echo $i; ?>]' value="none">
												</div>
											</div>									 
										</div>
									</div>							  
								<?php	}?>
								
									<div style="float:right">								  
										<a class="btn btn-primary btnPrevious" >Previous</a>
									</div>
									<div style="float:left">
										<a class="btn btn-primary btnNext" >Next</a>
									</div>								
								</div>
							</div>
							
						</div>
						<div class="col-sm-4">	 
							<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
								<li class="active">
									<a href="#q1" data-toggle="tab">1</a></li>						 
								<li><a href="#q2" data-toggle="tab">2</a></li>
								<li><a href="#q3" data-toggle="tab">3</a></li>
								<li><a href="#q4" data-toggle="tab">4</a></li>
								<li><a href="#q5" data-toggle="tab">5</a></li>
								<li><a href="#q6" data-toggle="tab">6</a></li>
								<li><a href="#q7" data-toggle="tab">7</a></li>
								<li><a href="#q8" data-toggle="tab">8</a></li>
								<li><a href="#q9" data-toggle="tab">9</a></li>
								<li><a href="#q10" data-toggle="tab">10</a></li>
							</ul>
							<br/>	
							<input type='submit'class="btn btn-primary" value='See how you did' name='submit'>
							</form> 
						</div>
					<?php
					}
					elseif (isset($_POST['submit']) )
					{
						extract($_POST);
						$score = 0;
						$total = mysql_num_rows($display);
						$answer[]=array();
						$qus[]=array();
						
						while ($result = mysql_fetch_array($display)) 		
						{		
							$answer[] = $result["answer"];	
							$qus[] = $result["question"];	
							
						}					
						
						for($i=1; $i<count($answer)-1; $i++) {
								
							if ($answer[$i] == $ans[$i]) 
								$score++; 
							  
						}
						
						
						echo "<p align=center><b>You scored $score out of $total</b></p>";
						echo "<p>";
						
						if   ($score == $total) {
							echo "Congratulations! You got every question right!";
						}
						elseif ($score/$total < 0.34) {
							echo "Oh dear. Not the best score, but don't worry, it's only a quiz.";
						}
						elseif ($score/$total > 0.67) {
							echo "Well done! You certainly know your stuff.";
						}
						else {
							echo "Not bad - but there were a few that caught you out!";
						}
							echo "<br/>";
						for($i=1; $i<count($answer)-1; $i++)
						{								
							if ($answer[$i] == $ans[$i]) 								  
							{
								echo "&raquo;you answered <b> ".$ans[$i]."</b>, which is correct";
							}
							elseif($ans[$i] == "none") 
							{
								echo "&raquo;you didn't select an answer. The answer is <b>".$answer[$i]." </b>";
							}
							else 
							{
								echo "&raquo;you answered <b> ".$ans[$i]."</b>
								which  is Incorrect. The answer is<b> ". $answer[$i] ."</b> ";
							} 		
							echo "<br/>";							
						}		
					}
							
							
						 
						
							/* 
						 
							$display = mysql_query("SELECT * FROM $table ORDER BY id",$db);
							while ($row = mysql_fetch_array($display)) {

								$question = $row["question"];
								$answer = $row["answer"];
								$q = $row["q"];

							 

								if ($q == $answer) 
								{
										echo "<tr><td>&raquo;you answered ${$q}, which is correct</td></tr>";
								}
								elseif ($q == "") 
								{
									echo "<tr><td>&raquo;you didn't select an answer. The answer is $answer</td></tr>";
								}
								else 
								{
									echo "<tr><td>&raquo;you answered ${$q}. The answer is $answer</td></tr>";
								}

							}
							echo "</table></p>";
					}
					 */

							

					?> 
			</div>
		 
		</div>


	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('#tabs').tab();
		});
	</script>    
	</div> <!-- container -->
 
<?php include_once("include/footer.php"); ?>