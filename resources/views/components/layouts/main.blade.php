<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Your Playlist Page</title> -->
  <title>{{ $title ?? "Cool Web App" }}</title>
  <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
</head>
<body>
  <div class="grid-container">
    <header>
      <h1>SPOTIFY</h1>
    </header>

    <div class="sidebar">
      <h2>Saved Playlists</h2>
      <ul>
        <li>K-PoP</li>
        <li>Mash-Ups</li>
        <li>BollyWood Songs</li>
        <li>Taylor Swift Collection</li>
        <li>Hot Hits India</li>
        <li>Top 50 Global</li>
      </ul>
    </div>
    <main>
      @yield('content')
    </main>

    <div class="status-bar">
      <p>Now Playing: Stay With Me - Chanyeol and Punch</p>
    </div>

    <footer>
      <p>&copy; 2023 Prathamesh SongList | <a href="#">About</a> | <a href="#">Terms</a></p>
    </footer>
  </div>
</body>
</html>