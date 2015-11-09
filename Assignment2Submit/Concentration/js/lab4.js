
$(document).ready(function() {
	// settings
  var $listNode = $('#image_list');
  var $captionNode = $('#caption');
  var $imageNode = $('#image');
      
  var $imageNode1 = $('#Image1');
  var lastCardNumber = 0;
  var clickNumber = 0;
  var gameOver = false;
  var numberOfCards = 10;
  var cardsInaDeck = 54; //including Jokers  
  
  //Grab all the images from the html 
  for (var y = 1; y < (numberOfCards + 1); y++) {
	var $currentImage = "$imageNode" + y;
	var $currentImageId = "#Image" + y;
	$currentImage = $($currentImageId);
  }
  
  var links = $listNode.find('a');
  var imageCache = [];
  var imageCounter = 0;
  var lastCardId = "";
  var clickFlag = "true";
  
  //Put the images in an array we can work with
  for (var i=0; i < links.length; i++)
  {
	  var linkNode = links[i];
	  	  
	  var image = new Image();
	  
	  image.src = $(linkNode).attr('href');
	  image.alt = $(linkNode).attr('title');
	  
	  imageCache.push(image);	  
	  
  }
  
  //Set up variables to keep track of cards, their status(face up or down), ids, matches found
  var backImage = new Image();
  backImage = imageCache[cardsInaDeck];
 
  var cardsToPlay = [];
  var faceUpOrDown = [];
  var card = 0;
  var cardsSelected = 0;
  var selectedAlready;
  var cardClicked = 0;
  var cardId = "";
  var matchesFound = 0;
  
  //Select five cards at random and put each in an array twice to make five matching pairs, ten cards in total on the 
  //game board
  while (cardsSelected < 5) {
		 selectedAlready = "No";
		 card = Math.floor((Math.random() * cardsInaDeck) + 1) - 1;		 
		 if (cardsSelected > 0) {
			for (var j=0; j < cardsToPlay.length; j++)
			{
				if (card == cardsToPlay[j]) {
					selectedAlready = "Yes";
				}
			}			
		 }
		 if (selectedAlready == "No")
			{
				cardsToPlay.push(card);
				cardsToPlay.push(card);
				cardsSelected++;
			}
	}
  
	var currentIndex = cardsToPlay.length, temporaryValue, randomIndex ;

  // Randomize the order of cards 
  // While there remain elements to shuffle...
	while (0 !== currentIndex) {

		// Pick a remaining element...
		randomIndex = Math.floor(Math.random() * currentIndex);
		currentIndex -= 1;

		// And swap it with the current element.
		temporaryValue = cardsToPlay[currentIndex];
		cardsToPlay[currentIndex] = cardsToPlay[randomIndex];
		cardsToPlay[randomIndex] = temporaryValue;
	  }

	  //Set all cards to a status of facedown
	  for (var s=0; s < cardsToPlay.length; s++)  {
		  faceUpOrDown[s] = 0;  //zero will mean face down.  		  
	  }
	  
	  //We will use a timer to tell the player how long they took to finish the game
	  var start = new Date;
	  var timeElapsed;
	 
		setInterval(function() {		
			if (gameOver == false) {
				timeElapsed = Math.round((new Date - start) / 1000, 0);
				 $('.Timer').text(Math.round((new Date - start) / 1000, 0) + " Seconds"); 
			}
		}, 1000);
	
    //On click events need to be set up for each object serving as an image on the game board.  	
	$('#Image1').on('click', function(e) {
			e.preventDefault();
			cardClicked = 1;
			
			incrementClickNumber(cardClicked, "#Image1");
			
	   });
	   
  $('#Image2').on('click', function(e) {
			e.preventDefault();			
			incrementClickNumber(2, "#Image2");			
	   });
	   
  $('#Image3').on('click', function(e) {
			e.preventDefault();			
			incrementClickNumber(3, "#Image3");			
	   });
	   
  $('#Image4').on('click', function(e) {
			e.preventDefault();			
			incrementClickNumber(4, "#Image4");			
	   });
	   
  $('#Image5').on('click', function(e) {
			e.preventDefault();			
			incrementClickNumber(5, "#Image5");			
			incrementClickNumber(card, "#Image5");
	   });
	   
  $('#Image6').on('click', function(e) {
			e.preventDefault();
			incrementClickNumber(6, "#Image6");			
			
	   });
	   
  $('#Image7').on('click', function(e) {
			e.preventDefault();			
			incrementClickNumber(7, "#Image7");
	   });
	   
  $('#Image8').on('click', function(e) {
			e.preventDefault();			
			incrementClickNumber(8, "#Image8");
	   });
	   
   $('#Image9').on('click', function(e) {
			e.preventDefault();			
			incrementClickNumber(9, "#Image9");
	   });
	   
  $('#Image10').on('click', function(e) {
			e.preventDefault();			
			incrementClickNumber(10, "#Image10");
	   });  
  
  
  function incrementClickNumber(card, cardId) {
	  if (clickFlag == "true" && faceUpOrDown[card - 1] == 0) {
		 if (lastCardNumber != card) {
			 var cardImageNumber = cardsToPlay[card - 1];
			 var image = imageCache[cardImageNumber];
			 $(cardId).attr('src', image.src);
			 faceUpOrDown[card - 1] = 1;
			 clickNumber++;
			  if (clickNumber == 2)
			  {
				  //After you click two cards, if they don't match you have to wait three seconds,
				  //This is often a constraint in concentration games. 
				 if (cardsToPlay[card - 1] != cardsToPlay[lastCardNumber - 1]) {
							clickFlag = "false";
				
							setTimeout(function() {
						  // Do something after 3 seconds
						  // This can be direct code, or call to some other function
							 $(cardId).attr('src', backImage.src);
							 faceUpOrDown[card - 1] = 0;
							 $(lastCardId).attr('src', backImage.src);	
							 faceUpOrDown[lastCardNumber - 1] = 0;
							 //lastCardNumber = card;
							 //lastCardId = cardId;
							 lastCardNumber = 0;
							 lastCardId = "";
							 clickFlag = "true";
						 }, 3000);					
				}
				else {
					matchesFound++;
					if (matchesFound == 5) {
						alert("All done!  You took " + timeElapsed + " seconds!");
						gameOver = true;
					}
				}
				clickNumber = 0;
						
			}	
			else {
				lastCardNumber = card;
				lastCardId = cardId;
			}	
		}
		
    }	
  }
 });
  
  
  


