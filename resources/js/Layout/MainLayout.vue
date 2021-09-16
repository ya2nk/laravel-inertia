<template>
	<Sidebar />
	<main class="main-wrapper" :class="{active:isOpen}">
		<Header />
		<section class="section">
			<div class="container-fluid">
				<slot/>
			</div>
		</section>
	</main>
</template>
<script>
	import Sidebar from './Sidebar'
	import Header from './Header'
	
	
	export default {
		name:'MainLayout',
		components: {
			Sidebar,
			Header
		},
		
		data() {
			return {
				isOpen: false
			};
		},
		mounted() { 
			this.emitter.on("toggle-sidebar", isOpen => {
				this.isOpen = isOpen;
			});
		}
		
	}
</script>