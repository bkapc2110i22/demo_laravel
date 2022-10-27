<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: DejaVu Sans, sans-serif;
    }


    table td,
    table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #ddd;
    }

    table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
    </style>
</head>

<body>
    <h1>CHI TIẾT ĐƠN HÀNG</h1>
    <P>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, quasi mollitia magni odio natus quibusdam
        exercitationem reiciendis nisi nobis cumque voluptatum quod, atque veritatis doloribus est modi debitis dolores
        corporis.</P>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>Tên SP</th>
                <th>Giá mua</th>
                <th>Số luọng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->details123 as $detail)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>
                    <img src="{{ url('uploads') }}/{{ $detail->prod->image }}" width="50">
                </td>
                <td>{{ $detail->prod->name }}</td>
                <td>{{ $detail->price }}</td>
                <td>{{ $detail->quantity }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>