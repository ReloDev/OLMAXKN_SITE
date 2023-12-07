@extends('dashyout')
@section('content')

<style>
    embed {
      border: 1px solid #ccc;
      display: block;
      margin: 0 auto;
    }
    </style>
    
</head>
<body class="mt-5 ms-5">
<embed src="{{ asset('storage/'.$recrutement->cv) }}" type="application/pdf" width="60%" height="600px" />


@endsection