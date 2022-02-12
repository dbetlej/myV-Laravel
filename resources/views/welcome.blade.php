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
                    <svg version="1.1" id="Layer_1" class="heart-bg absolute top-1/2 left-1/2 z-0" width="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 489.292 489.292" style="enable-background:new 0 0 489.292 489.292;" xml:space="preserve">
                        <g id="XMLID_9_">
                            
                            <g id="XMLID_1562_">
                                <path style="fill:#ff5e80;" d="M481.646,162.772c0-73.89-59.9-133.79-133.79-133.79c-43.264,0-80.821,19.594-105.276,51.449    c-23.692-31.796-62.265-51.449-104.965-51.449C65.834,28.982,7.646,87.17,7.646,158.95c0,30.039,5.822,62.087,22.936,84.097l0,0    L244.646,458.23L443.42,258.337l0,0C467.812,234.102,481.646,199.873,481.646,162.772z"/>
                            </g><g id="XMLID_1602_">
                                <path style="fill:#ffb3c3;" d="M244.646,82.498c0,0,116.976,84.125,2.239,373.48L22.476,229.99l-14.83-65.396l20.421-77.871    L83.4,40.056l60.977-12.193l69.689,24.054L244.646,82.498z"/>
                            </g>
                            <g id="XMLID_1699_">
                                <polygon style="fill:#FFFFFF;" points="246.885,455.978 22.476,229.99 15.291,196.199 260.216,442.625   "/>
                            </g>
                            <g id="XMLID_514_" class="heart-border">
                                <path d="M244.645,469.074L48.201,271.479C17.566,242.97,0,204.022,0,164.594    C0,84.985,64.768,20.217,144.377,20.217c36.431,0,72.554,15.32,100.269,42.286c27.716-26.966,63.84-42.286,100.27-42.286    c79.609,0,144.376,64.768,144.376,144.377c0,39.428-17.566,78.377-48.2,106.885L244.645,469.074z M144.377,35.508    c-71.179,0-129.086,57.907-129.086,129.086c0,34.721,16.234,70.528,43.429,95.786l0.219,0.211l185.707,186.795l185.815-186.902    l0.111-0.104C457.766,235.124,474,199.316,474,164.594c0-71.179-57.907-129.086-129.085-129.086    c-34.701,0-69.206,15.722-94.668,43.135l-5.602,6.03l-5.602-6.03C213.583,51.23,179.078,35.508,144.377,35.508z"/>
                            </g>
                        </g>
                    </svg>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="heart-bg absolute top-1/2 left-1/2 z-0" width="100" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 2539.98 2539.98">
                        <g id="Warstwa_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"/>
                            <path class="fil0 str0" d="M-0.01 888c0,139.75 13.28,196.09 68.02,323.89 44.07,102.91 120.42,211.14 193.37,297.76 13.19,15.66 23.09,28.33 35.53,43.85 44.42,55.51 159.62,160.53 207.78,208.94 14.89,14.96 26.45,22.43 42.26,37.12l135.51 112.54c101.93,80.07 175.87,136.85 282.92,208.2l251.61 160.16c19.09,11.45 35.99,19.94 53,31.33l102.61 -61.1c182.4,-108.8 363.85,-234.82 528.57,-369.36l176.14 -156.25c38.86,-39.05 76.27,-62.87 124.6,-123.45 12.57,-15.75 25.21,-24.07 38.33,-41.04 81.51,-105.38 174.58,-205.63 231,-344.47 38.32,-94.33 62.78,-172.02 68.75,-254.38l0 -79.86c-3.06,-43.82 -11.13,-90.48 -24.8,-142.71 -49.03,-187.35 -171.66,-327.32 -334.45,-424.58 -80.94,-48.36 -225.58,-86.4 -340.24,-86.4 -182.19,0 -343.34,78.04 -467.53,187.31l-76.68 87.04c-10.62,13.21 -14.06,24.26 -26.3,33.23l-100.36 -117.92c-219.8,-217.32 -589.96,-251.89 -857.17,-75.63 -35.28,23.28 -64.76,48.51 -97.69,75.95 -39.55,32.96 -124.84,148.3 -144.67,197.63 -33.92,84.39 -70.11,165.5 -70.11,272.2z"/>
                        </g>
                    </svg> -->
                </div>
                @csrf
                <div class="form-group flex flex-col items-center absolute top-1/2 left-1/2 z-10">
                    @if (session('error'))
                        <div class="alert alert-success">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="form-input flex flex-row justify-around w-2/3 mb-2">
                        <input placeholder="{{__('valentine.lover_email')}}" name="email" type="email" class="w-1/2 v-input">
                        <input placeholder="{{__('valentine.valentine_cupid_name')}}" name="cupid_name" type="text" class="w-1/2 v-input" >
                    </div>
                    <textarea class="valentine-content w-3/4 mt-4" placeholder="{{__('valentine.valentine_content')}}" name="content" id="content"></textarea>
                    @if( !empty($v['valentine_token']) )
                        <div id="valentine-link" class="w-full flex flex-col items-center">
                            <!-- <a href="/valentine/{{ $v['valentine_token'] }}">Valentine link</a> -->
                            <input type="text" style="display: none;" id="url" value="/valentine/{{ $v['valentine_token'] }}">
                            <button id="copy-url" class="icon-btn mt-2 flex flex-row items-center" title="{{__('valentine.copy_btn')}}">
                                <span class="span-icon">{{__('valentine.copy_btn')}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                </svg>
                            </button>
                            <button id="share-url" class="icon-btn mt-2 flex flex-row items-center" title="{{__('valentine.share_btn')}}">
                                <span class="span-icon">{{__('valentine.share_btn')}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M568.9 143.5l-150.9-138.2C404.8-6.773 384 3.039 384 21.84V96C241.2 97.63 128 126.1 128 260.6c0 54.3 35.2 108.1 74.08 136.2c12.14 8.781 29.42-2.238 24.94-16.46C186.7 252.2 256 224 384 223.1v74.2c0 18.82 20.84 28.59 34.02 16.51l150.9-138.2C578.4 167.8 578.4 152.2 568.9 143.5zM416 384c-17.67 0-32 14.33-32 32v31.1l-320-.0013V128h32c17.67 0 32-14.32 32-32S113.7 64 96 64H64C28.65 64 0 92.65 0 128v319.1c0 35.34 28.65 64 64 64l320-.0013c35.35 0 64-28.66 64-64V416C448 398.3 433.7 384 416 384z"/>
                                </svg>
                            </button>
                        </div>
                    @else
                        <div class="w-full text-center flex flex-col items-center mt-4">
                            <span class="valentine-info">Brak pomysłu na życzenie?</span>
                            <button class="randomize-icon random-whishes icon-btn mt-2" title="{{__('valentine.random_wishes')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path style="fill:#500" d="M447.1 224c0-12.56-4.781-25.13-14.35-34.76l-174.9-174.9C249.1 4.786 236.5 0 223.1 0C211.4 0 198.9 4.786 189.2 14.35L14.35 189.2C4.783 198.9-.0011 211.4-.0011 223.1c0 12.56 4.785 25.17 14.35 34.8l174.9 174.9c9.625 9.562 22.19 14.35 34.75 14.35s25.13-4.783 34.75-14.35l174.9-174.9C443.2 249.1 447.1 236.6 447.1 224zM96 248c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1S120 210.8 120 224S109.3 248 96 248zM224 376c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1s23.1 10.75 23.1 23.1S237.3 376 224 376zM224 248c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1S248 210.8 248 224S237.3 248 224 248zM224 120c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1s23.1 10.75 23.1 23.1S237.3 120 224 120zM352 248c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1s23.1 10.75 23.1 23.1S365.3 248 352 248zM591.1 192l-118.7 0c4.418 10.27 6.604 21.25 6.604 32.23c0 20.7-7.865 41.38-23.63 57.14l-136.2 136.2v46.37C320 490.5 341.5 512 368 512h223.1c26.5 0 47.1-21.5 47.1-47.1V240C639.1 213.5 618.5 192 591.1 192zM479.1 376c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1s23.1 10.75 23.1 23.1S493.2 376 479.1 376z"/>
                                </svg>
                            </button>
                        </div>
                    @endif
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
        <div id="shadow" class="absolute top-0 left-0 z-20 w-screen h-screen" style="display: none;"></div>
        <div id="share-modal" class="modal absolute top-1/2 left-1/2 text-center z-30" style="display: none;">
            <div class="modal-content">
                test
            </div>
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
