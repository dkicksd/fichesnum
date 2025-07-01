document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('note-form');
    const notesSection = document.getElementById('notes');
    const aiBtn = document.getElementById('ai-btn');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const title = document.getElementById('title').value;
        const content = document.getElementById('content').value;
        addNote(title, content);
        form.reset();
    });

    aiBtn.addEventListener('click', async () => {
        const content = document.getElementById('content').value;
        const response = await fetch('generate.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ text: content })
        });
        if (response.ok) {
            const data = await response.json();
            document.getElementById('content').value = data.suggestion;
        }
    });

    function addNote(title, content) {
        const div = document.createElement('div');
        div.className = 'note bg-white shadow rounded p-4 my-2';
        div.innerHTML = `<h3>${title}</h3><p>${content}</p>`;
        notesSection.appendChild(div);
    }

    // Password visibility toggle
    document.querySelectorAll('.toggle-password').forEach(icon => {
        icon.addEventListener('click', () => {
            const input = icon.previousElementSibling;
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    });

    // Registration form validation
    const signupForm = document.getElementById('signup-form');
    if (signupForm) {
        signupForm.addEventListener('submit', (e) => {
            const password = document.getElementById('password').value;
            const confirm = document.getElementById('confirm_password').value;
            const strength = document.getElementById('password-strength');
            const strongRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).{8,}$/;

            if (!strongRegex.test(password)) {
                e.preventDefault();
                strength.textContent = "Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un symbole.";
                return;
            }

            if (password !== confirm) {
                e.preventDefault();
                strength.textContent = "Les mots de passe ne correspondent pas.";
            }
        });
    }
});
        // Add to cart functionality
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productCard = this.closest('.product-card');
                const title = productCard.querySelector('.product-title').textContent;
                const price = productCard.querySelector('.product-price').textContent;
                
                // Animation feedback
                const icon = this.querySelector('i');
                icon.className = 'fas fa-check';
                
                setTimeout(() => {
                    icon.className = 'fas fa-shopping-cart';
                }, 2000);
                
                // Update cart count
                const cartCount = document.querySelector('.cart-count');
                let count = parseInt(cartCount.textContent);
                count++;
                cartCount.textContent = count;
                
                // Show notification
                const notification = document.createElement('div');
                notification.innerHTML = `
                    <div style="position: fixed; bottom: 70px; right: 20px; background: var(--creative-orange); color: white; padding: 15px 25px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.3); z-index: 1000; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-check-circle"></i>
                        <span>Ajouté au panier: ${title}</span>
                    </div>
                `;
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.remove();
                }, 3000);
            });
        });

        // Category cards animation
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Filter buttons
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
            });
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });

        // PWA Installation Prompt
        window.addEventListener('beforeinstallprompt', (e) => {
            // Prevent the mini-infobar from appearing on mobile
            e.preventDefault();
            
            // Show custom install button
            const installBtn = document.createElement('button');
            installBtn.className = 'btn';
            installBtn.style.margin = '20px auto';
            installBtn.style.display = 'block';
            installBtn.innerHTML = '<i class="fas fa-download"></i> Installer l\'app';
            
            const featuresSection = document.querySelector('.features');
            featuresSection.parentNode.insertBefore(installBtn, featuresSection.nextSibling);
            
            installBtn.addEventListener('click', () => {
                // Hide our install button
                installBtn.style.display = 'none';
                // Show the install prompt
                e.prompt();
                // Wait for the user to respond to the prompt
                e.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the install prompt');
                    } else {
                        console.log('User dismissed the install prompt');
                    }
                });
            });
        });
        
        // Bottom Navigation Active State
        document.querySelectorAll('.bottom-nav .nav-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.bottom-nav .nav-item').forEach(el => {
                    el.classList.remove('active');
                });
                this.classList.add('active');
            });
        });

