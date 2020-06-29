/* This script and many more are available free online at
The JavaScript Source!! http://www.javascriptsource.com
Created by: Mario Costa |  */
function currencyFormat(fld, milSep, decSep, e) {
  var sep = 0;
  var key = '';
  var i = j = 0;
  var len = len2 = 0;
  var strCheck = '0123456789';
  var aux = aux2 = '';
  var whichCode = (window.Event) ? e.which : e.keyCode;

  if (whichCode == 13) return true;  // Enter
  if (whichCode == 8) return true;  // Delete
  key = String.fromCharCode(whichCode);  // Get key value from key code
  if (strCheck.indexOf(key) == -1) return false;  // Not a valid key
  len = fld.value.length;
  for(i = 0; i < len; i++)
  if ((fld.value.charAt(i) != '0') && (fld.value.charAt(i) != decSep)) break;
  aux = '';
  for(; i < len; i++)
  if (strCheck.indexOf(fld.value.charAt(i))!=-1) aux += fld.value.charAt(i);
  aux += key;
  len = aux.length;
  if (len == 0) fld.value = '';
  if (len == 1) fld.value = '0'+ decSep + '0' + aux;
  if (len == 2) fld.value = '0'+ decSep + aux;
  if (len > 2) {
    aux2 = '';
    for (j = 0, i = len - 3; i >= 0; i--) {
      if (j == 3) {
        aux2 += milSep;
        j = 0;
      }
      aux2 += aux.charAt(i);
      j++;
    }
    fld.value = '';
    len2 = aux2.length;
    for (i = len2 - 1; i >= 0; i--)
    fld.value += aux2.charAt(i);
    fld.value += decSep + aux.substr(len - 2, len);
  }
  return false;
}

/* This script and many more are available free online at
The JavaScript Source!! http://www.javascriptsource.com
Created by: Pavel Donchev | http://chameleonbulgaria.com/ */

function currency(which){
		currencyValue = which.value;
		currencyValue = currencyValue.replace(",", "");
		decimalPos = currencyValue.lastIndexOf(".");
		if (decimalPos != -1){
				decimalPos = decimalPos + 1;
		}
		if (decimalPos != -1){
				decimal = currencyValue.substring(decimalPos, currencyValue.length);
				if (decimal.length > 2){
						decimal = decimal.substring(0, 2);
				}
				if (decimal.length < 2){
						while(decimal.length < 2){
							 decimal += "0";
						}
				}
		}
		if (decimalPos != -1){
				fullPart = currencyValue.substring(0, decimalPos - 1);
		} else {
				fullPart = currencyValue;
				decimal = "00";
		}
		newStr = "";
		for(i=0; i < fullPart.length; i++){
				newStr = fullPart.substring(fullPart.length-i-1, fullPart.length - i) + newStr;
				if (((i+1) % 3 == 0) & ((i+1) > 0)){
						if ((i+1) < fullPart.length){
							 newStr = "," + newStr;
						}
				}
		}
		which.value = newStr + "." + decimal;
}
//
//function normalize(which){
//		alert("Normal");
//		val = which.value;
//		val = val.replace(",", "");
//		which.value = val;
//}
//

function angka(nilai){
        if (nilai== null){
            nilai = '0';    
        }
        
        var a = nilai.split(',').join('');
        var b = eval(a);
        return b;
    }