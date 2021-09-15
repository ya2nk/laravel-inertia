<template>
	<aside class="sidebar-nav-wrapper">
		<div class="navbar-logo">
			<a href="index.html">
				<img src="assets/images/logo/logo.svg" alt="logo" />
			</a>
		</div>
		<nav class="sidebar-nav">
			<ul>
				<li class="nav-item nav-item-has-children">
					<a
					  href="#0"
					  data-bs-toggle="collapse"
					  data-bs-target="#ddmenu_1"
					  aria-controls="ddmenu_1"
					  aria-expanded="false"
					  aria-label="Toggle navigation"
					>
					  <span class="icon"><i class="lni lni-dashboard"></i></span>
					  <span class="text">Dashboard</span>
					</a>
					<ul id="ddmenu_1" class="collapse show dropdown-nav">
					  <li>
						<Link href="/dashboard" class="active">
						  <i class="lni lni-arrow-right"></i> e-Commerce
						</Link>
					  </li>
					</ul>
				</li>
				
				<li class="nav-item nav-item-has-children">
					<a
					  href="#0"
					  class="collapsed"
					  data-bs-toggle="collapse"
					  data-bs-target="#ddmenu_2"
					  aria-controls="ddmenu_2"
					  aria-expanded="false"
					  aria-label="Toggle navigation"
					>
					  <span class="icon"><i class="lni lni-layout"></i></span>
					  <span class="text">Pages</span>
					</a>
					<ul id="ddmenu_2" class="collapse dropdown-nav">
					  <li>
						<Link href="/settings">
						  <i class="lni lni-arrow-right"></i> Settings
						</Link>
					  </li>

					  <li>
						<a href="blank-page.html">
						  <i class="lni lni-arrow-right"></i> Blank Page
						</a>
					  </li>
					</ul>
				 </li>
			</ul>
		</nav>
	</aside>
</template>
<script>
	import { Link } from '@inertiajs/inertia-vue3'
	
	export default {
		components: {
			Link
		}
	}
</script>