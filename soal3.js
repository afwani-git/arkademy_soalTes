const validateHex = (hex) => {
	hex = hex.toLowerCase();

	const thisHastag =  hex.split("").shift();

	if(!thisHastag) return "Format Hex Code salah!";
	if(!(hex.length-1 == 3 || hex.length-1 == 6)) return  "Format Hex Code salah!";

	for(let x=0;x<hex.length;x++){
		if(!(hex[x] <= 'f' || hex[x].charCodeAt(0) < 'a' || hex[x] > 1 || hex[x] < 9)){
			return "Format Hex Code salah!";
		}
	}

	return "Format Hex Code benar!";
}

//BIG O => O(n)

console.log(validateHex("#FFF"))
console.log(validateHex("#e3e3e3"))
console.log(validateHex("#ata910"))
