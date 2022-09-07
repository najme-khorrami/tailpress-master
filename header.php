<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="container mx-auto">
    		<div class="flex items-center relative justify-between mt-3 flex-wrap md:flex-nowrap">
        		<div class="logo pr-3">
					<img src="https://raw.githubusercontent.com/najme-khorrami/online-store/858ed462242f4a6498111359cd69a939c642adaa/src/images/Logo.svg" alt="">
        		</div>
        		<div class="flex flex-auto mx-12">
            		<input type="search" class="border-0 rounded-r-md bg-slate-200 flex-auto pr-3" placeholder="جست و جوی برند، مدل، دسته و ...">
            		<button class="bg-slate-200 rounded-l-md p-2" type="button" id="button-addon2"><img src="https://raw.githubusercontent.com/najme-khorrami/online-store/858ed462242f4a6498111359cd69a939c642adaa/src/images/search-normal.svg" alt=""></button>
        		</div>
        		<div class="account flex items-baseline">
            		<div class="border-end pl-3 sm:flex items-center none">
                		<img src="https://raw.githubusercontent.com/najme-khorrami/online-store/858ed462242f4a6498111359cd69a939c642adaa/src/images/user.svg" class="px-2" alt="">
                		<a href="#" class="text-nowrap enter lg:block none">وارد شوید</a>
            		</div>
            		<div class="px-3">
                		<img src="https://raw.githubusercontent.com/najme-khorrami/online-store/858ed462242f4a6498111359cd69a939c642adaa/src/images/Cart.svg" class="align-baseline" alt="">
            		</div>
        		</div>
    		</div>
		</div>
	</header>

