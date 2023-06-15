<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>  @yield('title')  </title>

    
</head>
<body>

    <!-- -->

    <x-app-layout>    
        <div class="py-12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        
                    <main>
                        @yield('main')
                    </main>
                        
                    </div>
                </div>
            </div>
    </x-app-layout>
        
</body>
</html>