<div>

    @livewire('create-post')
    <body class="bg-gray-100 p-6">
        <div class="max-w-screen-md mx-auto bg-white p-6 rounded-lg shadow-lg">
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="p-3 font-bold uppercase bg-gray-100 text-gray-600 border border-gray-300">ID</th>
                        <th class="p-3 font-bold uppercase bg-gray-100 text-gray-600 border border-gray-300">Titulo</th>
                        <th class="p-3 font-bold uppercase bg-gray-100 text-gray-600 border border-gray-300">Content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="p-3 border border-gray-300">{{$post->id}}</td>
                            <td class="p-3 border border-gray-300">{{$post->title }}</td>
                            <td class="p-3 border border-gray-300">{{$post->content }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

    
</div>
