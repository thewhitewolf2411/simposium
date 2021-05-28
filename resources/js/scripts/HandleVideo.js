$(document).ready(function(){

    $('#livevideobtn').on('click', function(){
        let day1 = new Date(2021, 4, 7);
        let day2 = new Date(2021, 4, 8);
        let day3 = new Date(2021, 4, 9);
    
        if(isToday(day1)){
            window.open('https://zoom.us/j/92397780559', '_blank');
        }
        else if(isToday(day2)){
            window.open('https://zoom.us/j/96324360410', '_blank');
        }
        else if(isToday(day3)){
            window.open('https://zoom.us/j/94918098079', '_blank');
        }
        else{
            alert("Event trenutno nije alert.");
        }
    });
});

const isToday = (date) => {
    const today = new Date()
    return date.getDate() === today.getDate() &&
        date.getMonth() === today.getMonth() &&
        date.getFullYear() === today.getFullYear();
};