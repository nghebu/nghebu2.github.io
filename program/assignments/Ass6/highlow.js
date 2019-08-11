var counter = 10;
var seconds = 0;
var tens = 0;
var appendTens = document.getElementById("tens");
var appendSeconds = document.getElementById("seconds");
var Interval ;
function yourGuess()
{

var guess = document.getElementById("guess").value;
var guesses = document.getElementById("output");

clearInterval(Interval);
Interval = setInterval(startTimer, 10);
if (counter === 0)
{
    guesses.value = guesses.value + "\r" + "You Run out of try, the number is ("+numToGuess+")";
    generateNumberToGuess();
    counter=10;
}
if (guess == numToGuess) {
    guesses.value = guesses.value + "\r" + "You have guessed correctly! ("+guess+"), ("+counter+") tries left";
} else if (guess > numToGuess)
{
    counter--;
    guesses.value = guesses.value + "\r" + "You guessing too high!("+guess+"), ("+counter+") tries left";
} else
{
  counter--;
    guesses.value = guesses.value + "\r" + "You guessing too low!("+guess+"), ("+counter+") tries left";
}
}

function showNumberToGuess() {
// Show the randomly generated number if the onclick event
// fires and the checkbox is check; otherwise, remove the
// number and hide using display: none;.
if (document.getElementById('cheat').checked) {
    document.getElementById('numberToGuess').value = numToGuess;
    document.getElementById('cheatShow').style.display = 'inline';
} else {
    document.getElementById('numberToGuess').value = '';
    document.getElementById('cheatShow').style.display = 'none';
}
}

// Randomly generate a number
function generateNumberToGuess(confirmIt)
{
var guesses = document.getElementById("output");

// First, confirm this is what we want if the confirmIt
// argument was passed.
if (confirmIt && !confirm('Restart game with new number?')) {
    return;
}

guesses.value = '';
numToGuess = Math.floor(Math.random()*100);
guesses.value = "New number generated.\n";

// Don't forget to hide the new number.
document.getElementById('numberToGuess').value = '';
document.getElementById('cheatShow').style.display = 'none';
}

function showGuesses()
{
var guesses = document.getElementById('guesses');
var btn = document.getElementById('showguesses');

if (guesses.style.display != 'block') {
    guesses.style.display = 'block';
    btn.value = 'Hide My Guesses';
} else {
    guesses.style.display = 'none';
    btn.value = 'Show My Guesses';
}
}

window.onload = function()
{
generateNumberToGuess();

}
var audio = new Audio('chill.mp3');
audio.play();

function startTimer () {
  tens++;

  if(tens < 9){
    appendTens.innerHTML = "0" + tens;
  }

  if (tens > 9){
    appendTens.innerHTML = tens;

  }

  if (tens > 99) {
    seconds++;
    appendSeconds.innerHTML = "0" + seconds;
    tens = 0;
    appendTens.innerHTML = "0" + 0;
  }

  if (seconds > 9){
    appendSeconds.innerHTML = seconds;
  }

}
