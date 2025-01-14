<?php
include "header.php"
?>
<main>






    <section class="page-banner  page-banner--with-image bgLazy"
        style="background: url() #006732 center center / cover no-repeat;"
        data-src="images/content-images/banners/_bannerImage/oilandgas-training.jpg">
        <div class="cutout cutout--top"></div>
        <div class="container">
            <div class="flex flex-wrap justify-between md:flex-nowrap">
                <div class="page-banner__overlay  page-banner__overlay--green">
                    <h1 class="page-banner__title page-banner__title--large">
                        Job Application
                    </h1>
                    <h2 class="page-banner__subtitle">
                        Developing competence and reducing risk in the offshore energy market
                    </h2>

                </div>
            </div>
        </div>
        <div class="cutout cutout--bottom"></div>
    </section>
    <section class="mt-16 mb-16">
        <div class="container xl:max-w-screen-xl">
            <?php if (isset($_GET['status'])): ?>
            <?php if ($_GET['status'] == 'success'): ?>
            <div
                style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 50px;">
                <!-- Green Success Circle -->
                <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="48" stroke="green" stroke-width="4" fill="none" />
                    <path d="M30,50 L45,65 L70,35" stroke="green" stroke-width="5" fill="none" />
                </svg>
                <h3 style="color: green; text-align: center;">Your application has been submitted successfully!</h3>
            </div>

            <?php elseif ($_GET['status'] == 'failed'): ?>
            <div
                style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 50px;">
                <!-- Red Failed Circle -->
                <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="48" stroke="red" stroke-width="4" fill="none" />
                    <path d="M30,30 L70,70" stroke="red" stroke-width="5" fill="none" />
                    <path d="M70,30 L30,70" stroke="red" stroke-width="5" fill="none" />
                </svg>
                <h3 style="color: red; text-align: center;">There was an error submitting your application. Please try
                    again.</h3>
            </div>

            <?php elseif ($_GET['status'] == 'invalid_email'): ?>
            <div
                style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 50px;">
                <!-- Red Failed Circle -->
                <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="48" stroke="red" stroke-width="4" fill="none" />
                    <path d="M30,30 L70,70" stroke="red" stroke-width="5" fill="none" />
                    <path d="M70,30 L30,70" stroke="red" stroke-width="5" fill="none" />
                </svg>
                <h3 style="color: red; text-align: center;">The email provided is invalid. Please provide a valid email.
                </h3>
            </div>


            <?php elseif ($_GET['status'] == 'missing_fields'): ?>
            <div
                style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 50px;">
                <!-- Red Failed Circle -->
                <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="48" stroke="red" stroke-width="4" fill="none" />
                    <path d="M30,30 L70,70" stroke="red" stroke-width="5" fill="none" />
                    <path d="M70,30 L30,70" stroke="red" stroke-width="5" fill="none" />
                </svg>
                <h3 style="color: red; text-align: center;">Some required fields are missing. Please complete all
                    fields.</h3>
            </div>

            <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>

    <div class="block">

        <section class="banner banner--light-grey bgLazy"
            style="background: url() #ededed center center / cover no-repeat;"
            data-src="images/content-images/banners/_bannerImage/globe-lighter.jpg">
            <div class="container xl:max-w-screen-xl">
                <div class="heading heading--base heading--large mb-12">
                    <h2> <span class="green">Please provide your details
                            and upload your CV to apply for a role.</span></h2>
                </div>

                <form action="submit_application.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="adminmail" value="<?php echo $email; ?>" />
                    <div class="contact-form" id="contactForm">
                        <!-- Job Role Selection -->
                        <div class="field dropdown w-full md:w-1/2  ">
                            <label class="left" for="selectRegion">Select region</label>
                            <select id="selectRegion" name="selectRegion" class="stepTrigger">
                                <option value="" selected disabled hidden>Select a region</option>
                                <option value="Americas">Americas</option>
                                <option value="Europe">Europe</option>
                                <option value="Africa">Africa</option>
                                <option value="MiddleEast">Middle East</option>
                                <option value="India">India</option>
                                <option value="Caspian">Caspian</option>
                                <option value="AsiaPacific">Asia Pacific</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>
                        <div class="field dropdown w-full md:w-1/2  ">
                            <label class="left" for="job_role">Select Job Role*</label>
                            <select id="job_role" name="job_role" required>
                                <option value="" selected disabled hidden>Select a Job Role</option>
                                <option value="Project Manager">Project Manager</option>
                                <option value="Civil Engineer">Civil Engineer</option>
                                <option value="Mechanical Engineer">Mechanical Engineer</option>
                                <option value="Electrical Engineer">Electrical Engineer</option>
                                <option value="Safety Officer">Safety Officer</option>
                                <option value="Construction Manager">Construction Manager</option>
                                <option value="Drilling Engineer">Drilling Engineer</option>
                                <option value="Geologist">Geologist</option>
                                <option value="Environmental Consultant">Environmental Consultant</option>
                                <option value="Operations Manager">Operations Manager</option>
                                <option value="HSE Specialist">HSE Specialist</option>
                                <option value="Site Supervisor">Site Supervisor</option>
                                <option value="Quality Assurance Engineer">Quality Assurance Engineer</option>
                                <option value="Logistics Coordinator">Logistics Coordinator</option>
                                <option value="Procurement Officer">Procurement Officer</option>
                                <option value="Mechanical Technician">Mechanical Technician</option>
                                <option value="Electrical Technician">Electrical Technician</option>
                                <option value="Field Engineer">Field Engineer</option>
                                <option value="Well Services Engineer">Well Services Engineer</option>
                                <option value="Structural Engineer">Structural Engineer</option>
                            </select>
                        </div>

                        <!-- Personal Information -->
                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="firstName">First name*</label>
                            <input id="firstName" type="text" name="firstName" value="" required>
                        </div>

                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="lastName">Last name*</label>
                            <input id="lastName" type="text" name="lastName" value="" required>
                        </div>

                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="dob">Date of Birth*</label>
                            <input id="dob" type="text" name="dob" value="" required>
                        </div>

                        <div class="field dropdown w-full md:w-1/2 ">
                            <label class="left" for="gender">Gender*</label>
                            <select id="gender" name="gender" required>
                                <option value="" selected disabled hidden>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="nationality">Nationality*</label>
                            <input id="nationality" type="text" name="nationality" value="" required>
                        </div>

                        <!-- Contact Information -->
                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="email">Email Address*</label>
                            <input id="email" type="email" name="email" value="" required>
                        </div>

                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="phone">Phone Number*</label>
                            <input id="phone" type="text" name="phone" value="" required>
                        </div>

                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="address">Current Address*</label>
                            <input id="address" type="text" name="address" value="" required>
                        </div>

                        <!-- Education Section -->
                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="highest_degree">Highest Degree Obtained*</label>
                            <input id="highest_degree" type="text" name="highest_degree" value="" required>
                        </div>

                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="university">University/Institution Name*</label>
                            <input id="university" type="text" name="university" value="" required>
                        </div>

                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="graduation_year">Year of Graduation*</label>
                            <input id="graduation_year" type="text" name="graduation_year" value="" required>
                        </div>

                        <!-- CV Upload Section -->
                        <div class="field file w-full md:w-1/2">
                            <label class="left" for="cv_upload">Upload your CV*</label>
                            <input id="cv_upload" type="file" name="cv_upload" accept=".pdf,.doc,.docx" required>
                        </div>

                        <!-- Work Experience Section -->


                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="previous_company">Previous Company*</label>
                            <input id="previous_company" type="text" name="previous_company" value="" required>
                        </div>

                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="job_title">Previous Job Title*</label>
                            <input id="job_title" type="text" name="job_title" value="" required>
                        </div>
                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="work_experience">Describe your relevant work experience*</label>
                            <textarea id="work_experience" name="work_experience" required></textarea>
                        </div>

                        <!-- Cover Letter Section -->
                        <div class="field text w-full md:w-1/2">
                            <label class="left" for="cover_letter">Cover Letter (Optional)</label>
                            <textarea id="cover_letter" name="cover_letter"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="field text w-full md:w-1/2">
                            <input type="submit" value="Submit Application">

                        </div>
                    </div>

                </form>
            </div>
        </section>



        <section class="mt-16" id="globaltraining">
            <div class="banner banner--white">
                <div class="container xl:max-w-screen-xl">
                    <h2 class="heading">
                        Global training portfolio
                    </h2>
                    <div class="block items-center flex-col mx-auto mb-8 md:flex-row lg:max-w-screen-lg">
                        <div class="typo">
                            <p>Contact us to find out where and when our courses are taking place. Our team are on hand
                                to discuss any of your training requirements, including bespoke solutions that we can
                                deliver at your location, both offshore and onshore.</p>
                            <p><strong>Use our contact form at the bottom of this page or contact our regional hubs
                                    directly.</strong></p>
                            <p><strong>For our home centre and general enquiries please mail our dedicated sales team <a
                                        href="mailto:<?php echo $email; ?>  " target="_blank"
                                        rel="noreferrer noopener"><?php echo $email; ?> </a></strong><br /></p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-16 mb-16" id="courses">
            <div>
                <div class="accordion__item accordionItem">
                    <div class="container xl:max-w-screen-xl">
                        <button class="accordion__title accordionTitle">
                            <span class="accordion__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 12 7.4" xml:space="preserve">
                                    <path d="M1.4,7.4L6,2.8l4.6,4.6L12,6L6,0L0,6L1.4,7.4z" />
                                </svg>
                            </span>
                            <?php echo $name; ?> courses (click to view / close)
                        </button>
                    </div>
                    <div class="accordion__content accordionContent">
                        <div class="container xl:max-w-screen-xl">
                            <div class="odd-even">

                                <table>
                                    <thead>
                                        <tr>
                                            <th align="left" width=""></th>
                                            <th align="center" width=""><?php echo $name; ?> Aberdeen</th>
                                            <th align="center" width=""><?php echo $name; ?> Houma</th>
                                            <th align="center" width=""><?php echo $name; ?> Houston</th>
                                            <th align="center" width=""><?php echo $name; ?> Kaz </th>
                                            <th align="center" width=""><?php echo $name; ?> Luanda</th>
                                            <th align="center" width=""><?php echo $name; ?> Abu Dhabi</th>
                                            <th align="center" width=""><?php echo $name; ?> Singapore</th>
                                            <th align="center" width=""><?php echo $name; ?> Australia</th>
                                            <th align="center" width="">Qatar RelyOn Nutec</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td align="left">2 yearly Hydraulic & Friction Clutch Assessment Training
                                                Centre</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Advanced Rigger (Level 3)</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Aerial Lift</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Crane Inspection Course</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Appliance Rigging</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Appointed Person</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Banksman Slinger/Gantry Crane </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Banksman Slinging & Rigging Simple Lifting Operations</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Basic Slinging/Lifting Operations</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Crane Coaching Mentoring </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Contract Support Assignments</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Crane Maintenance</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">DROPS</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">EA1 Crane Maintenance Training</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">EA1 Crane Operator Training & Familiarisation</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">EA1 Crane Operator Training & Train the Trainer Assessment
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Electrics for Hydraulics Engineers/Proportional Control
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Emergency Crane Operations Training</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Forklift Operator Training</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Gantry Crane Training (availability offshore)</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">HSE Lifting Operations Training Programme </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">H1 Hydraulics Competence Assessment</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Hydraulic Awareness</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Hydraulic Safety, Hose and Fittings Practical Course</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Intermediate Rigger (Level 2)</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Knuckle Boom Crane Training - Simulator</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Level 1 Hydraulics Training Programme</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Level 2 Hydraulics Training Programme</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Lift Plan Risk Assessment</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Lift Planning</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Lift Planning Coaching</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Lifting Appreciation</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Lifting Equipment User</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Lifting Operations Training</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Lifting Supervisor/Deck Foreman</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">LOLER Competent Person Training</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Long Line Simulator Development Training</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Mobile Crane Operator & Rigger</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Appreciation</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator stage 1 & 2 Combined Training</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 1 Assessement</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 1 Training /evaluation</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 2 Assessment - theory only
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 2 Training / Assessment</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 2 Assessment - Friction
                                                Clutch</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 2 Assessment With Knuckle
                                                Boom</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 2 Re-Assessment</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 3 Assessment</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 3 Assessment with Knuckleboom
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 3 Pre-Competence Assessment
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 3 Re-Assessment</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 3 Re-Assessment - theory only
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Offshore Crane Operator Stage 3 Re-assessment on Simulator
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Powered Industrial Trucks (Forklift)</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Powered Overhead Crane Inspector</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Powered Overhead Crane Operator</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Proportional Control</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Qualified Rigger (API RP 2D)</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Reaction and Awareness Training</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Rigging Loft Management / Lifting Equipment Inspection</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Scissor Lift</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Simulator Development - Offshore Crane Operator Stage 2
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Simulator Development - Offshore Crane Operator stage 3
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Simulator Development programme</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><?php echo $name; ?> Banksman & Slinger Operations stage 1
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><?php echo $name; ?> Banksman & Slinger Stage 3</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><?php echo $name; ?> Banksman / Slinger Training</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><?php echo $name; ?> Certified Rigger & Slinger Foundation
                                                Training Course</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left"><?php echo $name; ?> Rigging & Lifting Stage 1</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">Working at Height</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Wire Rope Inspection</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion__item accordionItem">
                    <div class="container xl:max-w-screen-xl">
                        <button class="accordion__title accordionTitle">
                            <span class="accordion__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 12 7.4" xml:space="preserve">
                                    <path d="M1.4,7.4L6,2.8l4.6,4.6L12,6L6,0L0,6L1.4,7.4z" />
                                </svg>
                            </span>
                            OPITO approved courses (click to view / close)
                        </button>
                    </div>
                    <div class="accordion__content accordionContent">
                        <div class="container xl:max-w-screen-xl">
                            <div class="odd-even">

                                <table>
                                    <thead>
                                        <tr>
                                            <th align="left" width=""></th>
                                            <th align="center" width=""><?php echo $name; ?> Aberdeen</th>
                                            <th align="center" width=""><?php echo $name; ?> Houma</th>
                                            <th align="center" width=""><?php echo $name; ?> Houston</th>
                                            <th align="center" width=""><?php echo $name; ?> Kaz </th>
                                            <th align="center" width=""><?php echo $name; ?> Luanda</th>
                                            <th align="center" width=""><?php echo $name; ?> Abu Dhabi</th>
                                            <th align="center" width=""><?php echo $name; ?> Singapore</th>
                                            <th align="center" width=""><?php echo $name; ?> Australia</th>
                                            <th align="center" width="">Qatar RelyOn Nutec</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td align="left">OPITO Approved Banksman & Slinger Competence
                                                Assessment/re-assessment</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">OPITO Approved Banksman & Slinger Initial Training</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"> ✓</td>
                                        </tr>
                                        <tr>
                                            <td align="left">OPITO Approved LOLER Competent Person
                                                Assessment/re-assessment</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">OPITO Approved Rigger Competence Assessment/re-assessment
                                            </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">OPITO Approved Rigger Initial Training </td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">✓</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion__item accordionItem">
                    <div class="container xl:max-w-screen-xl">
                        <button class="accordion__title accordionTitle">
                            <span class="accordion__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 12 7.4" xml:space="preserve">
                                    <path d="M1.4,7.4L6,2.8l4.6,4.6L12,6L6,0L0,6L1.4,7.4z" />
                                </svg>
                            </span>
                            IRATA approved courses (click to view / close)
                        </button>
                    </div>
                    <div class="accordion__content accordionContent">
                        <div class="container xl:max-w-screen-xl">
                            <div class="odd-even">

                                <table>
                                    <thead>
                                        <tr>
                                            <th align="left" width=""></th>
                                            <th align="center" width=""><?php echo $name; ?> Aberdeen</th>
                                            <th align="center" width=""><?php echo $name; ?> Houma</th>
                                            <th align="center" width=""><?php echo $name; ?> Houston</th>
                                            <th align="center" width=""><?php echo $name; ?> Kaz </th>
                                            <th align="center" width=""><?php echo $name; ?> Luanda</th>
                                            <th align="center" width=""><?php echo $name; ?> Abu Dhabi</th>
                                            <th align="center" width=""><?php echo $name; ?> Singapore</th>
                                            <th align="center" width=""><?php echo $name; ?> Australia</th>
                                            <th align="center" width="">Qatar RelyOn Nutec</th>
                                            <th align="left" width=""></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td align="left">Rope Access level 1</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="left"></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Rope Access Level 2</td>
                                            <td align="center">✓</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="left"></td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<section class="search-modal searchModal jsModal">
    <div class="container">
        <div class="flex justify-between py-6">
            <a href="index.php" class="site-logo -mt-6 md:mt-0 lg:mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="244.001" height="75.131" viewBox="0 0 244.001 75.131">
                    <defs>
                        <style>
                        .cls-1 {
                            fill: #fab500
                        }

                        .cls-3 {
                            fill: #fff
                        }
                        </style>
                    </defs>
                    <g transform="translate(-137.999 -5587.113)">
                        <path id="Path_1"
                            d="M301.382 242.761s-21.663 9.149-59.674-2.083c-16.935-5-32.546.463-32.546.463l-14.291 12.3s24.982-7.767 47.209-2.8c35.751 7.978 59.3-7.871 59.3-7.871"
                            class="cls-1" transform="translate(-53.545 5365.068)" />
                        <path id="Path_2"
                            d="M262.875 234.516s-8.35 7.157-29.775.329c-9.547-3.036-20.124.013-20.124.013l-10.355 8.233s14.049-5.465 27.564-2.553c20.081 4.333 32.69-6.022 32.69-6.022"
                            class="cls-1" transform="translate(-36.027 5353.613)" />
                        <path id="Path_3"
                            d="M283.411 237.288s-9.332 7.992-33.267.372c-10.659-3.391-22.475.01-22.475.01l-11.569 9.194s15.69-6.1 30.789-2.846c22.426 4.842 36.518-6.73 36.518-6.73"
                            class="cls-1" transform="translate(-5.549 5359.615)" />
                        <path id="Path_4"
                            d="M211.794 253.911a2.427 2.427 0 0 0-1.252-1.917 4.033 4.033 0 0 0-2.4-.737c-1.529 0-3.27.293-3.27 1.966 0 .737.655 1.079 1.252 1.327 1.8.688 5.888.884 9.491 1.966 3.593 1.03 6.762 2.951 6.762 7.131 0 7.079-7.529 9-14.4 9-6.658 0-13.961-2.409-14.128-9h10.313a3.044 3.044 0 0 0 1.3 2.26 4.8 4.8 0 0 0 2.889.737c1.421 0 3.655-.489 3.655-1.966s-.926-1.914-5.944-2.706c-8.233-1.275-11.562-3.632-11.562-8.011 0-6.439 7.688-8.109 13.362-8.109 6.11 0 13.472 1.523 13.743 8.06z"
                            class="cls-3" transform="translate(-55.852 5381.535)" />
                        <path id="Path_5"
                            d="M252.8 272.645c-10.636 0-15.435-6.342-15.435-13.423s4.8-13.371 15.435-13.371 15.435 6.293 15.435 13.371-4.8 13.423-15.435 13.423m0-19.716c-4.092 0-4.636 3.59-4.636 6.293s.545 6.345 4.636 6.345 4.633-3.639 4.633-6.345-.541-6.293-4.633-6.293"
                            class="cls-3" transform="translate(42.512 5381.531)" />
                        <path id="Path_6"
                            d="M277.877 253.911a2.438 2.438 0 0 0-1.249-1.917 4.05 4.05 0 0 0-2.4-.737c-1.526 0-3.27.293-3.27 1.966 0 .737.652 1.079 1.252 1.327 1.8.688 5.888.884 9.491 1.966 3.6 1.03 6.762 2.951 6.762 7.131 0 7.079-7.528 9-14.4 9-6.651 0-13.965-2.409-14.125-9h10.306a3.048 3.048 0 0 0 1.307 2.26 4.812 4.812 0 0 0 2.892.737c1.415 0 3.652-.489 3.652-1.966s-.926-1.914-5.941-2.706c-8.236-1.275-11.565-3.632-11.565-8.011 0-6.439 7.695-8.109 13.365-8.109 6.107 0 13.466 1.523 13.74 8.06z"
                            class="cls-3" transform="translate(93.539 5381.535)" />
                        <path id="Path_7"
                            d="M241.472 245.988c-3.922 0-6.214 1.673-7.962 4.721h-.11v-4.532h-10.36V271.7h10.8v-9.632c0-5.458 2.292-7.721 6.547-7.721h4.251v-8.36z"
                            class="cls-3" transform="translate(10.131 5381.844)" />
                        <path id="Path_8"
                            d="M248.962 245.988c-3.929 0-6.221 1.673-7.962 4.721h-.111v-4.532h-10.362V271.7h10.8v-9.632c0-5.458 2.289-7.721 6.544-7.721h4.255v-8.36z"
                            class="cls-3" transform="translate(27.055 5381.844)" />
                        <path id="Path_9"
                            d="M228.872 245.85c-6.71 0-14.232 1.18-14.561 8.357h10.033c.055-1.079.711-2.6 4.036-2.6 1.744 0 3.544.636 3.544 2.354 0 1.627-1.471 2.022-2.944 2.266-5.507.932-15.98.639-15.98 8.7 0 5.357 4.526 7.718 9.98 7.718 3.492 0 6.818-.688 9.11-3.049h.069v2.41h10.127V255.83c0-4.917.111-9.98-13.414-9.98m3.052 17.059c-.163 2.654-2.07 3.984-4.526 3.984-1.963 0-3.378-1.184-3.378-2.361 0-1.718 1.252-2.263 3.649-2.752a20.177 20.177 0 0 0 4.255-1.229z"
                            class="cls-3" transform="translate(-12.564 5381.531)" />
                        <path id="Path_10"
                            d="M246.4 246.046h10.33l4.023 15.782 3.551-15.782h8.372l4.242 15.782 3.761-15.782h10.334l-7.759 25.517h-10.17l-4.349-15.685-4.13 15.685H254z"
                            class="cls-3" transform="translate(62.943 5381.977)" />
                        <path id="Path_11"
                            d="M214.038 279.764V269.2h.108a9.628 9.628 0 0 0 7.744 3.44c9.491 0 12.054-7.274 12.054-13.277 0-6.387-3.873-13.515-11.891-13.515-5.289 0-6.925 1.816-8.288 3.44h-.1v-2.8h-10.426v34.219zm4.363-26.837c3.87 0 4.744 3.3 4.744 6.342 0 3-.874 6.293-4.744 6.293s-4.741-3.29-4.741-6.293c0-3.045.871-6.342 4.741-6.342"
                            class="cls-3" transform="translate(-34.629 5381.535)" />
                    </g>
                </svg> </a>
            <button class="circle-btn circle-btn--white modalCloseBtn">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 18.1 18.1" xml:space="preserve">
                    <path
                        d="M16.2,18l1.8-1.8L10.8,9L18,1.8L16.2,0L9,7.2L1.8,0L0,1.8L7.2,9L0,16.2L1.8,18L9,10.8L16.2,18z" />
                </svg>
            </button>
        </div>
        <section class="base-banner">
            <div class="container lg:max-w-screen-lg">
                <div class="-mx-4">
                    <div class="flex flex-wrap md:flex-nowrap">
                        <div class="w-full px-4 md:w-2/5">
                            <label for="search" class="heading heading--orange inline-block md:mb-0">
                                What are you looking for?
                            </label>
                        </div>
                        <div class="flex items-center w-full px-4 md:w-3/5">
                            <form class="search" action="<?php echo $url; ?> /search/results">
                                <input class="search__input" type="search" name="q" aria-label="Search"
                                    placeholder="Search...">
                                <button type="submit" class="circle-btn">
                                    <span class="sr-only">Search</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 17.6 17.6" xml:space="preserve">
                                        <path d="M12.6,11.1h-0.8l-0.3-0.3c2.3-2.7,2-6.8-0.7-9.2S4-0.4,1.6,2.3s-2,6.8,0.7,9.2c2.4,2.1,6,2.1,8.5,0l0.3,0.3v0.8
	l5,5l1.5-1.5L12.6,11.1z M6.6,11.1c-2.5,0-4.5-2-4.5-4.5s2-4.5,4.5-4.5s4.5,2,4.5,4.5C11.1,9.1,9.1,11.1,6.6,11.1
	C6.6,11.1,6.6,11.1,6.6,11.1z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<section class="banner banner--light-grey bgLazy" style="background: url() #ededed center center / cover no-repeat;"
    data-src="images/content-images/banners/_bannerImage/globe-lighter.jpg">
    <div class="container xl:max-w-screen-xl">
        <div class="heading heading--base heading--large mb-12">
            <h2><span class="dark-green">Contact us.</span> <span class="green">We are on hand 24/7, across the world,
                    to support you with any challenge.</span></h2>
        </div>

    </div>
</section><?php
            include "footer.php"
            ?>