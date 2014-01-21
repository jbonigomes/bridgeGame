<?php

$playerNames = ['North', 'East', 'South', 'West'];
$suits = ['Spades', 'Hearts', 'Diamonds', 'Clubs'];

$deck = createDeck($suits);
$players = createPlayers($playerNames);

shuffle($deck);

distributeCards($players, $deck);

function createDeck($suits)
{
	$deck = array();

	foreach($suits as $suit)
	{
		for($i = 1; $i < 14; $i++)
		{
			array_push($deck, array($suit => $i));
		}
	}

	return $deck;
}

function distributeCards($players, $deck)
{

}

function createPlayers($players)
{
	$playersArray = array();

	foreach($players as $player)
	{
		array_push(new $playersArray);
	}

	return $playersArray;
}

class player
{
	private $name;
	private $hand;

	public function __construct($name)
	{
		$this->name = $name;
		$this->hand = array();
	}

	public function receiveCard($card)
	{
		array_push($this->hand, $card);
	}
}

?>