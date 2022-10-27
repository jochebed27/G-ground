<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div>
        <nav class="nav-container">
            <h1>Logo</h1>
              <ul class="nav-links">
                 @auth
                 <a href="/" style="color: black">Home</a>
                 <a href="#about" style="color: black">About Us</a>
                 <a href="#" style="color: black">Contact</a>
                 
                 
                 <select>
                  <option value="Courses">Courses</option>
                 </select>
                 <a href="/logout">Logout</a>     
                 @else
                 <a href="/" class="link" style="color: black">Home</a>
                 <a href="#about" class="link" style="color: black">About Us</a>
                 <a href="#" class="link" style="color: black">Contact</a>
                 <a href="/blog" class="link" style="color: black">Blog</a>
                 <a class='login-btn'  href="/login">Login</a>    
                 <a  class="reg-btn" href="/signUp">Register</a>
                 @endauth
              </ul>
            </nav>
    <div class="content-wrapper">
        <div class="flex-container">
            <img src="https://cdn.vanguardngr.com/wp-content/uploads/2021/03/1_na3zwwQQ43y-SoBiq6Lq5Q.png" alt="" class="header-image">
            <div>
                <h1>Read Our Blog</h1>
                <p>Reproductive health stories from Pathfinder and beyond.</p>
            </div>
        </div>
        <div class="flex-container">
            <div class="post-large">
                <img src="https://www.article19.org/wp-content/uploads/2019/05/iStock-1074842604.jpg" alt="" >
                <p><span>Dr. Tabinda Sarosh named as a Heroine of Health</span> As daughter of two Pakistani journalists, Dr. Tabinda Sarosh was influenced by...</p>
            </div>
            <div class="post-small">
                <img src="https://www.thelancet.com/cms/attachment/e8e20baf-4c97-4c7b-a3c1-3b70eb9293bf/fx1_lrg.jpg" alt="" >
                <p><span>Dr. Tabinda Sarosh named as a Heroine of Health</span> As daughter of two Pakistani journalists, Dr. Tabinda Sarosh was influenced by...</p>
            </div>     
        </div>
        <div class="flex-container">
            <div class="post-small">
                <img src="https://www.thelancet.com/cms/attachment/e8e20baf-4c97-4c7b-a3c1-3b70eb9293bf/fx1_lrg.jpg" alt="" >
                <p><span>Dr. Tabinda Sarosh named as a Heroine of Health</span> As daughter of two Pakistani journalists, Dr. Tabinda Sarosh was influenced by...</p>
            </div>
            <div class="post-large">
                <img src="https://www.article19.org/wp-content/uploads/2019/05/iStock-1074842604.jpg" alt="" >
                <p><span>Dr. Tabinda Sarosh named as a Heroine of Health</span> As daughter of two Pakistani journalists, Dr. Tabinda Sarosh was influenced by...</p>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <button class="load-more">Load More</button>
            </div>
        </div>
    </div>
    </div>
</body>
</html>