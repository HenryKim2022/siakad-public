<style>
    /* Note:
        Check <adminLTE\custom-plugins\rpfl_v1\jquery.flipper-responsive.js> to change displayed text-size
        And search for ;
            var minFontSize = 30;
            $flipper.css('font-size', fontSize + 'px');
            while(i < 40){ 
    */

    .flipper {
        color: #333;
        display: block;
        font-size: 50px;
        line-height: 100%;
        padding: 0;
        margin: 0;
        height: 1.7em;
    }

    .flipper.flipper-invisible {
        font-size: 0px !important;
    }

    .flipper-group {
        position: relative;
        white-space: nowrap;
        display: block;
        float: left;
        padding: 0;
        margin: 0;
    }

    .flipper-group label {
        position: absolute;
        color: #fff;
        font-size: 34%;
        top: 100%;
        line-height: 1em;
        left: 50%;
        -webkit-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
        text-align: center;
        padding-top: .5em;
    }

    .flipper-digit {
        white-space: nowrap;
        position: relative;
        padding: 0;
        margin: 0;
        display: inline-block;
        float: left;
        height: 1.2em;
        overflow-y: hidden;
    }

    .flipper-digit span {
        font-size: 25%;
    }

    .flipper-delimiter {
        white-space: nowrap;
        display: block;
        float: left;
        padding: 0;
        margin: 0;
        color: #fff;
        min-width: .1em;
        white-space: nowrap;
        display: block;
        padding-top: 0.1em;
        padding-bottom: 0.1em;
        line-height: 1em;
    }

    .digit-face {
        display: block;
        visibility: hidden;
        position: relative;
        border-radius: 0.1em;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 8;
        padding-top: 0.1em;
        padding-bottom: 0.1em;
        padding-left: 0.1em;
        padding-right: 0.1em;
        box-sizing: border-box;
        text-align: center;
    }

    .digit-next {
        display: block;
        position: relative;
        border-radius: 0.1em;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 8;
        height: 1.2em;
        background: #fff;
        padding-top: 0.1em;
        padding-bottom: 0.1em;
        padding-left: 0.1em;
        padding-right: 0.1em;
        box-sizing: border-box;
        text-align: center;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .digit-top {
        z-index: 10;
        top: 0;
        left: 0;
        right: 0;
        height: 50%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        pointer-events: none;
        overflow: hidden;
        position: absolute;
        background: #fff;
        padding-top: 0.1em;
        padding-bottom: 0;
        padding-left: 0.1em;
        padding-right: 0.1em;
        border-top-left-radius: 0.1em;
        border-top-right-radius: 0.1em;
        box-sizing: border-box;
        text-align: center;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        transition: background 0s linear, -webkit-transform 0s linear;
        transition: transform 0s linear, background 0s linear;
        transition: transform 0s linear, background 0s linear, -webkit-transform 0s linear;
        -webkit-transform-origin: 0 0.6em 0 !important;
        transform-origin: 0 0.6em 0 !important;
        -webkit-transform-style: preserve-3d !important;
        transform-style: preserve-3d !important;
        z-index: 20;
    }

    .digit-top.r {
        transition: background 0.2s linear, -webkit-transform 0.2s linear;
        transition: transform 0.2s linear, background 0.2s linear;
        transition: transform 0.2s linear, background 0.2s linear, -webkit-transform 0.2s linear;
        -webkit-transform: rotateX(90deg);
        transform: rotateX(90deg);
        background: #cccccc;
    }

    .digit-top2 {
        visibility: hidden;
        position: absolute;
        height: 50%;
        left: 0;
        right: 0;
        background: #cccccc;
        transition: -webkit-transform 0.2s linear;
        transition: transform 0.2s linear;
        transition: transform 0.2s linear, -webkit-transform 0.2s linear;
        line-height: 0em !important;
        top: 50% !important;
        bottom: auto !important;
        padding-top: 0;
        padding-bottom: 0.1em;
        padding-left: 0.1em;
        padding-right: 0.1em;
        border-bottom-left-radius: 0.1em;
        border-bottom-right-radius: 0.1em;
        overflow: hidden;
        text-align: center;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        transition: background 0s linear, -webkit-transform 0s linear;
        transition: transform 0s linear, background 0s linear;
        transition: transform 0s linear, background 0s linear, -webkit-transform 0s linear;
        -webkit-transform: rotateX(-90deg);
        transform: rotateX(-90deg);
        -webkit-transform-style: preserve-3d !important;
        transform-style: preserve-3d !important;
        -webkit-transform-origin: 0 0 0 !important;
        transform-origin: 0 0 0 !important;
        z-index: 20;
    }

    .digit-top2.r {
        visibility: visible;
        transition: background 0.2s linear 0.2s, -webkit-transform 0.2s linear 0.2s;
        transition: transform 0.2s linear 0.2s, background 0.2s linear 0.2s;
        transition: transform 0.2s linear 0.2s, background 0.2s linear 0.2s, -webkit-transform 0.2s linear 0.2s;
        -webkit-transform: rotateX(0deg);
        transform: rotateX(0deg);
        background: #fff;
    }

    .digit-bottom {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        pointer-events: none;
        position: absolute;
        overflow: hidden;
        background: #fff;
        height: 50%;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9;
        line-height: 0em;
        padding-top: 0;
        padding-bottom: 0.1em;
        padding-left: 0.1em;
        padding-right: 0.1em;
        border-bottom-left-radius: 0.1em;
        border-bottom-right-radius: 0.1em;
        box-sizing: border-box;
        text-align: center;
        transition: none;
    }

    .digit-bottom.r {
        transition: background 0.2s linear;
        background: #cccccc;
    }

    .flipper-digit:after {
        content: "";
        position: absolute;
        height: 2px;
        background: rgba(0, 0, 0, 0.5);
        top: 50%;
        display: block;
        z-index: 30;
        left: 0;
        right: 0;
    }



    /* Light Part */
    .flipper-light {
        color: #fff;
    }

    .flipper-light .flipper-delimiter {
        color: #333;
    }

    .flipper-light .digit-next {
        background: #333;
    }

    .flipper-light .digit-top {
        background: #333;
    }

    .flipper-light .digit-top.r {
        background: black;
    }

    .flipper-light .digit-top2 {
        background: black;
    }

    .flipper-light .digit-top2.r {
        background: #333;
    }

    .flipper-light .digit-bottom {
        background: #333;
    }

    .flipper-light-labels .flipper-group label {
        color: #333;
    }



    /* Dark Part */
    .flipper-dark {
        color: black;
    }

    .flipper-dark .flipper-delimiter {
        color: #fff;
    }

    .flipper-dark .digit-next {
        background: #fff;
    }

    .flipper-dark .digit-top {
        background: #fff;
    }

    .flipper-dark .digit-top.r {
        background: white;
    }

    .flipper-dark .digit-top2 {
        background: white;
    }

    .flipper-dark .digit-top2.r {
        background: #fff;
    }

    .flipper-dark .digit-bottom {
        background: #fff;
    }

    .flipper-dark-labels .flipper-group label {
        color: #fff;
    }


    /*  */
    /*  */
    /* Countdown HTML Style */
    .dark-mode .cd-description {
        color: #ced4da;
    }

    /* .cd-list .cd-description { */
    .cd-list .cd-description {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        /* number of lines to show */
        line-clamp: 1;
        -webkit-box-orient: vertical;
    }


    .dark-mode .cd-list>.item {
        background-color: #343a40;
        color: #fff;
        border-bottom-color: #6c757d;
    }


    .cd-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
</style>


<ul class="cd-list cd-list-in-card pl-2 pr-2 list-group-small">
    <?php
    // $countdown_data = session()->getFlashdata('countdown_data');
    if (!empty($countdown_data)) { ?>

        <?php {
            $i = 0;
            foreach ($countdown_data as $index => $cd) : ?>
                <?php if (esc($cd['countdown_status']) == "active") { ?>

                    <?php if ($i >= 1) { ?>
                        <div class="collapse cd-list cd-list-in-card mb-4" id="moreCountdowns">
                            <li class="item<?= !$index ? ' ' . esc($cd['countdown_alt']) : '' ?>">
                                <div class="cd-title mt-2 mb-2">
                                    <a href="javascript:void(0)" class="">
                                        <h6 class="bg-light p-2 border-top border-bottom mb-0">
                                            <?= esc($cd['countdown_title']) ?>
                                            <span class="badge badge-warning badge-secondary float-right"><?= esc($cd['countdown_target_date']) ?></span>
                                        </h6>
                                    </a>
                                </div>
                                <div class="cd-timer justify-content-center align-items-center m-auto">
                                    <div class="container mr-0 pr-0">
                                        <div class="flipper flipper-dark flipper-dark-labels" data-reverse="true" data-datetime="<?= esc($cd['countdown_target_date']) ?>" data-template="ddd|HH|ii|ss" data-labels="Days|Hours|Minutes|Seconds" id="<?= esc($cd['countdown_alt']) ?>"></div>
                                        <!-- <div class="flipper flipper-dark flipper-dark-labels" data-reverse="false" data-datetime="2025-03-14 00:00:00" data-template="d|HH|i|s" data-labels="Date|Hours|Minutes|Seconds" id="modalFlipper"></div> -->
                                    </div>
                                </div>
                                <div class="cd-description text-left border-top mt-2 mb-8 pl-2 pr-2">
                                    <?= esc($cd['countdown_desc']) ?>
                                </div>
                            </li>

                        </div>

                    <?php $i += 1;
                    } else { ?>
                        <li class="item<?= !$index ? ' ' . esc($cd['countdown_alt']) : '' ?> mb-4">
                            <div class="cd-title mt-2 mb-2">
                                <a href="javascript:void(0)" class="">
                                    <h6 class="bg-light p-2 border-top border-bottom mb-0">
                                        <?= esc($cd['countdown_title']) ?>
                                        <span class="badge badge-warning badge-secondary float-right"><?= esc($cd['countdown_target_date']) ?></span>
                                    </h6>
                                </a>
                            </div>
                            <div class="cd-timer justify-content-center align-items-center m-auto">
                                <div class="container mr-0 pr-0">
                                    <div class="flipper flipper-dark flipper-dark-labels" data-reverse="true" data-datetime="<?= esc($cd['countdown_target_date']) ?>" data-template="ddd|HH|ii|ss" data-labels="Days|Hours|Minutes|Seconds" id="<?= esc($cd['countdown_alt']) ?>"></div>
                                    <!-- <div class="flipper flipper-dark flipper-dark-labels" data-reverse="false" data-datetime="2025-03-14 00:00:00" data-template="d|HH|i|s" data-labels="Date|Hours|Minutes|Seconds" id="modalFlipper"></div> -->
                                </div>
                            </div>
                            <div class="cd-description text-left border-top mt-2 mb-8 pl-2 pr-2">
                                <?= esc($cd['countdown_desc']) ?>
                            </div>
                        </li>

                        <?php $i += 1; ?>
                    <?php } ?>

                <?php } ?>
            <?php endforeach; ?>
        <?php } ?>


    <?php } ?>
</ul>


<!-- <div class="container">
    <div class="flipper flipper-dark flipper-dark-labels" data-reverse="true" data-datetime="2024-03-13 00:00:00" data-template="ddd|HH|ii|ss" data-labels="Days|Hours|Minutes|Seconds" id="myFlipper"></div>
    <div class="flipper flipper-dark flipper-dark-labels" data-reverse="false" data-datetime="2025-03-14 00:00:00" data-template="d|HH|i|s" data-labels="Date|Hours|Minutes|Seconds" id="modalFlipper"></div>
</div>

<div class="text-center justify-content-center align-items-center">
    <a href="" class="">
        <h6 class="font-weight-light bg-inherit text-black text-bold p-2 border-top border-bottom mt-3 mb-2">Cd title</h6>
    </a>
    <a class="text-sm">This is countdown descriptions</a>
</div> -->