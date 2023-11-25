     <div class="playlist-info">
        <h2>Now Playing</h2>
        <p>Playlist Name: K-Drama OST</p>
      </div>     
        <div class="song-list">
        <div class="song-item">
            <div>Serial No</div>
            <div>Song Title</div>
            <div>Artist Name</div>
            <div>Duration</div>
            </div>

            @foreach($songs as $song)
            <!-- Song 1 -->
            <div class="song-item">
                <div>1</div>
                <div>{{ $song->title }}</div>
                <div>{{ $song->artist }}</div>
                <div>3:30</div>
            </div>
            @endforeach

            <!-- <div class="song-item">
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
            </div> -->
        </div>