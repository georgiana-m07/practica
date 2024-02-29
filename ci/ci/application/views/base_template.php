<html>
	<head>
		<title>{TITLE}</title>
		<style>
			body{
				background-color:pink;
				background-image:url({BASE_URL}/img/bg.png);
				background-repeat:repeat-x;
			}
			
			p{
				font-size: 14px;
				font-family:Verdana;
			}
			
			.text_subliniat{
				text-decoration:underline;
				text-transform:uppercase;
			}
			#text_rosu{
				color:red;
			}
			td { 
				background-color:pink;
			}
			.textVerde{
				color:green !important;			
			}
			#boxUser{
				padding: 5px;
				border: 3px double #000;			
			}
			td input{
				margin:10px;
			}
		</style>
	</head>
	
	<body>
	
		<p style="font-style:italic">Nullam non mi congue, <b id="text_rosu">hendrerit</b> odio eget, <span class="text_subliniat">aliquam nunc. Suspendisse porttitor lacus eu</span> mi luctus, at convallis sapien ultrices. Sed libero est, ullamcorper cursus ultricies in, facilisis non leo. Fusce maximus lobortis gravida. Nulla euismod tellus risus, at molestie nulla porta id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras a tortor id lorem ornare lobortis.</p>
	<hr/>
	<a href="{SITE_URL}">Acasa </a> || <a href="{SITE_URL}/welcome/pag2" >Pag 2</a>
	<br style="clear:both"/>
	{CONTENT}	
		<hr/>
	Copyright &copy; {YEAR}
	
	</body>

</html>