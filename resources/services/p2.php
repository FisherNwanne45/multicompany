<?php
include "../../header.php"
?>
<main>





	<section class="page-banner " style="background: url() #006732 center center / cover no-repeat;" data-src="">
		<div class="cutout cutout--top"></div>
		<div class="container xl:max-w-screen-xl">
			<span class="block mb-2 md:hidden">

			</span>
			<h1 class="page-banner__title">
				Resources
			</h1>
		</div>
	</section>
	<section class="my-16">
		<div class="container xl:max-w-screen-xl">
			<div class="flex flex-wrap items-center justify-between">
				<nav class="-mx-2 overflow-x-scroll md:overflow-visible">
					<ul class="equipment-categories">
						<li class="px-2">
							<a href="../case-studies.php" class="button button--base">
								Case studies
							</a>
						</li>
						<li class="px-2">
							<a href="../services.php" class="button button--base is-active">
								Services
							</a>
						</li>
						<li class="px-2">
							<a href="../training.php" class="button button--base">
								Training
							</a>
						</li>
						<li class="px-2">
							<a href="../equipment.php" class="button button--base">
								Equipment
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</section>
	<section class="banner banner--light-grey mb-16">
		<div class="container">
			<h2 class="heading heading--dark-green">
				Services
			</h2>
			<form action="<?php echo $url; ?> /resources/services/p2" class="mb-16">
				<div class="-mx-4">
					<div class="flex justify-between items-end flex-wrap">
						<div class="w-full px-4 mb-6 lg:mb-0 md:w-1/2 lg:w-1/3">
							<label class="left" for="country">Filter by <span class="lowercase">Country</span>:</label>
							<select name="country" id="country">
								<option value="" selected disabled hidden>Select an option</option>
								<option value="africa">Africa</option>
								<option value="united-arab-emirates">United Arab Emirates</option>
								<option value="united-kingdom">United Kingdom</option>
								<option value="united-states">United States</option>
								<option value="middle-east-caspian-region">Middle East &amp; Caspian region</option>
								<option value="south-east-asia-region">South East Asia region</option>
								<option value="china">China</option>
								<option value="singapore">Singapore</option>
								<option value="gibralter">Gibralter</option>
								<option value="korea">Korea</option>
								<option value="norway">Norway</option>
								<option value="brazil">Brazil</option>
								<option value="qatar">Qatar</option>
								<option value="the-netherlands">The Netherlands</option>
								<option value="thailand">Thailand</option>
								<option value="kazakhstan">Kazakhstan</option>
								<option value="saudi-arabia">Saudi Arabia</option>
								<option value="australia">Australia</option>
							</select>
						</div>
						<div class="w-full px-4 mb-6 lg:mb-0 md:w-1/2 lg:w-1/3">
							<label class="left" for="language">Filter by <span
									class="lowercase">Language</span>:</label>
							<select name="language" id="language">
								<option value="" selected disabled hidden>Select an option</option>
								<option value="english">English</option>
								<option value="français">Français</option>
								<option value="us-english">US English</option>
								<option value="中文">中文</option>
							</select>
						</div>
						<div class="w-full px-4 lg:w-1/3 ">
							<div class="-mx-4">
								<div class="flex flex-wrap">
									<div class="w-full px-4 mb-6 md:mb-0 md:w-1/2">
										<button class="button button--base w-full clearBtn" type="submit">Clear</button>
									</div>
									<div class="w-full px-4 md:w-1/2">
										<button class="button button--alt w-full" type="submit">Search</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="-mx-4">
				<ol class="flex flex-wrap">
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Hydraulic-component-supply_low-res_1.jpg"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Hydraulic component supply</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Hydraulic-component-supply.pdf" target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Hydraulic-Services_US.png" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Hydraulic services – US</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4" href="../../files/services/Hydraulic-Services_US.pdf"
									target="_blank">
									US English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Hydraulic-system-management_low-res_1.jpg"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Hydraulic system management</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Hydraulic-system-management.pdf" target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/IndustrialservicesUS_email_1.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Industrial services – US</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Industrial-services-US.pdf" target="_blank">
									US English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/IndustrialServicesSummary_US_email_1.jpg"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Industrial services summary – US</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Industrial-Services-Summary_US.pdf" target="_blank">
									US English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Inspection-services_email-1.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Inspection services</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4" href="../../files/services/Inspection-services.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Inspection-Services-Qatar-version.png"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Inspection Services - Qatar</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Inspection-Services-Qatar-version.pdf" target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Inspection-services-Saudi.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Inspection Services – Saudi</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Inspection-services_Saudi-version.pdf" target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Integrated-solutions-to-support-CAPEX-project-development-1.jpg"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Integrated solutions to support CAPEX project development
							</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Integrated-solutions-to-support-CAPEX-project-development.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Land-rig-_email-1.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Land rig services – Middle East &amp; Caspian and South
								East Asia</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4" href="../../files/services/Land-rig.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Lifting-equipment-management_low-res-1.jpg"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Lifting equipment management</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Lifting-equipment-management.pdf" target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Lifting-equipment-management-Qatar-version.png"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Lifting equipment management - Qatar</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Lifting-equipment-management-Qatar-version.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
				</ol>
			</div>
			<div class="-mx-4">
				<div class="pagination">
					<a class="button button--base" href="../services.php">Previous</a> <a
						class="circle-btn circle-btn--large" href="../services.php">1</a>
					<span class="circle-btn circle-btn--large circle-btn--orange">
						2
					</span>
					<a class="circle-btn circle-btn--large" href="p3.php">3</a>
					<a class="circle-btn circle-btn--large" href="p4.php">4</a>
					<a class="button button--base" href="p3.php">Next</a>
				</div>
			</div>
		</div>
	</section>
