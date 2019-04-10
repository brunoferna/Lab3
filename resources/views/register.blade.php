<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script type="text/javascript" src="{{ URL::asset('/js/client.js') }}"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fan Rides</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      </head>
  <body bgcolor="#fff" text="#636b6f">
    <center>

      <br/> <br />

      <img src="{{ asset('/assets/logo.png') }}">

      <br /><br /><br />

      <form name="new" action="/registerUser" onsubmit="return validateForm()" method="post">
        @csrf
        <table align='left'>
        <tr><strong>Please fill out the following fields:</strong></tr><br>
        <tr>
          <label for="fname"> First Name:</label><input type="text" name="fname"/>
        </tr><br>
        <tr>
          <label for="lname"> Last Name: </label><input type="text" name="lname"/>
        </tr><br>
        <tr>
          <label for="email"> Email: </label><input type="text" name ="email"/>
        </tr><br>
        <tr>
          <label for="pass"> Password: </label><input type="password" name="pass"/>
        </tr><br>
        <tr>
          <br><strong>Please enter your trip information: </strong>
        </tr><br>
        <tr>
          <label for="origin">Origin:</label><input type="text" name="origin"/>
        </tr>
        <tr>
          <label for="dest">Destination:</label><input type="text" name="dest" />
        </tr><br>
        <tr>
          <label for="ddate">Departure Date:</label><input type="date" name="ddate" />
        </tr>
        <tr>
          <label for="dtime">Departure Time:</label><input type="time" name="dtime" />
        </tr><br>
        <tr>
          <label for="team">Team:</label><input type="text" name="team" />
        </tr><br>

        <p>Do you have a car: <p>
        <tr>
          <input type="radio" name="hascar" value="Yes" /> <label for="hascar">Yes</label>
        </tr><br>
        <tr>
          <input type="radio" name="hascar" value="No" /> <label for="hascar">No</label>
        </tr><br>
        <tr><br />
          <strong>If you have a car, how many seats can you offer:</strong>
        <br /> </tr>
        <tr>
          <input type="number" name="seats" />
        </tr>
        <tr>
          <input type="submit" value="Submit" />
        </tr>
        </table>

      </form>

      <br />

      <a href="/"> Return to Homepage </a>

    </center>
  </body>
</html>
