<!-- <a href="https://colorlib.com/wp/templates/"><img src="https://colorlib.com/wp/wp-content/uploads/sites/2/colorlib-push-logo.png" alt="Colorlib logo"></a> -->
<h1 style="text-align:center;">(The-Developers) One new mail</h1>
<h3 style="text-align:center;">Hello, Admin, you just received a mail from a potential client via the email field</h3>
<h3>Client information:</h3>
<p class='text-black'>Client Name: <strong> {{ $data['name'] }}</strong></p>
<p class='text-black'>Client Email: <strong> {{ $data['email'] }}</strong></p>
<p class='text-black'>Client message: <strong> {{ $data['message'] }}</strong></p>
<!-- <p style="text-align:center;"><strong>Removing copyright information without the license will result in suspension of your hosting and/or domain name(s).</strong> -->
<p style="text-align:center;"><strong>Thank you for using our service </strong>.</p>

<style>
h1, h2, h3, p, .text-black {
  color: black !important;
}
img {
  margin: 0 auto;
  display: block;
  margin-top: 20%;
}
</style>
