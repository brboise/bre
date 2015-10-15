<?php
/**
 * Template Name: Allocator
 *
 * @package     Total
 * @subpackage  Templates
 * @author      Alexander Clarke
 * @copyright   Copyright (c) 2015, WPExplorer.com
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 * @version     2.1.0
 */
get_header(); ?>

    <div id="content-wrap" class="container clr">

 
        
        


    <div id="primary"  class="content-area clr">
        

        <?php wpex_hook_content_before(); ?>

        <main id="content" class="site-content clr" role="main">

            <?php wpex_hook_content_top(); ?>

        <div class="main">
                <style>
                    /* move to full site */
                    
                    .header .primaryNav {
                        border-top: 1px solid #3a3a3a;
                        background: #242424
                        /* #393536 */
                        
                        url(<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/img/global/horiz_rule.gif) 0 bottom repeat-x;
                    }
                    
                    .header .level_1 li,
                    .header .level_2 li,
                    .tertiaryNav .level_3 li {
                        background: url(<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/nav_rule2.gif) right 6px no-repeat;
                    }
                    
                    .header .navRule {
                        border-bottom: 1px solid #000;
                        height: 1px;
                        width: 100%;
                    }
                    
                    .topWrap {
                        background: #242424
                        /* #231f20 */
                        
                        url(<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/stripes2.png) -145px -120px no-repeat;
                    }
                    
                    .header .level_1 a:hover,
                    .header .level_1 li.hovered a {
                        color: #BE9E00;
                    }
                    
                    .tagline {
                        border-bottom: 1px solid #000;
                        margin-bottom: 0px;
                    }
                    
                    .footer {
                        background: #242424
                        /* #322E2F */
                        
                        ;
                    }
                    
                    .footer .sitemap {
                        padding-top: 10px;
                        border-bottom: 1px solid #000;
                        border-top: 1px solid #505050;
                    }
                    
                    .footer .level_2 {
                        border: none;
                    }
                    
                    .footer .sitemap a {
                        border-bottom: none;
                        margin-bottom: 0;
                        color: #C8C9CB;
                        a: hover
                    }
                    
                    .footer .footnotes {
                        border-top: 1px solid #505050;
                        padding-top: 20px;
                        margin-top: 0;
                    }
                    /* end move to full site */
                    
                    #implementing_alts_form table tr td {
                        border: 1px solid #ddd !important;
                        border-width: 1px 0 !important;
                        background-color: whitesmoke !important;
                        padding: 6px 0 3px !important;
                        height: 40px;
                        vertical-align: middle;
                        color: #666;
                        font-size: 12px;
                    }
                    
                    #implementing_alts_form table tr td input.text {
                        border: 1px solid #e1e1e1;
                        height: 25px;
                        width: 30px;
                        position: relative;
                        top: -1px;
                    }
                    
                    #implementing_alts_form table tr td.borderLeft {
                        border-width: 1px 0 1px 1px !important;
                        padding-left: 20px !important;
                        padding-right: 10px !important;
                        width: 15px;
                    }
                    
                    #implementing_alts_form table tr td.borderRight {
                        border-width: 1px 1px 1px 0 !important;
                        padding-right: 20px !important;
                    }
                    /* stats table */
                    
                    table.stats {
                        font-size: 12px;
                    }
                    
                    table.stats tr.alt {
                        background-color: transparent;
                    }
                    
                    table.stats .key {
                        font-size: 11px;
                    }
                    
                    table.alts,
                    table.sb {
                        border-top: 6px solid red !important;
                    }
                    
                    table.alts {
                        border-top-color: #6693bc !important;
                    }
                    
                    table.sb {
                        border-top-color: #868686 !important;
                    }
                    
                    h3.sb,
                    h3.alts {
                        font-family: Helvetica, Arial, sans-serif;
                        font-size: 12px;
                    }
                    
                    h3.sb {
                        color: #868686
                    }
                    
                    h3.alts {
                        color: #6693bc
                    }
                    
                    table.stats th {
                        font-family: Helvetica;
                        text-transform: none;
                        font-weight: normal;
                        border-bottom: 1px solid #B5B5B5 !important;
                    }
                    
                    table.stats td.key {
                        border-bottom: 1px solid #ddd !important;
                    }
                    
                    table.stats td.sbCol,
                    table.stats td.altCol {
                        text-align: right;
                        color: #222;
                        border-bottom: 1px solid #ddd !important;
                        border-left: 1px solid #ddd !important;
                    }
                    
                    table.stats td.sbCol,
                    table.stats th.sbCol {
                        color: #868686;
                        background-color: transparent;
                        border-color: inherit;
                    }
                    
                    table.stats td.altCol,
                    table.stats th.altCol {
                        color: #6693bc;
                        background-color: transparent;
                        border-color: inherit;
                    }
                    
                    .ia_key {
                        display: inline-block;
                        zoom: 1;
                        *display: inline;
                        border: 1px solid transparent;
                        position: relative;
                        top: 1px;
                        overflow: hidden;
                    }
                    
                    .ia_key.ia_key_hedged {
                        background-color: #3ebeba
                    }
                    
                    .ia_key.ia_key_private {
                        background-color: #aaad39
                    }
                    
                    .ia_key.ia_key_stock {
                        background-color: #efc223
                    }
                    
                    .ia_key.ia_key_bond {
                        background-color: #Df793d
                    }
                    
                    .ia_key_default,
                    .ia_key_model {}
                    
                    .ia_key.ia_key_default {
                        background-color: #868686;
                    }
                    
                    .ia_key.ia_key_model {
                        background-color: #6693bc;
                    }
                    
                    .implementing_alts {
                        padding: 15px;
                        background-color: transparent;
                        -webkit-box-shadow: none;
                        -moz-box-shadow: none;
                        box-shadow: none;
                    }
                    
                    #implementing_alts_form table td,
                    .mockForm table td {
                        border-bottom: 1px solid #dddddd;
                        font-size: 12px;
                        padding: 5px 0 !important;
                        text-align: left;
                        vertical-align: middle;
                    }
                    
                    .no_border_bottom td {
                        border-bottom: none !important;
                    }
                    
                    #implementing_alts_form table,
                    .mockForm table {
                        width: 75%;
                    }
                    
                    #tool_portfolios {
                        background-image: url(<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/tool_bkg.png);
                        margin: -15px -15px -25px;
                        padding: 15px 15px 50px;
                        background-position: 50% 100%;
                        background-repeat: no-repeat;
                    }
                    
                    #tool_portfolios table {
                        margin: 0 auto;
                        background-color: #eee;
                        width: 100%;
                    }
                    
                    #tool_portfolios table td.spacer {
                        width: 15%;
                    }
                    
                    .tool_portfolio {
                        background-color: #fff;
                        width: 329px;
                        position: relative;
                        min-width: 0;
                        color: #222;
                        float: left;
                        margin-right: 15px;
                    }
                    
                    .tool_portfolio#model_portfolio {
                        margin-right: 0;
                    }
                    
                    h2.mockLiq {
                        background-color: #000;
                    }
                    
                    #implementing_alts_form {
                        float: none;
                        width: auto;
                    }
                    
                    .pie {
                        width: 185px;
                        height: 185px;
                        margin: 0 auto 20px;
                    }
                    
                    .ia_bar {
                        margin: 45px 0 0;
                        top: auto;
                        left: auto;
                        width: 100%;
                        border: none;
                        background-image: none;
                        height: 30px;
                    }
                    
                    .ia_bar .color-wrapper {
                        background-color: #efefef;
                        position: relative;
                        margin: 0 30px 2px;
                    }
                    
                    .ia_bar .color {
                        background-color: #6693bc;
                        height: 10px;
                        width: 0;
                        position: relative;
                    }
                    
                    .ia_bar .color img,
                    .ia_key img {
                        display: none;
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        right: 0px;
                        bottom: 0px;
                        width: 100%;
                        height: 100%;
                    }
                    
                    .ia_key img {
                        width: auto;
                        height: auto;
                    }
                    
                    .ia_bar .color.initial {}
                    
                    #implementing_alts_form table td {
                        border-bottom: 1px solid #ddd;
                    }
                    
                    table tr.total {
                        background-color: #ddd;
                        border-top: 3px double #ddd;
                        color: #222;
                        font-weight: bold;
                    }
                    
                    td .inc_wrap {
                        text-align: right;
                    }
                    
                    #tool_results {
                        margin: 15px 0;
                        padding: 15px;
                    }
                    
                    #tool_results h2 {
                        font-family: Arial;
                        font-size: 11px;
                    }
                    
                    #tool_results .tool_results_left {
                        width: 315px;
                        float: left;
                        position: relative;
                        margin-right: 15px;
                    }
                    
                    #tool_results .tool_results_right {
                        float: right;
                        width: 325px;
                        position: relative;
                    }
                    
                    .disabled {
                        color: #aaa;
                    }
                    
                    .compare {
                        background-color: #eee;
                        border: 1px solid #ccc;
                        display: block;
                        font-family: Helvetica;
                        text-align: center;
                        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
                        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
                        text-transform: uppercase;
                        padding: 4px 4px 3px;
                        color: #555;
                        cursor: pointer;
                        font-weight: bold;
                        font-size: 12px;
                        text-shadow: 0 1px 0px #fff;
                        letter-spacing: 1px;
                        background-image: linear-gradient(to top, #ededed, #f7f7f7);
                        margin-top: 10px;
                    }
                    
                    .compare:hover {
                        color: #000;
                    }
                    
                    .compare.err {
                        color: #bbb !important;
                        cursor: default !important;
                    }
                    
                    #implementing_alts_form input.text {
                        height: 18px;
                        padding: 0 7px;
                    }
                    
                    #tool_results_key {
                        font-family: Arial;
                        color: #222;
                        padding: 35px 15px 0;
                    }
                    
                    #tool_results_key .alts {
                        color: #6693bc;
                    }
                    
                    #tool_results_key .stocks_bonds {
                        color: #868686;
                    }
                    
                    .ia_bar_wrapper {
                        float: none;
                        width: 100%;
                    }
                    
                    .ia_bar .color .label {
                        background: url("<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/tool_value_pointer.png") no-repeat scroll 50% -30px transparent;
                        bottom: -30px;
                        color: #222222;
                        height: 30px;
                        left: auto;
                        line-height: 20px;
                        padding: 9px 4px 0;
                        right: -27px;
                        text-align: center;
                        top: auto;
                        width: 53px;
                    }
                    
                    .ia_bar .initial .label {
                        bottom: auto;
                        top: -30px;
                        background-position: 50% 0;
                        padding: 0 4px 9px;
                    }
                    
                    #tool_results_wrapper {
                        margin: -15px;
                    }
                    
                    .alert {
                        background-color: darkOrange;
                        color: #fff;
                        position: fixed;
                        top: 5px;
                        left: 5px;
                    }
                    
                    #implementing_alts_form table,
                    .mockForm table {
                        width: 80%;
                        margin: 0;
                        float: left;
                    }
                    
                    .bracket {
                        height: 50px;
                        border: 1px solid #ddd;
                        border-width: 1px 1px 1px 0;
                        width: 5px;
                        margin: 30px 0 20px 10px;
                        float: left;
                        position: relative;
                    }
                    
                    .bracket .readout {
                        color: #DDDDDD;
                        font-family: Helvetica, Arial, sans-serif;
                        height: 20px;
                        margin-top: -10px;
                        position: absolute;
                        top: 50%;
                        left: 15px;
                        font-size: 12px;
                        font-weight: bold;
                        color: #bbb;
                    }
                    
                    .ia_bar .ia_bar_max,
                    .ia_bar .ia_bar_min {
                        border: none;
                        position: absolute;
                        height: 20px;
                        line-height: 20px;
                        top: 50%;
                        margin-top: -10px;
                        left: 0;
                        width: 20px;
                        text-align: center;
                        padding: 0;
                        text-align: right;
                    }
                    
                    .ia_bar .ia_bar_max {
                        right: 0;
                        left: auto;
                        text-align: left;
                    }
                    
                    .alert_100 {
                        color: #fff;
                    }
                    
                    .err {
                        color: #800;
                    }
                    
                    .instructions {
                        font-style: italic;
                    }
                    
                    .err {
                        color: #BE1E42;
                    }input.text
                    
                    .callout {
                        border-bottom: none;
                    }
                    
                    .tool_portfolio {
                        background-color: transparent;
                    }
                    
                    .ia_bar .color.initial {
                        background-color: #868686
                    }
                    /* SML additions, 6/19/2013 */
                    
                    #tool_results_key .ia_key {
                        height: 11px;
                        width: 11px;
                    }
                    
                    .ia_g10k_header {
                        margin-top: 30px;
                    }
                    
                    #tool_portfolios {
                        padding: 15px 15px 55px;
                    }
                    
                    .ia_bar .color .label {
                        line-height: 21px;
                    }
                    
                    .ia_bar .initial .label {
                        padding: 1px 4px 8px;
                    }
                    
                    .main .callout {
                        margin-bottom: 15px;
                    }
                </style>

    
    <div class="implementing_alts">
        <div id="tool_portfolios">
            <div class="tool_portfolio" id="default_portfolio">
                <form id="implementing_alts_form" action="" method="post">
                    <input type="submit" style="position:absolute; top:-9999px;left:-9999px;" />
                    <h3 class="sb">Stocks &amp; Bonds</h3>
                    <table class="sb">
                        <tr>
                            <td class="borderLeft keyWrapper">
                                <div class="ia_key ia_key_stock">
                                    <img src="<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/ia_colors/clr_stocks.jpg" />
                                </div>
                            </td>
                            <td>
                                <i>Stocks</i>
                            </td>
                            <td class="borderRight">
                                <div class="inc_wrap">
                                    <input type="text" name="stock" value="50" class="text" /> %


                                </div>
                            </td>
                        </tr>
                        <tr class="bonds">
                            <td class="borderLeft keyWrapper">
                                <div class="ia_key ia_key_bond">
                                    <img src="<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/ia_colors/clr_bonds.jpg" />
                                </div>
                            </td>
                            <td>
                                <i>Bonds</i>
                            </td>
                            <td class="borderRight">
                                <div class="inc_wrap">
                                    <input type="text" name="bonds" value="30" class="text" /> %


                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="bracket">
                        <div class="readout sbReadout">80%</div>
                    </div>
                    <div class="clear"></div>
                    <h3 class="alts">Real Estate</h3>
                    <table id="implementing_alts_input" class="alts">
                        <tr class="">
                            <td class="borderLeft keyWrapper">
                                <div class="ia_key ia_key_hedged">
                                    <img src="<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/ia_colors/clr_hedge.jpg" />
                                </div>
                            </td>
                            <td class="indented">
                                <i>Public Real Estate</i>
                            </td>
                            <td class="borderRight">
                                <div class="inc_wrap">
                                    <input type="text" name="hedged_strategies" value="10" class="text" /> %


                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="borderLeft keyWrapper">
                                <div class="ia_key ia_key_private">
                                    <img src="<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/ia_colors/clr_private.jpg" />
                                </div>
                            </td>
                            <td class="indented">
                                <i>Private Real Estate</i>
                            </td>
                            <td class="borderRight">
                                <div class="inc_wrap">
                                    <input type="text" name="private_investments" value="10" class="text" /> %


                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="bracket">
                        <div class="readout altsReadout">20%</div>
                    </div>
                </form>
                <div style="display:none">
                    <h2 class="mockLiq">60% STOCK / 40% BONDS</h2>
                    <div class="pie" id="default_holder"></div>
                    <div class="mockForm">
                        <table id="">
                            <tr>
                                <td class="spacer"></td>
                                <td></td>
                                <td class="disabled">
                                    <b>Alternatives</b>
                                </td>
                                <td>
                                    <span class="ia_readout disabled">0</span>
                                </td>
                                <td class="spacer"></td>
                            </tr>
                            <tr class="no_border_bottom">
                                <td class="spacer"></td>
                                <td></td>
                                <td class="indented disabled">
                                    <i>Hedge Fund Strategies</i>
                                </td>
                                <td width="33">
                                    <span class="ia_readout disabled">0</span>
                                </td>
                                <td class="spacer"></td>
                            </tr>
                            <tr>
                                <td class="spacer"></td>
                                <td></td>
                                <td class="indented disabled">
                                    <i>Private Investments</i>
                                </td>
                                <td>
                                    <span class="ia_readout disabled">0</span>
                                </td>
                                <td class="spacer"></td>
                            </tr>
                            <tr>
                                <td class="spacer"></td>
                                <td>
                                    <div class="ia_key ia_key_stock"></div>
                                </td>
                                <td>
                                    <b>Stock</b>
                                </td>
                                <td>
                                    <span class="ia_readout">60</span>
                                </td>
                                <td class="spacer"></td>
                            </tr>
                            <tr class="bonds">
                                <td class="spacer"></td>
                                <td>
                                    <div class="ia_key ia_key_bond"></div>
                                </td>
                                <td>
                                    <b>Bonds</b>
                                </td>
                                <td>
                                    <span class="ia_readout">40</span>
                                </td>
                                <td class="spacer"></td>
                            </tr>
                            <!--tr class="total"><td class="spacer"></td><td>&nbsp;</td><td><b>Total</b></td><td><span class="ia_readout">100</span></td><td class="spacer"></td></tr-->
                        </table>
                    </div>
                </div>
            </div>
            <div class="tool_portfolio" id="model_portfolio">
                <div class="pie" id="holder"></div>
                <p class="instructions">
                    <span class="alert_100">Adjust allocation values to equal 
                                                                                        <b>100%</b>
                                                                                        <br />
                                                                                    </span> Your current total is
                    <b class="all_total_wrapper">
                                                                                        <span id="all_total">100</span>%
                                                                                    </b>.


                </p>
                <div class="compare">Calculate Your Results</div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="tool_results_wrapper">
            <div id="tool_results_key">
                <div class="ia_key ia_key_default">
                    <img src="<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/ia_colors/grey.jpg" />
                </div>
                <span class="stocks_bonds">Traditional Portfolio</span> &nbsp; &nbsp;


                <div class="ia_key ia_key_model">
                    <img src="<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/ia_colors/magenta.jpg" />
                </div>
                <span class="alts">My Portfolio</span>
            </div>
            <div id="tool_results">
                <div class="tool_results_left">
                    <h2>Portfolio Statistics</h2>
                    <table class="stats stripe">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th class="rightAlign sbCol">60% Stocks /
                                    <br />40% Bonds
                                </th>
                                <th class="rightAlign altCol">My
                                    <br />Portfolio
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr data-stat="cumulative_return"><td class="leftAlign key">Cumulative Return</td><td class="value_init leftAlign sbCol"></td><td class="value leftAlign altCol"></td></tr> -->
                            <tr data-stat="annualized_return">
                                <td class="leftAlign key">Annualized Return</td>
                                <td class="value_init leftAlign sbCol"></td>
                                <td class="value leftAlign altCol"></td>
                            </tr>
                            <tr data-stat="stddev">
                                <td class="leftAlign key">Annualized Std. Dev.</td>
                                <td class="value_init leftAlign sbCol"></td>
                                <td class="value leftAlign altCol"></td>
                            </tr>
                            <tr data-stat="correlation">
                                <td class="leftAlign key">Correlation (vs. S&amp;P 500)</td>
                                <td class="value_init leftAlign sbCol"></td>
                                <td class="value leftAlign altCol"></td>
                            </tr>
                            <!-- <tr data-stat="best_12_months"><td class="leftAlign key">Best 12 Months</td><td class="value_init leftAlign sbCol"></td><td class="value leftAlign altCol"></td></tr><tr data-stat="worst_12_months"><td class="leftAlign key">Worst 12 Months</td><td class="value_init leftAlign sbCol"></td><td class="value leftAlign altCol"></td></tr> -->
                            <tr data-stat="g10k">
                                <td class="leftAlign key">Growth of $10,000</td>
                                <td class="value_init leftAlign sbCol"></td>
                                <td class="value leftAlign altCol"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="ia_bars" class="tool_results_right">
                    <div class="ia_bar_wrapper">
                        <h2>Annualized Return</h2>
                        <div data-min="0" data-max="20" id="ia_bar_return" class="ia_bar">
                            <div class="ia_bar_max">20%</div>
                            <div class="ia_bar_min">0%</div>
                            <div class="color-wrapper">
                                <div class="color active initial">
                                    <img src="<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/ia_colors/grey.jpg" />
                                    <div class="label"></div>
                                </div>
                            </div>
                            <div class="color-wrapper">
                                <div class="color active">
                                    <img src="<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/ia_colors/magenta.jpg" />
                                    <div class="label"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="ia_bar_wrapper">
                        <h2>Standard Deviation</h2>
                        <div data-min="0" data-max="20" id="ia_bar_stddev" class="ia_bar">
                            <div class="ia_bar_max">20%</div>
                            <div class="ia_bar_min">0%</div>
                            <div class="color-wrapper">
                                <div class="color active initial">
                                    <img src="<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/ia_colors/grey.jpg" />
                                    <div class="label"></div>
                                </div>
                            </div>
                            <div class="color-wrapper">
                                <div class="color active">
                                    <img src="<?php echo site_url(); ?>/wp-content/plugins/bluerock-allocator/css/images/ia_colors/magenta.jpg" />
                                    <div class="label"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <h2 class="ia_g10k_header">Growth of $10,000 (January 1, 2004 - December 31, 2013)</h2>
                <div id="implementing_alts_g10k" style="height:250px; width:675px; position:relative;"></div>
            </div>
        </div>
        <div style="display:none" class="implementing_alts_data">12/31/2004TAB10.88TAB4.49TAB31.58TAB14.48BR12/31/2005TAB4.91TAB2.87TAB12.16TAB20.06BR12/31/2006TAB15.79TAB1.96TAB35.06TAB16.59BR12/31/2007TAB5.49TAB10.21TAB-15.69TAB15.84BR12/31/2008TAB-37.00TAB20.10TAB-37.73TAB-6.46BR12/31/2009TAB26.46TAB-11.12TAB27.99TAB-16.86BR12/31/2010TAB15.06TAB8.46TAB27.95TAB13.11BR12/31/2011TAB2.11TAB15.07TAB8.28TAB14.26BR12/31/2012TAB16.00TAB3.80TAB19.70TAB10.54BR12/31/2013TAB32.39TAB-9.10TAB2.86TAB10.99</div>
    </div>
    <br />
    <p></p>
    <div class="clear"></div>
    <div style="clear:both;"></div>

<!-- .main -->
<div class="clear"></div>

<!-- .content -->
</div>

        </main><!-- #content -->

        <?php wpex_hook_content_after(); ?>

    </div><!-- #primary -->

                <?php wpex_hook_primary_after(); ?>
              

</div><!-- .container -->

<?php get_footer(); ?>