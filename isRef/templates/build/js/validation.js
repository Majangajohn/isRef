function validateschoolsentry() {
	//validating schools input fields
var schoolname = document.getElementById('schoolname');
var schoolcode = document.getElementById('schoolcode');
var schoollevel = document.getElementById('schoollevel');
var schooltype = document.getElementById('schooltype');
var sublocation = document.getElementById('sublocation');
var location = document.getElementById('slocation');
var ward = document.getElementById('schoolward');
var constituency = document.getElementById('schoolconstituency');
var subcounty = document.getElementById('schoolsubcounty');
var county = document.getElementById('schoolcounty');
var facility = document.getElementById('facility_type');
var sphyaddress = document.getElementById('sphyaddress');
var teacher = document.getElementById('scontactteacher');
var teachertel = document.getElementById('scontactteachertel');
var teacheremail = document.getElementById('scontactteacheremail');

//getting teacher error
var schoolnameeror = document.getElementById('name-error');
var schoolcodeerror = document.getElementById('code-error');
var schoollevelerror = document.getElementById('level-error');
var schooltypeerror = document.getElementById('type-error');
var sublocationerror = document.getElementById('sublocation-error');
var locationerror = document.getElementById('location-error');
var warderror = document.getElementById('ward-error');
var constituencyerror = document.getElementById('constituency-error');
var subcountyerror = document.getElementById('subcounty-error');
var countyerror = document.getElementById('county-error');
var facilityerror = document.getElementById('facilitytype-error');
var sphyaddresserror = document.getElementById('physicaladdress-error');
var teachererror = document.getElementById('contactperson-error');
var teachertelerror = document.getElementById('contactpersontel-error');
var teacheremailerror = document.getElementById('contactpersonemail-error');
var teacheremailerror = document.getElementById('contactpersonemail-error');


// school statistics information
var malestudents = document.getElementById('malestudents');
var femalestudents = document.getElementById('femalestudents');
var totalstudents = document.getElementById('totalstudents');
var lowerstudents = document.getElementById('lowerstudents');
var upperstudents = document.getElementById('upperstudents');
var maleteachers = document.getElementById('mteachers');
var femaleteachers = document.getElementById('fteachers');
var totalteachers = document.getElementById('tteachers');
var mnonteachers = document.getElementById('mnteachers');
var fnonteachers = document.getElementById('fnteachers');
var tnonteachers = document.getElementById('tnteachers');
var dmstudents = document.getElementById('dmstudents');
var dfstudents = document.getElementById('dfstudents');
var tdstudents = document.getElementById('tdstudents');

// school statistics information error
var malestudentserror = document.getElementById('malestudents-error');
var femalestudentserror = document.getElementById('femalestudents-error');
var totalstudentserror = document.getElementById('totalstudents-error');
var lowerstudentserror = document.getElementById('lowerstudents-error');
var upperstudentserror = document.getElementById('upperstudents-error');
var maleteacherserror = document.getElementById('mteachers-error');
var femaleteacherserror = document.getElementById('fteachers-error');
var totalteacherserror = document.getElementById('tteachers-error');
var mnonteacherserror = document.getElementById('mnteachers-error');
var fnonteacherserror = document.getElementById('fnteachers-error');
var tnonteacherserror = document.getElementById('tnteachers-error');
var dmstudentserror = document.getElementById('dmstudents-error');
var dfstudentserror = document.getElementById('dfstudents-error');
var tdstudentserror = document.getElementById('tdstudents-error');

// school infrastructure information
var classrooms = document.getElementById('classrooms');
var structuretype = document.getElementById('structuretype');
var schoolfenced = document.getElementById('fenced');
var fencetype = document.getElementById('fencetype');
var library = document.getElementById('library');
var games = document.getElementById('games');
var staffroom = document.getElementById('staffroom');
var htroom = document.getElementById('headteacherroom');

// school infrastructure information error
var classroomserror = document.getElementById('classrooms-error');
var structuretypeerror = document.getElementById('structuretype-error');
var schoolfencederror = document.getElementById('fenced-error');
var fencetypeerror = document.getElementById('fencetype-error');
var libraryerror = document.getElementById('library-error');
var gameserror = document.getElementById('games-error');
var staffroomerror = document.getElementById('staffroom-error');
var htroomerror = document.getElementById('headteacherroom-error');

// school sanitation facilities
var sanitationf = document.getElementById('sanitation');
var btoilets = document.getElementById('boystoilets');
var gtoilets = document.getElementById('girltoilets');
var sstoilets = document.getElementById('ssharedtoilets');
var ttoilets = document.getElementById('ttoilets');
var tmaletoilets = document.getElementById('tmaletoilets');
var tfemaletoilets = document.getElementById('tfemaletoilets');
var tsharedtoilets = document.getElementById('tsharedtoilets');
// school sanitation facilities errors
var sanitationferror = document.getElementById('sanitation-error');
var btoiletserror = document.getElementById('boystoilets-error');
var gtoiletserror = document.getElementById('girltoilets-error');
var sstoiletserror = document.getElementById('ssharedtoilets-error');
var ttoiletserror = document.getElementById('ttoilets-error');
var tmaletoiletserror = document.getElementById('tmaletoilets-error');
var tfemaletoiletserror = document.getElementById('tfemaletoilets-error');
var tsharedtoiletserror = document.getElementById('tsharedtoilets-error');

// environmental data
var coverage = document.getElementById('coverage');
var built = document.getElementById('built');
var treespace = document.getElementById('treespace');
var tinitiative = document.getElementById('tinitiative');
var eclub = document.getElementById('eclub');
var eopinion = document.getElementById('eopinion');
var ehname = document.getElementById('ehname');
var ehtel = document.getElementById('ehtel');
var ehemail = document.getElementById('ehemail');

// environmental data error
var coverageerror = document.getElementById('coverage-error');
var builterror = document.getElementById('built-error');
var treespaceerror = document.getElementById('treespace-error');
var tinitiativeerror = document.getElementById('tinitiative-error');
var ecluberror = document.getElementById('eclub-error');
var eopinionerror = document.getElementById('eopinion-error');
var ehnameerror = document.getElementById('ehname-error');
var ehtelerror = document.getElementById('ehtel-error');
var ehemailerror = document.getElementById('ehemail-error');

// water resources
var water = document.getElementById('water');
var waterexpense = document.getElementById('waterexpense');
var treatedwater = document.getElementById('treatedwater');
var waterreliable = document.getElementById('waterreliable');
var waterstorage = document.getElementById('waterstorage');
var distancewater = document.getElementById('distancewater');
var lavailable = document.getElementById('lavailable');

//water resources error
var watererror = document.getElementById('water-error');
var waterexpenseerror = document.getElementById('waterexpense-error');
var treatedwatererror = document.getElementById('treatedwater-error');
var waterreliableerror = document.getElementById('waterreliable-error');
var waterstorageerror = document.getElementById('waterstorage-error');
var distancewatererror = document.getElementById('distancewater-error');
var lavailableerror = document.getElementById('lavailable-error');

// health facilities
var mfacility = document.getElementById('mfacility');
var mpersonnel = document.getElementById('mpersonnel');
var medicalcases = document.getElementById('medicalcases');
var dhfacility = document.getElementById('dhfacility');
var hftype = document.getElementById('hftype');

// health error facilities
var mfacilityerror = document.getElementById('mfacility-error');
var mpersonnelerror = document.getElementById('mpersonnel-error');
var medicalcaseserror = document.getElementById('medicalcases-error');
var dhfacilityerror = document.getElementById('dhfacility-error');
var hftypeerror = document.getElementById('hftype-error');

// electricity
var spconnected = document.getElementById('spconnected');
var ceexpense = document.getElementById('ceexpense');
var mebill = document.getElementById('mebill');
//electricity errors
var spconnectederror = document.getElementById('spconnected-error');
var ceexpenseerror = document.getElementById('ceexpense-error');
var mebillerror = document.getElementById('mebill-error');

// electricity
var fcavailable = document.getElementById('fcavailable');
var clabavailable = document.getElementById('clabavailable');
var icavailable = document.getElementById('icavailable');

// electricity errors
var fcavailableerror = document.getElementById('fcavailable-error');
var clabavailableerror = document.getElementById('clabavailable-error');
var icavailableerror = document.getElementById('icavailable-error');

//suggestion
var suggestions = document.getElementById('suggestions');
//suggestion errors
var suggestionserror = document.getElementById('suggestions-error');

if(schoolname.value==""){
	schoolname.style.border="1px solid #90111A";
	schoolnameeror.innerHTML = "** fill in school name** ";
	schoolnameeror.style.color = "#90111A";

	schoolname.focus();
	return false;
}
if(schoolcode.value==""){
	schoolcode.style.border="1px solid #90111A";
	schoolcodeerror.innerHTML = "**fill in school code** ";
	schoolcodeerror.style.color = "#90111A";

	schoolcode.focus();
	return false;
}
if(schoollevel.value==""){
	schoollevel.style.border="1px solid #90111A";
	schoollevelerror.innerHTML = "**Choose school level** ";
	schoollevelerror.style.color = "#90111A";
	schoollevel.focus();
	return false;
}

if(schooltype.value==""){
	schooltype.style.border="1px solid #90111A";
	schooltypeerror.innerHTML = "**choose school type** ";
	schooltypeerror.style.color = "#90111A";
	schooltype.focus();
	return false;
}
if(county.value==""){
	county.style.border="1px solid #90111A";
	countyerror.innerHTML = "**choose county** ";
	countyerror.style.color = "#90111A";
	county.focus();
	return false;
}

if(subcounty.value==""){
	subcounty.style.border="1px solid #90111A";
	subcountyerror.innerHTML = "**Choose subcounty** ";
	subcountyerror.style.color = "#90111A";

	subcounty.focus();
	return false;
}

if(constituency.value==""){
	constituency.style.border="1px solid #90111A";
	constituencyerror.innerHTML = "**Fill in School constituency** ";
	constituencyerror.style.color = "#90111A";
	constituency.focus();
	return false;
}

if(ward.value==""){
	ward.style.border="1px solid #90111A";
	warderror.innerHTML = "**fill in school ward** ";
	warderror.style.color = "#90111A";
	ward.focus();
	return false;
}


if(location.value==""){
	location.style.border="1px solid #90111A";
	locationerror.innerHTML = "**fill in school location** ";
	locationerror.style.color = "#90111A";
	location.focus();
	return false;
}

if(sublocation.value==""){
	sublocation.style.border="1px solid #90111A";
	sublocationerror.innerHTML = "**fill in school sub location** ";
	sublocationerror.style.color = "#90111A";
	sublocation.focus();
	return false;
}

if(sphyaddress.value==""){
	sphyaddress.style.border="1px solid #90111A";
	sphyaddresserror.innerHTML = "**fill in school phsical address** ";
	sphyaddresserror.style.color = "#90111A";
	sphyaddress.focus();
	return false;
}

if(facility.value==""){
	facility.style.border="1px solid #90111A";
	facilityerror.innerHTML = "**choose facility type** ";
	facilityerror.style.color = "#90111A";
	facility.focus();
	return false;
}
if(teacher.value==""){
	teacher.style.border="1px solid #90111A";
	teachererror.innerHTML = "**fill in contact teacher name** ";
	teachererror.style.color = "#90111A";
	teacher.focus();
	return false;
}
if(teachertel.value==""){
	teachertel.style.border="1px solid #90111A";
	teachertelerror.innerHTML = "**fill in teacher telephone** ";
	teachertelerror.style.color = "#90111A";

	teachertel.focus();
	return false;
}
if(teachertel.value.length>10){
	teachertel.style.border="1px solid #90111A";
	teachertelerror.innerHTML = "**input valid number length i.e 0712345678** ";
	teachertelerror.style.color = "#90111A";

	teachertel.focus();
	return false;
}
if(teacheremail.value==""){
	teacheremail.style.border="1px solid #90111A";
	teacheremailerror.innerHTML = "**fill in teacher email** ";
	teacheremailerror.style.color = "#90111A";
	teacheremail.focus();
	return false;
}
if(malestudents.value==""){
	malestudents.style.border="1px solid #90111A";
	malestudentserror.innerHTML = "**fill in total male students** ";
	malestudentserror.style.color = "#90111A";
	malestudents.focus();
	return false;
}

if(femalestudents.value==""){
	femalestudents.style.border="1px solid #90111A";
	femalestudentserror.innerHTML = "**fill in total female students** ";
	femalestudentserror.style.color = "#90111A";
	femalestudents.focus();
	return false;
}
if(totalstudents.value==""){
	totalstudents.style.border="1px solid #90111A";
	totalstudentserror.innerHTML = "**fill in total students** ";
	totalstudentserror.style.color = "#90111A";
	totalstudents.focus();
	return false;
}
if(lowerstudents.value==""){
	lowerstudents.style.border="1px solid #90111A";
	lowerstudentserror.innerHTML = "**fill in lower students number** ";
	lowerstudentserror.style.color = "#90111A";
	lowerstudents.focus();
	return false;
}
if(upperstudents.value==""){
	upperstudents.style.border="1px solid #90111A";
	upperstudentserror.innerHTML = "**fill in upper students number** ";
	upperstudentserror.style.color = "#90111A";
	upperstudents.focus();
	return false;
}
if(maleteachers.value==""){
	maleteachers.style.border="1px solid #90111A";
	maleteacherserror.innerHTML = "**fill in male teachers number** ";
	maleteacherserror.style.color = "#90111A";
	maleteachers.focus();
	return false;
}
if(femaleteachers.value==""){
	femaleteachers.style.border="1px solid #90111A";
	femaleteacherserror.innerHTML = "**fill in female teachers number** ";
	femaleteacherserror.style.color = "#90111A";
	femaleteachers.focus();
	return false;
}
if(totalteachers.value==""){
	totalteachers.style.border="1px solid #90111A";
	totalteacherserror.innerHTML = "**fill in total teachers number** ";
	totalteacherserror.style.color = "#90111A";
	totalteachers.focus();
	return false;
}

if(mnonteachers.value==""){
	mnonteachers.style.border="1px solid #90111A";
	mnonteacherserror.innerHTML = "**fill in total male non-teachers number** ";
	mnonteacherserror.style.color = "#90111A";
	mnonteachers.focus();
	return false;
}
if(fnonteachers.value==""){
	fnonteachers.style.border="1px solid #90111A";
	fnonteacherserror.innerHTML = "**fill in total male non-teachers number** ";
	fnonteacherserror.style.color = "#90111A";
	fnonteachers.focus();
	return false;
}
if(tnonteachers.value==""){
	tnonteachers.style.border="1px solid #90111A";
	tnonteacherserror.innerHTML = "**fill in total non-teachers number** ";
	tnonteacherserror.style.color = "#90111A";
	tnonteachers.focus();
	return false;
}
if(dmstudents.value==""){
	dmstudents.style.border="1px solid #90111A";
	dmstudentserror.innerHTML = "**fill in total non disabled students** ";
	dmstudentserror.style.color = "#90111A";
	dmstudents.focus();
	return false;
}
if(dfstudents.value==""){
	dfstudents.style.border="1px solid #90111A";
	dfstudentserror.innerHTML = "**fill in total disabled female students** ";
	dfstudentserror.style.color = "#90111A";
	dfstudents.focus();
	return false;
} 
if(tdstudents.value==""){
	tdstudents.style.border="1px solid #90111A";
	tdstudentserror.innerHTML = "**fill in total disabled students** ";
	tdstudentserror.style.color = "#90111A";
	tdstudents.focus();
	return false;
}
if(classrooms.value==""){
	classrooms.style.border="1px solid #90111A";
	classroomserror.innerHTML = "**fill in number of classrooms** ";
	classroomserror.style.color = "#90111A";
	classrooms.focus();
	return false;
}
if(structuretype.value==""){
	structuretype.style.border="1px solid #90111A";
	structuretypeerror.innerHTML = "**fill in classroom structure type** ";
	structuretypeerror.style.color = "#90111A";
	structuretype.focus();
	return false;
}
if(schoolfenced.value==""){
	schoolfenced.style.border="1px solid #90111A";
	schoolfencederror.innerHTML = "**choose whether school is fenced** ";
	schoolfencederror.style.color = "#90111A";
	schoolfenced.focus();
	return false;
}
if(fencetype.value==""){
	fencetype.style.border="1px solid #90111A";
	fencetypeerror.innerHTML = "**choose type of school fencing** ";
	fencetypeerror.style.color = "#90111A";
	fencetype.focus();
	return false;
}
if(library.value==""){
	library.style.border="1px solid #90111A";
	libraryerror.innerHTML = "**choose whether school has library room** ";
	libraryerror.style.color = "#90111A";
	library.focus();
	return false;
}
if(games.value==""){
	games.style.border="1px solid #90111A";
	gameserror.innerHTML = "**choose whether school has sports room** ";
	gameserror.style.color = "#90111A";
	games.focus();
	return false;
}
if(staffroom.value==""){
	staffroom.style.border="1px solid #90111A";
	staffroomerror.innerHTML = "**choose whether school has staff room** ";
	staffroomerror.style.color = "#90111A";
	staffroom.focus();
	return false;
}
if(htroom.value==""){
	htroom.style.border="1px solid #90111A";
	htroomerror.innerHTML = "**choose whether school has headteachers office** ";
	htroomerror.style.color = "#90111A";
	htroom.focus();
	return false;
}
if(sanitationf.value==""){
	sanitationf.style.border="1px solid #90111A";
	sanitationferror.innerHTML = "**Choose whether there is sanitation facility** ";
	sanitationferror.style.color = "#90111A";
	sanitationf.focus();
	return false;
}
if(btoilets.value==""){
	btoilets.style.border="1px solid #90111A";
	btoiletserror.innerHTML = "**enter number of male toilets** ";
	btoiletserror.style.color = "#90111A";
	btoilets.focus();
	return false;
}
if(gtoilets.value==""){
	gtoilets.style.border="1px solid #90111A";
	gtoiletserror.innerHTML = "**enter number of girl toilets** ";
	gtoiletserror.style.color = "#90111A";
	gtoilets.focus();
	return false;
}
if(sstoilets.value==""){
	sstoilets.style.border="1px solid #90111A";
	sstoiletserror.innerHTML = "**enter number of students shared toilets** ";
	sstoiletserror.style.color = "#90111A";
	sstoilets.focus();
	return false;
}
if(ttoilets.value==""){
	ttoilets.style.border="1px solid #90111A";
	ttoiletserror.innerHTML = "**Choose whether teachers toilets available** ";
	ttoiletserror.style.color = "#90111A";
	ttoilets.focus();
	return false;
}
if(tmaletoilets.value==""){
	tmaletoilets.style.border="1px solid #90111A";
	tmaletoiletserror.innerHTML = "**enter number of male  teachers toilets** ";
	tmaletoiletserror.style.color = "#90111A";
	tmaletoilets.focus();
	return false;
}
if(tfemaletoilets.value==""){
	tfemaletoilets.style.border="1px solid #90111A";
	tfemaletoiletserror.innerHTML = "**enter number of female teachers toilets** ";
	tfemaletoiletserror.style.color = "#90111A";
	tfemaletoilets.focus();
	return false;
}
if(tsharedtoilets.value==""){
	tsharedtoilets.style.border="1px solid #90111A";
	tsharedtoiletserror.innerHTML = "**enter number of shared teachers toilets** ";
	tsharedtoiletserror.style.color = "#90111A";
	tsharedtoilets.focus();
	return false;
}
if(coverage.value==""){
	coverage.style.border="1px solid #90111A";
	coverageerror.innerHTML = "**choose school approximate area** ";
	coverageerror.style.color = "#90111A";
	coverage.focus();
	return false;
}
if(built.value==""){
	built.style.border="1px solid #90111A";
	builterror.innerHTML = "**choose school approximate built area** ";
	builterror.style.color = "#90111A";
	built.focus();
	return false;
}
if(treespace.value==""){
	treespace.style.border="1px solid #90111A";
	treespaceerror.innerHTML = "**choose whether school has tree planting space** ";
	treespaceerror.style.color = "#90111A";
	treespace.focus();
	return false;
}
if(tinitiative.value==""){
	tinitiative.style.border="1px solid #90111A";
	tinitiativeerror.innerHTML = "**choose whether school has tree planting initiatives** ";
	tinitiativeerror.style.color = "#90111A";
	tinitiative.focus();
	return false;
}
if(eclub.value==""){
	eclub.style.border="1px solid #90111A";
	ecluberror.innerHTML = "**choose whether school has environmental club** ";
	ecluberror.style.color = "#90111A";
	eclub.focus();
	return false;
}
if(eopinion.value==""){
	eopinion.style.border="1px solid #90111A";
	eopinionerror.innerHTML = "**enter age opinion of joining environmental education** ";
	eopinionerror.style.color = "#90111A";
	eopinion.focus();
	return false;
}
if(ehname.value==""){
	ehname.style.border="1px solid #90111A";
	ehnameerror.innerHTML = "**fill in the name of environmental activities head** ";
	ehnameerror.style.color = "#90111A";
	ehname.focus();
	return false;
}
if(ehtel.value==""){
	ehtel.style.border="1px solid #90111A";
	ehtelerror.innerHTML = "**fill in the tel number of environmental activities head** ";
	ehtelerror.style.color = "#90111A";
	ehtel.focus();
	return false;
}
if(ehemail.value==""){
	ehemail.style.border="1px solid #90111A";
	ehemailerror.innerHTML = "**fill in the email of environmental activities head** ";
	ehemailerror.style.color = "#90111A";
	ehemail.focus();
	return false;
}
if(water.value==""){
	water.style.border="1px solid #90111A";
	watererror.innerHTML = "**choose water availabilty** ";
	watererror.style.color = "#90111A";
	water.focus();
	return false;
}
if(waterexpense.value==""){
	waterexpense.style.border="1px solid #90111A";
	waterexpenseerror.innerHTML = "**choose water expense** ";
	waterexpenseerror.style.color = "#90111A";
	waterexpense.focus();
	return false;
}

if(treatedwater.value==""){
	treatedwater.style.border="1px solid #90111A";
	treatedwatererror.innerHTML = "**choose if water treated** ";
	treatedwatererror.style.color = "#90111A";
	treatedwater.focus();
	return false;
}
if(waterreliable.value==""){
	waterreliable.style.border="1px solid #90111A";
	waterreliableerror.innerHTML = "**choose if water reliable** ";
	waterreliableerror.style.color = "#90111A";
	waterreliable.focus();
	return false;
}

if(waterstorage.value==""){
	waterstorage.style.border="1px solid #90111A";
	waterstorageerror.innerHTML = "**choose if has water storage facilities** ";
	waterstorageerror.style.color = "#90111A";
	waterstorage.focus();
	return false;
}
if(distancewater.value==""){
	distancewater.style.border="1px solid #90111A";
	distancewatererror.innerHTML = "**choose distance to water source** ";
	distancewatererror.style.color = "#90111A";
	distancewater.focus();
	return false;
}

if(lavailable.value==""){
	lavailable.style.border="1px solid #90111A";
	lavailableerror.innerHTML = "**choose livestock available** ";
	lavailableerror.style.color = "#90111A";
	lavailable.focus();
	return false;
}
if(mfacility.value==""){
	mfacility.style.border="1px solid #90111A";
	mfacilityerror.innerHTML = "**choose medical facility type** ";
	mfacilityerror.style.color = "#90111A";
	mfacility.focus();
	return false;
}
if(mpersonnel.value==""){
	mpersonnel.style.border="1px solid #90111A";
	mpersonnelerror.innerHTML = "**choose whether school has trained medical personnel** ";
	mpersonnelerror.style.color = "#90111A";
	mpersonnel.focus();
	return false;
}
if(medicalcases.value==""){
	medicalcases.style.border="1px solid #90111A";
	medicalcaseserror.innerHTML = "**provide medical cases per term** ";
	medicalcaseserror.style.color = "#90111A";
	medicalcases.focus();
	return false;
}

if(dhfacility.value==""){
	dhfacility.style.border="1px solid #90111A";
	dhfacilityerror.innerHTML = "**provide distance to nearest health facility** ";
	dhfacilityerror.style.color = "#90111A";
	dhfacility.focus();
	return false;
}

if(hftype.value==""){
	hftype.style.border="1px solid #90111A";
	hftypeerror.innerHTML = "**choose if health facility is private or public** ";
	hftypeerror.style.color = "#90111A";
	hftype.focus();
	return false;
}

if(spconnected.value==""){
	spconnected.style.border="1px solid #90111A";
	spconnectederror.innerHTML = "**choose is school is power connected** ";
	spconnectederror.style.color = "#90111A";
	spconnected.focus();
	return false;
}

if(ceexpense.value==""){
	ceexpense.style.border="1px solid #90111A";
	ceexpenseerror.innerHTML = "**choose cooking energy expense** ";
	ceexpenseerror.style.color = "#90111A";
	ceexpense.focus();
	return false;
}

if(mebill.value==""){
	mebill.style.border="1px solid #90111A";
	mebillerror.innerHTML = "**choose monthly electric bill** ";
	mebillerror.style.color = "#90111A";
	mebill.focus();
	return false;
}

if(fcavailable.value==""){
	fcavailable.style.border="1px solid #90111A";
	fcavailableerror.innerHTML = "**choose if school has functional computers** ";
	fcavailableerror.style.color = "#90111A";
	fcavailable.focus();
	return false;
}

if(clabavailable.value==""){
	clabavailable.style.border="1px solid #90111A";
	clabavailableerror.innerHTML = "**choose if school has computer lab** ";
	clabavailableerror.style.color = "#90111A";
	clabavailable.focus();
	return false;
}

if(icavailable.value==""){
	icavailable.style.border="1px solid #90111A";
	icavailableerror.innerHTML = "**choose if school has internet connectivity** ";
	icavailableerror.style.color = "#90111A";
	icavailable .focus();
	return false;
}

if(suggestions.value==""){
	suggestions.style.border="1px solid #90111A";
	suggestionserror.innerHTML = "**please provide suggections under suggestions section** ";
	suggestionserror.style.color = "#90111A";
	suggestions.focus();
	return false;
}

return true;
}

