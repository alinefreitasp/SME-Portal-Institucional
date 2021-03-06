<?php
namespace Classes\ModelosDePaginas\PaginaInicial;

class PaginaInicialNoticiasDestaquePrimaria extends PaginaInicial
{

	public function __construct()
	{
		$this->montaHtmlLoopDestaquePrincipal();
	}
	
	public function montaHtmlLoopDestaquePrincipal()	{

			$posts = get_field('primeiro_destaque','option');

			if( $posts ): ?>
					<?php foreach( $posts as $p ): ?>
                    <section class="col-lg-6 col-xs-12 mb-xs-4 rounded">
					        <article class="card h-100 rounded border-0">
                                <img class="rounded" src="<?php echo get_the_post_thumbnail_url( $p->ID ); ?>" width="100%">
                                <article class="card-img-overlay bg-home-desc h-auto rounded-bottom container-img-noticias-destaques-primaria">
                                    <h3 class="fonte-catorze font-weight-bold">
                                        <a class="text-white" href="<?php echo get_permalink( $p->ID ); ?>">
											<?php echo get_the_title( $p->ID ); ?>
                                        </a>
                                    </h3>
                                    <section class="card-text text-white fonte-doze"><p class="mb-3 "><?php echo get_the_excerpt($p->ID ); ?></p></section>
                                </article>
                            </article>
                    </section>
					<?php endforeach; ?>
			
			<?php endif;
		
		wp_reset_postdata();
		
	}
}