<template>
	<aside class="sidebar-nav-wrapper" :class="{ active: isOpen }">
		<div class="navbar-logo">
			<a href="index.html">
				<img :src="asset('assets/images/logo/logo.svg')" alt="logo" />
			</a>
		</div>
		<nav class="sidebar-nav">
			<ul>
				<li class="nav-item nav-item-has-children">
					<a
					  href="#0" :class="{ 'collapsed' : !$page.url.startsWith('/dashboard') }"
					  data-bs-toggle="collapse"
					  data-bs-target="#ddmenu_1"
					  aria-controls="ddmenu_1"
					  aria-expanded="false"
					  aria-label="Toggle navigation"
					>
					  <span class="icon"><i class="lni lni-dashboard"></i></span>
					  <span class="text">Dashboard</span>
					</a>
					<ul id="ddmenu_1" class="collapse dropdown-nav" :class="{ show: $page.url.startsWith('/dashboard') }">
					  <li>
						<Link href="/dashboard/e-Commerce" :class="{ active:$page.url == '/dashboard/e-Commerce' }">
						  <i class="lni lni-arrow-right"></i> e-Commerce
						</Link>
					  </li>
					</ul>
				</li>
				
				<li class="nav-item nav-item-has-children">
					<a :class="{ 'collapsed' : !$page.url.startsWith('/page') }"
					  href="#0"
					  data-bs-toggle="collapse"
					  data-bs-target="#ddmenu_2"
					  aria-controls="ddmenu_2"
					  aria-expanded="false"
					  aria-label="Toggle navigation"
					>
					  <span class="icon"><i class="lni lni-layout"></i></span>
					  <span class="text">Pages</span>
					</a>
					<ul id="ddmenu_2" class="collapse dropdown-nav" :class="{ show: $page.url.startsWith('/page') }">
					  <li>
						<Link href="/page/settings" :class="{ active:$page.url == '/page/settings' }">
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
	<div class="overlay" :class="{active:isOpen}" @click="overlayClicked"></div>
</template>
<script>
	import { Link } from '@inertiajs/inertia-vue3'
	
	export default {
		data() {
			return {
				isOpen: false
			};
		},
		mounted() { 
			this.emitter.on("toggle-sidebar", isOpen => {
				this.isOpen = isOpen;
			});
		},
		components: {
			Link
		},
		methods: {
			overlayClicked() {
				this.isOpen = false;
        		this.emitter.emit("toggle-sidebar", this.isOpen);
				this.emitter.emit("overlay-clicked", this.isOpen);
			}
		}
	}
</script>