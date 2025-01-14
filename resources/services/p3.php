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
			<form action="<?php echo $url; ?> /resources/services/p3" class="mb-16">
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
								src="../../images/content-images/thumbnails/Marine-Vessels_US_email_1.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Marine vessels – US</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4" href="../../files/services/Marine-Vessels.pdf"
									target="_blank">
									US English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/OffshoreFacilityUS_email_1.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Offshore facility integrity – US</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Offshore-Facility-Integrity-US.pdf" target="_blank">
									US English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Onshore-crane-and-lifting-equipment-integrity_email-1.jpg"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Onshore crane and lifting equipment integrity</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Onshore-crane-and-lifting-equipment-integrity.pdf"
									target="_blank">
									US English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Operations-and-Maintenance-Qatar-version.png"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Operations and Maintenance - Qatar</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Operations-and-Maintenance-Qatar-version.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Operations-and-maintenance-Saudi.jpg"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Operations and maintenance – Saudi</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Operations-and-maintenance_Saudi-version.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Preservation_and_stacking_web-1.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Preservation and stacking solution</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Preservation_and_stacking_solution.pdf" target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Rope-access_low-res-1.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Rope access</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4" href="../../files/services/Rope-access.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/DanaBrevini-_Asia.png" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Service and repair of Dana Brevini products - Asia</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4" href="../../files/services/DanaBrevini-_Asia.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/DanaBrevini_US_email_1.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">Service and repair of Dana Brevini products – US</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Service_repair_DanaBrevini_US.pdf" target="_blank">
									US English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/SparrowsSKFUSauthorizeddistributor_email_1.jpg"
								alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title">SKF Lincoln lubrication systems – US</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Sparrows-SKF-authorized-distributor_US.pdf"
									target="_blank">
									US English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Sparrows-Connect.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title"><?php echo $name; ?> Connect portal guide</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/INS02g10_Sparrows_Connect_Portal_Guide.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Sparrows_and_IKM_small_1.jpg" alt="">
							<span class="resources-block__tag">Services</span>
							<h3 class="equipment-block__title"><?php echo $name; ?> and IKM Testing back deck multi-skilled
								crews</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/services/Sparrows-and-IKM_Back-Deck-Crews.pdf" target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
				</ol>
			</div>
			<div class="-mx-4">
				<div class="pagination">
					<a class="button button--base" href="p2.php">Previous</a> <a class="circle-btn circle-btn--large"
						href="../services.php">1</a>
					<a class="circle-btn circle-btn--large" href="p2.php">2</a>
					<span class="circle-btn circle-btn--large circle-btn--orange">
						3
					</span>
					<a class="circle-btn circle-btn--large" href="p4.php">4</a>
					<a class="button button--base" href="p4.php">Next</a>
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
					value="mG07wj2kAIQn8G13TmaRwdbCxz8bfTiVEp2-vCIkqGsAQEjDcNEITtELCvRW3HCxd5JeAxcc26Wgpb1XYTNSolntyslpZc4fTg8p-h-geA0=" />

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

				<input type="hidden" name="fdchk-ae8f2661-70ff-4bc2-b976-d0137a6e8bd4"
					value="fdchk-ae8f2661-70ff-4bc2-b976-d0137a6e8bd4" />
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