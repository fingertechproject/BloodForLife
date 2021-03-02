<?php
include 'serverconnect.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <script>
var subjectObject = {
  "Andhra Pradesh": {
    "Ananthapuram": ["Amroha", "Adampur", "Hasanpur", "Chandpur"],
    "Chittor": ["Moradabad", "Pakbara", "CC Singh", "PAC"],
    "East Gidavari": ["Naugarh", "Birdpur", "Mohane", "Kakrahwa"]   , 
    "Guntur": ["Amroha", "Adampur", "Hasanpur", "Chandpur"],
    "Krishna": ["Amroha", "Adampur", "Hasanpur", "Chandpur"],
    "Kurnool": ["Amroha", "Adampur", "Hasanpur", "Chandpur"],
    "Prakasam": ["Amroha", "Adampur", "Hasanpur", "Chandpur"],
    "SPS Nellore": ["Amroha", "Adampur", "Hasanpur", "Chandpur"],
    "SriKakulam": ["Amroha", "Adampur", "Hasanpur", "Chandpur"],
    "Visakhapatnam": ["Amroha", "Adampur", "Hasanpur", "Chandpur"],
    "Vizianagaram": ["Amroha", "Adampur", "Hasanpur", "Chandpur"],
    "West Godavari": ["Amroha", "Adampur", "Hasanpur", "Chandpur"],
    "YSR Kadapa": ["Amroha", "Adampur", "Hasanpur", "Chandpur"]
    

  },
 
  "Arunachal Pradesh": {
    "Anjaw": ["Mumbra", "thane", "Kalwa"],
    "Changlang": ["Govandi", "andheri", "Sion"],
    "East Kameng": ["Govandi", "andheri", "Sion"],
    "East Siang": ["Govandi", "andheri", "Sion"],
    "Kamle": ["Govandi", "andheri", "Sion"],
    "Changlang": ["Govandi", "andheri", "Sion"],
   "Kra Daadi": ["Govandi", "andheri", "Sion"],
   "Kurung Kumey": ["Govandi", "andheri", "Sion"],
    "Lepa Rada": ["Govandi", "andheri", "Sion"],
    "Lohit": ["Govandi", "andheri", "Sion"],
    "Longding": ["Govandi", "andheri", "Sion"]  ,
    "Lower Dibang Valle": ["Govandi", "andheri", "Sion"]	,
    "Lowar Siang": ["Govandi", "andheri", "Sion"]	 ,
    "Namsai": ["Govandi", "andheri", "Sion"],	
    "Pakke Kessang": ["Govandi", "andheri", "Sion"],
   "Papum Pare": ["Govandi", "andheri", "Sion"]	,
   "Siang": ["Govandi", "andheri", "Sion"],
   "Shi Yomi": ["Govandi", "andheri", "Sion"],
   "Tawang	": ["Govandi", "andheri", "Sion"],
   "Tirap": ["Govandi", "andheri", "Sion"],
   "Upper Dibang Valley": ["Govandi", "andheri", "Sion"],
   "Upper Siang": ["Govandi", "andheri", "Sion"],
   "Upper Subansiri	": ["Govandi", "andheri", "Sion"],
   "West Kameng": ["Govandi", "andheri", "Sion"],
    "West Siang": ["Govandi", "andheri", "Sion"]
  },
  "Assam": {
    "Charaideo": ["Mumbra", "thane", "Kalwa"],
    "Dhemaji": ["Mumbra", "thane", "Kalwa"],
   "Dibrugarh": ["Mumbra", "thane", "Kalwa"],
     "Golaghat": ["Mumbra", "thane", "Kalwa"],
    "Jorhat": ["Mumbra", "thane", "Kalwa"],
    "Lakhimpur	": ["Mumbra", "thane", "Kalwa"],
    "Majuli": ["Mumbra", "thane", "Kalwa"],
    "Sivasagar	2": ["Mumbra", "thane", "Kalwa"],
    "Tinsukia": ["Mumbra", "thane", "Kalwa"],
    "Bishwanath": ["Mumbra", "thane", "Kalwa"],
    "Darrang	": ["Mumbra", "thane", "Kalwa"],
    "Sonitpur": ["Mumbra", "thane", "Kalwa"],
    "Udalguri": ["Mumbra", "thane", "Kalwa"],
    "Baksa	": ["Mumbra", "thane", "Kalwa"],
    "Chirang": ["Mumbra", "thane", "Kalwa"],
    "Kokrajhar": ["Mumbra", "thane", "Kalwa"],
    "Bajali": ["Mumbra", "thane", "Kalwa"],
    "Barpeta": ["Mumbra", "thane", "Kalwa"],
    "Bongaigaon": ["Mumbra", "thane", "Kalwa"],
    "Dhubri": ["Mumbra", "thane", "Kalwa"],
    "Goalpara	": ["Mumbra", "thane", "Kalwa"],
    "Nalbari": ["Mumbra", "thane", "Kalwa"],
    "Kamrup": ["Mumbra", "thane", "Kalwa"],
    "Kamrup Metropolitan": ["Mumbra", "thane", "Kalwa"],
    "South Salmara-Mankachar": ["Mumbra", "thane", "Kalwa"],
    "Dima Hasao": ["Mumbra", "thane", "Kalwa"],
    "East Karbi Anglong": ["Mumbra", "thane", "Kalwa"],
    "Hojai": ["Mumbra", "thane", "Kalwa"],
    "Morigaon": ["Mumbra", "thane", "Kalwa"],
    "Nagaon": ["Mumbra", "thane", "Kalwa"],
    "West Karbi Anglong": ["Mumbra", "thane", "Kalwa"],
    "Cachar": ["Mumbra", "thane", "Kalwa"],
    "Hailakandi": ["Mumbra", "thane", "Kalwa"],
   "Karimganj": ["Mumbra", "thane", "Kalwa"]    
  },
  "Bihar": {
    "Bhojpur	": ["Mumbra", "thane", "Kalwa"],
    "Buxar": ["Mumbra", "thane", "Kalwa"],
    "Kaimur": ["Mumbra", "thane", "Kalwa"],
    "Nalanda	": ["Mumbra", "thane", "Kalwa"],
   "Patna": ["Mumbra", "thane", "Kalwa"],
   "Rohtas": ["Mumbra", "thane", "Kalwa"],
   "East Champaran": ["Mumbra", "thane", "Kalwa"],
   "West Champaran	": ["Mumbra", "thane", "Kalwa"],
   "Muzaffarpur	": ["Mumbra", "thane", "Kalwa"],
   "Sheohar": ["Mumbra", "thane", "Kalwa"],
   "Sitamarhi": ["Mumbra", "thane", "Kalwa"],
   "Vaishali": ["Mumbra", "thane", "Kalwa"],
   "Saran": ["Mumbra", "thane", "Kalwa"],
    "Siwan": ["Mumbra", "thane", "Kalwa"],
   "Darbhanga	": ["Mumbra", "thane", "Kalwa"],
   "Gopalganj": ["Mumbra", "thane", "Kalwa"],
   "Madhubani": ["Mumbra", "thane", "Kalwa"],
   "Samastipur": ["Mumbra", "thane", "Kalwa"],
   "	Madhepura": ["Mumbra", "thane", "Kalwa"],
   "Saharsa": ["Mumbra", "thane", "Kalwa"],
   "Supaul": ["Mumbra", "thane", "Kalwa"],
   "Araria": ["Mumbra", "thane", "Kalwa"],
   "Katihar": ["Mumbra", "thane", "Kalwa"],
   "Kishanganj": ["Mumbra", "thane", "Kalwa"],
   "Purnia": ["Mumbra", "thane", "Kalwa"],
   "Banka": ["Mumbra", "thane", "Kalwa"],
  "Bhagalpur": ["Mumbra", "thane", "Kalwa"],
  "Begusarai": ["Mumbra", "thane", "Kalwa"],
  "Jamui": ["Mumbra", "thane", "Kalwa"],
   "Khagaria": ["Mumbra", "thane", "Kalwa"],
   "Munger": ["Mumbra", "thane", "Kalwa"],
   "Arwal": ["Mumbra", "thane", "Kalwa"],
   "Aurangabad": ["Mumbra", "thane", "Kalwa"],	
   "	Gaya": ["Mumbra", "thane", "Kalwa"],
   "	Jehanabad	": ["Mumbra", "thane", "Kalwa"],
   "Nawada": ["Mumbra", "thane", "Kalwa"]
  },
 
  "Chhattisgarh": {
    "Thane": ["Mumbra", "thane", "Kalwa"],
    "Mumbai": ["Govandi", "andheri", "Sion"]
  },
  "Goa": {
    "Thane": ["Mumbra", "thane", "Kalwa"],
    "Mumbai": ["Govandi", "andheri", "Sion"]
  },
  "Gujarat": {
    "Thane": ["Mumbra", "thane", "Kalwa"],
    "Mumbai": ["Govandi", "andheri", "Sion"]
  },
  "Haryana": {
    "Thane": ["Mumbra", "thane", "Kalwa"],
    "Mumbai": ["Govandi", "andheri", "Sion"]
  },
  "Himachal Pradesh": {
    "Thane": ["Mumbra", "thane", "Kalwa"],
    "Mumbai": ["Govandi", "andheri", "Sion"]
  },
  "Jharkhand": {
    "Thane": ["Mumbra", "thane", "Kalwa"],
    "Mumbai": ["Govandi", "andheri", "Sion"]
  },
  "Karnataka": {
    "Thane": ["Mumbra", "thane", "Kalwa"],
    "Mumbai": ["Govandi", "andheri", "Sion"]
  },
  "Kerala": {
    "Thane": ["Mumbra", "thane", "Kalwa"],
    "Mumbai": ["Govandi", "andheri", "Sion"]
  },
  "Madhay Pradesh": {
    "Thane": ["Mumbra", "thane", "Kalwa"],
    "Mumbai": ["Govandi", "andheri", "Sion"]
  },
  "Maharashtra": {
    "	Ahmednagar": ["Ahemadnagar", "Karjat", "Koargaon","Magar Akola","Parner","Pathardi","Rahuri","Sangamner","Sheogaon","Shirdi","Shrigonda","Sharirampurs"],
    "	Akola": ["Akola","Akot","balapur","Borgaon Manju","Karanja","Mangruloir","Medshi","Murtizapur","Patur","Washim"],
    "	Amravati": ["Achalpur","Amravathi","Bandera","Chandur","Daryapur","Melghat","Morshi","Nandgaon Khandeshwar","Teosa","Walgaon"],
    "Aurangabad": ["Aurabgabad","Gangapur","Kannad","Paithan","Sillod","Vaijapur"],
    "Beed": ["Ashthi","Beed","Chausala","Georai","Kaij","Manjlegaon","Renapur"],
    "Bhandara": ["Adyar","Bhandara","Lakhandur","Sakoli","Tumsar"],
    "	Buldhana": ["Buldhana","Chikhali","Jalamb","Khamgaon","Malkapur","Mehkar","Nandura City","Sindkhed Raja"],
    "Chandrapur": ["Bhadravati","Chandrapur","Chimur","Rajura","Saoli"],
    "Dhule": ["Dhule","Kusumba","Sakri","Shirpur","Sindkheda"],
    "	Gadchiroli": ["Armori","Dchiroli","Sironcha"],
    "Gondia": ["Amagaon","Gondiya","Goregaon","Tirora"],
    "	Hingoli": ["Basmath","Hingoli","Kalamnuri"],
    "	Jalgaon": ["Amalner","Bhadgaon","Bhusaval","Chalisgaon","Chopda","Edlabad","Erandol","Jalgaon","Jamner","Pachora","Parola","Raver","Yaval"],
    "Jalna": ["Jalna"],
    "	Kolhapur": ["Chandgad","Gandhinglaj","IChalkaranji","Kagal","Karvir","Kolhapur","Panhale","Radhanagari","Sangrul","Shahuwadi","Shirol","Vadgaon"],
    "Latur": ["Ahemdnagar","Ausa","Her","Latur","Nilanga","Udgir"],
    "Mumbai City": ["Mumbai"],
    "	Mumbai suburban": ["Amboli","Andheri","Bhandup","Borivali","Chembur","Ghatkopar","Goregaon","Kandivali","Kherwadi","Kurla","Malad","Mulund","Nehrunagar","Santacruz","Trombay","Vandre","Vile Parle"],
    "	Nanded": ["Bhokar","Biloli","Hadgaon","Kandhar","Kinwat","Mudkhed","Nanded"],
    "	Nandurbar": ["Akrani","Nandurbar","Navapur","Shahade","Talode"],
    "	Nagpur": ["Kamthi","Katol","Nagpur","Ramtek","Savner","Umred"],
    "	Nashik": ["Baglan","Chandwad","dabhadi","Devlali","Dindori","Igatpuri","Kalyan","Malegaon","Nandgaon","Nashik","Niphad","Sinnar","Surgana","Yewla"],
    "Osmanabad": ["Kalamb","Omerga","Osmanabad","paranda","Tuljapur"],
    "	Palghar": ["Palghar"],
    "Parbhani": ["Gangakhed","Jintoor","Prabhani","Pathri","Singnapur"],
    "	Pune": ["Ambegaon","Aundh","B S Dhole Patil Path","Balewadi","Baner","Baramati","Bhavani Peth","Bhor","Bopodi","Cavthan","Chakan","Dange Chawk","Daund","Dhankawadi","Dhanori","Erandwana","Fatimanagar","Ganesh Peth","Gokhale Nagar","Gultekdi","Guru Nanak Nagar","Hadapsar","Haveli","Hinjewadi","Indapur","Junnar","Kalewadi","Kasba Peth","Khed Alandi","Kondhwa","Kothrud","Maval","Mulshi","Nana Peth","Narayan Peth","Parvati","Pipmle","Pimpri Chinchwad","Pune Cantonment","Purandhar","Sashtri Nagar","Shirur","Shivanjinagar","Sinhagad Road","Wakad","Wanoerie"],
    "Raigad": ["Alibag","Khalapur","Mahad","Mangaon","Panvel","Pen","Shrivardhan","Uran"],
    "Ratnagiri": ["Chiplun","Dapoli","Guhagar","Khed","Lanja","Mandangad","Rajapur","Ratnagiri","Sangameshwar"],
    "	Sangli": ["Bhilwadi Wangi","Jat","Kavathe Mahankal","Khanapur Apadi","Miraj","Sangli","Shirala","Tasgaon","Walwa"],
    "	Satara": ["Jaoli","Karad","Khatav","Koregaon","Man","Patan","Phaltan","Satara","Wai"],
    "	Sindhudurg": ["Chiplun","Dapoli","Devgad","Guhagar"],
    "Solapur": ["Akkalkot","Barshi","Karmala","Madha","Malsiras","Mangalwedha","Mohol","Pamdharpur","sangole","Solapur"],
    "Thane": ["Ambarnath","Belapur","Bhayandar","Bhivandi","Dahanu","Jawhar","Kalyan","Murbad","Navi Mumbai","Palghar","Shahapur","Thane","Ulhasnagar","Vasai","Wada"],
    "Wardha": ["Arvi","Hinganghat","Pulgaon","Wardha"],
    "Yavatmal": ["DArwha","Digras","Gaon","Kelapur","Pusad","Umarkhed","Wani","Yavatmal"]
  },
  "Manipur": {
    "Bishnupur": ["Bishenpur","Kumbi","Moirang","Nambol","Oinam","Thanga"],
    "Churachandpur": ["Churachandpur","Henglep","Saikot","Singhat","Thanlon","Tipaimukh"],
    "Chandel": ["Chandel","Tengnoupal"],
    "Imphal East": ["Andro","Heingang","Jiribam","Keirao","Khetrigao","Khundrakpam","Khurai","Lamlai","Thongju","Wangkhei","Yaiskul"],
    "Imphal West": ["Keisamthong","Konthoujam","Lamsang","Langthabal","Mayang Imhpal","Naoriya Pakhanglakpa","Patsoi","Sagolband","Sekmai","Singiamei","Thangmeiband","Uripok","Wangoi"],
    "Jiribam": ["Jiribam"],
    "Kakching": ["Kakching"],
    "Kamjong": ["Kamjong"],
    "	Kangpokpi": ["Kangpokpi"],
    "Noney": ["Noney"],
    "Pherzawl": ["Pherzawl"],
    "Senapati": ["Karong","Mao","Saikul","Saitu","Tadubi"],
    "	Tamenglong": ["Nugba","Tamei","Tamenglong"],
    "Tengnoupal": ["Tengnoupal"],
    "	Thoubal": ["Heirok","Hiyanglam","Kakching","Khangabok","Lilong","Sugnoo","Thoubal","Wabgai","Wangjing Tentha","Wangkhem" ],
    "	Ukhrul": ["Handwara","Karnah","Kupwara","Langate","Lolab"]
  },
  "Meghalaya": {
    "East Garo Hills": ["Ampatigiri","Bajengdoba","Dalamgiri","Kharkutta","Mahendraganj","Mendipathar","Rangsakona","Resubelpara","Rongjeng","Rongrenggiri","Salmanpara","Songsak"],
    "	East Jaintia Hills": ["Jirang","Jowai","Mairang","Mawhati","Nartiang","Nongbah-Wahiajer","Nongph","Nongspung","Raliang","Ribhoi","Rymbai","Sohiong","Sutnga-shangpung","Umroi","War Jaintial"],
    "	North Garo Hills": ["North Garo Hills"],
    "Ri-Bhoi": ["Mumbra", "Ri-Bhoi"],
    "South Garo Hills": ["Dalu"],
    "	South West Garo Hills": ["Bagmara","Ckhopot","Dadenggiri","Kherapara","Phulbari","Rajabala","Rongchugiri","Rongram","Selsalla","Tikrikilla","Tura"],
    "South West Khasi Hills": ["Langrin","Mawthengkut","Nongstoin"],
    "	West Jaintia Hills": ["	West Jaintia Hills"],
    "West Garo Hills": ["West Garo Hills"],
    "	West Khasi Hills": ["West Khasi Hills"],
    "East Khasi Hills": ["East Khasi Hills"]
    
  },
  "Mizoram": {
    "Aizawl": ["Azl","Ratu","Saitul","Sateek","Suangpuilawn","Tlungvel"],
    "	Champhai": ["	Champhai","Khawbung","Khawhai","Khawzawl","Ngopa"],
    "Hnahthial": ["Hnahthial"],
    "Kolasib": ["Bilkhawthlir","Kawnpui", "Kolasib"],
    "Khawzawl": ["Mumbra", "thane", "Kalwa"],
    "Lawngtlai": ["Chawngte","Lawngtai"],
    "	Lunglei": ["Buarpui","Hnahthial","Lunglei","Tawipu","Tlabng","Vanva"],
    "	Mamit": ["Kawrthah","Lokicherra","Phuldungsei"],
    "	Saiha": ["Saiha","Sangau","Tuipang"],
    "	Serchhip": ["Lungpho","N. vanliaphai","Serchhip"]
    
   
  },
  "Nagaland": {
    "Dimapur": ["Chumukedima","Dimapur"],
    "Kiphire": ["Mumbra", "thane", "Kalwa"],
    "Kohima": ["Kohima","Peren"],
    "	Longleng": ["Mumbra", "thane", "Kalwa"],
    "Mokokchung": ["Mokokchung"],
    "Mon": ["Mon"],
    "Noklak": [ "Noklak"],
    "	Peren": ["	Peren"],
    "Phek": ["Phek"],
    "	Tuensang": ["	Tuensang"],
    "	Wokha": ["	Wokha"],
    "Zunheboto": ["Zunheboto"]
  
  },
  "Odisha": {
    "	Angul": ["	Angul"],
    "	Boudh": ["Boudhnagar","Malisahi"],
    "Bhadrak": ["Bhadrak","Basudebpur","Dhamanagar"],
    "Balangir": [ "Balangir","Kantabanji","Patnagarh","Titlagarh"],
    "	Bargarh": ["	Bargarh","Barapali","Khaliapali","Padmapur"],
    "	Balasore": ["	Balasore","Azimabad","Issannagar","Sovarampur","Srikanthpur"],
    "Cuttack": ["Cuttack","Ahagad","Banki","Belagachhia","Charibatia","Choudwar",""],
    "Debagarh": ["Debagarh"],
    "Dhenkanal": [ "Dhenkanal","Bhuban","Kamakshyanagar"],
    "Ganjam": [ "Ganjam","Brahmapur"],
    "	Gajapati": ["Kashinagara","Parlakhemundi"],
    "Jharsuguda": ["Jharsuguda","Belpahar","Brajaranagar"],
    "Jajpur": ["Jajpur","Byasanagar"],
    "	Jagatsinghpur": [ "	Jagatsinghpur","Paradip"],
    "	Khordha": [ "	Khordha"],
    "Kendujhar": ["Kendujhar"],
    "	Kalahandi": ["Bhawanipatna","junagarh","Kesinga"],
    "	Kandhamal": ["G.udayagiri","Phulabani"],
    "Koraput": ["Koraput"],
    
    "Malkangiri": ["Malkangiri"],
    "	Mayurbhanj": ["Malkangiri","Baripada","Karanji","Rairangpur","Udala"],
    "Nabarangpur": ["Nabarangpur"],
    "Nuapada": ["Nuapada"],
    "	Nayagarh": ["	Nayagarh"],
    "Puri": [ "Puri"],
    "Rayagada": ["Rayagada"],
    "Sambalpur": ["Sambalpur","Bamra","Dhankauda","Jamankira","Jujumora","Kuchinda","Maneswar","Naktideul","Rairakhol","Rengali",""],
    "	Subarnapur": ["Mumbra", "thane", "Kalwa"],
    "Sundargarh": ["Sundargarh","Rourkela"]

   
  },
  "Punjab": {
    "Amritsar": ["Amritsar","Ajnala","Attari","Beas","Jandiala","Khadoor Sahib","Majitha","Naushahra Panwan","Patti","Raja Sansi","Tran Taran","Valtoha","Verka"],
    "	Barnala": ["	Barnala"],
    "Bathinda": ["Bathinda","Nathana","Pakka Kalan","Rampura Phul","Talwandi Sabo"],
    "	Firozpur": ["Abohar","Balluana","Fazilka","Firozpur","Firozpur Cantonment","Guru Har Sahai","Jalalabad","Zira"],
    "	Faridkot": ["Firidkot","Kot Kapura","Panjgrain"],
    "Fatehgarh Sahib": ["Mumbra", "thane", "Kalwa"],
    "Fazilka": ["Mumbra", "thane", "Kalwa"],
    "	Gurdaspur": ["Mumbra", "thane", "Kalwa"],
    "Hoshiarpur": ["Mumbra", "thane", "Kalwa"],
    "Jalandhar": ["Mumbra", "thane", "Kalwa"],
    "	Kapurthala": ["Mumbra", "thane", "Kalwa"],
    "Ludhiana": ["Mumbra", "thane", "Kalwa"],
    "Mansa": ["Mumbra", "thane", "Kalwa"],
    "Moga": ["Mumbra", "thane", "Kalwa"],
    "	Sri Muktsar Sahib": ["Mumbra", "thane", "Kalwa"],
    "	Pathankot": ["Mumbra", "thane", "Kalwa"],
    "Patiala": ["Mumbra", "thane", "Kalwa"],
    "	Rupnagar": ["Mumbra", "thane", "Kalwa"],
    "	Sahibzada Ajit Singh Nagar": ["Mumbra", "thane", "Kalwa"],
    "Sangrur": ["Mumbra", "thane", "Kalwa"],
    "Shahid Bhagat Singh Nagar": ["Mumbra", "thane", "Kalwa"],
    "Tarn Taran": ["Mumbra", "thane", "Kalwa"]

    
  },
  "Rajasthan": {
    "	Ajmer": ["Mumbra", "thane", "Kalwa"],
    "	Alwar": ["Mumbra", "thane", "Kalwa"],
    "	Bikaner": ["Mumbra", "thane", "Kalwa"],
    "	Barmer": ["Mumbra", "thane", "Kalwa"],
    "Banswara": ["Mumbra", "thane", "Kalwa"],
    "Bharatpur": ["Mumbra", "thane", "Kalwa"],
    "Baran": ["Mumbra", "thane", "Kalwa"],
    "Bundi": ["Mumbra", "thane", "Kalwa"],
    "Bhilwara": ["Mumbra", "thane", "Kalwa"],
    "Churu": ["Mumbra", "thane", "Kalwa"],
    "Chittorgarh": ["Mumbra", "thane", "Kalwa"],
    "	Dausa": ["Mumbra", "thane", "Kalwa"],
    "Dholpur": ["Mumbra", "thane", "Kalwa"],
    "Dungarpur": ["Mumbra", "thane", "Kalwa"],
    "Ganganagar	": ["Mumbra", "thane", "Kalwa"],
    "	Hanumangarh": ["Mumbra", "thane", "Kalwa"],
    "	Jhunjhunu": ["Mumbra", "thane", "Kalwa"],
    "	Jalore": ["Mumbra", "thane", "Kalwa"],
    "Jodhpur": ["Mumbra", "thane", "Kalwa"],
    "	Jaipur": ["Mumbra", "thane", "Kalwa"],
    "Jaisalmer": ["Mumbra", "thane", "Kalwa"],
    "	Jhalawar": ["Mumbra", "thane", "Kalwa"],
    "Karauli": ["Mumbra", "thane", "Kalwa"],
    "	Kota": ["Mumbra", "thane", "Kalwa"],
    "Nagaur": ["Mumbra", "thane", "Kalwa"],
    "Pali": ["Mumbra", "thane", "Kalwa"],
    "Pratapgarh": ["Mumbra", "thane", "Kalwa"],
    "Rajsamand": ["Mumbra", "thane", "Kalwa"],
    "Sikar": ["Mumbra", "thane", "Kalwa"],
    "Sawai Madhopur": ["Mumbra", "thane", "Kalwa"],
    "Sirohi": ["Mumbra", "thane", "Kalwa"],
    "Tonk": ["Mumbra", "thane", "Kalwa"],
    "	Udaipur": ["Mumbra", "thane", "Kalwa"]
    
    
  },
  "Sikkim": {
    "East Sikkim": ["Mumbra", "thane", "Kalwa"],
    "	North Sikkim": ["Mumbra", "thane", "Kalwa"],
    "	South Sikkim": ["Mumbra", "thane", "Kalwa"],
    "West Sikkim": ["Mumbra", "thane", "Kalwa"]
   
  },
  "Tamil Nadu": {
    "Ariyalur": ["Mumbra", "thane", "Kalwa"],
    "Chengalpattu": ["Mumbra", "thane", "Kalwa"],
    "Chennai": ["Mumbra", "thane", "Kalwa"],
    "Coimbatore": ["Mumbra", "thane", "Kalwa"],
    "Cuddalore": ["Mumbra", "thane", "Kalwa"],
    "Dharmapuri": ["Mumbra", "thane", "Kalwa"],
    "	Dindigul": ["Mumbra", "thane", "Kalwa"],
    "	Erode": ["Mumbra", "thane", "Kalwa"],
    "Kallakurichi": ["Mumbra", "thane", "Kalwa"],
    "Kanchipuram": ["Mumbra", "thane", "Kalwa"],
    "Kanyakumari": ["Mumbra", "thane", "Kalwa"],
    "	Karur": ["Mumbra", "thane", "Kalwa"],
    "Krishnagiri": ["Mumbra", "thane", "Kalwa"],
    "Madurai": ["Mumbra", "thane", "Kalwa"],
    "Mayiladuthurai": ["Mumbra", "thane", "Kalwa"],
    "Nagapattinam": ["Mumbra", "thane", "Kalwa"],
    "Nilgiris": ["Mumbra", "thane", "Kalwa"],
    "	Namakkal": ["Mumbra", "thane", "Kalwa"],
    "	Perambalur": ["Mumbra", "thane", "Kalwa"],
    "Pudukkottai": ["Mumbra", "thane", "Kalwa"],
    "Ramanathapuram": ["Mumbra", "thane", "Kalwa"],
    "	Ranipet": ["Mumbra", "thane", "Kalwa"],
    "Salem": ["Mumbra", "thane", "Kalwa"],
    "Sivaganga": ["Mumbra", "thane", "Kalwa"],
    "	Tenkasi": ["Mumbra", "thane", "Kalwa"],
    "Tirupur": ["Mumbra", "thane", "Kalwa"],
    "	Tiruchirappalli": ["Mumbra", "thane", "Kalwa"],
    "Theni": ["Mumbra", "thane", "Kalwa"],
    "Tirunelveli": ["Mumbra", "thane", "Kalwa"],
    "Tirupattur": ["Mumbra", "thane", "Kalwa"],
    "Thanjavur": ["Mumbra", "thane", "Kalwa"],
    "	Thoothukudi": ["Mumbra", "thane", "Kalwa"],
    "Tiruvallur": ["Mumbra", "thane", "Kalwa"],
    "Tiruvarur": ["Mumbra", "thane", "Kalwa"],
    "	Tiruvannamalai": ["Mumbra", "thane", "Kalwa"],
    "	Vellore": ["Mumbra", "thane", "Kalwa"],
    "	Vellore": ["Mumbra", "thane", "Kalwa"],
    "Virudhunagar": ["Mumbra", "thane", "Kalwa"]
  
  },
  "Telangana": {
    "Adilabad": ["Mumbra", "thane", "Kalwa"],
    "	Komaram Bheem Asifabad": ["Mumbra", "thane", "Kalwa"],
    "Bhadradri Kothagudem": ["Mumbra", "thane", "Kalwa"],
    "	Hyderabad": ["Mumbra", "thane", "Kalwa"],
    "Jagtial": ["Mumbra", "thane", "Kalwa"],
    "Jangaon": ["Mumbra", "thane", "Kalwa"],
    "Jayashankar Bhupalpally": ["Mumbra", "thane", "Kalwa"],
    "	Jogulamba Gadwal": ["Mumbra", "thane", "Kalwa"],
    "Kamareddy": ["Mumbra", "thane", "Kalwa"],
    "Karimnagar": ["Mumbra", "thane", "Kalwa"],
    "Khammam": ["Mumbra", "thane", "Kalwa"],
    "	Mahabubabad": ["Mumbra", "thane", "Kalwa"],
    "Mahbubnagar": ["Mumbra", "thane", "Kalwa"],
    "	Mancherial": ["Mumbra", "thane", "Kalwa"],
    "Medak": ["Mumbra", "thane", "Kalwa"],
    "Medchal": ["Mumbra", "thane", "Kalwa"],
    "	Mulugu": ["Mumbra", "thane", "Kalwa"],
    "	Narayanpet": ["Mumbra", "thane", "Kalwa"],
    "Nalgonda": ["Mumbra", "thane", "Kalwa"],
    "	Nagarkurnool": ["Mumbra", "thane", "Kalwa"],
    "Nirmal": ["Mumbra", "thane", "Kalwa"],
    "Nizamabad": ["Mumbra", "thane", "Kalwa"],
    "Peddapalli": ["Mumbra", "thane", "Kalwa"],
    "	Rajanna Sircilla": ["Mumbra", "thane", "Kalwa"],
    "	Ranga Reddy": ["Mumbra", "thane", "Kalwa"],
    "Sangareddy": ["Mumbra", "thane", "Kalwa"],
    "Siddipet": ["Mumbra", "thane", "Kalwa"],
    "	Suryapet": ["Mumbra", "thane", "Kalwa"],
    "Vikarabad": ["Mumbra", "thane", "Kalwa"],
    "Wanaparthy": ["Mumbra", "thane", "Kalwa"],
    "Warangal (urban)": ["Mumbra", "thane", "Kalwa"],
    "Warangal (rural)": ["Mumbra", "thane", "Kalwa"],
    "Yadadri Bhuvanagiri": ["Mumbra", "thane", "Kalwa"]
   
    
  },
  "Tripura": {
    "Dhalai": ["Mumbra", "thane", "Kalwa"],
    "Gomati": ["Mumbra", "thane", "Kalwa"],
    "	Khowai": ["Mumbra", "thane", "Kalwa"],
    "North Tripura": ["Mumbra", "thane", "Kalwa"],
    "Sepahijala": ["Mumbra", "thane", "Kalwa"],
    "South Tripura": ["Mumbra", "thane", "Kalwa"],
    "	Unokoti": ["Mumbra", "thane", "Kalwa"],
    "West Tripura": ["Mumbra", "thane", "Kalwa"]
   
  },
  "Uttar Pradesh": {
    "	Agra": ["Mumbra", "thane", "Kalwa"],
    "	Aligarh": ["Mumbra", "thane", "Kalwa"],
    "Allahabad": ["Mumbra", "thane", "Kalwa"],
    "Ambedkar Nagar": ["Mumbra", "thane", "Kalwa"],
    "Amethi": ["Mumbra", "thane", "Kalwa"],
    "	Amroha": ["Mumbra", "thane", "Kalwa"],
    "Auraiya": ["Mumbra", "thane", "Kalwa"],
    "Azamgarh": ["Mumbra", "thane", "Kalwa"],
    "	Bagpat": ["Mumbra", "thane", "Kalwa"],
    "	Bahraich": ["Mumbra", "thane", "Kalwa"],
    "	Ballia": ["Mumbra", "thane", "Kalwa"],
    "	Balrampur": ["Mumbra", "thane", "Kalwa"],
    "Banda": ["Mumbra", "thane", "Kalwa"],
    "	Barabanki": ["Mumbra", "thane", "Kalwa"],
    "Bareilly": ["Mumbra", "thane", "Kalwa"],
    "Basti": ["Mumbra", "thane", "Kalwa"],
    "	Bijnor": ["Mumbra", "thane", "Kalwa"],
    "Budaun": ["Mumbra", "thane", "Kalwa"],
    "Bulandshahr": ["Mumbra", "thane", "Kalwa"],
    "	Chandauli": ["Mumbra", "thane", "Kalwa"],
    "	Chitrakoot": ["Mumbra", "thane", "Kalwa"],
    "Deoria": ["Mumbra", "thane", "Kalwa"],
    "Etah": ["Mumbra", "thane", "Kalwa"],
    "	Etawah": ["Mumbra", "thane", "Kalwa"],
    "	Faizabad": ["Mumbra", "thane", "Kalwa"],
    "Fatehpur": ["Mumbra", "thane", "Kalwa"],
    "	Firozabad": ["Mumbra", "thane", "Kalwa"],
    "Gautam Buddh Nagar": ["Mumbra", "thane", "Kalwa"],
    "	Ghaziabad": ["Mumbra", "thane", "Kalwa"],
    "Ghazipur": ["Mumbra", "thane", "Kalwa"],
    "Gonda": ["Mumbra", "thane", "Kalwa"],
    "	Gorakhpur": ["Mumbra", "thane", "Kalwa"],
    "Hamirpur": ["Mumbra", "thane", "Kalwa"],
    "Hapur": ["Mumbra", "thane", "Kalwa"],
    "Hardoi": ["Mumbra", "thane", "Kalwa"],
    "Hathras": ["Mumbra", "thane", "Kalwa"],
    "	Jalaun": ["Mumbra", "thane", "Kalwa"],
    "Jaunpur": ["Mumbra", "thane", "Kalwa"],
    "	Jhansi": ["Mumbra", "thane", "Kalwa"],
    "Kannauj": ["Mumbra", "thane", "Kalwa"],
    "Kanpur Dehat": ["Mumbra", "thane", "Kalwa"],
    "Kanpur Nagar": ["Mumbra", "thane", "Kalwa"],
    "Kasganj": ["Mumbra", "thane", "Kalwa"],
    "Kaushambi": ["Mumbra", "thane", "Kalwa"],
    "	Kushinagar": ["Mumbra", "thane", "Kalwa"],
    "	Lakhimpur Kheri": ["Mumbra", "thane", "Kalwa"],
    "		Lalitpur": ["Mumbra", "thane", "Kalwa"],
    "Lucknow": ["Mumbra", "thane", "Kalwa"],
    "Maharajganj": ["Mumbra", "thane", "Kalwa"],
    "Mahoba": ["Mumbra", "thane", "Kalwa"],
    "Mainpuri": ["Mumbra", "thane", "Kalwa"],
    "	Mathura": ["Mumbra", "thane", "Kalwa"],
    "Mau": ["Mumbra", "thane", "Kalwa"],
    "Meerut": ["Mumbra", "thane", "Kalwa"],
    "Mirzapur": ["Mumbra", "thane", "Kalwa"],
    "Moradabad": ["Mumbra", "thane", "Kalwa"],
    "Muzaffarnagar": ["Mumbra", "thane", "Kalwa"],
    "Pilibhit": ["Mumbra", "thane", "Kalwa"],
    "Pratapgarh": ["Mumbra", "thane", "Kalwa"],
    "Raebareli": ["Mumbra", "thane", "Kalwa"],
    "Rampur": ["Mumbra", "thane", "Kalwa"],
    "Saharanpur": ["Ambehta", "Behat", "Chhutmalpur"],
    "Sambhal": ["Mumbra", "thane", "Kalwa"],
    "Sant Kabir Nagar": ["Mumbra", "thane", "Kalwa"],
    "	Bhadohi": ["Mumbra", "thane", "Kalwa"],
    "Shahjahanpur": ["Mumbra", "thane", "Kalwa"],
    "Shamli": ["Mumbra", "thane", "Kalwa"],
    "Shravasti": ["Mumbra", "thane", "Kalwa"],
    "Siddharthnagar": ["Bansi", "Barhani Bazar", "Biskohar (Siddharth Nagar)", "Domariaganj", "Itwa (Siddharth Nagar)", "Khajuria Sarki", "Mahadev Ghurhu", "Shohratgarh", "Siddharthnagar", "Tetri Bazar"],
    "Sitapur": ["Mumbra", "thane", "Kalwa"],
    "Sonbhadra": ["Mumbra", "thane", "Kalwa"],
    "	Sultanpur": ["Mumbra", "thane", "Kalwa"],
    "Unnao": ["Mumbra", "thane", "Kalwa"],
    "Varanasi": ["Mumbra", "thane", "Kalwa"]

   
  },
  "Uttarakhand": {
    "Almora": ["Mumbra", "thane", "Kalwa"],
    "Bageshwar": ["Mumbra", "thane", "Kalwa"],
    "	Chamoli": ["Mumbra", "thane", "Kalwa"],
    "	Champawat": ["Mumbra", "thane", "Kalwa"],
    "	Dehradun": ["Mumbra", "thane", "Kalwa"],
    "	Haridwar": ["Mumbra", "thane", "Kalwa"],
    "	Nainital": ["Mumbra", "thane", "Kalwa"],
    "Pauri Garhwal": ["Mumbra", "thane", "Kalwa"],
    "	Pithoragarh": ["Mumbra", "thane", "Kalwa"],
    "Rudraprayag": ["Mumbra", "thane", "Kalwa"],
    "Tehri Garhwal": ["Mumbra", "thane", "Kalwa"],
    "Udham Singh Nagar": ["Mumbra", "thane", "Kalwa"],
    "	Uttarkashi": ["Mumbra", "thane", "Kalwa"]

   
  },
  "West Bengal": {
    "	Alipurduar": ["Mumbra", "thane", "Kalwa"],
    "	Bankura": ["Mumbra", "thane", "Kalwa"],
    "	Paschim Bardhaman": ["Mumbra", "thane", "Kalwa"],
    "Purba Bardhaman": ["Mumbra", "thane", "Kalwa"],
    "Birbhum": ["Mumbra", "thane", "Kalwa"],
    "Cooch Behar": ["Mumbra", "thane", "Kalwa"],
    "Dakshin Dinajpur": ["Mumbra", "thane", "Kalwa"],
    "Darjeeling": ["Mumbra", "thane", "Kalwa"],
    "Hooghly": ["Mumbra", "thane", "Kalwa"],
    "Howrah": ["Mumbra", "thane", "Kalwa"],
    "	Jalpaiguri": ["Mumbra", "thane", "Kalwa"],
    "Jhargram": ["Mumbra", "thane", "Kalwa"],
    "Kalimpong": ["Mumbra", "thane", "Kalwa"],
    "Kolkata": ["Mumbra", "thane", "Kalwa"],
    "Maldah": ["Mumbra", "thane", "Kalwa"],
    "Murshidabad": ["Mumbra", "thane", "Kalwa"],
    "Nadia": ["Mumbra", "thane", "Kalwa"],
    "	North 24 Parganas": ["Mumbra", "thane", "Kalwa"],
    "Paschim Medinipur": ["Mumbra", "thane", "Kalwa"],
    "Purba Medinipur": ["Mumbra", "thane", "Kalwa"],
    "	Purulia": ["Mumbra", "thane", "Kalwa"],
    "South 24 Parganas": ["Mumbra", "thane", "Kalwa"],
    "Uttar Dinajpur": ["Mumbra", "thane", "Kalwa"]
    
  }
  
}
window.onload = function() {
  var subjectSel = document.getElementById("state");
  var topicSel = document.getElementById("district");
  var chapterSel = document.getElementById("city");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>



    <div class="shadow p-3 mb-5 bg-body rounded ">
<div class="container  mt-3 mb-2 col-md-3">
    <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Donate Blood for Humanity" data-bs-content="Donate Your Blood And Save Others Life">Search For A Blood Donor</a>
</div>
    </div>
<div class="shadow p-3 mb-5 bg-body rounded ">
    <div class="container mt-2 mb-2">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link  btn btn-outline-info"  href="requestlist.php">Donate Blood</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link btn btn-outline-info" href="requestblood.php">Request For Blood</a>
            </li>
           
          </ul>
    </div>
</div>

    <div class="shadow p-3 mb-2 bg-body rounded ">
        <div class="p-3 mb-2 bg-info text-dark">
    <div class="container mb-2 w-40 col-md-3 ">
        <form action="donor.php" method="post" class="mb-3 w-60 ">
              
    <div class="container mb-2 ">
        <select  name="bgroup" id="bgroup" class="form-select " aria-label="Default select example">
            <option selected>Select Your Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A1+">A1+</option>
            <option value="A1-">A1-</option>
            <option value="A2+">A2+</option>
            <option value="A2-">A2-</option>
            <option value="A1B+">A1B+</option>
            <option value="A1B-">A1B-</option>
            <option value="A2B+">A2B+</option>
            <option value="A2B-">A2B-</option>
            <option value="Bombay Blood Group">Bombay Blood Group</option>
            <option value="INRA">INRA</option>

          </select>
    </div>
    <div class="container mb-2 ">
        <select  name="state" id="state" class="form-select " aria-label="Default select example">
        <option value="" selected="selected">Select State</option>
            

          </select>
    </div>
    <div class="container mb-2 ">
        <select  name="district" id="district" class="form-select " aria-label="Default select example">
        <option value="" selected="selected">Select District</option>
           

          </select>
    </div>
    <div class="container mb-2 ">
        <select  name="city" id="city" class="form-select " aria-label="Default select example">
        <option value="" selected="selected">Select City</option>
        
          </select>
    </div>

   <div class="container col-md-3">
      <button class="btn btn-outline-success " type="submit"><i class="fa fa-search" ></i></button>
    </div>
</form>
</div>
</div>
</div>


<div class="container  col-md-15">
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">Availability</th>
    </tr>
  </thead>
  <tbody>
  
   <?php
   
if(isset($_POST['city'])){
   
  $bgroup=$_POST['bgroup'];
  $state=$_POST['state'];
  $district=$_POST['district'];
  $city=$_POST['city'];
   

  $sql = "SELECT * FROM `register` WHERE bgroup='$bgroup' AND  state='$state' AND district='$district' AND city='$city'";
$result = mysqli_query($con, $sql);
echo "<br>";

$num= mysqli_num_rows($result);
if($num>0){
  while($row=mysqli_fetch_assoc($result)){
    
    echo "<tr>
    <th scope='row'>".$row['srn']."</th>
    <td>".$row['fname']."</td>
    <td>".$row['bgroup']."</td>
    <td>".$row['mobile']."</td>
    <td>".$row['city']."</td>
    <td>".$row['availbility']."</td>
  </tr>";
 
  }
}
   }

?> 
   
  </tbody>
</table>
</div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script sr c="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>