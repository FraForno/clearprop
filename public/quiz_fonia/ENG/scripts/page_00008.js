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
	const questionIndex = 7;
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
function InitQuestion8()
{
    const type = QMAKE_MULTIANS;
    const questionIndex = 7;
    var weight = DecodeNumber('afKEaffgQVk=', 959, 0, 99999);
    var numOfAnswers = 4;
    var question = new Question(type, weight, numOfAnswers, DecodeDecimal('afKEaffgQVk=', 959, -1000, 1000),DecodeDecimal('oM2z4Xm5hDg=', 959, -1000, 1000),DecodeDecimal('oM2z4Xm5hDg=', 959, -1000, 1000));
    question.answers.length = 0;
    question.num = 8;
    question.isSingleAns = true;
    question.shortTextQuestion = "\"GO AROUND\" means:";
    question.timeToAnswer = 0;
    var choice = GetSingleAnswerChoice(questionIndex);
    if (choice === 0) question.noChoice = true;
    var valuation1 = DecodeNumber('afKEaffgQVk=', 961, -1, 1);
    if (valuation1 === -2) PrintWrongKeyword(questionIndex);
    var answer1 = new Answer((choice == 1 ? 1 : 0), valuation1, 1, 0, '');
    answer1.shortTextAnswer = "Overtake the aircraft ahead";
    answer1.shortTextRemark = "";
    question.answers.push(answer1);
    var valuation2 = DecodeNumber('tOjlfBAu9ak=', 963, -1, 1);
    if (valuation2 === -2) PrintWrongKeyword(questionIndex);
    var answer2 = new Answer((choice == 2 ? 1 : 0), valuation2, 1, 0, '');
    answer2.shortTextAnswer = "Make a 360� turn";
    answer2.shortTextRemark = "";
    question.answers.push(answer2);
    var valuation3 = DecodeNumber('hXPB+JRds6E=', 965, -1, 1);
    if (valuation3 === -2) PrintWrongKeyword(questionIndex);
    var answer3 = new Answer((choice == 3 ? 1 : 0), valuation3, 1, 0, '');
    answer3.shortTextAnswer = "Taxi past the aircraft on the holding point";
    answer3.shortTextRemark = "";
    question.answers.push(answer3);
    var valuation4 = DecodeNumber('z/hSIJFVjpk=', 326, -1, 1);
    if (valuation4 === -2) PrintWrongKeyword(questionIndex);
    var answer4 = new Answer((choice == 4 ? 1 : 0), valuation4, 1, 0, '');
    answer4.shortTextAnswer = "Carry out a missed approach";
    answer4.shortTextRemark = "";
    question.answers.push(answer4);
    return question;

}


/* Code generated function */
function ClearQuestion8()
{
    const questionIndex = 7;
    ClearSingleAnswerChoices(questionIndex);

}





