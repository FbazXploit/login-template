<div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
  <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
      <li class="mr-3 flex-1">
          <a href="/dashboard" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white hover:border-pink-500">
              <i class="fas fa-home pr-0 md:pr-3 md:text-3xl @if ($active == 'dashboard') text-blue-600 @endif"></i><span class="pb-1 md:pb-0 text-xs md:text-base @if($active != 'dashboard') text-gray-600 md:text-gray-400 @endif block md:inline-block @if ($active == 'dashboard') text-white @endif">Dashboard</span>
          </a>
      </li>
      <div class="border-b-2 border-gray-400"></div>
  </ul>
  </div>