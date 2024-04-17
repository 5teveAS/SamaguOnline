
actualTheme();

$(document).ready(function () {
    $('.search-select-box select').selectize({
        sortField: 'text'
    });
    // if(document.getElementById('darkmode').checked) {
    //     $("html").attr("class", "dark-theme")
    //     localStorage.setItem("tema",'dark-theme');
    // }
    // if(document.getElementById('lightmode').checked) {
    //     $("html").attr("class", "light-theme")
    //     localStorage.setItem("tema",'light-theme');
    // }
    // if(document.getElementById('semidark').checked) {
    //     $("html").attr("class", "semi-dark")
    //     localStorage.setItem("tema",'semi-dark');
    // }
    // if(localStorage.getItem("tema") === 'dark-theme'){
    //     document.querySelector('#darkmode').checked = true;
    // }
    // if(localStorage.getItem("tema") === 'light-theme'){
    //     document.querySelector('#lightmode').checked = true;
    // }
    // if(localStorage.getItem("tema") === 'semi-dark'){
    //     document.querySelector('#lightmode').checked = true;
    // }

});

function actualTheme(){
    let tema = localStorage.getItem("tema");
    console.log(tema);

    if(tema === 'dark-theme'){
        document.querySelector('#darkmode').checked = true;
        $("html").attr("class", "dark-theme")
    }
    if(tema === 'light-theme'){
        document.querySelector('#lightmode').checked = true;
        $("html").attr("class", "light-theme")
    }
    if(tema === 'semi-dark'){
        document.querySelector('#semidark').checked = true;
        $("html").attr("class", "semi-dark")
    }
    if(tema === 'minimal-theme'){
        document.querySelector('#minimaltheme').checked = true;
        $("html").attr("class", "minimal-theme")
    }
}

function CheckedDark(){
    localStorage.setItem("tema",'dark-theme');
    $("html").attr("class", "dark-theme")
}
function CheckedLight(){
    localStorage.setItem("tema",'light-theme');
    $("html").attr("class", "light-theme")
}
function CheckedSemi(){
    localStorage.setItem("tema",'semi-dark');
    $("html").attr("class", "semi-dark")
}
function CheckedMinimal(){
    localStorage.setItem("tema",'minimal-theme');
    $("html").attr("class", "minimal-theme")
}
