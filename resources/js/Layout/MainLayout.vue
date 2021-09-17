<template>
	<Sidebar />
	<main class="main-wrapper" :class="{active:isOpen}">
		<Header />
		<section class="section">
			<div class="container-fluid">
				<slot/>
			</div>
		</section>
		 <!-- ========== footer start =========== -->
		  <footer class="footer">
			<div class="container-fluid">
			  <div class="row">
				<div class="col-md-6 order-last order-md-first">
				  <div class="copyright text-center text-md-start">
					<p class="text-sm">
					  Designed and Developed by
					  <a
						href="https://plainadmin.com"
						rel="nofollow"
						target="_blank"
					  >
						PlainAdmin
					  </a>
					</p>
				  </div>
				</div>
				<!-- end col-->
				<div class="col-md-6">
				  <div
					class="terms d-flex justify-content-center justify-content-md-end"
				  >
					<a href="#0" class="text-sm">Term & Conditions</a>
					<a href="#0" class="text-sm ml-15">Privacy & Policy</a>
				  </div>
				</div>
			  </div>
			  <!-- end row -->
			</div>
			<!-- end container -->
		  </footer>
		  <!-- ========== footer end =========== -->
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