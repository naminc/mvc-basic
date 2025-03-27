</div> <!-- end .container -->

<!-- Footer -->
<footer class="bg-dark text-light text-center py-3 mt-auto">
    <div class="container">
        <p class="mb-1">© <?= date('Y') ?> NAMINC. All rights reserved.</p>
    </div>
</footer>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Dark mode toggle nếu có -->
<script>
    function toggleTheme() {
        const html = document.documentElement;
        const currentTheme = html.getAttribute("data-bs-theme") || "light";
        const newTheme = currentTheme === "light" ? "dark" : "light";
        html.setAttribute("data-bs-theme", newTheme);

        const icon = document.getElementById("themeIcon");
        if (icon) {
            icon.className = newTheme === "dark" ? "bi bi-sun-fill" : "bi bi-moon-fill";
        }
    }
</script>
</body>
</html>
