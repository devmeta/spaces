<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($meta->title) ? $meta->title . ' - Spaces': 'Spaces';?></title>
	<meta charset="utf-8">
	<meta name="keywords" content="<?php echo isset($meta->title) ? $meta->title : '';?>" />
	<meta name="description" content="<?php echo isset($meta->title) ? $meta->title : '';?>" />
    <meta property="og:type" content="<?php echo isset($meta->og_type) ? $meta->og_type : 'article';?>" />
    <meta property="og:title" content="<?php echo isset($meta->og_title) ? $meta->og_title : '';?>" />
    <meta property="og:description" content="<?php echo isset($meta->og_description) ? $meta->og_description : '';?>" />
    <meta property="og:image" itemprop="image primaryImageOfPage" content="<?php echo isset($meta->og_image) ? $meta->og_image : '';?>" />
 	<link rel="shortcut icon" href="/assets/favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="/min/?g=css.default"> 


        <style>
            .section-header .separator {
                margin: 0em auto 2em;
            }
            .space-50{
                height: 50px;
                width: 100%;
                display: block;
                content: "";
            }
            .section .parallax > img{
                width: 100%;
                min-width: 0;
                min-height: 0;
            }
            .pattern-image:after{
                opacity: .2;
/*                 background: #111; */
            }
            .section-header h1{
                text-shadow: -2px 2px 30px rgba(0, 0, 0, 0.25), -2px 4px 14px rgba(0, 0, 0, 0.1);
            }
            .section-header h5{
                  text-shadow: 0px 0px 11px rgba(0, 0, 0, 0.3);
            }
            .section-header .content{
                top: 42%;
            }
            .section-we-are-1 .title{
                max-width: 960px;
            }
            .card .icon ~ h3{
                margin-bottom: 10px;
            }
            .section-with-hover .project .content{
                text-align: center;
            }
            .section-with-hover .project .over-area{
                background: rgba(0, 0, 0, .83);
            }
            .section-clients-2{
                padding: 6em 0 1em;
            }
            .section-clients-2 .nav-text li {
                margin: 0 15px 10px 15px;
            }
            .section-contact-3 .contact-container .address-container{
                width: 28%;
                background-color: #FFFFFF;
                height: 470px;
                top: 50px;
                padding: 20px;
            }
            .section-contact-3 .address{
                margin-top: 40px;
            }
            .section-we-made-3 .content{
                padding: 0 15px;
                text-align: center;
            }
            .section-we-made-3 .over-area .content h3{
                margin: 5px 0 20px;
            }
            .section-we-made-3 .over-area .content p{
                font-size: .9em;
                color: #898989;
            }
            .section-we-made-3 .over-area .content h5{
                margin-bottom: 0px;
                margin-top: 20px;
            }

            .btn-black{
                letter-spacing: 1px;
                margin-top: 20px;
            }

            .copyright a{
                color: #FFFFFF;
            }

            .section-team-2 .team .member p {
              font-size: .9em;
              padding: 0 10px;
            }

            .card{
                margin-bottom: 30px;
            }
            .section-with-hover .project .over-area.over-area-sm .content p {
              font-size: .85em;
            }
            .section-with-hover .project .over-area.over-area-sm .content h4 {
              font-size: 1.6em;
            }
            .logo{
                display: block;
                margin: 0 auto 10px;
                width: 61px;
                height: 61px;
                border-radius: 50%;
                border: 1px solid #333333;
                overflow: hidden;
            }
            .logo img{
                width: 100%;
                height: 100%;
            }
            .loading .loading-container p {
                font-size: 30px;
                width: 220px;
                margin: 0 auto;
                margin-bottom: 30px;
                height: 35px;
            }
            .loading .logo{
                opacity: 0;
                transition: all 0.9s;
                -webkit-transition: all 0.9s;
                -moz-transition: all 0.9s;
            }
            .loading .logo.visible{
                opacity: 1;
            }
            .sharrre.btn{
                color: #444444;
                border-color: #444444;
                font-weight: 400;
            }
            .address .col-md-6{
                padding-right: 7px;
                padding-left: 7px;
            }
            a.img-class{
                opacity: 1;
            }
            a.img-class:hover{
                opacity: .9;
            }

            .btn-lg{
                padding: 14px 10px;
            }

            .typed-text {
			  display: none;
			}

			.loading:after,
			.loading:before {
			  content:'';
			  display:block;
			  position:absolute;
			  z-index:10;
			}

			.loading:before {
			  background:transparent;
			  left:0;
			  top:0;
			  width:100%;
			  height:100%;
			}

			.loading:after {
			  background:rgba(0,0,0,.2) url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjwhLS0gQ3JlYXRlZCB3aXRoIElua3NjYXBlIChodHRwOi8vd3d3Lmlua3NjYXBlLm9yZy8pIC0tPgoKPHN2ZwogICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iCiAgIHhtbG5zOmNjPSJodHRwOi8vY3JlYXRpdmVjb21tb25zLm9yZy9ucyMiCiAgIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyIKICAgeG1sbnM6c3ZnPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIgogICB4bWxuczpzb2RpcG9kaT0iaHR0cDovL3NvZGlwb2RpLnNvdXJjZWZvcmdlLm5ldC9EVEQvc29kaXBvZGktMC5kdGQiCiAgIHhtbG5zOmlua3NjYXBlPSJodHRwOi8vd3d3Lmlua3NjYXBlLm9yZy9uYW1lc3BhY2VzL2lua3NjYXBlIgogICBpZD0ic3ZnMzEyMiIKICAgdmVyc2lvbj0iMS4xIgogICBpbmtzY2FwZTp2ZXJzaW9uPSIwLjQ4LjUgcjEwMDQwIgogICB3aWR0aD0iMjQiCiAgIGhlaWdodD0iMjQiCiAgIHNvZGlwb2RpOmRvY25hbWU9ImxvYWRzb3VyY2UyLnN2ZyI+CiAgPG1ldGFkYXRhCiAgICAgaWQ9Im1ldGFkYXRhMzEyOCI+CiAgICA8cmRmOlJERj4KICAgICAgPGNjOldvcmsKICAgICAgICAgcmRmOmFib3V0PSIiPgogICAgICAgIDxkYzpmb3JtYXQ+aW1hZ2Uvc3ZnK3htbDwvZGM6Zm9ybWF0PgogICAgICAgIDxkYzp0eXBlCiAgICAgICAgICAgcmRmOnJlc291cmNlPSJodHRwOi8vcHVybC5vcmcvZGMvZGNtaXR5cGUvU3RpbGxJbWFnZSIgLz4KICAgICAgICA8ZGM6dGl0bGUgLz4KICAgICAgPC9jYzpXb3JrPgogICAgPC9yZGY6UkRGPgogIDwvbWV0YWRhdGE+CiAgPGRlZnMKICAgICBpZD0iZGVmczMxMjYiIC8+CiAgPHNvZGlwb2RpOm5hbWVkdmlldwogICAgIHBhZ2Vjb2xvcj0iI2ZmZmZmZiIKICAgICBib3JkZXJjb2xvcj0iIzY2NjY2NiIKICAgICBib3JkZXJvcGFjaXR5PSIxIgogICAgIG9iamVjdHRvbGVyYW5jZT0iMTAiCiAgICAgZ3JpZHRvbGVyYW5jZT0iMTAiCiAgICAgZ3VpZGV0b2xlcmFuY2U9IjEwIgogICAgIGlua3NjYXBlOnBhZ2VvcGFjaXR5PSIwIgogICAgIGlua3NjYXBlOnBhZ2VzaGFkb3c9IjIiCiAgICAgaW5rc2NhcGU6d2luZG93LXdpZHRoPSIxMTgyIgogICAgIGlua3NjYXBlOndpbmRvdy1oZWlnaHQ9IjcwOCIKICAgICBpZD0ibmFtZWR2aWV3MzEyNCIKICAgICBzaG93Z3JpZD0idHJ1ZSIKICAgICBpbmtzY2FwZTpzbmFwLWJib3g9InRydWUiCiAgICAgaW5rc2NhcGU6b2JqZWN0LW5vZGVzPSJ0cnVlIgogICAgIGlua3NjYXBlOnpvb209IjE2IgogICAgIGlua3NjYXBlOmN4PSI4Ljk3Nzk0NzciCiAgICAgaW5rc2NhcGU6Y3k9IjEwLjczMjQ3NiIKICAgICBpbmtzY2FwZTp3aW5kb3cteD0iNDgyIgogICAgIGlua3NjYXBlOndpbmRvdy15PSIxMjciCiAgICAgaW5rc2NhcGU6d2luZG93LW1heGltaXplZD0iMCIKICAgICBpbmtzY2FwZTpjdXJyZW50LWxheWVyPSJzdmczMTIyIgogICAgIHNob3dndWlkZXM9ImZhbHNlIgogICAgIGlua3NjYXBlOmd1aWRlLWJib3g9InRydWUiCiAgICAgaW5rc2NhcGU6b2JqZWN0LXBhdGhzPSJ0cnVlIgogICAgIGZpdC1tYXJnaW4tdG9wPSIwIgogICAgIGZpdC1tYXJnaW4tbGVmdD0iMCIKICAgICBmaXQtbWFyZ2luLXJpZ2h0PSIwIgogICAgIGZpdC1tYXJnaW4tYm90dG9tPSIwIj4KICAgIDxpbmtzY2FwZTpncmlkCiAgICAgICB0eXBlPSJ4eWdyaWQiCiAgICAgICBpZD0iZ3JpZDMxMzIiCiAgICAgICBlbXBzcGFjaW5nPSI1IgogICAgICAgdmlzaWJsZT0idHJ1ZSIKICAgICAgIGVuYWJsZWQ9InRydWUiCiAgICAgICBzbmFwdmlzaWJsZWdyaWRsaW5lc29ubHk9InRydWUiCiAgICAgICBvcmlnaW54PSItMTQ4cHgiCiAgICAgICBvcmlnaW55PSItMzU4cHgiIC8+CiAgICA8c29kaXBvZGk6Z3VpZGUKICAgICAgIG9yaWVudGF0aW9uPSItMC43MDcxMDY3OCwwLjcwNzEwNjc4IgogICAgICAgcG9zaXRpb249IjEyLDEyIgogICAgICAgaWQ9Imd1aWRlNDEwNSIgLz4KICA8L3NvZGlwb2RpOm5hbWVkdmlldz4KICA8cGF0aAogICAgIHN0eWxlPSJjb2xvcjojMDAwMDAwO2ZpbGw6I2ZmZmZmZjtmaWxsLW9wYWNpdHk6MTtmaWxsLXJ1bGU6bm9uemVybztzdHJva2U6bm9uZTtzdHJva2Utd2lkdGg6MTI7bWFya2VyOm5vbmU7dmlzaWJpbGl0eTp2aXNpYmxlO2Rpc3BsYXk6aW5saW5lO292ZXJmbG93OnZpc2libGU7ZW5hYmxlLWJhY2tncm91bmQ6YWNjdW11bGF0ZSIKICAgICBkPSJNIDEyIDAgTCAxMiA1IEMgMTUuODY1OTkzIDUgMTkgOC4xMzQwMDY3IDE5IDEyIEwgMjQgMTIgQyAyNCA1LjM3MjU4MyAxOC42Mjc0MTcgMCAxMiAwIHogIgogICAgIGlkPSJwYXRoMzk1NiIgLz4KICA8cGF0aAogICAgIGlua3NjYXBlOmNvbm5lY3Rvci1jdXJ2YXR1cmU9IjAiCiAgICAgc3R5bGU9Im9wYWNpdHk6MC40O2NvbG9yOiMwMDAwMDA7ZmlsbDojZmZmZmZmO2ZpbGwtb3BhY2l0eToxO2ZpbGwtcnVsZTpub256ZXJvO3N0cm9rZTpub25lO3N0cm9rZS13aWR0aDoxMjttYXJrZXI6bm9uZTt2aXNpYmlsaXR5OnZpc2libGU7ZGlzcGxheTppbmxpbmU7b3ZlcmZsb3c6dmlzaWJsZTtlbmFibGUtYmFja2dyb3VuZDphY2N1bXVsYXRlIgogICAgIGQ9Ik0gMTIsMCBDIDUuMzcyNTgzLDAgMCw1LjM3MjU4MyAwLDEyIGMgMCwzLjE4MjU5OCAxLjI0OTU2Myw2LjI0OTU2MyAzLjUsOC41IDIuMjUwNDM3LDIuMjUwNDM3IDUuMzE3NDAyLDMuNSA4LjUsMy41IDMuMTgyNTk4LDAgNi4yNDk1NjMsLTEuMjQ5NTYzIDguNSwtMy41IEMgMjIuNzUwNDM3LDE4LjI0OTU2MyAyNCwxNS4xODI1OTggMjQsMTIgbCAtNSwwIGMgMCwzLjg2NTk5MyAtMy4xMzQwMDcsNyAtNyw3IEMgOC4xMzQwMDY4LDE5IDUsMTUuODY1OTkzIDUsMTIgNSw4LjEzNDAwNjcgOC4xMzQwMDY4LDUgMTIsNSB6IgogICAgIGlkPSJwYXRoMzE3NCIKICAgICBzb2RpcG9kaTpub2RldHlwZXM9ImNjY2NjY2NjY2NjIiAvPgo8L3N2Zz4K) 50% 50% no-repeat;
			  left:50%;
			  top:50%;
			  margin:-20px 0 0 -20px;
			  width:40px;
			  height:40px;
			  border-radius:50%;
			  -webkit-animation: rotate 1s linear infinite;
			  -moz-animation: rotate 1s linear infinite;
			  -ms-animation: rotate 1s linear infinite;
			  animation: rotate 1s linear infinite;
			}

			@-webkit-keyframes rotate { from { -webkit-transform: rotate(0deg); } to { -webkit-transform: rotate(360deg); } }
			   @-moz-keyframes rotate { from { -moz-transform: rotate(0deg); } to { -moz-transform: rotate(360deg); } }
			    @-ms-keyframes rotate { from { -ms-transform: rotate(0deg); } to { -ms-transform: rotate(360deg); } }
	        @keyframes rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }  
			.hidden-bar {
			  position: fixed;
			  display: table;
			  width: 70px;
			  height: 100%;
			  cursor: pointer;
			  text-align: center;
			  z-index: 100;
			  left: -65px;
			  top: 0;
			  bottom: 0;
			  transition: left 300ms;
			}

			.hidden-panel {
			  display: table-cell;
			  vertical-align: middle;
			}

			.hidden-bar a {
			  display: table-cell;
			  display: block;
			}

			.hidden-bar span {
			  padding: 0 20px;
			  color: rgba(250,250,250,0.8);
			  font-size: 40px;
			  text-shadow: 0 0 2px rgba(0,0,0,0.8);
			}

			.hidden-bar:hover {
			  left: 0;
			}


            .skewed-bg{
              background: #00B285;
              padding: 200px 0;
              opacity: 0.9;
              -webkit-transform: skew(0deg, -10deg);
              transform: skew(0deg, -10deg);
              margin-top: -350px;
            }
            .skewed-bg .content {
              -webkit-transform: skew(0deg, 10deg);
              transform: skew(0deg, 10deg);
              text-align: center;
            }
            .skewed-bg .content .title {
              padding-top: 100px;
              font-weight: normal;
            }
            .skewed-bg .content .text {
              width: 60%;
              margin: 25px auto;
              color: #ccfff2;
            }



            @media (max-width: 1200px){
                .section-contact-3 .contact-container .address-container{
                    height: 520px;
                }
            }
        </style>

</head>
<body class="<?php print !empty(segments(1)) ? segments(1) : 'landing';?>">
	<div class="wrapper">
		<?php if($_SERVER['REMOTE_ADDR'] != '127.0.0.1') include SP . 'app/views/shared/analytics.php';?>
		<?php include SP . 'app/views/shared/header.php';?>
		<div class="content"><?php echo $content;?></div>
	</div>
    <?php include SP . 'app/views/shared/footer.php';?>
	<script type="text/javascript" src="/min/?g=js.default"></script>
</body>
</html>