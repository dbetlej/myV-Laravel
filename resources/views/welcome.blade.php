<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Make Your Valentine</title>
        <link href="/css/app.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div class="valentine-container"> 
            <span class="text logo"><a href="/">MY Valentine</a></span>
            <form class="heart-form text-center" id="valentine-form" action="/valentine" method="POST">
                @csrf
                <div class="form-group flex flex-col items-center">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach

                    <div class="form-input flex flex-row justify-around w-full mb-4">
                        <input placeholder="{{__('valentine.lover_email')}}" name="email" type="email" class="w-1/3 v-input @error('email') invalid @enderror">
                        <input placeholder="{{__('valentine.valentine_cupid_name')}}" name="cupid_name" type="text" class="w-1/3 v-input @error('cupid_name') invalid @enderror" >
                    </div>
                    <textarea class="valentine-content v-input w-3/4 mt-4" placeholder="{{__('valentine.valentine_content')}}" name="content" id="content"></textarea>
                    @if( !empty($v['valentine_token']) )
                        <span id="valentine-link">
                            <a href="/valentine/{{ $v['valentine_token'] }}">Valentine link</a>
                            <input type="text" style="display: none;" id="url" value="/valentine/{{ $v['valentine_token'] }}">
                            <button id="copy-url">Kopiuj link</button>
                            <button id="share-url">Udostępnij</button>
                        </span>
                    @endif
                    <div class="w-full text-center flex flex-col">
                        <span>Nie masz pomysłu na życzenia?</span>
                        <button class="random-whishes">Losuj życzenia</button>
                    </div>
                </div>

                <button type="button" class="send-valentine-btn mt-4 text-center">
                    <span class="send-valentine absolute top-1/2 left-1/2">
                        {{__('valentine.send_valentine')}}
                    </span>
                    <span class="send-valentine-after absolute">
                        {{__('valentine.sended_valentine')}}
                    </span>
                </button>

            </form>
        </div>


        <svg xmlns:xlink="http://www.w3.org/1999/xlink" id="canvas">
            <defs>
                <g id="heart">
                <g>
                    <g>
                    <path class="o_heart" d="M102.7,12.4L102.7,12.4C90.5,0.2,71.3-1,57.7,8.8c-13.6-9.9-32.9-8.7-45.2,3.5l0,0
                                            c-13.6,13.6-13.6,35.8,0,49.3L48.8,98c1.8,1.8,4,2.9,6.3,3.3c3.9,0.9,8.2-0.1,11.2-3.2l36.3-36.3C116.2,48.2,116.2,26,102.7,12.4
                                            z"/>
                    </g>
                </g>
                <g>
                    <g>
                    <path class="i_heart" d="M74.7,34L74.7,34c-4.6-4.6-11.9-5.1-17.1-1.4c-5.2-3.8-12.5-3.3-17.1,1.3c-5.1,5.1-5.1,13.6,0,18.7
                                            l13.8,13.8c0.7,0.7,1.5,1.1,2.4,1.3c1.5,0.3,3.1-0.1,4.2-1.2l13.8-13.8C79.9,47.6,79.9,39.2,74.7,34z"/>
                    </g>
                </g>
                </g>
            </defs>
        </svg>
        <footer class="absolute bottom-0 w-full text-center">Created & designed for humans by Kamil Langer & Dominik Betlej</footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://d3js.org/d3.v7.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
