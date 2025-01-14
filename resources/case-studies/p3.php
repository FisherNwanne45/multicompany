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
							<a href="../case-studies.php" class="button button--base is-active">
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
				Case studies
			</h2>
			<form action="<?php echo $url; ?> /resources/case-studies/p3" class="mb-16">
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
						<div class="w-full px-4 lg:w-1/3  mt-8 ">
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
								src="../../images/content-images/thumbnails/Knuckle_boom_crane_slew_gearbox_sleeve_repair_web_new-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Knuckle boom crane slew gearbox sleeve repair</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/Knuckle_boom_crane_slew_gearbox_sleeve_repair_web_new.pdf"
									target="_blank">
									English
								</a>
								<a class="button button--alt mr-4"
									href="../../files/translated/Knuckle-boom-crane-slew-gearbox-sleeve-repair_Fench_email.pdf"
									target="_blank">
									Français
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Lifting_operations_management_during_major_outages_email-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Lifting operations management during major outages</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/Lifting_operations_management_during_major_outages_email.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Lifting-operations-support-for-large-scale-gas-plant_web-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Lifting operations support for large scale gas plant</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/Lifting-operations-support-for-large-scale-gas-plant_web.pdf"
									target="_blank">
									English
								</a>
								<a class="button button--alt mr-4"
									href="../../files/translated/Lifting-operations-support-for-large-scale-gas-plant-Chinese_web.pdf"
									target="_blank">
									中文
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Lightweight_lifting_frame_engineered_for_crane_winch_changeouts_web-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Lightweight lifting frame engineered for crane winch
								changeouts</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/Lightweight_lifting_frame_engineered_for_crane_winch_changeouts_web.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Mechanical_handling_engineering_for_water_injection_motor_replacement-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Mechanical handling engineering for water injection motor
								replacement</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/Mechanical_handling_engineering_for_water_injection_motor_replacement.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Mechanical_handling_engineering_gas_cooler_unit_web_new-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Mechanical handling engineering for gas cooler unit
								replacement</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/Mechanical_handling_engineering_gas_cooler_unit_web_new.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Mechanical_handling_engineering_for_gas_export_cooler_change_out-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Mechanical handling engineering for gas export cooler
								change out</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/Mechanical_handling_engineering_for_gas_export_cooler_change_out.pdf"
									target="_blank">
									English
								</a>
								<a class="button button--alt mr-4"
									href="../../files/translated/Mechanical-handling-engineering-for-gas-export-cooler-change-out_French_email.pdf"
									target="_blank">
									Français
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Motor_operated_valve_change_out_web_new-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Motor operated valve change out</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/Motor_operated_valve_change_out_web_new.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Phased_array_ultrasonics_PAUT_inspection_of_crane_motor_armature_shafts_web_new-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Phased Array Ultrasonics (PAUT) inspection of crane motor
								armature shafts</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/Phased_array_ultrasonics_PAUT_inspection_of_crane_motor_armature_shafts_web_new.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/RasGas_crane_boom_replacement_web_new-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">RasGas crane boom replacement</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/RasGas_crane_boom_replacement_web_new.pdf"
									target="_blank">
									English
								</a>
								<a class="button button--alt mr-4"
									href="../../files/translated/Crane-boom-replacement_French_email.pdf"
									target="_blank">
									Français
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Refurbishment_two_PCM_120_AS_cranes_web_new-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Refurbishment of two PCM 120 AS cranes</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting-and-drilling/Refurbishment_two_PCM_120_AS_cranes_web_new.pdf"
									target="_blank">
									English
								</a>
							</div>
						</div>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/4">
						<div class="resources-block">
							<img class="latest-block__img"
								src="../../images/content-images/thumbnails/Replacement_draw_works_brake_cooling_unit_web_new-1.jpg"
								alt="">
							<span class="resources-block__tag">Case studies</span>
							<h3 class="equipment-block__title">Replacement of draw works brake cooling unit</h3>
							<span class="resources-block__tag">Download PDF options:</span>
							<div class="flex">
								<a class="button button--alt mr-4"
									href="../../files/case-studies/offshore-energy/cranes-and-lifting/Replacement_draw_works_brake_cooling_unit_web_new.pdf"
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
					<a class="button button--base" href="p2.php">Previous</a> <a class="circle-btn circle-btn--large"
						href="../case-studies.php">1</a>
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
					value="D1bHClnevt6zFAB7_BZDbU1CSdy7n0VqFpG_C09sIK241mNQbLXbL0Yw9jwyps7r43YzD6VsCQk7JTO0wdEvXV3hy34ELUbZ9pkCaQPEq2w=" />

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

				<input type="hidden" name="fdchk-bcfd2a14-6d54-4a91-bd48-b7c52f4448d9"
					value="fdchk-bcfd2a14-6d54-4a91-bd48-b7c52f4448d9" />
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