<!DOCTYPE html>
<html>
<head>
	<title>Commander Browser</title>
	<link rel="stylesheet" type="text/css" href="semanticUI/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semanticUI/semantic.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>
<body>
<div class="ui grid content">

	<div class="three wide column side-menu">
		<h1></h1>
		<div class="three ui vertical buttons segment-format">	 
			  	<button class="ui massive teal button">40 Cards</button>
			  	<button class="ui massive blue button">60 Cards</button>
			  	<button class="ui massive teal button">99 Cards</button>
		</div>
		<h1></h1>



		
			<table class="ui table mana-table">
				<tbody>
					<tr>
						<td>
						
							<div class="ui fluid icon buttons mana-icon">
							  <button class="ui yellow basic button"><img class="img-small" src="w.png"></button>
							  <button class="ui yellow basic button"><img class="img-small" src="w.png"></button>
							  <button class="ui yellow basic button"><img class="img-small" src="w.png"></button>
							</div>
							<!-- <select data-color="white" class="ui fluid selection dropdown js-select-symbols">
								<option value="1">W</option>
						  		<option value="2">WW</option>
						 		<option value="3">WWW</option>
							</select> -->
						</td>
						<td>
							<select data-color="white" class="ui fluid selection dropdown js-select-turn">
								<option value=""></option>
						  		<option value="0">Turn 1</option>
						 		<option value="1">Turn 2</option>
						 		<option value="2">Turn 3</option>
						 		<option value="3">Turn 4</option>

							</select>
						</td>
					</tr>
					<tr>
						<td>
							<div class="ui fluid icon buttons mana-icon">
							  <button class="ui active blue basic button"><img class="img-small" src="u.png"></button>
							  <button class="ui blue basic button"><img class="img-small" src="u.png"></button>
							  <button class="ui blue basic button"><img class="img-small" src="u.png"></button>
							</div>
						</td>
						<td>
							<select data-color="blue" class="ui fluid selection dropdown js-select-turn">
								<option value=""></option>
						  		<option value="0">Turn 1</option>
						 		<option value="1">Turn 2</option>
						 		<option value="2">Turn 3</option>
						 		<option value="3">Turn 4</option>
							</select>
						</td>
					</tr>
		
				</tbody>
			</table>
		


	</div> <!--end of menu-->




  <div class="thirteen wide column">
  	<h1>You need...</h1>
	 	
	 	<div class="ui five column grid">
			 <div class="column">
			  	<button class="circular ui yellow icon button" id="white-needed">
			  		0
				</button>
			</div>
			 <div class="column">
			  	<button class="circular ui blue icon button" id="blue-needed">0
				</button>
			</div>
			 <div class="column">
			  	<button class="circular ui black icon button">0
				</button>
			</div>
			 <div class="column">
			  	<button class="circular ui red icon button">0
				</button>
			</div>
			 <div class="column">
			  	<button class="circular ui green icon button">0
				</button>
			</div>

			  
		</div>
		<h1>You have...</h1>
	 	
	 	<div class="ui five column grid">
			 <div class="column">
			  	<button class="circular ui yellow icon button"><p>0</p>
				</button>
			</div>
			 <div class="column">
			  	<button class="circular ui blue icon button">0
				</button>
			</div>
			 <div class="column">
			  	<button class="circular ui black icon button">0
				</button>
			</div>
			 <div class="column">
			  	<button class="circular ui red icon button">0
				</button>
			</div>
			 <div class="column">
			  	<button class="circular ui green icon button">0
				</button>
			</div>

			  
		</div>


	</div>

</div>
	

