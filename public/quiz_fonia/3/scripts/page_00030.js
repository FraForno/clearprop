//=========================================
// File name: page_NNNNN.js
//-----------------------------------------
// Project : QuizFaber 4.1.7
// Licence : GNU General Public License v3.0
// Author  : Luca Galli
// Email   : info@quizfaber.com
//-----------------------------------------
// Script for NNNNN-th question
//=========================================



$(document).ready(function ()
{
	const questionIndex = 29;
	const questionTime = 0;

	PageLoad(questionIndex, questionTime);

	
});

$(window).on("beforeunload", function ()
{
	PageUnload();
	window.scrollTo(0, 0);
});

$(window).on("scroll", function ()
{
	PageOnScroll();
});


/* Code generated function */
function InitQuestion30()
{
    const type = QMAKE_BOOLEAN;
    const questionIndex = 29;
    var choice, valuation, noChoice = false;;
    var weight = DecodeNumber('zCwYxTSyTW4=', 331, 0, 99999);
    var numOfAnswers = 1;
    var question = new Question(type, weight, numOfAnswers, DecodeDecimal('zCwYxTSyTW4=', 331, -1000, 1000),DecodeDecimal('8fq5LiWyfnI=', 331, -1000, 1000),DecodeDecimal('8fq5LiWyfnI=', 331, -1000, 1000));
    question.num = 30;
    question.answers.length = 0;
    question.shortTextQuestion = "Un messaggio di Urgenza ha la precedenza su un messaggio di pericolo:";
    choice = GetBooleanChoice(questionIndex,0);
    noChoice = noChoice || !IsBooleanChoiceSelected(questionIndex, 0);
    valuation = DecodeNumber('7Khy3B1hFFI=', 331, -1, 1);
    if (valuation === -2) PrintWrongKeyword(questionIndex);
    var answer0 = new Answer(choice, valuation, 1, 0, '');
    answer0.shortTextAnswer = " ";
    question.answers.push(answer0);
    question.noChoice = noChoice;
    return question;

}


/* Code generated function */
function ClearQuestion30()
{
    const questionIndex = 29;
    ClearBooleanChoice(questionIndex,0);

}






