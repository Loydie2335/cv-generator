<?php 
$nationalities = array(
    'Afghan',
    'Albanian',
    'Algerian',
    'American',
    'Andorran',
    'Angolan',
    'Antiguans',
    'Argentinean',
    'Armenian',
    'Australian',
    'Austrian',
    'Azerbaijani',
    'Bahamian',
    'Bahraini',
    'Bangladeshi',
    'Barbadian',
    'Barbudans',
    'Batswana',
    'Belarusian',
    'Belgian',
    'Belizean',
    'Beninese',
    'Bhutanese',
    'Bolivian',
    'Bosnian',
    'Brazilian',
    'British',
    'Bruneian',
    'Bulgarian',
    'Burkinabe',
    'Burmese',
    'Burundian',
    'Cambodian',
    'Cameroonian',
    'Canadian',
    'Cape Verdean',
    'Central African',
    'Chadian',
    'Chilean',
    'Chinese',
    'Colombian',
    'Comoran',
    'Congolese',
    'Costa Rican',
    'Croatian',
    'Cuban',
    'Cypriot',
    'Czech',
    'Danish',
    'Djibouti',
    'Dominican',
    'Dutch',
    'East Timorese',
    'Ecuadorean',
    'Egyptian',
    'Emirian',
    'Equatorial Guinean',
    'Eritrean',
    'Estonian',
    'Ethiopian',
    'Fijian',
    'Filipino',
    'Finnish',
    'French',
    'Gabonese',
    'Gambian',
    'Georgian',
    'German',
    'Ghanaian',
    'Greek',
    'Grenadian',
    'Guatemalan',
    'Guinea-Bissauan',
    'Guinean',
    'Guyanese',
    'Haitian',
    'Herzegovinian',
    'Honduran',
    'Hungarian',
    'I-Kiribati',
    'Icelander',
    'Indian',
    'Indonesian',
    'Iranian',
    'Iraqi',
    'Irish',
    'Israeli',
    'Italian',
    'Ivorian',
    'Jamaican',
    'Japanese',
    'Jordanian',
    'Kazakhstani',
    'Kenyan',
    'Kittian and Nevisian',
    'Kuwaiti',
    'Kyrgyz',
    'Laotian',
    'Latvian',
    'Lebanese',
    'Liberian',
    'Libyan',
    'Liechtensteiner',
    'Lithuanian',
    'Luxembourger',
    'Macedonian',
    'Malagasy',
    'Malawian',
    'Malaysian',
    'Maldivan',
    'Malian',
    'Maltese',
    'Marshallese',
    'Mauritanian',
    'Mauritian',
    'Mexican',
    'Micronesian',
    'Moldovan',
    'Monacan',
    'Mongolian',
    'Moroccan',
    'Mosotho',
    'Motswana',
    'Mozambican',
    'Namibian',
    'Nauruan',
    'Nepali',
    'New Zealander',
    'Nicaraguan',
    'Nigerian',
    'Nigerien',
    'North Korean',
    'Northern Irish',
    'Norwegian',
    'Omani',
    'Pakistani',
    'Palauan',
    'Panamanian',
    'Papua New Guinean',
    'Paraguayan',
    'Peruvian',
    'Polish',
    'Portuguese',
    'Qatari',
    'Romanian',
    'Russian',
    'Rwandan',
    'Saint Lucian',
    'Salvadoran',
    'Samoan',
    'San Marinese',
    'Sao Tomean',
    'Saudi',
    'Scottish',
    'Senegalese',
    'Serbian',
    'Seychellois',
    'Sierra Leonean',
    'Singaporean',
    'Slovakian',
    'Slovenian',
    'Solomon Islander',
    'Somali',
    'South African',
    'South Korean',
    'Spanish',
    'Sri Lankan',
    'Sudanese',
    'Surinamer',
    'Swazi',
    'Swedish',
    'Swiss',
    'Syrian',
    'Taiwanese',
    'Tajik',
    'Tanzanian',
    'Thai',
    'Togolese',
    'Tongan',
    'Trinidadian/Tobagonian',
    'Tunisian',
    'Turkish',
    'Tuvaluan',
    'Ugandan',
    'Ukrainian',
    'Uruguayan',
    'Uzbekistani',
    'Venezuelan',
    'Vietnamese',
    'Welsh',
    'Yemenite',
    'Zambian',
    'Zimbabwean'
);
$religions = array(
    "Christianity",
    "Catholic",
    "Islam",
    "Hinduism",
    "Buddhism",
    "Judaism",
    "Sikhism",
    "Bahá'í Faith",
    "Confucianism",
    "Taoism",
    "Jainism",
    "Shinto",
    "Zoroastrianism",
    "Rastafari",
    // Add more religions as needed
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="card p-2">
            <h3 class="text-center">CV Generator</h3>
            <div class="card-body">
                <form action="generate.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <label>Full Name</label>
                            <input type="text" name="fullname" placeholder="Firstname Middlename Lastname" id="" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="ex. juandelacruz@gmail.com" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Mobile Numbers</label>
                            <input type="text" name="mobilenumbers" placeholder="Mobile Number1/Mobile Number2" id="" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="">Complete Address</label>
                            <input type="text" name="complete_address" id="" class="form-control" placeholder="Street name, Barangay ,City/Municipality, Province" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Career Objective</label>
                            <textarea name="career_objective" id="" cols="10" rows="3" class="form-control" style="resize: none;" required></textarea>
                        </div>
                    </div>
                    <h4 class="text-center mt-2">Education Attainment</h4>
                    <div class="row">
                        <div class="col">
                            <label>Primary</label>
                            <input type="text" name="primary" id="" class="form-control" placeholder="Name of School (start year- end year)" required>
                        </div>
                        <div class="col">
                            <label>Secondary</label>
                            <input type="text" name="secondary_jhs" id="" class="form-control" placeholder="Name of School (start year- end year)" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Secondary</label>
                            <input type="text" name="secondary_shs" id="" class="form-control" placeholder="Name of School (start year- end year)" required>
                        </div>
                        <div class="col">
                            <label>Tertiary</label>
                            <input type="text" name="tertiary" class="form-control" placeholder="Course - Name of Institution/University - (start year- end year)" required>
                        </div>
                    </div>
                    <h4 class="text-center mt-2">Skills</h4>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="skill1" placeholder="Skill1" id="" class="form-control" required>
                        </div>
                        <div class="col">
                            <input type="text" name="skill2" placeholder="Skill2" id="" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="text" name="skill3" id="" placeholder="Skill3" class="form-control" required>
                        </div>
                        <div class="col">
                            <input type="text" name="skill4" id="" placeholder="Skill4" class="form-control" required>
                        </div>
                        <div class="col">
                            <input type="text" name="skill5" placeholder="Skill5" id="" class="form-control" required>
                        </div>
                    </div>
                    <h4 class="text-center mt-2">Trainings and Seminars</h4>
                    <div class="row">
                        <div class="col">
                            <input type="text" placeholder="Training/Seminar 1" name="training1" class="form-control" id="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="text" placeholder="Training/Seminar 2" name="training2" class="form-control" id="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="text" placeholder="Training/Seminar 3" name="training3" class="form-control" id="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="text" placeholder="Training/Seminar 3" name="training4" class="form-control" id="" required>
                        </div>
                    </div>
                    <h4 class="text-center mt-2">Personal Information</h4>
                    <div class="row">
                        <div class="col">
                            <label>Father's Name</label>
                            <input type="text" placeholder="Pedro Cruz" name="fathername" class="form-control" required>
                        </div>
                        <div class="col">
                            <label>Mother's Name</label>
                            <input type="text" placeholder="Maria Cruz" name="mothername" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Gender</label>
                            <select name="gender" id="" class="form-select"> required
                                <option selected disabled>--SELECT GENDER--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="col">
                            <label>Civil Status</label>
                            <select name="civil_status" id="" class="form-select"> required
                                <option selected disabled>--SELECT STATUS--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control">
                        </div>
                        <div class="col">
                            <label>Nationality</label>
                            <select name="nationality" class="form-control" required>
                                <option selected disabled>--SELECT NATIONALITY--</option>
                                <?php foreach ($nationalities as $nationality) : ?>
                                    <option value="<?php echo $nationality; ?>"><?php echo $nationality; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <label>Religion</label>
                            <select name="religion" class="form-control" required>
                            <option selected disabled>--SELECT RELIGION--</option>
                                <?php foreach ($religions as $religion) : ?>
                                    <option value="<?php echo $religion; ?>"><?php echo $religion; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <label>Languages Known</label>
                            <input type="text" name="languages_known" placeholder="ex. Filipino and English" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" required>
                       </div>
                       <div class="col">
                            <label>Signature (PNG)</label>
                            <input type="file" name="signature" class="form-control" required>
                       </div>
                    </div>
                    <div class="row d-flex float-end mt-2">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Generate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>