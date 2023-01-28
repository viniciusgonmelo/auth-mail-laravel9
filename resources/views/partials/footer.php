<script>
  const alerts = document.querySelectorAll('.alert');
  if (alerts) {
    [...alerts].forEach(alert => {
      setTimeout(() => {
        alert.remove();
      }, "5000")
    });
  }
</script>
</body>

</html>
