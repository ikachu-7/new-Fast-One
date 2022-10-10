<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title></title>
</head>
<body>
    <!-- <nav class="navbar">
    <a class="navbar-brand" href="#">Brand name</a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <h1>Welcome <?php echo $fetch_info['name'] ?></h1>
     -->
     <header class="text-white-600 body-font" style="background-color:black">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <span class="ml-3 text-xl" style="font-size: xx-large;font-weight: bolder;color: red;">FAST-1</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5" style=" color:white;font-size:larger;font-weight:bolder; cursor: pointer;" href="./landing.html" >Home</a>
      <a class="mr-5" style="color:white;font-size: larger;font-weight: bolder; cursor: pointer;" href="./API/Recents/recents.html" target="_blank">Live Results</a>
      <a class="mr-5" style="color:white;font-size: larger;font-weight: bolder; cursor: pointer;" href="./tracks.html" target="_blank">Tracks</a>
      <a class="mr-5" style="color:white;font-size: larger;font-weight: bolder; cursor: pointer;" href="./Quiz/quiz.html" target="_blank">Quiz</a>
      <a class="mr-5" style="color:white;font-size: larger;font-weight: bolder; cursor: pointer;" href="./API/Drivers/drivers.html" target="_blank">Drivers</a>
      <a class="mr-5" style="color:white;font-size: larger;font-weight: bolder; cursor: pointer;" href="./API/Schedules/schedules.html" target="_blank">Schedule</a>
      <a class="mr-5" style="color:white;font-size: larger;font-weight: bolder; cursor: pointer;" href="./Game/game.html" target="_blank">Games</a>
      <a class="mr-5" style="color:white;font-size: larger;font-weight: bolder; cursor: pointer;" href="./india.html" target="_blank">Blogs</a>
    </nav>
   <a href="login-user.php" target="_blank"><button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button></a>
  </div>
</header>
<section class="text-white-600 body-font" style="background-color: black;">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="./images/f1new.jpg">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-large" style="color: red;font-weight: bold;">Let the race Begin!
        <br class="hidden lg:inline-block">Join us
      </h1>
      <div class="flex justify-center">
      <a href="signup-user.php" target="_blank"><button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-white-600 rounded text-lg" style="width: 200px;height: 50px;display: flex;justify-content: center;" >Create an Account</button></a>
      </div>
    </div>
  </div>
</section>
<section class="text-white-600 body-font" style="background-color: black;">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900" style="color: red ;font-weight: bold;">Latest news and updates</h1>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed text-white-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="images/max-verstappen-red-bull-racing.webp" alt="content">
          <a href="https://www.motorsport.com/f1/news/fia-reid-cost-cap-speculation/10381825/"><h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3></a>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Formula-1</h2>
          <p class="leading-relaxed text-base">Max varstappen roads to glory</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="./images/the-safety-car-max-verstappen-.webp" alt="content">
         <a href="https://www.autosport.com/f1/news/fia-launches-investigation-into-f1-japanese-gp-tractor-incident/10382237/"><h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3></a>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Formula-1</h2>
          <p class="leading-relaxed text-base">The FIA has launched an investigation into the timing and use of the recovery vehicles at Formula 1’s Japanese Grand Prix, following driver alarm over the presence of a tractor on the track.
          </p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="images/pierre-gasly-alphatauri-1.webp" alt="content">
          <a href="https://www.autosport.com/f1/news/fia-launches-investigation-into-f1-japanese-gp-tractor-incident/10382237/"><h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3></a>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Formula-1</h2>
          <p class="leading-relaxed text-base">Pierre Gasly says joining Alpine “very quickly” felt like the right move for his Formula 1 career once talks started over a deal for 2023.</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="images/race-winner-damon-hill-william.webp" alt="content">
          <a href="https://www.autosport.com/f1/news/autosport-writers-favourite-f1-japanese-grands-prix/10380401/"><h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3></a>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Formula-1</h2>
          <p class="leading-relaxed text-base">After three years away, Formula 1 makes its belated return to the iconic Suzuka for the Japanese Grand Prix. With the circuit potentially set to host another title decider, Autosport’s writers pick out their favourite editions of this famous race</p>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="text-gray-600 body-font" style="background-color: black;">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
        <span class="ml-3 text-xl" style="font-size: xx-large; font-weight: bolder;">FAST-1</span>
      </a>
      <p class="mt-2 text-sm text-white-500">Sab Kaam Tiwari Vivek Ne kiya</p>
    </div>
    <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-white-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-white-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-red-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-white-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-white-800">Fourth Link</a>
          </li>
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-gray-100" style="background-color: black;">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left" style="color:red;font-weight: bolder;"> FAST-1
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span> 
    </div>
  </div>
</footer>
</body>
</html>