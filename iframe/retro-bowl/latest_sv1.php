<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Retro Bowl</title>
<meta name="robots" content="noindex">
<style>body {
    font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f0f0f0;
}

body, button {
    cursor: pointer;
}

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    position: relative;
}

.video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    object-fit: cover;
    opacity: 1;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(8px);
    background-color: rgba(12, 13, 20, 0.8);
    z-index: 2;
}

button {
    max-width: 320px;
    display: flex;
    overflow: hidden;
    position: relative;
    padding: 0.875rem 72px 0.875rem 1.75rem;
    background-color: #039be5;
    background-image: linear-gradient(to top right, #039be5, #29b6f6);
    color: #ffffff;
    font-size: 15px;
    line-height: 1.25rem;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    vertical-align: middle;
    align-items: center;
    border-radius: 0.5rem;
    gap: 0.75rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    border: none;
    transition: all 0.6s ease;
}
.button-container{
    display:flex;
    align-items: center;
  justify-content: center;
  z-index: 21;
    
    
}
.desc-container {
    padding:1px;
    color: white;
    text-align: center;
    z-index: 20;
     display: flex;
    flex-direction: column; /* Ensure a vertical stacking of elements */
    align-items: center;
    justify-content: center;
    margin: 5px 0;
}

button span {
    background-color: rgb(3 155 229);
    display: grid;
    position: absolute;
    right: 0;
    place-items: center;
    width: 3rem;
    height: 100%;
}

button span svg {
    width: 1.5rem;
    height: 1.5rem;
}

button:hover {
    box-shadow: 0 4px 30px rgba(4, 175, 255, 0.1), 0 2px 30px rgba(11, 158, 255, 0.06);
    transform: translateY(-5px); /* Move the button up by 5 pixels on hover */
}

iframe {
    width: 100%;
    height: 100vh;
    display: block;
    background-color: black;
}

img {
    border-radius: 20%;
}

.desc-container h1, img, p {
    margin: 5px 0;
}

p{
    margin-bottom:20px;
    color:gray;
}</style>
</head>
<body>
<div class="css-xiovts"></div>
<div class="container">
<video autoplay muted loop class="video">
<source src="https://retrobowl.me/iframe/retro-bowl/.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
<div class="overlay"></div>
<div class="desc-container">
<img width="70px" height="70px" src="https://retrobowl.me/wp-content/uploads/2023/08/fav.png">
<h1>Retro Bowl</h1>
<p>Where classic gaming meets football frenzy! 🏈.<br> Dive into the pixelated gridiron action and strategize your way to victory. Ready for the challenge?</p>
</div>
<div class="button-container">
<button onclick="loadIframe()">Play NOW
<span>
<svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewbox="0 0 408.221 408.221" xml:space="preserve" stroke="#ffffff">
<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
<g id="SVGRepo_iconCarrier">
<g>
<g>
<path d="M204.11,0C91.388,0,0,91.388,0,204.111c0,112.725,91.388,204.11,204.11,204.11c112.729,0,204.11-91.385,204.11-204.11 C408.221,91.388,316.839,0,204.11,0z M286.547,229.971l-126.368,72.471c-17.003,9.75-30.781,1.763-30.781-17.834V140.012 c0-19.602,13.777-27.575,30.781-17.827l126.368,72.466C303.551,204.403,303.551,220.217,286.547,229.971z">
</path>
</g>
</g>
</g>
</svg>
</span>
</button>
</div>
</div>
<script>
     function getURLParameter(name) {
        return new URLSearchParams(window.location.search).get(name);
    }

        document.body.addEventListener('click', function() {
            loadIframe();
        });
        function loadIframe() {
            // Replace the content with an iframe
            document.body.innerHTML = '<iframe src="https://retrobowlcollege.co/retro-bowl/" frameborder="0"><\/iframe>';
        }
        // Check for URL parameter on page load
    window.onload = function() {
        if(getURLParameter('type') === 'iframe') {
            loadIframe();
        }
    };
    </script>
</body>
</html>