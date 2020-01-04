const countChar = (str,x) => {
	let count = 0;
	str = str.split("");
	function counting(str,x){
		if(!str.length) return;
		let char = str.shift();
		if(char == x){
			count++;
			counting(str,x);
		}else{
			counting(str,x);
		}
	}

	counting(str,x);

	if(!count) return "Not found"
	return count;
}

//BIG O => O(log n) with recrusion

console.log(countChar("arkademy","a"));
console.log(countChar("javascript", "x"));
console.log(countChar("peace!", "!"));
