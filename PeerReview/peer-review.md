## P3 Peer Review

+ Reviewer's name: Shawna Summers
+ Reviwee's name: Phil Yuska
+ URL to reviewee's Github repo: *<https://github.com/philyuska/e2/tree/master/p3>*

*Answer the following questions in regards to the student's project you are reviewing. Include code snippets in your answers when relevant.*

### Initial thoughts and feedback
- Seriously amazing job!  
- I totally enjoyed playing and learning more about Blackjack.  
- I like how you had three players where two were the user and one was the computer.  Nice touch!
- I also thought adding the imagery was an excellent idea!!!

### Are you able to produce any errors or unexpected results?
- **Disclaimer:**  I am not sure that there are actually errors and since my knowledge of Blackjack is based on recent Google Searches even my expected results may be off.  So please take these next few points with a grain of salt and realize that I am a total newbie!  :)
- Still says Player 1 has Blackjack, but they no longer have Blackjack, right?
![Player1 doesn't have Blackjack](https://github.com/smsummers1/e2/blob/master/PeerReview/Screen%20Shot%202019-10-25%20at%206.57.37%20PM.png)
- This one says *Blackjack Busted* instead of the total number of points. And again not sure the player still has Blackjack.

![Player1 says Blackjack Busted](https://github.com/smsummers1/e2/blob/master/PeerReview/Screen%20Shot%202019-10-25%20at%207.09.16%20PM.png)
- The output says that the total points for player1 and player2 are 21, but that isn't actually the total.  Seems to me that it should still give the correct total points, but post each as a winner because the dealer was dealt the **yahPoo** card.
![yahPoo Card point total off](https://github.com/smsummers1/e2/blob/master/PeerReview/Screen%20Shot%202019-10-25%20at%207.16.52%20PM.png)

### Referencing the course notes on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.
- Utilizing **Design C**
![Design Flow C](https://github.com/smsummers1/e2/blob/master/PeerReview/Screen%20Shot%202019-10-26%20at%209.47.58%20AM.png)
### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)? 
- From what I understand in the video from Week 5 Part 4 (19:57) where it explains Design Flow C I believe the following should occur in your code flow......
- *index-controller.php* is supposed to get results from the session for the index.php file.  Much of your index-controller.php file is processing and setting session variables which is supposed to occur in the process.php file.
- *index.php* is supposed to display the form and final game results. This seems to be well accomplished in your index.php file.
- *process.php* is supposed to process data, contain logic, with no output, then set session variables, and finally redirecting to index.php file.  Seems that you are splitting this task between your process.php file and your index-controller.php file when it all should be accomplished in the process.php.....I think.  Again, still learning this stuff myself and am not completely sure I am correct on this understanding.  :)

### Are there aspects of the code that you feel were not self-evident and would benefit from comments?
- Without comments I really struggled understanding your functions, arrays, and conditional statements.
- Each function could use a bit of comments listed above the function explaining what the function does, what parameters are expected and what the output or return value is for.
- Comments on the arrays would be helpful to understand what each one is holding
- Comments for each of the conditional statements to explain what they are deciding.  


### List any/all built-in PHP functions used with a brief summary of what the function does

**array_keys()** - 

**in_array()** - 

**array_shift()** - 

**array_key_exists()** - 

**unset()** - 

**dechex()** - 

**rand()** - 

**hexdec()** - 

**count()** - 

**session_start()** - 

**isset()** - 

**ucfirst()** - 

**shuffle()** - 

**join()** - 

**header()** - 

### List any/all user-defined PHP functions used with a brief summary of what the function does

**whohas_thebutton()** - decides who's turn it is
  
```php
should_draw_a_card( $x )
//gives suggestion to user if they should draw a card based on the total point total they have.  
```

```php
draw_a_card( $x )
//current player draws a card
```

```php
draw_a_hole_card( $x )
//computer draws a hole card
```

```php
show_hand( $x )
//stores cards in current players hand array location
```

```php
apply_gamerules( $x )
//storing additional information in the current players array such as setting ['blackjack'], ['total'], ['bonus'], etc based on the stored cards in the array
```

```php
determine_outcome()
//stores who wins, looses, busts, etc. based on the total points in current players hand.
```

### Are there any parts of the code that you found interesting or taught you something new?
- The game-lib.php file I found to be an interesting way further better modularize the code and separate code for developers.  

### Are there any parts of the code that you don't understand?
- I had a really hard time following all of the global variables, the many arrays, and the functions.
- The show_hand() function doesn't actually show the cards.
- The apply_gamerules() function is so long that I get lost in all that it is trying to accomplish.  It would have helped me to understand it better if it was broken down into smaller functions, but that is just me.  :) 
- The $strategy array was hard for me to wrap my head around.
- It took me a while to understand what was being stored in the variable $x.

### Are there any best practices discussed in course material that you feel were not addressed in the code?
- Almost all of your functions utilize global variables.  It would be better to set up your functions with parameters and pass in arguments.  Using global variables can create a huge issue when debugging.  Check out this article:  https://www.lattix.com/programming-hell-and-global-variables/ . Another option might be to store the global variables as superglobal session variables.  Not sure the best way to go there.

```php 
function whohas_thebutton()
{
	global $players;
```
  
```php
function should_draw_a_card( $x )
{
	global $players, $dealer;
```
```php
function draw_a_card( $x )
{
	global $deck, $players;
```
```php
function draw_a_hole_card( $x )
{
	global $deck, $players;
```
```php
function show_hand( $x )
{
	global $deck, $players;
```
```php
function apply_gamerules( $x )
{
	global $inital_handsize, $deck, $players, $dealer;
```
```php
function determine_outcome()
{
	global $players, $max_players, $dealer;
```
- Not a single comment listed in the code.  
- The use of $x throughout your code is confusing to me.  If I am understanding your code correctly it might be better to use a variable that is more self documenting with a variable like $current_player instead of $x.  I provided a few examples below.....

**Code Before**
```php
for ( $x = 1; $x <= $max_players; $x++ )
{
	if ( $players[ $x ]['blackjack'] )
		$players[ $x ]['digest'][] = "total is {$players[ $x ]['total']}, black jack";

	if ( $players[ $x ]['bonus'] )
		$players[ $x ]['digest'][] = "bonus win";			
}
```
**Code After**

```php
for ( $Current_Player = 1; $Current_Player <= $max_players; $Current_Player++ )
{
	if ( $players[ $Current_Player ]['blackjack'] )
		$players[ $Current_Player ]['digest'][] = "total is {$players[ $Current_Player ]['total']}, black jack";

	if ( $players[ $Current_Player ]['bonus'] )
		$players[ $Current_Player ]['digest'][] = "bonus win";			
}
```
**Code Before**
```php
$players[ $x ]['digest'][] = "took hit";
draw_a_card( $x );
$players[ $x ]['advise_hit'] = should_draw_a_card( $x );	
```
**Code After**
```php
$players[ $Current_Player ]['digest'][] = "took hit";
draw_a_card( $Current_Player );
$players[ $Current_Player ]['advise_hit'] = should_draw_a_card( $Current_Player );	
```

### Do you have any additional comments not covered in the above questions?
- For more novice players like myself you might consider including more details in your Instructions.  :)
- In the ReadMe file it would be helpful to understand what the point values of each card, especially the Ace.  I thought the Ace could be two different values either a 1 or a 11, but it has been so long since I have played Blackjack so I did a search.  (https://www.google.com/search?q=blackjack+ace+value&rlz=1C5CHFA_enUS789US789&oq=blackjack+ace+value&aqs=chrome..69i57.4070j0j7&sourceid=chrome&ie=UTF-8)  
- What happens if everyone busts?
- Who wins if multiple players get the same number closest to 21?
- Who wins if multiple players get Blackjack?




