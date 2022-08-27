<?php
require 'include/header.html';
?>

<section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Interview</h2>
                <hr>
                <div class="interview item-align-center">
                    <nav class="nav nav-pills nav-fill">
                      <a class="nav-item nav-link pointer btn-caps" data-toggle="modal" data-target="#information"><i class="fas fa-user-tie icon-btn"></i> <br>information sur la personne</a>
                      <a class="nav-item nav-link pointer btn-caps" data-toggle="modal" data-target="#entreprise"><i class="fas fa-building icon-btn"></i> <br>information sur l'entreprise</a>
                      <a class="nav-item nav-link pointer btn-caps" data-toggle="modal" data-target="#transcription"><i class="fas fa-external-link-alt icon-btn"></i> <br>transcription de l'interview</a>
                      <a class="nav-item nav-link pointer btn-caps" href="/files/[PPP]%20Autorisation.pdf" style="color: black;"><i class="fas fa-signature icon-btn"></i> <br>autorisation d'enregistrement</a>
                    </nav>
                    <hr>
                    <video controls preload="metadata" poster="/images/interview.jpg">
                        <source src="/videos/interview.ogv" type="video/ogg">
                        <source src="/videos/interview.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
			<div class="col-md-12 item-align">
                <div class="modal fade" id="information">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title title-caps">information sur la personne</h4>
                                <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i> </button>
                            </div>
                            <div class="modal-body">
                            
                            <div class="row">
									<div class="col-md-6" align="center">
										<img class="round center-block card shadow personne" src="/images/lapie.png" alt="xefi alexandre lapie" width="50%"> 
									</div>
									<div class="col-md-6">
									<br>
										<p class="title-caps-bio">alexandre lapie</p>
										<p><i class="fas fa-link"></i>  &nbsp;Site internet : <span class="thin"><a href="http://www.xefi.fr/agence/xefi-reims-sud/" target="_blank">www.xefi.fr</a></span></p>
										<p><i class="fas fa-phone"></i>  &nbsp;Téléphone : <span class="thin"><a href="tel:+33326829999" target="_blank">(+33) 3 26 82 99 99</a></span></p>
										<p><i class="fas fa-envelope"></i>  &nbsp;Adresse mail : <span class="thin"><a href="mailto:reims-sud@xefi.fr" target="_blank">a.lapie@xefi.fr</a></span></p>
									</div>
								</div>

                            </div>
                        </div>
                    </div>
				</div>


                <div class="modal fade" id="entreprise">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title title-caps">information sur l'entreprise</h4>
                                <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i> </button>
                            </div>
                            <div class="modal-body">
								<div class="row">
									<div class="col-md-7" align="center">
										<img class="img-center" src="/images/xefi.png" alt="xefi logo" width="50%" align="center"> 
									</div>
									<div class="col-md-5">
										<br>
										<p><i class="fas fa-link"></i>  &nbsp;Site internet : <span class="thin"><a href="http://www.xefi.fr/" target="_blank">www.xefi.fr</a></span></p>
										<p><i class="fas fa-phone"></i>  &nbsp;Téléphone : <span class="thin"><a href="tel:+33326829999" target="_blank">(+33) 3 26 82 99 99</a></span></p>
										<p><i class="fas fa-envelope"></i>  &nbsp;Adresse mail : <span class="thin"><a href="mailto:reims-sud@xefi.fr" target="_blank">reims-sud@xefi.fr</a></span></p>
									</div>
								</div>
								<div align="justify">
									<br>
									<p class="justify">Le groupe XEFI compte plus de 55 agences informatiques en France et réalise un chiffre d’affaires de 69 millions d’euros. Propriétaire de son datacenter depuis 2013, XEFI propose des solutions d’hébergement en France pour les TPE/PME, administrations publiques et grands comptes.</p>
									<p class="justify">En 2016, le groupe XEFI a racheté le groupe Germond, un acteur dolois doté d’une expertise de plus de 30 ans en bureautique, papeterie, mobiliers de bureau, solutions d’impression et reprographie.</p>
									<p class="justify">En 2017, le groupe XEFI a fait l’acquisition de plusieurs entités pour renforcer ses équipes :</p>
									<ul>
										<li class="justify">Perrier Informatique à Chambéry (73)</li>
										<li class="justify">Perono à Lons-le-Saunier (39)</li>
										<li class="justify">Erenet à Saint-Etienne (42)</li>
										<li class="justify">Paris (75)</li>
									</ul>
								</div>
                            </div>
                        </div>
                    </div>
				</div>


                <div class="modal fade" id="transcription">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title title-caps">transcription de l'interview</h4>
                                <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i> </button>
                            </div>
                            <div class="modal-body">
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est-ce que vous pourriez s'il vous pla&icirc;t me parler un peu de votre métier ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Mon métier de chef d'entreprise de société informatique ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Oui tout à fait.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Je ne suis pas du tout de formation informatique, à l'origine je suis ingénieur agricole mais je suis passionné d'informatique, donc j'ai fait toute ma carrière professionnelle qui commence à être longue maintenant dans l'informatique. J'ai commencé comme technicien dans le développement, j'écrivais des logiciels, après je suis passé dans les réseaux, et après j'ai monté une équipe d'une quinzaine de personnes dans un gros cabinet comptable pour pouvoir proposer des services réseau aux comptables et ingénieurs conseil de l'entreprise, et il y a maintenant treize ans j'ai créé ma société qui propose de faire de l'audit, de la fourniture de matériel, et du développement de logiciel sur mesure.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Vous exercez votre métier depuis treize ans c'est &ccedil;a ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Depuis trente ans mais depuis treize ans en tant que responsable d'entreprise.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Vous avez fait des études agricoles c'est &ccedil;a ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify">  Oui d'ingénieur agricole.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Qu'est-ce que c'est comme formation ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> C'est un bac plus cinq, que j'ai fait sur Beauvais dans une école qui s’appelait l'ISAC qui s'appelle aujourd'hui la salle Beauvais, et tout l'intérêt des écoles d'ingénieur c'est de former, même s’il y a un apport dans l'agriculture, de fa&ccedil;on généraliste, d'apprendre à réfléchir, apprendre à gérer, d'apprendre à manager, d'apprendre à propos des ressources humaines, d’apprendre plein de choses, et après on peut exercer ces compétences dans tous les domaines, &ccedil;a ne change plus grand-chose.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> D'accord, et c'est &ccedil;a qui vous a permis d'arriver jusque-là.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Absolument.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Quelles sont les qualités qui vous ont permis d'arriver jusqu'ici ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Déjà beaucoup de travail, une grande rigueur, faire les choses de fa&ccedil;on carrée, de savoir proposer beaucoup de solutions à un problème, d'avoir des idées, et de savoir proposer beaucoup de solutions à mes clients.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Qu'est-ce qui vous pla&icirc;t particulièrement dans ce que vous faites aujourd'hui ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Ce qui me pla&icirc;t c'est la rencontre, de passer du temps avec mes équipes, avec mes clients, et aussi la diversité du travail puisque je fais aussi bien des études pour poser du matériel réseau, de la sécurité, ou pour du développement spécifique de logiciel, ou pour des sites internet. Il y a une grande diversité et c'est ce qui me pla&icirc;t beaucoup dans ce que je fais.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Dans quel secteur exactement est ce que votre entreprise travaille ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Principalement avec les PMI/PME de la région de Reims au niveau du nombre, et pour le développement on a un grand client breton qui fait une grande partie de notre activité de développement, qui est un groupe de quinze mille personnes, donc une très grosse société.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est ce que vous êtes sujet à des attaques informatique de manière régulière ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Nous oui, nos clients y sont régulièrement sujet, et on récupère souvent de nouveaux clients suite à des attaques, puisqu'ils viennent chez nous pour trouver des solutions aux attaques, soit des solutions pour être préventif pour après, soit pour des réparations, notamment des clients qui ont des cryptos, des virus qui cryptent leurs données, et pour lesquels on essaye d'agir.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Et quelles sont les attaques les plus régulières ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Aujourd'hui on en a deux principaux, le premier ce sont les mails frauduleux, qui font que l'utilisateur lance lui-même le virus, le crypto ou celui qui va nettoyer tous les disques de son réseau, &ccedil;a c'est le premier, et le deuxième ce sont les attaques sur les réseaux qui ne sont pas protégés depuis l’extérieur par des VPN ou des choses comme &ccedil;a, des gens qui ont des réseaux ouvert en terminal serveur, donc mode RDS, et là, il y a des attaques brutes force menées dessus ou les attaquants essaient plein de codes et finissent par entrer dans le serveur, pour crypter ou pirater les données.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est-ce que vous avez des protocoles de sécurité à suivre ou des consignes particulières par rapport à votre entreprise, comme ne jamais brancher de clé USB qui n'a pas été vérifiée à l'avance ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Déjà, chez nous on n'utilise jamais de clé USB sur le réseau, ce n'est même pas vérifié à l'avance, sur les postes qui sont sur le réseau, il n'y a pas de clé USB. Aujourd'hui nous sommes derrière un pare feu qui surveillent les paquets entrant, mais aussi sortant, et on a des alertes s’il se passe quoi que ce soit grâce à des sondes sur le réseau qui permettent de savoir si quelque chose d'anormal se produit. Aucune des machines qui fait office de serveur n'est dans notre réseau, on a un réseau totalement isolé qui héberge les données que l'on peut mettre à disposition, et enfin Windows et les antivirus sont tous mis à jour sur tous les postes.</p>							
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est-ce que votre clientèle est exclusivement composée d'entreprises ou vous arrive-t-il d'avoir des particuliers ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Non nous ne traitons qu'avec les sociétés de toutes les tailles comme des médecins à un poste, mais ce ne sont que des sociétés.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est-ce que votre entreprise recrute ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Nous avons recruté il n'y a pas très longtemps et je pense qu'en 2019 nous allons recruter un nouveau développeur.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Qu'est-ce que vous avez recruté dernièrement ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> La dernière personne arrivée est un technicien réseau.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est ce que vous prenez des stagiaires ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Oui toujours, pour moi c'est du devoir de l'entreprise de prendre des stagiaires. C'est intéressant pour le stagiaire car s’il ne trouve pas de stage c'est problématique pour sa formation, et d'autre part c'est une des missions des entreprises de former les jeunes, et enfin il y a par exemple notre technicien que j'ai pris en stage pour la deuxième année de son DUT, et que j'ai embauché par la suite. C'est intéressant car cela nous permet de bien le conna&icirc;tre, et cela lui permet de mieux conna&icirc;tre l'entreprise, donc c'est gagnant-gagnant.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Y-a-t-il un nombre de stagiaire limite ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Puisque nous ne sommes que six personnes nous ne pouvons pas prendre plusieurs stagiaires par personnes, car si nous prenons un stagiaire il faut vraiment s'en occuper, lui donner un vrai projet, le suivre avec lui, sauf dans le cas où l'on re&ccedil;oit des stagiaires qui font un stage sur deux ou trois jours, dans quel cas nous pouvons en prendre deux.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Votre parcours professionnel a t-il été particulier avant d'arriver à votre poste actuel ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Oui dans mon cas je suis parti d'études agricoles, puis j'ai fait le développement, le matériel, la gestion de personnel, et aujourd'hui je reprends tout cela, c'est l'ensemble de mes fonctions ici.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Avez-vous déjà été sujet à des crises informatiques ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Non nous n'avons jamais eu de problèmes de virus ou d'attaques dans l'entreprise mais nous avons beaucoup de nos clients et de nos nouveaux clients à qui s'est arrivé oui.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est ce que le télétravail est pratiqué dans votre entreprise ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Oui &ccedil;a arrive notamment chez les personnes qui font du développement, puisque &ccedil;a ne change pas grand-chose qu'elles développent ici ou chez elles, mais pas chez ceux qui font de l'intervention sur du matériel ou de la hotline. Sinon oui, cela arrive régulièrement.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est ce que vous utilisez certaines ressources professionnelles à usage personnel ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Chez moi j'ai des techniques professionnelles oui, mais des ressources professionnelles non, j'achète mes antivirus, mais sinon oui chez moi aussi j'ai un antivirus, un par feu bien s&ucirc;r, j'applique les mêmes règles de sécurité.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est-il possible d'utiliser certaines ressources de l'entreprise à des fins personnelles ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Non, les postes, les messageries sont à usage d'entreprise. Je préconise d'éviter de mélanger ces genres car quand on re&ccedil;oit des mails personnels sur un poste professionnel, on augmente les risques de contamination, de faux mails etc.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> C'est par rapport aux risques d'attaques ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Oui, et de plus je n'ai pas à savoir ce qu'il se passe chez eux, et quand eux sont dans l'entreprise ils utilisent le matériel mis a disposition.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est ce que vous encourageriez des jeunes à se lancer dans cette profession ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Oui bien s&ucirc;r, dans ce secteur il y a une pénurie de candidats, il y a plus de postes que de candidats. Aujourd'hui c'est compliqué d'avoir qui ont déjà un peu d’expérience, donc oui il faudrait que des jeunes viennent, sachant que c'est un domaine qui les intéresse, donc c'est porteur d'avenir.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Vous avez du mal à recruter ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> En prenant des stagiaires régulièrement il y en a qui viennent se présenter, on re&ccedil;oit énormément de CV, mais la plupart de sont peu qualifié, et qui auraient besoin d'une formation, ce sont des personnes qui ont un niveau d'étude dans un autre domaine que celui de l'informatique. Chez nous il y a une personne qui a fait l'armée et une autre qui a une ma&icirc;trise de sciences physiques, donc nous ne sommes pas contre les profils ouverts, mais il faut une vraie passion pour l'informatique pour compenser. Nous formons aussi ceux qui arrivent chez nous, mais avoir une base est tout de même préférable.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Travaillez-vous à horaires fixes ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> L'entreprise travaille à horaires fixes puisque nous permettons à nos clients de nous joindre de huit heures à dix-huit heures pour la hotline, mais les salariés s'arrangent entre eux pour assurer le créneau horaire, nous n'obligeons pas à avoir des horaires fixes, mais il faut que le service soit maintenu.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est ce que les employés sont susceptibles d'être sollicités à des heures tardives ou lors de jours fériés ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> C'est rare, cela arrive, lorsque nous avons des installations à faire, et qu'il ne faut pas couper la production chez le client, donc nous les faisons pendant les week-end, mais c'est environ deux fois par ans.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Avez-vous un bureau ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> J'ai un bureau, je peux même vous emmener le visiter après, et nous avons un open-space ou l'ensemble des collaborateurs de l'entreprise sont dans le même grand bureau, c'est un choix qu'ils ont fait.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Comment envisagez-vous l'avenir de cette profession ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> C'est clairement en développement, je pense qu'il faut être très sérieux dans son travail pour que cela perdure, mais c'est clairement porteur d'avenir, puisqu’aujourd’hui, qui n'a pas besoin d'informatique dans son entreprise ? Plus beaucoup de profession n'utilisent pas cet outil.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Quel est le degré d'autonomie des employés ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Les employés gèrent leur travail eux même, ils savent ce qu'il y a à faire, nous faisons des points réguliers d'avancement le chef de projet ou moi, mais entre les deux ils sont autonomes, et en ce qui concerne le matériel et le réseau, il y a un planning fixé et chacun intervient selon le besoin chez le client, ils prennent leurs rendez-vous de fa&ccedil;on autonome, il y a juste un suivi rigoureux avec des fiches d'intervention et le dossier client pour savoir quelle intervention a été faite quand, et ou, pour que si un autre collaborateur ai besoin de reprendre le travail en cours il puisse bénéficier de toutes les informations.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Devez-vous suivre des formations régulières avec l’évolution de l'informatique ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Oui, &ccedil;a bouge beaucoup dans l'informatique donc très régulièrement une voire deux fois par ans il y a quatre à cinq jours de formation pour avancer dans de nouveaux domaines pour pouvoir travailler sur de nouvelles versions, pour appréhender du nouveau matériel, c'est quelque chose d’important.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Est ce que certains de vos employés ont re&ccedil;u des offres d'emplois d'autres entreprises ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Pour ceux qui me l'on dit oui, mais de manière générale ils sont sollicités régulièrement, en informatique c'est très classique.</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> PROJET :</p><p class="justify"> Pourquoi avoir accepté cette interview ?</p>
								<p class="script-bold"><i class="fas fa-angle-right"></i> Alexandre LAPIE :</p><p class="justify"> Je travaille régulièrement avec L’IUT, je prends des stagiaires, et tant que l'on peut apporter de l'aide dans le cadre des études, c'est important.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="/files/ppp-transcription.pdf" class="btn btn-block btn-success btn-caps-bis" target="_blank"><i class="fas fa-download"></i> <br>Télécharger</a>
                            </div>
                        </div>
                    </div>
				</div>
                    
            </div>
        </div>
    </div>
</section>

<?php
require 'include/footer.html';
?>
