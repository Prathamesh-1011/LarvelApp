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
      <div class="playlist-info">
        <h2>Now Playing</h2>
        <p>Playlist Name: K-Drama OST</p>
      </div>

      <div class="song-list">
        <div class="song-item">
          <div>1</div>
          <div>Stay With Me</div>
          <div>Chanyeol and Punch</div>
          <div>3:30</div>
        </div>

        <div class="song-item">
          <div>2</div>
          <div>It's You</div>
          <div>Park Won</div>
          <div>3:23</div>
        </div>

        <div class="song-item">
          <div>3</div>
          <div>Everytime</div>
          <div>Chen and Punch</div>
          <div>3:23</div>
        </div>

        <div class="song-item">
          <div>4</div>
          <div>Love Maybe</div>
          <div>Secret Number</div>
          <div>3:23</div>
        </div>

        <div class="song-item">
          <div>5</div>
          <div>Beautiful</div>
          <div>Crush</div>
          <div>3:56</div>
        </div>
      </div>
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