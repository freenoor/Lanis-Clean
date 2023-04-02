<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<header>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script> 
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" 
		integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ="crossorigin="anonymous"/>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-194247756-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-194247756-1');
		</script>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
				<header id="myHeader">
					<?php if (is_front_page() || is_404() ): ?>
								<div class="menu1">
								<div class="menu-here"> 
                                    <div class="container-fluid">
									<nav class="navbar navbar-expand-lg navbar-light navbar-center wfixed">

										<a class="navbar-brand" style="list-style: none;" href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php dynamic_sidebar('header1');?>
										</a> 
									
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
										aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
										<div class="menu-m">
											<span class="menu-global menu-top"></span>
											<span class="menu-global menu-middle"></span>
											<span class="menu-global menu-bottom"></span>
										</div>
										</button>  
										
										<?php wp_nav_menu(
											array(
											'theme_location'    => 'primary',
											'menu_id'        => 'primary-menu',
											'menu_class'        => 'navbar-nav',
											'container_class'  => 'collapse navbar-collapse main-nav-toggle',
											'container_id'    => 'navbarNav',
											)
											); 
										?>

										<div class="widget-phone">
											<?php dynamic_sidebar('phonecontacttop');?>
											<?php dynamic_sidebar('extraphonetop');?>
										</div> 
									</nav>
								</div>
							</div>
							</div>
					<?php else: ?>
						<div class="menu1">
                        <div class="menu-here"> 
                                    <div class="container-fluid">
									<nav class="navbar navbar-expand-lg navbar-light navbar-center wfixed">

										<a class="navbar-brand" style="list-style: none;" href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php dynamic_sidebar('header1');?>
										</a> 
									
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
										aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
										<div class="menu-m">
											<span class="menu-global menu-top"></span>
											<span class="menu-global menu-middle"></span>
											<span class="menu-global menu-bottom"></span>
										</div>
										</button>
										
										<?php wp_nav_menu(
											array(
											'theme_location'    => 'primary',
											'menu_id'        => 'primary-menu',
											'menu_class'        => 'navbar-nav',
											'container_class'  => 'collapse navbar-collapse main-nav-toggle',
											'container_id'    => 'navbarNav',
											)
											); 
										?>

										<div class="widget-phone">
											<?php dynamic_sidebar('phonecontacttop');?>
											<?php dynamic_sidebar('extraphonetop');?>
										</div> 
									</nav>
								</div>
							</div>
							</div>
					<?php endif;?>
				</header>
				<div class="social">
						<div class="phonee">
							<div class="svgphone">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
									id="Capa_1" x="0px" y="0px" viewBox="0 0 512.006 512.006"
									style="enable-background:new 0 0 512.006 512.006;" xml:space="preserve">
									<path
										d="M502.05,407.127l-56.761-37.844L394.83,335.65c-9.738-6.479-22.825-4.355-30.014,4.873l-31.223,40.139     c-6.707,8.71-18.772,11.213-28.39,5.888c-21.186-11.785-46.239-22.881-101.517-78.23c-55.278-55.349-66.445-80.331-78.23-101.517     c-5.325-9.618-2.822-21.683,5.888-28.389l40.139-31.223c9.227-7.188,11.352-20.275,4.873-30.014l-32.6-48.905L104.879,9.956     C98.262,0.03,85.016-2.95,74.786,3.185L29.95,30.083C17.833,37.222,8.926,48.75,5.074,62.277     C-7.187,106.98-9.659,205.593,148.381,363.633s256.644,155.56,301.347,143.298c13.527-3.851,25.055-12.758,32.194-24.876     l26.898-44.835C514.956,426.989,511.976,413.744,502.05,407.127z" />
									<path
										d="M291.309,79.447c82.842,0.092,149.977,67.226,150.069,150.069c0,4.875,3.952,8.828,8.828,8.828     c4.875,0,8.828-3.952,8.828-8.828c-0.102-92.589-75.135-167.622-167.724-167.724c-4.875,0-8.828,3.952-8.828,8.828     C282.481,75.494,286.433,79.447,291.309,79.447z" />
									<path
										d="M291.309,132.412c53.603,0.063,97.04,43.501,97.103,97.103c0,4.875,3.952,8.828,8.828,8.828     c4.875,0,8.828-3.952,8.828-8.828c-0.073-63.349-51.409-114.686-114.759-114.759c-4.875,0-8.828,3.952-8.828,8.828     C282.481,128.46,286.433,132.412,291.309,132.412z" />
									<path
										d="M291.309,185.378c24.365,0.029,44.109,19.773,44.138,44.138c0,4.875,3.952,8.828,8.828,8.828     c4.875,0,8.828-3.952,8.828-8.828c-0.039-34.111-27.682-61.754-61.793-61.793c-4.875,0-8.828,3.952-8.828,8.828     C282.481,181.426,286.433,185.378,291.309,185.378z" />
								</svg>
							</div>
							<div class="invisss">
							<?php dynamic_sidebar('phonecontact')?>
							</div>
						</div>
						<div class="maill">
							<div class="svgmail">
								<i class="fas fa-envelope"></i>
							</div>
							<?php dynamic_sidebar('mailcontact')?>
						</div>
						<div class="locationn">
							<div class="svglocation">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
									id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
									xml:space="preserve">
									<path
										d="M341.476,338.285c54.483-85.493,47.634-74.827,49.204-77.056C410.516,233.251,421,200.322,421,166    C421,74.98,347.139,0,256,0C165.158,0,91,74.832,91,166c0,34.3,10.704,68.091,31.19,96.446l48.332,75.84    C118.847,346.227,31,369.892,31,422c0,18.995,12.398,46.065,71.462,67.159C143.704,503.888,198.231,512,256,512    c108.025,0,225-30.472,225-90C481,369.883,393.256,346.243,341.476,338.285z M147.249,245.945    c-0.165-0.258-0.337-0.51-0.517-0.758C129.685,221.735,121,193.941,121,166c0-75.018,60.406-136,135-136    c74.439,0,135,61.009,135,136c0,27.986-8.521,54.837-24.646,77.671c-1.445,1.906,6.094-9.806-110.354,172.918L147.249,245.945z     M256,482c-117.994,0-195-34.683-195-60c0-17.016,39.568-44.995,127.248-55.901l55.102,86.463    c2.754,4.322,7.524,6.938,12.649,6.938s9.896-2.617,12.649-6.938l55.101-86.463C411.431,377.005,451,404.984,451,422    C451,447.102,374.687,482,256,482z" />
									<path
										d="M256,91c-41.355,0-75,33.645-75,75s33.645,75,75,75c41.355,0,75-33.645,75-75S297.355,91,256,91z M256,211    c-24.813,0-45-20.187-45-45s20.187-45,45-45s45,20.187,45,45S280.813,211,256,211z" />
								</svg>
							</div>
							<?php dynamic_sidebar('locationcontact')?>
						</div>
					</div> 