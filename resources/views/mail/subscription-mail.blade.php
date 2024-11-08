<!DOCTYPE html>
<html class="no-js" lang="en">
<html>

<head>
	<!-- TITLE -->
	<title>Responsive Online Email Builder</title>
	<!-- DESCRIPTION -->
	<meta name="description" content="" />
	<!-- KEYWORDS -->
	<meta name="keywords" content="" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Access-Control-Allow-Origin" content="*" />
	<!-- ICONS  -->
	<link type="text/css" href="../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" />
	<link type="text/css" href="../../code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
	<link type="text/css" href="http://weekly.grapestheme.com/notify/bld/css/spectrum.min.css" rel="stylesheet" />
	<link href="../../cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet" />
	<!-- STYLE CSS -->
	<link type="text/css" href="http://weekly.grapestheme.com/notify/bld/css/style.css" rel="stylesheet" />
	<link type="text/css" href="http://weekly.grapestheme.com/notify/bld/css/mobile.css" rel="stylesheet" />

	<!-- GOOGLE FONTS LINK -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
</head>

<body style="overflow: scroll !important">
	<style type="text/css">
		/*------ Client-Specific Style ------ */
		@-ms-viewport {
			width: device-width;
		}

		table,
		td {
			mso-table-lspace: 0pt;
			mso-table-rspace: 0pt;
		}

		img {
			-ms-interpolation-mode: bicubic;
			border: 0;
		}

		p,
		a,
		li,
		td,
		blockquote {
			mso-line-height-rule: exactly;
		}

		p,
		a,
		li,
		td,
		body,
		table,
		blockquote {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}

		#outlook a {
			padding: 0;
		}

		.ReadMsgBody {
			width: 100%;
		}

		.ExternalClass {
			width: 100%;
		}

		.ExternalClass,
		.ExternalClass div,
		.ExternalClass font,
		.ExternalClass p,
		.ExternalClass span,
		.ExternalClass td,
		img {
			line-height: 100%;
		}

		/*------ Reset Style ------ */
		* {
			-webkit-text-size-adjust: none;
			-webkit-text-resize: 100%;
			text-resize: 100%;
		}

		table {
			border-spacing: 0 !important;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			display: block;
			margin: 0;
			padding: 0;
		}

		img,
		a img {
			border: 0;
			height: auto;
			outline: none;
			text-decoration: none;
		}

		body,
		#bodyTable,
		#bodyCell {
			height: 100%;
			margin: 0;
			padding: 0;
			width: 100%;
		}

		.appleLinks a {
			color: #c2c2c2 !important;
			text-decoration: none;
		}

		span.preheader {
			display: none !important;
		}

		/*------ Google Font Style ------ */
		[style*="Open Sans"] {
			font-family: "Open Sans", Helvetica, Arial, sans-serif !important;
		}

		[style*="Poppins"] {
			font-family: "Poppins", Helvetica, Arial, sans-serif !important;
		}

		[style*="Lora"] {
			font-family: "Lora", Georgia, Times, serif !important;
		}

		/*------ General Style ------ */
		.wrapperWebview,
		.wrapperBody,
		.wrapperFooter {
			width: 100%;
			max-width: 600px;
			margin: 0 auto;
		}

		/*------ Column Layout Style ------ */
		.tableCard {
			text-align: center;
			font-size: 0;
		}

		/*------ Images Style ------ */
		.imgHero img {
			width: 600px;
			height: auto;
		}
	</style>

	<section class="screen__wrapper">
		<div class="canvased">
			<table id="bodyTable" style="table-layout: fixed; background-color: #f9f9f9" border="0" cellpadding="0"
				cellspacing="0" width="100%">
				<tr>
					<td id="bodyCell" style="padding-right: 10px; padding-left: 10px" align="center" valign="top">
						<!--[if (gte mso 9)|(IE)]><table style="width:600px;" align="center" border="0" cellspacing="0" cellpadding="0" width="600"><tr><td align="center" valign="top"><![endif]-->

						<!-- Email Wrapper Header Open //-->
						<table class="wrapperWebview" style="max-width: 600px" border="0" cellpadding="0" cellspacing="0"
							width="100%">
							<tr>
								<td align="center" valign="top">
									<!-- Content Table Open // -->
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td class="emailLogo" style="padding-top: 40px; padding-bottom: 40px" align="center" valign="middle">
												<!-- Logo and Link // -->
												<a href="#" style="text-decoration: none" target="_blank">
													<img src="${image_url}" alt=""
														style="
																	width: 100%;
																	max-width: 160px;
																	height: auto;
																	display: block;
																"
														width="150" border="0" />
												</a>
											</td>
										</tr>
									</table>
									<!-- Content Table Close // -->
								</td>
							</tr>
						</table>
						<!-- Email Wrapper Header Close //-->

						<!-- Email Wrapper Body Open // -->
						<table class="wrapperBody" style="max-width: 600px" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td align="center" valign="top">
									<!-- Table Card Open // -->
									<table class="tableCard"
										style="
													background-color: #ffffff;
													border-color: #e5e5e5;
													border-style: solid;
													border-width: 0 1px 1px 1px;
													border-radius: 10px;
													border-top-color: #003ce5;
													border-top-width: 4px;
													box-shadow: 3px 3px 10px #d2d2d2;
												"
										border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td class="imgHero" style="padding-bottom: 20px" align="center" valign="top">
												<!-- Hero Image // -->
												<a href="#" style="text-decoration: none" target="_blank">
													<img src="https://phemedom.com/logo_300X300.png" alt=""
														style="
																	width: 100%;
																	max-width: 300px;
																	height: auto;
																	display: block;
																	mix-blend-mode: difference;
																"
														width="400" border="0" />
												</a>
											</td>
										</tr>

										<tr>
											<td class="mainTitle"
												style="
															padding-bottom: 5px;
															padding-left: 20px;
															padding-right: 20px;
														"
												align="center" valign="top">
												<!-- Main Title Text // -->
												<h2 class="text"
													style="
																color: #000000;
																font-family: 'Poppins', Helvetica, Arial,
																	sans-serif;
																font-size: 28px;
																font-weight: 500;
																font-style: normal;
																letter-spacing: normal;
																line-height: 36px;
																text-transform: none;
																text-align: center;
																padding: 0;
																margin: 0;
															">
													Hi {{ $data['email'] }},
												</h2>
											</td>
										</tr>

										<tr>
											<td class="subTitle"
												style="
															padding-bottom: 30px;
															padding-left: 20px;
															padding-right: 20px;
														"
												align="center" valign="top">
												<!-- Sub Title Text // -->
												<h4 class="text"
													style="
																color: #141414;
																font-family: 'Poppins', Helvetica, Arial,
																	sans-serif;
																font-size: 16px;
																font-weight: 500;
																font-style: normal;
																letter-spacing: normal;
																line-height: 24px;
																text-transform: none;
																text-align: center;
																padding: 0;
																margin: 0;
															">
													<b></b>
												</h4>
											</td>
										</tr>

										<tr>
											<td class="containtTable" style="padding-left: 20px; padding-right: 20px" align="center" valign="top">
												<table class="tableTitleDescription" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td class="description" style="padding-bottom: 20px" align="center" valign="top">
															<!-- Description Text// -->
															<p class="text"
																style="
																			color: #666666;
																			font-family: 'Open Sans', Helvetica, Arial,
																				sans-serif;
																			font-size: 14px;
																			font-weight: 400;
																			font-style: normal;
																			letter-spacing: normal;
																			line-height: 22px;
																			text-transform: none;
																			text-align: center;
																			padding: 0;
																			margin: 0;
																		">
																You have successfully subscribed to TOTAL GOSPEL BIBLE CHURCH'S TOTAL MAN Newsletter.

															</p>
														</td>
													</tr>
												</table>
											</td>
										</tr>

										<tr>
											<td style="font-size: 1px; line-height: 1px" height="20">
												&nbsp;
											</td>
										</tr>

										<tr>
											<td style="font-size: 1px; line-height: 1px" height="20">
												&nbsp;
											</td>
										</tr>
									</table>
									<!-- Table Card Close// -->

									<!-- Space -->
									<table class="space" border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td style="font-size: 1px; line-height: 1px" height="30">
												&nbsp;
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- Email Wrapper Body Close // -->

						<!-- Email Wrapper Footer Open // -->
						<table class="wrapperFooter" style="max-width: 600px" border="0" cellpadding="0" cellspacing="0"
							width="100%">
							<tr>
								<td align="center" valign="top">
									<!-- Content Table Open// -->
									<table class="footer" border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td class="socialLinks"
												style="
															padding-top: 10px;
															padding-bottom: 10px;
															padding-left: 10px;
															padding-right: 10px;
														"
												align="center" valign="top">
												<!-- Social Links (Facebook)// -->
												<a class="facebook" href="https:/" style="display: inline-block" target="_blank">
													<img src="http://weekly.grapestheme.com/notify/img/social/color/facebook.png" alt=""
														style="
																	height: auto;
																	width: 100%;
																	max-width: 40px;
																	margin-left: 2px;
																	margin-right: 2px;
																"
														width="40" border="0" />
												</a>
												<!-- Social Links (Twitter)// -->
												<a class="twitter" href="https://" style="display: inline-block" target="_blank">
													<img src="http://weekly.grapestheme.com/notify/img/social/color/twitter.png" alt=""
														style="
																	height: auto;
																	width: 100%;
																	max-width: 40px;
																	margin-left: 2px;
																	margin-right: 2px;
																"
														width="40" border="0" />
												</a>
												<!-- Social Links (Instagram)// -->
												<a class="instagram" href="" style="display: inline-block" target="_blank">
													<img src="http://weekly.grapestheme.com/notify/img/social/color/instagram.png" alt=""
														style="
																	height: auto;
																	width: 100%;
																	max-width: 40px;
																	margin-left: 2px;
																	margin-right: 2px;
																"
														width="40" border="0" />
												</a>
												<!-- Social Links (Linkedin)// -->
												<a class="linkdin" href="https:/" style="display: inline-block" target="_blank">
													<img src="http://weekly.grapestheme.com/notify/img/social/color/linkdin.png" alt=""
														style="
																	height: auto;
																	width: 100%;
																	max-width: 40px;
																	margin-left: 2px;
																	margin-right: 2px;
																"
														width="40" border="0" />
												</a>
											</td>
										</tr>

										<tr>
											<td class="brandInfo"
												style="
															padding-top: 10px;
															padding-bottom: 5px;
															padding-left: 10px;
															padding-right: 10px;
														"
												align="center" valign="top">
												<!-- Brand Information // -->
												<p class="text"
													style="
																color: #777777;
																font-family: 'Open Sans', Helvetica, Arial,
																	sans-serif;
																font-size: 12px;
																font-weight: 400;
																font-style: normal;
																letter-spacing: normal;
																line-height: 20px;
																text-transform: none;
																text-align: center;
																padding: 0;
																margin: 0;
															">
													This is an automated message, please do not reply.
													<a href="https://www.example.com"
														style="
																	color: #777777;
																	text-decoration: underline;
																"
														target="_blank">
														Total Gospel Bible Church
													</a>
													<br />
												</p>
											</td>
										</tr>

										<tr>
											<td class="brandInfo"
												style="
															padding-top: 10px;
															padding-bottom: 5px;
															padding-left: 10px;
															padding-right: 10px;
														"
												align="center" valign="top">
												<!-- Brand Information // -->
												<p class="text"
													style="
																color: #777777;
																font-family: 'Open Sans', Helvetica, Arial,
																	sans-serif;
																font-size: 12px;
																font-weight: 400;
																font-style: normal;
																letter-spacing: normal;
																line-height: 20px;
																text-transform: none;
																text-align: center;
																padding: 0;
																margin: 0;
															">
													&copy;&nbsp;Total Gospel Bible Church 2024
												</p>
											</td>
										</tr>

										<tr>
											<td class="footerEmailInfo"
												style="
															padding-top: 0px;
															padding-bottom: 10px;
															padding-left: 10px;
															padding-right: 10px;
														"
												align="center" valign="top">
												<!-- Information of NewsLetter (Subscribe Info)// -->
												<p class="text"
													style="
																color: #777777;
																font-family: 'Open Sans', Helvetica, Arial,
																	sans-serif;
																font-size: 12px;
																font-weight: 400;
																font-style: normal;
																letter-spacing: normal;
																line-height: 20px;
																text-transform: none;
																text-align: center;
																padding: 0;
																margin: 0;
															">
													Url:
													<a href="https://www.example.com"
														style="
																	color: #777777;
																	text-decoration: underline;
																"
														target="_blank">https://www.example.com</a><br />
												</p>
											</td>
										</tr>

										<tr>
											<td class="footerEmailInfo"
												style="
															padding-top: 0px;
															padding-bottom: 10px;
															padding-left: 10px;
															padding-right: 10px;
														"
												align="center" valign="top">
												<!-- Information of NewsLetter (Subscribe Info)// -->
												<p class="text"
													style="
																color: #777777;
																font-family: 'Open Sans', Helvetica, Arial,
																	sans-serif;
																font-size: 12px;
																font-weight: 400;
																font-style: normal;
																letter-spacing: normal;
																line-height: 20px;
																text-transform: none;
																text-align: center;
																padding: 0;
																margin: 0;
															">
													If you have any quetions please contact us
													<a href="mailto:admin@totalgospelbc.org"
														style="
																	color: #777777;
																	text-decoration: underline;
																"
														target="_blank">admin@totalgospelbc.org</a><br />
												</p>
											</td>
										</tr>

										<!-- Space -->
										<tr>
											<td style="font-size: 1px; line-height: 1px" height="30">
												&nbsp;
											</td>
										</tr>
									</table>
									<!-- Content Table Close// -->
								</td>
							</tr>

							<!-- Space -->
							<tr>
								<td style="font-size: 1px; line-height: 1px" height="30">
									&nbsp;
								</td>
							</tr>
						</table>
						<!-- Email Wrapper Footer Close // -->

						<!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
					</td>
				</tr>
			</table>
		</div>
	</section>

	<script type="text/javascript" src="../../code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../../code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	<script src="../../cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<script type="text/javascript" src="http://weekly.grapestheme.com/notify/bld/js/plugin.js"></script>
	<script type="text/javascript" src="http://weekly.grapestheme.com/notify/bld/js/script.js"></script>
</body>

</html>

</html>
