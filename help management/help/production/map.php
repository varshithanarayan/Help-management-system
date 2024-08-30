<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Distance Calculator</title>
  <style>
    label {
      display: block;
      margin-bottom: 5px;
    }
  </style>
</head>
<body>

  <h2>Distance Calculator</h2>

  <form id="distanceForm">
    <!-- Address -->
    <div>
      <label for="address">Address:</label>
      <input type="text" id="address" readonly>
    </div>

    <!-- From Address -->
    <div>
      <label for="fromAddress">From Address:</label>
      <input type="text" id="fromAddress" required>
    </div>

    <!-- To Address -->
    <div>
      <label for="toAddress">To Address:</label>
      <input type="text" id="toAddress" required>
    </div>

    <!-- Distance -->
    <div>
      <label for="distance">Distance (Kms):</label>
      <input type="text" id="distance" readonly>
    </div>

    <!-- Amount -->
    <div>
      <label for="amount">Amount (₹):</label>
      <input type="text" id="amount" readonly>
    </div>

    <!-- Calculate Distance Button -->
    <div>
      <button type="button" onclick="calculateDistance()">Calculate Distance</button>
    </div>
  </form>

  <!-- Replace 'YOUR_OPENCAGE_API_KEY' with your actual OpenCage API key -->
  <script>
    const apiKey = '412c3901661f409594ea77a2eeb37049';

    function calculateDistance() {
      var fromAddress = document.getElementById('fromAddress').value;
      var toAddress = document.getElementById('toAddress').value;

      // Fetch coordinates for the 'from' address
      fetch(`https://api.opencagedata.com/geocode/v1/json?q=${encodeURIComponent(fromAddress)}&key=${apiKey}`)
        .then(response => response.json())
        .then(data => {
          if (data.results && data.results.length > 0) {
            document.getElementById('address').value = data.results[0].formatted;
          } else {
            console.error('Error fetching coordinates (from): No results found');
          }
        })
        .catch(error => console.error('Error fetching coordinates (from):', error));

      // Fetch coordinates for the 'to' address
      fetch(`https://api.opencagedata.com/geocode/v1/json?q=${encodeURIComponent(toAddress)}&key=${apiKey}`)
        .then(response => response.json())
        .then(data => {
            console.log(data);
          if (data.results && data.results.length > 0) {
            // Calculate distance using Haversine formula
            var distanceInKms = haversineDistance(
              `${data.results[0].geometry.lat},${data.results[0].geometry.lng}`,
              `${data.results[0].geometry.lat},${data.results[0].geometry.lng}`
            );
            document.getElementById('distance').value = distanceInKms.toFixed(2);

            // Calculate amount (distance multiplied by 3)
            var amount = distanceInKms * 3;
            document.getElementById('amount').value = amount.toFixed(2);
          } else {
            console.error('Error fetching coordinates (to): No results found');
          }
        })
        .catch(error => console.error('Error fetching coordinates (to):', error));
    }

    // Haversine formula to calculate distance between two points on the Earth
    function haversineDistance(coord1, coord2) {
      function toRadians(degrees) {
        return degrees * Math.PI / 180;
      }

      var [lat1, lon1] = coord1.split(',').map(parseFloat);
      var [lat2, lon2] = coord2.split(',').map(parseFloat);

      var R = 6371; // Radius of the Earth in kilometers
      var dLat = toRadians(lat2 - lat1);
      var dLon = toRadians(lon2 - lon1);

      var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
              Math.cos(toRadians(lat1)) * Math.cos(toRadians(lat2)) *
              Math.sin(dLon / 2) * Math.sin(dLon / 2);
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

      return R * c; // Distance in kilometers
    }
  </script>

</body>
</html>
