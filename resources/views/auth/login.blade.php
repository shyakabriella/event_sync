<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up Form</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<style>
    body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #528BA7; /* Dark blue background */
  }
</style>

<div class="container">
    <div class="signup-form">
        <h2>SIGN UP HERE!</h2>
        <form method="POST" action="{{ route('login') }}">
                        @csrf  
            <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" id="email" required>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" id="password" required>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!-- <div class="terms">
                <input type="checkbox" id="terms">
                <label for="terms">I've read and agree to Terms & Conditions</label>
            </div> -->
            <button type="submit">LOGIN</button>
        </form>
        <p>Already registered? <a href="/register">register here</a></p>
    </div>
    <div class="side-image">
        <img style="height:330px; position:relative; right:100px" src="images/sin.jpg" alt="Welcome Slide 1">
    </div>
</div>

<script src="scripts.js"></script>
</body>
</html>
