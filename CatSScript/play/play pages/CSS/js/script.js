//selecting all required elements
const info_box = document.querySelector("#info_box");
const exit_btn = document.querySelector("#exit");
const continue_btn = document.querySelector("#continue");

const quiz_box = document.querySelector("#quiz_box");
const timeText = document.querySelector("#time_text");
const timeCount = document.querySelector("#timer");
const time_line = document.querySelector("#time_line");
const que_text = document.querySelector("#que_text");
const que_img = document.querySelector("#que_img");
const option_list = document.querySelector("#option_list");
const bottom_ques_counter = document.querySelector("#total_que");
const next_btn = document.querySelector("#next_btn");

const result_box = document.querySelector("#result_box");
const restart_quiz = document.querySelector("#restart");
const quit_quiz = document.querySelector("#quit");

const img_result = document.querySelector("#img_result");
const scoreText = document.querySelector("#score_text");

// creating the new div tags which for icons
let tickIconTag = '<span class="icon tick d-flex align-items-center justify-content-center"><i class="fas fa-check"></i></span>';
let crossIconTag = '<span class="icon cross d-flex align-items-center justify-content-center"><i class="fas fa-times"></i></span>';

const timer_duration = 15;
let timeValue = timer_duration;
let que_real_index;
let que_numb = 1;
let userScore = 0; //domande corrette risposte dell'utente
let counter;
let counterLine;
let widthValue = 0;
const step = 2;


// if exitQuiz button clicked
exit_btn.onclick = ()=>{
    location.replace("../../index.html");
}

// if continueQuiz button clicked
continue_btn.onclick = ()=>{
    info_box.style.display = "none"; //hide info box
    quiz_box.style.display = "flex"; //show quiz box
    showQuetions(que_numb); //calling showQestions function
    queCounter(que_numb); //passing 1 parameter to queCounter
    startTimer(timer_duration); //calling startTimer function
    startTimerLine(0); //calling startTimerLine function
}

// if restartQuiz button clicked
restart_quiz.onclick = ()=>{
    location.replace("index.html"); //reload the current window
}

// if quitQuiz button clicked
quit_quiz.onclick = ()=>{
    location.replace("../../index.html"); //reload the current window
}

// if Next Que button clicked
next_btn.onclick = ()=>{
    if(que_numb < questions.length/step){ //if question count is less than total question length
        que_numb++; //increment the que_numb value
        timeText.textContent = "Time Left"; //change the timeText to Time Left
        clearInterval(counter); //clear counter
        clearInterval(counterLine); //clear counterLine
        showQuetions(que_numb); //calling showQestions function
        queCounter(que_numb); //passing que_numb value to queCounter
        startTimer(timer_duration); //calling startTimer function
        startTimerLine(0); //calling startTimerLine function
    }else{
        clearInterval(counter); //clear counter
        clearInterval(counterLine); //clear counterLine
        showResult(); //calling showResult function
    }
}

