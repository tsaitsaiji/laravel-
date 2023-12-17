<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-4 text-center mt-20">
    <form action="{{ route('makeReservation') }}" method="post" class="max-w-md mx-auto">
        @csrf
        <div class="mb-4">
            <label for="name">姓名：</label>
            <input type="text" name="name" id="name" class="border p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="date">日期：</label>
            <input type="date" name="date" id="date" class="border p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="time">時間：</label>
            <input type="time" name="time" id="time" class="border p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="phone">手機號碼：</label>
            <input type="tel" name="phone" id="phone" class="border p-2 w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 w-full">確認</button>
    </form>

    @if(session('reservation_success'))
        <div class="mt-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md mx-auto max-w-md" role="alert">
            <strong class="font-bold text-xl">預約成功！</strong>
            <span class="block sm:inline">{{ session('reservation_success') }}</span>
        </div>
    @endif
</div>

</body>
</html>