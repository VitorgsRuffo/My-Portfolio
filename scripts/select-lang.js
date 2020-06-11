//this script will select the select element on the header then will add it an event listener that noticies when the select value changes.
let select = document.querySelector("#select-lang");

select.addEventListener("change", setLanguage);

function setLanguage(){
    let language = select.options[select.selectedIndex].value;
    
    //to get the current php file path.
    let filePath = window.location.pathname;

    //making a get request to current page and passing the selected language as a value.
    window.location.href="http://vitorgsruffo:8080"+filePath+"?lang="+language;
}