<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('E-motion') }}
        </h2>
    </x-slot>

    {{-- <div class="container height: 50%;">
      <div class="flex justify-center">
          <img src="storage/rewards/profile-1335-svgrepo-com.png" style="width: 15%; display: block; margin: 0 auto; py-5">
      </div>
      <div class="justify-center">
          <div class="font-bold mb-2">
              <h1 class="text-center" style="font-size: 2vw;">23</h1>
          </div>
      </div>
      <div class="justify-center">
        <div class="font-bold mb-2">
            <h1 class="text-center" style="font-size: 2vw;">Total E-coins</h1>
        </div>
      </div>
    </div> --}}



    <div class="container flex flex-col justify-center items-center" style="background: linear-gradient(to bottom, rgb(188, 227, 220), rgb(126, 174, 165));">
        <div class="text-center" style="padding-top:4vw">
            <h1 class="" style="font-size: 2vw; padding: 2vw;"> Your Balance </h1>
        </div>
        <div class="text-center" style="padding-bottom: 10px;">
            <h1 class="" style="font-size: 2vw; padding: 2vw;">
                {{ auth()->user()->total_coins }}
            </h1>
        </div>
        <a href="#" style="padding-bottom:3vw;">
            <button style=" font-size: 1.6vw;"
                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white">
                Check out your tasks for the day
            </button>
        </a>

        <div class="container flex" >

            <div class="justify-center" style="flex-basis:100%; position: relative;">
                    <div style="padding-top: 20px;">
                        <img src="storage/tasks/gym.jpg" style="width: 90%;border-radius:50px;object-fit: cover; margin: 0 auto;" />
                        <div style="position: absolute; top: 48%; left: 35%; transform: translate(-50%, -50%); z-index: 1; text-align: center;">
                            <h3 style="font-size: 2vw; color: white;">Membership subscription</h3>
                            <a href="/rewards" style="font-size: 1.5vw; color: white;"><button style=" font-size: 1.6vw;"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4">
                                Redeem
                            </button></a>
                        </div>
                    </div>
            </div>


            <div class="justify-center" style="flex-basis:100%;">
                    <div style="padding-top: 20px;">
                        <img src="storage/tasks/talking.jpg"
                            style="width: 76%; margin: 0 auto; border-radius: 50px;" />
                            <div style="position: relative; left: 30%; transform: translate(-50%, -50%); z-index: 1; text-align: center;">
                                <h3 style="font-size: 2vw; margin-top:-12vw; color: white;">View Friends</h3>
                                <a href="#" style="font-size: 1.5vw; color: white;"><button style=" font-size: 1.6vw;"
                                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4">
                                    View
                                </button></a>
                            </div>
                    </div>

                    {{-- <h4 class="mb-2 text-center" style="font-size: 2vw;">
                        Trocaire officially joined the donations tab!
                    </h4>
                    <p class="block mb-8 font-sans text-center" style="font-size: 1.2vw;">
                        Show some support by donating to charities like these to make the world just a little safer.
                    </p>
                    <div class="flex justify-center mt-2">
                        <a href="#">
                            <button style=" font-size: 1.6vw;"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4">
                                Button
                            </button>
                        </a>
                    </div> --}}
            </div>
        </div>

    </div>



    <div class="container" style="background: linear-gradient(to bottom, rgb(126, 174, 165), rgb(109, 150, 143));">
        <div class="flex justify-center">
            <div class="p-1">
                <div style="padding-top: 9vw;">
                    <img src="storage/rewards/ps5r2-removebg-preview.png" style="width: 40%; margin: 0 auto; py-5 bg-white " />
                </div>
                <h4 class="mb-2 text-center" style="font-size: 2vw;">
                    Sony has asked to volunteer to add their ps5 to the reedemable rewards!
                </h4>
                <p class="block mb-8 font-sans text-center" style="font-size: 1.2vw;">
                    Sony has now become a reward, reedeembale for just for 90000 eco-coins! Be sure to spend your precious eco-coins quickly before stocks run out! T@C's apply, controller not included.
                </p>
                <div class="flex justify-center mt-2">
                    <a href="/rewards">
                        <button style=" font-size: 1.6vw;"
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4">
                            View
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="parent" style="d-flex flex">
            <div class="child" style="flex-basis: 100%;">
              // text block 1
            </div>
            <div class="child" style="flex-basis: 100%;">
              // text block 2
            </div>
          </div> --}}






    <div class="container flex" style="background: linear-gradient(to bottom, rgb(109, 150, 143), rgb(85, 117, 112));">
        <div class="justify-center" style="flex-basis:100%;">
            <div class="p-1">
                <div style="padding-top: 20px;">
                    <img src="storage/rewards/pngwing.com.png" style="width: 50%; margin: 0 auto; py-5 bg-white " />
                </div>
                <h4 class="mb-2 text-center" style="font-size: 2vw;">
                    Tom Hynes just reached 1000 e-coins!
                </h4>
                <p class="block mb-8 font-sans text-center" style="font-size: 1.2vw;">
                    Feel free to congratulate your friend with an emoji or a nice message.
                </p>
                <div class="flex justify-center mt-2">
                    <a href="#">
                        <button style=" font-size: 1.6vw;"
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4">
                            See friend list
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="justify-center" style="flex-basis:100%;">
            <div class="p-1">
                <div style="padding-top: 20px;">
                    <img src="storage/tasks/trocaire.png" style="width: 33%; margin: 0 auto; py-5 bg-white " />
                </div>
                <h4 class="mb-2 text-center" style="font-size: 2vw;">
                    Trocaire officially joined the donations tab!
                </h4>
                <p class="block mb-8 font-sans text-center" style="font-size: 1.2vw;">
                    Show some support by donating to charities like these to make the world just a little safer.
                </p>
                <div class="flex justify-center mt-2">
                    <a href="#">
                        <button style=" font-size: 1.6vw;"
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4">
                            See Charities
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container flex" style="background: linear-gradient(to bottom, rgb(85, 117, 112), rgb(63, 87, 84));">
        <div class="justify-center" style="flex-basis:100%;">
            <div class="p-1">
                <div style="padding-top: 20px;">
                    <img src="storage/rewards/airpod.png" style="width: 37%; margin: 0 auto; py-5 bg-white " />
                </div>
                <h4 class="mb-2 text-center" style="font-size: 2vw;">
                    Our best seller
                </h4>
                <p class="block mb-8 font-sans text-center" style="font-size: 1.2vw;">
                    Our most popular reedeemed item has been the Apple Airpods for a year straight!
                </p>
                <div class="flex justify-center mt-2">
                    <a href="/rewards">
                        <button style=" font-size: 1.6vw;"
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4">
                            Reedeem
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="justify-center" style="flex-basis:100%;">
            <div class="p-1">
                <div style="padding-top: 20px;">
                    <img src="storage/rewards/PngItem_2128990.png"
                        style="width: 66%; margin: 0 auto; py-5 bg-white " />
                </div>
                <h4 class="mb-2 text-center" style="font-size: 2vw;">
                    Check out our list of collaberators.
                </h4>
                <p class="block mb-8 font-sans text-center" style="font-size: 1.2vw;">
                    Ranging from Adidas to Gucci, there's no telling who's next, so keep an eye on our list here.
                </p>
                <div class="flex justify-center mt-2">
                    <a href="/rewards">
                        <button style=" font-size: 1.6vw;"
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 ">
                            See list
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
