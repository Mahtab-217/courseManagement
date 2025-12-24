
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
        <h1>All Teachers</h1>
    </div>
    <table class="border">
    <tr>
        <th class="p-2 border text-center">ID</th>
        <th class="p-2 border text-center">name</th>
        <th class="p-2 border text-center">PhoneNumber</th>
        <th class="p-2 border text-center">Image</th>
    </tr>
    @foreach ($teachers as $teacher )
    <tr>
        <td class="border">{{ $teacher->id}}</td>
        <td class="border">{{ $teacher->name}}</td>
        <td class="border">{{ $teacher->phoneNumber}}</td>
       @if (count($teacher->image->path))
           <td>
            <img src="{{ 'asset'.$teacher->images->path }}" alt="">
           </td>
       @endif
    </tr>
        
    @endforeach
    </table>
    </div>
</body>
</html>