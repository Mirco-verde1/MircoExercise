<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
   @foreach ($books as $book)
   <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
    <div class="lg:flex items-center justify-center w-full">
        <div tabindex="0" aria-label="card 1" class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
            <div class="flex items-center border-b border-gray-200 pb-6">
                <img src="https://images.myguide-cdn.com/berlin/events/large/irving-penn-centennial-475110.jpg" alt="coin avatar" class="w-12 h-12 rounded-full" />
                <div class="flex items-start justify-between w-full">
                    <div class="pl-3 w-full">
                        <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">Autore</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">{{$book->author->name}}</p>
                    </div>
                    <div role="img" aria-label="bookmark">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/list1-svg1.svg" alt="bookmark" />
                    </div>
                </div>
                <div class="flex items-start justify-between w-full">
                    <div class="pl-3 w-full">
                        <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">Titolo</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">{{$book->title}}</p>
                    </div>
                </div>
            </div>

            <div class="px-2">
                <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800 mt-10">Descrizione</p>
                <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">{{$book->description}}</p>
                <div tabindex="0" class="focus:outline-none flex">
                    <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">{{$book->category}}</div>
                </div>
                <div role="img" aria-label="bookmark" class="mt-10">
                    <a href="{{route('dettagli-libro',$book->id)}}">Dettagli</a>
                </div>
            </div>
        </div>

</div>
</div>
   @endforeach

    </body>
</html>
