<!DOCTYPE html>
<html>
<head>
    <title>Audio Guide</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="default.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <header class="audio-header">
        <div class="audio-icon"><img class="icon-casareal" src="Images/IconCasaReal.png"></div>
        <nav class="audio-nav"> 
            
                <div><a href="#">Visit</a></div>
                <div><a href="#">Exhibition and events</a></div>
                <div><a href="#">Learn</a></div>
                <div><a href="#">About us</a></div>
        </nav>
        <hr class="audio-border">
        <div class="sound-waves"><svg width="310" height="200" viewBox="0 0 377 279" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect x="27.0811" width="322.837" height="211.662" fill="url(#pattern0)" fill-opacity="0.5"/>
            <rect y="200.259" width="377" height="78.3932" fill="url(#pattern1)"/>
            <defs>
            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_59_463" transform="translate(-0.0970149 -0.407407) scale(0.00371968 0.0056802)"/>
            </pattern>
            <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image1_59_463" transform="scale(0.00189036 0.00909091)"/>
            </pattern>
            <image id="image0_59_463" width="320" height="320" xlink:href="data:image/png;base64,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"/>
            <image id="image1_59_463" width="529" height="110" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAhEAAABuCAYAAACZdUEvAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAB4qSURBVHhe7Z0FtBVVG4a39dvdqCgqIraoqBggWNjYimIimGAromKBYixbwSIEBBURDJYFFjaKYrtssDux/t9nO8f/ivfE7D37nJk577PWXTKX6+WcObO//e4vZ/nvnxghhBBCiJjMGv1XCCGEECIWEhFCCCGEcEIiQgghhBBOSEQIIYQQwgmJCCGEEEI4IREhhBBCCCckIoQQQgjhhESEEEIIIZyQiBBCCCGEExIRQgghhHBCIkIIIYQQTkhECCGEEMIJiQghhBBCOCERIYQQQggnJCKEEEII4YREhBBCCCGckIgQQgghhBMSEUIIIYRwQiJCCCGEEE5IRAghhBDCCYkIIYQQQjghESGEEEIIJyQihBBCCOGERIQQQgghnJCIEEIIIYQTs/z3T6I/CyEivvjiC3P//febBx980Lz88svml19+Mf/5z3/MKqusYtq0aWN22GEH06RJk+inhagftDZEQyQiRGYYO3asOfvss6OreBxwwAHm6KOPjq6Kg0Hk37nkkkvsn4sx++yzm65du5r99tvPzDnnnNF3hcgveVkbV1xxhRk8eHB0FY8zzjjD7LTTTtGVAIUzhIj4/fffzU033WTOP//8kkYSfvvtN3PNNdeYvn37mh9//DH6rhD5RGtDFEMiQoiI8ePHW0MZh7vvvtuMGjXKyKEn8ozWhiiGRIQQf/LZZ5+ZkSNH2lNUXHDxTps2LboS1eCPP/4wn376qXnkkUfMwIEDTY8ePUyXLl1M+/btzfrrr/+PL+L0nTt3Nt27d7eubD6vt99+2/z888/RbxOl0NoQpchVTsR9991nevXqFV3Fh1jXKaecYpOERPrAIIXKiZg0aZI57rjjnAwlKFYanl9//dW8+OKL9oQ7ceJE8+2330Z/407Lli3N9ttvbzp06GAWW2wxM8sss0R/IwrkbW0oJyJZcuOJIPb2wAMPRFduPPHEE+a9996LrkQ9wefuaiThnXfekds2EFQD3HDDDWabbbYx3bp1s2IyCQEBr776qrnoootMx44dzWGHHWZtAPF/8X+0NkQpciMiPvjgA/PCCy9EV27gtvP9HSKbfP7559Gf3ODZmTFjRnQlkuDLL780V111ldlxxx1tol5SwqEYzz//vPVWEfZ45ZVXtPFFaG2IUuRCRLDYH3/8cWt0fHnooYeCGyshRHHIdyCRb5999rHJfOWqAZIGMXHwwQebCy+80HzzzTfRd4UQjZELEfH111+bxx57LLryg+Yp7777bnQl6gXi4T4svvji6heRAGzaZ511lundu7cNY9QK3PdUFhxzzDE2CbOe0doQpciFiCCuifsxCcitoBOb4qL1xfLLL2+b5LjSrFkzJeV5wmbNpk3iZFrgUEHlB96JekVrQ5Qi8yKCjO0JEyZ4Jf7MzDPPPFPTU5CoPs2bN7dte11o2rSpadWqVXQlXGCTZrNm004bH330kc3Kr1chobUhSpF5EfHJJ5+Y5557LrpKhjfeeEMJlnUGLte99trL6cRFydcyyywTXYm4sDmzSbNZpxVe2znnnFOXoQ2tDVGKzIsISrLef//96Co5aGKjZjT1xbbbbmsOOuig6Koy6DGw5557yl3rCJsym3OaBUQB7MzVV19tvv/+++g79YPWhihGpkUE+QuEHkKAd4OyUVE/zDbbbObQQw+1DcvKNRzjVIZR5WfnmWee6LsiDpQOMoshxCEgFDS5uu222+qu/FNrQxQj0yKCU8yTTz4ZXSULtc2PPvpodCXqBYzlrrvuau655x5zwgknmHXXXfdvo4lxpMMhTYlGjx5tjjzySGWdO0Li8u23324mT54cfSc78LrrsYJLa0M0RmZFBCeBp59+OuiUOLwc6hlRnyy00EJm7733Ntddd51t+/vss89awTp06FBrKJs0aRL9pHCBtTts2LDoKlsQehkzZkzdVnBpbYiGZFZE4ArFtRgSEr6mTp0aXQkhkoCmcEOGDMn0mGi8lFnI4xAiNJkVEW+++aatoggJZaNPPfWUekYIkSD0YUkyl2mBBRYw++67r53myfwcvBycjvli/d5///327zp16mR/NgnI4yCpW4h6J5Migja4GIske0MUQycOIZKDXKNx48ZFV34suuiiduouzamYMkk/Alzts876f7NGHH/hhRe2f3faaafZ4V1MdHUpV5wZXPhZ9qYIkQSZHAX+4Ycf2s521crq7tu3r9l6662jK+ECTcHoLIrhJZlu+vTp9qsAcVQ622200UamXbt2ZqmllvpXaVjIUeBphBLjt956y0yZMsV+TZs2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"/>
            </defs>
            </svg>
        </div>
            <div class="audio-text">
                Let Casa Real Shrine speak to you.
            </div>
            <select class="audio-dropdown"  name="" id="">
                    <option>Choose a display</option>
                    <option value="">Gallery #1</option>
                    <option value="">Gallery #2</option>
                    <option value="">Gallery #3</option>
                    <option value="">Gallery #4</option>
                    <option value="">Gallery #5</option>
                    </select>
        <div class="or-text">or</div>
            <div class="text-scan"><a href="#">SCAN USING QR CODE</a></div>

            <hr class="audio-border audio-border-2">
    </header>
    <main>
        <div class="feature-text">
            Featured Audio
        </div>
        <div class="feature-image"><img src="Images/Audio-picture.png"></div>
        <div class="image-sub-text">The History of Casa Real Shrine of Malolos</div>


    </main>

    <footer class="footer-content">
        <table class="left-footer box">
        <tr>
            <td>About Us</td>  
            <td>Services</td>  
        </tr>
        <tr>
            <td>Museums</td>  
            <td>Book a Tour</td>  
        </tr>
        <tr>
            <td>Collections</td>  
            <td>Virtual Tour</td>  
        </tr>
        </table>

        <div class="center-footer box">
        <div class="center">Follow Us</div>
        <div>
            <svg  class="fb" style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
            </svg>
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" />
            </svg>
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
            </svg>
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z" />
            </svg>
        </div>
    <img class="icon-casareal" src="Images/IconCasaReal.png">
    </div>
    <div class="right-footer box">
        <h2 class="Contact-info">Contact Information</h2>
        <div>Paseo Del Congreso, Liang, City of Malolos,<br> Bulacan</div>
        <div>Museum Curactor: Ms. Ma. Antonia T. Jimenez </div>
        <h4>@CasaRealMalolos</h4>
        <div>Telephone Number:(044) 931-2508</div>
        <div>Cellphone Number:09667089376</div>
        <div>mpph@nhcp.gov.ph</div>
    </div>
    </footer>
</body>
</html>