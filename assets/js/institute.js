function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Engineering"){

var optionArray = ["|","Civil Engineering|Civil Engineering","Mechanical & Mechatronics Engineering|Mechanical & Mechatronics Engineering","Electrical Engineering|Electrical Engineering","Computer Science Engineering|Computer Science Engineering","Computer Science-Software development|Computer Science-Software Development","Electronics and Communication Engineering|Electronics and Communication Engineering","Humanities and Social Sciences|Humanities and Social Sciences","Mathematics|Mathematics","Chemistry|Chemistry","Physics|Physics","List of Faculty|List Of Faculty","Approvals|Approvals"];

	} else if(s1.value == "Management"){
		var optionArray = ["|","mmim(mm istitute of management)|MMIM (MM Insitute of Management)"];

	} else if(s1.value == "Computer Applications"){
		var optionArray = ["|","mmict & bm|MMICT & BM"];
	}
if(s1.value == "Hotel Management"){
		var optionArray = ["|","mmict & bm|MMICT & BM "];

	} else if(s1.value == "Pharmacy"){
		var optionArray = ["|","mm college of phramacy(mmcp)|M.M. College of Pharmacy (MMCP) "];


} else if(s1.value == "Nursing(Co-Education)"){
var optionArray = ["|","b.sc nursing|B.Sc Nursing","m.sc nursing|M.Sc Nursing","phd in nursing|PHD in Nursing","diploma in  nursing|Diploma in Nursing"];

}

if(s1.value == "Physiotherapy & Rehabilition")
{
var optionArray = ["|","musculosketal disorders|Musculosketal Disorders","neurological disorders|Neurological Disorders","cardio-thoracic disorders|Cardio-Thoracic Disorders","sports injuries|Sports Injuries","pediatric disorders|Pediatric Disorders","phd in physiotherapy programme|PhD in Physiotheraphy Programme"];

} 


else if(s1.value == "Law"){
var optionArray = ["|","judiciary|Judiciary","civil services|Civil Services","government organisation|Government Organisation","coorporate sector|Coorporate Sector","insurance law|Insurance Law","immigration law|Immigration law","service law|Service law","forensic science|Forensic Science","ipr|IPR","ngos|NGOs","lpos|LPOs","academics & research|Academics & Research"];

}

 else if(s1.value == "Dental Sciences")
{		

var optionArray = ["|","conservative denistry & endodontics|Conservative Denistry & Endodontics","oral medicine & radiology|Oral Medicine & Radiology","oral & maxillofacial surgery|Oral & Maxillofacial Surgery","oral pathology|Oral Pathology","orthodontics|Orthodontics","pedodontics & preventive denistry|Pedodontics & Preventive Denistry","periodontology & oral implantology|Periodontology & Oral Implantology","prosthodontics|Prosthodontics","public health dentistry|Public Health Dentistry","list of faculty|List of Faculty"];
	
}

else if(s1.value == "Medical Sciences"){
var optionArray = ["|","mbbs(under graduate)|MBBS(Under Graduate)","md/ms(post graduate)|MD/MS(Post Graduate)","dm,mch(super specilaity)|DM,MCH(Super Speciality)"];

}


	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}