<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 13px;
            color: #333;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border: 1px solid #002761;
            border-spacing: 1rem;
            table-layout: auto;
            empty-cells: hide;
            border-radius: 1rem;
            border-collapse: separate;
        }
        th, td {
            
            padding: 6px;
        }
        th {
            border: 1px solid #002761;
            border-radius: 0.5rem;
            padding: 1rem;
        }
        caption {
            font-size: 20px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div>
        <table>
            <caption class="table-caption">Informe Transportes ACME S.A.</caption>
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Conductor</th>
                    <th>Propietario</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->license_plate }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>{{ $item->owner_first_name }}</td>
                        <td>{{ $item->driver_first_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>
