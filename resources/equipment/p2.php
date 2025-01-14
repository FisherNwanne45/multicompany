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
							<a href="../services.php" class="button button--base">
								Services
							</a>
						</li>
						<li class="px-2">
							<a href="../training.php" class="button button--base">
								Training
							</a>
						</li>
						<li class="px-2">
							<a href="../equipment.php" class="button button--base is-active">
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
				Equipment
			</h2>
			<form action="<?php echo $url; ?> /resources/equipment/p2" class="mb-16">
				<div class="-mx-4">
					<div class="flex justify-between items-end flex-wrap">
						<div class="w-full px-4 mb-6 lg:mb-0 md:w-1/2 lg:w-1/3">
							<label class="left" for="machinery-equipment-type">Filter by <span
									class="lowercase">Machinery/equipment type</span>:</label>
							<select name="machinery-equipment-type" id="machinery-equipment-type">
								<option value="" selected disabled hidden>Select an option</option>
								<option value="cranes-lifting">Cranes / lifting</option>
								<option value="drilling">Drilling</option>
								<option value="hydraulic">Hydraulic</option>
								<option value="cable-pipe-lay">Cable / pipe lay</option>
								<option value="other">Other</option>
								<option value="mechanical-rotating-drive-train">Mechanical / rotating / drive train
								</option>
								<option value="lifting-and-mechanical-handling">Lifting and mechanical handling</option>
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
								src="../../images/content-images/thumbnails/Rental_cranes_email_1.jpg" alt="">
							<span class="resources-block__tag">Equipment</span>
							<h3 class="equipment-block__title">Rental cranes</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4" href="../../files/equipment/Rental_cranes.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Rental-cranes-Saudi.jpg" alt="">
							<span class="resources-block__tag">Equipment</span>
							<h3 class="equipment-block__title">Rental Cranes – Saudi</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/equipment/Rental-cranes_Saudi-version.pdf" target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
				</ol>
			</div>
			<div class="-mx-4">
				<div class="pagination">
					<a class="button button--base" href="../equipment.php">Previous</a> <a
						class="circle-btn circle-btn--large" href="../equipment.php">1</a>
					<span class="circle-btn circle-btn--large circle-btn--orange">
						2
					</span>
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
					value="FSLs9GE7d4WXXVmQYjudr0_nUWNVVDWifDZHLlKPTpB5pzwU8114dFxE3cIKQwewxz9q5DtB18s5gCsLLxpflTdGM1sZzijkN-hdLZwsCDc=" />

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

				<input type="hidden" name="fdchk-120add37-dca4-4de6-b8a4-63fa3d8b36a4"
					value="fdchk-120add37-dca4-4de6-b8a4-63fa3d8b36a4" />
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