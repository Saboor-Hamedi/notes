//   document.addEventListener('DOMContentLoaded', function() {
//         // Check if elements exist before adding event listeners
//         const searchInput = document.getElementById('search-input');
//         const searchResults = document.getElementById('search-results');

//         // Exit if elements are not found
//         if (!searchInput || !searchResults) return;

//         // Function to handle showing/hiding results
//         function handleSearchResultsDisplay() {
//             if (searchInput.value === '') {
//                 searchResults.style.display = 'none'; // Hide results
//             } else {
//                 searchResults.style.display = 'block'; // Show results if not empty
//             }
//         }

//         // Handle input keyup event
//         searchInput.addEventListener('keyup', function() {
//             handleSearchResultsDisplay();
//         });

//         // Handle Escape key press
//         document.addEventListener('keydown', function(event) {
//             if (event.key === 'Escape') {
//                 searchInput.value = ''; // Clear input field
//                 searchResults.style.display = 'none'; // Hide results
//                 searchInput.focus(); // Optional: Focus back on the input field
//             }
//         });
//     });