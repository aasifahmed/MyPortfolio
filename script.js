let visitorCount = localStorage.getItem('visitorCount');

// If visitor count is not present in local storage, set it to 0
if (!visitorCount) {
  visitorCount = 0;
}

// Increment visitor count
visitorCount++;

// Update the visitor count in the HTML
document.getElementById('visitorCount').textContent = visitorCount;

// Store the updated visitor count in local storage
localStorage.setItem('visitorCount', visitorCount);