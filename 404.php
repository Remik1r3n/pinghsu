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
            margin: 0; padding: 0;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Ubuntu, Cantarell, Segoe UI, Roboto, Noto Sans, Helvetica Neue, Arial, sans-serif;
        }
        a, button.submit {
            color: #6E7173;
            text-decoration: none;
            transition: all .1s ease-in;
        }
        a:hover, a:active {
            color: #6E7173;
        }
        .body404 {
            position: absolute;
            height: 100%; width: 100%;
            background: #fff;
        }
        .site-name404 {
            margin: 0 auto;
            text-align: center;
            letter-spacing: 2px;
            font-size: 150px;
            line-height: 1;
            font-weight: 100;
            color: #066eac;
            animation: hue 60s infinite linear;
        }
        .site-name404 h1 {
            margin: 0 0 10px;
            font-size: 50px;
            line-height: 1.2;
        }
        .title404 span {
            font-size: 15px;
            width: 2px;
        }
        .title404 p {
            font-size: 20px;
            line-height: 1.5;
            margin: 0;
            color: #7b8993;
        }
        .info404 {
            position: absolute;
            top: 50%;
            text-align: center;
            width: 100%;
            margin-top: -160px;
        }
        .body-about .info404 {
            margin-top: -180px;
        }
        #footer404 {
            margin-top: 30px;
            font-size: 10px;
        }
        .index404 {
            margin-top: 24px;
            display: inline-block;
            white-space: nowrap;
            cursor: pointer;
            letter-spacing: 1px;
            font-size: 14px;
            user-select: none;
            border: 2px solid #7b8993;
            line-height: 36px;
            text-align: center;
            height: 36px;
            padding: 0 25px;
            border-radius: 25px;
            background: #fff;
            color: #7b8993;
        }
        .icon-about {
            padding: 10px 0 25px;
        }
        .icon-about a {
            font-size: 20px;
            margin: 5px;
            color: #fff;
            background: #000;
            border-radius: 100%;
            padding: 6px;
        }
        @keyframes hue {
          from { filter: hue-rotate(0deg); }
          to { filter: hue-rotate(-360deg); }
        }
        </style>
    </head>
    <body>
        <div class="body404">
            <div class="info404">
                <header id="header404" class="clearfix">
                    <div class="site-name404">404</div>
                </header>
                <section>
                    <div class="title404">
                        <p>此处空无一物</br>It's nothing here!</p>
                    </div><a href="<?php $this->options->siteUrl(); ?>" class="index404">◀ 返回 Back</a>
                </section>
            </div>
        </div>
    </body>
</html>