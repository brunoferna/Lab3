<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fan Rides</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }


        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }
        table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }

            tr:nth-child(even) {
              background-color: #dddddd;
            }
    </style>
    <body>
      <div class="position-ref full-height">
        <div class="top-right links">
          <a href="/">Home</a>
        </div>
      <div>
      <div class="content">
          <h2>Welcome back, {{$user->fname}}</h2>
          <img src="{{ asset('/assets/logo.png') }}">
          <div class="title m-b-md">
              Fan Rides
          </div>
      </div>
      <center><h3>Your Scheduled Rides<h3></center>
      <table>
          <tr>
            <th>Origin</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Time</th>
            <th>Has Car?</th>
            <th>Number of Seats?</th>
            <th>Team<th>
          </tr>
          <tr>
            <th>{{$user->origin}}</th>
            <th>{{$user->dest}}</th>
            <th>{{$user->ddate}}</th>
            <th>{{$user->dtime}}</th>
            <th>{{$user->hascar}}</th>
            <th>{{$user->seats}}</th>
            <th>{{$user->team}}</th>
          </tr>
      <table>
      </div>

    </body>
