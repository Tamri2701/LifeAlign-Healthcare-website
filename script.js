// Function to show the popup
function showPopup(popupId) {
    document.getElementById(popupId).style.display = 'flex';
}

// Function to close the popup
function closePopup(popupId) {
    document.getElementById(popupId).style.display = 'none';
}

// Search functionality
const searchInput = document.getElementById('search');
const searchButton = document.getElementById('search-btn');
const searchList = document.getElementById('search-list');

// Add an event listener to the search button
searchButton.addEventListener('click', () => {
    const searchQuery = searchInput.value.trim().toLowerCase();

    // If the search input is empty, reset everything
    if (searchQuery === '') {
        // Show all cards
        const vaccineCards = document.querySelectorAll('.card');
        vaccineCards.forEach((card) => {
            card.style.display = 'block';
        });

        // Clear the search results
        searchList.innerHTML = '';

        // Change button text to 'Search'
        searchButton.textContent = 'Search';
        return;
    }

    // Filter the vaccine cards based on the search query
    const vaccineCards = document.querySelectorAll('.card');
    let cardFound = false;  // Flag to track if a card is found
    vaccineCards.forEach((card) => {
        const vaccineName = card.querySelector('.vaccine-name').textContent.toLowerCase();
        if (vaccineName.includes(searchQuery)) {
            card.style.display = 'block';
            cardFound = true;
        } else {
            card.style.display = 'none';
        }
    });

    // Display the search results in the list
    searchList.innerHTML = ''; // Clear previous results
    if (cardFound) {
        const visibleCards = Array.from(vaccineCards).filter(card => card.style.display !== 'none');
        visibleCards.forEach((result) => {
            const listItem = document.createElement('li');
            listItem.textContent = result.querySelector('.vaccine-name').textContent;
            searchList.appendChild(listItem);
        });

        // Change button text to 'Clear Search'
        searchButton.textContent = 'Clear Search';
    } else {
        const noResult = document.createElement('li');
        noResult.textContent = 'No vaccines found';
        searchList.appendChild(noResult);

        // Change button text to 'Clear Search'
        searchButton.textContent = 'Clear Search';
    }
});
