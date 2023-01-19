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
	const questionIndex = 23;
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
function InitQuestion24()
{
    const type = QMAKE_BOOLEAN;
    const questionIndex = 23;
    var choice, valuation, noChoice = false;;
    var weight = DecodeNumber('wwG0bcCTUYo=', 522, 0, 99999);
    var numOfAnswers = 1;
    var question = new Question(type, weight, numOfAnswers, DecodeDecimal('wwG0bcCTUYo=', 522, -1000, 1000),DecodeDecimal('PGbLYae513w=', 522, -1000, 1000),DecodeDecimal('PGbLYae513w=', 522, -1000, 1000));
    question.num = 24;
    question.answers.length = 0;
    question.shortTextQuestion = "Per operare negli spazi aerei italiani tutti i velivoli e gli elicotteri devono essere equipaggiati di transponder a capacità di modo A e C o S funzionanti";
    choice = GetBooleanChoice(questionIndex,0);
    noChoice = noChoice || !IsBooleanChoiceSelected(questionIndex, 0);
    valuation = DecodeNumber('Mjp2H7Zp8Ig=', 522, -1, 1);
    if (valuation === -2) PrintWrongKeyword(questionIndex);
    var answer0 = new Answer(choice, valuation, 1, 0, '');
    answer0.shortTextAnswer = " ";
    question.answers.push(answer0);
    question.noChoice = noChoice;
    return question;

}


/* Code generated function */
function ClearQuestion24()
{
    const questionIndex = 23;
    ClearBooleanChoice(questionIndex,0);

}






