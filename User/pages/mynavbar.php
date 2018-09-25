<!--
<div class="navbar-item navbar-search">
			<div class="field">
				<form action="" method="get">
					<div class="field">
						<p class="control has-icons-right is-dark">
							<input type="search" placeholder="Search" autocomplete="off" class="input">
							<span class="icon is-small is-right">
								<i class="fas fa-search"></i>
							</span>
						</p>
					</div>
				</form>-->
				<!-- Dito sa part na to js script na kapag nag type ng word si customer automatic magbibigay ng suggestion. Magiging active lang tong dropdown-content kapag nagtype si client e.g Camera Part, Brand, Accessorie or kahit anong related as long as makikita sa shop -->
				<!--<div class="search-suggest" style="position: relative;">
					<div class="dropdown-menu" style="display: none;">
						<div class="dropdown-content">
							<a href="" class="dropdown-item">-->
							<!-- insert name of category here -->
							<!--</a>
						</div>
					</div>
				</div>
			</div>
		</div>
 -->
<!-- <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
					<div class="navbar-brand">
						<a href="#" class="navbar-item">
							MetroFocus
						</a>

						<a role="button" class="navbar-burger is-hidden-desktop" aria-label="menu" aria-expanded="false">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
						</a>
					</div>
					
					<div class="navbar-menu">
						<div class="navbar-start">
							<a href="#" class="navbar-item" style="background: none !important;">Home</a>
							<div class="navbar-item is-hoverable">
								<a href="pages/cameraparts.php" class="navbar-item" style="background: none !important;">Camera Parts</a>
							</div>
							<div class="navbar-item  is-hoverable">
								<a href="pages/cameraaccessories.php" class="navbar-item" style="background: none !important;">Accessories</a>
							</div>
							<div class="navbar-item  is-hoverable">
								<a href="pages/faq.php" class="navbar-item" style="background: none !important;">FAQs</a>
							</div>
						</div>
						<div class="navbar-end">
							
							<?php 
									if(isset($_COOKIE['username'])){
										?>
										<div class="navbar-item is-paddingless is-guest">
											<a href="pages/profile.php" class="button thickbox is-text is-nolink is-uppercase">
												<span class="icon is-small">
												<i class="fal fa-user"></i>
												</span>
												<span style="
												display: block;
												max-width: 200px;
												overflow: hidden;
											    white-space: nowrap;
										        text-overflow: ellipsis;
												"><?php echo $_COOKIE['username']; ?></span>
											</a>
										</div>
										<div class="navbar-item is-paddingless is-guest">
											<a href="pages/logout.php" class="button thickbox is-text is-nolink is-uppercase is-primary">
												<span class="icon is-small">
												<i class="fas fa-sign-out-alt"></i>
												</span>
												<span>Logout</span>
											</a>
										</div>
										<?php
									}
									else{
										?>
										<div class="navbar-item is-paddingless is-guest">
											<a href="pages/loginpage.php" class="button thickbox is-text is-nolink is-uppercase">
												<span class="icon is-small">
												<i class="fas fa-sign-in-alt"></i>
												</span>
												<span>Login</span>
											</a>
										</div>
										<span class="navbar-item is-paddingless is-guest" style="color: rgba(245,245,245,.7);">
											or
										</span>
										<div class="navbar-item is-paddingless is-guest">
											<a href="pages/signuppage.php" class="button thickbox is-text is-nolink is-uppercase is-primary">
												<span class="icon is-small">
												<i class="far fa-pen-square"></i>
												</span>
												<span>Signup</span>
											</a>
										</div>
										<?php
									}

							?>
						</div>
					</div>
				</nav> -->
<section class="hero is-dark">
    <div class="hero-head" style="background: #071425;">
        <div class="container">
            <nav class="navbar is-dark">
                <div class="navbar-brand">
                    <a href="#" class="navbar-item" style="background: none !important;">
						<span style="font-weight: bold;">Metro</span><span style="color: #FF7100;font-weight: bold;">Focus</span>
					</a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a href="#" class="navbar-item" style="background: none !important;">Home</a>
						<div class="navbar-item">
                            <a href="pages/cameraparts.php" class="navbar-item" style="background: none !important;">Camera Parts</a>
                        </div>
                        <div class="navbar-item">
                            <a href="pages/cameraaccessories.php" class="navbar-item" style="background: none !important;">Accessories</a>
                        </div>
                        <div class="navbar-item">
                          <a href="pages/faq.php" class="navbar-item" style="background: none !important;">FAQs</a>
                        </div>
                    </div>
                    <style>
                        #btnhover:hover {
                            background-color: #44bfd5 !important;
                        }
                        #cart:hover {
                            background-color: #071425 !important;
                        }
                    </style>
                    <?php 
					if(isset($_COOKIE['username'])){
						?>
						<div class="navbar-item is-paddingless is-guest">
                            <span id="badge" class="badge is-badge-warning is-badge-left" data-badge="<?php echo $badge[0] ?>">
                                <a id="cart" style="color: #FF7100;text-decoration: none;" href="pages/cart.php" class="button thickbox is-text is-nolink is-uppercase">
                                    <span><i class="fal fa-shopping-cart fa-lg"></i></span>
                                </a>
                            </span>
                        </div>
                        <div class="navbar-item is-paddingless is-guest">
                            <a style="color: #FF7100;text-decoration: none;" href="pages/profile.php" class="button thickbox is-text is-nolink is-uppercase">
                                <span class="icon is-small">
											<i class="fal fa-user"></i>
											</span>
                                <span style="
											display: block;
											max-width: 200px;
											overflow: hidden;
										    white-space: nowrap;
									        text-overflow: ellipsis;
											"><?php echo $_COOKIE['username']; ?></span>
                            </a>
                        </div>
                        <div class="navbar-item is-paddingless is-guest">
                            <a id="btnhover" style="color: #FFF;text-decoration: none;" href="pages/logout.php" class="button thickbox is-text is-nolink is-uppercase">
                                <span class="icon is-small">
                                <i class="fas fa-sign-out-alt"></i>
                                </span>
                                <span>Logout</span>
                            </a>
                        </div>
                        <?php
						}
						else{
							?>
                        <div class="navbar-item is-paddingless is-guest">
                            <a style="color: #FF7100;text-decoration: none;" href="pages/loginpage.php" class="button thickbox is-text is-nolink is-uppercase">
                                <span class="icon is-small">
										<i class="fas fa-sign-in-alt"></i>
										</span>
                                <span>Login</span>
                            </a>
                        </div>
                        <span class="navbar-item is-paddingless is-guest">
						    or
						</span>
                        <div class="navbar-item is-paddingless is-guest">
                            <a id="btnhover" style="color: #FFF;text-decoration: none;" href="pages/signuppage.php" class="button thickbox is-text is-nolink is-uppercase">
                                <span class="icon is-small">
                                <i class="far fa-pen-square"></i>
                                </span>
                                <span>Signup</span>
                            </a>
                        </div>
                        <?php
							}
						?>
                </div>
            </nav>
        </div>
    </div>
</section>