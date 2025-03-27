<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">&copy; <?= date("Y") ?> - NAMINC. All rights reserved.</p>
        </div>
</footer>
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables Core -->
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
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