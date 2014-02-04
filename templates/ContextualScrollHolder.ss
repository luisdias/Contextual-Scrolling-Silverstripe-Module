<!doctype html>
<html>
    <!--
        Silverstripe module
        Contextual Scroll by Luis E. S. Dias ( www.smartbyte.com.br )
        License : MIT License
        Based on jQuery plugin Sausage by Christopher Cliff
        http://christophercliff.github.com/sausage/
    -->    
    <head>
        <% base_tag %>
        <title>$Title</title>
        <link rel="stylesheet" type="text/css" href="{$BaseHref}contextualscroll/css/sausage.css">
        <link rel="stylesheet" type="text/css" href="{$BaseHref}contextualscroll/css/default.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>        
        <script type="text/javascript" src="{$BaseHref}contextualscroll/javascript/jquery.sausage.js"></script>        
    </head>
    <style>
        .page {
        <% if FontSize %>
            font-size: {$FontSize}px;
        <% end_if %>
        <% if Height %>
            height: {$Height}px;
        <% end_if %>
        <% if Width %>
            width: {$Width}px;
        <% end_if %>
        <% if Padding %>
            padding: {$Padding}px; 
        <% end_if %>
        <% if MarginBottom %>
            margin-bottom: {$MarginBottom}px;
        <% end_if %>
        <% if BackgroundColor %>
            background-color: {$BackgroundColor};
        <% end_if %>
        }
    </style>
    <script type="text/javascript">
        $(function(){
            $(window)
                .sausage();
        });
    </script>    
    <body>
        <div id="app">
            <ol class="page-set">
                <% loop Children %>
                <li class="page" data-name="$title">
                    $Content
                </li>
                <% end_loop %>
            </ol>
        </div><!-- /app -->
    </body>
</html>