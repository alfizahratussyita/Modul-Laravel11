<div class="music-list">
    <ul class="list-group">
        @foreach ($musics as $music)
            <li class="list-group-item">{{ $music }}</li>
        @endforeach
    </ul>
</div>