function validateadministration(){
//getting category and category error
var category = document.getElementById('category');
var categorerror = document.getElementById('category-error');


if(category.value == ""){
	category.style.border="1px solid #90111A";
	categorerror.innerHTML = "** category field required** ";
	categorerror.style.color = "#90111A";

	category.focus();
	return false;

}
return true;
}

function validatesubcounty(){
//getting category and category error
var validatecounty = document.getElementById('county');
var validatesubcounty = document.getElementById('subcounty');
var validateward = document.getElementById('ward');
var validatelocation = document.getElementById('location');
var validaterequired = document.getElementById('required');
var categorerror = document.getElementById('category-error');


if(validatecounty.value == ""){
	validatecounty.style.border="1px solid #90111A";
	categorerror.innerHTML = "** all input fields are required** ";
	categorerror.style.color = "#90111A";

	validatecounty.focus();
	return false;

}
if(validatesubcounty.value == ""){
	validatesubcounty.style.border="1px solid #90111A";
	categorerror.innerHTML = "** all input fields are required** ";
	categorerror.style.color = "#90111A";

	validatesubcounty.focus();
	return false;

}
if(validaterequired.value == ""){
	validaterequired.style.border="1px solid #90111A";
	categorerror.innerHTML = "** all input fields are required** ";
	categorerror.style.color = "#90111A";

	validaterequired.focus();
	return false;

}
if(validateward .value == ""){
	validateward.style.border="1px solid #90111A";
	categorerror.innerHTML = "** all input fields are required** ";
	categorerror.style.color = "#90111A";

	validateward.focus();
	return false;

}
if(validatelocation .value == ""){
	validatelocation.style.border="1px solid #90111A";
	categorerror.innerHTML = "** all input fields are required** ";
	categorerror.style.color = "#90111A";

	validatelocation.focus();
	return false;

}

return true;
}


