function updateOrderCounts() {
    // Make an AJAX call to fetch the order counts
    fetch('/admin/order-counts')
        .then(response => response.json())
        .then(data => {
            // Update the DOM with the fetched order counts
            document.getElementById('ord-new').innerText = data.new;
            document.getElementById('ord-accepted').innerText = data.accepted;
            document.getElementById('ord-shipping').innerText = data.inshipping;
            document.getElementById('ord-canceled').innerText = data.canceled;
            document.getElementById('ord-completed').innerText = data.completed;
        })
        .catch(error => console.error('Error fetching order counts:', error));
}

// Call the function to update the counts on page load
document.addEventListener('DOMContentLoaded', updateOrderCounts);