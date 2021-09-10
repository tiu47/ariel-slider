
    <?php
/*
Plugin Name: Ariel Barrios slider
Description: el plugin basicamente funciona con hookks y filter , este plugin especifico es para hacer lo mismo que hago en functions.php. Pero primero debe  deshabilitar  el filter de
function.php y depues hacer esas acciones pero aca adentro del plugin .; si te fijars es el mismo codigo.  LO IMPORTANTE ES EL ORDEN DE CARGA ej:20  de esa manera ejecuta cin mayo prioridad el plugin
sobreescribiendo el original
Author: Ariel barrios
*/


// remove_filter( 'the_content', 'ariel2020_onlyimages'  );



// do_action( 'homepage' );
// apply_filters( 'strip_filter_wall', get_the_content());
// do_shortcode( '[products limit="12" columns="12 " orderby="popularity" ]' );
// do_action( 'storefront_page_after' );


//
// add_filter( 'the_content', 'ariel2020_onlyimages_plugin' ,20 );
//
// function ariel2020_onlyimages_plugin($the_content){
// 	echo '<script>';
// 	echo 'console.log('. json_encode('dfasfas') .')';
// 	echo '</script>';
	// }


	add_shortcode('ariel-slider', 'arielsetupslider');

	// add_action('after_setup_theme', 'arielsetupslider');

	function arielsetupslider($atts){

			echo '<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>';
			echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">';
			echo '<script> document.addEventListener( "DOMContentLoaded", function () { new Splide( ".splide" ).mount(); } ); </script>';
			// echo '<div class="splide"> <div class="splide__track"> <ul class="splide__list"> <li class="splide__slide"><img src="https://picsum.photos/900?blur" alt="" /></li> <li class="splide__slide"><img src="https://picsum.photos/900?blur" alt="" /></li> <li class="splide__slide"><img src="https://picsum.photos/900?blur" alt="" /></li> </ul> </div> </div> ';



			echo '<script>';
			echo 'console.log('. json_encode('dfasfas') .')';
			echo '</script>';

			$arrayIds;
			$filterarrayIds = array();


			foreach ($atts as $key => $value) {
				$arrayIds =  $value;
			}

			$myString = "9,admin@example.com,8";
			$filterarrayIds = explode(',', $arrayIds);

		   // var_dump($filterarrayIds);


					$args = array(
						'post_type' => 'post',
 						'post__in' =>  $filterarrayIds
					);

					$allPostsWPQuery = new WP_Query($args);
					echo '<div class="splide"> <div class="splide__track"> <ul class="splide__list"> ';
					if ($allPostsWPQuery->have_posts()) : while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post();
						// echo the_title();
						// echo curator(get_the_content());

							echo ariel2020_onlyimages(get_the_content());
						endwhile;

				      wp_reset_postdata();

				  endif;

				  echo '</ul> </div> </div> ';

						 // // the query
						 // $the_query = new WP_Query( $args );
						 //
						 //  if ( $the_query->have_posts() ) :
						 //
						 //
						 //     // <!-- the loop -->
						 //      while ( $the_query->have_posts() ) : $the_query->the_post();
						 //         <h2> the_title(); </h2>
						 //      endwhile;
						 //     // <!-- end of the loop -->
						 //
						 //
						 //
						 //      wp_reset_postdata();
						 //
							// // else :
						 //    //  <p><?php _e( 'Sorry, no posts matched your criteria.' ); </p>
						 //  endif;
						 //
						 //
						 //
						 //
						 //
						 //
						 //






















	}






    ?>
