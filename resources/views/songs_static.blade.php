<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Playlist Page</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: #1e1e1e;
      color: #fff;
    }

    .grid-container {
      display: grid;
      grid-template-columns: 250px 1fr;
      grid-template-rows: auto 1fr auto;
      grid-template-areas:
        "sidebar header"
        "sidebar main"
        "footer footer";
      min-height: 100vh;
    }

    header, footer {
      background-color: #333;
      color: #fff;
      padding: 10px;
    }

    header {
      grid-area: header;
      background-color: #1db954;
    }

    footer {
      grid-area: footer;
      text-align: center;
    }

    .status-bar {
      background-color: #1db954;
      padding: 10px;
      text-align: center;
      grid-column: span 2;
    }

    .sidebar {
      grid-area: sidebar;
      background-color: #2d2d2d;
      padding: 20px;
    }

    main {
      grid-area: main;
      padding: 20px;
    }

    .playlist-info {
      font-size: 1.2em;
      margin-bottom: 20px;
    }

    .song-list {
      display: grid;
      gap: 10px;
    }

    .song-item {
      border: 1px solid #333;
      background-color: #282828;
      padding: 10px;
      display: grid;
      grid-template-columns: 1fr 2fr 2fr 1fr;
      align-items: center;
    }

    .song-item div {
      padding: 8px;
    }

    .song-item:hover {
      background-color: #333;
    }

    footer a {
      color: #1db954;
      text-decoration: none;
      margin: 0 10px;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
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