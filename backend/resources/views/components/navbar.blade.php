<header>
		<div id="navbar" class="text-center">
			<div class="text-center">
			<!-- primary navbar -->
			<nav id="primary-navbar" class="navbar navbar-expand navbar-light bg-light">
				<div class="container-fluid">
					<a href="" target="_blank" onclick="onLogoClicked()">
					<!-- custom image -->
						<img class="navbar-img" 
							src="{{ asset('images/logo/logoTransparent.png') }}" 
							alt="Armyshop">
					</a>
					<div class="search-input-wrapper">
						<input class="form-control search-input" type="search" placeholder="WAZZZUUUUPP" aria-label="Search">
						<div id="search-results-wrapper"></div>
					</div>
					<!-- image source: freeiconspng.com -->
					<img class="search-img" 
						src="https://www.freeiconspng.com/uploads/search-icon-png-5.png" 
						alt="Responsive image">
					<button class="button shopping-cart__button" onclick="onShoppingCartClicked()">
					<!-- image source: freeiconspng.com -->
						<img class="navbar-img" 
							src="https://www.freeiconspng.com/uploads/bag-icon-6.png" 
							alt="Responsive image">
					</button>
					<button class="button profile__button" onclick="onProfileClicked()">
					<!-- image source: freeiconspng.com -->
						<img class="navbar-img" 
							src="https://www.freeiconspng.com/uploads/msn-people-person-profile-user-icon--icon-search-engine-16.png" 
							alt="Responsive image">
					</button>
				</div>
			</nav>

			<!-- secondary navbar -->
			<nav id="secondary-navbar" class="navbar navbar-expand navbar-light bg-light">
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('weapons')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Weapons
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('weapons', 'pistols')">Pistols</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('weapons', 'rifles')">Rifles</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('weapons', 'submachine_guns')">Submachine guns</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('weapons', 'heavy')">Heavy</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('weapons', 'knives')">Knives</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('transport')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Transport
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('transport', 'cars')">Cars</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('transport', 'motocycles')">Motocycles</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('transport', 'panzers')">Panzers</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('transport', 'planes')">Planes</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('transport', 'boats')">Boats</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('clothing')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Clothing
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('clothing','jackets')">Jackets</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('clothing','shirts')">Shirts</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('clothing','pants')">Pants</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('clothing','shoes')">Shoes</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('clothing','socks')">Socks</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('explosives')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Explosives
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('explosives', 'c4s')">C4s</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('explosives', 'nukes')">Nukes</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('explosives', 'grenades')">Grenades</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('explosives', 'tnts')">TNTs</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('explosives', 'bombs')">Bombs</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('equipment')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Equipment
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('equipment', 'backpacks')">Backpacks</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('equipment', 'hunting')">Hunting</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('equipment', 'camping')">Camping</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('accessories')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Accessories
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" onclick="onSubCategoryClicked('accessories', 'glasses')">Glasses</a></li>
						<li><a class="dropdown-item" onclick="onSubCategoryClicked('accessories', 'face_paint')">Face pain</a></li>
						<li><a class="dropdown-item" onclick="onSubCategoryClicked('accessories', 'camouflage')">Camouflage</a></li>
						</ul>
					</div>
				</div>
			</nav>
			</div>
		</div>
	</header>