<x-nav/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<x-header >
    Contact us!
</x-header>
  
<x-main>
    <div class="border border-blue-800 bg-gray-100 pl-6 py-3 pr-14 mb-2 mt-3 inline-block">
       <div class="mb-3">
            <h2 class="font-bold">Email:<h2>
                <p>todolistapp@todoapp.com</p>
       </div>

       <div class="mb-3">
            <h2 class="font-bold">Tel:</h2>
                <p>+371 274 74 774</p>
       </div>

        <div class="mb-1">
            <h2 class="font-bold">Address:</h2>
                <p>Developer St. 37, Riga, Latvia</p>
        </div>
    </div>

    {{-- TODO -- link button to leave a message --}}
    <div>
        <button class="border border-black text-white bg-blue-900 rounded mt-5 p-1 px-2 mb-6 hover:bg-blue-700 hover:text-white">Send us a message</button>
    </div>
   <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram mr-2" ></a>
   <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook mr-2" ></a>
   <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube mr-2" ></a>
   <a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter mr-2" ></a>
   <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin mr-2" ></a>
   
</x-main>

<x-footer/>

<style>
    .fa {
        padding-top: 4px;
        padding-bottom:4px;
        font-size: 30px;
        width: 40px;
        text-align: center;
        text-decoration: none;
        margin-top: 5px;
        border-radius: 50%;
}
    }

    .fa:hover {
        opacity: 0.5;
    }

    .fa-facebook {
    background: #3B5998;
    color: white;
    }

    .fa-twitter {
    background: #55ACEE;
    color: white;
    }

    .fa-instagram{
    background:rgb(228, 84, 175);
    color:white;
  }

  .fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

</style>