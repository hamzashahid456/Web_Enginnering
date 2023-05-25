var avgMarks = 0;

var david = document.getElementById("david").textContent;
var vinoth = document.getElementById("vinoth").textContent;
var divya = document.getElementById("divya").textContent;
var ishitha = document.getElementById("ishitha").textContent;
var thomas = document.getElementById("thomas").textContent;

avgMarks = parseInt(david) + parseInt(vinoth) + parseInt(divya) + parseInt(ishitha) + parseInt(thomas);
avgMarks = avgMarks / 5;
document.getElementById("avgmarks").textContent = avgMarks;

var grade = '';
if(avgMarks <= 100 && avgMarks >=90){
    grade = 'A';
}
else if(avgMarks < 90 && avgMarks >=80){
    grade = 'B';
}
else if(avgMarks < 80 && avgMarks >=70){
    grade = 'C';
}
else if(avgMarks < 70 && avgMarks >=60){
    grade = 'D';
}
else {
    grade = 'F';
}

document.getElementById("avgGrade").textContent = grade;