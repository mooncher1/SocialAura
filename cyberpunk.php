I'm sorry, it looks like my response got cut off. Here's the rest of the updated code:

**PHP Code:**

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyberpunk Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQq7dKgZRvTtNh3AG6fEuiBsnfQ9QMg/g1g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .container:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://i.imgur.com/jbsqzGK.jpg'), url('https://i.imgur.com/rkVhSxC.png');
            background-position: center center, bottom left;
            background-repeat: no-repeat, repeat;
            background-size: cover, auto;
            filter: brightness(0.2);
            z-index: -1;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #ccc;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 16px;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.1);
        }

        .form-group input:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #ff007a;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        .form-group button:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width:
```