</main>

<section class="search-modal searchModal jsModal">
	<div class="container">
		<div class="flex justify-between py-6">
			<a href="../../index.php" class="site-logo -mt-6 md:mt-0 lg:mt-8">
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
	data-src="../../images/content-images/banners/_bannerImage/globe-lighter.jpg">
	<div class="container xl:max-w-screen-xl">
		<div class="heading heading--base heading--large mb-12">
			<h2><span class="dark-green">Contact us.</span> <span class="green">We are on hand 24/7, across the world,
					to support you with any challenge.</span></h2>
		</div>
		<div class="contact-form" id="contactForm">
			<form method="post" action="<?php echo $url; ?>/submit.php">
				<input type="hidden" name="adminmail" value="<?php echo $email; ?>" />
				<!--<input type="hidden" name="formId" value="b1c3489b-cb0f-4b24-8ef4-3af58489cc2f" />
				<input type="hidden" name="action" value="express-forms/submit" />-->
				<input type="hidden" name="CRAFT_CSRF_TOKEN"
					value="GJ_ZCkJsdO_0OPVwXkaX2CsmaK5as8I5I8uQuQgXL7rQaKbreH-DJ1H56DwpFATapFrGBAc83bxdQRLGIP2oDmi75MxDVknOnifH0hcO82Q=" />

				<input type="hidden" value="" class="stepTriggerValue">
				<div class="field dropdown w-full md:w-1/2 lg:w-1/3">
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
				<input type="hidden" value="" class="stepTriggerValue">
				<div class="field dropdown w-full md:w-1/2 lg:w-1/3">
					<label class="left" for="enquiryType">What is your enquiry about?</label>
					<select id="enquiryType" name="enquiryType" class="stepTrigger">
						<option value="" selected disabled hidden>Select an enquiry type</option>
						<option value="Products"><?php echo $name; ?> products and services</option>
						<option value="Training">Training</option>
						<option value="Careers">Careers/jobs</option>
						<option value="Supplying">Supplying products/services to Sparrows</option>
						<option value="Other">Other</option>
					</select>
				</div>
				<input id="selectedEnquiry" type="hidden" name="selectedEnquiry" value="">
				<div class="field text hidden w-full md:w-1/2">
					<label class="left" for="firstName">First name*</label>
					<input id="firstName" type="text" name="firstName" value="">
				</div>
				<div class="field text hidden w-full md:w-1/2">
					<label class="left" for="lastName">Last name*</label>
					<input id="lastName" type="text" name="lastName" value="">
				</div>
				<div class="field text hidden w-full md:w-1/2">
					<label class="left" for="company">Company*</label>
					<input id="company" type="text" name="company" value="">
				</div>
				<div class="field text hidden w-full md:w-1/2">
					<label class="left" for="email">Email*</label>
					<input id="email" type="email" name="email" value="">
				</div>
				<div class="field text hidden w-full md:w-1/2">
					<label class="left" for="phoneNumber">Phone number*</label>
					<input id="phoneNumber" type="text" name="phoneNumber" value="">
				</div>
				<div class="field text hidden w-full md:w-1/2">
					<label class="left" for="message">Message*</label>
					<input id="message" type="text" name="message" value="">
				</div>
				<div class="field checkbox hidden w-full md:w-1/2">
					<label class="right" for="marketing">Tick here if you would like to receive news and other
						communications for marketing purposes from Sparrows</label>
					<input id="marketing" type="checkbox" name="marketing" value="1">
					<span class="checkmark"></span>
				</div>

				<div class="hidden px-4">
					<div class="form-group mb-8">

						<div class="g-recaptcha" data-sitekey="6LcTy4UbAAAAAFVsGal7vdsV3A5Omw8gND_h5LLs"
							data-theme="light"></div>
					</div>

					<input type="submit" value="Submit">
				</div>

				<input type="hidden" name="fdchk-5e272eaa-dd91-4953-a090-ba6ce8324e76"
					value="fdchk-5e272eaa-dd91-4953-a090-ba6ce8324e76" />
				<input type="hidden" name="formPayload"
					value="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" />
			</form>
			<script src="../../../www.google.com/recaptcha/api.js" async defer></script>

			<div class="typo hidden px-4 mt-8">
				<p>By submitting this contact us from you are agreeing to the terms or our website <a
						href="../../policies-and-statements.php">privacy policy</a>.</p>
				<p>Please note that that we receive a large volume of enquires regarding careers / jobs and supplying
					products / services to Sparrows. We try to reply to as many of these as we can but it’s not always
					possible to reply to every enquiry we receive.</p>
			</div>
		</div>
	</div>
</section>
<?php
include "../../footer.php"
?>