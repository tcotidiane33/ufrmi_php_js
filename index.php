<?php
session_start();
include('includes/config.php');
?>

<!doctype html>
<html lang="Fr" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>ufrmi</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="./javascript/lightbox.min.css">
	<!-- <link rel="stylesheet" href="./assets/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="js/validation.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

	<script type="text/javascript">
		// PROMOTION HEADER
		const target = document.getElementById("target");
		let array = [
			"LMD",
			"LICENCE ",
			"MASTER",
			"DOCTORAT",
			"ACTUARIAT",
			"MIAGE",
			"MATHEMATIQUES",
			"MECANIQUE",
			"INFORMATIQUE",
			"BDGL",
			"PROBABILIT??",
		];
		let wordIndex = 0;
		let letterIndex = 0;

		const createLetter = () => {
			const letter = document.createElement("span");
			target.appendChild(letter);

			letter.classList.add("letter");
			letter.style.opacity = "0";
			letter.style.animation = "anim 5s ease forwards";
			letter.textContent = array[wordIndex][letterIndex];

			setTimeout(() => {
				letter.remove();
			}, 2000);
		};

		const loop = () => {
			setTimeout(() => {
				if (wordIndex >= array.length) {
					wordIndex = 0;
					letterIndex = 0;
					loop();
				} else if (letterIndex < array[wordIndex].length) {
					createLetter();
					letterIndex++;
					loop();
				} else {
					letterIndex = 0;
					wordIndex++;
					setTimeout(() => {
						loop();
					}, 2000);
				}
			}, 80);
		};
		loop();
	</script>
</head>

