<head>
    <title>sotckExchange</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Roboto);

        html, body {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }


        .p1 {
            font-size: 1.2em;
            font-weight: bold;
        }

        .t1 {
            text-align: right;
            line-height: 1.8;
            color: gray(65);

        }

        .t2 {
            text-align: left;
            line-height: 1.8;
            color: black;
        }

        .l1 {
            line-height: 0.7;
        }

        .box {
            min-height: 150px;
        }

    </style>
    <style type="text/css">
        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .box {
            width: 100%;
        }

        @media screen and (min-width: 450px) {
            .green {
                width: 50%;
            }
        }

        @media screen and (min-width: 550px) {
            .red {
                width: 11%;
            }

            .white {
                width: 14%;
            }

            .orange {
                width: 75%;
            }
        }

        @media screen and (min-width: 1000px) {
            .container {
                width: 1000px;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <form method="post" action="/">
        <div>
            <label for="symbol">Stock symbol </label>
            <input type="text" name="symbol" id="symbol" style="display:block;"/>
            <button type="submit">Submit</button>
        </div>
    </form>


    <?php use App\Css\FormatCss;

    if (!empty($_POST['symbol']) && !empty($getStock)): ?>


        <div class="box dark_blue l1">
            <p class="p1"><?php echo $getStock->getLongName() . '(' . $getStock->getSymbol() . ')'; ?></p>
            <p><small><?php echo $getStock->getFullExchangeName() . ' - ' . $getStock->getQuoteSourceName()
                        . '. Currency in ' . $getStock->getCurrency() . '.'; ?></small></p>
            <br>
            <h1 style="display: inline"><?php echo round($getStock->getRegularMarketPrice(), 2) ?></h1>
            <h3 class="" style="display: inline; color: <?php echo
            FormatCss::negativeAndPositiveValueColor($getStock->getRegularMarketChange()) ?>"><?php echo ' ' . round($getStock->getRegularMarketChange(), 2) . ' (' . round($getStock->getRegularMarketChangePercent(), 2) . '%)'; ?></h3>
        </div>


        <div class="box red">
            <p class="t2">Previous Close</p>
            <p class="t2">Open</p>
            <p class="t2">Bid</p>
            <p class="t2">Ask</p>
            <p class="t2">Day's Range</p>
            <p class="t2">52 Week Range</p>
            <p class="t2">Volume</p>
            <p class="t2">Avg. Volume</p>
            <p class="t2">Market Cap</p>
        </div>
        <div class="box white">
            <p class="t1"><?php echo $getStock->getRegularMarketPreviousClose(); ?></p>
            <p class="t1"><?php echo $getStock->getRegularMarketPrice(); ?></p>
            <p class="t1"><?php echo $getStock->getBid(); ?></p>
            <p class="t1"><?php echo $getStock->getAsk(); ?></p>
            <p class="t1"><?php echo $getStock->getDayRange(); ?></p>
            <p class="t1"><?php echo $getStock->getFiftyTwoWeekRange(); ?></p>
            <p class="t1"><?php echo $getStock->getRegularMarketVolume(); ?></p>
            <p class="t1"><?php echo $getStock->getAverageDailyVolume3Month(); ?></p>
            <p class="t1"><?php echo $getStock->getMarketCap(); ?></p>

        </div>
        <!--style="display: flex;
        justify-content: center;
        align-items: center;"-->
        <div class="box orange">

            <div id="widget-chart">
                <script src="https://softcapital.com/widget/widget.js"></script>

                <span><script>createSoftCapitalWidget("Chart", "widget-chart", {
                            "symbol": "<?php echo $_POST['symbol']; ?>",
                            "type": "area",
                            "title": "News",
                            "id": "widget-chart",
                            "stroke": "#202220",
                            "strokeWidth": 2,
                            "areaGradient": [{"pos": "0.00", "color": "#FFFFFF", "opacity": 0.5}, {
                                "pos": "1.00",
                                "color": "#FFFFFF",
                                "opacity": 0.8
                            }, {"pos": "1.00", "color": "#FFFFFF", "opacity": 0.5}],
                            "ticksX": 7,
                            "ticksY": 5,
                            "ticksColor": "#444",
                            "tickStrokeOpacity": 0.2,
                            "tickStrokeColor": "#444",
                            "chartBackground": "#fff",
                            "symbolFontSize": 30,
                            "symbolColor": "#000000",
                            "symbolYoffset": 30,
                            "css": {
                                "contentWrapper": "padding: 3px 0;  width: 70%; background-color:#fff",
                                "wrapper": "display: flex; width: 100%; flex-direction: column;",
                                "chartWrapper": "display: flex;  width: 650px;  padding: 0px; height: 400px;" +
                                    "background-color: #d0e1f9;  position:relative;  align-items: flex-start;  justify-content: flex-start;"
                            }
                        });</script>
            </div>
        </div>
        <div class="box green"></div>
        <?php $_POST['allowUpdate'] = true; ?>
    <?php endif; ?>

</div>
</body>