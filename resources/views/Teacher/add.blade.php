<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adding Teacher</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="h-screen w-full justify-center flex items-center ">
        <div class=" flex flex-col gap-5 p-5 border w-8/12">
            <h1 class="text-green-600 text-center text-4xl font-bold">Add Teachers</h1>
            <form action="{{ URL('createTeacher ') }}" method="post" enctype="multipart/form-data" class="flex flex-col gap-3">
                @csrf
                <input type="text" placeholder="Name" name="name" class="w-full py-2 border rounded-md focus:outline-0 ">
                <input type="text" placeholder="Phone Number" name="phoneNumber" class="w-full py-2 border rounded-md focus:outline-0 ">
                <select id="" name="user_id" class="w-full py-2 border rounded-md focus:outline-0 ">
                   @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>   
                   @endforeach
                </select>
                <input type="file" accept="image/*" name="image" class="py-2 w-full border rounded-md">
                <input type="submit" value="Add" class="w-fit bg-green-600 text-white py-1.5 px-5 rounded-xs">
            </form>
        </div>
    </div>
</body>
</html>
