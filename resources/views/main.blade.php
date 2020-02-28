@extends('layout')
@section('content')

    <div id="wrapper">
        <form class="fromLink" action="#" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h2>Enter your 'long' link  </h2>
            <input type="text" name="linkInput" id="" value="" required>
            <input type="submit" name="submitLink" value="shorten">
            <div class="resultShorten">
                <a href=""></a>
            </div>
        </form>
        <div id="resentShorten">

        </div>
    </div>

@endsection
