<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Make Your Valentine</title>
        <link href="/css/app.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="/favicon.png"/>
    </head>
    <body>
        <div class="valentine-container"> 
            <span class="text logo"><a href="/">MY Valentine</a></span>
            <form class="heart-form text-center" id="valentine-form" action="/valentine" method="POST">
                <div class="svg-bg relative">
                    <!-- <svg class="heart-bg absolute top-1/2 left-1/2 z-0" viewBox="0 0 512 512" width="100" title="heart">
                        <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="heart-bg absolute top-1/2 left-1/2 z-0" width="100" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 2539.98 2539.98">
                        <g id="Warstwa_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"/>
                            <path class="fil0 str0" d="M-0.01 888c0,139.75 13.28,196.09 68.02,323.89 44.07,102.91 120.42,211.14 193.37,297.76 13.19,15.66 23.09,28.33 35.53,43.85 44.42,55.51 159.62,160.53 207.78,208.94 14.89,14.96 26.45,22.43 42.26,37.12l135.51 112.54c101.93,80.07 175.87,136.85 282.92,208.2l251.61 160.16c19.09,11.45 35.99,19.94 53,31.33l102.61 -61.1c182.4,-108.8 363.85,-234.82 528.57,-369.36l176.14 -156.25c38.86,-39.05 76.27,-62.87 124.6,-123.45 12.57,-15.75 25.21,-24.07 38.33,-41.04 81.51,-105.38 174.58,-205.63 231,-344.47 38.32,-94.33 62.78,-172.02 68.75,-254.38l0 -79.86c-3.06,-43.82 -11.13,-90.48 -24.8,-142.71 -49.03,-187.35 -171.66,-327.32 -334.45,-424.58 -80.94,-48.36 -225.58,-86.4 -340.24,-86.4 -182.19,0 -343.34,78.04 -467.53,187.31l-76.68 87.04c-10.62,13.21 -14.06,24.26 -26.3,33.23l-100.36 -117.92c-219.8,-217.32 -589.96,-251.89 -857.17,-75.63 -35.28,23.28 -64.76,48.51 -97.69,75.95 -39.55,32.96 -124.84,148.3 -144.67,197.63 -33.92,84.39 -70.11,165.5 -70.11,272.2z"/>
                        </g>
                    </svg>
                </div>
                @csrf
                <div class="form-group flex flex-col items-center absolute top-1/2 left-1/2 z-10">
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

                <button type="button" class="send-valentine-btn mt-4 text-center z-20">
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
