<html lang="en">

<head>
    <style>
        p {
            font-size: 40px;
            text-decoration-line: underline;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid rgb(143, 19, 19);
            border-radius: 2px;
        }

        input[type=text]:focus {
            background-color: lightblue;
        }
    </style>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5">
        <table class="table">
        </div>
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @if($data['student'])
            @foreach($data['student'] as $key=> $row)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->address }}</td>
                <td>{{ $row->email}}</td>
                <td>{{ $row->contact}}</td>
                <td>{{ $row->gender}}</td>
                <td>
                    <a href="" class="btn btn-success btn-sm">update</a>
                    <a href="{{ url('delete/'.$row->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger btn-sm">delete</a>
                </td>
            </tr>
            @endforeach
            @else


            @endif
        </tbody>
    </table>








</body>
<script src=" {{ asset('assets/js/bootstrap.min.js') }}"></script>

</html>
