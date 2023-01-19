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
	const questionIndex = 25;
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
function InitQuestion26()
{
    const type = QMAKE_BOOLEAN;
    const questionIndex = 25;
    var choice, valuation, noChoice = false;;
    var weight = DecodeNumber('eqVOybhN6/A=', 562, 0, 99999);
    var numOfAnswers = 1;
    var question = new Question(type, weight, numOfAnswers, DecodeDecimal('eqVOybhN6/A=', 562, -1000, 1000),DecodeDecimal('b9RPlj1fzAM=', 562, -1000, 1000),DecodeDecimal('b9RPlj1fzAM=', 562, -1000, 1000));
    question.num = 26;
    question.answers.length = 0;
    question.shortTextQuestion = "E' corretto dire che la UIR è la regione di controllo superiore?";
    choice = GetBooleanChoice(questionIndex,0);
    noChoice = noChoice || !IsBooleanChoiceSelected(questionIndex, 0);
    valuation = DecodeNumber('LBlyYqwyeQU=', 562, -1, 1);
    if (valuation === -2) PrintWrongKeyword(questionIndex);
    var answer0 = new Answer(choice, valuation, 1, 0, '');
    answer0.shortTextAnswer = " ";
    question.answers.push(answer0);
    question.noChoice = noChoice;
    return question;

}


/* Code generated function */
function ClearQuestion26()
{
    const questionIndex = 25;
    ClearBooleanChoice(questionIndex,0);

}






