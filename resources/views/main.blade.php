<!-- <a href="https://colorlib.com/wp/templates/"><img src="https://colorlib.com/wp/wp-content/uploads/sites/2/colorlib-push-logo.png" alt="Colorlib logo"></a> -->
<h1 style="text-align:center;">(The-Developers) One new mail</h1>
<h3 style="text-align:center;">Hello, Admin, you just received a mail from a potential client via the email field</h3>
<h3><strong>Client information:</strong></h3>
<p><strong>Client Name: {{ $data['name'] }}</strong></p>
<p><strong>Client Email: {{ $data['email'] }}</strong></p>
<p><strong>Client message: {{ $data['message'] }}</strong></p>




<!-- <p style="text-align:center;"><strong>Removing copyright information without the license will result in suspension of your hosting and/or domain name(s).</strong> -->
<p style="text-align:center;"><strong>Thanks for using our service </strong>.</p>

<style>
h1, h2, h3, p {
  color: black !important;
}
img {
  margin: 0 auto;
  display: block;
  margin-top: 20%;
}
</style>
