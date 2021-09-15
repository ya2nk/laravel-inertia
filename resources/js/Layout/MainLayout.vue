<template>
	<Sidebar />
	<main class="main-wrapper">
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
		}
		
	}
</script>