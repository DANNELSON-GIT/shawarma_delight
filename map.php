<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Track Order</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <style>
    body { margin: 0; font-family: Arial, sans-serif; }
    #map { height: 70vh; }
    .controls { padding: 16px; background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
  </style>
</head>
<body>

  <div class="controls">
    <label>Enter Tracking ID: <input id="trackingId" value="SHAW-12345"></label>
    <button id="start">Start Tracking</button>
    <span id="status" style="margin-left:10px;"></span>
  </div>

  <div id="map"></div>

  <!-- Firebase & Leaflet -->
  <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-app-compat.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-database-compat.js"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  <script>
    // ====== Paste your Firebase config here ======
    const firebaseConfig = {
      apiKey: "YOUR_API_KEY",
      authDomain: "YOUR_AUTH_DOMAIN",
      databaseURL: "https://YOUR_PROJECT.firebaseio.com",
      projectId: "YOUR_PROJECT_ID",
    };
    // ============================================
    firebase.initializeApp(firebaseConfig);
    const db = firebase.database();

    // Initialize Leaflet map
    const map = L.map('map').setView([6.5244, 3.3792], 13); // default Lagos
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '© OpenStreetMap'
    }).addTo(map);

    let riderMarker = null;
    let riderCircle = null;
    let riderPath = null;
    let polylinePoints = [];

    function startListening(trackingId) {
      document.getElementById('status').textContent = 'Looking up order...';
      // Read order to get rider_id
      db.ref('orders/' + trackingId).once('value').then(snapshot => {
        const order = snapshot.val();
        if (!order || !order.rider_id) {
          document.getElementById('status').textContent = 'Order not found or rider not assigned.';
          return;
        }
        const riderId = order.rider_id;
        document.getElementById('status').textContent = 'Listening to rider: ' + riderId;

        // Subscribe to rider path
        const riderRef = db.ref('riders/' + riderId);
        riderRef.on('value', snap => {
          const data = snap.val();
          if (!data || !data.lat || !data.lng) {
            document.getElementById('status').textContent = 'Rider location not available yet.';
            return;
          }
          const lat = data.lat;
          const lng = data.lng;
          const speed = data.speed || 0;
          const updated_at = data.updated_at || 0;
          document.getElementById('status').textContent = `Rider updated at ${new Date(updated_at*1000).toLocaleTimeString()} (speed:${speed})`;

          // update marker
          const pos = [lat, lng];
          if (!riderMarker) {
            riderMarker = L.marker(pos).addTo(map).bindPopup('Rider here');
            map.setView(pos, 15);
          } else {
            riderMarker.setLatLng(pos);
          }

          // add to path
          polylinePoints.push(pos);
          if (!riderPath) {
            riderPath = L.polyline(polylinePoints, { color: 'orange' }).addTo(map);
          } else {
            riderPath.setLatLngs(polylinePoints);
          }
        });
      }).catch(err => {
        document.getElementById('status').textContent = 'Error: ' + err.message;
      });
    }

    document.getElementById('start').addEventListener('click', () => {
      const trackingId = document.getElementById('trackingId').value.trim();
      if (!trackingId) return alert('Enter tracking ID');
      startListening(trackingId);
    });
  </script>
</body>
</html>
