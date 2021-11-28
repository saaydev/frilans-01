<?php 
    /*
    *  Template name: Home
    */
    get_header();
?>
<div class="home">
	<div class="home-about container">
		<div class="line"></div>
		<img src="<?= get_template_directory_uri() . "/assets/img/" ?>about/about-main.png" alt="" class="about-img">
		<div class="content black">
			<h2>A proposito di me</h2>
			L’avvocato Davide è uno dei pochi avvocati ufficiali autorizzati in Italia bilingue Italiano e Russo. È specializzato in contenzioso e risoluzione alternativa delle controversie, immigrazione, diritto societario e fiscale, questioni immobiliari e diritto di famiglia.
			Molti clienti e associazioni di lingua russa in Italia si affidano ai suoi consigli, alla sua professionalità e lealtà.
			<a href="<?= site_url("/about/") ?>" class="btn">Più dettagli</a>
		</div>
	</div>
	<div class="home-story container">
		<?php get_template_part("components/story", "", [
			"title" => "Storia del successo",
			"items" => CFS()->get("items"),
		]); ?>
		
	</div>

	<div class="home-services">
		<div class="line"></div>
		<div class="container">
			<div class="home-services-top">
				<div class="left">
					<h2 class="title">Servizi</h2>
					<p>Avvocato russo in Italia: consulenza, assistenza e supporto legale</p>
				</div>
				<p class="right">
					Davide Poberezhsky è un avvocato di lingua russa che presta i suoi servizi in Italia. È uno dei pochi professionisti autorizzati pronti a fornire un livello di comunicazione confortevole con clienti provenienti da Russia, Ucraina, Bielorussia e altri paesi. Davide è specializzato in diritto dell'immigrazione, tributario, di famiglia e societario. Inoltre, uno specialista è pronto ad aiutare a risolvere i problemi con il settore immobiliare, accompagnare il processo, risolvere il problema prima del processo.
				</p>
			</div>
			<div class="home-services-items">
				<?php for($i = 0; $i < 10; $i++) : ?>
				<div class="home-services-item">
					<h2>Immigrazione</h2>
					<div class="home-services-item-hidden">
						<h2>Immigrazione</h2>
						<p>Servizi per la conclusione di transazioni immobiliari in Italia Servizi per la conclusione di transazioni immobiliari in Italia</p>
					</div>
				</div>
				<?php endfor; ?>
			</div>
			<div class="home-services-content">
				Assistenza legale in Italia
				Se al tuo arrivo in Italia ti trovi di fronte a problemi legali, affida la loro soluzione a un professionista. Solo la conoscenza della normativa, delle sottigliezze procedurali e, infine, delle peculiarità della mentalità, ti permetteranno di raggiungere il risultato di cui hai bisogno. Un avvocato esperto fornisce una vasta gamma di servizi legali che coprono le principali aree del diritto. Ciò include consultazioni, preparazione di documenti, supporto di procedure nelle agenzie governative, rappresentanza in tribunale. Contattando David Poberezhsky, ottieni il risultato, risparmiando tempo e denaro.
				Cosa offre un proprio avvocato di lingua russa in Italia? Almeno il fatto che non devi approfondire da solo le sottigliezze procedurali o preoccuparti di una conoscenza insufficiente della lingua. Puoi esprimere i tuoi desideri in russo e lo specialista è garantito per capirti.
				I clienti di Davide sono persone che hanno intenzione di trasferirsi in Italia, acquistare immobili in questo paese, avviare un'impresa. Inoltre, le persone che già vivono in Italia e hanno affrontato determinati problemi si rivolgono a un avvocato. In ogni situazione, uno specialista è pronto a difendere gli interessi dei clienti. Potete contare su un supporto legale di alta qualità, riservatezza, un approccio responsabile e un costo ottimale dei servizi.
				Vantaggi dei servizi legali in Italia Quando si dispone di un avvocato personale di lingua russa in Italia, si può essere certi della protezione di qualità degli interessi personali e aziendali. La collaborazione con David Poberezhsky e un team di specialisti offre un numero sufficiente di vantaggi.
			</div>
		</div>
	</div>

	<div class="wrapper">
		<div class="review">
			<div class="container">
				<div class="review-container-title">
					<h3 class="review-title">A proposito di me</h3>
					<div class="reviews-title-info">
						<div class="info-item">
							<h3>350+</h3>
							<p>Più di 350 clienti soddisfatti all'anno</p>
						</div>
						<div class="info-item">
							<h3>1520+</h3>
							<p>Più di 1520 ordini completati</p>
						</div>
						<div class="info-item">
							<h3>1520+</h3>
							<p>Più di 1520 ordini completati</p>
						</div>
					</div>
				</div>
				<div class="reviews-container">
					<div class="review-item">
						<div class="stars">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
						</div>
						<p class="review-item-text">Ci siamo avvicinati a Davide su consiglio di un amico che consigliava in materia di immigrazione a Milano.</p>
						<div class="author">
							<div class="name">
								<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/photo-author.png" alt="">
								<p>Claudia Kogut</p>
							</div>
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/sign.png" alt="">
						</div>
					</div>
					<div class="review-item">
						<div class="stars">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
						</div>
						<p class="review-item-text">Ci siamo avvicinati a Davide su consiglio di un amico che consigliava in materia di immigrazione a Milano.</p>
						<div class="author">
							<div class="name">
								<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/photo-author.png" alt="">
								<p>Claudia Kogut</p>
							</div>
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/sign.png" alt="">
						</div>
					</div>
					<div class="review-item">
						<div class="stars">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/star.png" alt="">
						</div>
						<p class="review-item-text">Ci siamo avvicinati a Davide su consiglio di un amico che consigliava in materia di immigrazione a Milano.</p>
						<div class="author">
							<div class="name">
								<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/photo-author.png" alt="">
								<p>Claudia Kogut</p>
							</div>
							<img src="<?= get_template_directory_uri() . "/assets/img/" ?>reviews/sign.png" alt="">
						</div>
					</div>
				</div>
				<div class="btns-review">
					<p class="btn1">Leggi tutte le recensioni</p>
					<p class="btn2">Lascia un feedback</p>
				</div>
				<div class="down-p">
				<p>Servizi di avvocati esperti</p>
				<p>
				Davide Poberezhsky ei suoi colleghi garantiscono un servizio di alto livello per clienti privati ​​e aziendali. Rispetto per le informazioni riservate Rispettiamo le informazioni personali e aziendali dei nostri clienti. Garantiamo nessuna perdita. Adottiamo le misure necessarie per proteggere i tuoi dati. Alti valori professionali Per noi fornire assistenza legale in Italia significa crescere costantemente, seguire i cambiamenti, valorizzare la nostra reputazione.</p>
				<p>
				Raggiungere risultati efficaci Nessuna azione formulata. Un approccio individuale ad ogni cliente e ottenere il massimo dalla situazione per lui.  Il tuo avvocato personale in Italia
				David Poberezhsky ha molti anni di esperienza e fornisce supporto legale ad alto livello professionale. Assicurati di lavorare con uno specialista che sa come ottenere risultati elevati.</p>
				<p>
				Ogni servizio si basa sulla comprensione che la soluzione del problema dipende dall'attività, dalla carriera e dal comfort di vita del cliente. Pertanto, l'assistenza ai russi in Italia viene fornita con il coinvolgimento di tutti i mezzi legali possibili. Raggiungere un risultato positivo e lasciare il cliente soddisfatto è la cosa principale. La reputazione di un avvocato di successo si basa su questo.</p>
				<p>Il compenso per i servizi di un avvocato è preso per un lavoro specifico: consultazione, fornitura di informazioni, preparazione di documenti o tutela di interessi. Davide ha clienti con cui collabora da molti anni: sono pronti a confermare la sua professionalità e obiettività. Di fronte a problemi legali? Non sai da dove iniziare a trasferirti in Italia? Stai pianificando un'attività in questo paese? Cerca servizi legali da un professionista e ti proteggerai da molti rischi.</p>
				
				</div>
			</div>
		</div>

		<div class="gallary">
			<div class="container">
				<h2 class="title text-center">Galleria</h2>
				<div class="gallary-container">
					<?php 
						if(CFS()->get("gallery")) foreach(CFS()->get("gallery") as $item){
							printf('<img src="%s" alt="">', $item["image"]);
						}
					?>
				</div>
				<div class="center">
					<a href="<?= site_url("/gallery/") ?>" class="btn">Vai alla galleria</a>
				</div>
			</div>
		</div>
	</div>

	<div class="home-news container">
		<h2 class="title text-center black">BLOG</h2>
		<div class="home-news-items">
			<?php 
				global $wp_query;
				$wp_query = new WP_Query([
					"post_type" => "news", 
					"posts_per_page" => 3,
				]);
				while(have_posts()){
					the_post();
					get_template_part("components/news", "item");
				}
				wp_reset_query();
			?>
		</div>
		<div class="center">
			<a href="<?= site_url("/news/") ?>" class="btn">Leggi tutte le notizie</a>
		</div>
	</div>

	<?php get_template_part("components/form") ?>
</div>

<?php 
    get_footer(); 
?>