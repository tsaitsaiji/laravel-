<!-- resources/views/admin/reservations.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">預約管理</h1>
    <table class="min-w-full">
        <thead>
        <tr>
            <th class="border p-2">#</th>
            <th class="border p-2">姓名</th>
            <th class="border p-2">日期</th>
            <th class="border p-2">時間</th>
            <th class="border p-2">手機號碼</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
        <tr>
            <td class="border p-2">{{ $reservation->id }}</td>
            <td class="border p-2">{{ $reservation->name }}</td>
            <td class="border p-2">{{ $reservation->date }}</td>
            <td class="border p-2">{{ $reservation->time }}</td>
            <td class="border p-2">{{ $reservation->phone }}</td>
        </tr>
    @endforeach
        </tbody>
    </table>
</div>

</body>
</html>