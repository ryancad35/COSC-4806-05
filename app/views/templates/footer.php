<footer class="footer">    
    <p>Copyright &copy; <?php echo date('Y'); ?> </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Simple toast function
function showToast(title, message, type = 'success') {
    const toast = document.getElementById('liveToast');
    const toastTitle = document.getElementById('toastTitle');
    const toastMessage = document.getElementById('toastMessage');

    // Set content
    toastTitle.textContent = title;
    toastMessage.textContent = message;

    // Set color based on type
    if (type === 'error') {
        toast.classList.add('bg-danger', 'text-white');
    } else {
        toast.classList.remove('bg-danger', 'text-white');
    }

    // Show toast
    const bsToast = new bootstrap.Toast(toast);
    bsToast.show();
}

// Show toast if there's a message in session
<?php if (isset($_SESSION['toast_message'])): ?>
    showToast('<?php echo $_SESSION['toast_title']; ?>', '<?php echo $_SESSION['toast_message']; ?>', '<?php echo $_SESSION['toast_type']; ?>');
    <?php unset($_SESSION['toast_message'], $_SESSION['toast_title'], $_SESSION['toast_type']); ?>
<?php endif; ?>
</script>
</body>
</html>