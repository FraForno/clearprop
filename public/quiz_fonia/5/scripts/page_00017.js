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
	const questionIndex = 16;
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
function InitQuestion17()
{
    const type = QMAKE_MULTIANS;
    const questionIndex = 16;
    var weight = DecodeNumber('a1nHhUcJJMU=', 1169, 0, 99999);
    var numOfAnswers = 4;
    var question = new Question(type, weight, numOfAnswers, DecodeDecimal('a1nHhUcJJMU=', 1169, -1000, 1000),DecodeDecimal('yIzsgYMecNs=', 1169, -1000, 1000),DecodeDecimal('yIzsgYMecNs=', 1169, -1000, 1000));
    question.answers.length = 0;
    question.num = 17;
    question.isSingleAns = true;
    question.shortTextQuestion = "Se durante il volo un pilota nota una barca in difficolt�:";
    question.timeToAnswer = 0;
    var choice = GetSingleAnswerChoice(questionIndex);
    if (choice === 0) question.noChoice = true;
    var valuation1 = DecodeNumber('VCsqrESqdaI=', 1171, -1, 1);
    if (valuation1 === -2) PrintWrongKeyword(questionIndex);
    var answer1 = new Answer((choice == 1 ? 1 : 0), valuation1, 1, 0, '');
    answer1.shortTextAnswer = "Avviser� l'ente con cui � in contatto usando PAN PAN ripetuto tre volte fornendo la posizione e tutte le informazioni necessarie per assistere la barca";
    answer1.shortTextRemark = "";
    question.answers.push(answer1);
    var valuation2 = DecodeNumber('VCsqrESqdaI=', 1173, -1, 1);
    if (valuation2 === -2) PrintWrongKeyword(questionIndex);
    var answer2 = new Answer((choice == 2 ? 1 : 0), valuation2, 1, 0, '');
    answer2.shortTextAnswer = "Avviser� l'ente con cui � in contatto usando MAYDAY ripetuto tre volte fornendo la posizione e tutte le informazioni necessarie per assistere la barca";
    answer2.shortTextRemark = "";
    question.answers.push(answer2);
    var valuation3 = DecodeNumber('w4oNhsEknfU=', 1175, -1, 1);
    if (valuation3 === -2) PrintWrongKeyword(questionIndex);
    var answer3 = new Answer((choice == 3 ? 1 : 0), valuation3, 1, 0, '');
    answer3.shortTextAnswer = "Avviser� l'ente con cui � in contatto";
    answer3.shortTextRemark = "";
    question.answers.push(answer3);
    var valuation4 = DecodeNumber('8fXHSc510FE=', 1177, -1, 1);
    if (valuation4 === -2) PrintWrongKeyword(questionIndex);
    var answer4 = new Answer((choice == 4 ? 1 : 0), valuation4, 1, 0, '');
    answer4.shortTextAnswer = "Guarder� incuriosito";
    answer4.shortTextRemark = "";
    question.answers.push(answer4);
    return question;

}


/* Code generated function */
function ClearQuestion17()
{
    const questionIndex = 16;
    ClearSingleAnswerChoices(questionIndex);

}






