<?php include "./includes/db.php"; ?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Frametiles - Turn your photos into affordable, stunning wall art</title>
	<!-- Bootstrap -->
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/newstyle.css">
</head>

<body>


	<div id="review-order-page" class="review-order-page filter-original elegant desktop">
		<div class="ReviewActionBars">
			<div>
				<div class="top-bar-container no-bottom-margin">
					<div class="top-bar ">
						<div class="logo">
							<img class="dark clickable" src="./images/logo.svg" alt="">
						</div>
						<div class="right-comp">
							<div class="MixtilesMenu dark large">
								<div class="menu-button-wrapper">
									<img class="menu-button" src="./images/icons/menuIcon.svg"
										aria-controls="mixtiles-menu" aria-haspopup="true" alt="Menu Button">
								</div>
							</div>
						</div>
					</div>
					<div class="bottom-comp">
						<div class="filter-strip">
							<div class="spacer"></div>
							<div class="filter-button with-popular-badge selected" localizedpopularstring="POPULAR">
								<img class="RetinaImage filter-image"
									srcset="./images/filters/elegant/classicIcon@2x.png 2x, ./images/filters/elegant/classicIcon@3x.png 3x"
									alt="">
								<div class="filter-bottom">
									<div class="filter-name">classic</div>
								</div>
							</div>
							<div class="filter-button" localizedpopularstring="POPULAR">
								<img class="RetinaImage filter-image"
									srcset="./images/filters/elegant/boldIcon@2x.png 2x, ./images/filters/elegant/boldIcon@3x.png 3x"
									alt="">
								<div class="filter-bottom">
									<div class="filter-name">bold</div>
								</div>
							</div>
							<div class="spacer"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="MuiDrawer-root MuiDrawer-docked">
				<div
					class="MuiPaper-root MuiDrawer-paper style-paper no-scroll right-drawer MuiDrawer-paperAnchorRight MuiDrawer-paperAnchorDockedRight MuiPaper-elevation0">
					<div class="filter-strip">
						<div class="spacer"></div>
						<div class="filter-button with-popular-badge selected" localizedpopularstring="POPULAR">
							<img class="RetinaImage filter-image"
								srcset="./images/filters/elegant/classicIcon@2x.png 2x, ./images/filters/elegant/classicIcon@3x.png 3x"
								alt="">
							<div class="filter-bottom">
								<div class="filter-name">classic</div>
							</div>
						</div>
						<div class="filter-button" localizedpopularstring="POPULAR">
							<img class="RetinaImage filter-image"
								srcset="./images/filters/elegant/boldIcon@2x.png 2x, ./images/filters/elegant/boldIcon@3x.png 3x"
								alt="">
							<div class="filter-bottom">
								<div class="filter-name">bold</div>
							</div>
						</div>
						<div class="spacer"></div>
					</div>
					<div class="bottom-button-container">
						<div class="bottom-button">Checkout</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content empty" style="margin-top: 71px; min-height: calc(100vh - 71px);">
			<div class="no-tiles-placeholder show">
				<div class="no-tiles-text">Pick some photos to get started</div>
				<div class="UploadMenu desktop full">
					<div class="upload-buttons full">
						<div class="upload-button photo">
							<div class="upload-button-content">
								<div tabindex="0" class="tile-uploader skeleton">
									<input accept="image/*" multiple="" type="file" autocomplete="off" tabindex="-1"
										style="display: none;">
								</div>
								<div class="button-icon">
									<svg width="39" height="29" viewBox="0 0 39 29" fill="none">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M5 5C2.23858 5 0 7.23858 0 10V24C0 26.7614 2.23858 29 5 29H34C36.7614 29 39 26.7614 39 24V10C39 7.23858 36.7614 5 34 5H28L26.5029 1.25722C26.1992 0.497902 25.4637 0 24.6459 0H14.3541C13.5363 0 12.8008 0.497903 12.4971 1.25722L11 5H5ZM30.5 9C29.6716 9 29 9.67157 29 10.5C29 11.3284 29.6716 12 30.5 12H33.5C34.3284 12 35 11.3284 35 10.5C35 9.67157 34.3284 9 33.5 9H30.5ZM27 17C27 20.866 23.866 24 20 24C16.134 24 13 20.866 13 17C13 13.134 16.134 10 20 10C23.866 10 27 13.134 27 17ZM20 21C22.2091 21 24 19.2091 24 17C24 14.7909 22.2091 13 20 13C17.7908 13 16 14.7909 16 17C16 19.2091 17.7908 21 20 21Z"
											fill="#FF0072">

										</path>
									</svg>
								</div>
								<div class="text">
									<p>Upload Photos</p>
								</div>
							</div>
						</div>
						<div class="cloud-upload">
							<div class="upload-seperator">
								<p>OR</p>
							</div>
							<div class="upload-button facebook">
								<div class="upload-button-content">
									<div class="CloudTileUploader">
										<button name="filestack" class="upload-button">Click me</button>
										<div class="picker-content"></div>
									</div>
									<div class="button-icon">
										<svg width="31" height="31" viewBox="0 0 31 31" fill="none">
											<path
												d="M12.9335 30.6816C5.91649 29.4364 0.550537 23.2934 0.550537 15.9051C0.550537 7.68668 7.23734 0.962524 15.4101 0.962524C23.5828 0.962524 30.2696 7.68668 30.2696 15.9051C30.2696 23.2934 24.9037 29.4364 17.8867 30.6816L17.0611 30.0175H13.759L12.9335 30.6816Z"
												fill="url(#paint0_linear)"></path>
											<path
												d="M21.1888 19.9498L21.8492 15.8221H17.8866V12.9328C17.8866 11.777 18.2994 10.8689 20.1156 10.8689H22.0143V7.07148C20.9411 6.90638 19.7854 6.74127 18.7122 6.74127C15.3275 6.74127 12.9335 8.8051 12.9335 12.52V15.8221H9.21857V19.9498H12.9335V30.434C13.759 30.5991 14.5845 30.6817 15.41 30.6817C16.2356 30.6817 17.0611 30.5991 17.8866 30.434V19.9498H21.1888Z"
												fill="white"></path>
											<defs>
												<linearGradient id="paint0_linear" x1="15.4101" y1="29.8133"
													x2="15.4101" y2="0.962524" gradientUnits="userSpaceOnUse">
													<stop stop-color="#0062E0"></stop>
													<stop offset="1" stop-color="#19AFFF"></stop>
												</linearGradient>
											</defs>
										</svg>
									</div>
									<div class="text">
										<p>Import from Facebook</p>
									</div>
								</div>
							</div>
							<div class="upload-button instagram">
								<div class="upload-button-content">
									<div class="CloudTileUploader">
										<button name="filestack" class="upload-button">Click me</button>
										<div class="picker-content"></div>
									</div>
									<div class="button-icon">
										<svg width="31" height="31" viewBox="0 0 31 31" fill="none">
											<circle cx="15.4101" cy="15.7659" r="14.8596" fill="url(#paint0_radial)">
											</circle>
											<circle cx="15.4101" cy="15.7659" r="14.8596" fill="url(#paint1_radial)">
											</circle>
											<path
												d="M15.4109 6.85016C12.9895 6.85016 12.6856 6.86075 11.7346 6.90402C10.7854 6.94749 10.1376 7.09776 9.57065 7.31823C8.98425 7.54596 8.48682 7.85058 7.99125 8.34633C7.49531 8.8419 7.19069 9.33932 6.96222 9.92553C6.74118 10.4926 6.59073 11.1407 6.548 12.0895C6.50547 13.0405 6.49432 13.3445 6.49432 15.7659C6.49432 18.1873 6.5051 18.4902 6.54819 19.4412C6.59184 20.3904 6.74211 21.0382 6.9624 21.6051C7.19032 22.1915 7.49494 22.689 7.9907 23.1845C8.48608 23.6805 8.98351 23.9858 9.56954 24.2135C10.1368 24.434 10.7849 24.5843 11.7339 24.6278C12.6849 24.671 12.9886 24.6816 15.4098 24.6816C17.8314 24.6816 18.1343 24.671 19.0853 24.6278C20.0345 24.5843 20.6831 24.434 21.2504 24.2135C21.8366 23.9858 22.3333 23.6805 22.8287 23.1845C23.3246 22.689 23.6292 22.1915 23.8577 21.6053C24.0769 21.0382 24.2273 20.3902 24.2719 19.4414C24.3146 18.4904 24.3258 18.1873 24.3258 15.7659C24.3258 13.3445 24.3146 13.0406 24.2719 12.0896C24.2273 11.1405 24.0769 10.4926 23.8577 9.92571C23.6292 9.33932 23.3246 8.8419 22.8287 8.34633C22.3327 7.85039 21.8368 7.54577 21.2498 7.31823C20.6814 7.09776 20.0332 6.94749 19.084 6.90402C18.133 6.86075 17.8302 6.85016 15.4081 6.85016H15.4109ZM14.6111 8.45685C14.8485 8.45648 15.1133 8.45685 15.4109 8.45685C17.7914 8.45685 18.0736 8.46539 19.0136 8.50811C19.8829 8.54786 20.3547 8.69311 20.669 8.81515C21.0851 8.97675 21.3817 9.16992 21.6936 9.48197C22.0056 9.79402 22.1988 10.0912 22.3608 10.5073C22.4828 10.8212 22.6282 11.293 22.6678 12.1623C22.7105 13.1021 22.7198 13.3845 22.7198 15.7638C22.7198 18.1432 22.7105 18.4256 22.6678 19.3654C22.6281 20.2347 22.4828 20.7065 22.3608 21.0204C22.1992 21.4365 22.0056 21.7327 21.6936 22.0446C21.3815 22.3567 21.0853 22.5498 20.669 22.7114C20.3551 22.834 19.8829 22.9789 19.0136 23.0187C18.0737 23.0614 17.7914 23.0707 15.4109 23.0707C13.0302 23.0707 12.748 23.0614 11.8082 23.0187C10.9389 22.9785 10.4671 22.8333 10.1526 22.7112C9.73653 22.5496 9.43933 22.3565 9.12728 22.0444C8.81522 21.7324 8.62205 21.4359 8.46008 21.0197C8.33804 20.7058 8.1926 20.234 8.15304 19.3647C8.11032 18.4248 8.10177 18.1425 8.10177 15.7616C8.10177 13.3807 8.11032 13.0999 8.15304 12.16C8.19279 11.2908 8.33804 10.819 8.46008 10.5047C8.62168 10.0886 8.81522 9.79142 9.12728 9.47937C9.43933 9.16732 9.73653 8.97415 10.1526 8.81218C10.4669 8.68959 10.9389 8.5447 11.8082 8.50477C12.6306 8.46762 12.9494 8.45648 14.6111 8.45462V8.45685ZM20.1701 9.93723C19.5794 9.93723 19.1002 10.4159 19.1002 11.0067C19.1002 11.5974 19.5794 12.0766 20.1701 12.0766C20.7608 12.0766 21.24 11.5974 21.24 11.0067C21.24 10.4161 20.7608 9.93686 20.1701 9.93686V9.93723ZM15.4109 11.1873C12.8823 11.1873 10.8322 13.2374 10.8322 15.7659C10.8322 18.2944 12.8823 20.3436 15.4109 20.3436C17.9395 20.3436 19.9888 18.2944 19.9888 15.7659C19.9888 13.2374 17.9393 11.1873 15.4107 11.1873H15.4109ZM15.4109 12.794C17.0521 12.794 18.3828 14.1245 18.3828 15.7659C18.3828 17.4071 17.0521 18.7378 15.4109 18.7378C13.7694 18.7378 12.4389 17.4071 12.4389 15.7659C12.4389 14.1245 13.7694 12.794 15.4109 12.794Z"
												fill="white"></path>
											<defs>
												<radialGradient id="paint0_radial" cx="0" cy="0" r="1"
													gradientUnits="userSpaceOnUse"
													gradientTransform="translate(8.44471 32.9145) rotate(-90) scale(29.4538 27.3944)">
													<stop stop-color="#FFDD55"></stop>
													<stop offset="0.1" stop-color="#FFDD55"></stop>
													<stop offset="0.5" stop-color="#FF543E"></stop>
													<stop offset="1" stop-color="#C837AB"></stop>
												</radialGradient>
												<radialGradient id="paint1_radial" cx="0" cy="0" r="1"
													gradientUnits="userSpaceOnUse"
													gradientTransform="translate(-4.42757 3.04729) rotate(78.6806) scale(13.166 54.2707)">
													<stop stop-color="#3771C8"></stop>
													<stop offset="0.128" stop-color="#3771C8"></stop>
													<stop offset="1" stop-color="#6600FF" stop-opacity="0"></stop>
												</radialGradient>
											</defs>
										</svg>
									</div>
									<div class="text">
										<p>Import from Instagram</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-bar">
			<div class="bottom-button-container">
				<div class="bottom-button">Checkout</div>
			</div>
		</div>
	</div>

	<!--  plugins  -->
	<script src="js/3.2b200357.chunk.js"></script>
	<script src="js/main.935f5a2f.chunk.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>

	<script src="js/jquery.min.js"></script>
	<script src="../../../../assets/js/vendor/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
