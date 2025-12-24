
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Teachers</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="w-full">
        <div class="w-11/12 mx-auto">
        <h1 class="font-bold text-2xl text-center ">All Teachers</h1>
    </div>
    <table class="border m-auto">
    <tr>
        <th class="p-2 border text-center font-bold">ID</th>
        <th class="p-2 border text-center font-bold">name</th>
        <th class="p-2 border text-center font-bold">PhoneNumber</th>
        <th class="p-2 border text-center font-bold">Image</th>
    </tr>
    @foreach ($teachers as $teacher )
    <tr>
        <td class="border gap-5 p-1 ">{{ $teacher->id}}</td>
        <td class="border gap-5 p-1 ">{{ $teacher->name}}</td>
        <td class="border gap-5 p-1 ">{{ $teacher->phoneNumber}}</td>
       @if (count($teacher->images)>0)
           <td>
            <img src="{{ 'storage/'.$teacher->images[0]->path }}" class="w-16 h-11" alt="">
           </td>
       @endif
    </tr>
        
    @endforeach
    </table>
    </div>
</body>
</html>