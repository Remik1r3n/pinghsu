<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php $this->options->charset(); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="Cache-Control" content="no-transform"/>
        <meta http-equiv="Cache-Control" content="no-siteapp"/><?php if($this->options->favicon): ?>
        <link rel="shortcut icon" href="<?php $this->options->favicon(); ?>"><?php endif;?><?php if($this->options->iosicon): ?>
        <link rel="apple-touch-icon" href="<?php $this->options->iosicon();?>"><?php endif; ?>
        <title>404 Not Found - <?php $this->options->title() ?></title>
        <style>
        body {
            margin: 0; 
            padding: 0;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Ubuntu, Cantarell, Segoe UI, Roboto, Noto Sans, Helvetica Neue, Arial, sans-serif;
            background-color: #000;
            color: #fff;
        }
        a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        a:hover {
            color: #fff;
        }
        .body404 {
            position: absolute;
            height: 100%; 
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .content {
            text-align: center;
            padding: 2rem;
        }
        .error-code {
            font-size: 5rem;
            font-weight: 300;
            margin: 0 0 1rem;
            color: #fff;
        }
        .error-message {
            font-size: 1.25rem;
            margin: 0 0 2rem;
            color: #999;
        }
        .home-link {
            display: inline-block;
            border: 1px solid #666;
            padding: 0.75rem 1.5rem;
            border-radius: 2px;
            font-size: 0.9rem;
        }
        </style>
    </head>
    <body>
        <div class="body404">
            <div class="content">
                <h1 class="error-code">404</h1>
                <p class="error-message">Page not found</br>未找到页面</p>
                <a href="<?php $this->options->siteUrl(); ?>" class="home-link">◀ 返回 Back</a>
            </div>
        </div>
    </body>
</html>