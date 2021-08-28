<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bCreate
 */

get_header();
?>

    <main id="primary" class="site-main">

        <section class="error-404 not-found">
            <div class="window">
                <div class="bar">
                    <i></i>
                    <div><b>About</b></div>
                </div>
                <div class="content">
                    'Sup?
                </div>
            </div>

            </div><!-- .page-content -->
        </section><!-- .error-404 -->

    </main><!-- #main -->

    <style>
        @font-face {
            font-family: Macintosh;
            src: url(http://dallas.no-ip.org/assets/PrintChar21.ttf) format("truetype");
        }

        body {
            font-size: 2px;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAFUlEQVQIW2NkYGD4D8SMjEACBP4DAA8oAgK5wqQTAAAAAElFTkSuQmCC);
            background-size: 2em 2em;
            background-position: 0 0, 1em 0, 1em -1em, 0em 1em;
            font-family: Macintosh;
            letter-spacing: -2px;
            font-smoothing: none;
        }

        .window {
            width: 200em;
            height: 160em;
            background: white;
            border: 1em solid black;
            box-shadow: 1em 1em 0 0 black;
            margin: 0 auto;
        }

        .window > div {
            padding: 2px;
        }

        .content {
            font-size: 16px;
            padding: 10px 10px !important;
        }

        .bar {
            height: 11em;
            text-align: center;
            border-bottom: 1em solid black;
            overflow: hidden;
        }

        .bar > div {
            height: 11em;
            width: 198em;
            background: #ffffff;
            background: linear-gradient(to bottom, #ffffff 0%, #ffffff 50%, #000000 51%, #000000 100%);
            background-size: 2em 2em;
            position: absolute;
        }

        .bar > div b {
            height: 1.2em;
            background: white;
            padding: 0 0.4em;
            line-height: 1.4em;
            display: inline-block;
            font-size: 9em;
        }

        .bar > i {
            height: 7em;
            width: 7em;
            background: #ffffff;
            border: 1em solid black;
            position: absolute;
            float: left;
            z-index: 3;
            margin: 1em 7em;
            display: block;
            box-shadow: 0 0 0 1em white;
        }
    </style>
<?php
get_footer();

