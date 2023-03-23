var xPointer = 0;
var yPointer = 0;

function resetCurrent() {
    curr = $('.currentBox');
    $.each(curr, function(i,e) {
        $(e).removeClass('currentBox');
    })
}

function getCurrent() {
    var letter= getLetter(yPointer, xPointer);
    $(letter).addClass('currentBox');
}

function incX(){
    if (xPointer <= 3){
        xPointer++;
    }
    
}

function decX(){
    if (xPointer >= 1){
        xPointer--;
    }
}


function getLetter(row, column) {
    var res = $("#gameContainer").find('[data-row=' + row + ']');
    res = $(res).find('[data-column=' + column + ']');
    return res;
}
function setLetter(row, column, data){
    var letter = getLetter(row, column);
    $(letter).html(data);
}

$(document).ready(function () {
    $(this).keydown(function (e) { 
        resetCurrent();
        console.log(e.key);
        console.log(e.which);
        var reg = /^[a-z|A-Z]{1}$/;
        
        if (e.which == 8) {
            setLetter(yPointer, xPointer, "");
            decX()
            getCurrent();
            return;
        } else {
        if (reg.test(e.key)){

            
            
            setLetter(yPointer, xPointer, e.key);
            incX()
        }
        getCurrent();
    }
    });
});