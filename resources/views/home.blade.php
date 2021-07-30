@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">KBCF Council Nomination 2022</h1>
        <p class="lead">"Therefore, brethren, select from among you servant-leaders of good reputation, full of the Spirit and of wisdom, whom we may put in charge of this task." - Acts 6:3</p>
        <hr class="my-4">
        <p>QUALIFICATIONS:</p>
            <ol>
                <li>The minimum age requirement for a Church Council member shall be 28 years of age. He must also have been a regular member of <br>Kamuning Bible Christian Fellowship (KBCF) for a minimum of five (5) years. </li>
                <li>The Church Council member must evidence the qualifications for elders and/or deacons as set forth in 1 Timothy 3: 3-13 and Titus 1:5-9.</li>
                <li>The Church Council member must not be a salaried employee of KBCF.</li>
                <li>He must be a member of the KBCF Core of Leaders. </li>
            </ol>
        <br>
        <hr>
        <p>reference: KBCF Laws Article VI, Section 3.</p>
        <a class="btn btn-outline-primary btn-lg" href="{{ route('suilogin') }}" role="button">Nominate now</a>
    </div>
</div>




    
@endsection

