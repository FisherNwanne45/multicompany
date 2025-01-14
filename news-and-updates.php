<?php
include "header.php"
?>
main>






<section class="page-banner  page-banner--with-image bgLazy"
	style="background: url() #006732 center center / cover no-repeat;"
	data-src="images/content-images/banners/_bannerImage/globe-dark.jpg">
	<div class="cutout cutout--top"></div>
	<div class="container">
		<div class="flex flex-wrap justify-between md:flex-nowrap">
			<div class="page-banner__overlay ">
				h1 class="page-banner__title page-banner__title--large">
				News and updates
				</h1>
				<div class="mt-8">
				</div>
			</div>
			<a href="#news-and-updates/evolution-of-business-sees-changes-to-sparrows-group-senior-management-team.php"
				class="latest-update">
				<span class="latest-update__tag px-8 md:px-0">
					Latest update
				</span>
				<div class="-mx-4">
					<div class="flex flex-wrap lg:flex-nowrap">
						<div class="flex items-center w-full px-4 lg:w-3/6">
							<img class="md:mb-8 lg:mb-0"
								src="images/content-images/blogs/_contentImage/Dismantling-of-drawworks-low-clutch_blog.jpg"
								alt="">
						</div>
						<div class="justify-center w-full px-4 lg:w-3/6">
							<div class="p-8 md:p-0">
								<span class="latest-update__tag">News Story published: <time>24 April
										2023</time></span>
								<h3 class="latest-update__title">Evolution of business sees changes to
									<?php echo $name; ?> Group senior management team</h3>
								<span class="button button--alt">
									Read more
								</span>
							</div>
						</div>
					</div>

				</div>
			</a>
		</div>
	</div>
	<div class="cutout cutout--bottom"></div>
	</ection>
	<setion class="my-16">
		<div class="container">
			<form class="mb-16" action="https://www.<?php echo $url; ?># /news-and-updates">
				v class="-mx-4">
				<div class="flex items-endflex-wrap">
					<div class="w-full p-4 mb-6 lg:mb-0 md:w-1/2 lg:w-1/3">
						<label class="left" for="type">Filter by type:</label>
						<select name="type" id="type">
							<option value="" selected disabled hidden>Select an option</option>
							<option value="newsStory">News Story</option>
							<option value="awardsStory">Awards Story</option>
							<option value="blogEntry">Blog Entry</option>
						</select>
					</div>
					<div class="w-fll px-4 mb-6 lg:mb-0 md:w-1/2 lg:w-1/3">
						<label clas="left" for="year">Filter by year:</label>
						<select nam="year" id="year">
							<optionvalue="" selected disabled hidden>Select an option</option>
								<optionvalue="2023">2023</option>
									<optionvalue="2022">2022</option>
										<optionvalue="2021">2021</option>
											<option value="2020">2020</option>
											<option value="2019">2019</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
						</select>
					</div>
					<div class="w-full px-4 lg:w-1/3">
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
				>
				</f <div class="-mx-4">
				<ul class="flex flex-wrap">
					<li class="w-full px-4 mb-16 md:w-1/2 lg:w-1/3">
						<a class="news-block"
							href="#news-and-updates/sparrows-group-is-the-first-non-oem-contractor-to-provide-services-in-kuwait.php">
							<img class="mb-8"
								src="images/content-images/news/_contentImage/Kuwait-land-drilling-services-sparrows.jpg"
								alt="">
							<span class="news__data">News Story published: <time>17 April 2023</time></span>
							<h2 class="news-block__title"><?php echo $name; ?> Group is the first non-OEM contractor to
								provide services in Kuwait</h2>
							<span class="button button--base">
								Read more
							</span>
						</a>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/2 lg:w-1/3">
						<a class="news-block"
							href="#news-and-updates/sparrows-group-reinvigorates-north-sea-offering-with-drilling-services-capabilities.php">
							<img class="mb-8"
								src="images/content-images/blogs/_contentImage/Dismantling-of-drawworks-low-clutch_blog.jpg"
								alt="">
							<span class="news__data">News Story published: <time>27 February 2023</time></span>
							<h2 class="news-block__title"><?php echo $name; ?> Group reinvigorates North Sea offering
								with drilling services capabilities</h2>
							<span class="button button--base">
								Read more
							</span>
						</a>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/2 lg:w-1/3">
						<a class="news-block"
							href="#news-and-updates/drilling-services-delivering-a-comprehensive-offering-to-the-uk-market.php">
							<img class="mb-8"
								src="images/content-images/blogs/_contentImage/Crown-block-installation-and-final-inspection-at-derrick_web.jpg"
								alt="">
							<span class="news__data">Blog Entry published: <time>22 February 2023</time></span>
							<h2 class="news-block__title">Drilling Services: a comprehensive offering to the UK market
							</h2>
							<span class="button button--base">
								Read more
							</span>
						</a>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/2 lg:w-1/3">
						<a class="news-block"
							href="#news-and-updates/sparrows-group-bolsters-industry-expertise-with-key-hire.php">
							<img class="mb-8"
								src="images/content-images/blogs/_contentImage/Dismantling-of-drawworks-low-clutch_blog.jpg"
								alt="">
							<span class="news__data">News Story published: <time>08 November 2022</time></span>
							<h2 class="news-block__title"><?php echo $name; ?> Group bolsters industry expertise with
								key hire</h2>
							<span class="button button--base">
								Read more
							</span>
						</a>
					</li>
					<li class="w-full px-4 mb-16 md:w-1/2 lg:w-1/3">
						<a class="news-block"
							href="#news-and-updates/sparrows-group-expands-africa-presence-following-contract-award-for-tullow-in-ghana.php">
							<img class="mb-8" src="images/content-images/news/_contentImage/FPSO-KNK_web.jpg" alt="">
							<span class="news__data">News Story published: <time>03 November 2022</time></span>
							<h2 class="news-block__title"><?php echo $name; ?> Group expands Africa presence following
								contract award for Tullow in Ghana</h2>
							<span class="button button--base">
								Read more
							</span>
						</a>


					</li>
					<li class="w-full px-4 mb-16 md:w-1/2 lg:w-1/3">
						<a class="news-block" href="#news-and-updates/this-is-not-a-mans-world.php">
							<img class="mb-8" src="images/content-images/_contentImage/WE22-female-crane-op-3.png"
								alt="">
							<span class="news__data">Blog Entry published: <time>20 October 2022</time></span>
							<h2 class="news-block__title">Standing out in a man’s world</h2>
							<span class="button button--base">
								Read more
							</span>
						</a>

					</li>





				</ul>
		</div>
		<div class="-mx-4">
			<div class="pagination">
				<span class="circle-btn circle-btn--large circle-btn--orange">
					1
				</span>
				<a class="circle-btn circle-btn--large" href="#news-and-updates/p2.php">2</a>
				<a class="circle-btn circle-btn--large" href="#news-and-updates/p3.php">3</a>
				<a class="circle-btn circle-btn--large" href="#news-and-updates/p4.php">4</a>
				<a class="circle-btn circle-btn--large" href="#news-and-updates/p5.php">5</a>
				<a class="circle-btn circle-btn--large" href="#news-and-updates/p6.php">6</a>
				<a class="button button--base" href="#news-and-updates/p2.php">Next</a>
			</div>
		</div>
		/div>