<body>
	<?php include('includes/header.php'); ?>
	<div class="wrapper">
		<div class="content-wrapper">
			<div class="container-fluid">
				<!-- START BANNER  -->
				<section class="section">
					<div class="banner promotion background">
						<h1 class="up "><big><strong class="strong ">BIENVENUE</strong></big> A L'UFR MATHEMATIQUES ET <h1 class="big">INFORMATIQUE</h1>
						</h1>
						<h3 class="cookie " id="target"></h3>
					</div>
				</section>
				<!-- END BANNER -->
				<!-- START SECTION  -->

				<!-- start section 1  -->
				<section class="section_art">
					<div class="articles">
						<article class="article">
							<p>L'universit?? F??lix-Houphou??t-Boigny, anciennement nomm??e universit?? de Cocody,
								est issue des trois centres universitaires qui ??taient affili??s ?? l'universit??
								nationale de C??te d'Ivoire en 1971 dont l'origine remonte ?? la cr??ation du Centre
								d'enseignement sup??rieur d'Abidjan en 1958, lui-m??me promu au rang d???universit??
								par d??cret pr??sidentiel le 9 janvier 1964. L'??tablissement disposait, avant
								les ann??es 1990, d'une production scientifique de 3 876 th??ses et de 530 DEA5.
								Tr??s ??prouv??e par la crise politico-militaire, puis par la crise de 2010-2011
								(certains ??tudiants n'avaient pas achev?? leurs cours de la session 2007 en 2011),
								l'universit?? de Cocody est ferm??e par d??cret une partie de l'ann??e universitaire
								2010-2011 pour effectuer d'importants travaux ?? l'??t?? 2011 en vue de
								sa r??ouverture. Ces travaux sont pr??c??d??s en juillet 2011 par une destruction des quartiers
								pr??caires8 (Wassa, Blengu?? et Chu-village) qui avaient ??lu domicile sur le site de
								l'universit??. Plus de 120 milliards de francs CFA ont ??t?? investis dans la reconstruction et
								l'assainissement des campus1. Elle a rouvert ses portes le 3 septembre 2012 lors d'une
								c??r??monie officielle</p>

						</article>
						<div style="clear:both; margin-top:0em; margin-bottom:1em;">
							<a href="#" target="_self" rel="dofollow follow" class="green_info" data-wpel-link="internal">
								<!-- INLINE RELATED POSTS 1/2 //-->

								<div style="padding-left:1em; padding-right:1em;"><span class="ctaText">

									</span>&nbsp; <span class="postTitle">Comment faire une ??quivalence ?? l'universit?? de
										Cocody ?
										Universit?? Felix Houphouet Boigny</span></div>
							</a>
						</div>
					</div>
					<div class="aside">
						<aside class="container_aside">
							<H1 class="biggi">FIRST PART</H1>
							<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis repudiandae id excepturi
								L'universit?? F??lix-Houphou??t-Boigny est une universit?? ivoirienne,
								??tablie dans un campus de 200 hectares situ?? au c??ur de la commune de Cocody,
								?? Abidjan. L???universit?? fut, dans les ann??es 70 et 80, tr??s r??put??e en Afrique
								de l'Ouest francophone pour ses nombreuses facult??s. </h6>
						</aside>
						<aside class="container_aside">
							<H1 class="biggi">
								SECOND PART
							</H1>
							<h6>Ferm??e apr??s la crise
								post??lectorale, elle a fait l'objet d'une remise ?? neuf compl??te, pour rouvrir
								ses portes en septembre 2012. Elle est toutefois accus??e d'??tre mal g??r??e,
								manque cruellement de mat??riel et de locaux, et n'est plus entretenue depuis
								son inauguration, menant ses installations vers un ??tat de d??gradation
								pr??matur??. </h6>
						</aside>
					</div>
				</section>

				<!-- start SECTION INFO   -->
				<section class="section_info">
					<div class="bg-with directeur-space">
						<div class="directeur_containeur">
							<div class="directeur-content">
								<h1 class="text-justify biggi">
									Mot du Directeur
								</h1>
								<p> L???Unit?? de Formation et de Recherche <b>(UFR)</b>
									Math??matiques et Informatique <b>(MI)</b> de l???Universit?? F??lix Houphou??t Boigny
									<b>(UFHB)</b>
									vous offre des formations vari??es
									et adapt??es au monde du travail, au travers de parcours qui vous rendent
									employables. Ces
									formations
									vous permettront d???acqu??rir des comp??tences en :
									math??matiques fondamentales et appliqu??es, en informatique fondamental et appliqu??,
									en
									gestion
									d???entreprises par des m??thodes math??matiques et informatiques, en m??canique et en
									sciences
									pour
									l???ing??nieur en m??canique, en sp??cialistes de pr??vision de risques financiers, etc.
									Les
									diff??rents
									parcours de formation qui s???offrent ?? vous sont tous prometteurs d???emplois :
									enseignants des lyc??es et coll??ges, enseignants chercheurs des universit??s et
									grandes
									??coles,
									ing??nieurs informaticiens, cadres d???entreprises, actuaires etc... Ce sont :
								</p>
								<div id="readmore" class="infos">
									<ul class="list-unstyled ">
										<li><i class="tiret"></i> Math??matiques et Applications</li>
										<li><i class="tiret"></i> Sciences informatiques</li>
										<li><i class="tiret"></i> Sciences pour l???ing??nieur en m??canique</li>
										<li><i class="tiret"></i> M??thodes informatiques appliqu??es ?? la gestion des
											entreprises / G??nie
											informatique
										</li>
									</ul>

									<ul class="list-unstyled">
										A ces diff??rentes formations viennent s???ajouter : <br>
										<li>La formation <b>MIAGE</b> ?? distance via le consortium <b>E-MIAGE</b> dans le
											cadre d???un
											partenariat
											entre
											notre
											universit?? et l???universit?? de Rennes 1 .<br>
										</li>
										<li>La formation aux sciences financiaires et actuarielles, en partenariat avec
											<b>l???Euro
												Institut
												d???Actuariat (EURIA)</b> de l???Universit?? de Bretagne occidentale.
										</li>
										<li>Au nom du Conseil de l???UFR Math??matiques et Informatique, je vous souhaite la
											bienvenue
											dans
											notre
											institution et vous assure de vous accompagner dans votre projet professionnel.
										</li>
									</ul>

									<p class="font-weight-light font-italic">Prof.
										Assohoun ADJE</p>
								</div>
								<button class="border-0 bg-white font-weight-light" id="hideText">
									<!-- <span id="expand">
			                                    <i class="fa fa-angle-up"></i>
			                                    En savoir plus
			                                </span> -->
									<span id="noexpand">
										<i class="fa fa-angle-down"></i>
										En savoir plus
									</span>
								</button>
							</div>
							<div class="directeur-content_fluid">
								<div class="photo_directeur"></div>
								<div class="bio">
									<p>Professeur exp??riment?? avec une exp??rience d??montr??e de travail dans l'industrie de
										l'enseignement sup??rieur. Comp??tences en mod??lisation math??matique, informatique,
										LaTeX, Matlab et algorithmes. Solide professionnel de l'??ducation avec un doctorat
										en philosophie (Ph.D.) sp??cialis?? en analyse non lin??aire de l'Universit?? catholique
										de Louvain.</p>
									<ul class="links">
										<button type="submit">Biographie</button>
										<button type="submit">Parcours</button>
										<button type="submit">Conf??rence</button>
										<button type="submit">Articles</button>
										<button type="submit">Actualite</button>
									</ul>
								</div>

							</div>
							<div style="clear:both; margin-top:0em; margin-bottom:1em;">
								<a href="#" target="_self" rel="dofollow follow" class="green_info" data-wpel-link="internal">
									<!-- INLINE RELATED POSTS 1/2 //-->

									<div style="padding-left:1em; padding-right:1em;"><span class="ctaText">

										</span>&nbsp; <span class="postTitle">Comment faire ses inscription ?? l'universit??
											de Cocody ?
											Universit?? Felix Houphouet Boigny</span></div>
								</a>
							</div>
							<div style="clear:both; margin-top:0em; margin-bottom:1em;">
								<a href="#" target="_self" rel="dofollow follow" class="green_info" data-wpel-link="internal">
									<!-- INLINE RELATED POSTS 1/2 //-->

									<div style="padding-left:1em; padding-right:1em;"><span class="ctaText">

										</span>&nbsp; <span class="postTitle">Comment est MATHEMATIQUES et INFORMATIQUE de
											l'universit?? de Cocody ?
											Universit?? Felix Houphouet Boigny</span></div>
								</a>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="acces_rapide h-100">
						<!-- header -->
						<div class="acces_rapide_header ">
							<h2 class="acces_rapide_title">
								Acc??s rapide
								<div class="infrastructure">
									<ul class="list">
										<li><a href="./cours">cours</a></li>
										<li><a href="./laboratoires">Laboratoires</a></li>
										<li><a href="./emploidutemps">Emplois du temps</a></li>
										<li><a href="./actualite">Actualit??s</a></li>
										<li><a href="./dateexamen">Programmes des examens</a></li>
										<li><a href="./projet-etudiant">projets ??tudiants</a></li>
										<li><a href="./gallerie">Galerie</a></li>
									</ul>
								</div>
							</h2>

							<a href="">
								<div class=" flex-column">
									<h1 class="strong">
										Futur ??tudiant
									</h1>
									<p>Vous envisagez d'??tudier ?? l'UFRMI ?</p>
								</div>

							</a>

						</div>
						<div class="carrousel_right"></div>
						<!-- link -->
					</div>
					<!--  -->
				</section>

				<!-- END SECTION INFO -->
				<!-- start section 2 -->
				<section class="section_art propos">
					<article class="art2">
						<div itemprop="articleBody directeur-space ">
							<h1 class="strong">Offres de formation de l'UFR MI</h1>
							<p style="color: black; font-size: 13.4px; line-height: 21px;">L'UFR <strong>Math??matique et
									Informatique</strong> (MI) de l'Universit?? F??lix Houphouet Boigny (Cocody) offres les
								formations suivantes :</p>
							<ul style="color: black; font-size: 13.4px; line-height: 21px;">
								<li style="margin-top: 7px;">Math??matique - Informatique</li>
							</ul>
							<h2 style="color: #006900;"><em>1. Math??matique - Informatique</em></h2>
							<h3>BAC autoris??s</h3>
							<ul style="color: black; font-size: 13.4px; line-height: 21px;">
								<li>Baccalaur??at s??ries C, D, E.</li>
							</ul>
							<h3>Age maximum</h3>
							<ul style="color: black; font-size: 13.4px; line-height: 21px;">
								<li>23 ans.</li>
							</ul>
							<h3>Mati??res sp??cifiques et moyennes pond??r??es exig??es</h3>
							<ul style="color: black; font-size: 13.4px; line-height: 21px;">
								<li>Pour la s??rie C =&gt; Math??matique : 12 ; Physique : 10</li>
								<li>Pour la s??rie D =&gt; Math??matique : 14 ; Physique : 14</li>
								<li>Pour la s??rie E =&gt; Math??matique : 11 ; Physique : 10</li>
							</ul>
						</div>
						<div class="offre_"></div>

					</article>
					<div class="aside2">
						<aside class="container_aside">
							<H1>FINAL PART</H1>
							<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis repudiandae id excepturi
								nihil, harum soluta accusamus veniam perspiciatis laboriosam. Impedit nostrum voluptatum
								adipisci possimus sed, enim dicta repellendus quisquam error?</h6>
						</aside>

					</div>
					<div class="actus bg-white">
						<h3 class="col-12">
							<span class="font-weight-bold strong"> L???ACTUALIT?? DE</span>
							<br>
							<span class="font-weight-light biggi">L???UNIVERSIT??</span>
						</h3>
						<div class="owl-carousel ">
							<div class="card-article">
								<div class="card">
									<div class="card-img-top">
										<div class="img-article" style="background: url('./assets/pexels-10.jpg') center;">
										</div>
									</div>
									<div class="card-body">
										<a href="/formation-en-actuariat-licence-et-master-a-luniversite-felix-houphouet-boigny" class="card-title biggi ">
											Formation en ACTUARIAT : Licence et Master ??
											l'Universit?? FHB
										</a>
										<div class="date">
											<span class="small">Publi?? le </span>
											<span class="day">05</span>&nbsp;<span class="month">May</span>&nbsp;
											<span class="year">2022</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card-article">
								<div class="card">
									<div class="card-img-top">
										<div class="img-article" style="background: url('./assets/logomesrs.png') center;">
										</div>
									</div>
									<div class="card-body biggi">
										<a href="/R??ussir-en-licence-de-maths-informatique" class="card-title">
											R??ussir en licence de maths-informatique
										</a>
										<div class="date">
											<span class="small">Publi?? le </span>
											<span class="day">05</span>&nbsp;<span class="month">May</span>&nbsp;
											<span class="year">2022</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card-article">
								<div class="card">
									<div class="card-img-top">
										<div class="img-article" style="background: ('./assets/img-template-8.webp') center;">
										</div>
									</div>
									<div class="card-body biggi">
										<a href="/les-bonnes-fili??res-pour-decrocher-un-emploi" class="card-title ">
											Universit?? : les bonnes fili??res pour d??crocher un emploi
										</a>
										<div class="date">
											<span class="small">Publi?? le </span>
											<span class="day">05</span>&nbsp;<span class="month">May</span>&nbsp;
											<span class="year">2022</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card-article">
								<div class="card">
									<div class="card-img-top">
										<div class="img-article" style="background: url('./assets/mi.jpeg') center;"></div>
									</div>
									<div class="card-body biggi">
										<a href="/les-bonnes-fili??res-pour-decrocher-un-emplois" class="card-title ">
											Universit?? : les bonnes fili??res pour d??crocher un emploi
										</a>
										<div class="date">
											<span class="small">Publi?? le </span>
											<span class="day">05</span>&nbsp;<span class="month">May</span>&nbsp;
											<span class="year">2022</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card-article">
								<div class="card">
									<div class="card-img-top">
										<div class="img-article" style="background: url('./assets/pexels-15.jpg') center;">
										</div>
									</div>
									<div class="card-body biggi">
										<a href="/a-quoi-sert-les-maths" class="card-title stretched-link">
											?? quoi ??a sert, les maths ?
										</a>
										<div class="date">
											<span class="small">Publi?? le </span>
											<span class="day">05</span>&nbsp;<span class="month">May</span>&nbsp;
											<span class="year">2022</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- </div> -->
				<!-- </div> -->

				<!-- start FOOTER -->

				<footer>


					<div id="instructions" class="footer">

						<video id="my_video_1" class="video-js vjs-default-skin" width="70%" height="100vh" controls preload="none" poster='http://video-js.zencoder.com/oceans-clip.jpg' data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
							<source src="https://www.youtube.com/watch?v=o8dbnAbgVHw" type='video/mp4' />
							<source src="https://www.youtube.com/watch?v=09oqxDwMV9g" type='video/webm' />
						</video>

						<p>Parcours Licence Master Doctorat <a href="https://www.youtube.com/watch?v=GylToGfe9gA" target="_blank">video.js</a>. Requires v5.0.0 or higher.
						</p>

						<h2>HOW TO SUCCES EXAMS</h2>

						<h2>HOW TO USE:</h2>
						<ol>
							<li>Ecoles doctorales
							</li>
							<li> Laboratoires
							</li>
							<li> Groupes et Equipes de recherche
							</li>
							<li>Publications
								S??minaires, Congr??s , colloques et conf??rences
								Th??ses soutenus et soutenance ?? venir <a href="https://univ-fhb.edu.ci/">Newsletters inclus</a></li>
						</ol>

						<div class="copyright">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2362.0411283713024!2d-3.987645685510468!3d5.345944986173487!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb5e77ff6589%3A0xd1513dc275b81e13!2sUFR%20MI%20Fili%C3%A8res%20Professionalis%C3%A9es%20MIAGE-GI!5e0!3m2!1sfr!2sci!4v1652964878980!5m2!1sfr!2sci" width="100%" height="600" style="border:0; border-radius: 10px; background-position: fixed;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							<h5><em>By Upcookie</em></h5>
						</div>
						<div class="footer-list">
							<ul>
								<li>
									<a href="#">About US</a>
								</li>
								<li><a href="#">Contact US</a></li>

							</ul>

						</div>
					</div>

				</footer>


			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js">

	</script>
</body>

</html>