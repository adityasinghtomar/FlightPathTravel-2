<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Terms and Conditions</title>
</head>
<body>
    <div class="container bg-light">
        <h1 class="display-6 text-center text-muted">Terms and Conditions</h1>
        <div class="text-strat">
        @if ($termsAndConditions)
            <p>{!! $termsAndConditions !!}</p>
        @else
            <p>No terms and conditions provided.</p>
        @endif

        <h4 class="text-start"><u> Cancellation Information :</u></h4>
        @if ($cancellation)
            @foreach ($cancellation as $key => $data)
                <div>
                   <strong>StartDate :</strong>  {{$data['StartDate'] ?? ''}} <br/> 
                   <strong>EndDate :</strong>  {{$data['EndDate'] ?? ''}} <br/>
                   <strong>ChargeType :</strong>  {{$data['ChargeType'] ?? ''}} <br/>
                   <strong>ChargeAmount :</strong>  {{$data['ChargeAmount'] ?? ''}} <br/>
                   <strong>Currency :</strong>  {{$data['Currency'] ?? ''}} <br/>

                    <p>
                    {{$info[0] ?? ''}}
                    </p>
                </div>
            @endforeach
        @endif
        </div>
       
    </div>
</body>
</html>