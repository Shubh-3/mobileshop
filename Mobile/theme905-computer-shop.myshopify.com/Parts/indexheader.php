<header id="page_header" class="header_layout_1 ">
	<div class="page_container">
		<div class="header_row_1"> 
				<div class="header_item_left" style="font-family: Times New Roman">
					<a class="contact_phone tel_ltr" href="tel:+(91) 99999 16699">
                   Customer Care : +(91) 99999 16699</a></br>


<?php 
	
	if (isset($_SESSION['displayname'])) {
	?>Hii...<B><?php
		echo ($_SESSION['displayname']);
	}
 ?></B>
				</div>

				<div class="header_item_center">

			   <a class="header_logo" href="index.php">
				  <img src="../cdn.shopify.com/s/files/1/0453/5035/5103/files/logo_130x30_crop_center%402xc3bf.png?v=1597063927" alt="Mobilex" style="max-width: 130px">
				
			   </a>
		


				</div>
				
				<div class="header_item_right">
          <div class="header_search">
	           <span class="search_toggle">
				    
			<span class="link_text">Search</span>
		
		<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
			<path d="M20 18.5787L16.2437 14.8223C17.4619 13.2995 18.2741 11.269 18.2741 9.13706C18.2741 4.06091 14.2132 0 9.13706 0C4.06091 0 0 4.06091 0 9.13706C0 14.2132 4.06091 18.2741 9.13706 18.2741C11.269 18.2741 13.2995 17.5635 14.8223 16.2437L18.5787 20L20 18.5787ZM2.03046 9.13706C2.03046 5.17766 5.17766 2.03046 9.13706 2.03046C13.0964 2.03046 16.2437 5.17766 16.2437 9.13706C16.2437 13.0964 13.0964 16.2437 9.13706 16.2437C5.17766 16.2437 2.03046 13.0964 2.03046 9.13706Z"/>
		</svg>
		
	</span>
	<div class="search_form_wrap">
		<form action="https://theme905-computer-shop.myshopify.com/search" method="get" role="search" class="search_form">
			<span class="header_serch_caption">Looking for something special?</span>
			<input type="search" name="q" placeholder="Search" aria-label="Search">
			<label for="header_search_submit">
				<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path d="M20 18.5787L16.2437 14.8223C17.4619 13.2995 18.2741 11.269 18.2741 9.13706C18.2741 4.06091 14.2132 0 9.13706 0C4.06091 0 0 4.06091 0 9.13706C0 14.2132 4.06091 18.2741 9.13706 18.2741C11.269 18.2741 13.2995 17.5635 14.8223 16.2437L18.5787 20L20 18.5787ZM2.03046 9.13706C2.03046 5.17766 5.17766 2.03046 9.13706 2.03046C13.0964 2.03046 16.2437 5.17766 16.2437 9.13706C16.2437 13.0964 13.0964 16.2437 9.13706 16.2437C5.17766 16.2437 2.03046 13.0964 2.03046 9.13706Z"/>
				</svg>
			</label>
			<input type="submit" id="header_search_submit">
			<span class="search_form_close">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M13.7156 5L15 6.14286L10.993 10L15 13.8571L13.7156 15L9.95417 11.2857L6.28442 15L5 13.8571L8.9342 10L5 6.14286L6.28442 5L9.95417 8.71429L13.7156 5Z" fill="#E4E4E4"/>
				</svg>
			</span>
		</form>

		
			<script>
				theme.searchAjaxOn = true;
			</script>

			<div id="search_result_container"></div>
		

		<div class="search_form_cover"></div>
	</div>
</div>
					

					
						
						<div class="header_wishlist">
							<a href="pages/wishlist.html" title="Wishlist">
								<span class="link_text">Wishlist</span>
								
								<span class="zemez_wishlist_total  hidden"></span>
							</a>
						</div>
					
					
					
						<div class="header_account">

							
								<a href="account/login.php">
									<span class="link_text">Account</span>
									
								</a>
							
						</div>
					
					
					