</section>
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
							d="M277.877 253.911a2.438 2.438 0 0 0-1.249-1.                          class=" cls-3"
							transform="translate(93.539 5381.535)" />
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
						<path i "Path_11"
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
		ction class="base-banner">
		<div class="container lg:max-w-screen-lg">
			<div class="-mx-4">
				<div class="flex flex-wrap md:flex-nowrap">
					<div class="w-full px-4 md:w-2/5">
						<label for="search" class="heading heading--orange inline-block md:mb-0">
							What are you looking for?
						</label>
					</div>
					<div class="flex items-center w-full px-4 md:w-3/5">
						<form class="search" action="https://www.<?php echo $url; ?> /search/results">
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
	data-src="images/content-images/banners/_ban nerImage/globe-lighter.jpg">
	<div class="container xl:max-w-screen-xl">
		<div class="heading heading--base heading--large mb-12">
			<h2><span class="dark- green">Contact us.</span> <span class="green">We are on hand 24/7, across the world,
					to support you with any challenge.</span></h2>
		</div>

		</ </section>
		footer class="site-footer">
		<div class="cutout cutout--top"></div>
		<div class="container relative">
			<div class="flex flex-wrap justify-between md:flex-nowrap">
				<div class="flex flex-col items-start w-full md:w-1/4">
					<a href="index.php" class="site-logo">
						<img src="logo-footer.png"> </a>
					<nav>
						<ul class="social">
							<li class="social__item">
								<a href="https://w
						ww.outube.com/channel/<?php echo $ame; ?>  " target="_blank" class="social__link">
									<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 19.1 13.1"
										xml:space="preserve">
										<g>
											<g>
												<path d="M18.3,1.3c-0.5-0.9-1.1-1.1-2.2-1.2S12,0,9.5,0S4.2,0,3,0.1S1.3,0.3,0.8,1.3S0,3.8,0,6.6v0
