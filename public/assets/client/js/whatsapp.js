const whatsappButton = document.getElementById('whatsappButton');
        const messageBox = document.getElementById('messageBox');

        // Show the message box when hovering over the WhatsApp button
        whatsappButton.addEventListener('mouseenter', () => {
            messageBox.style.display = 'flex';
        });

        // Hide the message box when clicking outside
        document.addEventListener('click', function(event) {
            
            const isClickInside = messageBox.contains(event.target) || whatsappButton.contains(event.target);

            if (!isClickInside) {
                messageBox.style.display = 'none';
            }
        });

        function sendWhatsAppMessage() {
            const phone = '237676411506'; // Replace with your phone number
            const messageInput = document.getElementById('whatsapp-message');
            const message = encodeURIComponent(messageInput.value); // Encode the message to be URL-safe

            // Redirect to WhatsApp with the message as a query parameter
            const whatsappUrl = `https://api.whatsapp.com/send?phone=${phone}&text=${message}`;
            window.open(whatsappUrl, '_blank');
        }