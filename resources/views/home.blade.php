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
    <div class="w-screen h-screen flex justify-center bg-slate-900">
        <div class="w-1/2 h-screen"> <!-- mt-16 -->
            <!-- Botones -->
            <div class="w-full h-2/6 flex justify-center items-center"> <!-- mt-16 -->
                <!-- Sign in -->
                <button onclick="window.location='{{url('login')}}'" type="button" class="text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                    </svg>
                    Iniciar sesión con Github
                </button>
                <!-- Sign out -->
                <button onclick="window.location='{{url('profile.destroy')}}'" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cerrar sesión</button>
            </div>
            <!-- Posts -->
            <div class="w-full h-4/6 flex flex-col border-x-2 border-slate-300 overflow-y-auto"> <!-- mt-28 -->
                @foreach ($posts as $post)
                    <div class="w-full h-fit border-t-2 border-slate-400/25 last:border-b-2 p-3">
                        <a href="#">
                            <h4><?= $post['user-name'] ?></h4>
                        </a>
                        <p class="font-normal mt-2 mb-2"><?= $post['content'] ?></p>
                        <!-- Buttons -->
                        <div class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart mr-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2 mr-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-repeat" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 12v-3a3 3 0 0 1 3 -3h13m-3 -3l3 3l-3 3"></path>
                                <path d="M20 12v3a3 3 0 0 1 -3 3h-13m3 3l-3 -3l3 -3"></path>
                            </svg>
                        </div>                        
                    </div>
                @endforeach
                <!--
                    TODO: AUTENTICACIÓN <br>
                    La autenticación en Laravel está formada por "Guards"(guardias) y "Providers"(proveedores).
                    - Los guardias / guards definen como los usuarios se autentican para cada petición. Por ejemplo, Laravel incluye un guardia de sesión el cual mantiene el estado usando el almacenamiento de sesión y las cookies (session storage and cookies)
                    - Los proveedores / providers definen como se recuperan los usuarios de su almacenamiento persistente. Laravel incluye soporte para recuperar los usuarios usando <a href="https://laravel.com/docs/10.x/eloquent">Eloquent</a> y el constructor de consultas de bases de datos. Sin embargo, eres libre de definir proveedores adicionales según sea necesario para tu aplicación
                    
                -->
            </div>
        </div>
    </div>
</body>
</html>