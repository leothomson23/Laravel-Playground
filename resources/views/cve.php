<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CVE Details</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="cve-container">
		<div class="cve-title">CVE Details</div>
		<div class="cve-id">
			<?php echo htmlspecialchars($cve ?? 'Unknown CVE'); ?>
		</div>
	</div>
</body>

<script>
fetch('https://services.nvd.nist.gov/rest/json/cves/2.0?cveId=<?php echo htmlspecialchars($cve ?? ''); ?>')
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error('Fetch error:', error);
  });
</script>
</html>
