    <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="/">
                    <span class="text-xl pl-2 font-extrabold"><i class="fas fa-sign-in-alt text-white text-3xl pr-1"></i> FBAZ LOGIN</span>
                </a>
            </div>

            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end md:right-0 md:absolute">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none">Hello, {{ auth()->user()->name }} <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                            <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                  <a href="/dashboard/{{ auth()->user()->id }}/edit" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-user-edit fa-fw"></i> Edit</a>
                              <div class="border-b-2 border-gray-400"></div>
                              <a href="/password/{{ auth()->user()->id }}/edit" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-key fa-fw"></i> Pass</a>
                              <div class="border-b-2 border-gray-400"></div>
                                <form action="/logout" method="post">
                                  @csrf
                                  <button type="submit" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</button>
                              </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>