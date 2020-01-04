const fs = require('fs');

function myBio(name,age){

	const data = {
		name:name,
		age:age,
		address:"Kec.Trowulan Kab.Mojokerto JawaTimur",
		hobbies:['game','coding','rebahan'],
		is_married:false,
		list_school:[
			{
				name:"SDN beloh",
				year_in:2007,
				year_out:2012,
			},
			{
				name:"SMPN 1 Trowulan",
				year_in:2012,
				year_out:2015,
			},
			{
				name:"MAN 2 Mojokerto",
				year_in:2015,
				year_out:2018,
			},
			{
				name:"Institut Asia Malang",
				year_in:2018,
				year_out:null
			}
		],
		skill:[
			{
				skill_name:'React JS',
				level:'beginner'
			},
			{
				skill_name:'Express Js',
				level:'beginner'
			},
			{
				skill_name:'Javascript',
				level:'advanced'
			},
			{
				skill:"css/scss/bootstrap",
				level:'beginner'
			},
			{
				skill:"python",
				level:"beginner"
			},
			{
				skill:"html/pug",
				level:"beginner"
			},
			{
				skill:"mysql",
				level:"beginner"
			},
			{
				skill:"mongodb",
				level:"beginner"
			}
		],
		interest_in_coding:true
	} 

	fs.writeFileSync("./myBio.json",JSON.stringify(data));

	return JSON.stringify(data)	
}

console.log(myBio("afwani shofiyulloh",20));