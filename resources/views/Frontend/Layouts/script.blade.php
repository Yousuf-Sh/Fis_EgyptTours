		<script src="{{asset('Frontend/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('Frontend/js/tiny-slider.js')}}"></script>
		<script src="{{asset('Frontend/js/aos.js')}}"></script>
		<script src="{{asset('Frontend/js/navbar.js')}}"></script>
		<script src="{{asset('Frontend/js/counter.js')}}"></script>
		<script src="{{asset('Frontend/js/rellax.js')}}"></script>
		<script src="{{asset('Frontend/js/flatpickr.js')}}"></script>
		<script src="{{asset('Frontend/js/glightbox.min.js')}}"></script>
		<script src="{{asset('Frontend/js/custom.js')}}"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

		<script>
			document.addEventListener("scroll", function() {
				const header = document.querySelector(".site-nav");
				if (window.scrollY > 50) { // Adjust scroll distance as needed
					header.classList.add("scrolled");
				} else {
					header.classList.remove("scrolled");
				}
			});
		</script>
		
        	<script>
			// Get the button and the section elements
			const searchRoutesBtn = document.getElementById("searchRoutesBtn");
			const routeSec1 = document.querySelector(".routeSec1");

			// Add a click event listener to the button
			searchRoutesBtn.addEventListener("click", function() {
				// Display the section
				routeSec1.style.display = "block";
			});

		</script>
		<script>
			document.getElementById("flexSwitch2airport").addEventListener("change", function() {
				var timelineLine = document.querySelector(".timeline-line3-top-airport");
				console.log("haji in flexSwitch2 add child");
				if (this.checked) {
					console.log("haji in check true");
					timelineLine.style.display = "block";
				} else {
					console.log("haji in check false");
					timelineLine.style.display = "none";
				}
			});
		</script>

<script>
    document.getElementById("flexSwitchComments").addEventListener("change", function() {
      var commentsDiv = document.querySelector(".commentsDiv");
      if (this.checked) {
        commentsDiv.style.display = "block";
      } else {
        commentsDiv.style.display = "none";
      }
    });
</script>
<script>
	// Toggle driver-contact div based on checkbox state
	document.getElementById("CheckBoxContactDriver").addEventListener("change", function() {
	  var driverContact = document.querySelector(".driver-contact");
	  var driverDiscrip = document.querySelector(".driver-discrip");
	  
	  if (this.checked) {
		driverContact.style.display = "block";
		driverDiscrip.style.display = "block";
	  } else {
		driverContact.style.display = "none";
		driverDiscrip.style.display = "none";
	  }
	});
  
	// Toggle between Messenger and Phone sections based on selected contact method
	document.getElementById("checkInputMessenger").addEventListener("change", function() {
	  document.querySelector(".phone").style.display = "none";
	  document.querySelector(".social").style.display = "block";
	});
  
	document.getElementById("checkInputPhoneCall").addEventListener("change", function() {
	  document.querySelector(".phone").style.display = "block";
	  document.querySelector(".social").style.display = "none";
	});
