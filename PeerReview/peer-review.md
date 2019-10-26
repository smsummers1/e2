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
- Each function could use a bit of comments listed above the function to explain what the function does, what parameters are expected and what the output or return value is for.
- Comments on the arrays would be helpful to understand what each one is holding
- Comments for each of the conditional statements to explain what they are trying to achieve.


### List any/all built-in PHP functions used with a brief summary of what the function does


```php
whohas_thebutton()
//
```
  
```php
should_draw_a_card( $x )
//gives suggestion to user if they should draw a card
```

```php
draw_a_card( $x )
//user draws a card
```

```php
draw_a_hole_card( $x )
//user draws a hole card
```

```php
show_hand( $x )
//shows cards in hand
```

```php
apply_gamerules( $x )
//
```

```php
determine_outcome()
//decides who wins, looses, etc.
```

### Are there any parts of the code that you found interesting or taught you something new?
- lakjfalkj

### Are there any parts of the code that you don't understand?
- I had a really hard time following all of the global variables, the many arrays, and the functions.  

### Are there any best practices discussed in course material that you feel were not addressed in the code?
- Almost all of your functions utilize global variables.  It would be better to set up your functions with parameters and pass in arguments.  Using global variables can create a huge issue when debugging.  Check out this article:  https://www.lattix.com/programming-hell-and-global-variables/
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

### Do you have any additional comments not covered in the above questions?
- For more novice players like myself you might consider including more details in your Instructions.  In the ReadMe file I don't understand the second instruction *"Win instantly if the dealers hole card matches"* I don't know what a hole card is.
- In the ReadMe file it would be helpful to understand what the point values of each card, especially the Ace.  I thought the Ace could be two different values either a 1 or a 11, but it has been so long since I have played Blackjack so I did a search.  (https://www.google.com/search?q=blackjack+ace+value&rlz=1C5CHFA_enUS789US789&oq=blackjack+ace+value&aqs=chrome..69i57.4070j0j7&sourceid=chrome&ie=UTF-8)  May need more instructions for us novice players.  ;)
- What is the *Bummer* card that gets dealt to the dealer?
- Who wins if everyone busts?
- Who wins if multiple players get the same number closest to 21?
- Who wins if multiple players get Blackjack?




