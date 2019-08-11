function rule()
{
  alert('Create a table that will store a total of 8, 10, 12 pictures that are of pairs (2 of each). Please allow user to select their choice.All pictures should be distributed randomly for each start of game. You are given 3 levels of difficulty 3, 5, 8 seconds to memorize the locations, after then the pictures will be hidden.Your goal is to match each of the 8 pictures with its copy, Click the two matching images to reveal them. Please wait for images to disappear, and then allow the user to make the next attempt. Game should be timed for both solving of the puzzle show some time of java script animation award and time frame allowed which should be set at 120 seconds for 8 photos, 150 seconds for 10 photos, and 180 seconds for 12 photos.');
}
    var myCards = $('#container');
    var resultsArray = [];
    var counter = 0;
    var text = $('#text');
    var seconds = 0;
    var tens = 0;
    var appendTens = $("#tens");
    var appendSeconds = $("#seconds");
    var Interval ;
    var images =
    [
      'image1',
      'image2',
      'image3',
      'image4',
      'image5',
      'image6',
      'image7',
      'image8',
      'image9',
      'image10',
      'image11',
      'image12',
    ];

    var clone = images.slice(0); // duplicate array
    var cards = images.concat(clone); // merge to arrays
    function wait(ms)
    {
    var d = new Date();
    var d2 = null;
    do { d2 = new Date(); }
    while(d2-d < ms);
    }
    // Shufffel function
    function shuffle(o){
      for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i],   o[i] = o[j], o[j] = x);
      return o;
    }
    shuffle(cards);

    for (var i = 0; i < cards.length; i++)
    {
      card = document.createElement('div');
      card.dataset.item = cards[i];
      card.dataset.view = "card";
      myCards.appendChild(card);
      card.className = 'ss';

      card.onclick = function()
       {

        if (this.className != 'flipped' && this.className != 'correct')
        {
            this.className = 'flipped';
            var result = this.dataset.item;
            resultsArray.push(result);
            clearInterval(Interval);
            Interval = setInterval(startTimer, 10);
        }

        if (resultsArray.length >1 )
        {
          if (resultsArray[0] === resultsArray[1]) {
            check("correct");
            counter ++;
            win();
            resultsArray = [];
          } else {
            check("reverse");
            resultsArray = [];
          }

        }

      }

    };
    function start()
    {


      ready();
      setTimeout('end();', 8000);

    }
    function ready()
    {

      var x = document.getElementsByClassName("ss");
      setTimeout(function()
       {

        for(var i = (x.length - 1); i >= 0; i--) {
          x[i].className = "default";
        }

      },500);

    }
    function end()
    {
      var y = document.getElementsByClassName("default");
      setTimeout(function()
       {

        for(var k = (y.length - 1); k >= 0; k--) {
          y[k].className = "ss";
        }

      },500);

    }

    var check = function(className)
     {

      var x = document.getElementsByClassName("flipped");
      setTimeout(function() {

        for(var i = (x.length - 1); i >= 0; i--) {
          x[i].className = className;
        }

      },550);

    }

    var win = function () {

      if(counter === 12)
      {
        clearInterval(Interval);
        alert("Congratulation! You won the game  Your time was " + seconds + ":" + tens);
          window.location.href = "match.html";

      }

    }

    function startTimer () {
      tens++;

      if(tens < 9){
        appendTens.html = "0" + tens;
      }

      if (tens > 9){
        appendTens.html = tens;

      }

      if (tens > 99) {
        seconds++;
        appendSeconds.html = "0" + seconds;
        tens = 0;
        appendTens.html = "0" + 0;
      }

      if (seconds > 9){
        appendSeconds.html = seconds;
      }

    }