<!--
	

	

		<div class="ui cards">

			<div class="ui card" >
			  <div class="ui medium image">
			    <img src="image.jpg" class="visible content">
			    
			  </div>
			  <div class="content">
				    <div id="kruphixgodofhorizons" class="ui animated primary basic button fullWidth" tabindex="0">
					  <div class="visible content">
					  	Kruphix, God of Horizons
					  </div>
					  <div class="hidden content">
					    View Details
					  </div>
					</div>
			  </div>
			  <div class="extra content">
			    <a>
			      <i class="hashtag icon"></i>
			      Ramp
			    </a>
			  </div>
			  <div class="ui bottom attached progress">
	    <div class="bar"></div>
	  </div>
			</div>

			<div class="ui card" >
			  <div class="ui medium image">
			    <img src="mael.jpg" class="visible content">
			  </div>
			  <div class="content">
				    <div id="maelstromwanderer" class="ui animated primary basic button fullWidth" tabindex="0">
					  <div class="visible content">
					  	Maelstrom Wanderer
					  </div>
					  <div class="hidden content">
					    View Details
					  </div>
					</div>
			  </div>
			  <div class="extra content">
			    <a>
			      <i class="hashtag icon"></i>
			      Ramp
			    </a>
			  </div>
			</div>
		</div> 


	</div>

	<div class="ui modal">
			<i class="close icon"></i>
			<div id="modalTitle" class="header">
				UNDEFINED
			</div>
			<div class="image content">
			    <div class="ui medium image">
			    	<img id="modalImage" src="http://bmcet.bmefcolleges.edu.in/uploads/notfound.jpg">
			    </div>
			    
			</div>
		  <div class="scrolling content">
			    <div class="description">
			      <div id="modalRank" class="ui header">We've auto-chosen a profile image for you.</div>
			      <p id="modalOracle">
			      		//Main
						1 Kruphix, God of Horizons #!Commander
						1 Archaeomancer
						1 Beast Within
						1 Blatant Thievery
						1 Breeding Pool
						1 Capsize
						1 Chord of Calling
						1 Clever Impersonator
						1 Command Tower
						1 Conjurer's Closet
						1 Consecrated Sphinx
						1 Counterspell
						1 Crystal Shard
						1 Cultivate
						1 Cyclonic Rift
						1 Deadeye Navigator
						1 Defense of the Heart
						1 Disallow
						1 Doubling Cube
						1 Emrakul, the Promised End
						1 Eternal Witness
						1 Exotic Orchard
						1 Fierce Empath
						1 Flooded Grove
						12 Forest
						1 Gilded Lotus
						1 Green Sun's Zenith
						1 Greenwarden of Murasa
						1 Grim Monolith
						1 Hinterland Harbor
						1 Homeward Path
						14 Island
						1 Jin-Gitaxias, Core Augur
						1 Kefnet the Mindful
						1 Kodama's Reach
						1 Leyline of Anticipation
						1 Magosi, the Waterveil
						1 Mana Drain
						1 Mana Reflection
						1 Muddle the Mixture
						1 Myriad Landscape
						1 Mystical Tutor
						1 Nature's Lore
						1 Nissa, Steward of Elements
						1 Omniscience
						1 Oracle of Mul Daya
						1 Palinchron
						1 Phyrexian Metamorph
						1 Planar Bridge
						1 Praetor's Counsel
						1 Primal Command
						1 Prime Speaker Zegana
						1 Rhystic Study
						1 Rite of Replication
						1 Sakura-Tribe Elder
						1 Seedborn Muse
						1 Simic Growth Chamber
						1 Skyshroud Claim
						1 Sol Ring
						1 Solemn Simulacrum
						1 Song of the Dryads
						1 Swan Song
						1 Sylvan Library
						1 Temple of the False God
						1 Temporal Manipulation
						1 Thespian's Stage
						1 Thought Reflection
						1 Thran Dynamo
						1 Tidespout Tyrant
						1 Time Stretch
						1 Time Warp
						1 Tooth and Nail
						1 Vorinclex, Voice of Hunger
						1 Walk the Aeons
						1 Worldly Tutor
						1 Yavimaya Coast
			      </p>
			      <p>Is it okay to use this photo?</p>
			    </div>	  
		  </div>

		  
		  <div class="actions">
		    <div class="ui black deny button">
		      Close
		    </div>

		    
		  </div>
	</div>
	<!-- end of modal -->
	<!--
	</div>

-->
</body>
</html>