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
	const questionIndex = 30;
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
function InitQuestion31()
{
    const type = QMAKE_BOOLEAN;
    const questionIndex = 30;
    var choice, valuation, noChoice = false;;
    var weight = DecodeNumber('6cz+4BcaJQA=', 1266, 0, 99999);
    var numOfAnswers = 1;
    var question = new Question(type, weight, numOfAnswers, DecodeDecimal('6cz+4BcaJQA=', 1266, -1000, 1000),DecodeDecimal('bT2rCFqQBPg=', 1266, -1000, 1000),DecodeDecimal('bT2rCFqQBPg=', 1266, -1000, 1000));
    question.num = 31;
    question.answers.length = 0;
    question.shortTextQuestion = "Un messaggio di Urgenza ha la precedenza su un messaggio di Pericolo:";
    choice = GetBooleanChoice(questionIndex,0);
    noChoice = noChoice || !IsBooleanChoiceSelected(questionIndex, 0);
    valuation = DecodeNumber('qE1n2ErKow8=', 1266, -1, 1);
    if (valuation === -2) PrintWrongKeyword(questionIndex);
    var answer0 = new Answer(choice, valuation, 1, 0, '');
    answer0.shortTextAnswer = " ";
    question.answers.push(answer0);
    question.noChoice = noChoice;
    return question;

}


/* Code generated function */
function ClearQuestion31()
{
    const questionIndex = 30;
    ClearBooleanChoice(questionIndex,0);

}






