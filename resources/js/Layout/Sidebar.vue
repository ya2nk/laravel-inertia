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