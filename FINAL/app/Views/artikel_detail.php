<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>

    <!-- CDN TAILWIND CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                brand: '#06b6d4',
              }
            }
          }
        }
      </script>
</head>
<body>
    
    <!-- NAVBAR -->
    <nav class="bg-white/80 shadow fixed top-0 left-0 right-0 z-10 backdrop-blur-md">
        <div class="container mx-auto px-12">
            <div class="flex items-center justify-between py-2">
                <div class="flex flex-row items-center space-x-2">
                    <img src="https://prokon4.desainweb4c2.com/pics/Logo.png" alt="" class="max-h-16">
                    <h1 class="text-2xl text-brand">Smart English</h1>
                </div>
    
                <div class="flex flex-row">
                    <a href="#" class="hover:text-brand font-semibold mr-8 duration-300 delay-75">Home</a>
                    <a href="#" class="hover:text-brand font-semibold mr-8 duration-300 delay-75">Programs</a>
                    <div class="flex flex-col w-auto">
                        <a href="#" class="text-brand flex flex-col hover:text-brand font-semibold mr-8 duration-300 delay-75">
                            Article
                            <div class="w-full bg-brand h-[3px] rounded-full"></div>
                        </a>
                    </div>
                    <a href="#" class="hover:text-brand font-semibold mr-8 duration-300 delay-75">Contact</a>
                    <a href="#" class="hover:text-brand font-semibold mr-8 duration-300 delay-75">About</a>
                </div>

                <div class="flex flex-row">
                    <div class="text-left bg-white mr-4">
                        <button name="cancel" type="reset" class="inline-flex justify-center py-2 px-4 border border-brand shadow-sm text-sm  rounded-md text-brand hover:bg-brand hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-brand duration-300 delay-75"> 
                            LOGIN
                        </button>
                    </div>
                    <div class="bg-white w-full">
                        <button name="btn-update" id="btn-update" type="submit" class="inline-flex justify-center py-2 px-4 w-full border border-transparent shadow-sm text-sm rounded-md text-white bg-brand hover:bg-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand">
                            REGISTER
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </nav>
    <!-- END OF NAVBAR -->

    <!-- HERO SECTION -->
    <div class="flex flex-col mt-28 mx-36 py-9 px-14 rounded-xl">
        <div class="flex flex-wrap justify-between items-center">
            <a href="#" class="flex flex-col items-center w-[44%] px-6 py-5 mb-6 hover:bg-sky-100 duration-300 delay-75">
                <h1 class="text-2xl text-center font-medium">Tips and Trick Masuk UPI versi Yos</h1>
                <img src="https://prokon4.desainweb4c2.com/pics/Logo.png" alt="" class="w-64 py-4">
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia vitae nesciunt iure aut neque nostrum reprehenderit, dolore, laborum alias similique vero ad eos quam quidem cum excepturi ipsa perferendis minima odit dignissimos nihil asperiores deleniti porro tenetur. Vero ea quasi quia eum velit alias nemo earum dolor saepe neque? Suscipit.</p>
            </a>
            <a href="#" class="flex flex-col items-center w-[44%] px-6 py-5 mb-6 hover:bg-sky-100 duration-300 delay-75">
                <h1 class="text-2xl text-center font-medium">Tips and Trick Masuk UPI versi Yos</h1>
                <img src="https://prokon4.desainweb4c2.com/pics/Logo.png" alt="" class="w-64 py-4">
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia vitae nesciunt iure aut neque nostrum reprehenderit, dolore, laborum alias similique vero ad eos quam quidem cum excepturi ipsa perferendis minima odit dignissimos nihil asperiores deleniti porro tenetur. Vero ea quasi quia eum velit alias nemo earum dolor saepe neque? Suscipit.</p>
            </a>
            <a href="#" class="flex flex-col items-center w-[44%] px-6 py-5 mb-6 hover:bg-sky-100 duration-300 delay-75">
                <h1 class="text-2xl text-center font-medium">Tips and Trick Masuk UPI versi Yos</h1>
                <img src="https://prokon4.desainweb4c2.com/pics/Logo.png" alt="" class="w-64 py-4">
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia vitae nesciunt iure aut neque nostrum reprehenderit, dolore, laborum alias similique vero ad eos quam quidem cum excepturi ipsa perferendis minima odit dignissimos nihil asperiores deleniti porro tenetur. Vero ea quasi quia eum velit alias nemo earum dolor saepe neque? Suscipit.</p>
            </a>
            <a href="#" class="flex flex-col items-center w-[44%] px-6 py-5 mb-6 hover:bg-sky-100 duration-300 delay-75">
                <h1 class="text-2xl text-center font-medium">Tips and Trick Masuk UPI versi Yos</h1>
                <img src="https://prokon4.desainweb4c2.com/pics/Logo.png" alt="" class="w-64 py-4">
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia vitae nesciunt iure aut neque nostrum reprehenderit, dolore, laborum alias similique vero ad eos quam quidem cum excepturi ipsa perferendis minima odit dignissimos nihil asperiores deleniti porro tenetur. Vero ea quasi quia eum velit alias nemo earum dolor saepe neque? Suscipit.</p>
            </a>
        </div>
    </div>
    <!-- END OF HERO SECTION -->
</body>
</html>