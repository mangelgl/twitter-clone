<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../public/favicon-twitter-clone.ico" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Twitter 🐦</title>
</head>
<body class="text-white">
    <main class="w-screen h-screen flex justify-center bg-slate-900">
        <section class="w-1/2 h-screen">
            <div class="w-full h-1/6 border-x-2 border-slate-300 flex flex-row">
                <div class="w-20 h-fit flex justify-center mt-4">
                    <img class="rounded-full w-12 h-12 object-contain overflow-hidden" src="{{$posts[0]->avatar_url}}" alt="Foto de perfil de usuario">
                </div>
                <div class="flex flex-col grow mt-4">
                    <form class="h-full" action="#" method="POST">
                        <div class="h-full">
                            <textarea class="w-full h-4/6 bg-slate-900 resize-none" name="content" id="" cols="30" rows="9" placeholder="¡¿Qué está pasando?!"></textarea>
                            <button class="w-1/6 h-9 mr-2 float-right bg-blue-500 rounded-full" type="submit">Postear</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Posts -->
            <div class="w-full h-fit flex flex-col border-x-2 border-slate-300 overflow-y-auto">
                <!-- Post -->
                @foreach ($posts as $post)
                    <div class="w-full h-fit border-t-2 border-slate-400/25 last:border-b-2 p-3">
                        <!-- Foto de perfil y usuario -->
                        <div class="w-full flex flex-row mb-4">
                            <div class="w-fit mr-4">
                                <img class="rounded-full w-12 h-12 object-contain overflow-hidden" src="{{$post->avatar_url}}" alt="Foto de perfil de usuario">
                            </div>
                            <div class="w-fit">
                                <a href=""><h4>{{$post->user_full_name}}</h4></a>
                                <p class="text-white/60">{{'@' . $post->username}}</p>
                            </div>
                        </div>
                        <!-- Contenido del post -->
                        <div class="w-full mb-4">
                            <p class="font-normal mt-2 mb-2">{{$post->content}}</p>
                        </div>
                        <!-- Buttons -->
                        <div class="flex flex-row">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart mr-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                </svg>
                            </button>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2 mr-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
                                </svg>
                            </button>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-repeat" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 12v-3a3 3 0 0 1 3 -3h13m-3 -3l3 3l-3 3"></path>
                                    <path d="M20 12v3a3 3 0 0 1 -3 3h-13m3 3l-3 -3l3 -3"></path>
                                </svg>
                            </button>
                        </div>                        
                    </div>
                @endforeach
                <!-- End Post -->
            </div>
        </section>
    </main>
</body>
</html>