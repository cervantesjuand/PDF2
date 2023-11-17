<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="/dist/tailwind.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body class="bg-gray-300">
    <header>
        <nav class="mx-auto absolute flex justify-between top-0 w-full h-[80px] rounded-xl border border-white/80 bg-white bg-opacity-80 py-2 px-4 text-white shadow-md backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
            <div>
                <h1 class="ml-[290px] mt-1 text-black flex items-center text-2xl font-bold">Apartado de Usuarios</h1>
            </div>
            <ul class="flex items-center gap-6 mr-6">
                <i class="bi bi-bell-fill text-[1.6rem] text-black cursor-pointer"></i>
                <p class="text-black text-[1.3rem] font-bold cursor-pointer">Juan David</p>
                <div class="w-[50px] h-[50px] bg-black rounded-[25px] cursor-pointer">
                </div>
            </ul>
        </nav>
    </header>
   <main>
        <span
        class=""
        onclick="openSidebar()"
        >
        <div class="fixed top-0 bottom-0 w-[250px] flex flex-col items-center bg-blue-600">
            <div class="mt-[30px] w-[80%] pt-2 pb-2 bg-[#176FF3] flex items-center gap-4 rounded-lg">
              <div class="ml-5 w-[40px] h-[40px] bg-black"></div>
                <div>
                  <h2 class="font-bold text-white">Fintory</h2>
                  <p class="text-white font-semibold">Workspace</p>
                </div>
            </div>
            <ul class="mt-10 w-[100%] flex flex-col items-center text-white">
              <div class="flex items-center w-[80%] pt-3 pb-3 bg-[#0256D6] gap-4 rounded-lg mb-1 cursor-pointer">
                <i class="bi bi-house-door-fill ml-5 text-[1.5rem]"></i>
                <li class="font-bold text-[1.1rem]">Dashboard</li>
              </div>
              <div class="flex items-center w-[80%] pt-3 pb-3  gap-4 rounded-lg cursor-pointer hover:bg-[#0256D6]">
                <i class="bi bi-chat-left-dots-fill ml-5 text-[1.5rem]"></i>
                <li class="font-bold text-[1.1rem]">Chat</li>
              </div>
              <div class="flex items-center w-[80%] pt-3 pb-3  gap-4 rounded-lg cursor-pointer hover:bg-[#0256D6]">
                <i class="bi bi-house-door-fill ml-5 text-[1.5rem]"></i>
                <li class="font-bold text-[1.1rem]">Teams</li>
              </div>
              <div class="flex items-center w-[80%] pt-3 pb-3  gap-4 rounded-lg cursor-pointer hover:bg-[#0256D6]">
                <i class="bi bi-list-task ml-5 text-[1.5rem]"></i>
                <li class="font-bold text-[1.1rem]">Tasks</li>
              </div>
              <div class="flex items-center w-[80%] pt-3 pb-3  gap-4 rounded-lg cursor-pointer hover:bg-[#0256D6]">
                <i class="bi bi-dice-1-fill ml-5 text-[1.5rem]"></i>
                <li class="font-bold text-[1.1rem]">Game</li>
              </div>
              <div class="flex items-center w-[80%] pt-3 pb-3  gap-4 rounded-lg cursor-pointer hover:bg-[#0256D6]">
                <i class="bi bi-bar-chart-fill ml-5 text-[1.5rem]"></i>
                <li class="font-bold text-[1.1rem]">Analytics</li>
              </div>
            </ul>
            <div class="botto">

            </div>
        </div>
   </main>
  </body>
</html>