// getting questions and options from array
function showQuetions(index){
    //creating a new span and div tag for question and option and passing the value using array index
    const x = Math.round(Math.random());
    que_real_index = (index*2)-2 + x;
    let que_tag = questions[que_real_index].numb + ". " + questions[que_real_index].question;
    let img_tag = "<img class='img-resize' src='../../../assets/img/play/" + questions[que_real_index].img + "'/>";
    let option_tag = 
    '<div class="option my-3 px-2 py-2 card-text d-flex justify-content-between align-items-center"><span>'+ questions[que_real_index].options[0] +'</span></div>' +
    '<div class="option my-3 px-2 py-2 card-text d-flex justify-content-between align-items-center"><span>'+ questions[que_real_index].options[1] +'</span></div>' +
    '<div class="option my-3 px-2 py-2 card-text d-flex justify-content-between align-items-center"><span>'+ questions[que_real_index].options[2] +'</span></div>' +
    '<div class="option my-3 px-2 py-2 card-text d-flex justify-content-between align-items-center"><span>'+ questions[que_real_index].options[3] +'</span></div>';
    que_text.innerHTML = que_tag; //adding new span tag inside que_tag
    que_img.innerHTML = img_tag;
    option_list.innerHTML = option_tag; //adding new div tag inside option_tag

    const option = option_list.querySelectorAll(".option");

    // set onclick attribute to all available options
    for(i=0; i < option.length; i++){
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
}

//if user clicked on option
function optionSelected(answer){
    clearInterval(counter); //clear counter
    clearInterval(counterLine); //clear counterLine
    let userAns = answer.textContent; //getting user selected option
    let correcAns = questions[que_real_index].answer; //getting correct answer from array
    const allOptions = option_list.children.length; //getting all option items
    
    if(userAns == correcAns){ //if user selected option is equal to array's correct answer
        userScore += 1; //upgrading score value with 1
        answer.classList.add("correct"); //adding green color to correct selected option
        answer.insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to correct selected option
        console.log("Correct Answer");
        console.log("Your correct answers = " + userScore);
    }else{
        answer.classList.add("incorrect"); //adding red color to correct selected option
        answer.insertAdjacentHTML("beforeend", crossIconTag); //adding cross icon to correct selected option
        console.log("Wrong Answer");

        for(i=0; i < allOptions; i++){
            if(option_list.children[i].textContent == correcAns){ //if there is an option which is matched to an array answer 
                option_list.children[i].classList.add("correct"); //adding green color to matched option
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
                console.log("Auto selected correct answer.");
            }
        }
    }
    for(i=0; i < allOptions; i++){
        option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
    }
}

function showResult(){
    quiz_box.style.display = "none";
    result_box.style.display = "flex";
    if (userScore > 3){ // if user scored more than 3
        //creating a new span tag and passing the user score number and total question number
        let imgTag = "<img class='img-resize' src='../../../assets/img/play/festa.svg'></img>";
        img_result.innerHTML = imgTag;
        let scoreTag = '<span>and congrats! 🎉, You got <b>'+ userScore +'</b> out of <b>'+ questions.length/step +'</b></span>';
        scoreText.innerHTML = scoreTag;  //adding new span tag inside score_Text
    }
    else if(userScore > 1){ // if user scored more than 1
        let imgTag = "<img class='img-resize' src='../../../assets/img/play/F4.svg'></img>";
        img_result.innerHTML = imgTag;
        let scoreTag = '<span>and nice 😎, You got <b>'+ userScore +'</b> out of <b>'+ questions.length/step +'</b></span>';
        scoreText.innerHTML = scoreTag;
    }
    else{ // if user scored less than 1
        let imgTag = "<img class='img-resize' src='../../../assets/img/play/molto_triste.svg'></img>";
        img_result.innerHTML = imgTag;
        let scoreTag = '<span>and sorry 😐, You got only <b>'+ userScore +'</b> out of <b>'+ questions.length/step +'</b></span>';
        scoreText.innerHTML = scoreTag;
    }
}

function startTimer(time){
    counter = setInterval(timer, 1000);
    function timer(){
        timeCount.textContent = time; //changing the value of timeCount with time value
        time--; //decrement the time value
        if(time < 9){ //if timer is less than 9
            timeCount.textContent = "0" + timeCount.textContent; //add a 0 before time value
        }
        if(time < 0){ //if timer is less than 0
            clearInterval(counter); //clear counter
            timeText.textContent = "Time Off"; //change the time text to time off
            const allOptions = option_list.children.length; //getting all option items
            let correcAns = questions[que_real_index].answer; //getting correct answer from array
            for(i=0; i < allOptions; i++){
                if(option_list.children[i].textContent == correcAns){ //if there is an option which is matched to an array answer
                    option_list.children[i].classList.add("correct"); //adding green color to matched option
                    option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
                    console.log("Time Off: Auto selected correct answer.");
                }
            }
            for(i=0; i < allOptions; i++){
                option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
            }
        }
    }
}

function startTimerLine(time){
    counterLine = setInterval(timer, 20.45);
    function timer(){
        time += 1; //upgrading time value with 1
        time_line.style.width = time/10 + "vw"; //increasing width of time_line with px by time value
        if(time > 799){ //if time value is greater than 549
            clearInterval(counterLine); //clear counterLine
        }
    }
}

function queCounter(index){
    //creating a new span tag and passing the question number and total question
    let totalQueCounTag = index +' of '+ questions.length/step +' Questions';
    bottom_ques_counter.innerHTML = totalQueCounTag;  //adding new span tag inside bottom_ques_counter
}