function validateadministrationcountyfields(){
//getting administration input fields
var administrationcounty = document.getElementById('county');

//getting administration input fields errors
var administrationcountyerror = document.getElementById('county-error');

if(administrationcounty .value == ""){
	administrationcounty.style.border="1px solid #90111A";
	administrationcountyerror.innerHTML = "** input county** ";
	administrationcountyerror.style.color = "#90111A";

	administrationcounty.focus();
	return false;
}
return true;

}

function validateadministrationsubcountyfields(){
	//validating subcounty details
	var county = document.getElementById('county');
	var subcounty = document.getElementById('subcounty');
	var constituency = document.getElementById('constituency');
	var ward = document.getElementById('ward');
	

	//subcounty details errors
	var countyerror = document.getElementById('county-error');
	var subcountyerror = document.getElementById('subcounty-error');
	var constituencyerror = document.getElementById('constituency-error');
	var warderror = document.getElementById('ward-error');
	if(county.value == ""){
		county.style.border="1px solid #90111A";
		countyerror.innerHTML = "** Choose county** ";
		countyerror.style.color = "#90111A";
	
		county.focus();
		return false;
	}


	if(subcounty.value == ""){
		subcounty.style.border="1px solid #90111A";
		subcountyerror.innerHTML = "** input subcounty name** ";
		subcountyerror.style.color = "#90111A";
	
		subcounty.focus();
		return false;
	}
	if(constituency.value == ""){
		constituency.style.border="1px solid #90111A";
		constituencyerror.innerHTML = "** input constituency name** ";
		constituencyerror.style.color = "#90111A";
	
		constituency.focus();
		return false;
	}
	if(ward.value == ""){
		ward.style.border="1px solid #90111A";
		warderror.innerHTML = "** input ward name** ";
		warderror.style.color = "#90111A";
	
		ward.focus();
		return false;
	}
	return true;
}

function validateeditcategory(){
//validating  details
var usercategory = document.getElementById('usercategory');

//validating  details error
var usercategoryerror = document.getElementById('usercategory-error');

if(usercategory.value == ""){
	usercategory.style.border="1px solid #90111A";
	usercategoryerror.innerHTML = "** provide user category** ";
	usercategoryerror.style.color = "#90111A";

	usercategory.focus();
	return false;
}
	return true;
}

function editingsubcounties(){
//validating  details error
var county = document.getElementById('county');

//validating  details error
var countyerror = document.getElementById('county-error');

if(county.value == ""){
	county.style.border="1px solid #90111A";
	countyerror.innerHTML = "** select county** ";
	countyerror.style.color = "#90111A";

	county.focus();
	return false;
}

return true;
}