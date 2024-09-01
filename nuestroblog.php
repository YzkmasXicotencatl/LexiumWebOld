<?php include_once('simple_html_dom.php'); ?>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" style="color:#27beef; font-family: 'HarmoniaSansW01-Bold'">Nuestro Blog</h2>

            <?php

                $html = file_get_html('http://blog.lexiumonline.com/');
                $resp = $html->find('div.elementor-element-d9a2a17');

                echo str_replace("http://", "//", $resp[0]->innertext);

            ?>

    </div>
</section>

<style type="text/css">
	.order-md-1 .item {
    min-height: 480px;
    margin-bottom: 20px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    -webkit-backface-visibility: hidden;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -ms-border-radius: 5px;
    overflow: hidden;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -ms-transition: all 0.4s ease;
    position: relative;
    }

    .order-md-1 .item::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -ms-border-radius: 5px;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, transparent), to(rgba(0, 0, 0, 0.8)));
    background: -webkit-linear-gradient(top, transparent 50%, rgba(0, 0, 0, 0.8) 100%);
    background: -o-linear-gradient(top, transparent 50%, rgba(0, 0, 0, 0.8) 100%);
    background: linear-gradient(to bottom, transparent 50%, rgba(0, 0, 0, 0.8) 100%);
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -ms-transition: all 0.4s ease;
}

    .order-md-1 .item .post-content {
    padding: 20px 20px 18px;
    position: absolute;
    bottom: 0;
    z-index: 1;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -ms-transition: all 0.4s ease;
    }

    .order-md-1 .post-title a {
    font-size: 24px;
    line-height: 28px;
    color: #fff;
    font-family: 'HarmoniaSansW01-Regular';
    }

    .post-meta-info {
    padding-left: 0;
    }

    .post-meta-info li {
    font-size: 13px;
    display: inline-block;
    color: #fff;
    font-weight: 400;
    margin-right: 24px;
    }

    .order-md-2 .post-block-list .post-thumb {
    margin-bottom: 15px;
    margin-right: 15px;
    overflow: hidden;
    position: relative;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -ms-border-radius: 5px;
    }

    .order-md-2 .post-block-list .post-thumb img {
    width: 130px;
    height: 98px;
    }

    .order-md-2 .post-title a {
    font-size: 24px;
    line-height: 28px;
    color: #23215b;
    font-family: 'HarmoniaSansW01-Regular';
    }

    a.post-cat {
    position: relative;
    left: 0px;
    top: 0px;
    background: #fc4a00;
    color: #fff;
    padding: 0px 10px;
    font-size: 11px;
    font-weight: 700;
    display: inline-block;
    line-height: 20px;
    text-transform: uppercase;
    margin-bottom: 7px;
    z-index: 1;
    margin-right: 5px;
    height: 19px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -ms-border-radius: 4px;
    letter-spacing: 0.44px;
}

</style>