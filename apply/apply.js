'use strict';




let initial = 0;





document.querySelector("input[name='calculate']").addEventListener("click", function(e) {
    e.preventDefault();

    let grades = document.querySelectorAll(".grade");
    let totalSubject = parseInt(grades.length)


    grades.forEach(grade => {
        console.log(grade.value)
        initial += parseFloat(grade.value);
    })

    document.querySelector(".totalGrade").textContent = (initial / totalSubject).toFixed(2);
})