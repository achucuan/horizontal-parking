<ul>
    @foreach( $carPoolMembers as $key => $value )
        <li>{{$key}}</li>
        <ul>
            @foreach( $value as $member)
                <li>{{$member}}</li>
            @endforeach
        </ul>
    @endforeach
</ul>