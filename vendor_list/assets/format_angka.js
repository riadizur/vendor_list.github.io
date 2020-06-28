	function number_format (number, decimals, dec_point, thousands_sep){
		// Formats a number with grouped thousands
		//
		// version: 906.1806
		// discuss at: http://phpjs.org/functions/number_format
		// +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
		// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
		// +     bugfix by: Michael White (http://getsprink.com)
		// +     bugfix by: Benjamin Lupton
		// +     bugfix by: Allan Jensen (http://www.winternet.no)
		// +    revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
		// +     bugfix by: Howard Yeend
		// +    revised by: Luke Smith (http://lucassmith.name)
		// +     bugfix by: Diogo Resende
		// +     bugfix by: Rival
		// +     input by: Kheang Hok Chin (http://www.distantia.ca/)
		// +     improved by: davook
		// +     improved by: Brett Zamir (http://brett-zamir.me)
		// +     input by: Jay Klehr
		// +     improved by: Brett Zamir (http://brett-zamir.me)
		// +     input by: Amir Habibi (http://www.residence-mixte.com/)
		// +     bugfix by: Brett Zamir (http://brett-zamir.me)
		// *     example 1: number_format(1234.56);
		// *     returns 1: '1,235'
		// *     example 2: number_format(1234.56, 2, ',', ' ');
		// *     returns 2: '1 234,56'
		// *     example 3: number_format(1234.5678, 2, '.', '');
		// *     returns 3: '1234.57'
		// *     example 4: number_format(67, 2, ',', '.');
		// *     returns 4: '67,00'
		// *     example 5: number_format(1000);
		// *     returns 5: '1,000'
		// *     example 6: number_format(67.311, 2);
		// *     returns 6: '67.31'
		// *     example 7: number_format(1000.55, 1);
		// *     returns 7: '1,000.6'
		// *     example 8: number_format(67000, 5, ',', '.');
		// *     returns 8: '67.000,00000'
		// *     example 9: number_format(0.9, 0);
		// *     returns 9: '1'
		// *     example 10: number_format('1.20', 2);
		// *     returns 10: '1.20'
		// *     example 11: number_format('1.20', 4);
		// *     returns 11: '1.2000'
		// *     example 12: number_format('1.2000', 3);
		// *     returns 12: '1.200'
	var n = number, prec = decimals;

	var toFixedFix = function (n,prec) {
		var k = Math.pow(10,prec);
		return (Math.round(n*k)/k).toString();
	};

	n = !isFinite(+n) ? 0 : +n;
	prec = !isFinite(+prec) ? 0 : Math.abs(prec);
	var sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep;
	var dec = (typeof dec_point === 'undefined') ? '.' : dec_point;

	var s = (prec > 0) ? toFixedFix(n, prec) : toFixedFix(Math.round(n), prec); //fix for IE parseFloat(0.55).toFixed(0) = 0;

	var abs = toFixedFix(Math.abs(n), prec);
	var _, i;

	if (abs >= 1000) {
		_ = abs.split(/\D/);
		i = _[0].length % 3 || 3;

		_[0] = s.slice(0,i + (n < 0)) +
			  _[0].slice(i).replace(/(\d{3})/g, sep+'$1');
		s = _.join(dec);
	} else {
		s = s.replace('.', dec);
	}

	var decPos = s.indexOf(dec);
	if (prec >= 1 && decPos !== -1 && (s.length-decPos-1) < prec) {
		s += new Array(prec-(s.length-decPos-1)).join(0)+'0';
	}
	else if (prec >= 1 && decPos === -1) {
		s += dec+new Array(prec).join(0)+'0';
	}
	return s; 
	}

	function currencyFormat(fld, milSep, decSep, e){
		/*
			This script and many more are available free online at
			The JavaScript Source!! http://www.javascriptsource.com
			Created by: Mario Costa |  
		*/
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

	function currency(which){
		/*	
			This script and many more are available free online at
			The JavaScript Source!! http://www.javascriptsource.com
			Created by: Pavel Donchev | http://chameleonbulgaria.com/ 
		*/
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

	function angka(nilai){
		var nilai	= nilai	? nilai	: 0;
		var a = nilai.split(',').join('');
		var b = eval(a);
		return b;
    }
	
	function trimNumber(s){
		decimal=false;
		while (s.substr(0,1) == '0' && s.length>1) {
			s = s.substr(1,9999);
		}
		while (s.substr(0,1) == '.' && s.length>1) {
			s = s.substr(1,9999);
		}
		return s;
	}
	
	function ard_rp(objek){
		a = (objek.value).replace("Rp. ","");
		b = a.replace(/[^\d.-]/g,"");
		c = "";
		panjang = b.length;
		j = 0;
		for (i = panjang; i > 0; i--) {
			j = j + 1;
			if (((j % 3) == 1) && (j != 1))
			{c = b.substr(i-1,1) + "," + c;} 
			else
			{c = b.substr(i-1,1) + c;}
		}
		objek.value = trimNumber(c);
	}
	
	
	function ada_rp(objek){
		a	= objek.value;
		b	= a.split("Rp. ").join("");
		objek.value	= "Rp. "+b;
	}
	
	
	function hilang_rp(objek){
		a	= objek.value;
		objek.value	= a.split("Rp. ").join("");
	}
	
	
	function kalender(tanggal){
		var th		= tanggal.substr(6,4);
		var bl		= tanggal.substr(3,2);
		var hr		= tanggal.substr(0,2);
		
		return th+'-'+bl+'-'+hr;
	}
	
	
	function kale(tanggal){
		var th		= tanggal.substr(0,4);
		var bl		= tanggal.substr(5,2);
		var hr		= tanggal.substr(8,2);
		
		return hr+'/'+bl+'/'+th;
	}
	
	
