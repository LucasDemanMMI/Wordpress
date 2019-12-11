<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
	  
	$banner_background_img = get_field('banniere1');
	$banner_fruit_sec = get_field('fruitsec');
	$banner_info = get_field('banniereinfo');
	$listeprogram1 = get_field('listeprogram1');
	/*var_dump($banner_background_img); */
	
?>
<!-- code html commence ici -->
<section class="banner" style="background-image: url(<?php echo $banner_background_img['url']; ?>)">
	<p class="banner-baseline"><?php the_field("line1") ?></p>
	<p class="banner-second-line"><?php the_field("chaine-ali") ?></p>
	<p class="banner-third-line"><?php the_field("question") ?></p>
	<a href="#" class="inscription">s'inscription aux rencontres</a>
</section>
<section class="conference">
<p class="conf"><?php the_field("titreconf") ?></p>
	<p class="text-conf"><?php the_field("textconf") ?> </p>
</section>
<section class="fruit-sec" style="background-image: url(<?php echo $banner_fruit_sec['url']; ?>)">

</section>
<section class="program">
	<p class="conf"><?php the_field("titreprogram") ?></p>
	<?php foreach($listeprogram1 as $program){ ?>
		<div class="xxx"><?php echo $program['heure']; ?></div>
		<?php echo $program['description']; ?>
	<?php } ?>
	
	<div id="liste1"></div>
	
</section>
	
<section class="info_pra" style="background-image: url(<?php echo $banner_info['url']; ?>)">
	<div id="bande-verte">
	<div class="banniere_info"><?php the_field("addresse") ?></div>
	<div class="banniere_info"><?php the_field("dateinfo") ?></div>
	<div class="banniere_info"><?php the_field("resto") ?></div>
	</div>
		</section>
<?php
  }
}
?>

</div>

<?php get_footer(); ?>