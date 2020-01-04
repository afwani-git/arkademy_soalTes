const palidrom = (str) => {
	let validChar = [];
	let strAwal;

	for(let x=65;x<123;x++){
		if(x > 90 && x < 97 ){
			continue;
		}
		validChar.push(String.fromCharCode(x));
	}

	//filter char
	let pureStr = ""
	for(let x of str){
		if(validChar.includes(x)){
			pureStr += x;
		}	
	}

	strAwal = pureStr;
	pureStr = pureStr.toLowerCase();

	//rev char
	let revStr = "";
	for(let x=pureStr.length-1;x>=0;x--){
		revStr+=pureStr[x]
	}

	//check char
	let character = {
		upper:0,
		lower:0
	}

	for(let x=0;x<strAwal.length;x++){
		if(strAwal[x] == strAwal[x].toUpperCase()){
			character['upper'] += 1
		}else{
			character['lower'] += 1
		}
	}


	if(revStr != pureStr) return "bukan kata palidrom";

	if((!character.lower && character.upper) || (character.lower && !character.upper)){
		return "palidrom murni";
	}else if(character.upper == 1){
		return "palidrom kapital";
	}else if (character.lower == 1) {
		return "palidrom kecil";
	}else{
		return "palidrom mix";
	}

}

console.log(palidrom("Malam890"));
console.log(palidrom("M77ALAm"));
console.log(palidrom("MalaM"));
console.log(palidrom("mal55_am"));
console.log(palidrom("MALAM"));
console.log(palidrom("MALAAM"));