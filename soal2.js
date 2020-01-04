
const validateEmail = (email) => {
	const re =  /^\d[A-Za-z0-9.-]+@[a-zA-Z0-9.-]+.[a-zA-z]$/gmi
	if(re.test(email)) return true
	return false
}

const validatePass = (pass) => {
	const re = /(?=.*[a-z]{4})(?=.*[0-9]{2})(?=.*[a-z]{4})(?=.*[#?!@$%^&*-]{1})[a-zA-Z0-9#?!@$%^&*-]{9}/gmi
	if(re.test(pass)) return true
	return false	
}

// validatePass() and validateEmail BIG O => O(1) 

//valid email and pass
console.log(validateEmail("3dara@gmail.com"))
console.log(validatePass("#words99!"))

//invalid email and pass
console.log(validateEmail("dara's@gmail.com."));
console.log(validatePass("worngP4ss!"));