c0,2.8,0.3,4.4,0.8,5.3S1.9,12.9,3,13s4,0.1,6.5,0.1s5.4,0,6.5-0.1s1.7-0.2,2.2-1.2c0.5-0.9,0.8-2.5,0.8-5.3v0
	C			19.1,3.8,18.8,2.2,18.3,1.3z M7.2,10.1V3l6,3.6L7.2,10.1z" />
											</g>
										</g>
									</svg> </a>
							</li>
							<li class="social__item">
								<a href="https://www.linkedin.com/company/<?php echo $name; ?>  /" target="_blank"
									class="social__link">
									<svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 18.1 17.3"
										xml:space="preserve">
										<g transform="translate(1112.893 -679.597)">
											<g transform="translate(498.299 730.307)">
												<g>
													<g>
														<path
															d="M-1593.1-40.1v6.4c0 .2-.1.3-.3.3h-3.3c-.2 0-.3-.1-.3-.3v-6c0-1.6-.6-2.6-2-2.6-.9 0-1.7.6-2 1.4-.1.3-.1.6-.1.9v6.2c0 .2-.1.3-.3.3h-3.3c-.2 0-.3-.1-.3-.3v-11.1c0-.2.1-.3.3-.3h3.3c.2 0 .3.1.3.3v1.4c.7-1.2 2.1-2 3.5-1.9 2.6.1 4.5 1.7 4.5 5.3zm-17.6 6.7h3.3c.2 0 .3-.1.3-.3v-11.1c0-.2-.1-.3-.3-.3h-3.3c-.2 0-.3.1-.3.3v11.1c.1.2.2.3.3.3z" />
													</g>
												</g>
											</g>
											<g transform="translate(498.045 724.942)">
												<path
													d="M-1606.8-43.3c0 1.1-.9 2.1-2.1 2.1s-2.1-.9-2.1-2.1.9-2.1 2.1-2.1 2.1 1 2.1 2.1z" />
											</g>
										</g>
									</svg> </a>
							</li>
							<li class="social__item">
								<a href="https://twitter.com/<?php echo $name; ?>  " target="_blank"
									class="social__link">
									<svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 22.1 18"
										xml:space="preserve">
										<g transform="translate(1385.04 -681.268)">
											<g transform="translate(272.033 726.768)">
												<g>
													<path
														d="M-1635.2-43.3c-.7.3-1.4.5-2.2.6.4-.1.9-.7 1.1-1 .3-.4.6-.9.7-1.3v-.1h-.1c-.8.4-1.7.8-2.6 1h-.2c-.1-.1-.1-.2-.2-.2-.4-.3-.8-.6-1.3-.8-.6-.2-1.3-.4-1.9-.3-.6 0-1.3.2-1.8.5-.6.3-1.1.7-1.5 1.2-.4.5-.7 1.1-.9 1.8-.1.6-.2 1.3 0 1.9  0 .1 0 .1-.1.1-3.5-.4-6.7-2-9-4.6-.1-.1-.2-.1-.2 0-1 1.8-.6 4 .8 5.4.2.2.4.3.6.5-.6 0-1.2-.2-1.7-.5-.1-.1-.2 0-.2.1v.5c.2 1.7 1.3 3.1 2.8 3.7.2.1.4.1.6.2-.6.1-1.1.1-1.7.1-.1 0-.2 0-.1.2.6 1.6 1.9 2.7 3.6 3 .2 0 .3 0 .5.1-.7.6-1.5 1.1-2.4 1.3-1.2.4-2.5.6-3.7.5h-.3c-.1 0 0 .1.1.1.3.2.5.3.8.5.8.4 1.6.8 2.5 1 4.5 1.4 9.4.2 12.8-3 2.6-2.6 3.6-6.2 3.6-9.8 0-.1.2-.2.3-.3.7-.5 1.3-1.1 1.7-1.8-.3-.4-.3-.5-.4-.6.1-.1.1-.1 0 0z" />
												</g>
												<g transform="translate(6.297 17.882)">
													<path d="M-1656.7-45.5s-.6 0 0 0z" />
												</g>
												<g transform="translate(7.196 17.886)">
													<path d="M-1657-45.5s.6 0 0 0c0 0 .1 0 0 0z" />
												</g>
												<g transform="translate(14.832 .041)">
													<path d="M-1656.8-45.5h-.1.1z" />
												</g>
											</g>
										</g>
									</svg> </a>
							</li>
							<li class="social__item">
								<a href="https://www.facebook.com/<?php echo $name; ?>  " target="_blank"
									class="social__link">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.4 18">
										<path
											d="M1.8 9.1v8.7c0 .1.1.2.2.2h3.2c.1 0 .2-.1.2-.2V8.9h2.3c.1 0 .2-.1.2-.2L8.1 6c0-.1-.1-.2-.2-.2H5.5V3.9c0-.4.4-.8.8-.8h1.8c.1 0 .2-.1.2-.2V.2c.1-.1 0-.2-.2-.2h-3C3.3 0 1.8 1.5 1.8 3.2v2.6H.2c-.1 0-.2.1-.2.2v2.7c0 .1.1.2.2.2h1.6v.2z" />
									</svg>
								</a>
							</li>
						</ul>
					</nav>
					<nav class="copyright-nav">
						<ul class="flex flex-wrap items-center">
							<li class="copyright-nav__item"><a class="copyright-nav__link"
									href="policies-and-statements.php">Policies and statements</a></li>
							<li class="copyright-nav__item"><a class="copyright-nav__link"
									href="terms-and-conditions.php">Terms and conditions</a></li>
						</ul>
					</nav>
				</div>
				<div class="flex flex-col items-start w-full md:items-end md:w-3/4">
					<div class="site-footer__text">
						Delivery assured
					</div>
					<svg xmlns="http://www.w3.org/2000/svg" width="223.491" height="75.131"
						viewBox="0 0 223.491 75.131">
						<defs>
							<clipPath id="ynd4e9q4ea">
								<path data-name="Path 507" d="M0 43.627h223.492V-31.5H0z"
									transform="translate(0 31.503)" style="fill:none" />
							</clipPath>
						</defs>

						<path data-name="Path 501" d="M0 43.627h223.492V-31.5H0z" transform="translate(0 31.504)"
							style="fill:#fff" />
						<g data-name="Group 596">
							<path data-name="Path 502" d="M.962 0-.7 3.358h2.831z" transform="translate(12.855 55.846)"
								style="fill:#ff2d16" />
						</g>
						<g data-name="Group 597">
							<path data-name="Path 503" d="M.962 0-.7 3.358h2.831z" transform="translate(49.793 55.846)"
								style="fill:#ff2d16" />
						</g>
						<g data-name="Group 601" style="clip-path:url(#ynd4e9q4ea)">
							<g data-name="Group 598">
								<path data-name="Path 504"
									d="M3.246 1.714c0-1.371-.594-2.952-2.719-2.952h-2.582l-.289 6.854H-.72c3.038 0 3.966-1.958 3.966-3.9"
									transform="translate(61.533 57.098)" style="fill:#ff2d16" />
							</g>
							<g data-name="Group 599">
								<path data-name="Path 505"
									d="M24.627 8.917c6.372-2.881 15.451-5.28 22.8-5.28.794 0 1.607.024 2.425.064v-10.14h-67.635v67.048h67.632V6.787a36.8 36.8 0 0 0-1.925.487c-15.58 4.4-23.61 13.689-23.627 13.718-7.4-6.408-13.57-5.294-14.9-4.546 4.381-2.776 3.453-2.185 6.825-3.6C4.551 3.31-11.711 7.231-14.344 7.868c4.538-2.1 8.926-4.221 18.206-4.221 11 0 14.39 2.39 20.765 5.271M36 43.769h4.97c2.583 0 4.648 1.25 4.648 4.579 0 3.119-1.762 5.468-5.7 5.468h-4.371C35.7 52.25 36 47.79 36 43.769m-7.808 0h2.75c1.14 3.344 2.43 6.718 3.692 10.047h-2.43c-.351-1.2-.775-2.4-1.2-3.511H27.1a82.522 82.522 0 0 0-1.686 3.511h-2.507c1.822-3.3 3.6-6.673 5.287-10.047m-13.081 0h4.572c1.762 0 3.3.618 3.3 2.5 0 1.765-1.185 2.638-2.8 2.955l2.515 4.593h-2.452c-.73-1.913-1.7-3.72-2.6-5.559a6.237 6.237 0 0 0 .913.091c1.154 0 2.249-.513 2.249-1.791 0-1.176-1.08-1.312-1.991-1.312-.546 0-1.078.031-1.626.076-.045 1.309-.227 6.988-.243 8.495h-2.292c.334-3.329.439-6.69.456-10.047m-9.983 0h8.583l-.06 1.672c-.942-.06-1.87-.074-3.16-.074-.153 2.545-.305 5.166-.32 8.45H7.8c.212-2.516.351-5.573.441-8.45-2.218 0-2.478.043-3.177.06zm-6 0H1.5c-.06.887-.365 6.523-.425 8.45H2.91c.973 0 1.944 0 2.9-.045l-.107 1.643H-1.39c.334-3.344.47-6.69.518-10.047m-7.872 0h2.75c1.14 3.344 2.433 6.718 3.694 10.047h-2.433a46.04 46.04 0 0 0-1.2-3.511h-3.9a86.28 86.28 0 0 0-1.688 3.511h-2.506c1.824-3.3 3.6-6.673 5.287-10.047"
									transform="translate(21.331 10.494)" style="fill:#e30413" />
							</g>
							<g data-name="Group 600">
								<path data-name="Path 506" d="M.082 0a1.337 1.337 0 0 0-.141.088C-.009.06.034.031.082 0"
									transform="translate(3 1. 673 26.45) " style="fill:#fff" />














							</g>
						</g>
						<g data-name="Group 602">

							d="M0 6 3.675-4.329h1.064L8.414 6h-.866L6.4 2.787H2L.866 6zm2.213-3.942h3.945L4.2-3.6z"
							transform="translate(82.508 65.405)" style="fill:#434848" />
						</g>
						<g data-name="Group 603">
							<path data-name="Path 509" d="M0 6V-4.329h.694l5.762 8.9v-8.9h.823V6H6.6L.823-2.908V6z"
								transform="translate(92.412 65.405)" style="fill:#434848" />
						</g>
						<g data-name="Group 604">
							<path data-name="Path 510"
								d="M0 6 3.675-4.329h1.064L8.414 6h-.866L6.4 2.787H2L.866 6zm2.213-3.942h3.945L4.2-3.6z"
								transform="translate(104.188 65.405)" style="fill:#434848" />
						</g>
						<g data-name="Group 606" style="clip-path:url(#ynd4e9q4ea)">
							<g data-name="Group 605">
								<path data-name="Path 511"
									d="M1.154 6a2.822 2.822 0 0 1-.992-.169 1.408 1.408 0 0 1-.725-.6 2.238 2.238 0 0 1-.269-1.19v-8.37h.822v8.271a1.493 1.493 0 0 0 .191.83.894.894 0 0 0 .5.372 2.09 2.09 0 0 0 .615.091h3.859V6z"
									transform="translate(114.697 65.405)" style="fill:#434848" />
							</g>
						</g>
						<g data-name="Group 607">
							<path data-name="Path 513" d="M1.936 6v-9.6H-1.4v-.732h7.493v.732H2.759V6z"
								transform="translate(121.433 65.405)" style="fill:#434848" />
						</g>
						<g data-name="Group 609" style="clip-path:url(#ynd4e9q4ea)">
							<g data-name="Group 608">
								<path data-name="Path 514"
									d="M0 6V-4.329h4.045a4.321 4.321 0 0 1 .935.1 2.135 2.135 0 0 1 .851.408 2.04 2.04 0 0 1 .611.894 4.407 4.407 0 0 1 .227 1.545A4.4 4.4 0 0 1 6.47.066a2.319 2.319 0 0 1-.51.866 1.892 1.892 0 0 1-.682.441 3.226 3.226 0 0 1-.694.176L6.768 6h-.823L3.8 1.636q-.24 0-.622-.007l-.808-.014c-.284 0-.565-.012-.837-.021S1.02 1.58.822 1.58V6zM.823.961h3.122a2.941 2.941 0 0 0 .722-.086 1.391 1.391 0 0 0 .611-.329A1.633 1.633 0 0 0 5.7-.165a4.117 4.117 0 0 0 .148-1.212 3.542 3.542 0 0 0-.158-1.151 1.563 1.563 0 0 0-.427-.672 1.471 1.471 0 0 0-.611-.317 2.881 2.881 0 0 0-.707-.083H.823z"
									transform="translate(128.464 65.405)" style="fill:#434848" />
							</g>
						</g>
						<g data-name="Group 610">
							<path data-name="Path 516"
								d="M0 6 3.675-4.329h1.064L8.414 6h-.866L6.4 2.787H2L.866 6zm2.213-3.942h3.945L4.2-3.6z"
								transform="translate(135.969 65.405)" style="fill:#434848" />
						</g>
						<g data-name="Group 614" style="clip-path:url(#ynd4e9q4ea)">
							<g data-name="Group 611">
								<path data-name="Path 517"
									d="M0 6V-4.329h4.03A3.36 3.36 0 0 1 5.583-4a2.614 2.614 0 0 1 1.035.975 4.737 4.737 0 0 1 .589 1.615A11.941 11.941 0 0 1 7.393.832a8.908 8.908 0 0 1-.377 2.745A3.844 3.844 0 0 1 5.9 5.363 2.778 2.778 0 0 1 4.03 6zm.823-.732h3.15a2.015 2.015 0 0 0 1.476-.556 3.412 3.412 0 0 0 .844-1.553A8.787 8.787 0 0 0 6.57.832a11.843 11.843 0 0 0-.15-2.039 4.14 4.14 0 0 0-.46-1.371 1.974 1.974 0 0 0-.8-.773A2.614 2.614 0 0 0 3.973-3.6H.823z"
									transform="translate(145.645 65.405)" style="fill:#434848" />
							</g>
							<g data-name="Group 612">
								<path data-name="Path 518"
									d="M2.117 6.093a5.7 5.7 0 0 1-1.638-.21 2.285 2.285 0 0 1-1.135-.767 3.729 3.729 0 0 1-.661-1.6 14.047 14.047 0 0 1-.212-2.7 12.646 12.646 0 0 1 .219-2.58 3.894 3.894 0 0 1 .675-1.6 2.383 2.383 0 0 1 1.164-.805A5.513 5.513 0 0 1 2.218-4.4c.246 0 .537.014.87.043s.684.064 1.045.112a8.9 8.9 0 0 1 .992.184v.6a5.314 5.314 0 0 0-.68-.1 25.563 25.563 0 0 0-2.13-.112 4.5 4.5 0 0 0-1.4.188A1.85 1.85 0 0 0-.01-2.8a3.348 3.348 0 0 0-.525 1.362A12.12 12.12 0 0 0-.706.818a13.529 13.529 0 0 0 .164 2.349 3.255 3.255 0 0 0 .51 1.371 1.763 1.763 0 0 0 .913.649 4.719 4.719 0 0 0 1.378.174q1.062 0 1.75-.062c.46-.043.83-.083 1.114-.119v.6c-.293.057-.615.11-.963.155s-.7.083-1.052.112-.68.043-.992.043"
									transform="translate(159.375 65.391)" style="fill:#434848" />
							</g>
							<g data-name="Group 613">
								<path data-name="Path 519"
									d="M2.291 6.093A7.281 7.281 0 0 1 .566 5.91 2.425 2.425 0 0 1-.667 5.2a3.478 3.478 0 0 1-.739-1.569A12.221 12.221 0 0 1-1.654.9a12.387 12.387 0 0 1 .248-2.75 3.611 3.611 0 0 1 .754-1.601A2.508 2.508 0 0 1 .588-4.2a6.627 6.627 0 0 1 1.7-.2 6.9 6.9 0 0 1 1.753.2 2.426 2.426 0 0 1 1.233.751A3.6 3.6 0 0 1 6-1.846 13.124 13.124 0 0 1 6.235.9a12.573 12.573 0 0 1-.241 2.728A3.382 3.382 0 0 1 5.255 5.2a2.465 2.465 0 0 1-1.233.708 7.259 7.259 0 0 1-1.731.184m0-.732a5.566 5.566 0 0 0 1.433-.16 1.847 1.847 0 0 0 .971-.627 3.025 3.025 0 0 0 .546-1.343A12.629 12.629 0 0 0 5.412.9a13.218 13.218 0 0 0-.179-2.435 3.077 3.077 0 0 0-.55-1.365 1.835 1.835 0 0 0-.966-.611 5.716 5.716 0 0 0-1.426-.155 5.371 5.371 0 0 0-1.355.155 1.892 1.892 0 0 0-.98.611 3.127 3.127 0 0 0-.587 1.369A11.835 11.835 0 0 0-.831.9a13.166 13.166 0 0 0 .164 2.332 3.026 3.026 0 0 0 .532 1.342 1.81 1.81 0 0 0 .964.626 5.7 5.7 0 0 0 1.462.16"
									transform="translate(167.275 65.391)" style="fill:#434848" />
							</g>
						</g>
						<g data-name="Group 615">
							<path data-name="Path 521"
								d="M0 6 1.178-4.329h.894l2.879 9.241 2.838-9.241H8.7L9.9 6h-.792L8-3.513l.157.029L5.335 6h-.766L1.688-3.47l.17-.03L.794 6z"
								transform="translate(174.828 65.405)" style="fill:#434848" />
						</g>
						<g data-name="Group 617" style="clip-path:url(#ynd4e9q4ea)">
							<g data-name="Group 616">
								<path data-name="Path 522"
									d="M0 6V-4.329h4.059a3.682 3.682 0 0 1 .913.119 2.164 2.164 0 0 1 .859.451 2.228 2.228 0 0 1 .632.971A5.025 5.025 0 0 1 6.7-1.107 4.8 4.8 0 0 1 6.441.6a2.463 2.463 0 0 1-.668 1.006 2.243 2.243 0 0 1-.887.477 3.416 3.416 0 0 1-.9.126H3.34c-.288 0-.6-.014-.93-.029l-.928-.043a10.82 10.82 0 0 1-.659-.053V6zm.823-4.52h3.064a2.19 2.19 0 0 0 .992-.227A1.593 1.593 0 0 0 5.6.474a3.722 3.722 0 0 0 .269-1.581A3.541 3.541 0 0 0 5.6-2.648a1.549 1.549 0 0 0-.689-.746A2.052 2.052 0 0 0 4-3.6H.823z"
									transform="translate(186.321 65.405)" style="fill:#434848" />
							</g>
						</g>
						<g data-name="Group 618">
							<path data-name="Path 524"
								d="M0 6 3.675-4.329h1.064L8.414 6h-.866L6.4 2.787H2L.866 6zm2.213-3.942h3.945L4.2-3.6z"
								transform="translate(193.783 65.405)" style="fill:#434848" />
						</g>
						<g data-name="Group 619">
							<path data-name="Path 525" d="M0 6V-4.329h.694l5.762 8.9v-8.9h.823V6H6.6L.823-2.908V6z"
								transform="translate(203.688 65.405)" style="fill:#434848" />
						</g>
						<g data-name="Group 620">
							<path data-name="Path 526"
								d="M1.953 6V2.477L-1.41-4.329h.866L2.38 1.662 5.3-4.329h.851L2.775 2.477V6z"
								transform="translate(213.453 65.405)" style="fill:#434848" />
						</g>
					</svg>
				</div>
			</div>
		</div>
		</footer>
		<div class="cookies-banner hidden cookieBanner">
			<div class="container">
				<div class="flex flex-wrap">
					<div class="w-full md:w-3/5">
						<div class="typo">
							<p>This site uses cookies. They let you easily navigate your way around the site and allow
								us to
								improve its performance. By continuing to browse the site you are agreeing to our use of
								cookies. <a href="terms-and-conditions.php">Learn more</a> about how we use cookies.</p>
						</div>
					</div>
					<div class="flex items-center w-full md:w-2/5">
						<button class="button button--alt mt-4 md:mt-0 md:ml-auto cookieBannerTrigger">
							Accept and close
						</button>
					</div>
				</div>
			</div>
		</div>

		<script src="../cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
		<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js"></script>
		<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js">
		</script>

		<script async src="build/js/scripts.js"></script>

		<script>
			(function(ss, ex) {
				window.ldfdr = window.ldfdr || function() {
					(ldfdr._q = ldfdr._q || []).push([].slice.call(arguments));
				};
				(function(d, s) {
					fs = d.getElementsByTagName(s)[0];

					function ce(src) {
						var cs = d.createElement(s);
						cs.src = src;
						cs.async = 1;
						fs.parentNode.insertBefore(cs, fs);
					};
					ce('https://sc.lfeeder.com/lftracker_v1_' + ss + (ex ? '_' + ex : '') + '.js');
				})(document, 'script');
			})('lAxoEaKkgLWaOYGd');
		</script>
		</body>

		<!-- Mirrored from www.<?php echo $url; ?> / by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 May 2023 19:51:54 GMT -->

		</html>