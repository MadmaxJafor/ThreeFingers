<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <head>
        <h2>Music</h>
		<title>Single Song Picture Tutorial</title>
		<script type="text/javascript" src="app.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/style_1.css."/>
	</head>

    <div id="player">
        <div id="player-art">
            <div id="amplitude-album-art"></div>
        </div>
        <div id="player-top">
            <div id="amplitude-play-pause" class="amplitude-paused"></div>
            <div id="track-info-container">
                <span id="amplitude-now-playing-title">Song Name</span> <span id="slash">-</span><br><span id="amplitude-now-playing-artist">Artist</span>
            </div>
            <div id="time-info-container">
                <span id="amplitude-current-time">0:00</span> / <span id="amplitude-audio-duration">0:00</span>
            </div>
            <div id="amplitude-song-slider">
                <div id="amplitude-track-progress"></div>
            </div>
        </div>
        <div id="player-playlist">
            <div class="playlist-song" id="song-1">
                <div class="playlist-song-album-art">
                    <img src="assets/img/photo1.jpg">
                </div>
                <div class="playlist-song-information">
                    Song: Song from the Styx<br>
                    Artist: Jake Jendusa<br>
                    Album: In Search Of
                </div>
                <div class="playlist-audio-controls">
                    <div class="amplitude-play-playlist" amplitude-song-id="1"></div>
                </div>
            </div>
            <div class="playlist-song" id="song-2">
                <div class="playlist-song-album-art">
                    <img src="assets/img/photo2.jpg">
                </div>
                <div class="playlist-song-information">
                    Song: Man with the Keys<br>
                    Artist: Jake Jendusa<br>
                    Album: In Search Of
                </div>
                <div class="playlist-audio-controls">
                    <div class="amplitude-play-playlist" amplitude-song-id="2"></div>
                </div>
            </div>
            <div class="playlist-song" id="song-3">
                <div class="playlist-song-album-art">
                    <img src="album-art/jendusaep.jpg">
                </div>
                <div class="playlist-song-information">
                    Song: Porch Stomp Blues<br>
                    Artist: Jake Jendusa<br>
                    Album: In Search Of EP
                </div>
                <div class="playlist-audio-controls">
                    <div class="amplitude-play-playlist" amplitude-song-id="3"></div>
                </div>
            </div>
        </div>
        <div id="player-bottom">
            <div class="control" onclick="toggle_playlist()">
                <img src="../images/yellow-playlist.png" /> List
            </div>
            <div class="control" id="amplitude-previous">
                <img src="../images/yellow-previous.png" /> Prev
            </div>
            <div class="control" id="amplitude-next">
                Next <img src="../images/yellow-next.png" />
            </div>
            <div class="control" id="amplitude-shuffle">
                Mix <img id="shuffle-on-image" src="../images/yellow-shuffle-on.png" /><img id="shuffle-off-image" src="../images/yellow-shuffle.png" />
            </div>
        </div>
    </div>
    <script type="text/javascript">
        amplitude_config = {
            'amplitude_shuffle_callback': 'change_shuffle_image'
        }
        var open_playlist = false;

        function toggle_playlist() {
            if (open_playlist) {
                document.getElementById('player-playlist').style.display = 'none';
                open_playlist = false;
            } else {
                document.getElementById('player-playlist').style.display = 'block';
                open_playlist = true;
            }
        }

        function change_shuffle_image() {
            if (amplitude_shuffle) {
                document.getElementById('shuffle-on-image').style.display = 'inline-block';
                document.getElementById('shuffle-off-image').style.display = 'none';
            } else {
                document.getElementById('shuffle-on-image').style.display = 'none';
                document.getElementById('shuffle-off-image').style.display = 'inline-block';
            }
        }
    </script>
    <div id="amplitude-playlist">
        <audio id="1" amplitude-artist="Jake Jendusa" amplitude-title="Song from the Styx" amplitude-album="In Search Of" amplitude-audio-type="song" amplitude-album-art-url="album-art/jendusa.jpg" amplitude-visual-element-id="song-1">
            <source src="songs/In%20Search%20Of/01%20Song%20from%20the%20Styx.mp3" type="audio/mp3" />
        </audio>
        <audio id="2" amplitude-artist="Jake Jendusa" amplitude-title="Man with the Keys" amplitude-album="In Search Of" amplitude-audio-type="song" amplitude-album-art-url="album-art/jendusa.jpg" amplitude-visual-element-id="song-2" preload="none">
            <source src="songs/In%20Search%20Of/02%20Man%20with%20the%20Keys.mp3" type="audio/mp3" />
        </audio>
        <audio id="3" amplitude-artist="Jake Jendusa" amplitude-title="Porch Stomp Blues" amplitude-album="In Search Of EP" amplitude-album-art-url="album-art/jendusaep.jpg" amplitude-audio-type="song" amplitude-visual-element-id="song-3" preload="none">
            <source src="songs/In%20Search%20Of%20EP/03%20Porch%20Stomp%20Blues.mp3" type="audio/mp3" />
        </audio>
    </div>

</html>