</script>
		<!-- <script>
			let quantity = 1; 
		  
			function toggleQuantityDiv() {
			  const quantityRangeDiv = document.getElementById("quantityRangeDiv");
			  quantityRangeDiv.style.display = quantityRangeDiv.style.display === "none" ? "block" : "none";
			}
		  
			Update the quantity display with "Passengers: " prefix
			function updateQuantityDisplay() {
			  document.getElementById("popupQuantityInput").value = quantity;
			  document.getElementById("quantityInput").value = `Passengers: ${quantity}`;
			}
		  
			Increase quantity and update display
			function increaseQuantity() {
			  quantity += 1;
			  updateQuantityDisplay();
			}
		  
			Decrease quantity, ensuring it doesn't go below 1, and update display
			function decreaseQuantity() {
			  if (quantity > 1) {
				quantity -= 1;
				updateQuantityDisplay();
			  }
			}
		  
			Hide the quantity selection div when clicking outside
			document.addEventListener('click', function(event) {
			  const quantityRangeDiv = document.getElementById("quantityRangeDiv");
			  const quantityInput = document.getElementById("quantityInput");
			  const isClickInside = quantityInput.contains(event.target) || quantityRangeDiv.contains(event.target);
		  
			  if (!isClickInside) {
				quantityRangeDiv.style.display = "none";
			  }
			});
		  
			Initial display update
			updateQuantityDisplay();
		</script> -->
		
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const languageItems = document.querySelectorAll('.dropdown-item[data-lang]');
	
			// Set up event listeners for language selection
			languageItems.forEach(item => {
				item.addEventListener('click', function (event) {
					event.preventDefault();
					const selectedLang = this.getAttribute('data-lang');
	
					// Store the selected language in a cookie
					document.cookie = `locale=${selectedLang}; path=/; max-age=${60 * 60 * 24 * 30}`;  // 30 days expiration
	
					// Reload the page to apply the new language
					location.reload();
				});
			});
		});
	</script>
	<!-- language change  -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Function to retrieve a cookie value by name
			function getCookie(name) {
				const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
				return match ? match[2] : null;
			}
	
			// Get the 'locale' cookie to determine the language
			let locale = getCookie('locale');  // Retrieve the value of the 'locale' cookie
			// alert(locale);
			const mainStyleLink = document.getElementById('main-style');
			const mainCustomStyleLink = document.getElementById('main-custom-style');
			const mainResponsiveStyleLink = document.getElementById('main-responsive-style');
			const frenchStyleLink = document.getElementById('french-style');
			const spanishStyleLink = document.getElementById('spanish-style');
			const greekStyleLink = document.getElementById('greek-style');
			const polishStyleLink = document.getElementById('polish-style');
			const romanStyleLink = document.getElementById('roman-style');
			const italianStyleLink = document.getElementById('italian-style');
			const germanStyleLink = document.getElementById('german-style');
	
			// Set the page direction, language, and CSS links based on the locale
			if (locale === 'ar') {
				// If the locale is Arabic, update the page direction and language
				document.documentElement.setAttribute('dir', 'rtl');
				document.documentElement.setAttribute('lang', 'ar');
				mainStyleLink.href = '{{ asset('Frontend/css/ar-style.css') }}';
				mainCustomStyleLink.href = '{{ asset('Frontend/css/ar-custom.css') }}';
				mainResponsiveStyleLink.href = '{{ asset('Frontend/css/ar-responssive.css') }}';
			}
			else if (locale === 'fr'){
				frenchStyleLink.href = '{{ asset('Frontend/css/french/french.css') }}';
				console.log("jahi in french");
			} 
			else if (locale === 'es'){
				spanishStyleLink.href = '{{ asset('Frontend/css/spanish/spanish.css') }}';
			} 
			else if (locale === 'gr'){
				greekStyleLink.href = '{{ asset('Frontend/css/greek/greek.css') }}';
			} 
			else if (locale === 'pl'){
				polishStyleLink.href = '{{ asset('Frontend/css/polish/polish.css') }}';
			} 
			else if (locale === 'ro'){
				romanStyleLink.href = '{{ asset('Frontend/css/roman/roman.css') }}';
			} 
			else if (locale === 'it'){
				italianStyleLink.href = '{{ asset('Frontend/css/italian/italian.css') }}';
			} 
			else if (locale === 'de'){
				germanStyleLink.href = '{{ asset('Frontend/css/german/german.css') }}';
			} 
			
			else {
				// Otherwise, set the default language (e.g., English)
				document.documentElement.setAttribute('dir', 'ltr');
				document.documentElement.setAttribute('lang', 'en');
				mainStyleLink.href = '{{ asset('Frontend/css/style.css') }}';
				mainCustomStyleLink.href = '{{ asset('Frontend/css/custom.css') }}';
				mainResponsiveStyleLink.href = '{{ asset('Frontend/css/responssive.css') }}';
			}
	
			// Update the active class in the dropdown based on the selected language
			const languageItems = document.querySelectorAll('.dropdown-item[data-lang]');
			languageItems.forEach(item => {
				const lang = item.getAttribute('data-lang');
				
				// Remove the 'active' class from all items
				item.classList.remove('active');
				
				// Set the 'active' class for the language item that matches the locale
				if (lang === locale) {
					item.classList.add('active');
				}
			});
	
			// Update the language dropdown button to show the selected language flag and name
			const dropdownButton = document.querySelector('#dropdownMenuButton2');
			const selectedLanguageItem = document.querySelector(`.dropdown-item[data-lang="${locale}"]`);
			if (selectedLanguageItem) {
				const selectedFlag = selectedLanguageItem.querySelector('img').src;
				const selectedText = selectedLanguageItem.textContent.trim();
				dropdownButton.innerHTML = `<img src="${selectedFlag}" alt=""> ${selectedText}`;
			}
		});
	</script>
	<!-- active navbar  -->
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// Get the current page URL (excluding query parameters and normalize trailing slashes)
			const currentPage = window.location.pathname.replace(/\/$/, "");

			// Select all menu links
			const menuLinks = document.querySelectorAll(".site-menu li a");

			// Loop through each link and set the active class if it matches the current page
			menuLinks.forEach(link => {
				// Use pathname of the link for comparison, normalize the link by removing trailing slashes
				const linkPage = new URL(link.href).pathname.replace(/\/$/, "");

				// Check if the link's URL matches the current page
				if (linkPage === currentPage) {
					link.closest("li").classList.add("active");
				} else {
					link.closest("li").classList.remove("active");
				}
			});
		});


	</script>



		
	</body>
	</html>