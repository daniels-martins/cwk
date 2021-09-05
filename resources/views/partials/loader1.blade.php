<style>
   .loader {
      position: absolute;
      border-radius: 50%;
      border-top: 10px solid #3498db;
      border-left: 10px solid white;
      border-right: 10px solid white;
      border-bottom: 10px solid rgb(12, 0, 12);

      width: 30px;
      height: 30px;
      -webkit-animation: spin .5s linear infinite;
      /* Safari */
      animation: spin .4s linear infinite;
      z-index: 21;

   }

   .loader_wrapper{
   }
   .loader{
      bottom: 48%;
      left: 48%;
   }
   .loader_window{
      position: fixed;
      top:  0;
      width:   51%;
      height:  100%;
      background: url("/raw_assets/login/login_img/banner.jpg");
      background-size: cover;
      z-index: 20;
   }
   .loader--left{
      left: 0;
   }
   .loader--right{
      right: 0;
   }

   .loaded .loader_wrapper .loader--left{
     transform : translate(-100%);
     transition: all .8s .7s cubic-bezier(0,1.06,1,-0.75);
   }
   .loaded .loader_wrapper .loader--right{
     transform : translate(100%) ;
     transition: all .8s .6s cubic-bezier(0,1.06,1,-0.75);
   }

   .loaded .loader_wrapper .loader{
      opacity : 0;
      visibility: 0;
      transition: all 1s cubic-bezier(0,1.06,1,-0.75);
   }

   /* Safari */
    @keyframes spin{
      0% {  transform: rotate(0deg);   }
      100% {   transform: rotate(360deg);   }
   }
</style>
{{-- <body> --}}
<div class="loader_wrapper">
   <div class="loader"></div>

   <div class="loader_window loader--left"></div>
   <div class="loader_window loader--right"></div>

</div>
{{-- </body> --}}