<div class="header_cart" id="main__cart_item">
	<a class="cart_link" href="cart.php">
	
		<span class="link_text">Cart</span>	
	
	<span id="cart_items" class="header_cart_items hidden"> 0 </span>
	<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
	<path d="M20 20H0V6H20V20ZM2 18H18V8H2V18Z"/>
	<path d="M14 3.99995H12C12 3.49995 11.8 2.99995 11.4 2.59995C10.7 1.89995 9.3 1.89995 8.6 2.59995C8.2 2.89995 8 3.39995 8 3.99995H6C6 2.89995 6.4 1.89995 7.2 1.19995C8.7 -0.300049 11.3 -0.300049 12.9 1.19995C13.6 1.89995 14 2.89995 14 3.99995Z"/></a>
	</svg>

	
		
</div>


<?php 
  
  if (isset($_SESSION['vu'])){
  	?>
    			<div class="header_account">

							
								<a href="con_logout.php">
									<span class="link_text" style="color: blue"><i class="fa fa-sign-out" aria-hidden="true" style="font-size:30px"></i></span>
									
								</a>
							
						</div>


<?php
  } 
?>

					

				</div>
			
		</div>

		<div class="header_row_2">   
			<div class="container header_main_wrap">

				<div class="header_wrap2 header_center">

					
					
						<nav id="megamenu" class="megamenu">
							<h2 id="megamenu_mobile_toggle" style="display: none;" title="Menu">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect y="3" width="20" height="2"/>
									<rect y="9" width="20" height="2"/>
									<rect y="15" width="20" height="2"/>
								</svg>
							</h2>

							<div id="megamenu_mobile_close" style="display: none;">
								<div class="close_icon"></div>
							</div>

							<ul id="megamenu_level__1" class="level_1">
								
									
									
									

									<li class="level_1__item level_2__small" style="display: inline-block;">
										<a class="level_1__link " href="index.php">Home
											<i class="level_1__trigger megamenu_trigger" data-submenu="menu_1565951062484"></i>
											
										</a>

										
												
													
												

											

									</li>

								
									
									
									

									<li class="level_1__item " style="display: inline-block;">
										<a class="level_1__link " href="collections/all.html">Catalog
											
											
										</a>

										

									</li>

								
									
									
									

									<li class="level_1__item level_2__small" style="display: inline-block;">
										<a class="level_1__link " href="collections/collections.php">Collections
											<i class="level_1__trigger megamenu_trigger" data-submenu="menu_1597063977258"></i>
											
										</a>

												

											

									</li>

								
									
									
									

									<li class="level_1__item " style="display: inline-block;">
										<a class="level_1__link " href="collections/accessories.html">Clearance
											
											
										</a>

										

									</li>

								
									
									
									

									<li class="level_1__item " style="display: inline-block;">
										<a class="level_1__link " href="pages/sections-all.html">Sections All
											
											
										</a>

										

									</li>

								
									
									
									

									<li class="level_1__item " style="display: inline-block;">
										<a class="level_1__link " href="pages/contact-us.html">Contact Us
											
											
										</a>

										

									</li>

								

								<li class="megamenu_footer">
									
										
										<div class="menu_header_wishlist">
											<a href="pages/wishlist.html">
												<span class="menu_header_wishlist_text">Wishlist</span>
												<span class="zemez_wishlist_total"></span>
											</a>
										</div>
									

									
										<div class="menu_header_account">
											<span>Account</span>
											
												<a href="account/login.php">Account</a>
											
										</div>
									

									
										
										

										<div class="menu_currency_selector__wrap">
											<span>Currency</span>
											<div id="menu_currency_selector">
													<label id="menu_currency_selected">
														<input class="menu_currency_selector__item" type="radio" name="menu_currency" value="USD" data-value="USD">
														USD
													</label>

												
													
												
													
														<label >
															<input class="menu_currency_selector__item" type="radio" name="menu_currency" value="EUR" data-value="EUR">
															EUR
														</label>
													
												
													
														<label >
															<input class="menu_currency_selector__item" type="radio" name="menu_currency" value="GBP" data-value="GBP">
															GBP
														</label>
													
												
											</div>
										</div>
									
								</li>
							</ul>

						</nav>
					
				</div>

			</div>
		</div>
	</div>
</header>