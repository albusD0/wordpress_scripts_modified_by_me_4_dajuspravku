isroman.addEventListener("click", converter); 

var digit_numeric = [1,4,5,9,10,40,50,90,100,400,500,900,1000,4000,5000,9000,10000];
var digit_roman = ["I","IV","V","IX","X","XL","L","XC","C","CD","D","CM","M",
"M&#8577;","&#8577;","&#8577;&#8578;","&#8578;"];

function to_roman(text) {
 if (!text) return "?";
 var rezult = '';
 var n = digit_numeric.length - 1;
 while (text > 0) {
    if (text >= digit_numeric[n]) {
        rezult += digit_roman[n];
        text -= digit_numeric[n];
    }
    else n--;
 }
  if (rezult==false) 
    {return "?";}
 else
    {return rezult;}
}

function to_numeric(text) {
 var text = text.toUpperCase();
 var rezult = 0;
 var posit = 0;
 var n = digit_numeric.length - 1;
 while (n >= 0 && posit < text.length) {
    if (text.substr(posit, digit_roman[n].length) == digit_roman[n]) {
        rezult += digit_numeric[n];
        posit += digit_roman[n].length;
    }
    else n--;
 }
 if (rezult==0) 
    {return "?";}
 else
    {return rezult;}
}

function converter() {
 converterform = window.document.roman_online_converter;
 str = converterform.numeric.value;
 if (converterform.roman_to_numeric.checked == true) 
    {
        //str = str.match(/^(?i)M{0,3}(D?C{0,3}|C[DM])(L?X{0,3}|X[LC])(V?I{0,3}|I[VX])$/i);
        //str = str.join();
        itog = to_numeric(str);
    }
 else 
    {itog = to_roman(str);}
 
 converterform.numerals.value = itog;
 rez.innerHTML = str.toUpperCase()+" = "+itog;
}